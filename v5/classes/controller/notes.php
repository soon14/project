<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Notes extends Stourweb_Controller{







    private  $_typeid = 101;



    private  $_cache_key = '';



    public   $admin;



    public function before()



    {



        parent::before();



        //检查缓存



        $this->_cache_key = Common::get_current_url();



        $html = Common::cache('get',$this->_cache_key);



        $genpage = Common::remove_xss(Arr::get($_GET,'genpage'));



        $this->admin  = Common::remove_xss(Arr::get($_GET,'feng'));



        if(!empty($html) && empty($genpage))



        {



            echo $html;



            exit;



        }



        $this->assign('typeid',$this->_typeid);



        $channelname = Model_Nav::get_channel_name($this->_typeid);



        $this->assign('channelname', $channelname);



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



        // if($this->admin  =='feng'){

        $templet = $templet ? $templet : 'notes/TravelNotes-index';

        //  }else{

        //     $templet = $templet ? $templet : 'notes/index';



        //  }





        $this->display($templet);





    }







    //显示游记



    public function action_show()



    {



        $noteid = intval(Common::remove_xss($this->request->param('id')));







        if(!empty($noteid))



        {



            $info = ORM::factory('notes',$noteid)->as_array();



            //未通过审核的游记



            if($info['status']!=1&&$info['status']!=0)



            {



                $msg = array(



                    'status'=>0,



                    'msg'=>'游记未通过审核,暂时不能浏览',



                    'jumpUrl'=>$this->request->referrer()



                );




                Common::message($msg);



                exit;



            }else{//fengjishu 加入判断



                //获取 游记目录 表信息



                $note_list_A2  = Model_Notes::get_list_A2($noteid);



                //获取除了 A2 的信息

                $note_list     = Model_Notes::get_list($noteid);

                $note_list     =array_merge($note_list_A2,$note_list);



                $this ->assign('notelist',$note_list);

            }

            //==================fengjishu 08.22

            //获取热门游记

            $hot_notes  =Model_Notes::get_hot_notes();

            $this ->assign("hot_notes",$hot_notes);

            $recent_activities =Model_Article::get_recent_activities();//近期活动

            $this ->assign("recent_activities",$recent_activities);



            //==================fengjishu 08.22



            $member = ORM::factory('member',$info['memberid'])->as_array();

            // 获取 作者 有几篇游记

            $info['noteNum']  =  Model_Notes::get_notenum($info['memberid']);

            // 获取作者等级

            $info['greate']   =  Model_Notes::get_author_greate($info['memberid']);

            //获取游记 总游记

            $info['allnotes'] =  Model_Notes::get_all_notesNum();

            // var_dump($member);exit;

            $is_phone =   preg_match('/^1([0-9]{9})/',$member['nickname']);

            if($is_phone){

                $member['nickname']  = substr($member['nickname'],0,3)."****".substr($member['nickname'],7,11);

            }

            //获得 mdd

            $info['mdd']  =ORM::factory('destinations',$info['finaldestid'])->as_array();

            $info['mdd']  =$info['mdd']['kindname'];

            // 判断是否收藏 该游记

            $memberId  = Cookie::get('st_userid');

            if($memberId) {

                $info['islike'] = Model_Article::islike($info['id'], $memberId , '101');

                // 获取登录页面的用户 信息

                $yemianuser = ORM::factory('member',$memberId)->as_array();

                //$this ->assign('user',$yemianuser[0]);
                $this ->assign('user',$yemianuser);


            }

            Product::update_click_rate($info['id'], $this->_typeid);


            $this->assign('info',$info);



            $this->assign('member',$member);



            //  $templet = Product::get_use_templet('notes_show');

//

            $templet = $templet ? $templet : 'notes/show';



            $this->display($templet);




            //缓存内容

            $content = $this->response->body();

            Common::cache('set',$this->_cache_key,$content);


        }







    }



    //列表页

    public function action_list()

    {

        //参数值获取

        $destPy = $this->request->param('destpy');// 出行 目的地

        $day = $this->request->param('day');//. 出行天数

        $way = $this->request->param('way');//  出行方式

        $p = intval($this->request->param('p'));

        $destPy = $destPy&&$destPy!='list'&&$destPy!='write'? $destPy : 'all';

        $day =   $day ? $day : 0;

        $way= $way ? $way : 0;

        $pagesize = 10;

        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action(),

            'destpy' => $destPy,

            'day' => $day,

            'way' => $way
        );

        $out = Model_Notes::search_result($route_array,$keyword,$p,$pagesize);

        $pager = Pagination::factory(

            array(

                'current_page'      => array('source' => 'route', 'key' => 'p'),

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

        $chooseitem = Model_Notes::get_selected_item($route_array);


        $seoinfo = Model_Nav::get_channel_seo($this->_typeid);



        $this->assign('seoinfo', $seoinfo);

        //$searchTitle = Model_Article::gen_seotitle($route_array);
        //===================fengjishu 06.17 hotRaiders

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

        //$templet = Product::get_use_templet('article_list');



        $templet = $templet ? $templet : 'notes/Trategy-list';





        $this->display($templet);

        //缓存内容

        $content = $this->response->body();

        Common::cache('set',$this->_cache_key,$content);

    }



    //写游记



    public function action_write()
        
    {


        $noteid = intval(Common::remove_xss(Arr::get($_GET,'noteid')));


        $memberid = intval(Common::remove_xss(Arr::get($_GET,'memberid')));


        $commonnoteid =Common::remove_xss( Common::session('noteid'));

        // echo $commonnoteid;exit;

        //会员信息intval()

        $userInfo = Product::get_login_user_info();

        $feng  = '';

        //要求写游记必须登陆

        if(empty($userInfo['mid']))

        {

            $this->request->redirect('/member/login/?redirecturl='.urlencode(Common::get_current_url()));

        }

        //用于会员信息修改

        if(!empty($noteid) && !empty($memberid))

        {


            $info = ORM::factory('notes')

                ->where("id=$noteid and memberid=$memberid")

                ->find()

                ->as_array();

            if(!empty($info))

            {

                $this->assign('info',$info);

                //获取 A2 信息

                $note_list_A2  = Model_Notes::get_list_A2($noteid);


                //获取除了 A2 的信息

                $note_list     = Model_Notes::get_list($noteid);

                $note_list     =array_merge($note_list_A2,$note_list);
               //  将 内容里的字符串 中的双引号 变成单引号
//                foreach ($note_list as $k=>&$v){
//
//                    $v['content'] =  str_replace('"',"'",$v['content']);
//
//                    foreach ($v['child'] as $ke=>$va){
//
//                        $va['content'] = str_replace('"',"'",$va['content']);
//                    }
//
//                }

                //var_dump($note_list);exit;

                //  根据 变量 $edit  判定是否是修改

                $edit    =  1;

                $this ->assign('notelist',$note_list);

                $this ->assign("noteid",$noteid);

                $this ->assign('edit',$edit);

            }

        }elseif(!empty($commonnoteid) && !empty($userInfo['mid'])&&$feng=='禁止进入该判断'){


            $info = ORM::factory('notes')


                ->where("id=$commonnoteid and memberid=$userInfo[mid]")


                ->find()


                ->as_array();


            if(!empty($info))

            {


                $this->assign('info',$info);


                $first   = array('title'=>'','con'=>'','noteid'=>$commonnoteid,'mid'=>$userInfo['mid']) ;


                //插入第一章 的内容


                $first_muluid  = Model_Notes::insert_mian_first($first);


                // 更新所有第一章 子目录 的父id

                Model_Notes::update_firstmulu($first_muluid,$commonnoteid);


                //获取 A2 信息


                $note_list_A2  = Model_Notes::get_list_A2($commonnoteid);


                //获取除了 A2 的信息

                $note_list     = Model_Notes::get_list($commonnoteid);

                $note_list     =array_merge($note_list_A2,$note_list);

                $this ->assign('notelist',$note_list);

                $this ->assign("noteid",$commonnoteid);

                $this  ->assign('commonnoteid',$commonnoteid);

            }

        }


        //=========fengjishu  // 08.22


        $pic['mem_litpic'] = ORM::factory('member',$userInfo['mid'])->get('litpic');//获取会员头像;


        $this ->assign("pic",$pic['mem_litpic']);

        // 获取目的

        $mdd        = Model_Notes::get_mdd();

        $this->assign("mdd",$mdd);

        //=========fengjishu end

        //=============================fengjishu end 08.26

        $code = time();

        Common::session('code',$code);

        $this->assign('frmcode',$code);


        //y用的模板文件

        $templet = Product::get_use_templet('notes_release');

        $templet = $templet ? $templet : 'notes/write';

        $this->display($templet);


        //缓存内容

//

//        $content = $this->response->body();
//
//
//
//        Common::cache('set',$this->_cache_key,$content);

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



            if($note) {

                $dis = Model_Notes::insert_main_lu($note, $main_id, $dis, $userInfo['mid']);

            }else{

                $dis = Model_Notes::insert_main_lu($ajax_noteid, $main_id, $dis, $userInfo['mid']);

            }



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

            if($note){

                $dis =  Model_Notes::insert_zi_lu($note,$child_id,$disorder,$dis[0],$userInfo['mid'],$parentid);

            }else{

                $dis =  Model_Notes::insert_zi_lu($ajax_noteid,$child_id,$disorder,$dis[0],$userInfo['mid'],$parentid);

            }





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

//$s ="
//Database_Exception [ 1064 ]: You have an error in your SQL syntax;
//check the manual that corresponds to your MySQL server version for the right
// syntax to use near 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft Y
//aHei', Arial, sans-s' at line 1 [ INSERT INTO `sline_notes_list`  (`title_s`, `notes_id`,
// `addtime`, `content`, `mid`, `m_id`, `displayorder`) VALUES ('dddfdf','161','1490780049',
//'早上八点准时从家出发，迎着朝阳、带着美好的心情出发了。从霍寨口上高速，走京昆高速，由于两会正在召开，所以北京方向的车都要例行检查，我们过了收费口又被警察扣住查了一下身份证才得以通行。路上车不多，路况不错，大约在高速上走了40来分钟，从行唐北收费口下，开始走下道。下道路况就相对复杂一些了，不仅窄，两边还有好多小村小镇、小集市，车速始终都提不起来，晃晃悠悠半个多小时才到。路两边的麦苗已经返青，绿油油的，看上去整个人的心情都很舒畅。经过一个小镇，具体名字不记得了，路两边全是卖缸炉烧饼的，看的我都好想吃。偶遇拖拉机，老式的拖拉机，估计很多人都没有见过，见过的人就不要吱声了容易暴露你的年龄。一路的风尘仆仆，终于看见牛王寨的路标，右拐进入通往景区的下路，路口有小饭店可以吃饭。拐进去又开了三五分钟才到景区，是不是因为天气的原因呢，感觉整个景区都灰蒙蒙的，景区的牌坊也显得那么有气无力。景区停车场是分阶梯状分布的，都在路的右手边，坡有点陡，开进去的要小心。不过这种路况也算考验了我的开车技术。停好车，长出一口气，可以轻松玩耍了。景区的游客中心正在建设中，目前没有投入使用，售票系统非常人工化，就一个人在那收钱，交钱就能进去了，也太随意了。交了20块钱之后，开始正式进入景区。由于景区正在开发建设中，加之春寒料峭，所以整个景区有些萧条。?进山向右拐有一条路通往大黑牛广场，两边的矮墙上写满了有关牛字的成语，中间还混进去了一个“牛逼哄哄”，这不是成语吧。走过这道成语墙，便是小广场了，靠山的位置矗立着一个大黑牛雕像，前面的五个大字“天下第一牛”也是让我醉了。既然都天下第一牛了，那肯定少不了拍照留念了。从人和牛的合照中就能看出牛有多了吧。小广场上还有一个充气斗牛的娱乐的项目，十五块钱一个人，就我俩这样的上去肯定超不过三秒钟就下来了。参观完大牛开始上山，山路的左侧有一个正在建设的游乐场，现在还不能玩。开始上山，上山的时候我们没有走小路，走的一条弯弯曲曲的盘山公路，刚开始还是公路，到后边就成土路了。坑坑洼洼的土路，还有些碎石子，加之路两边还未发芽的灌木丛，竟也有一种别致的苍凉感。虽然天气阴阴的，但为了凹造型，友友戴了一个超酷的墨镜，确实有些小酷。边走边玩，爬了大约十几分钟的山后终于看到了传说中的玻璃栈道——天云桥。桥旁边还有个小亭子——天云阁，专门供游客休息的。不过这个玻璃栈道跟想象中的有点差距，对于我们女汉子来说，这种高度和长度还差了一点。当别人还在小心翼翼前行的时候，我们已经在桥上蹦嗨翻了天。为了避免吓到大家，再来一组温柔一点的照片。玻璃栈道的出口设置的还是挺先进的，自动感应，自动开闸门、关闸门。站在高处回望玻璃栈道，这样看上去好像稍微有一点刺激感了。继续向前，山路上有一块石头——情人石，好多情侣都在这里拍照留念，对于我们两只单身狗来说还是赶紧走开得了。这个小山整体并不算高，但从一些特定的角度看过去还是挺壮观的。有一块凸起的石头，从这个角度看风景视野极为开阔。当然了，我俩是时刻不忘记拍照，走哪拍哪儿。经过这段山路的时候并没有感觉到有多难走，不过走过之后回过头一看还是蛮惊险的。在往后边就比较好走了，非常开阔的一段路——土路。这条路是通往吊桥的必经之路，远处小亭子和白色观音像之间的桥就是吊桥。吊桥有一个很好听的名字，叫鹊桥，比玻璃栈道长不少，脚底下是用木板铺成的桥面，两边是用铁丝网做的栏杆。走到桥中间的时候整个吊桥都晃晃悠悠的，挺有意思的。瞧下图这位还没开始走呢就已经笑得合不拢嘴了。从吊桥上下来，就到了另外一个山头，山上有一个寺庙叫崇福寺，寺前边又白又高的观音像十分的抢眼，在距离景区还好远的时候就看见了它。鉴于我俩对寺庙都不感兴趣，所以就远观了一下，没有进去参观。和寺庙相通的有一条车行道，考虑到这条路下山比较近，我俩就直接走了车行道。话说，这条路还真陡，一般人开车还真不敢上来。路两边的石碑，连起来读就是“阿弥佗佛”快到山底的时候抬头看架在空中的玻璃栈道和吊桥，又是另外一种感觉。从半山腰走石台阶下山，两边的灌木丛里丢满了垃圾，各种塑料袋子、矿泉水瓶、包装纸等，太煞风景了。强烈呼吁大家出门旅游，一定要爱护环境卫生！一定要爱护环境！一定要爱护环境！路遇一狗狗，你也是要上山欣赏风景去么。台阶直接通往山脚下的农家院，此时的我俩已经饥肠辘辘。发现一个规律，但凡去石家庄周边的景点游玩，大锅菜是万年不变的饭食，哪里都有大锅菜，当然不同的地方大锅菜的味道也不同。我俩一人交了12块钱，大锅菜、馒头、米汤随便吃。菜是好菜，味道也还不错，但就是太咸了。一口菜下去得啃半拉馒头，半碗菜吃了一个半馒头，喝了三碗汤，撑死了，吃太多了，各位不要笑话我。大约1点多吃完饭，到餐厅旁边的桃花岛转一转，所谓的桃花岛也就是一个人工景点，里边开花的估计不是桃花是杏花吧。其中最吸引人的还是笼子里的孔雀了，我俩在那又蹦又跳又叫，好想看一个孔雀开屏，但这几只孔雀都太任性了，就是不开就是不开。在桃花岛边逗孔雀边聊天，不知不觉就到两点钟了，想到晚上还要去会见一帮“狐朋狗友”，那就往回走吧。回来的时候走了另外一条路，虽然有点绕，但躲过了那些拥挤的小村小镇，反而倒比去的时候快了。','1155','A2','1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
//



//";
        $banner = Common::remove_xss(Arr::get($_POST,'banner'));

        $cover = Common::remove_xss(Arr::get($_GET,'cover'));

        $noteid = intval(Arr::get($_GET,'noteid'));

        $commonnoteid = intval(Arr::get($_GET,'commonnoteid'));

        $edit          = Arr::get($_GET,'eidt');

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

        $z_content      = htmlspecialchars($z_content,ENT_QUOTES);


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

            $m = ORM::factory('notes',$noteid);

        }

        else

        {

            if($ajax_noteid=='-1'){

                $m = ORM::factory('notes');

            }else{

                $m = ORM::factory('notes',$ajax_noteid);

            }

        }

        $m->title = $title;

        $m->memberid = $userInfo['mid'];

        $m->litpic = $cover;

        $m->modtime = time();

        //===========fengjishu 08.22

        $m->finaldestid     =$travel_mdd;

        $m->travel_date     =$travel_date;

        $m->travel_consume  =$travel_consume;

        $m->travel_day       =$travel_day;

        $m->travel_way     =$travel_way;

        $m->status         =0;

        $m->travel_men     =$travel_men;

        $m->addtime        =time();


        if($draft==1){

            $m->is_dra   =$draft;

            $m -> status = 0;

        }else{

            $m->is_dra   =0;

        }

        //===========fengjishu08.22

        $status = 0;

        $m->save();

        if($m->saved())

        {

            $status = 1;

            /*

             * 出现的情况

             *    写游记            空 = k        不为空 = nk

             *

             *       noteid   = k    eidt  = k    commonnoteid  = k  这种情况是 写游记 不增加章节

             *       noteid   = nk   eidt  = k    commonnoteid  = nk 这种情况是 写游记 增加章节

             *       noteid   = nk   edit  = nk   commonnoteid  = k  这种情况是 修改游记  不增加章节

             *       noteid   = nk   edit  = nk   commonnoteid  = nk 这种情况是 修改写游记 增加章节

             *

             * */

            if(empty($noteid))

            {

                $m->reload();

                $noteid = $m->id;

                $first   = array('title'=>$title_s,'con'=>$z_content,'noteid'=>$noteid,'mid'=>$userInfo['mid']) ;

                //插入第一章 的内容

                $first_muluid= Model_Notes::insert_mian_first($first);

                //更新  子目录 和 新增的目录】

                Model_Notes::update_mulu($_POST,$_GET,$first_muluid,$noteid);

                $message   = array('status'=>1,'msg'=>'发表成功,需等待管理员审核','noteid'=>$noteid,'sss'=>333);
                //Common::session('noteid',null);
                echo json_encode($message);
                exit;





            }else{

                if(!empty($commonnoteid)&&empty($edit)){



                    $first   = array('title'=>$title_s,'con'=>$z_content,'noteid'=>$noteid,'mid'=>$userInfo['mid']) ;



                    //插入第一章 的内容



                    $first_muluid= Model_Notes::insert_mian_first($first);

                    //更新  子目录 和 新增的目录】

                    Model_Notes::update_mulu($_POST,$_GET,$first_muluid,$noteid);

                    $message   = array('status'=>1,'msg'=>'发表成功,需等待管理员审核','noteid'=>$noteid,'ss'=>'s');

                }else{



                    Model_Notes::update_mulu2($_POST,$_GET,$noteid);

                    $message   = array('status'=>1,'msg'=>'发表成功,需等待管理员审核','noteid'=>$noteid,'ss'=>'mulu2');

                }



            }



        }else{

            $message   = array('status'=>0,'msg'=>'发表失败');

        }



        Common::session('noteid',null);

        echo json_encode($message);



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



        $storepath = UPLOADPATH.'/'.date('Y').'/'.date('md').'/';
    //    $storepath .= '2017/';



        if(!file_exists($storepath))



        {



            mkdir($storepath);



        }



        $filename = uniqid();



        $out = array();



        if(move_uploaded_file($filedata['tmp_name'], $storepath.$filename.$filedata['name']))



        {



            $out['status'] = 1;



            $out['litpic'] = '/new_uploads/'.date('Y').'/'.date('md').'/'.$filename.$filedata['name'];



        }



        echo json_encode($out);



    }



































}