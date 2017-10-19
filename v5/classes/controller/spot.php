<?php defined('SYSPATH') or die('No direct script access.');
include(BASEPATH.'/api/meijing/base.php');


/**

 * Class Controller_Spot

 * 景点/门票控制器

 */

class Controller_Spot extends Stourweb_Controller

{

    private $typeid = 5;

    private $_cache_key = '';

    public function before()

    {

        parent::before();

        //检查缓存

        $this->_cache_key = Common::get_current_url();

        $html = Common::cache('get',$this->_cache_key);

        $genpage = Common::remove_xss(Arr::get($_GET,'genpage'));

        if(!empty($html) && empty($genpage))

        {

            echo $html;

            exit;

        }

        $channelname = Model_Nav::get_channel_name($this->typeid);

        $this->assign('typeid', $this->typeid);

        $this->assign('channelname', $channelname);

    }



    /**

     * 首页

     */

    public function action_index()

    {
//        Model_Spot::get_minprice(1);
//        exit;
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);

        $this->assign('seoinfo', $seoinfo);

        //==================07.06 fengjishu   start
        $recommend_spot   = Model_Spot::get_recommend_spot();//增加是否为推荐的景点 方法
        $recommend_spot2  = Model_Spot::get_recommend_spot2();
        $hot_mdd          = Model_Spot::get_hot_mdd();//获取热门mdd;

        $this ->assign('hot_mdd',$hot_mdd);
        $this->assign('r_spot',$recommend_spot);
        $this->assign('r_spot2',$recommend_spot2); 
        //==================07.06  fengjishu  end

        //首页模板

        $templet = Product::get_use_templet('spot_index');

        $admin   =  Common::remove_xss(Arr::get($_GET, 'feng'));
          //if($admin=='feng'){
              $templet = $templet ? $templet : 'spot/Ticket-index';
//          }else{
//              $templet = $templet ? $templet : 'spot/index';
//          }

        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);

    }

    public function action_test(){
        header("Content-type: text/html; charset=utf-8");
        exit;
        $testObj = new Base();
        $goodsId='659';
        $num='1';
        $order_note='测试订单多个商品';
        $forecasttime='2016-12-16 13:56';
        $outOrderId='05506957262484';
        $phone='13931993592';
        $guest_name='檀轶超';
        $identityno='130133198805023456';
        $consignee='檀轶超';
        $address='河北石家庄';
        $zipcode='051530';
        $rs = $testObj->submitOrder($goodsId,$num,$order_note,$forecasttime,$outOrderId,$phone,$guest_name,$identityno,$consignee,$address,$zipcode,$isR=0,$meberInfo=array());
        var_dump($rs);exit;
    }
    /*
     *   tui piao
     */
   public function action_MJtuipiao(){
       $testObj  = new Base();
       $outBackId  =222222222222;
       $third_orderid = 806617;
          exit;
       $rs = $testObj->refundByOrderID($outBackId, $third_orderid);
       $file = fopen("refundByOrderID.txt", "a+");
       fwrite($file, date("Y-md H:i:s", time()) . "状态" . $rs['head']['status'] . "成功票码：" . $rs['body']['scredenceno'] . "，失败票码：" . $rs['body']['fcredenceno'] . "退票成功人数" . $rs['body']['backCount'] . "第三方订单" . $third_orderid . "\r\n");
       fclose($file);
       return $rs;
   }
    /*

     * 搜索页

     */

    public function action_list()

    {



        //参数值获取

        $destPy = $this->request->param('destpy');

        $sign = $this->request->param('sign');



        $priceId = intval($this->request->param('priceid'));

        $sortType = intval($this->request->param('sorttype'));

        $attrId = $this->request->param('attrid');

        $p = intval($this->request->param('p'));

        $attrId = !empty($attrId) ? $attrId : 0;



        $destPy = $destPy ? $destPy : 'all';

        $pagesize = 12;





        $route_array = array(

        'controller' => $this->request->controller(),

        'action' => $this->request->action(),

        'destpy' => $destPy,

        'priceid'=> $priceId,

        'sorttype'=> $sortType,

        'attrid' => $attrId

    );

        //$start_time=microtime(true); //获取程序开始执行的时间

        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));

        $admin   =  Common::remove_xss(Arr::get($_GET, 'feng'));

        $out = Model_Spot::search_result($route_array,$keyword,$p,$pagesize);

        $pager = Pagination::factory(

            array(



                'current_page' => array('source' => 'route', 'key' => 'p'),
                //'current_page' => array('source' => 'query_string', 'key' => 'p'),

                'view'=>'default/pagination/search1',

                'total_items' => $out['total'],

                'items_per_page' => $pagesize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法



        $pager->route_params($route_array);

        $destId = $destPy=='all' ? 0 : ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');

        $destId = $destId ? $destId : 0;

        //目的地信息

        $destInfo = array();

        $preDest = array();

        if($destId)

        {

            $destInfo = ORM::factory('destinations',$destId)->as_array();

            $preDest = Model_Destinations::get_prev_dest($destId);

        }

        //$end_time=microtime(true);

        //$total=$end_time-$start_time; //计算差值
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);

        $this->assign('seoinfo', $seoinfo);

        $chooseitem = Model_Spot::get_selected_item($route_array);

        $searchTitle = Model_Spot::gen_seotitle($route_array);

        $this->assign('destid',$destId);

        $this->assign('destinfo',$destInfo);

        $this->assign('predest',$preDest);

        $this->assign('list',$out['list']);

        $this->assign('chooseitem',$chooseitem);

        $this->assign('searchtitle',$searchTitle);

        $this->assign('param',$route_array);

        $this->assign('currentpage',$p);

        $this->assign('pageinfo',$pager);

        $templet = Product::get_use_templet('spot_list');


         //if($admin=='feng'){
             $templet = $templet ? $templet : 'spot/Ticket-list';
//         }else{
//             $templet = $templet ? $templet : 'spot/list';
//         }

        $this->display($templet);



        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);



    }





    /*

     * 预订

     * */

    public function action_book()

    {

        //会员信息

        $userInfo = Product::get_login_user_info();

        //要求预订前必须登陆

        if(empty($userInfo['mid']))

        {

            $this->request->redirect('/member/login/?redirecturl='.urlencode(Common::get_current_url()));

        }

        $productId = Common::remove_xss(Arr::get($_GET,'productid'));

        $suitId = Common::remove_xss(Arr::get($_GET,'suitid'));

        //====fengjsihu  07.26 start
        $paytype =Common::remove_xss(Arr::get($_GET,'paytype'));

        //====fengjsihu  07.26 end

        //防止空提交

        if(empty($productId) || empty($suitId))

        {

            $this->request->redirect($this->request->referrer());

        }

        //预订日期

        $useDate = Arr::get($_GET,'usedate');

        //套餐信息

        $suitInfo = Model_Spot_Suit::suit_info($suitId);

        //产品信息

        $info = ORM::factory('spot',$productId)->as_array();
        //========fengjishu  08.01
        //$info['price'] = Currency_Tool::price($info['price']);
        $info['price']   = $suitInfo['ourprice'];
        //=======fengjshu end

        $info['usedate'] = $useDate;

        //产品编号

        $info['series'] = Product::product_number($info['id'], '05');



        //frmcode

        $code = md5(time());

        Common::session('code',$code);





        //积分抵现所需积分

        $needjifen = $GLOBALS['cfg_exchange_jifen'] * $suitInfo['jifentprice']; //所需积分



        $this->assign('info',$info);

        $this->assign('suitInfo',$suitInfo);

        $this->assign('userInfo',$userInfo);

        $this->assign('needjifen',$needjifen);

        $this->assign('frmcode',$code);

        $this->display('spot/book');

    }



    /*

     * 创建订单

     * */



    public function action_create()

    {

        $frmCode = Arr::get($_POST,'frmcode');

        $checkCode = strtolower(Arr::get($_POST,'checkcode'));

        //验证码验证

        /*if(!Captcha::valid($checkCode)||empty($checkCode))

        {

            exit();

        }*/

        //安全校验码验证

        $orgCode = Common::session('code');

        if($orgCode!=$frmCode)

        {

            exit();

        }

        $userInfo = Product::get_login_user_info();

        $memberId = $userInfo ? $userInfo['mid'] : 0;//会员id

        $webid = intval(Arr::get($_POST,'webid'));//网站id

        $dingNum = intval(Arr::get($_POST,'dingnum'));//数量

        $suitId = intval(Arr::get($_POST,'suitid')) ;

        $productId = intval(Arr::get($_POST,'productid'));//产品id

        $useDate = Arr::get($_POST,'usedate');//使用日期



        $linkMan = Arr::get($_POST,'linkman');//联系人姓名

        $linkTel = Arr::get($_POST,'linktel');//联系人电话

        $linkEmail = Arr::get($_POST,'linkemail');//联系人邮箱

        $remark = Arr::get($_POST,'remark');//订单备注





        $payType = Arr::get($_POST,'paytype');//支付方式

        $useJifen = intval(Arr::get($_POST,'usejifen'));//是否使用积分



        //产品信息

        $info = ORM::factory('spot',$productId)->as_array();



        //套餐信息

        $suitInfo = Model_Spot_Suit::suit_info($suitId);

        //============封冀蜀 07.14  start
        //景区结算价= 最近的报价 成本 *数量

        $spotprice = $suitInfo['lastoffer']['adultbasicprice']*$dingNum*1;

        //============封冀蜀 07.14   end

        $orderSn = Product::get_ordersn('05');



        //判断积分使用是否满足需求.

        $needJifen = 0;

        if($useJifen)

        {

            $needJifen = $GLOBALS['cfg_exchange_jifen'] * $info['jifentprice']; //所需积分

            if($userInfo['jifen']<$needJifen)

            {

                $useJifen = 0;

            }

        }

        //订单状态(全款支付,定金支付,二次确认)

        $status = $suitInfo['paytype'] !=3 ? 1 : 0;



        $arr = array(

            'ordersn'=>$orderSn,

            'webid'=>$webid,

            'typeid'=>$this->typeid,

            'productautoid'=>$info['id'],

            'productaid'=>$info['aid'],

            'productname'=>$suitInfo['title'],//07.07  封冀蜀 将￥info{'title'}换成 这个

            'spotprice'  => $spotprice,  //07.14 封冀蜀  加入景区结算价

            'partner_number' => $info['PartnerNumber'],

            'price'=>$suitInfo['ourprice'],

            'usedate'=>$useDate,

            'dingnum'=>$dingNum,

            'departdate'=>'',

            'linkman'=>$linkMan,

            'litpic' => $info['litpic'],//  08.02 fengjishu  jia

            'linktel'=>$linkTel,

            'linkemail'=>$linkEmail,

            'jifentprice'=>$suitInfo['jifentprice'],

            'jifenbook'=>$suitInfo['jifenbook'],

            'jifencomment'=>$suitInfo['jifencomment'],

            'addtime'=>time(),

            'memberid'=>$memberId,

            'dingjin'=>$suitInfo['dingjin'],

            'paytype'=>$suitInfo['paytype'],

            'suitid'=>$suitId,

            'usejifen'=>$useJifen,

            'needjifen'=>$needJifen,

            'status'=>$status,

            'remark'=>$remark,

            'isneedpiao'=>0



        );



        //添加订单

        if(Product::add_order($arr))

        {

            //$orderInfo = Model_Member_Order::get_order_by_ordersn($orderSn);

            //这里作判断是跳转到订单查询页面

            if($suitInfo['paytype']!=3)

            {
                  //fengjishu  07.26 加入 paytype 参数
                $payurl = "{$GLOBALS['cfg_basehost']}/payment/?ordersn=".$orderSn."&paytype=".$suitInfo['paytype'];

                $this->request->redirect($payurl);

            }

            else

            {

                $this->request->redirect("/member");

            }

        }

    }



    /*

     * 内容页

     */

    public function action_show()

    {

        $aid = Common::remove_xss($this->request->param('aid'));

        //详情

        $info = Model_Spot::spot_detail($aid);

        //seo

        $seoInfo = Product::seo($info);

        //产品图片

        $info['piclist'] = Product::pic_list($info['piclist']);

        //属性列表

        $info['attrlist'] = Model_Spot::spot_attr($info['attrid']);

        //最低价

        $price = Model_Spot::get_minprice($info['id']);

        $info['price'] = $price['price'];

        $info['sellprice'] = $price['sellprice'];

        //点评数

        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->typeid);

        //销售数量

        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->typeid) + intval($info['bookcount']);

        //产品编号

        $info['series'] = Product::product_number($info['id'], '05');

        //产品图标

        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        //支付方式

        $paytypeArr=explode(',',$GLOBALS['cfg_pay_type']);

        //满意度

        $info['score'] = $info['satisfyscore'] ? $info['satisfyscore'].'%' : mt_rand(90,98).'%';

        //是否有门票

        $info['hasticket'] = Model_Spot::has_ticket($info['id']);



        //目的地上级

        if($info['finaldestid']>0)

        {

            $predest = Product::get_predest($info['finaldestid']);

        }

 //======================================06.29 fengjishu
        //=======================06.30
        $page=Common::remove_xss($_GET['page'])*1;
        if(!$page){
            $page =1;
        }
        $info['offset'] = ($page-1)*2;
        $this->assign('page', $page);
        //==========================06.30
        $desc      =Common::remove_xss($_GET['time_sort']);
        $time_sort =!empty($desc)&&isset($desc)?$desc:'asc';
        $this->assign("time_sort",$time_sort);
        //==========获取 用户的ip  08.03
        $userip = Common::session('userip');
        $spotid = Common::session('spotid');
       // echo $spotid;exit;
        $userip = $info['id']==$spotid ? 1 : 0 ;
        $this ->assign('userip',$userip);

        //========fengjsihu  获取 用户的ip
//=======================================06329 fengjishu

        //扩展字段信息]
       // $extend_info = Model_Spot::get_minprice($info['id']);08.02 封冀蜀 隐藏
        $extend_info = Model_Spot::get_extend_info($info['id']);
        //===============fengjishu 06.30
        $flag  ="spot";
        $this->assign('flag',$flag);
        //===============fengjishu 06.30
        $this->assign('seoinfo', $seoInfo);

        $this->assign('info', $info);

        $this->assign('paytypeArr',$paytypeArr);

        $this->assign('extendinfo',$extend_info);

        $this->assign('predest',$predest);

        $admin   =  Common::remove_xss(Arr::get($_GET, 'feng'));
     //   if($admin=='feng'){
            $this->display('spot/Ticket-details');
//        }else{
//            $this->display('spot/show');
//        }
        //$this->display('spot/show');


        Product::update_click_rate($info['aid'], $this->typeid);

        //缓存内容
//
//        $content = $this->response->body();
//
//        Common::cache('set',$this->_cache_key,$content);

    }


    /*
       * ajax _ recommendnum fengjishu
       * */
    public function action_ajax_recommendnum()
    {   //=====获取ip 地址
        $user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
        $user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
        $spotid = Common::remove_xss($_GET['spotid']);
        //=========
        if(isset($_COOKIE['userip'])&&$_COOKIE['userip']==$user_IP&&$_COOKIE['spotid']==$spotid){
            echo json_encode(array('mes' => '您已推荐','status'=>0));
            exit;
        }else {
            $rem = Common::remove_xss($_GET['rem']);


            $num = $rem * 1 + 1;
            //echo $num;exit;
            $m = ORM::factory('spot', $spotid);

            $m->recommendnum = $num;

            $m->save();
            if ($m->saved()) {
                setcookie("userip", $user_IP, time() + 3600);//设置cookie
                setcookie("spotid", $spotid, time() + 3600);//设置cookie

                Common::session('userip', $_COOKIE['userip']);// 将cookie 存入 session
                Common::session('spotid',$spotid);// 将cookie 存入 session

                echo json_encode(array('num' => $num, 'ip' => $user_IP));
                exit;
            }
        }
    }


    /*

    * 首页ajax请求获取景点

    * */

    public function action_ajax_index_spot()

    {

        $destid = Arr::get($_GET,'destid');

        $pagesize = Arr::get($_GET,'pagesize');

        $offset = 0;

        $list = Model_Spot::get_spot_bymdd($destid,$pagesize,$offset);

        echo json_encode(array('list'=>$list));



    }
   /*
    * 评论
    * */
    public function action_ajax_add_comment()
    {

        if (!$this->request->is_ajax()) exit();
        $checkcode = Common::remove_xss(Arr::get($_POST, 'checkcode'));
       // 06.08 fengjishu 隐藏
        $articleid = Common::remove_xss(Arr::get($_POST, 'articleid'));

        $content = Common::remove_xss(Arr::get($_POST, 'content'));
        $typeid = Common::remove_xss(Arr::get($_POST, 'typeid'));
        $dockid = Common::remove_xss(Arr::get($_POST, 'dockid'));
        //$nickname = Common::remove_xss(Arr::get($_POST, 'nickname'));
        //验证码 06.08 fengjishu 隐藏
        $checkcode = strtolower($checkcode);
//        if (!Captcha::valid($checkcode)) {
//            echo 1; //验证码错误
//            exit;
//        }
        $memberId = Cookie::get('st_userid') ? Cookie::get('st_userid') : '0';
        $m = ORM::factory('comment');
        $m->articleid = $articleid;
        $m->content = $content;
        $m->typeid = $typeid;
        $m->memberid = $memberId;
        $m->dockid = $dockid;
        $m->addtime = time();
        $m->isshow = 1;
        $m->save();
        if ($m->saved()) {
            echo 3;
            exit;
        }
    }
    /*
     * 接收推送的验票结果
     */
    public function action_ticket(){
        $testObj = new Base();
        $postContent = $testObj->toWe();
        $outOrderId = $postContent['outOrderId'];
        $outBackId = $postContent['outBackId'];
        $backStatus = $postContent['backStatus'];
        if(empty($postContent['outOrderId'])){
            if($backStatus == 2){
                $bool = DB::update('member_order')->where('back_order_number', '=', "{$outBackId}")->set(array('third_status' => 1))->execute();
                $re = empty($bool) ? 0 : 1;
                echo $re;exit;
            }else{
                $bool = DB::update('member_order')->where('back_order_number', '=', "{$outBackId}")->set(array('third_status' => 2))->execute();
                $re = empty($bool) ? 0 : 1;
                echo $re;exit;
            }
        }else{
            if(empty($outOrderId)){
                echo 0;
                exit;
            }else{
                $memberOrderModel = new Model_Member_Order();
                $rsArr = $memberOrderModel->check_order_info($outOrderId);//改变订单状态为已经验单
                //exit($rsArr['status']);//处理系统验票完成的逻辑，成功 echo 1;失败 echo 0;
                echo $rsArr['status'];
                exit;
            }
        }

    }
    //处理退款的逻辑，成功 echo 1;失败 echo 0;
    public function action_refund(){
        $testObj = new Base();
        $postContent = $testObj->toWe();
        $outBackId = $postContent['outBackId'];
        $backStatus = $postContent['backStatus'];

        if($backStatus == 2){
            $bool = DB::update('member_order')->where('back_order_number', '=', "{$outBackId}")->set(array('third_status' => 1))->execute();
            $re = empty($bool) ? 0 : 1;
            echo $re;exit;
        }elseif($backStatus == 3){
            $bool = DB::update('member_order')->where('back_order_number', '=', "{$outBackId}")->set(array('third_status' => 2))->execute();
            $re = empty($bool) ? 0 : 1;
            echo $re;exit;
        }else{
            echo 0;
            exit;
        }
    }

}