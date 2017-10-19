<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 用户登录
 * Class Controller_Pc_Login
 */
class Controller_Pc_Login extends Stourweb_Controller
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
     * 登陆首页
     */
    public function action_index()
    {
        $is_code = Cookie::get('login_num') ? true : false;
        $this->assign('is_code', $is_code);
        $this->display('login/login');
    }

    /**
     * 退出登陆
     */
    public function action_login_out()
    {
        $this->_model->login_out();
        $referer = $_SERVER['HTTP_REFERER'];//来源地址
        $this->request->redirect($referer);
    }

    /**
     * 登录验证
     */
    public function action_ajax_do_login()
    {
        if(!$this->request->is_ajax())
        {
            echo json_encode(array('status' => 0,'msg' => '请求异常'));
            exit;
        }

        $code = Common::remove_xss(Arr::get($_POST,'code'));
        $is_code = Cookie::get('login_num') ? true : false;
        if($is_code)
        {
            if (!Captcha::valid($code))
            {
                echo json_encode(array('status' => 0,'msg' => '“验证码”错误'));
                exit;
            }
        }
        Cookie::set('login_num',intval(Cookie::get('login_num')) + 1);

        $loginname = Common::remove_xss(Arr::get($_POST,'loginname'));
        $loginpwd = Common::remove_xss(Arr::get($_POST,'loginpwd'));

        //注册信息验证
        $validataion = Validation::factory($this->request->post());
        $validataion->rule('loginname', 'phone');
        $validataion->rule('loginpwd', 'not_empty');
        $validataion->rule('loginpwd', 'min_length', array(':value', '6'));
        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            if($keys[0] == 'loginname')
            {
                echo json_encode(array('status' => 0, 'msg' => '“手机号码”格式错误'));
                exit;
            }
            if($keys[0] == 'loginpwd')
            {
                echo json_encode(array('status' => 0, 'msg' => '“密码”格式错误'));
                exit;
            }
        }

        $result = $this->_model->login($loginname, $loginpwd);

        if(!empty($result))
        {
            if($result['id'] > 0)
            {
                echo json_encode(array('status' => 1, 'msg' => '登录成功'));
                exit;
            }
            else
            {
                echo json_encode(array('status' => 0, 'msg' => '用户名或密码错误'));
                exit;
            }
        }
        else
        {

            echo json_encode(array('status' => 0, 'msg' => '用户名或密码错误'));
            exit;
        }
    }
}