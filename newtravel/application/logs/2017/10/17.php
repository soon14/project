<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-10-17 09:11:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_activity`.`id` AS `id`, `sline_activity`.`activity_name` AS `activity_name`, `sline_activity`.`rule` AS `rule`, `sline_activity`.`part_num` AS `part_num`, `sline_activity`.`help_num` AS `help_num`, `sline_activity`.`show_num` AS `show_num`, `sline_activity`.`share_num` AS `share_num`, `sline_activity`.`add_time` AS `add_time`, `sline_activity`.`starttime` AS `starttime`, `sline_activity`.`overtime` AS `overtime`, `sline_activity`.`ishidden` AS `ishidden`, `sline_activity`.`displayorder` AS `displayorder` FROM `sline_activity` AS `sline_activity` WHERE `pid` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-10-17 09:11:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_activity`.`id` AS `id`, `sline_activity`.`activity_name` AS `activity_name`, `sline_activity`.`rule` AS `rule`, `sline_activity`.`part_num` AS `part_num`, `sline_activity`.`help_num` AS `help_num`, `sline_activity`.`show_num` AS `show_num`, `sline_activity`.`share_num` AS `share_num`, `sline_activity`.`add_time` AS `add_time`, `sline_activity`.`starttime` AS `starttime`, `sline_activity`.`overtime` AS `overtime`, `sline_activity`.`ishidden` AS `ishidden`, `sline_activity`.`displayorder` AS `displayorder` FROM `sline_activity` AS `sline_activity` WHERE `pid` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_a...', 'Model_Activity', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(79): Kohana_ORM->get_all()
#5 [internal function]: Controller_Activitys->action_index()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#10 {main}
2017-10-17 09:11:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_activity`.`id` AS `id`, `sline_activity`.`activity_name` AS `activity_name`, `sline_activity`.`rule` AS `rule`, `sline_activity`.`part_num` AS `part_num`, `sline_activity`.`help_num` AS `help_num`, `sline_activity`.`show_num` AS `show_num`, `sline_activity`.`share_num` AS `share_num`, `sline_activity`.`add_time` AS `add_time`, `sline_activity`.`starttime` AS `starttime`, `sline_activity`.`overtime` AS `overtime`, `sline_activity`.`ishidden` AS `ishidden`, `sline_activity`.`displayorder` AS `displayorder` FROM `sline_activity` AS `sline_activity` WHERE `pid` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-10-17 09:11:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_activity`.`id` AS `id`, `sline_activity`.`activity_name` AS `activity_name`, `sline_activity`.`rule` AS `rule`, `sline_activity`.`part_num` AS `part_num`, `sline_activity`.`help_num` AS `help_num`, `sline_activity`.`show_num` AS `show_num`, `sline_activity`.`share_num` AS `share_num`, `sline_activity`.`add_time` AS `add_time`, `sline_activity`.`starttime` AS `starttime`, `sline_activity`.`overtime` AS `overtime`, `sline_activity`.`ishidden` AS `ishidden`, `sline_activity`.`displayorder` AS `displayorder` FROM `sline_activity` AS `sline_activity` WHERE `pid` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_a...', 'Model_Activity', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(79): Kohana_ORM->get_all()
#5 [internal function]: Controller_Activitys->action_index()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#10 {main}
2017-10-17 09:11:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_activity`.`id` AS `id`, `sline_activity`.`activity_name` AS `activity_name`, `sline_activity`.`rule` AS `rule`, `sline_activity`.`part_num` AS `part_num`, `sline_activity`.`help_num` AS `help_num`, `sline_activity`.`show_num` AS `show_num`, `sline_activity`.`share_num` AS `share_num`, `sline_activity`.`add_time` AS `add_time`, `sline_activity`.`starttime` AS `starttime`, `sline_activity`.`overtime` AS `overtime`, `sline_activity`.`ishidden` AS `ishidden`, `sline_activity`.`displayorder` AS `displayorder` FROM `sline_activity` AS `sline_activity` WHERE `pid` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-10-17 09:11:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_activity`.`id` AS `id`, `sline_activity`.`activity_name` AS `activity_name`, `sline_activity`.`rule` AS `rule`, `sline_activity`.`part_num` AS `part_num`, `sline_activity`.`help_num` AS `help_num`, `sline_activity`.`show_num` AS `show_num`, `sline_activity`.`share_num` AS `share_num`, `sline_activity`.`add_time` AS `add_time`, `sline_activity`.`starttime` AS `starttime`, `sline_activity`.`overtime` AS `overtime`, `sline_activity`.`ishidden` AS `ishidden`, `sline_activity`.`displayorder` AS `displayorder` FROM `sline_activity` AS `sline_activity` WHERE `pid` = '1' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_a...', 'Model_Activity', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/activitys.php(79): Kohana_ORM->get_all()
#5 [internal function]: Controller_Activitys->action_index()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Activitys))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#10 {main}
2017-10-17 11:32:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-10-17 11:32:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.*  fro...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/distributor.php(1031): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Distributor->action_distributorIncome()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Distributor))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}