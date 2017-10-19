<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-02-25 11:51:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,3' at line 1 [ SELECT a.* FROM `sline_visa` AS a LEFT JOIN `sline_allorderlist` AS b ON a.id=b.aid AND b.typeid=8 WHERE a.webid=0 AND a.ishidden=0 AND nationid= ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2016-02-25 11:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 11:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 11:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 11:53:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,3' at line 1 [ SELECT a.* FROM `sline_visa` AS a LEFT JOIN `sline_allorderlist` AS b ON a.id=b.aid AND b.typeid=8 WHERE a.webid=0 AND a.ishidden=0 AND nationid= ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2016-02-25 11:53:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,3' at line 1 [ SELECT a.* FROM `sline_visa` AS a LEFT JOIN `sline_allorderlist` AS b ON a.id=b.aid AND b.typeid=8 WHERE a.webid=0 AND a.ishidden=0 AND nationid= ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC LIMIT 0,3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\v5\core\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\v5\usertpl\lw_index\taglib\visalw.php(55): Kohana_Database_Query->execute()
#2 D:\web\v5\usertpl\lw_index\taglib\visalw.php(29): Taglib_Visalw::get_visa_order(0, '3', NULL)
#3 D:\web\v5\v5\cache\tplcache\usertpl\lw_index\index.php(1): Taglib_Visalw::query(Array)
#4 D:\web\v5\v5\classes\stourweb\view.php(74): include('D:\web\v5\v5\ca...')
#5 D:\web\v5\v5\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\v5\/user...', Array)
#6 D:\web\v5\v5\classes\stourweb\controller.php(59): Stourweb_View->render()
#7 D:\web\v5\v5\classes\controller\index.php(41): Stourweb_Controller->display('usertpl/lw_inde...')
#8 [internal function]: Controller_Index->action_index()
#9 D:\web\v5\core\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#10 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\v5\index.php(139): Kohana_Request->execute()
#13 {main}
2016-02-25 11:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 11:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 11:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 11:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 11:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 11:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 11:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 11:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 11:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 11:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 11:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 11:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 11:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 11:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 11:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 11:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 11:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 11:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 11:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 11:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 12:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 12:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 12:05:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 12:05:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 12:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 12:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 12:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 12:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:26:47 --- ERROR: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_sline' doesn't exist [ SELECT a.* FROM `sline_sline` AS a  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2016-02-25 13:26:47 --- STRACE: Database_Exception [ 1146 ]: Table 'www_standsmore_com.sline_sline' doesn't exist [ SELECT a.* FROM `sline_sline` AS a  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\web\v5\core\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT a.* FROM...', false, Array)
#1 D:\web\v5\usertpl\lw_index\taglib\visalw.php(51): Kohana_Database_Query->execute()
#2 D:\web\v5\usertpl\lw_index\taglib\visalw.php(30): Taglib_Visalw::get_visa_order()
#3 D:\web\v5\v5\cache\tplcache\usertpl\lw_index\index.php(1): Taglib_Visalw::query(Array)
#4 D:\web\v5\v5\classes\stourweb\view.php(74): include('D:\web\v5\v5\ca...')
#5 D:\web\v5\v5\classes\stourweb\view.php(417): Stourweb_View->capture('D:\web\v5\/user...', Array)
#6 D:\web\v5\v5\classes\stourweb\controller.php(59): Stourweb_View->render()
#7 D:\web\v5\v5\classes\controller\index.php(41): Stourweb_Controller->display('usertpl/lw_inde...')
#8 [internal function]: Controller_Index->action_index()
#9 D:\web\v5\core\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#10 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#12 D:\web\v5\index.php(139): Kohana_Request->execute()
#13 {main}
2016-02-25 13:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:27:23 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 27404475 bytes) ~ MODPATH\cache\classes\kohana\cache\file.php [ 238 ]
2016-02-25 13:27:23 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 27404475 bytes) ~ MODPATH\cache\classes\kohana\cache\file.php [ 238 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-02-25 13:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:29:07 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:07 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:29:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:29:37 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:37 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:29:38 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:38 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:39 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:39 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:39 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:39 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:40 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:40 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:40 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:40 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:41 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:41 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:42 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:42 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:42 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:42 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:43 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:43 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:43 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:43 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:43 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:43 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:29:43 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:29:43 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:30:38 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:30:38 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:30:48 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:30:48 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:30:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:30:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:30:49 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:30:49 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:30:49 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:30:49 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:30:50 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:30:50 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:30:50 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:30:50 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:30:50 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:30:50 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:34:17 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:34:17 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:34:19 --- ERROR: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
2016-02-25 13:34:19 --- STRACE: Cache_Exception [ 0 ]: Kohana_Cache_File::get corrupted cache file! ~ MODPATH\cache\classes\kohana\cache\file.php [ 151 ]
--
#0 D:\web\v5\v5\classes\common.php(1367): Kohana_Cache_File->get('http://www.lvyo...', '')
#1 D:\web\v5\v5\classes\controller\index.php(11): Common::cache('get', 'http://www.lvyo...')
#2 [internal function]: Controller_Index->before()
#3 D:\web\v5\core\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#4 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 D:\web\v5\index.php(139): Kohana_Request->execute()
#7 {main}
2016-02-25 13:34:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:34:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:34:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:34:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:47:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:47:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 13:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 13:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lines/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lines/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 13:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 13:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL templets/aike/js/cookie_out_box.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL templets/aike/js/cookie_out_box.js was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:03:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:03:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/18.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/18.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/19.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/19.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/20.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/20.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/09.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/09.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/08.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/08.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/07.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/07.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/03.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/03.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/04.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/04.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/05.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/05.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/06.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/06.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/10.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/10.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/13.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/13.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/14.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/14.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/15.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/15.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/16.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/16.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/17.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/17.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 14:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 14:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/03.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/03.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/18.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/18.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/19.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/19.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/20.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/20.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/07.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/07.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/08.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/08.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/05.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/05.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/09.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/09.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/06.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/06.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/04.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/04.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/10.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/10.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/14.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/14.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/13.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/13.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/15.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/15.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/16.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/16.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/17.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/17.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 15:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/19.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/19.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/03.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/03.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/20.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/20.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/18.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/18.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/09.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/09.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/08.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/08.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/07.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/07.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/04.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/04.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/05.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/05.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/10.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/10.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/06.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/06.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/13.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/13.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/14.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/14.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/15.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/15.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/16.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/16.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/17.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mao/images/pic/17.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 15:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL notes/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 15:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:37:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 15:37:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 15:43:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 15:43:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 15:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 15:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 15:54:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 15:54:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:01:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:01:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:15:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:15:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 16:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 16:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:07:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:07:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:36:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\cache\tplcache\default\notes\write.php [ 54 ]
2016-02-25 17:36:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) ~ APPPATH\cache\tplcache\default\notes\write.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-02-25 17:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:39:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:39:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 17:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 17:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 17:45:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 17:45:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 17:45:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 17:45:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:20:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:20:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:28:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:28:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:38:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:38:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:40:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:40:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 18:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 18:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2016-02-25 18:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member/login/{$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 18:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:43:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:43:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 18:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/01.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 18:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2016-02-25 18:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL {$tpl}/watfooter/images/pic/02.jpg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\web\v5\core\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\web\v5\core\system\classes\kohana\request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 D:\web\v5\index.php(139): Kohana_Request->execute()
#3 {main}
2016-02-25 18:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:47:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:47:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:51:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:51:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:55:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:55:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:56:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:56:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 18:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 18:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 19:00:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 19:00:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 19:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 19:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 19:03:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 19:03:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 19:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 19:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 19:05:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 19:05:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}
2016-02-25 19:06:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
2016-02-25 19:06:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1148 ]
--
#0 D:\web\v5\index.php(139): Kohana_Request->execute()
#1 {main}