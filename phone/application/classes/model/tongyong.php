<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Tongyong
{

    public static function detail($aid,$typeid)
    {
        $sql = "SELECT * FROM `sline_model_archive` WHERE aid={$aid} AND typeid=$typeid";
        $arr = DB::query(1, $sql)->execute()->as_array();
        $arr[0]['price'] = Currency_Tool::price($arr[0]['price']);
        return $arr[0];
    }

    /**
     * @param $aid
     * @param $typeid
     * @return mixed
     * 按id读取详情
     */
    public static function detail_id($id)
    {
        $sql = "SELECT * FROM `sline_model_archive` WHERE id=$id";
        $arr = DB::query(1, $sql)->execute()->as_array();
        $arr[0]['price'] = Currency_Tool::price($arr[0]['price']);
        return $arr[0];
    }

    /**
     * @param $productid
     * @param $typeid
     * @return mixed
     * @desc 获取扩展字段
     */
    public static function extend($productid,$typeid)
    {
        $pinyin = ORM::factory('model',$typeid)->get('pinyin');
        $sql = "SELECT * FROM sline_".$pinyin."_extend_field ";
        $sql .= "WHERE productid={$productid}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;

    }

    /**
     * @param $suitid
     * @return array
     * 获取套餐信息
     */
    public static function suit_info($suitid)
    {
        $suitInfo = ORM::factory('model_suit',$suitid)->as_array();
        $suitInfo['sellprice'] = Currency_Tool::price($suitInfo['sellprice']);
        $suitInfo['ourprice'] = Currency_Tool::price($suitInfo['ourprice']);
        return $suitInfo;
    }

    /*
    * 获取最低价
    * */
    public static function get_minprice($productid,$suitid='')
    {
        $where = !empty($suitid) ? " AND id=$suitid" : '';
        $sql = "SELECT MIN(ourprice) AS price FROM `sline_model_suit` WHERE productid='$productid' {$where}";
        $row = DB::query(1,$sql)->execute()->current();
        $row['price'] = Currency_Tool::price($row['price']);
        return $row['price'] ? $row['price'] : 0;
    }

    /*
   * 获取最低价
   * */
    public static function get_min_sellprice($productid,$suitid='')
    {
        $where = !empty($suitid) ? " AND id=$suitid" : '';
        $sql = "SELECT MIN(sellprice) AS price FROM `sline_model_suit` WHERE productid='$productid' {$where}";
        $row = DB::query(1,$sql)->execute()->current();
        $row['price'] = Currency_Tool::price($row['price']);
        return $row['price'] ? $row['price'] : 0;
    }

    /**
     * 产品属性
     * @param $attrid
     * @return array
     */
    public static function product_attr($attrid,$typeid)
    {
        if (empty($attrid))
        {
            return;
        }
        $arr = DB::select('attrname')->from('model_attr')->where("id in({$attrid}) and pid!=0 and typeid=$typeid")->execute()->as_array();
        return $arr;
    }


    /*
     * 获取目的地优化标题
     * */
    public static function search_seo($destpy,$typeid)
    {
       if(!empty($destpy) && $destpy!='all')
       {
           $destId = ORM::factory('destinations')->where("pinyin='$destpy' AND isopen=1")->find()->get('id');
           $info = ORM::factory('destinations',$destId)->as_array();
           $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['kindname'];
       }
       else
       {
           $info = Model_Nav::get_channel_info($typeid);
           $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['shortname'];
       }

       return array('seotitle'=>$seotitle);
    }
    //------------------------以下是搜索页新增加使用函数-----------------

    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $destPy = Common::remove_xss($params['destpy']);
        $sortType = Common::remove_xss($params['sorttype']);
        $attrId = Common::remove_xss($params['attrid']);
        $page = $currentpage;
        $page = $page ? $page : 1;
        $typeid = $params['typeid'];

        $where = ' WHERE a.ishidden=0 and a.typeid='.$typeid. ' ';
        //按目的地搜索
        if($destPy && $destPy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
            $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
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
                $orderBy = " a.shownum DESC,";
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
            $sql = "SELECT a.* FROM `sline_model_archive` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=$typeid AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_model_archive` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=$typeid AND a.webid=b.webid)";
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

        $model_info = ORM::factory('model',$typeid);
        foreach($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],$typeid); //评论次数
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],$typeid); //销售数量
            $v['score'] = $v['satisfyscore'].'%';
            $v['price'] = Model_Tongyong::get_minprice($v['id']);//最低价
            $v['attrlist'] = Model_Model_Attr::get_attr_list($v['attrid'],$typeid);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/{$model_info->pinyin}/show_{$v['aid']}.html";
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
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
        $model_info = ORM::factory('model',$p['typeid']);
        $url = $GLOBALS['cfg_basehost'].'/'.$model_info->pinyin.'/';
        switch($paramname)
        {
            case "destpy":
                $url.=$v.'-'.$p['sorttype'].'-'.$p['attrid'].'-'.$currentpage;
                break;

            case "sorttype":
                $url.=$p['destpy'].'-'.$v.'-'.$p['attrid'].'-'.$currentpage;
                break;
            case "attrid":

                $orignalArr = Product::get_attr_parent($p['attrid'],$p['typeid']);
                $nowArr = Product::get_attr_parent($v,$p['typeid']);
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
                $url.=$p['destpy'].'-'.$p['sorttype'].'-'.$attr_list.'-'.$currentpage;
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
        $model_info = ORM::factory('model',$p['typeid']);
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
                $temp['itemname'] = ORM::factory('model_attr',$ar)->get('attrname');
                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($attrid))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }
                $url = $GLOBALS['cfg_basehost'].'/'.$model_info->pinyin.'/';
                $url.=$p['destpy'].'-'.$p['sorttype'].'-'.$attrid.'-1';
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
            $arr[] = Model_Model_Attr::get_attrname_list($param['attrid'],'_',$param['typeid']);

        }
        return implode('_',$arr);


    }
}