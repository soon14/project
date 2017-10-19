<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Sysconfig extends ORM
{
    /**
     * 根据站点获取配置
     * @param int $webid
     * @return array
     */
    public static function config($webid=0)
    {
        $sql = "select varname,value from sline_sysconfig where webid={$webid}";
        $arr=DB::query(Database::SELECT, $sql)->execute()->as_array();
        $out = array();
        foreach ($arr as $row) {
            $out[$row['varname']] = $row['value'];
        }
        return $out;
    }
}