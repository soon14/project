<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Article_Attr extends ORM
{
    /**
     * @param $attrid
     * @return mixed
     * @desc 根据属性id返回属性数组.
     */
    public static function get_attr_list($attrid)
    {
       if(empty($attrid))return array();
        $attrid = trim($attrid,',');
       $sql = "SELECT id,attrname,pid FROM `sline_article_attr` WHERE id IN($attrid) AND isopen=1 AND pid!=0 ORDER BY displayorder ASC";
       $arr = DB::query(1,$sql)->execute()->as_array();
       return $arr;
    }
    //属性信息
    public static function get_attrname_list($attrid_str,$separator=',')
    {
        $attrid_arr=explode('_',$attrid_str);
        foreach($attrid_arr as $k=>$v)
        {
            $attr=ORM::factory('article_attr',$v);

            if($attr->attrname)
            {
                $attr_str.=$attr->attrname.$separator;
            }

        }
        $attr_str=trim($attr_str,$separator);
        return $attr_str;

    }

}
