<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Ordercheck extends Stourweb_Controller

{




    public function before()

    {

        parent::before();





    }

    public  function action_orderCheck(){
        //程序运行时间
       // $starttime = explode(' ',microtime());

          $typeid  = 5; //  门票

          $status  =1; // 未支付

          $limitM  =1800;//  30 分钟 未支付 修改订单状态 为3 ；

          $sql  = "select id,status,addtime from `sline_member_order` where status=$status and typeid=$typeid";

          $arr  =DB::query(Database::SELECT, $sql)->execute()->as_array();
         if(!empty($arr)) {
             foreach ($arr as $k => $v) {
                 set_time_limit(0);
                 $time = time();
                 $checktime = $v['addtime'] * 1 + $limitM;
                 if ($time > $checktime) {

                     $rows = DB::update('member_order')->set(array('status' => 3))->where('id', '=', $v['id'])->execute();
                      //  释放库存
                     //Model_member_Order::refundStorage($v['id'], 'plus');
                     //echo $v['id'] . "<br/>";
                 }

             }
         }

//        $endtime = explode(' ',microtime());
//        $thistime = $endtime[0]+$endtime[1]-($starttime[0]+$starttime[1]);
//        $thistime = round($thistime,3);
//        $msg = "本网页执行耗时：".$thistime." 秒。";
//
//        Common::read_log($msg,"ordercheck.txt");


    }





}