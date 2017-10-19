<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Member extends ORM {

    protected  $_primary_key = 'mid';

      /*
       * 检查是否存在相同数据
       * */
    public static function checkExist($field,$value,$mid='')
    {
        $flag = 'true';
        $model = ORM::factory('member')->where($field,'=',$value);
        if(!empty($mid))
        {
            $model->where('mid','!=',$mid);
        }
        else
        {

        }
        $model->find();
        if($model->loaded() && !empty($model->mid))
        {
            $flag = 'false';
        }
        return $flag  ;
    }
    //获取消费总额
    public static function get_consume_amount($mid)
    {
        $orderList=DB::query(Database::SELECT,"select * from sline_member_order where memberid='$mid' and (status=2 or status=5)")->execute()->as_array();
        $amount=0;
        foreach($orderList as $row)
        {
            $amount+=Model_Member_Order::get_payed_amount($row);
        }
        return $amount;
    }



}