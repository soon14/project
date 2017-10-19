<?php defined('SYSPATH') or die('No direct script access.');
require_once dirname(dirname(__FILE__)) . "/lib/WxPay.Api.php";
require_once dirname(dirname(__FILE__)) . '/lib/WxPay.Notify.php';

/**
 * 微信支付回调类
 * Class notify
 */
class notify extends WxPayNotify
{
    /**
     * 重写父类异步验证
     * @param array $data
     * @param string $msg
     * @return bool
     */
    public function NotifyProcess($data, &$msg)
    {
        $bool = false;
        //返回状态码、业务结果
        if (array_key_exists("return_code", $data) && array_key_exists("result_code", $data) && $data['return_code'] == 'SUCCESS' && $data['result_code'] == 'SUCCESS')
        {
            //查询订单
            if (isset($data["out_trade_no"]) && $data["out_trade_no"] != "")
            {
                $input = new WxPayOrderQuery();
                $input->SetOut_trade_no($data["out_trade_no"]);//商户订单号
                $result = WxPayApi::orderQuery($input);
                $tip = '信息:微信公众号交易,订单金额与实际支付不一致';
                if (isset($result['total_fee']) && Common::total_fee_confirm($data["out_trade_no"], $result['total_fee'] / 100, $tip))
                {
                    $bool = true;
                    $method = Common::C('mobile');
                    Common::pay_success($data["out_trade_no"], $method['method']['8']['name']);
                }
            }
            else
            {
                new Pay_Exception("信息:微信公众号下单,未会返回商品订单号");
            }
        }
        else
        {
            new Pay_Exception("信息:微信公众号交易错误(msg_{$data['return_msg']})");
        }
        return $bool;
    }
}