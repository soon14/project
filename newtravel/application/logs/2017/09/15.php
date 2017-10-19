<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-15 16:48:52 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL DEFAULT NULL COMMENT ''' at line 1 [ ALTER TABLE `sline_` ADD COLUMN `e_`  NULL DEFAULT NULL COMMENT '' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-15 16:48:52 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL DEFAULT NULL COMMENT ''' at line 1 [ ALTER TABLE `sline_` ADD COLUMN `e_`  NULL DEFAULT NULL COMMENT '' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'ALTER TABLE `sl...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/common.php(1725): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/attrid.php(660): Common::addField('sline_', NULL, NULL, NULL, NULL)
#3 [internal function]: Controller_Attrid->action_ajax_extendfield_save()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Attrid))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2017-09-15 16:49:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL DEFAULT NULL COMMENT ''' at line 1 [ ALTER TABLE `sline_` ADD COLUMN `e_`  NULL DEFAULT NULL COMMENT '' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-15 16:49:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL DEFAULT NULL COMMENT ''' at line 1 [ ALTER TABLE `sline_` ADD COLUMN `e_`  NULL DEFAULT NULL COMMENT '' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'ALTER TABLE `sl...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/common.php(1725): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/attrid.php(660): Common::addField('sline_', NULL, NULL, NULL, NULL)
#3 [internal function]: Controller_Attrid->action_ajax_extendfield_save()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Attrid))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2017-09-15 16:54:34 --- ERROR: Kohana_Exception [ 0 ]: Cannot update spot model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2017-09-15 16:54:34 --- STRACE: Kohana_Exception [ 0 ]: Cannot update spot model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/spot.php(1135): Kohana_ORM->update()
#1 [internal function]: Controller_Spot->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}