<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-08-21 09:43:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 46 ]
2017-08-21 09:43:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-08-21 09:43:47 --- ERROR: Kohana_Exception [ 0 ]: The selfDriMdd property does not exist in the Model_Mitao_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2017-08-21 09:43:47 --- STRACE: Kohana_Exception [ 0 ]: The selfDriMdd property does not exist in the Model_Mitao_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('selfDriMdd', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/mitao.php(1366): Kohana_ORM->__set('selfDriMdd', '')
#2 [internal function]: Controller_Mitao->action_mitao()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mitao))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-08-21 14:58:33 --- ERROR: Database_Exception [ 1060 ]: Duplicate column name 'e_backpay' [ ALTER TABLE `sline_mitao_extend_field` ADD COLUMN `e_backpay` varchar(255) NULL DEFAULT NULL COMMENT '允许退款' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-08-21 14:58:33 --- STRACE: Database_Exception [ 1060 ]: Duplicate column name 'e_backpay' [ ALTER TABLE `sline_mitao_extend_field` ADD COLUMN `e_backpay` varchar(255) NULL DEFAULT NULL COMMENT '允许退款' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'ALTER TABLE `sl...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/common.php(1725): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/attrid.php(660): Common::addField('sline_mitao_ext...', 'backpay', 'varchar(255)', '0', '\xE5\x85\x81\xE8\xAE\xB8\xE9\x80\x80\xE6\xAC\xBE')
#3 [internal function]: Controller_Attrid->action_ajax_extendfield_save()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Attrid))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}