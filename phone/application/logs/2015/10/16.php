<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-16 13:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/css/1.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-16 13:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/css/1.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-10-16 13:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/css/1.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-16 13:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/css/1.css was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}