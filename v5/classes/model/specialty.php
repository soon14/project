<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Specialty extends ORM
{
    /*
        * 获取酒店
        * @param 参数
        * @return array

      */
    private static $typeid = 102;
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
        $sql = "SELECT * FROM sline_specialty ";
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
        $sql = "SELECT * FROM sline_specialty_extend_field ";
        $sql .= "WHERE productid={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
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
            $sql = "SELECT aid,title,webid FROM `sline_specialty` WHERE id<$id ORDER BY id DESC LIMIT 1";

        }
        else if($type == 'next')
        {
            $sql = "SELECT aid,title FROM `sline_specialty` WHERE id>$id ORDER BY id ASC LIMIT 1";
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
        $arr = DB::select('attrname')->from('specialty_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
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
            $sql = "SELECT litpic FROM `sline_admin` WHERE FIND_IN_SET($v,author_specialty_id)";
            $arr = self::execute($sql);
        }
       // $arr = DB::select('litpic')->from('sline_admin')->where(" author_specialty_id  in({$attrid}) ")->execute()->as_array();
        return $arr;
    }
    /*
     * 获取作者的总游记数
     */
    public static  function get_author_all_specialty($author){
         $sql    =" SELECT * FROM `sline_specialty` ";
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
          $sql    ="SELECT * FROM `sline_specialty` ";
          $sql   .=" WHERE ishidden=0 AND FIND_IN_SET($attrid,attrid) ";
          $sql   .="  ORDER BY addtime DESC LIMIT 0,$row";
          $arr    = self::execute($sql);
          foreach ($arr as &$v){
                    $v['Author_head'] = self::get_author($v['author']);
                    $v['Author_head'] = Common::img($v['Author_head'],380,220);
                if($row==3) {
                    $v['litpic'] = Common::img($v['litpic'], 390, 220);
                }
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
    public static function get_specialty_new($offset,$row,$havepic)
    {
        $sql = "SELECT ".self::$basefield." FROM sline_specialty a ";
        $sql.= "WHERE a.ishidden=0 ";
        if($havepic)
            $sql.= "and a.litpic<>'' ";
        $sql.= "ORDER BY a.modtime desc,a.addtime DESC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }
    /*
    * 获取几日游 等的信息 11 09
    * */

    public static function get_specialty_dayattr()
    {
        $sql ="SELECT * FROM `sline_specialty_attr` WHERE `isopen` =1 AND `pid` =6 order by displayorder asc ";
        $arr = self::execute($sql);
         return $arr;
    }
    /*
     * 按顺序获取
     * */
    public static function get_specialty_order($offset,$row,$havepic)
    {
        $sql = "SELECT ".self::$basefield." FROM sline_specialty a ";
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
    public static function get_specialty_bymdd($offset,$row,$destid,$havepic)
    {
        $sql = "SELECT ".self::$basefield." FROM `sline_specialty` a ";
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
    public static function search_specialty($destid, $attrid, $keyword, $offset, $row, $havepic, $sorttype)
    {
        $ordertable = empty($destid) ? 'sline_allorderlist' : 'sline_kindorderlist';

        $sql = "SELECT ".self::$basefield." FROM `sline_specialty` a ";
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
    public static function get_specialty_attachinfo($list)
    {
        //对获取的数据进行初始化处理
        foreach($list as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],4); //评论次数
            //$v['sellnum'] = Model_Member_Order::get_sell_num($v['id'],2)+intval($v['bookcount']); //销售数量
            //$v['sellprice'] = Model_Hotel::get_sellprice($v['id']);//挂牌价
            //$v['price'] = Model_Hotel::get_minprice($v['id']);//最低价
            $v['lastdest']= Model_Destinations::get_last_dest($v['kindlist']);//最低层目的地
            $v['attrlist'] = Model_specialty_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
        }
        return $list;
    }

    /*
* 获得详细信息
* */
    public static function get_specialty_details($webid, $aid)
    {
        $sql = "SELECT ".self::$basefield.",b.* FROM `sline_specialty` a ";
        $sql.= "LEFT JOIN `sline_specialty_extend_field` b ";
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
        $sql.= " order by displayorder ";

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
            $sql  =" SELECT * FROM `sline_like_notes` WHERE specialtyid=$sid and mid=$memberid ";
        }
        $arr  = self::execute($sql);
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
            $where.= Product::get_attr_where($attrId);
        }

        $offset = (intval($page)-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_specialty` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=".self::$typeid." AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_specialty` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=4 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
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
            $v['attrlist'] = Model_specialty_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;


    }
    public  static  function get_setfenji($productid){

        $sql  ="select * from `sline_specialty_mulu` where specialtyid='$productid' order by id asc";
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
     * 热门游记  攻略 06.17 fengjishu
     */
    public  static  function get_hot_specialty(){
        $sql = "SELECT * FROM `sline_specialty` ORDER by shownum DESC limit 0,3 ";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $k               =array();
            $k               =  explode(",",$v['keyword']);
            $ke              =  array_rand($k);
            $v['keyword']    = empty($k)?$v['keyword']:$k[$ke];
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$typeid); //评论次数
            $v['attrlist'] = Model_specialty_Attr::get_attr_list($v['attrid']);//属性列表.

            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";

        }
        return $arr;

    }
    /*
     * 近期活动  fengjishu  06.17
     */
    public  static  function get_recent_activities(){
        $sql ="SELECT * FROM `sline_specialty` where ishidden= 0 ORDER by addtime DESC limit 0,4 ";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$typeid); //评论次数
            $v['attrlist'] = Model_specialty_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
        }
        return $arr;
    }
    /*
     * 作者等级  06.25 fengjishu
     */
    public  static  function get_author_Lv($allspecialty){
         if(1<=$allspecialty&&$allspecialty<=4){
             $lv   =1;
         }
         if(5<=$allspecialty&&$allspecialty<=8){
             $lv= 2;
         }
         if(9<=$allspecialty&&$allspecialty<=14){
             $lv=3;
         }
        if(15<=$allspecialty&&$allspecialty<=21){
            $lv =4;
        }
        if(22<=$allspecialty&&$allspecialty<=31){
            $lv =5;
        }
        if(32<=$allspecialty&&$allspecialty<=60){
            $lv =6;
        }
        if(31<=$allspecialty&&$allspecialty<=90){
            $lv =7;
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
                $url.=$v.'-'.$p['attrid'].'-'.$currentpage;
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
                $url.=$p['destpy'].'-'.$attr_list.'-'.$currentpage;
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


        //属性
        if($p['attrid']!=0)
        {
            $attArr = $orgArr = explode('_',$p['attrid']);
            foreach($attArr as $ar)
            {

                $orgArr = $attArr;
                $temp = array();
                $temp['itemname'] = ORM::factory('specialty_attr',$ar)->get('attrname');
                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($attrid))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }

                $url = $GLOBALS['cfg_basehost'].'/raiders/';
                $url.=$p['destpy'].'-'.$attrid.'-1';
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
            $arr[] = Model_specialty_Attr::get_attrname_list($param['attrid'],'_');

        }
        return implode('_',$arr);


    }
}