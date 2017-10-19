<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 公共控制器
 */
class Controller_Pc_Pub extends Stourweb_Controller
{
    private $_user_info = null;
    public function before()
    {
        parent::before();
        //登陆状态判断
        $st_supplier_id = Cookie::get('st_supplier_id');

        if(empty($st_supplier_id))
        {
            $this->request->redirect($GLOBALS['cfg_basehost'].'/plugins/supplier/pc/login');
        }
        else
        {
            $this->_user_info = Model_Supplier::get_supplier_byid($st_supplier_id);
            $this->assign('userinfo',$this->_user_info);
        }

    }
    /**
     * 网站头部
     */
    public function action_header()
    {

        $header = Request::factory($GLOBALS['cfg_basehost'].'/plugins/supplier/pc/pub/header?sid='.$this->_user_info['id'])->execute()->body();
        $this->assign("header",$header);
        $this->display("pub/header");

    }

    /**
     * 网站底部
     */
    public function action_footer()
    {
        $this->display("pub/footer");
    }




}