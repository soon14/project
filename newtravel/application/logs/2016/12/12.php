<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-12 09:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL spot/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-12-12 09:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL spot/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-12-12 13:52:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY addtime desc  limit 20,20' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  ORDER BY addtime desc  limit 20,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-12 13:52:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY addtime desc  limit 20,20' at line 1 [ SELECT * FROM `sline_cutPicture_user`  where cutpid=  ORDER BY addtime desc  limit 20,20 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/cutpicture.php(232): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Cutpicture->action_partUser()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Cutpicture))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}