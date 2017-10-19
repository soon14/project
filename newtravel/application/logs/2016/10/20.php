<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-20 09:07:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='175'' at line 1 [ select aid,webid, as title from sline_ where id='175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-20 09:07:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='175'' at line 1 [ select aid,webid, as title from sline_ where id='175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select aid,webi...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/model/question.php(58): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/comment.php(72): Model_Question->getProductName('175', '101')
#3 [internal function]: Controller_Comment->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Comment))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2016-10-20 09:07:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='175'' at line 1 [ select aid,webid, as title from sline_ where id='175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-20 09:07:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='175'' at line 1 [ select aid,webid, as title from sline_ where id='175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select aid,webi...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/model/question.php(58): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/comment.php(72): Model_Question->getProductName('175', '101')
#3 [internal function]: Controller_Comment->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Comment))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}