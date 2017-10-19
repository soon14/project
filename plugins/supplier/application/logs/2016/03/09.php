<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-09 11:34:47 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-03-09 11:34:47 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\v5\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db(NULL)
#1 D:\web\v5\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\v5\core\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select weburl f...', false, Array)
#3 D:\web\v5\plugins\supplier\application\classes\common.php(723): Kohana_Database_Query->execute()
#4 D:\web\v5\plugins\supplier\application\bootstrap.php(178): Common::get_main_host()
#5 D:\web\v5\plugins\supplier\index.php(118): require('D:\web\v5\plugi...')
#6 {main}
2016-03-09 11:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/pc/js/city/jquery.cityselect.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-09 11:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/pc/js/city/jquery.cityselect.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\supplier\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-09 11:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/pc/js/city/jquery.cityselect.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-09 11:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/pc/js/city/jquery.cityselect.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\supplier\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-09 12:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/pub/sidemenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-03-09 12:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/pub/sidemenu was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\supplier\application\cache\tplcache\default\pc\user\modify_password.php(13): Kohana_Request->execute()
#3 D:\web\v5\plugins\supplier\application\classes\stourweb\view.php(74): include('D:\web\v5\plugi...')
#4 D:\web\v5\plugins\supplier\application\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\v5\plugi...', Array)
#5 D:\web\v5\plugins\supplier\application\classes\stourweb\controller.php(45): Stourweb_View->render()
#6 D:\web\v5\plugins\supplier\application\classes\controller\pc\user.php(37): Stourweb_Controller->display('user/modify_pas...')
#7 [internal function]: Controller_Pc_User->action_modify_password()
#8 D:\web\v5\core\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_User))
#9 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\web\v5\plugins\supplier\index.php(133): Kohana_Request->execute()
#12 {main}