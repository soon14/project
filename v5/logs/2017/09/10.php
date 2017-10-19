<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-10 00:00:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:00:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:05:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 00:05:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 00:06:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:06:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:07:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:07:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 00:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 00:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 00:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 00:11:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 00:11:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 00:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:11:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/Ticketlist.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 00:11:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/Ticketlist.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 00:13:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:13:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:17:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:17:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:17:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 00:17:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 00:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:18:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:18:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:26:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:26:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:26:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:26:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: '+b.content[0]+' ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: '+b.content[0]+' ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:43:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:43:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:43:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:43:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 00:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 00:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:00:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:00:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:03:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:03:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 01:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 01:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL struts2-showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 01:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL struts2-showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 01:10:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/saveGangster.action ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:10:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/saveGangster.action ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:37:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:37:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:44:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:44:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:50:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 01:50:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 01:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:54:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 01:54:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 01:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:55:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:55:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:59:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:59:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 01:59:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 01:59:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:00:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:00:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:01:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 02:01:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 02:04:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:04:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:11:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:11:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:12:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:12:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:19:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:19:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:21:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:21:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:22:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:22:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:25:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:25:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:32:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:32:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 02:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 02:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:51:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:51:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 02:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 02:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:00:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:00:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:01:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:01:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:11:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 03:11:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 03:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 03:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 03:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 03:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 03:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:29:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 03:29:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 03:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:40:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:40:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:41:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 03:41:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 03:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:47:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:47:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 03:58:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 03:58:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:04:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:04:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:10:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:10:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:18:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:18:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:21:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 04:21:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 04:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:31:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:31:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:33:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:33:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:35:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:35:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 04:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 04:39:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 04:39:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 04:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 04:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 04:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:02:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:02:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:03:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 05:03:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 05:05:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:05:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:07:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 05:07:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 05:11:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 05:11:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 05:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:22:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 05:22:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 05:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:34:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:34:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:46:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:46:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 05:55:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 05:55:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:20:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:20:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:27:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:27:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:31:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:31:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:39:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:39:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:44:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:44:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:57:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:57:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 06:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 06:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:24:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:24:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:27:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 07:27:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 07:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 07:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 07:30:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:30:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:31:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 07:31:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 07:35:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 07:35:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 07:38:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 07:38:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 07:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:42:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 07:42:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 07:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:46:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 07:46:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 07:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 07:58:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 07:58:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:05:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 08:05:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 08:08:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:08:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:08:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:08:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:16:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:16:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 08:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 08:21:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:21:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:21:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:21:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 08:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 08:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:23:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:23:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:35:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 08:35:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 08:37:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:37:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:39:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 08:39:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 08:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:43:06 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 08:43:06 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 08:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:50:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 08:50:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 08:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 08:54:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 08:54:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 08:54:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 08:54:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL e/update/resetuser.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL e/update/resetuser.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL e/update/resetuser1.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL e/update/resetuser1.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diguo/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: diguo/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dg/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dg/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beifen/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beifen/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dgbf/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dgbf/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bf/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: bf/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: EmpireBak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: EmpireBak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dgbak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dgbak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beifenwang/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: beifenwang/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backsql/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: backsql/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebf/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ebf/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dgg/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dgg/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbbak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: dbbak/doc.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:02:07 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 09:02:07 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 09:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fck was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/jsp/connector.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/connectors/jsp/connector.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/browser/default/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/browser/default/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/browser/default/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor//editor/filemanager/browser/default/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL common/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL common/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/jsp/connector.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/connectors/jsp/connector.jsp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/browser/default/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/browser/default/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:13:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/browser/default/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:13:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: editor//editor/filemanager/browser/default/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:13:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editor/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:13:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editor/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:13:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 09:13:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 09:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fck//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fck//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fck//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fck//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/browser/default/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/browser/default/connectors/asp/connector.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:16:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:16:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/browser/default/connectors/aspx/connector.aspx ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:16:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:16:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/browser/default/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: fckeditor//editor/filemanager/browser/default/connectors/php/connector.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL images/upload/fckediter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL images/upload/fckediter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manage/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manage/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scripts/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scripts/fckeditor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor/editor/filemanager/connectors/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor/editor/filemanager/connectors/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor/editor/filemanager/upload/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor/editor/filemanager/upload/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:20:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 09:20:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 09:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:23:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:23:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/browser/default/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/browser/default/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:31:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 09:31:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 09:33:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:33:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:43:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:43:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 09:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 09:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:10:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:10:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:13:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:13:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:25:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:25:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:25:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:25:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:25:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:25:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 10:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 10:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:38:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:38:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:39:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:39:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 10:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 10:59:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 10:59:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 11:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:03:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 11:03:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 11:04:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:04:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:29:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:29:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:35:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:35:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:40:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:40:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:48:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:48:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:49:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:49:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:49:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:49:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-364.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-364.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:56:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:56:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:57:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 11:57:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 11:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 11:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 11:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:05:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 12:05:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 12:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:17:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:17:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:17:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:17:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:19:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:19:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:26:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:26:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 12:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 12:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 12:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 12:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:41:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:41:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:48:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:48:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 12:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 12:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL struts2-showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 12:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL struts2-showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 12:49:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/saveGangster.action ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:49:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/saveGangster.action ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 12:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 12:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:13:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:13:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:29:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:29:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/FCKeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/FCKeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/upload/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/upload/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/upload/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/upload/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/FCKeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/FCKeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/FCKeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/FCKeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/browser/default/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/browser/default/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL includes/fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/browser/default/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/connectors/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/connectors/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/aspx/upload.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/asp/upload.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kcfinder/browse.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kcfinder/browse.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ali.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ali.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:35:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:35:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htaccess.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powered_by.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/powered_by.png ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL components/com_mailto/views/sent/metadata.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 13:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL components/com_mailto/views/sent/metadata.xml was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 13:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:42:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:42:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:53:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:53:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 13:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 13:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:00:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 14:00:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 14:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:21:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:21:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:26:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:26:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:29:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:29:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:34:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:34:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 14:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 14:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:42:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:42:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 14:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 14:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 14:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 14:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 14:53:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 14:53:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:08:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:08:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:08:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:08:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:10:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:10:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:11:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zjitinstall/.bak ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:11:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: zjitinstall/.bak ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.bak ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.bak ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.bak ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install/.bak ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgcgplus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hgcgplus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tncbplus/90sec.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tncbplus/90sec.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/90sec.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/90sec.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/90sec.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/90sec.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:13:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:13:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 15:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 15:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 15:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 15:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:14:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:14:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:24:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:24:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:29:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:29:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:32:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:32:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:39:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:39:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:44:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:44:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/download.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/download.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:06:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:06:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:08:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:08:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:11:54 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 16:11:54 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 16:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:31:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:31:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:31:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:31:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:42:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:42:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:43:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:43:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/icon.fw.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:50:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:50:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:51:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:51:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:54:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:54:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL struts2-showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 16:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL struts2-showcase/integration/saveGangster.action was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 16:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/saveGangster.action ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: integration/saveGangster.action ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 16:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 16:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 17:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 17:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 17:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 17:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:10:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:10:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:11:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:11:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:31:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:31:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:51:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:51:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 17:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 17:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 17:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/selfDriving/SelfDriving.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 17:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 17:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 17:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:06:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:06:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:07:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:07:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:11:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:11:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:19:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:19:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:41:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:41:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:42:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:42:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:49:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 18:49:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 18:50:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:50:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 18:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 18:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:02:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:02:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:08:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:08:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:11:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:11:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:11:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:11:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:13:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:13:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:25:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:25:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:29:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:29:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:30:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:30:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:31:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:31:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:36:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:36:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 19:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 19:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 19:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 19:50:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:50:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:54:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:54:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 19:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 19:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:01:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:01:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:11:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 20:11:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 20:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:14:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 20:14:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 20:14:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 20:14:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 20:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:15:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 20:15:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 20:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:36:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:36:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:37:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 20:37:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 20:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:40:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:40:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:43:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:43:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:43:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:43:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/fckeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/FCKeditor/editor/filemanager/upload/php/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/asp/connector.asp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/php/connector.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:43:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:43:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ckeditor/ckfinder/core/connector/aspx/connector.aspx was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kcfinder/browse.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kcfinder/browse.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: xmlrpc.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:44:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:44:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/images/TravelNotes.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/mycss/images/TravelNotes.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/images/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:46:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:46:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:47:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:47:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:53:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 20:53:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 20:53:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 20:53:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 20:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 20:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:57:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 20:57:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 20:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 20:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/spot/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 21:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:02:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:02:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:06:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:06:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:20:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:20:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:21:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:21:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:31:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:31:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:40:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:40:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:46:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:46:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:53:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 21:53:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 21:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 21:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 21:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:09:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:09:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:13:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:13:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:14:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:14:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: syWebEditor/upimg.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: syWebEditor/upimg.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/upload.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/upload.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: license.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/images/wordpress.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/images/wordpress.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/images/wp-logo-2x.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/images/wp-logo-2x.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: help.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: readme.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/css/colors-classic.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/css/colors-classic.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/js/media-upload.dev.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-admin/js/media-upload.dev.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/akismet/akismet.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/plugins/akismet/akismet.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/classic/rtl.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/classic/rtl.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyeleven/readme.txt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyeleven/readme.txt was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-content/themes/twentyten/style.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/css/buttons.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/css/buttons.css was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/scriptaculous/wp-scriptaculous.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/scriptaculous/wp-scriptaculous.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/langs/wp-langs-en.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/langs/wp-langs-en.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:18:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/wp-tinymce.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:18:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL wp-includes/js/tinymce/wp-tinymce.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/destination/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2017-09-10 22:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/trategy/aittoTravel-ico.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#3 {main}
2017-09-10 22:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:30:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:30:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:33:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:33:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:33:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:33:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:34:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 22:34:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 22:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 22:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 22:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:01:34 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-10 23:01:34 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time`, `sline_spot_extend_field`.`e_tel` AS `e_tel` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-09-10 23:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:12:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:12:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:14:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:14:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:42:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:42:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: res/imagesgrey.gif ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:47:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:47:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:49:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:49:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:50:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:50:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:54:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:54:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:54:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:54:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: wp-login.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}
2017-09-10 23:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-09-10 23:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: raiders/javascript; ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(146): Kohana_Request->execute()
#1 {main}