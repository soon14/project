<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Photoshow
 * @desc 活动总控制器
 */
class Controller_Photoshow extends Stourweb_Controller
{
    private $_typeid =107;   // 线上活动
    private $appId = 'wxdf8497303505ae0d';
    private $appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';

    private  $admin   = 'feng';// 用于 活动中的调试链接

    public function before()
    {
        parent::before();

        $openid  =Common::session("openid");
        if(empty($openid)){
            $arr =  Model_Mitao::GetOpenid($this->appId,$this->appSecret);
            Common::session("openidArr",$arr);
            Common::session("openid",$arr['openid']);
        }
        //分享用到的参数
        $signPackage = $this->GetSignPackage();
        $this->assign('signPackage',$signPackage);
        $this->assign('typeid',$this->_typeid);

    }

    public function action_index()
    {
        // **注意 ** 要在每个sql 语句中加 上 是属于哪个 活动的条件
        //  活动的id
        $acid  = $this->activity_id;

        //
        //$admin = Common::remove_xss(Arr::get($_GET,'feng'));
        $admin =  Model_Activity::handle_fun($_GET,'feng');
        //  更新  对应活动 的阅读量
        Model_Activity::update_shownum($acid);
        //检测用户是符合参加活动的条件
        $isPart = $this->partActivity('index');
        $this->assign('isPart', $isPart);

        $this -> assign('openid',Common::session("openid"));
        $aid = Common::remove_xss(Arr::get($_GET,'aid'));
        //if(!empty($aid)){
            if($acid==3){

                 $bgtime  = $this ->begintime;
                  $bgtime =strtotime($bgtime);
                 if($bgtime<time()){
                     $this->display('activity/index_3');
                 }

            }
            elseif($acid==2){//  活动 2 集红叶秋山免费游
                /*
                 *     首先分两大类  活动中 和 活动后
                 *        活动中 分  进入该页面的用户 是否参与
                 *        活动后 没有分类
                 * */
                //  该期活动的 奖品 内容
                $proinfo = Model_Activity::get_prize($acid);
                //  判断用户 是否参与活动
                $player_id =Model_Activity::is_joinpart($acid,$isPart);
                //显示兑换数据
                $exchangelist =Model_Activity::exchangeinfo($acid);

                $over_time    = strtotime("2016-10-24 17:00");//活动结束时间
                $this -> assign('playerid',$player_id);
                $this ->assign('overtime',$over_time);
                $this->assign('exchangelist', $exchangelist);
                //  view 页面 对应活动的 id
                if($admin=='feng'){
                    $this -> display('activity/index_ceshi');
                }else{
                    $this -> display('activity/index_'.$acid);
                }
                // $this -> display('activity/index_'.$acid);
            }
            elseif($acid==1) {// 活动 1 集游票活动

                $sql = "select a.`id` as `id`,`headimgurl`,`getpay` from `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid where a.openid='$isPart' and a.act_id=$acid ";
                $ar = DB::query(1, $sql)->execute()->as_array();
                if (empty($ar)) {
                    //显示兑换数据
                    $sql = "SELECT `exchange_time`,`nickname`,`name` FROM `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid LEFT JOIN `sline_activity_prize` c ON a.exchange_pid=c.id WHERE a.exchange_pid != 0 and a.act_id=$acid ORDER BY a.exchange_time DESC limit 0,20";
                    $exchangelist = DB::query(1, $sql)->execute()->as_array();
                    $this->assign('exchangelist', $exchangelist);
                    $this->display('activity/index');
                } else {
                    if (time() > strtotime("2016-09-29 17:00:00")) {
                        $this->assign('showmsg', '活动已经结束');
                    } else {
                        $this->assign('showmsg', '你已经参加过啦');
                    }
                    //显示兑换数据
                    $sql = "SELECT `exchange_time`,`nickname`,`name` FROM `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid LEFT JOIN `sline_activity_prize` c ON a.exchange_pid=c.id WHERE a.exchange_pid != 0 and a.act_id=$acid ORDER BY a.exchange_time DESC limit 0,20";
                    $exchangelist = DB::query(1, $sql)->execute()->as_array();
                    $this->assign('exchangelist', $exchangelist);
                    $this->assign('result', $ar);
                    $this->display('activity/index_over');
                }
            }
//        }else{
//          //  $this->display('activity/index_3');
//        }

    }
    /**
     * 详细页
     */
    public function action_show()
    {
        //  用于 活动中的调试 页面
        $admin = Common::remove_xss(Arr::get($_GET,'feng'));
        // 活动id
        $id = Common::remove_xss($this->request->param("aid"));

        $openid =Common::session("openid");

        //点击率加一
        Product::update_click_rate($id, $this->_typeid);
        //线路详情
        $info = Model_Photoshow::detail($id);
        //banner  图
        $info['piclist'] = Product::pic_list($info['piclist']);
        // 奖品列表图
        $info['piclist1'] = Product::pic_list($info['piclist1']);
        //  该活动是否已过期
        $compare_time     = intval(time())-strtotime($info['timeover'])-86400;

        $info['isover']   = $compare_time >0 ? true :false;

        //  检验是否参与本次摄影活动
        $isJoinAct     =Model_Photoshow::checkJoinAct($info['id'],$openid);

        $this->assign("info",$info);
        $this->assign("isJoinAct",$isJoinAct);

        $this->display("photoshow/newshow");


    }

    public function action_joinpart(){

        $id = Common::remove_xss(Arr::get($_GET,'aid'));

        $info = Model_Photoshow::detail($id);

        $arr = Common::session('openidArr');

        $openid         = $arr['openid'];
        $access_token  = $arr['access_token'];// 有效期 2小时
        $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
        $userinfo        = Model_Article::curl($url_getuserinfo);

        if(isset($userinfo['errcode'])){

            $arr = Model_Mitao::GetOpenid2('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
            Common::session("openidArr",$arr);
            Common::session("openid",$arr['openid']);
            $openid         = $arr['openid'];
            $access_token  = $arr['access_token'];// 有效期 2小时
            $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
            $userinfo        = Model_Article::curl($url_getuserinfo);

        }

        $this->assign('userinfo',$userinfo);
        $this->assign('info',$info);
        $this->display("photoshow/public");
    }
    /**     * 增加作品     */
    public function action_savePhotos()
    {


        $_POST = Common::remove_xss($_POST);
        unset($_POST['fileVal']);
        //增加作品
        $_POST['addtime'] = time();
        $_POST['isshow'] = 1;
        $_POST['piclist'] = trim($_POST['piclist']);
        list(, $row) = DB::insert('act_comment', array_keys($_POST))->values(array_values($_POST))->execute();
        if ($row > 0)
        {

            Common::message(array('message' => __('上传成功'), 'jumpUrl' => $this->cmsurl . ''));
        }
        else
        {
            Common::message(array('message' => __('error_comment'), 'jumpUrl' => $_SERVER['HTTP_REFERER']));
        }
    }


    public function getSignPackage() {
        $jsapiTicket = $this->getJsApiTicket();

        // 注意 URL 一定要动态获取，不能 hardcode.
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $timestamp = time();
        $nonceStr = $this->createNonceStr();

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
            "appId"     => $this->appId,
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature,
            "rawString" => $string
        );
        return $signPackage;
    }

    private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    private function getJsApiTicket() {
        // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("jsapi_ticket.php"));
        if ($data->expire_time < time()) {
            $accessToken = $this->getAccessToken();
            // 如果是企业号用以下 URL 获取 ticket
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
            $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
            $res = json_decode($this->httpGet($url));
            $ticket = $res->ticket;
            if ($ticket) {
                $data->expire_time = time() + 7000;
                $data->jsapi_ticket = $ticket;
                $this->set_php_file("jsapi_ticket.php", json_encode($data));
            }
        } else {
            $ticket = $data->jsapi_ticket;
        }

        return $ticket;
    }

    private function getAccessToken() {
        // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("access_token.php"));
        if ($data->expire_time < time()) {
            // 如果是企业号用以下URL获取access_token
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
            $res = json_decode($this->httpGet($url));
            $access_token = $res->access_token;
            if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                $this->set_php_file("access_token.php", json_encode($data));
            }
        } else {
            $access_token = $data->access_token;
        }
        return $access_token;
    }

    private function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }

    private function get_php_file($filename) {
        return trim(substr(file_get_contents($filename), 15));
    }
    private function set_php_file($filename, $content) {
        $fp = fopen($filename, "w");
        fwrite($fp, "<?php exit();?>" . $content);
        fclose($fp);
    }

}
