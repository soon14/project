<?php
/**
 * wechat php test
 */
//define your token
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
/*
 * 去掉 引入activity.php许把 db.php 引入
 */
include_once ('activity.php');
include_once ('model.php');
//include_once ('db.php');
$wechatObj = new Weixin();
if(isset($_POST['name'])&&$_POST['name']==1){
    $re  =$wechatObj->createMenu();
    //  成功返回 {"errcode":0,"errmsg":"ok"}
    //  失败 返回 {"errcode":40018,"errmsg":"invalid button name size"}
    if($re['errmsg']=='ok'){
        echo $re['errmsg'];
    }else{
        echo  $re['errcode'];
    }
}
//验证微信1

/*define("TOKEN", "weixin");
$wechatObj->valid();*/
$wechatObj->responseMsg();
//$wechatObj->scan();

class Weixin
{
    /**
     * 版本号
     * @var string
     */
    const VERSION = '1.0';
    /*
     *   模型
     */
    public   static $M;
   /*
    *
    */
    private  $textTpl = "";

    private  static $_appid     ='';//  appid

    private  static $_appsecret ='';//  appscret

    private  static $wx_id =0;//

    private  $_db;
    /*
     *  切换 开发模式
     *  1 为订阅号 2 为服务号  9为测试号
     */
    private static  $model   =9;
    /*
     *    是否关注回复内容  0 不会回复内容 1 为回复内容
     */
    public  static $is_gz =1;
    /*
     *   关注时回复内容
     */
    public   static $gz_content ='';

    /*
     *  触发文本回复的关键词
     */
    public  static $key_word ='';
    /*
     *  文本回复的内容
     */
    public   static $key_content='';
    /*
     *  收到图片 是否回复内容  0 为不回复。1 为回复
     */
    public   static $getImageIsReply =0;
    /*
     *   收到图片回复的内容
     */
    public   static  $imageContent ='';

    public   $activity;


    //构造函数
    public function __construct()
    {
        $this->_db        = new DB();

        self::$M          = new Model($this->_db);

        $this ->activity  = new Activity($this->_db);

        $serviceNum         = self::$M->getPublicNumModel(self::$model);
        if($serviceNum===false){
            echo '';
            exit;
        }
        self::$wx_id       = $serviceNum['id'];
        self::$_appid      = $serviceNum['appid'];
        self::$_appsecret  = $serviceNum['appsecret'];
        self::$is_gz       = $serviceNum['is_gzhf'];
        self::$gz_content  = str_replace("=","\n",$serviceNum['gz_content']);
        self::$key_word    = $serviceNum['key_word'];
        self::$key_content = $serviceNum['key_content'];
        self::$getImageIsReply     = $serviceNum['isimage'];
        self::$imageContent        = $serviceNum['image_con'];
        $this ->textTpl  ="<xml>
							 <ToUserName><![CDATA[%s]]></ToUserName>
							 <FromUserName><![CDATA[%s]]></FromUserName>
							 <CreateTime>%s</CreateTime>
							 <MsgType><![CDATA[%s]]></MsgType>
							 <Content><![CDATA[%s]]></Content>
							 <FuncFlag>0</FuncFlag>
							</xml>";

    }

    /**
     * 生成二维码
     * @param $action_name 二维码类型，QR_SCENE为临时,QR_LIMIT_SCENE为永久,QR_LIMIT_STR_SCENE为永久的字符串参数值
     * @param $scene_id 场景值ID，临时二维码时为32位非0整型，永久二维码时最大值为100000（目前参数只支持1--100000）
     * @param $expire_seconds 该二维码有效时间，以秒为单位。 最大不超过2592000（即30天），此字段如果不填，则默认有效期为30秒。
     */
    private function get_showqrcode($action_name,$scene_id,$expire_seconds){
        $access_token=self::$M->get_access_token(self::$_appid,self::$_appsecret);
        $url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$access_token;
        $content = '{"expire_seconds":'.$expire_seconds.', "action_name": "'.$action_name.'", "action_info": {"scene": {"scene_id":'.$scene_id.'}}}';
        $ticketArr = self::$M->curl_post($url,$content);
        if(empty($ticketArr)){
            return false;
        }else{

            $codeurl = urlencode($ticketArr['ticket']);
            return $codeurl;
        }
    }
    public function scan(){

        $re = $this->get_showqrcode("QR_SCENE",1,2592000);

        var_dump($re);
    }
    /*
     * 截屏方法
     * $openid
     * $picname = 图片名=2016+用户的参赛id
     */
    private function screen($openid,$picname,$erweiPic){

        $erweiPic   =trim($erweiPic);
        $response = exec('/home/phantomjs-2.1.1-linux-x86_64/bin/phantomjs /home/phantomjs-2.1.1-linux-x86_64/examples/rasterize.js http://www.aitto.net/phone/activity/iceWorld?openid='.$openid.' /home/wwwroot/www.aitto.net/new_uploads/reply/'.$picname.'.jpg');
        return '/new_uploads/reply/'.$picname.'.jpg';
    }

    //生成微信菜单信息
    public function createMenu(){
        $access_token=self::$M->get_access_token(self::$_appid,self::$_appsecret);
        if($access_token){

            $menu_json=self::$M->getMenuMsg(self::$wx_id);

            $url     = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;

            $tmpInfo =self::$M->curl_posts($url, $menu_json);

            return $tmpInfo = json_decode($tmpInfo,true);
        }
    }



    //验证微信
    public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }
    //获取用户留言信息
    public function responseMsg()
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if (!empty($postStr)){
            /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
               the best way is to check the validity of xml by yourself */
            libxml_disable_entity_loader(true);
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $toUser   = $postObj->FromUserName;//  微信用户
            $fromUser = $postObj->ToUserName;//  开发者
            //  处理 事件
            if( strtolower( $postObj->MsgType) == 'event'){
                //如果是关注 subscribe 事件
                if(strtolower($postObj->Event == 'subscribe') ){

                    //扫描二维码 用户未关注时，进行关注后的事件推送()  暂时取消了 扫面二维码关注的判断

                    if(!empty($postObj->EventKey)){

                        $partid  = str_replace('qrscene_','',$postObj->EventKey);
                        $content = $postObj->EventKey;
                        $this -> responseText($toUser,$fromUser,$content);


                    }else {

                        if (self::$is_gz == 1) {

                            // 1 是关注自动回复 文本内容
                            $this->responseText($toUser, $fromUser);

                        } else {
                            //  回复 图文
                            $arr = self::$M->getImageNews();
                            $template = self::$M->responseNews($arr);
                            echo sprintf($template, $toUser, $fromUser, time(), 'news');

                        }

                        //  关注获取用户的信息
                        $userInfo = self::$M->getUsersMes($toUser, self::$_appid, self::$_appsecret);
                        //  保存用户的信息
                        self::$M->insertUserMsg($toUser, $userInfo);
                    }
                }

                else if(strtolower($postObj->Event =='unsubscribe')){
                    //  更新用户的信息
                    self::$M->updateUserStatus($toUser);

                }
                else if(strtolower($postObj->Event == 'CLICK')){
                     //自定义餐单 回复 内容(点击事件)
                    $keyword = $postObj->EventKey;

                    $this ->keywords($keyword ,$toUser,$fromUser);

                }else if(strtolower($postObj->Event =='SCAN')){
                    $content = $postObj->EventKey;
                    $this -> responseText($toUser,$fromUser,$content);


                }

            }
            else {

                $textTpl = $this->textTpl;
                 //  对于接受到图片的回复
                if(strtolower($postObj->MsgType) == 'image'){
                    if(self::$getImageIsReply==1){//  判断 、是否开启了 图片回复功能

                        // 获取  截图分享活动内容
                        $arr   = self::$M->get_cutPicture();
                        if(!empty($arr)){

                            $cutpid  =  $arr['id'];//截图活动的id
                            $time  = time();
                            $starttime = strtotime($arr['starttime']);// 活动的开始时间
                            $overtime  = strtotime($arr['overtime']); // 活动的结束时间
                            if($time>$starttime&&$time<$overtime){
                                $isuser  =  self::$M->curActUserInfo($toUser,$cutpid);
                                //  将用户发送的图片 保存到 服务器器上
                                $res     =  self::$M->getWXPic($postObj-> MediaId,self::$_appid,self::$_appsecret);
                                $data  =array();
                                $data['getimgTime'] =    $postObj-> CreateTime; //消息 发送时间
                                $data['mediaId']    =    $postObj-> MediaId ;//图片消息媒体id，可以调用多媒体文件下载接口拉取数据。
                                $data['msgId']      =    $postObj->MsgId;//消息id，64位整型
                                if($res['error']==0){
                                    $data['userimg']    =  '/api/'.$res['save_path'];
                                }else{

                                    $data['userimg']    =  $postObj->PicUrl;
                                }

                                if(!empty($isuser)){//  如果不为空，为 已经参加活动了

                                    if($res['error']==0){
                                        $data['userallimg']   = $isuser['userallimg'].",".'/api/'.$res['save_path'].'+'.$postObj-> CreateTime;// 图片链接
                                    }else{
                                        $data['userallimg']   = $isuser['userallimg'].",".$postObj->PicUrl.'+'.$postObj-> CreateTime;
                                    }
                                    $where = " openid ='$toUser' ";
                                    $flag = $this->_db->update('sline_cutPicture_user', $data,$where);
                                    if($flag){// 更新成功
                                        if(!empty($arr['ResContent'])){
                                            $contentStr  =$arr['ResContent'];
                                        }else{
                                            $contentStr ='参与活动照片 ，我们已收到';
                                        }
                                    }
                                }
                                else{//  为空 为首次 参加活动


                                    $userInfo   =self::$M->getUsersMes($toUser,self::$_appid,self::$_appsecret);

                                      //参与活动更新用户的信息
                                    self::$M->insertUserMsg($toUser,$userInfo);
                                    $data['cutpid']    = $arr['id'];
                                    $data['nickname']    = $userInfo['nickname'];
                                    $data['addtime'] =time();
                                    $data['openid']    = $toUser;  // 发送方的openid
                                    if($res['error']==0) {
                                        $data['userallimg'] = '/api/'.$res['save_path'] . '+' . $postObj->CreateTime;// 图片链接
                                    }else{
                                        $data['userallimg'] = $postObj->PicUrl . '+' . $postObj->CreateTime;
                                    }
                                    $flag = $this->_db->insert('sline_cutPicture_user', $data);
                                    if($flag){

                                        $sql = " update `sline_cutpicture` set `part_num` =part_num+1 where id = $arr[id]";
                                        $this ->_db->query($sql);
                                        if(!empty($arr['ResContent'])){
                                            $contentStr  =$arr['ResContent'];
                                        }else{
                                            $contentStr ='参与活动照片 ，我们已收到:请留下您的手机号，作为领奖凭证';
                                        }
                                    }
                                }
                                $resultStr = sprintf($textTpl, $toUser, $fromUser, time(),"text",$contentStr);
                                echo $resultStr;
                                exit;
                            }
                            else{
                                echo '';
                                exit;
                            }
                        }
                        else{

                            if(empty(self::$imageContent)){
                                echo "";exit;
                            }else{
                                $resultStr = sprintf($textTpl, $toUser, $fromUser, time(),"text",self::$imageContent);
                                echo $resultStr;
                            }

                        }

                    }
                    else{
                        // 没有开启图片回复功能 回复
                        echo '';
                        exit;
                    }
                }
                else {
                    $keyword = trim($postObj->Content);//接受到的内容
                    $s       =  preg_match('/^1[34578]\d{9}$/',$keyword);
                    $time  = time();
                    $overtime = strtotime("2017-01-23 10:00");

                    if($s==0||$s==false){//  匹配失败
                        if (!empty($keyword)) {
                            $arr = self::$M->getImageNews();
                            $img_key = explode(",", $arr[0]['keywords']);

                            if (in_array($keyword, $img_key)) {

                                $template  = self::$M->responseNews($arr);//  如果关键词在图文关键词字符中 回复图文

                                echo sprintf($template, $toUser, $fromUser, time(), 'news');
                                exit;
                            }
                            elseif (strpos($keyword,self::$key_word)!=false) {

                                if (!empty(self::$key_content)) {

                                    $contentStr = self::$key_content;
                                } else {
                                    echo "";
                                    exit;
                                }

                            }else{

                                if($keyword=='中奖名单'){

                                    $contentStr = "查看活动中奖名单，点击→http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100005323&idx=1&sn=2a6e5844eee44474889d0f12a1a2ede0&chksm=17df0f6e20a8867847051408382746f75663ce348830168deeba81401f9ec3f4a0f9b49fd1d3&mpshare=1&scene=23&srcid=1116P6zSAM9HC1DIKMLAQdR3#rd";
                                }
                                else{
                                    echo "";
                                    exit;
                                }
                            }
                            $msgType = "text";
                            $resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
                            echo $resultStr;

                        }
                        else {

                            echo "";
                            exit;


                        }
                    }
                    else{
                        // 匹配成功
                        $keyword =preg_replace('/\D/s', '', $keyword);
                        // 获取  截图分享活动内容
                        $arr   = self::$M->get_cutPicture();// 这个是用于截图分享
                        if(!empty($arr)) {
                            $cutpid  =  $arr['id'];//$this ->cutid;//  每次截图活动的id
                            $time = time();
                            $starttime = strtotime($arr['starttime']);
                            $overtime = strtotime($arr['overtime']);
                            if($time>$starttime&&$time<$overtime){

                                $isuser  =  self::$M->curActUserInfo($toUser,$cutpid);

                                $data = array();

                                $data['phone'] = strchr($keyword,'1');
                                $data['getphoneTime'] = $postObj->CreateTime;

                                if(!empty($isuser)){

                                    $where = " openid ='$toUser' ";

                                    $flag = $this->_db->update('sline_cutPicture_user', $data,$where);
                                    if($flag){// 更新成功

                                        $sql = " update `bbs_hjbox_users` set `cutpic` =`cutpic`+1,`telphone`='$data[phone]' where ".$where;
                                        $this ->_db->query($sql);
                                        if(!empty($arr['PhoneContent'])){
                                            $contentStr =$arr['PhoneContent'];
                                        }else {
                                            $contentStr = '参与活动手机号，我们已收到';
                                        }
                                    }
                                }
                                else{
                                    $userInfo   =self::$M->getUsersMes($toUser,self::$_appid,self::$_appsecret);
                                    //参与活动更新用户的信息
                                    self::$M->insertUserMsg($toUser,$userInfo);
                                    $data['nickname'] = $userInfo['nickname'];
                                    $data['openid'] =$toUser;
                                    $data['cutpid'] = $arr['id'];
                                    $data['addtime'] =time();
                                    $flag = $this->_db->insert('sline_cutPicture_user', $data);
                                    if($flag){//参与活动成功   更新用户信息

                                        $where = " openid ='$toUser' ";

                                        $sql = " update `bbs_hjbox_users` set `cutpic` =`cutpic`+1,`telphone`='$data[phone]' where ".$where;
                                        $this ->_db->query($sql);

                                        $sql = " update `sline_cutpicture` set `part_num` =part_num+1 where id = $arr[id]";
                                        $this ->_db->query($sql);

                                        //  将截图活动 的人员保存到旅游网 中
                                        self::$M->addUserToHBLY($keyword);

                                        if(!empty($arr['PhoneContent'])){

                                            $contentStr =$arr['PhoneContent'];
                                        }else{
                                            $contentStr ='参与活动成功，手机号我们已收到:请留下您的活动的截图照片，作为参赛作品';
                                        }
                                    }
                                }
                            }
                            else{
                                echo '';
                                exit;
                            }

                        }
                        else{
                            if($time>$overtime){
                                echo '';
                                exit;
                            }
                            $phone  =strchr($keyword,'1');
                            $bool  =preg_match('/^1([0-9]{9})/',$phone);
                            if($bool==0||$bool==false){// 电话不对
                                $content  = '你输入的电话有误，请输入：正确的手机号';
                                $this -> responseText($toUser,$fromUser,$content);
                                exit;
                            }else{// 参加 比赛

                                $message = $this ->activity ->action_ajax_addPart($toUser,$phone);
                            }
                            if($message['status']==1113){
                                // 已参与活动
                                $contentStr =$message['msg'];
                            }elseif ($message['status']==1114){
                                // 插入数据失败
                                $contentStr =$message['msg'];
                            }elseif ($message['status']==1115){
                                //  参与活动成功
                                $msg      = $message['msg'];

                                $scene_id = $message['scene_id'];
                                // 二维码 图片地址
                                $erweiPic = $this->get_showqrcode("QR_SCENE",$scene_id,2592000);

                                $sql  = "update `sline_activity_player` set erweima='$erweiPic' where id = $scene_id";

                                $bool =$this ->_db->query($sql);
                                // 截屏 图片的保存地址
                                if($bool){
                                    $screen    =$this ->screen($toUser,'2017'.$scene_id,$erweiPic);

                                    //  上传截图到微信服务器 上传到临时素材
                                    $mediaId  =  $this -> upTemporaryMaterial($screen);
                                    //$contentStr =$mediaId;
                                    $this  ->responseImage($toUser,$fromUser,$mediaId);
                                    exit;
                                }

                            }
                            $msgType = "text";
                            $resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
                            echo $resultStr;
                            echo '';
                            exit;
                        }
                        $msgType = "text";
                        $resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
                        echo $resultStr;
                    }


                }
            }

        }else {
            echo "";
            exit;
        }
    }
    /*
     *   上传 临时 素材
     * $picpath
     */
    public  function  upTemporaryMaterial($picpath){

        //  注意 图片格式为jpg  , 亲测 png .gif  不行

        $access_token=self::$M->get_access_token(self::$_appid,self::$_appsecret);

        $url   =  'https://api.weixin.qq.com/cgi-bin/media/upload?access_token='.$access_token.'&type=image';

        $imgUrl   = '/home/wwwroot/www.aitto.net'.$picpath;

        $data = array('media'=>'@'.$imgUrl);

        $result = self::$M->curl_posts($url,$data);

        $data = @json_decode($result,true);

        return  $data['media_id'];
    }


    public  function  keywords($keyword,$toUser,$fromUser){

        $textTpl = $this->textTpl;
        if($keyword=='我的排名'||$keyword=='我的冰雕'){
            $message = $this ->activity  ->action_rank($toUser);
            $contentStr = $message['msg'];

        }

        $msgType = "text";
        $resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
        echo $resultStr;

    }

    //============================
    /*
     * 回复 文本消息
     */
    public  function responseText($toUser,$fromUser,$content){
        $msgType  =  'text';

        $content  =  !empty($content) ? $content : self::$gz_content;

        $template =$this->textTpl;
        $info     = sprintf($template, $toUser, $fromUser, time(), $msgType, $content);
        echo $info;
    }
    /*
     *   回复 图片信息
     */
    public  function  responseImage($toUser,$fromUser,$mediaid){
        $img  ='<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Image>
                    <MediaId><![CDATA[%s]]></MediaId>
                   </Image>
                   </xml>';
        $template =$img;
        $info     = sprintf($template, $toUser, $fromUser, time(), 'image', $mediaid);
        echo $info;
    }



    // //============================

    private function checkSignature()
    {
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }

        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }








}

?>