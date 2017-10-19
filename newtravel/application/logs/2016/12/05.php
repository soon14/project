<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-05 11:03:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 1 and (a.ordersn like '%eeeeeeeeeeeeeee%' or a.linkman like '%eeeeeeeeeeeeeee%' or a.linktel like '%eeeeeeeeeeeeeee%' or a.productname like '%eeeeeeeeeeeeeee%') and a.webid=0 order by a.addtime desc limit 0, ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 11:03:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 1 and (a.ordersn like '%eeeeeeeeeeeeeee%' or a.linkman like '%eeeeeeeeeeeeeee%' or a.linktel like '%eeeeeeeeeeeeeee%' or a.productname like '%eeeeeeeeeeeeeee%') and a.webid=0 order by a.addtime desc limit 0, ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.*  fro...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(379): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Order->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-05 11:03:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 1 and (a.ordersn like '%eeeeeeeeeeeeeee%' or a.linkman like '%eeeeeeeeeeeeeee%' or a.linktel like '%eeeeeeeeeeeeeee%' or a.productname like '%eeeeeeeeeeeeeee%') and a.webid=0 order by a.addtime desc limit 0, ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 11:03:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ select a.*  from sline_member_order as a where a.typeid = 1 and (a.ordersn like '%eeeeeeeeeeeeeee%' or a.linkman like '%eeeeeeeeeeeeeee%' or a.linktel like '%eeeeeeeeeeeeeee%' or a.productname like '%eeeeeeeeeeeeeee%') and a.webid=0 order by a.addtime desc limit 0, ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.*  fro...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(379): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Order->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-12-05 14:11:13 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:13 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:11:14 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:14 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:11:17 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:17 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:11:17 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:17 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:11:18 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:18 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:11:19 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:19 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:11:22 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:22 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:11:23 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:11:23 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('呃呃呃', '呃呃呃', '嘎嘎嘎', '骨灰盒') WHERE `id` = '29' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:13:02 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:13:02 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:13:03 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:13:03 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:13:03 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:13:03 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:13:04 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:13:04 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:13:04 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:13:04 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-05 14:13:04 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-05 14:13:04 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ UPDATE `sline_member_car` SET `goneSpot` = ('对方答复', '方法', '大幅度', '对方答复') WHERE `id` = '64' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `sline_m...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1526): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1553): Kohana_ORM->update(NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(811): Kohana_ORM->save()
#4 [internal function]: Controller_Order->action_editlineorder()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}