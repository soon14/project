<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-10 16:52:27 --- ERROR: View_Exception [ 0 ]: The requested view default/default/car/show could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
2015-12-10 16:52:27 --- STRACE: View_Exception [ 0 ]: The requested view default/default/car/show could not be found ~ APPPATH\classes\stourweb\view.php [ 281 ]
--
#0 D:\web\standsmore\phone\application\classes\stourweb\view.php(157): Stourweb_View->set_filename('default/default...')
#1 D:\web\standsmore\phone\application\classes\stourweb\view.php(30): Stourweb_View->__construct('default/default...', NULL)
#2 D:\web\standsmore\phone\application\classes\stourweb\controller.php(50): Stourweb_View::factory('default/default...')
#3 D:\web\standsmore\phone\application\classes\controller\car.php(135): Stourweb_Controller->display('default/car/sho...')
#4 [internal function]: Controller_Car->action_show()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-12-10 16:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-12-10 16:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-12-10 16:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-12-10 16:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}