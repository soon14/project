<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Taglib_line
 * 线路标签
 *
 */
class  Taglib_Tuan
{
    private static $default = array(
        'row' => '10',
        'flag' => '',
        'offset' => 0,
        'destid' => 0
    );

    public static function query($param)
    {
        $filed = 'a.*';
        $param = array_merge(self::$default, $param);
        extract($param);
        switch ($flag)
        {
            case 'new':
                $list = Model_Tuan::tuan_list( $filed, $offset, $row);
                break;
            case 'mdd':
                $list = self::get_tuan_bymdd($offset, $row, $destid);
                break;

        }
        foreach ($list as &$v)
        {
            $v['url'] = Common::get_web_url($v['webid']) . "/tuan/show_{$v['aid']}.html";
            $v['discount'] = $v['price'] == $v['sellprice'] ? '不打折' : round($v['price'] / $v['sellprice'], 2) * 10;
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'], 13) + intval($v['bookcount']);
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
            $v['jsendtime'] = date('Y/m/d H:i:s',$v['endtime']);
        }
        return $list;
    }

    /**
     * 执行sql
     * @param $sql
     * @return mixed
     */
    private static function execute($sql)
    {
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * @param $offset
     * @param $row
     * @param $destid
     * @return mixed
     * @desc 按目的地读取团购
     */
    private static function get_tuan_bymdd($offset,$row,$destid)
    {
        $time = strtotime(date('Y-m-d',time()));
		$destid = $destid ? $destid : 0;
        $sql = "SELECT a.* FROM `sline_tuan` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid and b.classid=$destid) ";
        $sql.= "WHERE a.ishidden=0 AND FIND_IN_SET($destid,a.kindlist) AND a.starttime<$time AND endtime >unix_timestamp(now()) ";
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC,a.modtime DESC ";
        $sql.= "LIMIT $offset,$row";
        $arr = self::execute($sql);
        foreach($arr as &$v)
        {
            $v['sellprice'] = Currency_Tool::price($v['sellprice']);
            $v['price'] = Currency_Tool::price($v['price']);
            $v['dingjin'] = Currency_Tool::price($v['dingjin']);
        }

        return $arr;

    }
}