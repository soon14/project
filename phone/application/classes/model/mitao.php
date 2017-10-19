<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mitao extends ORM
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
       // $sql = "select min(adultprice) as price from sline_line_suit_price where lineid='$lineid' and day > '$time' and adultprice!=0 limit 60";
        $sql = "select min(childprice) as price from sline_mitao_suit_price where lineid='$lineid' and childprice!=0 limit 60";
        $row = DB::query(1, $sql)->execute()->as_array();
        $row[0]['price'] = Currency_Tool::price($row[0]['price']);
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
        $arr = DB::select('attrname')->from('mitao_attr')->where("id in({$attrid}) and pid!=0")->order_by("displayorder","asc")->execute()->as_array();
        return $arr;
    }

    /**
     * 线路详情
     * @param $id
     * @return array
     */
    public static function detail($id)
    {
        $sql = "SELECT * FROM sline_mitao WHERE aid={$id} and webid={$GLOBALS['sys_webid']}";
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
        $sql.= "WHERE a.articleid =$aid and a.typeid ='106' and a.isshow='1' order by addtime asc ";
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
        $sql = "select lastoffer from sline_mitao_suit where lineid='$lineid' limit 1";
        $row = DB::query(1, $sql)->execute()->as_array();
        $lastoffer = unserialize($row[0]['lastoffer']);
        $lineDate['starttime'] = substr($lastoffer['starttime'],0,4).".".substr($lastoffer['starttime'],5,2).".".substr($lastoffer['starttime'],8,2);
        $lineDate['endtime'] = substr($lastoffer['endtime'],0,4).".".substr($lastoffer['endtime'],5,2).".".substr($lastoffer['endtime'],8,2);
        $lineDate['endtime1'] =$lastoffer['endtime'];
        return $lineDate;
    }
    /*
     *  是否 收藏
     */
    public  static function is_collect($data){
        foreach ($data as $v) {
             if(empty($v)){
                 return false;
             }
        }
        $query = DB::select()->from('like_notes')->where('openid', '=', $data['openid']);

        $query->and_where('typeid',"=",$data['typeid']);

        $query->and_where('productid',"=",$data['productid']);

        $arr  = $query->execute()->as_array();

        return $arr;
    }
    /**
     * 获得 库存  fengjishu
     * @param $lineid
     * @return array  复制的前台页面
     */
    public static function get_stock($lineid){

        $sql = "SELECT sum(number) as stock FROM `sline_mitao_suit_price` WHERE lineid=$lineid";
        $re  =DB::query(1,$sql)->execute()->as_array();

        return $re[0]['stock'];
    }
    /*
   * 获取目的地信息 名
   * */

    public static function  get_dest_name($kindlist)
    {
        $kindlistArr = explode(',', $kindlist);

        $str  ='';
        if(empty($kindlistArr)){
            return $str;
        }
        foreach($kindlistArr as $v){
            if(!empty($v)) {
                $sql = "SELECT	kindname  FROM	`sline_destinations` WHERE id ={$v}";
                $str .= DB::query(Database::SELECT, $sql)->execute()->get('kindname');
            }
        }

       return $str;
    }
    /*
   * 执行sql语句
   * */
    private static function execute($sql)
    {
        $arr = DB::query(1,$sql)->execute()->as_array();
        return $arr;
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
            $priceArr = ORM::factory('mitao_pricelist',$priceId)->as_array();
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
            $sql = "SELECT a.* FROM `sline_mitao` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=106 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY {$orderBy}a.modtime DESC,a.addtime DESC ";
            $sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_mitao` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=106 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY {$orderBy}a.modtime DESC,a.addtime DESC ";
            $sql.= "LIMIT {$offset},{$pagesize}";


        }

        $data = DB::query(1,$sql)->execute()->as_array();

        foreach($data as &$v)
        {
            $v['price'] = Model_mitao::get_minprice($v['id']);
            $v['price'] = Currency_Tool::price($v['price']);
            $v['attrlist'] = Model_mitao::line_attr($v['attrid']);
            $v['startcity'] = Model_Startplace::start_city($v['startcity']);
            $v['linedate1'] = Model_mitao::line_date($v['id']);//新加  封冀蜀
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],106); //评论次数
            $v['satisfyscore'] = Model_Comment::get_score($v['id'], 106, $v['satisfyscore'], $v['commentnum']);//满意度
            $v['sellnum'] = Model_Member_Order::get_sell_nums($v['id'],106)+intval($v['bookcount']); //销售数量
            $v['stock']   = Model_mitao::get_stock($v['id'])*1-$v['sellnum']*1;//获得库存 fengjishu 06.06
            $v['url'] = Common::get_web_url($v['webid']) . "/mitaos/show_{$v['aid']}.html";
          //  $v['litpic'] = Common::img($v['litpic'],500,330);
            $v['piclist']= Product::pic_list($v['piclist']);
            $v['newlitpic'] =$v['piclist'][1][0];
            $v['title'] = Common::cutstr_html($v['title'], 40);
            $v['attrname1'] =$v['attrlist'][0]['attrname'];
            $v['attrname2'] =$v['attrlist'][1]['attrname'];
            $v['desfinal']  =ORM::factory('destinations')->where("id=$v[finaldestid]")->find()->get('kindname');

            $v['now_time'] =time();//新加  fengjishu

            $v['cha_time'] =time()-strtotime($v['linedate1']['endtime1'])*1;//新加  封冀蜀


        }
        return Product::list_search_format($data, $page);
    }




    /**
     *
     * 通过跳转获取用户的openid，跳转流程如下：
     * 1、设置自己需要调回的url及其其他参数，跳转到微信服务器https://open.weixin.qq.com/connect/oauth2/authorize
     * 2、微信服务处理完成之后会跳转回用户redirect_uri地址，此时会带上一些参数，如：code
     *
     * @return 用户的openid
     */
    public static  function GetOpenid($appid,$appsecret)
    {
        $refresh_token  = Common::session('refresh_token');
        if(empty($refresh_token)){
            //获取点前页面的的地址
            $url    = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

            //  获取 微信用用户 信息
            if(!empty($_GET['code'])){
                $code  = isset($_GET['code'])?$_GET['code']:"no code";

                $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";

                $arr = Model_Article::curl($url_getToken);

                Common::session('refresh_token',$arr['refresh_token']);

                return $arr;exit;
            }else{

                $redirect_url = urlencode($url);
                header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=".$redirect_url."&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect");
            }
        }
        else{

            $url_getToken = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=$appid&grant_type=refresh_token&refresh_token=".$refresh_token;
            $arr = Model_Article::curl($url_getToken);

            return $arr;exit;
        }
    }

    /*
     *
     */

    public static  function GetOpenid2($appid,$appsecret)
    {

            //获取点前页面的的地址
            $url    = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

            //  获取 微信用用户 信息
            if(!empty($_GET['code'])){
                $code  = isset($_GET['code'])?$_GET['code']:"no code";

                $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";

                $arr = Model_Article::curl($url_getToken);

                Common::session('refresh_token',$arr['refresh_token']);

                return $arr;exit;
            }else{

                $redirect_url = urlencode($url);
                header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=".$redirect_url."&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect");
            }

    }
    public static  function GetOpenid_base($appid,$appsecret)
    {

        //获取点前页面的的地址
        $url    = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        //  获取 微信用用户 信息
        if(!empty($_GET['code'])){
            $code  = isset($_GET['code'])?$_GET['code']:"no code";

            $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";

            $arr = Model_Article::curl($url_getToken);

            Common::session('refresh_token',$arr['refresh_token']);

            return $arr['openid'];

        }else{

            $redirect_url = urlencode($url);
            header("Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=".$redirect_url."&response_type=code&scope=snsapi_base&state=1#wechat_redirect");
        }

    }

    /*
     *   获取 米淘 用户的信息
     */

   public  static function getUserInfo($openid){



           $sql = "SELECT * FROM `sline_member` WHERE openid='".$openid."'";

           $re  =DB::query(1,$sql)->execute()->as_array();

           return $re[0];


   }
    /*
  *  获取 线路的套餐
  */
    public static function get_mitao_suit($lineid){
        if(empty($lineid)){
            return "";
        }
        $sql = "SELECT * FROM `sline_mitao_suit` WHERE lineid=$lineid";

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

    /*
   *   获取 米淘 用户的信息  根据 openid 和mobile
   */

    public  static function getUserInfo2($openid,$mobile){



        $sql = "SELECT * FROM `sline_member` WHERE openid='".$openid."'";

        $re  =DB::query(1,$sql)->execute()->as_array();

        return $re[0];


    }

    /**

     * @param $productaid

     * @return array

     * 获取扩展字段信息

     */

    public static function get_extend_info($productaid,$typeid)

    {
        if($typeid==106) {

            $sql = "SELECT e_backpay FROM `sline_mitao_extend_field` WHERE productid='" . $productaid . "'";

        }
        else if($typeid==5)
        {
            $sql = "SELECT e_backpay FROM `sline_spot_extend_field` WHERE productid='".$productaid."'";
        }else if($typeid==1){

            $sql = "SELECT e_backpay FROM `sline_line_extend_field` WHERE productid='".$productaid."'";

        }
        $re  =DB::query(1,$sql)->execute()->as_array();
        return $re[0];
    }





















}