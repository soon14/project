<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-21 14:17:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getWebList() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 93 ]
2016-07-21 14:17:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getWebList() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 14:23:18 --- ERROR: View_Exception [ 0 ]: The requested view default/stourtravel/public/public_js could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-07-21 14:23:18 --- STRACE: View_Exception [ 0 ]: The requested view default/stourtravel/public/public_js could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('default/stourtr...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(30): Stourweb_View->__construct('default/stourtr...', Array, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(634): Stourweb_View::factory('default/stourtr...', Array)
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/cache/tplcache/default/pc/order/excel.php(6): Stourweb_View::template('stourtravel/pub...')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(74): include('/home/wwwroot/w...')
#5 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(417): Stourweb_View->capture('/home/wwwroot/w...', Array)
#6 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/controller.php(54): Stourweb_View->render()
#7 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(121): Stourweb_Controller->display('order/excel')
#8 [internal function]: Controller_Pc_Order->action_excel()
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#10 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#13 {main}
2016-07-21 14:25:59 --- ERROR: View_Exception [ 0 ]: The requested view default/stourtravel/public/public_js could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-07-21 14:25:59 --- STRACE: View_Exception [ 0 ]: The requested view default/stourtravel/public/public_js could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('default/stourtr...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(30): Stourweb_View->__construct('default/stourtr...', Array, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(634): Stourweb_View::factory('default/stourtr...', Array)
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/cache/tplcache/default/pc/order/excel.php(6): Stourweb_View::template('stourtravel/pub...')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(74): include('/home/wwwroot/w...')
#5 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(417): Stourweb_View->capture('/home/wwwroot/w...', Array)
#6 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/controller.php(54): Stourweb_View->render()
#7 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(121): Stourweb_Controller->display('order/excel')
#8 [internal function]: Controller_Pc_Order->action_excel()
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#10 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#13 {main}
2016-07-21 14:26:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getCss() ~ APPPATH/cache/tplcache/default/pc/order/excel.php [ 6 ]
2016-07-21 14:26:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getCss() ~ APPPATH/cache/tplcache/default/pc/order/excel.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 14:41:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/public/public_js.php [ 1 ]
2016-07-21 14:41:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/public/public_js.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 14:42:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/public/public_js.php [ 1 ]
2016-07-21 14:42:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/public/public_js.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 14:44:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/public/public_js.php [ 1 ]
2016-07-21 14:44:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/public/public_js.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 15:58:11 --- ERROR: View_Exception [ 0 ]: The requested view default/stourtravel/public/public_js could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-07-21 15:58:11 --- STRACE: View_Exception [ 0 ]: The requested view default/stourtravel/public/public_js could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('default/stourtr...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(30): Stourweb_View->__construct('default/stourtr...', Array, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(634): Stourweb_View::factory('default/stourtr...', Array)
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/cache/tplcache/default/pc/order/all.php(6): Stourweb_View::template('stourtravel/pub...')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(74): include('/home/wwwroot/w...')
#5 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(417): Stourweb_View->capture('/home/wwwroot/w...', Array)
#6 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/controller.php(54): Stourweb_View->render()
#7 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(81): Stourweb_Controller->display('order/all')
#8 [internal function]: Controller_Pc_Order->action_all()
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#10 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#13 {main}
2016-07-21 15:59:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 6 ]
2016-07-21 15:59:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 16:04:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 6 ]
2016-07-21 16:04:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 16:05:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 6 ]
2016-07-21 16:05:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getScript() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 16:05:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getCss() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 12 ]
2016-07-21 16:05:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getCss() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-21 16:11:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getWebList() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 23 ]
2016-07-21 16:11:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getWebList() ~ APPPATH/cache/tplcache/default/pc/order/all.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}