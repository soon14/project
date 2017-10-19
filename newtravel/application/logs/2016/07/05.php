<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-05 14:00:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/cache/tplcache/stourtravel/index_four.php [ 1 ]
2016-07-05 14:00:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/cache/tplcache/stourtravel/index_four.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-05 14:04:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/cache/tplcache/stourtravel/index.php [ 1 ]
2016-07-05 14:04:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/cache/tplcache/stourtravel/index.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-05 15:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-07-05 15:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-07-05 15:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-07-05 15:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-07-05 16:05:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-07-05 16:05:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/js/lightbox.min.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}