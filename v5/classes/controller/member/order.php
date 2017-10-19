<?php defined('SYSPATH') or die('No direct script access.');



/**

 * Class Controller_Member_Order

 * 订单总控制器

 */

class Controller_Member_Order extends Stourweb_Controller{





    private $mid = null;

    private $refer_url = null;



    public function before()

    {

        parent::before();




        $this->refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $GLOBALS['cfg_cmsurl'];

        $this->assign('backurl',$this->refer_url);

        $this->mid = Cookie::get('st_userid') ?  Cookie::get('st_userid') :  0;

        if(empty($this->mid))

        {

            $this->request->redirect('member/login');

        }

        $this->assign('mid',$this->mid);

    }

    //全部订单

    public function action_all()

    {

        $typeId = 0;

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,



        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->display('member/order/all');



    }



    //线路订单

    public function action_line()

    {

        $typeId = 1;

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,



        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->display('member/order/line');



    }



    //酒店订单

    public function action_hotel()

    {

        $typeId = 2;

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,



        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->display('member/order/hotel');

    }



    //租车订单

    public function action_car()

    {

        $typeId = 3;

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,



        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->display('member/order/car');



    }



    //景点订单

    public function action_spot()

    {

        $typeId = 5;

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,



        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->display('member/order/spot');



    }



    //签证订单

    public function action_visa()

    {

        $typeId = 8;

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,



        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->display('member/order/visa');



    }



    //通用模块订单

    public function action_tongyong()

    {

        $typeId = intval(Arr::get($_GET,'typeid'));

        $moduleName = ORM::factory('model',$typeId)->get('modulename');

        $modulePinyin = ORM::factory('model',$typeId)->get('pinyin');

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,

        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->assign('modulename',$moduleName);

        $this->assign('modulepinyin',$modulePinyin);

        $this->assign('typeid',$typeId);

        $this->display('member/order/tongyong');



    }



    //团购订单

    public function action_tuan()

    {

        $typeId = 13;

        $pageSize = 10;

        $orderType = Common::remove_xss($this->request->param('ordertype'));

        $orderType = $orderType ? $orderType : 'all';

        $page = intval($this->request->param('p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'ordertype' => $orderType,



        );



        $out = Model_Member_Order::order_list($typeId,$this->mid,$orderType,$page);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo',$pager);

        $this->assign('list',$out['list']);

        $this->assign('ordertype',$orderType);

        $this->display('member/order/tuan');



    }



    //订单详情

    public function action_view()

    {

        $orderSn = Common::remove_xss(Arr::get($_GET,'ordersn'));

        $info = Model_Member_Order::order_info($orderSn);

        //当前版块是否是系统版块.

        $issystem = ORM::factory('model',$info['typeid'])->get('issystem');

        $this->assign('info',$info);

        $this->assign('issystem',$issystem);

        $this->display('member/order/view');

    }



    //订单点评

    public function action_pinlun()

    {



        $orderSn = Common::remove_xss(Arr::get($_GET,'ordersn'));

        $info = Model_Member_Order::order_info($orderSn);



        //如果评论了则跳转至上一页

        if($info['ispinlun']==1)

        {

            $this->request->redirect($this->request->referrer());

        }

        $productinfo = Model_Member_Order::get_product_info($info['typeid'],$info['productautoid']);

        $info['product'] = $productinfo;

        $code = md5(time());

        Common::session('pl_crsfcode',$code);

        $this->assign('info',$info);

        $this->assign('frmcode',$code);

        $this->display('member/order/pinlun');

    }



    //发布订单评论

    public function action_ajax_save_pinlun()

    {

        $orderid = Common::remove_xss(Arr::get($_POST,'orderid'));

        $frmcode = Common::remove_xss(Arr::get($_POST,'frmcode'));

        $content = Common::remove_xss(Arr::get($_POST,'plcontent'));

        $level = Common::remove_xss(Arr::get($_POST,'level')); //评分

        if(empty($orderid))

        {

            echo json_encode(array('status'=>0,'msg'=>'错误请求'));

            exit;

        }

        $orderInfo = ORM::factory('member_order',$orderid)->as_array();







        //安全校验码验证

        $orgCode = Common::session('pl_crsfcode');

        if($orgCode!=$frmcode)

        {

            echo json_encode(array('status'=>0,'msg'=>'校验码错误'));

            exit;

        }

        $arr = array();

        $arr['memberid'] = $this->mid;

        $arr['content'] = $content;

        $arr['orderid'] = $orderid;



        $arr['articleid'] = $orderInfo['productautoid'];

        $arr['level'] = $level;

        $arr['typeid'] = $orderInfo['typeid'];

        $arr['addtime'] = time();

        $arr['isshow']  = 1;//fengjishu ji a  08.10

        $model = ORM::factory('comment');

        foreach($arr as $key=>$value)

        {

            $model->$key = $value;

        }

        $model->save();

        if($model->saved())

        {



            $order_model = ORM::factory('member_order',$orderid);

            $order_model->ispinlun = 1;

            $order_model->save();





            //点评积分

            $jifencomment = $orderInfo['jifencomment'];



            if(!empty($jifencomment))

            {



                $sql = "UPDATE `sline_member` SET jifen=jifen+{$jifencomment} WHERE mid='".$this->mid."'";

                DB::query(Database::UPDATE,$sql)->execute();

            }

            $status = 1;

            echo json_encode(array('status'=>$status));

        }

        else

        {

            echo json_encode(array('status'=>0,'msg'=>__("save_failure")));

        }

        exit();



    }



    //取消订单

    public function action_ajax_order_cancel()

    {
        //=========07.29 fengjishu
        include_once(BASEPATH.'/api/meijing/base.php');
        $testObj  = new Base();
        /**
         * @param $outBackId 代理商退单号
         * @param $third_orderid   UTS订单编号
         * @return array|mixed
         * 退单，不能退部分订单
         */
        //=========07.29
        $orderId = Common::remove_xss(Arr::get($_GET,'orderid'));

        //================fengjishu  07.08 修改 当付款了 取消订单 的情况
        $ispay   = Common::remove_xss(Arr::get($_GET,'ispay'));
           //===07.29
          // $outBackId     = $orderId.rand(10,99);
           $outBackId1     = ORM::factory('member_order')->where("id='$orderId'")->find()->get('ordersn');
           $outBackId     = $outBackId1.rand(10,99);
           $third_orderid = ORM::factory('member_order')->where("id='$orderId'")->find()->get('third_ordersn');
             //09.01  fengjishu  jia

            $phone      = ORM::factory('member_order')->where("id='$orderId'")->find()->get('linktel');
            $phone      =trim($phone);
            $supplierlist=ORM::factory('member_order')->where("id='$orderId'")->find()->get('supplierlist');
            $supplierlist =trim($supplierlist);
           //===07.29
        //=================   end

        $m = ORM::factory('member_order',$orderId);

        if($ispay=='1'){//07.08 fengjishu 新加。付款了 取消订单 的情况
            $m->status =6;
            if($supplierlist=='9') {// 判断是否是 美景联动

                $rs = $testObj->refundByOrderID($outBackId, $third_orderid);
                $file = fopen("refundByOrderID.txt", "a+");
                fwrite($file, date("Y-md H:i:s", time()) . "状态" . $rs['head']['status'] . "成功票码：" . $rs['body']['scredenceno'] . "，失败票码：" . $rs['body']['fcredenceno'] . "退票成功人数" . $rs['body']['backCount'] . "第三方订单" . $third_orderid . "\r\n");
                fclose($file);
                if ($rs['head']['status'] == '0') {
                    $m->third_status = 0;
                    $m->back_order_number = $outBackId; //退单号
                } else {
                    $m->third_failure_reason = $rs['head']['message'];
                }
            }
            include_once 'v5/vendor/msg.class.php';
            $msg = new Msg();
            $con  = "尊敬的用户，您的订单:".$outBackId1."已经成功取消，退款会在3个工作日内退回到原支付账户。";
            $msg->sendMsg($phone, '旅游', $con);
        }else{
            $m->status = 3;//取消订单
        }
        $m->save();

        $flag = 0;

        if($m->saved())

        {

            $flag = 1;
            //对于后台创建地自驾订单  用户主动取消订单的时候1129 feng
            if($m->typeid==1){// 判断是否属于自驾模型线路
                $sql = "select * from `sline_member_car` where orderid=$orderId";
                $wxuserid   = DB::query(1,$sql)->execute()->get('wxuserid');
                if(!empty($wxuserid)){
                    self::update_wxdrivingRate($wxuserid);
                }
                 self::update_membercar_iscancle($orderId,1);
            }

        }

        echo json_encode(array('status'=>$flag));



    }
    /*
     *  更新 自驾次 数
    */
    public static function update_wxdrivingRate($wxuserid,$p=false){
        if($p==false) {
            $sql = " update `bbs_hjbox_users` set drivingRate=drivingRate-1 ";
        }else{
            $sql = " update `bbs_hjbox_users` set drivingRate=drivingRate+1 ";
        }
        $sql .= " where id =$wxuserid";
        DB::query(1, $sql)->execute();
    }
    /*
    * 取消订单 更新  member_car 表的iscancle 状态
    * $orderid  订单id
    * $num 更新成的数字  1 为取消订单 0 正常
    */
    public static function update_membercar_iscancle($orderid,$num){

        $sql = "update `sline_member_car` set iscancle =$num where orderid = $orderid";
        DB::query(1,$sql)->execute();

    }






















}

