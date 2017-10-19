<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Comment extends ORM
{
    //对应数据库
    protected $_table_name = 'comment';

    /**
     * @param $id 产品id
     * @param $typeid 栏目id
     * @return int 评论数量
     */
    public static function get_comment_num($id, $typeid)
    {

        $sql = "SELECT count(*) as num FROM `sline_comment` WHERE articleid='$id' AND typeid='$typeid'  AND isshow=1 ";
        $ar = DB::query(1,$sql)->execute()->current();
        return $ar['num'] ? $ar['num'] : 0;
    }

    /**
     * @param $id
     * @param $typeid
     * @return int|string
     * @desc 获取满意度
     */
    public static function get_score($id, $typeid)
    {
        $arr = ORM::factory('comment')
            ->where("articleid='$id' and typeid='$typeid'")
            ->get_all();
        $i = 0;
        $score = 0;
        foreach ($arr as $row)
        {
            $score += $row['score1'];
            $i++;
        }
        if ($i != 0)
        {
            $avg = $score / $i;

            $out = sprintf("%.2f", $avg) * 20;

        }
        else
        {
            $out = mt_rand(92, 98);
        }
        $out .= "%";
        return $out;

    }

    /**
     * 获取指定评论
     * @param $orderid
     * @return mixed
     */
    public static function get_comment($orderid)
    {
        $sql = "SELECT * FROM sline_comment ";
        $sql .= "WHERE orderid={$orderid} ";
        $sql .= "ORDER BY id DESC";
        $arr = DB::query(1, $sql)->execute()->as_array();


        return $arr[0];
    }


}
