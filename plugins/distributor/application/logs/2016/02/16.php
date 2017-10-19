<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-16 14:57:45 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH\classes\stourweb\view.php [ 324 ]
2016-02-16 14:57:45 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/login could not be found ~ APPPATH\classes\stourweb\view.php [ 324 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(187): Stourweb_View->set_filename('/default/pc/log...')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('/default/pc/log...', NULL, NULL, NULL)
#2 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(38): Stourweb_View::factory('/default/pc/log...')
#3 D:\web\standsmore\supplier\application\classes\controller\mobile\login.php(39): Stourweb_Controller->display('login')
#4 [internal function]: Controller_Mobile_Login->action_index()
#5 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Login))
#6 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#9 {main}