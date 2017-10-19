<?php



/**

 * 公共静态类模块

 * User: Netman

 * Date: 15-09-12

 * Time: 下午14:06

 */

class Common

{



    public static $pinyins = array();



    /**

     *  获取编辑器

     *

     * @access    public

     * @param     string $fname 表单名称

     * @param     string $fvalue 表单值

     * @param     string $nheight 内容高度

     * @param     string $etype 编辑器类型

     * @param     string $gtype 获取值类型

     * @param     string $isfullpage 是否全屏

     * @return    string

     */

    public static function get_editor($fname, $fvalue, $nwidth = "700", $nheight = "350", $etype = "Sline", $ptype = '', $gtype = "print", $jsEditor = false)

    {



        require(DOCROOT . '/res/vendor/slineeditor/ueditor.php');



        $UEditor = new UEditor();

        $UEditor->basePath = $GLOBALS['cfg_cmspath'] . $GLOBALS['cfg_public_url'].'vendor/slineeditor/';

        $nheight = $nheight == 400 ? 300 : $nheight;

        $config = $events = array();

        $GLOBALS['tools'] = empty($toolbar[$etype]) ? $GLOBALS['tools'] : $toolbar[$etype];

        $config['toolbars'] = $GLOBALS['tools'];

        $config['minFrameHeight'] = $nheight;

        $config['initialFrameHeight'] = $nheight;

        $config['initialFrameWidth'] = $nwidth;

        $config['autoHeightEnabled'] = false;

        if (!$jsEditor)

        {

            $code = $UEditor->editor($fname, $fvalue, $config, $events);

        }

        else

        {

            $code = $UEditor->jseditor($fname, $fvalue, $config, $events);

        }



        if ($gtype == "print")

        {

            echo $code;

        }

        else

        {

            return $code;

        }



    }


    // 对内容的处理  小封 0221

    public  static function  addxiegang($v){

        require(DOCROOT . '/res/vendor/slineeditor/ueditor.php');

        $UEditor = new UEditor();

        $arr =  $UEditor->add($v);

        return  $arr;

    }
    /**

     * @param $filelist 要加载的js文件列表

     * @param bool $minjs 是否合并js文件

     * @param bool $default 是否从默认目录加载

     * @return string

     * @desc,加载js文件

     */

    public static function js($filelist, $minjs = true, $default = true)

    {

        $filearr = explode(',', $filelist);

        $jsArr = array();

        $out = $v = '';

        foreach ($filearr as $file)

        {

            if ($default == true)

            {

                $tfile = DOCROOT  . $GLOBALS['cfg_public_url']."js/" . $file;



                $file = $GLOBALS['cfg_public_url'].'js/' . $file;

            }

            else

            {

                $tfile = DOCROOT . $file;



            }

            if (file_exists($tfile))

            {

                // $out .= HTML::script($file);

                $jsArr[] = $file;

            }



        }

        if ($jsArr)

        {

            //如果开启自动合并js

            if ($minjs)

            {

                $f = implode(',', $jsArr);

                //$jsUrl = URL::site('pub/js?file=' . $f);

                $jsUrl = '/min/?f='.$f;

                $out = '<script type="text/javascript"src="' . $jsUrl . '"></script>' . "\r\n";

            }

            else

            {

                foreach ($jsArr as $js)

                {

                    $out .= HTML::script($js) . "\r\n";

                }

            }



        }

        return $out;



    }





    /**

     * @param $filelist  加载的css文件列表

     * @param bool $mincss 是否合并生成.

     * @param bool $default 是否从默认css目录加载,如果值为false,则直接从根目录加载相应文件,即DOCROOT+文件名

     * @return

     * @desc 加载css文件.

     */

    public static function css($filelist, $mincss = true, $default = true)

    {

        $filearr = explode(',', $filelist);

        $filelist = array();

        $out = '';

        foreach ($filearr as $file)

        {

            if ($default == true)

            {

                $tfile = DOCROOT .$GLOBALS['cfg_public_url']."css/" . $file;

                $file = $GLOBALS['cfg_public_url']."css/{$file}";

            }

            else

            {

                $tfile = DOCROOT . $file;

            }



            if (file_exists($tfile))

            {

                $filelist[] = $file;

            }





        }

        if (!empty($filelist))

        {

            //如果开启css合并,此项是默认开启的.

            if ($mincss)

            {

                $f = implode(',', $filelist);

                //$cssUrl = URL::site('pub/css?file=' . $f);

                //$cssUrl = URL::site('pub/css?f=' . $f);



                $cssUrl = '/min/?f='.$f;

                $out = '<link type="text/css" href="' . $cssUrl . '" rel="stylesheet"  />' . "\r\n";



            }

            else

            {

                foreach ($filelist as $css)

                {

                    $out .= HTML::style($css) . "\r\n";

                }

            }



        }

        return $out;

    }



    /*

     * 获取配置文件值

     * */

    public static function get_config($group)

    {

        return Kohana::$config->load($group);

    }



    /*

     * 清空数组里的空值

     * */



    public static function remove_arr_empty($arr)

    {



        $newarr = array_diff($arr, array(null, 'null', '', ' '));

        return $newarr;



    }



    /*

     * 生成缩略图

     *

     * */

    public static function thumb($srcfile, $savepath, $w, $h)

    {

        Image::factory($srcfile)->resize($w, $h, Image::WIDTH)->save($savepath);

        return $savepath;

    }



    /*

     * 时间转换函数

     * */

    public static function mydate($format, $timest)

    {

        $addtime = 8 * 3600;

        if (empty($format))

        {

            $format = 'Y-m-d H:i:s';

        }

        return gmdate($format, $timest + $addtime);

    }





    /*

    * 获取文件扩展名

    * */

    public static function get_extension($file)

    {

        return end(explode('.', $file));

    }



    /*

     * 级联删除文件夹

     */

    public static function rrmdir($dir)

    {

        if (is_dir($dir))

        {

            $objects = scandir($dir);

            foreach ($objects as $object)

            {

                if ($object != "." && $object != "..")

                {

                    if (filetype($dir . "/" . $object) == "dir")

                        self::rrmdir($dir . "/" . $object);

                    else unlink($dir . "/" . $object);

                }

            }

            reset($objects);

            rmdir($dir);

        }



    }



    /*

     * 保存文件

     * */

    public static function save_file($file, $content)

    {



        $fp = fopen($file, "wb");

        flock($fp, 3);

        //@flock($this->open,3);

        $result = fwrite($fp, $content);

        fclose($fp);

        return $result;

    }



    //检查一个串是否存在在某个串中

    public static function check_instr($str, $substr)

    {



        $tmparray = explode($substr, $str);

        if (count($tmparray) > 1)

        {

            return true;

        }

        else

        {

            return false;

        }

    }



    /*

     * 检测属性是否存在属性列表里.

     * */

    public static function check_in_attr($attrid,$id,$explode='_')

    {

        $arr = explode($explode,$attrid);

        if(in_array($id,$arr))

        {

            return true;

        }

        else

        {

            return false;

        }



    }



    /*

     * curl http访问

     * */

    public static function http($url, $method = 'get', $postfields = '')

    {



        $ci = curl_init();



        curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);



        if ($method == 'POST')

        {

            curl_setopt($ci, CURLOPT_POST, TRUE);

            if ($postfields != '')

                curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);

        }



        curl_setopt($ci, CURLOPT_URL, $url);

        $response = curl_exec($ci);

        curl_close($ci);

        return $response;



    }



    /*

     * 对象转数组

     * */



    public static function object_to_array($array)

    {

        if (is_object($array))

        {

            $array = (array)$array;

        }

        if (is_array($array))

        {

            foreach ($array as $key => $value)

            {

                $array[$key] = self::object_to_array($value);

            }

        }

        return $array;

    }



    /**

     *  获取拼音信息

     *

     * @access    public

     * @param     string $str 字符串

     * @param     int $ishead 是否为首字母

     * @param     int $isclose 解析后是否释放资源

     * @return    string

     */

    public static function get_pinyin($str, $ishead = 0, $isclose = 1)

    {

        $str = iconv('utf-8', 'gbk//ignore', $str);



        $restr = '';

        $str = trim($str);

        $slen = strlen($str);

        if ($slen < 2)

        {

            return $str;

        }



        if (count(self::$pinyins) == 0)

        {

            $fp = fopen(APPPATH . '/vendor/pinyin/pinyin.dat', 'r');

            while (!feof($fp))

            {

                $line = trim(fgets($fp));

                self::$pinyins[$line[0] . $line[1]] = substr($line, 3, strlen($line) - 3);

            }

            fclose($fp);

        }

        for ($i = 0; $i < $slen; $i++)

        {

            if (ord($str[$i]) > 0x80)

            {

                $c = $str[$i] . $str[$i + 1];

                $i++;

                if (isset(self::$pinyins[$c]))

                {

                    if ($ishead == 0)

                    {

                        $restr .= self::$pinyins[$c];

                    }

                    else

                    {

                        $restr .= self::$pinyins[$c][0];

                    }

                }

                else

                {

                    $restr .= "_";

                }

            }

            else if (preg_match("/[a-z0-9]/i", $str[$i]))

            {

                $restr .= $str[$i];

            }

            else

            {

                $restr .= "_";

            }

        }

        if ($isclose == 0)

        {

            unset(self::$pinyins);

        }

        $sheng = "/.*sheng.*/";

        $shi = "/.*shi.*/";

        $qu = "/.*qu.*/";

        if (preg_match($sheng, $restr, $matches))

        {

            $restr = str_replace('sheng', '', $matches[0]);

        }

        if (preg_match($shi, $restr, $matches))

        {

            $restr = str_replace('shi', '', $matches[0]);

        }

        if (preg_match($qu, $restr, $matches))

        {

            $restr = str_replace('qu', '', $matches[0]);

        }

        return $restr;

    }



    /*

     * decode加密/解密算法

     * */



    public static function authcode($string, $operation = 'DECODE', $key = '', $expiry = 0)

    {

        $ckey_length = 4;



        $key = md5($key ? $key : 'stourweb');

        $keya = md5(substr($key, 0, 16));

        $keyb = md5(substr($key, 16, 16));

        $keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length) : substr(md5(microtime()), -$ckey_length)) : '';



        $cryptkey = $keya . md5($keya . $keyc);

        $key_length = strlen($cryptkey);



        $string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0) . substr(md5($string . $keyb), 0, 16) . $string;

        $string_length = strlen($string);



        $result = '';

        $box = range(0, 255);



        $rndkey = array();

        for ($i = 0; $i <= 255; $i++)

        {

            $rndkey[$i] = ord($cryptkey[$i % $key_length]);

        }



        for ($j = $i = 0; $i < 256; $i++)

        {

            $j = ($j + $box[$i] + $rndkey[$i]) % 256;

            $tmp = $box[$i];

            $box[$i] = $box[$j];

            $box[$j] = $tmp;

        }



        for ($a = $j = $i = 0; $i < $string_length; $i++)

        {

            $a = ($a + 1) % 256;

            $j = ($j + $box[$a]) % 256;

            $tmp = $box[$a];

            $box[$a] = $box[$j];

            $box[$j] = $tmp;

            $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));

        }



        if ($operation == 'DECODE')

        {

            if ((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16))

            {

                return substr($result, 26);

            }

            else

            {

                return '';

            }

        }

        else

        {

            return $keyc . str_replace('=', '', base64_encode($result));

        }



    }





    //表字段操作(添加)

    public static function add_field($table, $fieldname, $fieldtype, $isunique, $comment)

    {

        $fieldname = 'e_' . $fieldname;

        $sql = "ALTER TABLE `{$table}` ADD COLUMN `{$fieldname}` {$fieldtype} NULL DEFAULT NULL COMMENT '$comment'";

        $sql .= $isunique == 1 ? ",ADD unique('{$fieldname}');" : '';

        return DB::query(1, $sql)->execute();

    }



    /*

     * 表字段操作(删除)

     * */

    public static function del_field($table, $fieldname)

    {

        $sql = "ALTER TABLE `{$table}` DROP COLUMN `{$fieldname}`";

        DB::query(1, $sql)->execute();

    }



    //获取时间范围

    /*

     * 1:今日

     * 2:昨日

     * 3:本周

     * 4:上周

     * 5:本月

     * 6:上月

     * */

    public function get_timerange($type)

    {

        switch ($type)

        {

            case 1:

                $starttime = strtotime(date('Y-m-d 00:00:00'));

                $endtime = strtotime(date('Y-m-d 23:59:59'));

                break;

            case 2:

                $starttime = strtotime(date('Y-m-d 00:00:00', strtotime('-1 day')));

                $endtime = strtotime(date('Y-m-d 23:59:59', strtotime('-1 day')));

                break;

            case 3:

                $starttime = mktime(0, 0, 0, date("m"), date("d") - date("w") + 1, date("Y"));;

                $endtime = time();

                break;

            case 4:

                $starttime = strtotime(date('Y-m-d 00:00:00', strtotime('last Sunday')));

                $endtime = strtotime(date('Y-m-d H:i:s', strtotime('last Sunday') + 7 * 24 * 3600 - 1));

                break;

            case 5:

                $starttime = strtotime(date('Y-m-01 00:00:00', time()));

                $endtime = time();

                break;

            case 6:

                $starttime = strtotime(date('Y-m-01 00:00:00', strtotime('-1 month')));

                $endtime = strtotime(date('Y-m-31 23:59:00', strtotime('-1 month')));

                break;





        }

        $out = array($starttime, $endtime);

        return $out;



    }



    /*

     * xml转数组

     * */

    public static function xml_to_array($xml)

    {

        $array = (array)(simplexml_load_string($xml));

        foreach ($array as $key => $item)

        {

            $array[$key] = self::struct_to_array((array)$item);

        }

        return $array;

    }



    /*

     * 结构转数组

     * */

    public static function struct_to_array($item)

    {

        if (!is_string($item))

        {

            $item = (array)$item;

            foreach ($item as $key => $val)

            {

                $item[$key] = self::struct_to_array($val);

            }

        }

        return $item;

    }



    /*

     * 去除xss全局函数,所有输入参数都要调用这个参数.

     * */

    public static function remove_xss($param)

    {

        require_once Kohana::find_file('vendor', 'htmlpurifier/library/HTMLPurifier.auto');

        $purifier = new HTMLPurifier();

        $config = HTMLPurifier_Config::createDefault();

        $config->set('Core.Encoding', 'UTF-8'); //字符编码（常设）

        //如果参数是数组

        if (is_array($param))

        {

            foreach($param as &$value)

            {

                if(is_array($value))

                {

                    $value = $purifier->purifyArray($value);

                }

                else

                {

                    $value = $purifier->purify($value);

                }

            }

            $out = $param;



        }

        else

        {

            $out = $purifier->purify($param);

        }



        return $out;

    }

    /**
     * feng
     * 写入 日志文件
     * $data  写入的数据
     * $tyle记录的  方式
    **/
    public static  function  read_log($data,$file,$type='a+'){

            $file = !empty($file) ?$file : APPPATH .'text_log.txt';

            $file = fopen($file,$type);

            fwrite($file,date("Y-m-d H:i:s",time()).$data."\r\n");

            fclose($file);
    }

    // 写入系统缓存

    public static function cache_config($sys_prefix,$webid=0)

    {

        $file = APPPATH . '/cache/config.'.$sys_prefix.'.php';

        //缓存文件不存在

        if (!file_exists($file))

        {

            $data = Model_Sysconfig::config($webid);

            $config = array();

            foreach ($data as $v)

            {

                $config[$v['varname']] = trim($v['value']);

            }

            if (!isset($config['cfg_m_img_url']))

            {

                $config['cfg_m_img_url'] = $config['cfg_m_main_url'];

            }

            file_put_contents($file, '<?php defined(\'SYSPATH\') or die(\'No direct script access.\');' . PHP_EOL . 'return ' . var_export($config, true) . ';');

        }

        $data = require_once($file);

        return $data;

    }

    /*

     * 生成站点列表

     * */

    public static function cache_web_list()

    {

        Model_Destinations::gen_web_list();

    }



    // 发送邮件

    public static function send_email($maillto, $title, $content)

    {

        //如果没有自定义SMTP配置

        if ($GLOBALS['cfg_mail_smtp'] == '')

        {

            $GLOBALS['cfg_mail_smtp'] = "smtp.163.com";

        }

        if ($GLOBALS['cfg_mail_port'] == '')

        {

            $GLOBALS['cfg_mail_port'] = 25;

        }

        if ($GLOBALS['cfg_mail_user'] == '')

        {

            $GLOBALS['cfg_mail_user'] = "Stourweb@163.com";

            $GLOBALS['cfg_mail_pass'] = "kelly12345";

        }

        //SMTP服务器

        $smtpserver = $GLOBALS['cfg_mail_smtp'];

        //SMTP服务器端口

        $smtpserverport = $GLOBALS['cfg_mail_port'];

        //SMTP服务器的用户邮箱

        $smtpusermail = $GLOBALS['cfg_mail_user'];

        //发送给谁

        $smtpemailto = $maillto;

        //SMTP服务器的用户帐号

        $smtpuser = $GLOBALS['cfg_mail_user'];

        //SMTP服务器的用户密码

        $smtppass = $GLOBALS['cfg_mail_pass'];

        //邮件格式（HTML/TXT）,TXT为文本邮件

        $mailtype = "HTML";

        if ($smtpserverport == 25)

        {

            include_once(VENDORPATH . '/email.class.php');

            //邮件主题

            $mailsubject = iconv('UTF-8', 'GB2312//IGNORE', $title);

            //邮件内容

            $mailbody = iconv('UTF-8', 'GB2312//IGNORE', $content);

            //这里面的一个true是表示使用身份验证,否则不使用身份验证.

            $smtp = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);

            //是否显示发送的调试信息

            $smtp->debug = false;

            $status = $smtp->sendmail($smtpemailto, $smtpuser, $mailsubject, $mailbody, $mailtype);

        }

        else

        {

            include_once(VENDORPATH . '/mysendmail.class.php');

            $mail = new MySendMail();

            //设置smtp服务器，到服务器的SSL连接

            $mail->setServer($smtpserver, $smtpuser, $smtppass, 465, true);

            //设置发件人

            $mail->setFrom($smtpuser);

            //设置收件人，多个收件人，调用多次

            $mail->setReceiver($smtpemailto);

            //设置邮件主题、内容

            $mail->setMail($title, $content);

            //发送

            $status = $mail->sendMail();

        }

        return $status;

    }



    //session 管理

    public static function session($k, $v = '')

    {

        $session = Session::instance();

        if (empty($v))

        {

            $session = is_null($v) ? $session->delete($k) : $session->get($k);

        }

        else

        {

            $session->delete($k);

            $session->set($k, $v);

        }

        return $session;

    }



    //提示信息

    public static function message($msg)

    {

        if(empty($msg['jumpUrl'])){

            Request::current()->redirect('/');

        }

        $javascript=Common::js('jquery.min.js,layer/layer.js',0);



        $ico = $msg['status'] ? "icon:6," : "icon:5,";

        //echo $msg["msg"];exit;

        echo <<<EOT

        <!DOCTYPE html>

        <html lang="en">

        <head>

            <meta charset="UTF-8">

            <title>信息提示</title>

          {$javascript}

        </head>

        <body>

          <span style="display:none">{$msg["msg"]}</span>

        </body>

        <script type="text/javascript">

        layer.msg(

           '{$msg["msg"]}', {

            {$ico}

            time: 2000 //2秒关闭（如果不配置，默认是3秒）

        }, function(){

           window.location.href='{$msg['jumpUrl']}'

        });



        </script>

        </html>

EOT;

    }



    /**

     * @return string

     * @return 无图设置

     */

    public static function nopic()

    {

        return $GLOBALS['cfg_df_img'] ? $GLOBALS['cfg_df_img'] :  $GLOBALS['cfg_public_url'].'images/nopicture.jpg';

    }



    /*

     * 缩略图url

     */

    public static function img($src, $width='', $height='')

    {

        if (!empty($width) && !empty($height) && !empty($src) && !preg_match('/_\d+X\d+\.(jpg|jpeg|png|gif)$/is', $src))

        {

            $src=preg_replace('/(\.(?:jpg|jpeg|png|gif))$/', "_{$width}x{$height}$1", $src);

            return strpos($src, 'http://') === false ? rtrim($GLOBALS['cfg_basehost'], '/') . $src : $src;

        }



        else if(empty($src))

        {

            return self::nopic();//无图返回

        }



        else

        {

            return strpos($src, 'http://') === false ? rtrim($GLOBALS['cfg_basehost'], '/') . $src : $src;

        }



    }



    /*

    * 获取某个配置值

    * */



    public static function get_sys_conf($field,$varname,$webid=0)

    {

        $result=DB::query(Database::SELECT,"select $field from sline_sysconfig where varname='$varname' and webid=$webid")->execute()->as_array();

        return $result[0][$field];

    }



    public static function get_sys_para($varname)

    {

        return self::get_sys_conf('value',$varname,0);

    }





    //分析当前域名,返回主域名

    /**

     * @return string

     * @desc 如www.lvyou.com 返回 lvyou.com

     */

    private  static function get_domain()

    {

        $url = $GLOBALS['cfg_basehost'];



        $uarr = explode('.',$url);

        $k = 0;

        $out = '';

        foreach($uarr as $value)

        {

            $out.= $k!=0 ? $value : '';

            $out .='.';

            $k++;

        }

        $out = substr($out,0,strlen($out)-1);

        return $out;



    }



    /*

    * 获取主站prefix

    * */

    public static function get_main_prefix()

    {



        $sql = "SELECT webprefix FROM `sline_weblist` WHERE webid=0";

        $row = DB::query(1,$sql)->execute()->as_array();

        return $row[0]['webprefix'] ? $row[0]['webprefix'] : 'www';

    }



    /**

     * @param $webid

     * @return string

     * @desc 根据webid获取产品的url绝对地址

     */

    public static function get_web_url($webid)

    {



        $domain = self::get_domain();//顶级域名

        //如果webid不为0,则读取站点的信息

        if($webid!=0)

        {

            $prefix = ORM::factory('destinations',$webid)->get('webprefix');

        }

        else

        {

            $prefix = self::get_main_prefix();

        }

        $url = 'http://'.$prefix.$domain;

        return $url;





    }



    public static function cutstr_html($string, $sublen)

    {

        $string = strip_tags($string);



        $string = preg_replace ('/\n/is', '', $string);



        $string = preg_replace ('/ |　/is', '', $string);



        $string = preg_replace ('/&nbsp;/is', '', $string);



        preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $t_string);



        if(count($t_string[0]) - 0 > $sublen) $string = join('', array_slice($t_string[0], 0, $sublen))."…";



        else $string = join('', array_slice($t_string[0], 0, $sublen));



        return $string;



    }



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

    //跳转404页面

    public static function head404()

    {

        header("HTTP/1.1 404 Not Found");

        header("Status: 404 Not Found");

        //header("Location: ".$GLOBALS['cfg_basehost']."/404.php");

        echo "<script>window.location.href='/404.php'</script>";

        exit;



    }

    //跳转301

    public static function head301($url)

    {

        header( "HTTP/1.1 301 Moved Permanently" );

        header( "Location: $url" );

        exit();



    }

    /*

     * 数字转大写

     * */

    public static function daxie($number)

    {

        $number = substr($number, 0, 2);

        $arr = array("零", "一", "二", "三", "四", "五", "六", "七", "八", "九");

        if(strlen($number) == 1)

        {

            $result = $arr[$number];

        }

        else

        {

            if($number == 10)

            {

                $result = "十";

            }

            else

            {

                if($number < 20)

                {

                    $result = "十";

                }

                else

                {

                    $result = $arr[substr($number, 0, 1)] . "十";

                }

                if(substr($number, 1, 1) != "0")

                {

                    $result .= $arr[substr($number, 1, 1)];

                }

            }

        }

        return $result;

    }



    /**

     * @param $str

     * @return string

     * @desc 解密js通过escape的文字

     */

    public static function js_unescape($str)

    {

        $ret = '';

        $len = strlen($str);

        for ($i = 0; $i < $len; $i++)

        {

            if ($str[$i] == '%' && $str[$i+1] == 'u')

            {

                $val = hexdec(substr($str, $i+2, 4));

                if ($val < 0x7f) $ret .= chr($val);

                else if($val < 0x800) $ret .= chr(0xc0|($val>>6)).chr(0x80|($val&0x3f));

                else $ret .= chr(0xe0|($val>>12)).chr(0x80|(($val>>6)&0x3f)).chr(0x80|($val&0x3f));

                $i += 5;

            }

            else if ($str[$i] == '%')

            {

                $ret .= urldecode(substr($str, $i, 3));

                $i += 2;

            }

            else $ret .= $str[$i];

        }

        return $ret;

    }



    /*

     * 日历显示

     */

    public static function calender($year = '', $month = '', $priceArr = NULL, $suitid,$contain='')

    {



        date_default_timezone_set('Asia/Shanghai');

        $year = abs(intval($year));

        $month = abs(intval($month));

        $tmonth = $month < 10 ? "0" . $month : $month;

        $defaultYM = $year . '-' . $tmonth;

        $nowDate = new DateTime();

        if ($year <= 0)

        {

            $year = $nowDate->format('Y');

        }

        if ($month <= 0 or $month > 12)

        {

            $month = $nowDate->format('m');

        }

        //上一年

        $prevYear = $year - 1;

        //上一月

        $mpYear = $year;

        $preMonth = $month - 1;

        if ($preMonth <= 0)

        {

            $preMonth = 12;

            $mpYear = $prevYear;

        }

        $preMonth = $preMonth < 10 ? '0' . $preMonth : $preMonth;

        //下一年

        $nextYear = $year + 1;

        //下一月

        $mnYear = $year;

        $nextMonth = $month + 1;

        if ($nextMonth > 12)

        {

            $nextMonth = 1;

            $mnYear = $nextYear;

        }

        $nextMonth = $nextMonth < 10 ? '0' . $nextMonth : $nextMonth;

        //日历头

        $html = '<div id="calendar_tab">

<table width="100%" border="1" style="border-collapse: collapse;">



  <tr align="center" >

    <td class="top_title"><a id="premonth" data-year="'.$mpYear.'" class="prevmonth" data-suitid="'.$suitid.'"  data-month="'.$preMonth.'" href="javascript:;">上一月</a></td>

    <td colspan="3" class="top_title" style="height:50px;">' . $year . '年' . $month . '月</td>

    <td class="top_title"><a id="nextmonth" data-year="'.$mnYear.'" class="nextmonth" data-suitid="'.$suitid.'" data-month="'.$nextMonth.'" href="javascript:;">下一月</a></td>



  </tr>

  <tr>

  	<td colspan="5">

		<table width="100%" border="1" >

			<tr align="center">

				<td style="height:25px;">一</td>

				<td style="height:25px;">二</td>

				<td style="height:25px;">三</td>

				<td style="height:25px;">四</td>

				<td style="height:25px;">五</td>

				<td style="height:25px;">六</td>

				<td style="height:25px;">日</td>

			</tr>

';



        $currentDay = $nowDate->format('Y-m-j');



        //当月最后一天

        $creatDate = new DateTime("$year-$nextMonth-0");

        $lastday = $creatDate->format('j');

        $creatDate = NULL;



        //循环输出天数

        $day = 1;

        $line = '';

        while ($day <= $lastday)

        {

            $cday = $year . '-' . $month . '-' . $day;



            //当前星期几

            $creatDate = new DateTime("$year-$month-$day");

            $nowWeek = $creatDate->format('N');

            $creatDate = NULL;



            if ($day == 1)

            {

                $line = '<tr align="center">';

                $line .= str_repeat('<td>&nbsp;</td>', $nowWeek - 1);

            }

            if ($cday == $currentDay)

            {

                $style = 'style="font-size:16px; font-family:微软雅黑,Arial,Helvetica,sans-serif;color:#FF6600;line-height:22px;"';

            }

            else

            {

                $style = 'style=" font-size:16px; font-family:微软雅黑,Arial,Helvetica,sans-serif;line-height:22px;"';

            }

            //判断当前的日期是否小于今天

            $defaultmktime = mktime(1, 1, 1, $month, $day, $year);



            $currentmktime = mktime(1, 1, 1, date("m"), date("j"), date("Y"));

            //echo '<hr>';

            $tday = ($day < 10) ? '0' . $day : $day;

            $cdaydate = $defaultYM . '-' . $tday;

            $cdayme = strtotime($cdaydate);

            //单价

            $dayPrice = $priceArr[$cdayme]['price'];







            //库存

            $priceArr[$cdayme]['number'] = $priceArr[$cdayme]['number'] < -1 ? 0 : $priceArr[$cdayme]['number'];

            $number = $priceArr[$cdayme]['number'] != -1 ? $priceArr[$cdayme]['number'] : '不限';









            //定义单元格样式，高，宽

            $tdStyle = "height='80'";

            //判断当前的日期是否小于今天

            $tdcontent = '<span class="num">' . $day . '</span>';

            if ($defaultmktime >= $currentmktime)

            {





                if ($dayPrice)

                {



                    $dayPriceStrs = Currency_Tool::symbol() . $dayPrice . '<br>';

                    $balanceStr = '';

                    $tdcontent .= '<b class="price">' . $dayPriceStrs . '</b>' . $balanceStr;

                    if($number === 0)

                    {

                        $onclick = '';

                    }

                    else

                    {

                        $onclick = 'onclick="choose_day(\'' . $cday . '\',\'' . $contain . '\')"';

                    }



                }

                else

                {

                    $dayPriceStrs = '';

                    $tdcontent .= '<b class="no_yd">' . $dayPriceStrs . '</b>' . '<b class="roombalance_b"></b>';

                    $onclick = '';

                    $numberinfo = "<span class='kucun'></span>";



                }

                if($onclick == '')

                {



                    $line .= "<td $tdStyle class='nouseable' >" . $tdcontent ."</td>";

                }

                else

                {

                    $line .= "<td $tdStyle $onclick style='cursor:pointer;' class='useable' >" . $tdcontent . "</td>";

                }

            }

            else

            {

                $dayPriceStrs = '&nbsp;&nbsp;';

                $tdcontent .= '<b class="no_yd">' . $dayPriceStrs . '</b>';

                $line .= "<td $tdStyle class='nouseable' >" . $tdcontent . "</td>";

            }





            //$line .= "<td $style>$day <div>不可订</div></td>";



            //一周结束

            if ($nowWeek == 7)

            {

                $line .= '</tr>';

                $html .= $line;

                $line = '<tr align="center">';

            }



            //全月结束

            if ($day == $lastday)

            {

                if ($nowWeek != 7)

                {

                    $line .= str_repeat('<td>&nbsp;</td>', 7 - $nowWeek);

                }

                $line .= '</tr>';

                $html .= $line;



                break;

            }



            $day++;

        }



        $html .= '

		</table>

	</td>

  </tr>

</table>

</div>

';

        return $html;



    }



    //生成随机数

    public static function get_rand_code($num)

    {

        $out='';

        for ($i=1; $i<=$num; $i++)

        {

            $out.=mt_rand(0,9);

        }

        self::session('msgcode',$out);

        return $out;



    }



    /**

     *  * 求两个日期之间相差的天数

     *  * (针对1970年1月1日之后，求之前可以采用泰勒公式)

     *  * @param string $day1

     *  * @param string $day2

     *  * @return number

     *  */

    public static function diff_between_twodays($day1, $day2)

    {

        $second1 = strtotime($day1);

        $second2 = strtotime($day2);



        if($second1 < $second2)

        {

            $tmp = $second2;

            $second2 = $second1;

            $second1 = $tmp;

        }

        return intval(($second1 - $second2) / 86400);

    }





    /**

     * @param $cssfile

     * @return string

     * 引用用户自定义模板CSS

     */

    public static function get_user_css($cssfile,$version)

    {

        $filelist = explode(',',$cssfile);

        $css = '';



        $version = !empty($version) ? '?v='.$version : '';

        if($filelist)

        {

            foreach($filelist as &$file)

            {

                $file= '/usertpl/'.$file;

            }

            $f = implode(',', $filelist);

            $cssUrl = '/min/?f='.$f;

            $css = '<link type="text/css" href="' . $cssUrl . '" rel="stylesheet"  />' . "\r\n";



        }



        /* foreach($filelist as $file)

         {

             $css .= "<link href=\"/usertpl/" . $file . $version .

                 "\" rel=\"stylesheet\" media=\"screen\" type=\"text/css\" />\r\n";

         }*/

        return $css;



    }



    /**

     * @param $jsfile

     * @return string

     * 引用用户js文件.

     */

    public static function get_user_js($jsfile,$version)

    {

        $filelist = explode(',',$jsfile);

        //$version = !empty($version) ? '?v='.$version : '';

        $script = '';



        if($filelist)

        {

            foreach($filelist as &$file)

            {

                $file= '/usertpl/'.$file;

            }

            $f = implode(',', $filelist);

            //$jsUrl = URL::site('pub/js?file=' . $f);

            $jsUrl = '/min/?f='.$f;

            $script = '<script type="text/javascript"src="' . $jsUrl . '"></script>' . "\r\n";



        }

        //foreach($jsArr as $file)

        //{

        // $script .= "<script type=\"text/javascript\" language=\"javascript\" src=\"/usertpl/".$file.$version.

        //    "\"></script>\r\n";



        // }

        return $script;

    }



    /**

     * @param $phpfile

     * 引入php文件到模板

     * 模板调用方法{php Common::get_user_func('line/func.php')}

     */

    public static function get_user_func($phpfile)

    {

        $filelist = explode(',',$phpfile);

        foreach($filelist as $file)

        {

            $funcfile = BASEPATH.'/usertpl/'.$file;

            if(file_exists($funcfile))

            {

                include_once($funcfile);

            }

        }



    }



    /**

     * @return string

     * 会员无图

     */

    public static function member_nopic()

    {

        return $GLOBALS['cfg_public_url'].'images/member_nopic.png';

    }



    /**

     * @param $type

     * @param $key

     * @param string $value

     * @return bool|mixed

     * 缓存设置与获取

     */

    public static function cache($type,$key,$value='')

    {

        $cache_dir = APPPATH.'cache/html';

        if(!file_exists($cache_dir))

        {

            mkdir($cache_dir,666,true);

        }

        $cache = Cache::instance('default');

        //获取缓存

        if($type == 'get')

        {

            return $cache->get($key,'');

        }

        //设置缓存

        else if($type == 'set')

        {

            return $cache->set($key,$value,3600);

        }



    }



    /**

     * @return string

     * 获取当前网址

     */

    public static function get_current_url()

    {

        return 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    }



    /**

     * COOKIE 域名

     * @return string

     */

    public static function cookie_domain()

    {

        $host = $_SERVER['HTTP_HOST'];

        $sql = "select * from sline_weblist where webid=0";

        $arr = DB::query(Database::SELECT, $sql)->execute()->current();

        if (!empty($arr))

        {

            $host = str_replace($arr['webprefix'] . '.', '', parse_url($arr['weburl'], PHP_URL_HOST));

        }

        return $host;

    }





    /**

     * 判断当前浏览器是否是手机版本

     * @return bool

     */

    public static function is_mobile()

    {

        if(strpos($_SERVER['REQUEST_URI'],'/plugins')===0 ||strpos($_SERVER['REQUEST_URI'],'\plugins')===0)

        {

            return false;

        }

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        $mobile_agents = Array("240x320", "acer", "acoon", "acs-", "abacho", "ahong", "airness", "alcatel", "amoi", "android", "anywhereyougo.com", "applewebkit/525", "applewebkit/532", "asus", "audio", "au-mic", "avantogo", "becker", "benq", "bilbo", "bird", "blackberry", "blazer", "bleu", "cdm-", "compal", "coolpad", "danger", "dbtel", "dopod", "elaine", "eric", "etouch", "fly ", "fly_", "fly-", "go.web", "goodaccess", "gradiente", "grundig", "haier", "hedy", "hitachi", "htc", "huawei", "hutchison", "inno", "ipad", "ipaq", "ipod", "jbrowser", "kddi", "kgt", "kwc", "lenovo", "lg ", "lg2", "lg3", "lg4", "lg5", "lg7", "lg8", "lg9", "lg-", "lge-", "lge9", "longcos", "maemo", "mercator", "meridian", "micromax", "midp", "mini", "mitsu", "mmm", "mmp", "mobi", "mot-", "moto", "nec-", "netfront", "newgen", "nexian", "nf-browser", "nintendo", "nitro", "nokia", "nook", "novarra", "obigo", "palm", "panasonic", "pantech", "philips", "phone", "pg-", "playstation", "pocket", "pt-", "qc-", "qtek", "rover", "sagem", "sama", "samu", "sanyo", "samsung", "sch-", "scooter", "sec-", "sendo", "sgh-", "sharp", "siemens", "sie-", "softbank", "sony", "spice", "sprint", "spv", "symbian", "tablet", "talkabout", "tcl-", "teleca", "telit", "tianyu", "tim-", "toshiba", "tsm", "up.browser", "utec", "utstar", "verykool", "virgin", "vk-", "voda", "voxtel", "vx", "wap", "wellco", "wig browser", "wii", "windows ce", "wireless", "xda", "xde", "zte");

        $is_mobile = false;

        foreach($mobile_agents as $device)

        {

            if(stristr($user_agent, $device))

            {

                $is_mobile = true;

                break;

            }

        }

        return $is_mobile;

    }











}

