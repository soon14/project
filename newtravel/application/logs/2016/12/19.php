<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-19 10:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-19 10:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-19 10:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-19 10:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-19 10:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-19 10:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-19 10:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-19 10:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-19 10:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-19 10:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-19 10:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-19 10:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/insert_bbs_user was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-19 11:01:55 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:01:55 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Activity->action_insert_bbs_user()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 11:02:55 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:02:55 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Activity->action_insert_bbs_user()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 11:02:58 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:02:58 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Activity->action_insert_bbs_user()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 11:02:59 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:02:59 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Activity->action_insert_bbs_user()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 11:05:17 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:05:17 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Activity->action_insert_bbs_user()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 11:05:58 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:05:58 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Activity->action_insert_bbs_user()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 11:06:39 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:06:39 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_ORM->get_sql(false, 1)
#3 [internal function]: Controller_Activity->action_insert_bbs_user()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-19 11:06:46 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:06:46 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_ORM->get_sql(false, 1)
#3 [internal function]: Controller_Activity->action_insert_bbs_user()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-19 11:07:02 --- ERROR: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 11:07:02 --- STRACE: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, false, false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_ORM->get_sql(false, 1)
#3 [internal function]: Controller_Activity->action_insert_bbs_user()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-19 11:31:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Activity::get_access_token() ~ APPPATH/classes/controller/activity.php [ 904 ]
2016-12-19 11:31:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Activity::get_access_token() ~ APPPATH/classes/controller/activity.php [ 904 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-12-19 11:31:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Activity::get_access_token() ~ APPPATH/classes/controller/activity.php [ 904 ]
2016-12-19 11:31:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Activity::get_access_token() ~ APPPATH/classes/controller/activity.php [ 904 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-12-19 11:31:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Activity::get_access_token() ~ APPPATH/classes/controller/activity.php [ 901 ]
2016-12-19 11:31:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Activity::get_access_token() ~ APPPATH/classes/controller/activity.php [ 901 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-12-19 11:47:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL activity/vote was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-19 11:47:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL activity/vote was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-19 12:25:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'share_time' in 'order clause' [ SELECT * FROM `sline_activity_helper`  where act_id=7  ORDER BY share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 12:25:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'share_time' in 'order clause' [ SELECT * FROM `sline_activity_helper`  where act_id=7  ORDER BY share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(288): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_vote()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-19 14:05:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'ticketid' in 'where clause' [ UPDATE `sline_model_suit_price` SET `spotid` = '36', `ticketid` = '52', `adultbasicprice` = '10', `adultprofit` = '-9', `description` = '', `adultprice` = 1, `adultdistributionprice` = '', `adultmarketprice` = '', `day` = 1471190400, `number` = '-1' WHERE ticketid=52 and day='1471190400' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-19 14:05:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'ticketid' in 'where clause' [ UPDATE `sline_model_suit_price` SET `spotid` = '36', `ticketid` = '52', `adultbasicprice` = '10', `adultprofit` = '-9', `description` = '', `adultprice` = 1, `adultdistributionprice` = '', `adultmarketprice` = '', `day` = 1471190400, `number` = '-1' WHERE ticketid=52 and day='1471190400' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/spot.php(1978): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/spot.php(1750): Controller_Spot->saveBaoJia('36', '52', Array)
#3 [internal function]: Controller_Spot->action_ajax_ticket_save()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-19 15:39:43 --- ERROR: ErrorException [ 1 ]: Call to undefined function curls() ~ APPPATH/classes/controller/activity.php [ 1017 ]
2016-12-19 15:39:43 --- STRACE: ErrorException [ 1 ]: Call to undefined function curls() ~ APPPATH/classes/controller/activity.php [ 1017 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-12-19 15:39:46 --- ERROR: ErrorException [ 1 ]: Call to undefined function curls() ~ APPPATH/classes/controller/activity.php [ 1017 ]
2016-12-19 15:39:46 --- STRACE: ErrorException [ 1 ]: Call to undefined function curls() ~ APPPATH/classes/controller/activity.php [ 1017 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-12-19 15:40:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function curls() ~ APPPATH/classes/controller/activity.php [ 1017 ]
2016-12-19 15:40:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function curls() ~ APPPATH/classes/controller/activity.php [ 1017 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-12-19 16:39:42 --- ERROR: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-19 16:39:42 --- STRACE: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('rule', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(189): Kohana_ORM->__set('rule', '')
#2 [internal function]: Controller_Activitys->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 16:39:47 --- ERROR: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-19 16:39:47 --- STRACE: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('rule', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(189): Kohana_ORM->__set('rule', '')
#2 [internal function]: Controller_Activitys->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 16:39:48 --- ERROR: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-19 16:39:48 --- STRACE: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('rule', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(189): Kohana_ORM->__set('rule', '')
#2 [internal function]: Controller_Activitys->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 16:39:50 --- ERROR: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-19 16:39:50 --- STRACE: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('rule', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(189): Kohana_ORM->__set('rule', '')
#2 [internal function]: Controller_Activitys->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-19 16:40:09 --- ERROR: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-12-19 16:40:09 --- STRACE: Kohana_Exception [ 0 ]: The rule property does not exist in the Model_Activity class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('rule', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(189): Kohana_ORM->__set('rule', '')
#2 [internal function]: Controller_Activitys->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}