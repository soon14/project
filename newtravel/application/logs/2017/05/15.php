<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-05-15 10:47:15 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.member_order_tourer' doesn't exist [ select * from `member_order_tourer` WHERE productid=30 and typeid=1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-15 10:47:15 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.member_order_tourer' doesn't exist [ select * from `member_order_tourer` WHERE productid=30 and typeid=1  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select * from `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(237): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_export()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}