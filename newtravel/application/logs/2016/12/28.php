<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-12-28 11:27:36 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:36 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:40 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:27:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:27:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:12 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:12 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:17 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:17 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:20 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 11:28:21 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 11:28:21 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '3' WHERE id='73'' at line 1 [ UPDATE `sline_wxaddmenu` SET `type`='view',`title`='我的冰雪',`content`=''',`status`='3' WHERE id='73' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(318): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuCreate()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-12-28 15:51:40 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_restaurant_rank' doesn't exist [ SHOW FULL COLUMNS FROM `sline_restaurant_rank` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-12-28 15:51:40 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_restaurant_rank' doesn't exist [ SHOW FULL COLUMNS FROM `sline_restaurant_rank` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1800): Kohana_Database_MySQL->list_columns('restaurant_rank')
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(455): Kohana_ORM->list_columns()
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(400): Kohana_ORM->reload_columns()
#4 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(265): Kohana_ORM->_initialize()
#5 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(46): Kohana_ORM->__construct(NULL)
#6 /home/wwwroot/www.aitto.net/newtravel/application/classes/model/restaurant/rank.php(8): Kohana_ORM::factory('restaurant_rank')
#7 /home/wwwroot/www.aitto.net/newtravel/application/cache/tplcache/stourtravel/restaurant/list.php(67): Model_Restaurant_Rank::getList()
#8 /home/wwwroot/www.aitto.net/newtravel/application/classes/stourweb/view.php(72): include('/home/wwwroot/w...')
#9 /home/wwwroot/www.aitto.net/newtravel/application/classes/stourweb/view.php(373): Stourweb_View->capture('/home/wwwroot/w...', Array)
#10 /home/wwwroot/www.aitto.net/newtravel/application/classes/stourweb/controller.php(203): Stourweb_View->render()
#11 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/restaurant.php(85): Stourweb_Controller->display('stourtravel/res...')
#12 [internal function]: Controller_Restaurant->action_restaurant()
#13 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Restaurant))
#14 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#16 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#17 {main}
2016-12-28 15:57:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 46 ]
2016-12-28 15:57:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}