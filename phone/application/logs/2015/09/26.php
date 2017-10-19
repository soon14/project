<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-26 10:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 10:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 13:45:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/hotels/beijing-0-4-1-0-218_191_203 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 13:45:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/hotels/beijing-0-4-1-0-218_191_203 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:04:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\hotel.php [ 79 ]
2015-09-26 15:04:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\hotel.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-26 15:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/ajax_data-0-4-1-0-218_191_203 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 15:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/ajax_data-0-4-1-0-218_191_203 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/ajax_data was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 15:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/ajax_data was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:05:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/ajax_hotel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 15:05:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/ajax_hotel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:38:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'a.ishidden=0  FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FI' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1)a.ishidden=0  FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 15:38:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'a.ishidden=0  FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FI' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1)a.ishidden=0  FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(124): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(106): Model_Hotel::search_result('beijing-0-4-1-0...')
#3 [internal function]: Controller_Hotel->action_ajax_hotel()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-26 15:38:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1) WHERE a.ishidden=0  FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 15:38:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1) WHERE a.ishidden=0  FIND_IN_SET(1,a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(124): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(106): Model_Hotel::search_result('beijing-0-4-1-0...')
#3 [internal function]: Controller_Hotel->action_ajax_hotel()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-26 15:39:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(21' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1) WHERE a.ishidden=0  FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 15:39:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(21' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1) WHERE a.ishidden=0  FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(124): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(106): Model_Hotel::search_result('beijing-0-4-1-0...')
#3 [internal function]: Controller_Hotel->action_ajax_hotel()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-26 15:41:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(21' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1) WHERE a.ishidden=0  FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 15:41:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(21' at line 1 [ SELECT a.* FROM `sline_hotel` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid AND b.classid=1) WHERE a.ishidden=0  FIND_IN_SET('1',a.kindlist)  AND a.price BETWEEN 301 AND 400  and FIND_IN_SET(218,a.attrid)  and FIND_IN_SET(191,a.attrid)  and FIND_IN_SET(203,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(124): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(106): Model_Hotel::search_result('beijing-0-4-1-0...')
#3 [internal function]: Controller_Hotel->action_ajax_hotel()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-26 15:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guonalvyouf-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 15:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guonalvyouf-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guonalvyouf-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 15:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guonalvyouf-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/phone/hotels/all-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-26 15:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/phone/hotels/all-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:47:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/phone/hotels/all-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-26 15:47:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/phone/hotels/all-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 15:48:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/phone/hotels/all-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-26 15:48:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/phone/hotels/all-0-0-0-0-0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-26 17:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/layer/need/layer.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-26 17:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/layer/need/layer.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}