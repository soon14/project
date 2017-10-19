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
//$wechatObj->upTemporaryMaterial();
//$wechatObj->upTemporaryMaterial();
//$wechatObj->createMenu();
//$wechatObj->ceshi();
//$wechatObj->getMenuMsg();
//$wechatObj->getUsersMes('oyq3hv6PBPL-V2Rl0i0gyGyhe2bI');

class Weixin
{
    private  $textTpl = "<xml>
							 <ToUserName><![CDATA[%s]]></ToUserName>
							 <FromUserName><![CDATA[%s]]></FromUserName>
							 <CreateTime>%s</CreateTime>
							 <MsgType><![CDATA[%s]]></MsgType>
							 <Content><![CDATA[%s]]></Content>
							 <FuncFlag>0</FuncFlag>
							 </xml>";
    private  $_appid    ='';
    private  $_appsecret='';
    private  $_db;
    public   $is_gz;
    public   $gz_content;
    public   $key_word;
    public   $key_content;
    public   $isimage;
    public   $image_con;
    public   $activity;
    private  $cutid=4;//  截图活动的 ｉｄ
    //构造函数
    public function __construct()
    {
        $this->_db        = new DB();

        $this ->activity  = new Activity($this->_db);


        $sql  = "select * from `sline_weixin` where jk_model='服务号' ";

        $serviceNum         = $this->_db->get_all($sql);

        $this ->_appid      = $serviceNum[0]['appid'];

        $this ->_appsecret  = $serviceNum[0]['appsecret'];
        $this ->is_gz       = $serviceNum[0]['is_gzhf'];
        $this ->gz_content  = str_replace("=","\n",$serviceNum[0]['gz_content']);
        $this ->key_word    = $serviceNum[0]['key_word'];
        $this ->key_content = $serviceNum[0]['key_content'];
        $this ->isimage     = $serviceNum[0]['isimage'];
        $this ->image_con   = $serviceNum[0]['image_con'];
    }
    public  function  ceshi(){

       //$re  =  $this ->get_cutPicture();

      //  var_dump($re);
    //   $c = $this ->activity ->action_ajax_addPart('oyq3hv_jdG4ctOudu1S651npEyTc',13931993592);
     //   var_dump($c);

    }
    //获取多图文信息
    public function getImageNews(){

        $sql         = "SELECT * FROM `sline_wximagenews` WHERE is_openid=1 order by sort";
        $imageNews   = $this ->_db->get_all($sql);

        return  $imageNews;
    }
    //根据 对应的openid 获取用户管理表 用户的信息
    public  function  getUserInfo_ByOpenid($openid){

        $sql  = "select * from `bbs_hjbox_users` where openid=$openid";
        $re   = $this->_db->get_all($sql);
        return $re;
    }
    //获取自定义菜单内容
    public function getMenuMsg(){

        $sql = "select * from `sline_wxaddmenu` where pid=0 and is_show=0 and wx_id=24 ORDER by status";
        $re  =$this->_db -> get_all($sql);
        $rs  =array();
        //生成 主=(子菜单);的数组
        foreach($re as $kel=>$val){
            $sql = "select * from `sline_wxaddmenu` where pid='$val[id]'  and is_show=0 ORDER by status";
            $re2 = $this->_db ->get_all($sql);
            $rs[$kel]['titles']  = $re2;
            $rs[$kel]['content']= $val['content'];
            $rs[$kel]['title']= $val['title'];
            $rs[$kel]['type'] =$val['type'];
        }
        $menu_json=' { "button":[';

        foreach($rs as $k=>$v) {
            $rs1=count($rs)-1;
            $menu_json .= '{';

            if(count($v['titles']) == 0){
                $menu_json.='"type":"'.$v['type'].'",';
            }

            $menu_json .='"name":"' . $v['title'] . '",
                                      ';

            if (count($v['titles']) == 0) {

                if(trim($v['type'])=='view'){

                    $p  = 'url';

                }else if(trim($v['type'])=='click'){

                    $p  = 'key';
                }
                $menu_json.='"'.$p.'":"'.$v['content'].'"';

                $menu_json .= '}';

                if($rs1==$k){
                    $menu_json.='';}
                else{
                    $menu_json.=',';
                }
            } else {
                $menu_json .= '"sub_button":[';

                $va1 = count($v['titles']) - 1;

                if ($va1 <= 0) {

                    $va1 = 0;
                }
                foreach ($v['titles'] as $ke => $va) {
                    if(trim($va['type'])=='view'){

                        $j  = 'url';

                    }else if(trim($va['type'])=='click'){

                        $j  = 'key';
                    }
                    $menu_json .= '{
                                           "type":"'.$va['type'].'",
                                           "name":"' . $va['title'] . '",
                                           "'.$j.'":"' . $va['content'] . '"
                                        }';
                    if ($va1 == $ke) {

                        $menu_json .= '';
                    } else {

                        $menu_json .= ',';
                    }
                }
                $menu_json .= ']},';
            }
        }
        return $menu_json;
    }
    //用户关注微信，插入用户信息
    public function insertUserMsg($openid,$arr=array()){

        $time    = time();
        $sql     = "SELECT * FROM `bbs_hjbox_users` WHERE  openid='$openid'";
        $r       = $this->_db -> get_all($sql);
        // 值为1时是男性，值为2时是女性，值为0时是未知

        if(empty($r)){
            $sql ="INSERT INTO `bbs_hjbox_users` ";
            $sql .=" (`nickname`, `sex`, `city`, `country`, `province`, `headimgurl`, `is_gz`, `openid`,`gztime`) VALUES ";
            $sql .=" ('$arr[nickname]','$arr[sex]','$arr[city]','$arr[country]','$arr[province]','$arr[headimgurl]','1','$openid','$time')";
            $r1  = $this->_db ->query($sql);
        }else{
            $sql ="UPDATE `bbs_hjbox_users`  SET `nickname`='$arr[nickname]',`sex`='$arr[sex]',`city`='$arr[city]',`country`='$arr[country]',`province`='$arr[province]',`is_gz`=1,`headimgurl`='$arr[headimgurl]' WHERE openId='$openid'";
            $r1  = $this->_db -> query($sql);
        }
        return $r1;//执行成功 返回 true
        //根据openid判断是否存在，
    }

    /**
     * 生成二维码
     * @param $action_name 二维码类型，QR_SCENE为临时,QR_LIMIT_SCENE为永久,QR_LIMIT_STR_SCENE为永久的字符串参数值
     * @param $scene_id 场景值ID，临时二维码时为32位非0整型，永久二维码时最大值为100000（目前参数只支持1--100000）
     * @param $expire_seconds 该二维码有效时间，以秒为单位。 最大不超过2592000（即30天），此字段如果不填，则默认有效期为30秒。
     */
    private function get_showqrcode($action_name,$scene_id,$expire_seconds){
        $access_token=$this->get_access_token('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
        $url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$access_token;
        $content = '{"expire_seconds":'.$expire_seconds.', "action_name": "'.$action_name.'", "action_info": {"scene": {"scene_id":'.$scene_id.'}}}';
        $ticketArr = $this->curl_post($url,$content);
        if(empty($ticketArr)){
            return false;
        }else{

            //$codeurl = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".urlencode($ticketArr['ticket']);
            //$code = $this->curl($codeurl);

            $codeurl = urlencode($ticketArr['ticket']);
            return $codeurl;
        }
    }
    /*
     *   截屏方法
     * $openid
     * $picname = 图片名=2016+用户的参赛id
     */
    private function screen($openid,$picname,$erweiPic){

        $erweiPic   =trim($erweiPic);
        $response = exec('/home/phantomjs-2.1.1-linux-x86_64/bin/phantomjs /home/phantomjs-2.1.1-linux-x86_64/examples/rasterize.js http://www.aitto.net/phone/activity/iceWorld?openid='.$openid.' /home/wwwroot/www.aitto.net/new_uploads/reply/'.$picname.'.jpg');
        return '/new_uploads/reply/'.$picname.'.jpg';
    }
    /*
    *  获取 分享活动内容
    */
    private  function  get_cutPicture(){
        $sql  = "select * from `sline_cutpicture` where isopen = 1 order by displayorder limit 0,1";
        $arr   = $this->_db->get_all($sql);
        return $arr[0];

    }
    public  function  insertUserMsgToBBs($openid,$arr=array()){
        $this ->connectBBs();
        $sql ="SELECT * FROM `bbs_hjbox_users` WHERE openid='$openid'";
        $result = mysql_query($sql);
        $re = array();
        $i  =0;
        while($v=mysql_fetch_array($result,MYSQL_ASSOC)){
            $i++;
            $re[$i-1]=$v;
        }
        $time  =time();
        $count =count($re);
        if(empty($count)){
            $sql ="INSERT INTO `bbs_hjbox_users`(`nickname`, `sex`, `city`, `country`, `province`, `headimgurl`, `is_gz`, `openid`, `telphone`, `bbsuid`, `gztime`) ";
            $sql.=" VALUES ('$arr[nickname]','$arr[sex]','$arr[city]','$arr[country]','$arr[province]','$arr[headimgurl]','1','$openid','',null,'$time')";
        }else{
            $sql ="UPDATE `bbs_hjbox_users` SET `is_gz`=1 WHERE openid='$openid'";
        }
        mysql_query($sql);

        //mysql_close($conn);
    }

    //========================curl__
    public function  curl($url){
        $ch = curl_init();
        //3.设置参数
        curl_setopt($ch , CURLOPT_URL, $url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        //4.调用接口
        $res = curl_exec($ch);
        //5.关闭curl
        curl_close( $ch );
        if( curl_errno($ch) ){
            var_dump( curl_error($ch) );
        }
        $arr = json_decode($res, true);
        return $arr;
    }
    public  function get_uerInfo_ByWebPage($code){
        //这里 appid  和secret 应该要做成参数的 ；
        $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxdf8497303505ae0d&secret=ed95f4a2529b5b39f886e3df0e0511bd&code=$code&grant_type=authorization_code";
        // $arr          = $this ->curl($url_getToken);
        $ch = curl_init();
        //3.设置参数
        curl_setopt($ch , CURLOPT_URL,$url_getToken);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        //4.调用接口
        $res = curl_exec($ch);
        //5.关闭curl
        curl_close( $ch );
        if( curl_errno($ch) ){
            var_dump( curl_error($ch) );
        }
        $arr = json_decode($res, true);
        var_dump($arr);exit;
        //  $openid       = $arr['openid'];
        //  $re           = getUserInfo_ByOpenid($openid);
        //  return $openid ;

    }
    //取消关注修改用户状态
    public function updateUserStatus($openid){
        //修改用户状态

        $data             = array();
        $data['is_gz'] = 0;
        $re               = $this->_db ->update('bbs_hjbox_users',$data,"openid='$openid'");
        return $re;
    }
    public function updateUserStatusBBs($openid){
        //bbs 修改用户状态
        $this ->connectBBs();
        $sql ="UPDATE `bbs_hjbox_users` SET `is_gz`=0 WHERE openid='$openid'";
        mysql_query($sql);
    }

    private  function  connectBBs(){
        $conn = mysql_connect("123.56.179.66","root","Mysql,20160216,aitto");
        if (!$conn)
        {
            die('Could not connect: ' . mysql_error());
        }
        mysql_query("set names 'utf8'");
        mysql_select_db('bbs');//
    }
    //生成微信菜单信息
    public function createMenu(){
        $access_token=$this->get_access_token('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
        // $access_token="O4kG9cwiHN5ZQ_tUw2SktqN6vQODteIOPxor_HUVeWOGV3YvK0lP4p8fFZoUkxGAl4M8X--SlZ4iNYYFC8vyBq1VEOi48dfOpYq2xAmF6tnTdWE1SjcjAFX0VmRxN18VMDXaADACTN";
        if($access_token){
            //创建
            $menu_json=$this->getMenuMsg();
            //echo $menu_json ;exit;
            $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_ENCODING ,'utf-8');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, urldecode($menu_json));//必须提交的时候是中文
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $tmpInfo = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Errno'.curl_error($ch);
            }
            curl_close($ch);
            return $tmpInfo = json_decode($tmpInfo,true);

            // var_dump($tmpInfo) ;
            //$this->showMessage('success'); //成功才会显示

        }
    }

    /**
     * post的curl获取数据
     * @param $url
     * @param $content
     * @return mixed
     */
    private function curl_post($url,$content){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_ENCODING ,'utf-8');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, urldecode($content));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Errno'.curl_error($ch);
        }
        curl_close($ch);
        return $tmpInfo = json_decode($tmpInfo,true);
    }
    /**
     * 获取access_token
     */
    private function get_access_token($appid,$appsecret){
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
        $data = json_decode(file_get_contents($url),true);
        if($data['access_token']){
            return $data['access_token'];
        }else{
            return "";
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
            $toUser   = $postObj->FromUserName;
            $fromUser = $postObj->ToUserName;
            if( strtolower( $postObj->MsgType) == 'event'){
                //如果是关注 subscribe 事件
                if( strtolower($postObj->Event == 'subscribe') ){

                      //扫描二维码 用户未关注时，进行关注后的事件推送
                    if(!empty($postObj->EventKey)){

                        $partid  = str_replace('qrscene_','',$postObj->EventKey);
                          $message =  $this ->activity ->action_addhelper($toUser,$partid);
                          $content = $message['msg'];
                          $this -> responseText($toUser,$fromUser,$content);

                        //  $arr = $this->getImageNews();
                         // $this->responseNews($postObj, $arr);

                          $this ->getUsersMes($toUser);

                    }else{
                        if($this ->is_gz==1){// 1 是关注自动回复 文本内容
                            $this ->responseText($toUser,$fromUser);
                        }else{// 2
                            $arr = $this->getImageNews();
                            $this->responseNews($postObj, $arr);
                        }
                        // $this ->responseNews($postObj);
                        $this ->getUsersMes($toUser);
                    }
                }else if(strtolower($postObj->Event =='unsubscribe')){
                    $this ->updateUserStatus($toUser);
                    $this ->updateUserStatusBBs($toUser);
                }
                else if(strtolower($postObj->Event == 'CLICK')){//自定义餐单 回复 内容
                    $keyword = $postObj->EventKey;
                    $this ->keywords($keyword ,$toUser,$fromUser);

                }else if(strtolower($postObj->Event =='SCAN')){

                    echo  '';exit;

                    //用户已关注时的事件推送
                    $partid   = $postObj->EventKey;
                    $message =  $this ->activity ->action_addhelper($toUser,$partid);
                          if($message['status']==0){
                            //您已帮你好友解冻过了
                          }else if($message['status']==1){
                            //您已成功帮你好友解冻1次！
                          }else if($message['status']==2){
                            //用户已兑换过了
                          }else if($message['status']==3){
                             // 您已成功帮你好友解冻1次，并使他获得门票
                          }
                           $content = $message['msg'];
                          $this -> responseText($toUser,$fromUser,$content);
                }

            }else {
                $textTpl = $this->textTpl;
                if(strtolower( $postObj->MsgType) == 'image'){
                    $isimage  = $this ->isimage;

                    if($isimage==1){//  判断 、是否开启了 图片回复功能

                        // 获取  截图分享活动内容
                        $arr   = self::get_cutPicture();
                        if(!empty($arr)){
                            $cutpid  =  $arr['id'];//$this ->cutid;//  每次截图活动的id
                            $time  = time();
                            $starttime = strtotime($arr['starttime']);
                            $overtime  = strtotime($arr['overtime']);
                            if($time>$starttime&&$time<$overtime){
                                $sql ="select * from `sline_cutPicture_user` where openid ='$toUser' and cutpid=$cutpid";
                                $isuser  =  $this ->_db->get_one($sql);
                                //  将用户发送的图片 保存到 服务器器上
                                $res = $this ->getWXPic($postObj-> MediaId);
                                $data  =array();
                                $data['getimgTime']=$postObj-> CreateTime; //消息 发送时间
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
                                }else{//  为空 为首次 参加活动
                                    $sql = "select nickname from `bbs_hjbox_users`where openid ='$toUser'";
                                    $nicknames  =  $this ->_db->get_one($sql);
                                    $data['cutpid']    = $arr['id'];
                                    $data['nickname']    = $nicknames['nickname'];
                                    $data['addtime'] =time();
                                    $data['openid']    = $toUser;  // 发送方的openid
                                    if($res['error']==0) {
                                        $data['userallimg'] = '/api/'.$res['save_path'] . '+' . $postObj->CreateTime;// 图片链接
                                    }else{
                                        $data['userallimg'] = $postObj->PicUrl . '+' . $postObj->CreateTime;
                                    }
                                    $flag = $this->_db->insert('sline_cutPicture_user', $data);
                                    if($flag){//参与活动成功   更新用户信息
                                        $this ->getUsersMes($toUser);
                                        $sql = " update `sline_cutpicture` set `part_num` =part_num+1 where id = $arr[id]";
                                        $this ->_db->query($sql);
                                        if(!empty($arr['ResContent'])){
                                            $contentStr  =$arr['ResContent'];
                                        }else{
                                            $contentStr ='参与活动照片 ，我们已收到:请留下您的手机号，作为领奖凭证';
                                        }

                                    }
                                }

                            }else{
                                echo '';
                                exit;
                            }
                        }else{
                           echo '';
                            exit;
                        }
                        $content   =$postObj-> MediaId;
                        $msgType = "text";
                        //$contentStr =$this ->image_con;
                        $resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
                        echo $resultStr;
                    }else{
                        echo '';
                        exit;
                    }


                }

                else {
                    $keyword = trim($postObj->Content);//接受到的内容

                    $s =  preg_match('/^.*1([0-9]{9})/',$keyword);
                    $time  = time();
                    $overtime = strtotime("2017-01-23 10:00");

                    if($s==0||$s==false){//  匹配失败
                        if (!empty($keyword)) {
                            $arr = $this->getImageNews();
                            $img_key = array();
                            $img_key = explode(",", $arr[0]['keywords']);
                            if (in_array($keyword, $img_key)) {
                                $this->responseNews($postObj, $arr);//  如果关键词在 图文关键词字符中回复图文
                                exit;
                            } elseif (strpos($keyword,$this->key_word)!=false) {

                                if (!empty($this->key_content)) {

                                    $contentStr = $this->key_content;
                                } else {
                                    echo "";
                                    exit;
                                }
                                // $s = "艾玛，你终于来了，小游游还没穿好衣服呢~先自助观赏吧~\n底部菜单中有逃票攻略、没见过的风景、河北游记……随便点着看吧。\n小游游住在：河北出版传媒集团院内\n电话：87885822\n私聊微信号：18630172332\n求勾搭，求私聊！\n";
                            } else {
                                if($keyword=='中奖名单'){
                                    $contentStr = "查看活动中奖名单，点击→http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100005323&idx=1&sn=2a6e5844eee44474889d0f12a1a2ede0&chksm=17df0f6e20a8867847051408382746f75663ce348830168deeba81401f9ec3f4a0f9b49fd1d3&mpshare=1&scene=23&srcid=1116P6zSAM9HC1DIKMLAQdR3#rd";
                                    $msgType = "text";
                                    $resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
                                    echo $resultStr;
                                }else if($keyword=='冰雕'){
                                    if($time<$overtime){

                                    $contentStr  = "感谢您参与河北旅游网赠票活动，请输入您的手机号。";
                                    $contentStr .= "系统将生成您的专属活动海报，成功邀请6位好友帮助扫描海报上二维码即可获得价值69元冰雕极地大世界儿童套票一张，陪同前去的成人可享受门票60元/张（原价88元）最多限两名成人";
                                    $this -> responseText($toUser,$fromUser,$contentStr);
                                    exit;
                                    }else{
                                        echo '';exit;
                                    }

                                }else if($keyword=='我的冰雕'){
                                    if($time<$overtime) {
                                        $message = $this->activity->action_rank($toUser);
                                        $content = $message['msg'];
                                        $this->responseText($toUser, $fromUser, $content);
                                        exit;
                                    }else{
                                        echo '';
                                        exit;
                                    }
                                }
                                else{
                                    echo "";
                                    exit;
                                }
                            }
                            $msgType = "text";
                            $resultStr = sprintf($textTpl, $toUser, $fromUser, time(), $msgType, $contentStr);
                            echo $resultStr;

                        } else {

                            echo "";
                            exit;


                        }
                    }else{// 匹配成功
                        // 获取  截图分享活动内容
                        $arr   = self::get_cutPicture();// 这个事用于截图分享
                        if(!empty($arr)) {
                            $cutpid  =  $arr['id'];//$this ->cutid;//  每次截图活动的id
                            $time = time();
                            $starttime = strtotime($arr['starttime']);
                            $overtime = strtotime($arr['overtime']);
                            if($time>$starttime&&$time<$overtime){
                                $sql ="select * from `sline_cutPicture_user` where openid ='$toUser' and cutpid=$cutpid";
                                $isuser  =  $this ->_db->get_one($sql);
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
                                }else{
                                    $sql = "select nickname from `bbs_hjbox_users`where openid ='$toUser'";
                                    $data['nickname']  =  $this ->_db->get_one($sql);
                                    $data['openid'] =$toUser;
                                    $data['cutpid'] = $arr['id'];
                                    $data['addtime'] =time();
                                    $flag = $this->_db->insert('sline_cutPicture_user', $data);
                                    if($flag){//参与活动成功   更新用户信息

                                        $where = " openid ='$toUser' ";
                                        $sql = " update `bbs_hjbox_users` set `cutpic` =`cutpic`+1,`telphone`='$data[phone]' where ".$where;
                                        $this ->_db->query($sql);
                                        $this ->getUsersMes($toUser);
                                        $sql = " update `sline_cutpicture` set `part_num` =part_num+1 where id = $arr[id]";

                                        $this ->_db->query($sql);
                                        if(!empty($arr['PhoneContent'])){
                                            $contentStr =$arr['PhoneContent'];
                                        }else{
                                        $contentStr ='参与活动成功，手机号我们已收到:请留下您的活动的截图照片，作为参赛作品';
                                        }
                                    }
                                }
                            }else{
                                echo '';
                                exit;
                            }

                        }else{
                            if($time>$overtime){
                                echo '';
                                 exit;
                            }
                           // echo '';
                           // exit;
                           // if($keyword=='我要冰瀑门票+手机号')

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
                        //  $contentStr = '成功';
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

        $access_token=$this->get_access_token('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');

        $url   =  'https://api.weixin.qq.com/cgi-bin/media/upload?access_token='.$access_token.'&type=image';

        $imgUrl   = '/home/wwwroot/www.aitto.net'.$picpath;

        $data = array('media'=>'@'.$imgUrl);

        $result = $this->curl_posts($url,$data);

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
    //获取 用户的  信息
    public function getUsersMes($openid){
        $access_token=$this->get_access_token('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
        //2初始化
        $ch = curl_init();
        //3.设置参数
        curl_setopt($ch , CURLOPT_URL, $url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        //4.调用接口
        $res = curl_exec($ch);
        //5.关闭curl
        curl_close( $ch );
        if( curl_errno($ch) ){
            var_dump( curl_error($ch) );
        }
        $arr = json_decode($res, true);
        $this ->insertUserMsg($openid,$arr);
     
    }
    //============================
    /*
     * 回复 文本消息
     */
    public  function responseText($toUser,$fromUser,$content){
        $msgType  =  'text';

        $content  =  !empty($content) ? $content : $this ->gz_content;

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
    /*
    *       下载 微信图片到本地
    * $mediaId
    *
    */

    public  function  getWXPic($meid){

        $access_token=$this->get_access_token('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');

        $url = "https://api.weixin.qq.com/cgi-bin/media/get?access_token=" . $access_token . "&media_id=".$meid;

        $path = 'uploads/weixin';

        $filename  = date("YmdHis",time());
        $array = $this->getImage($url,$path,$filename,1);

        return $array;

    }
    /*
       *功能：下载远程图片保存到本地
       *参数：
       *$url：需要下载的文件url,
       *$path：下载下来的文件需要保存到的目录
       *$fileName：保存文件名称，当保存文件名称为空时则使用远程文件原来的名称
       *type：使用的下载方式
      */
    function getImage($url,$save_dir='',$filename='',$type=0){
        $ext=".jpg";//以jpg的格式结尾
        clearstatcache();//清除文件缓存
        if(trim($url)==''){
            return array('file_name'=>'','save_path'=>'','error'=>1);
        }
        if(trim($save_dir)==''){
            $save_dir='./';
        }
        if(trim($filename)==''){//保存文件名
            $filename=time().$ext;
        }else{
            $filename = $filename.$ext;
        }
        if(0!==strrpos($save_dir,'/')){
            $save_dir.='/';
        }
        //创建保存目录
        if(!is_dir($save_dir)){//文件夹不存在，则新建
            //print_r($save_dir."文件不存在");
            mkdir(iconv("UTF-8", "GBK", $save_dir),0777,true);
            //mkdir($save_dir,0777,true);
        }
        //获取远程文件所采用的方法
        if($type){
            $ch=curl_init();
            $timeout=3;
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
            $img=curl_exec($ch);
            curl_close($ch);
        }else{
            ob_start();
            readfile($url);
            $img=ob_get_contents();
            ob_end_clean();
        }
        $size=strlen($img);
        //文件大小
        //var_dump("文件大小:".$size);
        $fp2=@fopen($save_dir.$filename,'w');
        fwrite($fp2,$img);
        fclose($fp2);
        unset($img,$url);
        return array('file_name'=>$filename,'save_path'=>$save_dir.$filename,'error'=>0);
    }

    // //============================
    // /*
    //  *回复多图文类型的微信消息
    //  */
    public function responseNews($postObj,$arr){
        $toUser = $postObj->FromUserName;
        $fromUser = $postObj->ToUserName;
        $template = "<xml>
				 	<ToUserName><![CDATA[%s]]></ToUserName>
				 	<FromUserName><![CDATA[%s]]></FromUserName>
				 	<CreateTime>%s</CreateTime>
				 	<MsgType><![CDATA[%s]]></MsgType>
				 	<ArticleCount>".count($arr)."</ArticleCount>
				 	<Articles>";
        foreach($arr as $k=>$v){
            $template .="<item>
				 		<Title><![CDATA[".$v['title']."]]></Title>
				 		<Description><![CDATA[".$v['content']."]]></Description>
				 		<PicUrl><![CDATA[".$v['pic']."]]></PicUrl>
				 		<Url><![CDATA[".$v['url']."]]></Url>
				 		</item>";
        }

        $template .="</Articles>
				 	</xml> ";
        echo sprintf($template, $toUser, $fromUser, time(), 'news');
    }
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
    function curl_posts($url, $data = null)
    {
        //创建一个新cURL资源
        $curl = curl_init();
        //设置URL和相应的选项
        curl_setopt($curl, CURLOPT_URL, $url);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行curl，抓取URL并把它传递给浏览器
        $output = curl_exec($curl);
        //关闭cURL资源，并且释放系统资源
        curl_close($curl);
        if( curl_errno($curl) ){
            var_dump( curl_error($curl) );
        }
        return $output;
    }








}

?>