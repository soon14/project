<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-29 10:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-29 10:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#3 {main}
2016-06-29 10:41:59 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-06-29 10:41:59 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('/default/pc/log...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(30): Stourweb_View->__construct('/default/pc/log...', NULL, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/controller.php(38): Stourweb_View::factory('/default/pc/log...')
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/mobile/login.php(39): Stourweb_Controller->display('login')
#4 [internal function]: Controller_Mobile_Login->action_index()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Login))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#9 {main}
2016-06-29 10:42:05 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-06-29 10:42:05 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('/default/pc/log...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(30): Stourweb_View->__construct('/default/pc/log...', NULL, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/controller.php(38): Stourweb_View::factory('/default/pc/log...')
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/mobile/login.php(39): Stourweb_Controller->display('login')
#4 [internal function]: Controller_Mobile_Login->action_index()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Login))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#9 {main}
2016-06-29 17:47:04 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-06-29 17:47:04 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('/default/pc/log...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(30): Stourweb_View->__construct('/default/pc/log...', NULL, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/controller.php(38): Stourweb_View::factory('/default/pc/log...')
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/mobile/login.php(39): Stourweb_Controller->display('login')
#4 [internal function]: Controller_Mobile_Login->action_index()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Login))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#9 {main}
2016-06-29 17:57:04 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-06-29 17:57:04 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('/default/pc/log...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(30): Stourweb_View->__construct('/default/pc/log...', NULL, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/controller.php(38): Stourweb_View::factory('/default/pc/log...')
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/mobile/login.php(39): Stourweb_Controller->display('login')
#4 [internal function]: Controller_Mobile_Login->action_index()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Login))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#9 {main}
2016-06-29 17:58:00 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
2016-06-29 17:58:00 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH/classes/stourweb/view.php [ 324 ]
--
#0 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(187): Stourweb_View->set_filename('/default/pc/log...')
#1 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/view.php(30): Stourweb_View->__construct('/default/pc/log...', NULL, NULL, NULL)
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/stourweb/controller.php(38): Stourweb_View::factory('/default/pc/log...')
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/mobile/login.php(39): Stourweb_Controller->display('login')
#4 [internal function]: Controller_Mobile_Login->action_index()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Login))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#9 {main}