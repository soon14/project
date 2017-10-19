<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-22 14:55:32 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:55:32 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:56:35 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:56:35 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:56:35 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:56:35 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:57:06 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:57:06 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:57:06 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:57:06 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:58:48 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:58:48 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:59:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:59:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:59:21 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:59:21 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 14:59:32 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 14:59:32 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 15:00:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 15:00:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 15:00:33 --- ERROR: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2016-04-22 15:00:33 --- STRACE: Database_Exception [  ]:  ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
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
2016-04-22 15:10:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 15:10:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 15:10:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 15:10:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 15:10:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 15:10:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 15:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 15:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 15:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 15:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 15:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 15:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 16:17:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/img/barbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-22 16:17:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/img/barbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:18:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL spot/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-04-22 16:18:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL spot/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-22 16:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tuan/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-04-22 16:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tuan/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-22 16:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:32:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tuan/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-04-22 16:32:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tuan/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:34:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-22 16:34:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tuan/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-04-22 16:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tuan/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:56:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/css/img/barbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-22 16:56:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/css/img/barbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 16:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL spot/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2016-04-22 16:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL spot/ajax_check_storage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 17:08:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/login_weixin/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-22 17:08:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/login_weixin/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 17:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL plugins/login_weixin/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-04-22 17:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL plugins/login_weixin/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-04-22 20:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 20:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 21:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 21:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-22 21:14:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-l.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-04-22 21:14:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-l.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}