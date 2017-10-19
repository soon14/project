<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Article extends Stourweb_Controller{
    /*
     * 攻略总控制器
     * */

    private $typeid = 4;
    private $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get',$this->_cache_key);
        $genpage = Common::remove_xss(Arr::get($_GET,'genpage'));
        if(!empty($html) && empty($genpage))
        {
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
        //===========================
      header("Content-type:text/html;charset=utf-8");
        $admin  = Common::remove_xss(Arr::get($_GET,'feng'));
        //获取  攻略目的目的 地
        $kindlist  = Model_Article::get_opendes($this->typeid);

        $re        = Model_Article::get_ar_attrid();

        //fengjishu  06.24
        $Hb_Travels      = Model_Article::get_hbTravels("16"); //河北游记  fuzhaosa admin id =5
        $no_see_spot     = Model_Article::get_hbTravels("17"); // 没有见过的风景  zhangxiaofei id= 3
        $run_spot_raider = Model_Article::get_hbTravels("18"); // 逃票攻略
        $selfDriving     = Model_Article::get_hbTravels("19"); // 自驾回顾
        $all_raiders     = Model_Article::get_hbTravels("37"); // 河北全攻略
        $hotSearch       = Model_Article::get_hot_article();
        $ad_article      = Model_Article::article_ad_index();//  推荐的  攻略

        //  获取 精华 攻略  20170405 修改为推荐的内容
       // $jing_hua     =  Model_Article:: get_article_jinghua(0,10);
        $jing_hua     =  Model_Article:: article_ad_index(3,10);

        // var_dump($ad_article);exit;

        $hotRaiders = Model_Article::get_hot_article(10);

        $this->assign("hotRaiders",$hotRaiders);
        $this->assign("ad_articlie",$ad_article);
        $this->assign("jing_hua",$jing_hua);
        $this->assign("all_raiders",$all_raiders);
        $this->assign("hotSearch",$hotSearch);
        $this->assign("Hb_Travels",$Hb_Travels );
        $this->assign("no_see_spot",$no_see_spot);
        $this->assign("run_spot_raider",$run_spot_raider);
        $this->assign("selfDriving",$selfDriving);
        //========================================================

        $this ->assign('kindlist',$kindlist);
        $this ->assign('arattrid',$re);
         //fengjishuv  06.24
        //===========================
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $this->assign('seoinfo', $seoinfo);
        $templet = Product::get_use_templet('article_index');
      //  if($admin=='feng'){
            $templet = $templet ? $templet : 'article/Trategy-index';
//        }else{
//            $templet = $templet ? $templet : 'article/index';
//
//        }


        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }
    //详细页
    public function action_show()
    {
        $aid = Common::remove_xss($this->request->param('aid'));
        $info = Model_Article::detail_aid($aid);
        //seo
        $seoInfo = Product::seo($info);
        //==================fengjishu 06.25 start
         //获得头像
        $info['authorhead']    = Model_Article::get_author($info['author']);

       // $info['authorhead']    =!empty($info['authorhead'])?$info['authorhead'][0]:$info['litpic'];
        //获取 作者写过总游记数
        $info['all_article']   = Model_Article::get_author_all_article($info['author']);

        $info['author_lv']     = Model_Article::get_author_Lv($info['all_article']);
        //===================fengjishu 06.25 end
        //属性列表

        $info['attrlist']      = Model_Article::attr($info['attrid']);
        //点评数
        $info['commentnum']    = Model_Comment::get_comment_num($info['id'], $this->typeid);
        //产品图标

        $info['iconlist']      = Product::get_ico_list($info['iconlist']);
        //上一条,下一条
        $info['prev'] = Model_Article::get_prev_next('prev',$info['id']);
        $info['next'] = Model_Article::get_prev_next('next',$info['id']);
        //==============
        $info['attrids'] = explode(',',$info['attrid']);

        //============
        //exit;
        //目的地上级
        if($info['finaldestid']>0)
        {
            $predest = Product::get_predest($info['finaldestid']);
            $this->assign('predest',$predest);
            $this->assign('destid',$info['finaldestid']);
        }
        //用户信息
        $userInfo = Product::get_login_user_info();
        $page     = Common::remove_xss($_GET['page'])*1;
        if(!$page){
            $page =1;
        }
        //====================fengjishu 06.17 hotRaiders start

        $all_raiders     = Model_Article::get_hbTravels("37");// 河北全攻略
        $this->assign("hotRaiders",$all_raiders);
        $recent_activities =Model_Article::get_recent_activities();//近期活动
        $this ->assign("recent_activities",$recent_activities);
        //===========================06.17 end
        //$info['page']   =  $page;
        $info['row']    = 5;// 每页显示的 评论数
        $info['offset'] = ($page-1)*$info['row'];
        //扩展字段信息
        $extend_info = Model_Article::extend($info['id']);
        //=================09.07 feng start
        $mulu   = Model_Article::get_setfenji($info['id']);
        //  是否 喜欢  10.11
        $memberId  = Cookie::get('st_userid');
        if($memberId) {
            $info['islike'] = Model_Article::islike($info['aid'], $memberId , '4');
        }
        $info['allraider']  = Model_Article::get_allraider();
        Product::update_click_rate($info['aid'], $this->typeid);
        $this->assign('mulu',$mulu);
        //=================09.07 feng end
        $this->assign('page', $page);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->assign('userinfo',$userInfo);
        $this->assign('extendinfo',$extend_info[0]);
        $templet = Product::get_use_templet('article_show');


        if(in_array('37',$info['attrids'])){//.37 攻略属性 河北攻略
           // $templet = $templet ? $templet : 'article/show1';
            $templet = $templet ? $templet : 'article/Trategy-show';
        }else{
            $templet = $templet ? $templet : 'article/show';
        }
        
        $this->display($templet);

        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);

    }



    //列表页
    public function action_list()
    {
        //参数值获取
        $destPy = $this->request->param('destpy');
        $sign = $this->request->param('sign');
        $attrId = $this->request->param('attrid');
        $sorttype = $this->request->param('sorttype');
        $p = intval($this->request->param('p'));
        $admin  = Common::remove_xss(Arr::get($_GET,'feng'));

        $attrId = !empty($attrId) ? $attrId : 0;

        $sorttype = !empty($sorttype) ? $sorttype : 0;

        $destPy = $destPy ? $destPy : 'all';
        $pagesize = 10;
        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));


        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'attrid' => $attrId,
            'sorttype' =>$sorttype,
            'p' =>$p
        );

        //$start_time=microtime(true); //获取程序开始执行的时间

        $out = Model_Article::search_result($route_array,$keyword,$p,$pagesize);
        $pager = Pagination::factory(
            array(
                'current_page'      => array('source' => 'route', 'key' => 'p'),
                //'current_page'      => array('source' => 'query_string', 'key' => 'p'),
                'view'              =>'default/pagination/search1',
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
        $chooseitem = Model_Article::get_selected_item($route_array);
        $searchTitle = Model_Article::gen_seotitle($route_array);

        
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $this->assign('seoinfo', $seoinfo);
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
        $templet = Product::get_use_templet('article_list');
        //  if($admin=='feng'){
        $templet = $templet ? $templet : 'article/Trategy-list';

//        }else{
        //        $templet = $templet ? $templet : 'article/list';
//        }

        $this->display($templet);
//        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }
    //喜欢就点一下  fengjishu  06.12
    //喜欢就点一下  fengjishu  06.12
    public function  action_ajax_add_like(){

        $userInfo = Product::get_login_user_info();

        $likeNum = Common::remove_xss($_POST['l_num']);//  喜欢的 里面的值

        $arId    = Common::remove_xss($_POST['arId']);//  文章的id 或者是 游记id

        $typeid  = Common::remove_xss($_POST['typeid']);// 获取 模型

        switch($typeid){
            case '4'   : $com ='`articleid`';$com_biao="`sline_article`";$update=" aid=$arId";break;
            case '101' : $com ="`noteid`";$com_biao="`sline_notes`";$update=" id=$arId";;break;
        }

        $time  =time();

        if($userInfo['mid']){

            $sql2  = "select COUNT(".$com.") as isid from `sline_like_notes` where mid='$userInfo[mid]' and ".$com." ='$arId' ";
            $re    =DB::query(1, $sql2)->execute()->as_array();

            // 根据 like_notes表的  isid 的数量 判断是否 曾经已经喜欢过
            if($re[0]['isid']==0){

                $likeNum = $likeNum*1+1;

                $sql ="UPDATE ".$com_biao." SET `likeNum`=$likeNum WHERE ".$update;

                DB::query(1, $sql)->execute()->as_array();

                $sql1 = "insert into `sline_like_notes` (".$com.",`mid`,`like_time`) value ('$arId','$userInfo[mid]','$time')";

                DB::query(1, $sql1)->execute()->as_array();

                echo json_encode(array("msg"=>"添加成功",'status'=>1,'likenum'=>$likeNum));exit;
            }else{
                $likeNum = $likeNum*1-1;

                $sql ="UPDATE ".$com_biao." SET `likeNum`=$likeNum WHERE ".$update;;

                DB::query(1, $sql)->execute()->as_array();

                $sql  ="DELETE FROM `sline_like_notes` WHERE mid='$userInfo[mid]' and ".$com." ='$arId'";

                DB::query(1, $sql)->execute();

                echo json_encode(array("msg"=>"取消成功",'status'=>0,'likenum'=>$likeNum));exit;
            }


        }else{

            $likeNum = $likeNum*1+1;

            $sql ="UPDATE ".$com_biao." SET `likeNum`=$likeNum WHERE id=$arId";

            DB::query(1, $sql)->execute()->as_array();

            echo json_encode(array("msg"=>"非常感谢您的支持",'status'=>'1','likenum'=>$likeNum));exit;
        }

    }
    public function action_ajax_add_comment()
    {

        if(!$this->request->is_ajax())exit();
        //$checkcode = Common::remove_xss(Arr::get($_POST,'checkcode'));06.08 fengjishu 隐藏
        $articleid = Common::remove_xss(Arr::get($_POST,'articleid'));

        $content = Common::remove_xss(Arr::get($_POST,'content'));
        $typeid = Common::remove_xss(Arr::get($_POST,'typeid'));
        $dockid = Common::remove_xss(Arr::get($_POST,'dockid'));
        //$nickname = Common::remove_xss(Arr::get($_POST,'nickname'));
        //验证码 06.08 fengjishu 隐藏
//        $checkcode=strtolower($checkcode);
//        if(!Captcha::valid($checkcode))
//        {
//            echo 1; //验证码错误
//            exit;
//        }
        $memberId = Cookie::get('st_userid') ?  Cookie::get('st_userid') :  '0';
        $m = ORM::factory('comment');
        $m->articleid = $articleid;
        $m->content = $content;
        $m->typeid = $typeid;
        $m->memberid = $memberId;
        $m->dockid = $dockid;
        $m->addtime = time();
        $m->isshow  =1;
        $m->save();
        if($m->saved())
        {
            echo 3;
            exit;
        }
    }

  /*
   *   ajax 获取 评论
   *
   */
    public  function action_ajax_get_comment(){
        // 攻略 id
        $articled     = Common::remove_xss(Arr::get($_POST,'articled'));
        // 模型 id
        $typeid       = Common::remove_xss(Arr::get($_POST,'typeid'));

        $offset       = Common::remove_xss(Arr::get($_POST,'offset'));
        $pagesize     = Common::remove_xss(Arr::get($_POST,'pagesize'));
        $sql  = "select * FROM `sline_comment` where articleid=$articled and typeid=$typeid  ";
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