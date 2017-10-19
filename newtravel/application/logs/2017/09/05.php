<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-05 09:08:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/controller/notes.php [ 1 ]
2017-09-05 09:08:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/controller/notes.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-05 09:45:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 46 ]
2017-09-05 09:45:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-09-05 15:13:57 --- ERROR: Kohana_Exception [ 0 ]: The number property does not exist in the Model_Mitao_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2017-09-05 15:13:57 --- STRACE: Kohana_Exception [ 0 ]: The number property does not exist in the Model_Mitao_Suit class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('number', 22)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/mitao.php(2543): Kohana_ORM->__set('number', 22)
#2 [internal function]: Controller_Mitao->action_ajax_suitsave()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mitao))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}