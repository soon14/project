<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Activity
 * @desc 活动总控制器
 */
class Controller_Comment extends Stourweb_Controller
{


    private $appId = 'wxdf8497303505ae0d';
    private $appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';
    /*
     *    留言 只需文字
     *    每个用户只能 留言 一次
     */

    public function before()
    {
        parent::before();

        //分享用到的参数
       // $signPackage = $this->GetSignPackage();
      //  $this->assign('signPackage',$signPackage);

    }
    /**
     * 评论首页
     */
    public function action_index()
    {

        $refresh_token  = Common::session('refresh_token');
        if(empty($refresh_token)){
            //获取点前页面的的地址
            $url    = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

            //  获取 微信用用户 信息
            if(!empty($_GET['code'])){
                $code  = isset($_GET['code'])?$_GET['code']:"no code";

                $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxdf8497303505ae0d&secret=ed95f4a2529b5b39f886e3df0e0511bd&code=$code&grant_type=authorization_code";

                $arr = Model_Article::curl($url_getToken);

                Common::session('refresh_token',$arr['refresh_token']);

                setcookie('access_token',$arr['access_token'],time()+7200,"/");
                setcookie('openid',$arr['openid'],time()+7200,"/");

            }else{

                $redirect_url = urlencode($url);
                header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdf8497303505ae0d&redirect_uri='.$redirect_url.'&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect');
            }
        }else{
            $url_getToken = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=wxdf8497303505ae0d&grant_type=refresh_token&refresh_token=".$refresh_token;
            $arr = Model_Article::curl($url_getToken);
        }
        if(isset($arr['errcode'])){

            echo 40029;exit;
        }else{

            $openid         = $arr['openid'];

            $access_token  = $arr['access_token'];// 有效期 2小时

            $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';

            $userinfo        = Model_Article::curl($url_getuserinfo);

            //   校验码
            $crsf_code  =  md5(time());

            Common::session('crsf_code', $crsf_code);

            //   取得 所有留言
            $all_coments  =  self::get_all_comment();
            //
             $sql = " SELECT * from `sline_activity_comment` where openid='$userinfo[openid]' and pid=0 and isshow = 1 ";

            $iscoment = DB::query(1,$sql) ->execute()->as_array();
//


            $this->assign('userinfo',$userinfo);

            $this->assign('iscoment',$iscoment);

            $this->assign('all_coments',$all_coments);

            $this->assign('crsf_code',$crsf_code);

            $this->display('Acomment/index');
        }

    }

    /*
     *  留言页
     */
    public function action_comment()
    {

        // 校验码
        $crsf_code  =  md5(time());

        Common::session('crsf_code', $crsf_code);

        $this ->assign('crsf_code',$crsf_code);
        $this->display('Acomment/message');
    }
    /*
     *   添加 评论
     */
    public  function  action_ajax_addcomment(){


        // 获取 内容
        $content = Model_Activity::handle_fun($_POST,'content');

//         //  获取的 pid
//         $pid    = Model_Activity::handle_fun($_POST,'pid');
        //  获取校验码
        $crsf_code    = Model_Activity::handle_fun($_POST,'crsf_code');

        $message   =array();

        if($crsf_code!=Common::session('crsf_code')){
              $message   = array('msg' =>'校验码错误','status' =>0);
            echo json_encode($message);
            exit;
        }
        if(empty($content)){
            $message   = array('msg' =>'留言内容不能空~','status' =>0);

            echo json_encode($message);
            exit;
        }
        if(strlen($content)>45){
            $message   = array('msg' =>'留言内容限制15字~','status' =>0);

            echo json_encode($message);
            exit;
        }
        //   用户刷新access_token
        $refresh_token  = Common::session('refresh_token');

        $access_token   = $_COOKIE['access_token'];//  获取

        $openid         = $_COOKIE["openid"];

        $pid   = empty($pid) ?  0 : $pid;

        $time  = date('Y-m-d H:i:s',time());

        if(!empty($access_token)&&!empty($openid)){

            $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';

            $userinfo        = Model_Article::curl($url_getuserinfo);

        }else{

            if(!empty($refresh_token)) {

                $url_getToken = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=wxdf8497303505ae0d&grant_type=refresh_token&refresh_token=".$refresh_token;

                $arr = Model_Article::curl($url_getToken);
            }



            if(isset($arr['errcode'])){
                echo 40029;exit;
            }else{

                $openid         = $arr['openid'];

                $access_token  = $arr['access_token'];// 有效期 2小时

                setcookie('access_token',$access_token,time()+7200,"/");

                setcookie('openid',$openid,time()+7200,"/");

                $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';

                $userinfo        = Model_Article::curl($url_getuserinfo);

            }
        }


        if(isset($userinfo['errcode'])){

            $message   = array('msg' =>$userinfo['errcode'],'status' =>0);

            echo  json_encode($message);exit;
        }else {

            //  检测是否评论
            //$iscoment = ORM::factory('activity_comment')->where('openid', '=', $userinfo['openid'])->and_where('isshow','=',1)->and_where('pid','=',0)->find()->as_array();
//            $sql = " SELECT * from `sline_activity_comment` where openid='$userinfo[openid]' and pid=0 and isshow = 1 ";
//
//            $iscoment = DB::query(1,$sql) ->execute()->as_array();
//
//            if (empty($iscoment)) {

                $model = ORM::factory('activity_comment');

                $model->pid = $pid;

                $model->content = $content;

                $model->openid = $userinfo['openid'];

                $model->nickname = $userinfo['nickname'];

                $model->headimgurl = $userinfo['headimgurl'];

                $model->sex = $userinfo['sex'];

                $model->province = $userinfo['province'];

                $model->city = $userinfo['city'];

                $model->country = $userinfo['country'];

                $model->refresh_token = $refresh_token;

                $model->addtime =  $time;

                $flag  = $model->save();
                if($flag){
                    $message   = array('msg' =>'留言成功~','status' =>1,'id'=>$model->id);
                    echo json_encode($message);exit;
                }

//            }else{
//
//                echo  json_encode('您已留言~');exit;
//            }
        }



    }
    /*
     *  列表页
     */
    public function action_list()
    {
        $refresh_token  = Common::session('refresh_token');

        $openid         = $_COOKIE['openid'];

        $me_openid    = Model_Activity::handle_fun($_GET,'me_openid');

        if(empty($openid)){

            $arr        = self::get_wxuser_openid($refresh_token);

            $openid     = $arr['openid'];
        }
        //  取得 进入用户的 留言
        $sql = "select * from `sline_activity_comment` where openid = '$openid' and pid = 0 and isshow =1 ";

        $userinfo  = DB::query(1,$sql)->execute()->as_array();
       // var_dump($userinfo);exit;
        $all_coments  =  self::get_all_comment();

        $this->assign('all_coments',$all_coments);

        $this->assign('me_openid',$me_openid);

        $this->assign('info',$userinfo[0]);

        $this ->assign('openid',$arr['openid']);

        //$this->display('Acomment/liuyan');
        $this->display('Acomment/time');
    }
    /*
     *   ajax  获取 评论数据
     */
    public  function action_ajax_getcomment(){


        $refresh_token  = Common::session('refresh_token');

        $openid         = $_COOKIE['openid'];

        if(empty($openid)){

            $arr        = self::get_wxuser_openid($refresh_token);

            $openid     = $arr['openid'];
        }

        $page      = Common::remove_xss(Arr::get($_GET, 'page'));
        $pagesize  = Common::remove_xss(Arr::get($_GET, 'pagesize'));

        $me_openid  = Common::remove_xss(Arr::get($_GET, 'me_openid'));


        $offset =(intval($page) - 1) * $pagesize;

        if(!empty($me_openid)){

            $rows = self::search_comment3($me_openid,$offset,$pagesize);
        }else{

            $rows = self::search_comment($openid,$offset,$pagesize);
        }


        if (count($rows) <= 0)
        {
            echo json_encode(false);
            return;
        }

        echo Product::list_search_comment($rows, $page,$pagesize);
        exit;
    }
    /*
    *   ajax 动态  获取 评论数据
    */
    public  function action_ajax_getcomment2(){


        $id      = Common::remove_xss(Arr::get($_POST, 'id'));

       // echo $id;exit;
        $rows = self::search_comment2($id,6);

        echo json_encode($rows);
        exit;
    }
    /*
     *  二级 评论页面
     */
    public function action_Two_comment()
    {

        //
        $commenter_id  =  Common::remove_xss(Arr::get($_GET, 'comid'));
        $commenter_id  =1;
        $user_comment = ORM::factory('activity_comment',$commenter_id)->find()->as_array();
        $user_comment['comments'] = self::get_total_comment($commenter_id);
        $this ->assign('info',$user_comment);
        $this->display('Acomment/Two_comment');
    }
    /*
     *   添加  二级评论
     */
    public function action_Two_addcomment(){

    }
    /*
     *   获取 本次活动的所有留言
     */
    private  function  get_all_comment(){

        $sql  = "SELECT *  FROM `sline_activity_comment` where ";

        $sql .= " isshow= 1 and pid = 0 order by addtime asc limit 0,6 ";

        $arr  = DB::query(1, $sql)->execute()->as_array();

        return $arr;
    }
    /*
     *  获取 对某个评论的总数
     */
    private function get_total_comment($user_commentid){

        if(!empty($user_commentid)) {

            $sql = "SELECT count(*) as  dd  FROM `sline_activity_comment` where ";

            $sql .= " pid =$user_commentid order by addtime desc ";

            $arr = DB::query(1, $sql)->execute()->get('dd');

            return $arr;
        }else{
            return 0 ;
        }

    }
    /*
    *  获取评论数据
    *
    */
    private function search_comment3($openid,$offset,$pagesize,$pid=0){

        $sql   = "SELECT * FROM `sline_activity_comment` where ";

        $sql  .= " openid='$openid' and isshow=1  and pid = $pid ORDER BY addtime desc ";

        $sql  .= " limit {$offset},{$pagesize}";

        $arr  =DB::query(1,$sql)->execute()->as_array();

        return $arr;

    }
    /*
     *  获取评论数据
     *
     */
    private function search_comment($openid,$offset,$pagesize,$pid=0){

        $sql   = "SELECT * FROM `sline_activity_comment` where ";

        $sql  .= " openid!='$openid' and isshow=1  and pid = $pid ORDER BY addtime desc ";

        $sql  .= " limit {$offset},{$pagesize}";

        $arr  =DB::query(1,$sql)->execute()->as_array();

        return $arr;

    }
    /*
    *  获取评论数据
    *
    */
    private function search_comment2($offset,$pagesize){

        $sql   = "SELECT * FROM `sline_activity_comment` where ";

        $sql  .= "   id>$offset and isshow=1  and pid = 0 ORDER BY id asc ";

        $sql  .= " limit 0,{$pagesize}";

        $arr  =DB::query(1,$sql)->execute()->as_array();

        return $arr;

    }
    /*
     *   获取微信用户的openid
     *
     * $refresh_token   用户刷新access_token
     *
     */
    private  function  get_wxuser_openid($refresh_token){

        $url_getToken = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=wxdf8497303505ae0d&grant_type=refresh_token&refresh_token=".$refresh_token;

        $arr = Model_Article::curl($url_getToken);

        return  $arr;
        /*
         * { "access_token":"ACCESS_TOKEN",

             "expires_in":7200,

             "refresh_token":"REFRESH_TOKEN",

             "openid":"OPENID",

             "scope":"SCOPE" }
         */
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
