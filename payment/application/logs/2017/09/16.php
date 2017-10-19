<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-16 12:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 12:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}
2017-09-16 12:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 12:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}
2017-09-16 12:44:02 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2017-09-16 12:44:02 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(207): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2017-09-16 12:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 12:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}
2017-09-16 17:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 17:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}
2017-09-16 17:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 17:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}
2017-09-16 17:20:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 17:20:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}
2017-09-16 17:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 17:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}
2017-09-16 17:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-16 17:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#3 {main}