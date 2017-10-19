<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-31 15:30:01 --- ERROR: Database_Exception [ 1060 ]: Duplicate column name 'e_f' [ ALTER TABLE `sline_article_extend_field` ADD COLUMN `e_f` mediumtext NULL DEFAULT NULL COMMENT '的' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-31 15:30:01 --- STRACE: Database_Exception [ 1060 ]: Duplicate column name 'e_f' [ ALTER TABLE `sline_article_extend_field` ADD COLUMN `e_f` mediumtext NULL DEFAULT NULL COMMENT '的' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'ALTER TABLE `sl...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/common.php(839): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/attrid.php(640): Common::addField('sline_article_e...', 'f', 'mediumtext', '0', '\xE7\x9A\x84')
#3 [internal function]: Controller_Attrid->action_ajax_extendfield_save()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Attrid))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}