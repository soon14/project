<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-08 09:58:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-03-08 09:58:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-03-08 09:58:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-03-08 09:58:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-03-08 09:59:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-03-08 09:59:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-03-08 10:04:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-03-08 10:04:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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