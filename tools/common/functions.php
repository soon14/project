<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 通用函数类
 * Class Functions
 */
class Functions
{
    /**
     * 单一查询
     * @param $table
     * @param int $where
     * @param string $fields
     * @param bool|false $getResult
     * @return bool
     */
    static function st_query($table, $where = 1, $fields = '*', $getResult = false)
    {
        $bool = false;
        $rs = DB::select($fields)->from($table)->where($where)->execute()->current();
        if (!empty($rs))
        {
            $bool = !$getResult ? true : $rs;
        }
        return $bool;
    }

    /**
     * 更新数据
     * @param $table
     * @param $update
     * @param $where
     * @return int|object
     */
    static function st_update($table, $update, $where)
    {
        $bool = 0;
        $row = DB::update($table)->set($update)->where($where)->execute();
        if ($row > 0)
        {
            $bool = $row;
        }
        return $bool;
    }

    /**
     * 添加数据
     * @param $table
     * @param $data
     * @return object
     */
    static function st_insert($table, $data)
    {
        $rs = DB::insert($table, array_keys($data))->values(array_values($data))->execute();
        return $rs;
    }

    /**
     * 获取主站地址
     * @return bool
     */
    static function get_main_host()
    {
        $rs = self::st_query('weblist', 'webid=0', 'weburl', true);
        if (isset($rs['weburl']))
        {
            $rs = $rs['weburl'];
        }
        return $rs;
    }

    /**
     * COOKIE 域名
     * @return string
     */
    static function cookie_domain()
    {
        $host = $_SERVER['HTTP_HOST'];
        $rs = self::st_query('weblist', 'webid=0', '*', true);
        if (!empty($rs))
        {
            $host = str_replace($rs['webprefix'] . '.', '', parse_url($rs['weburl'], PHP_URL_HOST));
        }
        return $host;
    }

    /**
     * 用户登陆后信息处理
     * @param $user
     * @param bool|false $isadd 是否是新增用户
     */
    static function write_login_info($user, $isadd = false)
    {
        $time = time();
        $integral = 0;
        $content = '第三方登陆赠送积分';
        if ($isadd)
        {
            $data = self::st_query('sysconfig', "varname='cfg_reg_jifen'", '*', true);
            if (!empty($data))
            {
                $integral = $data['value'];
                $content .= $integral;
            }
        }
        else
        {
            $data = self::st_query('sysconfig', "varname='cfg_login_jifen'", '*', true);
            if (!empty($data))
            {
                $integral = $data['value'];
                $content .= $integral;
            }
        }
        //积分日志
        if ($integral > 0)
        {
            $logData['addtime'] = $time;
            $logData['content'] = $content;
            $logData['memberid'] = $user['mid'];
            $logData['type'] = 2;
            $logData['jifen'] = $integral;
            self::st_insert('member_jifen_log', $logData);
        }
        //登陆信息
        $update['logintime'] = $time;
        $update['loginip'] = $user['loginip'];
        $update['jifen'] = DB::expr("jifen + {$integral}");
        $userinfo = self::st_query('member', "mid={$user['mid']}", '*', true);
        $update['pwd'] =empty($userinfo['pwd'])?md5(rand(0, 999)):$userinfo['pwd'];
        self::st_update('member', $update, "mid={$user['mid']}");
        //写入session
        //pc_5.0 cookie
        Cookie::set('st_username', $user['nickname'], 7600);
        Cookie::set('st_userid', $user['mid'], 7600);
        Cookie::set('st_secret', self::authcode($user['mid'] . '||' . $update['pwd'], ''), 7600);
        //mobile_5.0
        $session = array('mid' => $user['mid'], 'nickname' => $user['nickname'], 'litpic' => $user['litpic']);
        Session::instance()->set('member', $session);
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

    /**
     * 检测平台信息并写入cookie
     */
    static function st_platform()
    {
        $version = Cookie::get('_version', null);
        if (is_null($version))
        {
            $version = 'pc_5.0';
            Cookie::set('_version', $version);
        }
        return $version;
    }

    /**
     * 获取公用头、底部
     * @return string
     */
    static function head_bottom()
    {
        $version = strtolower(self::st_platform());
        switch ($version)
        {
            case 'pc_5.0':
                $url = Common::get_main_host() . '/pub/pay';
                break;
            case 'mobile_5.0':
                $url = Common::get_main_host() . '/phone/pub/commonhd';
                break;
        }
        Cookie::delete('_version');
        return file_get_contents($url);
    }

    /**
     * 第三方登陆账号绑定
     * @param $post
     * @return mixed|string
     */
    static function third_bind($post)
    {
        $supplyThird = array(
            'qq' => array(
                'alias' => 'qq',
                'name' => '腾讯QQ'
            ),
            'weixin' => array(
                'alias' => 'wx',
                'name' => '微信'
            ),
            'weibo' => array(
                'alias' => 'wb',
                'name' => '新浪微博'
            )
        );
        $rs['bool'] = false;
        $third = self::remove_xss($post['third']);
        $data['nickname'] = $third['nickname'];
        $data['loginip'] = $_SERVER['REMOTE_ADDR'];
        $data['litpic'] = $third['litpic'];
        $third_data['from'] = $third['from'];
        $third_data['openid'] = $third['openid'];
        $third_data['nickname'] = $third['nickname'];
        $member = isset($post['member']) ? self::remove_xss($post['member']) : null;
        if (!is_null($member) && isset($member['user']) && isset($member['pwd']))
        {
            //已有账号绑定
            $type = strpos($member['user'], '@') ? 'email' : 'mobile';
            $pwd = md5($member['pwd']);
            $memberInfo = Common::st_query('member', "{$type}='{$member['user']}' and pwd='{$pwd}'", '*', true);
            if (!empty($memberInfo))
            {
                $rs['bool'] = true;
                $data['mid'] = $memberInfo['mid'];
            }
            else
            {
                $rs['msg'] = '账号或密码不正确';
            }
            //是否绑定对应的第三方账号
            if ($rs['bool'])
            {
                $isThird = Common::st_query('member_third', "`from`='{$third['from']}' and mid={$data['mid']}", '*', true);
                if (!empty($isThird))
                {
                    $rs['bool'] = false;
                    $rs['msg'] = "已绑定到{$supplyThird[$third['from']]['name']}@{$isThird['nickname']}";
                }
            }
        }
        else
        {
            //查询openid是否存在
            $third['openid'] = preg_replace('~(.*?)\.[0-9]+$~', '$1', $third['openid']);
            $isThird = Common::st_query('member_third', "`from`='{$third['from']}' and openid='{$third['openid']}'", '*', true);
            if (empty($isThird))
            {
                $result = self::st_insert('member', $data);
                if ($result[1] > 0)
                {
                    $rs['bool'] = true;
                    $data['mid'] = $result[0];
                }
            }
            else
            {
                $rs['msg'] = '该账号已绑定';
            }
            //
        }
        //登陆成功
        if ($rs['bool'])
        {
            $rs['bool'] = false;
            $third_data['mid'] = $data['mid'];
            $result = Common::st_insert('member_third', $third_data);
            if ($result[1] > 0)
            {
                $rs['bool'] = true;
                self::write_login_info($data);
            }
        }
        $rs['url'] = Cookie::get('_refer');
        return json_encode($rs);
    }

    /**
     * xss 过滤
     * @param $param
     * @return array|string
     */
    public static function remove_xss($param)
    {
        require_once TOOLS_Lib . 'htmlpurifier/library/HTMLPurifier.auto.php';
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
     * 登陆状态
     */
    public function islogin()
    {
        //v5
        $bool = array();
        $version = Common::st_platform();
        if ($version == 'pc_5.0')
        {
            $mid = Cookie::get('st_userid');
            if (!empty($mid))
            {
                $bool = DB::select()->from('member')->where("mid={$mid}")->execute()->current();
            }
        }
        //v5 mobile
        if ($version == 'mobile_5.0')
        {
            $menber = Session::instance()->get('member');
            if ($menber)
            {
                $bool = DB::select()->from('member')->where("mid={$menber['mid']}")->execute()->current();
            }
        }
        return $bool;
    }

    /**
     * 登陆状态下,第三方绑定
     * @param $data
     */
    public function third_login_bind($data)
    {
        $supplyThird = array(
            'qq' => array(
                'alias' => 'qq',
                'name' => '腾讯QQ'
            ),
            'weixin' => array(
                'alias' => 'wx',
                'name' => '微信'
            ),
            'weibo' => array(
                'alias' => 'wb',
                'name' => '新浪微博'
            )
        );
        $rs = DB::select()->from('member_third')->where("`from`= '{$data['from']}' and openid='{$data['openid']}'")->execute()->current();
        $refer = Cookie::get('_refer');
        if (empty($rs))
        {
            $third['mid'] = $data['mid'];
            $third['openid'] = preg_replace('~(.*?)\.[0-9]+$~', '$1', $data['openid']);
            $third['from'] = $data['from'];
            $third['nickname'] = $data['nickname'];
            Common::st_insert('member_third', $third);
        }
        else
        {
            Session::instance()->set("thirdBindMsg", "已绑定到{$supplyThird[$rs['from']]['name']}@{$rs['nickname']}");
        }
        header("location:" . $refer);
        exit;
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
                $tfile = BASEPATH . $GLOBALS['cfg_res_url'] . "/js/" . $file;

                $file = $GLOBALS['cfg_res_url'] . '/js/' . $file;
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
                $jsUrl = '/min/?f=' . $f;
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
                $tfile = BASEPATH . $GLOBALS['cfg_res_url'] . "/css/" . $file;
                $file = $GLOBALS['cfg_res_url'] . '/css/' . $file;
            }
            else
            {
                $tfile = BASEPATH . $file;


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
                $cssUrl = '/min/?f=' . $f;
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

    /**
     * @param $varname
     * @param int $webid
     * @return mixed
     * 获取配置值.
     */
    public static function get_sys_para($varname, $webid = 0)
    {
        $result = self::st_query('sysconfig', "varname='$varname' AND webid=$webid", 'value', true);

        return $result['value'];
    }

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

        require(BASEPATH . '/res/vendor/slineeditor/ueditor.php');
        $UEditor = new UEditor();
        $UEditor->basePath = '/res/vendor/slineeditor/';
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
     * 获取扩展字段相关信息
     * @param $typeid
     * @param $extendinfo
     * @return array
     */
    public static function get_extend_content($typeid, $extendinfo)
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
        $table = $content_table[$typeid];
        $isTongyong = false;
        if (empty($table))
        {
            $isTongyong = true;
            $table = 'model_content';
        }

        if ($isTongyong)
        {

            $content_field_list = DB::select("*")
                ->from($table)
                ->where("isopen=1 AND typeid='$typeid' AND columnname like 'e_%'")
                ->execute()
                ->as_array();


        }
        else
        {
            $content_field_list = DB::select()
                ->from($table)
                ->where("isopen=1 AND columnname like 'e_%'")
                ->execute()
                ->as_array();
        }

        $fields = array();
        foreach ($content_field_list as $v)
        {
            $fields[] = $v['columnname'];
        }

        $arr = DB::select()
            ->from('extend_field')
            ->where("typeid='$typeid' AND isopen=1")
            ->execute()
            ->as_array();
        $contentHtml = '';
        $extendHtml = '';
        foreach ($arr as $row)
        {
            $default = !empty($extendinfo[$row['fieldname']]) ? $extendinfo[$row['fieldname']] : '';
            if (in_array($row['fieldname'], $fields))
            {
                $contentHtml .= '<div id="content_' . $row['fieldname'] . '"  data-id="' . $row['fieldname'] . '" class="product-add-div content-hide"><div class="add-class">';
                $contentHtml .= '
                                <div>' . self::get_editor($row['fieldname'], $default, 700, 300, 'Sline', '0', '0') . '</div>
                            ';
                $contentHtml .= '</div></div>';
                continue;
            }
            if ($row['fieldtype'] == 'editor')
            {
                $head = '<div class="add-class">';
                $head .= '<dl>
                            <dt>' . $row['description'] . '：</dt>
                            <dd>
                                <div>' . self::get_editor($row['fieldname'], $default, 700, 300, 'Sline', '0', '0') . '</div>
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
    * 获取扩展表
    * */
    public static function get_extend_table($typeid)
    {
        $row = ORM::factory('model', $typeid)->as_array();
        return 'sline_' . $row['addtable'];
    }

    /*
      //扩展字段信息保存
     * */
    public static function save_extend_data($typeid, $productid, $info)
    {

        $table = self::get_extend_table($typeid);
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
   * 获取aid
   * @param string table
   * @param int webid
   * @return lastaid
   * */
    public static function get_last_aid($tablename, $webid = 0)
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
    * 清空数组里的空值
    * */
    public static function remove_empty($arr)
    {
        $newarr = array_diff($arr, array(null, 'null', '', ' '));
        return $newarr;
    }

    /*
   * 获取子站列表
   * return array
   * */
    public static function get_web_list()
    {
        $arr = DB::select_array(array('id', 'kindname', 'weburl', 'webroot', 'webprefix'))->from('destinations')->where("iswebsite=1 and isopen=1")->order_by("displayorder", 'asc')->execute()->as_array();
        foreach ($arr as $key => $value)
        {
            $arr[$key]['webid'] = $value['id'];
            $arr[$key]['webname'] = $value['kindname'];
        }

        return $arr;
    }

    /*
    * 根据,分隔的属性字符串获取相应的属性数组(修改页面用)
    */
    public static function get_selected_attr($typeid, $attr_str)
    {
        $productattr_arr = array(1 => 'line_attr', 2 => 'hotel_attr', 3 => 'car_attr', 4 => 'article_attr', 5 => 'spot_attr', 6 => 'photo_attr', 13 => 'tuan_attr');
        $attrtable = $typeid < 14 ? $productattr_arr[$typeid] : 'model_attr';
        $attrid_arr = explode(',', $attr_str);
        $attr_arr = array();
        foreach ($attrid_arr as $k => $v)
        {
            if ($typeid < 14)
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
    public static function get_selected_icon($iconlist)
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
     * 根据,分隔字符串获取上传的图片数组(修改页面用)
     * */
    public static function get_upload_picture($piclist)
    {
        $out = array();
        $arr = self::remove_empty(explode(',', $piclist));
        foreach ($arr as $row)
        {
            $picinfo = explode('||', $row);
            $out[] = array('litpic' => $picinfo[0], 'desc' => isset($picinfo[1]) ? $picinfo[1] : '');
        }
        return $out;
    }

    /*
    * 后台获取搜索词
    *
    */
    public static function get_keyword($keyword)
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

        return $out;
    }

    //分析当前域名,返回主域名
    /**
     * @return string
     * @desc 如www.lvyou.com 返回 lvyou.com
     */
    private static function get_domain()
    {
        $url = $GLOBALS['cfg_basehost'];

        $uarr = explode('.', $url);
        $k = 0;
        $out = '';
        foreach ($uarr as $value)
        {
            $out .= $k != 0 ? $value : '';
            $out .= '.';
            $k++;
        }
        $out = substr($out, 0, strlen($out) - 1);
        return $out;

    }

    /*
    * 获取主站prefix
    * */
    public static function get_main_prefix()
    {

        $sql = "SELECT webprefix FROM `sline_weblist` WHERE webid=0";
        $row = DB::query(1, $sql)->execute()->as_array();
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
        if ($webid != 0)
        {
            $row = self::st_query('destinations', "id=$webid", 'webprefix', true);
            $prefix = $row['webprefix'];
        }
        else
        {
            $prefix = self::get_main_prefix();
        }
        $url = 'http://' . $prefix . $domain;
        return $url;


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
        if ($needlen == 3)
            $s = '000';
        else if ($needlen == 2)
            $s = '00';
        else if ($needlen == 1)
            $s = '0';
        $out = $prefix . $s . "{$id}";
        return $out;
    }

}