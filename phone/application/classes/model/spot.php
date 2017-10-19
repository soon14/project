<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Spot extends ORM
{



    public static $typeid = 5;


    //
                /**
                 * 参数解析
                 * @param $params
                 */
                public static function search_result($params,$keyword,$sjz,$pagesize='5')
                {
                    $destPy=$priceId=$sortType=$attrId=0;
                    $page = 1;
                    $params = explode('-', str_replace('/', '-', $params));
                    $count = count($params);

                    switch ($count)
                    {
                        //目的地
                        case 1:
                            list($destPy) = $params;
                            break;
                        //关键字、属性
                        case 6:
                            list($destPy, $priceId, $sortType, $k, $attrId,$page) = $params;
                            break;
                    }//return $params;//$params;
                    $destPy = Common::remove_xss($destPy);
                    $priceId = Common::remove_xss($priceId);
                    $sortType = Common::remove_xss($sortType);
                    $keyword = Common::remove_xss($keyword);
                    $attrId = Common::remove_xss($attrId);
                    $page = Common::remove_xss($page);
                    if($sjz==45){
                        $where = ' WHERE a.ishidden=0 and a.kindlist!=45 ';// 封技术 5.11 增加 判断周边地区 属性选择
                    }
                    else {
                        $where = ' WHERE a.ishidden=0 ';
                    }
                    //按目的地搜索
                    if($destPy && $destPy!='all')
                    {
                        $destId = ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
                        $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
                    }

                    //价格区间
                    if($priceId)
                    {
                        $priceArr = ORM::factory('spot_pricelist',$priceId)->as_array();
                        $min = $priceArr['min'] ? $priceArr['min'] : 0 ;
                        $where.= " AND a.price BETWEEN {$min} AND {$priceArr['max']} ";
                    }
                    //排序
                    $orderBy = "";
                    if(!empty($sortType))
                    {
                        if($sortType==0)//默认排序
                        {
                            $orderBy = " IFNULL(b.displayorder,9999) ASC,";
                        }
                        else if($sortType==1)//特价排序
                        {
                            $orderBy = "  a.price asc,";
                        }
                        else if($sortType==2) //价格
                        {
                            $orderBy = "  a.price desc,";
                        }
                        else if($sortType==3) //销量
                        {
                            $orderBy = " a.bookcount desc,";
                        }
                        else if($sortType==4)//人气
                        {
                            $orderBy = " a.shownum desc,";
                        }
                        else if($sortType==5) //满意度
                        {
                            $orderBy = " a.shownum desc,";
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
                        $where .= Product::get_attr_where($attrId);
                    }
                    $offset = (intval($page)-1)*$pagesize;

                    //如果选择了目的地
                    if(!empty($destId))
                    {
                        $sql = "SELECT a.* FROM (`sline_spot` a ";
                        $sql.= "LEFT JOIN `sline_kindorderlist` b ";
                        $sql.= "ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid AND b.classid=$destId)) right join `sline_spot_ticket` f on a.id=f.spotid ";
                        $sql.= $where;
                        $sql .=" AND curdate() < DATE_FORMAT(substring(f.lastoffer, -13, 10),'%Y-%m-%d') AND substring(f.lastoffer, -13, 10) != 'ime\";s:0:\"'";
                        $sql.= "  GROUP BY f.spotid ";
                        $sql.= "ORDER BY {$orderBy}a.iconlist desc,a.modtime DESC,a.addtime DESC ";
                        $sql.= "LIMIT {$offset},{$pagesize}";

                    }
                    else
                    {
                        $sql = "SELECT a.* FROM (`sline_spot` a ";
                        $sql.= "LEFT JOIN `sline_allorderlist` b ";
                        $sql.= "ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid)) right join `sline_spot_ticket` f on a.id=f.spotid ";
                        $sql.= $where;
                        $sql .=" AND curdate() < DATE_FORMAT(substring(f.lastoffer, -13, 10),'%Y-%m-%d') AND substring(f.lastoffer, -13, 10) != 'ime\";s:0:\"'";
                        $sql.= "  GROUP BY f.spotid ";
                        $sql.= "ORDER BY {$orderBy}a.iconlist desc,a.modtime DESC,a.addtime DESC ";
                        $sql.= "LIMIT {$offset},{$pagesize}";


                    }

                    $data = DB::query(1,$sql)->execute()->as_array();

                    foreach($data as &$v)
                    {
                        $priceArr = Model_Spot::get_minprice($v['id']);
                        $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$typeid); //评论次数
                        $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],self::$typeid)+intval($v['bookcount']); //销售数量
                        $v['sellprice'] = $priceArr['sellprice'];//挂牌价]

                        $v['price'] = !empty($priceArr['price']) ? $priceArr['price'] : '电询';//最低价
                        $v['attrlist'] = self::spot_attr($v['attrid']);//属性列表.
                        // 剩余库存
                        $v['stock']          = Model_Spot::get_stock($v['id'])*1;
                        $v['greate']  = self::get_greate($v['attrlist']);
                         $v['url'] = Common::get_web_url($v['webid']) . "/spots/show_{$v['aid']}.html";
                        $v['litpic'] = Common::img($v['litpic'],185,115);
                        $v['piclist'] = Product::pic_list($v['piclist']);
                        $v['new_pic'] = $v['piclist'][1][0];
                        $v['ticketInfo'] =  Model_Spot::get_ticketinfo($v['id']);
                        $v['ticketInfo'] =  count($v['ticketInfo']);
                        if(!empty($v['finaldestid'])) {
                            $v['finaldestname'] = Model_Spot::get_mdd($v['finaldestid']);
                        }

                    }

                    return Product::list_search_format1($data,$page);
                }
    /*
     *   取得 景区等级 A
     */
    public  function  get_greate($attrlist)
    {


        foreach ($attrlist as $key => $value) {

            $str = strstr($value['attrname'], "A");

            switch ($str) {

                case true:

                       return $str;
                    break;

                default;

            }
        }
    }
    /**
     * @param $hotelid
     * @return mixed
     * 获取景点目的地  fengjishu 06.22
     */
    public static function get_mdd($kindlist)
    {
        $sql = "SELECT kindname FROM `sline_destinations` where id =$kindlist";
        $row = DB::query(1,$sql)->execute()->as_array();
        return $row[0]['kindname'];
    }
    /**

     * 属性

     * @param $attrid

     * @return array

     */

    public static function spot_attr($attrid)

    {

        if (empty($attrid))

        {

            return;

        }

        $attrid = trim($attrid,',');

        $arr = DB::select('attrname')->from('spot_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();

        return $arr;

    }
    /**
     * @param $hotelid
     * @return mixed
     * 获取景点最低价
     */
    public static function get_minprice($spotid)
    {

        $sql = "SELECT MIN(ourprice) AS price,MIN(sellprice) AS sellprice FROM `sline_spot_ticket` ";
        $sql.= "WHERE spotid='$spotid' AND ourprice!=0";
        $row = DB::query(1,$sql)->execute()->as_array();
        $row[0]['price'] = Currency_Tool::price($row[0]['price']);
        $row[0]['sellprice'] = Currency_Tool::price($row[0]['sellprice']);
        return $row[0];
    }
    /*
     *  写入  获取 票价信息 封冀蜀
     * */
    public static function get_ticketinfo($spotid)
    {
        $sql = "SELECT a.id,a.paytype,a.ourprice AS price,a.sellprice AS sellprice,a.title,b.kindname FROM `sline_spot_ticket` a ";
        $sql.= " left join `sline_spot_ticket_type` b on a.tickettypeid=b.id ";
        $sql.= "WHERE a.spotid='$spotid' AND a.ourprice!=0";
        $row = DB::query(1,$sql)->execute()->as_array();
        return $row;
    }
    /*
    *  写入  获取 票价信息 封冀蜀
    * */
    public static function get_ticket_Single_info($tid)
    {
        $sql = "SELECT * FROM `sline_spot_ticket` ";
        $sql.= "WHERE id='$tid' AND ourprice!=0";
        $row = DB::query(1,$sql)->execute()->as_array();
        return $row;
    }
    /**
     *
     * 获取typeticketid   封冀蜀
     */
    public static function get_typeticketid($spotid,$kindname)
    {
       $tpid= ORM::factory('spot_ticket_type')
            ->where("spotid='$spotid' and kindname='$kindname' ")
            ->find()
            ->get('id');
        return $tpid;
    }

    /**
     * @param $spotid
     * @return array
     * 获取扩展字段信息
     */
    public static function get_extend_info($spotid)
    {
        $row = ORM::factory('spot_extend_field')
            ->where("productid=".$spotid)
            ->find()
            ->as_array();
        return $row;
    }

    /**
     * @param $spotid
     * @return bool
     * 检测是否有门票
     */
    public static function has_ticket($spotid)
    {
        $arr = ORM::factory('spot_ticket')->where("spotid='$spotid'")->get_all();
        return count($arr) ? true : false;
    }
    /**
     * 获得 库存  fengjishu
     *
     */
    public static function get_stock($spotid){

        $sql = "SELECT sum(number) as stock FROM `sline_spot_ticket` WHERE spotid=$spotid";

        $re  =DB::query(1,$sql)->execute()->as_array();

        return $re[0]['stock'];
    }
    /**
     * @param $spotid
     * @return bool
     * 获得等级
     */
    public static function get_dengji()
    {
        $sql = "SELECT * FROM `sline_spot_attr` ";
        $sql.= "WHERE pid='19' AND isopen=1";
        $row = DB::query(1,$sql)->execute()->as_array();
        return $row;
    }
    /**
     * @param $spotid
     * @return bool
     * 获得主题
     */
    public static function get_theme()
    {
        $sql = "SELECT * FROM `sline_spot_attr` ";
        $sql.= "WHERE pid='13' AND isopen=1 order by displayorder limit 0,11 ";
        $row = DB::query(1,$sql)->execute()->as_array();
        return $row;
    }




}