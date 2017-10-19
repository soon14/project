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
                                a.downnum';
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
       * 评论加载更多  封冀蜀
       * */
    public static function search_comment($aid,$offset,$pagesize)
    {
        $sql = "SELECT a.*,b.ChatNick,b.headimgurl FROM `sline_comment` a left JOIN  `sline_wxusermanage` b on a.openid=b.openId ";
        $sql.= "WHERE a.articleid =$aid and a.typeid ='4' and a.isshow='1' order by addtime asc ";
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
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],4); //评论次数
            //$v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],2)+intval($v['bookcount']); //销售数量
            //$v['sellprice'] = Model_Hotel::get_sellprice($v['id']);//挂牌价
            //$v['price'] = Model_Hotel::get_minprice($v['id']);//最低价
            //==fengjishu
            $v['dayTour'] = Model_Article::get_Several_day_tour($v['attrid']);//几日游
            $v['mdd']     = Model_Article::get_mdds($v['finaldestid']);//最终目的地

            //===fengjsihu 07.28
            //Mr。feng09.10 获取内容里面有多少个 img
            $v['img_count'] = substr_count($v['content'],'<img')*1-3;

            //Mr.feng09.10
            $v['lastdest']= Model_Destinations::get_last_dest($v['kindlist']);//最低层目的地
            //$v['authorhead']    = Model_Article::get_authorHead($v['attrid']);
            $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
        }
        return $list;
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
    //  获取目的属性组 fengjsihu 07.27
    public static function get_des1()
    {
        $sql = "SELECT id,kindname,pinyin FROM `sline_destinations` ";
        $sql.= "where isopen ='1' and pid =0 ";
        $sql.= " order by displayorder ";
        $sql .= " limit 0,10 ";

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
}