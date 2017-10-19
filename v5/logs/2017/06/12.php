<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-06-12 00:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:23:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 00:23:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(125): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(718): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#10 {main}
2017-06-12 00:24:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:24:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:33:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:33:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:35:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:35:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:38:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:38:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:38:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:38:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:38:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:38:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:40:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:40:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:41:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:41:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:52:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 00:52:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(125): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(718): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#10 {main}
2017-06-12 00:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 00:55:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 00:55:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:07:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:07:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:28:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:28:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:54:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:54:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 01:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 01:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:02:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:02:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:09:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:09:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:44:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:44:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 02:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 02:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:20:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:20:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:23:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:23:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:34:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:34:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:34:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:34:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:44:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 03:44:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(125): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(718): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#10 {main}
2017-06-12 03:45:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:45:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 03:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 03:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:18:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:18:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:19:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:19:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:26:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:26:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-704.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-704.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 04:57:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 04:57:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:03:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:03:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: sitemap.xml ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:32:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:32:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:33:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:33:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:43:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:43:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:45:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:45:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 05:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 05:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:02:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:02:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:08:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:08:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:11:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:11:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:17:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:17:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:29:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:29:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:32:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:32:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:53:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:53:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 06:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1088.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 06:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1088.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-979.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-979.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 07:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 07:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 07:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 07:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 07:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 07:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 08:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 08:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 08:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 08:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 08:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 08:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:04:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:04:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:06:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:06:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:16:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 08:16:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT aid,titl...', false, Array)
#1 /home/wwwroot/www.aitto.net/v5/classes/model/article.php(95): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/v5/classes/controller/article.php(111): Model_Article::get_prev_next('prev', NULL)
#3 [internal function]: Controller_Article->action_show()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#8 {main}
2017-06-12 08:16:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and status=1' at line 1 [ select count(memberid) as dd from `sline_notes` where memberid= and status=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 08:16:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and status=1' at line 1 [ select count(memberid) as dd from `sline_notes` where memberid= and status=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(me...', false, Array)
#1 /home/wwwroot/www.aitto.net/v5/classes/model/notes.php(271): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/v5/classes/controller/notes.php(284): Model_Notes::get_notenum(NULL)
#3 [internal function]: Controller_Notes->action_show()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Notes))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#8 {main}
2017-06-12 08:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:18:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:18:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 08:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 08:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 08:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 08:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:47:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1159.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:47:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1159.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:49:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:49:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 08:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 08:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 09:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 09:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 09:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 09:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wordpress/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 09:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wordpress/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 09:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL old/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 09:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL old/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 09:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 09:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test/wp-admin/setup-config.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 09:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1375.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1375.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:14:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1252.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:14:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1252.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:19:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:19:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:27:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:27:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:35:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:35:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 09:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-752.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 09:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-752.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:24:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:24:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:24:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:24:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:29:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:29:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/img/baoming.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-06-12 10:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/img/baoming.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:47:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:47:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:51:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:51:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:53:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:53:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 10:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 10:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 10:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 10:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 11:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 11:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 11:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 11:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 11:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 11:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 11:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 11:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 11:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 11:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-882.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-882.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:18:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:18:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:24:05 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 11:24:05 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(125): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(718): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#10 {main}
2017-06-12 11:42:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:42:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:50:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:50:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 11:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 11:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 12:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 12:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:13:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:13:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 12:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 12:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 12:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 12:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1332.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1332.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:38:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:38:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:39:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:39:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 12:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 12:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:03:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:03:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:13:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:13:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:21:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:21:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-06-12 13:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/register/doreg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 13:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:44:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-914.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:44:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-914.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 13:46:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 13:46:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(125): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(718): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#10 {main}
2017-06-12 13:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 13:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:04:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:04:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:11:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:11:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:17:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:17:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/images/Destination.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/images/Destination.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 14:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 14:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:42:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-873.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:42:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-873.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:48:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:48:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:50:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:50:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 14:57:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 14:57:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:02:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:02:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:12:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:12:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:13:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:13:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:20:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:20:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:20:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:20:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:21:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:21:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1096.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1096.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 15:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 15:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 15:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 15:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 16:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 16:07:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 16:07:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 16:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:12:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:12:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 16:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 16:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 16:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 16:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:23:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:23:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:26:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:26:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 16:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 16:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 16:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 16:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:47:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:47:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:52:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:52:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 16:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 16:57:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 16:57:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(125): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(718): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#10 {main}
2017-06-12 17:00:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:00:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:00:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:00:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:01:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:01:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:21:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:21:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 17:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 17:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 17:57:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 17:57:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:14:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:14:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:17:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:17:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:17:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:17:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:24:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:24:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:30:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:30:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:50:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:50:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 18:56:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 18:56:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:03:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:03:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-844.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-844.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:31:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:31:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 19:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 19:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 19:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 19:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 19:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 19:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:49:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-06-12 19:49:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(125): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(718): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#10 {main}
2017-06-12 19:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 19:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 19:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:01:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:01:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:02:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:02:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 20:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 20:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 20:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 20:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:17:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:17:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:18:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:18:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:19:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:19:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:23:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:23:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:40:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:40:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:43:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:43:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 20:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 20:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:45:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:45:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 21:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 21:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:23:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:23:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:33:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:33:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 22:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 22:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:06:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:06:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-733.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-733.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 23:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 23:45:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:45:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 23:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 23:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-848.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-848.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-06-12 23:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-06-12 23:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-06-12 23:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-06-12 23:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}