<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 例子控制器
 */
class Controller_Index extends Stourweb_Controller
{
    /**
     * 初始化支付对象
     */
    public function before()
    {
        parent::before();
    }
    public function action_index()
    {
       $this->request->redirect('pc');
    }



}