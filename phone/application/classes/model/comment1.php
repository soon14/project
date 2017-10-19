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
        $m = ORM::factory('comment')
            ->where("articleid='$id' and typeid='$typeid'")
            ->get_all();
        $num = count($m);
        return $num ? $num : 0;
    }

    /**
     * @param $id
     * @param $typeid
     * @param $satisfyscore 后台设置满意度
     * @param $commentnum 评论条数
     * @return int|string
     * @desc 获取满意度
     */
    public static function get_score($id, $typeid, $satisfyscore=100,$commentnum=0)
    {
        //后台设置满意度处理
        $satisfyscore = floatval($satisfyscore);
        $satisfyscore = ($satisfyscore > 0 && $satisfyscore <= 100) ? $satisfyscore : 100;

        if($commentnum > 0)
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
                $satisfyscore = sprintf("%.2f", $avg) * 20;
            }
        }
        $satisfyscore = ($satisfyscore > 0 && $satisfyscore <= 100) ? $satisfyscore : 100;

        return $satisfyscore;
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
