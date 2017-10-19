<?php defined('SYSPATH') or die('No direct script access.');



/**

 * Class Controller_Member

 * 会员总控制器

 */

class Controller_Member_Index extends Stourweb_Controller

{





    private $mid = null;

    private $refer_url = null;



    public function before()

    {

        parent::before();

        $this->refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $GLOBALS['cfg_cmsurl'];

        $this->assign('backurl', $this->refer_url);

        $this->mid = Cookie::get('st_userid') ? Cookie::get('st_userid') : 0;

        if (empty($this->mid))

        {

            $this->request->redirect('member/login');

        }

        $this->assign('mid', $this->mid);

    }



    //会员中心首页

    public function action_index()

    {

        $info = Model_Member::get_member_byid($this->mid);

        //未付款订单数量

        $unPay = ORM::factory('member_order')

            ->where("memberid=$this->mid and status=1")

            ->find_all()

            ->count();

        //未评论订单数量

        $unComment = ORM::factory('member_order')

            ->where("memberid=$this->mid and status=5 and ispinlun=0")

            ->find_all()

            ->count();

        //咨询数量

        $question = ORM::factory('question')

            ->where("memberid=$this->mid")

            ->find_all()

            ->count();

        $info['unpay'] = $unPay;

        $info['uncomment'] = $unComment;

        $info['question'] = $question;



        //最新订单

        $order = Model_Member_Order::order_list(0, $this->mid, 'all', 1, 5);

        $this->assign('neworder', $order['list']);

        $this->assign('info', $info);

        $this->display('member/index');

    }





    //个人资料

    public function action_userinfo()

    {

        $token = md5(time());

        Common::session('crsf_usr_code', $token);

        $userinfo = Model_Member::get_member_byid($this->mid);

        $userinfo['litpic'] = empty($userinfo['litpic']) ? Common::member_nopic() : $userinfo['litpic'];

        $this->assign('info', $userinfo);

        $this->assign('frmcode', $token);

        $this->display('member/userinfo');

    }



    //头像修改页面

    public function action_uploadface()

    {

        $this->display('member/uploadface');

    }



    //安全中心

    public function action_safecenter()

    {

        $userinfo = Model_Member::get_member_byid($this->mid);

        $this->assign('info', $userinfo);

        $this->display('member/safecenter');

    }



    //账号绑定

    public function action_userbind()

    {

        $thirdinfo = Model_Member::get_member_byid($this->mid);

        $this->assign('info', $thirdinfo);

        $this->assign('thirdBindMsg',Session::instance()->get("thirdBindMsg"));

        Session::instance()->get("thirdBindMsg",null);

        $this->display('member/userbind');

    }



    //解除绑定

    public function action_ajax_userunbind()

    {

        $id = intval(Arr::get($_GET, 'id'));

        echo json_encode(Model_Member_Third::unbind($id));

    }



    //我的咨询

    public function action_myquestion()

    {



        $pageSize = 10;

        $questype = 0; //产品问答



        $page = intval(Arr::get($_GET, 'p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action()

        );



        $out = Model_Question::question_list($this->mid, $questype, $page, $pageSize);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'query_string', 'key' => 'p'),

                'view' => 'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo', $pager);

        $this->assign('list', $out['list']);

        $this->display('member/myquestion');



    }

    //我的游记

    public function action_mynotes()

    {

        $pageSize = 10;



        $page = intval(Arr::get($_GET, 'p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action()

        );



        $out = Model_Notes::member_notes_list($this->mid, $page, $pageSize);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'query_string', 'key' => 'p'),

                'view' => 'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo', $pager);

        $this->assign('list', $out['list']);

        $this->display('member/mynotes');

    }
    //喜欢游记页面
    public  function  action_likeNote(){

        $pageSize = 10;
        $page = intval(Arr::get($_GET, 'p'));
        $gl   = Arr::get($_GET, 'gl');
        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action()

        );
        if(isset($gl)&&$gl=="gl"){
            //喜欢的攻略
            //$out = Model_Notes::member_like_gl($this->mid, $page, $pageSize,$gl);
            $out = Model_Notes::member_like_notes($this->mid, $page, $pageSize,$gl);
            $this->assign("gl",$gl);

        }else{
            //喜欢的游记
            $out = Model_Notes::member_like_notes($this->mid, $page, $pageSize);
        }

        //  喜欢攻略的分页
        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'query_string', 'key' => 'p'),

                'view' => 'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );
        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo', $pager);

        $this->assign('list', $out['list']);

        $this->display('member/like_notes');
    }


   //取消喜欢游记
    public  function  action_delLikenote()
    {



        $id = $_POST['id'];

        $re = Model_Notes::dellikenote($id);
        echo 1;


    }

    //我的积分

    public function action_jifen()

    {



        $pageSize = 10;

        $userInfo = Model_Member::get_member_byid($this->mid);



        $page = intval(Arr::get($_GET, 'p'));

        $route_array = array(

            'controller' => $this->request->controller(),

            'action' => $this->request->action()

        );



        $out = Model_Member_Jifen_Log::log_list($this->mid, $page, $pageSize);



        $pager = Pagination::factory(

            array(

                'current_page' => array('source' => 'query_string', 'key' => 'p'),

                'view' => 'default/pagination/search',

                'total_items' => $out['total'],

                'items_per_page' => $pageSize,

                'first_page_in_url' => false,

            )

        );

        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $this->assign('pageinfo', $pager);

        $this->assign('list', $out['list']);

        $this->assign('userinfo', $userInfo);

        $this->display('member/jifen');



    }



    //修改密码

    public function action_modify_pwd()

    {

        $info = Model_Member::get_member_byid($this->mid);

        $token = md5(time());

        Common::session('crsf_code', $token);

        $this->assign('frmcode', $token);

        $this->assign('info', $info);

        $this->display('member/modify_pwd');

    }



    //执行修改密码

    public function action_do_changepwd()

    {

        $newpwd1 = Arr::get($_POST, 'newpwd1');

        $newpwd2 = Arr::get($_POST, 'newpwd2');

        $frmCode = Arr::get($_POST, 'frmcode');

        $setpwd = Arr::get($_POST, 'setpwd');

        //安全校验码验证

        $orgCode = Common::session('crsf_code');

        if ($orgCode != $frmCode)

        {

            exit('error token');

        }

        if ($newpwd1 != $newpwd2)

        {

            exit('error pwd not match');

        }



        $m = ORM::factory('member', $this->mid);

        $m->pwd = md5($newpwd1);

        $m->save();

        if ($m->saved())

        {

            $title = empty($setpwd) ? urlencode('修改密码') : urlencode('设置密码');

            $msg = empty($setpwd) ? urlencode('修改密码成功') : urlencode('设置密码成功');

            $this->request->redirect('member/index/msg?title=' . $title . "&msg=" . $msg);

        }

        else

        {

            Common::message(array('msg' => '修改密码失败', 'jumpUrl' => $this->refer_url));

        }



    }





    /*

     * 修改/绑定手机

     * */

    public function action_modify_phone()

    {

        $change = Arr::get($_GET, 'change');

        $token = md5(time());

        Common::session('crsf_code', $token);

        $this->assign('change', $change);

        $this->assign('frmcode', $token);

        $this->display('member/modify_phone');

    }



    //执行修改手机号

    public function action_do_modify_phone()

    {

        $msgCode = Arr::get($_POST, 'msgcode');

        $frmCode = Arr::get($_POST, 'frmcode');



        $mobile = Arr::get($_POST, 'mobile');



        //安全校验码验证

        $orgCode = Common::session('crsf_code');

        if ($orgCode != $frmCode)

        {

            exit('error token');

        }

        if (Common::session('mobilecode_' . $mobile) != $msgCode)

        {

            exit('error msgcode');

        }

        Common::session('mobilecode_' . $mobile, null);

        //检测手机是否重复

        if (Model_Member::check_member_exist($mobile))

        {

            exit('error mobile repeat');

        }

        $m = ORM::factory('member', $this->mid);

        $m->mobile = $mobile;

        $m->save();

        if ($m->saved())

        {

            $title = urlencode('修改/绑定手机');

            $msg = urlencode(__('user_modify_phone_ok'));

            $this->request->redirect('member/index/msg?title=' . $title . "&msg=" . $msg);



        }

        else

        {

            Common::message(array('msg' => __('user_modify_phone_failure'), 'jumpUrl' => $this->refer_url, 'status' => 1));

        }





    }





    /*

     * 修改/绑定邮箱

     * */

    public function action_modify_email()

    {

        $change = Arr::get($_GET, 'change');

        $token = md5(time());

        Common::session('crsf_code', $token);

        $this->assign('change', $change);

        $this->assign('frmcode', $token);

        $this->display('member/modify_email');

    }



    //执行修改邮箱

    public function action_do_modify_email()

    {

        $emailCode = Arr::get($_POST, 'emailcode');

        $frmCode = Arr::get($_POST, 'frmcode');



        $email = Arr::get($_POST, 'email');



        //安全校验码验证

        $orgCode = Common::session('crsf_code');

        if ($orgCode != $frmCode)

        {

            exit('error token');

        }

        if (Common::session('emailcode_' . md5($email)) != $emailCode)

        {

            exit('error emailCode');

        }

        Common::session('emailcode_' . $email, null);

        //检测手机是否重复

        if (Model_Member::check_member_exist($email))

        {

            exit('error email repeat');

        }

        $m = ORM::factory('member', $this->mid);

        $m->email = $email;

        $m->save();

        if ($m->saved())

        {

            $title = urlencode('修改/绑定邮箱');

            $msg = urlencode(__('user_modify_email_ok'));

            $this->request->redirect('member/index/msg?title=' . $title . "&msg=" . $msg);



        }

        else

        {

            Common::message(array('msg' => __('user_modify_email_failure'), 'jumpUrl' => $this->refer_url, 'status' => 1));

        }





    }





    //常用联系人

    public function action_linkman()

    {

        $this->display('member/linkman');

    }



    //保存常用联系人

    public function action_ajax_do_save_linkman()

    {

        $t_name = Common::remove_xss(Arr::get($_POST, 't_name'));

        $t_cardtype = Common::remove_xss(Arr::get($_POST, 't_cardtype'));

        $t_cardno = Common::remove_xss(Arr::get($_POST, 't_cardno'));

        $tourer = array();

        $total = count($t_name);

        for ($i = 1; $i <= $total; $i++)

        {

            $tourer[] = array(

                'name' => $t_name[$i],

                'cardtype' => $t_cardtype[$i],

                'cardno' => $t_cardno[$i]

            );

        }

        //先删除



        $sql = "DELETE FROM `sline_member_linkman` WHERE memberid='" . $this->mid . "'";

        DB::query(Database::DELETE, $sql)->execute();

        if (count($tourer) > 0 && !empty($tourer[0]['name']))

        {



            foreach ($tourer as $t)

            {



                $m = ORM::factory('member_linkman');

                $m->memberid = $this->mid;

                $m->linkman = $t['name'];

                $m->idcard = $t['cardno'];

                $m->cardtype = $t['cardtype'];

                $m->save();

                $m->clear();

            }





        }

        echo json_encode(array('status' => 1));





    }

    //删除联系人

    public  function action_ajax_do_del_linkman()

    {

        $linkman =  Arr::get($_POST, 'linkman');

        $code =  Arr::get($_POST, 'code');

        $sql = "delete  from sline_member_linkman where linkman='$linkman' and idcard='$code'";

        $data =DB::query(Database::DELETE, $sql)->execute();

        if($data)

        {

            echo json_encode(array('status' => 1));

        }

        else{

            echo json_encode(array('status' => 0));

        }

    }



    //cardno检测重复性

    public function action_ajax_check_cardno()

    {

        $cardno = Common::remove_xss(Arr::get($_POST, 'cardno'));

        $cardtype = Common::remove_xss(Arr::get($_POST, 'cardtype'));

        $cardid = Common::remove_xss(Arr::get($_POST, 'cardid'));

        $mid = $this->mid;

        $flag = 'false';

        $where = "cardtype='$cardtype' and idcard='$cardno' and memberid='$mid'";

        $where .= !empty($cardid) ? " and id!=$cardid" : '';



        $m = ORM::factory('member_linkman')

            ->where($where)

            ->find();

        if (!$m->loaded())

        {

            $flag = 'true';

        }

        echo $flag;

    }





    //消息提示

    public function action_msg()

    {

        $title = Arr::get($_GET, 'title');

        $msg = Arr::get($_GET, 'msg');

        $this->assign('title', $title);

        $this->assign('msg', $msg);

        $this->assign('time', 5);

        $this->display('member/msg');

    }



    //付款

    public function action_pay()

    {

        $orderSn = Common::remove_xss(Arr::get($_GET, 'ordersn'));

        Common::session('_platform', 'pc');

        $payurl = "{$GLOBALS['cfg_basehost']}/payment/?ordersn=" . $orderSn;

        $this->request->redirect($payurl);

    }





    /*

     * ajax 上传用户头像

     * */



    public function action_ajax_uploadface()

    {

        if (!$_FILES['Filedata'])

        {

            die ('Image data not detected!');

        }

        if ($_FILES['Filedata']['error'] > 0)

        {

            switch ($_FILES ['Filedata'] ['error'])

            {

                case 1 :

                    $error_log = 'The file is bigger than this PHP installation allows';

                    break;

                case 2 :

                    $error_log = 'The file is bigger than this form allows';

                    break;

                case 3 :

                    $error_log = 'Only part of the file was uploaded';

                    break;

                case 4 :

                    $error_log = 'No file was uploaded';

                    break;

                default :

                    break;

            }

            die ('upload error:' . $error_log);

        }

        else

        {

            $img_data = $_FILES['Filedata']['tmp_name'];

            $size = getimagesize($img_data);

            $file_type = $size['mime'];

            if (!in_array($file_type, array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif')))

            {

                $error_log = 'only allow jpg,png,gif';

                die ('upload error:' . $error_log);

            }

            switch ($file_type)

            {

                case 'image/jpg' :

                case 'image/jpeg' :

                case 'image/pjpeg' :

                    $extension = 'jpg';

                    break;

                case 'image/png' :

                    $extension = 'png';

                    break;

                case 'image/gif' :

                    $extension = 'gif';

                    break;

            }

        }

        if (!is_file($img_data))

        {

            die ('Image upload error!');

        }

        //图片保存路径,默认保存在该代码所在目录(可根据实际需求修改保存路径)

        $save_path = BASEPATH;

        $file_dir = UPLOADPATH . '/member/';

        if (!is_dir($file_dir)) mkdir($file_dir);

        $uinqid = uniqid();

        $litpic = '/uploads/member/' . $uinqid . '.' . $extension;

        $filename = $save_path . $litpic;

        move_uploaded_file($img_data, $filename);

        echo $litpic;

        exit ();

    }



    //保存用户基本信息



    public function action_ajax_userinfo_save()

    {





        $frmCode = Arr::get($_POST, 'frmcode');

        $nickName = Arr::get($_POST, 'nickname');

        $sex = Arr::get($_POST, 'sex');

        $trueName = Arr::get($_POST, 'truename');

        $cardId = Arr::get($_POST, 'cardid');

        $address = Arr::get($_POST, 'address');

        $mid = Arr::get($_POST, 'mid');

        $litpic = Arr::get($_POST, 'litpic');



        $out = array();

        //安全校验码验证

        $orgCode = Common::session('crsf_usr_code');

        if ($orgCode != $frmCode)

        {

            $out['msg'] = '安全检验码错误';

            $out['status'] = 0;

            echo json_encode($out);

            exit;

        }



        $m = ORM::factory('member', $mid);

        if ($m->loaded())

        {

            $m->nickname = $nickName;

            $m->sex = $sex;

            $m->truename = $trueName;

            $m->cardid = $cardId;

            $m->address = $address;

            $m->litpic = $litpic;

            $m->save();

            if ($m->saved())

            {

                Cookie::set('st_username', $nickName);

                $out['msg'] = '';

                $out['status'] = 1;

                echo json_encode($out);

                exit;

            }

        }

        else

        {

            $out['msg'] = '会员信息不正确';

            $out['status'] = 0;

            echo json_encode($out);

            exit;

        }



    }



    /*ajax检测老密码是否正确*/

    public function action_ajax_check_oldpwd()

    {

        $flag = 'false';

        $oldpwd = Arr::get($_POST, 'oldpwd');

        $userinfo = Model_Member::get_member_byid($this->mid);

        if (md5($oldpwd) == $userinfo['pwd'])

        {

            $flag = 'true';

        }

        echo $flag;

    }



    /**

     * 发送短信验证码

     */





    /*修改密码短消息*/

    public function action_ajax_send_msgcode()

    {



        $mobile = Arr::get($_POST, 'mobile');//手机

        $token = Arr::get($_POST, 'token');//

        $curtime = time();



        //安全校验码验证

        $orgCode = Common::session('crsf_code');

        if ($orgCode != $token)

        {

            echo json_encode(array('status' => false, 'msg' => '检验码错误'));

            exit;

        }



        //手机号验证

        if (empty($mobile))

        {

            echo json_encode(array('status' => false, 'msg' => '手机号不能为空'));

            exit;

        }

        else

        {



            $code = Common::get_rand_code(5);//验证码

            $msgInfo = Product::get_define_msg(0, 0, 'reg_msgcode');

            $content = $msgInfo['msg'];

            $content = str_replace('{#CODE#}', $code, $content);

            $content = str_replace('{#WEBNAME#}', $GLOBALS['cfg_webname'], $content);

            $content = str_replace('{#PHONE#}', $GLOBALS['cfg_phone'], $content);

            $flag = Product::send_msg($mobile, '', $content);



            if ($flag->Success)//发送成功

            {

                Common::session('mobilecode_' . $mobile, $code);

                echo json_encode(array('status' => true, 'msg' => '验证码发送成功'));

            }

            else

            {

                echo json_encode(array('status' => false, 'msg' => '验证码发送失败，请重试' . $flag->Message));

            }



        }



    }



    /*

    * 发送邮箱验证码

    * */

    public function action_ajax_send_emailcode()

    {



        $email = Common::remove_xss(Arr::get($_POST, 'email'));

        $token = Common::remove_xss(Arr::get($_POST, 'token'));//





        //安全校验码验证

        $orgCode = Common::session('crsf_code');

        if ($orgCode != $token)

        {

            echo json_encode(array('status' => false, 'msg' => '检验码错误'));

            exit;

        }





        $code = Common::get_rand_code(5);//验证码

        if (empty($email))

        {

            echo json_encode(array('status' => true, 'msg' => '邮箱不能为空'));

            exit;

        }

        $title = $GLOBALS['cfg_webname'] . '邮箱验证码';

        $emailInfo = Product::get_email_msg_config('reg_msgcode');

        $content = $emailInfo['msg'];

        $content = str_replace('{#CODE#}', $code, $content);

        $content = str_replace('{#EMAIL#}', $email, $content);

        $content = str_replace('{#WEBNAME#}', $GLOBALS['cfg_webname'], $content);

        $status = Product::order_email($email, $title, $content);

        if ($status)

        {



            Common::session('emailcode_' . md5($email), $code);

            echo json_encode(array('status' => true, 'msg' => '发送邮箱验证码成功'));

        }

        else

        {

            echo json_encode(array('status' => false, 'msg' => '发送邮箱验证码失败'));

        }



    }



    /**

     * 检测email验证码是否正确.

     */

    public function action_ajax_check_email_code()

    {

        $emailCode = Arr::get($_POST, 'emailcode');



        $email = Arr::get($_POST, 'email');

        $flag = 'false';

        if (Common::session('emailcode_' . md5($email)) == $emailCode)

        {

            $flag = 'true';

            //Common::session('emailcode_'.md5($email),null);



        }

        echo $flag;





    }





    //删除游记

    public function action_ajax_delete_notes()

    {

        if(!$this->request->is_ajax())exit;

        $noteid = intval(Arr::get($_POST,'noteid'));

        $mid = $this->mid;

         $sql = "DELETE FROM `sline_notes` WHERE memberid='$mid' AND id='$noteid'";
         DB::query(1,$sql)->execute();
         $sql = " DELETE FROM `sline_notes_list` WHERE  notes_id='$noteid'";
         DB::query(1,$sql)->execute();
       // $flag = DB::query(Database::DELETE,$sql)->execute();
        $sql  = "select * from `sline_notes` where memberid='$mid' AND id='$noteid' ";
        $flag  = DB::query(1,$sql)->execute()->as_array();

        $status = 0;

        if(empty($flag))

        {

            $status = 1;

        }

        echo json_encode(array('status'=>$status));

    }





}

