<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Restaurant extends ORM
{

    public static function detail($aid)
    {
        $sql = "SELECT * FROM `sline_restaurant` WHERE aid={$aid} and webid={$GLOBALS['sys_webid']}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }

    //取得酒店的挂牌价格
    public static function get_sellprice($hotelid)
    {
        $sql="SELECT MIN(price) AS minprice,sellprice FROM `sline_restaurant_room` WHERE hotelid='{$hotelid}'";
        $row = DB::query(1,$sql)->execute()->as_array();
        $row[0]['sellprice'] = Currency_Tool::price($row[0]['sellprice']);
        return $row[0]['sellprice'];
    }
    /*
    * 获取酒店最低价
    * */
    public static function get_minprice($hotelid,$roomid='')
    {
        $where = !empty($roomid) ? " AND suitid=$roomid" : '';
        $sql = "SELECT MIN(price) AS price FROM `sline_restaurant_room_price` WHERE hotelid='$hotelid' AND price!=0 AND day>=UNIX_TIMESTAMP() {$where}";
        $row = DB::query(1,$sql)->execute()->as_array();
        $row[0]['price'] = Currency_Tool::price($row[0]['price']);
        return $row[0]['price'];
    }

    /**
     * 酒店属性
     * @param $attrid
     * @return array
     */
    public static function hotel_attr($attrid)
    {
        if (empty($attrid))
        {
            return;
        }
        $attrid = trim($attrid,',');
        $arr = DB::select('attrname')->from('restaurant_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
        return $arr;
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
           $info = Model_Nav::get_channel_info(2);
           $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['m_title'];
       }

       return array('seotitle'=>$seotitle);
    }

    /*
     *获取套餐日期范围内价格总和.
     * */
    public static function suit_range_price($suitid,$sdate,$edate,$dingnum)
    {
        $startdate = $sdate;
        $sdate = strtotime($sdate);
        $flag = is_null($edate);
        $edate = !$flag ? strtotime($edate) : strtotime("$startdate +1 day");;


        $sql = "SELECT price FROM`sline_restaurant_room_price` ";
        $sql.= "WHERE suitid='$suitid' AND day>=$sdate AND day<$edate";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $price = 0;
        foreach($ar as $row)
        {
            $row['price'] = Currency_Tool::price($row['price']);
            $price+=$row['price'];
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
        $time = strtotime(date('Y-m-d'));
        $sql = "SELECT day FROM`sline_restaurant_room_price` ";
        $sql.= "WHERE suitid='$suitid' AND day>=$time AND price>0 AND number!=0 LIMIT 1";
        $ar = DB::query(1,$sql)->execute()->as_array();
        return $ar[0]['day'];
    }


    /**
     * @param $suitid
     * @param $sdate
     * @param $edate
     * @param $dingnum
     * @return bool
     *
     */
    public static function check_suit_storage($suitid,$sdate,$edate,$dingnum)
    {
        $sdate = strtotime($sdate);
        $edate = strtotime($edate);
        $sql = "SELECT number FROM`sline_restaurant_room_price` ";
        $sql.= "WHERE suitid='$suitid' AND day>=$sdate AND day<$edate";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $flag = 1;
        foreach($ar as $row)
        {
           if($row['number']!='-1' && $row['number']<$dingnum)
           {
               $flag = 0;
               break;
           }
        }
        return $flag;
    }


    //------------------------以下是搜索页新增加使用函数-----------------

    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $destPy = Common::remove_xss($params['destpy']);
        $rankId = Common::remove_xss($params['rankid']);
        $priceId = Common::remove_xss($params['priceid']);
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
        //星级
        if($rankId)
        {
            $where.= " AND a.hotelrankid='$rankId'";
        }
        //价格区间
        if($priceId)
        {
            $priceArr = ORM::factory('restaurant_pricelist',$priceId)->as_array();
            $where.= " AND a.price BETWEEN {$priceArr['min']} AND {$priceArr['max']} ";
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
        //按属性
        if(!empty($attrId))
        {
            $where.= Product::get_attr_where($attrId);
        }

        $offset = (intval($page)-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_restaurant` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_restaurant` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid)";
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
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],2); //评论次数
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],2)+intval($v['bookcount']); //销售数量
            $v['sellprice'] = Model_Restaurant::get_sellprice($v['id']);//挂牌价
            $v['price'] = Model_Restaurant::get_minprice($v['id']);//最低价
            $v['attrlist'] = Model_Restaurant_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/restaurant/show_{$v['aid']}.html";
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
            //$v['litpic'] = Common::img($v['litpic']);
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

        $url = $GLOBALS['cfg_basehost'].'/hotels/';
        switch($paramname)
        {
            case "destpy":
                $url.=$v.'-'.$p['rankid'].'-'.$p['priceid'].'-'.$p['sorttype'].'-';
                $url.=$p['displaytype'].'-'.$p['attrid'].'-'.$currentpage;
                break;
            case "rankid":
                $url.=$p['destpy'].'-'.$v.'-'.$p['priceid'].'-'.$p['sorttype'].'-';
                $url.=$p['displaytype'].'-'.$p['attrid'].'-'.$currentpage;
                break;
            case "priceid":
                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$v.'-'.$p['sorttype'].'-';
                $url.=$p['displaytype'].'-'.$p['attrid'].'-'.$currentpage;
                break;
            case "sorttype":
                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$v.'-';
                $url.=$p['displaytype'].'-'.$p['attrid'].'-'.$currentpage;
                break;
            case "displaytype":
                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$p['sorttype'].'-';
                $url.=$v.'-'.$p['attrid'].'-'.$currentpage;
                break;

            case "attrid":

                $orignalArr = Product::get_attr_parent($p['attrid'],2);
                $nowArr = Product::get_attr_parent($v,2);
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
                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$p['sorttype'].'-';
                $url.=$p['displaytype'].'-'.$attr_list.'-'.$currentpage;
                break;

        }
        return $url;


    }

    /*
   * 目的地 生成searh页地址
   * */
    public static function get_search_mddurl($mdd,$param,$v,$paramname,$p,$currentpage=1)
    {

        $url = $GLOBALS['cfg_basehost'].'/'.$mdd.'/?param='.$param;
        switch($paramname)
        {
            case "rankid":
//                $url.=$p['destpy'].'-'.$v.'-'.$p['priceid'].'-'.$p['sorttype'].'-';
//                $url.=$p['displaytype'].'-'.$p['attrid'].'-'.$currentpage;
                $url .="&destpy=".$p['destpy']."&rankid=".$v."&priceid=".$p['priceid']."&sorttype=".$p['sorttype'];
                $url .= "&displaytype=".$p['displaytype']."&attrid=".$p['attrid']."&p=".$currentpage;
                break;
            case "priceid":

//                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$v.'-'.$p['sorttype'].'-';
//                $url.=$p['displaytype'].'-'.$p['attrid'].'-'.$currentpage;

                $url .="&destpy=".$p['destpy']."&rankid=".$p['rankid']."&priceid=".$v."&sorttype=".$p['sorttype'];
                $url .= "&displaytype=".$p['displaytype']."&attrid=".$p['attrid']."&p=".$currentpage;

                break;
            case "sorttype":
//                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$v.'-';
//                $url.=$p['displaytype'].'-'.$p['attrid'].'-'.$currentpage;

                $url .="&destpy=".$p['destpy']."&rankid=".$p['rankid']."&priceid=".$p['priceid']."&sorttype=".$v;
                $url .= "&displaytype=".$p['displaytype']."&attrid=".$p['attrid']."&p=".$currentpage;
                break;
            case "displaytype":
//                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$p['sorttype'].'-';
//                $url.=$v.'-'.$p['attrid'].'-'.$currentpage;

                $url .="&destpy=".$p['destpy']."&rankid=".$p['rankid']."&priceid=".$p['priceid']."&sorttype=".$v;
                $url .= "&displaytype=".$v."&attrid=".$p['attrid']."&p=".$currentpage;
                break;

            case "attrid":

                $orignalArr = Product::get_attr_parent($p['attrid'],103);
                $nowArr = Product::get_attr_parent($v,103);
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
//                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$p['sorttype'].'-';
//                $url.=$p['displaytype'].'-'.$attr_list.'-'.$currentpage;

               $url .="&destpy=".$p['destpy']."&rankid=".$p['rankid']."&priceid=".$p['priceid']."&sorttype=".$p['sorttype'];
               $url .= "&displaytype=".$p['displaytype']."&attrid=".$attr_list."&p=".$currentpage;
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
        $p['displaytype'] = 0;
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
        //星级
        if($p['rankid']!=0)
        {
            $temp = array();
            $url = self::get_search_url('0','rankid',$p);
            $temp['url'] = $url;
            $temp['itemname'] = ORM::factory('restaurant_rank', $p['rankid'])->get('hotelrank');
            $out[] = $temp;

        }
        //价格
        if($p['priceid']!=0)
        {
            $temp = array();
            $url = self::get_search_url('0','priceid',$p);
            $temp['url'] = $url;
            $ar = ORM::factory('restaurant_pricelist',$p['priceid'])->as_array();
            $lowerprice = $ar['min'];
            $highprice = $ar['max'];
            $temp['itemname'] = self::get_price_list_title($lowerprice,$highprice);
            $out[] = $temp;

        }

        //属性
        if($p['attrid']!=0)
        {
            $attArr = $orgArr = explode('_',$p['attrid']);
            foreach($attArr as $ar)
            {

                $orgArr = $attArr;
                $temp = array();
                $temp['itemname'] = ORM::factory('restaurant_attr',$ar)->get('attrname');
                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($attrid))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }

                $url = $GLOBALS['cfg_basehost'].'/hotels/';
                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$p['sorttype'].'-';
                $url.=$p['displaytype'].'-'.$attrid.'-1';

                $temp['url'] = $url;
                $out[] = $temp;
            }

        }
        return $out;

    }

    /**
     * @param $p
     * @return array
     * @desc 已选择项处理   目的地城市
     */
    public static function get_selected_mdditem($p)
    {
        $p['displaytype'] = 0;
        $out = array();
        //目的地
        if($p['destpy']!='all')
        {
            $temp = array();

            $url = self::get_search_mddurl($p['destpy'],'restaurant','all','destpy',$p);

            $temp['url'] = $url;
            $temp['attr'] = '目的地';
            $temp['itemname'] = ORM::factory('destinations')->where("pinyin='".$p['destpy']."'")->find()->get('kindname');
            $out[]=$temp;
        }
        //星级
        if($p['rankid']!=0)
        {
            $temp = array();
            $url = self::get_search_mddurl($p['destpy'],'restaurant','0','rankid',$p);
            $temp['url'] = $url;
            $temp['attr'] = '星级';
            $temp['itemname'] = ORM::factory('restaurant_rank', $p['rankid'])->get('hotelrank');
            $out[] = $temp;

        }
        //价格
        if($p['priceid']!=0)
        {
            $temp = array();
            $url = self::get_search_mddurl($p['destpy'],'restaurant','0','priceid',$p);
            $temp['url'] = $url;
            $ar = ORM::factory('restaurant_pricelist',$p['priceid'])->as_array();
            $lowerprice = $ar['min'];
            $highprice = $ar['max'];
            $temp['attr'] = '价格';
            $temp['itemname'] = self::get_price_list_title($lowerprice,$highprice);
            $out[] = $temp;

        }

        //属性
        if($p['attrid']!=0)
        {
            $attArr = $orgArr = explode('_',$p['attrid']);
            foreach($attArr as $ar)
            {

                $orgArr = $attArr;
                $temp = array();
                $temp['itemname'] = ORM::factory('restaurant_attr',$ar)->get('attrname');
                $thisPid          = ORM::factory('restaurant_attr',$ar)->get('pid');
                $temp['attr']     = ORM::factory('restaurant_attr',$thisPid )->get('attrname');
                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($attrid))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }

                $url = $GLOBALS['cfg_basehost'].'/'.$p['destpy'].'/?param=restaurant';
//                $url.=$p['destpy'].'-'.$p['rankid'].'-'.$p['priceid'].'-'.$p['sorttype'].'-';
//                $url.=$p['displaytype'].'-'.$attrid.'-1';


                $url .="&destpy=".$p['destpy']."&rankid=".$p['rankid']."&priceid=".$p['priceid']."&sorttype=".$p['sorttype'];
                $url .= "&displaytype=".$p['displaytype']."&attrid=".$attrid."&p=1";
                $temp['url'] = $url;
                $out[] = $temp;
            }

        }
        return $out;

    }



    /**
     * @param $min
     * @param $max
     * @return string
     * @desc 根据价格大小生成价格优化标题.
     */
    public static function get_price_list_title($min,$max)
    {

            if($min!=''&& $max!='')
            {
                $title = '&yen;'.$min.'元-'.'&yen;'.$max.'元';
            }
            else if($min=='')
            {
                $title = '&yen;'.$max.'元以下';
            }
            else if($max =='')
            {
                $title ='&yen;'.$min.'元以上';
            }
        return $title;

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
            $destInfo = Model_Destinations::search_seo($param['destpy'],2);
            $arr[] = $destInfo['seotitle'];
        }
        if(!empty($param['rankid']))
        {

            $arr[] = ORM::factory('restaurant_rank', $param['rankid'])->get('hotelrank');
        }

        if(!empty($param['priceid']))
        {
            $priceArr= ORM::factory('restaurant_pricelist',$param['priceid'])->as_array();
            $price = self::get_price_list_title($priceArr['min'],$priceArr['max']);
            $arr[] = "价格区间$price";
        }

        if(!empty($param['attrid']))
        {
            $arr[] = Model_Restaurant_Attr::get_attrname_list($param['attrid'],'_');

        }
        return implode('_',$arr);


    }
}