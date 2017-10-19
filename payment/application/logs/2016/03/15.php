<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-15 10:32:58 --- ERROR: View_Exception [ 0 ]: The requested view default/pc/status could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2016-03-15 10:32:58 --- STRACE: View_Exception [ 0 ]: The requested view default/pc/status could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /data0/htdocs/lvyou/core/system/classes/kohana/view.php(137): Kohana_View->set_filename('default/pc/stat...')
#1 /data0/htdocs/lvyou/core/system/classes/kohana/view.php(30): Kohana_View->__construct('default/pc/stat...', NULL)
#2 /data0/htdocs/lvyou/payment/application/classes/pay/platform.php(19): Kohana_View::factory('default/pc/stat...')
#3 /data0/htdocs/lvyou/payment/application/classes/pay/pc.php(96): Pay_Platform->status(Array)
#4 /data0/htdocs/lvyou/payment/application/classes/controller/status.php(61): Pay_Pc->html(Array)
#5 [internal function]: Controller_Status->action_index()
#6 /data0/htdocs/lvyou/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Status))
#7 /data0/htdocs/lvyou/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /data0/htdocs/lvyou/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /data0/htdocs/lvyou/payment/index.php(132): Kohana_Request->execute()
#10 {main}
2016-03-15 10:34:24 --- ERROR: View_Exception [ 0 ]: The requested view default/pc/status could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2016-03-15 10:34:24 --- STRACE: View_Exception [ 0 ]: The requested view default/pc/status could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /data0/htdocs/lvyou/core/system/classes/kohana/view.php(137): Kohana_View->set_filename('default/pc/stat...')
#1 /data0/htdocs/lvyou/core/system/classes/kohana/view.php(30): Kohana_View->__construct('default/pc/stat...', NULL)
#2 /data0/htdocs/lvyou/payment/application/classes/pay/platform.php(19): Kohana_View::factory('default/pc/stat...')
#3 /data0/htdocs/lvyou/payment/application/classes/pay/pc.php(96): Pay_Platform->status(Array)
#4 /data0/htdocs/lvyou/payment/application/classes/controller/status.php(61): Pay_Pc->html(Array)
#5 [internal function]: Controller_Status->action_index()
#6 /data0/htdocs/lvyou/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Status))
#7 /data0/htdocs/lvyou/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /data0/htdocs/lvyou/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /data0/htdocs/lvyou/payment/index.php(132): Kohana_Request->execute()
#10 {main}