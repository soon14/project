<?php defined('SYSPATH') or die('No direct script access.');



/**

 * 验单管理

 * Class Controller_Pc_Checkorder

 */

class Controller_Pc_Order extends Stourweb_Controller

{

    //默认对象

    private $_model;



    /**

     * 初始化

     */

    public function before()

    {

        parent::before();

        //登陆状态判断

        $this->_id = Cookie::get('st_supplier_id');

        if(empty($this->_id))

        {

            $this->request->redirect('pc/login');

        }

        else

        {

            $this->_user_info = Model_Supplier::get_supplier_byid($this->_id);

            $this->assign('userinfo',$this->_user_info);

        }

        $this->_model = new Model_Member_Order();

    }





    /**

     * 全部订单

     */

    public function action_all()

    {
        $sta   = $_GET['status'];
        $paysouce   =$_GET['paysource'];
        if($_GET['starttime']!="开始时间")
        {
            $starttime =strtotime($_GET['starttime']);
        }
        if($_GET['endtime']!='结束时间')
        {
            $endtime = strtotime($_GET['endtime']);
        }

        $this->assign('paysources', Model_Member_Order::getPaySources());
        $data = $this->_model->get_my_order_list($sta,$starttime,$endtime,$paysouce);

        $status = array(
            0=>'未处理',

            1=>'等待付款',

            2=>'付款成功',

            3=>'订单取消',

            4=>'已退款',

            5=>'交易完成',

            6=>'退款中',

            7=>'已过期',

            8=>'已失效');

        $st_supplier_id = intval(Cookie::get('st_supplier_id'));
        $this -> assign("supid",$st_supplier_id);
        $this ->assign("status",$status);

        $this->assign('data', $data);

        $this->assign('get', $_GET);

        $this->display('order/all');

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
            }elseif($status=='8'){
                $w .= " and status=1 and unix_timestamp(usedate)<$time ";
            }
            else{
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

        }

        $table .= "<td>应付总额</td>";

        $table .= "<td>交易状态</td>";

        $table .= "<td>预订人</td>";

        $table .= "<td>联系电话</td>";

        $table .= "<td>使用日期</td>";



        $table .= "</tr>";



        foreach ($arr as $row)

        {
           $usedate   = strtotime($row['usedate']);
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





            }

            $table .= "<td>{$price}</td>";
            //===封冀蜀 加入 判断
            if($status=='7'){
                $row['status'] =$status;
            }elseif($row['paytype']==4&&$row['isconsume']==0&&$row['status']==5&&$usedate<$time){
                $row['status'] =7;
            }elseif($row['paytype']!=4&&$row['isconsume']==0&&$row['status']==2&&$usedate<$time){
                $row['status'] =7;
            }elseif($row['status']==1&&$usedate<$time){
                $row['status']  =8;

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

     * 订单查看

     */

    public function action_show()

    {

        $id = intval($_GET['id']);

        $data = $this->_model->get_order_info($id);

        $this->assign('info', $data);

        $this->display('order/show');

    }

    /*

        * 生成excel页面

        * */

    public function action_excel()

    {

        $this->assign('typeid', $this->params['typeid']);

        //$this->assign('statusnames', Model_Member_Order::$statusNames);

        $this->display('order/excel');
       // $this->display('order/show');

    }



}