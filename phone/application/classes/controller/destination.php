<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Hotel
 * @desc 总控制器
 */
class Controller_Destination extends Stourweb_Controller
{
    private $_typeid = 12;   //产品类型

    private  $_param ;

    private  $_deatpy ;
    private  $cityArr =array(
                       'survey'=>'概况',
                       'human' =>'人文',
                       'map'   =>'地图',
                       'spot'  =>'景点',
                       'hotel' =>'酒店',
                       'restaurant'=>'概况',
                       'specialty'=>'饭店',
                       'raider'=>'攻略',
                       'note'=>'游记',
                       ) ;
    public function before()
    {
        parent::before();


        $this->host_url = $GLOBALS['cfg_basehost'] . $GLOBALS['cfg_phone_cmspath'];
       // $this->host_url == http://lvyou.com/phone
        $channelname = Model_Nav::get_channel_name($this->_typeid);

        /*****/
        $action =  $this ->request->action();
        if($action=='main'||$action=='search'){

            // $param  概况 = survey  人文 = human   地图 =map  景点 = spot 酒店 = hotel
            // 饭店 = restaurant  特产=specialty 攻略 =raider 游记 =note
            //参数处理

            $this ->_destpy =  Common::remove_xss($this->request->param('pinyin'));
            $this ->_param  =  Common::remove_xss($this->request->param('param'));

        }
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', $channelname);
    }

    /**
     * 首页
     */
    public function action_index()
    {

        $seoinfo = Model_Nav::get_channel_seo($this->_typeid);

        $this->assign('seoinfo', $seoinfo);

        $info  = Model_Destinations::get_top(0, 11);
        foreach($info as &$v){
            $v['url'] = '/phone/'.$v['pinyin'].'/des-survey';
            $v['p_litpic'] = '/phone/public/images/20170301/'.$v['pinyin'].'.jpg';
        }
        $this ->assign('info',$info);
        //$this->display('destination/index');  //老版本
        $this->display('destination/index-2017');
    }

    public function action_main()
    {
        // 处于调试中  返回
//         $msg  = array('jumpUrl'=>'/phone/destination/index','message' =>'正在努力开发中...');
//         Common::message($msg);exit;
         $destpy = $this ->_destpy;
         $param  = $this ->_param;


        $destinfo = Model_Destinations::get_dest_bypinyin($destpy);
        if($param=='specity') {


        }
        else if($param=='survey'){
            $cityArr_1   = $this ->cityArr;
            $i=0;
            foreach($cityArr_1  as $k=>$v){
                $cityArray[$i][0] =$k;
                $cityArray[$i][1] =$v;
                $i++;
            }

            //   获取 目的的标签 ！！
            $destinfo['tag'] = Model_Destinations::get_kindTag($destinfo['id']);
            //
            $sql  = "select * FROM `sline_comment` where kindid={$destinfo['id']} and typeid=20  ";
            // $sql .= " and isshow =1 ";
            $sql .= " ORDER BY addtime desc ";

            $comment  = DB::query(1,$sql)->execute()->as_array();
           if(!empty($comment)) {
               $allComment = count($comment);
               $j = 0;
               foreach ($comment as $k => $v) {

                   $j += $v['level'] * 1;
               }
               $star = round($j/$allComment);

               $this ->assign('star',$star);

           }
        }
        else if($param=='spot'){

            $spotattr = Model_Nav::get_spotTDattr();
            $keyword = Arr::get($_GET, 'keyword');
            $pinyin = $destpy ;
            $themeid = Arr::get($_GET, 'themeid');
            $greatid = Arr::get($_GET, 'greatid');

            $theme = isset($themeid)&&!empty($themeid) ? ORM::factory('spot_attr')->where("id='$themeid'")->find()->get('attrname') : '景点主题';
            $grea = isset($greatid)&&!empty($greatid) ? ORM::factory('spot_attr')->where("id='$greatid'")->find()->get('attrname') : '景点等级';
            $this  ->assign("grea",$grea);
            $this  ->assign("theme", $theme);
            $this->assign("pinyin",$pinyin);// 搜索页面 和 列表页面 跳转过来的id
            $this->assign("themeid",$themeid);//列表页 主题 跳转过来的id
            $this->assign("greatid",$greatid);// 列表页 等级 跳转过来的id
            $this->assign('keyword',$keyword);//  景点 主题 和景点等级 的 变量

        }
        else if($param=='comment'){
            //  去得 评论页面的
            //   获取 目的的标签 ！！
            $destinfo['tag'] = Model_Destinations::get_kindTag($destinfo['id']);


          $destinfo['commentnum'] = Model_Destinations::get_comment_num($destinfo['id'], 20);


            $sql  = "select * FROM `sline_comment` where kindid={$destinfo['id']} and typeid=20  ";
            // $sql .= " and isshow =1 ";
            $sql .= " ORDER BY addtime desc ";

            $comment  = DB::query(1,$sql)->execute()->as_array();
            if(!empty($comment)) {
                $allComment = count($comment);
                $j = 0;
                foreach ($comment as $k => $v) {

                    $j += $v['level'] * 1;
                }
                $star = round($j/$allComment);

                $this ->assign('star',$star);

            }

        }
        else if($param=='restaurant'){
            // 处于调试中  返回
         $msg  = array('jumpUrl'=>'/phone/'.$destpy.'/des-survey','message' =>'饭店正在努力开发中...');
         Common::message($msg);exit;
        }
        else if($param=='map'){
            // 处于调试中  返回
//            $msg  = array('jumpUrl'=>'/phone/'.$destpy.'/des-survey','message' =>'地图正在努力开发中...');
//            Common::message($msg);exit;
            $p     = Common::remove_xss($_GET['page']);
            $p     = !empty($p) ?$p :1;
            $pagesize = 10;// 2 的倍数
            $offset = intval($p-1)*$pagesize;
            $sMap  = Common::remove_xss($_GET['sMap']);
            $rMap  = Common::remove_xss($_GET['rMap']);
            $hMap  = Common::remove_xss($_GET['hMap']);
            $keyword  = Common::remove_xss($_GET['keyword']);

            $mes   = array(0=>$rMap,1=>$hMap,2=>$sMap);
            $out   = Model_Destinations::get_alldata($sMap,$rMap,$hMap,$keyword,$offset,$pagesize,$destinfo['id']);
            //var_dump($out);exit;
            $alltotal = ceil($out[1]*1/$pagesize);
            $this ->assign('mes',$mes);
            $this ->assign('keyword',$keyword);
            $this ->assign('out',$out);
            $this ->assign('alltotal',$alltotal);
            $this ->assign('page',$p);
        }
        else if($param=='human'){
            // 处于调试中  返回
//            $msg  = array('jumpUrl'=>'/phone/'.$destpy.'/des-survey','message' =>'人文正在努力开发中...');
//            Common::message($msg);exit;


        }
        else if($param=='note'){
            // 处于调试中  返回
//            $msg  = array('jumpUrl'=>'/phone/'.$destpy.'/des-survey','message' =>'游记正在努力开发中...');
//            Common::message($msg);exit;
            $info  =array();
            $info['mdd']     =  $destinfo['id'];// 目的的id
            $info['day']     =  Common::remove_xss($_GET["day"]);//出行天数
            $info['way']     =  Common::remove_xss($_GET["way"]);//时间属性  id
            $keyword         =  Common::remove_xss($_GET['keyword']);//关键词

            // 出行天数
            $days   = array(1=>'1天',2=>'2天',3=>'3天',4=>'4~7天',5=>'7天以上');
            $ways   = array(1=>'跟团',2=>'自驾',3=>'自由行');
            $property          = array();
            $property['mdd']   =   isset($info['mdd'])&&!empty($info['mdd']) ? ORM::factory('destinations')->where("id='$info[mdd]'")->find()->get('kindname') : '目的地';
            $property['day']   =   isset($info['day'])&&!empty($info['day'])   ? $days[$info['day']] : '出行天数';
            $property['way']   =   isset($info['way'])&&!empty($info['way'])  ? $ways[$info['way']] : '出行方式';

            //获取文章属性 组 $article_attr[0]时间属性 1 为主题属性 2 距离属性
            $this ->assign("property",$property);
            $this ->assign('keyword',$keyword);
            $this -> assign('info',$info);
        }
        else if($param=='raider'){
            $info  =array();
            $info['mdd']     =  Common::remove_xss($destinfo['id']);// 目的的id
            $info['theme']   =  Common::remove_xss($_GET["theme"]);//主题属性 id
            $info['time']    =  Common::remove_xss($_GET["time"]);//时间属性  id
            $info['address'] =  Common::remove_xss($_GET["address"]);// 地址属性 id
            $keyword         =  Common::remove_xss($_GET['keyword']);//关键词

            //
            $property          = array();
            $property['mdd']   =   isset($info['mdd'])&&!empty($info['mdd'])     ? ORM::factory('destinations')->where("id='$info[mdd]'")->find()->get('kindname') : '目的地';
            $property['theme'] =   isset($info['theme'])&&!empty($info['theme']) ? ORM::factory('article_attr')->where("id='$info[theme]'")->find()->get('attrname') : '主题';
            $property['time'] =   isset($info['time'])&&!empty($info['time'])    ? ORM::factory('article_attr')->where("id=".$info['time'])->find()->get('attrname') : '时间';
            $property['address'] =   isset($info['address'])&&!empty($info['address']) ? ORM::factory('article_attr')->where("id='$info[address]'")->find()->get('attrname') : '距离';

            //获取目的地
            $des           = Model_Article::get_des1(10);
            // 获取属性
            $article_attr  = Model_Article::get_attr();

            $this -> assign('attrs',$article_attr);
            $this -> assign('des',$des);

            //获取文章属性 组 $article_attr[0]时间属性 1 为主题属性 2 距离属性
            $this ->assign("property",$property);
            $this ->assign('keyword',$keyword);
            $this -> assign('info',$info);
        }
        else if($param=='hotel'){

            $pinyin = $destpy;//  目的地

            $paramName = array();//

            $rankId    = Arr::get($_GET, 'rankid');
            //  获得星级
            $paramName['rank']  = !empty($rankId) ?ORM::factory('hotel_rank')->where("id='$rankId'")->find()->get('hotelrank'): '星级';

            $keyword   = Arr::get($_GET, 'keyword');
            //  对  属性处理
                $attrId = Arr::get($_GET, 'attrid');

            $this ->assign('new_attrid',$attrId);
                // 定义 ￥attrid 为  x,px_y,py 结构
            $new_attrid ='';
            if(!empty($attrId)) {
                $attrIdArray = explode('_', $attrId);

                $paramName['attrname'] = array();
                if (!empty($attrIdArray)) {

                    foreach ($attrIdArray as $k => $v) {
                        $attrChildArray  = explode(',',$v);//0 自己 1 父id
                        $paramName['attrname'][$k][0] = ORM::factory('hotel_attr')->where("id={$attrChildArray[0]}")->find()->get('attrname');
                        $paramName['attrname'][$k][1] = $attrChildArray[1];

                        $new_attrid   .= $attrChildArray[0].'_';
                    }
                    $new_attrid = rtrim($new_attrid,'_');

                }
            }

            $priceId   = Arr::get($_GET, 'priceid');

            //  获得 价格、
            if(!empty($priceId)){

            $re['min'] = ORM::factory('hotel_pricelist')->where("id={$priceId}")->find()->get('min');
            $re['max'] = ORM::factory('hotel_pricelist')->where("id={$priceId}")->find()->get('max');
            $paramName['price']  =!empty($re) ? $re['min'].'~'.$re['max'].'元' : '价格';

            }else{

                $paramName['price'] ='价格';
            }

            $this->assign('rankid', Common::remove_xss($rankId));
            $this->assign('paramName', $paramName);
            $this->assign('keyword', Common::remove_xss($keyword));
            $this->assign('attrid', $new_attrid);
            $this->assign('priceid', Common::remove_xss($priceId));
        }

        //获取seo信息
        $seo = Model_Destinations::search_seo($destpy, 0);
        $this->assign('seoinfo', $seo);
        $this->assign('destinfo', $destinfo);
        $this->assign('param', $param);

       $this->display('destination/'.$param);

     //$s =  " You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', Arial, sans-s' at line 1 [ INSERT INTO `sline_notes_list`  (`title_s`, `notes_id`, `addtime`, `content`, `mid`, `m_id`, `displayorder`) VALUES ('第一张','158','1490778390','早上八点准时从家出发，迎着朝阳、带着美好的心情出发了。从霍寨口上高速，走京昆高速，由于两会正在召开，所以北京方向的车都要例行检查，我们过了收费口又被警察扣住查了一下身份证才得以通行。路上车不多，路况不错，大约在高速上走了40来分钟，从行唐北收费口下，开始走下道。下道路况就相对复杂一些了，不仅窄，两边还有好多小村小镇、小集市，车速始终都提不起来，晃晃悠悠半个多小时才到。路两边的麦苗已经返青，绿油油的，看上去整个人的心情都很舒畅。经过一个小镇，具体名字不记得了，路两边全是卖缸炉烧饼的，看的我都好想吃。偶遇拖拉机，老式的拖拉机，估计很多人都没有见过，见过的人就不要吱声了容易暴露你的年龄。一路的风尘仆仆，终于看见牛王寨的路标，右拐进入通往景区的下路，路口有小饭店可以吃饭。拐进去又开了三五分钟才到景区，是不是因为天气的原因呢，感觉整个景区都灰蒙蒙的，景区的牌坊也显得那么有气无力。景区停车场是分阶梯状分布的，都在路的右手边，坡有点陡，开进去的要小心。不过这种路况也算考验了我的开车技术。停好车，长出一口气，可以轻松玩耍了。景区的游客中心正在建设中，目前没有投入使用，售票系统非常人工化，就一个人在那收钱，交钱就能进去了，也太随意了。交了20块钱之后，开始正式进入景区。由于景区正在开发建设中，加之春寒料峭，所以整个景区有些萧条。​进山向右拐有一条路通往大黑牛广场，两边的矮墙上写满了有关牛字的成语，中间还混进去了一个“牛逼哄哄”，这不是成语吧。走过这道成语墙，便是小广场了，靠山的位置矗立着一个大黑牛雕像，前面的五个大字“天下第一牛”也是让我醉了。既然都天下第一牛了，那肯定少不了拍照留念了。从人和牛的合照中就能看出牛有多了吧。小广场上还有一个充气斗牛的娱乐的项目，十五块钱一个人，就我俩这样的上去肯定超不过三秒钟就下来了。参观完大牛开始上山，山路的左侧有一个正在建设的游乐场，现在还不能玩。开始上山，上山的时候我们没有走小路，走的一条弯弯曲曲的盘山公路，刚开始还是公路，到后边就成土路了。坑坑洼洼的土路，还有些碎石子，加之路两边还未发芽的灌木丛，竟也有一种别致的苍凉感。虽然天气阴阴的，但为了凹造型，友友戴了一个超酷的墨镜，确实有些小酷。边走边玩，爬了大约十几分钟的山后终于看到了传说中的玻璃栈道——天云桥。桥旁边还有个小亭子——天云阁，专门供游客休息的。不过这个玻璃栈道跟想象中的有点差距，对于我们女汉子来说，这种高度和长度还差了一点。当别人还在小心翼翼前行的时候，我们已经在桥上蹦嗨翻了天。为了避免吓到大家，再来一组温柔一点的照片。玻璃栈道的出口设置的还是挺先进的，自动感应，自动开闸门、关闸门。站在高处回望玻璃栈道，这样看上去好像稍微有一点刺激感了。继续向前，山路上有一块石头——情人石，好多情侣都在这里拍照留念，对于我们两只单身狗来说还是赶紧走开得了。这个小山整体并不算高，但从一些特定的角度看过去还是挺壮观的。有一块凸起的石头，从这个角度看风景视野极为开阔。当然了，我俩是时刻不忘记拍照，走哪拍哪儿。经过这段山路的时候并没有感觉到有多难走，不过走过之后回过头一看还是蛮惊险的。在往后边就比较好走了，非常开阔的一段路——土路。这条路是通往吊桥的必经之路，远处小亭子和白色观音像之间的桥就是吊桥。吊桥有一个很好听的名字，叫鹊桥，比玻璃栈道长不少，脚底下是用木板铺成的桥面，两边是用铁丝网做的栏杆。走到桥中间的时候整个吊桥都晃晃悠悠的，挺有意思的。瞧下图这位还没开始走呢就已经笑得合不拢嘴了。从吊桥上下来，就到了另外一个山头，山上有一个寺庙叫崇福寺，寺前边又白又高的观音像十分的抢眼，在距离景区还好远的时候就看见了它。鉴于我俩对寺庙都不感兴趣，所以就远观了一下，没有进去参观。和寺庙相通的有一条车行道，考虑到这条路下山比较近，我俩就直接走了车行道。话说，这条路还真陡，一般人开车还真不敢上来。路两边的石碑，连起来读就是“阿弥佗佛”快到山底的时候抬头看架在空中的玻璃栈道和吊桥，又是另外一种感觉。从半山腰走石台阶下山，两边的灌木丛里丢满了垃圾，各种塑料袋子、矿泉水瓶、包装纸等，太煞风景了。强烈呼吁大家出门旅游，一定要爱护环境卫生！一定要爱护环境！一定要爱护环境！路遇一狗狗，你也是要上山欣赏风景去么。台阶直接通往山脚下的农家院，此时的我俩已经饥肠辘辘。发现一个规律，但凡去石家庄周边的景点游玩，大锅菜是万年不变的饭食，哪里都有大锅菜，当然不同的地方大锅菜的味道也不同。我俩一人交了12块钱，大锅菜、馒头、米汤随便吃。菜是好菜，味道也还不错，但就是太咸了。一口菜下去得啃半拉馒头，半碗菜吃了一个半馒头，喝了三碗汤，撑死了，吃太多了，各位不要笑话我。大约1点多吃完饭，到餐厅旁边的桃花岛转一转，所谓的桃花岛也就是一个人工景点，里边开花的估计不是桃花是杏花吧。其中最吸引人的还是笼子里的孔雀了，我俩在那又蹦又跳又叫，好想看一个孔雀开屏，但这几只孔雀都太任性了，就是不开就是不开。在桃花岛边逗孔雀边聊天，不知不觉就到两点钟了，想到晚上还要去会见一帮“狐朋狗友”，那就往回走吧。回来的时候走了另外一条路，虽然有点绕，但躲过了那些拥挤的小村小镇，反而倒比去的时候快了。','1155','A2','1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]"

    }
    /*
    *   ajax 获取 评论
    *
    */
    public  function action_city_comment(){
        // 目的地 id
        $kindid      = Common::remove_xss(Arr::get($_GET,'kindid'));
        // 模型 id
        $typeid       = Common::remove_xss(Arr::get($_GET,'typeid'));

        $page       = Common::remove_xss(Arr::get($_GET,'page'));


        $pagesize     = Common::remove_xss(Arr::get($_GET,'pagesize'));

        $offset   = (intval($page)-1)*$pagesize;
        $sql  = "select * FROM `sline_comment` where kindid=$kindid and typeid=$typeid  ";
        // $sql .= " and isshow =1 ";
        $sql .= " ORDER BY addtime desc ";
        $sql .= " limit {$offset},{$pagesize}";

        $arr  = DB::query(1,$sql)->execute()->as_array();
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN   = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;
        //  对、于 相片 有三种 一种是 会员 网上上 一种是微信 用户的头像  还有一种是 默认图片
        // 昵称是同样的道理
        foreach($arr as $k=>&$v){

            $userinfo = ORM::factory('member',$v['memberid'])->as_array();
            $v['userlitpic'] = empty($userinfo['litpic'])?  empty($v['wximgurl']) ?Common::member_nopic(): $v['wximgurl'] : $userinfo['litpic'];
            $v['nickname']   = $userinfo['nickname'];
            if(preg_match('/^1[34578]{1}\d{9}$/',$v['nickname'])){
                $v['nickname'] ='1***'.substr($v['nickname'],7,4);
            }
            $v['addtime']    = date("Y-m-d H:i:s",$v['addtime']);
            $v['totalpage']  = ceil($totalNum*1/$pagesize);

        }

        echo Product::list_search_format1($arr, $page, $pagesize = 5);exit;
    }
    /*
     *   测试 滑动 模块
     */
    public  function  action_touch(){

        $this ->display('destination/touch');
    }
    /*
     *   我要 评论 页面
     */
    public  function  action_comment_page(){

        $user   = Common::session('member');
        $destpy =Common::remove_xss(Arr::get($_GET,'city'));

        $destinfo = Model_Destinations::get_dest_bypinyin($destpy);

        //   获取 目的的标签 ！！
        $destinfo['tag'] = Model_Destinations::get_kindTag($destinfo['id']);

        $destinfo['commentnum'] = Model_Destinations::get_comment_num($destinfo['id'], 20);

       // $destinfo['litpic']  = Common::img($destinfo['litpic'],600,300);
        //    验证码
        $sql  = "select * FROM `sline_comment` where kindid={$destinfo['id']} and typeid=20  ";
        // $sql .= " and isshow =1 ";
        $sql .= " ORDER BY addtime desc ";

        $comment  = DB::query(1,$sql)->execute()->as_array();
        if(!empty($comment)) {
            $allComment = count($comment);
            $j = 0;
            foreach ($comment as $k => $v) {

                $j += $v['level'] * 1;
            }
            $star = round($j/$allComment);

            $this ->assign('star',$star);

        }

        $this -> assign('user',$user);
        $this ->assign('destinfo',$destinfo);
        $this ->display('destination/city-commentPage');
    }
    /*
    * 目的 地评论
    */
    public  function action_kind_comments(){
        $tags = Common::remove_xss($_POST['tags'])*1;
        for($i=0;$i<$tags;$i++){
            $j       =$i+1;
            $sql = "UPDATE `sline_destinations_tag` SET `click_num`=click_num+1 WHERE id=".$_POST['tag'.$j];
            DB::query(1,$sql)->execute();
        }
        $check = Common::session('check');
        $kindid = Common::remove_xss($_POST['kindid']);
        $typeid = Common::remove_xss($_POST['typeid']);
        $content = Common::remove_xss($_POST['content']);
        $level = Common::remove_xss($_POST['level']);
        $code = Common::remove_xss($_POST['code']);
//        if(Common::session('check')!=$code){
//            echo json_encode(array("status"=>112,'msg'=>'校验码错误，请重新打开页面'));
//            exit;
//        }

        //  Common::session('check',null);
        $time =time();
        //用户信息
        $userInfo = Product::get_login_user_info();
//       if(empty($userInfo)){
//           echo json_encode(array("status"=>112,'msg'=>'用户名错误'));
//           exit;
//       }
        $memberid = $userInfo['mid'];
        //  这里还没有验证
        $model  = ORM::factory('comment');
        $model ->typeid   =$typeid;
        $model ->kindid   =$kindid;
        $model ->memberid =$memberid;
        $model ->content  =$content;
        $model ->isshow   =1;
        $model ->addtime  =$time;
        $model ->level    =$level;

        $flag = $model ->save();
        if($flag){
            echo json_encode(array("status"=>111));// $tags;
            exit;
        }

    }
    /*
     *   目的 地 搜素页面
     */
    public  function  action_search(){

        $destpy = $this ->_destpy;
        $param  = $this ->_param;

        if($param=='spot'){
            $at1      =Model_Spot::get_theme();
            $at2      =Model_Spot::get_dengji();
            $info['theme'] = Arr::get($_GET, 'themeid');
            $info['greatid'] = Arr::get($_GET, 'greatid');
            $this->assign('spat1',$at1);  // 景点主题的  所有子主题
            $this->assign('spat2',$at2);  //  景点等级 的 所有等级符号
        }
        else if($param=='note'){
            $info['day']     =  Common::remove_xss($_GET["day"]);//出行天数
            $info['way']     =  Common::remove_xss($_GET["way"]);//时间属性  id
            // 出行天数
            $days   = array(1=>'1天',2=>'2天',3=>'3天',4=>'4~7天',5=>'7天以上');

            $ways   = array(1=>'跟团',2=>'自驾',3=>'自由行');

            $this -> assign('days',$days);
            $this -> assign('ways',$ways);
        }
        else if($param=='hotel'){
            $info['rankid']    = Arr::get($_GET, 'rankid');
            //  获得星级
            //  对  属性处理
            $info['attrid'] = Arr::get($_GET, 'attrid');

            //var_dump($info['attrid']);exit;

            $info['price']   = Arr::get($_GET, 'priceid');

        }
        else if($param=='raider'){

            $info['theme']   =  Common::remove_xss($_GET["theme"]);//主题属性 id
            $info['time']    =  Common::remove_xss($_GET["time"]);//时间属性  id
            $info['address'] =  Common::remove_xss($_GET["address"]);// 地址属性 id
            // 获取属性
            $article_attr  = Model_Article::get_attr();

            $this -> assign('attrs',$article_attr);
        }

        $destinfo = Model_Destinations::get_dest_bypinyin($destpy);

        $this ->assign('info',$info);
        $this ->assign('param' ,$param);
        $this->assign('destinfo', $destinfo);
        $this ->display('destination/search');
    }
    /*
     *   特产 方法
     */
    public  function action_specialty_s(){
           // echo 2222;exit;
        $destPy = Common::remove_xss($_GET['destid']);
        $attrId =  Common::remove_xss($_GET['attrid']);
        $p      = Common::remove_xss(Arr::get($_GET,'page'));
        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));
       //echo $destPy;exit;
        $pagesize = 10;
        $route_array = array(
            'controller' =>$this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'attrid' => $attrId,
        );
        $data = Model_Destinations::search_result($route_array,$keyword,$p,$pagesize);

        echo Product::list_search_format1($data, $p,$pagesize);
    }
    /*
     *   特产详情
     */

     public  function  action_specialty_show(){

         //特产 id
         $speid    =  Common::remove_xss($_GET['speid']);
         //目的地 id
         $kindid   =  Common::remove_xss($_GET['kindid']);
         //获取详情 -+
         $detial   = Model_Destinations::getSpecialtyDetial($speid);
         //  获取 目的地名称
         $detial[0]['kind'] = ORM::factory("destinations",$kindid)->as_array();

         // 更新 详情

//         //  获取 图册
//         preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg]))[\'|\"].*?[\/]//',$detial[0]['content'],$arr);
//         //  $arr  0  是 img标签数组  1 是 src 地址

        // $this ->assign('tuce',$arr);
         $this ->assign('info',$detial[0]);
         if (!empty($detial))
         {
             $this->display('destination/specialty_show');

         } else
         {
             $this->request->redirect("error/404");
         }


     }
    /**
     * 子站显示
     */
    public function action_sub_station()
    {

        $param = $this->request->param();
        //目的地检测
        $dest=Model_Destinations::get_dest_bypinyin($param['pinyin']);
        if (empty($dest) || Model_Model::exsits_model($param['model']))
        {
            $this->_jump_404();
        }
        //获取内容
        $html = file_get_contents($this->host_url . "/{$param['model']}/show_{$param['aid']}.html?webid={$dest['id']}");
        if (empty($html))
        {
            $this->_jump_404();
        }
        $this->response->body($html);
    }

    /**
     * 跳转404页面
     */
    private function _jump_404()
    {
        $url = $this->host_url . '/404';
        header("Location:{$url}");
        exit;
    }

}