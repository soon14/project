<<<<<<< .mine
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-14 14:25:05 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-04-14 14:25:05 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\www\lvyou\v5\classes\model\destinations.php(21): Kohana_ORM::factory('destinations')
#9 D:\www\lvyou\v5\classes\common.php(640): Model_Destinations::gen_web_list()
#10 D:\www\lvyou\v5\bootstrap.php(166): Common::cache_web_list()
#11 D:\www\lvyou\index.php(128): require('D:\\www\\lvyou\\v5...')
#12 {main}
2016-04-14 14:33:13 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-04-14 14:33:13 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\www\lvyou\v5\classes\model\destinations.php(21): Kohana_ORM::factory('destinations')
#9 D:\www\lvyou\v5\classes\common.php(640): Model_Destinations::gen_web_list()
#10 D:\www\lvyou\v5\bootstrap.php(166): Common::cache_web_list()
#11 D:\www\lvyou\index.php(128): require('D:\\www\\lvyou\\v5...')
#12 {main}
2016-04-14 14:33:16 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-04-14 14:33:16 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\www\lvyou\v5\classes\model\destinations.php(21): Kohana_ORM::factory('destinations')
#9 D:\www\lvyou\v5\classes\common.php(640): Model_Destinations::gen_web_list()
#10 D:\www\lvyou\v5\bootstrap.php(166): Common::cache_web_list()
#11 D:\www\lvyou\index.php(128): require('D:\\www\\lvyou\\v5...')
#12 {main}
2016-04-14 14:35:04 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-04-14 14:35:04 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\www\lvyou\v5\classes\model\destinations.php(21): Kohana_ORM::factory('destinations')
#9 D:\www\lvyou\v5\classes\common.php(640): Model_Destinations::gen_web_list()
#10 D:\www\lvyou\v5\bootstrap.php(166): Common::cache_web_list()
#11 D:\www\lvyou\index.php(128): require('D:\\www\\lvyou\\v5...')
#12 {main}
2016-04-14 14:35:07 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-04-14 14:35:07 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\www\lvyou\v5\classes\model\destinations.php(21): Kohana_ORM::factory('destinations')
#9 D:\www\lvyou\v5\classes\common.php(640): Model_Destinations::gen_web_list()
#10 D:\www\lvyou\v5\bootstrap.php(166): Common::cache_web_list()
#11 D:\www\lvyou\index.php(128): require('D:\\www\\lvyou\\v5...')
#12 {main}
2016-04-14 14:38:02 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-04-14 14:38:02 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\www\lvyou\v5\classes\model\destinations.php(21): Kohana_ORM::factory('destinations')
#9 D:\www\lvyou\v5\classes\common.php(640): Model_Destinations::gen_web_list()
#10 D:\www\lvyou\v5\bootstrap.php(166): Common::cache_web_list()
#11 D:\www\lvyou\index.php(128): require('D:\\www\\lvyou\\v5...')
#12 {main}
2016-04-14 14:38:52 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2016-04-14 14:38:52 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('stourwebcms')
#1 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\www\lvyou\core\modules\database\classes\kohana\database\mysql.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(1800): Kohana_Database_MySQL->list_columns('destinations')
#4 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(455): Kohana_ORM->list_columns()
#5 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(400): Kohana_ORM->reload_columns()
#6 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(265): Kohana_ORM->_initialize()
#7 D:\www\lvyou\core\modules\orm\classes\kohana\orm.php(46): Kohana_ORM->__construct(NULL)
#8 D:\www\lvyou\v5\classes\model\destinations.php(21): Kohana_ORM::factory('destinations')
#9 D:\www\lvyou\v5\classes\common.php(640): Model_Destinations::gen_web_list()
#10 D:\www\lvyou\v5\bootstrap.php(166): Common::cache_web_list()
#11 D:\www\lvyou\index.php(128): require('D:\\www\\lvyou\\v5...')
#12 {main}||||||| .r0
=======
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-04-14 17:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-04-14 17:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\www\lvyou\index.php(143): Kohana_Request->execute()
#1 {main}
2016-04-14 17:23:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-04-14 17:23:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\www\lvyou\index.php(143): Kohana_Request->execute()
#1 {main}>>>>>>> .r54
