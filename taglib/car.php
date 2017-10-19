<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/26 0026
 * Time: 16:34
 */

class Taglib_Car {
    private static $typeid=3;
    private static $basefield ='a.id,
                                a.webid,
                                a.sellpoint,
                                a.aid,
                                a.kindlist,
                                a.title,
                                a.litpic,
                                a.shownum,
                                a.price,
                                a.satisfyscore,
                                a.bookcount,
                                a.attrid,
                                a.iconlist,
                                a.carkindid';
    /**
     * @description  租车类型
     */
    public static function kind($params)
    {
        $list=ORM::factory('car_kind')->get_all();
        foreach($list as &$v)
        {
            $v['seotitle'] = $v['title'];
            $v['title'] = $v['kindname'];
        }
        return $list;
    }

    /**
     * @description 租车列表
     */
    public static function query($params)
    {
        $default=array(
            'row'=>'4',
            'offset'=>0,
            'flag'=>'new',
            'kindid'=>0

        );
        $params=array_merge($default,$params);
        extract($params);

        $list=null;
        switch($flag)
        {
            case 'new':
                 $list=self::query_new($params);
                break;
            case 'recommend':
                $list=self::query_recommend($params);
                break;
            case 'order':
                $list=self::query_recommend($params);
                break;
            case 'relative':
                break;
            case 'theme':
                $list = self::get_car_by_themeid($row,$offset,$themeid);
                break;

        }
        foreach($list as $k=>&$v)
        {
            $v['litpic'] = Common::img($v['litpic']);
            $v['url'] = Common::get_web_url($v['webid']).'/cars/show_'.$v['aid'].'.html';
            //价格
            $v['price'] = Model_Car::get_car_suit_price($v['aid'], $v['webid'] , $v['id']);
          //  $v['price'] = Currency_Tool::price($v['price']);
            //车辆属性
            $v['attrlist']= Model_Car_attr::get_attr_list($v['attrid']);
            //车型
            $v['kindname'] = Model_Car_Kind::get_carkindname($v['carkindid']);
        }


        return $list;
    }

    /**
     * 获取租车套餐类型
     * @param $params
     * @return Array
     */

    public static function suit_type($params)
    {
        $default=array('row'=>'10','productid'=>0);
        $params=array_merge($default,$params);
        extract($params);
        $suit = ORM::factory('car_suit_type')
            ->where("carid=:productid")
            ->param(':productid',$productid)
            ->get_all();
        foreach($suit as &$r)
        {
            $r['title'] = $r['kindname'];
        }
        return $suit;

    }


    /**
     * 获取租车套餐
     * @param $params
     * @return Array
     */

    public static function suit($params)
    {
        $default=array(
            'row'=>'10',
            'productid'=>0,
            'suittypeid'=>0
        );

        $params=array_merge($default,$params);
        extract($params);
        $where = "WHERE carid=:productid";
        $where.= !empty($suittypeid) ? " AND suittypeid=:suittypeid" : '';
        $sql = "SELECT * FROM `sline_car_suit` $where";
        $suit = DB::query(1,$sql)->parameters(array(':productid'=>$productid,':suittypeid'=>$suittypeid))->execute()->as_array();

        foreach($suit as &$r)
        {
            $r['title'] = $r['suitname'];
            $r['price'] = Model_Car::get_minprice($r['carid'],$r['id']);//最低价
          //  $r['price'] = Currency_Tool::price($r['price']);
        }
        return $suit;

    }

    /**
     * @desc 最新排序
     * @param $params
     * @return mixed
     */
    public static function query_new($params)
    {
        extract($params);
        $w='where a.id IS NOT NULL';
        $orderBy="ORDER BY a.modtime DESC";
        $values=array();

        //属性参数
        if(!empty($attrid))
        {
            $values[':attrid']=$attrid;
            $w.=" and FIND_IN_SET(:attrid,a.attrid)";
        }
        //车型参数
        if(!empty($kindid))
        {
            $values[':carkindid']=$kindid;
            $w.=" and carkindid=:$kindid";
        }
        //判断目的地
        if(empty($destid))
        {
            $sql = "SELECT ".self::$basefield." FROM sline_car a LEFT JOIN sline_allorderlist b";
            $sql.=" ON(a.id=b.aid AND b.typeid=3) {$w} {$orderBy} limit {$offset},{$row}";
        }
        else
        {
            $w.=" AND FIND_IN_SET(:destid,kindlist)";
            $values[':destid']=$destid;
            $sql = "SELECT ".self::$basefield." FROM sline_car a LEFT JOIN sline_kindorderlist b";
            $sql.=" ON(a.id=b.aid AND b.typeid=3 AND b.classid=:destid) {$w} {$orderBy}  limit {$offset},{$row}";
        }

        $list=DB::query(Database::SELECT,$sql)->parameters($values)->execute()->as_array();


        return $list;
    }

    /**
     * @desc 按displayorder排序
     * @param $params
     */
    public static function query_recommend($params)
    {
        global $sys_webid;
        extract($params);
        $w="where a.id!=0 ";
        $orderBy="ORDER BY IFNULL(b.displayorder,9999) ASC";
        $values=array();

        //属性参数
        if(!empty($attrid))
        {
            $values[':attrid']=$attrid;
            $w.=" and FIND_IN_SET(:attrid,a.attrid)";
        }

        if(!empty($kindid))
        {
            $values[':carkindid']=$kindid;
            $w.=" and carkindid=:carkindid";
        }
        //判断目的地
        if(empty($destid))
        {
            $sql = "SELECT ".self::$basefield." FROM sline_car a LEFT JOIN sline_allorderlist b";
            $sql.=" ON(a.id=b.aid AND b.typeid=3) {$w} {$orderBy}  limit {$offset},{$row}";
        }
        else
        {
            $w.=" AND FIND_IN_SET(:destid,kindlist)";
            $values[':destid']=$destid;
            $sql = "SELECT ".self::$basefield." FROM sline_car a LEFT JOIN sline_kindorderlist b";
            $sql.=" ON(a.id=b.aid AND b.typeid=3 AND b.classid=:destid) {$w} {$orderBy}  limit {$offset},{$row}";
        }

        $list=DB::query(Database::SELECT,$sql)->parameters($values)->execute()->as_array();
        return $list;
    }

    /**
     * 获取租车类型
     * @param $params
     * @return array
     */
    public static function kind_list($params)
    {
        $default=array('row'=>'10');
        $params=array_merge($default,$params);
        extract($params);
        $arr = ORM::factory('car_kind')
            ->where("webid=0")
            ->limit($row)
            ->get_all();
        foreach($arr as &$row)
        {
            $row['seotitle'] = $row['title'];
            $row['title'] = $row['kindname'];
        }
        return $arr;
    }

    /**
     * 获取车辆属性
     * @param $params
     * @return array
     */
    public static function attr_list($params)
    {
        $default=array('row'=>'10');
        $params=array_merge($default,$params);
        extract($params);
        $arr = ORM::factory('car_attr')
            ->where("webid=0 AND isopen=1 AND pid>0")
            ->limit($row)
            ->get_all();
        foreach($arr as &$v)
        {
            $v['title'] = $v['attrname'];
        }
        return $arr;
    }

    public static function get_car_by_themeid($row,$offset,$themeid)
    {
        $sql = "SELECT ".self::$basefield." FROM sline_car a WHERE a.ishidden=0 AND FIND_IN_SET($themeid,a.themelist) ";
        $sql.= "ORDER BY a.addtime DESC LIMIT $offset,$row ";
        return DB::query(1,$sql)->execute()->as_array();

    }
}