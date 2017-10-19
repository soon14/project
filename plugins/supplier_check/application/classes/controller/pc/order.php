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
        $this->_model = new Model_Member_Order();
    }


    /**
     * 全部订单
     */
    public function action_all()
    {
        $data = $this->_model->get_my_order_list();
        $this->assign('data', $data);
        $this->assign('get', $_GET);
        $this->display('order/all');
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


}