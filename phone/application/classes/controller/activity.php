<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Activity
 * @desc 活动总控制器
 */
class Controller_Activity extends Stourweb_Controller
{
    private $_typeid = 88;   //产品类型
    private $appId = 'wxdf8497303505ae0d';
    private $appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';
    private  $activity_id  =7;   //  加入 activity id 用于 判断 走那套活动流程 保留 原来内容
    private  $redye    = 18;
    private $overtime  ="2016-11-06 17:00";
    private $begintime  ="2016-11-03 16:35";

    private  $admin   = 'feng';// 用于 活动中的调试链接
    /**
     * 问题，如果用户已经兑换但是还是要求重新选择奖品怎么办。
     * 用户能不能给自己助力
     */
    /**
     *  1、一个微信只能助力一次
        2、选择一个礼品后会有个弹窗，告诉用户助力不够依然可以兑换其他礼品
        3、非石家庄用户助力的时候会有个弹窗
        4、助力过了再给其他人点助力的时候，会有个弹窗
     * 5.一个ip下最多让投20票或者10票，防止刷票
     * 6.在兑换奖品的时候一定要检测，是否有足够的助力值，不单单是在页面上显示
     * 7.备用域名 activity.aitto.net/activity.chejiache.com
     * 8.要及时修改微信后台对应的auth权限的域名
     */
    /**
     * 1.对应有一个奖品表(prize)  id,name,num,price,pay(助力值),pic,content
     * 2.参加活动人(player)  id,openid,getpay(得到的助力数),addtime（参加时间）,expect_pid(期望要的奖品),exchange_pid(兑换的奖品，默认为0【未兑换】),phone
     * 3.助力表(helper) id,prid,openid,nickname(微信昵称),helpime(助力时间)
     *
     */
    /*
     *      错误 代码
     *      1111   未关注  1112  不在石家庄地区  1113 已参与活动 1114 未参与活动
     *
     *      activity model 中的函数 参照 acticity.txt
     */
    public function before()
    {
        parent::before();

       // $channelname = Model_Nav::get_channel_name($this->_typeid);
        //分享用到的参数
        $signPackage = $this->GetSignPackage();
        $this->assign('signPackage',$signPackage);
        $this->assign('typeid',$this->_typeid);
      //  $this->assign('channelname',$channelname);
    }
    /*
     *  登山活动 报名页面
     */
    public function action_expedition(){

        $url    = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        //  获取 微信用用户 信息
        if(isset($_GET['code'])){
            $code  = $_GET['code'];
        }else{

            $redirect_url = urlencode($url);
            header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdf8497303505ae0d&redirect_uri='.$redirect_url.'&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect');
        }
        //  获取用户的信息
         $userinfo =  Model_Activity::getUserInfo($code);
        if($userinfo!=false){
              //  检查 本地用户信息 ,不进行是否关注判断
           $localUserInfo = Model_Activity::get_voterinfo($userinfo['openid']);
            if(empty($localUserInfo)){
            //  插入 用户信息
                Model_Activity::insertUserMsg($userinfo['openid'],$userinfo);
            }
            $wxUserId = Model_Activity::get_voterinfo($userinfo['openid'],'id');
            // 用微信用户表的id   检测 用户是否预定成功
             $typeid =1 ; // 线路模型
             $productaid = 29;// 产品的 aid

             $checkOrder  = Model_Activity::checkLineOrder($wxUserId,$productaid,$typeid);
        }
        $code = rand(1000,9999);
        Common::session("code",$code);

        $this -> assign('code',$code);

        $this -> assign('checkOrder',$checkOrder);

        $this -> assign('openid',$userinfo['openid']);

        $this -> assign('wxuserid',$wxUserId);
        $this -> display("activity/expedition");
    }
    /*
     * 登山报名
     * $username
     * $telphone
     */
    public function action_signUp(){

        $memberId = $userInfo ? $userInfo['mid'] : 0;//会员id

        $webid = 0;//网站id

        $suitId = 30;//套餐id

        $lineId = 30;//线路id

        $linkMan = Arr::get($_POST,'username');//联系人姓名

        $linkTel = Arr::get($_POST,'telphone');//联系人电话

        $code = Arr::get($_POST,'code');//code

        if($code!=Common::session('code')){
            $message = array('msg'=>'验证码错误',status=>0);
            echo json_encode($message);
            exit;
        }
        if(!preg_match("/^1[34578]\d{9}$/",$linkTel)){
                  $message = array('msg'=>'请输入正确的手机号格式','status'=>0);
                  echo json_encode($message);
                  exit;
        }

        //套餐信息
        $suitInfo = Model_Activity::suit_info($suitId);

        //产品信息
        $info = ORM::factory('line',$lineId)->as_array();

        //套餐按出发日期价格

        $suitPrice = Model_Activity::suit_price($suitId,$info['linedate']);

        $orderSn   = Model_Activity::get_ordersn('01');

        $useDate = $info['linedate'];//出团日期

        // 微信用户你昵称
        $wxuserid      = Arr::get($_POST,'wxuserid');

        $arr = array(

            'ordersn'=>$orderSn,

            'webid'=>$webid,

            'typeid'=>1,

            'productautoid'=>$info['id'],

            'productaid'=>$info['aid'],

            'productname'=>$info['title'],

            'price'=>$suitPrice['adultprice'],

            'childprice'=>$suitPrice['childprice'],

            'oldprice'=>$suitPrice['oldprice'],

            'supplierlist'=>$info['supplierlist'],
            'litpic' =>$info['litpic'],
            'usedate'=>$useDate,

            'dingnum'=>1,

            'childnum'=>0,

            'oldnum'=>0,

            'linkman'=>$linkMan,

            'linktel'=>$linkTel,

            'linkemail'=>'',

            'jifentprice'=>$suitInfo['jifentprice'],

            'jifenbook'=>$suitInfo['jifenbook'],

            'jifencomment'=>$suitInfo['jifencomment'],

            'addtime'=>time(),

            'memberid'=>$memberId,

            'dingjin'=>$suitInfo['dingjin'],

            'paytype'=>$suitInfo['paytype'],

            'suitid'=>$suitId,
            'wxuserId'  => $wxuserid ,// 微信用户 id

        );
        $carinfo = array(
            'lineid'        =>$lineId,
            'wxuserid'       =>$wxuserid,
            'carmens'       =>1,// 订单数量
        );
        $tourer = array(array(
            'name'=>$linkMan,

            'productid'=>$lineId,

            'typeid'=>1,

            'cardtype'=>'',

            'cardno'=>'',

            'shirttype'=>'',
        ));

        if(Model_Activity::add_order($arr, $carinfo, $wxuserid,$tourer))
        {
            $message = array('msg'=>'','status'=>1);
            echo json_encode($message);
            exit;
        }

    }
    public function action_getwxpama(){
        $signPackage = $this->GetSignPackage();
        echo json_encode($signPackage);
    }
    /**
     * 活动首页
     */
    public function action_index()
    {
        // **注意 ** 要在每个sql 语句中加 上 是属于哪个 活动的条件
        //  活动的id
        $acid  = $this->activity_id;

        //
        //$admin = Common::remove_xss(Arr::get($_GET,'feng'));
        $admin =  Model_Activity::handle_fun($_GET,'feng');
        //  更新  对应活动 的阅读量
        Model_Activity::update_shownum($acid);
        //检测用户是符合参加活动的条件
        $isPart = $this->partActivity('index');
        $this->assign('isPart', $isPart);

        $this -> assign('openid',Common::session("openid"));
        $aid = Common::remove_xss(Arr::get($_GET,'aid'));
        //if(!empty($aid)){
            if($acid==3){

                 $bgtime  = $this ->begintime;
                  $bgtime =strtotime($bgtime);
                 if($bgtime<time()){
                     $this->display('activity/index_3');
                 }

            }
            elseif($acid==2){//  活动 2 集红叶秋山免费游
                /*
                 *     首先分两大类  活动中 和 活动后
                 *        活动中 分  进入该页面的用户 是否参与
                 *        活动后 没有分类
                 * */
                //  该期活动的 奖品 内容
                $proinfo = Model_Activity::get_prize($acid);
                //  判断用户 是否参与活动
                $player_id =Model_Activity::is_joinpart($acid,$isPart);
                //显示兑换数据
                $exchangelist =Model_Activity::exchangeinfo($acid);

                $over_time    = strtotime("2016-10-24 17:00");//活动结束时间
                $this -> assign('playerid',$player_id);
                $this ->assign('overtime',$over_time);
                $this->assign('exchangelist', $exchangelist);
                //  view 页面 对应活动的 id
                if($admin=='feng'){
                    $this -> display('activity/index_ceshi');
                }else{
                    $this -> display('activity/index_'.$acid);
                }
                // $this -> display('activity/index_'.$acid);
            }
            elseif($acid==1) {// 活动 1 集游票活动

                $sql = "select a.`id` as `id`,`headimgurl`,`getpay` from `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid where a.openid='$isPart' and a.act_id=$acid ";
                $ar = DB::query(1, $sql)->execute()->as_array();
                if (empty($ar)) {
                    //显示兑换数据
                    $sql = "SELECT `exchange_time`,`nickname`,`name` FROM `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid LEFT JOIN `sline_activity_prize` c ON a.exchange_pid=c.id WHERE a.exchange_pid != 0 and a.act_id=$acid ORDER BY a.exchange_time DESC limit 0,20";
                    $exchangelist = DB::query(1, $sql)->execute()->as_array();
                    $this->assign('exchangelist', $exchangelist);
                    $this->display('activity/index');
                } else {
                    if (time() > strtotime("2016-09-29 17:00:00")) {
                        $this->assign('showmsg', '活动已经结束');
                    } else {
                        $this->assign('showmsg', '你已经参加过啦');
                    }
                    //显示兑换数据
                    $sql = "SELECT `exchange_time`,`nickname`,`name` FROM `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid LEFT JOIN `sline_activity_prize` c ON a.exchange_pid=c.id WHERE a.exchange_pid != 0 and a.act_id=$acid ORDER BY a.exchange_time DESC limit 0,20";
                    $exchangelist = DB::query(1, $sql)->execute()->as_array();
                    $this->assign('exchangelist', $exchangelist);
                    $this->assign('result', $ar);
                    $this->display('activity/index_over');
                }
            }
//        }else{
//          //  $this->display('activity/index_3');
//        }

    }
    /*
     *   沕沕水 页面
     */
    public  function action_huhuwater(){

        $openid    =  Model_Activity::handle_fun($_GET,'openid');

        $userinfo  = Model_Activity::get_voterinfo($openid);

      //  $erweima   =  Model_Activity::handle_fun($_GET,'erwei');
        $erweima   =  Model_Activity::get_playerinfo2(7,$openid);

        $erweima  =$erweima[0]['erweima'];

        $this->assign('erweima',$erweima);
        $this->assign('userinfo',$userinfo[0]);


        $this -> display("activity/huhuwater");

    }
    /*
    *  悠乐谷 戏雪   页面
    */
    public  function action_playSnow(){

        $openid    =  Model_Activity::handle_fun($_GET,'openid');

        $userinfo  = Model_Activity::get_voterinfo($openid);

        //  $erweima   =  Model_Activity::handle_fun($_GET,'erwei');
        $erweima   =  Model_Activity::get_playerinfo2(8,$openid);

        $erweima  =$erweima[0]['erweima'];

        $this->assign('erweima',$erweima);
        $this->assign('userinfo',$userinfo[0]);


        $this -> display("activity/playSnow");

    }
    /*
     *   冰雕大世界赠票活动
     *   活动 id  为9
     */
    public  function action_iceWorld(){

        $openid    =  Model_Activity::handle_fun($_GET,'openid');

        $userinfo  = Model_Activity::get_voterinfo($openid);//  用户信息

        //  $erweima   =  Model_Activity::handle_fun($_GET,'erwei');
        $erweima   =  Model_Activity::get_playerinfo2(9,$openid);// 获取该期活动的用户

        $erweima  =$erweima[0]['erweima'];

        $this->assign('erweima',$erweima);
        $this->assign('userinfo',$userinfo[0]);


        $this -> display("activity/iceWorld");

    }
    /*
     *
     */

    /**
     * 详细页
     */
    public function action_show()
    {
        //  用于 活动中的调试 页面
        $admin = Common::remove_xss(Arr::get($_GET,'feng'));
        //  活动表id
        $acid  = $this ->activity_id;
        //$acid=3;
        //分享用到的参数
        //----------------------------------
        //  获取 参赛id
        $playerid  = Common::remove_xss($this->request->param('aid'));


        // openid的字符串  关注在指定区域 ， 1112 关注 未在指定区域 ， 1111 未关注
        $isPart = $this->partActivity('show',$playerid);

        if($isPart!='1111'&& $isPart!='1112'){

            $openid = empty($isPart) ?Common::session('openid') : $isPart;
        }
        // 活动结束 时间

        if($acid==3){
            //
            if(!empty($playerid)){

                $playerid  = $playerid*1+1005;

            }

            $overtime =$this ->overtime;
            $overtime = strtotime($overtime);
            // 获取 参赛表 的信息
            $player_info  = Model_Activity::getplayerinfo($playerid,$acid,$openid);
            if(empty($playerid)){
                $prid =$player_info[0]['id'];
            }else{
                $prid =$playerid;
            }

          // 参赛 用户信息
            $userinfo = Model_Activity::get_voterinfo($player_info[0]['openid']);
            // 参赛人员的排名
            $userinfo[0]['rank'] = Model_Activity::getUserRank($player_info[0]['openid'],$acid);
            // var_dump($userinfo['rank']);exit;
            $pid  =$player_info[0]['id']*1-1005;
            $this->assign("pid",$pid);
            $this ->assign("userinfo",$userinfo[0]);
            $this ->assign("overtime",$overtime);
            $this->assign('ispart', $isPart);
            $this ->assign('openid',Common::session('openid'));
            $this -> assign("player_info",$player_info[0]);


            $bgtime  = $this ->begintime;
            $bgtime =strtotime($bgtime);
            if($bgtime<time()){

                if($admin=='feng'){
                    $this -> display("activity1/show3");
                }else{
                    $this -> display("activity/show3");
                }
            }




        }
        elseif($acid==2){  // 活动 2  集红叶
         $overtime  = strtotime("2016-10-24 17:00");
              //  1 判断 进入页面的用户 与 参赛 id 的关系 从而知道是自己查看页面还是他人查看
                     // 参sai者 信息表
                     if (!empty($playerid)) {
                         $sql = "select * from sline_activity_player where id='$playerid'";
                         $player_info = DB::query(1, $sql)->execute()->as_array();
                     }else {
                         $sql = "select * from sline_activity_player where act_id= $acid and openid='$openid'";
                         $player_info = DB::query(1, $sql)->execute()->as_array();
                       //  $player_info = $player_info[0]['id'];

                     }
         if(empty($playerid)){
             $prid =$player_info[0]['id'];
         }else{
             $prid =$playerid;
         }

         $playerOpenid = $player_info[0]['openid'];
         //================登录页面的用户  判断是否参加活动  2  判断是否已投票
         if ($playerOpenid != $openid && !empty($openid)) {

             $playerOpenid = $player_info[0]['openid'];

             // 判断 登录页面的用户 是否 对该参赛人员 投票
             $sql_ishelper = "select id from sline_activity_helper where act_id='$acid' and openid='$openid' and prid ='$prid'";

             $ishelper = DB::query(1, $sql_ishelper)->execute()->as_array();

             $this ->  assign("ishelper",$ishelper);
             //获取 投票人的信息
             $sql_helperinfo = "SELECT nickname FROM `bbs_hjbox_users` WHERE openid='$openid'";

             $helperinfo = DB::query(1, $sql_helperinfo)->execute()->as_array();

             $this ->assign('helperinfo',$helperinfo[0]);

             $this ->assign("openid",$openid);// 登录 页面的用户的openid




         }elseif($playerOpenid==$openid && !empty($openid)){
             // 自己  登录自己的页面
               // 判断自己 是否自己对自己 投票
             $sql_ishelper = "select id from sline_activity_helper where act_id='$acid' and openid='$openid' and prid ='$prid'";

             $ishelpme     = DB::query(1, $sql_ishelper)->execute()->as_array();

             $this ->  assign("ishelpme",$ishelpme);


         }

         //  查找参赛 用户信息
         if (!empty($playerOpenid)) {

             $sql_userinfo = "SELECT * FROM `bbs_hjbox_users` WHERE openid='$playerOpenid'";
             $userinfo = DB::query(1, $sql_userinfo)->execute()->as_array();
             $this ->assign("userinfo",$userinfo[0]);
         }
         $this->assign('ispart', $isPart);
         $this ->assign('openid',$openid);
         $this -> assign("player_info",$player_info[0]);
         $this -> assign("overtime",$overtime);
         if($admin=='feng'){
             $this -> display("activity_now/show2");
         }else{
             $this -> display("activity/show2");
         }

     }
        elseif($acid==1) {//  活动1


         // 参与 者 表
         if (!empty($playerid)) {
             $sql = "select * from sline_activity_player where id='$playerid'";
             $ar = DB::query(1, $sql)->execute()->as_array();
         } else {
             $sql = "select * from sline_activity_player where openid='$openid'";
             $ar = DB::query(1, $sql)->execute()->as_array();
             $playerid = $ar[0]['id'];
         }

         //================登录页面的用户  判断是否参加活动  2  判断是否已投票
         if ($ar[0]['openid'] != $openid && !empty($openid)) {
             // 判断是否 参与活动
             $sql_isplay = "select id from sline_activity_player where openid='$openid'";

             $isplayer = DB::query(1, $sql_isplay)->execute()->as_array();
             // 判断 是否 已投票
             $sql_ishelper = "select id from sline_activity_helper where openid='$openid'";

             $ishelper = DB::query(1, $sql_ishelper)->execute()->as_array();

             //获取 投票人的信息
             $sql_helperinfo = "SELECT nickname FROM `bbs_hjbox_users` WHERE openid='$openid'";

             $helperinfo = DB::query(1, $sql_helperinfo)->execute()->as_array();
         }
         //==================
         $player_openid = trim($ar[0]['openid']);

         //  查找参赛 用户信息
         if (!empty($player_openid)) {
             $sql_userinfo = "SELECT * FROM `bbs_hjbox_users` WHERE openid='$player_openid'";
             $userinfo = DB::query(1, $sql_userinfo)->execute()->as_array();
         }
         //参与活动商品 信息
         if ($ar[0]['exchange_pid'] == '0') {
             $ar[0]['exchange_pid'] = $ar[0]['expect_pid'];
             $sql = "SELECT * FROM `sline_activity_prize` WHERE id ='" . $ar[0]['expect_pid'] . "'";
             $proinfo = DB::query(1, $sql)->execute()->as_array();

         } else {

             $sql = "SELECT * FROM `sline_activity_prize` WHERE id ='" . $ar[0]['exchange_pid'] . "'";
             $proinfo = DB::query(1, $sql)->execute()->as_array();

         }


         $this->assign('playerid', $playerid);
         $this->assign('isplayer', $isplayer);
         $this->assign('ishelper', $ishelper);
         $this->assign('openid', $openid);
         $this->assign('helperinfo', $helperinfo);
         $this->assign('ispart', $isPart);
         $this->assign('player', $ar[0]);
         $this->assign('proinfo', $proinfo[0]);
         $this->assign('userinfo', $userinfo[0]);
         $this->display('activity/show');
     }

    }

    public function action_updatetime(){
        //  活动id
        $acid  = $this ->activity_id;
        $overtime =$this ->overtime;
        $overtime = strtotime($overtime);
        $time     = time();
        if($overtime<$time){
            echo 999;
        }else{
            //  最好时间
            $besttime =  Model_Activity::handle_fun($_POST,'time');
            //  ｏｐｅｎｉｄ
            $openid   =  Model_Activity::handle_fun($_POST,'openid');
            $arr      =  Model_Activity::update_time($acid,$openid,$besttime);
            echo json_encode($arr);
        }

    }
    /*
     *  活动2   集红叶
     *
     */
    /*
     *   ajax  获取助力人员 feng
     */
    public  function  action_gethelper(){

      $acid     = $this ->activity_id;
      $pagesize  =   Common::remove_xss(Arr::get($_POST,'pagesize'));
      $playerid  =   Common::remove_xss(Arr::get($_POST,'playerid'));
      $offset    =   Common::remove_xss(Arr::get($_POST,'offset'));

      $sql  = "SELECT * FROM `sline_activity_helper` WHERE act_id =$acid and prid='$playerid' order by id desc limit $offset,$pagesize";

      $re   = DB::query(1, $sql)->execute()->as_array();

      $sql_all =   "SELECT count(*) as total FROM `sline_activity_helper` WHERE act_id =$acid and prid='$playerid' ";
      $total   = DB::query(1, $sql_all)->execute()->as_array();

      foreach($re as &$v){
          $v['total']       = $total[0]['total'];
          $v['totalpage']   = ceil($v['total']/$pagesize*1);
          
      }
        echo json_encode($re);
    }
    /*
     * 增加助力人员
     */
    public  function  action_addhelper(){
        // 送票人的 openid  和  姓名
        $helperOpenid  = Common::remove_xss(Arr::get($_POST,'helpOpenid'));

        $helperName  = Common::remove_xss(Arr::get($_POST,'helpName'));
       // 参赛人员奖品id
        $partid     = Common::remove_xss(Arr::get($_POST,'partid'));
        // 活动表  id
        $acid      =$this ->activity_id;
        $red       = $this ->redye;

        $isGZ = $this->isAttentionByOpenid($helperOpenid);
        if($isGZ == '0'){
            $message  = array("msg"=>'请关注后参加活动','status'=>0,'isgz'=>1111);
            echo json_encode($message);
            exit;
        }
        $message  = array("msg"=>'已送过红叶了','status'=>0);
//        $city_ip =  $this->isSJZ();
//        if($city_ip=='1'){
//            $helperIp   = $this ->GetIP();
//            $sql  ="SELECT `id` FROM `sline_activity_helper` WHERE helpip='$helperIp' and act_id=$acid";
//            $re   =DB::query(1, $sql)->execute()->as_array();
//            if(count($re) < 50){
//                $message  = array("msg"=>'已送过红叶了','status'=>0);
//            }else{
//                $message  = array("msg"=>'当前ip投票过多','status'=>0);
//                echo json_encode($message);
//                exit;
//            }
//
//        }else{
//            $message  = array("msg"=>'非石家庄用户不能参与活动','status'=>0,'area'=>1112);
//            echo json_encode($message);
//            exit;
//        }


        $time  = date("Y-m-d H:i:s",time());
        $sql  ="SELECT `id` FROM `sline_activity_helper` WHERE openid='$helperOpenid' and prid=$partid and act_id=$acid";
        $re   =DB::query(1, $sql)->execute()->as_array();

        if(empty($re)){

            $sql = "INSERT INTO `sline_activity_helper`(`act_id`,`prid`, `openid`, `nickname`, `helpip`, `helpime`) VALUES ('$acid','$partid','$helperOpenid','$helperName','$helperIp','$time')";

            DB::query(1, $sql)->execute();


            $sql = "UPDATE `sline_activity` SET `help_num`=help_num+1 WHERE id=$acid";

            DB::query(1, $sql)->execute();

            //  获取 得到 票数
            $sql_play="SELECT * FROM `sline_activity_player` WHERE id='$partid' and act_id=$acid";

            $getpay = DB::query(1, $sql_play)->execute()->get('getpay');

            $getpay =$getpay*1;
            //  小于十八  更新数量
            if($getpay<18) {

                $sql = "UPDATE `sline_activity_player` SET `getpay`=getpay+1 WHERE id='$partid' and act_id =$acid";

                DB::query(1, $sql)->execute();

                $getpay = DB::query(1, $sql_play)->execute()->get('getpay');

                $getpay =$getpay*1;
            }

            //  获取 奖品的数量
            $sql   = "SELECT num FROM `sline_activity_prize` WHERE `act_id`=$acid";
            $num   =DB::query(1, $sql)->execute()->get('num');
            $num = $num*1;
           // $message  = array("msg"=>'兑换成功','status'=>'1','get'=>$getpay);
            //  满足 条件 开始兑换
                if($getpay==$red&&$num>0&&$num<101){

                    $exchange_pid  = DB::query(1, $sql_play)->execute()->get('exchange_pid');
                    //  判断是否兑换过
                    if(empty($exchange_pid)){
                        //4: 更新  兑换信息
                        $sql = "UPDATE `sline_activity_player` SET `exchange_pid`='9',`exchange_time`='$time' WHERE id='$partid' and act_id=$acid";
                        DB::query(1,$sql)->execute();
                        // 5: 更新 商品的数量
                        $sql = "UPDATE `sline_activity_prize` SET `num`=num-1 WHERE act_id =$acid";
                        DB::query(1,$sql)->execute();

                        $message = array('msg'=>'门票成功兑换','status'=>1);
                        echo json_encode($message);
                        exit;

                    }else{
                        $message  = array("msg"=>'用户已兑换过了','status'=>0);
                        echo json_encode($message);
                        exit;
                    }


                }
            $message  = array("msg"=>'送红叶成功','status'=>1,'exchange'=> $exchange_pid);

        }

         echo json_encode($message);

    }
    public function action_ismoreIp(){

    }
    /**
     *ajax参加活动
     */
    public function action_ajax_addPart()
    {
        //  活动 表的 id
        $acid  = $this ->activity_id;

        //
       // $admin = Common::remove_xss(Arr::get($_GET, ''));
        //参与 时间
        $addtime = date('Y-m-d H:i:s', time());
        //
      if($acid==2){
          $openid = Common::remove_xss(Arr::get($_POST, 'ispart'));
          $phone  = Common::remove_xss(Arr::get($_POST, 'phone'));

          //  验证 是否关注
          $isGz = $this->isAttentionByOpenid($openid);

          if($isGz=='0'){
              $message = array('status'=>1111,'msg'=>'你还未关注公众号','openid'=>33333);
              echo json_encode($message);exit;
          }

          //  验证 是否符合 石家庄地区
//          $inSJZ = $this->isSJZ();
//          if ($inSJZ == '0') {
//              $message = array('status'=>1112,'msg'=>'您不在石家庄地区');
//              echo json_encode($message);exit;
//          }

          //  验证 是否参加活动
          $sql = "SELECT `id` FROM `sline_activity_player` WHERE openid='$openid' and act_id=$acid";
          $re = DB::query(1, $sql)->execute()->as_array();
          if(empty($re)){
                // 插入 参与者 信息  注意 act_id
                $sql = "INSERT INTO `sline_activity_player`(`addtime`, `openid`, `phone`,`act_id`) VALUES ('$addtime','$openid','$phone',$acid)";
                $affectRow = DB::query(1, $sql)->execute();
              // 更新 活动表 的参赛总人员
              if ($affectRow > 0) {
                  $sql = "UPDATE `sline_activity` SET `part_num`=part_num+1,`show_num`=show_num+1 WHERE id=$acid";
                  DB::query(1, $sql)->execute();
                  $sql = "SELECT id FROM `sline_activity_player` WHERE act_id=$acid and openid='$openid'";
                  $aid =DB::query(1, $sql)->execute()->get('id');

                  $message = array('status'=>1115,'msg'=>  '参与成功','aid' =>$aid);

                  echo json_encode($message);exit;
              } else {
                  $message = array('status'=>1114,'msg'=>  '插入失败');

                  echo json_encode($message);exit;
              }

          }else{
              $message = array('status'=>1113,'msg'=>'您已经参与活动');
              echo json_encode($message);exit;
          }

      }elseif($acid==1) {

          $pid = Common::remove_xss(Arr::get($_POST, 'pid'));
          $openid = Common::remove_xss(Arr::get($_POST, 'isPart'));
          if (empty($pid)) {
              echo 1115;
              exit;
          }//为空

          //判断是否关注
          //var_dump($openid);exit;
          $isGz = $this->isAttentionByOpenid($openid);
          if ($isGz == '0') {
              echo 1111;
              exit;
          } else {
              $inSJZ = $this->isSJZ();
              if ($inSJZ == 0) {
                  echo 1112;
                  exit;
              }
              $sql = "SELECT `id` FROM `sline_activity_player` WHERE openid='$openid'";
              $re = DB::query(1, $sql)->execute()->as_array();
              if (empty($re)) {//没有参加活动
                  $sql = "INSERT INTO `sline_activity_player`(`addtime`, `openid`, `expect_pid`) VALUES ('$addtime','$openid','$pid')";
                  $affectRow = DB::query(1, $sql)->execute();
                  if ($affectRow > 0) {
                      $sql = "UPDATE `sline_activity` SET `part_num`=part_num+1,`show_num`=show_num+1 WHERE id=1";
                      DB::query(1, $sql)->execute();
                      echo 1;
                      exit;
                  } else {
                      echo 1114;//插入失败
                      exit;
                  }
              } else {
                  echo 1113;//已经参加活动
                  exit;
              }
          }
      }
    }
    /**
     * 搜索结果
     */
    public function action_list()
    {


    }

    /*
     *  统计 分享
     */
    public  function action_share(){

        $openid       = Model_Activity::handle_fun($_POST,"openid");
        $thatpage     = Model_Activity::handle_fun($_POST,"thatpage");
        $share_type   = Model_Activity::handle_fun($_POST,"share_type");
        $time         = date("Y-m-d H:i:s",time());
        $acid         =$this ->activity_id;
        $nickname     =Model_Activity::get_voterinfo($openid,'nickname');

        Model_Activity::update_sharenum($acid);
        if($acid==3){

        Model_Activity::update_user_isshare($openid,$acid);
        }

        $sql  = "INSERT INTO `sline_activity_share`(`act_id`, `openid`, `nickname`,`share_page`, `share_type`, `share_time`) VALUES ($acid,'$openid','$nickname','$thatpage','$share_type','$time')";
        $re = DB::query(1, $sql)->execute()->as_array();
        echo json_encode($re);
    }

    /**
     * 检测是否符合参加活动的条件
     * $actio
     * $para  携带 参数
     */
    private function partActivity($action,$para=null){
        $isgz = $this->action_isAttention($action,$para);

        if($isgz !='0'){
            return $isgz;

        }else{

            return 1111;//未关注
        }
    }
    /**
     * 用户是否关注
     * return bool
     */
    private function action_isAttention($action,$para=null)
    {
         $c_openid   =Common::session('openid');
        if(!empty($c_openid))
        {   //echo $c_openid;exit;
            $openid =$c_openid; //empty($_GET['openid'])?$_COOKIE['openid']:$_GET['openid'];
            return $this->isAttentionByOpenid($openid);
        }else{

            $code = $_GET['code'];
            if($code) {
                $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxdf8497303505ae0d&secret=ed95f4a2529b5b39f886e3df0e0511bd&code=$code&grant_type=authorization_code";
                $ch = curl_init();
                curl_setopt($ch , CURLOPT_URL, $url_getToken);
                curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
                $res = curl_exec($ch);
                curl_close( $ch );
                //添加处理错误方法，try
                $arr = json_decode($res, true);
                $openid =$arr['openid'];
                Common::session('openid',$openid);
                return $this->isAttentionByOpenid($openid);

            }else{
                //var_dump($_SERVER['HTTP_HOST']);
                if($para!=null){
                    $redirect_url = urlencode("http://".$_SERVER['HTTP_HOST'].'/phone/activity/'.$action.'_'.$para.'.html');
                }else{
                    $redirect_url = urlencode("http://".$_SERVER['HTTP_HOST'].'/phone/activity/'.$action);
                }
                header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdf8497303505ae0d&redirect_uri='.$redirect_url.'&response_type=code&scope=snsapi_base&state=1#wechat_redirect');
                exit;
            }
        }
    }
    private function isAttentionByOpenid($openid){
        $sql = "select id from `bbs_hjbox_users` where is_gz = 1 AND openid='$openid'";
        $ar = DB::query(1, $sql)->execute()->as_array();

        return empty($ar) ? 0 : $openid;
    }
    /**
     * 排行榜
     */
    public function action_rank(){
        //  用于 活动中的调试 页面
        $admin = Common::remove_xss(Arr::get($_GET,'feng'));
        $acid = $this ->activity_id;
        $openid  = $this ->action_isAttention('rank');
        if($acid==2) {
            $sql = "SELECT * FROM `sline_activity` WHERE id=$acid";

            $re = DB::query(1, $sql)->execute()->as_array();
        }
        // 获得 红叶总数
        if($acid==2) {
            $sql = "SELECT sum(getpay) as allnum FROM `sline_activity_player` WHERE act_id=$acid";

            $sum = DB::query(1, $sql)->execute()->get('allnum');
            $re[0]['sum'] = $sum;
        }

        $keyword  = Common::remove_xss(Arr::get($_GET,'keyword'));

        $page   = $_GET['page'] ? $_GET['page'] : 1;

        $pagesize  = 10;//0 ;

        $offset = ceil($page-1)*$pagesize;

        $sql = "SELECT * FROM `sline_activity_player` ";

        $sql .= " where act_id =$acid  ";
        if(!empty($keyword)){

             $sql .= " and  id = '$keyword' ";
        }
        if($acid==3){
            $sql .= " order by best_time desc ";
        }elseif($acid==2) {
            $sql .= " order by exchange_pid desc,getpay desc,exchange_time asc ";
        }
        $sql .= " limit $offset,$pagesize ";

        $arr = DB::query(1,$sql)->execute()->as_array();

        $sql = "SELECT count(*) as total FROM `sline_activity_player` where act_id =$acid  order by exchange_time asc ";

        $total  = DB::query(1,$sql)->execute()->as_array();

        $total  =$total[0]['total']*1;

        //多少 页面
        $totalpagesize  = ceil($total/$pagesize);
        if(!empty($keyword)){
            $totalpagesize =1;
        }else{
            $totalpagesize =  $totalpagesize ;
        }
        foreach($arr as &$v){

           $userinfo       = $this -> userinfo($v['openid']);

            $v['nickname'] = $userinfo['nickname'];

            $v['best_time'] = $v['best_time']*1/1000;

        }
        $this     ->assign("openid",$openid);
        $this    -> assign('pagesize',$pagesize);
        $this    -> assign('page',$page);
        $this    -> assign('totalpagesize',$totalpagesize);
        $this    -> assign("info",$re[0]);
        $this    -> assign('arr',$arr);
        $bgtime  = $this ->begintime;
        $bgtime =strtotime($bgtime);
        if($bgtime<time()) {
            if($admin=='feng'){
                $this -> display('activity1/rank'.$acid);
            }else{
                 $this->display('activity/rank'.$acid);
            }
        }


    }
    /*
     *   检查 排名是否存在
     */
    public function  action_check_rank(){

        $acid     = $this ->activity_id;

        $keyword  = trim($_POST['keyword']);



        $sql   ="SELECT * FROM `sline_activity_player` WHERE id='$keyword' and act_id =$acid";
        $re   =DB::query(1,$sql)->execute()->as_array();
        if(empty($re)){
            $message  =array('msg'=>'未找到相关的编号','status'=>'-1');
        }else{
            $message  =array('msg'=>'ok','status'=>$keyword);
        }
        echo json_encode($message);
    }
    /**
     * 奖品列表
     */
    public function action_prizelist(){
        $new  = Common::remove_xss(Arr::get($_GET,'new'));
        //获取礼物列表
        $sql      = "SELECT * FROM `sline_activity_prize` order by price DESC ";

        $prizelist =  DB::query(1,$sql)->execute()->as_array();

        $this ->assign("plist",$prizelist);
        if($new == 1){
            $this->display('activity/prizelistnew');
        }else{
            $this->display('activity/prizelist');
        }

    }
    /*
     * 或得兑换榜单的人员 fengj
     */
    public function action_ajax_getexchangeman(){
        $page  = Common::remove_xss(Arr::get($_GET,'page'));
        $pagesize = 6;//10;
        $offset = (intval($page) - 1) * $pagesize;

        $sql  = "SELECT * FROM `sline_activity_player` WHERE exchange_pid !=0 order by getpay desc ";

        $sql .= " limit $offset,$pagesize ";

        $arr = DB::query(1,$sql)->execute()->as_array();
//
        foreach($arr as &$v){
            // 兑换商品的名字
            $v['product']  =$this ->getprodunctname($v['exchange_pid']);
            //
            $userinfo      = $this->userinfo($v['openid']);
            // 兑换商品的人的昵称
            $v['username'] = $userinfo['nickname'];
            // 兑换 商品人的头像
            $v['userpic']  = $userinfo['headimgurl'];
            // 返回 排序
            //$v['paixun']   =
            //
        }
        echo Product::list_search_format1($arr, $page,$pagesize=6);

    }
    //  获取 商品的名称 feng
    public  function  getprodunctname($prid){

        $sql = "SELECT `name` FROM `sline_activity_prize` WHERE id= '$prid'";

        $re  = DB::query(1,$sql)->execute()->as_array();

        return $re[0]['name'];
    }
    //  获取 获取 兑换用户的信息 feng
    public  function  userinfo($openid){

        $sql = "SELECT * FROM `bbs_hjbox_users` WHERE openid ='$openid'";

        $re  = DB::query(1,$sql)->execute()->as_array();

        return $re[0];
    }
     /**
     * 奖品详情页
     */
    public function action_prizeshow(){

        $acid   = $this -> activity_id;
        if($acid==2){

            $this->display('activity/prizeshow2');

        }
        elseif($acid==1){


           // 奖品的id
            $prizeid = Common::remove_xss($this->request->param('aid'));

            // openid 的字符串  关注在指定区域 ， 1112 关注 未在指定区域 ， 1111 未关注
            $isPart = $this->partActivity('prizeshow',$prizeid);
           if($isPart!='1111'&&$isPart!='1112'){
               $openid = $isPart;//isset($_COOKIE['openid'])?$;

              // 检测用户 是否参与活动 获取 助力值  从而判断 是否参加
               $sql_getpay  ="SELECT id,getpay FROM `sline_activity_player` WHERE openid ='$openid'";
               $getpay =DB::query(1,$sql_getpay)->execute()->as_array();
               $this ->assign('getpay',$getpay[0]);
               if(!empty($getpay)) {
                   // 检测 用户是否已兑换过商品
                   $sql = "SELECT id FROM `sline_activity_player` WHERE exchange_pid!=0 and openid ='$openid'";
                   $re = DB::query(1, $sql)->execute()->as_array();
                   $this->assign('isexchange', $re);
               }

           }
            if($prizeid){

                $sql   = "SELECT * FROM `sline_activity_prize` WHERE id =$prizeid";

                $prizeinfo = DB::query(1,$sql)->execute()->as_array();
                $this->assign('info',$prizeinfo[0]);
            }

            $this -> assign('prizeid',$prizeid);

            $this ->assign("ispart",$isPart);

            $this ->assign("openid",$openid);

            $this->display('activity/prizeshow');

      }
    }
    /*
     * 兑换奖品 方法
     */
    public  function action_exchange(){
        //  兑换用户的 openid
        $openid    = Common::remove_xss(Arr::get($_POST,'openid'));
        //  兑换奖品的 id
        $productid = Common::remove_xss(Arr::get($_POST,'productid'));
        //  兑换用户的手机 号码 id
        $userphone = Common::remove_xss(Arr::get($_POST,'phone'));
        //  兑换商品的 所需要的票数
        $pay       = Common::remove_xss(Arr::get($_POST,'pay'));
        $pay  =$pay*1;

        $time    = date("Y-m-d H:i:s");
        $message  = array('msg'=>'兑换失败','status'=>'0');
        $isGZ = $this->isAttentionByOpenid($openid);
        if($isGZ == '0'){
            $message  = array("msg"=>'请关注后参加活动','status'=>'0');
            echo json_encode($message);
            exit;
        }
       if(!empty($openid)){
           //1: 检测是否兑换过
           $sql ="SELECT `id` FROM `sline_activity_player` WHERE exchange_pid !='0' and  openid = '$openid'";
           $isexchange  = DB::query(1,$sql)->execute()->as_array();
           if(empty($isexchange)){
               // 2 :检测 奖品数量是否足够
               $sql = "SELECT * FROM `sline_activity_prize` WHERE id='$productid'";
               $num = DB::query(1,$sql)->execute()->as_array();
               $num = $num[0]['num']*1;
               if($num<0||$num==0){
                   $message = array('msg'=>'兑换失败，奖品数量不足','status'=>'0');
                   echo json_encode($message);
                   exit;
               }
               $sql ="SELECT `getpay` FROM `sline_activity_player` WHERE  openid = '$openid'";
               $getpay = DB::query(1,$sql)->execute()->as_array();
               $getpay = $getpay[0]['getpay']*1;
               //3: 检测 用户的票数 是否足够
               if($getpay<$pay){
                   $message = array('msg'=>'兑换失败，票数不足','status'=>'0');
                   echo json_encode($message);
                   exit;
               }
               //4: 更新  兑换信息
               $sql = "UPDATE `sline_activity_player` SET `exchange_pid`='$productid',`phone`='$userphone',`exchange_time`='$time' WHERE openid = '$openid' ";
               DB::query(1,$sql)->execute();
               // 5: 更新 商品的数量
               $sql = "UPDATE `sline_activity_prize` SET `num`=num-1 WHERE id ='$productid'";
               DB::query(1,$sql)->execute();

               $message = array('msg'=>'兑换成功','status'=>'1');
           }else{
               $message = array('msg'=>'兑换失败，每人只能兑换一次','status'=>'0');
           }

       }
        echo json_encode($message);//$openid;

    }
    /**
     * 是否为石家庄ip
     * return 1(限制区域内),0
     */
    private function isSJZ(){
        $tpip = $this->GetIP();

        $ipdata = $this->get_ip_data($tpip);

        $file = fopen('ip.txt','a+');
        fwrite($file,"ip为:".$tpip."的用户；调用接口返回的数据：".var_export($ipdata)."。时间：".time()."\r\n");
        fclose($file);
        if($ipdata['city_id'] == '130100'||$ipdata['city']=='石家庄'){
            return 1;
        }else{
            return 0;//超出区域限制
        }
    }
    private function GetIP(){


        $ip=false;
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if(count($ips)<2){
                $ips = explode (",", $_SERVER['HTTP_X_FORWARDED_FOR']);
            }
            if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
            for ($i = 0; $i < count($ips); $i++) {
                if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
       // echo 'ip:'.$ip."<br/>";
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }
    //获取 判断 ip  是否属于石家庄
    private function get_ip_data($ips){
        //  淘宝code 的int(0) 代表 成功   1  代表失败  当ip 为空 或者错误的ip 返回的code ==1
        /*
         *  淘宝返会的 城市码：city 参数为 ‘石家庄市’ 有城市city_id 字符串''
         *  百度 api  城市码 ：city 参数为‘石家庄’  没有城市ctity_id
         */
        $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ips;

        $data= $this ->curl($url);

        if($data['code']==0){
            return $data['data'];
        }else{
            $data= $this->baiduip($ips);
            return $data['retData'];
        }

    }
    private function baiduip($ip){

        $url = 'http://apis.baidu.com/apistore/iplookupservice/iplookup?ip='.$ip;
        $header = array(
            'apikey:fd697fa125b0a185069a90af48f0db18',
        );
        $data= $this ->curl($url,$header);

        return $data;

    }
    private  function  curl($url,$header=null){
        $ch = curl_init();

        // 添加apikey到header
        if($header!=null){
            curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);

        $res = curl_exec($ch);

        return json_decode($res,true);
    }
    public function action_bggame(){
       // 是否比较 session  和openid  ？？
        $acid  = $this ->activity_id;
        $overtime =$this ->overtime;
        $overtime = strtotime($overtime);
        $time     = time();

        $openid  = Model_Activity::handle_fun($_POST,'openid');
        //判断用户是否分享 1 未分享  2  分享
        $is_share = Model_Activity::is_share($acid,$openid);

        //判断用户是否关注
        $arr = $this ->isAttentionByOpenid($openid);

            if (empty($arr)) {
                $message = array("status" => 1111, 'msg' => '未关注');
                echo json_encode($message);
                exit;
            } else {
                if($overtime<$time){
                    echo 6666;exit;
                }else{
                    if ($is_share == 1) {
                        //  未 分享
                        $share_num = Model_Activity::getsharenum($openid);
                        if ($share_num < 3) {
                            if ($share_num == 1) {
                                Model_Activity::updatepartnum($acid);
                            }
                            Model_Activity::updatesharenum($openid);
                            Model_Activity::update_play_sharenum($openid);

                            $message = array("status" => 0, 'msg' => '', 'join' => $share_num);
                            echo json_encode($message);
                            exit;
                        } else {
                            $message = array("status" => 1115, 'msg' => '分享到朋友圈无限次玩');
                            echo json_encode($message);
                            exit;
                        }

                    } elseif ($is_share == 2) {
                        //   已分享
                        Model_Activity::update_play_sharenum($openid);
                        echo 22222;
                        exit;
                    } else {
                        echo 4444;
                        exit;
                    }
                }

            }




    }

    public function getSignPackage() {
        $jsapiTicket = $this->getJsApiTicket();

        // 注意 URL 一定要动态获取，不能 hardcode.
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $timestamp = time();
        $nonceStr = $this->createNonceStr();

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
            "appId"     => $this->appId,
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature,
            "rawString" => $string
        );
        return $signPackage;
    }

    private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    private function getJsApiTicket() {
        // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("jsapi_ticket.php"));
        if ($data->expire_time < time()) {
            $accessToken = $this->getAccessToken();
            // 如果是企业号用以下 URL 获取 ticket
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
            $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
            $res = json_decode($this->httpGet($url));
            $ticket = $res->ticket;
            if ($ticket) {
                $data->expire_time = time() + 7000;
                $data->jsapi_ticket = $ticket;
                $this->set_php_file("jsapi_ticket.php", json_encode($data));
            }
        } else {
            $ticket = $data->jsapi_ticket;
        }

        return $ticket;
    }

    private function getAccessToken() {
        // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("access_token.php"));
        if ($data->expire_time < time()) {
            // 如果是企业号用以下URL获取access_token
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
            $res = json_decode($this->httpGet($url));
            $access_token = $res->access_token;
            if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                $this->set_php_file("access_token.php", json_encode($data));
            }
        } else {
            $access_token = $data->access_token;
        }
        return $access_token;
    }

    private function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }

    private function get_php_file($filename) {
        return trim(substr(file_get_contents($filename), 15));
    }
    private function set_php_file($filename, $content) {
        $fp = fopen($filename, "w");
        fwrite($fp, "<?php exit();?>" . $content);
        fclose($fp);
    }

}
