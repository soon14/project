<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Member_Jifen_Log extends ORM
{


    /**
     * @param $mid
     * @param $currentpage
     * @param int $pagesize
     * @return array
     * 搜索我的积分记录
     */

    public static function log_list($mid,$currentpage,$pagesize=10)
    {

        $page = $currentpage ? $currentpage : 1;
        $offset = (intval($page)-1)*$pagesize;

        $sql = "SELECT a.* FROM `sline_member_jifen_log` a ";
        $sql.= "WHERE a.memberid=$mid ";

        $sql.= "ORDER BY addtime desc ";

        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by
        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;
        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$row)
        {
            $row['jifentype'] = $row['type'] == 1 ? '使用' : '获得';
        }

        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;
    }

}
