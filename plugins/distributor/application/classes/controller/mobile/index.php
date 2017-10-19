<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 用户登录
 * Class Controller_Mobile_Index
 */
class Controller_Mobile_Index extends Stourweb_Controller
{
    //默认对象
    private $_model;
    private $_id;
    private $_info;

    /**
     * 初始化
     */
    public function before()
    {
        parent::before();
        $this->_model = new Model_Supplier();
        $this->_id = Cookie::get('st_supplier_id');
        if(empty($this->_id))
        {
            $this->request->redirect("/mobile/login");
        }
        else
        {
            $this->_info = $this->_model->get_supplier_byid($this->_id);
            $this->assign('info',$this->_info);
        }
    }
    /**
     * 首页
     */
    public function action_index()
    {
        $this->display('index');
    }

    /**
     * 用户资料
     */
    public function action_userinfo()
    {
       $this->display('userinfo');
    }

    /**
     * 修改密码
     */
    public function action_modifypwd()
    {
        $this->display('modifypwd');
    }

    /**
     * 保存修改密码
     */
    public function action_ajax_save_modifypwd()
    {
        $pwd1 = Arr::get($_POST,'pwd1');
        $pwd2 = Arr::get($_POST,'pwd2');
        $oldpwd = Arr::get($_POST,'oldpwd');
        $status = 0;
        $msg = '';
        if(!empty($pwd1) && $pwd1==$pwd2)
        {
            $m = ORM::factory('supplier',$this->_id);

            if($m->password == md5($oldpwd))
            {
                $m->password = md5($pwd1);
                $m->save();
                if($m->saved())
                {
                    $status = 1;
                }
                else
                {
                    $msg = '密码修改失败';
                }
            }
            else
            {
                $msg = '旧密码输入错误';
            }

        }
        else
        {
            $msg = '新密码不能为空/两次输入密码不一致';
        }
        echo json_encode(array('status'=>$status,'msg'=>$msg));
    }


}