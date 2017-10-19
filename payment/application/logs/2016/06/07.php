<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-07 15:42:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
2016-06-07 15:42:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-06-07 15:43:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
2016-06-07 15:43:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-06-07 15:43:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
2016-06-07 15:43:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-06-07 15:45:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
2016-06-07 15:45:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-06-07 15:47:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
2016-06-07 15:47:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-06-07 15:49:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
2016-06-07 15:49:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/controller/index.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-06-07 16:02:15 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-06-07 16:02:15 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-06-07 16:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-07 16:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ] was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}