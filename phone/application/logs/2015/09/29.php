<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-29 11:20:28 --- ERROR: Kohana_Exception [ 0 ]: The departdate property does not exist in the Model_Member_Order class ~ MODPATH\orm\classes\kohana\orm.php [ 771 ]
2015-09-29 11:20:28 --- STRACE: Kohana_Exception [ 0 ]: The departdate property does not exist in the Model_Member_Order class ~ MODPATH\orm\classes\kohana\orm.php [ 771 ]
--
#0 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(713): Kohana_ORM->set('departdate', '2015-09-30')
#1 D:\web\standsmore\phone\application\classes\product.php(137): Kohana_ORM->__set('departdate', '2015-09-30')
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(253): Product::add_order(Array)
#3 [internal function]: Controller_Hotel->action_create()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 11:53:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.webid=0' at line 1 [ SELECT a.*,b.m_title FROM sline_nav as a LEFT JOIN sline_m_nav b ON a.id=b.navid WHERE a.typeid= and a.webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 11:53:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.webid=0' at line 1 [ SELECT a.*,b.m_title FROM sline_nav as a LEFT JOIN sline_m_nav b ON a.id=b.navid WHERE a.typeid= and a.webid=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.*,b.m_...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\nav.php(12): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\model\nav.php(22): Model_Nav::get_channel_info('')
#3 D:\web\standsmore\phone\application\classes\controller\pub.php(69): Model_Nav::get_channel_name('')
#4 [internal function]: Controller_Pub->action_header()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\application\cache\tplcache\default\pub\pay.php(11): Kohana_Request->execute()
#9 D:\web\standsmore\phone\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#10 D:\web\standsmore\phone\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#11 D:\web\standsmore\phone\application\classes\stourweb\controller.php(61): Stourweb_View->render()
#12 D:\web\standsmore\phone\application\classes\controller\pub.php(209): Stourweb_Controller->display('pub/pay')
#13 [internal function]: Controller_Pub->action_pay()
#14 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Pub))
#15 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#17 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#18 {main}
2015-09-29 14:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thirdpay/dopay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-29 14:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thirdpay/dopay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 14:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pub/thirdpay/alipay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-29 14:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pub/thirdpay/alipay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 14:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pub/thirdpay/alipay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-29 14:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pub/thirdpay/alipay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 14:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pub/thirdpay/alipay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2015-09-29 14:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pub/thirdpay/alipay was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 14:11:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected => (T_DOUBLE_ARROW) ~ xdebug://debug-eval [ 1 ]
2015-09-29 14:11:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected => (T_DOUBLE_ARROW) ~ xdebug://debug-eval [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 14:21:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Destinations::execute() ~ APPPATH\classes\model\destinations.php [ 154 ]
2015-09-29 14:21:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Destinations::execute() ~ APPPATH\classes\model\destinations.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 14:21:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Destinations::execute() ~ APPPATH\classes\model\destinations.php [ 154 ]
2015-09-29 14:21:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Destinations::execute() ~ APPPATH\classes\model\destinations.php [ 154 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 14:26:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ';' or '{' ~ APPPATH\classes\model\destinations.php [ 243 ]
2015-09-29 14:26:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ';' or '{' ~ APPPATH\classes\model\destinations.php [ 243 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 16:23:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'price' in 'field list' [ SELECT MIN(price) AS price,MIN(sellprice) AS sellprice FROM `sline_spot_ticket` WHERE spotid='spotid' AND ourprice!=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 16:23:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'price' in 'field list' [ SELECT MIN(price) AS price,MIN(sellprice) AS sellprice FROM `sline_spot_ticket` WHERE spotid='spotid' AND ourprice!=0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT MIN(pric...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\spot.php(15): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\taglib\spot.php(51): Model_Spot::get_minprice('1699')
#3 D:\web\standsmore\phone\application\cache\tplcache\default\spot\index.php(58): Taglib_Spot::query(Array)
#4 D:\web\standsmore\phone\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#5 D:\web\standsmore\phone\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#6 D:\web\standsmore\phone\application\classes\stourweb\controller.php(61): Stourweb_View->render()
#7 D:\web\standsmore\phone\application\classes\controller\spot.php(23): Stourweb_Controller->display('spot/index')
#8 [internal function]: Controller_Spot->action_index()
#9 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#10 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#13 {main}
2015-09-29 17:21:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_spot_extend_field' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-29 17:21:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_spot_extend_field' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 17:55:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'hotelid' in 'where clause' [ SELECT `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`number` AS `number`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook`, `sline_spot_ticket`.`dingjin` AS `dingjin` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE hotelid='1679' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 17:55:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'hotelid' in 'where clause' [ SELECT `sline_spot_ticket`.`id` AS `id`, `sline_spot_ticket`.`spotid` AS `spotid`, `sline_spot_ticket`.`title` AS `title`, `sline_spot_ticket`.`tickettypeid` AS `tickettypeid`, `sline_spot_ticket`.`sellprice` AS `sellprice`, `sline_spot_ticket`.`ourprice` AS `ourprice`, `sline_spot_ticket`.`memberdayprice` AS `memberdayprice`, `sline_spot_ticket`.`paytype` AS `paytype`, `sline_spot_ticket`.`award` AS `award`, `sline_spot_ticket`.`description` AS `description`, `sline_spot_ticket`.`addtime` AS `addtime`, `sline_spot_ticket`.`modtime` AS `modtime`, `sline_spot_ticket`.`displayorder` AS `displayorder`, `sline_spot_ticket`.`number` AS `number`, `sline_spot_ticket`.`bnum` AS `bnum`, `sline_spot_ticket`.`mnum` AS `mnum`, `sline_spot_ticket`.`startdate` AS `startdate`, `sline_spot_ticket`.`enddate` AS `enddate`, `sline_spot_ticket`.`jifencomment` AS `jifencomment`, `sline_spot_ticket`.`jifentprice` AS `jifentprice`, `sline_spot_ticket`.`jifenbook` AS `jifenbook`, `sline_spot_ticket`.`dingjin` AS `dingjin` FROM `sline_spot_ticket` AS `sline_spot_ticket` WHERE hotelid='1679' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot_Tick...', Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->_load_result(true)
#3 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1054): Kohana_ORM->find_all()
#4 D:\web\standsmore\phone\taglib\spot.php(77): Kohana_ORM->get_all()
#5 D:\web\standsmore\phone\application\cache\tplcache\default\spot\book.php(35): Taglib_Spot::suit(Array)
#6 D:\web\standsmore\phone\application\classes\stourweb\view.php(72): include('D:\web\standsmo...')
#7 D:\web\standsmore\phone\application\classes\stourweb\view.php(373): Stourweb_View->capture('D:\web\standsmo...', Array)
#8 D:\web\standsmore\phone\application\classes\stourweb\controller.php(61): Stourweb_View->render()
#9 D:\web\standsmore\phone\application\classes\controller\spot.php(71): Stourweb_Controller->display('spot/book')
#10 [internal function]: Controller_Spot->action_book()
#11 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#12 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#14 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#15 {main}
2015-09-29 17:57:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_spot_ticket_type' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-29 17:57:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_spot_ticket_type' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 18:14:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and suitid=2 LIMIT 1' at line 1 [ SELECT `sline_hotel_room_price`.`hotelid` AS `hotelid`, `sline_hotel_room_price`.`suitid` AS `suitid`, `sline_hotel_room_price`.`day` AS `day`, `sline_hotel_room_price`.`profit` AS `profit`, `sline_hotel_room_price`.`basicprice` AS `basicprice`, `sline_hotel_room_price`.`price` AS `price`, `sline_hotel_room_price`.`description` AS `description`, `sline_hotel_room_price`.`number` AS `number` FROM `sline_hotel_room_price` AS `sline_hotel_room_price` WHERE day= and suitid=2 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 18:14:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and suitid=2 LIMIT 1' at line 1 [ SELECT `sline_hotel_room_price`.`hotelid` AS `hotelid`, `sline_hotel_room_price`.`suitid` AS `suitid`, `sline_hotel_room_price`.`day` AS `day`, `sline_hotel_room_price`.`profit` AS `profit`, `sline_hotel_room_price`.`basicprice` AS `basicprice`, `sline_hotel_room_price`.`price` AS `price`, `sline_hotel_room_price`.`description` AS `description`, `sline_hotel_room_price`.`number` AS `number` FROM `sline_hotel_room_price` AS `sline_hotel_room_price` WHERE day= and suitid=2 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', false, Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1018): Kohana_ORM->_load_result(false)
#3 D:\web\standsmore\phone\application\classes\controller\hotel.php(166): Kohana_ORM->find()
#4 [internal function]: Controller_Hotel->action_create()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-29 18:15:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and suitid=2 LIMIT 1' at line 1 [ SELECT `sline_hotel_room_price`.`hotelid` AS `hotelid`, `sline_hotel_room_price`.`suitid` AS `suitid`, `sline_hotel_room_price`.`day` AS `day`, `sline_hotel_room_price`.`profit` AS `profit`, `sline_hotel_room_price`.`basicprice` AS `basicprice`, `sline_hotel_room_price`.`price` AS `price`, `sline_hotel_room_price`.`description` AS `description`, `sline_hotel_room_price`.`number` AS `number` FROM `sline_hotel_room_price` AS `sline_hotel_room_price` WHERE day= and suitid=2 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 18:15:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and suitid=2 LIMIT 1' at line 1 [ SELECT `sline_hotel_room_price`.`hotelid` AS `hotelid`, `sline_hotel_room_price`.`suitid` AS `suitid`, `sline_hotel_room_price`.`day` AS `day`, `sline_hotel_room_price`.`profit` AS `profit`, `sline_hotel_room_price`.`basicprice` AS `basicprice`, `sline_hotel_room_price`.`price` AS `price`, `sline_hotel_room_price`.`description` AS `description`, `sline_hotel_room_price`.`number` AS `number` FROM `sline_hotel_room_price` AS `sline_hotel_room_price` WHERE day= and suitid=2 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_h...', false, Array)
#1 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\web\standsmore\phone\modules\orm\classes\kohana\orm.php(1018): Kohana_ORM->_load_result(false)
#3 D:\web\standsmore\phone\application\classes\controller\hotel.php(166): Kohana_ORM->find()
#4 [internal function]: Controller_Hotel->action_create()
#5 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#6 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#9 {main}
2015-09-29 19:49:40 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Model_Spot::$typeid ~ APPPATH\classes\model\spot.php [ 116 ]
2015-09-29 19:49:40 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Model_Spot::$typeid ~ APPPATH\classes\model\spot.php [ 116 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 19:52:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Spot::search_seo() ~ APPPATH\classes\model\spot.php [ 130 ]
2015-09-29 19:52:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Spot::search_seo() ~ APPPATH\classes\model\spot.php [ 130 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 20:08:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_spot_pricelist' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-29 20:08:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_spot_pricelist' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 20:09:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(' at line 1 [ SELECT a.* FROM `sline_spot` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid AND b.classid=36) WHERE a.ishidden=0  AND FIND_IN_SET('36',a.kindlist)  AND a.price BETWEEN  AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 20:09:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(' at line 1 [ SELECT a.* FROM `sline_spot` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid AND b.classid=36) WHERE a.ishidden=0  AND FIND_IN_SET('36',a.kindlist)  AND a.price BETWEEN  AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\spot.php(112): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\spot.php(258): Model_Spot::search_result('guonalvyouf-155...')
#3 [internal function]: Controller_Spot->action_ajax_spot()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 20:11:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.disp' at line 1 [ SELECT a.* FROM `sline_spot` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid AND b.classid=36) WHERE a.ishidden=0  AND FIND_IN_SET('36',a.kindlist)  AND a.price BETWEEN 0 AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 20:11:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.disp' at line 1 [ SELECT a.* FROM `sline_spot` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid AND b.classid=36) WHERE a.ishidden=0  AND FIND_IN_SET('36',a.kindlist)  AND a.price BETWEEN 0 AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\spot.php(113): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\spot.php(258): Model_Spot::search_result('guonalvyouf-155...')
#3 [internal function]: Controller_Spot->action_ajax_spot()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 20:13:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.disp' at line 1 [ SELECT a.* FROM `sline_spot` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid AND b.classid=36) WHERE a.ishidden=0  AND FIND_IN_SET('36',a.kindlist)  AND a.price BETWEEN 0 AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 20:13:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.disp' at line 1 [ SELECT a.* FROM `sline_spot` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid AND b.typeid=5 AND a.webid=b.webid AND b.classid=36) WHERE a.ishidden=0  AND FIND_IN_SET('36',a.kindlist)  AND a.price BETWEEN 0 AND   and FIND_IN_SET(22,a.attrid)  and FIND_IN_SET(4,a.attrid) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\spot.php(113): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\spot.php(258): Model_Spot::search_result('guonalvyouf-155...')
#3 [internal function]: Controller_Spot->action_ajax_spot()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 20:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:23:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:23:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:24:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:24:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:25:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:25:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:25:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:25:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:26:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:26:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:28:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:28:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-09-29 20:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotels/all-0-0-九寨-0 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-09-29 20:45:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_Line_Jieshao' not found ~ APPPATH\cache\tplcache\default\line\show.php [ 68 ]
2015-09-29 20:45:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_Line_Jieshao' not found ~ APPPATH\cache\tplcache\default\line\show.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 20:45:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_Line_Jieshao' not found ~ APPPATH\cache\tplcache\default\line\show.php [ 68 ]
2015-09-29 20:45:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_Line_Jieshao' not found ~ APPPATH\cache\tplcache\default\line\show.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 20:47:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`sourcelineid` AS `sourcelineid`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE id= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 20:47:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`sourcelineid` AS `sourcelineid`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE id= LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2015-09-29 20:58:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 20:58:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 20:58:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-29 20:58:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 20:58:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-29 20:58:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 20:58:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
2015-09-29 20:58:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_line_suit_price' not found ~ MODPATH\orm\classes\kohana\orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2015-09-29 21:01:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:01:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:01:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:01:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:02:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:02:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:03:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:03:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:03:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:03:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:03:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:03:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:04:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:04:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:06:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:06:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-09-29 21:06:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-29 21:06:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT price FROM`sline_hotel_room_price` WHERE suitid='27' AND day>=1443456000 AND day< ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT price FR...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\hotel.php(196): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\hotel.php(289): Model_Hotel::suit_range_price('27', '2015-09-29', NULL, '1')
#3 [internal function]: Controller_Hotel->action_ajax_range_price()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Hotel))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}