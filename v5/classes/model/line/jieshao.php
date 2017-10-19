<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Line_Jieshao extends ORM
{
    /**
     * 获取行程
     * @param $lineid
     * @return mixed
     */
    public static function detail($lineid,$lineday)
    {
        $sql = "SELECT * FROM sline_line_jieshao where lineid ={$lineid} LIMIT 0,$lineday";
        $arr= DB::query(1, $sql)->execute()->as_array();
        /*foreach($arr as &$v)
        {
            $v['jieshao']= $v['jieshao'];
        }*/
        return $arr;
    }
}