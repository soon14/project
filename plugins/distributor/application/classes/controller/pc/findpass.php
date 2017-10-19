<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 找回密码
 * Class Controller_Pc_Findpass
 */
class Controller_Pc_Findpass extends Stourweb_Controller
{
    //默认对象
    private $_model;

    /**
     * 初始化
     */
    public function before()
    {
        parent::before();
        $this->_model = new Model_Supplier();
    }

    /**
     * 找回密码页面
     */
    public function action_index()
    {
        $sms = DB::select()->from('sms_msg')->where('msgtype="reg_msgcode"')->execute()->current();
        $this->assign('isopen', $sms['isopen']);
        $this->display('login/findpass');
    }

    /**
     * 找回密码第一步
     */
    public function action_ajax_do_setp1()
    {
        if(!$this->request->is_ajax())
        {
            echo json_encode(array('status' => 0,'msg' => '请求异常'));
            exit;
        }

        $phone = Common::remove_xss(Arr::get($_POST,'phone'));
        $smscode = Common::remove_xss(Arr::get($_POST,'smscode'));
        $code = Common::remove_xss(Arr::get($_POST,'code'));

        if (!Captcha::valid($code))
        {
            echo json_encode(array('status' => 0,'msg' => '“验证码”错误'));
            exit;
        }
        if (Common::session('msg_code') != $smscode && Common::session('msg_phone') != $phone)
        {
            echo json_encode(array('status' => 0,'msg' => '“短信验证码”错误'));
            exit;
        }

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
        $data = $this->_model->supplier_find($phone,null,false);
        if (!empty($data))
        {
            echo json_encode(array('status' => 1, 'msg' => '该电话号码已存在'));
            exit;
        }
        else
        {
            echo json_encode(array('status' => 2, 'msg' => '该电话号码不存在'));
            exit;
        }
    }

    /**
     * 找回密码第二步
     */
    public function action_ajax_do_setp2()
    {
        if(!$this->request->is_ajax())
        {
            echo json_encode(array('status' => 0,'msg' => '请求异常'));
            exit;
        }

        $password = Common::remove_xss(Arr::get($_POST,'password'));
        $account = Common::remove_xss(Arr::get($_POST,'account'));
        $smscode = Common::remove_xss(Arr::get($_POST,'smscode'));
        $code = Common::remove_xss(Arr::get($_POST,'code'));

        if (!Captcha::valid($code))
        {
            echo json_encode(array('status' => 0,'msg' => '“验证码”错误'));
            exit;
        }
        if (Common::session('msg_code') != $smscode && Common::session('msg_phone') != $account)
        {
            echo json_encode(array('status' => 0,'msg' => '“短信验证码”错误'));
            exit;
        }
        Common::session('captcha_response', null);
        Common::session('msg_code', null);

        //找回密码信息验证
        $validataion = Validation::factory($this->request->post());
        $validataion->rule('account', 'phone');
        $validataion->rule('password', 'not_empty');
        $validataion->rule('password', 'min_length', array(':value', '6'));
        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            if($keys[0] == 'account')
            {
                echo json_encode(array('status' => 0, 'msg' => '“手机号码”格式错误'));
                exit;
            }
            if($keys[0] == 'password')
            {
                echo json_encode(array('status' => 0, 'msg' => '“密码”最小长度为六位'));
                exit;
            }
        }
        $password = md5($password);
        $data = array(
            'account' => $account,
            'password' => $password
        );
        $rtn = $this->_model->findpass($data);
        if ($rtn == 'error_member_not_exists')
        {
            echo json_encode(array('status' => 0, 'msg' => '该电话号码不存在'));
            exit;
        }
        elseif ($rtn > 0)
        {
            $this->_model->login($account, $password);
            echo json_encode(array('status' => 1, 'msg' => '找回密码成功'));
            exit;
        }
        else
        {
            echo json_encode(array('status' => 0, 'msg' => '找回密码异常，请重试'));
            exit;
        }
    }
}