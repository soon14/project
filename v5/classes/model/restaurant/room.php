<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Restaurant_Room extends ORM
{

    /*
     * 获取房型信息
     * */
    public static function suit_info($suitid)
    {
        $sql = "SELECT * FROM `sline_restaurant_room` WHERE id='$suitid'";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $ar[0]['price']=Currency_Tool::price($ar[0]['price']);
        $ar[0]['sellprice']=Currency_Tool::price($ar[0]['sellprice']);
        $ar[0]['dingjin'] = Currency_Tool::price($ar[0]['dingjin']);

        return $ar[0];

    }

}
