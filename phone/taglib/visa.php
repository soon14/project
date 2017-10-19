<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Taglib_Visa
 * 签证标签
 */
class Taglib_Visa
{
    //private static $basefiled = '';
    private static $default = array(
        'row' => '10',
        'flag' => '',
        'offset' => 0,
        'destid' => 0,
        'pid' => 0
    );

    /**
     * 签证
     * @param $param
     */
    public static function query($param)
    {
        $param = array_merge(self::$default, $param);
        extract($param);
        switch ($flag)
        {
            case 'order':
                $list = self::get_visa_order($offset, $row);
                break;

        }
        foreach ($list as &$v)
        {
            $v['litpic'] = Common::img($v['litpic']);
            $v['sellprice'] = $v['marketprice'];
            $v['url'] = Common::get_web_url($v['webid']) . "/visa/show_{$v['aid']}.html";
        }
        return $list;

    }

    /**
     * @param $param
     * @return Array
     * @desc 读取签发城市
     */
    public static function city($param)
    {
        $default = array(
            'row' => '10',
            'flag' => '',
            'offset' => 0,
        );
        $param = array_merge($default, $param);
        extract($param);
        $arr = ORM::factory('visa_city')
            ->where("isopen=1")
            ->get_all();
        foreach($arr as &$r)
        {
            $r['title'] = $r['kindname'];
        }
        return $arr;

    }
    /**
     * @param $param
     * @return Array
     * @desc 读取签证类型
     */
    public static function kind($param)
    {
        $default = array(
            'row' => '10',
            'offset' => 0,
        );
        $param = array_merge($default, $param);
        extract($param);
        $arr = ORM::factory('visa_kind')
            ->where("isopen=1")
            ->get_all();
        foreach($arr as &$r)
        {
            $r['title'] = $r['kindname'];
        }
        return $arr;

    }

    /**
     * 签证热门国家、地区
     * @param $param
     * @return mixed
     */
    public static function area($param)
    {
        $param = array_merge(self::$default, $param);
        extract($param);
        switch ($flag)
        {
            case 'order':
                $list = self::get_area_order($offset, $row);
                break;
            case 'query':
                $list = self::get_area_query($offset, $row, $pid);
                break;
        }
        foreach ($list as &$v)
        {
            $v['litpic'] = Common::img($v['litpic']);
            $v['url'] = Common::get_web_url($v['webid']) . "/visa/{$v['pinyin']}/";
            $v['title'] = $v['kindname'];
        }
        return $list;
    }

    /**
     * @param $offset
     * @param $row
     * @return mixed
     */
    public static function get_area_order($offset, $row)
    {
        $sql = 'SELECT * FROM sline_visa_area ';
        $sql .= 'WHERE litpic is not null and isopen=1 and webid=0 ';
        $sql .= 'order by displayorder asc,id desc ';
        $sql .= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    public static function get_area_query($offset, $row, $pid)
    {
        $sql = 'SELECT * FROM sline_visa_area ';
        $sql .= "WHERE pid={$pid} and isopen=1 and webid=0 ";
        $sql .= 'order by displayorder asc,id desc ';
        $sql .= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    public static function get_visa_order($offset,$row)
    {

        $where = "a.webid=0 AND a.ishidden=0";
        $sql = "SELECT a.* FROM `sline_visa` AS a LEFT JOIN `sline_allorderlist` AS b ON a.id=b.aid AND b.typeid=8 ";
        $sql .= "WHERE {$where} ";
        $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
        $sql .= "LIMIT {$offset},{$row}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
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
}