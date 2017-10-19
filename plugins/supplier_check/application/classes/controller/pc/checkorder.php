<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 验单管理
 * Class Controller_Pc_Checkorder
 */
class Controller_Pc_Checkorder extends Stourweb_Controller
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
     * 我要验单
     */
    public function action_my_check()
    {
        $data = $this->_model->get_my_check_list();
        $this->assign('data', $data);

        $this->assign('get', $_GET);

        $this->display('checkorder/my_check');
    }

    public function action_my_order()
    {
        $data = $this->_model->get_my_order_list();
        $this->assign('data', $data);
        $this->assign('get', $_GET);
        $this->display('checkorder/my_order');
    }

    /**
     * 验单记录
     */
    public function action_check_record()
    {

        //================fengjsihu  start
         $paysouce   =$_GET['paysource'];
        if($_GET['starttime']!="开始时间")
        {
            $starttime =strtotime($_GET['starttime']);
        }
        if($_GET['endtime']!='结束时间')
        {
            $endtime = strtotime($_GET['endtime']);
        }

        $st_supplier_id = intval(Cookie::get('st_supplier_id'));
        $this -> assign("supid",$st_supplier_id);
        $this->assign('paysources', Model_Member_Order::getPaySources());
     //=================fengjsihu  end
        $data = $this->_model->get_check_record_list($starttime,$endtime,$paysouce);
        $this->assign('data', $data);

        $this->assign('get', $_GET);

        $this->display('checkorder/check_record');
    }

    /**
     * 订单查看
     */
    public function action_show_order()
    {
        $id = intval($_GET['id']);

        $data = $this->_model->get_order_info($id);
        $this->assign('data', $data);

        $this->display('checkorder/show_order');
    }

    /**
     * 验单操作
     */
    public function action_ajax_check_order()
    {
        if(!$this->request->is_ajax())
        {
            echo json_encode(array('status' => 0,'msg' => '请求异常'));
            exit;
        }
        $id = intval($_POST['id']);
        $data = $this->_model->check_order_info($id);

        echo json_encode($data);
        exit;
    }
}