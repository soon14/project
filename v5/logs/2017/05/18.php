<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-05-18 00:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 00:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 00:02:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:02:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:13:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 00:13:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 00:13:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 00:13:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 00:15:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 00:15:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 00:16:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:16:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:24:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:24:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-159.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-159.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:26:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 00:26:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 00:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:27:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:27:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-959.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-959.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-includes/wlwmanifest.xml ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 00:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 00:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wordpress/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 00:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wordpress/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 00:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 00:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 00:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL site/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 00:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL site/wp-includes/wlwmanifest.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 00:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:46:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:46:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 00:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 00:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/che/150310090302_f8f4a73159adb1a.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 01:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/che/150310090302_f8f4a73159adb1a.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 01:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:11:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:11:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:14:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:14:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1378.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1378.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:41:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:41:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 01:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/common/footer-logo.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 01:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/common/footer-logo.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 01:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 01:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 02:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 02:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1205.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1205.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:16:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/84021466819010.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 02:16:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/84021466819010.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 02:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:22:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:22:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/79291444610358.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 02:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/79291444610358.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 02:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:31:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:31:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:32:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:32:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:34:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 02:34:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 02:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 02:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 02:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:04:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 03:04:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 03:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 03:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 03:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 03:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:22:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-234.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:22:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-234.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:25:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:25:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-670.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-670.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/ayid-70.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/ayid-70.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/css/dev/core.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/css/dev/core.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/css/addindex.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/css/addindex.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/js/easyui.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/js/easyui.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/css/dev/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/css/dev/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.easyui.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.easyui.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/js/search.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/js/search.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/js/easyui.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/js/easyui.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.easyui.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/js/jquery.easyui.min.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/images/logo_yhcjc.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/themes/site/website/default/images/logo_yhcjc.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:45:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:45:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:47:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 03:47:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 03:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/44461427159539.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 03:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/44461427159539.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 03:55:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:55:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 03:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-884.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 03:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-884.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/ayid-41.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/ayid-41.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:00:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/ayid-41.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:00:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/ayid-41.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-187.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-187.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:14:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:14:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/images/wordpress.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/images/wordpress.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/images/wp-logo-2x.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/images/wp-logo-2x.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/css/colors-classic.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/css/colors-classic.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/js/media-upload.dev.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/js/media-upload.dev.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/akismet/akismet.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/akismet/akismet.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/classic/rtl.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/classic/rtl.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyeleven/readme.txt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyeleven/readme.txt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/css/buttons.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/css/buttons.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/scriptaculous/wp-scriptaculous.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/scriptaculous/wp-scriptaculous.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/langs/wp-langs-en.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/langs/wp-langs-en.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/wp-tinymce.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 04:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/wp-tinymce.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 04:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-498.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-498.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:25:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:25:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:27:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 04:27:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 04:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-301.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-301.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-25.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-25.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:28:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:28:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1041.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1041.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-611.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-611.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:36:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-611.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:36:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-611.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-892.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-892.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1052.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1052.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 04:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 04:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:02:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1352.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:02:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1352.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:03:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:03:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:05:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:05:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:42:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:42:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:45:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:45:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 05:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .well-known/apple-app-site-association ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 05:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: .well-known/apple-app-site-association ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:15:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:15:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:20:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:20:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-799.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-799.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-799.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-799.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:24:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:24:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:25:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:25:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1024.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1024.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:32:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:32:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:42:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:42:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:42:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:42:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:42:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:42:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-322.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-322.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/65911446299742.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 06:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/65911446299742.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 06:53:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:53:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 06:53:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:53:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:53:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:53:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:53:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:53:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:53:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:53:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:53:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/61611425862944.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 06:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/61611425862944.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 06:57:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 06:57:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 06:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 06:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:10:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:10:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-857.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-857.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:15:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:15:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:22:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/65911446299742.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 07:22:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/65911446299742.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 07:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:35:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 07:35:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 07:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:38:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 07:38:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 07:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/bbs/member.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 07:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/bbs/member.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 07:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 07:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 07:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:02:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:02:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:04:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 08:04:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 08:05:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 08:05:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 08:05:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 08:05:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 08:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:15:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:15:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:15:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:15:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:27:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:27:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:34:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:34:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:41:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:41:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:44:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:44:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/bbs/forum.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 08:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/bbs/forum.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:47:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:47:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 08:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 08:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 08:56:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 08:56:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:10:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 09:10:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 09:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:19:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:19:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:20:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/tagid-374.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/tagid-374.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:34:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1229.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:34:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-1229.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 09:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 09:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 09:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 09:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 09:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 09:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 09:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 09:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 09:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 09:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 09:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 09:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-611.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-611.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 09:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 09:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/bbs/member.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 10:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/bbs/member.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 10:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 10:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 10:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 10:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 10:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 10:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 10:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:15:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:15:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:19:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 10:19:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 10:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/36481429749376.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 10:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/36481429749376.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 10:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:37:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 10:37:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 10:37:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 10:37:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 10:37:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 10:37:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 10:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-511.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-511.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:55:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:55:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:57:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:57:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 10:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 10:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-355.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-355.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-133.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-133.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-467.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-467.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-414.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-414.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-133.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-133.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-198.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-198.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/tagid-507.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/tagid-507.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:12:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 11:12:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 11:12:37 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 11:12:37 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 11:12:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 11:12:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 11:12:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 11:12:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 11:16:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-839.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:16:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-839.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:28:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 11:28:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 11:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:33:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-239.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:33:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-239.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:42:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:42:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/images/Destination.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 11:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/images/Destination.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 11:55:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:55:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 11:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 11:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-55.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 12:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 12:02:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:02:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:06:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:06:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:12:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:12:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:12:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:12:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:12:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:12:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:12:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:12:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:12:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:12:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:12:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:12:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:12:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:12:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:16:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-906.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:16:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-906.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:17:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 12:17:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 12:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:32:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:32:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:36:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:36:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:44:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:44:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 12:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-598.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 12:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-598.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-817.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-817.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-817.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-817.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:16:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 13:16:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 13:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Public/images/face/face_1.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 13:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Public/images/face/face_1.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 13:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 13:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 13:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 13:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:32:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 13:32:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 13:35:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 13:35:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 13:35:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 13:35:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 13:35:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 13:35:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 13:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 13:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 13:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 13:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 13:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:42:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:42:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 13:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 13:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:34:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:34:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:38:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:38:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:39:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:39:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:41:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:41:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:45:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:45:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:48:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:48:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:50:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:50:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:50:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:50:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:50:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:50:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:50:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:50:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 14:53:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:53:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:53:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 14:53:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 14:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 14:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 14:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 14:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:06:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:06:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:31:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 15:31:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 15:31:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 15:31:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 15:32:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 15:32:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 15:32:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 15:32:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 15:32:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 15:32:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 15:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:32:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:32:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:36:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:36:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:43:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:43:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:43:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shijiazhuang/notes/show_110.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:43:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shijiazhuang/notes/show_110.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:54:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1378.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:54:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1378.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:54:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1378.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:54:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1378.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 15:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 15:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 15:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 15:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-978.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-978.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:06:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:06:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:12:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:12:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:12:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:12:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:12:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:12:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:12:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:12:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:13:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:13:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:13:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:13:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:21:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:21:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:23:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:23:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:24:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:24:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:24:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:24:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:24:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:24:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:27:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:27:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:33:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:33:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:33:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:33:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:33:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:33:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:39:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:39:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:39:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:39:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:39:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:39:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:40:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:40:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:47:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:47:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:47:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:47:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:47:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 16:47:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 16:48:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:48:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 16:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 16:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 16:55:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 16:55:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:07:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:07:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:08:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:08:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:08:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:08:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:10:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 17:10:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 17:11:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 17:11:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 17:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:14:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 17:14:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 17:16:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:16:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:16:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:16:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:16:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 17:16:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 17:17:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:17:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:29:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:29:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:37:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:37:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:41:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 17:41:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 17:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-871.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-871.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:44:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:44:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 17:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 17:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:48:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:48:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 17:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 17:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:06:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:06:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:16:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:16:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 18:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 18:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 18:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 18:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:50:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:50:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:51:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:51:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 18:59:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 18:59:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-522.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-522.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-522.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-522.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/44651444351372.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 19:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/js/dev/ueditor/php/upload/44651444351372.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 19:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:50:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_208.html/trackback ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:50:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_208.html/trackback ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:51:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 19:51:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 19:57:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 19:57:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 20:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:07:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:07:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 20:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 20:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 20:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 20:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-697.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-697.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-697.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-697.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-994.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-994.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-994.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/yhq-994.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:39:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:39:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:43:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:43:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:52:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:52:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 20:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 20:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:07:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:07:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:08:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 21:08:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 21:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:30:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:30:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:32:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:32:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:37:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:37:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:50:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 21:50:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 21:51:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:51:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 21:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 21:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:09:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 22:09:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 22:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:12:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 22:12:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/chejiache/about:blank was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 22:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:16:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:16:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:25:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:25:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 22:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 22:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 22:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 22:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:36:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 22:36:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 22:38:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 22:38:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 22:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:44:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:44:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:48:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:48:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:49:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/che/car-pic09.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 22:49:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/che/car-pic09.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 22:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/che/150721092129_d420c608f5b2d1f.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-05-18 22:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL che/res/images/che/150721092129_d420c608f5b2d1f.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 22:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:52:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:52:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 22:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 22:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 22:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 23:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-05-18 23:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-05-18 23:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/show_326.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:22:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:22:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:31:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/typeid-3.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:31:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/typeid-3.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:42:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:42:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:43:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:43:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:48:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:48:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:49:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and status=1' at line 1 [ select count(memberid) as dd from `sline_notes` where memberid= and status=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-18 23:49:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and status=1' at line 1 [ select count(memberid) as dd from `sline_notes` where memberid= and status=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-05-18 23:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-05-18 23:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-05-18 23:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}