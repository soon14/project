<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-09 13:44:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/linkman was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-09 13:44:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/linkman was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-10-09 13:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/order/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-09 13:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/order/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-10-09 17:10:27 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:10:27 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:10:28 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:10:28 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:10:29 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:10:29 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:10:30 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:10:30 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:10:31 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:10:31 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:12:35 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:12:35 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:12:56 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:12:56 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:13:22 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:13:22 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 17:18:19 --- ERROR: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2015-10-09 17:18:19 --- STRACE: Database_Exception [  ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('www_standsmore_...')
#1 D:\web\standsmore\phone\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT webprefi...', false, Array)
#3 D:\web\standsmore\phone\application\classes\common.php(775): Kohana_Database_Query->execute()
#4 D:\web\standsmore\phone\application\bootstrap.php(164): Common::get_main_prefix()
#5 D:\web\standsmore\phone\index.php(120): require('D:\web\standsmo...')
#6 {main}
2015-10-09 18:33:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-0_0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-09 18:33:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-0_0-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-10-09 18:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-0_95-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-09 18:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-0_95-1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-10-09 18:36:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10,10' at line 1 [ SELECT a.* FROM `sline_line` a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid AND b.typeid=1 AND a.webid=b.webid) WHERE a.ishidden=0  AND FIND_IN_SET('',a.kindlist) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT -10,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-09 18:36:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10,10' at line 1 [ SELECT a.* FROM `sline_line` a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid AND b.typeid=1 AND a.webid=b.webid) WHERE a.ishidden=0  AND FIND_IN_SET('',a.kindlist) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT -10,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\line.php(156): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\line.php(349): Model_Line::search_result('false', '')
#3 [internal function]: Controller_Line->action_ajax_line()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-10-09 18:36:43 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10,10' at line 1 [ SELECT a.* FROM `sline_line` a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid AND b.typeid=1 AND a.webid=b.webid) WHERE a.ishidden=0  AND FIND_IN_SET('',a.kindlist) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT -10,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-10-09 18:36:43 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10,10' at line 1 [ SELECT a.* FROM `sline_line` a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid AND b.typeid=1 AND a.webid=b.webid) WHERE a.ishidden=0  AND FIND_IN_SET('',a.kindlist) ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT -10,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\standsmore\phone\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\standsmore\phone\application\classes\model\line.php(156): Kohana_Database_Query->execute()
#2 D:\web\standsmore\phone\application\classes\controller\line.php(349): Model_Line::search_result('false', '')
#3 [internal function]: Controller_Line->action_ajax_line()
#4 D:\web\standsmore\phone\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#5 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#8 {main}
2015-10-09 18:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-92-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-09 18:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-92-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}
2015-10-09 18:41:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-92-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2015-10-09 18:41:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/-0-0-0-0-0-92-3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\standsmore\phone\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\standsmore\phone\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\standsmore\phone\index.php(135): Kohana_Request->execute()
#3 {main}