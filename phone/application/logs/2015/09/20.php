<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-20 08:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 08:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 08:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 08:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\line\index.php(14): Stourweb_Controller->display('index')
#7 [internal function]: Controller_Line_Index->action_index()
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line_Index))
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#12 {main}
2015-09-20 08:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 08:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\line\index.php(14): Stourweb_Controller->display('index')
#7 [internal function]: Controller_Line_Index->action_index()
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line_Index))
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#12 {main}
2015-09-20 08:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 08:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\line\index.php(14): Stourweb_Controller->display('index')
#7 [internal function]: Controller_Line_Index->action_index()
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line_Index))
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#12 {main}
2015-09-20 08:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 08:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\line\index.php(14): Stourweb_Controller->display('index')
#7 [internal function]: Controller_Line_Index->action_index()
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line_Index))
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#12 {main}
2015-09-20 08:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 08:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\line\index.php(14): Stourweb_Controller->display('index')
#7 [internal function]: Controller_Line_Index->action_index()
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line_Index))
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#12 {main}
2015-09-20 08:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 08:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/menu/msg/good was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\line\index.php(14): Stourweb_Controller->display('index')
#7 [internal function]: Controller_Line_Index->action_index()
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line_Index))
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#12 {main}
2015-09-20 09:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:02:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:02:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:04:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:04:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/logi/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/logi/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:06:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/menu/msg/good ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:06:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/menu/msg/good ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#4 D:\wamp\www\iphone\develop\application\classes\controller\line\index.php(14): Stourweb_Controller->display('index')
#5 [internal function]: Controller_Line_Index->action_index()
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line_Index))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#10 {main}
2015-09-20 09:07:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/menu/msg/good ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:07:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/menu/msg/good ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#4 D:\wamp\www\iphone\develop\application\classes\controller\index.php(17): Stourweb_Controller->display('default/index')
#5 [internal function]: Controller_Index->action_index()
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#10 {main}
2015-09-20 09:07:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:07:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:21:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/css/amazeui.css ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:21:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/css/amazeui.css ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:23:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::getCss() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:23:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::getCss() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:26:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:26:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
2015-09-20 09:27:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::css() ~ APPPATH\cache\tplcache\default\member\find.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:30:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:30:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:35:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:35:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:40:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::cache_config() ~ APPPATH\bootstrap.php [ 157 ]
2015-09-20 09:40:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::cache_config() ~ APPPATH\bootstrap.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 09:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 09:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 09:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: message ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 09:52:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/menu/msg/good ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 09:52:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index/menu/msg/good ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\application\cache\tplcache\default\index.php(11): Kohana_Request->execute()
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(51): Stourweb_View->render()
#4 D:\wamp\www\iphone\develop\application\classes\controller\index.php(17): Stourweb_Controller->display('default/index')
#5 [internal function]: Controller_Index->action_index()
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#10 {main}
2015-09-20 09:56:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\customize.php [ 25 ]
2015-09-20 09:56:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\customize.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 10:00:42 --- ERROR: View_Exception [ 0 ]: The requested view message could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-09-20 10:00:42 --- STRACE: View_Exception [ 0 ]: The requested view message could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\view.php(137): Kohana_View->set_filename('message')
#1 D:\wamp\www\iphone\develop\system\classes\kohana\view.php(30): Kohana_View->__construct('message', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\customize.php(25): Kohana_View::factory('message')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(11): Customize::message()
#4 [internal function]: Controller_Member_Find->action_index()
#5 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#9 {main}
2015-09-20 10:00:45 --- ERROR: View_Exception [ 0 ]: The requested view message could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-09-20 10:00:45 --- STRACE: View_Exception [ 0 ]: The requested view message could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\view.php(137): Kohana_View->set_filename('message')
#1 D:\wamp\www\iphone\develop\system\classes\kohana\view.php(30): Kohana_View->__construct('message', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\customize.php(25): Kohana_View::factory('message')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(11): Customize::message()
#4 [internal function]: Controller_Member_Find->action_index()
#5 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#9 {main}
2015-09-20 10:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 10:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 10:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 10:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 10:01:44 --- ERROR: View_Exception [ 0 ]: The requested view message could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2015-09-20 10:01:44 --- STRACE: View_Exception [ 0 ]: The requested view message could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\view.php(137): Kohana_View->set_filename('message')
#1 D:\wamp\www\iphone\develop\system\classes\kohana\view.php(30): Kohana_View->__construct('message', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\customize.php(25): Kohana_View::factory('message')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(11): Customize::message()
#4 [internal function]: Controller_Member_Find->action_index()
#5 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#9 {main}
2015-09-20 10:02:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::current() ~ APPPATH\classes\customize.php [ 27 ]
2015-09-20 10:02:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::current() ~ APPPATH\classes\customize.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 10:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:04:50 --- ERROR: View_Exception [ 0 ]: The requested view default/


    
    提示


{$message}

 could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2015-09-20 10:04:50 --- STRACE: View_Exception [ 0 ]: The requested view default/


    
    提示


{$message}

 could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/<!docty...')
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/<!docty...', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(44): Stourweb_View::factory('default/<!docty...')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(12): Stourweb_Controller->display(Object(View))
#4 [internal function]: Controller_Member_Find->action_index()
#5 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#9 {main}
2015-09-20 10:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:16:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:16:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 10:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 10:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/{cfg_cmspath}member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 10:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/{cfg_cmspath}member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 10:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:21:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:21:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:21:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:21:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:21:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 10:21:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 10:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:29:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:29:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mobilPhone3.0/images/yzm.gif ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 10:37:52 --- ERROR: View_Exception [ 0 ]: The requested view default/ could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2015-09-20 10:37:52 --- STRACE: View_Exception [ 0 ]: The requested view default/ could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/')
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(49): Stourweb_View::factory('default/')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(33): Stourweb_Controller->display('')
#4 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(20): Controller_Member_Find->find_email()
#5 [internal function]: Controller_Member_Find->action_do()
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#10 {main}
2015-09-20 10:38:19 --- ERROR: View_Exception [ 0 ]: The requested view default/member/email could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2015-09-20 10:38:19 --- STRACE: View_Exception [ 0 ]: The requested view default/member/email could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/member/...')
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/member/...', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(49): Stourweb_View::factory('default/member/...')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(33): Stourweb_Controller->display('member/email')
#4 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(20): Controller_Member_Find->find_email()
#5 [internal function]: Controller_Member_Find->action_do()
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#10 {main}
2015-09-20 10:38:31 --- ERROR: View_Exception [ 0 ]: The requested view default/member/find_mail could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2015-09-20 10:38:31 --- STRACE: View_Exception [ 0 ]: The requested view default/member/find_mail could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/member/...')
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/member/...', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(49): Stourweb_View::factory('default/member/...')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(33): Stourweb_Controller->display('member/find_mai...')
#4 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(20): Controller_Member_Find->find_email()
#5 [internal function]: Controller_Member_Find->action_do()
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#10 {main}
2015-09-20 10:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login_third was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 10:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login_third was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\member\find_email.php(31): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(56): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(33): Stourweb_Controller->display('member/find_ema...')
#7 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(20): Controller_Member_Find->find_email()
#8 [internal function]: Controller_Member_Find->action_do()
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#13 {main}
2015-09-20 10:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login_third was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 10:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login_third was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\application\cache\tplcache\default\member\find_email.php(31): Kohana_Request->execute()
#3 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#4 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#5 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(56): Stourweb_View->render()
#6 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(33): Stourweb_Controller->display('member/find_ema...')
#7 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(20): Controller_Member_Find->find_email()
#8 [internal function]: Controller_Member_Find->action_do()
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#13 {main}
2015-09-20 10:40:55 --- ERROR: View_Exception [ 0 ]: The requested view default/member/third could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2015-09-20 10:40:55 --- STRACE: View_Exception [ 0 ]: The requested view default/member/third could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/member/...')
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/member/...', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(49): Stourweb_View::factory('default/member/...')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\login.php(21): Stourweb_Controller->display('member/third')
#4 [internal function]: Controller_Member_Login->action_third()
#5 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Login))
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\iphone\develop\application\cache\tplcache\default\member\find_email.php(31): Kohana_Request->execute()
#9 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(72): include('D:\wamp\www\iph...')
#10 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\wamp\www\iph...', Array)
#11 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(56): Stourweb_View->render()
#12 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(33): Stourweb_Controller->display('member/find_ema...')
#13 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(20): Controller_Member_Find->find_email()
#14 [internal function]: Controller_Member_Find->action_do()
#15 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#16 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#18 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#19 {main}
2015-09-20 10:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 10:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 12:32:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\member\find.php [ 29 ]
2015-09-20 12:32:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\member\find.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 12:32:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\member\find.php [ 29 ]
2015-09-20 12:32:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\member\find.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 12:32:51 --- ERROR: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\controller\member\find.php [ 29 ]
2015-09-20 12:32:51 --- STRACE: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\controller\member\find.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 12:33:35 --- ERROR: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\controller\member\find.php [ 29 ]
2015-09-20 12:33:35 --- STRACE: ErrorException [ 1 ]: Cannot access empty property ~ APPPATH\classes\controller\member\find.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 12:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 12:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 12:34:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 12:34:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 12:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 12:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 12:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 12:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 12:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-20 12:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/member/find was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 12:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 12:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 12:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/doreset/d41d8cd98f00b204e9800998ecf8427e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 12:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/doreset/d41d8cd98f00b204e9800998ecf8427e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 12:41:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\member\find.php [ 131 ]
2015-09-20 12:41:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\member\find.php [ 131 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 12:41:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\member\find.php [ 131 ]
2015-09-20 12:41:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\member\find.php [ 131 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 12:44:52 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-09-20 12:44:52 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\wamp\www\iphone\develop\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_stcms_com')
#1 D:\wamp\www\iphone\develop\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\wamp\www\iphone\develop\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('member')
#4 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(40): Kohana_ORM::factory('member')
#9 [internal function]: Controller_Member_Find->action_index()
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#11 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#13 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#14 {main}
2015-09-20 13:06:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\cache\find\4a38fb3614007353a124d220003991c0.php [ 6 ]
2015-09-20 13:06:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\cache\find\4a38fb3614007353a124d220003991c0.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 13:08:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\cache\find\4a38fb3614007353a124d220003991c0.php [ 6 ]
2015-09-20 13:08:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\cache\find\4a38fb3614007353a124d220003991c0.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 13:10:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\member\find.php [ 66 ]
2015-09-20 13:10:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\member\find.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 13:11:05 --- ERROR: ErrorException [ 1 ]: Call to undefined function data() ~ APPPATH\classes\controller\member\find.php [ 66 ]
2015-09-20 13:11:05 --- STRACE: ErrorException [ 1 ]: Call to undefined function data() ~ APPPATH\classes\controller\member\find.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 13:12:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Update::array() ~ APPPATH\classes\controller\member\find.php [ 74 ]
2015-09-20 13:12:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Update::array() ~ APPPATH\classes\controller\member\find.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 13:13:28 --- ERROR: View_Exception [ 0 ]: The requested view default/member/find_success could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2015-09-20 13:13:28 --- STRACE: View_Exception [ 0 ]: The requested view default/member/find_success could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/member/...')
#1 D:\wamp\www\iphone\develop\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/member/...', NULL)
#2 D:\wamp\www\iphone\develop\application\classes\stourweb\controller.php(49): Stourweb_View::factory('default/member/...')
#3 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(76): Stourweb_Controller->display('member/find_suc...')
#4 [internal function]: Controller_Member_Find->action_reset()
#5 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#6 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#9 {main}
2015-09-20 13:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 13:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 13:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/87e2e2fb388c66f604ef248fbaab8fcc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 13:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/87e2e2fb388c66f604ef248fbaab8fcc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 13:54:36 --- ERROR: ErrorException [ 1 ]: Call to undefined function count_down() ~ APPPATH\cache\tplcache\default\member\find_mobile.php [ 51 ]
2015-09-20 13:54:36 --- STRACE: ErrorException [ 1 ]: Call to undefined function count_down() ~ APPPATH\cache\tplcache\default\member\find_mobile.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 14:36:31 --- ERROR: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_common' doesn't exist [ SHOW FULL COLUMNS FROM `sline_common` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-20 14:36:31 --- STRACE: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_common' doesn't exist [ SHOW FULL COLUMNS FROM `sline_common` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\iphone\develop\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('common')
#2 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#3 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#4 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#5 D:\wamp\www\iphone\develop\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#6 D:\wamp\www\iphone\develop\application\classes\controller\member\find.php(93): Kohana_ORM::factory('common')
#7 [internal function]: Controller_Member_Find->action_ajax_send_message()
#8 D:\wamp\www\iphone\develop\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Member_Find))
#9 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#12 {main}
2015-09-20 14:39:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_sms_msg' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-20 14:39:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_sms_msg' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 14:46:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '&' or T_VARIABLE ~ APPPATH\classes\model\sms\msg.php [ 6 ]
2015-09-20 14:46:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '&' or T_VARIABLE ~ APPPATH\classes\model\sms\msg.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 15:06:10 --- ERROR: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
2015-09-20 15:06:10 --- STRACE: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 15:07:46 --- ERROR: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
2015-09-20 15:07:46 --- STRACE: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 15:08:43 --- ERROR: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
2015-09-20 15:08:43 --- STRACE: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 15:10:57 --- ERROR: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
2015-09-20 15:10:57 --- STRACE: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 15:11:54 --- ERROR: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
2015-09-20 15:11:54 --- STRACE: ErrorException [ 1 ]: Class 'Msg' not found ~ APPPATH\classes\model\sms\msg.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 16:18:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/send_message was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 16:18:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/send_message was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 16:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/send_message was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 16:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/send_message was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 16:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 16:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/do was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 16:48:32 --- ERROR: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
2015-09-20 16:48:32 --- STRACE: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 16:49:43 --- ERROR: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
2015-09-20 16:49:43 --- STRACE: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 16:52:01 --- ERROR: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
2015-09-20 16:52:01 --- STRACE: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 16:53:09 --- ERROR: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
2015-09-20 16:53:09 --- STRACE: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 16:53:33 --- ERROR: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
2015-09-20 16:53:33 --- STRACE: ErrorException [ 1 ]: Class 'smtp' not found ~ APPPATH\classes\customize.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-20 16:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 16:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 16:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 16:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 16:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 16:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 16:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 16:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 16:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 16:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 16:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 16:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 16:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/find/87e2e2fb388c66f604ef248fbaab8fcc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-20 16:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/find/87e2e2fb388c66f604ef248fbaab8fcc was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\wamp\www\iphone\develop\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\iphone\develop\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#3 {main}
2015-09-20 16:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 16:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff2 ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.woff ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/fonts/fontawesome-webfont.ttf ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}
2015-09-20 17:14:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2015-09-20 17:14:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\wamp\www\iphone\develop\index.php(133): Kohana_Request->execute()
#1 {main}