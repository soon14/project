<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-28 17:54:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-28 17:54:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(297): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(199): Model_Member_Order::get_order_detail()
#3 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05996366238541', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05996366238541', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
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
2016-07-28 17:57:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-28 17:57:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT * FROM `sline_member_order` WHERE ordersn= ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(298): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/payment/application/classes/model/member/order.php(199): Model_Member_Order::get_order_detail()
#3 /home/wwwroot/www.aitto.net/payment/application/classes/common.php(726): Model_Member_Order::change_order('05998049365571', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#4 /home/wwwroot/www.aitto.net/payment/application/vendor/pc/wxpay/native/notify.php(35): Common::pay_success('05998049365571', '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
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