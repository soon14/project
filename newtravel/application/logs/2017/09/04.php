<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-04 17:33:35 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2017-09-04 17:33:35 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(413): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2017-09-04 17:34:02 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2017-09-04 17:34:02 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(413): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}