<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Destination extends Stourweb_Controller{

    private $typeid = 12;
    private $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $genpage = Common::remove_xss(Arr::get($_GET, 'genpage'));
        $html = Common::cache('get', $this->_cache_key);
        if (!empty($html) && empty($genpage)) {
            echo $html;
            exit;
        }
        $channelname = Model_Nav::get_channel_name($this->typeid);
        $this->assign('typeid', $this->typeid);
        $this->assign('channelname', $channelname);
    }

    //首页
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $this->assign('seoinfo',$seoinfo);


        //$templet = Product::get_use_templet('dest_boot');
        //获取攻略123 ...日游 的属性
        $dayattr  = Model_Article::get_article_dayattr();

        $this ->assign('dayattr',$dayattr);
        $templet = $templet ? $templet : 'destination/index_5';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);

    }
    //搜索目的地
    public function action_search()
    {
        $destname = Common::remove_xss(Arr::get($_GET,'destname'));
        $info = ORM::factory('destinations')
            ->where("kindname='$destname'")
            ->find()
            ->as_array();
        if(!empty($info['pinyin']))
        {
            $url = $GLOBALS['cfg_basehost'].'/'.$info['pinyin'].'/';
        }
        else
        {
            $url = $this->request->referrer();
        }
        $this->request->redirect($url);
    }

    public function action_main()
    {
        // $param  概况 = survey  人文 = human   地图 =map  景点 = spot 酒店 = hotel
        // 饭店 = restaurant  特产=specialty 攻略 =raider 游记 =note
        $params= Common::remove_xss($_GET['param']);

        // $channel = Model_Nav::get_all_channel_info();
        // $this->assign('channel',$channel);
        //参数处理
        $destpy = Common::remove_xss($this->request->param('pinyin'));
        $destinfo = Model_Destinations::get_dest_bypinyin($destpy);

        //  根据 城市拼音获取 天气情况
        $destinfo['weather'] = Model_Destinations::get_kindWeather($destinfo['pinyin']);
        //装换 拼音大小写
        $destinfo['pinyins'] = strtoupper($destinfo['pinyin']);

    if ($params == 'survey') {

        //  feng 11 10  对 目的地的图片 处理
        $destinfo['piclist'] = explode(',', $destinfo['piclist']);
        foreach ($destinfo['piclist'] as $k => &$v) {

            $destinfo['imginfo'][$k] = explode('||', $v);
        }
        //   获取 目的的标签 ！！
        $destinfo['tag'] = Model_Destinations::get_kindTag($destinfo['id']);

        //获取攻略123日游 的属性
        $dayattr = Model_Article::get_article_dayattr();
        // 获取  该城市 的 推荐景点
        $destinfo['spot'] = Model_Spot::get_recommend_spot($destinfo['id']);

        // 获取目的地 的 评论
    //    $destinfo['comment'] = Model_

        foreach ($destinfo['spot'] as &$v) {
            $v['minprice'] = Model_Spot::get_minprice($v['id']);
        }

        //获取 目的城市   推荐游记 目的 id 和 查询的条数
        $destinfo['notes'] = Model_Notes:: get_hot_notes($destinfo['id'], 3);

        $this->assign('dayattr', $dayattr);
    }
    elseif($params=='human'){

        $destinfo['piclist'] = Product::pic_list($destinfo['piclist']);
        //  获取 图册
            preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg]))[\'|\"].*?[\/]?>/',$destinfo['jieshao'],$arr);


       //  $arr  0  是 img标签数组  1 是 src 地址
      //  var_dump($arr);exit;
        $this ->assign('tuce',$arr);

    }
    elseif($params=='map'){
        //  景点 sMap 饭店 rMap 酒店 hMa\
     //   header("Content-type: text/html; charset=utf-8");
        $p     = Common::remove_xss($_GET['page']);
        $p     = !empty($p) ?$p :1;
        $pagesize = 5;// 2 的倍数
        $offset = intval($p-1)*$pagesize;
        $sMap  = Common::remove_xss($_GET['sMap']);
        $rMap  = Common::remove_xss($_GET['rMap']);
        $hMap  = Common::remove_xss($_GET['hMap']);
        $keyword  = Common::remove_xss($_GET['keyword']);

        $mes   = array(0=>$sMap,1=>$hMap,2=>$rMap);
        $out   = Model_Destinations::get_alldata($sMap,$rMap,$hMap,$keyword,$offset,$pagesize,$destinfo['id']);
        $alltotal = ceil($out[1]*1/$pagesize);
        $this ->assign('mes',$mes);
        $this ->assign('keyword',$keyword);
        $this ->assign('out',$out);
        $this ->assign('alltotal',$alltotal);
        $this ->assign('page',$p);
//exit;
    }
    elseif($params=='spot'){

        $destPy =$destpy;

        $rankId    = Common::remove_xss(Arr::get($_GET,'rankid'));

        $priceId   = Common::remove_xss(Arr::get($_GET,'priceid'));

        $sortType  = Common::remove_xss(Arr::get($_GET,'sorttype'));

        $attrId    = Common::remove_xss(Arr::get($_GET,'attrid'));

        $p         = Common::remove_xss(Arr::get($_GET,'p'));
        if(empty($p)){
            $p =1 ;
        }

        $attrId = !empty($attrId) ? $attrId : 0;

        $pagesize = 5;

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'destpy' => $destPy,

            'priceid'=> $priceId,

            'sorttype'=> $sortType,

            'attrid' => $attrId

        );

        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));

        $out = Model_Spot::search_result($route_array,$keyword,$p,$pagesize);

        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pagesize,

                'first_page_in_url' => false,

            )

        );
        $pager->route_params($route_array);
        $chooseitem = Model_Spot::get_selected_mdditem($route_array);

        $searchTitle = Model_Spot::gen_seotitle($route_array);


        $this->assign('list',$out['list']);

        $this->assign('chooseitem',$chooseitem);

        $this->assign('searchtitle',$searchTitle);

        $this->assign('param',$route_array);

        $this->assign('currentpage',$p);
        $this ->assign('total',$out['total']);

       // $this->assign('pageinfo',$pager);
    }
    elseif($params=='hotel'){
        //参数值获取
        $destPy =$destpy;

        $sign = $this->request->param('sign');

        $rankId    = Common::remove_xss(Arr::get($_GET,'rankid'));

        $priceId   = Common::remove_xss(Arr::get($_GET,'priceid'));

        $sortType  = Common::remove_xss(Arr::get($_GET,'sorttype'));

        $attrId    = Common::remove_xss(Arr::get($_GET,'attrid'));

        $p         = Common::remove_xss(Arr::get($_GET,'p'));
        if(empty($p)){
            $p =1 ;
        }

        $attrId = !empty($attrId) ? $attrId : 0;


        $destPy = $destPy ? $destPy : 'all';

        $pagesize = 10;

        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'destpy' => $destPy,

            'rankid' => $rankId,

            'priceid'=> $priceId,

            'sorttype'=> $sortType,

            'displaytype'=>0,

            'attrid' => $attrId,

        );

        $out = Model_Hotel::search_result($route_array,$keyword,$p,$pagesize);

        $pager = Pagination::factory(

            array(
                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pagesize,

                'first_page_in_url' => false,
            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $destId = $destPy=='all' ? 0 : ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');

        $destId = $destId ? $destId : 0;

        //目的地信息

        $destInfo = array();

        $preDest = array();

        if($destId)

        {

            $destInfo = ORM::factory('destinations',$destId)->as_array();

            $preDest = Model_Destinations::get_prev_dest($destId);

        }

        //$chooseitem = Model_Hotel::get_selected_item($route_array);
        $chooseitem = Model_Hotel::get_selected_mdditem($route_array);

        $searchTitle = Model_Hotel::gen_seotitle($route_array);

        $this->assign('destid',$destId);

        $this->assign('destinfo',$destInfo);

        $this->assign('predest',$preDest);

        $this->assign('list',$out['list']);
        $this ->assign('total',$out['total']);

        $this->assign('chooseitem',$chooseitem);

        $this->assign('searchtitle',$searchTitle);

        $this->assign('param',$route_array);

        $this->assign('currentpage',$p);

        $this->assign('pageinfo',$pager);

    }
    elseif($params=='restaurant'){
        $destPy =$destpy;

        $sign = $this->request->param('sign');

        $rankId    = Common::remove_xss(Arr::get($_GET,'rankid'));

        $priceId   = Common::remove_xss(Arr::get($_GET,'priceid'));

        $sortType  = Common::remove_xss(Arr::get($_GET,'sorttype'));

        $attrId    = Common::remove_xss(Arr::get($_GET,'attrid'));

        $p         = Common::remove_xss(Arr::get($_GET,'p'));
        if(empty($p)){
            $p =1 ;
        }

        $attrId = !empty($attrId) ? $attrId : 0;


        $destPy = $destPy ? $destPy : 'all';

        $pagesize = 10;

        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'destpy' => $destPy,

            'rankid' => $rankId,

            'priceid'=> $priceId,

            'sorttype'=> $sortType,

            'displaytype'=>0,

            'attrid' => $attrId,

        );

        $out = Model_Restaurant::search_result($route_array,$keyword,$p,$pagesize);

        $pager = Pagination::factory(

            array(
                'current_page' => array('source' => 'route', 'key' => 'p'),

                'view'=>'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pagesize,

                'first_page_in_url' => false,
            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $destId = $destPy=='all' ? 0 : ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');

        $destId = $destId ? $destId : 0;

        //目的地信息

        $destInfo = array();

        $preDest = array();

        if($destId)

        {

            $destInfo = ORM::factory('destinations',$destId)->as_array();

            $preDest = Model_Destinations::get_prev_dest($destId);

        }

        //$chooseitem = Model_Hotel::get_selected_item($route_array);
        $chooseitem = Model_Restaurant::get_selected_mdditem($route_array);

        $searchTitle = Model_Restaurant::gen_seotitle($route_array);

        $this->assign('destid',$destId);

        $this->assign('destinfo',$destInfo);

        $this->assign('predest',$preDest);

        $this->assign('list',$out['list']);
        $this ->assign('total',$out['total']);

        $this->assign('chooseitem',$chooseitem);

        $this->assign('searchtitle',$searchTitle);

        $this->assign('param',$route_array);

        $this->assign('currentpage',$p);

        $this->assign('pageinfo',$pager);
    }
    elseif($params=='specialty'){
        $destPy = $destinfo['pinyin'];
        $attrId =  Common::remove_xss($_GET['attrid']);
        //$p = intval($this->request->param('p'));
        $p   = Common::remove_xss(Arr::get($_GET,'p'));
        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));
        $attrId = !empty($attrId) ? $attrId : 0;
        if(empty($p)){
            $p =1 ;
        }
        $pagesize = 10;
        $route_array = array(
            'controller' =>$this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'attrid' => $attrId,
        );

        $out = Model_Destinations::search_result($route_array,$keyword,$p,$pagesize);
        // 获取 热门 特产
        $hotSpecialty  = Model_Destinations::get_hotspecialty();
        $this->assign('te',$hotSpecialty);
        $chooseitem = Model_Destinations::get_selected_item($route_array);
        $this->assign('list',$out['list']);
        $this ->assign('total',$out['total']);
        $this->assign('chooseitem',$chooseitem);
        $this->assign('param',$route_array);
        $this->assign('currentpage',$p);
        $this->assign('pagesize', $pagesize);
      //  $this->assign('page',$pager);

    }
    elseif($params=='raider'){
        //参数值获取
        $destPy =$destpy;
        $sign = $this->request->param('sign');
        $attrId =  Common::remove_xss($_GET['attrid']);
        $sorttype =  Common::remove_xss($_GET['sorttype']);
    /// echo    $sorttype = $this->request->param('sorttype');exit;
        //$p = intval($this->request->param('p'));
        $p   = Common::remove_xss(Arr::get($_GET,'p'));
        if(empty($p)){
            $p =1 ;
        }
        $attrId = !empty($attrId) ? $attrId : 0;

        $destPy = $destPy ? $destPy : 'all';
        $pagesize = 10;
        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));
        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'attrid' => $attrId,
            'sorttype' =>$sorttype
        );

        //$start_time=microtime(true); //获取程序开始执行的时间

        $out = Model_Article::search_result($route_array,$keyword,$p,$pagesize);
        $pager = Pagination::factory(
            array(
                'current_page'      => array('source' => 'route', 'key' => 'p'),
                'view'              =>'default/pagination/search',
                'total_items'       => $out['total'],
                'items_per_page'    => $pagesize,
                'first_page_in_url' => false,
            )
        );
        //配置访问地址 当前控制器方法
        $pager->route_params($route_array);
        $destId = $destPy=='all' ? 0 : ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
        $destId = $destId ? $destId : 0;
        //目的地信息
        $destInfo = array();
        $preDest = array();
        if($destId)
        {
            $destInfo = ORM::factory('destinations',$destId)->as_array();
            $preDest = Model_Destinations::get_prev_dest($destId);
        }
        $chooseitem = Model_Article::get_selected_mdditem($route_array);
        $searchTitle = Model_Article::gen_seotitle($route_array);
        //====================fengjishu 06.17 hotRaiders
        $hotRaiders = Model_Article::get_hot_article(10);

        $this->assign("hotRaiders",$hotRaiders);

        $this->assign('destid',$destId);
        $this->assign('destinfo',$destInfo);
        $this->assign('predest',$preDest);
        $this->assign('list',$out['list']);
        $this ->assign('total',$out['total']);
        $this->assign('chooseitem',$chooseitem);
        $this->assign('searchtitle',$searchTitle);
        $this->assign('param',$route_array);
        $this->assign('currentpage',$p);
        $this->assign('pageinfo',$pager);
        $this->assign('pagesize', $pagesize);

    }
    elseif($params=='note'){
        //参数值获取
        $destPy =$destpy;
        $pagesize = 10;
        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));
        $day     = Common::remove_xss(Arr::get($_GET,'day'));
        $way     = Common::remove_xss(Arr::get($_GET,'way'));
        $p   = Common::remove_xss(Arr::get($_GET,'p'));
        if(empty($p)){
            $p =1 ;
        }
        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'day'     =>$day,
            'way'     =>$way
        );
        $out   = Model_Notes::search_result($route_array,$keyword,$p,$pagesize);
        $pager = Pagination::factory(
            array(
                'current_page'      => array('source' => 'route', 'key' => 'p'),
                'view'              =>'default/pagination/search',
                'total_items'       => $out['total'],
                'items_per_page'    => $pagesize,
                'first_page_in_url' => false,
            )
        );
        $chooseitem = Model_Notes::get_selected_mdditem($route_array);
        // 获取 热门的游记
        $hotNotes = Model_Notes::get_hot_notes(-1,4);
        //配置访问地址 当前控制器方法
        $pager->route_params($route_array);
        $this->assign('list',$out['list']);
        $this ->assign('total',$out['total']);
        $this ->assign('hotNotes',$hotNotes);
        $this->assign('param',$route_array);
        $this->assign('chooseitem',$chooseitem);
    }
        //获取seo信息
        $seo = Model_Destinations::search_seo($destpy, 0);
        //=====================分页
        $this->assign('pagesize', $pagesize);
        $this->assign('currentpage',$p);
        //=====================分页
        $this->assign('seoinfo', $seo);
        $this ->assign('params',$params);
        $this->assign('info', $destinfo);
        if (!empty($destinfo))
        {
            $templet = $destinfo['templet'];
            if(strpos($templet,'usertpl')==false)
            {
                if($params=='survey'){
                    $templet = 'destination/city';
                }
                elseif($params=='human'){
                    $templet = 'destination/human';
                }
                elseif($params=='map'){
                    $templet = 'destination/map';
                }
                elseif($params=='spot'){
                    $templet = 'destination/Ticket-list';
                }
                elseif($params=='hotel'){
                    $templet = 'destination/hotel-list';
                }
                elseif($params=='restaurant'){
                    $templet = 'destination/restaurant';
                }
                elseif($params=='specialty'){
                    $templet = 'destination/specialty';
                }
                elseif($params=='raider'){
                    $templet = 'destination/Trategy-list';
                }
                elseif($params=='note'){
                    $templet = 'destination/Notes-list';
                }
                else{
                   // $templet = 'destination/main';
                    $templet = 'destination/index_5';
                }

            }
           // echo  233222;exit;
            $this->display($templet);

        } else
        {
            $this->request->redirect("error/404");
        }
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }


   //酒店首页按目的地拼音获取目的地
    public function action_ajax_dest_by_pinyin()
    {


        $keyword = Common::js_unescape(Arr::get($_GET,'keyword'));
        $typeid = Arr::get($_GET,'typeid');
        $rule = "/^[a-zA-Z]+$/i";
        //模型信息
        if(!empty($typeid))
        $modelInfo = ORM::factory('model',$typeid)->as_array();

        //按文字进行搜索
        if(!preg_match($rule, $keyword))
        {

            if($modelInfo['pinyin'])
            {
                $joinTable = 'sline_'.$modelInfo['pinyin'].'_kindlist';
                $sql = "SELECT a.kindname FROM `sline_destinations` a ";
                $sql.= "LEFT JOIN $joinTable as b ON(a.id=b.kindid)  ";
                $sql.= "WHERE a.isopen=1 AND FIND_IN_SET($typeid,a.opentypeids) AND  a.kindname LIKE '%$keyword%' ";
                $sql.= "limit 0,10";
            }
            else if($typeid==0)
            {
                $sql = "SELECT a.kindname FROM `sline_destinations` a WHERE a.isopen=1 AND  a.kindname LIKE '%$keyword%' limit 0,10";
            }
            else
            {
                echo '';
                exit;
            }
            $res = DB::query(1,$sql)->execute()->as_array();
            $str = '';
            foreach($res AS $row)
            {
                $row['kindname'] = str_replace($keyword, '<b>' . $keyword . '</b>', $row['kindname']);
                $str .= $row['kindname'] . ',';
            }
            $str = substr($str, 0, strlen($str)-1);
        }
        else
        {
            //按拼音进行搜索
            $str = Model_Destinations::match_pinyin($keyword, $typeid);
        }
        echo $str;


    }
    //  看图
    public function  action_photo_album(){

        //参数处理
        $destpy = Common::remove_xss($_GET['pinyin']);
        $destinfo = Model_Destinations::get_dest_bypinyin($destpy);

        $destinfo['piclist'] = Product::pic_list($destinfo['piclist']);
        //目的地上级
        if($destinfo['id']>0)
        {
            $predest = Product::get_predest($destinfo['id']);
            $this->assign('predest',$predest);
        }
        $this ->assign('info',$destinfo['piclist']);
        $this->display('destination/photo_album');

    }

    //  特产详情
    public  function action_specialty(){
        //特产 id
        $speid    =  Common::remove_xss($_GET['speid']);
        //目的地 id
        $kindid   =  Common::remove_xss($_GET['kindid']);
        //获取详情
        $detial   = Model_Destinations::getSpecialtyDetial($speid);
        //  获取 目的地名称
        $detial[0]['kind'] = ORM::factory("destinations",$kindid)->as_array();
        // 获取 热门 特产
        $hotSpecialty  = Model_Destinations::get_hotspecialty();
        $this->assign('te',$hotSpecialty);
        // 更新 详情

        //  获取 图册
        preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg]))[\'|\"].*?[\/]?>/',$detial[0]['content'],$arr);
        //  $arr  0  是 img标签数组  1 是 src 地址

        $this ->assign('tuce',$arr);
        $this ->assign('info',$detial[0]);
        if (!empty($detial))
        {
            $this->display('destination/specialty_detail');

        } else
        {
            $this->request->redirect("error/404");
        }

        //缓存内容
//        $content = $this->response->body();
//        Common::cache('set',$this->_cache_key,$content);
    }

    //  目的地  评论
    public  function  action_comment(){

        //目的地 id
        $kindid   =  Common::remove_xss($_GET['kindid']);
        //  获取 目的地名称
        $destinfo = ORM::factory("destinations",$kindid)->as_array();
        //  获取 目的地 标签
        //   获取 目的的标签 ！！
        $destinfo['tag'] = Model_Destinations::get_kindTag($kindid);
        //装换 拼音大小写
        $destinfo['pinyins'] = strtoupper($destinfo['pinyin']);
        //  根据 城市拼音获取 天气情况
        $destinfo['weather']    = Model_Destinations::get_kindWeather($destinfo['pinyin']);
        //  多少条 点评
        $destinfo['commentnum'] = Model_Destinations::get_comment_num($kindid, 20);
        //  多少 为 达人点评
        $destinfo['bigMan']     = Model_Destinations::get_bigMan_num($kindid, 20);
        //  获取多个作者的头像
        $destinfo['authors']    = Model_Destinations::get_authors($kindid, 20);
        //   获取 评论
       // $destinfo['comment']    = Model_Destinations::get_comment($kindid,102);
        //用户信息
        //    验证码
        Common::session('check',time().rand(0,50));
        $checkcode   =Common::session('check');
        $this->assign('checkcode',$checkcode);
        $userInfo = Product::get_login_user_info();
        $this ->assign('userinfo',$userInfo);
        $this ->assign('info',$destinfo);
        $this ->display('destination/comment');
    }
    /*
     * 目的 地评论
     */
   public  function action_kindcomment(){
       $tags = Common::remove_xss($_POST['tags'])*1;
       for($i=0;$i<$tags;$i++){
           $j       =$i+1;
           $sql = "UPDATE `sline_destinations_tag` SET `click_num`=click_num+1 WHERE id=".$_POST['tag'.$j];
           DB::query(1,$sql)->execute();
       }
      $check = Common::session('check');
       $kindid = Common::remove_xss($_POST['kindid']);
       $typeid = Common::remove_xss($_POST['typeid']);
       $content = Common::remove_xss($_POST['content']);
       $level = Common::remove_xss($_POST['level']);
       $code = Common::remove_xss($_POST['code']);
       if(Common::session('check')!=$code){
           echo json_encode(array("status"=>112,'msg'=>'校验码错误，请重新打开页面'));
           exit;
       }

     //  Common::session('check',null);
       $time =time();
       //用户信息
       $userInfo = Product::get_login_user_info();
//       if(empty($userInfo)){
//           echo json_encode(array("status"=>112,'msg'=>'用户名错误'));
//           exit;
//       }
       $memberid = $userInfo['mid'];
       //  这里还没有验证
       $model  = ORM::factory('comment');
       $model ->typeid   =$typeid;
       $model ->kindid   =$kindid;
       $model ->memberid =$memberid;
       $model ->content  =$content;
       $model ->isshow   =1;
       $model ->addtime  =$time;
       $model ->level    =$level;

       $flag = $model ->save();
       if($flag){
           echo json_encode(array("status"=>111));// $tags;
           exit;
       }

   }


    /*
      *   ajax 获取 评论
      *
      */
    public  function action_ajax_get_comment(){
        // 目的地 id
        $kindid      = Common::remove_xss(Arr::get($_POST,'kindid'));
        // 模型 id
        $typeid       = Common::remove_xss(Arr::get($_POST,'typeid'));

        $offset       = Common::remove_xss(Arr::get($_POST,'offset'));
        $pagesize     = Common::remove_xss(Arr::get($_POST,'pagesize'));
        $sql  = "select * FROM `sline_comment` where kindid=$kindid and typeid=$typeid  ";
        // $sql .= " and isshow =1 ";
        $sql .= " ORDER BY addtime desc ";
        $sql .= " limit {$offset},{$pagesize}";

        $arr  = DB::query(1,$sql)->execute()->as_array();
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;
        //  对、于 相片 有三种 一种是 会员 网上上 一种是微信 用户的头像  还有一种是 默认图片
        // 昵称是同样的道理
        foreach($arr as $k=>&$v){

            $userinfo = ORM::factory('member',$v['memberid'])->as_array();
            $v['userlitpic'] = $userinfo['litpic'];
            $v['nickname']   = $userinfo['nickname'];
            if(preg_match('/^1[34578]{1}\d{9}$/',$v['nickname'])){
                $v['nickname'] ='1***'.substr($v['nickname'],7,4);
            }
            $v['addtime']    = date("Y-m-d H:i:s",$v['addtime']);
            $v['totalpage']  = ceil($totalNum*1/$pagesize);

        }

        echo json_encode($arr);exit;



    }




}