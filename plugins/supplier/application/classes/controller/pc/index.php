<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 供应商首页控制器
 *
 */
class Controller_PC_Index extends Stourweb_Controller
{

    private $_id = NULL;
    private $_user_info = NULL;
    /**
     * 初始化支付对象
     */
    public function before()
    {
        parent::before();
        //登陆状态判断
        $this->_id = Cookie::get('st_supplier_id');
        if(empty($this->_id))
        {
            $this->request->redirect('pc/login');
        }
        else
        {
            $this->_user_info = Model_Supplier::get_supplier_byid($this->_id);
            $this->assign('userinfo',$this->_user_info);
        }
    }
    public function action_index()
    {
        $model = new Model_Member_Order();
        $data = $model->get_check_record(10);
        $this->assign('data',$data);

        $this->display("index");
    }

    /**
     * 帐户资料
     */
    public function action_userinfo()
    {
       $token = md5(time());
       Common::session('crsf_usr_code',$token);

       $this->assign('frmcode',$token);
       $this->display("userinfo");
    }

    //头像修改页面
    public function action_uploadface()
    {

        $this->display('uploadface');
    }


    /*
    * ajax 上传用户头像
    * */

    public function action_ajax_uploadface()
    {
        if (!$_FILES['Filedata'])
        {
            die ( 'Image data not detected!' );
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
            die ( 'upload error:' . $error_log );
        }
        else
        {
            $img_data = $_FILES['Filedata']['tmp_name'];
            $size = getimagesize($img_data);
            $file_type = $size['mime'];
            if (!in_array($file_type, array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/gif')))
            {
                $error_log = 'only allow jpg,png,gif';
                die ( 'upload error:' . $error_log );
            }
            switch($file_type) {
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
            die ( 'Image upload error!' );
        }
        //图片保存路径,默认保存在该代码所在目录(可根据实际需求修改保存路径)
        $save_path = BASEPATH;
        $file_dir = UPLOADPATH.'/member/';
        if(!is_dir($file_dir))mkdir($file_dir);
        $uinqid = uniqid();
        $litpic = '/uploads/member/'. $uinqid . '.' . $extension;
        $filename = $save_path . '/' .$litpic ;
        move_uploaded_file( $img_data, $filename );
        echo $litpic;
        exit ();
    }


    //保存供应商基本信息
    public function action_ajax_userinfo_save()
    {


        $frmcode = Common::remove_xss(Arr::get($_POST,'frmcode'));
        $linkman = Common::remove_xss(Arr::get($_POST,'linkman'));
        $kindid = Common::remove_xss(Arr::get($_POST,'kindid'));
        $litpic = Common::remove_xss(Arr::get($_POST,'litpic'));
        $qq = Common::remove_xss(Arr::get($_POST,'qq'));
        $email = Common::remove_xss(Arr::get($_POST,'email'));
        $supplieid = Common::remove_xss(Arr::get($_POST,'supplierid'));
        $province = Common::remove_xss(Arr::get($_POST,'province'));
        $city = Common::remove_xss(Arr::get($_POST,'city'));
        $content = Common::remove_xss(Arr::get($_POST,'content'));
        $out = array();
        //安全校验码验证
        $orgcode = Common::session('crsf_usr_code');
        if($orgcode!=$frmcode)
        {
            $out['msg'] = '安全检验码错误';
            $out['status'] = 0;
            echo json_encode($out);
            exit;
        }

        $m = ORM::factory('supplier',$supplieid);
        if($m->loaded())
        {
            $m->linkman = $linkman;
            $m->qq = $qq;
            $m->email = $email;
            $m->litpic = $litpic;
            $m->province = $province;
            $m->city = $city;
            $m->content = $content;
            $m->save();
            if($m->saved())
            {

                $out['msg'] = '';
                $out['status'] = 1;
                echo json_encode($out);
                exit;
            }
        }
        else
        {
            $out['msg'] = __("wrong");
            $out['status'] = 0;
            echo json_encode($out);
            exit;
        }

    }







}