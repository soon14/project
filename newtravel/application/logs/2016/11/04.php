<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-04 11:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/share was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-11-04 11:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/share was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 11:28:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'share_time' in 'order clause' [ SELECT * FROM `sline_activity_player`  where act_id=3  order by share_time desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-04 11:28:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'share_time' in 'order clause' [ SELECT * FROM `sline_activity_player`  where act_id=3  order by share_time desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(163): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-11-04 11:43:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/activity.php [ 200 ]
2016-11-04 11:43:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/activity.php [ 200 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-04 11:43:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/activity.php [ 202 ]
2016-11-04 11:43:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/activity.php [ 202 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-04 14:29:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Common::session() ~ APPPATH/classes/controller/activity.php [ 668 ]
2016-11-04 14:29:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Common::session() ~ APPPATH/classes/controller/activity.php [ 668 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-04 14:34:19 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/controller/activity.php [ 668 ]
2016-11-04 14:34:19 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/controller/activity.php [ 668 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-04 14:34:44 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/controller/activity.php [ 668 ]
2016-11-04 14:34:44 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/controller/activity.php [ 668 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-04 14:36:08 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/controller/activity.php [ 668 ]
2016-11-04 14:36:08 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/controller/activity.php [ 668 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-04 14:40:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv_zW5U53VxlqHRVq6Q6LXSE'' at line 1 [  select share_num from `sline_activity_player` where act_id=  and openid ='oyq3hv_zW5U53VxlqHRVq6Q6LXSE' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-04 14:40:59 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv_zW5U53VxlqHRVq6Q6LXSE'' at line 1 [  select share_num from `sline_activity_player` where act_id=  and openid ='oyq3hv_zW5U53VxlqHRVq6Q6LXSE' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, ' select share_n...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(670): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(604): Controller_Activity->getshareall('oyq3hv_zW5U53Vx...')
#3 [internal function]: Controller_Activity->action_genexcel_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-11-04 15:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 15:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 15:40:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:40:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 15:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 15:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 15:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 15:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-11-04 15:40:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-11-04 15:40:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activityshare was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}