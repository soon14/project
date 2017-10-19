<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-02 17:16:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-02 17:16:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /data0/htdocs/lvyou/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-02 18:14:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/maerdaifu-0-0-7-0-0-0-0-86 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-02 18:14:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/maerdaifu-0-0-7-0-0-0-0-86 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /data0/htdocs/lvyou/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data0/htdocs/lvyou/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /data0/htdocs/lvyou/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-02 23:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL line/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-04-02 23:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL line/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /data0/htdocs/lvyou/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /data0/htdocs/lvyou/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /data0/htdocs/lvyou/index.php(143): Kohana_Request->execute()
#3 {main}