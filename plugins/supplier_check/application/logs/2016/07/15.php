<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-15 16:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-07-15 16:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#3 {main}
2016-07-15 16:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pc/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-07-15 16:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pc/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#3 {main}