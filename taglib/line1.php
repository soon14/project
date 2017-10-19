<?php defined('SYSPATH') or die('No direct script access.');



/**

 * Class Taglib_line

 * 线路标签

 *

 */

class Taglib_Line

{

    private static $basefiled = 'a.id,a.webid,a.aid,a.title,a.selfDriMdd,a.linedate,a.storeprice,a.litpic,a.startcity,a.kindlist,a.attrid,a.bookcount,a.storeprice,a.sellpoint,a.iconlist,a.satisfyscore';



    public static function query($param)

    {



        $default = array(

            'row' => '10',

            'flag' => '',

            'offset' => 0,

            'destid' => 0,

            'attrid' => 0



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



            $v['price'] = Model_Line::get_minprice($v['id']);

            // $v['price'] = Currency_Tool::price($v['price']);

            $v['attrlist'] = Model_Line::line_attr($v['attrid']);

            $v['url'] = Common::get_web_url($v['webid']) . "/lines/show_{$v['aid']}.html";

            $v['startcity'] = Model_Startplace::start_city($v['startcity']);

            $v['iconlist'] = Product::get_ico_list($v['iconlist']);

            $v['sellprice'] = $v['storeprice'] = Currency_Tool::price($v['storeprice']);

            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],1); //评论次数

            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],1)+intval($v['bookcount']); //销售数量



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

        $suit = ORM::factory('line_suit')

            ->where("lineid=:productid")

            ->order_by('displayorder','ASC')

            ->param(':productid',$productid)

            ->get_all();



        foreach($suit as &$r)

        {

            $beforBook=array(

                'suitid'=>$r['id']

            );

            $r['minprice'] = Model_Line::get_minprice($r['lineid'],$beforBook);

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

        $suit = ORM::factory('line_day')->get_all();

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

        $suit = ORM::factory('line_pricelist')

            ->where('lowerprice','>=',0)

            ->order_by('lowerprice','asc')

            ->get_all();

        foreach($suit as &$row)

        {

            if($row['lowerprice']==0 && $row['highprice']!=0)

            {

                $row['title'] = Currency_Tool::symbol().$row['highprice'].'以下';

            }

            else if($row['highprice']=='' || $row['highprice'] == 0)

            {

                $row['title'] = Currency_Tool::symbol().$row['lowerprice'].'以上';

            }

            else if($row['lowerprice']!='' && $row['highprice']!='')

            {

                $row['title'] = Currency_Tool::symbol().$row['lowerprice'].'-'.Currency_Tool::symbol().$row['highprice'];

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

        $sql = "SELECT * FROM `sline_line_dayspot` ";

        $sql.= "WHERE lineid=:productid AND day=:day ";

        $sql.= "ORDER BY displayorder ASC";

        $arr = DB::query(1,$sql)->parameters(array(":productid"=>$productid,":day"=>$day))->execute()->as_array();

        foreach($arr as &$r)

        {

            $s = "SELECT aid,webid FROM `sline_spot` WHERE id='{$r['spotid']}'";

            $spot = self::execute($s);

            $r['url'] = Common::get_web_url($spot[0]['webid'])."/spots/show_".$spot[0]['aid'].'.html';

            //$r['title'] = $r['spotname'];

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

        global $sys_webid;

        $sql = "SELECT " . self::$basefiled . " FROM `sline_line` AS a ";

        $sql .= "WHERE a.ishidden=0 AND a.webid={$sys_webid} ";

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

        global $sys_webid;

        $sql = "SELECT " . self::$basefiled . " FROM `sline_line` AS a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid and b.typeid=1) ";

        $sql .= "WHERE a.ishidden=0 AND  a.webid={$sys_webid} ";

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

        global $sys_webid;

        $sql = "SELECT " . self::$basefiled . " FROM `sline_line` AS a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid and b.typeid=1 and b.classid=$destid) ";

        $sql .= "WHERE a.ishidden=0 AND FIND_IN_SET('{$destid}',a.kindlist) AND a.webid={$sys_webid} ";

        $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";

        $sql .= "LIMIT {$offset},{$row}";

        $arr = self::execute($sql);

        return $arr;

    }



    private static function get_line_by_themeid($offset,$row,$themeid)

    {

        $sql = "SELECT " . self::$basefiled . " FROM `sline_line` AS a ";

        $sql .= "WHERE a.ishidden=0  AND FIND_IN_SET($themeid,a.themelist) ";

        $sql .= "ORDER BY a.modtime DESC,a.addtime DESC ";

        $sql .= "LIMIT {$offset},{$row}";

        $arr = self::execute($sql);

        return $arr;

    }

    private static function get_line_by_attrid($offset,$row,$attrid)

    {

        global $sys_webid;

        $sql = "SELECT " . self::$basefiled . " FROM `sline_line` AS a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid and b.typeid=1) ";

        $sql .= "WHERE a.ishidden=0 AND  a.webid={$sys_webid} AND FIND_IN_SET($attrid,a.attrid) ";

        $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";

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