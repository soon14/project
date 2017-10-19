<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Farm_Suit_Price extends ORM {
    protected  $_table_name = 'farm_suit_price';
	
	public static function getMinPrice($suitid,$field='price')
	{
		$time=time();
		$result=DB::query(Database::SELECT,"select min($field) as minprice from sline_farm_suit_price where  day>$time and suitid=$suitid")->execute()->as_array();
		return $result[0]['minprice'];
	}

}