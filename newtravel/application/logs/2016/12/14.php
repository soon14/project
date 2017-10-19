<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-14 10:47:54 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_cutpicture_user' doesn't exist [ select count(*) as dd from `sline_cutpicture_user` where openid ='oyq3hv1WJmBT-sAq_qS5CAKGrTz4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 10:47:54 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_cutpicture_user' doesn't exist [ select count(*) as dd from `sline_cutpicture_user` where openid ='oyq3hv1WJmBT-sAq_qS5CAKGrTz4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(194): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(178): Controller_Weixin->get_cutpic('oyq3hv1WJmBT-sA...')
#3 [internal function]: Controller_Weixin->action_usermana()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 10:52:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 10:52:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by share_time desc  limit 0,25' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  order by share_time desc  limit 0,25 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(223): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 10:54:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 10:54:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(282): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(270): Controller_Activity->getbiaohao('', 'oyq3hv1c2QfyYZU...')
#3 [internal function]: Controller_Activity->action_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 10:55:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 10:55:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(278): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(266): Controller_Activity->getbiaohao('', 'oyq3hv1c2QfyYZU...')
#3 [internal function]: Controller_Activity->action_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 11:16:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by id asc' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  order by id asc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 11:16:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by id asc' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  order by id asc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(422): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_genexcel()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-14 11:33:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by exchange_time asc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  order by exchange_time asc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 11:33:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by exchange_time asc' at line 1 [ SELECT * FROM `sline_activity_player`  where act_id=  order by exchange_time asc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(383): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_genexcel()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 11:34:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and  unix_timestamp(share_time)>= 1478228400  order by share_time desc' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  and  unix_timestamp(share_time)>= 1478228400  order by share_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 11:34:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and  unix_timestamp(share_time)>= 1478228400  order by share_time desc' at line 1 [ SELECT * FROM `sline_activity_share`  where act_id=  and  unix_timestamp(share_time)>= 1478228400  order by share_time desc  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(642): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Activity->action_genexcel_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 15:05:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 15:05:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(280): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(682): Controller_Activity->getbiaohao('', 'oyq3hv1c2QfyYZU...')
#3 [internal function]: Controller_Activity->action_genexcel_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 15:06:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 15:06:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(280): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(682): Controller_Activity->getbiaohao('', 'oyq3hv1c2QfyYZU...')
#3 [internal function]: Controller_Activity->action_genexcel_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 15:08:01 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 15:08:01 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(280): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(687): Controller_Activity->getbiaohao('', 'oyq3hv1c2QfyYZU...')
#3 [internal function]: Controller_Activity->action_genexcel_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 15:08:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 15:08:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY'' at line 1 [ select id from `sline_activity_player` where act_id= and openid ='oyq3hv1c2QfyYZUW4hkL4u1_eXgY' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select id from ...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(280): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activity.php(687): Controller_Activity->getbiaohao('', 'oyq3hv1c2QfyYZU...')
#3 [internal function]: Controller_Activity->action_genexcel_share()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activity))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-12-14 15:13:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column '方法' in 'where clause' [ select count(*) as num from sline_member_order a where a.typeid = 1 and a.memberid = 方法  and a.webid=0  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-14 15:13:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column '方法' in 'where clause' [ select count(*) as num from sline_member_order a where a.typeid = 1 and a.memberid = 方法  and a.webid=0  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(393): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Order->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}