<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-27 17:19:03 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-07-27 17:19:03 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(207): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-07-27 17:19:15 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-07-27 17:19:15 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(207): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-07-27 17:50:53 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-07-27 17:50:53 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(207): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}