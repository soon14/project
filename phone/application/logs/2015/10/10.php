<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-10 11:40:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''success_delete'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\i18n\ch.php [ 89 ]
2015-10-10 11:40:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''success_delete'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\i18n\ch.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-10-10 17:50:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `day` >= '0' AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-10 17:50:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `day` >= '0' AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', 'Model_Hotel_Roo...', Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->_load_result(true)
#3 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1054): Kohana_ORM->find_all()
#4 D:\web\standsmore\phone\application\classes\controller\pub.php(323): Kohana_ORM->get_all()
#5 D:\web\standsmore\phone\application\classes\controller\pub.php(291): Controller_Pub->get_suit_price('2015', '10', '', '2', 'NaN-NaN-NaN')
#6 [internal function]: Controller_Pub->action_calendar()
#7 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#8 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\standsmore\phone\application\classes\controller\pub.php(692): Kohana_Request->execute()
#11 [internal function]: Controller_Pub->action_ajax_calendar()
#12 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#13 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#15 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#16 {main}
2015-10-10 17:50:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `day` >= '0' AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-10 17:50:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `day` >= '0' AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', 'Model_Hotel_Roo...', Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->_load_result(true)
#3 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1054): Kohana_ORM->find_all()
#4 D:\web\standsmore\phone\application\classes\controller\pub.php(323): Kohana_ORM->get_all()
#5 D:\web\standsmore\phone\application\classes\controller\pub.php(291): Controller_Pub->get_suit_price('2015', '10', '', '2', 'NaN-NaN-NaN')
#6 [internal function]: Controller_Pub->action_calendar()
#7 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#8 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\standsmore\phone\application\classes\controller\pub.php(692): Kohana_Request->execute()
#11 [internal function]: Controller_Pub->action_ajax_calendar()
#12 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#13 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#15 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#16 {main}
2015-10-10 17:50:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `day` >= '0' AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-10 17:50:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `day` >= '0' AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', 'Model_Hotel_Roo...', Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->_load_result(true)
#3 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1054): Kohana_ORM->find_all()
#4 D:\web\standsmore\phone\application\classes\controller\pub.php(323): Kohana_ORM->get_all()
#5 D:\web\standsmore\phone\application\classes\controller\pub.php(291): Controller_Pub->get_suit_price('2015', '10', '', '2', 'NaN-NaN-NaN')
#6 [internal function]: Controller_Pub->action_calendar()
#7 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#8 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\standsmore\phone\application\classes\controller\pub.php(692): Kohana_Request->execute()
#11 [internal function]: Controller_Pub->action_ajax_calendar()
#12 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#13 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#15 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#16 {main}
2015-10-10 18:06:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'suitid='259' AND day>=1444406400 AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-10 18:06:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'suitid='259' AND day>=1444406400 AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_h...', false, Array)
#1 D:\web\standsmore\phone\application\classes\product.php(309): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\product.php(168): Product::minus_storage('2015-10-10', 2, '259', NULL, 1, '2015-10-14')
#3 D:\web\standsmore\phone\application\classes\controller\hotel.php(257): Product::add_order(Array)
#4 [internal function]: Controller_Hotel->action_create()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-10-10 18:08:21 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\product.php [ 309 ]
2015-10-10 18:08:21 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\product.php [ 309 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}