<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mall extends Stourweb_Controller
{
    //产品编号
    private $_pcode;
    //授权域名
    private $_domain;
    //会员ID
    private $_memberId;
    //应用商城接口
    const APPURL = 'http://www.stourweb.com/api/app/get_list';
    //标签接口
    const TAGURL = 'http://www.stourweb.com/api/app/get_tag';
    //应用详情接口
    const INFOURL = 'http://www.stourweb.com/api/app/get_info';
    //我的应用
    const MYAPPURL = 'http://www.stourweb.com/api/app/get_my_app';
    //购买接口
    const APPBUY = 'http://www.stourweb.com/api/app/buy_app';

    //初始化
    public function before()
    {
        parent::before();
        $SerialNumber = '';
        include(Kohana::find_file('data', 'license'));
        $code = Model_SystemParts::getSystemPart(Model_SystemParts::$coreSystemPartCode, '0');
        $this->_pcode = $code['pcode'];
        $this->_memberId = $SerialNumber;
        $this->_domain = pathinfo(Common::get_main_host(), PATHINFO_BASENAME);
        $this->assign('parentkey', $this->params['parentkey']);
        $this->assign('itemid', $this->params['itemid']);
    }

    //商城首页
    public function action_index()
    {
        //产品编号
        $common['pcode'] = $this->_pcode;
        //获取标签
        $tag = array();
        $getTag = json_decode(Model_app::curl_post_data(self::TAGURL, true, $common));
        if ($getTag->status === 1)
        {
            $tag = $getTag->data;
            $tag = Common::struct_to_array($tag);
        }
        //获取数据
        $this->assign('tag', $tag);
        $this->display('stourtravel/mall/index');
    }

    public function action_read()
    {
        //当前页
        $params['page'] = Arr::get($_POST, 'page');
        //分页数
        $params['pageSize'] = Arr::get($_POST, 'size');
        //分类标签
        $type = Arr::get($_POST, 'type');
        if (!empty($type))
        {
            $params['type'] = $type;
        }
        //关键字
        $keywords = Arr::get($_POST, 'keyword');
        if (!empty($keywords))
        {
            $params['keywords'] = $keywords;
        }
        //产品编号
        $params['pcode'] = $this->_pcode;
        //会员ID
        $params['memberId'] = $this->_memberId;
        //初始化数据
        $data['success'] = false;
        //当前页
        $data['page'] = $params['page'];
        //分页数
        $data['size'] = $params['pageSize'];
        //域名
        $params['domain'] = $this->_domain;
        //获取数据
        $result = json_decode(Model_app::curl_post_data(self::APPURL, true, $params));
        if ($result->status === 1)
        {
            $data['count'] = $result->data->count;
            $data['success'] = true;
            $data['app'] = Model_App::data_format($result->data->data);
        }
        echo json_encode($data);
    }

    //购买应用
    public function action_ajax_app_buy()
    {
        //产品编号
        $params['pcode'] = $this->_pcode;
        //会员ID
        $params['memberId'] = $this->_memberId;
        //应用编号
        $params['number'] = Arr::get($_POST, 'number');
        //域名
        $params['domain'] = $this->_domain;

        $data['status'] = 0;
        $result = json_decode(Model_app::curl_post_data(self::APPBUY, true, $params));
        if ($result->status === 1)
        {
            $data['status'] = 1;
            $data['isfree']=$result->isfree;
            $data['url'] = $result->payurl;
        }
        else
        {
            $data['msg'] = $result->msg;
        }
        echo json_encode($data);
    }

    //应用详情
    public function action_info()
    {
        $params['number'] = $this->params['number'];
        $params['pcode'] = $this->_pcode;
        $params['memberId'] = $this->_memberId;
        $params['domain'] = $this->_domain;
        $result = json_decode(Model_app::curl_post_data(self::INFOURL, true, $params));
        $info = array();
        if ($result->status === 1)
        {
            $info = (array)$result->data;
        }
        $this->assign('info', $info);
        $this->display('stourtravel/mall/info');
    }

    //我的应用 view
    public function action_app()
    {
        $this->display('stourtravel/mall/app');
    }

    //我的应用
    public function action_ajax_app_read()
    {
        $params['number'] = $this->params['number'];
        $params['pcode'] = $this->_pcode;
        $params['memberId'] = $this->_memberId;
        $params['domain'] = $this->_domain;
        $result = json_decode(Model_app::curl_post_data(self::MYAPPURL, true, $params));
        $data = array('success' => false);
        $result->status = 1;
        if ($result->status === 1)
        {
            $data['success'] = true;
            $data['app'] = Model_App::data_format($result->data->data, true);
        }
        echo json_encode($data);
    }

    //安装应用
    public function action_app_install()
    {
        set_time_limit(0);

        $data['status'] = 0;
        $number = Arr::get($_POST, 'number');
        //产品code
        $params['pcode'] = Arr::get($_POST, 'pcode');
        //版本
        $params['cVersion'] = '0.0.0.0';
        $downObj = new Model_Upgrade3();
        $downObj->initialise($params);
        $downResult = $downObj->downloadInstaller();
        if (!$downResult['Success'])
        {
            $data['msg'] = $downResult['Message'];
            exit(json_encode($data));
        }

        $name = time();
        $savepath = APPPATH . "/data/patch/";
        $filename = $savepath . "{$name}.zip";
        $unzippath = BASEPATH . "/data/upgradetmp/{$name}";
        if (Common::downloadFile($downResult['Data'], $filename))
        {
            include(PUBLICPATH . '/vendor/zipfolder.php');
            $archive = new ZipFolder();
            $archive->setLoadPath(dirname($filename) . '/');
            $archive->setFile(basename($filename));
            $archive->setSavePath(dirname($unzippath) . '/');
            $extractResult = $archive->openZip();
            if (!$extractResult || Common::isEmptyDir($unzippath))
            {
                $data['msg'] = '升级文件解压失败,升级文件损坏或网站目录及子目录无写权限'; //目录无写权限
                exit(json_encode($data));
            }
            else
            {
                $archive->eraseZip();
            }
            $pickResult = Model_App::pick_file($unzippath);
            if ($pickResult == false)
            {
                $data['msg'] = '提取配置文件失败';
                exit(json_encode($data));
            }
            //执行SQL
            if (file_exists($pickResult['sql']))
            {
                $url = str_ireplace(BASEPATH, $GLOBALS['cfg_basehost'], $pickResult['sql']);
                $flag = Common::http($url);
                if (strlen($flag) > 6)
                {
                    $data['msg'] = '应用数据安装失败' . $flag;
                    exit(json_encode($data));
                }
            }
            //移动文件
            $moveResult = Common::xCopy($unzippath, BASEPATH, true);
            //$moveResult['success'] = true;
            if ($moveResult['success'] == false)
            {
                $data['msg'] = '覆盖文件失败,' . $moveResult['errormsg'];
                exit(json_encode($data));
            }

            //写入数据库
            list($insertId, $rows) = DB::insert('app', array('number','productcode'))->values(array($number,$params['pcode']))->execute();
            if ($rows > 0)
            {
                $appDir = BASEPATH . "/data/appinstall/{$insertId}/";
                if (!file_exists($appDir))
                {
                    if (!mkdir($appDir, 0777, true))
                    {
                        $data['msg'] = "目录 /data/appinstall/{$insertId}/ 创建失败";
                        exit(json_encode($data));
                    }
                }

                if (!Model_App::move_install_files($unzippath, $appDir))
                {
                    $data['msg'] = "目录 /data/appinstall/{$insertId}/ 写文件失败";
                    exit(json_encode($data));
                }
                Common::rrmdir(dirname($unzippath));
            }

            $data['status'] = 1;
            $data['msg'] = '安装成功';
        }
        else
        {
            $data['msg'] = '下载升级包失败!';
        }
        echo json_encode($data);
    }

    //卸载应用
    public function action_app_uninstall()
    {
        $appId = Arr::get($_POST, 'appid');
        //初始化设置
        $msgSuccess = '卸载成功';
        $msgError = '卸载失败';
        $appInstallDir = BASEPATH . "/data/appinstall/{$appId}/";
        $data['status'] = 0;
        $data['msg'] = $msgError;;
        //检测应用文件夹
        if (is_null($appId) || !file_exists($appInstallDir))
        {
            $data['msg'] = $msgError;
            exit(json_encode($data));
        }
        //文件筛选
        $sqlFIles = array();
        $indexFiles = array();
        $handler = opendir($appInstallDir);
        while (false !== ($file = readdir($handler)))
        {
            if (in_array($file, array('.', '..')))
            {
                continue;
            }
            $realFIle = realpath($appInstallDir . $file);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            switch ($extension)
            {
                case 'txt':
                    array_push($indexFiles, $realFIle);
                    break;
                case 'php':
                    array_push($sqlFIles, $realFIle);
                    break;
            }
        }
        closedir($handler);
        //卸载SQL
        if (!empty($sqlFIles))
        {
            sort($sqlFIles, SORT_NUMERIC);
            foreach ($sqlFIles as $k => $v)
            {
                $url = str_ireplace(BASEPATH, $GLOBALS['cfg_basehost'], $v);
                $flag = Common::http($url);
                if (strlen($flag) > 6)
                {
                    $data['msg'] = '数据库卸载失败';
                    exit(json_encode($data));
                }
            }
        }
        //卸载文件
        if (!empty($indexFiles))
        {
            $dirs = array();
            sort($indexFiles, SORT_NUMERIC);
            //删除文件
            foreach ($indexFiles as $k => $v)
            {
                $fileHandler = fopen($v, 'r');
                while (!feof($fileHandler))
                {
                    $filePostion = trim(fgets($fileHandler));
                    $dirs = array_merge($dirs, Model_App::get_parent_dir($filePostion));
                    $file = realpath(BASEPATH . '/' . $filePostion);
                    if (file_exists($file))
                    {
                        is_dir($file) ? array_push($dirs, $file) : unlink($file);
                    }
                }
                fclose($fileHandler);
            }
            $dirs = array_unique($dirs);
            rsort($dirs);
            //删除目录
            foreach ($dirs as $v)
            {
                if (file_exists($v))
                {
                    @rmdir($v);
                }
            }
        }
        //删除应用目录
        $result = Common::rrmdir($appInstallDir);
        if ($result['success'])
        {
            $data['status'] = 1;
            $data['msg'] = $msgSuccess;
        }
        //清除数据库记录
        if ($data['status'] == 1)
        {
            DB::delete('app')->where("id={$appId}")->execute();
        }
        echo json_encode($data);
    }
}