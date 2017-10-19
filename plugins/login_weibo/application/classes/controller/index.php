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
        require $this->_api . 'sina.class.php';
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
        $author = new sinaPHP($this->_conf['appid'], $this->_conf['appkey'], $this->_conf['callback']);
        $url = $author->login_url();
        header("Location:{$url}");
        exit;
    }

    //第三方回调
    public function action_back()
    {
        $user = array();
        $code = $_GET['code'];
        $author = new sinaPHP($this->_conf['appid'], $this->_conf['appkey'], $this->_conf['callback']);
        $arr = $author->access_token($code);
        $author->access_token = $arr['access_token'];
        $me = $author->get_uid();
        $uid = $me['uid'];
        $author = $author->show_user_by_id($uid);
        if (isset($author['id']))
        {
            $user['openid'] = $author['id'];
            $user['nickname'] = $author['screen_name'];
            $user['litpic'] = $author['avatar_large'];
            $user['from'] = 'weibo';
            //登陆状态
            $member = Common::islogin();
            if (!empty($member))
            {
                $user['mid'] = $member['mid'];
                Common::third_login_bind($user);
            }
            $rs = Common::st_query('member_third', "`openid`='{$user['openid']}' and `from`= '{$user['from']}'", '*', true);
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
        $arr = DB::select()->from('sysconfig')->where("varname in('cfg_sina_appkey','cfg_sina_appsecret')")->execute()->as_array();
        $info = array(
            "callback" => Common::get_main_host() . "/plugins/login_weibo/index/back/"
        );
        foreach ($arr as $v)
        {
            if ($v['varname'] == 'cfg_sina_appkey')
            {
                $info['appid'] = $v['value'];
            }
            if ($v['varname'] == 'cfg_sina_appsecret')
            {
                $info['appkey'] = $v['value'];
            }
        }
        $this->_conf = $info;
    }
}