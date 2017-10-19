<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Order extends Stourweb_Controller

{





    public static $channelArr = array(

        '1' => '线路',

        '2' => '酒店',

        '3' => '租车',

        '5' => '门票',

        '8' => '签证',

        '13' => '团购'

    );



    /*

     * 订单总控制器

     *

     */

    public function before()

    {

        parent::before();

        $action = $this->request->action();

        $moduleids = array(

            '1' => 'lineorder',

            '2' => 'hotelorder',

            '3' => 'carorder',

            '5' => 'spotorder',

            '8' => 'visaorder',

            '13' => 'tuanorder'

        );

        if ($action == 'index')

        {

            $param = $this->params['action'];

            $typeid = $this->params['typeid'];

            $right = array(

                'read' => 'slook',

                'save' => 'smodify',

                'delete' => 'sdelete',

                'update' => 'smodify'

            );

            $user_action = $right[$param];

            $moduleid = $moduleids[$typeid];

            if (!empty($user_action))

                Common::getUserRight($moduleid, $user_action);


        }

        else if ($action == 'view')

        {

            $type = $this->params['type'];//订单类型

            $typeid = $this->params['typeid'];



            if (!empty($typeid))

            {

                $moduleid = $moduleids[$typeid];

            }

            else if ($type == 'dz')

            {

                $moduleid = 'dzorder';

            }

            else if ($type == 'xy')

            {

                $moduleid = 'xyorder';

            }



            Common::getUserRight($moduleid, 'slook');



        }

        else if ($action == 'ajax_save')

        {

            $type = Arr::get($_POST, 'type');//订单类型

            $typeid = Arr::get($_POST, 'typeid');


            if (!empty($typeid))

            {

                $moduleid = $moduleids[$typeid];

            }

            else if ($type == 'dz')

            {

                $moduleid = 'dzorder';

            }

            else if ($type == 'xy')

            {

                $moduleid = 'xyorder';

            }



            Common::getUserRight($moduleid, 'smodify');



        }

        else if ($action == 'dz')

        {

            $param = $this->params['action'];

            $right = array(

                'read' => 'slook',

                'save' => 'smodify',

                'delete' => 'sdelete',

                'update' => 'smodify'

            );

            $user_action = $right[$param];



            if (!empty($user_action))

                Common::getUserRight('dzorder', $user_action);

        }

        else if ($action == 'xy')

        {

            $param = $this->params['action'];

            $right = array(

                'read' => 'slook',

                'save' => 'smodify',

                'delete' => 'sdelete',

                'update' => 'smodify'

            );

            $user_action = $right[$param];



            if (!empty($user_action))

                Common::getUserRight('xyorder', $user_action);

        }

        $this->assign('parentkey', $this->params['parentkey']);

        $this->assign('itemid', $this->params['itemid']);


    }



    /*

     * 订单列表

     * */

    public function action_index()

    {

        $action = $this->params['action'];

        $typeid = $this->params['typeid'];

        $webid = Arr::get($_GET, 'webid');

        $this->assign('typeid', $typeid);

        //订单模板

        //$channelname = self::$channelArr[$typeid];

        $channelname = Model_Model::getModuleName($typeid);



        if (empty($action))  //显示列表

        {
            if($typeid==1){
                $keyword = Arr::get($_GET, 'keyword');
                $Special_key = Arr::get($_GET, 'Special_key');
                $this ->assign('keyword',$keyword);
                $this ->assign('Special_key',$Special_key);
            }
            $this->assign('paysources', Model_Member_Order::getPaySources());
            //===========fengjishu 07.13
            $this ->assign('supplier',Model_Member_Order::getSupplier());
            $this ->assign('distributor',Model_Member_Order::getDistributor());
            //===========fengjishu

            $this->assign('statusnames', Model_Member_Order::getStatusNamesJs());

            $this->assign('position', $channelname . '订单');

            $this->assign("supid",$_GET['sup_id']);

            $this->assign('channelname', $channelname);

            $this->display('stourtravel/order/list');

        }

        else if ($action == 'read')    //读取列表

        {

            $start = Arr::get($_GET, 'start');

            $limit = Arr::get($_GET, 'limit');

            $keyword = Arr::get($_GET, 'keyword');
            //=== Special_key 用户自驾 次数

            $Special_key = Arr::get($_GET, 'Special_key');

            //===================07.13 fengjishu  新加
            $supid   = Arr::get($_GET,'supid');

            $supplier_id = $_GET['supplier_id'];// 获取供应商的id

            $distributor_id = $_GET['distributor_id'];// 获取供应商的id
            //====================

            $status = $_GET['status'];

            $paysource = $_GET['paysource'];

            //=========



            $order = 'order by a.addtime desc';
            //======== fengjishu  07.12  加入判断
            if(!empty($supid)){
              $w  =" where a.supplierlist = $supid ";
            }
            else{
                $w = "where a.typeid = $typeid";
            }
            //======== fengjishu  07.12  加入判断 end

            $time  =time()*1-86400;

            if ($status != '')

            {
                //========08.05 fengjishu start
                if($status=='7'){
                    $w.=  " and ((a.isconsume=0 and a.status=5 and a.paytype=4 and unix_timestamp(a.usedate)<$time) ";
                    $w.= " or (a.isconsume=0 and a.status=2 and a.paytype!=4 and a.ispay =1 and unix_timestamp(a.usedate)<$time))";

                }elseif($status=='8'){//  fengjishu 08.12
                    $w .= " and status =1 and unix_timestamp(a.usedate)<$time ";
                }
                else{
                    $w .= ' and a.status=' . $status;
                }

                //========end   08.05


            }


            if (!empty($paysource))

            {

                $w .= " and a.paysource='$paysource'";

            }
           //============fengjishu 07.13  start

            if (!empty($supplier_id))

            {

                $w .= " and a.supplierlist='$supplier_id'";

            }


            //============fengjishu 07.13  end
            if (!empty($distributor_id))

            {

                $w .= " and a.distributor='$distributor_id'";

            }

            //=====20161214 feng
             if(!empty($Special_key)){

                 $w .= " and a.memberid = $Special_key ";

              }
            //=====20161214 feng
            if (!empty($keyword))

            {

                $w .= " and (a.ordersn like '%{$keyword}%' or a.linkman like '%{$keyword}%' or a.linktel like '%{$keyword}%' or a.productname like '%{$keyword}%')";

                $start = 0;

            }

            $w .= empty($webid) ? ' and a.webid=0' : " and a.webid=$webid";

            $sql = "select a.*  from sline_member_order as a $w $order limit $start,$limit";

            $totalcount_arr = DB::query(Database::SELECT, "select count(*) as num from sline_member_order a $w ")->execute()->as_array();

            $list = DB::query(Database::SELECT, $sql)->execute()->as_array();

            $new_list = array();

            foreach ($list as $k => $v)

            {

                $v['addtime'] = Common::myDate('Y-m-d H:i:s', $v['addtime']);
                //==================fengjishu  07.12 加 用于找到供应商

                $mod =ORM::factory('supplier')->where('id', '=', $v['supplierlist'])->find()->as_array();
                $v['supplierlist'] =!empty($mod['suppliername'])?$mod['suppliername']:'';
                //==================fengjishu  07.12 加 用于找到供应商

                //========分销商
                $dis_mod =ORM::factory('distributor')->where('id', '=', $v['distributor'])->find()->as_array();

                $v['distributorlist'] =!empty($dis_mod['distributorname'])?$dis_mod['distributorname']:'';

                if ($v['pid'] != 0)

                {

                    $v['productname'] = $v['productname'] . "[<span style='color:red'>子订单</span>]";

                }
                $usedate  = strtotime($v['usedate']);
                //====start 封冀蜀
                if($v['paytype']==4&&$v['status']==5&&$v['isconsume']==0&&$usedate<$time){
                    $v['status'] ="7";
                }elseif($v['paytype']!=4&&$v['status']==2&&$v['isconsume']==0&&$usedate<$time){
                    $v['status'] ="7";
                }elseif($v['status']==1&&$usedate<$time){
                    $v['status'] ="8";
                }

                //====end

                //计算订单金额

                $num = $v['dingnum'] + $v['childnum'] + $v['oldnum'];

                if (($dingjin = $v['dingjin']) > 0)

                {

                    //定金支付

                    $v['price'] = $dingjin * $num;

                }

                else

                {

                    //全额支付

                    $v['price'] = $v['dingnum'] * $v['price'] + $v['childnum'] * $v['childprice'] + $v['oldnum'] * $v['oldprice'];

                }

                if ($v['usejifen'])

                {

                    $v['price'] -= $v['jifentprice'];

                }
                $v['distributorprice'] =$v['distributorprice']*$num;

                $v['price'] = number_format($v['price'], 2);
                //
                $v['distributorprice'] = number_format($v['distributorprice'], 2);

                $v['dingnum'] = $num;

                $v['wxid']   = '444444444';

                $new_list[] = $v;

            }

            $result['total'] = $totalcount_arr[0]['num'];

            $result['lists'] = $new_list;

            $result['success'] = true;



            echo json_encode($result);

        }

        else if ($action == 'save')   //保存字段

        {



        }

        else if ($action == 'delete') //删除某个记录

        {

            $rawdata = file_get_contents('php://input');

            $data = json_decode($rawdata);

            $id = $data->id;



            if (is_numeric($id)) //

            {

                $model = ORM::factory('order', $id);

                Model_member_Order::refundStorage($id, 'plus');

                $model->delete();



            }

        }

        else if ($action == 'update')//更新某个字段

        {

            $id = Arr::get($_POST, 'id');

            $field = Arr::get($_POST, 'field');

            $val = Arr::get($_POST, 'val');
            $typeid  = Arr::get($_POST, 'typeid');// 11.23 feng加入 用于处理 线路取消订单判断
            $wxuserid  = Arr::get($_POST, 'wxuserid');// 11.23 丰技术加入 用于处理



            if (is_numeric($id))

            {

                $model = ORM::factory('order')->where('id', '=', $id)->find();

            }



            if ($model->id&&$val!='7')//封冀蜀 08.05 加入 不等于7 的判断 08.12 不等8

            {
                if($val=='8'){
                    echo 'no';
                    exit;
                }
                $oldstatus = $model->status;

                $supplierlist = $model->supplierlist; // 2016.12.10 用于美景门票的判断

                $model->$field = $val;

                if ($model->status == "2" && $model->eticketno == "")

                {
                    if($supplierlist!='9'){// 2016.12.10 用于美景门票的判断
                        $model->eticketno = Common::get_eticketno();
                    }


                }

                $model->update();

                if ($model->saved())

                {

                    $detectresult = Model_Member_Order_listener::detect($model->ordersn);

                    if ($detectresult !== true)

                        echo 'no';

                    else

                        echo 'ok';



                    if ($field == 'status' && $val == 2)//完成交易

                    {

                        // Model_Member_Order::refundJifen($id);

                        Common::paySuccess($model->ordersn);



                    }

                    if ($field == 'status' && $val == 3)//取消订单

                    {
                         if($typeid=='1'){

                             Model_Line::update_wxdrivingRate($wxuserid);
                             Model_Line::update_membercar_iscancle($id,1);// id  为订单id

                         }
                        if($oldstatus==2&&$supplierlist=='9'){// 付款成功取消美景订单
                            // 退款订单号
                            $outBackId     = $model->ordersn.rand(10,99);

                            $rs = Common::cancleMJOrder($model->ordersn,$outBackId);

                            if ($rs['head']['status'] == '0') {

                                $model->third_status = 0;

                                $model->back_order_number = $outBackId; //退单号
                            } else {
                                $model->third_failure_reason = $rs['head']['message'];
                            }
                            $model->update();
                        }
                        Model_member_Order::refundStorage($id, 'plus');

                    }

                    else if ($field == 'status' && $oldstatus == 3 && $val == 1) //由取消变为在处理中
                    {

                        if($typeid=='1'){
                            Model_Line::update_wxdrivingRate($wxuserid,1);
                            Model_Line::update_membercar_iscancle($id,0);// id  为订单id
                        }
                        Model_Member_Order::refundStorage($id, 'minus');//订单增加,库存减少

                    }
                    else if($field == 'status' && $oldstatus == 3 && ($val == 2||$val == 4||$val == 5||$val == 6||$val == 0))
                    {

                          //由取消变为付款成功  已退款 交易完成 待退款 封 1129 新加
                        if($typeid=='1'){
                            Model_Line::update_wxdrivingRate($wxuserid,1);
                            Model_Line::update_membercar_iscancle($id,0);// id  为订单id
                        }
                    }
                    else if($field == 'status' && $oldstatus == 6 && $val == 4){
                        //  如果 从待退款  -> 已退款

                        Model_member_Order::refundStorage($id, 'plus');
                    }
                    if ($oldstatus != $model->status)

                    {

                        Plugin_Core_Factory::factory()->add_listener('on_orderstatus_changed', $model->as_array())->execute();

                    }

                    //二次确认订单发送短信

                    if ($field == 'status' && $val == 1)

                    {

                        Common::send_msg_second_comfrim($id);

                    }



                }



                else

                    echo 'no';

            }

        }

    }





    /*

     * 查看订单信息

     * */

    public function action_view()

    {

        $id = $this->params['id'];//订单id.

        $type = $this->params['type'];//订单类型

        $typeid = $this->params['typeid'];

        if ($type == 'dz') //customize订单

        {

            $model = ORM::factory('customize')->where('id', '=', $id)->find();

            $info = $model->as_array();

            if ($model->loaded())

            {

                $model->viewstatus = 1;

                $model->save();

            }

            $templet = 'dz_view';

        }



        else if ($type == 'xy') //协议订单

        {

            $model = ORM::factory('dzorder')->where('id', '=', $id)->find();

            $info = $model->as_array();

            if ($model->loaded())

            {

                $model->viewstatus = 1;

                $model->save();

            }

            $templet = 'xy_view';



        }

        else //普通产品订单

        {

            $model = ORM::factory('order')->where('id', '=', $id)->find();

            $info = $model->as_array();

            if ($model->loaded())

            {

                $model->viewstatus = 1;

                $model->save();

            }

            $templet = 'view';

        }



        if ($typeid == '1' || $typeid == '8') //线路和签证有游客信息

        {

            $sql = "select * from sline_member_order_tourer where orderid='{$info['id']}'";

            $tourer = DB::query(1, $sql)->execute()->as_array();

            if (!empty($tourer)) $this->assign('tourer', $tourer);

        }



        if ($typeid == 1)

        {

            $info['insurance'] = ORM::factory('insurance_booking')->where('bookordersn', '=', $info['ordersn'])->find()->as_array();

        }



        $this->assign('info', $info);

        $this->assign('typeid', $typeid);

        $this->assign('statusnames', Model_Member_Order::getStatusNamesJs());



        $this->display('stourtravel/order/' . $templet);

    }

    /*
       *   车主信息
           */
    public  function action_cheview(){

        $id = $this->params['id'];//订单id.
        $typeid = $this->params['typeid'];
        $model = ORM::factory('order')->where('id', '=', $id)->find();
        $info = $model->as_array();
        if ($typeid == '1') //线路有游客信息
        {
            $sql = "select * from sline_member_order_tourer where orderid='{$info['id']}'";

            $tourer = DB::query(1, $sql)->execute()->as_array();

            if (!empty($tourer)) $this->assign('tourer', $tourer);
        }
        $car = ORM::factory('member_car')->where('orderid','=',$id)->find();

        $carinfo = $car->as_array();

        $info['series'] =  Model_Line::product_number($info['productautoid'], '01');

        //套餐信息  只能做一个 套餐
        $suitInfo = Model_Line::suit_info($info['productautoid']);

        //套餐按出发日期价格
        $suitPrice = Model_Line::suit_price($suitInfo['id'],$info['usedate']);

        $this->assign('suitPrice',$suitPrice);
        $this->assign('info',$info);
        $this->assign('suitInfo',$suitInfo);
        $this->assign('carinfo', $carinfo);
        $this ->display('stourtravel/order/book');
    }
    /*
     *  保存 车主编辑 信息
     */
     public  function action_editlineorder(){
         $id = Arr::get($_POST, 'orderid');
         $value = Arr::get($_POST, 'value');
         $name = Arr::get($_POST, 'name');
         $table = Arr::get($_POST, 'table');
         $eidt = Arr::get($_POST, 'eidt');
      if(!empty($table)) {
          if ($table == 'member_order') {
              $m = ORM::factory('member_order', $id);
          } elseif ($table == 'member_car') {
              $m = ORM::factory('member_car')->where('orderid', '=', $id)->find();
              if($eidt=='edit2'){
              $value = serialize($value);
              }
          } elseif ($table == 'member_order_tourer') {
              $m = ORM::factory('member_order_tourer')->where('id', '=', $id)->find();
          }
          $m->$name = $value;
          $flag = $m->save();
          if ($flag) {
              echo 'ok';
          }
      }
     }
    /*
     *   BAO
     */


    public function action_create()

    {

        //会员信息

        // $userInfo = Product::get_login_user_info();

        $memberId = $userInfo ? $userInfo['mid'] : 0;//会员id

        $webid = intval(Arr::get($_POST,'webid'));//网站id

        $orderid = intval(Arr::get($_POST,'orderid'));//网站id


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

        $billCity = Arr::get($_POST,'bill_city');//发票联系人城市+

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

        $t_id = Arr::get($_POST,'t_id');

        $t_name = Arr::get($_POST,'t_name');

        $t_cardtype = Arr::get($_POST,'t_cardtype');

        $t_cardno = Arr::get($_POST,'t_cardno');

        $t_cardsex = Arr::get($_POST,'t_cardsex');

        $t_shirttype = Arr::get($_POST,'t_shirttype');

        $tourer = array();

        $totalNum = $adultNum + $childNum + $oldNum;

        for($i=0;$i<$totalNum;$i++)

        {

            $tourer[] = array(
                'id' =>$t_id[$i],

                'name'=>$t_name[$i],

                'productid'=>$lineId,

                'typeid'=>1,

                'cardtype'=>$t_cardtype[$i],

                'cardno'=>$t_cardno[$i],

                'cardsex'=>$t_cardsex[$i],

                'mobile'=>$linkTel

            );

        }

        //套餐信息

        $suitInfo = Model_Line::suit_info($suitId);


        //产品信息

        $info = ORM::factory('line',$lineId)->as_array();

        //套餐按出发日期价格

        $suitPrice = Model_Line::suit_price($suitId,$info['linedate']);

        $orderSn   = Arr::get($_POST,'ordersn');

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
        //====================== 车辆信息
        $carbrand    = Arr::get($_POST,'carbrand');//  品牌
        $cartype     = Arr::get($_POST,'cartype');//车型
        $carage      = Arr::get($_POST,'carage');//年份
        $insuranceDate = Arr::get($_POST,'insuranceDate');//保险日期
        $cargrade    = Arr::get($_POST,'cargrade');//档次
        $carhost     = Arr::get($_POST,'carhost');//车主出生年月
        $hostwork    = Arr::get($_POST,'hostwork');//车主职业
        $driveRate   = Arr::get($_POST,'driveRate');//自驾频次
        $usertype    = Arr::get($_POST,'usertype');//用户的类型 亲子 ，聚会 等
        $carNumber    = Arr::get($_POST,'carNumber');//用户车辆牌号
        $travelWay    = Arr::get($_POST,'travelWay');//出现方式    1 大巴 2 自驾
        $tent    = Arr::get($_POST,'tent');     //是否需要帐篷 1 需要 2 为不需要
        $goneSpot =array();
        $wantSpot =array();
        for($l=0;$l<4;$l++){
            $goneSpot[$l]    = Arr::get($_POST,"goneSpot".$l);//去过的景点
            $wantSpot[$l]    = Arr::get($_POST,'wantSpot'.$l);//想去的 景点
        }
        $goneSpot  = serialize($goneSpot);
        $wantSpot  = serialize($wantSpot);
        //=====接受微信用户的id 昵称
        $wxuserid      = Arr::get($_POST,'wxuser');

        $userSource    = Arr::get($_POST,'userSource');//用户的来源

        //=======================
        //订单状态(全款支付,定金支付,二次确认)

        $status = $suitInfo['paytype'] != 3 ? 1 : 0;

        $carinfo = array(
            'lineid'        =>$lineId,
            'wxuserid'       =>$wxuserid,
            'carmens'       =>$totalNum,// 订单数量
            'carbrand'      =>$carbrand,
            'cartype'       =>$cartype,
            'carage'        =>$carage,
            'insuranceDate' =>$insuranceDate,
            'cargrade'      =>$cargrade,
            'carhost'       =>$carhost,
            'hostwork'      =>$hostwork,
            'driveRate'     =>$driveRate,
            'goneSpot'      =>$goneSpot,
            'wantSpot'      =>$wantSpot,
            'usertype'      =>$usertype,
            'carNumber'      =>$carNumber,
            'travelWay'     =>$travelWay,
            'tent'          =>$tent,
        );

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

            'isneedpiao'=>$isneedBill,

            'usertype'  =>$usertype,//  订单的 用户类型

            'wxuserId'  => $wxuserid ,// 微信用户 id
            'userSource' => $userSource
        );

        //添加订单

        if(Model_Line::add_order($arr, $carinfo, $wxuserid,$tourer,$orderid)) {


                echo  "保存成功，请关闭页面";

        }
    }
    /*

     * 保存

     * */

    public function action_ajax_save()

    {



        $id = Arr::get($_POST, 'id');

        $type = Arr::get($_POST, 'type');



        $status = false;

        if (empty($type))

        {

            $model = ORM::factory('order', $id);

            $model->price = Arr::get($_POST, 'price');

            $model->childprice = $_POST['childprice'];

            $model->oldprice = $_POST['oldprice'];

            $model->remark = $_POST['remark'];

            $oldstatus = $model->status;//原来状态



        }

        else if ($type == 'dz')

        {

            $model = ORM::factory('customize', $id);



        }

        else if ($type == 'xy')

        {

            $model = ORM::factory('dzorder', $id);

        }

        $model->status = Arr::get($_POST, 'status');

        if ($model->status == "2" && $model->eticketno == "")

        {

            $model->eticketno = Common::get_eticketno();

        }

        $model->update();



        if ($model->saved())

        {

            $current_status = Arr::get($_POST, 'status');



            $status = true;

            if ($oldstatus != $current_status)

            {

                $detectresult = Model_Member_Order_listener::detect($model->ordersn);

                if ($detectresult !== true)

                    $status = false;



                if ($current_status == 2)//完成交易

                {

                    // Model_Member_Order::refundJifen($id);

                    Common::paySuccess($model->ordersn);



                }

                if ($oldstatus != 3 && $current_status == 3)

                {

                    Model_Member_Order::refundStorage($id, 'plus');//订单取消,增加库存

                }

                else if ($oldstatus == 3 && $current_status == 1) //由取消变为在处理中

                {

                    Model_Member_Order::refundStorage($id, 'minus');//订单增加,库存减少

                }

                //二次确认订单发送短信

                if ($current_status == 1)

                {

                    Common::send_msg_second_comfrim($id);

                }

                if ($current_status == 2)

                {

                    Model_Member_Order::refundJifen($id);

                }

                if (empty($type))

                {

                    Plugin_Core_Factory::factory()->add_listener('on_orderstatus_changed', $model->as_array())->execute();

                }



            }



        }

        echo json_encode(array('status' => $status));

    }





    /*

     * 定制订单

     * */

    public function action_dz()

    {

        $action = $this->params['action'];

        if (empty($action))  //显示列表

        {

            $this->assign('statusnames', Model_Member_Order::getStatusNamesJs());

            $this->display('stourtravel/order/dz_list');

        }

        else if ($action == 'read')    //读取列表

        {

            $start = Arr::get($_GET, 'start');

            $limit = Arr::get($_GET, 'limit');

            $keyword = Arr::get($_GET, 'keyword');



            $order = 'order by a.addtime desc';



            if (!empty($keyword))

            {

                $w = " where ( a.contactname like '%{$keyword}%' or a.phone like '%{$keyword}%')";

            }





            $sql = "select a.*  from sline_customize as a $w $order limit $start,$limit";

            //echo $sql;





            $totalcount_arr = DB::query(Database::SELECT, "select count(*) as num from sline_customize a $w ")->execute()->as_array();

            $list = DB::query(Database::SELECT, $sql)->execute()->as_array();

            $new_list = array();

            foreach ($list as $k => $v)

            {

                $v['addtime'] = Common::myDate('Y-m-d H:i:s', $v['addtime']);

                $v['starttime'] = Common::myDate('Y-m-d', $v['starttime']);

                $new_list[] = $v;

            }

            $result['total'] = $totalcount_arr[0]['num'];

            $result['lists'] = $new_list;

            $result['success'] = true;



            echo json_encode($result);

        }



        else if ($action == 'delete') //删除某个记录

        {

            $rawdata = file_get_contents('php://input');

            $data = json_decode($rawdata);

            $id = $data->id;



            if (is_numeric($id)) //

            {

                $model = ORM::factory('customize', $id);

                $model->delete();

            }

        }

        else if ($action == 'update')//更新某个字段

        {

            $id = Arr::get($_POST, 'id');

            $field = Arr::get($_POST, 'field');

            $val = Arr::get($_POST, 'val');



            if (is_numeric($id))

            {

                $model = ORM::factory('customize')->where('id', '=', $id)->find();



            }



            if ($model->id)

            {

                $model->$field = $val;



                $model->update();

                if ($model->saved())

                    echo 'ok';

                else

                    echo 'no';

            }

        }



    }



    /*

     * 协议订单

     * */

    public function action_xy()

    {

        $action = $this->params['action'];

        if (empty($action))  //显示列表

        {

            $this->assign('statusnames', Model_Member_Order::getStatusNamesJs());

            $this->display('stourtravel/order/xy_list');

        }

        else if ($action == 'read')    //读取列表

        {

            $start = Arr::get($_GET, 'start');

            $limit = Arr::get($_GET, 'limit');

            $keyword = Arr::get($_GET, 'keyword');



            $order = 'order by a.addtime desc';



            if (!empty($keyword))

            {

                $w = " where ( a.username like '%{$keyword}%' or a.phone like '%{$keyword}%')";

            }





            $sql = "select a.*  from sline_dzorder as a $w $order limit $start,$limit";

            //echo $sql;





            $totalcount_arr = DB::query(Database::SELECT, "select count(*) as num from sline_dzorder a $w ")->execute()->as_array();

            $list = DB::query(Database::SELECT, $sql)->execute()->as_array();

            $new_list = array();

            foreach ($list as $k => $v)

            {



                $v['addtime'] = Common::myDate('Y-m-d H:i:s', $v['addtime']);

                $v['starttime'] = Common::myDate('Y-m-d H:i:s', $v['starttime']);

                $new_list[] = $v;

            }

            $result['total'] = $totalcount_arr[0]['num'];

            $result['lists'] = $new_list;

            $result['success'] = true;



            echo json_encode($result);

        }



        else if ($action == 'delete') //删除某个记录

        {

            $rawdata = file_get_contents('php://input');

            $data = json_decode($rawdata);

            $id = $data->id;



            if (is_numeric($id)) //

            {

                $model = ORM::factory('dzorder', $id);

                $model->delete();

            }

        }

        else if ($action == 'update')//更新某个字段

        {

            $id = Arr::get($_POST, 'id');

            $field = Arr::get($_POST, 'field');

            $val = Arr::get($_POST, 'val');



            if (is_numeric($id))

            {

                $model = ORM::factory('dzorder')->where('id', '=', $id)->find();



            }



            if ($model->id)

            {

                $model->$field = $val;

                $model->update();

                if ($model->saved())

                    echo 'ok';

                else

                    echo 'no';

            }

        }



    }





    /*

     * 订单统计数据查看

     * */

    public function action_dataview()

    {

        $year = date('Y');

        $this->assign('thisyear', $year);

        $this->assign('typeid', $this->params['typeid']);

        $this->display('stourtravel/order/data_view');

    }





    /*

     * 异步获取相关统计数据

     * */





    public function action_ajax_sell_info()

    {

        $out = array();

        $typeid = $this->params['typeid'];



        //今日销售

        $time_arr = Common::getTimeRange(1);

        $out['today'] = $this->getOrderPrice($time_arr, $typeid);



        //昨日销售

        $time_arr = Common::getTimeRange(2);

        $out['last'] = $this->getOrderPrice($time_arr, $typeid);



        //本周销售

        $time_arr = Common::getTimeRange(3);

        $out['thisweek'] = $this->getOrderPrice($time_arr, $typeid);



        //本月销售

        $time_arr = Common::getTimeRange(5);

        $out['thismonth'] = $this->getOrderPrice($time_arr, $typeid);



        //全部销售额

        $out['total'] = $this->getOrderPrice(0, $typeid);



        echo json_encode($out);

    }





    public function action_ajax_sell_tj()

    {

        $out = array();

        $typeid = $this->params['typeid'];

        //今日销售

        $time_arr = Common::getTimeRange(1);

        $out['today'] = $this->getOrderDetailPrice($time_arr, $typeid);



        //昨日销售

        $time_arr = Common::getTimeRange(2);

        $out['last'] = $this->getOrderDetailPrice($time_arr, $typeid);



        //本周销售

        $time_arr = Common::getTimeRange(3);

        $out['thisweek'] = $this->getOrderDetailPrice($time_arr, $typeid);



        //本月销售

        $time_arr = Common::getTimeRange(5);

        $out['thismonth'] = $this->getOrderDetailPrice($time_arr, $typeid);



        echo json_encode($out);



    }



    //按年进行统计

    public function action_ajax_year_tj()

    {

        $year = $this->params['year'];

        $typeid = $this->params['typeid'];

        $current_year = date('Y');

        if ($current_year < $year) exit('12');

        for ($i = 1; $i <= 12; $i++)

        {

            $starttime = date('Y-m-d', mktime(0, 0, 0, $i, 1, $year));//开始时间



            $endtime = strtotime("$starttime +1 month -1 day");//结束时间

            $timearr = array(strtotime($starttime), $endtime);



            $out[$i] = $this->getOrderDetailPrice($timearr, $typeid);

        }

        echo json_encode($out);



    }



    /*

     * 生成excel页面

     * */

    public function action_excel()

    {

        $this->assign('typeid', $this->params['typeid']);

        $this->assign('statusnames', Model_Member_Order::$statusNames);

        $this->display('stourtravel/order/excel');

    }



    public function action_genexcel()

    {



        $typeid = $this->params['typeid'];

        $timetype = $this->params['timetype'];

        $starttime = strtotime(Arr::get($_GET, 'starttime'));

        $endtime = strtotime(Arr::get($_GET, 'endtime'));

        $supid   = Arr::get($_GET,'supid');

        //===fengjishu 08.04
        $costprice =Arr::get($_GET,'costprice'); //用来 获取结算价
        //===end

        $status = trim($_GET['status']);


        switch ($timetype)

        {

            case 1:

                $time_arr = $this->getTimeRange(1);

                break;

            case 2:

                $time_arr = $this->getTimeRange(2);

                break;

            case 3:

                $time_arr = $this->getTimeRange(3);

                break;

            case 5:

                $time_arr = $this->getTimeRange(5);

                break;

            case 6:

                $time_arr = array($starttime, $endtime);

                break;



        }



        $stime = date('Y-m-d', $time_arr[0]);

        $etime = date('Y-m-d', $time_arr[1]);

        $w = "addtime>=$time_arr[0] and addtime<=$time_arr[1] and typeid='$typeid'";
        $time  =time()*1-86400;
        if ($status !== null && $status !== '')

        {
            //========08.05 fengjishu start
            if($status=='7'){
                $w.=  " and ((isconsume=0 and status=5 and paytype=4 and unix_timestamp(usedate)<$time) ";
                $w.= " or (isconsume=0 and status=2 and paytype!=4 and ispay =1 and unix_timestamp(usedate)<$time))";
                //$w .= ' and status= 5' ;//. $status;
            }else{
              //  $w .= ' and status= 2 ';
               $w .= ' and status=' . $status;
            }

            //========end   08.05


        }
        if(!empty($supid)){
            $w .= " and find_in_set($supid,supplierlist) ";
        }

        $arr = ORM::factory('member_order')->where($w)->get_all();

        $table = "<table><tr>";

        $table .= "<td>订单号</td>";

        $table .= "<td>产品名称</td>";

        $table .= "<td>预订日期</td>";

        $table .= "<td>使用日期</td>";

        $table .= "<td>成人数量</td>";

        $table .= "<td>成人价格</td>";

        if(!empty($costprice)&&$costprice==3){

        $table .= "<td>结算价/平台佣金</td>";

        }

        if ($typeid == 1)

        {

            $table .= "<td>儿童数量</td>";

            $table .= "<td>儿童价格</td>";

            $table .= "<td>老人数量</td>";

            $table .= "<td>老人价格</td>";

            $table .= "<td>保险</td>";

            $table .= "<td>出行方式</td>";
            $table .= "<td>车品牌</td>";
            $table .= "<td>车牌号</td>";
            $table .= "<td>车类型</td>";
            $table .= "<td>是否要帐篷</td>";

        }

        $table .= "<td>应付总额</td>";

        $table .= "<td>交易状态</td>";

        $table .= "<td>预订人</td>";

        $table .= "<td>联系电话</td>";

        $table .= "<td>使用日期</td>";



        $table .= "</tr>";



        foreach ($arr as $row)

        {

            $order = $row;

            $price = 0;

            $insurancePrice = 0;

            if ($order['typeid'] != 2)

            {



                $price = intval($order['dingnum']) * $order['price'] + intval($order['childnum']) * $order['childprice'] + intval($order['oldnum']) * $order['oldprice'];

                if (!empty($order['usejifen']) && !empty($order['jifentprice']))

                {

                    $price = $price - intval($order['jifentprice']);//减去积分抵现的价格.

                }



            }

            else //当为酒店时

            {



                $orderlist = ORM::factory('member_order')->where('pid', '=', $row['id'])->get_all();

                $price = 0;

                $totalnum = 0;

                foreach ($orderlist as $subrow)

                {

                    $price += intval($subrow['dingnum']) * intval($subrow['price']);

                    $totalnum += $subrow['dingnum'];



                }



            }

            if ($order['typeid'] == 1)

            {

                $insInfo = ORM::factory('insurance_booking')->where("bookordersn", '=', $order['ordersn'])->find()->as_array();

                if ($insInfo['payprice'])

                {

                    $price += $insInfo['payprice'];

                    $insurancePrice = $insInfo['payprice'];

                }



            }



            $childOrderLabel = $row['pid'] == 0 ? '' : "[子订单]";

            $table .= "<tr>";

            $table .= "<td>" . $childOrderLabel . "{$row['ordersn']}</td>";

            $table .= "<td>{$row['productname']}</td>";

            $table .= "<td>" . Common::myDate('Y-m-d H:i:s', $row['addtime']) . "</td>";

            $table .= "<td>{$row['usedate']}</td>";

            $table .= "<td>{$row['dingnum']}</td>";

            $table .= "<td>{$row['price']}</td>";

            if(!empty($costprice)&&$costprice==3){

                $row['jiesuan'] = $row['spotprice']/$row['dingnum']*1;//结算单价08.04 封冀蜀

                $row['yongjin'] = $row['price']-$row['jiesuan'];

                if($row['paytype']==4) {
                    $table .= "<td>￥({$row['yongjin']}x{$row['dingnum']})<br/>佣金x数量</td>";
                }else{
                    $table .= "<td>￥({$row['jiesuan']}x{$row['dingnum']})<br/>结算价x数量</td>";
                }

            }


            if ($typeid == 1)

            {

                $table .= "<td>{$row['childnum']}</td>";

                $table .= "<td>{$row['childprice']}</td>";

                $table .= "<td>{$row['oldnum']}</td>";

                $table .= "<td>{$row['oldprice']}</td>";

                $table .= "<td>{$insurancePrice}</td>";
                /*
                 *   20170517 加入 了线路的车型 车牌号
                 * */
                  //出现方式    1 大巴 2 自驾
                 //是否需要帐篷 1 需要 2 为不需要
                //  获取车辆的信息
                $carInfo =ORM::factory('member_car')->where("orderid", '=', $row['id'])->find()->as_array();
                Common::read_log(var_export($carInfo,true));
                if(!empty($carInfo)){
                    if($carInfo['travelWay']==2){
                        $table .= "<td>自驾</td>";
                        $table .= "<td>{$carInfo['carbrand']}</td>";
                        $table .= "<td>{$carInfo['carNumber']}</td>";
                        $table .= "<td>{$carInfo['cartype']}</td>";
                    }else{
                        $table .= "<td>大巴</td>";
                        $table .= "<td></td>";
                        $table .= "<td></td>";
                        $table .= "<td></td>";

                    }
                    if($carInfo['tent']==1) {
                        $table .= "<td>需要</td>";
                    }elseif($carInfo['tent']==2){
                        $table .= "<td>不需要</td>";
                    }
                }


            }

            $table .= "<td>{$price}</td>";
           //===封冀蜀 加入 判断
            if($status=='7'){
                $row['status'] =$status;
            }
            $table .= "<td>" . Model_Member_Order::getStatusName($row['status']) . "</td>";

            $table .= "<td>{$row['linkman']}</td>";


            $table .= "<td>{$row['linktel']}</td>";

            $table .= "<td>{$row['usedate']}</td>";

            $table .= "</tr>";



        }



        $table .= "</table>";

        $filename = date('Ymdhis');

        header('Pragma:public');

        header('Expires:0');

        header('Content-Type:charset=utf-8');

        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');

        header('Content-Type:application/force-download');

        header('Content-Type:application/vnd.ms-excel');

        header('Content-Type:application/octet-stream');

        header('Content-Type:application/download');

        header('Content-Disposition:attachment;filename=' . $filename . ".xls");

        header('Content-Transfer-Encoding:binary');



        //define("FILETYPE","xls");

        //header("Content-type:application/vnd.ms-excel");

        //header('Content-type: charset=GBK');

        //header('Pragma: no-cache');

        //header('Expires: 0');

        //header("Content-Disposition:filename=".$info['name'].".xls");

        //$str = iconv("UTF-8//IGNORE","GBK//IGNORE",$str);

        if (empty($arr))

        {

            echo iconv('utf-8', 'gbk', $table);

        }

        else

            echo $table;

        exit();

    }





    /**

     * @param $timearr

     * @param

     * @return array

     */

    private function getOrderDetailPrice($timearr, $typeid)

    {

        $where = '';

        $out = array();

        if (is_array($timearr))

        {

            $starttime = $timearr[0];

            $endtime = $timearr[1];

            $where = "addtime>=$starttime and addtime<=$endtime and";

        }

        //已付款

        $arr = ORM::factory('member_order')->where("{$where} typeid=$typeid and ispay=1")->get_all();

        $price = 0;

        foreach ($arr as $row)

        {

            $price += intval($row['dingnum']) * $row['price'] + intval($row['childnum']) * $row['childprice'];

        }

        $out['pay'] = array(

            'num' => count($arr),

            'price' => $price

        );

        //未付款

        $arr = ORM::factory('member_order')->where("{$where} typeid=$typeid and ispay=0")->get_all();

        $price = 0;

        foreach ($arr as $row)

        {

            $price += intval($row['dingnum']) * $row['price'] + intval($row['childnum']) * $row['childprice'];

        }

        $out['unpay'] = array(

            'num' => count($arr),

            'price' => $price

        );

        //已取消

        $arr = ORM::factory('member_order')->where("{$where} typeid=$typeid and status=3")->get_all();

        $price = 0;

        foreach ($arr as $row)

        {

            $price += intval($row['dingnum']) * $row['price'] + intval($row['childnum']) * $row['childprice'];

        }



        $out['cancel'] = array(

            'num' => count($arr),

            'price' => $price

        );

        return $out;





    }



    //根据时间范围获取某个产品类型订单数量.

    private function getOrderPrice($timearr, $typeid)

    {

        $where = '';

        if (is_array($timearr))

        {

            $starttime = $timearr[0];

            $endtime = $timearr[1];

            $where = "addtime>=$starttime and addtime<=$endtime and";

        }

        $arr = ORM::factory('member_order')->where("{$where} typeid=$typeid and status=2")->get_all();

        $price = 0;

        foreach ($arr as $row)

        {

            $price += intval($row['dingnum']) * $row['price'] + intval($row['childnum']) * $row['childprice'];

            if ($row['usejifen'])

            {

                $price -= $row['jifentprice'];

            }

        }

        return $price;

    }



    public function getTimeRange($type)

    {

        $curtime = time();

        switch ($type)

        {

            case 1:

                $starttime = strtotime(date('Y-m-d 00:00:00'));

                $endtime = strtotime(date('Y-m-d 23:59:59'));

                break;

            case 2:

                $starttime = strtotime(date('Y-m-d 00:00:00', strtotime('-1 day')));

                $endtime = strtotime(date('Y-m-d 23:59:59', strtotime('-1 day')));

                break;

            case 3:

                $starttime = strtotime(date("Y-m-d", $curtime - 60 * 60 * 24 * 7));

                $endtime = $curtime;

                break;

            case 4:

                $starttime = strtotime(date('Y-m-d 00:00:00', strtotime('last Sunday')));

                $endtime = strtotime(date('Y-m-d H:i:s', strtotime('last Sunday') + 7 * 24 * 3600 - 1));

                break;

            case 5:

                $starttime = strtotime(date("Y-m-d", $curtime - 60 * 60 * 24 * 31));

                $endtime = $curtime;

                break;

            case 6:

                $starttime = strtotime(date('Y-m-01 00:00:00', strtotime('-1 month')));

                $endtime = strtotime(date('Y-m-31 23:59:00', strtotime('-1 month')));

                break;

        }

        $out = array(

            $starttime,

            $endtime

        );

        return $out;



    }





}