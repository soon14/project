<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Class Model_Visa 签证模块
 */
class Model_Visa extends ORM
{
    /**
     * 签证
     * @param $kind 目的地
     * @param $city 签发城市
     * @param $p 分页
     * @return mixed
     */
    public static function parse_url($kind, $city, $p)
    {
        $filed = 'a.id,a.aid,a.title,a.handleday,a.price,a.litpic,a.cityid';
        $where = "a.webid=0 AND a.ishidden=0 And  b.pinyin='{$kind}'";
        if (!empty($city))
        {
            $where .= " And a.cityid={$city}";
        }
        $offset = ($p - 1) * 10;
        $sql = "SELECT {$filed} FROM sline_visa AS a LEFT JOIN sline_visa_area AS b ON a.nationid=b.id ";
        $sql .= "WHERE {$where} ";
        $sql .= "ORDER BY a.id DESC ";
        $sql .= "LIMIT {$offset},10";
        $arr = DB::query(1, $sql)->execute()->as_array();

        foreach($arr as &$v)
        {
            $v['price'] = Currency_Tool::price($v['price']);
        }
        return $arr;
    }

    /**
     * 签发目的地
     * @param $pinyin
     * @param string $filed
     * @return mixed
     */
    public static function vias_area($pinyin, $filed = 'pinyin')
    {
        $sql = "SELECT * FROM sline_visa_area WHERE webid=0 AND isopen=1 AND {$filed}='{$pinyin}' LIMIT 1";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }

    public static function vias_area_by_id($pid,$pagesize=60)
    {
        $sql = "SELECT * FROM sline_visa_area WHERE isopen=1 AND pid='{$pid}' LIMIT 0,$pagesize";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 签发城市
     * @return mixed
     */
    public static function visa_city()
    {
        $sql = "SELECT * FROM sline_visa_city where isopen=1";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 根据id获取签发城市
     * @param $cityid
     */
    public static function visa_city_by_id($cityid)
    {
        if (empty($cityid))
        {
            return;
        }
        $sql = "SELECT kindname FROM sline_visa_city WHERE isopen=1 AND id={$cityid}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }

    /**
     * 签证详情 BY aid
     * @param $aid
     * @return mixed
     */
    public static function visa_detail($aid)
    {
        $sql = "SELECT * FROM sline_visa WHERE webid={$GLOBALS['sys_webid']} AND ishidden=0 AND aid={$aid}";
        $arr = DB::query(1, $sql)->execute()->as_array();

        $arr[0]['price'] = Currency_Tool::price($arr[0]['price']);
        $arr[0]['marketprice'] = Currency_Tool::price($arr[0]['marketprice']);

        return $arr[0];
    }

    /**
     * 签证详情 BY id
     * @param $id
     * @return mixed
     */
    public static function visa_detail_id($id)
    {
        $sql = "SELECT * FROM sline_visa WHERE webid={$GLOBALS['sys_webid']} AND ishidden=0 AND id={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        $arr[0]['price'] = Currency_Tool::price($arr[0]['price']);
        $arr[0]['marketprice'] = Currency_Tool::price($arr[0]['marketprice']);
        $arr[0]['dingjin'] = Currency_Tool::price($arr[0]['dingjin']);
        return $arr[0];
    }

    /**
     * 签证扩展字段
     * @param $id
     * @return mixed
     */
    public static function visa_extend($id)
    {
        $sql = "SELECT * FROM sline_visa_extend_field WHERE productid={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
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
        $arr = DB::select('attrname')->from('visa_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
        return $arr;
    }



    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $countryPy = Common::remove_xss($params['countrypy']);
        $cityId = Common::remove_xss($params['cityid']);
        $sortType = Common::remove_xss($params['sorttype']);
        $visaTypeid = Common::remove_xss($params['visatypeid']);
        $page = $currentpage;
        $page = $page ? $page : 1;
        $where = ' WHERE a.ishidden=0 ';

        //签证城市条件
        if(!empty($cityId))
        {
            $where.=" AND cityid='$cityId'";
        }
        //签证类型
        if(!empty($visaTypeid))
        {
            $where.=" AND visatype='$visaTypeid'";
        }
        //按国家
        if(!empty($countryPy))
        {
            $nationid = ORM::factory('visa_area')->where("pinyin='$countryPy'")->find()->get('id');
            $where.=" AND nationid='$nationid'";
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
                $orderBy = " a.bookcount DESC,";
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
        $offset = (intval($page)-1)*$pagesize;

        $sql ="SELECT a.* FROM `sline_visa` a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid AND b.typeid=8 AND a.webid=b.webid) ";
        $sql.="{$where} ";
        $sql.="ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy} a.modtime DESC,a.addtime DESC ";

        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->as_array();
        $totalNum = $totalN[0]['dd'] ? $totalN[0]['dd'] : 0;

        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],8)+intval($v['bookcount']); //销售数量
            $v['url'] = Common::get_web_url($v['webid']) . "/visa/show_{$v['aid']}.html";
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
            $v['visatype'] = ORM::factory('visa_kind',$v['visatype'])->get('kindname');
            $v['price'] = Currency_Tool::price($v['price']);
            $v['marketprice'] = Currency_Tool::price($v['marketprice']);
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

        $url = $GLOBALS['cfg_basehost'].'/visa/';
        switch($paramname)
        {

            case "cityid":
                $url.=$p['countrypy'].'-'.$v.'-'.$p['sorttype'].'-';
                $url.=$p['visatypeid'].'-'.$currentpage;
                break;
            case "sorttype":
                $url.=$p['countrypy'].'-'.$p['cityid'].'-'.$v.'-';
                $url.=$p['visatypeid'].'-'.$currentpage;
                break;
            case "visatypeid":
                $url.=$p['countrypy'].'-'.$p['cityid'].'-'.$p['sorttype'].'-';
                $url.=$v.'-'.$currentpage;
                break;
        }
        return $url;


    }
    /**
     * @param $param
     * @return string
     * @desc 生成优化标题
     */
    public static function gen_seotitle($param)
    {
        $arr = array();
        if(!empty($param['countrypy']))
        {
            $countryInfo = self::vias_area($param['countrypy']);
            $arr[] = $countryInfo['seotitle'] ? $countryInfo['seotitle'] : $countryInfo['kindname'];
        }
        if(!empty($param['cityid']))
        {
            $arr[] = ORM::factory('visa_city',$param['cityid'])->get('kindname')."办理";

        }
        if(!empty($param['visatypeid']))
        {
            $arr[] = ORM::factory('visa_kind',$param['visatypeid'])->get('kindname');

        }
        return implode('_',$arr);


    }
}