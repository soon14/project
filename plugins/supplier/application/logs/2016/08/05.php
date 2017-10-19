<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-05 10:27:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'isconsume=0 and (status ='5' or status='2') and usedate ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 10:27:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'isconsume=0 and (status ='5' or status='2') and usedate ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(646): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(448): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 10:28:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'isconsume=0 and (status ='5' or status='2') and usedate ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 10:28:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'isconsume=0 and (status ='5' or status='2') and usedate ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(646): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(448): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 10:28:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'isconsume=0 and (status ='5' or status='2')' at line 1 [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  FIND_IN_SET('3',supplierlist) isconsume=0 and (status ='5' or status='2')  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 10:28:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'isconsume=0 and (status ='5' or status='2')' at line 1 [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  FIND_IN_SET('3',supplierlist) isconsume=0 and (status ='5' or status='2')  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(646): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(448): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 10:33:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'usedate ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 10:33:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'usedate ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(646): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(448): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 11:00:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 11:00:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(648): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(450): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 11:01:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 11:01:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(648): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(450): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 11:02:44 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 11:02:44 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(648): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(450): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 11:03:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 11:03:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(648): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(450): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-05 11:03:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-05 11:03:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'unix_timestamp(usedate) ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(648): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/model/member/order.php(450): Model_Member_Order->_set_pages('member_order', 10, Array, 'addtime', ' FIND_IN_SET('3...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(85): Model_Member_Order->get_my_order_list('7', NULL, NULL, '')
#5 [internal function]: Controller_Pc_Order->action_all()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}