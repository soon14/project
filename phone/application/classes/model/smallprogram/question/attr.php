<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Smallprogram_Question_Attr extends ORM {


    protected  $_table_name = 'smallprogram_question_attr';


    public static function getAttrnameList($attrid_str,$separator=',')
    {
        $attrid_arr=explode(',',$attrid_str);
        foreach($attrid_arr as $k=>$v)
        {
            $attr=ORM::factory('smallprogram_question_attr',$v);

            if($attr->attrname)
                $attr_str.=$attr->attrname.$separator;
        }
        $attr_str=trim($attr_str,$separator);
        return $attr_str;

    }
}