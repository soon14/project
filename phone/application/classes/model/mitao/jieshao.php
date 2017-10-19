<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mitao_Jieshao extends ORM
{
    /**
     * 获取行程
     * @param $lineid
     * @return mixed
     */
     public static function detail($lineid,$day)
    {
        $sql = "SELECT * FROM sline_mitao_jieshao where lineid ={$lineid} and day<={$day} order by day asc";
        $arr= DB::query(1, $sql)->execute()->as_array();
        foreach($arr as &$v){
            $v['jieshao']= Product::strip_style($v['jieshao']);
			if($v['breakfirsthas'])
            {
                $v['breakfirst'] = empty($v['breakfirst']) ? '含' : $v['breakfirst'];
            }else{
                $v['breakfirst'] = '自理';
            }
            if($v['lunchhas'])
            {
                $v['lunch'] = empty($v['lunch']) ? '含' : $v['lunch'];
            }else{
                $v['lunch'] = '自理';
            }
            if($v['supperhas'])
            {
                $v['supper'] = empty($v['supper']) ? '含' : $v['supper'];
            }
            else{
                $v['supper'] = '自理';
            }
        }
        return $arr;
    }
}