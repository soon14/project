<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-12-02 17:33:49 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-12-02 17:33:49 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db(NULL)
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select varname,...', false, Array)
#3 D:\web\standsmore\phone\application\classes\model\sysconfig.php(13): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\classes\common.php(596): Model_Sysconfig::config()
#5 D:\web\standsmore\phone\application\bootstrap.php(172): Common::cache_config()
#6 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#7 {main}
2015-12-02 17:36:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Product::execute() ~ APPPATH\classes\product.php [ 719 ]
2015-12-02 17:36:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Product::execute() ~ APPPATH\classes\product.php [ 719 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-12-02 18:06:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Car::get_minprice() ~ DOCROOT\taglib\car.php [ 132 ]
2015-12-02 18:06:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Car::get_minprice() ~ DOCROOT\taglib\car.php [ 132 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-12-02 18:10:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-12-02 18:10:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT adultpri...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\car.php(215): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\car.php(161): Model_Car::suit_range_price('14', '', '', '1')
#3 [internal function]: Controller_Car->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-12-02 18:10:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-12-02 18:10:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT adultpri...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\car.php(215): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\car.php(161): Model_Car::suit_range_price('14', '', '', '1')
#3 [internal function]: Controller_Car->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-12-02 18:10:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-12-02 18:10:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT adultpri...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\car.php(215): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\car.php(161): Model_Car::suit_range_price('14', '', '', '1')
#3 [internal function]: Controller_Car->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-12-02 18:10:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-12-02 18:10:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT adultpri...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\car.php(215): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\car.php(161): Model_Car::suit_range_price('14', '', '', '1')
#3 [internal function]: Controller_Car->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Car))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}