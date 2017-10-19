<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Car extends ORM
{

    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($uriArr, $pagesize='10')
    {
        $where = ' WHERE a.ishidden=0 ';
        //按目的地搜索
        if($uriArr['destPy'] && $uriArr['destPy']!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='{$uriArr['destPy']}'")->find()->get('id');
            $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
        }
        //车型
        if($uriArr['kindid'])
        {
            $where.= " AND a.carkindid='{$uriArr['kindid']}'";
        }
        //排序
        $orderBy = "";
        if(!empty($uriArr['sorttype']))
        {
            if($uriArr['sorttype']==1)//价格从低到高
            {
                $orderBy = "  a.price ASC,";
            }
            else if($uriArr['sorttype']==2) //价格从高到低
            {
                $orderBy = "  a.price DESC,";
            }
            else if($uriArr['sorttype']==3) //人气最高
            {
                $orderBy = " a.shownum DESC,";
            }
            else if($uriArr['sorttype']==4)//销量最高
            {
                $orderBy = " a.bookcount DESC,";
            }
        }

        //关键词
        if(!empty($uriArr['keyword']))
        {
            $where.= " AND a.title like '%{$uriArr['keyword']}%' ";
        }
        //按属性
        if(!empty($uriArr['attrId']))
        {
            $where.= Product::get_attr_where($uriArr['attrId']);
        }
        $offset = (intval($uriArr['page'])-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_car` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY {$orderBy}IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
            $sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_car` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY {$orderBy}IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
            $sql.= "LIMIT {$offset},{$pagesize}";


        }
        $data = DB::query(1,$sql)->execute()->as_array();
        foreach($data as &$v)
        {
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],2)+intval($v['bookcount']); //销售数量
            $v['sellprice'] = Model_Hotel::get_sellprice($v['id']);//挂牌价
            $v['price'] = Model_Hotel::get_minprice($v['id']);//最低价
            $v['attrlist'] = Model_Hotel_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/cars/show_{$v['aid']}.html";
            $v['litpic'] = Common::img($v['litpic'],185,120);
            $v['url'] = Common::get_web_url($v['webid']).'/cars/show_'.$v['aid'].'.html';
            //价格
            $v['price'] = Model_Car::get_car_suit_price($v['aid'], $v['webid'] , $v['id']);
            //车辆属性
            $v['attrlist']= Model_Car_attr::get_attr_list($v['attrid']);
            //车型
            $v['kindname'] = Model_Car_Kind::get_carkindname($v['carkindid']);
        }

        return Product::list_search_format($data, $uriArr['page']);
    }

    /*
     * 获取目的地优化标题
     * */
    public static function search_seo($destpy)
    {
        if(!empty($destpy) && $destpy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destpy' AND isopen=1")->find()->get('id');
            $info = ORM::factory('destinations',$destId)->as_array();
            $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['kindname'];
        }
        else
        {
            $info = Model_Nav::get_channel_info(3);
            $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['m_title'];
        }

        return array('seotitle'=>$seotitle);
    }

    /**
     * 结伴排序
     * @param $offset
     * @param $row
     * @return mixed
     */
    public static function get_car_list($whereStr='',$offset, $row)
    {
        $sql = "SELECT a.id,a.webid,a.sellpoint,a.aid,a.kindlist,a.title,a.litpic,a.shownum,a.price,a.satisfyscore,a.bookcount,a.attrid,a.iconlist,a.carkindid";
        $sql .= " FROM `sline_car` AS a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid and b.typeid=3)";
        $sql .= " WHERE a.id>0 ".$whereStr;
        $sql .= " ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC";
        $sql .= " LIMIT {$offset},{$row}";
        $arr = DB::query(1,$sql)->execute()->as_array();

        foreach ($arr as &$v)
        {
            //如果没有图片
            if(empty($v['litpic']))
            {
                $v['litpic'] = Common::nopic();
            }
            $v['url'] = Common::get_web_url($v['webid']).'/cars/show_'.$v['aid'].'.html';
            //价格
            $v['price']= Model_Car::get_car_suit_price($v['aid'], $v['webid'] , $v['id']);
            //车辆属性
            //车辆属性
            $v['attrlist'] = Model_Car_attr::get_attr_list($v['attrid']);
            //车型
            $v['kindname'] = Model_Car_Kind::get_carkindname($v['carkindid']);

        }
        return $arr;
    }
    /**
     * 获取车子新版最低报价
     * @param $aid
     * @param $webid
     * @param int $carid
     * @param int $suitid
     * @return int
     */
    public static function get_car_suit_price($aid,$webid,$carid=0,$suitid=0)
    {
        if(empty($carid))
        {
            $sql = "SELECT * FROM sline_car WHERE aid={$aid} AND webid={$webid}";
            $dataArr = NULL;
            $dataArr = DB::query(1, $sql)->execute()->as_array();
            $carid = $dataArr[0]['id'];
        }
        $w = $suitid ? " AND suitid ='{$suitid}' " : ''; //是否按套餐读取
        $time = time();
        if($suitid) //如果指定了套餐id
        {
            $sql = "SELECT MIN(adultprice) AS price FROM sline_car_suit_price WHERE carid='{$carid}' AND day > '{$time}' {$w} LIMIT 60";
        }
        else
        {
            $suitidlist = implode(',',self::get_car_suitId_list($carid));
            $w =empty($suitidlist)?'':" AND suitid IN ($suitidlist)";
            $sql = "SELECT MIN(adultprice) AS price FROM sline_car_suit_price WHERE carid='{$carid}' AND day > '{$time}' {$w} LIMIT 60";
        }

        $dataArr = NULL;
        $dataArr = DB::query(1, $sql)->execute()->as_array();

        return $dataArr[0]['price'] ? Currency_Tool::price($dataArr[0]['price']) : 0;
    }

    /**
     * 获取车子套餐id列表
     * @param $carid
     * @return array
     */
    function get_car_suitId_list($carid)
    {
        $sql = "SELECT * FROM sline_car_suit WHERE carid={$carid}";
        $data = NULL;
        $dataArr = DB::query(1, $sql)->execute()->as_array();
        foreach($dataArr as $row)
        {
            array_push($out,$row['id']);
        }
        return $out;
    }
    /*
     *获取套餐日期范围内价格总和.
     * */
    public static function suit_range_price($suitid,$sdate,$edate,$dingnum)
    {
        $sdate = strtotime($sdate);
        $edate = strtotime($edate);
        $sql = "SELECT adultprice FROM`sline_car_suit_price` ";
        $sql.= "WHERE suitid='$suitid' AND day>=$sdate AND day<=$edate";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $price = 0;
        foreach($ar as $row)
        {
            $price+=Currency_Tool::price($row['adultprice'])*$dingnum;
        }
        return $price;
    }

    /**
     * @param $suitid
     * @return mixed
     * 获取套餐最小可预订日期
     */

    public static function suit_mindate_book($suitid)
    {
        $time = time();
        $sql = "SELECT day FROM`sline_car_suit_price` ";
        $sql.= "WHERE suitid='$suitid' AND day>=$time AND price>0 AND number!=0 LIMIT 1";
        $ar = DB::query(1,$sql)->execute()->as_array();
        return $ar[0]['day'];
    }

	 /**
     * @param $id
     * @param int $sutid
     * @return mixed
     * @desc 获取产品最低价格
     */
    public static function get_minprice($carid,$suitid=0)
    {
        $where = !empty($suitid) ? " AND suitid=$suitid" : '';
        $sql = "SELECT MIN(adultprice) AS price FROM `sline_car_suit_price` WHERE carid='$carid' AND adultprice!=0 AND day>=UNIX_TIMESTAMP() {$where}";
        $row = DB::query(1,$sql)->execute()->as_array();
        $row[0]['price']=Currency_Tool::price($row[0]['price']);
        return $row[0]['price'];

    }
}