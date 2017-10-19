<?php

/**
 * 动态缩率图
 * Class Image
 */
class Image
{
    private $_root;
    private $_path;
    private static $_instance = null;

    private function __construct()
    {
        $this->_root = dirname(dirname(__FILE__));
        $this->_path = $this->_root . '/data/thumb/{dirname}/';
    }

    //单一实列
    public static function get_instance()
    {
        if (is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    //生成缩率图
    public function thumb()
    {
        $params = $this->_pareurl();
        if (!$params)
        {
            return;
        }
        //缩率图存
        if (!file_exists($params['thumb']))
        {
            $params = $this->_make_thumb($params);
        }
        //输出图片
        header("Content-type: {$params['mime']}");
        ob_clean();
        echo file_get_contents($params['thumb']);
    }

    //解析参数
    private function _pareurl()
    {
        $rs = array();
        if (strpos($_SERVER['QUERY_STRING'], '/') !== 0)
        {
            $_SERVER['QUERY_STRING'] = '/' . $_SERVER['QUERY_STRING'];
        }
        if (!preg_match('~_(\d+)x(\d+)~i', $_SERVER['QUERY_STRING'], $result))
        {
            return false;
        }
        list($size, $rs['width'], $rs['height']) = $result;
        $rs['file'] = $this->_root . str_replace($size, '', $_SERVER['QUERY_STRING']);
        if (!file_exists($rs['file']) || !getimagesize($rs['file']))
        {
            return false;
        }
        //缩率图路径
        $info = pathinfo($rs['file']);
        $rs['ext'] = $info['extension'];
        $rs['thumb'] = str_replace('{dirname}', ltrim($size, '_'), $this->_path) . md5($rs['file']) . ".{$info['extension']}";
        //原图信息
        $info = getimagesize($rs['file']);
        $rs['mime'] = $info['mime'];
        $rs['ext'] = $this->_ext($info['2']);
        list($rs['sWidth'], $rs['sHeight']) = $info;
        //计算实际
        if ($rs['width'] > $rs['sWidth'])
        {
            $rs['width'] = $rs['sWidth'];
        }
        if ($rs['height'] > $rs['sHeight'])
        {
            $rs['height'] = $rs['sHeight'];
        }
        if ($rs['height'] >= $rs['sHeight'] && $rs['width'] >= $rs['sWidth'])
        {
            $rs['thumb'] = $rs['file'];
        }
        return $rs;
    }

    //生成缩率图
    private function _make_thumb($params)
    {
        $params = $this->_size($params);
        switch ($params['ext'])
        {
            case 'png':

                $func = 'imagepng';
                $source = imagecreatefrompng($params['file']);
                break;
            case 'gif':
                $func = 'imagegif';
                $source = imagecreatefromgif($params['file']);
                break;
            default:
                $func = 'imagejpeg';
                $source = imagecreatefromjpeg($params['file']);
        }
        $scale = imagecreatetruecolor($params['tWidth'], $params['tHeight']);
        imagealphablending($scale, false);
        imagesavealpha($scale, true);
        imagecopyresampled($scale, $source, 0, 0, 0, 0, $params['tWidth'], $params['tHeight'], $params['sWidth'], $params['sHeight']);
        $thumb = imagecreatetruecolor($params['width'], $params['height']);
        imagealphablending($thumb, false);
        imagesavealpha($thumb, true);
        imagecopyresampled($thumb, $scale, 0, 0, 0, 0, $params['tWidth'], $params['tHeight'], $params['tWidth'], $params['tHeight']);
        //生成目录
        $thumbDir = dirname($params['thumb']);
        if (!file_exists($thumbDir))
        {
            mkdir($thumbDir, 0777, true);
        }
        $func == 'imagejpeg' ? $func($thumb, $params['thumb'], 95) : $func($thumb, $params['thumb']);
        //释放资源
        imagedestroy($source);
        imagedestroy($thumb);
        return $params;
    }

    //缩率图尺寸
    private function _size($params)
    {
        if($params['height'] == $params['sHeight'] || $params['width'] == $params['sWidth'])
        {
            //一边与原图相等
            $params['tWidth'] = $params['width'];
            $params['tHeight'] = $params['height'];
            if ($params['height'] == $params['sHeight'])
            {
                $params['sWidth'] = $params['width'];
            }
            else
            {
                $params['sHeight'] = $params['height'];
            }
        }
        else
        {
            if (!$params['height'])
            {
                //定宽
                $percent = $params['width'] / $params['sWidth'];
                $params['height'] = floor($percent * $params['sHeight']);
            }
            else if (!$params['width'])
            {
                //定高
                $percent = $params['height'] / $params['sHeight'];
                $params['width'] = floor($percent * $params['sWidth']);
            }
            else
            {
                //两边均不同
                $percent = $params['width'] / $params['sWidth'];
                while (true)
                {
                    if ($percent * $params['sWidth'] > $params['width'] && $percent * $params['sHeight'] > $params['height'])
                    {
                        break;
                    }
                    $percent += 0.001;
                }
            }
            $params['tWidth'] = floor($percent * $params['sWidth']);
            $params['tHeight'] = floor($percent * $params['sHeight']);
        }
        return $params;
    }
    //返回图片格式.
    private function _ext($param)
    {
        $ext = '';
        switch($param)
        {
            case 3:
                $ext = 'png';
                break;
            case 1:
                $ext = 'gif';
                break;
            default:
                $ext = '';
        }
        return $ext;
    }
    //end
}
//防止jpeg生成图片时的报错.
ini_set('gd.jpeg_ignore_warning', 1);
$img = Image::get_instance();
$img->thumb();
