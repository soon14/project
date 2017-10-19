<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_App extends ORM
{


    /**
     * 格式化数据
     * @param $data
     * @return mixed
     */
    public static function data_format($data, $isUpdateCheck = false)
    {
        $appinstallresult = DB::select()->from('app')->execute()->as_array();
        if (empty($appinstallresult))
        {
            return $data;
        }

        $result = array();

        foreach ($data as $dataitem)
        {
            $app = (array)$dataitem;
            foreach ($appinstallresult as $v)
            {
                $app['id'] = $app['number'];
                if ($app['isBuy'] === 1)
                {
                    if ($app['number'] == $v['number'])
                    {
                        $app['isInstall'] = true;
                        $app['id'] = $v['id'];

                        break;
                    }
                }
            }

            array_push($result, (object)$app);
        }

        return $result;
    }

    /**
     * 获取远程数据
     * @param $url
     * @param bool|true $isPost
     * @param null $data
     * @return mixed
     */
    public static function curl_post_data($url, $isPost = false, $data = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if ($isPost)
        {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    /**
     * 移动文件
     * @param $unzippath
     * @return bool|string
     */
    public static function pick_file($unzippath)
    {
        $files = array('FileManifest.txt', 'installer.ini', 'sql.php', 'unsql.php');
        $dir = $unzippath . '_temp';
        if (!is_dir($dir) && !mkdir($dir, 0777, true))
        {
            return false;
        }
        foreach ($files as $v)
        {
            $org = $unzippath . "/{$v}";
            $dist = $dir . "/{$v}";
            if (file_exists($org))
            {
                if (!rename($org, $dist))
                {
                    return false;
                }
            }
        }
        return array('distDir' => $dir, 'sql' => $dir . '/sql.php');
    }

    /**
     * 移动文件
     * @param $unzippath
     * @param $distDir
     * @param string $version
     * @return bool
     */
    public static function move_install_files($unzippath, $distDir, $version = '0.0.0.0')
    {
        $bool = true;
        $files = array('FileManifest.txt', 'installer.ini', 'unsql.php');
        foreach ($files as $v)
        {
            $orgFile = $unzippath . '_temp' . "/{$v}";
            $distFile = $distDir . "/{$v}";
            if (!file_exists($orgFile))
            {
                continue;
            }
            $ext = pathinfo($v, PATHINFO_EXTENSION);
            if ($ext == 'php')
            {
                $distFile = $distDir . "/{$version}.php";
            }
			if ($ext == 'txt')
            {
                $distFile = $distDir . "/{$version}.txt";
            }
            if (!rename($orgFile, $distFile))
            {
                $bool = false;
                break;
            }
        }
        return $bool;
    }

    /**
     * 获取目录
     * @param $dir
     * @return array
     */
    public static function get_parent_dir($dir)
    {
        $dirs = array();
        $count = substr_count($dir, '/');
        $dir = BASEPATH . '/' . $dir;
        if ($count < 1)
        {
            $dirs[] = $dir;
            return $dirs;
        }
        for ($i = 0; $i < $count - 1; $i++)
        {
            $dirs[] = $dir = dirname($dir);
        }
        return $dirs;
    }

    /**
     * 判断指定pcode的应用是否已经安装
     * @param $dir
     * @return array
     */
    public static function is_app_installed($pcode)
    {
        $result = DB::select()->from('app')->where("productcode='{$pcode}'")->execute()->as_array();
        return !empty($result);
    }
}