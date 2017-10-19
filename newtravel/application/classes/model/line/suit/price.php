<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Line_Suit_Price extends ORM {
    protected  $_table_name = 'line_suit_price';
	
	public static function getMinPrice($suitid,$field='')
	{
		$time=time();
        if(!empty($field))
        {
            //获取利润
            $result=DB::query(Database::SELECT,"select min($field) as minprice from sline_line_suit_price where  day>$time and suitid=$suitid")->execute()->as_array();
            if($result[0]['minprice'] =='0')
            {
                $field = 'childprofit';
                $result=DB::query(Database::SELECT,"select min($field) as minprice from sline_line_suit_price where  day>$time and suitid=$suitid")->execute()->as_array();
            }
        }else{
            //获取最低报价
            $field = 'adultprice';
            $result=DB::query(Database::SELECT,"select min($field) as minprice from sline_line_suit_price where  day>$time and suitid=$suitid")->execute()->as_array();
            if($result[0]['minprice'] =='0')
            {
                $field = 'childprice';
                $result=DB::query(Database::SELECT,"select min($field) as minprice from sline_line_suit_price where  day>$time and suitid=$suitid")->execute()->as_array();
            }
        }
		return $result[0]['minprice'];
	}

}