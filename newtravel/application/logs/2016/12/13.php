<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-13 08:56:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 08:56:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(86): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 08:57:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and istakeprize='0'  limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  and istakeprize='0'  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 08:57:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and istakeprize='0'  limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  and istakeprize='0'  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(86): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 08:57:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and istakeprize='0'  order by best_time desc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  and istakeprize='0'  order by best_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 08:57:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and istakeprize='0'  order by best_time desc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  and istakeprize='0'  order by best_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(451): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_genexcel_3()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 08:57:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 08:57:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(169): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:06:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:06:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(169): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:09:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and  nickname like '%jhfd%'  order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  and  nickname like '%jhfd%'  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:09:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and  nickname like '%jhfd%'  order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  and  nickname like '%jhfd%'  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(169): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:12:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and  unix_timestamp(share_time)>= 1478228400  order by share_time desc' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  and  unix_timestamp(share_time)>= 1478228400  order by share_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:12:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and  unix_timestamp(share_time)>= 1478228400  order by share_time desc' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  and  unix_timestamp(share_time)>= 1478228400  order by share_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(570): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_genexcel_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:27:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by exchange_time asc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  order by exchange_time asc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:27:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by exchange_time asc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  order by exchange_time asc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(311): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_genexcel()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:29:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by best_time desc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  order by best_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:29:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by best_time desc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  order by best_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(451): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_genexcel_3()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:32:31 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:32:31 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(86): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:54:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:54:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(86): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 09:59:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 09:59:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(86): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 10:01:00 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 10:01:00 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(86): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-13 14:05:10 --- ERROR: Kohana_Exception [ 0 ]: The ResContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-13 14:05:10 --- STRACE: Kohana_Exception [ 0 ]: The ResContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('ResContent', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(198): Kohana_ORM->__set('ResContent', '')
#2 [internal function]: Controller_Cutpicture->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-13 14:05:17 --- ERROR: Kohana_Exception [ 0 ]: The PhoneContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-13 14:05:17 --- STRACE: Kohana_Exception [ 0 ]: The PhoneContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('PhoneContent', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(198): Kohana_ORM->__set('PhoneContent', '')
#2 [internal function]: Controller_Cutpicture->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-13 14:06:05 --- ERROR: Kohana_Exception [ 0 ]: The PhoneContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-13 14:06:05 --- STRACE: Kohana_Exception [ 0 ]: The PhoneContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('PhoneContent', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(198): Kohana_ORM->__set('PhoneContent', '')
#2 [internal function]: Controller_Cutpicture->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-13 14:06:20 --- ERROR: Kohana_Exception [ 0 ]: The PhoneContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-13 14:06:20 --- STRACE: Kohana_Exception [ 0 ]: The PhoneContent property does not exist in the Model_Cutpicture class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('PhoneContent', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(198): Kohana_ORM->__set('PhoneContent', '')
#2 [internal function]: Controller_Cutpicture->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-13 15:49:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 15:49:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_c...', 'Model_Cutpictur...', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(87): Kohana_ORM->get_all()
#5 [internal function]: Controller_Cutpicture->action_index()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#10 {main}
2016-12-13 15:49:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-13 15:49:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '2' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_c...', 'Model_Cutpictur...', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(87): Kohana_ORM->get_all()
#5 [internal function]: Controller_Cutpicture->action_index()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#10 {main}