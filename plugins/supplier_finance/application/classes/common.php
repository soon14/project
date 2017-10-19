<?php

/**
 * 公共静态类模块
 * User: Netman
 * Date: 15-09-12
 * Time: 下午14:06
 */
//引入公用函数库
require TOOLS_COMMON . 'functions.php';

class Common extends Functions
{


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
     * 获取网站http网址
     * */
    public static function get_weburl($webid = 0)
    {
        return $GLOBALS['cfg_basehost'];
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
                    if (filetype($dir . "/" . $object) == "dir") self::rrmdir($dir . "/" . $object);
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
        //@flock($fp,3);
        $result = fwrite($fp, $content);
        fclose($fp);
        return $result;
    }
    /*
     * 获取编号
     * */
    //获取编号,共6位,不足6位前面被0
    public static function get_series($id, $prefix)
    {
        $ar = array(
            '01' => 'A',
            '02' => 'B',
            '05' => 'C',
            '03' => 'D',
            '08' => 'E',
            '13' => 'G',
            '14' => 'H',
            '15' => 'I',
            '16' => 'J',
            '17' => 'K',
            '18' => 'L',
            '19' => 'M',
            '20' => 'N',
            '21' => 'O',
            '22' => 'P',
            '23' => 'Q',
            '24' => 'R',
            '25' => 'S',
            '26' => 'T'
        );
        $prefix = $ar[$prefix];
        $len = strlen($id);
        $needlen = 4 - $len;
        if ($needlen == 3) $s = '000';
        else if ($needlen == 2) $s = '00';
        else if ($needlen == 1) $s = '0';

        $out = $prefix . $s . "{$id}";
        return $out;

    }

    //检查一个串是否存在在某个串中
    public static function check_instr($str, $substr)
    {

        $tmparray = explode($substr, $str);
        if (count($tmparray) > 1)
        {
            return true;
        } else
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
            if ($postfields != '') curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);
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

        if (count(self::$pinyin) == 0)
        {
            $fp = fopen(APPPATH . '/vendor/pinyin/pinyin.dat', 'r');
            while (!feof($fp))
            {
                $line = trim(fgets($fp));
                self::$pinyin[$line[0] . $line[1]] = substr($line, 3, strlen($line) - 3);
            }
            fclose($fp);
        }
        for ($i = 0; $i < $slen; $i++)
        {
            if (ord($str[$i]) > 0x80)
            {
                $c = $str[$i] . $str[$i + 1];
                $i++;
                if (isset(self::$pinyin[$c]))
                {
                    if ($ishead == 0)
                    {
                        $restr .= self::$pinyin[$c];
                    } else
                    {
                        $restr .= self::$pinyin[$c][0];
                    }
                } else
                {
                    $restr .= "_";
                }
            } else if (preg_match("/[a-z0-9]/i", $str[$i]))
            {
                $restr .= $str[$i];
            } else
            {
                $restr .= "_";
            }
        }
        if ($isclose == 0)
        {
            unset(self::$pinyin);
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
            } else
            {
                return '';
            }
        } else
        {
            return $keyc . str_replace('=', '', base64_encode($result));
        }

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
    public static function get_timerange($type)
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



    /**
     * 获取函数配置
     * @param mixed $name
     * @param mixed $value
     * @return mixed
     */
    public static function C($name, $value = '')
    {
        static $_config = array();
        if (is_string($name))
        {
            if (empty($value))
            {
                return isset($_config[$name]) ? $_config[$name] : null;
            }
            else
            {
                $_config[$name] = $value;
            }
        }
        if (is_array($name))
        {
            $_config = array_merge($_config, $name);
        }
    }



    /**
     * SEESION 管理
     * @param $k
     * @param string $v
     * @return $this|mixed|Session
     */
    public static function session($k, $v = '')
    {
        $session = Session::instance();
        if (empty($v))
        {
            $session = is_null($v) ? $session->delete($k) : $session->get($k);
        } else
        {
            $session->set($k, $v);
        }
        return $session;
    }


    /**
     * 获取IP地址
     * @return bool
     */
    static function get_ip()
    {
        $ip = false;
        if (!empty($_SERVER["HTTP_CLIENT_IP"]))
        {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip)
            {
                array_unshift($ips, $ip);
                $ip = FALSE;
            }
            for ($i = 0; $i < count($ips); $i++)
            {
                if (!preg_match("^(10|172\.16|192\.168)\.", $ips[$i]))
                {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

    /**
     * 产品编号 共6位,不足6位前面被0
     * @param $id
     * @param $prefixId
     * @return string
     */
    static function product_number($id, $prefixId)
    {
        $prefixId = str_pad($prefixId, 2, "0", STR_PAD_LEFT);
        $arr = array(
            'A' => '01',
            'B' => '02',
            'C' => '05',
            'D' => '03',
            'E' => '08',
            'G' => '13',
            'H' => '14',
            'I' => '15',
            'J' => '16',
            'K' => '17',
            'L' => '18',
            'M' => '19',
            'N' => '20',
            'O' => '21',
            'P' => '22',
            'Q' => '23',
            'R' => '24',
            'S' => '25',
            'T' => '26'
        );
        return array_search($prefixId, $arr) . str_pad($id, 5, "0", STR_PAD_LEFT);
    }



    /**
     * 发送邮件
     * @param $maillto 收件人
     * @param $title   主题
     * @param $content 内容
     * @return bool
     */
    static function order_maill($maillto, $title, $content)
    {
        //如果没有自定义SMTP配置
        if (Common::C('cfg_mail_smtp') == '')
        {
            $cfg_mail_smtp = "smtp.163.com";
        }
        if (Common::C('cfg_mail_port') == '')
        {
            $cfg_mail_port = 25;
        }
        if (Common::C('cfg_mail_user') == '')
        {
            $cfg_mail_user = "Stourweb@163.com";
            $cfg_mail_pass = "kelly12345";
        }
        $smtpserver = $cfg_mail_smtp;//SMTP服务器
        $smtpserverport = $cfg_mail_port;//SMTP服务器端口
        $smtpusermail = $cfg_mail_user; //SMTP服务器的用户邮箱
        $smtpemailto = $maillto;//发送给谁
        $smtpuser = $cfg_mail_user;//SMTP服务器的用户帐号
        $smtppass = $cfg_mail_pass;//SMTP服务器的用户密码
        $mailtype = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件
        if ($smtpserverport == 25)
        {
            include_once(VENDORPATH . '/email.class.php');
            $mailsubject = iconv('UTF-8', 'GB2312//IGNORE', $title);//邮件主题
            $mailbody = iconv('UTF-8', 'GB2312//IGNORE', $content);//邮件内容
            $smtp = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
            $smtp->debug = true;//是否显示发送的调试信息
            $status = $smtp->sendmail($smtpemailto, $smtpuser, $mailsubject, $mailbody, $mailtype);
        } else
        {
            include_once(VENDORPATH . '/mysendmail.class.php');
            $mail = new MySendMail();
            $mail->setServer($smtpserver, $smtpuser, $smtppass, 465, true); //设置smtp服务器，到服务器的SSL连接
            $mail->setFrom($smtpuser); //设置发件人
            $mail->setReceiver($smtpemailto); //设置收件人，多个收件人，调用多次
            $mail->setMail($title, $content); //设置邮件主题、内容
            $status = $mail->sendMail(); //发送
        }
        return $status;
    }

    /**
     * 查询供应商信息
     * @param $table
     * @param $productAid
     * @return mixed
     */
    static function get_supplier($table, $productAid)
    {
        $sql = "select t.* from sline_{$table} as t,supplier as s where aid={$productAid} and t.supplierlist=s.id";
        return DB::query(Database::SELECT, $sql)->execute()->current();
    }

    /**
     * 主站域名
     * @return string
     */
    static function get_main_host()
    {
        $host = '';
        $sql = "select weburl from sline_weblist where webid=0";
        $arr = DB::query(Database::SELECT, $sql)->execute()->current();
        if (!empty($arr))
        {
            $host = $arr['weburl'];
        }
        return $host;
    }

    /**
     * COOKIE 域名
     * @return string
     */
    static function cookie_domain()
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

    /*
    * 判断是否是手机端
    * **/
    public static function is_mobile_device()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
        $is_mobile = false;
        foreach ($mobile_agents as $device)
        {
            if (stristr($user_agent, $device))
            {
                $is_mobile = true;
                break;
            }
        }
        return $is_mobile;
    }

    /**
     * @param $field
     * @param $varname
     * @param int $webid
     * @return mixed
     * 获取配置值.
     */
    public static function get_sys_para($varname,$webid=0)
    {
        $sql = "SELECT value FROM `sline_sysconfig` WHERE varname='$varname' AND webid=$webid";
        $result=DB::query(1,$sql)->execute()->current();
        return $result['value'];
    }

}
