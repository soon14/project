<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Che extends Stourweb_Controller{
    /*
     * 车主服务
     * */
    public function before()
    {
        parent::before();
        header('Content-type: text/html; charset=UTF8');
    }

    //首页
    public function action_index()
    {
           $info   = Model_Che::get_che();
        // 获取最小价格]
        foreach($info as &$v){
            $v['minprice']  = Model_Che::get_min_price($v['id']);
          }

           $this ->assign("info",$info);
           $this  -> display('chejiache/index');
    }
    //详细页
    public function action_show()
    {
        $aid = Common::remove_xss($this->request->param('aid'));

        //获取商家信息
        $info  = Model_Che::get_che_business($aid);
        // 获取 商家洗车 类型及价格
        $type  = Model_Che::get_che_type($aid);
        // 获取最小价格
        $info['minprice']  = Model_Che::get_min_price($aid);

        $this->assign("info",$info);
        $this ->assign('type',$type);

            $this ->display("chejiache/show");

       // $this ->display("chejiache/show_$aid");

    }



}