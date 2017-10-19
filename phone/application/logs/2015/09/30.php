<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-30 09:21:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('38', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('38', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('38', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('38', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='28' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('28', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='38' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('38', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:21:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='29' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('29', '2015-09-30', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:21:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 09:21:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 09:21:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 09:21:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 09:58:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 09:58:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 09:58:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 09:58:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:01:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`sourcelineid` AS `sourcelineid`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE id= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:01:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`sourcelineid` AS `sourcelineid`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE id= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', false, Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1018): Kohana_ORM->_load_result(false)
#3 D:\web\standsmore\phone\application\classes\controller\pub.php(718): Kohana_ORM->find()
#4 [internal function]: Controller_Pub->action_ajax_comment()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-30 10:01:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:01:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:01:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:01:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:01:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:01:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:01:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:01:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:01:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:01:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:01:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:01:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:01:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:01:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:17:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:17:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:17:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:17:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:18:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:18:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:18:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:18:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443542400 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-30', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:32:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:32:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:33:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:33:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:36:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 10:36:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 10:37:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443715200 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:37:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443715200 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-10-2', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:38:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1445616000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:38:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1445616000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-10-24', NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:49:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND number!=0 limit 1' at line 1 [ SELECT * FROM `sline_line_suit_price` WHERE suitid='27' AND day>= AND number!=0 limit 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:49:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND number!=0 limit 1' at line 1 [ SELECT * FROM `sline_line_suit_price` WHERE suitid='27' AND day>= AND number!=0 limit 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\line\suit\price.php(16): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\line.php(118): Model_Line_Suit_Price::get_price_byday('27', NULL)
#3 [internal function]: Controller_Line->action_ajax_suit_people()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:49:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND number!=0 limit 1' at line 1 [ SELECT * FROM `sline_line_suit_price` WHERE suitid='27' AND day>= AND number!=0 limit 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 10:49:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND number!=0 limit 1' at line 1 [ SELECT * FROM `sline_line_suit_price` WHERE suitid='27' AND day>= AND number!=0 limit 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\line\suit\price.php(16): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\line.php(118): Model_Line_Suit_Price::get_price_byday('27', NULL)
#3 [internal function]: Controller_Line->action_ajax_suit_people()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-30 10:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/ajax_price_day was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-30 10:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/ajax_price_day was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-30 14:53:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443628800 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 14:53:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443628800 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\product.php(342): Model_Hotel::suit_range_price('27', '2015-10-01', NULL, '2')
#3 D:\web\standsmore\phone\application\classes\product.php(161): Product::calculate_price(Array)
#4 D:\web\standsmore\phone\application\classes\controller\hotel.php(255): Product::add_order(Array)
#5 [internal function]: Controller_Hotel->action_create()
#6 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#7 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#10 {main}
2015-09-30 14:55:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id='6007'' at line 1 [ SELECT supplierlist FROM  where id='6007' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 14:55:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id='6007'' at line 1 [ SELECT supplierlist FROM  where id='6007' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT supplier...', false, Array)
#1 D:\web\standsmore\phone\application\classes\product.php(405): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\product.php(252): Product::get_supplier_tel('6007', NULL)
#3 D:\web\standsmore\phone\application\classes\controller\line.php(192): Product::add_order(Array)
#4 [internal function]: Controller_Line->action_create()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-30 14:56:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id='6007'' at line 1 [ SELECT supplierlist FROM  where id='6007' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 14:56:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id='6007'' at line 1 [ SELECT supplierlist FROM  where id='6007' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT supplier...', false, Array)
#1 D:\web\standsmore\phone\application\classes\product.php(405): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\product.php(252): Product::get_supplier_tel('6007', NULL)
#3 D:\web\standsmore\phone\application\classes\controller\line.php(192): Product::add_order(Array)
#4 [internal function]: Controller_Line->action_create()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-30 15:01:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id='6007'' at line 1 [ SELECT supplierlist FROM  where id='6007' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 15:01:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where id='6007'' at line 1 [ SELECT supplierlist FROM  where id='6007' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT supplier...', false, Array)
#1 D:\web\standsmore\phone\application\classes\product.php(405): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\product.php(252): Product::get_supplier_tel('6007', NULL)
#3 D:\web\standsmore\phone\application\classes\controller\line.php(192): Product::add_order(Array)
#4 [internal function]: Controller_Line->action_create()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-30 16:27:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-30 16:27:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/search was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-30 16:30:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'isdisplay' in 'where clause' [ SELECT `sline_line_pricelist`.`id` AS `id`, `sline_line_pricelist`.`webid` AS `webid`, `sline_line_pricelist`.`aid` AS `aid`, `sline_line_pricelist`.`lowerprice` AS `lowerprice`, `sline_line_pricelist`.`highprice` AS `highprice` FROM `sline_line_pricelist` AS `sline_line_pricelist` WHERE isdisplay=1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 16:30:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'isdisplay' in 'where clause' [ SELECT `sline_line_pricelist`.`id` AS `id`, `sline_line_pricelist`.`webid` AS `webid`, `sline_line_pricelist`.`aid` AS `aid`, `sline_line_pricelist`.`lowerprice` AS `lowerprice`, `sline_line_pricelist`.`highprice` AS `highprice` FROM `sline_line_pricelist` AS `sline_line_pricelist` WHERE isdisplay=1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line_Pric...', Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->_load_result(true)
#3 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1054): Kohana_ORM->find_all()
#4 D:\web\standsmore\phone\taglib\line.php(104): Kohana_ORM->get_all()
#5 D:\web\standsmore\phone\application\cache\tplcache\default\pub\select.php(59): Taglib_line::price_list(Array)
#6 D:\web\standsmore\phone\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#7 D:\web\standsmore\phone\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#8 D:\web\standsmore\phone\application\classes\stourweb\controller.php(58): Stourweb_View->render()
#9 D:\web\standsmore\phone\application\classes\controller\pub.php(152): Stourweb_Controller->display('pub/select')
#10 [internal function]: Controller_Pub->action_select()
#11 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#12 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 D:\web\standsmore\phone\application\cache\tplcache\default\line\list.php(15): Kohana_Request->execute()
#15 D:\web\standsmore\phone\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#16 D:\web\standsmore\phone\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#17 D:\web\standsmore\phone\application\classes\stourweb\controller.php(58): Stourweb_View->render()
#18 D:\web\standsmore\phone\application\classes\controller\line.php(66): Stourweb_Controller->display('line/list')
#19 [internal function]: Controller_Line->action_list()
#20 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#21 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#22 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#23 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#24 {main}
2015-09-30 16:31:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_attr' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-30 16:31:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_attr' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 16:38:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Line::search_seo() ~ APPPATH\classes\model\line.php [ 168 ]
2015-09-30 16:38:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Line::search_seo() ~ APPPATH\classes\model\line.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 16:38:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Line::search_seo() ~ APPPATH\classes\model\line.php [ 168 ]
2015-09-30 16:38:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Line::search_seo() ~ APPPATH\classes\model\line.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-30 17:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/guonalvyouf--0-0-0-0-0-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-30 17:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/guonalvyouf--0-0-0-0-0-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-30 17:50:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/guonalvyouf--0-0-0-0-0-5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-30 17:50:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/guonalvyouf--0-0-0-0-0-5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-30 17:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/guonalvyouf--0-0-0-0-0-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-30 17:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/guonalvyouf--0-0-0-0-0-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-30 17:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-2-0-0-144_95-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-30 17:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-2-0-0-144_95-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-30 17:54:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_hotel_extend_field`.`id` AS `id`, `sline_hotel_extend_field`.`productid` AS `productid`, `sline_hotel_extend_field`.`e_engname` AS `e_engname`, `sline_hotel_extend_field`.`e_newcontent` AS `e_newcontent`, `sline_hotel_extend_field`.`e_content_2` AS `e_content_2` FROM `sline_hotel_extend_field` AS `sline_hotel_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 17:54:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_hotel_extend_field`.`id` AS `id`, `sline_hotel_extend_field`.`productid` AS `productid`, `sline_hotel_extend_field`.`e_engname` AS `e_engname`, `sline_hotel_extend_field`.`e_newcontent` AS `e_newcontent`, `sline_hotel_extend_field`.`e_content_2` AS `e_content_2` FROM `sline_hotel_extend_field` AS `sline_hotel_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', false, Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1018): Kohana_ORM->_load_result(false)
#3 D:\web\standsmore\phone\application\classes\controller\hotel.php(88): Kohana_ORM->find()
#4 [internal function]: Controller_Hotel->action_show()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-30 17:56:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_hotel_extend_field`.`id` AS `id`, `sline_hotel_extend_field`.`productid` AS `productid`, `sline_hotel_extend_field`.`e_engname` AS `e_engname`, `sline_hotel_extend_field`.`e_newcontent` AS `e_newcontent`, `sline_hotel_extend_field`.`e_content_2` AS `e_content_2` FROM `sline_hotel_extend_field` AS `sline_hotel_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 17:56:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_hotel_extend_field`.`id` AS `id`, `sline_hotel_extend_field`.`productid` AS `productid`, `sline_hotel_extend_field`.`e_engname` AS `e_engname`, `sline_hotel_extend_field`.`e_newcontent` AS `e_newcontent`, `sline_hotel_extend_field`.`e_content_2` AS `e_content_2` FROM `sline_hotel_extend_field` AS `sline_hotel_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', false, Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1018): Kohana_ORM->_load_result(false)
#3 D:\web\standsmore\phone\application\classes\controller\hotel.php(88): Kohana_ORM->find()
#4 [internal function]: Controller_Hotel->action_show()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-30 17:56:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_hotel_extend_field`.`id` AS `id`, `sline_hotel_extend_field`.`productid` AS `productid`, `sline_hotel_extend_field`.`e_engname` AS `e_engname`, `sline_hotel_extend_field`.`e_newcontent` AS `e_newcontent`, `sline_hotel_extend_field`.`e_content_2` AS `e_content_2` FROM `sline_hotel_extend_field` AS `sline_hotel_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-30 17:56:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_hotel_extend_field`.`id` AS `id`, `sline_hotel_extend_field`.`productid` AS `productid`, `sline_hotel_extend_field`.`e_engname` AS `e_engname`, `sline_hotel_extend_field`.`e_newcontent` AS `e_newcontent`, `sline_hotel_extend_field`.`e_content_2` AS `e_content_2` FROM `sline_hotel_extend_field` AS `sline_hotel_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', false, Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1018): Kohana_ORM->_load_result(false)
#3 D:\web\standsmore\phone\application\classes\controller\hotel.php(88): Kohana_ORM->find()
#4 [internal function]: Controller_Hotel->action_show()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}