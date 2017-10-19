<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 用户登录
 * Class Controller_Mobile_Login
 */
class Controller_Mobile_Login extends Stourweb_Controller
{
    //默认对象
    private $_model;
    private $_id;
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
        $this->_id = Cookie::get('st_supplier_id');
        $code = md5(time());
        Common::session('frmcode',$code);
        if($this->_id > 0)
        {
            $account = Model_Supplier::get_supplier_byid($this->_id);
            $login_token = Cookie::get('login_token');
            if($login_token != $account['token'])
            {
                $this->assign('msg', '你的账号已在其它地方登陆');
            }
        }
        $this->assign('code',$code);
        $this->display('login');
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
        $orgcode = Common::session('frmcode');
        if($code!=$orgcode)
        {
            echo json_encode(array('status' => 0,'msg' => '校验码错误'));
            exit;
        }
        Cookie::set('login_num',intval(Cookie::get('login_num')) + 1);

        $loginname = Common::remove_xss(Arr::get($_POST,'loginname'));
        $loginpwd = Common::remove_xss(Arr::get($_POST,'loginpwd'));

        //注册信息验证
        $validataion = Validation::factory($this->request->post());
        $validataion->rule('loginname', 'not_empty');
        $validataion->rule('loginname', 'min_length', array(':value', '6'));
        $validataion->rule('loginpwd', 'not_empty');
        $validataion->rule('loginpwd', 'min_length', array(':value', '6'));
        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            if($keys[0] == 'loginname')
            {
                echo json_encode(array('status' => 0, 'msg' => '用户名格式错误'));
                exit;
            }
            if($keys[0] == 'loginpwd')
            {
                echo json_encode(array('status' => 0, 'msg' => '密码格式错误'));
                exit;
            }
        }

        $result = $this->_model->login($loginname, $loginpwd);
        if(!empty($result))
        {

            if($result['id'] > 0)
            {
                $login_token = md5($result['mobile'].$result['password']);
                echo json_encode(array('status' => 1, 'msg' => '登录成功','token'=>$login_token));
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

    //通过token登陆
    public function action_ajax_logintoken_login()
    {
        $login_token = Arr::get($_POST,'token');
        $out = array();
        if(!empty($login_token))
        {
            $result = $this->_model->login_by_token($login_token);
            if($result['id']>0)
            {
                $out['status'] = 1;
            }
        }
        echo json_encode($out);

    }
}