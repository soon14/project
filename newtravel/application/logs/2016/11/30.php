<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-11-30 17:16:08 --- ERROR: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/cutpicture.php [ 240 ]
2016-11-30 17:16:08 --- STRACE: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/cutpicture.php [ 240 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-11-30 17:20:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-30 17:20:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'limit 0,20' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(240): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_partUser()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-11-30 17:25:53 --- ERROR: View_Exception [ 0 ]: The requested view stourtravel/activity/user could not be found ~ APPPATH/classes/stourweb/view.php [ 281 ]
2016-11-30 17:25:53 --- STRACE: View_Exception [ 0 ]: The requested view stourtravel/activity/user could not be found ~ APPPATH/classes/stourweb/view.php [ 281 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/stourweb/view.php(157): Stourweb_View->set_filename('stourtravel/act...')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/stourweb/view.php(30): Stourweb_View->__construct('stourtravel/act...', NULL)
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/stourweb/controller.php(189): Stourweb_View::factory('stourtravel/act...')
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(294): Stourweb_Controller->display('stourtravel/act...')
#4 [internal function]: Controller_Cutpicture->action_partUser()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-11-30 17:42:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'exchange_time' in 'order clause' [ SELECT * FROM `sline_cutPicture_user`  where cutpid=2  order by exchange_time asc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-30 17:42:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'exchange_time' in 'order clause' [ SELECT * FROM `sline_cutPicture_user`  where cutpid=2  order by exchange_time asc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(235): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_partUser()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-11-30 18:22:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' or' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' or phone like '%13931993592%')  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-30 18:22:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' or' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' or phone like '%13931993592%')  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(228): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_partUser()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-11-30 18:23:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' ) ' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' )  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-30 18:23:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' ) ' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' )  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(228): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_partUser()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-11-30 18:32:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' ) ' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' )  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-30 18:32:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' ) ' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' )  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(229): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_partUser()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-11-30 18:33:26 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' ) ' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' )  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-11-30 18:33:26 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' ) ' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  and (id='13931993592' or nickname like '%13931993592%' or phone='13931993592' )  ORDER BY addtime desc  limit 0,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(229): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_partUser()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}