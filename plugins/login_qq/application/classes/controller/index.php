<?php

/**
 * 微信登陆
 * Class Controller_Index
 */
class Controller_Index extends Stourweb_Controller
{
    private $_api;
    private $_conf = null;

    //初始化设置
    public function before()
    {
        parent::before();
        $this->_conf();
        $this->_api = VENDORPATH . 'api/';
        require $this->_api . 'qq.class.php';
    }

    //首页
    public function action_index()
    {
        if (isset($_GET['refer']))
        {
            Cookie::set('_refer', $_GET['refer']);
        }
        else
        {
            die();
        }
        $author = new qqPHP($this->_conf['appid'], $this->_conf['appkey'], $this->_conf['callback']);
        $url = $author->login_url();
        header("Location:{$url}");
        exit;
    }

    //第三方回调
    public function action_back()
    {
        $user = array();
        $code = $_GET['code'];
        $author = new qqPHP($this->_conf['appid'], $this->_conf['appkey'], $this->_conf['callback']);
        $token = $author->access_token($code);//获取access-toking
        $openid = $author->get_openid($token);
        $author = $author->get_user_info($openid, $token);
        if (!empty($openid))
        {
            $user['openid'] = $openid;
            $user['nickname'] = $author['nickname'];
            $user['litpic'] = $author['figureurl_qq_2'];
            $user['from'] = 'qq';
            //登陆状态
            $member = Common::islogin();
            if (!empty($member))
            {
                $user['mid'] = $member['mid'];
                Common::third_login_bind($user);
            }
            $rs = Common::st_query('member_third', "`openid`='{$user['openid']}' and `from`= '{$user['from']}'", '*', true);
            //openid已存在
            if (!empty($rs))
            {
                if (!empty($rs['nickname']))
                {
                    unset($user['nickname']);
                }
                Common::write_login_info(array_merge($rs, $user));
                $this->request->redirect(Cookie::get('_refer'));
            }
            $view = View::factory('default/' . Common::st_platform());
            $view->user = $user;
            $content = Common::head_bottom();
            $view = str_replace(array('<stourweb_title/>', '<stourweb_content/>', '<stourweb_header/>'), array('绑定账号', $view->render(), ''), $content);
            $this->response->body($view);
        }
        else
        {
            //跳转至登陆也
            $this->request->redirect(Common::get_main_host() . '/member/login');
        }
    }

    //绑定账号
    public function action_bind()
    {
        echo Common::third_bind($_POST);
    }

    /**
     * 配置第三方登陆信息
     */
    private function _conf()
    {
        $arr = DB::select()->from('sysconfig')->where("varname in('cfg_qq_appid','cfg_qq_appkey')")->execute()->as_array();
        $info = array(
            "callback" => Common::get_main_host() . "/plugins/login_qq/index/back/"
        );
        foreach ($arr as $v)
        {
            if ($v['varname'] == 'cfg_qq_appid')
            {
                $info['appid'] = $v['value'];
            }
            if ($v['varname'] == 'cfg_qq_appkey')
            {
                $info['appkey'] = $v['value'];
            }
        }
        $this->_conf = $info;
    }
}