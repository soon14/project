<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-28 10:33:35 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-04-28 10:33:35 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-04-28 10:35:12 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-04-28 10:35:12 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-04-28 10:41:36 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-04-28 10:41:36 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-04-28 17:24:33 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 339 ]
2016-04-28 17:24:33 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 339 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/view.php(228): Kohana_View->render()
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/response.php(160): Kohana_View->__toString()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(101): Kohana_Response->body(Object(View))
#3 [internal function]: Controller_Index->action_confirm()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#8 {main}
2016-04-28 17:25:55 --- ERROR: ErrorException [ 1 ]: Class 'Pay_Mobile_WxPay' not found ~ APPPATH/classes/controller/index.php [ 77 ]
2016-04-28 17:25:55 --- STRACE: ErrorException [ 1 ]: Class 'Pay_Mobile_WxPay' not found ~ APPPATH/classes/controller/index.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-04-28 17:26:00 --- ERROR: ErrorException [ 1 ]: Class 'Pay_Mobile_WxPay' not found ~ APPPATH/classes/controller/index.php [ 77 ]
2016-04-28 17:26:00 --- STRACE: ErrorException [ 1 ]: Class 'Pay_Mobile_WxPay' not found ~ APPPATH/classes/controller/index.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}