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
if(!empty($_GET['scan'])){

   // $wechatObj->scan($_GET['scan']);
}
//define("TOKEN", "weixin");
//$wechatObj->valid();
$wechatObj->responseMsg();


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

    private  static $wx_id =0;//  appscret

    private  $_db;
    /*
     *  切换 开发模式
     *  1 为订阅号 2 为服务号  3: 米淘服务号 9为测试号
     */
    private static  $model   =3;
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
        self::$gz_content  = str_replace("###","\n",$serviceNum['gz_content']);
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

                    //  关注获取用户的信息
                    $userInfo = self::$M->getUsersMes($toUser, self::$_appid, self::$_appsecret);
                    //  保存用户的信息
                    self::$M->insertUserMsg($toUser, $userInfo, self::$wx_id);



                    //扫描二维码 用户未关注时，进行关注后的事件推送()
                    if(!empty($postObj->EventKey)){

                        $ModelScan  = new ModelScan($this->_db);

                        $scene_id =$postObj->EventKey;

                        $con =$ModelScan->insertUserInfo($toUser);

                        $this->responseText($toUser, $fromUser,$con);
                    }
                    else {

                        if (self::$is_gz == 1) {

                            // 1 是关注自动回复 文本内容
                            $this->responseText($toUser, $fromUser);

                        } else {
                            //  回复 图文
                            $arr = self::$M->getImageNews();
                            $template = self::$M->responseNews($arr);
                            echo sprintf($template, $toUser, $fromUser, time(), 'news');
                        }

                    }


                }

                else if(strtolower($postObj->Event =='unsubscribe')){
                    //  更新用户的信息
                    self::$M->updateUserStatus($toUser,self::$wx_id);

                }
                else if(strtolower($postObj->Event == 'CLICK')){
                     //自定义餐单 回复 内容(点击事件)
                    $keyword = $postObj->EventKey;

                    $this ->keywords($keyword ,$toUser,$fromUser);

                }
                else if(strtolower($postObj->Event =='SCAN')){
                    // 用户已关注时的事件推送 ,扫描二维码的时间推送
                    /*
                     *
                     */
                    $ModelScan  = new ModelScan($this->_db);

                    $scene_id =$postObj->EventKey;
                    switch($scene_id){
                        case 1:$con=$ModelScan->insertUserInfo($toUser);break;
                        case 2:$con=$ModelScan->updateTime($toUser,$scene_id);break;
                        case 3:$con= $ModelScan->updateTime($toUser,$scene_id);break;
                        case 4:$con=$ModelScan->updateTime($toUser,$scene_id);break;
                        case 5:$con=$ModelScan->updateTime($toUser,$scene_id);break;
                        case 6:$con=$ModelScan->updateTime($toUser,$scene_id);break;
                    }

                    $this->responseText($toUser, $fromUser,$con);

                }

            }
            else {

                $keyword = trim($postObj->Content);//接受到的内容

                        if (!empty($keyword)) {

                            $arr = self::$M->getImageNews(self::$wx_id);
                            $img_key = explode(",", $arr[0]['keywords']);

                            if (in_array($keyword, $img_key)) {

                                $template  = self::$M->responseNews($arr);//  如果关键词在图文关键词字符中 回复图文

                                echo sprintf($template, $toUser, $fromUser, time(), 'news');
                                exit;
                            }
                            elseif (strpos(self::$key_word,$keyword)!=false) {

                                if (!empty(self::$key_content)) {

                                    $contentStr = self::$key_content;
                                } else {
                                    echo "";
                                    exit;
                                }

                            }else{

                               echo '';
                               exit;
                            }
                            $msgType = "text";
                            $resultStr = sprintf($this ->textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
                            echo $resultStr;
                        }
                        else {
                            echo "";
                            exit;
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



    /**
     * 生成二维码
     * @param $action_name 二维码类型，QR_SCENE为临时,QR_LIMIT_SCENE为永久,QR_LIMIT_STR_SCENE为永久的字符串参数值
     * @param $scene_id 场景值ID，临时二维码时为32位非0整型，永久二维码时最大值为100000（目前参数只支持1--100000）
     * @param $expire_seconds 该二维码有效时间，以秒为单位。 最大不超过2592000（即30天），此字段如果不填，则默认有效期为30秒。
     */
    private function get_showqrcode($action_name,$scene_id,$expire_seconds){
        $access_token= self::$M->get_access_token(self::$_appid,self::$_appsecret);
        $url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$access_token;
        $content = '{"expire_seconds":'.$expire_seconds.', "action_name": "'.$action_name.'", "action_info": {"scene": {"scene_id":'.$scene_id.'}}}';
        $ticketArr = self::$M->curl_post($url,$content);
        if(empty($ticketArr)){
            return false;
        }else{

            //$codeurl = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".urlencode($ticketArr['ticket']);
            //$code = $this->curl($codeurl);

            $codeurl = urlencode($ticketArr['ticket']);
            return $codeurl;
        }
    }



    public function scan($senceid){

//        $re = $this->get_showqrcode("QR_SCENE",$senceid,2592000);
//
//        var_dump($re);

    }




}

?>