<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-01 14:06:17 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/order/all could not be found ~ APPPATH\classes\stourweb\view.php [ 324 ]
2016-03-01 14:06:17 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/order/all could not be found ~ APPPATH\classes\stourweb\view.php [ 324 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(187): Stourweb_View->set_filename('/default/pc/ord...')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('/default/pc/ord...', NULL, NULL, NULL)
#2 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(38): Stourweb_View::factory('/default/pc/ord...')
#3 D:\web\standsmore\supplier\application\classes\controller\pc\order.php(41): Stourweb_Controller->display('order/all')
#4 [internal function]: Controller_Pc_Order->action_all()
#5 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#6 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#9 {main}
2016-03-01 14:11:41 --- ERROR: View_Exception [ 0 ]: The requested view pagination/supplier could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2016-03-01 14:11:41 --- STRACE: View_Exception [ 0 ]: The requested view pagination/supplier could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\view.php(137): Kohana_View->set_filename('pagination/supp...')
#1 D:\web\standsmore\supplier\system\classes\kohana\view.php(30): Kohana_View->__construct('pagination/supp...', NULL)
#2 D:\web\standsmore\supplier\modules\pagination\classes\kohana\pagination.php(284): Kohana_View::factory('pagination/supp...')
#3 D:\web\standsmore\supplier\modules\pagination\classes\kohana\pagination.php(384): Kohana_Pagination->render()
#4 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\order\all.php(68): Kohana_Pagination->__toString()
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(74): include('D:\web\standsmo...')
#6 D:\web\standsmore\supplier\application\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\standsmo...', Array)
#7 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(45): Stourweb_View->render()
#8 D:\web\standsmore\supplier\application\classes\controller\pc\order.php(41): Stourweb_Controller->display('order/all')
#9 [internal function]: Controller_Pc_Order->action_all()
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#11 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#14 {main}
2016-03-01 14:14:47 --- ERROR: View_Exception [ 0 ]: The requested view pagination/supplier could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2016-03-01 14:14:47 --- STRACE: View_Exception [ 0 ]: The requested view pagination/supplier could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\view.php(137): Kohana_View->set_filename('pagination/supp...')
#1 D:\web\standsmore\supplier\system\classes\kohana\view.php(30): Kohana_View->__construct('pagination/supp...', NULL)
#2 D:\web\standsmore\supplier\modules\pagination\classes\kohana\pagination.php(284): Kohana_View::factory('pagination/supp...')
#3 D:\web\standsmore\supplier\modules\pagination\classes\kohana\pagination.php(384): Kohana_Pagination->render()
#4 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\order\all.php(68): Kohana_Pagination->__toString()
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(74): include('D:\web\standsmo...')
#6 D:\web\standsmore\supplier\application\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\standsmo...', Array)
#7 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(45): Stourweb_View->render()
#8 D:\web\standsmore\supplier\application\classes\controller\pc\order.php(41): Stourweb_Controller->display('order/all')
#9 [internal function]: Controller_Pc_Order->action_all()
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#11 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#14 {main}
2016-03-01 14:15:28 --- ERROR: View_Exception [ 0 ]: The requested view pagination/supplier could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2016-03-01 14:15:28 --- STRACE: View_Exception [ 0 ]: The requested view pagination/supplier could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\web\standsmore\supplier\system\classes\kohana\view.php(137): Kohana_View->set_filename('pagination/supp...')
#1 D:\web\standsmore\supplier\system\classes\kohana\view.php(30): Kohana_View->__construct('pagination/supp...', NULL)
#2 D:\web\standsmore\supplier\modules\pagination\classes\kohana\pagination.php(284): Kohana_View::factory('pagination/supp...')
#3 D:\web\standsmore\supplier\modules\pagination\classes\kohana\pagination.php(384): Kohana_Pagination->render()
#4 D:\web\standsmore\supplier\application\cache\tplcache\default\pc\order\all.php(68): Kohana_Pagination->__toString()
#5 D:\web\standsmore\supplier\application\classes\stourweb\view.php(74): include('D:\web\standsmo...')
#6 D:\web\standsmore\supplier\application\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\standsmo...', Array)
#7 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(45): Stourweb_View->render()
#8 D:\web\standsmore\supplier\application\classes\controller\pc\order.php(41): Stourweb_Controller->display('order/all')
#9 [internal function]: Controller_Pc_Order->action_all()
#10 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#11 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#13 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#14 {main}
2016-03-01 14:17:57 --- ERROR: View_Exception [ 0 ]: The requested view /default/pc/order/show_order could not be found ~ APPPATH\classes\stourweb\view.php [ 324 ]
2016-03-01 14:17:57 --- STRACE: View_Exception [ 0 ]: The requested view /default/pc/order/show_order could not be found ~ APPPATH\classes\stourweb\view.php [ 324 ]
--
#0 D:\web\standsmore\supplier\application\classes\stourweb\view.php(187): Stourweb_View->set_filename('/default/pc/ord...')
#1 D:\web\standsmore\supplier\application\classes\stourweb\view.php(30): Stourweb_View->__construct('/default/pc/ord...', NULL, NULL, NULL)
#2 D:\web\standsmore\supplier\application\classes\stourweb\controller.php(38): Stourweb_View::factory('/default/pc/ord...')
#3 D:\web\standsmore\supplier\application\classes\controller\pc\order.php(54): Stourweb_Controller->display('order/show_orde...')
#4 [internal function]: Controller_Pc_Order->action_show_order()
#5 D:\web\standsmore\supplier\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#6 D:\web\standsmore\supplier\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\supplier\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\supplier\index.php(132): Kohana_Request->execute()
#9 {main}
2016-03-01 15:09:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'receiver' (T_STRING), expecting ']' ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 96 ]
2016-03-01 15:09:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'receiver' (T_STRING), expecting ']' ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-01 15:16:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'receiver' (T_STRING), expecting ']' ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 96 ]
2016-03-01 15:16:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'receiver' (T_STRING), expecting ']' ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-01 15:16:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 100 ]
2016-03-01 15:16:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 100 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-01 15:50:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 104 ]
2016-03-01 15:50:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-03-01 15:50:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 104 ]
2016-03-01 15:50:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\cache\tplcache\default\pc\order\line_detail.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}