<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Article extends ORM
{
    /*
        * 获取酒店
        * @param 参数
        * @return array

      */
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
                                a.gl_mdd,
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
                                a.finaldestid,
                                a.downnum,
                                a.likeNum';

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
  * 获取  推荐的 攻略
  * */

    public static function  article_ad_index($offset=0,$row=3){
        $where = ' WHERE a.ishidden=0 and a.isrecommend=1 ';

        $sql = "SELECT a.* FROM `sline_article` a ";

        $sql.= "LEFT JOIN `sline_allorderlist` b ";
        $sql.= "ON (a.id=b.aid AND b.typeid=4 AND a.webid=b.webid)";
        $sql.= $where;
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";

        $sql.= "LIMIT {$offset},{$row}";
        $arr = DB::query(1,$sql)->execute()->as_array();

       // $arr = self::get_article_attachinfo($arr);

        return $arr;
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
    public static function get_article_bymdd($offset,$row,$destid,$havepic,$attrid)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_article` a ";
        $sql.= "LEFT JOIN `sline_kindorderlist` b ";
        $sql.= "ON (a.id=b.aid and b.typeid=4) ";
        $sql.= "WHERE a.ishidden=0 AND FIND_IN_SET($destid,a.kindlist) ";
        if($havepic)
            $sql.= "and a.litpic<>'' ";
        if(!empty($attrid)){
            $sql .=" and FIND_IN_SET($attrid,a.attrid) ";//  20170327  加
        }
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }
    /*
       * 评论加载更多  封冀蜀
       * */
    public static function search_comment($aid,$offset,$pagesize,$typeid)
    {
        $sql = "SELECT a.*,b.ChatNick,b.headimgurl FROM `sline_comment` a left JOIN  `sline_wxusermanage` b on a.openid=b.openId ";
        $sql.= "WHERE a.articleid =$aid and a.typeid =$typeid  and a.isshow='1' order by addtime asc ";
        $sql.= "LIMIT {$offset},{$pagesize}";
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
        if(!empty($attrid)){
            $attr  =explode(',',$attrid);
            foreach($attr as $vs){

                $sql.= "AND FIND_IN_SET($vs,a.attrid) ";

            }
        }
        if(!empty($keyword)){
            //====fengjishu  08.01
            $mdd = self::get_des();
            $mdds = '';
            foreach ($mdd as $k=>$v){
                if($keyword==$v['kindname']){
                    $mdds =$v['id'];
                }
            }
           if(!empty($mdds)){
               if(!empty($destid)){
                   $sql .= " or FIND_IN_SET($mdds,a.kindlist) or gl_mdd='$keyword'" ;
               }else{
                   $sql .= " AND (FIND_IN_SET($mdds,a.kindlist) or gl_mdd='$keyword' )";
               }

           }else{
               $sql.= "AND a.title like '%{$keyword}%' ";
           }
           //=========fengjishu  end
        }
        if($havepic)
            $sql.= "AND a.litpic<>'' ";
        if(empty($sorttype))
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        else {
            if($sorttype==2){
                $sql.= "ORDER BY a.addtime DESC ";
            }else {
                $sql .= "ORDER BY IFNULL(a.shownum,0) DESC ";
            }
        }
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
       // return $sql;
        return $arr;
    }
    /*
     * 搜索 游记
     */
    public static function search_notes($destid,  $keyword, $offset, $row,  $sorttype,$attr)
    {


        $sql = "SELECT a.* FROM `sline_notes` a ";

        $sql.= "WHERE a.status=1 and a.is_dra=0 ";
        if(!empty($destid))

            $sql.= "AND a.finaldestid=$destid ";

        if(!empty($attr['day'])){

            $sql.= "AND a.travel_day={$attr['day']} ";
        }

        if(!empty($attr['way'])){

            $sql.= "AND a.travel_way={$attr['way']} ";
        }

        if(!empty($keyword)){
            //====fengjishu  08.01
            $mdd = self::get_des();
            $mdds = '';
            foreach ($mdd as $k=>$v){
                if($keyword==$v['kindname']){
                    $mdds =$v['id'];
                }
            }
            if(!empty($mdds)){
                if(!empty($destid)){
                    $sql .= " or FIND_IN_SET($mdds,a.kindlist) " ;
                }else{
                    $sql .= " AND (FIND_IN_SET($mdds,a.kindlist) ";
                }

            }else{
                $sql.= "AND a.title like '%{$keyword}%' ";
            }
            //=========fengjishu  end
        }

        if(empty($sorttype))
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        else {
            if($sorttype==2){
                $sql.= "ORDER BY a.addtime DESC ";
            }else {
                $sql .= "ORDER BY IFNULL(a.shownum,0) DESC ";
            }
        }
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }
    /*
    * 搜索
    * */
    public static function search_article1($destid, $attrid, $keyword, $offset, $row, $havepic, $sorttype)
    {
        $ordertable = empty($destid) ? 'sline_allorderlist' : 'sline_kindorderlist';

        $sql = "SELECT ".self::$basefield." FROM `sline_article` a ";
        $sql.= "LEFT JOIN `{$ordertable}` b ";
        $sql.= "ON (a.id=b.aid and b.typeid=4) ";
        $sql.= "WHERE a.ishidden=0 ";
        if(!empty($destid))
            $sql.= "AND FIND_IN_SET($destid,a.kindlist) ";
        if(!empty($attrid)){
            $attr  =explode(',',$attrid);
            foreach($attr as $vs){

                $sql.= "AND FIND_IN_SET($vs,a.attrid) ";

            }
        }
        if(!empty($keyword)){
            //====fengjishu  08.01
            $mdd = self::get_des();
            $mdds = '';
            foreach ($mdd as $k=>$v){
                if($keyword==$v['kindname']){
                    $mdds =$v['id'];
                }
            }
            if(!empty($mdds)){
                if(!empty($destid)){
                    $sql .= " or FIND_IN_SET($mdds,a.kindlist)" ;
                }else{
                    $sql .= " AND FIND_IN_SET($mdds,a.kindlist) ";
                }

            }else{
                $sql.= "AND a.title like '%{$keyword}%' ";
            }
            //=========fengjishu  end
        }

        if($havepic)
            $sql.= "AND a.litpic<>'' ";
        if(empty($sorttype))
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) asc,a.modtime desc,a.addtime DESC ";
        else {
            if($sorttype==2){
                $sql.= "ORDER BY a.addtime DESC ";
            }else {
                $sql .= "ORDER BY IFNULL(a.shownum,0) DESC ";
            }
        }
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

            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],'4'); //评论次数
            //$v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],2)+intval($v['bookcount']); //销售数量
            //$v['sellprice'] = Model_Hotel::get_sellprice($v['id']);//挂牌价
            //$v['price'] = Model_Hotel::get_minprice($v['id']);//最低价
            //==fengjishu
            $v['dayTour'] = Model_Article::get_Several_day_tour($v['attrid']);//几日游
            $v['mdd']     = Model_Article::get_mdds($v['finaldestid']);//最终目的地

            $v['piclist'] = Product::pic_list($v['piclist']);
            //===fengjsihu 07.28
            $v['tuceNum'] = self::get_tuceNum($v['id']);

            //Mr.feng09.10
            $v['lastdest']= Model_Destinations::get_last_dest($v['kindlist']);//最低层目的地
            //$v['authorhead']    = Model_Article::get_authorHead($v['attrid']);
            $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
        }
        return $list;
    }
    /*
* 获得游记附加信息
* */
    public static function get_notes_attachinfo($list)
    {
        //对获取的数据进行初始化处理
        foreach($list as &$v)
        {
           // $v['commentnum'] = Model_Comment::get_comment_num($v['id'],4); //评论次数
            //$v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],2)+intval($v['bookcount']); //销售数量
            //$v['sellprice'] = Model_Hotel::get_sellprice($v['id']);//挂牌价
            //$v['price'] = Model_Hotel::get_minprice($v['id']);//最低价
            //==fengjishu
            $v['dayTour'] = Model_Article::get_Several_day_tour($v['attrid']);//几日游
            $v['mdd']     = Model_Article::get_mdds($v['finaldestid']);//最终目的地
            $v['litpic']     = Common::img($v['litpic'],640,400);//最终目的地

            //===fengjsihu 07.28
            //   匹配相册
            //  获取 图册
            $v['tuceNum'] = self::get_tuceNum($v['id']);
            //Mr.feng09.10
            $v['lastdest']= Model_Destinations::get_last_dest($v['kindlist']);//最低层目的地
            $v['authorhead'] = ORM::factory('member',$v['memberid'])->get('litpic');//获取会员头像;
            $v['author']    = ORM::factory('member',$v['memberid'])->get('nickname');
            $is_phone   = preg_match('/^1([0-9]{9})/',$v[author]);
            if($is_phone){
                $v['author']  = substr($v['author'],0,3)."****".substr($v['author'],7,11);
            }
         //   $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/notes/show_{$v['id']}.html";
        }
        return $list;
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
    /*
     * 获取  目录表的信息
     */

    public  static  function get_setfenji($productid){

        $sql  ="select * from `sline_article_mulu` where articleid='$productid' order by id asc";
        $mulu =DB::query(1,$sql)->execute()->as_array();
        $mulu =self::unlimitedForLayer ($mulu ,$pid = 0 , $child = 'child', $parentField='pid', $primarykey='id');
        return $mulu;
    }
    /*
     * 对主子菜单的遍历
     */
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
* 获得最终目的地
* */
    public static function get_mdds($finaldestid)
    {
       // return $finaldestid;
        if(empty($finaldestid)){
            return '';
        }else{
            $sql  ="SELECT kindname FROM `sline_destinations` WHERE id =$finaldestid ";
             $arr1 = self::execute($sql);
            return $arr1[0]['kindname'];
        }

        //exit;

    }
    /*
* 获得几日游
* */
    public static function get_Several_day_tour($attrid)
    {
        $attr =explode(",",$attrid);
        $sql = "SELECT id FROM `sline_article_attr` WHERE pid=6";
        $arr = self::execute($sql);
        $p= array();
        foreach ($arr as $k=>$v) {
           $p[$k]  =$v['id'];
        }
        foreach($attr as $j){
            if(in_array($j,$p)){
                $sql = "SELECT attrname FROM `sline_article_attr` WHERE pid=6 and id=$j";

            }
        }
        $arr1 = self::execute($sql);
        return $arr1[0]['attrname'];

    }
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

    /*
    * 获得 作者头像
    */
    public  static  function  get_authorHead($author){
        if (empty($author))
        {
            return;
        }
        $author = trim($author);
       // echo $author =iconv("UTF-8","GB2312//IGNORE",$author);

        //$attrid = explode(",",$attrid);

            $sql = "SELECT litpic FROM `sline_admin` WHERE author_name='$author'";
            $arr = self::execute($sql);
        //var_dump($arr);exit;

        // $arr = DB::select('litpic')->from('sline_admin')->where(" author_article_id  in({$attrid}) ")->execute()->as_array();
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
* 获得详细信息
* */
    public static function get_article_details($webid, $aid)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_article` a ";
        $sql.= "LEFT JOIN `sline_article_extend_field` b ";
        $sql.= "ON (a.id=b.productid) ";
        $sql.= "WHERE a.ishidden=0 AND a.aid={$aid} AND webid={$webid}";

        $arr = self::execute($sql);

        return $arr;
    }
    /*
      * 获取 游记 目录 表信息 list
      * fengjishu  09.14
      */
    public static function get_list($noteid){

        $sql = "SELECT * FROM `sline_notes_list` WHERE notes_id=$noteid  ORDER by id";

        $arr_pid = DB::query(1,$sql)->execute()->as_array();

        $p= self::unlimitedForLayer($arr_pid);

        return $p;
    }

    //  获取 评论
    public static function get_article_comment($aid)
    {
        $sql = "SELECT * FROM `sline_article_comment` ";
        $sql.= "where aid='$aid' ";
        $sql.= " order by Com_time desc ";

        $arr = self::execute($sql);
        return $arr;
    }
    //  获取 流年记
    public static function get_article_attr_liunian()
    {
        $sql = "SELECT * FROM `sline_article_attr` ";
        $sql.= "where pid='15' and isopen ='1' ";
        $sql.= " order by displayorder ";

        $arr = self::execute($sql);
        return $arr;
    }
    //  获取目的属性组 fengjsihu 07.27
    public static function get_des()
    {
        $sql = "SELECT id,kindname,pinyin FROM `sline_destinations` ";
        $sql.= "where isopen ='1' ";
        $sql.= " order by displayorder ";

        $arr = self::execute($sql);
        return $arr;
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

    //  获取目的属性组 fengjsihu 07.27
    public static function get_des1($row)
    {
        $sql = "SELECT id,kindname,pinyin FROM `sline_destinations` ";
        $sql.= "where isopen ='1' and pid =0 ";
        $sql.= " order by displayorder ";
        $sql .= " limit 0,{$row} ";

        $arr = self::execute($sql);
        return $arr;
    }
    //  获取文章的属性组 fengjsihu 07.27
    public static function get_attr()
    {
        // 时间属性
        $sql    = "SELECT id,attrname FROM `sline_article_attr` WHERE pid=6 and isopen=1 order by id";
        $times  = self::execute($sql);
        //主题属性
        $sql    = "SELECT id,attrname  FROM `sline_article_attr` WHERE pid=12 and isopen=1 order by displayorder asc ";
        $themes = self::execute($sql);
        // 距离属性
        $sql    = "SELECT id,attrname  FROM `sline_article_attr` WHERE pid=5  and isopen=1 order by id";
        $adds   = self::execute($sql);

        $arr    = array();
        $arr[0] = $times;
        $arr[1] = $themes;
        $arr[2] = $adds;
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
    /*
    * $url 接口的URL string
    * $type 请求的类型string
    * $res  返回数据类型string
    * $arr  post 请求参数 string
    *
    * */
    public function  curl($url,$type='post',$res='json',$arr=''){
        $ch = curl_init();
        //3.设置参数
        curl_setopt($ch , CURLOPT_URL, $url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        if($type=='post'){
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
        }
        //4.调用接口
        $output = curl_exec($ch);
        //5.关闭curl
        curl_close( $ch );
        if( curl_errno($ch) ){
            var_dump( curl_error($ch) );
        }
        if($res=='json'){
            $arrs = json_decode($output, true);
        }
        return $arrs;
    }
}