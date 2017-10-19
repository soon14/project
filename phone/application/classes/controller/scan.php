<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Activity
 * @desc 答题总控制器
 */
class Controller_Scan extends Stourweb_Controller
{

    /*
     *     在线扫描二维码  和 答题活动
     *    1: 临时二维码 的场景值id  含义
     *          1  关卡1 开始；2 关卡1 结束
     *          3  关卡2 开始；4 关卡2 结束
     *          5  关卡3 开始；6 关卡3 结束
     *          7  关卡4 开始；8 关卡4 结束
     *
     *
     */
    private  static  $openid='';

    private  static  $times =array();

    public function before()
    {
        parent::before();
        self::$openid =Common::session("openid");
        if(empty(self::$openid)){

           $openid= Model_Mitao::GetOpenid_base('wxc1ee3ce4c8424f1b','a616e600fa4eaddacb4fa16a8d64af4f');
            Common::session("openid",$openid);
            self::$openid =Common::session("openid");
        }

        $action = $this->request->action();

        $actions = array('stormBrain','maze','oneHitToTheBody','SteepBrave','gameover');
        if(in_array($action,$actions)){

            $times = DB::select()->from('scan')->where('openid','=',self::$openid)->execute()->as_array();
            self::$times=$times;

        }

    }

    public  function  action_dati(){


        $this->display('scan/show_dati');
    }
    public  function  action_persimmonBattle(){

        $this->display("scan/persimmonBattle");


    }
    public  function  action_stormBrain(){

        // 计算 第一关花费的时间
        $times = self::$times[0];
        $time  =self::time_handle($times['time_1'], $times['time_2']);

         //  第一关 所花费时间
        $this->assign("times",$time);

        $this->display("scan/stormBrain");


    }


    public  function  action_maze(){

        $usetime = Common::remove_xss(Arr::get($_GET,'usetime'));
        $times = self::$times[0];

        if(empty($times['endtime_3'])) {

             $time = time();
             DB::update('scan')->set(array('endtime_3' => $time, 'passtime' => $usetime))->where("`openid`='" . self::$openid . "'")->execute();

             $times['endtime_3'] =$time;
        }

        $time  =self::time_handle($times['time_2'],$times['endtime_3']);

        $this->assign("times",$time);

        $this->display("scan/maze");

    }

    public  function  action_oneHitToTheBody(){

        $times = self::$times[0];
        $time  =self::time_handle($times['endtime_3'], $times['time_4']);

        $this->assign("times",$time);
        $this->display("scan/oneHitToTheBody");
    }
    public  function  action_SteepBrave(){

        $times = self::$times[0];

        $time  =self::time_handle($times['time_4'],$times['time_5']);

        //  第4关 所花费时间

        $this->assign("times",$time);
        $this->display("scan/SteepBrave");


    }
    public  function  action_gameover(){

        $times = self::$times[0];

        $evaluates = self::evaluate_array();

        $comments  ='';
        //  第一关 所花费时间
        $data['time_1']  = self::time_handle($times['time_1'], $times['time_2']);
        //  第二关 所花费时间
        $data['time_2'] =self::time_handle($times['time_2'], $times['endtime_3']);

        $time_2_mins    =self::get_mins($times['time_2'],$times['endtime_3']);
         // 最强大脑 评语
        if($time_2_mins<=5&&$time_2_mins>=0){

            $comments .= $evaluates['stormBrain'][0];
        }else if($time_2_mins>5&&$time_2_mins<=15){
            $comments .= $evaluates['stormBrain'][1];
        }else if($time_2_mins>15){
            $comments .= $evaluates['stormBrain'][2];
        }else{

            $comments .='';
        }

        //  第三关 所花费时间
        $data['time_3']  =self::time_handle($times['endtime_3'], $times['time_4']);

        $time_3_mins     =self::get_mins($times['endtime_3'],$times['time_4']);

        if($time_3_mins<=15&&$time_3_mins>=0){
            $comments .= $evaluates['maze'][0];

        }else if($time_3_mins>15&&$time_3_mins<=30){

            $comments .= $evaluates['maze'][1];

        }else if($time_3_mins>30){

            $comments .= $evaluates['maze'][2];
        }else{
            $comments .='';
        }
        //  第四关 所花费时间
        $data['time_4']  =self::time_handle($times['time_4'], $times['time_5']);

        $time_4_mins     =self::get_mins($times['time_4'],$times['time_5']);

        if($time_4_mins<=10&&$time_4_mins>=0){
            $comments .= $evaluates['oneHitToTheBody'][0];

        }else if($time_4_mins>10&&$time_4_mins<=20){

            $comments .= $evaluates['oneHitToTheBody'][1];

        }else if($time_4_mins>20){

            $comments .= $evaluates['oneHitToTheBody'][2];
        }else{
            $comments .='';
        }
        //  第五关 所花费时间
        $data['time_5'] =self::time_handle($times['time_5'], $times['time_6']);

        $time_5_mins    =self::get_mins($times['time_5'],$times['time_6']);
        if($time_5_mins<=10&&$time_5_mins>=0){
            $comments .= $evaluates['SteepBrave'][0];

        }else if($time_5_mins>10&&$time_5_mins<=30){

            $comments .= $evaluates['SteepBrave'][1];

        }else if($time_5_mins>30){

            $comments .= $evaluates['SteepBrave'][2];
        }else{
            $comments .='';
        }

        $data['alltime'] = self::time_handle($times['time_2'], $times['time_6']);

        $alltime_mins    =self::get_mins($times['time_2'],$times['time_6']);

        if($alltime_mins<=50&&$alltime_mins>0){

            $comments .= $evaluates['gameover'][0];

        }else if($alltime_mins>50&&$alltime_mins<=80){

            $comments .= $evaluates['gameover'][1];

        }else if($alltime_mins>80){

            $comments .= $evaluates['gameover'][2];
        }else{
            $comments .=$alltime_mins;
        }

        $this->assign("times",$data);
        $this->assign("comments",$comments);

        $this->display("scan/gameover");

    }
    public  function  get_mins($timestamp1,$timestamp2){
        if ($timestamp2 <= $timestamp1)
        {
            return -1;
        }
        $timediff = $timestamp2 - $timestamp1;

        $remain = $timediff%86400;
        // 分
        $remain = $timediff%3600;
        $mins = intval($remain/60);

        return $mins;

    }
    public function evaluate_array(){

        $data['stormBrain'] = array(
              0=>'你拥有别人望尘莫及的最强大脑，记忆力、反应力惊人，分析力也是极好的;',
              1=>'你是一个思维敏捷又谨慎的宝宝；',
              2=>'你是一个爱思考、求知欲强的刻苦努力宝宝;'
        );
        $data['maze']       =array(
            0=>'方向感非常强，判断力更是出类拔萃！',
            1=>'沉稳的性格，使你做事有条不紊；',
            2=>'拥有坚持不懈的良好品质；'
        );
        $data['oneHitToTheBody']
                           =array(
            0=>'控制力很强，整体协调力出色；',
            1=>'不做没有准备的事，细心，懂得照顾别人；',
            2=>'耐挫能力，抗压能力强，可以很好的调整自己的心态;'
        );
        $data['SteepBrave'] =array(
            0=>'面对挑战，勇往直前，毫无畏惧；',
            1=>'有斗志，爱拼搏，内心温柔，善良，礼貌谦让；',
            2=>'面对困难虽然有些胆怯，但是能够调整心态勇于尝试，相信你获得的成功的喜悦会更浓烈；'
        );
        $data['gameover']   =array(
            0=>'你是集智慧与体力为一身的最强挑战者！',
            1=>'你离超人只差一步之遥！',
            2=>'你拥有强大的毅力与耐心，只是需要增强体力哦，多多参加户外活动吧，相信会有更多进步的惊喜等着你！'
        );

        return $data;

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


    function time_handle($timestamp1, $timestamp2,$is_com=null)
    {
        if ($timestamp2 <= $timestamp1)
        {
            return "当前关卡未通关";
        }
        $timediff = $timestamp2 - $timestamp1;
        // 时
        $remain = $timediff%86400;
        $hours = intval($remain/3600);
        if($hours<10){
            $hours ="0".$hours;
        }

        // 分
        $remain = $timediff%3600;
        $mins = intval($remain/60);
        if($mins<10&&$mins>=0){
            $mins ="0".$mins;
        }
        // 秒
        $secs = $remain%60;
        if($secs<10&&$secs>=0){
            $secs ="0".$secs;
        }
        if($is_com){

        }else{
            return $hours."小时:".$mins."分:".$secs."秒";
        }

    }

















}
