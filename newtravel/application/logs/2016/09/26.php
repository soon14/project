<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-09-26 13:55:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='157'' at line 1 [ select aid,webid, as title from sline_ where id='157' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 13:55:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='157'' at line 1 [ select aid,webid, as title from sline_ where id='157' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select aid,webi...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/model/question.php(58): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/comment.php(72): Model_Question->getProductName('157', '101')
#3 [internal function]: Controller_Comment->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Comment))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL avtivity/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-09-26 15:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL avtivity/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-09-26 15:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL avtivity/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-09-26 15:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL avtivity/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-09-26 15:04:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:04:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(44): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:05:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:05:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(44): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:05:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:05:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(44): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:06:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:06:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'exchang_pid' in 'where clause' [ SELECT * FROM `sline_activity_player`  where  exchang_pid!=0  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(44): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:45:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and id='2' or phone='2'  limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  and id='2' or phone='2'  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:45:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and id='2' or phone='2'  limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  and id='2' or phone='2'  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(50): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:47:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player` where  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:47:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player` where  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(50): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:50:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT count(*) as alls FROM `sline_activity_player` where  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:50:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ SELECT count(*) as alls FROM `sline_activity_player` where  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT count(*)...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(68): Kohana_ORM->get_sql('SELECT count(*)...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 15:51:32 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where openid!=0' at line 1 [ SELECT count(*) as alls FROM `sline_activity_player` where  where openid!=0  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-09-26 15:51:32 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'where openid!=0' at line 1 [ SELECT count(*) as alls FROM `sline_activity_player` where  where openid!=0  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT count(*)...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(69): Kohana_ORM->get_sql('SELECT count(*)...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-09-26 16:22:14 --- ERROR: ErrorException [ 1 ]: Call to undefined function getprize() ~ APPPATH/classes/controller/activity.php [ 173 ]
2016-09-26 16:22:14 --- STRACE: ErrorException [ 1 ]: Call to undefined function getprize() ~ APPPATH/classes/controller/activity.php [ 173 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}