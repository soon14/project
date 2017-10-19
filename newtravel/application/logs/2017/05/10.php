<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-05-10 17:12:26 --- ERROR: Kohana_Exception [ 0 ]: The selfDriMdd property does not exist in the Model_Line_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2017-05-10 17:12:26 --- STRACE: Kohana_Exception [ 0 ]: The selfDriMdd property does not exist in the Model_Line_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('selfDriMdd', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(1183): Kohana_ORM->__set('selfDriMdd', '')
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-10 17:12:32 --- ERROR: Kohana_Exception [ 0 ]: The linedate property does not exist in the Model_Line_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2017-05-10 17:12:32 --- STRACE: Kohana_Exception [ 0 ]: The linedate property does not exist in the Model_Line_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('linedate', '')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(1183): Kohana_ORM->__set('linedate', '')
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}