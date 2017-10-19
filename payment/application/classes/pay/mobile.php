<?php defined('SYSPATH') or die('No direct script access.');



/**

 * mobile 支付类

 * Class Pay_Mobile

 */

class Pay_Mobile extends Pay_Platform

{

    //平台配置

    private $_conf;

    //模板文件

    public $template;

    //不同版本下获取头部底部

    public $content;



    /**

     * 初始化模板

     */

    public function __construct()

    {

        $this->_conf = Common::C('mobile');

        if (empty($this->template))

        {

            $this->template = Common::C('template_dir') . $this->_conf['template'];

        }

        if (empty($this->content))

        {

            $file = APPPATH . 'cache/common/mobile.php';

            if (file_exists($file))

            {

                $this->content = file_get_contents($file);

            }

            else

            {

                if (!file_exists(dirname($file)))

                {

                    mkdir(dirname($file), 0777, true);

                }

                $this->content = $this->file_get_content(Common::get_main_host() . '/phone/pub/pay');

                file_put_contents($file, $this->content);

            }

        }

    }



    /**

     * 支付方式

     * @return mixed

     */

    public function pay_method($paytype=null)

    {

        $rs = array();

        //微信客户端

        $isWxClient = 0;

        $order = array();

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false)

        {

            $isWxClient = 1;

        }

        //支持的支付方式

        $support = explode(',', Common::C('cfg_pay_type'));

        foreach ($this->_conf['method'] as $k => $v)

        {

            if (in_array($k, $support) || isset($v['extend']))

            {

                $v['id'] = $k;

                if ($isWxClient == 0 && $k == 8)

                {

                    continue;

                }

                $rs["{$k}"] = $v;

                $order[] = isset($v['order']) ? $v['order'] : 0;

            }

        }

        //未开启任何支付

        if (empty($rs))

        {

            return;

        }

        array_multisort($order, SORT_ASC, $rs);

        //默认选择第一个
        if($paytype==4){// 封冀蜀 07.27 修改
            $rs[2]['selected'] = true;
        }else{
            $rs[1]['selected'] = true;
        }


        return $rs;

    }



    /**

     * 模板解析后的html

     * @param $info

     * @return string

     */

    public function html($info)

    {

        $info['cfg_webname'] = Common::C('cfg_webname');

        return $this->status($info);

    }

}