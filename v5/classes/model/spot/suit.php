<?php defined('SYSPATH') or die('No direct access allowed.');





class Model_Spot_Suit extends ORM

{

    /**

     * @param $suitid

     * @return array

     * @desc 获取套餐详情

     */

    public static function suit_info($suitId)

    {

        $suit = ORM::factory('spot_ticket',$suitId)->as_array();



        $suit['sellprice']=Currency_Tool::price($suit['sellprice']);

        //$suit['ourprice']=Currency_Tool::price($suit['ourprice']); //08.01 fengjishu 隐藏

        $suit['dingjin'] = Currency_Tool::price($suit['dingjin']);

        //==================fengjishu  反序列话 lastoffer 07.14  用于结算景区结算价 start
        $suit['lastoffer'] =unserialize($suit['lastoffer']);
        //==================fengjishu  反序列话 lastoffer 07.14  用于结算景区结算价  end



        return $suit;

    }







}