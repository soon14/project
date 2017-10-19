<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Car_Suit extends ORM{

    /**
     * @param $suitid
     * @return array
     * @desc 获取套餐详情
     */
    public static function suit_info($suitId)
    {
        $suit = ORM::factory('car_suit',$suitId)->as_array();
        $suit['title'] = $suit['suitname'];
        $suit['dingjin'] = Currency_Tool::price($suit['dingjin']);
        return $suit;
    }
    /**
     * @param $suitId
     * @param $useDate
     * @return array
     * @desc 获取套餐某天的报价.
     */
    public static function suit_price($suitId,$useDate)
    {
        $time = strtotime($useDate);
        $arr = ORM::factory('car_suit_price')
            ->where("suitid=$suitId AND day=$time")
            ->find()
            ->as_array();


            $arr['adultprofit']=Currency_Tool::price($arr['adultprofit']);
        $arr['adultbasicprice']=Currency_Tool::price($arr['adultbasicprice']);
        $arr['adultprice']=Currency_Tool::price($arr['adultprice']);

        return $arr;

    }
}