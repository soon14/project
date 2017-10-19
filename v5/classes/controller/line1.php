<?php defined('SYSPATH') or die('No direct script access.');



/**

 * Class Controller_Line

 * 线路控制器

 */

class Controller_Line extends Stourweb_Controller

{

    private $typeid = 1;

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

        $channelname = Model_Nav::get_channel_name(1);

        $this->assign('typeid', $this->typeid);

        $this->assign('channelname', $channelname);

    }



    /**

     * 线路首页

     */

    public function action_index()

    {



        $seoinfo = Model_Nav::get_channel_seo($this->typeid);

        $this->assign('seoinfo', $seoinfo);
        $selfDriving     = Model_Article::get_hbTravels("19");// 自驾回顾
        $this->assign("selfDriving",$selfDriving);

        //首页模板
         $templet = Product::get_use_templet('line_index');

        $templet = $templet ? $templet : 'line/index';


        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);

    }


    /*

     * 线路搜索页

     */

    public function action_list()

    {





        //参数值获取

        $destPy = $this->request->param('destpy');

        $sign = $this->request->param('sign');

        $dayId = intval($this->request->param('dayid'));

        $priceId = intval($this->request->param('priceid'));

        $sortType = intval($this->request->param('sorttype'));

        $displayType = intval($this->request->param('displaytype'));

        $startcityId = intval($this->request->param('startcityid'));

        $attrId = $this->request->param('attrid');

        $p = intval($this->request->param('p'));

        $attrId = !empty($attrId) ? $attrId : 0;

        $destPy = $destPy ? $destPy : 'all';

        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));





        $pagesize = 12;





        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'destpy' => $destPy,

            'dayid' => $dayId,

            'priceid'=> $priceId,

            'sorttype'=> $sortType,

            'displaytype'=>$displayType,

            'startcityid'=>$startcityId,

            'attrid' => $attrId,

        );

        //$start_time=microtime(true); //获取程序开始执行的时间



        $out = Model_Line::search_result($route_array,$keyword,$p,$pagesize);

        $pager = Pagination::factory(

            array(



                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

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







        $chooseitem = Model_Line::get_selected_item($route_array);

        $searchTitle = Model_Line::gen_seotitle($route_array);

        $this->assign('destid',$destId);

        $this->assign('destinfo',$destInfo);

        $this->assign('predest',$preDest);

        $this->assign('list',$out['list']);

        $this->assign('chooseitem',$chooseitem);

        $this->assign('searchtitle',$searchTitle);

        $this->assign('param',$route_array);

        $this->assign('currentpage',$p);

        $this->assign('pageinfo',$pager);



        $templet = Product::get_use_templet('line_list');

        $templet = $templet ? $templet : 'line/list';

        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);



    }





    /*

  * 线路预订

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

        $productId = Common::remove_xss(Arr::get($_GET,'lineid'));

        $suitId = Common::remove_xss(Arr::get($_GET,'suitid'));

        //如果参数为空,则返回上级页面

        if(empty($productId)||empty($suitId))

        {

            $this->request->redirect($this->request->referrer());

        }

        //预订日期

        $useDate = Arr::get($_GET,'usedate');

        //套餐信息

        $suitInfo = Model_Line_Suit::suit_info($suitId);

        //产品信息

        $info = ORM::factory('line',$productId)->as_array();

        //套餐按出发日期价格

        $suitPrice = Model_Line_Suit::suit_price($suitId,$useDate);

        //保险信息

        $insuranceInfo = Model_Line::get_insurances($info['insuranceids'],$info['lineday']);





        $info['usedate'] = $useDate;

        //产品编号

        $info['series'] = Product::product_number($info['id'], '01');





        //frmcode

        $code = md5(time());

        Common::session('code',$code);



        //积分抵现所需积分

        $needjifen = $GLOBALS['cfg_exchange_jifen'] * $suitInfo['jifentprice']; //所需积分



        $this->assign('info',$info);

        $this->assign('suitInfo',$suitInfo);

        $this->assign('suitPrice',$suitPrice);

        $this->assign('insuranceInfo',$insuranceInfo);

        $this->assign('userInfo',$userInfo);

        $this->assign('needjifen',$needjifen);

        $this->assign('frmcode',$code);

        $this->display('line/book');

    }



    /*

 * 创建订单

 * */



    public function action_create()

    {

        $frmCode = Arr::get($_POST,'frmcode');

        $checkCode = strtolower(Arr::get($_POST,'checkcode'));

        //验证码验证

        if(!Captcha::valid($checkCode)||empty($checkCode))

        {

            exit();

        }

        //安全校验码验证

        $orgCode = Common::session('code');

        if($orgCode!=$frmCode)

        {

            exit();

        }

        //会员信息

        $userInfo = Product::get_login_user_info();

        $memberId = $userInfo ? $userInfo['mid'] : 0;//会员id

        $webid = intval(Arr::get($_POST,'webid'));//网站id

        $adultNum = intval(Arr::get($_POST,'adult_num'));//成人数量

        $childNum = intval(Arr::get($_POST,'child_num'));//小孩数量

        $oldNum = intval(Arr::get($_POST,'old_num'));//老人数量

        $suitId = intval(Arr::get($_POST,'suitid'));//套餐id

        $lineId = intval(Arr::get($_POST,'lineid'));//线路id

        $useDate = Arr::get($_POST,'usedate');//出发日期

        $linkMan = Arr::get($_POST,'linkman');//联系人姓名

        $linkTel = Arr::get($_POST,'linktel');//联系人电话

        $linkEmail = Arr::get($_POST,'linkemail');//联系人邮箱

        $remark = Arr::get($_POST,'remark');//订单备注

        $roomBalanceNum = intval(Arr::get($_POST,'roombalance_num'));//单房差数量

        $roomBalance_Paytype = intval(Arr::get($_POST,'roombalance_paytype'));//单房差支付方式.

        $isneedBill = intval(Arr::get($_POST,'isneedbill'));//是否需要发票



        $billTitle = Arr::get($_POST,'bill_title');//发票抬头

        $billReceiver = Arr::get($_POST,'bill_receiver');//发票接收人

        $billPhone = Arr::get($_POST,'bill_phone');//发票联系人电话

        $billProv = Arr::get($_POST,'bill_prov');//发票联系人省份

        $billCity = Arr::get($_POST,'bill_city');//发票联系人城市

        $billAddress = Arr::get($_POST,'bill_address');//发票联系人地址

        $payType = Arr::get($_POST,'paytype');//支付方式

        $insuranceCode = Arr::get($_POST,'insurance_code');//选择的保险

        $useJifen = intval(Arr::get($_POST,'usejifen'));//是否使用积分



        //发票信息

        $billInfo = array(

            'title'=>$billTitle,

            'receiver'=>$billReceiver,

            'mobile'=>$billPhone,

            'province'=>$billProv,

            'city'=>$billCity,

            'address'=>$billAddress

        );



        //游客信息读取

        $t_name = Arr::get($_POST,'t_name');

        $t_cardtype = Arr::get($_POST,'t_cardtype');

        $t_cardno = Arr::get($_POST,'t_cardno');

        $tourer = array();

        $totalNum = $adultNum + $childNum + $oldNum;

        for($i=0;$i<$totalNum;$i++)

        {

            $tourer[] = array(

                'name'=>$t_name[$i],

                'cardtype'=>$t_cardtype[$i],

                'cardno'=>$t_cardno[$i]

            );

        }





        //套餐信息

        $suitInfo = Model_Line_Suit::suit_info($suitId);

        //产品信息

        $info = ORM::factory('line',$lineId)->as_array();

        //套餐按出发日期价格

        $suitPrice = Model_Line_Suit::suit_price($suitId,$useDate);

        $orderSn = Product::get_ordersn('01');



        //判断积分使用是否满足需求.

        $needJifen = 0;

        if($useJifen)

        {

            $needJifen = $GLOBALS['cfg_exchange_jifen'] * $suitInfo['jifentprice']; //所需积分

            if($userInfo['jifen']<$needJifen)

            {

                $useJifen = 0;

            }

        }

        //订单状态(全款支付,定金支付,二次确认)

        $status = $suitInfo['paytype'] != 3 ? 1 : 0;



        $arr = array(

            'ordersn'=>$orderSn,

            'webid'=>$webid,

            'typeid'=>$this->typeid,

            'productautoid'=>$info['id'],

            'productaid'=>$info['aid'],

            'productname'=>$info['title'],

            'price'=>$suitPrice['adultprice'],

            'childprice'=>$suitPrice['childprice'],

            'oldprice'=>$suitPrice['oldprice'],

            'usedate'=>$useDate,

            'dingnum'=>$adultNum,

            'childnum'=>$childNum,

            'oldnum'=>$oldNum,

            'linkman'=>$linkMan,

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

            'roombalance'=>$suitPrice['roombalance'],

            'roombalancenum'=>$roomBalanceNum,

            'roombalance_paytype'=>$roomBalance_Paytype,

            'status'=>$status,

            'remark'=>$remark,

            'isneedpiao'=>$isneedBill



        );



        //添加订单

        if(Product::add_order($arr))

        {





            $orderInfo = Model_Member_Order::get_order_by_ordersn($orderSn);

            Model_Member_Order::add_tourer_pc($orderInfo['id'],$tourer,$memberId);



            //发票信息存储

            if($isneedBill)

            {

                Model_Member_Order::add_bill_info($orderInfo['id'],$billInfo);

            }



            //保险信息存储

            if($insuranceCode)

            {



                Model_Member_Order::add_insurance_order(

                    $insuranceCode,

                    $orderInfo['ordersn'],

                    $totalNum,

                    $orderInfo['memberid'],

                    $orderInfo['usedate'],

                    $info['lineday'],

                    $tourer

                );

            }

            //这里作判断是跳转到会员中心还是支付页面

            if($suitInfo['paytype']!=3)

            {

                $payurl = "{$GLOBALS['cfg_basehost']}/payment/?ordersn=".$orderSn;

                $this->request->redirect($payurl);

            }

            else

            {

                $this->request->redirect("/member");

            }


        }


    }



    /*

     * 线路内容页

     */

    public function action_show()

    {

        $id = Common::remove_xss($this->request->param('aid'));

        //线路详情

        $info = Model_Line::detail($id);

        //seo

        $seoInfo = Product::seo($info);

        //产品图片

        $info['piclist'] = Product::pic_list($info['piclist']);

        //属性列表

        $info['attrlist'] = Model_Line::line_attr($info['attrid']);

        //获取套餐起止日期

        $info['linedate'] = Model_Line::line_date($info['id']);
        //==================获得 suit 套餐   fengjishu  07.07

        $info['suitid']   = ORM::factory('line_suit')

                            ->where("lineid=" . $info['id'])

                            ->find()

                            ->get(id);
        $time   =date("Y-m-d",time());
        $time   = strtotime($time);
        $endtime =strtotime($info['linedate']['endtime']);
        if($time<=$endtime){
            $info['cha_time'] =1;
        }else{
            $info['cha_time'] =-1;
        }

        //==================  ============== end  fengjishu 07.07

        //最低价

        $info['price'] = Model_Line::get_minprice($info['id']);

        //出发城市

        $info['startcity'] = Model_Startplace::start_city($info['startcity']);

        //点评数

        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], 1);

        //销售数量

        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], 1) + intval($info['bookcount']);

        //产品编号

        $info['series'] = Product::product_number($info['id'], '01');

        //产品图标

        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        //支付方式

        $paytypeArr=explode(',',$GLOBALS['cfg_pay_type']);

        //满意度

        $info['score'] = $info['satisfyscore'] ? $info['satisfyscore'].'%' : mt_rand(90,98).'%';



        //目的地上级

        if($info['finaldestid']>0)

        {

            $predest = Product::get_predest($info['finaldestid']);

            $this->assign('predest',$predest);

        }



        //扩展字段信息

        $extend_info = ORM::factory('line_extend_field')

            ->where("productid=" . $info['id'])

            ->find()

            ->as_array();



        //var_dump($info);

        $this->assign('seoinfo', $seoInfo);

        $this->assign('info', $info);

        $this->assign('paytypeArr',$paytypeArr);

        $this->assign('extendinfo',$extend_info);



        $templet = Product::get_use_templet('line_show');

        $templet = $templet ? $templet : 'line/show';

        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);

        Product::update_click_rate($info['aid'], $this->typeid);



    }



    public function action_print()

    {

        $id = Common::remove_xss($this->params['id']);

        if(empty($id))

        {

            exit('wrong id');

        }

        //线路详情

        $info = ORM::factory('line',$id)->as_array();

        $info['startcity'] = Model_Startplace::start_city($info['startcity']);

        $this->assign('info',$info);

        $this->display('line/print');

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);





    }



    /*

     * 验证验证码是否正确

     * */

    public function action_ajax_check_code()

    {

        $flag = 'false';

        $checkcode = strtolower(Arr::get($_POST,'checkcode'));

        if(Captcha::valid($checkcode))

        {

            $flag = 'true';

        }

        echo $flag;

    }



    /*

     * ajax获取线路套餐报价

     * */

    public function action_ajax_line_suit_price()

    {



        $lineid = Arr::get($_POST,'lineid');

        $suitid = Arr::get($_POST,'suitid');



        $arr = Model_Line::get_suit_price($suitid);

        $str='{"data":[ ';

        $dayBeforeNum=0;

        if(!empty($lineid))

        {

            $dyaBeforeNum = ORM::factory('line',$lineid)->get('linebefore');



            $dayBeforeNum=!empty($dyaBeforeNum) ? $dyaBeforeNum : $dyaBeforeNum;

        }

        $dayBefore = time();

        if(Model_Line::is_line_before($lineid))

        {

            $dayBefore+=$dayBeforeNum*24*60*60;

        }



        foreach($arr as $row)

        {

            if($row['day']<$dayBefore)

                continue;

            $day = date('Y-m-d',$row['day']);//

            $adultprice = $row['adultprice'];//成人价格

            $childprice = $row['childprice'];//小孩价格

            $oldprice = $row['oldprice'];//老人价格

            $price = !empty($adultprice) ? $adultprice : '';;

            $price = !empty($childprice) && empty($price) ? $childprice : $price;

            $price = !empty($oldprice) && empty($price) ? $oldprice : $price;





            $number = $row['number']==-1 ? '余位充足' : '余位 '.$row['number'];



            $str.='{ "pdatetime": "'.$day.'", "price": "'.$price.'","childprice": "","description": "'.$number.'", "info": ""},';



        }

        $str = substr($str, 0 ,strlen($str) - 1);

        $str.=' ]}';

        echo $str;

        exit();

    }



    /*

     * 获取套餐人群

     * */



    public function action_ajax_suit_people()

    {

        $out = array();

        $suitid = Arr::get($_GET,'suitid');

        $row = ORM::factory('line_suit',$suitid)->as_array();

        $group_arr = explode(',',$row['propgroup']);



        //获取最接近当前日期的报价

        $day = time();

        $ar = Model_Line_Suit_Price::get_price_byday($suitid,$day);

        if($ar)

        {



            $out['useday'] = date('Y-m-d',$ar[0]['day']);//当前使用日期.

            $out['storage'] = $ar[0]['number'];//库存



        }





        if(in_array(1,$group_arr))

        {

            $out['haschild'] = 1;

            $out['childprice'] = $ar[0]['childprice'] ? $ar[0]['childprice'] : 0;

        }

        if(in_array(2,$group_arr))

        {

            $out['hasadult'] = 1;

            $out['adultprice'] =$ar[0]['adultprice'] ? $ar[0]['adultprice'] : 0;

        }

        if(in_array(3,$group_arr))

        {

            $out['hasold'] = 1;

            $out['oldprice'] = $ar[0]['oldprice'] ? $ar[0]['oldprice'] : 0;

        }

        echo json_encode($out);



    }







    /**

     * 按天获取报价与库存.

     */



    public static function action_ajax_price_day()

    {

        $useday = strtotime(Arr::get($_GET,'useday'));

        $suitid = Arr::get($_GET,'suitid');

        $ar = Model_Line_Suit_Price::get_price_byday($suitid,$useday);

        echo json_encode($ar[0]);





    }





    /*

    * 首页ajax请求获取线路

    * */

    public function action_ajax_index_line()

    {

        $destid = Arr::get($_GET,'destid');

        $pagesize = Arr::get($_GET,'pagesize');

        $offset = 0;



        $list = Model_Line::get_line_bymdd($destid,$pagesize,$offset);

        echo json_encode(array('list'=>$list));



    }

    /**

     * 自驾  线路首页

     */

    public function action_selfdriving()

    {

        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $this->assign('seoinfo', $seoinfo);


        $selfDriving     = Model_Article::get_hbTravels("19");// 自驾回顾

        $this->assign("selfDriving",$selfDriving);

        //==获取最新线路  s
        $linelist   =  Model_Line::get_line_new('0','3');

        $this->assign("linelist",$linelist);


        //首页模板

       // $templet = Product::get_use_templet('line_index_self');

        $templet = $templet ? $templet : 'line/self/index';

        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);

    }

    /**

     * 自驾  线路列表

     */

    public function action_self_list()

    {

        //参数值获取

        $destPy = $this->request->param('destpy');

        $sign = $this->request->param('sign');

        $dayId = intval($this->request->param('dayid'));

        $priceId = intval($this->request->param('priceid'));

        $sortType = intval($this->request->param('sorttype'));

        $displayType = intval($this->request->param('displaytype'));

        $startcityId = intval($this->request->param('startcityid'));

        $attrId = $this->request->param('attrid');

        $p = intval($this->request->param('p'));

        $attrId = !empty($attrId) ? $attrId : 0;

        $destPy = $destPy ? $destPy : 'all';

        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));

        $pagesize = 12;


        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'destpy' => $destPy,

            'dayid' => $dayId,

            'priceid'=> $priceId,

            'sorttype'=> $sortType,

            'displaytype'=>$displayType,

            'startcityid'=>$startcityId,

            'attrid' => $attrId,

        );

        //$start_time=microtime(true); //获取程序开始执行的时间
        $selfdriving  =1 ;

        $out = Model_Line::search_result($route_array,$keyword,$p,$pagesize,$selfdriving);

        $pager = Pagination::factory(

            array(


                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

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


        $chooseitem = Model_Line::get_selected_item($route_array);

        $searchTitle = Model_Line::gen_seotitle($route_array);

        $this->assign('destid',$destId);

        $this->assign('destinfo',$destInfo);

        $this->assign('predest',$preDest);

        $this->assign('list',$out['list']);

        $this->assign('chooseitem',$chooseitem);

        $this->assign('searchtitle',$searchTitle);

        $this->assign('param',$route_array);

        $this->assign('currentpage',$p);

        $this->assign('pageinfo',$pager);


        //首页模板

       // $templet = Product::get_use_templet('line_list_self');


        $templet = $templet ? $templet : 'line/self/list';

        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);

    }

    /**

     * 自驾  线路show

     */

    public function action_self_show()

    {
        $id = Common::remove_xss($this->request->param('aid'));
        //线路详情

        $info = Model_Line::detail($id);

        //seo

        $seoInfo = Product::seo($info);

        //产品图片

        $info['piclist'] = Product::pic_list($info['piclist']);

        //属性列表

        $info['attrlist'] = Model_Line::line_attr($info['attrid']);

        //获取套餐起止日期

        $info['linedate'] = Model_Line::line_date($info['id']);
        //==================获得 suit 套餐   fengjishu  07.07

        $info['suitid']   = ORM::factory('line_suit')

            ->where("lineid=" . $info['id'])

            ->find()

            ->get(id);
        $time   =date("Y-m-d",time());
        $time   = strtotime($time);
        $endtime =strtotime($info['linedate']['endtime']);
        if($time<=$endtime){
            $info['cha_time'] =1;
        }else{
            $info['cha_time'] =-1;
        }

        //==================  ============== end  fengjishu 07.07

        //最低价

        $info['price'] = Model_Line::get_minprice($info['id']);

        //出发城市

        $info['startcity'] = Model_Startplace::start_city($info['startcity']);

        //点评数

        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], 1);

        //销售数量

        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], 1) + intval($info['bookcount']);

        //产品编号

        $info['series'] = Product::product_number($info['id'], '01');

        //产品图标

        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        //支付方式

        $paytypeArr=explode(',',$GLOBALS['cfg_pay_type']);

        //满意度

        $info['score'] = $info['satisfyscore'] ? $info['satisfyscore'].'%' : mt_rand(90,98).'%';



        //目的地上级

        if($info['finaldestid']>0)

        {

            $predest = Product::get_predest($info['finaldestid']);

            $this->assign('predest',$predest);

        }



        //扩展字段信息

        $extend_info = ORM::factory('line_extend_field')

            ->where("productid=" . $info['id'])

            ->find()

            ->as_array();



        //var_dump($info);

        $this->assign('seoinfo', $seoInfo);

        $this->assign('info', $info);

        $this->assign('paytypeArr',$paytypeArr);

        $this->assign('extendinfo',$extend_info);

        //首页模板

        //$templet = Product::get_use_templet('line_show_self');

        $templet = $templet ? $templet : 'line/self/show';

        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);

    }











}