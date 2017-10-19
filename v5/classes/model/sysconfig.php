<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Sysconfig extends ORM
{
    /*
     * 获取配置文件
     * @param int $webid 站点id
     * return array
     */
    public static function config($webid = 0)
    {
        $sql = "select varname,value from sline_sysconfig where webid={$webid}";
        return DB::query(Database::SELECT, $sql)->execute()->as_array();
    }


}