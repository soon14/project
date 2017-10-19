<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-29 08:51:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 08:51:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(303): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(199): Model_Member_Order::get_order_detail()
#3 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05533522598092', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05533522598092', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#6 [internal function]: WxPayNotify->NotifyCallBack(Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#8 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#9 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#10 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#11 [internal function]: Controller_Callback->action_index()
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#15 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#16 {main}
2016-07-29 08:54:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 08:54:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(304): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(199): Model_Member_Order::get_order_detail()
#3 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05536694458043', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05536694458043', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#6 [internal function]: WxPayNotify->NotifyCallBack(Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#8 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#9 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#10 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#11 [internal function]: Controller_Callback->action_index()
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#15 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#16 {main}
2016-07-29 08:59:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 08:59:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(304): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(199): Model_Member_Order::get_order_detail()
#3 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05539165478584', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05539165478584', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#6 [internal function]: WxPayNotify->NotifyCallBack(Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#8 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#9 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#10 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#11 [internal function]: Controller_Callback->action_index()
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#15 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#16 {main}
2016-07-29 09:10:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 09:10:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(304): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(199): Model_Member_Order::get_order_detail()
#3 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05545801851568', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05545801851568', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#5 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#6 [internal function]: WxPayNotify->NotifyCallBack(Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#8 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#9 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#10 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#11 [internal function]: Controller_Callback->action_index()
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#15 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#16 {main}
2016-07-29 09:47:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 09:47:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05568221577194', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05568221577194', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 09:50:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 09:50:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05569841798037', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05569841798037', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 09:55:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 09:55:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05572740422290', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05572740422290', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 09:58:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 09:58:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05574834016824', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05574834016824', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 10:05:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 10:05:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05579068453763', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05579068453763', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 10:07:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 10:07:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05580432024069', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05580432024069', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 10:08:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 10:08:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05581135253095', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05581135253095', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 10:09:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 10:09:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05581755098990', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05581755098990', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 10:14:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 10:14:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05584395658855', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05584395658855', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 10:15:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-29 10:15:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member` WHERE mid =  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(205): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05585177950398', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#3 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05585177950398', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(119): notify->NotifyProcess(Array, 'OK')
#5 [internal function]: WxPayNotify->NotifyCallBack(Array)
#6 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Api.php(423): call_user_func(Array, Array)
#7 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/lib/WxPay.Notify.php(37): WxPayApi::notify(Array, 'OK')
#8 /home/wwwroot/www.aitto.net/payment/application/classes/pay/pc/wxpay.php(156): WxPayNotify->Handle(true)
#9 /home/wwwroot/www.aitto.net/payment/application/classes/controller/callback.php(77): Pay_Pc_WxPay->notify_url()
#10 [internal function]: Controller_Callback->action_index()
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Callback))
#12 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 /home/wwwroot/www.aitto.net/payment/index.php(132): Kohana_Request->execute()
#15 {main}
2016-07-29 10:32:57 --- ERROR: ErrorException [ 1 ]: Cannot access private property Base::$user ~ APPPATH/classes/model/member/order.php [ 241 ]
2016-07-29 10:32:57 --- STRACE: ErrorException [ 1 ]: Cannot access private property Base::$user ~ APPPATH/classes/model/member/order.php [ 241 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-29 10:34:47 --- ERROR: ErrorException [ 1 ]: Cannot access private property Base::$user ~ APPPATH/classes/model/member/order.php [ 241 ]
2016-07-29 10:34:47 --- STRACE: ErrorException [ 1 ]: Cannot access private property Base::$user ~ APPPATH/classes/model/member/order.php [ 241 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-29 10:37:24 --- ERROR: ErrorException [ 1 ]: Class 'Base' not found ~ APPPATH/classes/model/member/order.php [ 212 ]
2016-07-29 10:37:24 --- STRACE: ErrorException [ 1 ]: Class 'Base' not found ~ APPPATH/classes/model/member/order.php [ 212 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}