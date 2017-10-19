<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-07-25 18:13:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/cache/tplcache/stourtravel/smallprogram/list.php [ 1 ]
2017-07-25 18:13:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/cache/tplcache/stourtravel/smallprogram/list.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-07-25 18:19:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'typeid' in 'where clause' [ SELECT `sline_smallprogram_question_attr`.`id` AS `id`, `sline_smallprogram_question_attr`.`webid` AS `webid`, `sline_smallprogram_question_attr`.`aid` AS `aid`, `sline_smallprogram_question_attr`.`attrname` AS `attrname`, `sline_smallprogram_question_attr`.`displayorder` AS `displayorder`, `sline_smallprogram_question_attr`.`isopen` AS `isopen`, `sline_smallprogram_question_attr`.`pid` AS `pid`, `sline_smallprogram_question_attr`.`destid` AS `destid`, `sline_smallprogram_question_attr`.`litpic` AS `litpic`, `sline_smallprogram_question_attr`.`description` AS `description`, `sline_smallprogram_question_attr`.`issystem` AS `issystem` FROM `sline_smallprogram_question_attr` AS `sline_smallprogram_question_attr` WHERE isopen=1 and pid=0 and typeid=104 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-07-25 18:19:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'typeid' in 'where clause' [ SELECT `sline_smallprogram_question_attr`.`id` AS `id`, `sline_smallprogram_question_attr`.`webid` AS `webid`, `sline_smallprogram_question_attr`.`aid` AS `aid`, `sline_smallprogram_question_attr`.`attrname` AS `attrname`, `sline_smallprogram_question_attr`.`displayorder` AS `displayorder`, `sline_smallprogram_question_attr`.`isopen` AS `isopen`, `sline_smallprogram_question_attr`.`pid` AS `pid`, `sline_smallprogram_question_attr`.`destid` AS `destid`, `sline_smallprogram_question_attr`.`litpic` AS `litpic`, `sline_smallprogram_question_attr`.`description` AS `description`, `sline_smallprogram_question_attr`.`issystem` AS `issystem` FROM `sline_smallprogram_question_attr` AS `sline_smallprogram_question_attr` WHERE isopen=1 and pid=0 and typeid=104 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Smallprog...', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/newtravel/application/classes/model/attrlist.php(24): Kohana_ORM->get_all()
#5 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/box.php(44): Model_Attrlist::getAttr('104')
#6 [internal function]: Controller_Box->action_index()
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Box))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}