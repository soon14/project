<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Taglib—_mitao
 * 米淘标签
 *
 */
class Taglib_mitao
{
    private static $basefiled = 'a.id,a.aid,a.title,a.storeprice,a.litpic,a.startcity,a.kindlist,a.attrid,a.bookcount';

    public static function query($param)
    {

        $default = array(
            'row' => '10',
            'flag' => '',
            'offset' => 0,
            'destid' => 0

        );
        $param = array_merge($default, $param);
        extract($param);
        switch ($flag)
        {
            case 'new':
                $list = self::get_line_new($offset, $row);
                break;
            case 'order':
                $list = self::get_line_order($offset, $row);
                break;
            case 'mdd':
                $list = self::get_line_bymdd($offset, $row, $destid);
                break;
            case 'relative':
                $list = self::get_line_bymdd($offset,$row,$destid);
                break;
            case 'theme':
                $list = self::get_line_by_themeid($offset,$row,$themeid);
                break;
            case 'attr':
                $list = self::get_line_by_attrid($offset,$row,$attrid);
                break;

        }
        foreach ($list as &$v)
        {

            $v['price'] = Model_Mitao::get_minprice($v['id']);
            $v['attrlist'] = Model_Mitao::line_attr($v['attrid']);
            $v['url'] = Common::get_web_url($v['webid']) . "/mitaos/show_{$v['aid']}.html";
            $v['startcity'] = Model_Startplace::start_city($v['startcity']);
            $v['iconlist'] = Product::get_ico_list($v['icolist']);
            if(!empty($v['storeprice']))
            {
                $v['saveprice'] = intval($v['storeprice'])-intval($v['price']);
            }
        }

        return $list;

    }

    /**
     * 获取线路套餐列表
     * @param $params
     * @return Array
     */

    public static function suit($params)
    {
        $default=array('row'=>'10','productid'=>0);
        $params=array_merge($default,$params);
        extract($params);
        $suit = ORM::factory('mitao_suit')
            ->where("lineid=:productid")
            ->param(':productid',$productid)
            ->get_all();
        foreach($suit as &$r)
        {


            $r['title'] = $r['suitname'];
        }
        return $suit;

    }

    /**
     * @param $params
     * @return Array
     * 天数读取
     */

    public static function day_list($params)
    {
        $default=array('row'=>'10');
        $params=array_merge($default,$params);
        extract($params);
        $suit = ORM::factory('mitao_day')->get_all();
        $autoindex =1;
        foreach($suit as &$r)
        {
            $number=substr($r['word'],0,2);
            $arr=array("零","一","二","三","四","五","六","七","八","九");
            if(strlen($number)==1)
            {
                $result=$arr[$number];
            }
            else
            {
                if($number==10)
                {
                    $result="十";
                }
                else
                {
                    if($number<20)
                    {
                        $result="十";
                    }
                    else
                    {
                        $result=$arr[substr($number,0,1)]."十";
                    }
                    if(substr($number,1,1)!="0")
                    {
                        $result.=$arr[substr($number,1,1)];
                    }
                }
            }
            if($autoindex == count($suit))
            {
                    $r['title']=$result."日游以上";
            }
            else
            {
                    $r['title']=$result."日游";
            }

            $autoindex++;


        }
        return $suit;
    }

    public static function price_list($params)
    {
        $default=array('row'=>'10');
        $params=array_merge($default,$params);
        extract($params);
        $suit = ORM::factory('mitao_pricelist')
            ->get_all();
        foreach($suit as &$row)
        {
            if($row['lowerprice']!=''&& $row['highprice']!='')
            {
                $row['title'] = '&yen;'.$row['lowerprice'].'元-'.'&yen;'.$row['highprice'].'元';
            }
            else if($row['lowerprice']=='')
            {
                $row['title']='&yen;'.$row['highprice'].'元以下';
            }
            else if($row['highprice']=='')
            {
                $row['title']='&yen;'.$row['lowerprice'].'元以上';
            }
        }
        return $suit;
    }

    /**
     * @param $params
     * @return mixed
     * @desc 途经景点
     */

    public static function line_spot($params)
    {
        $default=array(
            'row'=>'10',
            'productid'=>0,
            'day'=>1
        );
        $params=array_merge($default,$params);
        extract($params);
        $sql = "SELECT * FROM `sline_mitao_dayspot` ";
        $sql.= "WHERE lineid=:productid AND day=:day ";
        $sql.= "ORDER BY displayorder ASC";
        $arr = DB::query(1,$sql)->parameters(array(":productid"=>$productid,":day"=>$day))->execute()->as_array();
        foreach($arr as &$r)
        {
            $r['url'] = Common::get_web_url($r['webid'])."/spots/show_".$r['spotid'].'.html';
            $r['title'] = $r['spotname'];
        }
        return $arr;
    }

    /**
     * 线路最新
     * @param $offset
     * @param $row
     * @return mixed
     */
    private static function get_line_new($offset, $row)
    {
        $sql = "SELECT " . self::$basefiled . " FROM `sline_mitao` AS a ";
        $sql .= "WHERE a.hidden=0 AND a.webid=0 ";
        $sql .= "ORDER BY a.modtime DESC,a.addtime DESC ";
        $sql .= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    /**
     * 线路排序
     * @param $offset
     * @param $row
     * @return mixed
     */
    private static function get_line_order($offset, $row)
    {
        $sql = "SELECT " . self::$basefiled . " FROM `sline_mitao` AS a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid and b.typeid=1) ";
        $sql .= "WHERE a.ishidden=0 AND  a.webid=0 ";
        $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
        $sql .= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    /**
     * 线路目的地
     * @param $offset
     * @param $row
     * @param $destid
     * @return mixed
     */
    private static function get_line_bymdd($offset, $row, $destid)
    {
        $sql = "SELECT " . self::$basefiled . " FROM `sline_mitao` AS a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid and b.typeid=1) ";
        $sql .= "WHERE a.ishidden=0 AND FIND_IN_SET('{$destid}',a.kindlist) AND a.webid=0 ";
        $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
        $sql .= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    private static function get_line_by_themeid($offset,$row,$themeid)
    {
        $sql = "SELECT " . self::$basefiled . " FROM `sline_mitao` AS a ";
        $sql .= "WHERE a.ishidden=0  AND FIND_IN_SET($themeid,a.themelist) ";
        $sql .= "ORDER BY a.modtime DESC,a.addtime DESC ";
        $sql .= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

	private static function get_line_by_attrid($offset,$row,$attrid)
    {
        $sql = "SELECT " . self::$basefiled . " FROM `sline_mitao` AS a ";
        $sql .= "WHERE a.ishidden=0  AND FIND_IN_SET($attrid,a.attrid) ";
        $sql .= "ORDER BY a.modtime DESC,a.addtime DESC ";
        $sql .= "LIMIT {$offset},{$row}";
		
        $arr = self::execute($sql);
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