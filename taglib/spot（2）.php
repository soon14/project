<?php
defined('SYSPATH') or die('No direct access allowed.');
/**
 * Created by Phpstorm.
 * User: netman
 * Date: 15-9-29
 * Time: 上午10:43
 * Desc: 景点/门票调用标签
 */

class Taglib_Spot {

    /*
     * 获取景点
     * @param 参数
     * @return array

   */
    private static $basefield ='a.*';
    private static $typeid = 5;

    /**
     * @param $params
     * @return mixed
     * @description 标签接口
     */
    public static function query($params)
    {
        $default=array(
            'row'=>'10',
            'flag'=>'',
            'offset'=>0,
            'destid'=>0
        );
        $params=array_merge($default,$params);
        extract($params);
        switch($flag)
        {
            case 'new':
                $list = self::get_spot_new($offset,$row);
                break;
            case 'order':
                $list = self::get_spot_order($offset,$row);
                break;
            case 'mdd':
                $list = self::get_spot_bymdd($offset,$row,$destid);
                break;
            case 'theme':
                $list = self::get_spot_by_themeid($offset,$row,$themeid);
                break;
            case 'attr':
                $list = self::get_spot_by_attrid($offset,$row,$attrid);
                break;
        }
        //对获取的数据进行初始化处理
        foreach($list as &$v)
        {
            $priceArr = Model_Spot::get_minprice($v['id']);
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$typeid); //评论次数
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],self::$typeid)+intval($v['bookcount']); //销售数量
            $v['sellprice'] = $priceArr['sellprice'];//挂牌价
          //  $v['sellprice'] = Currency_Tool::price($v['sellprice']);
            $v['price'] = $priceArr['price'];//最低价
           // $v['price'] = Currency_Tool::price($v['price']);
            $v['attrlist'] = Model_Hotel_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/spots/show_{$v['aid']}.html";
        }
        return $list;

    }

    /**
     * 获取门票类型
     * @param $params
     * @return Array
     */

    public static function suit_type($params)
    {
        $default=array('row'=>'10','productid'=>0);
        $params=array_merge($default,$params);
        extract($params);
        $suit = ORM::factory('spot_ticket_type')
            ->where("spotid=:productid")
            ->param(':productid',$productid)
            ->get_all();

        foreach($suit as $key => &$r)
        {
            if(self::check_suittype_hasticket($productid,$r['id']))
            {
                $r['title'] = $r['kindname'];
            }
            else
            {
                unset($suit[$key]);
            }
        }
        return $suit;

    }

    /**
 * 获取景点门票列表
 * @param $params
 * @return Array
 */

    public static function suit($params)
    {
        $default=array('row'=>'10','productid'=>0);
        $params=array_merge($default,$params);
        extract($params);
        $suit = ORM::factory('spot_ticket')
            ->where("spotid=:productid")
            ->param(':productid',$productid)
            ->get_all();
        foreach($suit as $key=> &$r)
        {

                $tickettype = ORM::factory('spot_ticket_type',$r['tickettypeid'])->get('kindname');
                $r['ticketname'] = $r['title'];
                $title = $r['title'].'('.$tickettype.')';
                $r['title'] = $title;

        }
        return $suit;

    }
    /**
     * 获取景点门票列表
     * @param $params
     * @return Array
     */

    public static function suit_by_type($params)
    {
        $default=array('row'=>'10','productid'=>0,'suittypeid'=>0);
        $params=array_merge($default,$params);
        extract($params);

        $suit = ORM::factory('spot_ticket')
            ->where("spotid=:productid and tickettypeid=:tickettypeid")
            ->param(':productid',$productid)
            ->param(':tickettypeid',$suittypeid)
            ->get_all();

        foreach($suit as &$v)
        {
            $v['sellprice'] = Currency_Tool::price($v['sellprice']);
            $v['ourprice'] = Currency_Tool::price($v['ourprice']);
        }
        return $suit;

    }

    /**
     * 获取门票价格列表
     * @param $params
     * @return array
     */
    public static function price_list($params)
    {
        $default=array('row'=>'10');
        $params=array_merge($default,$params);
        extract($params);
        $arr = ORM::factory('spot_pricelist')
            ->where("webid=0")
            ->limit($row)
            ->get_all();
        foreach($arr as &$row)
        {
            if($row['min']!=''&& $row['max']!='')
            {
                $row['title'] = '&yen;'.$row['min'].'元-'.'&yen;'.$row['max'].'元';
            }
            else if($row['min']=='')
            {
                $row['title']='&yen;'.$row['max'].'元以下';
            }
            else if($row['max']=='')
            {
                $row['title']='&yen;'.$row['min'].'元以上';
            }
        }
        return $arr;

    }


    /*
     * 获取最新景点
     * */
    private static function get_spot_new($offset,$row)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_spot` a ";
        $sql.= "WHERE a.ishidden=0 ORDER BY a.modtime desc,a.addtime DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;

    }
    /*
     * 按顺序获取酒店
     * */
    private static function get_spot_order($offset,$row)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_spot` a ";
        $sql.= "LEFT JOIN `sline_allorderlist` b ";
        $sql.= "ON (a.id=b.aid and b.typeid=".self::$typeid.")";
        $sql.= "WHERE a.ishidden=0 ";
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        $sql.= "limit {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;


    }
    /*
     * 按目的地获取景点
     * */
    private static function get_spot_bymdd($offset,$row,$destid)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_spot` a ";
        $sql.= "LEFT JOIN `sline_kindorderlist` b ";
        $sql.= "ON (a.id=b.aid and b.typeid=".self::$typeid.") ";
        $sql.= "WHERE a.ishidden=0 AND FIND_IN_SET($destid,a.kindlist) ";
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    /**
     * @param $spotid
     * @param $tickettypeid
     * @return mixed
     * 检测门票类型是否有票
     */
    private static function check_suittype_hasticket($spotid,$tickettypeid)
    {
        $sql = "SELECT id FROM `sline_spot_ticket`  WHERE spotid='$spotid' AND tickettypeid='$tickettypeid'";
        $row = DB::query(1,$sql)->execute()->current();
        return $row['id'] ? true : false;


    }

    /*
 * 获取专题景点
 * */
    private static function get_spot_by_themeid($offset,$row,$themeid)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_spot` a ";
        $sql.= "WHERE a.ishidden=0 AND FIND_IN_SET($themeid,a.themelist) ORDER BY a.modtime desc,a.addtime DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;

    }
    /**
     *
     * 根据attrid来获取对应属性的门票信息
     */
    private static function get_spot_by_attrid($offset,$row,$attrid)
    {
      $sql = "SELECT ".self::$basefield." FROM `sline_spot` a ";
      $sql.= "WHERE a.ishidden=0 AND FIND_IN_SET($attrid,a.attrid) ORDER BY a.modtime desc,a.addtime DESC ";
      $sql.= "LIMIT {$offset},{$row}";
      $arr = self::execute($sql);
      return $arr;
    }
    /*
     * 执行sql语句
     * */
    private static function execute($sql)
    {
        $arr = DB::query(1,$sql)->execute()->as_array();
        return $arr;
    }

} 