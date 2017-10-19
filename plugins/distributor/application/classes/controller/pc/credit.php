<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 授信管理
 * Class Controller_Pc_Credit
 */
class Controller_Pc_Credit extends Stourweb_Controller
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
     * 我要授信
     */
    public function action_my_credit()
    {
        $data = $this->_model->get_my_credit();
        $this->assign('data', $data);
        $total = $this->_model->get_my_order_price_total();
        $this->assign('total', $total);
        $this->assign('get', $_GET);

        $this->display('credit/my_credit');
    }

    /**
     * 授信记录
     */
    public function action_credit_record()
    {
        $data = $this->_model->get_credit_record_list();
        $this->assign('data', $data);

        $this->assign('get', $_GET);

        $this->display('credit/credit_record');
    }

}