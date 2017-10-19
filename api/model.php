<?php
// +----------------------------------------------------------------------
// | ]
// +----------------------------------------------------------------------
// |
// +----------------------------------------------------------------------
// |
// +----------------------------------------------------------------------
// | Author:
// +----------------------------------------------------------------------

//----------------------------------
// 微信 开发模型类文件
//----------------------------------
class Model
{
    /**
     * 版本号
     * @var string
     */
    const VERSION = '1.0';

    private static $db;

    public function __construct($_db)
    {
        //  db类
        self::$db = $_db;
    }

    /*
     *   获得 公众号 的类型
     *  1 订阅号
     *  2 河北旅游网服务号
     *  3 米淘公众号 服务号
     *  9 测试号
     */
    public  static  function getPublicNumModel($model){

        if(empty($model)){
             return false;
        }
        $sql  = "select * from `sline_weixin` where model=".$model;

        $serviceNum = self::$db->get_one($sql);

        return $serviceNum;
    }
    /*
     *  获取 用户的 信息
     *  $openid
     *  $appid
     *  $appsecret
     */
    public static  function  getUsersMes($openid,$appid,$appsecret){

        $access_token=self::get_access_token($appid,$appsecret);
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";

        $res = self::curl_posts($url);

        $arr = json_decode($res, true);
        return $arr;
    }
    //用户关注微信，插入用户信息\
    /*
     *  $wx_id 关联weixin  的id
     */
    public static function   insertUserMsg($openid,$arr=array(),$wx_id){
        self::$db ->write_log($openid);
        $time    = time();
        $sql     = "SELECT * FROM `bbs_hjbox_users` WHERE  openid='$openid' and wx_id=".$wx_id;
        $r       = self::$db -> get_one($sql);
        // 值为1时是男性，值为2时是女性，值为0时是未知

        if(empty($r)){
            $sql ="INSERT INTO `bbs_hjbox_users` ";
            $sql .=" (`wx_id`,`nickname`, `sex`, `city`, `country`, `province`, `headimgurl`, `is_gz`, `openid`,`gztime`) VALUES ";
            $sql .=" ($wx_id,'$arr[nickname]','$arr[sex]','$arr[city]','$arr[country]','$arr[province]','$arr[headimgurl]','1','$openid','$time')";
            $r1  = self::$db ->query($sql);
        }else{
            $sql ="UPDATE `bbs_hjbox_users`  SET `nickname`='$arr[nickname]',`sex`='$arr[sex]',`city`='$arr[city]',`country`='$arr[country]',`province`='$arr[province]',`is_gz`=1,`headimgurl`='$arr[headimgurl]' WHERE openid='$openid' and wx_id=".$wx_id;
            $r1  = self::$db -> query($sql);
        }
        return $r1;
        //执行成功 返回 true
        //根据openid判断是否存在，
    }
    //取消关注修改用户关注状态
    public static  function updateUserStatus($openid,$wx_id){
        //修改用户状态
        $data             = array();
        $data['is_gz']    = 0;
        $re               = self::$db ->update('bbs_hjbox_users',$data,"openid='$openid' and wx_id=$wx_id");
        return $re;
    }
    /*
     *  获取 分享活动内容
     */
    public static function  get_cutPicture(){

        $sql  = "select * from `sline_cutpicture` where isopen = 1 order by displayorder id DESC";

        $arr   = self::$db->get_one($sql);

        return $arr;

    }

    /*
     *   将截图活动的人员   注册成河北旅游网的会员
     *   addUserToHBLY = addUserToHeBeiLvYou
     *
     */
    public  static  function addUserToHBLY($mobile){

        $sql = "SELECT mid FROM `sline_member` WHERE mobile='$mobile'";

        $user = self::$db->get_one($sql);

        if(empty($user)){
            $member = array(

                'nickname'=>substr($mobile,0,5).'***',

                'pwd'=>md5($mobile),

                'jointime'=>time(),

                'mtype' => 2,

                'email'=>'',

                'mobile'=>$mobile,

                'joinip'=>self::get_ip(),

                'jifen'=>0

            );
            self::$db->insert('sline_member', $member);
        }

    }
    /*
     *  获取 用户的ip
     */

    public static function  get_ip()

    {

        static $realip = NULL;

        if ($realip !== NULL)

        {

            return $realip;

        }

        if (isset($_SERVER))

        {

            if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))

            {

                $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

                /* 取X-Forwarded-For中第x个非unknown的有效IP字符? */

                foreach ($arr as $ip)

                {

                    $ip = trim($ip);

                    if ($ip != 'unknown')

                    {

                        $realip = $ip;

                        break;

                    }

                }

            } elseif (isset($_SERVER['HTTP_CLIENT_IP']))

            {

                $realip = $_SERVER['HTTP_CLIENT_IP'];

            } else

            {

                if (isset($_SERVER['REMOTE_ADDR']))

                {

                    $realip = $_SERVER['REMOTE_ADDR'];

                } else

                {

                    $realip = '0.0.0.0';

                }

            }

        } else

        {

            if (getenv('HTTP_X_FORWARDED_FOR'))

            {

                $realip = getenv('HTTP_X_FORWARDED_FOR');

            } elseif (getenv('HTTP_CLIENT_IP'))

            {

                $realip = getenv('HTTP_CLIENT_IP');

            } else

            {

                $realip = getenv('REMOTE_ADDR');

            }

        }

        preg_match("/[\d\.]{7,15}/", $realip, $onlineip);

        $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';

        return $realip;

    }
    /*
     *  获取当前截图活动的用户信息
     * curActUserInfo= currentActivityUserInformation
     *  $openid
     *  $cutpid  截图活动的id
     */
    public  static function curActUserInfo($openid,$cutpid){

        if(empty($openid)||empty($cutpid)){
             return false;
        }
        $sql ="select * from `sline_cutPicture_user` where openid ='".$openid."' and cutpid=$cutpid";

        $userInfo  =  self::$db->get_one($sql);

        return $userInfo;
    }

    public static  function get_access_token($appid,$appsecret){
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
        $data = json_decode(file_get_contents($url),true);
        if($data['access_token']){
            return $data['access_token'];
        }else{
            return "";
        }
    }
    //获取多图文信息
    /*
     *  is_openid  1 标示启用 多图文 功能
     *             0 不启用
     */
    public static  function getImageNews($wx_id){

        $sql         = "SELECT * FROM `sline_wximagenews` WHERE is_openid=1 and wx_id=$wx_id order by sort ASC ";

        $imageNews   = self::$db->get_all($sql);

        return  $imageNews;
    }

    /*
    *回复多图文类型的微信消息
    */
    public static function responseNews($arr){

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

        return $template;

    }
    /*
     *  获得自定义餐单内容
     */
    public static function getZDYMenu(){

        $sql = "select * from `sline_wxaddmenu` where pid=0 and is_show=0 ORDER by status";
        $re  =self::$db -> get_all($sql);

    }
    //获取自定义菜单内容
    public static function getMenuMsg($wx_id){

        $sql = "select * from `sline_wxaddmenu` where pid=0 and is_show=0 and wx_id=$wx_id ORDER by status ASC ";
        $re  =self::$db -> get_all($sql);
        $rs  =array();
        //生成 主=(子菜单);的数组
        foreach($re as $kel=>$val){

            $sql = "select * from `sline_wxaddmenu` where pid='$val[id]'  and is_show=0 and wx_id=$wx_id ORDER by status";
            $re2 = self::$db ->get_all($sql);

            $rs[$kel]['titles']  = $re2;
            $rs[$kel]['content'] = $val['content'];
            $rs[$kel]['title']   = $val['title'];
            $rs[$kel]['type']    =$val['type'];
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

    /*
     *功能：下载远程图片保存到本地
     *参数：
     *$url：需要下载的文件url,
     *$path：下载下来的文件需要保存到的目录
     *$fileName：保存文件名称，当保存文件名称为空时则使用远程文件原来的名称
     *type：使用的下载方式
    */
    public  static function getImage($url,$save_dir='',$filename='',$type=0){
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

    /*
     * 下载 微信图片到本地
     * $mediaId
     *
     */

    public static  function  getWXPic($meid,$appid,$appsecret){

        $access_token= self::get_access_token($appid,$appsecret);

        $url = "https://api.weixin.qq.com/cgi-bin/media/get?access_token=" . $access_token . "&media_id=".$meid;

        $path = 'uploads/weixin';

        $filename  = date("YmdHis",time());
        $array = self::getImage($url,$path,$filename,1);

        return $array;

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
    /**
     * post的curl获取数据
     * @param $url
     * @param $content
     * @return mixed
     */
    public function curl_post($url,$content){
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














}


class ModelScan
{
    /*
     *   蜡像馆 扫描活动 Model
     *
     *   1: 临时二维码 的场景值id  含义
     *          1  柿子保卫战开始；2 柿子保卫战 结束
     *          3  最强打大脑开始；4 迷宫结束
     *          5  一击即中结束；6 急陂勇下 结束
     *          7，8  备用场景值；
     */
    private static $db;

    private static $table="sline_scan";

    public function __construct($_db)
    {
        //  db类
        self::$db = $_db;

    }

    //  场景值 1  开始活动扫描二维码
    //  添加用户的参加信息
    public function insertUserInfo($openid){

        $sql = "select id from `sline_scan` where `openid`='".$openid."'";

        $re  = self::$db->get_one($sql);

       $msg ='亲子协作 勇闯龙山挑战之旅由此开始！第一关“柿子保卫战”，点击查看-><a href="http://www.aitto.net/phone/scan/persimmonBattle">通关提示</a>';

        if(empty($re)){
            $data['time_1']=time();
            $data['openid']=$openid;
             $is_success = self::$db->insert('sline_scan', $data);
            if($is_success){

                 return  $msg;
            }else{
                 return "扫描二维码失败，请重新扫描";
            }
        }else{

            return $msg;
        }


    }
    /*
     *   保存 柿子保卫战 结束时间
     */
    public function updateTime($openid,$scene_id){

        $data["time_$scene_id"] = time();

        $condition = "`openid`='".$openid."'";

        $sql = "select * from `sline_scan` where `openid`='".$openid."'";

        $re  = self::$db->get_one($sql);
      //  self::$db->write_log(var_export($re,true));

        if(empty($re)){

             return "请扫描柿子保卫战开始二维码，二维码位置请联系活动组织人员";

        }else {

            $msg = "";
            switch ($scene_id) {
                case 2:
                    if(empty($re['time_1'])){

                        //$msg ='请扫描第一关开始二维码，点击-><a href="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=gQE38TwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyS0NFYjRYTnRhUFUxTm9KM2hwMVUAAgRYoJtZAwQAjScA">查看二维码</a>';
                        $msg ='请扫描柿子保卫战开始二维码，二维码位置请联系活动组织人员';

                    }else{

                        $msg .= '恭喜您通关“柿子保卫战”，下一关“最强大脑”，点击查看><a href="http://www.aitto.net/phone/scan/stormBrain">通关提示</a>';
                        $is_ok = self::$db->update(self::$table, $data, $condition);
                    }
                    break;
                case 4:
                    if(empty($re['endtime_3'])){

                        $msg ='请通关‘最强大脑’。';
                    }else{
                       $msg .= '恭喜您通关“迷之方阵”，下一关“一击即中”，点击查看><a href="http://www.aitto.net/phone/scan/oneHitToTheBody">通关提示</a>';
                        $is_ok = self::$db->update(self::$table, $data, $condition);

                    }
                    break;
                case 3:
                    if(empty($re['time_2'])){

                        $msg = '请扫描柿子保卫战结束二维码，二维码位置请联系活动组织人员';

                    }else{
                        $msg = '准备好了吗？点击-><a href="http://www.aitto.net/phone/scan/dati">开始答题</a>';

                        $is_ok = self::$db->update(self::$table, $data, $condition);
                    }
                   break;
                case 5:
                    if(empty($re['time_4'])){

                        $msg = '请通关‘迷之方阵’关卡，并扫描通关二维码';
                    }else{
                       $msg .= '恭喜您通关“一击即中”，下一关“急坡勇下”，点击查看><a href="http://www.aitto.net/phone/scan/SteepBrave">通关提示</a>';
                        $is_ok = self::$db->update(self::$table, $data, $condition);
                    }
                   break;
                case 6:
                    if(empty($re['time_5'])){
                        $msg = '请通关‘一击即中’关卡，并扫描通关二维码';
                    }else{
                        $msg = '恭喜您完成本次亲子协作 勇闯龙山挑战活动！点击查看-><a href="http://www.aitto.net/phone/scan/gameover">挑战成绩</a>';
                        $is_ok = self::$db->update(self::$table, $data, $condition);
                    }
                    break;
            }
           return $msg;
        }

    }













}
?>