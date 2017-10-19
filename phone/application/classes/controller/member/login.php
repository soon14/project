<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Member_Login
 * 会员登陆
 */
class Controller_Member_Login extends Stourweb_Controller
{
    private $referer;

    public function before()
    {
        parent::before();
        //09.29  fengjishu 隐藏
        /*
         * feng
         * 理解  $this->loginUrl   默认 没有重定向的 地址
         * Cookie::get('referer')  获取 重定向的地址
         * 首先是1、
         * 1 登录页面 index方法中对重定向判断  设置变量 $this->referer
         *
         * 2: 然后把 $this->referer 写入 cookie
         */
       // $this->loginUrl = $this->cmsurl . 'member/login/index/' . md5(time() . rand(1000, 9999));
        $this->loginUrl = $this->cmsurl . 'member/linkman/index';
        $redirecturl  = Cookie::get('referer');

        $this->member = Common::session('member');
//        if (!empty($this->member))
//        {
//            header("Location:/phone/member/order/list"); 
//        }
    }

    //登录首页
    public function action_index()
    {
        if (isset($_GET['redirecturl']) && !empty($_GET['redirecturl']))
        {
            $this->referer = $_GET['redirecturl'];

        }
        else
        {
            $this->referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->loginUrl;

        }
        if (!stripos($this->referer, '/message/') && !stripos($this->referer, '/member/'))
        {
            Cookie::set('referer', $this->referer);

        }

        $bool = Common::session('login_num') ? false : true;
        Cookie::set('_version', 'mobile_5.0');
        $this->assign('one', $bool);
        $this->assign('reurl',$this->referer);
      //  $this->assign('url', Cookie::get('referer', $this->cmsurl));
        $this->display('member/login');
    }

    //登录检测
    public function action_ajax_check()
    {
        $user = Arr::get($_POST, 'user');
        $pwd = Arr::get($_POST, 'pwd');
        $code = Arr::get($_POST, 'code');
        $reurl = Arr::get($_GET,'reurl');//09.30 jia
        //验证码检测
        if (Common::session('login_num') && !Captcha::valid($code))
        {
            Common::session('login_num', 1);
            $message = array('msg' => __("error_code"), 'status' => 0);
            exit(json_encode($message));
        }
        Common::session('captcha_response', null);
        //数据验证
        $userType = strpos($_POST['user'], '@') ? 'email' : 'phone';
        $validataion = Validation::factory($_POST);
        $validataion->rule('pwd', 'not_empty');
        $validataion->rule('pwd', 'min_length', array(':value', '6'));
        $validataion->rule('user', 'not_empty');
        $validataion->rule('user', $userType);
        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            $message = array('msg' => __("error_{$keys[0]}_{$error[$keys[0]][0]}"), 'status' => 0);
            exit(json_encode($message));
        }
        $member = Model_Member::member_find($user, $pwd);
        if (empty($member))
        {
            Common::session('login_num', 1);
            $message = array('msg' => __("error_login"), 'status' => 0);
            exit(json_encode($message));
        }
        else
        {
            Model_Member::write_session($member, $user);
            //清空登录次数
            Common::session('login_num', null);
            //删除Cookie
          //  $message = array('url' => Cookie::get('referer', $this->cmsurl), 'status' => 1);
            //fengjishu 09.13 加 $redirecturl
           // $url  = Cookie::get('referer') ? Cookie::get('referer') : $this->loginUrl;//'/phone/member/order/list';//$this->loginUrl;
            $url  = !empty($reurl) ?$reurl : $this->loginUrl;//'/phone/member/order/list';//$this->loginUrl;
            $message = array('url' =>$url, 'status' => 1);

            #api{{
            $ucsynlogin = '';
            if (defined('UC_API') && include_once BASEPATH . '/uc_client/client.php')
            {
                //检查帐号
                list($uid, $loginname, $password, $email) = uc_user_login($user, $pwd);

                if ($uid > 0)
                {

                    //同步登录的代码
                    $ucsynlogin = uc_user_synlogin($uid);
                }
                else if ($uid == -1)
                {
                    $uid = uc_user_register($loginname, md5($password), '');
                    if ($uid > 0)
                    {
                        $ucsynlogin = uc_user_synlogin($uid);
                    }
                }
            }
            #/aip}}
            $message['js'] = $ucsynlogin;
            exit(json_encode($message));
        }
    }

    /**
     * ajax判断是否登陆
     */
    public function action_ajax_is_login()
    {
        //检测用户是否存在
        $userinfo = Common::session('member');

     if (empty($userinfo))
        {
            echo json_encode(array('status' => 0));
        }
        else
        {
            echo json_encode(array('status' => 1));
        }
    }

    //第三方登录
    public function action_third()
    {
        $forwardurl = Arr::get($_GET, 'forwardurl');
        //QQ
        $cfg_qq_appid = $GLOBALS['cfg_qq_appid'];
        $cfg_qq_appkey = $GLOBALS['cfg_qq_appkey'];
        //sina
        $cfg_sina_appkey = $GLOBALS['cfg_sina_appsecret'];
        $cfg_sina_appsecret = $GLOBALS['cfg_sina_appsecret'];
        //weixin
        $cfg_weixi_appkey = $GLOBALS['cfg_weixi_appkey'];
        $cfg_weixi_appsecret = $GLOBALS['cfg_weixi_appsecret'];
        //
        $qqlogin = $cfg_qq_appid && $cfg_qq_appkey ? 1 : 0;
        $sinalogin = $cfg_sina_appkey && $cfg_sina_appsecret ? 1 : 0;
        $weixinlogin = $cfg_weixi_appkey && $cfg_weixi_appsecret ? 1 : 0;
        if (!empty($GLOBALS['cfg_qq_appid']) && !empty($GLOBALS['cfg_qq_appkey']))
        {
            $this->assign('forwardurl', $forwardurl);
        }
        $this->assign('qqlogin', $qqlogin);
        $this->assign('sinalogin', $sinalogin);
        $this->assign('weixinlogin', $weixinlogin);
        $this->display('member/third');
    }

    //sina
    public function action_sina()
    {
        session_start();
        $code = $_REQUEST["code"];
        include(VENDORPATH . 'sina.class.php');
        $appkey = $GLOBALS['cfg_sina_appkey'];
        $appsecret = $GLOBALS['cfg_sina_appsecret'];
        $callback_url = $this->cmsurl . "member/login/sina";
        $sina = new sinaPHP($appkey, $appsecret, $callback_url);
        if (empty($code))
        {
            $url = $sina->login_url();
            header("location:{$url}");
            exit;
        }
        else
        {
            $ar = $sina->access_token($code);//获取access-toking
            $sina->access_token = $ar['access_token']; //
            $me = $sina->get_uid();
            $uid = $me['uid'];
            $me = $sina->show_user_by_id($uid);
            if (!empty($me['id']))
            {
                $sql = "select * from sline_member where `connectid`='{$me['id']}' and `from`='sina'";
                $row = DB::query(1, $sql)->execute()->as_array();
                $r = $row[0];
                if (!empty($r)) ////帐号已存在于数据库，则直接转向登陆操作
                {
                    $user = !empty($r['mobile']) ? $r['mobile'] : $r['email'];
                    Model_Member::write_session($r, $user);
                    $url = Cookie::get('referer', $this->cmsurl . $GLOBALS['cfg_phone_cmspath'] . '/');
                    header("Location:{$url}");
                }
                else
                {
                    //未存在于数据库中，跳转到注册绑定页面绑定用户.
                    $_SESSION['connectid'] = $me['id'];
                    $_SESSION['from'] = 'sina';
                    $url = $this->cmsurl . "member/login/savebind?uname=" . urlencode($me['screen_name']);
                    $url .= "&pwd=123456789&connectid=" . $me['id'] . '&from=sina';
                    header("Location:{$url}");
                }
            }
        }
    }

    //QQ登录
    public function action_qq()
    {
        session_start();
        $code = $_REQUEST["code"];
        include(VENDORPATH . 'qq.class.php');
        $appid = $GLOBALS['cfg_qq_appid'];
        $appkey = $GLOBALS['cfg_qq_appkey'];
        $callback_url = $this->cmsurl . "member/login/qq";
        $qq = new qqPHP($appid, $appkey, $callback_url);
        if (empty($code))
        {
            $url = $qq->login_url($_SESSION['state']);
            header("location:$url");
            exit;
        }
        else
        {
            $token = $qq->access_token($code);//获取access-toking
            $openid = $qq->get_openid($token); //获取openid
            if (!empty($openid))
            {
                $sql = "select * from sline_member where `connectid`='$openid' and `from`='qq'";
                $row = DB::query(1, $sql)->execute()->as_array();
                $r = $row[0];
                if (!empty($r))
                {
                    $user = !empty($r['mobile']) ? $r['mobile'] : $r['email'];
                    Model_Member::write_session($r, $user);
                    $url = Cookie::get('referer', $this->cmsurl . $GLOBALS['cfg_phone_cmspath'] . '/');
                    header("Location:{$url}");
                }
                else
                {
                    //未存在于数据库中，跳转到注册绑定页面绑定用户.介于腾讯的霸王条款,绑定注册页面禁用.
                    $user = $qq->get_user_info($openid, $token);
                    $_SESSION['connectid'] = $openid;
                    $_SESSION['from'] = 'qq';
                    $url = $this->cmsurl . "member/login/savebind?uname=" . urlencode($user['nickname']);
                    $url .= "&pwd=123456789&connectid=" . $openid . '&from=qq';
                    header("Location:{$url}");
                }
            }
        }
    }

    //weixin
    public function action_weixin()
    {
        session_start();
        $code = $_REQUEST["code"];
        include(VENDORPATH . 'weixin.class.php');
        $appid = $GLOBALS['cfg_weixi_appkey'];
        $appkey = $GLOBALS['cfg_weixi_appsecret'];
        $callback_url = $this->cmsurl . "member/login/weixin";
        $state = time();
        $weixin = new weixinPHP($appid, $appkey, $callback_url, $state);
        if (empty($code))
        {
            $url = $weixin->login_url();
            header("location:{$url}");
            exit;
        }
        else
        {
            $tokenarr = $weixin->access_token($code);//获取token及openid是一个数组
            $token = $tokenarr['access_token'];
            $openid = $tokenarr['openid']; //获取openid
            $user = $weixin->get_user_info($openid, $token);
            if (!empty($user))
            {
                $sql = "select * from sline_member where `connectid`='$openid' and `from`='weixin'";
                $row = DB::query(1, $sql)->execute()->as_array();
                $r = $row[0];
                if (!empty($r))
                {
                    $user = !empty($r['mobile']) ? $r['mobile'] : $r['email'];
                    Model_Member::write_session($r, $user);
                    $url = Cookie::get('referer', $this->cmsurl . $GLOBALS['cfg_phone_cmspath'] . '/');
                    header("Location:{$url}");
                    exit;
                }
                else
                {
                    //未存在于数据库中，跳转到注册绑定页面绑定用户.介于腾讯的霸王条款,绑定注册页面禁用.
                    $user = $weixin->get_user_info($openid, $token);
                    $_SESSION['connectid'] = $openid;
                    $_SESSION['from'] = 'weixin';
                    $url = $this->cmsurl . "member/login/savebind?uname=" . urlencode($user['nickname']);
                    $url .= "&pwd=123456789&connectid=" . $openid . '&from=weixin';
                    header("Location:{$url}");
                    exit;
                }
            }
        }
    }

    //绑定账号
    public function action_savebind()
    {
        @session_start();
        $member = array(
            'pwd' => md5(Arr::get($_GET, 'pwd')),
            'nickname' => Arr::get($_GET, 'uname'),
            'connectid' => Arr::get($_GET, 'connectid'),
            'jointime' => time(),
            'logintime' => time(),
            'jifen' => empty($GLOBALS['cfg_reg_jifen']) ? 0 : $GLOBALS['cfg_reg_jifen'],
        );
        $member['from'] = empty($_GET['from']) ? $_SESSION['from'] : $_GET['from'];
        list($member['mid'], $row) = DB::insert('member', array_keys($member))->values(array_values($member))->execute();
        if ($row)
        {
            $user = !empty($r['mobile']) ? $r['mobile'] : $r['email'];
            Model_Member::write_session($r, $user);
            $url = Cookie::get('referer', $this->cmsurl . $GLOBALS['cfg_phone_cmspath'] . '/');
            header("Location:{$url}");
            exit;
        }
    }

    //注销登录
    public function action_ajax_out()
    {
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;
        Common::session('member', NULL);
        header("Location:{$referer}");
    }

    //ajax获取登陆信息
    public function action_ajax_islogin()
    {
        $bool = 0;
        $member = Common::session('member');
        if (!empty($member))
        {
            $bool = 1;
            $member['orderNum'] = count(Model_Member_Order::unpay($member['mid']));
        }
        echo 'is_login(' . json_encode(array('islogin' => $bool, 'info' => $member)) . ');';
    }
    //退出登陆
    public function action_loginout()
    {
        $referer = $_SERVER['HTTP_REFERER'];//来源地址
       //Cookie::delete('st_username');

       // Cookie::delete('st_userid');
       // echo $referer;exit;
        Common::session('member',null);
       // echo $referer;exit;
      //  Model_Member::login_out();
        $this->request->redirect($referer);

    }
}