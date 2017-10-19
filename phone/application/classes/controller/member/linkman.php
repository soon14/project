<?php defined('SYSPATH') or die('No direct script access.');



/**

 * Class Controller_Member_Linkman

 * 常用联系人

 */

class Controller_Member_Linkman extends Stourweb_Controller

{

    public function before()

    {

        parent::before();

        $this->member = Common::session('member');

        $url  = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (empty($this->member))

        {

            $this->request->redirect('member/login');

        }



    }



    /**

     * 首页

     */

    public function action_index()

    {



        //2016.09.18  封 隐藏  end

        // 获取 对应游记的 会员信息

        $member = ORM::factory('member',$this->member['mid'])->as_array();

        $this ->assign("member",$member);



        $this->display('member/user');



    }

    /*

     * 修改密码 加载页面

     */

    public  function  action_userpassword(){



        $member = ORM::factory('member',$this->member['mid'])->as_array();

        $this ->assign("member",$member);

        $this->display('member/user');

        $this ->display('member/user-password');



    }

    /*

     * 修改密码

     */

    public function action_changepassword(){



        $oldpass  =  Arr::get($_POST, 'oldpass');



        $oldpass1  = md5($oldpass);



        $newpass1   =  Arr::get($_POST, 'newpass1');



        $newpass2   =  Arr::get($_POST, 'newpass2');



        $member = ORM::factory('member',$this->member['mid'])->as_array();

        // strlen($newpass2)

        if($oldpass1!=$member['pwd']){

            $message = array('msg' => __("原密码错误"), 'status' => 0);

        }elseif(strlen($newpass2)<6||strlen($newpass1)<6){

            $message = array('msg' => __("密码长度字符长度小于6位").strlen($newpass2), 'status' => 0);

        }

        else if($newpass1!=$newpass2){

            $message = array('msg' => __("两次密码不一致"), 'status' => 0);

        }elseif($oldpass==$newpass2){

            $message = array('msg' => __("新旧密码相同"), 'status' => 0);

        }else{

            $m = ORM::factory('member',$this->member['mid']);

            $m->pwd = md5($newpass2);

            $m->save();

            if($m->save()){

                $message = array('msg' => __("修改成功"), 'status' => 1);

            }

        }







        echo json_encode($message);





    }

    /*

     * 账号管理页面

     */

    public function  action_userAdmin(){





        $member = ORM::factory('member',$this->member['mid'])->as_array();

        $member['mobile1']= substr($member['mobile'],0,3).'****'.substr($member['mobile'],7,6);

        $this ->assign("member",$member);

        $this ->display('member/user-admin');



    }

    /*

     * 修改头像页面

     */

    public  function action_editlitpic(){



        $member = ORM::factory('member',$this->member['mid'])->as_array();

        $this ->assign("member",$member);

        $this->display('member/user-peo');

    }

    /*

     * 修改 手机 验证 页面

     */

    public  function action_editphone(){



        $member = ORM::factory('member',$this->member['mid'])->as_array();

        $member['mobile1']= substr($member['mobile'],0,3).'****'.substr($member['mobile'],7,6);

        $this ->assign("member",$member);



        $this->display('member/user-phono');

    }

    /*

     * mynote  我的游记

     */

    public function  action_mynote(){



        $member = ORM::factory('member',$this->member['mid'])->as_array();

        $this ->assign("member",$member);

        $this->display('member/mynotes');

    }

    /*

     *   验证 code

     */

    public  function action_checkcode(){

        $code   =  Arr::get($_POST, 'code');

        if (Common::session('msg_code') != $code)

        {

            $message = array('msg' => __("验证码错误"), 'status' => 0);

            exit(json_encode($message));

        }

        Common::session('msg_code',null);

        $message = array('msg' => __("ok"), 'status' => 1);

        exit(json_encode($message));



    }

    /**

     * ajax请求 加载更多

     * @param string $pagesize

     * @return string|void

     */

    public function action_ajax_article_more($pagesize = '5')

    {

        if (!$this->request->is_ajax()) return '';

        $page = Common::remove_xss(Arr::get($_GET, 'page'));

        $offset = (intval($page) - 1) * $pagesize;

        $memberid = Common::remove_xss(Arr::get($_GET, 'memberid'));



        $rows  =  Model_Member_Linkman::search_notes($memberid,$offset,$pagesize);



        $data =   Model_Member_Linkman::get_notes_attachinfo($rows);





        foreach ($data as &$v)

        {

            $v['month']  =date("m",$v['addtime']);

            $v['day']    =date("d",$v['addtime']);

            $v['year']   =date('Y',$v['addtime']);

            $v['time']   = date("m-d",$v['addtime']);

            $v['litpic'] = Common::img($v['litpic'],390,220);

            $v['summary'] = Common::cutstr_html($v['summary'], 30);

        }



        echo Product::list_search_format1($data, $page,$pagesize=5);

    }

    //喜欢游记页面

    public  function  action_myenjoy(){



        $pageSize = 10;

        $page = intval(Arr::get($_GET, 'p'));

        $gl   = Arr::get($_GET, 'gl');





        $this->assign('gl',$gl);

        $member = ORM::factory('member',$this->member['mid'])->as_array();

        $this ->assign("member",$member);

        $this->display('member/myenjoy');

    }

    public  function action_ajax_likenotes(){

        $pageSize = 10;

        $page = intval(Arr::get($_GET, 'p'));

        $gl   = Arr::get($_GET, 'isgl');



        if($gl=="gl"){

            //喜欢的攻略

            //$out = Model_Notes::member_like_gl($this->mid, $page, $pageSize,$gl);

            $out = Model_Member_Linkman::member_like_notes($this->member['mid'], $page, $pageSize,$gl);



        }else{

            //喜欢的游记

            $out =Model_Member_Linkman::member_like_notes($this->member['mid'], $page, $pageSize);



        }

        echo Product::list_search_format1($out,$page,$pageSize);

    }

    /*

     * 修改 手机  修改 页面

     */

    public function  action_changephone(){





        $this->display('member/user-phono1');



    }

    /*

    * 绑定手机 最后一步

    */

    public  function  action_bidings(){



        $phone   =  Arr::get($_POST, 'phone');



        $newcode = Arr::get($_POST, 'newcode');

        if (Common::session('msg_code') != $newcode)

        {

            $message = array('msg' => __("验证码错误"), 'status' => 0);

            exit(json_encode($message));

        }

        if(preg_match("/^1[34578]\d{9}$/",$phone)){

            $sql     = "SELECT * FROM `sline_member` WHERE mobile='$phone'";

            $re      = DB::query(1,$sql)->execute()->as_array();

        }else{

            $message = array('msg' => __("手机号不合法"), 'status' => 0);

            exit(json_encode($message));

        }



        if(empty($re)){

            $m      = ORM::factory('member',$this->member['mid']);



            $m  ->mobile  =$phone;



            $m->save();



            $status = 0 ;



            if($m->save()){



                $status  =1 ;



            }

            $message = array('msg' => __("绑定成功"), 'status' => $status);

            exit(json_encode($message));

        }else{

            $message = array('msg' => __("此账户已绑定"), 'status' => 0);

            exit(json_encode($message));

        }



    }

    /*

     * 修改 sex

     */

    public function  action_changesex(){





        $sex   = $_GET['sex'];

        switch($sex){

            case '0' : $sex ='保密' ;break;

            case '1' : $sex ='男' ;break;

            case '2' : $sex ='女' ;break;



        }

        $m      = ORM::factory('member',$this->member['mid']);



        $m  ->sex  = $sex;

        $m->save();

        $status = 0 ;

        if($m->save()){



            $status  =1 ;



            echo $status;

        }



    }

    /**

     * 添加、修改联系人

     */

    public function action_update()

    {

        $action = isset($_GET['action']) ? $_GET['action'] : '';

        $listUrl = $this->cmsurl . 'member/linkman/';

        switch ($action)

        {

            //编辑

            case 'edit':

                $info = Model_Member_Linkman::detail(Common::remove_xss($_GET['id']));

                $info['action'] = '修改';

                $this->assign('info', $info);

                $this->display('member/linkman_edit');

                break;

            //添加

            case 'add':

                $info['action'] = '添加';

                $info['isadd'] = true;

                $this->assign('info', $info);

                $this->display('member/linkman_edit');

                break;

            //删除

            case 'delete':

                $data['bool'] = 0;

                $id = Common::remove_xss($_GET['id']);

                $rows = DB::delete('member_linkman')->where("id={$id}")->execute();

                if ($rows > 0)

                {

                    $data['bool'] = 1;

                    $data['url'] = $listUrl;

                    $data['msg'] = __('success_delete');

                } else

                {

                    $data['msg'] = __('error_delete');

                }

                echo json_encode($data);

                break;

            //新增或更新数据

            case 'save':

                $data['bool'] = 0;

                $_POST = Common::remove_xss($_POST);

                if (empty($_POST['id']))

                {

                    $_POST['memberid'] = $this->member['mid'];

                    list(, $rows) = DB::insert('member_linkman', array_keys($_POST))->values(array_values($_POST))->execute();

                    if ($rows > 0)

                    {

                        $data['bool'] = 1;

                        $data['url'] = $listUrl;

                        $data['msg'] = __('success_add');

                    } else

                    {

                        $data['msg'] = __('error_add');

                    }

                } else

                {

                    $id = $_POST['id'];

                    unset($_POST['id']);

                    $rows = DB::update('member_linkman')->set($_POST)->where("id={$id}")->execute();

                    if ($rows > 0)

                    {

                        $data['bool'] = 1;

                        $data['url'] = $listUrl;

                        $data['msg'] = __('success_edit');

                    } else

                    {

                        $data['msg'] = __('error_edit');

                    }

                }

                echo json_encode($data);

                break;

        }

    }



    /**

     * 检测身份证、电话号码是否存在

     */

    public function action_ajax_check()

    {

        $_POST = Common::remove_xss($_POST);

        if (count($_POST) != 1)

        {

            exit('false');

        }

        $key = array_keys($_POST);

        $key = $key[0];

        $val = $key == 'idcard' ? "'{$_POST[$key]}'" : $_POST[$key];

        $result = DB::select()->from('member_linkman')->where("{$key}=$val and memberid=" . $this->member['mid'])->execute()->as_array();

        empty($result) ? exit('true') : exit('false');

    }

    /*
     *   上传 所列图
     */
    public function action_thumb()



    {

  echo 222;exit;

        echo Common::thumb('/uploads/notes/583fe0e3a02401038447_34.jpg','/uploads/notes/444.jpg',100,100);



    }
    /**



     * 上传图片



     */



    public function action_ajax_upload_picture()
    {

        $out = array();

        $filedata = Arr::get($_FILES,'filedata');

       if($filedata['size']>200000){

           $out['msg']  = '文件大小超过2M';
           $out['status']  = 0;
           echo json_encode($out);
           exit;
       }

        $storepath = UPLOADPATH.'/phone_member/';

        if(!file_exists($storepath))
        {
            mkdir($storepath);
        }

        $filename = uniqid();//uniqid() 函数基于以微秒计的当前时间，生成一个唯一的 ID。

        //move_uploaded_file  函数将上传的文件移动到新位置。move_uploaded_file(file,newloc)

        //file   	必需。规定要移动的文件。

        // newloc 	必需。规定文件的新位置。

        // echo json_encode($storepath);exit;

        // echo json_encode($filedata['tmp_name']);exit;

        if(move_uploaded_file($filedata['tmp_name'], $storepath.$filename.$filedata['name']))

        {
            $out['status'] = 1;

            // echo json_encode($out['status']);exit;

            $out['litpic'] = '/new_uploads/phone_member/'.$filename.$filedata['name'];

            $out['litpic'] = Common::img($out['litpic'],100,100);
            //$savepath = Common::thumb($out['litpic'],'/uploads/notes/5555'.$filedata['name'],100,100);
            $m      = ORM::factory('member',$this->member['mid']);
            $m  ->  litpic  =    $out['litpic'];
            $m->save();
        }
        echo json_encode($out);
    }

    /*

     * 修改昵称

     */

    public function  action_editnickname(){

        $nick  = trim($_GET['nick']);

        $m = ORM::factory('member',$this->member['mid']);



        $m  ->  nickname  =  $nick;



        $m->save();



        if($m->save()){

            echo '修改成功';

        }else{

            echo '修改失败';

        }

    }



}