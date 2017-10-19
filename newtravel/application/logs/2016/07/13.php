<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-13 09:47:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a  where a.supplierlist = 1  and a.webid=0 order by a.addtime desc limit , ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-13 09:47:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a  where a.supplierlist = 1  and a.webid=0 order by a.addtime desc limit , ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.*  fro...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(366): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Order->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-07-13 09:48:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 5 and a.webid=0 order by a.addtime desc limit , ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-13 09:48:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 5 and a.webid=0 order by a.addtime desc limit , ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.*  fro...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(366): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Order->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-07-13 10:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL order/parentkey/action/index/typeid/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-07-13 10:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL order/parentkey/action/index/typeid/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#3 {main}
2016-07-13 10:43:39 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 5 and a.supplierlist='1' and a.webid=0 order by a.addtime desc limit , ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-13 10:43:39 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 5 and a.supplierlist='1' and a.webid=0 order by a.addtime desc limit , ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.*  fro...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(382): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Order->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}