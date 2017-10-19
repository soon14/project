<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 例子控制器
 */
class Controller_Set extends Stourweb_Controller
{
    public function before()
    {
        parent::before();
        $this->assign('parentkey', $this->params['parentkey']);
        $this->assign('itemid', $this->params['itemid']);
    }
    /**
     * LOGO设置
     */
    public function action_logo()
    {
        $this->display('set_logo');
    }

    /**
     *  供应商底部设置
     */
    public function action_footer()
    {
        $configinfo = DB::select()->from('sysconfig')->where('webid','=',0)->and_where('varname','=','cfg_supplier_footer')->execute()->current();
        $this->assign('configinfo', $configinfo);//var_dump($configinfo);exit;
        $this->display('set_footer');
    }
}