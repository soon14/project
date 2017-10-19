<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-27 13:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-01-27 13:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/images/nocon.png was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}