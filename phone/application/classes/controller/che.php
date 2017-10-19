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
    /*
     *   首页
     * 1：
     * 2：
     */
          $keyword  = Common::remove_xss($_GET['keyword']);
          $this  -> assign('keyword',$keyword);
          $this  -> display('chejiache/car-list');
    }
    //详细页
    public function action_show()
    {
        $aid = Common::remove_xss($this->request->param('aid'));

      //获取商家信息
        $info  = Model_Che::get_che_business($aid);
      // 获取 商家洗车 类型及价格
        $type  = Model_Che::get_che_type($aid);

        $this->assign("info",$info);
        $this ->assign('type',$type);

            $this ->display("chejiache/car-show");


       // $this ->display("chejiache/show_$aid");

    }

    //  ajax  加载跟多
    public  function  action_ajax_che_more(){

          $page      = Common::remove_xss($_GET['page']);

          $keyword   = Common::remove_xss($_GET['keyword']);

          $pagesize  = 6;

          $offset    = ceil($page-1)*$pagesize;

          $arr    = Model_Che::get_che($offset,$pagesize,$keyword);

          $start  =  strtotime("2017-01-15");

          $over   =  strtotime("2017-02-12");

          $time    =  time();
         if($time<$over){

             $times = -1;
         }else{
             $times =2 ;
         }

          foreach($arr as &$v){

              $v['price']  = Model_Che::get_min_price($v['id']);
              $v['times']  =$times ;
          }
         echo Product::list_search_format1($arr,$page,$pagesize);

    }



}