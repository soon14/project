<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Notes extends Stourweb_Controller{



    private  $_typeid = 101;

    private  $_cache_key = '';

    private  $admin ;
    public function before()

    {

        parent::before();

        //检查缓存

        $this->_cache_key = Common::get_current_url();

        $this->admin  =  Common::remove_xss($_GET["admin"]);

        $genpage = Common::remove_xss(Arr::get($_GET,'genpage'));

        if(!empty($html) && empty($genpage))

        {

            echo $html;

            exit;

        }

        $this->assign('typeid',$this->_typeid);



    }

    //首页

    public function action_index()

    {



        $seoinfo = Model_Nav::get_channel_seo($this->_typeid);

        $this->assign('seoinfo', $seoinfo);



        //游记数量

        $total = Model_Notes::get_total_notes();

        $this->assign('total_notes',$total);

        //首页模板

        $templet = Product::get_use_templet('notes_index');

        $templet = $templet ? $templet : 'notes/index';

        $this->display($templet);




    }



    //显示游记

    public function action_show()

    {

        $noteid = Common::remove_xss($this->request->param('id'));
        $model = Common::remove_xss($_GET['model']);


        //子站内容显示
        if(isset($_GET[webid])){
            $GLOBALS['sys_webid'] = Common::remove_xss(Arr::get($_GET,'webid'));
        }
        $row = ORM::factory('notes',$noteid)->as_array();
        // 获取 评论量 101 ￥typeid
        $row['commentnum'] = Model_Comment::get_comment_num($row['id'], '101');
        $row['mdd']        =  Model_Article::get_mdds($row['finaldestid']);//最终目的地
        //获取 游记目录 表信息
      //  $note_list         = Model_Notes::get_list($row['id']);

        //获取 游记目录 表信息

        $note_list_A2  = Model_Notes::get_list_A2($row['id']);

        //获取除了 A2 的信息

        $note_list     = Model_Notes::get_list($row['id']);

        $note_list     =array_merge($note_list_A2,$note_list);

        $row['tuceNum']  =   Model_Notes::get_note_tuce($row['id']);
        //  是否 喜欢
        $memberId  = Cookie::get('st_userid');
        if($memberId) {
            $row['islike'] = Model_Article::islike($noteid, $memberId , '101');
        }

        //阅读量的  修改
        Product::update_click_rate($noteid, 101);
        if(count($row) <= 0)
        {
            Common::head404();
        }
        // 获取 对应游记的 会员信息
        $member = ORM::factory('member',$row['memberid'])->as_array();
        $is_phone =   preg_match('/^1([0-9]{9})/',$member['nickname']);
        if($is_phone){
            $member['nickname']  = substr($member['nickname'],0,3)."****".substr($member['nickname'],7,11);
        }
        $this->assign("model",$model);
        $this->assign("member",$member);
        $this->assign("notelist",$note_list);
        $this->assign('info',$row);
        if($this->admin=='feng'){

        }else{
            //$this->display('notes/travels-show');
            $this->display('notes/travel-page');
        }


    }

    /**
     * 搜索列表页  fengjishu  07.27 (河北攻略)
     */
    public function action_search_list()
    {

        $info  =array();
        $info['mdd']     =  Common::remove_xss($_GET["mdd"]);// 目的的id
        $info['day']     =  Common::remove_xss($_GET["day"]);//出行天数
        $info['way']     =  Common::remove_xss($_GET["way"]);//时间属性  id
        $keyword         =  Common::remove_xss($_GET['keyword']);//关键词

         // 出行天数
        $days   = array(1=>'1天',2=>'2天',3=>'3天',4=>'4~7天',5=>'7天以上');
        $ways   = array(1=>'跟团',2=>'自驾',3=>'自由行');
        $property          = array();
        $property['mdd']   =   isset($info['mdd'])&&!empty($info['mdd']) ? ORM::factory('destinations')->where("id='$info[mdd]'")->find()->get('kindname') : '目的地';
        $property['day'] =   isset($info['day'])&&!empty($info['day'])   ? $days[$info['day']] : '出行天数';
        $property['way']  =   isset($info['way'])&&!empty($info['way'])  ? $ways[$info['way']] : '出行方式';

        //获取文章属性 组 $article_attr[0]时间属性 1 为主题属性 2 距离属性
        $this ->assign("property",$property);
        $this ->assign('keyword',$keyword);
        $this -> assign('info',$info);
        if($this->admin=='feng'){

             //  用于 调试

        }else{
            $this -> display('notes/travel-list0');
        }


    }
    /**
     * 搜索页
     */
    public function action_search_2()
    {
        //获取目的地
        $des           = Model_Article::get_des1(12);
        // 出行天数
        $days   = array(1=>'1天',2=>'2天',3=>'3天',4=>'4~7天',5=>'7天以上');

        $ways   = array(1=>'跟团',2=>'自驾',3=>'自由行');

        $this -> assign('days',$days);
        $this -> assign('ways',$ways);
        $this -> assign('des',$des);
        $this->display('notes/search');
    }

    /*
     *  增加主目录
     */
    public  function action_ajax_cookie()
    {

        $userInfo = Product::get_login_user_info();

        $main_id = Common::remove_xss(Arr::get($_GET, 'main_id'));

        $ajax_noteid = Common::remove_xss(Arr::get($_GET, 'ajax_noteid'));

        $dis = str_replace("A", "", $main_id);

        $dis = $dis * 1 - 1;//用于 章节 排序
        if ($ajax_noteid == '-1') {

        $m = ORM::factory('notes');

        $m->memberid = $userInfo['mid'];

        $m->save();

        $notes_id = $m->reload();
        $dis = Model_Notes::insert_main_lu($notes_id, $main_id, $dis,$userInfo['mid']);
        //写入 session  用于刷新页面的
        Common::session("noteid",$notes_id);
            $data=array();
            $data=array('note'=>"$notes_id",'pid'=>$dis);

        echo json_encode($data);
        exit;
        }else{
            $note  =Common::session('noteid');

            $dis = Model_Notes::insert_main_lu($note, $main_id, $dis,$userInfo['mid']);

            echo json_encode(array('noteid'=>$ajax_noteid,'pid'=>$dis));exit;
        }

    }
    /*
 *  增加子目录
 */
    public  function action_ajax_zid(){

        $userInfo = Product::get_login_user_info();

        $child_id = Common::remove_xss(Arr::get($_GET, 'child_id'));

        $ajax_noteid = Common::remove_xss(Arr::get($_GET, 'ajax_noteid'));

        $parentid    = Common::remove_xss(Arr::get($_GET, 'parentid'));

        //$dis     =str_replace("A","",$child_id);

        $dis     = explode("-",$child_id);

        $disorder = $dis[1];
        if($ajax_noteid=='-1'){
            $m = ORM::factory('notes');

            $m ->memberid =$userInfo['mid'];

            $m->save();

            $notes_id  = $m->reload();

            $dis =  Model_Notes::insert_zi_lu($notes_id,$child_id,$disorder,$dis[0],$userInfo['mid'],$parentid);
            Common::session("noteid",$notes_id);
            echo  $notes_id;exit;
        }else{

            $note  =Common::session('noteid');
            $dis =  Model_Notes::insert_zi_lu($note,$child_id,$disorder,$dis[0],$userInfo['mid'],$parentid);

            echo $ajax_noteid;exit;
        }





    }
    /*
     *  删除 主目录
     */
    public  function action_ajax_del_cookie(){

        $userInfo = Product::get_login_user_info();

        $delid = Common::remove_xss(Arr::get($_GET, 'del'));

        $noteid = Common::remove_xss(Arr::get($_GET, 'noteid'));

        $re =Model_Notes::del_mainlu($noteid,$delid);
        echo  $re;


    }
    /*
     *  删除 子目录
     */
    public  function action_ajax_del_zimulu(){

        $userInfo = Product::get_login_user_info();

        $delid = Common::remove_xss(Arr::get($_GET, 'del'));

        $noteid = Common::remove_xss(Arr::get($_GET, 'noteid'));

        $re =Model_Notes::del_zimulu($userInfo['mid'],$noteid,$delid);

        echo  $re;


    }
    /**

     * 游记保存

     */

    public function action_ajax_save()

    {

        //会员信息

        $userInfo = Product::get_login_user_info();

        //要求写游记必须登陆

        if(empty($userInfo['mid']))

        {

            $this->request->redirect('/member/login/?redirecturl='.urlencode(Common::get_current_url()));

        }

        $frmCode = Common::remove_xss(Arr::get($_POST,'frmcode'));

        $title = Common::remove_xss(Arr::get($_GET,'title'));

        $description = Common::remove_xss(Arr::get($_POST,'description'));

        $content = Common::remove_xss(Arr::get($_POST,'content'));

        $banner = Common::remove_xss(Arr::get($_POST,'banner'));

        $cover = Common::remove_xss(Arr::get($_GET,'cover'));

        $noteid = intval(Arr::get($_GET,'noteid'));
        //===========
        $ajax_noteid   = Common::remove_xss(Arr::get($_GET,'ajax_noteid'));

        //===========================
        //fengjishu 08.22
        $travel_mdd     = Common::remove_xss(Arr::get($_POST,'travel_mdd'));
        $travel_date    = Common::remove_xss(Arr::get($_POST,'travel_date'));
        $travel_day     = Common::remove_xss(Arr::get($_POST,'travel_day'));
        $travel_consume = Common::remove_xss(Arr::get($_POST,'travel_con'));
        $travel_way     = Common::remove_xss(Arr::get($_POST,'travel_way'));
        $travel_men     = Common::remove_xss(Arr::get($_POST,'travel_men'));
        $title_s        = Common::remove_xss(Arr::get($_POST,'A2'));
        $z_content      = Common::remove_xss(Arr::get($_POST,'A2_con'));
        $draft          = Common::remove_xss(Arr::get($_GET,'draft'));
        //===========================
        //安全校验码验证

        $orgCode = Common::session('code');

//        if($orgCode!=$frmCode)
//
//        {
//
//            exit('frmcode error');
//
//        }

        if(!empty($noteid))

        {
            //echo $noteid;exit;
            $m = ORM::factory('notes',$noteid);

        }

        else

        {   //echo $ajax_noteid;exit;
            if($ajax_noteid=='-1'){
                $m = ORM::factory('notes');

            }else{
                $m = ORM::factory('notes',$ajax_noteid);
            }
        }

        $m->title = $title;

        $m->memberid = $userInfo['mid'];

        // $m->bannerpic = $banner;

        $m->litpic = $cover;

        //$m->description = $description;

        //$m->content = $content;

        $m->modtime = time();


        //===========fengjishu 08.22
        $m->finaldestid   =$travel_mdd;
        $m->travel_date   =$travel_date;
        $m->travel_consume=$travel_consume;
        $m->travel_day    =$travel_day;
        $m->travel_way    =$travel_way;
        $m->travel_men    =$travel_men;


        if($draft==1){
            $m->is_dra   =$draft;
        }else{
            $m->is_dra   =0;
        }

        //===========fengjishu08.22

        $status = 0;

        $m->save();

        if($m->saved())

        {

            $status = 1;

            if(empty($noteid))

            {


                $m->reload();

                $noteid = $m->id;

                $first   = array('title'=>$title_s,'con'=>$z_content,'noteid'=>$noteid,'mid'=>$userInfo['mid']) ;

                //插入第一章 的内容

                $first_muluid= Model_Notes::insert_mian_first($first);

                //更新  子目录 和 新增的目录】

                Model_Notes::update_mulu($_POST,$_GET,$first_muluid,$noteid);


            }

        }
        echo json_encode(array('status'=>$status,'noteid'=>$noteid));

        exit();
    }
    /*
     * fengjishu
     * 08.27  用于 章节内容的存储
     */
    public  function  action_ajax_save_zjcon(){
        echo 1;exit;
    }


    public function action_ajax_get_new_notes()

    {

        $currentpage = intval(Arr::get($_GET,'curr'));//当前页

        $pagesize = 6;//每次显示条数需要与js端设置一至

        $offset = ($currentpage-1) * $pagesize;

        $list = Model_Notes::get_new_notes($offset,$pagesize);

        foreach($list as &$row)

        {

            $row['pubdate'] = Common::mydate('Y-m-d H:i',$row['modtime']);

        }

        echo json_encode(array('list'=>$list));

        exit;



    }



    /**

     * 上传图片

     */

    public function action_ajax_upload_picture()

    {

        //if(!$this->request->is_ajax())exit;

        $filedata = Arr::get($_FILES,'filedata');

        $storepath = UPLOADPATH.'/notes/';

        if(!file_exists($storepath))

        {

            mkdir($storepath);

        }

        $filename = uniqid();

        $out = array();

        if(move_uploaded_file($filedata['tmp_name'], $storepath.$filename.$filedata['name']))

        {

            $out['status'] = 1;

            $out['litpic'] = '/uploads/notes/'.$filename.$filedata['name'];

        }

        echo json_encode($out);

    }

















}