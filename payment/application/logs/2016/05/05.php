<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-05-05 08:29:25 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-05-05 08:29:25 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-05-05 09:17:36 --- ERROR: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
2016-05-05 09:17:36 --- STRACE: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(93): WxPayApi::postXmlCurl('<xml><appid><![...', 'https://api.mch...', false, 6)
#1 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/jsapi/notify.php(28): WxPayApi::orderQuery(Object(WxPayOrderQuery))
#2 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(58): notify->NotifyProcess(Array, 'OK')
#3 [internal function]: WxPayNotify->NotifyCallBack(Array)
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(19): WxPayApi::notify(Array, 'OK')
#6 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(75): WxPayNotify->Handle(true)
#7 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(33): Pay_Mobile_WxPay->notify_url()
#8 [internal function]: Controller_Callback->action_index()
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#10 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#13 {main}
2016-05-05 09:19:59 --- ERROR: WxPayException [ 0 ]: curl出错，错误码:28 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
2016-05-05 09:19:59 --- STRACE: WxPayException [ 0 ]: curl出错，错误码:28 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(93): WxPayApi::postXmlCurl('<xml><appid><![...', 'https://api.mch...', false, 6)
#1 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/jsapi/notify.php(28): WxPayApi::orderQuery(Object(WxPayOrderQuery))
#2 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(58): notify->NotifyProcess(Array, 'OK')
#3 [internal function]: WxPayNotify->NotifyCallBack(Array)
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(19): WxPayApi::notify(Array, 'OK')
#6 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(75): WxPayNotify->Handle(true)
#7 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(33): Pay_Mobile_WxPay->notify_url()
#8 [internal function]: Controller_Callback->action_index()
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#10 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#13 {main}
2016-05-05 09:20:39 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-05-05 09:20:39 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-05-05 09:20:40 --- ERROR: WxPayException [ 0 ]: curl出错，错误码:28 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
2016-05-05 09:20:40 --- STRACE: WxPayException [ 0 ]: curl出错，错误码:28 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(62): WxPayApi::postXmlCurl('<xml><appid><![...', 'https://api.mch...', false, 6)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(56): WxPayApi::unifiedOrder(Object(WxPayUnifiedOrder))
#2 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#3 [internal function]: Controller_Index->action_confirm()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#8 {main}
2016-05-05 09:21:34 --- ERROR: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
2016-05-05 09:21:34 --- STRACE: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(93): WxPayApi::postXmlCurl('<xml><appid><![...', 'https://api.mch...', false, 6)
#1 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/jsapi/notify.php(28): WxPayApi::orderQuery(Object(WxPayOrderQuery))
#2 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(58): notify->NotifyProcess(Array, 'OK')
#3 [internal function]: WxPayNotify->NotifyCallBack(Array)
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(19): WxPayApi::notify(Array, 'OK')
#6 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(75): WxPayNotify->Handle(true)
#7 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(33): Pay_Mobile_WxPay->notify_url()
#8 [internal function]: Controller_Callback->action_index()
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#10 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#13 {main}
2016-05-05 09:21:45 --- ERROR: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
2016-05-05 09:21:45 --- STRACE: WxPayException [ 0 ]: curl出错，错误码:35 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(62): WxPayApi::postXmlCurl('<xml><appid><![...', 'https://api.mch...', false, 6)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(56): WxPayApi::unifiedOrder(Object(WxPayUnifiedOrder))
#2 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#3 [internal function]: Controller_Index->action_confirm()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#8 {main}
2016-05-05 09:28:44 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-05-05 09:28:44 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-05-05 09:28:53 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-05-05 09:28:53 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-05-05 09:29:08 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-05-05 09:29:08 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}
2016-05-05 10:34:45 --- ERROR: WxPayException [ 0 ]: curl出错，错误码:28 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
2016-05-05 10:34:45 --- STRACE: WxPayException [ 0 ]: curl出错，错误码:28 ~ APPPATH/vendor/mobile/wxpay/lib/WxPay.Api.php [ 564 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(93): WxPayApi::postXmlCurl('<xml><appid><![...', 'https://api.mch...', false, 6)
#1 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/jsapi/notify.php(28): WxPayApi::orderQuery(Object(WxPayOrderQuery))
#2 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(58): notify->NotifyProcess(Array, 'OK')
#3 [internal function]: WxPayNotify->NotifyCallBack(Array)
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/mobile/wxpay/lib/WxPay.Notify.php(19): WxPayApi::notify(Array, 'OK')
#6 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(75): WxPayNotify->Handle(true)
#7 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(33): Pay_Mobile_WxPay->notify_url()
#8 [internal function]: Controller_Callback->action_index()
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#10 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#13 {main}
2016-05-05 10:58:23 --- ERROR: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
2016-05-05 10:58:23 --- STRACE: WxPayException [ 0 ]: 参数错误 ~ APPPATH/vendor/mobile/wxpay/jsapi/index.php [ 77 ]
--
#0 /home/wwwroot/www.aitto.net/payment/application/classes/pay/mobile/wxpay.php(57): JsApiPay->GetJsApiParameters(Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/controller/index.php(96): Pay_Mobile_WxPay->submit(Array)
#2 [internal function]: Controller_Index->action_confirm()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#7 {main}