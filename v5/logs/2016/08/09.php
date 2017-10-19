<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-09 12:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 12:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 12:30:15 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-08-09 12:30:15 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(455): Kohana_ORM->list_columns()
#5 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(400): Kohana_ORM->reload_columns()
#6 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(265): Kohana_ORM->_initialize()
#7 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(46): Kohana_ORM->__construct(NULL)
#8 /home/wwwroot/www.aitto.net/v5/classes/model/destinations.php(21): Kohana_ORM::factory('destinations')
#9 /home/wwwroot/www.aitto.net/v5/classes/common.php(640): Model_Destinations::gen_web_list()
#10 /home/wwwroot/www.aitto.net/v5/bootstrap.php(166): Common::cache_web_list()
#11 /home/wwwroot/www.aitto.net/index.php(128): require('/home/wwwroot/w...')
#12 {main}
2016-08-09 12:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 12:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 12:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 12:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 12:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 12:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 13:07:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 13:07:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 13:45:50 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-08-09 13:45:50 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(455): Kohana_ORM->list_columns()
#5 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(400): Kohana_ORM->reload_columns()
#6 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(265): Kohana_ORM->_initialize()
#7 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(46): Kohana_ORM->__construct(NULL)
#8 /home/wwwroot/www.aitto.net/v5/classes/model/destinations.php(21): Kohana_ORM::factory('destinations')
#9 /home/wwwroot/www.aitto.net/v5/classes/common.php(640): Model_Destinations::gen_web_list()
#10 /home/wwwroot/www.aitto.net/v5/bootstrap.php(166): Common::cache_web_list()
#11 /home/wwwroot/www.aitto.net/index.php(128): require('/home/wwwroot/w...')
#12 {main}
2016-08-09 13:46:04 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-08-09 13:46:04 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(455): Kohana_ORM->list_columns()
#5 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(400): Kohana_ORM->reload_columns()
#6 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(265): Kohana_ORM->_initialize()
#7 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(46): Kohana_ORM->__construct(NULL)
#8 /home/wwwroot/www.aitto.net/v5/classes/model/destinations.php(21): Kohana_ORM::factory('destinations')
#9 /home/wwwroot/www.aitto.net/v5/classes/common.php(640): Model_Destinations::gen_web_list()
#10 /home/wwwroot/www.aitto.net/v5/bootstrap.php(166): Common::cache_web_list()
#11 /home/wwwroot/www.aitto.net/index.php(128): require('/home/wwwroot/w...')
#12 {main}
2016-08-09 13:46:04 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-08-09 13:46:04 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(455): Kohana_ORM->list_columns()
#5 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(400): Kohana_ORM->reload_columns()
#6 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(265): Kohana_ORM->_initialize()
#7 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(46): Kohana_ORM->__construct(NULL)
#8 /home/wwwroot/www.aitto.net/v5/classes/model/destinations.php(21): Kohana_ORM::factory('destinations')
#9 /home/wwwroot/www.aitto.net/v5/classes/common.php(640): Model_Destinations::gen_web_list()
#10 /home/wwwroot/www.aitto.net/v5/bootstrap.php(166): Common::cache_web_list()
#11 /home/wwwroot/www.aitto.net/index.php(128): require('/home/wwwroot/w...')
#12 {main}
2016-08-09 13:46:05 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-08-09 13:46:05 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(455): Kohana_ORM->list_columns()
#5 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(400): Kohana_ORM->reload_columns()
#6 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(265): Kohana_ORM->_initialize()
#7 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(46): Kohana_ORM->__construct(NULL)
#8 /home/wwwroot/www.aitto.net/v5/classes/model/destinations.php(21): Kohana_ORM::factory('destinations')
#9 /home/wwwroot/www.aitto.net/v5/classes/common.php(640): Model_Destinations::gen_web_list()
#10 /home/wwwroot/www.aitto.net/v5/bootstrap.php(166): Common::cache_web_list()
#11 /home/wwwroot/www.aitto.net/index.php(128): require('/home/wwwroot/w...')
#12 {main}
2016-08-09 14:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-l.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-l.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:47:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:47:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:47:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:47:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:53:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:53:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:55:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/phone/sjz.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-08-09 14:55:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/phone/sjz.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-08-09 14:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 14:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 14:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:18:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:18:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: api/weixin_cishi.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:21:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:21:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:24:24 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-09 15:24:24 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(114): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(693): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#10 {main}
2016-08-09 15:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:25:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:25:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 15:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 15:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:10:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:10:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:39:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:39:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:42:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:42:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 16:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 16:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/img/barbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-08-09 16:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/img/barbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-08-09 17:13:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-09 17:13:51 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(114): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(693): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#10 {main}
2016-08-09 17:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 17:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 17:15:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 17:15:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 17:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 17:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 17:22:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 17:22:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 17:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 17:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 18:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 18:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 18:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 18:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 19:19:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-09 19:19:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'LIMIT 1' at line 1 [ SELECT `sline_spot_extend_field`.`id` AS `id`, `sline_spot_extend_field`.`productid` AS `productid`, `sline_spot_extend_field`.`e_business_time` AS `e_business_time`, `sline_spot_extend_field`.`e_Advance_buy_time` AS `e_Advance_buy_time` FROM `sline_spot_extend_field` AS `sline_spot_extend_field` WHERE productid= LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1197): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1018): Kohana_ORM->_load_result(false)
#3 /home/wwwroot/www.aitto.net/v5/classes/model/spot.php(114): Kohana_ORM->find()
#4 /home/wwwroot/www.aitto.net/v5/classes/controller/spot.php(693): Model_Spot::get_extend_info(NULL)
#5 [internal function]: Controller_Spot->action_show()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#10 {main}
2016-08-09 19:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 19:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 20:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 20:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 20:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-t.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 20:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-t.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 20:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: quotes/quote.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 20:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: quotes/quote.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 22:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 22:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 22:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 22:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 22:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 22:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 22:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 22:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 22:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 22:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 22:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 22:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 22:56:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 22:56:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 23:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 23:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-08-09 23:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-08-09 23:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}