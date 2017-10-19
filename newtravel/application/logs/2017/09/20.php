<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-20 10:32:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='33'' at line 1 [ select aid,webid, as title from sline_ where id='33' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-09-20 10:32:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as title from sline_ where id='33'' at line 1 [ select aid,webid, as title from sline_ where id='33' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select aid,webi...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/model/question.php(58): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/comment.php(72): Model_Question->getProductName('33', '106')
#3 [internal function]: Controller_Comment->action_index()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Comment))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}
2017-09-20 14:03:48 --- ERROR: Kohana_Exception [ 0 ]: Cannot update spot_ticket model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2017-09-20 14:03:48 --- STRACE: Kohana_Exception [ 0 ]: Cannot update spot_ticket model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/spot.php(1716): Kohana_ORM->update()
#1 [internal function]: Controller_Spot->action_ajax_ticket_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}