<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-28 10:30:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\cache\tplcache\default\hotel\book.php [ 51 ]
2015-09-28 10:30:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\cache\tplcache\default\hotel\book.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 11:02:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_hotel_room' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-28 11:02:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_hotel_room' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 11:12:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '425''' at line 1 [ SELECT `sline_hotel_room`.`id` AS `id`, `sline_hotel_room`.`webid` AS `webid`, `sline_hotel_room`.`hotelid` AS `hotelid`, `sline_hotel_room`.`roomname` AS `roomname`, `sline_hotel_room`.`price` AS `price`, `sline_hotel_room`.`sellprice` AS `sellprice`, `sline_hotel_room`.`breakfirst` AS `breakfirst`, `sline_hotel_room`.`computer` AS `computer`, `sline_hotel_room`.`otherprice` AS `otherprice`, `sline_hotel_room`.`displayorder` AS `displayorder`, `sline_hotel_room`.`otherroom` AS `otherroom`, `sline_hotel_room`.`otherroomurl` AS `otherroomurl`, `sline_hotel_room`.`nightdays` AS `nightdays`, `sline_hotel_room`.`roomids` AS `roomids`, `sline_hotel_room`.`roomstyle` AS `roomstyle`, `sline_hotel_room`.`roomarea` AS `roomarea`, `sline_hotel_room`.`roomfloor` AS `roomfloor`, `sline_hotel_room`.`roomwindow` AS `roomwindow`, `sline_hotel_room`.`piclist` AS `piclist`, `sline_hotel_room`.`number` AS `number`, `sline_hotel_room`.`jifencomment` AS `jifencomment`, `sline_hotel_room`.`jifentprice` AS `jifentprice`, `sline_hotel_room`.`jifenbook` AS `jifenbook`, `sline_hotel_room`.`paytype` AS `paytype`, `sline_hotel_room`.`dingjin` AS `dingjin` FROM `sline_hotel_room` AS `sline_hotel_room` WHERE hotelid=''425'' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-28 11:12:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '425''' at line 1 [ SELECT `sline_hotel_room`.`id` AS `id`, `sline_hotel_room`.`webid` AS `webid`, `sline_hotel_room`.`hotelid` AS `hotelid`, `sline_hotel_room`.`roomname` AS `roomname`, `sline_hotel_room`.`price` AS `price`, `sline_hotel_room`.`sellprice` AS `sellprice`, `sline_hotel_room`.`breakfirst` AS `breakfirst`, `sline_hotel_room`.`computer` AS `computer`, `sline_hotel_room`.`otherprice` AS `otherprice`, `sline_hotel_room`.`displayorder` AS `displayorder`, `sline_hotel_room`.`otherroom` AS `otherroom`, `sline_hotel_room`.`otherroomurl` AS `otherroomurl`, `sline_hotel_room`.`nightdays` AS `nightdays`, `sline_hotel_room`.`roomids` AS `roomids`, `sline_hotel_room`.`roomstyle` AS `roomstyle`, `sline_hotel_room`.`roomarea` AS `roomarea`, `sline_hotel_room`.`roomfloor` AS `roomfloor`, `sline_hotel_room`.`roomwindow` AS `roomwindow`, `sline_hotel_room`.`piclist` AS `piclist`, `sline_hotel_room`.`number` AS `number`, `sline_hotel_room`.`jifencomment` AS `jifencomment`, `sline_hotel_room`.`jifentprice` AS `jifentprice`, `sline_hotel_room`.`jifenbook` AS `jifenbook`, `sline_hotel_room`.`paytype` AS `paytype`, `sline_hotel_room`.`dingjin` AS `dingjin` FROM `sline_hotel_room` AS `sline_hotel_room` WHERE hotelid=''425'' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', 'Model_Hotel_Roo...', Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->_load_result(true)
#3 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1054): Kohana_ORM->find_all()
#4 D:\web\standsmore\phone\taglib\hotel.php(91): Kohana_ORM->get_all()
#5 D:\web\standsmore\phone\application\cache\tplcache\default\hotel\book.php(30): Taglib_Hotel::suit(Array)
#6 D:\web\standsmore\phone\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#7 D:\web\standsmore\phone\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#8 D:\web\standsmore\phone\application\classes\stourweb\controller.php(60): Stourweb_View->render()
#9 D:\web\standsmore\phone\application\classes\controller\hotel.php(108): Stourweb_Controller->display('hotel/book')
#10 [internal function]: Controller_Hotel->action_book()
#11 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#12 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#15 {main}
2015-09-28 11:33:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$arr' (T_VARIABLE) ~ DOCROOT\taglib\hotel.php [ 209 ]
2015-09-28 11:33:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$arr' (T_VARIABLE) ~ DOCROOT\taglib\hotel.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 11:33:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$arr' (T_VARIABLE) ~ DOCROOT\taglib\hotel.php [ 209 ]
2015-09-28 11:33:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$arr' (T_VARIABLE) ~ DOCROOT\taglib\hotel.php [ 209 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 11:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/-0-0-0-0-0-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 11:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/-0-0-0-0-0-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-28 11:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/-0-0-0-0-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 11:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/-0-0-0-0-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-28 11:58:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\controller\hotel.php [ 108 ]
2015-09-28 11:58:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\controller\hotel.php [ 108 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 14:00:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_sline_hotel_room_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-28 14:00:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_sline_hotel_room_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 14:01:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_hotel_room_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-28 14:01:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_hotel_room_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 14:03:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object HTMLInputElement] AND `day` >= 1441036800 AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-28 14:03:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '[object HTMLInputElement] AND `day` >= 1441036800 AND `day`  ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', 'Model_Hotel_Roo...', Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->_load_result(true)
#3 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1054): Kohana_ORM->find_all()
#4 D:\web\standsmore\phone\application\classes\controller\pub.php(326): Kohana_ORM->get_all()
#5 D:\web\standsmore\phone\application\classes\controller\pub.php(292): Controller_Pub->get_suit_price('2015', '09', '[object HTMLInp...', '2', NULL)
#6 [internal function]: Controller_Pub->action_calendar()
#7 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#8 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#11 {main}
2015-09-28 14:19:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) ~ APPPATH\cache\tplcache\default\hotel\book.php [ 101 ]
2015-09-28 14:19:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '""' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) ~ APPPATH\cache\tplcache\default\hotel\book.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 14:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL "+url+" was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL "+url+" was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\cache\tplcache\default\hotel\book.php(99): Kohana_Request->execute()
#3 D:\web\standsmore\phone\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#4 D:\web\standsmore\phone\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#5 D:\web\standsmore\phone\application\classes\stourweb\controller.php(60): Stourweb_View->render()
#6 D:\web\standsmore\phone\application\classes\controller\hotel.php(109): Stourweb_Controller->display('hotel/book')
#7 [internal function]: Controller_Hotel->action_book()
#8 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#9 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#11 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#12 {main}
2015-09-28 14:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid//suitid//productid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid//suitid//productid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(680): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 14:40:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\controller\pub.php [ 680 ]
2015-09-28 14:40:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\controller\pub.php [ 680 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 14:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid//suitid//productid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid//suitid//productid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(679): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 14:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid//suitid//productid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid//suitid//productid was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(679): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 14:42:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid/2/suitid//productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:42:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid/2/suitid//productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(679): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 14:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid/2/suitid/252/productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid/2/suitid/252/productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(679): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 14:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid/2/suitid/252/productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar/typeid/2/suitid/252/productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(679): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 14:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL calendar/typeid/2/suitid/252/productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL calendar/typeid/2/suitid/252/productid/425 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(679): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 14:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-28 14:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL phone/pub/calendar was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\application\classes\controller\pub.php(679): Kohana_Request->execute()
#3 [internal function]: Controller_Pub->action_ajax_calendar()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 16:48:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\pub.php [ 591 ]
2015-09-28 16:48:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\controller\pub.php [ 591 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-28 18:46:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-28 18:46:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND day ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(184): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(136): Model_Hotel::suit_range_price(NULL, NULL, NULL, NULL)
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-28 19:43:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::request() ~ APPPATH\classes\controller\hotel.php [ 108 ]
2015-09-28 19:43:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Hotel::request() ~ APPPATH\classes\controller\hotel.php [ 108 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}