<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-24 13:39:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::init_config() ~ APPPATH\bootstrap.php [ 155 ]
2016-01-24 13:39:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::init_config() ~ APPPATH\bootstrap.php [ 155 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-01-24 13:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 13:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 13:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 13:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 13:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 13:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 13:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(10): Kohana_Request->execute()
#3 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#5 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#6 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#7 [internal function]: Controller_PC_Index->action_index()
#8 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#12 {main}
2016-01-24 13:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 13:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(10): Kohana_Request->execute()
#3 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#5 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#6 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#7 [internal function]: Controller_PC_Index->action_index()
#8 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#12 {main}
2016-01-24 13:53:28 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:53:28 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:21 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:21 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:22 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:22 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:22 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:22 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:22 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:22 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:22 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:22 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:22 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:22 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:23 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:23 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:23 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:23 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:23 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:23 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:54:24 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:54:24 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:58:28 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:58:28 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:58:29 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:58:29 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 13:58:29 --- ERROR: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-24 13:58:29 --- STRACE: View_Exception [ 0 ]: The requested view pc/pub/sidemenu could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('pc/pub/sidemenu')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('pc/pub/sidemenu', Array)
#2 D:\web\standsmore\supplier\application\classes\stourweb\view.php(581): Stourweb_View::factory('pc/pub/sidemenu', Array)
#3 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(11): Stourweb_View::template('pc/pub/sidemenu')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#7 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#8 [internal function]: Controller_PC_Index->action_index()
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#13 {main}
2016-01-24 14:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/pub/footer was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-01-24 14:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/pub/footer was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\index.php(162): Kohana_Request->execute()
#3 D:\web\standsmore\supplier\application\classes\stourweb\view.php(74): include('D:\web\standsmo...')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\standsmo...', Array)
#5 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(43): Stourweb_View->render()
#6 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(19): Stourweb_Controller->display('index')
#7 [internal function]: Controller_PC_Index->action_index()
#8 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#12 {main}
2016-01-24 14:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/public/default/pc/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 14:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/public/default/pc/images/logo.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 15:09:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'cfg_webname' in 'field list' [ SELECT cfg_webname FROM `sline_sysconfig` WHERE varname='' AND webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2016-01-24 15:09:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'cfg_webname' in 'field list' [ SELECT cfg_webname FROM `sline_sysconfig` WHERE varname='' AND webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\supplier\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT cfg_webn...', false, Array)
#1 D:\web\standsmore\supplier\application\classes\common.php(776): Kohana_Database_Query->execute()
#2 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(24): Common::get_sys_para('cfg_webname')
#3 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(15): Stourweb_Controller->before()
#4 [internal function]: Controller_PC_Index->before()
#5 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_PC_Index))
#6 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#9 {main}
2016-01-24 15:10:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'cfg_webname' in 'field list' [ SELECT cfg_webname FROM `sline_sysconfig` WHERE varname='cfg_webname' AND webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2016-01-24 15:10:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'cfg_webname' in 'field list' [ SELECT cfg_webname FROM `sline_sysconfig` WHERE varname='cfg_webname' AND webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\supplier\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT cfg_webn...', false, Array)
#1 D:\web\standsmore\supplier\application\classes\common.php(776): Kohana_Database_Query->execute()
#2 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(24): Common::get_sys_para('cfg_webname')
#3 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(15): Stourweb_Controller->before()
#4 [internal function]: Controller_PC_Index->before()
#5 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_PC_Index))
#6 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#9 {main}
2016-01-24 15:10:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'cfg_webname' in 'field list' [ SELECT cfg_webname FROM `sline_sysconfig` WHERE varname='cfg_webname' AND webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2016-01-24 15:10:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'cfg_webname' in 'field list' [ SELECT cfg_webname FROM `sline_sysconfig` WHERE varname='cfg_webname' AND webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\supplier\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT cfg_webn...', false, Array)
#1 D:\web\standsmore\supplier\application\classes\common.php(776): Kohana_Database_Query->execute()
#2 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(24): Common::get_sys_para('cfg_webname')
#3 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(15): Stourweb_Controller->before()
#4 [internal function]: Controller_PC_Index->before()
#5 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_PC_Index))
#6 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#9 {main}
2016-01-24 16:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/pc/userinfo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 16:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/pc/userinfo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 16:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/userinfo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 16:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/userinfo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 16:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/userinfo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 16:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/userinfo was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}
2016-01-24 16:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-24 16:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\userinfo.php(11): Kohana_Request->execute()
#3 D:\web\standsmore\supplier\application\classes\stourweb\view.php(74): include('D:\web\standsmo...')
#4 D:\web\standsmore\supplier\application\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\standsmo...', Array)
#5 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(44): Stourweb_View->render()
#6 D:\web\standsmore\supplier\application\classes\controller\pc\index.php(44): Stourweb_Controller->display('userinfo')
#7 [internal function]: Controller_PC_Index->action_userinfo()
#8 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_PC_Index))
#9 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#12 {main}
2016-01-24 18:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/index/qulify/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-01-24 18:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/index/qulify/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#3 {main}