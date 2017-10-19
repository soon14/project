<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Class Model_Tuan 团购模块
 */
class Model_Tuan extends ORM
{
    /**
     * 团购列表
     * @param $filed
     * @param $offset
     * @param $row
     * @return mixed
     */
    public static function tuan_list($filed, $offset, $row)
    {
        $sql = "SELECT {$filed} FROM sline_tuan a ";
        $sql .= 'WHERE a.endtime >unix_timestamp(now()) AND a.webid=0 AND a.ishidden=0 ';
        $sql .= 'ORDER BY a.modtime DESC ';
        $sql .= "LIMIT {$offset},{$row}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 团购详情 BY aid
     * @param $aid
     * @return mixed
     */
    public static function tuan_detail($aid)
    {
        $sql = "SELECT * FROM sline_tuan ";
        $sql .= "WHERE webid={$GLOBALS['sys_webid']} AND ishidden=0 AND aid={$aid} ";
        $sql .= "limit 1";
        $arr = DB::query(1, $sql)->execute()->as_array();
        $arr[0]['price'] = Currency_Tool::price($arr[0]['price']);
        $arr[0]['sellprice'] = Currency_Tool::price($arr[0]['sellprice']);
        return $arr[0];
    }

    /**
     * 团购详情 BY id
     * @param $id
     * @return mixed
     */
    public static function tuan_detail_id($id)
    {
        $sql = "SELECT * FROM sline_tuan ";
        $sql .= "WHERE webid={$GLOBALS['sys_webid']} AND ishidden=0 AND id={$id} ";
        $sql .= "limit 1";
        $arr = DB::query(1, $sql)->execute()->as_array();
        $arr[0]['price'] = Currency_Tool::price($arr[0]['price']);
        $arr[0]['sellprice'] = Currency_Tool::price($arr[0]['sellprice']);
        $arr[0]['dingjin'] = Currency_Tool::price($arr[0]['sellprice']);
        return $arr[0];
    }

    /**
     * 团购扩展字段
     * @param $id
     * @return mixed
     */
    public static function tuan_extend($id)
    {
        $sql = "SELECT * FROM sline_tuan_extend_field ";
        $sql .= "WHERE productid={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 按目的地读取团购
     * @param $mdd
     * @return mixed
     */
    public static function tuan_by_mdd($destid,$offset,$row=6)
    {
        $time = strtotime(date('Y-m-d',time()));
        $sql = "SELECT a.* FROM `sline_tuan` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid and b.classid=$destid) ";
        $sql.= "WHERE a.ishidden=0 AND FIND_IN_SET($destid,a.kindlist) AND a.starttime<$time AND endtime >unix_timestamp(now()) ";
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC,a.modtime DESC ";
        $sql.= "LIMIT $offset,$row";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach ($arr as &$v)
        {
            $v['url'] = Common::get_web_url($v['webid']) . "/tuan/show_{$v['aid']}.html";
            $v['discount'] = $v['price'] == $v['sellprice'] ? '不打折' : round($v['price'] / $v['sellprice'], 2) * 10;
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'], 13) + intval($v['bookcount']);
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
            $v['price'] = Currency_Tool::price($v['price']);
            $v['sellprice'] = Currency_Tool::price($v['sellprice']);
        }
        return $arr;
    }

    /**
     * 团购属性
     * @param $attrid
     * @return array
     */
    public static function attr($attrid)
    {
        if (empty($attrid))
        {
            return;
        }
        $attrid = trim($attrid,',');
        $arr = DB::select('attrname')->from('tuan_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
        return $arr;
    }


    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $destPy = Common::remove_xss($params['destpy']);
        $status = Common::remove_xss($params['status']);
        $sortType = Common::remove_xss($params['sorttype']);
        $attrId = Common::remove_xss($params['attrid']);
        $page = $currentpage;
        $page = $page ? $page : 1;
        $where = ' WHERE a.ishidden=0 ';
        //按目的地搜索
        if($destPy && $destPy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
            $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
        }
        //团购状态
        $time = time();
        if(empty($status))
        {
            //已开始
            $where.=" AND a.endtime !='' AND a.starttime<$time ";
        }
        else
        {
            //未开始
            $where.=" AND a.endtime>$time AND a.endtime !='' AND a.starttime>=$time ";
        }
        //排序
        $orderBy = "";
        if(!empty($sortType))
        {
            if($sortType==1)//价格升序
            {
                $orderBy = "  a.price DESC,";
            }
            else if($sortType==2) //价格降序
            {
                $orderBy = "  a.price ASC,";
            }
            else if($sortType==3) //销量降序
            {
                $orderBy = " a.virtualnum DESC,";
            }
            else if($sortType==4)//推荐
            {
                $orderBy = " a.shownum DESC,";
            }
        }

        //关键词
        if(!empty($keyword))
        {
            $where.= " AND a.title like '%$keyword%' ";
        }
        //按属性
        if(!empty($attrId))
        {
            $where.= Product::get_attr_where($attrId);
        }

        $offset = (intval($page)-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_tuan` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=13 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_tuan` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=13 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";


        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->as_array();
        $totalNum = $totalN[0]['dd'] ? $totalN[0]['dd'] : 0;

        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],3)+intval($v['virtualnum']); //销售数量
            $v['attrlist'] = Model_Tuan_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/tuan/show_{$v['aid']}.html";
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
            $v['price'] = Currency_Tool::price($v['price']);
            $v['sellprice'] = Currency_Tool::price($v['sellprice']);
            $v['discount'] =  $v['price'] == $v['sellprice'] ? '不打折' : round($v['price'] / $v['sellprice'], 2) * 10;

        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr

        );
        return $out;

    }

    /*
    * 生成searh页地址
    * */
    public static function get_search_url($v,$paramname,$p,$currentpage=1)
    {

        $url = $GLOBALS['cfg_basehost'].'/tuan/';
        switch($paramname)
        {
            case "destpy":
                $url.=$v.'-'.$p['status'].'-'.$p['sorttype'].'-';
                $url.=$p['attrid'].'-'.$currentpage;
                break;

            case "status":
                $url.=$p['destpy'].'-'.$v.'-'.$p['sorttype'].'-';
                $url.=$p['attrid'].'-'.$currentpage;
                break;
            case "sorttype":
                $url.=$p['destpy'].'-'.$p['status'].'-'.$v.'-';
                $url.=$p['attrid'].'-'.$currentpage;
                break;


            case "attrid":

                $orignalArr = Product::get_attr_parent($p['attrid'],13);
                $nowArr = Product::get_attr_parent($v,13);
                if(!empty($nowArr))
                {
                    $attrArr = $nowArr + $orignalArr;
                    sort($attrArr);
                    $attr_list = join('_',$attrArr);
                }
                else
                {
                    $attr_list = 0;
                }
                $url.=$p['destpy'].'-'.$p['status'].'-'.$p['sorttype'].'-';
                $url.=$attr_list.'-'.$currentpage;
                break;

        }
        return $url;


    }

    /**
     * @param $p
     * @return array
     * @desc 已选择项处理
     */
    public static function get_selected_item($p)
    {
        $out = array();
        //目的地
        if($p['destpy']!='all')
        {
            $temp = array();
            $url = self::get_search_url('all','destpy',$p);
            $temp['url'] = $url;
            $temp['itemname'] = ORM::factory('destinations')->where("pinyin='".$p['destpy']."'")->find()->get('kindname');
            $out[]=$temp;
        }

        //属性
        if($p['attrid']!=0)
        {
            $attArr = $orgArr = explode('_',$p['attrid']);
            foreach($attArr as $ar)
            {

                $orgArr = $attArr;
                $temp = array();
                $temp['itemname'] = ORM::factory('tuan_attr',$ar)->get('attrname');
                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($attrid))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }

                $url = $GLOBALS['cfg_basehost'].'/tuan/';
                $url.=$p['destpy'].'-'.$p['status'].'-'.$p['sorttype'].'-'.$attrid.'-1';
                $temp['url'] = $url;
                $out[] = $temp;
            }

        }
        return $out;

    }



    /**
     * @param $param
     * @return string
     * @desc 生成优化标题
     */
    public static function gen_seotitle($param)
    {
        $arr = array();
        if(!empty($param['destpy']))
        {
            $destInfo = Model_Destinations::search_seo($param['destpy'],1);
            $arr[] = $destInfo['seotitle'];
        }
        if(!empty($param['attrid']))
        {
            $arr[] = Model_Tuan_Attr::get_attrname_list($param['attrid'],'_');

        }
        return implode('_',$arr);


    }



}