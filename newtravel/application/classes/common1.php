<?php



/**

 * 公共静态类模块

 * User: Netman

 * Date: 14-4-1

 * Time: 下午1:48

 */

class Common

{

    public static $pinyin = array();

    public static $extend_table_arr = array(

        1 => 'sline_line_extend_field',

        2 => 'sline_hotel_extend_field',

        3 => 'sline_car_extend_field',

        4 => 'sline_article_extend_field',

        5 => 'sline_spot_extend_field',

        6 => 'sline_photo_extend_field',

        8 => 'sline_visa_extend_field',

        13 => 'sline_tuan_extend_field'

    );



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

    // 对内容的处理  小封 10.13

    public  static function  addxiegang($v){

        require(DOCROOT . '/public/vendor/slineeditor/ueditor.php');

        $UEditor = new UEditor();

        $UEditor->basePath = $GLOBALS['cfg_cmspath'] . 'public/vendor/slineeditor/';

        $arr =  $UEditor->add($v);

        return  $arr;

    }

    public static function getEditor($fname, $fvalue, $nwidth = "700", $nheight = "350", $etype = "Sline", $ptype = '', $gtype = "print", $jsEditor = false)

    {

        $nwidth = empty($nwidth) ? "900" : $nwidth;

        require(DOCROOT . '/public/vendor/slineeditor/ueditor.php');

        $UEditor = new UEditor();

        $UEditor->basePath = $GLOBALS['cfg_cmspath'] . 'public/vendor/slineeditor/';

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



    //根据用，号隔开的字符串，生成script标签

    public static function getScript($filelist, $default = true)

    {

        $filearr = explode(',', $filelist);

        //$theme = Kohana::$config->load('webinfo','theme');

        $out = $v = '';

        foreach ($filearr as $file)

        {

            if (strpos($file, 'jquery.uploadify.min.js'))

            {

                $v = "?t=" . mt_rand(0, 9999999);

            }

            else

            {

                $v = '';

            }

            if ($default == true)

            {

                $tfile = DOCROOT . "/public/js/" . $file;

                $file = '/public/js/' . $file;

            }

            else

            {

                $tfile = DOCROOT . $file;

            }

            // $tfile = $default ? DOCROOT."/public/js/".$file : DOCROOT.$file;

            if (file_exists($tfile))

            {

                $out .= HTML::script($file . $v);

            }

        }

        return $out;

    }



    //根据用，号隔开的字符串，生成style标签

    public static function getCss($filelist, $folder = 'css')

    {

        $filearr = explode(',', $filelist);

        $out = '';

        //$theme = Kohana::$config->load('webinfo','theme');

        foreach ($filearr as $file)

        {

            $tfile = DOCROOT . "/public/{$folder}/" . $file;

            $file = "/public/{$folder}/{$file}";

            if (file_exists($tfile))

            {

                $out .= HTML::style($file);

            }

        }

        return $out;

    }



    /*

     * 获取配置文件值

     * */

    public static function getConfig($group)

    {

        return Kohana::$config->load($group);

    }



    /*

     * 获取子站点信息

     *@param int webid

     *@return array

     *

     */

    public static function getWebInfo($webid)

    {

        $row = ORM::factory('destinations')

            ->where('id', '=', $webid)

            ->find()->as_array();

        return $row;

    }



    /*

     * 获取子站列表

     * return array

     * */

    public static function getWebList()

    {

        $arr = DB::select_array(array('id', 'kindname', 'weburl', 'webroot', 'webprefix'))->from('destinations')->where("iswebsite=1 and isopen=1")->order_by("displayorder", 'asc')->execute()->as_array();

        foreach ($arr as $key => $value)

        {

            $arr[$key]['webid'] = $value['id'];

            $arr[$key]['webname'] = $value['kindname'];

        }

        /* $main=array(

             array(

             'webid' => 0 ,

             'webname'=>'主站'

             )

         );*/

        // $ar = array_merge($main,$arr);

        return $arr;

    }



    /*

     * ico图标获取

     * @parameter string

     * @return img string

     * */

    public static function getIco($type, $helpid = 0)

    {

        switch ($type)

        {

            case 'help':

                $out = "<img class='fl' style='cursor:pointer' src='" . $GLOBALS['cfg_public_url'] . "images/help-ico.png' onclick='ST.Util.helpBox(this," . $helpid . ",event)' />";

                break;

            case 'edit':

                $out = "<img class='' src='" . $GLOBALS['cfg_public_url'] . "images/xiugai-ico.gif' />";

                break;

            case 'del':

                $out = "<img class='' src='" . $GLOBALS['cfg_public_url'] . "images/del-ico.gif' />";

                break;

            case 'hide':

                $out = "<img class='' src='" . $GLOBALS['cfg_public_url'] . "images/close-s.png' data-show='0' />";

                break;

            case 'show':

                $out = "<img class='' src='" . $GLOBALS['cfg_public_url'] . "images/show-ico.png' data-show='1' />";

                break;

            case 'preview':

                $out = "<img class='' src='" . $GLOBALS['cfg_public_url'] . "images/preview.png' data-show='1' />";

                break;

            case 'order':

                $out = "<img class='' src='" . $GLOBALS['cfg_public_url'] . "images/order.png' data-show='1' />";

                break;

            case 'order_unview':

                $out = "<img class='' src='" . $GLOBALS['cfg_public_url'] . "images/order_unview.png' data-show='1' />";

                break;

        }

        return $out;

    }



    /*

     * 获取aid

     * @param string table

     * @param int webid

     * @return lastaid

     * */

    public static function getLastAid($tablename, $webid = 0)

    {

        $aid = 1;//初始值

        $sql = "select max(aid) as aid from {$tablename} where webid=$webid order by id desc";

        $row = DB::query(1, $sql)->execute()->as_array();

        if (is_array($row))

        {

            $aid = $row[0]['aid'] + 1;

        }

        return $aid;

    }



    /*

	删除一个图片及它的所有缩略图和原图

	*/

    public static function deleteRelativeImage($imgpath, $tableName, $id)

    {

        if (empty($imgpath))

            return;

        switch ($tableName)

        {

            case 'destination':

                $tableName = 'sline_destinations';

                $sql = "select piclist,litpic from $tableName WHERE id=$id";

                $request = DB::query(1, $sql)->execute()->as_array();

                $paths = $request[0]['piclist'];

                $listpic = $request[0]['litpic'];

                $paths = str_replace($imgpath, '', $paths);

                $litpic = str_replace($imgpath, '', $listpic);

                $sql = "UPDATE  $tableName set piclist='$paths',litpic='$litpic'  WHERE id=$id";

                DB::query(Database::UPDATE, $sql)->execute();

                break;

            default:

                unlink(BASEPATH . $imgpath);

                $dir_arr = array('lit240', 'allimg', 'lit160', 'litimg');

                $dir_rep = '';

                foreach ($dir_arr as $k => $v)

                {

                    if (strpos($v, $imgpath) !== false)

                    {

                        $dir_rep = $v;

                        unset($dir_arr[$k]);

                        break;

                    }

                }

                if (!$dir_rep)

                {

                    return;

                }

                foreach ($dir_arr as $k => $v)

                {

                    $del_path = str_replace($dir_rep, $v, $imgpath);

                    unlink(BASEPATH . $del_path);

                }

        }



    }



    /*

       删除内容里的图片

    */

    public static function deleteContentImage($content, $folder = 'uploads')

    {

        $match = array();

        preg_match_all('/<img.+src=[\"\']?(.+\.(jpg|gif|bmp|bnp|png))[\"\']?.+\/?>/iU', $content, $match);

        $img_arr = $match[1];

        foreach ($img_arr as $k => $v)

        {

            $pos = strpos($v, $folder);

            if ($pos === false)

                continue;

            $img_relative_path = substr($v, $pos);

            $img_full_path = BASEPATH . '/' . $img_relative_path;

            unlink($img_full_path);

        }

    }



    /*

     * 清空数组里的空值

     * */

    public static function removeEmpty($arr)

    {

        $newarr = array_diff($arr, array(null, 'null', '', ' '));

        return $newarr;

    }



    /*

     * 根据,分隔的属性字符串获取相应的属性数组(修改页面用)

     */

    public static function getSelectedAttr($typeid, $attr_str)

    {

        $productattr_arr = array(1 => 'line_attr', 2 => 'hotel_attr', 3 => 'car_attr', 4 => 'article_attr', 5 => 'spot_attr', 6 => 'photo_attr', 13 => 'tuan_attr',102=>'specialty_attr');

        $attrtable = $typeid < 14||$typeid==102 ? $productattr_arr[$typeid] : 'model_attr';

        $attrid_arr = explode(',', $attr_str);

        $attr_arr = array();

        foreach ($attrid_arr as $k => $v)

        {

            if ($typeid < 14||$typeid==102)

            {

                $attr = ORM::factory($attrtable)->where("pid!=0 and id='$v'")->find();

            }

            else

            {

                $attr = ORM::factory($attrtable)->where("pid!=0 and id='$v' and typeid='$typeid'")->find();

            }

            if ($attr->id)

            {

                $attr_arr[] = $attr->as_array();

            }

        }

        return $attr_arr;

    }



    /*

     * 根据,分隔的字符串获取图标数组(修改页面用)

     * */

    public static function getSelectedIcon($iconlist)

    {

        $iconid_arr = explode(',', $iconlist);

        $iconarr = array();

        foreach ($iconid_arr as $k => $v)

        {

            $icon = ORM::factory('icon', $v);

            if ($icon->id)

                $iconarr[] = $icon->as_array();

        }

        return $iconarr;

    }



    /*

     * 根据逗号分隔的字符串供应商数组(修改页面用)

     * */

    public static function getSelectedSupplier($supplierlist)

    {

        $supplier_arr = explode(',', $supplierlist);

        $arr = array();

        foreach ($supplier_arr as $k => $v)

        {

            $row = ORM::factory('supplier', $v);

            if ($row->id)

                $arr[] = $row->as_array();

        }

        return $arr;

    }



    /*

     * 根据,分隔字符串获取上传的图片数组(修改页面用)

     * */

    public static function getUploadPicture($piclist)

    {

        $out = array();

        $arr = self::removeEmpty(explode(',', $piclist));

        foreach ($arr as $row)

        {

            $picinfo = explode('||', $row);

            $out[] = array('litpic' => $picinfo[0], 'desc' => isset($picinfo[1]) ? $picinfo[1] : '');

        }

        return $out;

    }



    /*

     * 获取默认图片

     * */

    public static function getDefaultImage()

    {

        return !empty($GLOBALS['cfg_df_img']) ? $GLOBALS['cfg_df_img'] : $GLOBALS['cfg_public_url'] . 'images/nopic.jpg';

    }



    /*

     * 生成缩略图

     *

     * */

    public static function thumb($srcfile, $savepath, $w, $h)

    {

        Image::factory($srcfile)

            ->resize($w, $h, Image::WIDTH)

            ->save($savepath);

        return $savepath;

    }



    /*

     * 时间转换函数

     * */

    public static function myDate($format, $timest)

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

    public static function getWebUrl($webid = 0)

    {

        return $GLOBALS['cfg_basehost'];

    }



    /*

    * 获取文件扩展名

    * */

    public static function getExtension($file)

    {

        return end(explode('.', $file));

    }



    /*

     * 级联删除文件夹

     */

    public static function rrmdir($dir)

    {

        $result = array('success' => true, 'errormsg' => "");

        if (is_dir($dir))

        {

            $dh = opendir($dir);

            if (!$dh)

            {

                $result['success'] = false;

                $result['errormsg'] = "打开目录{$dir}失败";

                return $result;

            }



            while ($object = readdir($dh))

            {

                if ($object != "." && $object != "..")

                {

                    $fullname = $dir . "/" . $object;

                    if (is_dir($fullname))

                    {

                        $result = self::rrmdir($fullname);

                        if (!$result['success'])

                            break;

                    }

                    else

                    {

                        if (!unlink($fullname))

                        {

                            $result['success'] = false;

                            $result['errormsg'] = "删除文件{$fullname}失败";

                            break;

                        }



                    }

                }

            }



            closedir($dh);

            if (!rmdir($dir))

            {

                $result['success'] = false;

                $result['errormsg'] = "删除目录{$dir}失败";

            }



        }

        return $result;

    }



    /*

     * 调试信息

     * */

    public static function debug($log)

    {

        ChromePhp::log($log);

    }



    /*

     * 保存文件

     * */

    public static function saveToFile($file, $content)

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

    public static function getSeries($id, $prefix)

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

        if ($needlen == 3)

            $s = '000';

        else if ($needlen == 2)

            $s = '00';

        else if ($needlen == 1)

            $s = '0';

        $out = $prefix . $s . "{$id}";

        return $out;

    }



    //检查一个串是否存在在某个串中

    public static function checkStr($str, $substr)

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

     * 后台获取搜索词

     * */

    public static function getKeyword($keyword)

    {

        $keyword = str_replace(' ', '', trim($keyword));

        $num = substr($keyword, 1, strlen($keyword));

        $out = '';

        if (intval($num))

        {

            $out = intval($num);

        }

        else

        {

            $out = $keyword;

        }

        /* $flag = intval($keyword);



         if($flag)

         {

             $num = substr($keyword,1,strlen($keyword));



             $keyword = intval($num);

         }*/

        return $out;

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



    public static function objectToArray($array)

    {

        if (is_object($array))

        {

            $array = (array)$array;

        }

        if (is_array($array))

        {

            foreach ($array as $key => $value)

            {

                $array[$key] = self::objectToArray($value);

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

    public static function getPinYin($str, $ishead = 0, $isclose = 1)

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

            $fp = fopen(PUBLICPATH . '/vendor/pinyin/pinyin.dat', 'r');

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

     * 获取栏目详细页显示列表

     * */

    public static function getUserTemplteList($pagename)

    {

        $templet_dir = array(

            '0' => 'uploadtemplets/',

            '5' => 'usertpl/'

        );

        $sql = "select b.path,b.version from sline_page a left join sline_page_config b on a.id=b.pageid where a.pagename='$pagename'";

        $arr = DB::query(1, $sql)->execute()->as_array();

        $configinfo = ORM::factory('sysconfig')->getConfig(0);

        $version = $configinfo['cfg_pc_version'];

        foreach ($arr as $key => $v)

        {

            $v['version'] = is_null($v['version']) ? 0 : $v['version'];

            //只调取相应版本模板

            if (!empty($v['path']) && $version == $v['version'])

            {

                $v['templetname'] = $v['path'];

                $v['path'] = $templet_dir[$version] . $v['path'];

                $arr[$key] = $v;

            }

            else

            {

                array_pop($arr);

            }

        }

        return $arr;

    }



    /*

     * 判断当前是否有操作权限

     * */

    public static function getUserRight($key, $action)

    {

        $session = Session::instance();

        $roleid = $session->get('roleid');

        if ($roleid != 1)//非系统管理员

        {

            $sql = "select {$action} from sline_role_module where moduleid='$key' and roleid='$roleid'";

            $arr = DB::query(1, $sql)->execute()->as_array();

            if (empty($arr[0][$action]))

            {

                $msg = __('norightmsg');

                exit($msg);

            }

        }

    }



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



    //验证是否登陆

    public static function checkLogin($secretkey)

    {

        $info = explode('||', self::authcode($secretkey));

        if (isset($info[0]) && $info[1])

        {

            $uname = Common::remove_xss($info[0]);

            $upwd = Common::remove_xss($info[1]);

            $model = ORM::factory('admin')->where('username', '=', $uname)

                ->and_where('password', '=', $upwd)

                ->find();

            if (isset($model->id))

                return $model->as_array();

            else

                return 0;

        }

    }



    //操作日志记录

    public static function addLog($controller, $action, $second_action)

    {

        $session = Session::instance();

        $session_username = $session->get('username');

        $uid = $session->get('userid');

        if (empty($uid))

            return;

        $time = date('Y-m-d H:i:s');

        $info = explode('||', self::authcode($session_username));

        $second_action = !empty($second_action) ? '->' . $second_action : '';

        $msg = "用户{$info[0]}在{$time}执行$controller->{$action}{$second_action}操作";

        $logData = array(

            'logtime' => time(),

            'uid' => $uid,

            'username' => $info[0],

            'loginfo' => $msg,

            'logip' => $_SERVER['REMOTE_ADDR']

        );

        foreach ($logData as $key => $value)

        {

            $keys .= $key . ',';

            $values .= "'" . $value . "',";

        }

        $keys = trim($keys, ',');

        $values = trim($values, ',');

        $sql = "insert into sline_user_log($keys) values($values)";

        DB::query(1, $sql)->execute();

    }



    //表字段操作(添加)

    public static function addField($table, $fieldname, $fieldtype, $isunique, $comment)

    {

        $fieldname = 'e_' . $fieldname;

        $sql = "ALTER TABLE `{$table}` ADD COLUMN `{$fieldname}` {$fieldtype} NULL DEFAULT NULL COMMENT '$comment'";

        $sql .= $isunique == 1 ? ",ADD unique('{$fieldname}');" : '';

        return DB::query(1, $sql)->execute();

    }



    /*

     * 表字段操作(删除)

     * */

    public static function delField($table, $fieldname)

    {

        $sql = "ALTER TABLE `{$table}` DROP COLUMN `{$fieldname}`";

        DB::query(1, $sql)->execute();

    }



    /*

     * 获取扩展表

     * */

    public static function getExtendTable($typeid)

    {

        $row = ORM::factory('model', $typeid)->as_array();

        return 'sline_' . $row['addtable'];

    }



    /*

     * 根据typeid获取扩展字段信息

     * */

    public static function getExtendInfo($typeid, $productid)

    {

        //$table = self::$extend_table_arr[$typeid];

        $table = self::getExtendTable($typeid);

        $sql = "select * from {$table} where productid='$productid'";

        $arr = DB::query(1, $sql)->execute()->as_array();

        return $arr[0];

    }



    /*

     * 生成扩展字段填写form

     * */

    public static function genExtendData($typeid, $extendinfo = array())

    {

        $sysconfig = ORM::factory('sysconfig')->getConfig(0);

        $arr = ORM::factory('extend_field')->where("typeid='$typeid' and isopen=1")->get_all();

        $out = '';

        foreach ($arr as $row)

        {

            $default = !empty($extendinfo[$row['fieldname']]) ? $extendinfo[$row['fieldname']] : '';

            if ($row['fieldtype'] == 'editor')

            {

                $head = '<div class="add-class">';

                $head .= '<dl>

                            <dt>' . $row['description'] . '：</dt>

                            <dd>

                                <div>' . self::getEditor($row['fieldname'], $default, $sysconfig['cfg_admin_htmleditor_width'], 200, 'Sline', '0', '0') . '</div>

                            </dd>

                        </dl>';

                $head .= '</div>';

                $out .= $head;

            }

            else if ($row['fieldtype'] == 'text')

            {

                $head = '<div class="add-class">';

                $head .= '<dl>

                            <dt>' . $row['description'] . '：</dt>

                            <dd>

                                <input type="text" name="' . $row['fieldname'] . '"  value="' . $default . '" class="set-text-xh text_300 mt-2">

                            </dd>

                        </dl>';

                $head .= '</div>';

                $out .= $head;

            }

        }

        echo $out;

    }



    public static function getExtendContent($typeid, $extendinfo)

    {

        $content_table = array(

            1 => 'line_content',

            2 => 'hotel_content',

            3 => 'car_content',

            4 => '',

            5 => 'spot_content',

            6 => '',

            8 => 'visa_content',

            13 => 'tuan_content',

            102 => 'farm_content'

        );

        $conTable = $content_table[$typeid];

        $isTongyong = false;

        if (empty($conTable))

        {

            $isTongyong = true;

            $conTable = 'model_content';

        }

        $sql = '';

        if ($isTongyong)

        {

            $sql = "select columnname from sline_{$conTable} where isopen=1 and typeid='$typeid' and columnname like 'e_%'";

        }

        else

        {

            $sql = "select columnname from sline_{$conTable} where isopen=1 and columnname like 'e_%'";

        }

        $contentFields = DB::query(Database::SELECT, $sql)->execute()->as_array();

        $fields = array();

        foreach ($contentFields as $v)

        {

            $fields[] = $v['columnname'];

        }

        $arr = ORM::factory('extend_field')->where("typeid='$typeid' and isopen=1")->get_all();

        $contentHtml = '';

        $extendHtml = '';

        $sysconfig = ORM::factory('sysconfig')->getConfig(0);

        foreach ($arr as $row)

        {

            $default = !empty($extendinfo[$row['fieldname']]) ? $extendinfo[$row['fieldname']] : '';

            if (in_array($row['fieldname'], $fields))

            {

                $contentHtml .= '<div id="content_' . $row['fieldname'] . '"  data-id="' . $row['fieldname'] . '" class="product-add-div content-hide"><div class="add-class">';

                $contentHtml .= '<dl>

                            <dt>' . $row['description'] . '：</dt>

                            <dd>

                                <div>' . self::getEditor($row['fieldname'], $default, $sysconfig['cfg_admin_htmleditor_width'], 300, 'Sline', '0', '0') . '</div>

                            </dd>

                        </dl>';

                $contentHtml .= '</div></div>';

                continue;

            }

            if ($row['fieldtype'] == 'editor')

            {

                $head = '<div class="add-class">';

                $head .= '<dl>

                            <dt>' . $row['description'] . '：</dt>

                            <dd>

                                <div>' . self::getEditor($row['fieldname'], $default, $sysconfig['cfg_admin_htmleditor_width'], 300, 'Sline', '0', '0') . '</div>

                            </dd>

                        </dl>';

                $head .= '</div>';

                $extendHtml .= $head;

            }

            else if ($row['fieldtype'] == 'text')

            {

                $head = '<div class="add-class">';

                $head .= '<dl>

                            <dt>' . $row['description'] . '：</dt>

                            <dd>

                                <input type="text" name="' . $row['fieldname'] . '"  value="' . $default . '" class="set-text-xh text_300 mt-2">

                            </dd>

                        </dl>';

                $head .= '</div>';

                $extendHtml .= $head;

            }

        }

        return array('contentHtml' => $contentHtml, 'extendHtml' => $extendHtml);

    }



    /*

      //扩展字段信息保存

     * */

    public static function saveExtendData($typeid, $productid, $info)

    {

        //$table = self::$extend_table_arr[$typeid];

        $table = self::getExtendTable($typeid);

        $extendinfo = array();

        $columns = array('productid');

        $values = array($productid);

        foreach ($info as $k => $v)

        {

            if (preg_match('/^e_/', $k)) //找出所有扩展字段设置

            {

                $extendinfo[$k] = $v;

                $columns[] = $k;

                $values[] = $v;

            }

        }

        if (count($extendinfo) > 0)

        {

            $sql = "select count(*) as num from $table where productid='$productid'";

            $row = DB::query(1, $sql)->execute()->as_array();

            //optable

            $optable = str_replace('sline_', '', $table);

            if ($row[0]['num'] > 0)//已存在则更新

            {

                DB::update($optable)->set($extendinfo)->where("productid='$productid'")->execute();

            }

            else

            {

                DB::insert($optable)->columns($columns)->values($values)->execute();

            }

        }

    }



    /*

     * 获取产品主url

     * */

    public static function getBaseUrl($webid)

    {

        $url = $GLOBALS['cfg_basehost'];

        if ($webid != 0)

        {

            $sql = "select weburl from sline_destinations where id='$webid'";

            $row = DB::query(1, $sql)->execute();

            return $row[0]['weburl'];

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

    public function getTimeRange($type)

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

        $out = array(

            $starttime,

            $endtime

        );

        return $out;

    }



    public static function xml_to_array($xml)

    {

        $array = (array)(simplexml_load_string($xml));

        foreach ($array as $key => $item)

        {

            $array[$key] = self::struct_to_array((array)$item);

        }

        return $array;

    }



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



    public static function getExtendContentIndex($table)

    {

        $sql = "show columns from $table where field like 'e_content_%'";

        $fieldArr = DB::query(Database::SELECT, $sql)->execute()->as_array();

        if (empty($fieldArr))

            return 1;

        $numbers = array();

        $tempNum = 0;

        foreach ($fieldArr as $row)

        {

            $num = str_replace('e_content_', '', $row['Field']);

            $num = (int)$num;

            $num = empty($num) ? 0 : $num;

            if ($num > $tempNum)

                $tempNum = $num;

        }

        return $tempNum + 1;

    }



    public static function paySuccess($ordersn, $paySource = '后台', $params = null)

    {

        $orderModel = ORM::factory('member_order')->where('ordersn', '=', $ordersn)->find();

        if (!$orderModel->loaded())

            return false;

        $arr = $orderModel->as_array();

        if (empty($arr))

            return false;

        //if($arr['status']==2)

        //    return true;

        $configModel = new Model_Sysconfig();

        $configs = $configModel->getConfig(0);

        if (substr($ordersn, 0, 2) == 'dz')

        {

            $ordertype = 'dz';

            $dzModel = ORM::factory('dzorder')->where('ordersn', '=', $ordersn)->find();

            $dzModel->status = 2;

            $dzModel->paysource = $paySource;

            $dzModel->save();

        }

        else

        {

            $ordertype = 'sys';

            //  $updatesql="update #@__member_order set ispay=1,status=2,paysource='$paySource' where ordersn='$ordersn'"; //付款标志置为1,交易成功

            $orderModel->ispay = 1;

            $orderModel->status = 2;

            $orderModel->paysource = $paySource;

            $orderModel->save();

        }

        if ($ordertype != 'dz')

        {

            $msgInfo = self::getDefineMsgInfo($arr['typeid'], 3);

            $memberModel = ORM::factory('member', $arr['memberid']);

            $memberInfo = $memberModel->as_array();

            $nickname = !empty($memberInfo['nickname']) ? $memberInfo['nickname'] : $memberInfo['mobile'];

            $orderAmount = self::StatisticalOrderAmount($arr);

            $dingNum = $arr['dingnum'];

            if ($msgInfo['isopen'] == "1") //等待客服处理短信

            {

                $content = $msgInfo['msg'];

                $totalprice = $arr['price'] * $arr['dingnum'];

                $content = str_replace('{#MEMBERNAME#}', $memberInfo['nickname'], $content);

                $content = str_replace('{#PHONE#}', $configs['cfg_phone'], $content);

                $content = str_replace('{#PRODUCTNAME#}', $arr['productname'], $content);

                $content = str_replace('{#PRICE#}', $orderAmount['priceDescript'], $content);

                $content = str_replace('{#NUMBER#}', $orderAmount['numberDescript'], $content);

                $content = str_replace('{#TOTALPRICE#}', $orderAmount['totalPrice'], $content);

                $content = str_replace('{#WEBNAME#}', $configs['cfg_webname'], $content);

                $content = str_replace('{#ORDERSN#}', $ordersn, $content);

                $content = str_replace('{#ETICKETNO#}', $arr['eticketno'], $content);

                self::sendMsg($memberInfo['mobile'], $nickname, $content);//发送短信.

            }

            $emailInfo = self::getEmailMsgConfig2($arr['typeid'], 3);

            if ($emailInfo['isopen'] == 1 && !empty($memberInfo['email']))

            {

                $nickname = !empty($memberInfo['nickname']) ? $memberInfo['nickname'] : $memberInfo['mobile'];

                $title = "订单支付成功";

                $content = $emailInfo['msg'];

                $totalprice = $arr['price'] * $arr['dingnum'];

                $content = str_replace('{#MEMBERNAME#}', $nickname, $content);

                $content = str_replace('{#PHONE#}', $configs['cfg_phone'], $content);

                $content = str_replace('{#PRODUCTNAME#}', $arr['productname'], $content);

                $content = str_replace('{#PRICE#}', $orderAmount['priceDescript'], $content);

                $content = str_replace('{#NUMBER#}', $orderAmount['numberDescript'], $content);

                $content = str_replace('{#TOTALPRICE#}', $orderAmount['totalPrice'], $content);

                $content = str_replace('{#WEBNAME#}', $configs['cfg_webname'], $content);

                $content = str_replace('{#ORDERSN#}', $ordersn, $content);

                $content = str_replace('{#ETICKETNO#}', $arr['eticketno'], $content);

                self::ordermaill($memberInfo['email'], $title, $content);

            }





            //供应商短信发送

            if ($configs['cfg_supplier_msg_open'] == 1 && !empty($configs['cfg_supplier_msg']))

            {

                $content = $configs['cfg_supplier_msg'];

                $content = str_replace('{#MEMBERNAME#}', $memberInfo['nickname'], $content);

                $content = str_replace('{#PHONE#}', $memberInfo['mobile'], $content);

                $content = str_replace('{#PRODUCTNAME#}', $arr['productname'], $content);

                $content = str_replace('{#PRICE#}', $orderAmount['priceDescript'], $content);

                $content = str_replace('{#NUMBER#}', $orderAmount['numberDescript'], $content);

                $content = str_replace('{#TOTALPRICE#}', $orderAmount['totalPrice'], $content);

                $content = str_replace('{#WEBNAME#}', $configs['cfg_webname'], $content);

                $content = str_replace('{#ORDERSN#}', $ordersn, $content);

                $content = str_replace('{#ETICKETNO#}', $arr['eticketno'], $content);



                //本站管理员短信发送

                $cfg_webmaster_phone = $configs['cfg_webmaster_phone'];

                if (!empty($cfg_webmaster_phone))

                {

                    self::sendMsg($cfg_webmaster_phone, $nickname, $content);//发送短信.

                }



                if ($configs['cfg_supplier_send_open'] == 1)

                {

                    $supplierphone = self::get_supplier_link($arr['productautoid'], $arr['typeid']);

                    if (!empty($supplierphone))

                    {

                        self::sendMsg($supplierphone, $nickname, $content);//发送短信.

                    }

                }

            }



            //供应商email发送

            if ($configs['cfg_supplier_email_open'] == 1 && !empty($configs['cfg_supplier_emailmsg']))

            {

                $content = $configs['cfg_supplier_emailmsg'];

                $title = "订单支付成功";

                $content = str_replace('{#MEMBERNAME#}', $nickname, $content);

                $content = str_replace('{#PHONE#}', $memberInfo['mobile'], $content);

                $content = str_replace('{#PRODUCTNAME#}', $arr['productname'], $content);

                $content = str_replace('{#PRICE#}', $orderAmount['priceDescript'], $content);

                $content = str_replace('{#NUMBER#}', $orderAmount['numberDescript'], $content);

                $content = str_replace('{#TOTALPRICE#}', $orderAmount['totalPrice'], $content);

                $content = str_replace('{#WEBNAME#}', $configs['cfg_webname'], $content);

                $content = str_replace('{#ORDERSN#}', $ordersn, $content);

                $content = str_replace('{#ETICKETNO#}', $arr['eticketno'], $content);





                //本站管理员短信发送

                $cfg_webmaster_email = $configs['cfg_webmaster_email'];

                if (!empty($cfg_webmaster_email))

                {

                    self::ordermaill($cfg_webmaster_email, $title, $content);

                }



                if ($configs['cfg_supplier_sendemail_open'] == 1)

                {

                    $supplieremail = self::get_supplier_link($arr['productautoid'], $arr['typeid'], false);

                    if (!empty($supplieremail))

                    {

                        self::ordermaill($supplieremail, $title, $content);

                    }

                }

            }



            //支付成功后添加预订送积分

            if (!empty($arr['jifenbook']) && $memberModel->loaded())

            {

                $addjifen = intval($arr['jifenbook']);

                $memberModel->jifen = $memberModel->jifen + $addjifen;

                if ($memberModel->save())

                {

                    self::addJifenLog($arr['memberid'], "预订{$arr['productname']}获得积分{$addjifen}", $addjifen, 2);

                }

            }

            //如果是酒店订单,则把子订单置为交易成功状态

            if ($arr['typeid'] == 2)

            {

                $s = "update sline_member_order set ispay=1,paysource='$paySource' where pid='{$arr['id']}'";

                DB::query(Database::UPDATE, $s);

            }

        }

        return true;

    }



    /**

     * @param $productid

     * @param $typeid

     * @return string

     * 获取供应商手机号码

     */

    public static function get_supplier_link($productid, $typeid, $istel = true)

    {

        $module_info = ORM::factory('model', $typeid)->as_array();

        //$table=$channeltable[$typeid];

        $table = 'sline_' . $module_info['maintable'];

        $sql = "SELECT supplierlist FROM {$table} where id='$productid'";

        $row = DB::query(1, $sql)->execute()->as_array();

        $supplierid = $row[0]['supplierlist'];

        $sql = "SELECT * FROM `sline_supplier` WHERE id='$supplierid'";

        $row = DB::query(1, $sql)->execute()->as_array();



        $result = ($istel == true ? $row[0]['mobile'] : $row[0]['email']);

        return $result ? $result : '';

    }



    public static function getDefineMsgInfo($typeid, $num = 0)

    {

        $model = ORM::factory('sms_msg');

        $msgtype = self::getMsgType($typeid, $num);

        $row = $model->where('msgtype', '=', $msgtype)->find()->as_array();

        return $row;

    }



    public static function getDefineMsgInfo2($msgtype)

    {

        $model = ORM::factory('sms_msg');

        $row = $model->where('msgtype', '=', $msgtype)->find()->as_array();;

        return $row;

    }



    public static function getEmailMsgConfig($msgtype)

    {

        $model = ORM::factory('email_msg');

        $row = $model->where('msgtype', '=', $msgtype)->find()->as_array();

        return $row;

    }



    public static function getEmailMsgConfig2($typeid, $num)

    {

        $model = ORM::factory('email_msg');

        $msgtype = self::getMsgType($typeid, $num);

        $row = $model->where('msgtype', '=', $msgtype)->find()->as_array();

        return $row;

    }



    /*

     * 根据typeid生成msgtype

     * @param int $typeid

     * @param int $num ,第几个状态.

     * @return string $msgtype

     * */

    public static function getMsgType($typeid, $num)

    {

        $sql = "select pinyin,correct,maintable from sline_model where id={$typeid}";

        $arr = DB::query(Database::SELECT, $sql)->execute()->as_array();



        $msgtype = 'reg';

        if (count($arr) > 0)

        {

            if ($arr[0]['maintable'] == "model_archive")

                $msgtype = "tongyong_order_msg" . $num;

            else

                $msgtype = $arr[0]['pinyin'] . '_order_msg' . $num;

        }

        return $msgtype;



    }



    public static function sendMsg($phone, $prefix, $content)

    {

        $configModel = new Model_Sysconfig();

        $configs = $configModel->getConfig(0);

        $prefix = $configs['cfg_webname'];

        $msg = new Msg($configs['cfg_sms_username'], $configs['cfg_sms_password']);

        $status = $msg->sendMsg($phone, $prefix, $content);

        $status = json_decode($status);

        return $status;

    }



    public static function addJifenLog($memberid, $content, $jifen, $type)

    {

        $model = ORM::factory('member_jifen_log');

        $model->memberid = $memberid;

        $model->content = $content;

        $model->jifen = $jifen;

        $model->type = $type;

        $model->addtime = time();

        $model->save();

    }



    public static function ordermaill($maillto, $title, $content)

    {

        $configModel = new Model_Sysconfig();

        $configs = $configModel->getConfig(0);

        //如果没有自定义SMTP配置

        if ($configs['cfg_mail_smtp'] == '')

        {

            $configs['cfg_mail_smtp'] = "smtp.163.com";

        }

        if ($configs['cfg_mail_port'] == '')

        {

            $configs['cfg_mail_port'] = 25;

        }

        if ($configs['cfg_mail_user'] == '')

        {

            $configs['cfg_mail_user'] = "Stourweb@163.com";

            $configs['cfg_mail_pass'] = "kelly12345";

        }

        $smtpserver = $configs['cfg_mail_smtp'];//SMTP服务器

        $smtpserverport = $configs['cfg_mail_port'];//SMTP服务器端口

        $smtpusermail = $configs['cfg_mail_user'];//SMTP服务器的用户邮箱

        $smtpemailto = $maillto;//发送给谁

        $smtpuser = $configs['cfg_mail_user'];//SMTP服务器的用户帐号

        $smtppass = $configs['cfg_mail_pass'];//SMTP服务器的用户密码

        $mailtype = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件

        ##########################################

        if ($smtpserverport == 25)

        {

            $mailsubject = iconv('UTF-8', 'GB2312//IGNORE', $title);//邮件主题

            $mailbody = iconv('UTF-8', 'GB2312//IGNORE', $content);//邮件内容

            $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.

            $smtp->debug = false;//是否显示发送的调试信息

            $status = $smtp->sendmail($smtpemailto, $smtpuser, $mailsubject, $mailbody, $mailtype);

        }

        else

        {

            $mail = new Mysendmail();

            $mail->setServer($smtpserver, $smtpuser, $smtppass, 465, true); //设置smtp服务器，到服务器的SSL连接

            $mail->setFrom($smtpuser); //设置发件人

            $mail->setReceiver($smtpemailto); //设置收件人，多个收件人，调用多次

            $mail->setMail($title, $content); //设置邮件主题、内容

            $status = $mail->sendMail(); //发送

        }

        return $status;

    }



    public static function StatisticalOrderAmount($orderinfo)

    {

        global $dsql;

        $result = array('totalNumber' => 0, 'totalPrice' => 0, 'numberDescript' => '', 'priceDescript' => '');

        if (is_array($orderinfo))

        {

            $totalPrice = $orderinfo['price'] * $orderinfo['dingnum'] + $orderinfo['childnum'] * $orderinfo['childprice'] + $orderinfo['oldnum'] * $orderinfo['oldprice'];

            $result['totalPrice'] = $totalPrice;

            $totalNumber = $orderinfo['dingnum'] + $orderinfo['childnum'] + $orderinfo['oldnum'];

            $result['totalNumber'] = $totalNumber;

            $priceDescript = '';

            $numberDescript = '';

            if (!empty($orderinfo['dingnum']) && $orderinfo['typeid'] == 1)

            {

                $priceDescript = $priceDescript . $orderinfo['price'] . '(成)';

                $numberDescript = $numberDescript . $orderinfo['dingnum'] . '(成)';

            }

            if (!empty($orderinfo['childnum']) && $orderinfo['typeid'] == 1)

            {

                $priceDescript = $priceDescript . $orderinfo['childprice'] . '(小)';

                $numberDescript = $numberDescript . $orderinfo['childnum'] . '(小)';

            }

            if (!empty($orderinfo['oldnum']) && $orderinfo['typeid'] == 1)

            {

                $priceDescript = $priceDescript . $orderinfo['oldprice'] . '(老)';

                $numberDescript = $numberDescript . $orderinfo['oldnum'] . '(老)';

            }

            if ($orderinfo['typeid'] != 1)

            {

                $priceDescript = $orderinfo['price'];

                $numberDescript = $orderinfo['dingnum'];

            }

            $result['priceDescript'] = $priceDescript;

            $result['numberDescript'] = $numberDescript;

            if ($orderinfo['typeid'] == 2 && $orderinfo['pid'] == 0)

            {

                $numRow = DB::query(Database::SELECT, "select sum(dingnum) as num from sline_member_order where pid={$orderinfo['id']}")->execute()->as_array();

                $totalPriceArr = DB::query(Database::SELECT, "select sum(dingnum*price) as totalprice from sline_member_order where pid={$orderinfo['id']}")->execute()->as_array();

                $result['totalPrice'] = $totalPriceArr[0]['totalprice'];

                $result['numberDescript'] = $numRow[0]['num'];

            }

        }

        return $result;

    }



    /**

     * 上次报价记录

     * @param $modelId

     * @param $data

     * @return array

     */

    public static function last_offer($modelId, $data)

    {

        $lastOffer = array();

        switch ($modelId)

        {

            //线路

            case 1:

                $lastOffer = array(

                    'pricerule' => $data['pricerule'],

                    'adultbasicprice' => $data['adultbasicprice'],

                    'adultprofit' => $data['adultprofit'],

                    'adultprice' => $data['adultbasicprice'] + $data['adultprofit'],

                    'childbasicprice' => $data['childbasicprice'],

                    'childprofit' => $data['childprofit'],

                    'childprice' => $data['childbasicprice'] + $data['childprofit'],

                    'oldbasicprice' => $data['oldbasicprice'],

                    'oldprofit' => $data['oldprofit'],

                    'oldprice' => $data['oldbasicprice'] + $data['oldprofit'],

                    'starttime' => $data['starttime'],

                    'endtime' => $data['endtime'],

                );

                break;

            //酒店、租车

            case 2:

            case 3:

                $lastOffer = array(

                    'pricerule' => $data['pricerule'],

                    'basicprice' => $data['basicprice'],

                    'profit' => $data['profit'],

                    'price' => $data['basicprice'] + $data['profit'],

                    'starttime' => $data['starttime'],

                    'endtime' => $data['endtime'],

                );

                break;

        }

        return serialize($lastOffer);

    }



    //用法：

    // xCopy("feiy","feiy2",1):拷贝feiy下的文件到 feiy2,包括子目录

    // xCopy("feiy","feiy2",0):拷贝feiy下的文件到 feiy2,不包括子目录

    //参数说明：

    // $source:源目录名

    // $destination:目的目录名

    // $iscopychild:复制时，是不是包含的子目录

    //返回结果：Array['success']拷贝是否成功；Array['errormsg']拷贝失败原因

    public static function xCopy($source, $destination, $iscopychild)

    {

        if (!is_dir($source))

        {

            return array('success' => false, 'errormsg' => "$source 不是一个目录");

        }



        if (!is_dir($destination) && !mkdir($destination, 0777, true))

        {

            return array('success' => false, 'errormsg' => "创建目录 $destination 失败");

        }



        $handle = opendir($source);

        if ($handle == false)

        {

            return array('success' => false, 'errormsg' => "打开目录 $source 失败");

        }



        $result = array('success' => true, 'errormsg' => "");

        while ($entry = readdir($handle))

        {

            if (($entry != ".") && ($entry != ".."))

            {

                $fromentry = $source . "/" . $entry;

                $toentry = $destination . "/" . $entry;



                if (is_dir($fromentry))

                {

                    if ($iscopychild)

                    {

                        $subDirCopyResult = self::xCopy($fromentry, $toentry, $iscopychild);

                        if (!$subDirCopyResult['success'])

                        {

                            $result = $subDirCopyResult;

                            break;

                        }

                    }

                }

                else

                {

                    if (!copy($fromentry, $toentry))

                    {

                        $result = array('success' => false, 'errormsg' => "拷贝文件 $fromentry 到 $toentry 失败");

                        break;

                    }

                }

            }

        }

        closedir($handle);

        return $result;

    }



    public static function isEmptyDir($dir)

    {

        if (!is_dir($dir))

            return true;



        $handle = opendir($dir);

        if ($handle == false)

            return true;



        while ($entry = readdir($handle))

        {

            if (($entry != ".") && ($entry != ".."))

            {

                closedir($handle);

                return false;

            }

        }



        closedir($handle);

        return true;

    }



    public static function downloadFile($url, $file = "", $timeout = 60)

    {

        $file = empty($file) ? pathinfo($url, PATHINFO_BASENAME) : $file;

        $dir = pathinfo($file, PATHINFO_DIRNAME);

        //创建保存目录

        if (!file_exists($dir) && !mkdir($dir, 0777, true))

        {

            return false;

        }



        $url = str_replace(" ", "%20", $url);

        if (trim($url) == '')

        {

            return false;

        }



        if (function_exists('curl_init'))

        {

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);

            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

            $temp = curl_exec($ch);

            curl_close($ch);

            if (@file_put_contents($file, $temp) && !curl_error($ch))

            {

                return true;

            }

            else

            {

                return false;

            }

        }

        else

        {

            $opts = array(

                "http" => array(

                    "method" => "GET",

                    "header" => "",

                    "timeout" => $timeout)

            );

            $context = stream_context_create($opts);

            if (@copy($url, $file, $context))

            {

                return true;

            }

            else

            {

                return false;

            }

        }

    }



    /*

    * 去除xss全局函数,所有输入参数都要调用这个参数.

    * */

    public static function remove_xss($param)

    {

        //require_once Kohana::find_file('vendor', 'htmlpurifier/library/HTMLPurifier.auto');

        require_once BASEPATH . '/tools/lib/htmlpurifier/library/HTMLPurifier.auto.php';

        $purifier = new HTMLPurifier();

        $config = HTMLPurifier_Config::createDefault();

        $config->set('Core.Encoding', 'UTF-8'); //字符编码（常设）

        //如果参数是数组

        if (is_array($param))

        {

            foreach ($param as &$value)

            {

                if (is_array($value))

                {

                    $value = $purifier->purifyArray($value);

                }

                else

                {

                    $value = $purifier->purify($value);

                    self::reject_check($value);





                }

            }

            $out = $param;



        }

        else

        {

            $out = $purifier->purify($param);

            self::reject_check($out);

        }



        return $out;

    }



    /*

     * 注入检测

     */

    static function reject_check($param)

    {

        $arr = explode(' ', $param);

        if (count($arr) > 1)

        {

            foreach ($arr as $ar)

            {

                $check = preg_match('/select|insert|update|delete|and|or|\'|\\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i', $ar);

                if ($check)

                {

                    exit($ar);

                }

            }



        }



    }



    /**

     * 主站域名

     * @return string

     */

    static function get_main_host()

    {

        $host = '';

        $arr = DB::select()->from('weblist')->where("webid=0")->execute()->current();

        if (!empty($arr))

        {

            $host = $arr['weburl'];

        }

        return $host;

    }



    /**

     * 生成结构树

     * @param $table

     * @param int $pid

     * @return array

     */

    static function tree_data($table, $pid = 0)

    {

        $data = array();

        $menuArr = DB::select()->from($table)->where("pid={$pid}")->order_by('displayorder', 'asc')->execute()->as_array();

        foreach ($menuArr as $v)

        {

            $sonArr = DB::select()->from($table)->where("pid={$v['id']}")->execute()->as_array();

            if (!empty($sonArr))

            {

                $data[$v['entitle']] = self::tree_data($table, $v['id']);

            }

            else

            {

                $data[$v['entitle']] = $v;

            }

        }

        return $data;

    }



    /**

     * 生成目录

     */

    static function menu()

    {

        $menupath = APPPATH . 'config/menu_sub.php';

        $menuCachePath = APPPATH . 'cache/tplcache/stourtravel/menu_sub.php';

        if (!file_exists($menuCachePath))

        {

            $menuArr = self::tree_data('menu');

            //检测模型

            $modelArr = DB::select()->from('model')->execute()->as_array();

            foreach ($modelArr as $k => $v)

            {

                $model[$v['pinyin']] = array('isopen' => $v['isopen'], 'id' => $v['id'], 'modulename' => $v['modulename']);

            }

            //整理PID

            $data = array();

            foreach ($menuArr as $key => $val)

            {

                if (!isset($val['id']))

                {

                    $parentkey = $key;

                    if (in_array($parentkey, array('kindright', 'hotelkind', 'linekind', 'carkind', 'spotkind', 'spotticketkind', 'visakind', 'tuankind', 'articlekind', 'photokind', 'helpkind', 'jiebankind')))

                    {

                        $parentkey = 'kind';

                    }

                    if (in_array($parentkey, array('kefukind')))

                    {

                        $parentkey = 'basic';

                    }

                    foreach ($val as $k => $v)

                    {



                        $array = array(

                            'name' => $v['title'],

                            'itemid' => $v['displayorder'],

                            'ico' => $v['ico'],

                            'extlink' => $v['extlink'],

                            'url' => empty($v['extlink']) ? "{$v['controller']}/{$v['method']}/parentkey/{$parentkey}/itemid/{$v['displayorder']}{$v['extraparam']}" : $v['extraparam']

                        );

                        if (strpos($v['ico'], 'N_03') !== false)

                        {

                            $array['flag'] = 'new';

                        }

                        if (isset($v['id']))

                        {

                            $data[$key][$k] = $array;

                        }

                        else

                        {

                            foreach ($v as $tk => $tv)

                            {

                                $array = array(

                                    'name' => $tv['title'],

                                    'itemid' => $tv['displayorder'],

                                    'ico' => $tv['ico'],

                                    'extlink' => $v['extlink'],

                                    'url' => empty($tv['extlink']) ? "{$tv['controller']}/{$tv['method']}/parentkey/{$parentkey}/itemid/{$tv['displayorder']}{$tv['extraparam']}" : $tv['extraparam']

                                );

                                if (strpos($tv['ico'], 'N_03') !== false)

                                {

                                    $array['flag'] = 'new';

                                }

                                $data[$k][$tk] = $array;

                            }

                        }

                        //主产品

                        if (in_array($k, array('line', 'hotel', 'car', 'spot', 'visa', 'tuan')))

                        {



                            $array['name'] = $model[$k]['modulename'];

                            $array['url'] = "{$k}/{$k}/parentkey/product/itemid/{$v['order']}";

                            $array['order'] = "order/index/parentkey/order/itemid/{$v['displayorder']}/typeid/" . $model[$v['entitle']]['id'];

                            $array['flag'] = $v['entitle'];

                            if (!isset($data['newproduct'][$v['entitle']]))

                            {

                                $data['newproduct'][$v['entitle']] = $array;

                            }

                        }

                    }

                }

            }

            //chinesename

            $data['chinesename'] = array(

                'product' => '产品',

                'article' => '文章',

                'kindright' => '分类设置',

                'kind' => '分类设置',

                'linekind' => '线路分类',

                'hotelkind' => '酒店分类',

                'carkind' => '租车分类',

                'spotkind' => '景点分类',

                'visakind' => '签证分类',

                'articlekind' => '文章分类',

                'tuankind' => '团购分类',

                'photokind' => '相册分类',

                'helpkind' => '帮助分类',

                'basic' => '站点设置',

                'member' => '会员管理',

                'order' => '订单管理',

                'system' => '系统设置',

                'templet' => '模板设置',

                'application' => '增值应用',

                'tool' => '优化应用',

                'sale' => '营销策略',

                'kefukind' => '客服管理',

                'mobile' => '手机配置',

                'userdefined' => '用户定义'

            );

            //用户定义

            $data['userdefined'] = include(APPPATH . 'config/menu_userdefined.php');

            file_put_contents($menupath, "<?php defined('SYSPATH') or die('No direct script access.');\r\n return " . var_export($data, true) . ';');

            //写入缓存

            file_put_contents($menuCachePath, 1);

        }

    }



    //获取消费码.

    public static function get_eticketno()

    {



        $eticketno = "";



        while (true)

        {

            $eticketno = substr(self::get_random_number(9), 1, 8);



            $check_sql = "SELECT id FROM `sline_member_order` WHERE eticketno='{$eticketno}'";

            $row = DB::query(1, $check_sql)->execute()->as_array();



            if (count($row) <= 0)

                break;

            sleep(1);

        }

        return $eticketno;

    }



    public static function get_random_number($length = 4)

    {

        $min = pow(10, ($length - 1));

        $max = pow(10, $length) - 1;

        return mt_rand($min, $max);

    }



    /**

     * 二次确认订单消息通知

     * @param $ordersn

     */

    public static function send_msg_second_comfrim($ordersn)

    {

        $arr = DB::select()->from('member_order')->where('id', '=', $ordersn)->execute()->current();

        //站点信息

        $configModel = new Model_Sysconfig();

        $configs = $configModel->getConfig(0);

        //发送短信

        $msgInfo = self::getDefineMsgInfo($arr['typeid'], 2);

        $memberModel = ORM::factory('member', $arr['memberid']);

        $memberInfo = $memberModel->as_array();

        $nickname = !empty($memberInfo['nickname']) ? $memberInfo['nickname'] : $memberInfo['mobile'];

        $orderAmount = self::StatisticalOrderAmount($arr);

        $dingNum = $arr['dingnum'];

        if ($msgInfo['isopen'] == "1") //等待客服处理短信

        {

            $content = $msgInfo['msg'];

            $totalprice = $arr['price'] * $arr['dingnum'];

            $content = str_replace('{#MEMBERNAME#}', $memberInfo['nickname'], $content);

            $content = str_replace('{#PHONE#}', $configs['cfg_phone'], $content);

            $content = str_replace('{#PRODUCTNAME#}', $arr['productname'], $content);

            $content = str_replace('{#PRICE#}', $orderAmount['priceDescript'], $content);

            $content = str_replace('{#NUMBER#}', $orderAmount['numberDescript'], $content);

            $content = str_replace('{#TOTALPRICE#}', $orderAmount['totalPrice'], $content);

            $content = str_replace('{#WEBNAME#}', $configs['cfg_webname'], $content);

            $content = str_replace('{#ORDERSN#}', $ordersn, $content);

            $content = str_replace('{#ETICKETNO#}', $arr['eticketno'], $content);

            self::sendMsg($memberInfo['mobile'], $nickname, $content);//发送短信.

        }

        //发送邮箱

        $emailInfo = self::getEmailMsgConfig2($arr['typeid'], 2);

        if ($emailInfo['isopen'] == 1 && !empty($memberInfo['email']))

        {

            $nickname = !empty($memberInfo['nickname']) ? $memberInfo['nickname'] : $memberInfo['mobile'];

            $title = $arr['productname']."订单{$ordersn}";

            $content = $emailInfo['msg'];

            $totalprice = $arr['price'] * $arr['dingnum'];

            $content = str_replace('{#MEMBERNAME#}', $nickname, $content);

            $content = str_replace('{#PHONE#}', $configs['cfg_phone'], $content);

            $content = str_replace('{#PRODUCTNAME#}', $arr['productname'], $content);

            $content = str_replace('{#PRICE#}', $orderAmount['priceDescript'], $content);

            $content = str_replace('{#NUMBER#}', $orderAmount['numberDescript'], $content);

            $content = str_replace('{#TOTALPRICE#}', $orderAmount['totalPrice'], $content);

            $content = str_replace('{#WEBNAME#}', $configs['cfg_webname'], $content);

            $content = str_replace('{#ORDERSN#}', $ordersn, $content);

            $content = str_replace('{#ETICKETNO#}', $arr['eticketno'], $content);

            self::ordermaill($memberInfo['email'], $title, $content);

        }

    }

}

