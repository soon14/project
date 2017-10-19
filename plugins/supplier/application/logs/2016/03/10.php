<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-10 16:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-10 16:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\supplier\index.php(133): Kohana_Request->execute()
#3 {main}
2016-03-10 16:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-03-10 16:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pub/header was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\plugins\supplier\index.php(133): Kohana_Request->execute()
#3 {main}