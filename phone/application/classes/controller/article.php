<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Hotel
 * @desc 酒店总控制器
 */
class Controller_Article extends Stourweb_Controller
{
    private $_typeid = 4;   //产品类型

    public function before()
    {
        parent::before();

        $channelname = Model_Nav::get_channel_name($this->_typeid);
        $this->assign('typeid',$this->_typeid);
        $this->assign('channelname',$channelname);
    }

    /**
     * 酒店首页
     */
    public function action_index()
    {
         $seoinfo = Model_Nav::get_channel_seo($this->_typeid);
         $this->assign('seoinfo',$seoinfo);
         $this->display('article/index');
    }
    /**
     * 详细页
     */
    public function action_show()
    {

        $aid = Common::remove_xss($this->request->param('aid'));
        $model = Common::remove_xss($_GET['model']);

        $admin  =Common::remove_xss(Arr::get($_GET,'admin'));
        //子站内容显示
        if(isset($_GET[webid])){
            $GLOBALS['sys_webid'] = Common::remove_xss(Arr::get($_GET,'webid'));
        }
        $row = Model_Article::get_article_details($GLOBALS['sys_webid'], $aid);

        //点击率加一
        Product::update_click_rate($aid, $this->_typeid);
        if(count($row) <= 0)
        {
            Common::head404();
        }


        $row = Model_Article::get_article_attachinfo($row);

        $row = $row[0];
        $row['id']=ORM::factory('article')->where("aid={$aid} AND webid='$GLOBALS[sys_webid]'")->find()->get('id');
        $seoinfo = Product::seo($row);
        //=================

        //获得头像  fengjishu 07.29
        $row['authorhead']    = Model_Article::get_author($row['author']);

        //  是否 喜欢
        $memberId  = Cookie::get('st_userid');
        if($memberId) {
            $row['islike'] = Model_Article::islike($row['aid'], $memberId , '4');

        }
        //=================
        //扩展字段信息09.12
        $extend_info = Model_Article::extend($row['id']);
        //==获取mulu 表信息
        $mulu   = Model_Article::get_setfenji($row['id']);
        foreach($mulu as &$v){
              $v['content'] =str_ireplace("<img src","<img src='' class='img' laz_src",$v['content']);
             if(!empty($v['child'])){
                 foreach($v['child'] as &$kid){
                     $kid['content'] = str_ireplace("<img src","<img src='' class='img' laz_src",$kid['content']);
                 }
             }
        }
        //var_dump($mulu);exit;
        $this->assign('mulu',$mulu);

        $this->assign("model",$model);
       // $this->assign("code",$code);
        $this->assign('seoinfo',$seoinfo);
        $this->assign('info',$row);
        $this->assign('extinfo',$extend_info[0]);
      //  $this->display('article/strategy-show');

        if($model=='2'||$model=='3'||$model=='4'){
            $this->display('article/show');
        }else{
         //   if($admin =='feng'){

                $this->display('article/travel-page');
//            }
//            else{
//                $this->display('article/strategy-show');
//            }

        }
////        if($aid=='138'){
////            $this->display('article/strategy-show');
////        }elseif($aid=='157'){
////            $this->display('article/strategy-show');
////        }
////        else{
//            $this->display('article/show');
//       // }

        //
    }

    /**
     * 搜索结果
     */
    public function action_list()
    {
        //参数处理
        $paras = explode('-', Common::remove_xss($this->request->param('params')));

        $dest = $paras[0];
        $sorttype = empty($paras[1]) ? "0" : $paras[1];
        $attrid = empty($paras[2]) ? "0" : $paras[2];
        $attrid = $attrid=='0'&&$_GET['attrid'] ?  $_GET['attrid'] :$attrid;
        $keyword = Common::remove_xss($_GET["keyword"]);
        //=================新加 05.30
        $model      = Common::remove_xss($_GET['model']);
        if(empty($model)){
            $model   = 2;
            $attrid  = ORM::factory('article_attr')->where("attrname='你没见过的风景' and isopen=1")->find()->get('id');
        }
        $tl   = Model_Article::get_article_attr_liunian();//pid ==15 前提
        //=================
        $destinfo = Model_Destinations::get_dest_bypinyin($dest);
        $destId = empty($destinfo["id"]) ? "0" : $destinfo["id"];
        $destname =$dest!='all' ? ORM::factory('destinations')->where("pinyin='$dest'")->find()->get('kindname') : '目的地';

        $page = Common::remove_xss(intval(Arr::get($_GET, 'page')));
        $page = $page < 1 ? 1 : $page;
        //获取seo信息
        $seo = Model_Destinations::search_seo($dest, $this->_typeid);
        $this ->assign("model",$model);
        $this ->assign("tl",$tl);
        $this->assign('seoinfo', $seo);
        $this->assign('destid', $destId);
        $this->assign('destname',$destname);
        $this->assign('sorttype', $sorttype);
        $this->assign('attrid', $attrid);
        $this->assign('keyword', $keyword);
        $this->assign('page', $page);
        $this->display('article/list');
    }

    /**
     * 搜索列表页  fengjishu  07.27 (河北攻略)
     */
    public function action_search_list()
    {
        $admin  =  Common::remove_xss($_GET["admin"]);
        $info  =array();
        $info['mdd']     =  Common::remove_xss($_GET["mdd"]);// 目的的id
        $info['theme']   =  Common::remove_xss($_GET["theme"]);//主题属性 id
        $info['time']    =  Common::remove_xss($_GET["time"]);//时间属性  id
        $info['address'] =  Common::remove_xss($_GET["address"]);// 地址属性 id
        $keyword         =  Common::remove_xss($_GET['keyword']);//关键词

        //
        $property          = array();
        $property['mdd']   =   isset($info['mdd'])&&!empty($info['mdd'])     ? ORM::factory('destinations')->where("id='$info[mdd]'")->find()->get('kindname') : '目的地';
        $property['theme'] =   isset($info['theme'])&&!empty($info['theme']) ? ORM::factory('article_attr')->where("id='$info[theme]'")->find()->get('attrname') : '主题';
        $property['time'] =   isset($info['time'])&&!empty($info['time'])    ? ORM::factory('article_attr')->where("id=".$info['time'])->find()->get('attrname') : '时间';
        $property['address'] =   isset($info['address'])&&!empty($info['address']) ? ORM::factory('article_attr')->where("id='$info[address]'")->find()->get('attrname') : '距离';

        //获取目的地
        $des           = Model_Article::get_des1(10);
        // 获取属性
        $article_attr  = Model_Article::get_attr();

        $this -> assign('attrs',$article_attr);
        $this -> assign('des',$des);

        //获取文章属性 组 $article_attr[0]时间属性 1 为主题属性 2 距离属性
        $this ->assign("property",$property);
        $this ->assign('keyword',$keyword);
        $this -> assign('info',$info);

       // if($admin =='feng'){
            $this -> display('article/travel-list0');
//        }else{
//            $this -> display('article/seach-list');
//        }

    }
    /**
     * 搜索页
     */
    public function action_search_2()
    {
        //获取目的地
        $des           = Model_Article::get_des1(12);
       // 获取属性
        $article_attr  = Model_Article::get_attr();

        $this -> assign('attrs',$article_attr);
        $this -> assign('des',$des);
        $this->display('article/search');
    }

    /**
     * @return string|void
     */
    public function action_ajax_article_order()
    {
        if(!$this->request->is_ajax())return '';
        $offset =  Common::remove_xss(Arr::get($_GET,'offset'));
        $count =  Common::remove_xss(Arr::get($_GET,'count'));
        $havepic =  Common::remove_xss(Arr::get($_GET,'havepic'));

        $rows = Model_Article::get_article_order($offset, $count, $havepic);
        if(count($rows) <= 0)
        {
            echo json_encode(false);
            return;
        }
        $rows = Model_Article::get_article_attachinfo($rows);

        foreach($rows as &$row)
        {
            $row['litpic'] = Common::img($row['litpic'],616,611);
            $row['summary'] = Common::cutstr_html($row['summary'], 100);
        }

        echo json_encode(array('list'=>$rows));
    }
    /*
     *    评论 封冀蜀
     * */
    public function action_ajax_comment()
    {    $model            = new Model_Nav();
         $con       = $_POST['content'];
         $articleid = $_POST['article'];
         $aid       = $_POST['aid'];
         $code      = $_POST['code'];
        $typeid     = $_POST['typeid'];
        if($code) {
            $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxdf8497303505ae0d&secret=ed95f4a2529b5b39f886e3df0e0511bd&code=$code&grant_type=authorization_code";

            $arr = Model_Article::curl($url_getToken);

            if(isset($arr['errcode'])){
               echo 40029;exit;
            }else{
                $access_token   = $arr['access_token'];
                $openid         = $arr['openid'];
                $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
                $userinfo        = Model_Article::curl($url_getuserinfo);

            }

        }

        $memberId  = Cookie::get('st_userid') ?  Cookie::get('st_userid') :  '0';
         $sql       ="SELECT max(floorid) as floorid FROM `sline_comment` where articleid='$articleid'";
         $floorid    =  $model ->get_sql($sql,1);// $floorid     = ORM::factory('comment')->where("articleid='$articleid'")->find(max(floorid))->get();
         $floorid[0]['floorid'];

        if($floorid[0]['floorid']==0){
            $floorid=1;
        }else{
            $floorid=$floorid[0]['floorid']*1+1;
        }

        $m          = ORM::factory('comment');
        $m->articleid = $articleid;//文章、或游记id
        $m->content   = $con;
        $m->typeid    = $typeid;
        $m->memberid  = $memberId;
        $m->floorid   =$floorid;
        $m->openid    =$userinfo['openid'];//;$openid;
        $m->wx_imgurl =$userinfo['headimgurl'];
        $m->wx_nickname =$userinfo['nickname'];
        $m->isshow    =1;
       // $m->dockid    = $dockid;
        $m->addtime   = time();
        $m->save();
        // $time= date('Y-m-d H:i:s',$time);
        if($m->saved())
        {
            echo 3;
            exit;
        }
    }
    /*
    *    评论  加载更多 封冀蜀
    * */
    public function action_ajax_comment_more()
    {   $pagesize =5;
        $aid  = Common::remove_xss(Arr::get($_GET, 'aid'));
        $page = Common::remove_xss(Arr::get($_GET, 'page'));
        $typeid = Common::remove_xss(Arr::get($_GET, 'typeid'));
        $offset =(intval($page) - 1) * $pagesize;
        $rows = Model_Article::search_comment($aid,$offset,$pagesize,$typeid);
        //var_dump($rows);
        foreach($rows as $ke=>$v){
            $rows[$ke]["time"] =date("Y-m-d H:i",$v['addtime']);

            if(!empty($v['memberid'])) {

                $memberLitpic = ORM::factory('member')->where("mid={$v['memberid']}")->find()->get('litpic');
            }
            $rows[$ke]["litpic"] =empty($v['wx_imgurl']) ? !empty($memberLitpic) ? $memberLitpic : Common::member_nopic() : $v['wx_imgurl'];// !empty($v['wx_imgurl']) ? $v['wx_imgurl']: !empty($memberLitpic) ? $memberLitpic : Common::member_nopic()  ;

        }
        echo Product::list_search_comment($rows, $page,$pagesize);
    }
    /**
     * ajax请求 加载更多
     * @param string $pagesize
     * @return string|void
     */
    public function action_ajax_article_more($pagesize = '10')
    {
        if (!$this->request->is_ajax()) return '';
        $page = Common::remove_xss(Arr::get($_GET, 'page'));
        $offset = (intval($page) - 1) * $pagesize;
        $offset1 = intval($page) * $pagesize;
        $destid = Common::remove_xss(Arr::get($_GET, 'destid'));
        $sorttype = Common::remove_xss(Arr::get($_GET, 'sorttype'));
        $attrid = Common::remove_xss(Arr::get($_GET, 'attrid'));
        $keyword = Common::remove_xss(Arr::get($_GET, 'keyword'));
        $model   = Common::remove_xss(Arr::get($_GET, 'model'));
        if(trim($model)=='1'){
            $attr =array();
            $attr['day']  = Common::remove_xss(Arr::get($_GET, 'day'));// 出行天数
            $attr['way']  = Common::remove_xss(Arr::get($_GET, 'way'));// 出行方式
            $rows  =  Model_Article::search_notes($destid,  $keyword, $offset,$pagesize,  $sorttype,$attr);

        }else{
            $rows = Model_Article::search_article($destid, $attrid, $keyword, $offset, $pagesize, false, $sorttype);
            $rows1 = Model_Article::search_article1($destid, $attrid, $keyword, $offset1, $pagesize, false, $sorttype);

        }
         $cou   = count($rows1);//06.16 fengjishu主要用于 当数据库数据 和$pagesize相等的时候 出现的bug ;
        if (count($rows) <= 0)
        {
            echo json_encode(false);
            return;
        }
        if(trim($model)=='1'){
            $data =Model_Article::get_notes_attachinfo($rows);
        }else{
            $data = Model_Article::get_article_attachinfo($rows);
        }

        foreach ($data as &$v)
        {
           // $v['litpic'] = Common::img($v['litpic'],246,162);

            $v['month']  =date("m",$v['addtime']);
            $v['day']    =date("d",$v['addtime']);
            $v['year']   =date('Y',$v['addtime']);
            $v['time']   = date("m-d",$v['addtime']);
            $v['time_2']   = date("d/M.Y",$v['addtime']);
           // $v['piclist']  = Product::pic_list($v['piclist']);
            $v['newlitpic'] =$v['piclist'][1][0];
          //  $v['litpic'] = self::image_resize('http:://www.aitto.net/new_uploads/2017/0117/f0bd129711fafbb190458e6d83e247e6.jpg',rand(0,100).'222.jpg',649,220);
            $v['summary'] = Common::cutstr_html($v['summary'], 30);
        }
        if(trim($model)=='1'){
            echo Product::list_search_format1($data, $page,$pagesize);
        }else{
            echo Product::list_search_format($data, $page,$cou,$pagesize);
        }

    }
    public function image_resize($f, $t, $tw, $th){
      // 按指定大小生成缩略图，而且不变形，缩略图函数
        $temp = array(1=>'gif', 2=>'jpeg', 3=>'png');

        list($fw, $fh, $tmp) = getimagesize($f);

        if(!$temp[$tmp]){
            return 2222;
        }
        $tmp = $temp[$tmp];
        $infunc = "imagecreatefrom$tmp";
        $outfunc = "image$tmp";

        $fimg = $infunc($f);

        // 使缩略后的图片不变形，并且限制在 缩略图宽高范围内
        if($fw/$tw > $fh/$th){
            $th = $tw*($fh/$fw);
        }else{
            $tw = $th*($fw/$fh);
        }

        $timg = imagecreatetruecolor($tw, $th);
        imagecopyresampled($timg, $fimg, 0,0, 0,0, $tw,$th, $fw,$fh);
        if($outfunc($timg, $t)){
            return $t;
        }else{
            return false;
        }
    }
    //喜欢就点一下  fengjishu  06.12
    public function  action_ajax_add_like(){

        $userInfo = Product::get_login_user_info();

        $likeNum = Common::remove_xss($_POST['l_num']);//  喜欢的 里面的值

        $arId    = Common::remove_xss($_POST['arId']);//  文章的id 或者是 游记id

        $typeid  = Common::remove_xss($_POST['typeid']);// 获取 模型

        switch($typeid){
            case '4'   : $com ='`articleid`';$com_biao="`sline_article`";break;
            case '101' : $com ="`noteid`";$com_biao="`sline_notes`";break;
        }

        $time  =time();

        if($userInfo['mid']){

            $sql2  = "select COUNT(".$com.") as isid from `sline_like_notes` where mid='$userInfo[mid]' and ".$com." ='$arId' ";
            $re    =DB::query(1, $sql2)->execute()->as_array();

            // 根据 like_notes表的  isid 的数量 判断是否 曾经已经喜欢过
            if($re[0]['isid']==0){

                $likeNum = $likeNum*1+1;

                $sql ="UPDATE ".$com_biao." SET `likeNum`=$likeNum WHERE id=$arId";

                DB::query(1, $sql)->execute()->as_array();

                $sql1 = "insert into `sline_like_notes` (".$com.",`mid`,`like_time`) value ('$arId','$userInfo[mid]','$time')";

                DB::query(1, $sql1)->execute()->as_array();

                echo json_encode(array("msg"=>"收藏成功",'status'=>1,'likenum'=>$likeNum));exit;
            }else{
                $likeNum = $likeNum*1-1;

                $sql ="UPDATE ".$com_biao." SET `likeNum`=$likeNum WHERE id=$arId";

                DB::query(1, $sql)->execute()->as_array();

                $sql  ="DELETE FROM `sline_like_notes` WHERE mid='$userInfo[mid]' and ".$com." ='$arId'";

                DB::query(1, $sql)->execute();

                echo json_encode(array("msg"=>"取消收藏",'status'=>0,'likenum'=>$likeNum));exit;
            }


        }else{

            $likeNum = $likeNum*1+1;

            $sql ="UPDATE ".$com_biao." SET `likeNum`=$likeNum WHERE id=$arId";

            DB::query(1, $sql)->execute()->as_array();

            echo json_encode(array("msg"=>"非常感谢您的支持",'status'=>'1','likenum'=>$likeNum));exit;
        }

    }
}
