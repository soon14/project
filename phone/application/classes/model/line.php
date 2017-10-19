<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Line extends ORM
{
    /**
     * 线路最低价
     * @param $lineid
     * @return int
     */
    public static function get_minprice($lineid)
    {
        $time = time();
        //06.12 fengjishu 修改 隐藏原来的 原因去掉 时间的判断
        $sql = "select min(childprice) as chprice,min(adultprice) as adprice,min(oldprice) as oldprice from sline_line_suit_price where lineid='$lineid' and day > '$time'  limit 60";
       // $sql = "select min(adultprice) as price from sline_line_suit_price where lineid='$lineid' and adultprice!=0 limit 60";
        $row = DB::query(1, $sql)->execute()->as_array();
        $chprice  =$row[0]['chprice'];
        $adprice  =$row[0]['adprice'];
        $oldprice =$row[0]['oldprice'];
        if($chprice==0&&$adprice==0&&$oldprice>0){
            $row[0]['price'] = Currency_Tool::price($oldprice);
        }
        else if($chprice==0&&$adprice>0&&$oldprice==0){
            $row[0]['price'] = Currency_Tool::price($adprice);
        }
        else if($chprice>0&&$adprice==0&&$oldprice==0){
            $row[0]['price'] = Currency_Tool::price($chprice);
        }
        else if($chprice>0&&$adprice>0&&$oldprice==0){
            $p = ($chprice-$adprice);
            $p=$p>0?$adprice :$chprice;

            $row[0]['price'] = Currency_Tool::price($p);
        }
        else if($chprice>0&&$adprice==0&&$oldprice>0){

            $p = ($chprice-$oldprice)<0?$chprice :$oldprice;

            $row[0]['price'] = Currency_Tool::price($p);
        }
        else if($chprice==0&&$adprice>0&&$oldprice>0){

            $p = ($adprice-$oldprice)<0?$adprice:$oldprice;

            $row[0]['price'] = Currency_Tool::price($p);
        }
        else if($chprice>0&&$adprice>0&&$oldprice>0){


            $p=min($row[0]);

            $row[0]['price'] = Currency_Tool::price($p);
        }

        return $row[0]['price'];
    }

    /**
     * 线路属性
     * @param $attrid
     * @return array
     */
    public static function line_attr($attrid)
    {
        if (empty($attrid))
        {
            return;
        }
        $arr = DB::select('attrname')->from('line_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
        return $arr;
    }

    /**
     * 线路详情
     * @param $id
     * @return array
     */
    public static function detail($id)
    {
        $sql = "SELECT * FROM sline_line WHERE aid={$id} and webid={$GLOBALS['sys_webid']}";
        $arr = DB::query(1, $sql)->execute()->as_array();

        $arr['price'] = Currency_Tool::price($arr['price']);
        $arr['storeprice'] = Currency_Tool::price($arr['storeprice']);
        return $arr[0];
    }
    /*
      * 评论加载更多  封冀蜀
      * */
    public static function search_comment($aid,$offset,$pagesize)
    {
        $sql = "SELECT a.*,b.nickname,b.headimgurl FROM `sline_comment` a left JOIN  `bbs_hjbox_users` b on a.openid=b.openid ";
        $sql.= "WHERE a.articleid =$aid and a.typeid ='1' and a.isshow='1' order by addtime asc ";
        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = self::execute($sql);
//        $sql = "SELECT * FROM `sline_comment` ";
//        $sql.= "WHERE articleid =$aid and typeid ='1' and isshow='1' order by addtime asc ";
//        $sql.= "LIMIT {$offset},{$pagesize}";
//        $arr = self::execute($sql);
        return $arr;
    }
    /**
     * 线路套餐的起止日期
     * @param $lineid
     * @return array  复制的前台页面
     */
    public static function line_date($lineid){
        $sql = "select lastoffer from sline_line_suit where lineid='$lineid' limit 1";
        $row = DB::query(1, $sql)->execute()->as_array();
        $lastoffer = unserialize($row[0]['lastoffer']);
        $lineDate['starttime'] = substr($lastoffer['starttime'],0,4).".".substr($lastoffer['starttime'],5,2).".".substr($lastoffer['starttime'],8,2);
        $lineDate['endtime'] = substr($lastoffer['endtime'],0,4).".".substr($lastoffer['endtime'],5,2).".".substr($lastoffer['endtime'],8,2);
        $lineDate['endtime1'] =$lastoffer['endtime'];
        return $lineDate;
    }
    /**
     * 获得 库存  fengjishu
     *
     */
    public static function get_stock($lineid){

        $sql = "SELECT sum(number) as stock FROM `sline_line_suit` WHERE lineid=$lineid";
        $re  =DB::query(1,$sql)->execute()->as_array();

        return $re[0]['stock'];
    }
    /*
   * 执行sql语句
   * */
    private static function execute($sql)
    {
        $arr = DB::query(1,$sql)->execute()->as_array();
        return $arr;
    }
    /*
     *  获取 线路的套餐
     */
    public static function get_line_suit($lineid){
        if(empty($lineid)){
            return "";
        }
        $sql = "SELECT * FROM `sline_line_suit` WHERE lineid=$lineid";

        $re  =DB::query(1,$sql)->execute()->as_array();
        $g  = array();
        foreach($re as $k=>&$v){

             $v['lastoffer'] = unserialize($v['lastoffer']);

             if(!empty($v['lastoffer']['oldprice'])){
                 $g['old'] = intval($v['lastoffer']['oldprice']);
             }
             if(!empty($v['lastoffer']['childprice'])){
                $g['child'] = intval($v['lastoffer']['childprice']);
             }
             if(!empty($v['lastoffer']['adultprice'])){
                $g['adult'] = intval($v['lastoffer']['adultprice']);
             }

             $v['price'] =min($g);

        }

         return $re;
    }
    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$pagesize='5')
    {
        //参数处理
        $urlParam = $params;
        $destPy = 'all';
        $priceId=$sortType=$aa=$attrId=$startcityId=0;
        $params = explode('-', str_replace('/', '-', $urlParam));
        $count = count($params);

        switch ($count)
        {
            //目的地
            case 1:
                list($destPy) = $params;
                break;
            //关键字、属性
            case 8:
                //$aa  原来用于搜索关键字处理，现在停用
                list($destPy, $dayId, $priceId, $sortType, $aa, $startcityId,$attrId,$page) = $params;
                break;
        }
        $destPy = Common::remove_xss($destPy);
        $dayId = Common::remove_xss($dayId);
        $sortType = Common::remove_xss($sortType);
        $startcityId = Common::remove_xss($startcityId);
        $attrId = Common::remove_xss($attrId);
        $page = Common::remove_xss($page);

        $where = ' WHERE a.ishidden=0 ';
        //按目的地搜索
        if($destPy && $destPy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
            $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
        }
        //星级
        if($dayId)
        {
            $where.= " AND a.lineday='$dayId'";
        }
        //价格区间
        if($priceId)
        {
            $priceArr = ORM::factory('line_pricelist',$priceId)->as_array();
            $where.= " AND a.price BETWEEN {$priceArr['lowerprice']} AND {$priceArr['highprice']} ";
        }
        //排序
        $orderBy = " IFNULL(b.displayorder,9999) ASC,";
        if(!empty($sortType))
        {
            if($sortType==1)//特价排序
            {
                $orderBy = " a.price asc,";
            }
            else if($sortType==2) //价格
            {
                $orderBy = " a.price desc,";
            }
            else if($sortType==3) //人气
            {
                $orderBy = " a.shownum desc,";
            }
            else if($sortType==4) //销量
            {
                $orderBy = " a.bookcount desc,";
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
            $where.= Product::get_attr_where($attrId);
        }

        $offset = (intval($page)-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_line` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=1 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY {$orderBy}a.modtime DESC,a.addtime DESC ";
            $sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_line` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=1 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY {$orderBy}a.modtime DESC,a.addtime DESC ";
            $sql.= "LIMIT {$offset},{$pagesize}";


        }
        $data = DB::query(1,$sql)->execute()->as_array();
        foreach($data as &$v)
        {
            $v['price'] = Model_Line::get_minprice($v['id']);
            $v['price'] = Currency_Tool::price($v['price']);
            $v['attrlist'] = Model_Line::line_attr($v['attrid']);
            $v['startcity'] = Model_Startplace::start_city($v['startcity']);
            $v['linedate1'] = Model_Line::line_date($v['id']);//新加  封冀蜀
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],1); //评论次数
            $v['satisfyscore'] = Model_Comment::get_score($v['id'], 1, $v['satisfyscore'], $v['commentnum']);//满意度
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],1)+intval($v['bookcount']); //销售数量
            $v['stock']   = Model_line::get_stock($v['id'])*1;//获得库存
            $v['url'] = Common::get_web_url($v['webid']) . "/lines/show_{$v['aid']}.html";
            $v['litpic'] = Common::img($v['litpic'],500,330);
            $v['piclist']= Product::pic_list($v['piclist']);
            $v['newlitpic'] =Common::img($v['piclist'][1][0]);
            $v['title'] = Common::cutstr_html($v['title'], 40);
           // $v['linedate'] =date("m-d",$v['linedate']);//新加 fengjishu 06.06
            $v['now_time'] =time();//
            //截止报名日期
            $v['linebefore'] = strtotime($v['linedate'])*1-86400*$v['linebefore'];

            $v['cha_time'] =time()-strtotime($v['linedate1']['endtime1'])*1;//新加  封冀蜀
        }
        return Product::list_search_format1($data, $page);
    }
}