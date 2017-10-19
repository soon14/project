<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-04 14:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-08-04 14:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}