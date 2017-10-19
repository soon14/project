<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Error extends Stourweb_Controller{
    /*
     * 错误控制器
     * 可接收参数 message错误信息
     * */
    public function before()
    {
        parent::before();
        //状态设置
        $this->response->status((int) $this->request->action());
    }

    //404页面
    public function action_404()
    {
        $this->assign('referurl',$this->request->referrer());
        $this->display('error/404');
    }
    //500页面
    public function action_500()
    {
       // echo $this->request->param('message');
        $this->assign('referurl',$this->request->referrer());
        $this->display('error/500');

    }









}