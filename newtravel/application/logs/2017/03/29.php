<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-29 08:45:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-03-29 08:45:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-03-29 11:18:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '6' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-03-29 11:18:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pid' in 'where clause' [ SELECT `sline_cutpicture`.`id` AS `id`, `sline_cutpicture`.`activity_name` AS `activity_name`, `sline_cutpicture`.`activity_link` AS `activity_link`, `sline_cutpicture`.`part_num` AS `part_num`, `sline_cutpicture`.`activity_rule` AS `activity_rule`, `sline_cutpicture`.`starttime` AS `starttime`, `sline_cutpicture`.`overtime` AS `overtime`, `sline_cutpicture`.`displayorder` AS `displayorder`, `sline_cutpicture`.`isopen` AS `isopen`, `sline_cutpicture`.`count` AS `count`, `sline_cutpicture`.`ResContent` AS `ResContent`, `sline_cutpicture`.`PhoneContent` AS `PhoneContent` FROM `sline_cutpicture` AS `sline_cutpicture` WHERE `pid` = '6' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
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
2017-03-29 14:15:32 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33125700 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:15:32 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33125700 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:16:34 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33125700 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:16:34 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33125700 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:18:07 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33343964 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:18:07 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33343964 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:19:14 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33380724 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:19:14 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33380724 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:19:21 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33380724 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:19:21 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33380724 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:19:27 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33380724 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:19:27 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 33380724 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:19:45 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:19:45 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:19:47 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:19:47 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:20:08 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:20:08 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:21:21 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:21:21 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:21:58 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:21:58 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:03 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:03 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:09 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:09 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:15 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:15 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:20 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:20 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:26 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:26 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:36 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:36 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:42 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:42 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:22:52 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:22:52 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:23:03 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:23:03 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:23:09 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:23:09 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:23:19 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:23:19 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:23:55 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:23:55 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32428569 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:25:15 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:25:15 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:25:21 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:25:21 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:25:28 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:25:28 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-29 14:25:34 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
2017-03-29 14:25:34 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 32441625 bytes) ~ DOCROOT/public/vendor/Classes/PHPExcel/Writer/Excel5/Escher.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}