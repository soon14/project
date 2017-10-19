<?php defined('SYSPATH') or die('No direct access allowed.');


class Model_mitao_Suit_Price extends ORM
{
    /**
     * @param $suitid
     * @param $useday
     * @return mixed
     * 产品套餐按天获取报价
     */

    public static function get_price_byday($suitid,$useday)
    {
        $sql = "SELECT * FROM `sline_mitao_suit_price` WHERE suitid='$suitid' AND day>='$useday' AND number!=0 limit 1";
        $ar = DB::query(1,$sql)->execute()->as_array();
        foreach($ar as &$v)
        {
            $v['childprofit'] = Currency_Tool::price($v['childprofit']);
            $v['childbasicprice'] = Currency_Tool::price($v['childbasicprice']);
            $v['childprice'] = Currency_Tool::price($v['childprice']);
            $v['oldprofit'] = Currency_Tool::price($v['oldprofit']);
            $v['oldbasicprice'] = Currency_Tool::price($v['oldbasicprice']);
            $v['oldprice'] = Currency_Tool::price($v['oldprice']);
            $v['adultprofit'] = Currency_Tool::price($v['adultprofit']);
            $v['adultbasicprice'] = Currency_Tool::price($v['adultbasicprice']);
            $v['adultprice'] = Currency_Tool::price($v['adultprice']);
        }
        return $ar;
    }


}