<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-09 14:17:33 --- ERROR: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
2017-10-09 14:17:33 --- STRACE: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(62): WxPayApi::postXmlCurl('<xml><appid><![...', 'https://api.mch...', false, 6)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(56): WxPayApi::unifiedOrder(Object(WxPayUnifiedOrder))
#2 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(207): Pay_Mobile_WxPay->submit(Array)
#3 [internal function]: Controller_Index->action_confirm()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#8 {main}