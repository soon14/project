<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Activity extends ORM
{
    /*
     * 对    参数的处理的封装函数
     * $post  取值 $_GET/$_POST
     * $para  参数
     */
    public static  function handle_fun($post,$para){

        return Common::remove_xss(Arr::get($post,$para));
    }

    /*
    *   取得 线路套餐  feng 1122
    */
    public  function  suit_info($lineid){

        $sql = "SELECT * FROM `sline_line_suit` where lineid =$lineid";
        $arr =  DB::query(1,$sql)->execute()->as_array();
        if(count($arr)>1){
            $msg = array('message'=>'请检查您的报价套餐，是否为一个','jumpUrl'=>'');
            Common::message($msg);
            echo $msg['message'].'。并关闭当前页面';
            exit;
        }
        return $arr[0];
    }

    /**
     * @param $suitId
     * @param $useDate
     * @return array
     * @desc 获取套餐某天的报价. feng 1122
     */
    public static function suit_price($suitId,$useDate)
    { if(empty($useDate)){
        $msg = array('message'=>'请填写您的出团日期','jumpUrl'=>'');
        echo $msg['message'].'，并关闭当前页面';
        exit;
    }else{
        $time = strtotime($useDate);
        if(empty($time)){

            $msg = array('message'=>'请检查出团日期的格式','jumpUrl'=>'');

            echo $msg['message'].'，并关闭当前页面';
            exit;
        }

    }
        if(empty($suitId)){
            $msg = array('message'=>'请填写您的报价套餐','jumpUrl'=>'');
            echo $msg['message'].'，并关闭当前页面';
            exit;
        }
        $arr = ORM::factory('line_suit_price')
            ->where("suitid=$suitId AND day=$time")
            ->find()
            ->as_array();
        $arr['childprofit'] = Currency_Tool::price($arr['childprofit']);
        $arr['childbasicprice'] = Currency_Tool::price($arr['childbasicprice']);
        $arr['childprice'] = Currency_Tool::price($arr['childprice']);
        $arr['oldprofit'] = Currency_Tool::price($arr['oldprofit']);
        $arr['oldbasicprice'] = Currency_Tool::price($arr['oldbasicprice']);
        $arr['oldprice'] = Currency_Tool::price($arr['oldprice']);
        $arr['adultprofit'] = Currency_Tool::price($arr['adultprofit']);
        $arr['adultbasicprice'] = Currency_Tool::price($arr['adultbasicprice']);
        $arr['adultprice'] = Currency_Tool::price($arr['adultprice']);
        $arr['roombalance'] = Currency_Tool::price($arr['roombalance']);

        return $arr;

    }
    /*
     *   检查用户
     */
    /*

* 生成订单编号 feng 1122

* */

    public static function get_ordersn($kind)

    {

        /* 选择一个随机的方案 */

        return $kind.substr(time(),-5).substr(microtime(),2,5).sprintf('%02d',rand(0,99));

    }
    /*
     * 更新 对应活动的阅读量
     */
    public static function update_shownum($acid){
        $sql = "UPDATE `sline_activity` SET `show_num`=show_num+1 WHERE id=$acid";
        DB::query(1, $sql)->execute();
    }
    /*
     * 获取 对应活动的奖品内容
     */
    public  static function get_prize($acid){
        $sql     = "SELECT * FROM `sline_activity_prize` WHERE `act_id`=$acid";
        $proinfo =  DB::query(1,$sql)->execute()->as_array();
        return $proinfo;
    }
    /*
     * 判断用户 是否参与该期活动
     * $acid 该期活动的id
     *
     */
    public  static function is_joinpart($acid,$openid){
        $sql = "select `id` from `sline_activity_player` where `act_id`=$acid and openid='$openid'";
        $player_id = DB::query(1, $sql)->execute()->as_array();
        return $player_id;
    }
    /*
     *  显示兑换数据 0,20条
     */
    public  static function exchangeinfo($acid){
        $sql = "SELECT a.exchange_time,b.nickname FROM `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid  WHERE a.exchange_pid != 0 and a.act_id=$acid ORDER BY a.exchange_time DESC limit 0,20";
        return  $exchangelist = DB::query(1, $sql)->execute()->as_array();
    }
    /*
     * ========================
     *    index 方法结束
     *
     * ========================
     */
    /*
     * 根据 show_***.html 根据 参数***获取 参赛人的信息
     *
     */
    public static function get_playerinfo($playerid){

        $sql = "select * from sline_activity_player where id='$playerid'";
        $player_info = DB::query(1, $sql)->execute()->as_array();
        return $player_info;
    }
    /*
     *  没有参赛人员的id
     * 根据 登录页面的人员的openid 和 活动的id $acid 获取
     *
     */
    public static function get_playerinfo2($acid,$openid){
        $sql = "select * from sline_activity_player where act_id= $acid and openid='$openid'";
        $player_info = DB::query(1, $sql)->execute()->as_array();
        return $player_info;
    }
    /*
     *   获取投票人的信息/获取参赛人的信息
     *   $get 用于是否获取特定字段的信息
     */
    public  static function get_voterinfo($openid,$get=null){

        $sql_helperinfo = "SELECT * FROM `bbs_hjbox_users` WHERE openid='$openid'";

        if($get==null){
            $helperinfo = DB::query(1, $sql_helperinfo)->execute()->as_array();
        }else{
            $helperinfo = DB::query(1, $sql_helperinfo)->execute()->get("$get");
        }
        return $helperinfo;
    }
    /*
     * 获取投票的人员
     */
    public static function get_helper($acid,$playerid,$offset,$pagesize){

        $sql  = "SELECT * FROM `sline_activity_helper` WHERE act_id =$acid and prid='$playerid' order by id desc limit $offset,$pagesize";

        $re   = DB::query(1, $sql)->execute()->as_array();
    }
    //=========================
    /*
     *   分享 统计
     */
    /*
     * 更新 对应活动的阅读量
     */
    public static function update_sharenum($acid){
        $sql = "UPDATE `sline_activity` SET `share_num`=share_num+1 WHERE id=$acid";
        DB::query(1, $sql)->execute();
    }
    //========================================
    /*
     * 活动 3  不能死
     */
    // 判断 参与的用户是否分享
    public static function is_share($acid,$openid){
        $sql = "SELECT * FROM `sline_activity_player` WHERE `act_id` = $acid AND `openid`='$openid'";
        $arr  = DB::query(1, $sql)->execute()->get('is_share');
        return $arr;
    }
    //  更新成绩   $time=成绩

    public  static function update_time($acid,$openid,$time){

        $sql = "SELECT `best_time` FROM `sline_activity_player` WHERE act_id = $acid and openid ='$openid'";
        $arr  = DB::query(1, $sql)->execute()->as_array();
        $addtime = date('Y-m-d H:i:s');
        if(empty($arr)){
            $sql  = "INSERT INTO `sline_activity_player`(`act_id`,`openid`,`addtime`, `best_time`) VALUES ($acid,'$openid','$addtime',$time)";
            DB::query(1, $sql)->execute();
            $message  = array("status"=>2,'msg'=>'参与成功');
        }else{
            $besttime  = $arr[0]['best_time']*1;
            if($besttime>$time){
                $message  = array("status"=>0,'msg'=>'不是最好成绩');
            }
            else{
                $sql = "UPDATE `sline_activity_player` SET `best_time`=$time WHERE act_id=$acid and openid='$openid'";
                DB::query(1, $sql)->execute();
                $message  = array("status"=>1,'msg'=>'ok','arrtime'=>$arr[0]['best_time']);

            }
        }
        return $message;
    }
    //  获取 share 未分享的三次机会
    public static  function getsharenum($openid){
        $sql = "SELECT  `share` FROM `bbs_hjbox_users` WHERE openid='$openid'";
        $arr  = DB::query(1, $sql)->execute()->get('share');
        return $arr;

    }
    //  未分享  更新 用户玩的次数
    public static  function updatesharenum($openid){
        $sql = "UPDATE `bbs_hjbox_users` SET `share`=share+1 WHERE  openid='$openid'";
        DB::query(1, $sql)->execute();
    }
    //  未分享  更新 用户玩的次数
    public static  function update_play_sharenum($openid){
        $sql = "UPDATE `sline_activity_player` SET `play_num`=play_num+1 WHERE  openid='$openid'";
        DB::query(1, $sql)->execute();
    }
    //  更新用户的 的  分享的状态
    public static function update_user_isshare($openid,$acid){
        $sql ="UPDATE `sline_activity_player` SET `is_share`=2,`share_num`=share_num+1 WHERE act_id=$acid and openid='$openid'";
        DB::query(1, $sql)->execute();

    }
    //1 判断 进入页面的用户 与 参赛 id 的关系 从而知道是自己查看页面还是他人查看
    public  static function getplayerinfo($playerid,$acid,$openid){
        if (!empty($playerid)) {
            $sql = "select * from sline_activity_player where id='$playerid'";
            $player_info = DB::query(1, $sql)->execute()->as_array();

        }else {
            $sql = "select * from sline_activity_player where act_id= $acid and openid='$openid'";
            $player_info = DB::query(1, $sql)->execute()->as_array();
        }
        if($acid==3&&!empty($player_info)){
            foreach ($player_info as &$v){
                $v['best_time'] = $v['best_time']*1/1000;
            }
        }
        return $player_info;
    }
    public static function getUserRank($openid,$acid){
        $sql  =  "SELECT openid FROM `sline_activity_player` ";

        $sql .= " where act_id =$acid  ";

        $sql .= " order by best_time desc ";

        $arr  = DB::query(1,$sql)->execute()->as_array();

        foreach($arr as $k =>$v){
            if($v['openid']==$openid){
                $rank = $k+1;
                return $rank;
            }
        }


    }
    public  static  function updatepartnum($acid){
        $sql = "UPDATE `sline_activity` SET `part_num`=part_num+1 WHERE id=$acid";
        DB::query(1, $sql)->execute();
    }
    //添加订单  feng 1122

    public static function add_order($arr,$carinfo,$wxuserid,$tourer)

    {

        $model = ORM::factory('member_order');

        $flag = 0;

        if(is_array($arr))

        {


            if($arr['paytype']=='3')//这里补充一个当为二次确认时,修改订单为未处理状态.

            {

                $arr['status'] = 0;

            }

            if(empty($arr['memberid']))

            {

                $arr['memberid'] = self::auto_reg($arr['linktel']);

            }
            /*
             *  验证 为一个订单
             */
            $onlyOneOrder  = self::onlyOrder($arr['memberid'],$arr['productaid'],1);

            if($onlyOneOrder===false){
                $message = array('msg'=>'','status'=>1);
                echo json_encode($message);
                exit;
            }

            foreach($arr as $k=>$v)

            {
                $model->$k=$v;
            }
            $model->save();

            $flag = $model->saved();

            if($flag)
            {
                if(is_array($carinfo)){

                    $models = ORM::factory('member_car');
                    foreach($carinfo as $ke=>$va)
                    {
                        $models->$ke=$va;
                    }

                    $models ->mid=$arr['memberid'];
                    $models ->orderid = $model->id;
                    $models ->save();
                    $res= $models->saved();
                }
                //  更新自驾次数 和 微信 会员的 mid
                if(!empty($wxuserid)){
                    $sql  = " update `bbs_hjbox_users` set drivingRate=drivingRate+1,mid=".$arr['memberid'].",telphone=$arr[linktel]";
                    $sql  .= " where id =$wxuserid";

                    DB::query(1,$sql)->execute();
                }else{

                    $flag= 2;
                }
                self::add_tourer_pc($model->id,$tourer,$arr['memberid']);

                //减库存

                $dingnum = intval($arr['dingnum'])+intval($arr['childnum'])+intval($arr['oldnum']);

                if($arr['typeid']!=2)

                {
                    self::minus_storage($arr['usedate'],$arr['typeid'],$arr['suitid'],$arr['productid'],$dingnum);
                }
                else

                {
                    self::minus_storage($arr['usedate'],$arr['typeid'],$arr['suitid'],$arr['productid'],$dingnum,$arr['departdate']);

                }

            }

        }

        return $flag;
    }


    /**

     * @param $mobile

     * @return int|mixed

     * @desc 自动按手机号注册帐号  feng 1122

     */

    public static function auto_reg($mobile)

    {

        $out = 0;

        $sql = "SELECT mid FROM `sline_member` WHERE mobile='$mobile'";

        $row = DB::query(1,$sql)->execute()->as_array();

        if(!empty($row[0]['mid']))

        {

            $out = $row[0]['mid'];

        }

        else

        {

            $pwd=md5($mobile);

            $jointime=time();

            $joinip=self::get_ip();

            $mtype = 1;//  标示 是后台 添加

            $jifen=empty($GLOBALS['cfg_reg_jifen']) ? 0 : $GLOBALS['cfg_reg_jifen'];//网上注册赠送积分

            $nickname=substr($mobile,0,5).'***';

            $m = ORM::factory('member');

            $member = array(

                'nickname'=>$nickname,

                'pwd'=>$pwd,

                'jointime'=>$jointime,

                'mtype' => $mtype,

                'email'=>'',

                'mobile'=>$mobile,

                'joinip'=>$joinip,

                'jifen'=>$jifen

            );

            foreach($member as $key => $value)

            {

                $m->$key = $value;

            }

            $m->save();

            if($m->saved())

            {

                $out = $m->mid;

            }



        }

        return $out;





    }


    public static function  get_ip()

    {

        static $realip = NULL;

        if ($realip !== NULL)

        {

            return $realip;

        }

        if (isset($_SERVER))

        {

            if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))

            {

                $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

                /* 取X-Forwarded-For中第x个非unknown的有效IP字符? */

                foreach ($arr as $ip)

                {

                    $ip = trim($ip);

                    if ($ip != 'unknown')

                    {

                        $realip = $ip;

                        break;

                    }

                }

            } elseif (isset($_SERVER['HTTP_CLIENT_IP']))

            {

                $realip = $_SERVER['HTTP_CLIENT_IP'];

            } else

            {

                if (isset($_SERVER['REMOTE_ADDR']))

                {

                    $realip = $_SERVER['REMOTE_ADDR'];

                } else

                {

                    $realip = '0.0.0.0';

                }

            }

        } else

        {

            if (getenv('HTTP_X_FORWARDED_FOR'))

            {

                $realip = getenv('HTTP_X_FORWARDED_FOR');

            } elseif (getenv('HTTP_CLIENT_IP'))

            {

                $realip = getenv('HTTP_CLIENT_IP');

            } else

            {

                $realip = getenv('REMOTE_ADDR');

            }

        }

        preg_match("/[\d\.]{7,15}/", $realip, $onlineip);

        $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';

        return $realip;

    }

    /**

     * @param $orderid  1124

     * @param $arr

     * 添加游客信息

     */

    public static function add_tourer_pc($orderid, $arr,$memberid)

    {

        for ($i = 0; isset($arr[$i]); $i++)

        {
            $ar = array(

                'orderid' => $orderid,

                'tourername' => $arr[$i]['name'],

                'cardtype' => $arr[$i]['cardtype'],

                'cardnumber' => $arr[$i]['cardno'],

                'shirttype' => $arr[$i]['shirttype'],

                'mobile' => ''

            );

            $m = ORM::factory('member_order_tourer');

            foreach ($ar as $k => $v)

            {

                $m->$k = $v;

            }

            $m->save();

            if($m->saved())

            {

                self::add_tourer_to_linkman($ar,$memberid);

            }

            $m->clear();

        }

    }

    /**

     * @param $ar   feng  1124

     * 检测常用联系人是否存在,不存在则添加.

     */

    public static function add_tourer_to_linkman($ar,$mid)

    {

        $m = ORM::factory('member_linkman')

            ->where("memberid=$mid and linkman='{$ar['tourername']}'")

            ->find();



        $new = array(

            'linkman'=>$ar['tourername'],

            'idcard'=>$ar['cardnumber'],

            'cardtype'=>$ar['cardtype'],

            'memberid'=>$mid

        );

        //如果没有找到,则自动加入常用联系人表

        if(!$m->loaded())

        {

            $_m = ORM::factory('member_linkman');



            foreach ($new as $k => $v)

            {

                $_m->$k = $v;

            }



            $_m->save();





        }

    }




    /*

      * 库存操作

      * */

    public static function minus_storage($dingdate,$typeid,$suitid,$productid,$dingnum,$departdate='')

    {



        $day = strtotime($dingdate);

        $dingnum = $dingnum ? $dingnum : 1;

        switch($typeid)

        {

            case '1':



                $sql = "UPDATE `sline_line_suit_price` SET number=number-$dingnum WHERE day='$day' AND suitid='$suitid' AND number!=0 AND number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '2':



                $sdate = strtotime($dingdate);

                $edate = strtotime($departdate);

                $sql = "UPDATE `sline_hotel_room_price` ";

                $sql.= "SET number=number-$dingnum ";

                $sql.= "WHERE suitid='$suitid' AND day>=$sdate AND day<$edate AND number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '3':

                $sql = "UPDATE `sline_car_suit_price` SET number=number-$dingnum WHERE day='$day' AND suitid='$suitid' AND number!=0 and number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '5':

                $sql = "UPDATE `sline_spot_ticket` SET number=number-1 WHERE spotid='$productid' AND id='$suitid' AND number!=0";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '8':

                $sql = "UPDATE `sline_visa` SET number=number-$dingnum WHERE id='$productid' AND number!=0 AND number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '13':

                $sql = "UPDATE `sline_tuan` SET totalnum=totalnum-1 WHERE id='$productid' AND totalnum!=0";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

        }



    }

    /*
     *   没人就有一个订单
     *    $productaid
     *
     */
    public  static function onlyOrder($memberid,$productaid,$typeid){

        $m = ORM::factory('member_order')

            ->where("memberid=$memberid and typeid=$typeid and productaid=$productaid ")

            ->find();

        if($m->loaded())

        {
            return false;
        }else{
            return true;
        }

    }
    /*
    *    检测用户 是否 已经有订单
    *    $productaid
    *    $wxUserId
     *   $typeid
    */
    public  static function checkLineOrder($wxUserId,$productaid,$typeid){

        $m = ORM::factory('member_order')

            ->where("wxuserId=$wxUserId and typeid=$typeid and productaid=$productaid ")

            ->find();


        if($m->loaded())

        {
            return false;
        }else{
            return true;
        }

    }
    /*
     *    uhuo获取用户的信息
     */
   public  static function getUserInfo($code){
       if(!empty($code)) {
           $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxdf8497303505ae0d&secret=ed95f4a2529b5b39f886e3df0e0511bd&code=$code&grant_type=authorization_code";

           $arr = Model_Article::curl($url_getToken);

           if(isset($arr['errcode'])){
               echo "<script>location.href='/phone/activity/expedition'</script>";exit;
           }else{

               $access_token   = $arr['access_token'];
               $openid         = $arr['openid'];
               $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
               $userinfo        = Model_Article::curl($url_getuserinfo);

               return $userinfo;
           }

       }else{

           return  false;

       }
   }
    //用户关注微信，插入用户信息
    public static function   insertUserMsg($openid,$arr=array()){

        $time    = time();
        $sql     = "SELECT * FROM `bbs_hjbox_users` WHERE  openid='$openid'";
        $r       =  DB::query(1,$sql)->execute();
        // 值为1时是男性，值为2时是女性，值为0时是未知

        if(empty($r)){
            $sql ="INSERT INTO `bbs_hjbox_users` ";
            $sql .=" (`nickname`, `sex`, `city`, `country`, `province`, `headimgurl`, `openid`,`gztime`) VALUES ";
            $sql .=" ('$arr[nickname]','$arr[sex]','$arr[city]','$arr[country]','$arr[province]','$arr[headimgurl]','$openid','$time')";
            DB::query(1,$sql)->execute();
        }
    }





}