<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Article extends ORM
{
    /*
        * 获取酒店
        * @param 参数
        * @return array

      */
    private static $typeid = 4;
    private static $basefield ='a.id,
                                a.webid,
                                a.aid,
                                a.title,
                                a.seotitle,
                                a.comefrom,
                                a.fromsite,
                                a.author,
                                a.content,
                                a.litpic,
                                a.addtime,
                                a.modtime,
                                a.shownum,
                                a.tagword,
                                a.keyword,
                                a.description,
                                a.kindlist,
                                a.themelist,
                                a.attrid,
                                a.ad_productid,
                                a.ad_kindid,
                                a.redirecturl,
                                a.ishidden,
                                a.iconlist,
                                a.templet,
                                a.summary,
                                a.isoffical,
                                a.piclist,
                                a.attachment,
                                a.downnum';

    /**
     * @param $aid
     * @return mixed
     * 文章详情 by aid
     */
    public static function detail_aid($aid)
    {
        $sql = "SELECT * FROM sline_article ";
        $sql .= "WHERE webid={$GLOBALS['sys_webid']} AND ishidden=0 AND aid={$aid} ";
        $sql .= "limit 1";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }
    /**
     * 扩展字段
     * @param $id
     * @return mixed
     */
    public static function extend($id)
    {
        $sql = "SELECT * FROM sline_article_extend_field ";
        $sql .= "WHERE productid={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }
    /*
     *  获取 文章 所有属性
     */
     public static function get_ar_attrid(){
         $sql  = 'SELECT * FROM `sline_article_attr` where isopen=1 ORDER by displayorder';
         $arr = DB::query(1, $sql)->execute()->as_array();
         $re = self:: unlimitedForLayer ($arr  ,$pid = 0 , $child = 'child', $parentField='pid', $primarykey='id');
         return $re;
     }
    /**
     * @param $type
     * @param $id
     * @return array
     * 获取上一条,下一条
     */
    public static function get_prev_next($type,$id)
    {

        if($type == 'prev')
        {
            $sql = "SELECT aid,title,webid FROM `sline_article` WHERE id<$id ORDER BY id DESC LIMIT 1";

        }
        else if($type == 'next')
        {
            $sql = "SELECT aid,title FROM `sline_article` WHERE id>$id ORDER BY id ASC LIMIT 1";
        }
        $row = DB::query(1,$sql)->execute()->current();
        if(!empty($row['aid']))
        {
            $row['url'] = Common::get_web_url($row['webid']).'/raiders/show_'.$row['aid'].'.html';
        }
        else
        {
            $row = array();
        }

        return $row;

    }
    /**
     * 属性
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
        $arr = DB::select('attrname')->from('article_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
        return $arr;
    }
    /*
     * 获得 作者头像
     */
    public  static  function  get_authorHead($attrid){
        if (empty($attrid))
        {
            return;
        }
        $attrid = trim($attrid,',');
        $attrid = explode(",",$attrid);
        foreach($attrid as &$v) {
            $sql = "SELECT litpic FROM `sline_admin` WHERE FIND_IN_SET($v,author_article_id)";
            $arr = self::execute($sql);
        }
       // $arr = DB::select('litpic')->from('sline_admin')->where(" author_article_id  in({$attrid}) ")->execute()->as_array();
        return $arr;
    }
    /*
     * 获取作者的总游记数
     */
    public static  function get_author_all_article($author){
         $sql    =" SELECT * FROM `sline_article` ";
         $sql   .=" where  ishidden=0 and author='$author'";
         $arr    = self::execute($sql);
         $arr    = count($arr);
         return $arr;
    }
    /*
    * 河北游记
    * */
    public static function get_hbTravels($attrid,$row=3)
    {
          $sql    ="SELECT * FROM `sline_article` ";
          $sql   .=" WHERE ishidden=0 AND FIND_IN_SET($attrid,attrid) ";
          $sql   .="  ORDER BY addtime DESC LIMIT 0,$row";
          $arr    = self::execute($sql);
          foreach ($arr as &$v){
                    $v['Author_head'] = self::get_author($v['author']);
                    $v['Author_head'] = Common::img($v['Author_head'],380,220);
                if($row==3) {
                   // $v['litpic'] = Common::img($v['litpic'], 390, 220);
                }
                    $v['piclist'] = Product::pic_list($v['piclist']);
                    $v['commentnum']     =Model_Comment::get_comment_num($v['id'],self::$typeid);
                    $v['summary']     = Common::cutstr_html($v['summary'], 30);
                    $v['addtime']     = date("Y-m-d",$v['addtime']) ;
          }
          return $arr;
    }
   /*
    *
    *   获取作者  封冀蜀  08.08  修改
    * */
    public  static  function  get_author($name){
        $name = trim($name);
        $sql ="SELECT * FROM `sline_admin` WHERE author_name='$name'";
        $ar    = self::execute($sql);

        return $ar[0]['litpic'];
    }
    /*
    * 获取最新
    * */
    public static function get_article_new($offset,$row,$havepic)
    {
        $sql = "SELECT ".self::$basefield." FROM sline_article a ";
        $sql.= "WHERE a.ishidden=0 ";
        if($havepic)
            $sql.= "and a.litpic<>'' ";
        $sql.= "ORDER BY a.modtime desc,a.addtime DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    /*
       * 获取精华攻略
       * */
    public static function get_article_jinghua($offset,$row,$havepic)
    {
        $sql = "SELECT ".self::$basefield." FROM sline_article a ";

        $sql.= "WHERE a.ishidden=0 ";
        if($havepic)
            $sql.= "and a.litpic<>'' ";

        $sql.= "ORDER BY a.shownum desc ";

        $sql.= "LIMIT {$offset},{$row}";

        $arr = self::execute($sql);

        $arr = self::get_article_attachinfo($arr);

        return $arr;
    }

    /*
    * 获取几日游 等的信息 11 09
    * */

    public static function get_article_dayattr()
    {
        $sql ="SELECT * FROM `sline_article_attr` WHERE `isopen` =1 AND `pid` =6 order by displayorder asc ";
        $arr = self::execute($sql);
         return $arr;
    }
    /*
  * 获取几日游 等的信息 1226
     * $attrid   属性
  * */

    public static function get_article_dayattrss($attrid)
    {
        if (empty($attrid))
        {
            return;
        }
        $attrid = trim($attrid,',');

        $attrid = explode(",",$attrid);

        $sql ="SELECT id FROM `sline_article_attr` WHERE `isopen` =1 AND `pid` =6 order by displayorder asc ";

        $arr = self::execute($sql);

        $j =array();
        foreach ($arr as $k => &$v){
                    $j[$k] = $v['id'];
        }
        $array  = array_merge($attrid,$j);
        $unique_arr = array_unique ( $array );
        // 获取重复数据
        $repeat_arr = array_diff_assoc ( $array, $unique_arr );
        if(!empty($repeat_arr)) {
            foreach ($repeat_arr as $g) {
                $p = $g;
            }
            $sql = "SELECT attrname FROM `sline_article_attr` WHERE id=$p";

            $attrname = DB::query(1, $sql)->execute()->get('attrname');
        }
        return $attrname;
    }
    /*
     * 按顺序获取
     * */
    public static function get_article_order($offset,$row,$havepic)
    {
        $sql = "SELECT ".self::$basefield." FROM sline_article a ";
        $sql.= "LEFT JOIN `sline_allorderlist` b ";
        $sql.= "ON (a.id=b.aid and b.typeid=4) ";
        $sql.= "WHERE a.ishidden=0 ";
        if($havepic)
            $sql.= "and a.litpic<>'' ";
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        $sql.= "limit {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;


    }
    /*
     * 按目的地获取
     * */
    public static function get_article_bymdd($offset,$row,$destid,$havepic)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_article` a ";
        $sql.= "LEFT JOIN `sline_kindorderlist` b ";
        $sql.= "ON (a.id=b.aid and b.typeid=4) ";
        $sql.= "WHERE a.ishidden=0 AND FIND_IN_SET($destid,a.kindlist) ";
        if($havepic)
            $sql.= "and a.litpic<>'' ";
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    /*
    * 搜索
    * */
    public static function search_article($destid, $attrid, $keyword, $offset, $row, $havepic, $sorttype)
    {
        $ordertable = empty($destid) ? 'sline_allorderlist' : 'sline_kindorderlist';

        $sql = "SELECT ".self::$basefield." FROM `sline_article` a ";
        $sql.= "LEFT JOIN `{$ordertable}` b ";
        $sql.= "ON (a.id=b.aid and b.typeid=4) ";
        $sql.= "WHERE a.ishidden=0 ";
        if(!empty($destid))
            $sql.= "AND FIND_IN_SET($destid,a.kindlist) ";
        if(!empty($attrid))
            $sql.= "AND FIND_IN_SET($attrid,a.attrid) ";
        if(!empty($keyword))
            $sql.= "AND a.title like '%{$keyword}%' ";
        if($havepic)
            $sql.= "AND a.litpic<>'' ";
        if(empty($sorttype))
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        else
            $sql.= "ORDER BY IFNULL(a.shownum,0) DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }

    /*
 * 获得附加信息
 * */
    public static function get_article_attachinfo($list)
    {
        //对获取的数据进行初始化处理
        foreach($list as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],4); //评论次数
            //$v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],2)+intval($v['bookcount']); //销售数量
            //$v['sellprice'] = Model_Hotel::get_sellprice($v['id']);//挂牌价
            //$v['price'] = Model_Hotel::get_minprice($v['id']);//最低价
            $v['piclist'] = Product::pic_list($v['piclist']);

            //获取 作者写过总游记数
            if(!empty($v['author'])) {
                $v['all_article'] = Model_Article::get_author_all_article($v['author']);

                $v['author_lv'] = Model_Article::get_author_Lv($v['all_article']);
            }
            //  获取 目的地
            if(!empty($v['finaldestid'])) {
                $v['mdd'] = self::get_article_mdd($v['finaldestid']);
            }
            $v['jiriyou']  =self:: get_article_dayattrss($v['attrid']);
            $v['lastdest']= Model_Destinations::get_last_dest($v['kindlist']);//最低层目的地
            $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
            $v['tuceNum'] = self::get_tuceNum($v['id']);
        }
        return $list;
    }
    /*
     *   获取目的地
     */
    public  static  function  get_article_mdd($kingid){
        $sql = "select * from `sline_destinations` where id = $kingid";
        $mdd = DB::query(1,$sql)->execute()->get('kindname');
        return $mdd;

    }
    /*
* 获得详细信息
* */
    public static function get_article_details($webid, $aid)
    {
        $sql = "SELECT ".self::$basefield.",b.* FROM `sline_article` a ";
        $sql.= "LEFT JOIN `sline_article_extend_field` b ";
        $sql.= "ON (a.id=b.productid) ";
        $sql.= "WHERE a.ishidden=0 AND a.aid={$aid} AND webid={$webid}";

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

    //------------------------以下是搜索页新增加使用函数-----------------
    //  获取目的属性组 fengjsihu 07.27
    public static function get_des()
{
    $sql = "SELECT id,kindname,pinyin FROM `sline_destinations` ";
    $sql.= "where isopen ='1' ";
    $sql.= " order by displayorder";

    $arr = self::execute($sql);
    return $arr;
}
    /*
     *  获取 文章模型开启的目的地
     */
    public function get_opendes($typeid){

        $sql = "SELECT id,kindname,pinyin FROM `sline_destinations` ";
        $sql.= "where isopen ='1' and pid=0 and find_in_set($typeid,opentypeids) ";
        $sql.= " order by displayorder asc ";

        $arr = self::execute($sql);
        return $arr;
    }
    /*
 * 检测是否喜欢
 */
    public function  islike($sid,$memberid,$typeid){
        if($typeid=='101'){
            $sql  =" SELECT * FROM `sline_like_notes` WHERE noteid=$sid and mid=$memberid ";
        }elseif($typeid=='4'){
            $sql  =" SELECT * FROM `sline_like_notes` WHERE articleid=$sid and mid=$memberid ";
        }
        $arr  = self::execute($sql);
        return $arr;

    }

    /*
     *  首页推荐
     */
    public static function  article_ad_index($offset=0,$row=3){
        $where = ' WHERE a.ishidden=0 and a.isrecommend=1 ';

        $sql = "SELECT a.* FROM `sline_article` a ";

        $sql.= "LEFT JOIN `sline_allorderlist` b ";
        $sql.= "ON (a.id=b.aid AND b.typeid=4 AND a.webid=b.webid)";
        $sql.= $where;
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";

        $sql.= "LIMIT {$offset},{$row}";
        $arr = DB::query(1,$sql)->execute()->as_array();

        $arr = self::get_article_attachinfo($arr);

        return $arr;
    }
    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $destPy = Common::remove_xss($params['destpy']);
        $attrId = Common::remove_xss($params['attrid']);
        $sorttype = Common::remove_xss($params['sorttype']);
        $page = $currentpage;
        $page = $page ? $page : 1;

        $where = ' WHERE a.ishidden=0 ';
        //按目的地搜索
        if($destPy && $destPy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
            $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
        }
        //关键词
        if(!empty($keyword))
        {
            //==========fenghjishu 08.10 增加
            $mdd = self::get_des();
            $mdds = '';
            foreach ($mdd as $k=>$v){
                if($keyword==$v['kindname']){
                    $mdds =$v['id'];
                }
            }
            if(!empty($mdds)){
                if(!empty($destPy) && $destPy!='all'){
                    $where .= " or FIND_IN_SET($mdds,a.kindlist)" ;
                }else{
                    $where .= " AND FIND_IN_SET($mdds,a.kindlist) ";
                }

            }else{
                $where.= "AND a.title like '%$keyword%' or FIND_IN_SET('$keyword',a.keyword)  ";
            }
           // $where.= " AND a.title like '%$keyword%' or FIND_IN_SET('$keyword',a.keyword) ";//06.25 fengjishu 增加or  索引
        }
        //按属性
        if(!empty($attrId))
        {
             if($attrId==19){
                 $where.= Product::get_attr_where($attrId);
             }else{
                 $where.= Product::get_attr_where($attrId."_37");
             }

        }else{
            $where.= Product::get_attr_where("37");
        }

        $offset = (intval($page)-1)*$pagesize;
        //  加入一个时间 判断 2017.01.22
        $overtime  = strtotime("2017-01-22 16:57");
        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_article` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=".self::$typeid." AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            if(!empty($sorttype)){
                $sql.= "ORDER BY shownum desc,IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";
            }else{
                $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";
            }

            //$sql.= "LIMIT {$offset},{$pagesize}";
        }
        else
        {
            $sql = "SELECT a.* FROM `sline_article` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=4 AND a.webid=b.webid)";
            $sql.= $where;
            if(!empty($sorttype)){
                $sql.= "ORDER BY shownum desc,IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";
            }else{
                $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";
            }

            //$sql.= "LIMIT {$offset},{$pagesize}";
        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;

        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$typeid); //评论次数
            $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.

            // $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
            $v['url'] =  "/raiders/show_{$v['aid']}.html";
            $v['piclist']  = Product::pic_list($v['piclist']);
            //   匹配相册
            //  获取 图册
            $v['tuceNum'] = self::get_tuceNum($v['id']);
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;


    }
    private   function get_tuceNum($arid){
        $sql  ="select content from `sline_article_mulu` where articleid='$arid' order by id asc";
        $mulu =DB::query(1,$sql)->execute()->as_array();
        $str  = '';
        foreach($mulu as &$v){
            $str.= $v['content'];
        }
        //  获取 图册
        preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg]))[\'|\"].*?[\/]?>/',$str,$arr);
        $tuce  =  count($arr[0]);
        return $tuce;

    }
    public  static  function get_setfenji($productid){

        $sql  ="select * from `sline_article_mulu` where articleid='$productid' order by id asc";
        $mulu =DB::query(1,$sql)->execute()->as_array();
        $mulu =self::unlimitedForLayer ($mulu ,$pid = 0 , $child = 'child', $parentField='pid', $primarykey='id');
       return $mulu;
    }
     public static function unlimitedForLayer ($cate ,$pid = 0 , $child = 'child', $parentField='pid', $primarykey='id') {
        $arr = array();
        foreach ($cate as  $v) {
            if ($v[$parentField] == $pid) {
                $v[$child] = self::unlimitedForLayer($cate, $v[$primarykey], $child, $parentField, $primarykey);
                $arr[] = $v;
            }
        }
        return $arr;
    }
    /*
     *   11.21   获取攻略的总数
     */
    public  static function get_allraider(){
        $sql = "SELECT count(*) as dd FROM `sline_article` where ishidden=0 ";
        $arr = DB::query(1,$sql)->execute()->get('dd');
        return $arr;

    }
    /*
     * 热门游记  攻略 06.17 fengjishu
     */
    public  static  function get_hot_article($row=3){
        $sql = "SELECT * FROM `sline_article` where ishidden=0 ORDER by shownum DESC limit 0,$row";
        $arr = DB::query(1,$sql)->execute()->as_array();
        shuffle($arr);
        foreach($arr as &$v)
        {
            $k               =array();
            $k               =  explode(",",$v['keyword']);
            $ke              =  array_rand($k);
            $v['keyword']    = empty($k)?$v['keyword']:$k[$ke];
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$typeid); //评论次数
            $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['piclist']  = Product::pic_list($v['piclist']);
           // $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
            $v['url'] =  "/raiders/show_{$v['aid']}.html";

        }
        return $arr;

    }
    /*
     * 近期活动  fengjishu  06.17
     */
    public  static  function get_recent_activities(){
        $sql ="SELECT * FROM `sline_article` where ishidden= 0 ORDER by addtime DESC limit 0,4 ";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$typeid); //评论次数
            $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
        }
        return $arr;
    }
    /*
     * 作者等级  06.25 fengjishu
     */
    public  static  function get_author_Lv($allArticle){
         if(1<=$allArticle&&$allArticle<=4){
             $lv   =1;
         }
         if(5<=$allArticle&&$allArticle<=8){
             $lv= 2;
         }
         if(9<=$allArticle&&$allArticle<=14){
             $lv=3;
         }
        if(15<=$allArticle&&$allArticle<=21){
            $lv =4;
        }
        if(22<=$allArticle&&$allArticle<=31){
            $lv =5;
        }
        if(32<=$allArticle&&$allArticle<=60){
            $lv =6;
        }
        if(31<=$allArticle&&$allArticle<=90){
            $lv =7;
        }if(91<=$allArticle&&$allArticle<=180){
            $lv =8;
        }
        return $lv;
    }
    /*
    * 生成searh页地址
    * */
    public static function get_search_url($v,$paramname,$p,$currentpage=1)
    {

        $url = $GLOBALS['cfg_basehost'].'/raiders/';
        switch($paramname)
        {
            case "destpy":
                $url.=$v.'-'.$p['attrid'].'-'.$p['sorttype'].'-'.$currentpage;
                break;

            case "attrid":
                $orignalArr = Product::get_attr_parent($p['attrid'],self::$typeid);
                $nowArr = Product::get_attr_parent($v,self::$typeid);
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
                $url.=$p['destpy'].'-'.$attr_list.'-'.$p['sorttype'].'-'.$currentpage;
                break;
            case  "sorttype" :

                $url.=$p['destpy'].'-'.$p['attrid'].'-'.$v.'-'.$currentpage;
                break;
        }
        return $url;


    }

    /*
  * 生成searh页地址  正对城市
  * */
    public static function get_search_mddurl($mdd,$param,$v,$paramname,$p,$currentpage=1)
    {

        $url = $GLOBALS['cfg_basehost'].'/'.$mdd.'/?param='.$param;
        switch($paramname)
        {
            case "destpy":
               // $url.=$v.'-'.$p['attrid'].'-'.$currentpage;
                $url .="&destpy=".$v."&attrid=".$p['attrid'].'&sorttype='.$p['sorttype']."&p=".$currentpage;
                break;

            case "attrid":
                $orignalArr = Product::get_attr_parent($p['attrid'],self::$typeid);
                $nowArr = Product::get_attr_parent($v,self::$typeid);
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
                //$url.=$p['destpy'].'-'.$attr_list.'-'.$currentpage;
                $url .="&destpy=".$p['destpy']."&attrid=".$attr_list.'&sorttype='.$p['sorttype']."&p=".$currentpage;
                break;
            case "sorttype" :
                // $url.=$v.'-'.$p['attrid'].'-'.$currentpage;
                $url .="&destpy=".$p['destpy']."&attrid=".$p['attrid'].'&sorttype='.$v."&p=".$currentpage;
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
            $temp['attr'] = '目的地';
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
                $temp['itemname'] = ORM::factory('article_attr',$ar)->get('attrname');

                $thisPid          = ORM::factory('article_attr',$ar)->get('pid');
                $temp['attr']     = ORM::factory('article_attr',$thisPid )->get('attrname');

                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($p['attrid']))
                {
                    $attrid = implode('_',$orgArr);

                }
                else
                {
                    $attrid = 0;
                }
                $attrid = empty($attrid) ?  0 :  $attrid;
                $url = $GLOBALS['cfg_basehost'].'/raiders/';
                $url.=$p['destpy'].'-'.$attrid.'-'.$p['sorttype'].'-1';
                $temp['url'] = $url;
                $out[] = $temp;
            }
        }
        return $out;

    }



    /**
     * @param $p
     * @return array
     * @desc 已选择项处理  正对 目的地
     */
    public static function get_selected_mdditem($p)
    {
        $p['displaytype'] = 0;
        $out = array();
        //目的地
        if($p['destpy']!='all')
        {
            $temp = array();
            $url = self::get_search_mddurl($p['destpy'],'raider','all','destpy',$p);
            $temp['url'] = $url;
            $temp['attr'] = '目的地';
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
                $temp['itemname'] = ORM::factory('article_attr',$ar)->get('attrname');
                $thisPid          = ORM::factory('article_attr',$ar)->get('pid');
                $temp['attr']     = ORM::factory('article_attr',$thisPid )->get('attrname');

                unset($orgArr[array_search($ar,$orgArr)]);

                if(!empty($p['attrid']))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }

                $url = $GLOBALS['cfg_basehost'].'/'.$p['destpy'].'/?param=raider';
                 //$url.=$p['destpy'].'-'.$attrid.'-1';
                $url .="&destpy=".$p['destpy']."&attrid=".$attrid."&p=1";

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
            $destInfo = Model_Destinations::search_seo($param['destpy'],self::$typeid);
            $arr[] = $destInfo['seotitle'];
        }

        if(!empty($param['attrid']))
        {
            $arr[] = Model_Article_Attr::get_attrname_list($param['attrid'],'_');

        }
        return implode('_',$arr);


    }
}