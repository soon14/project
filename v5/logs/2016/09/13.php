<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-13 01:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 01:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 01:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 01:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 02:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 02:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 02:17:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-13 02:17:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(116): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(695): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#10 {main}
2016-09-13 02:54:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 02:54:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 05:09:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-13 05:09:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(116): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(695): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#10 {main}
2016-09-13 07:23:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 07:23:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 07:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 07:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 07:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 07:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 07:26:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 07:26:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 07:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qhkugicvczmzx.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 07:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: qhkugicvczmzx.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 07:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 07:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 07:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 07:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 08:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 08:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 08:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 08:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 08:30:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-13 08:30:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT aid,titl...', false, Array)
#1 /home/wwwroot/www.aitto.net/v5/classes/model/article.php(87): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/v5/classes/controller/article.php(78): Model_Article::get_prev_next('prev', NULL)
#3 [internal function]: Controller_Article->action_show()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#8 {main}
2016-09-13 09:01:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 09:01:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 09:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 09:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 09:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 09:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 09:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 09:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 09:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 09:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 09:31:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-13 09:31:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT aid,titl...', false, Array)
#1 /home/wwwroot/www.aitto.net/v5/classes/model/article.php(87): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/v5/classes/controller/article.php(78): Model_Article::get_prev_next('prev', NULL)
#3 [internal function]: Controller_Article->action_show()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#8 {main}
2016-09-13 09:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 09:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 09:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 09:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 10:09:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 10:09:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 10:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 10:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 10:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 10:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 10:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 10:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 10:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 10:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 10:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 10:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 10:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 10:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 11:34:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 11:34:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 11:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 11:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 12:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 12:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 12:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 12:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 12:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 12:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 12:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 12:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 13:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 13:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 13:10:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-13 13:10:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(116): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(695): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#10 {main}
2016-09-13 13:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 13:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 13:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 13:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 13:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 13:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 14:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 14:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 15:14:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 15:14:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 15:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 15:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 15:40:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 15:40:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 15:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 15:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 16:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 16:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 16:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 16:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 16:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/phone/sjz.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-09-13 16:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/phone/sjz.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-09-13 16:31:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 16:31:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 17:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 17:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 17:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 17:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 17:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 17:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 17:54:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 17:54:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 17:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 17:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:11:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:11:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:13:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:13:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:14:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:14:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:14:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:14:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:49:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:49:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 18:49:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 18:49:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 20:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 20:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 20:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 20:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 21:18:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 21:18:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-09-13 21:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-09-13 21:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}