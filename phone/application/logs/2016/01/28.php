<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-28 09:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL demo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-28 09:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL demo/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2016-01-28 09:55:58 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-28 09:55:58 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\phone\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('index')
#1 D:\web\standsmore\phone\application\classes\stourweb\view.php(30): Stourweb_View->__construct('index', NULL)
#2 D:\web\standsmore\phone\application\classes\stourweb\controller.php(50): Stourweb_View::factory('index')
#3 D:\web\standsmore\phone\application\classes\controller\index.php(23): Stourweb_Controller->display('index')
#4 [internal function]: Controller_Index->action_index()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2016-01-28 09:56:16 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-28 09:56:16 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\phone\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('index')
#1 D:\web\standsmore\phone\application\classes\stourweb\view.php(30): Stourweb_View->__construct('index', NULL)
#2 D:\web\standsmore\phone\application\classes\stourweb\controller.php(50): Stourweb_View::factory('index')
#3 D:\web\standsmore\phone\application\classes\controller\index.php(23): Stourweb_Controller->display('index')
#4 [internal function]: Controller_Index->action_index()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2016-01-28 09:56:17 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2016-01-28 09:56:17 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\phone\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('index')
#1 D:\web\standsmore\phone\application\classes\stourweb\view.php(30): Stourweb_View->__construct('index', NULL)
#2 D:\web\standsmore\phone\application\classes\stourweb\controller.php(50): Stourweb_View::factory('index')
#3 D:\web\standsmore\phone\application\classes\controller\index.php(23): Stourweb_Controller->display('index')
#4 [internal function]: Controller_Index->action_index()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2016-01-28 09:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-28 09:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}