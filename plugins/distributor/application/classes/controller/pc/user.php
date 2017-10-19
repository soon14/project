<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 用户修改密码 修改手机
 * Class Controller_Pc_User
 */
class Controller_Pc_User extends Stourweb_Controller
{
    //默认对象
    private $_model;

    /**
     * 初始化
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
        $this->_model = new Model_Supplier();
    }

    /**
     * 修改密码
     */
    public function action_modify_password()
    {
        $this->display('user/modify_password');
    }

    /**
     * 修改手机
     */
    public function action_modify_phone()
    {
        $st_supplier_id = intval(Cookie::get('st_supplier_id'));
        $data = $this->_model->get_supplier_byid($st_supplier_id);
        $this->assign('data', $data);
        $this->display('user/modify_phone');
    }
    /**
     * 修改密码
     */
    public function action_ajax_do_modify_password()
    {
        if(!$this->request->is_ajax())
        {
            echo json_encode(array('status' => 0,'msg' => '请求异常'));
            exit;
        }

        $oldpassword = Common::remove_xss(Arr::get($_POST,'oldpassword'));
        $newpassword = Common::remove_xss(Arr::get($_POST,'newpassword'));

        //注册信息验证
        $validataion = Validation::factory($this->request->post());
        $validataion->rule('oldpassword', 'not_empty');
        $validataion->rule('oldpassword', 'min_length', array(':value', '6'));
        $validataion->rule('newpassword', 'not_empty');
        $validataion->rule('newpassword', 'min_length', array(':value', '6'));
        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            if($keys[0] == 'oldpassword')
            {
                echo json_encode(array('status' => 0, 'msg' => '“当前密码”不少于6位'));
                exit;
            }
            if($keys[0] == 'newpassword')
            {
                echo json_encode(array('status' => 0, 'msg' => '“新密码”不少于6位'));
                exit;
            }
        }
        $updateArr = array('password' => md5($newpassword));
        $st_supplier_id = intval(Cookie::get('st_supplier_id'));
        $whereStr = "password='".md5($oldpassword)."' AND id='{$st_supplier_id}'";

        $rtn = Model_Supplier::update_field_by_where($updateArr,$whereStr,'supplier');
        if ($rtn)
        {
            echo json_encode(array('status' => 1, 'msg' => '修改成功'));
            exit;
        }
        else
        {
            echo json_encode(array('status' => 0, 'msg' => '“当前密码”错误'));
            exit;
        }
    }

    /**
     * 修改手机 第二步
     */
    public function action_ajax_do_modify_phone_setp2()
    {
        if(!$this->request->is_ajax())
        {
            echo json_encode(array('status' => 0,'msg' => '请求异常'));
            exit;
        }

        $phone = Common::remove_xss(Arr::get($_POST,'newphone'));
        $smscode = Common::remove_xss(Arr::get($_POST,'smscode'));

        if (Common::session('msg_code') != $smscode && Common::session('msg_phone') != $phone)
        {
            echo json_encode(array('status' => 0,'msg' => '“短信验证码”错误'));
            exit;
        }
        Common::session('msg_code', null);

        //找回密码信息验证
        $validataion = Validation::factory($this->request->post());
        $validataion->rule('phone', 'phone');
        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            if($keys[0] == 'phone')
            {
                echo json_encode(array('status' => 0, 'msg' => '“手机号码”格式错误'));
                exit;
            }
        }
        $updateArr = array('mobile' => $phone);
        $st_supplier_id = intval(Cookie::get('st_supplier_id'));
        $whereStr = "id='{$st_supplier_id}'";

        $rtn = Model_Supplier::update_field_by_where($updateArr,$whereStr,'supplier');
        if ($rtn)
        {
            echo json_encode(array('status' => 1, 'msg' => '修改成功'));
            exit;
        }
        else
        {
            echo json_encode(array('status' => 0, 'msg' => '修改失败'));
            exit;
        }
    }

}