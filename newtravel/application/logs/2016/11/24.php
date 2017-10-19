<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-24 16:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/cheview/id/1520/typeid/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-11-24 16:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/cheview/id/1520/typeid/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-24 16:54:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Line::get_order_by_ordersn() ~ APPPATH/classes/controller/line.php [ 446 ]
2016-11-24 16:54:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Line::get_order_by_ordersn() ~ APPPATH/classes/controller/line.php [ 446 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}