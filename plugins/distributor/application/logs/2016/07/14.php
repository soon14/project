<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-14 08:26:56 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-07-14 08:26:56 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('/default/pc/log...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/view.php(30): Stourweb_View->__construct('/default/pc/log...', NULL, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/stourweb/controller.php(46): Stourweb_View::factory('/default/pc/log...')
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/mobile/login.php(39): Stourweb_Controller->display('login')
#4 [internal function]: Controller_Mobile_Login->action_index()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Login))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#9 {main}
2016-07-14 11:50:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/member/order.php [ 1 ]
2016-07-14 11:50:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/model/member/order.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}