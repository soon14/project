<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-09 13:45:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY) ~ APPPATH/config/database.php [ 1 ]
2016-08-09 13:45:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'array' (T_ARRAY) ~ APPPATH/config/database.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-08-09 14:17:04 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2016-08-09 14:17:04 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(373): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-08-09 14:17:07 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2016-08-09 14:17:07 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(373): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-08-09 14:17:11 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2016-08-09 14:17:11 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(373): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-08-09 14:17:12 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2016-08-09 14:17:12 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(373): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-08-09 14:17:14 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2016-08-09 14:17:14 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(373): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-08-09 14:20:20 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2016-08-09 14:20:20 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(373): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-08-09 14:20:21 --- ERROR: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2016-08-09 14:20:21 --- STRACE: Kohana_Exception [ 0 ]: Cannot update article model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(373): Kohana_ORM->update()
#1 [internal function]: Controller_Article->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-08-09 16:36:38 --- ERROR: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/weixin.php [ 29 ]
2016-08-09 16:36:38 --- STRACE: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/weixin.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-08-09 16:41:21 --- ERROR: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/weixin.php [ 29 ]
2016-08-09 16:41:21 --- STRACE: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/weixin.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-08-09 16:42:39 --- ERROR: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/weixin.php [ 29 ]
2016-08-09 16:42:39 --- STRACE: ErrorException [ 1 ]: Call to a member function get_sql() on a non-object ~ APPPATH/classes/controller/weixin.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-08-09 16:47:36 --- ERROR: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_wximagenews' doesn't exist [ SELECT * FROM `sline_wximagenews` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-09 16:47:36 --- STRACE: Database_Exception [ 1146 ]: Table 'stourwebcms.sline_wximagenews' doesn't exist [ SELECT * FROM `sline_wximagenews` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(55): Kohana_ORM->get_sql('SELECT * FROM `...', 1)
#3 [internal function]: Controller_Weixin->action_imageNews()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#8 {main}