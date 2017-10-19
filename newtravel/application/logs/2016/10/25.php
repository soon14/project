<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-25 09:27:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phone' in 'field list' [ UPDATE `bbs_hjbox_users` SET phone='13931993592' WHERE openid='oyq3hv1WJmBT-sAq_qS5CAKGrTz4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 09:27:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phone' in 'field list' [ UPDATE `bbs_hjbox_users` SET phone='13931993592' WHERE openid='oyq3hv1WJmBT-sAq_qS5CAKGrTz4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `bbs_hjb...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `bbs_hjb...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(253): Kohana_ORM->query('UPDATE `bbs_hjb...')
#4 [internal function]: Controller_Weixin->action_editphone()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-10-25 09:28:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'phone' in 'field list' [ UPDATE `bbs_hjbox_users` SET phone='13931993592' WHERE openid='oyq3hv1WJmBT-sAq_qS5CAKGrTz4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-25 09:28:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'phone' in 'field list' [ UPDATE `bbs_hjbox_users` SET phone='13931993592' WHERE openid='oyq3hv1WJmBT-sAq_qS5CAKGrTz4' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `bbs_hjb...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `bbs_hjb...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(253): Kohana_ORM->query('UPDATE `bbs_hjb...')
#4 [internal function]: Controller_Weixin->action_editphone()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}