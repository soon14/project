<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Config extends ORM
{
    /**
     * 检测支付证书是否存在或证书目录
     * @param $config 系统配置
     * @param bool|false $returnCertPath 返回证书目录
     * @return array
     */
    public static function is_exists_certs($config, $returnCertPath = false)
    {
        $certsPath = array(
            //4.0
            array(
                'chinabank' => array(
                    '/thirdpay/yinlian/certs/',
                ),
                'wxpay' => array(
                    '/thirdpay/weixinpay/cert/'
                )
            ),
            //4.0PC与5.0Mobile
            array(
                'chinabank' => array(
                    //'/thirdpay/yinlian/certs/', 4.0与5.0SDK不同
                    '/payment/application/vendor/pc/chinabank/certs/'
                ),
                'wxpay' => array(
                    '/thirdpay/weixinpay/cert/',
                    '/payment/application/vendor/pc/wxpay/cert/'
                )
            ),
            //5.0
            array(
                'chinabank' => array('/payment/application/vendor/pc/chinabank/certs/'),
                'wxpay' => array('/payment/application/vendor/pc/wxpay/cert/'),
                'bill' => array('/payment/application/vendor/pc/bill/cert/'),
            )
        );
        $certs = array(
            'wxpay' => array('apiclient_cert.p12', 'apiclient_cert.pem', 'apiclient_key.pem', 'rootca.pem'),
            'chinabank' => array('zhengshu.pfx'),
            'bill' => array('public-rsa.cer'),
        );
        //根据版本选择需要检测的目录
        if ($config['cfg_pc_version'] == 0 && $config['cfg_mobile_version'] == 0)
        {
            $certsPath = $certsPath[0];
        }
        else if ($config['cfg_pc_version'] == 0 && $config['cfg_mobile_version'] == 1)
        {
            $certsPath = $certsPath[1];
        }
        else
        {
            $certsPath = $certsPath[2];
        }
        //返回上传证书目录
        if ($returnCertPath)
        {
            return $certsPath;
        }
        //遍历文件
        foreach ($certsPath as $k => $v)
        {
            $bool = false;
            foreach ($v as $sub)
            {
                if ($bool)
                {
                    break;
                }
                foreach ($certs[$k] as $filename)
                {
                    if (!file_exists(BASEPATH . $sub . $filename))
                    {
                        $bool = true;
                        break;
                    }

                }
            }
            if ($bool)
            {
                $info[$k] = false;
                continue;
            }
            else
            {
                $info[$k] = true;
            }
        }
        //返回检测结果
        return $info;
    }
}