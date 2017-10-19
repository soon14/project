<?php



/**

 * 公共静态类模块

 * User: Netman

 * Date: 15-09-12

 * Time: 下午14:06

 */

class Common

{





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



        require(APPPATH . '/vendor/slineeditor/ueditor.php');



        $UEditor = new UEditor();

        $UEditor->basePath = $GLOBALS['cfg_cmspath'] . '/application/vendor/slineeditor/';

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



    /**

     * @param $filelist 要加载的js文件列表

     * @param bool $minjs 是否合并js文件

     * @param bool $default 是否从默认目录加载

     * @return string

     * @desc,加载js文件

     */

    public static function get_js($filelist, $minjs = true, $default = true)

    {

        $filearr = explode(',', $filelist);

        $jsArr = array();

        $out = $v = '';

        foreach ($filearr as $file)

        {

            if ($default == true)

            {

                $tfile = DOCROOT . "/public/js/" . $file;



                $file = '/public/js/' . $file;

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

                $jsUrl = URL::site('pub/js?file=' . $f);

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

    public static function get_css($filelist, $mincss = true, $default = true)

    {

        $filearr = explode(',', $filelist);

        $filelist = array();

        $out = '';

        foreach ($filearr as $file)

        {

            if ($default == true)

            {

                $tfile = DOCROOT . "/public/css/" . $file;

                $file = "/public/css/{$file}";

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

                $cssUrl = URL::site('pub/css?file=' . $f);

                $out = '<link rel="stylesheet" type="text/css" href="' . $cssUrl . '" />' . "\r\n";

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

        //@flock($this->open,3);

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

                    }

                    else

                    {

                        $restr .= self::$pinyin[$c][0];

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

        $out = $purifier->purify($param);

        return $out;

    }



    /**

     * 获取函数配置

     * @param mixed $name

     * @param mixed $value

     * @return mixed

     */

    static function C($name, $value = '')

    {//$_config('cfg_sms_username')

        static $_config = array();

        if (is_string($name))

        {

            if (empty($value))

            {

                $value = is_string($_config[$name]) ? trim($_config[$name]) : $_config[$name];

                return isset($_config[$name]) ? $value : null;

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

     * 配置文件初始化

     */

    static function init_config()

    {

        //文件配置

        $_init = array('database', 'convention');

        foreach ($_init as $v)

        {

            self::C((array)Kohana::$config->load($v));

        }

        //数据库配置

        $_init = Model_Sysconfig::config(Common::C('webid'));

        if (!empty($_init))

        {

            self::C($_init);

        }

        //平台判断

        $session = self::session('_platform');

        self::C('platform', $session ? $session : 'mobile');

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

        }

        else

        {

            $session->set($k, $v);

        }

        return $session;

    }



    /**

     * 动态口令

     * token_name 存入session

     */

    static function token($str = null)

    {

        //设置token

        $tokenName = self::C('token_name');

        $tokenOn = self::C('token_on');

        $session = Session::instance();

        if (is_null($str) && $tokenOn)

        {

            $time = md5(microtime(true));

            $session->set($tokenName, $time);

            return $time;

        }

        //获取token

        $bool = false;

        if ($tokenOn)

        {

            if ($session->get($tokenName) != $_POST[$tokenName])

            {

                $bool = true;

            }

            //删除session['__hash__']

            $session->delete($tokenName);

        }

        return $bool;

    }



    /**

     * 支付成功后，修改订单状态并跳转

     * @param $ordersn

     * @param string $payMethod

     * @param bool|false $line 是否是线下支付

     */

    static function pay_success($ordersn, $payMethod, $line = false)

    {

        //线上支付

        if (!$line)

        {

            //未支付，更新支付状态并赠送积分



            if (!Model_Member_Order::payed($ordersn))

            {

                $info['sign'] = '11';

                Model_Member_Order::change_order($ordersn, $payMethod);

                $detectresult = Model_Member_Order_listener::detect($ordersn);

                if ($detectresult !== true)

                    new Pay_Exception("订单({$ordersn})监听程序执行失败，{$detectresult}");

            }

            else

            {

                $info['sign'] = '24';

            }

        }

        else

        {

            //线下支付

            $info['sign'] = '12';

            Model_Member_Order::chang_order_by_line($ordersn, $payMethod);

            $info['ordersn'] = $ordersn;

            Common::pay_status($info);

        }

    }



    /**

     * 支付状态

     * @param $data

     */

    static function pay_status($data)

    {

        $data['sign'] = md5($data['sign']);

        $url = self::get_main_host() . '/payment/status';

        $html = "<form action='{$url}' style='display:none;' method='post' id='payment'>";

        foreach ($data as $name => $v)

        {

            $html .= "<input type='text' name='{$name}' value='{$v}'>";

        }

        $html .= '</form>';

        $html .= "<script>document.forms['payment'].submit();</script>";

        exit($html);

    }



    /**

     * 支付失败,重新跳转到支付页面

     * @param $ordersn

     */

    static function pay_error($ordersn)

    {

        header("Location:" . Common::C('base_url') . "?ordersn={$ordersn}");

        exit;

    }



    /**

     * 验证失败，跳转404

     */

    static function verify_error()

    {

        header("Location:" . Common::C('base_url') . "/404.html");

        exit;

    }



    /**

     * 支付金额与订单金额是否相等

     * @param $ordersn

     * @param $payMoney

     * @param string $exception

     * @return bool

     */

    static function total_fee_confirm($ordersn, $payMoney, $exception = '')

    {

        $bool = false;

        $info = Model_Member_Order::info($ordersn);

        if ($info['total'] == $payMoney)

        {

            $bool = true;

        }

        else

        {

            new Pay_Exception($exception . "(订:{$info['total']},付:{$payMoney})");

        }

        return $bool;

    }



    /**

     *

     * @param $model_id 模型id

     * @param $product_id

     * @return mixed|string

     */

    static function show_url($model_id, $product_id)

    {

        if (empty($model_id) || empty($product_id))

        {

            return '';

        }

        $model = new Model_Model();

        $model = $model->pinyin_by_id($model_id);

        //没有相关数据

        if (empty($model))

        {

            return '';

        }

        return str_replace(array('{module}', '{aid}'), array($model, $product_id), Common::C('show_url'));

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

     * 参数有效性验证

     * @param $param

     * @param null $token

     * @return bool|string

     */

    static function url_verify($param, $token = null)

    {

        $org = md5($param . var_export(Common::C('default'), true));

        if (is_null($token))

        {

            return $param . '&token=' . $org;

        }

        return $org == $token ? true : false;

    }



    /**

     * 邮件通知

     * @param $orderInfo 订单详情

     */

    static function send_email_message($orderInfo)

    {

        $email = Model_Member::email_by_id($orderInfo['memberid']);

        if (empty($email))

        {

            return;

        }

        $orderInfo['dingnum'] = $orderInfo['dingnum'] + $orderInfo['childnum'] + $orderInfo['oldnum'];

        //用户信息

        $sql = "select * from sline_member where mid={$orderInfo['memberid']}";

        $member = DB::query(Database::SELECT, $sql)->execute()->current();

        $orderInfo['nickname'] = !empty($member['nickname']) ? $member['nickname'] : $member['mobile'];

        //获取模型拼音

        $table = Model_Model::pinyin_by_id($orderInfo['typeid'], true);

        $sql = "select * from sline_email_msg where msgtype='{$table}_order_msg3'";

        $rs = DB::query(Database::SELECT, $sql)->execute()->current();

        if (!empty($rs))

        {

            if($rs['isopen'] == "1")

            {

                $content = self::sms_message_replace($rs['msg'], $orderInfo);

                self::order_maill($email, "订单支付成功", $content);

            }

        }



        //供应商

        if ( Common::C('cfg_supplier_email_open') == 1)

        {

            $content = Common::C('cfg_supplier_emailmsg');

            if(!empty($content))

            {

                $content = self::sms_message_replace($content, $orderInfo, false);



                //网站管理员(短信)

                $email = Common::C('cfg_webmaster_email');

                if (!empty($email))

                {

                    self::order_maill($email, "订单支付成功", $content);

                }



                if (Common::C('cfg_supplier_sendemail_open') == 1)

                {

                    $supplier = self::get_supplier($table, $orderInfo['productaid']);

                    if (!empty($supplier) && !empty($supplier['email']))

                    {

                        self::order_maill($supplier['email'], "订单支付成功", $content);

                    }

                }

            }

        }



    }



    /**

     * 短信通知

     * @param $orderInfo 订单详情

     */

    static function send_sms_message($orderInfo)

    {

        include(VENDORPATH . 'msg.class.php');


        $msg = new Msg(Common::C('cfg_sms_username'), Common::C('cfg_sms_password'));

        $orderInfo['dingnum'] = $orderInfo['dingnum'] + $orderInfo['childnum'] + $orderInfo['oldnum'];

        //获取模型拼音
        $table = Model_Model::pinyin_by_id($orderInfo['typeid'], true);

        $sql = "select * from sline_sms_msg where msgtype='{$table}_order_msg3'";

        $rs = DB::query(Database::SELECT, $sql)->execute()->current();

        //订单用户(短信)

        if (!empty($rs))

        {

            if($rs['isopen'] == "1")

            {

                $content = self::sms_message_replace($rs['msg'], $orderInfo);


                $re=$msg->sendMsg($orderInfo['linktel'], Common::C('cfg_webname'), $content);


            }

        }

        //供应商(短信)

        if ( Common::C('cfg_supplier_msg_open') == 1)

        {

            $content = Common::C('cfg_supplier_msg');

            if(!empty($content))

            {

                $content = self::sms_message_replace($content, $orderInfo, false);



                //网站管理员(短信)

                $phone = Common::C('cfg_webmaster_phone');

                if (!empty($phone))

                {

                    $msg->sendMsg($phone, Common::C('cfg_webname'), $content);

                }



                if (Common::C('cfg_supplier_send_open') == 1)

                {

                    $supplier = self::get_supplier($table, $orderInfo['productaid']);

                    if (!empty($supplier) && !empty($supplier['mobile']))

                    {

                        $msg->sendMsg($supplier['mobile'], Common::C('cfg_webname'), $content);

                    }

                }

            }

        }



    }



    /**

     * 通知信息模板替换

     * @param $content

     * @param $orderInfo

     * @return mixed

     */

    static function sms_message_replace($content, $orderInfo, $sendmember=true)

    {

        $content = str_replace('{#PRODUCTNAME#}', $orderInfo['productname'], $content);

        $content = str_replace('{#PRICE#}', $orderInfo['price'], $content);

        $content = str_replace('{#PHONE#}', $sendmember == true ? Common::C('cfg_phone') : $orderInfo['linktel'], $content);

        $content = str_replace('{#NUMBER#}', $orderInfo['dingnum'], $content);

        $content = str_replace('{#TOTALPRICE#}', $orderInfo['total'], $content);

        $content = str_replace('{#MEMBERNAME#}', $orderInfo['nickname'], $content);

        $content = str_replace('{#WEBNAME#}', Common::C('cfg_webname'), $content);

        $content = str_replace('{#ORDERSN#}', $orderInfo['ordersn'], $content);

        $content = str_replace('{#ETICKETNO#}', $orderInfo['eticketno'], $content);
        //==========fengjishu 07.30 s
        $dlink   = self::short_link($orderInfo['eticketno']);
        $content .= "电子票二维码：".$dlink;
        //==========fengjishu  07.30 e

        return $content;

    }
    /***
     *
     * 生成短连接  fengjishu 07.30
     */
    static function short_link($eticketno)

    {
        $eticketno = trim($eticketno);
        $url   ="http://api.t.sina.com.cn/short_url/shorten.json?source=3213676317&url_long=";
        $url  .= "http://www.aitto.net/res/vendor/qrcode/make.php?param=$eticketno";
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $strRes=curl_exec($ch);
        curl_close($ch);
        $arrResponse=json_decode($strRes,true);
        return $arrResponse[0]['url_short'];
        //var_dump($arrResponse);
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



        $cfg_mail_smtp = (Common::C('cfg_mail_smtp') == '' ? "smtp.163.com" : Common::C('cfg_mail_smtp'));

        $cfg_mail_port = (Common::C('cfg_mail_port') == '' ? 25 : Common::C('cfg_mail_port'));

        if (Common::C('cfg_mail_user') == '')

        {

            $cfg_mail_user = "Stourweb@163.com";

            $cfg_mail_pass = "kelly12345";

        }

        else

        {

            $cfg_mail_user = Common::C('cfg_mail_user');

            $cfg_mail_pass = Common::C('cfg_mail_pass');

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

        }

        else

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

        $table = $table == "tongyong" ? "model_archive" : $table;

        $sql = "select s.* from sline_{$table} as t,sline_supplier as s where t.aid={$productAid} and t.supplierlist=s.id";

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

}

