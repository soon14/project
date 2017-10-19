<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Startplace extends ORM
{

    public static function start_city($cityId)
    {
        if (empty($cityId)||preg_match('/[\x{4e00}-\x{9fa5}]+/u',$cityId))
        {
            return $cityId;
        }
        $city = DB::select('cityname')->from('startplace')->where("id ={$cityId}")->execute()->current();
        return $city['cityname'];
    }
}