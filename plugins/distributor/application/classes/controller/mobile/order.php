<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 验单操作
 * Class Controller_Mobile_Order
 */
class Controller_Mobile_Order extends Stourweb_Controller
{
    //默认对象
    private $_model;
    private $_id;
    private $_info;

    /**
     * 初始化
     */
    public function before()
    {
        parent::before();
        $this->_model = new Model_Member_Order();
        $this->_id = Cookie::get('st_supplier_id');
        if(empty($this->_id))
        {
            $this->request->redirect("mobile/login");
        }
        else
        {
            $this->_info = Model_Supplier::get_supplier_byid($this->_id);
            $this->assign('info',$this->_info);
        }


    }

    /**
     * 订单详情
     */
    public function action_show()
    {
        $id = intval($_GET['id']);
        $from = Arr::get($_GET,'from');
        $data = $this->_model->get_order_info($id);

        $this->assign('data', $data);
        $this->assign('from',$from);
        $this->display('order_show');

    }

    /**
     * 验单操作页面
     */
    public function action_scan()
    {
        $this->display('scan');
    }

    public function action_scan_result()
    {

        $code = Arr::get($_GET,'code');

        $data = $this->_model->get_order_by_code($code);

        if(empty($data))
        {
            $u = $GLOBALS['cfg_basehost']."/supplier/mobile/order/scan";
            echo "<script>alert('订单不存在');window.location.href='".$u."';</script>";

        }
        else
        {
            $this->request->redirect('mobile/order/show?id='.$data['id']."&from=scan");
        }

    }




    /**
     * 验单历史
     */
    public function action_check_history()
    {

        $data = $this->_model->get_check_record_list();
        $this->assign('data', $data);
        $this->assign('get', $_GET);
        $this->display('order_check_history');
    }


    /**
     * ajax 验单
     */
    public function action_ajax_check_order()
    {
        $smscode = Arr::get($_POST,'smscode');
        if(!$this->request->is_ajax())
        {
            echo json_encode(array('status' => 0,'msg' => '请求异常'));
            exit;
        }
        $data = $this->_model->check_order_mobile_info($smscode);
        echo json_encode($data);
        exit;



    }




}