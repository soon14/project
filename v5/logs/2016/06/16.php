<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-16 05:24:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 05:24:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 06:16:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 06:16:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 07:00:15 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-06-16 07:00:15 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY id DESC LIMIT 1' at line 1 [ SELECT aid,title,webid FROM `sline_article` WHERE id< ORDER BY id DESC LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT aid,titl...', false, Array)
#1 /home/wwwroot/www.aitto.net/v5/classes/model/article.php(87): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/v5/classes/controller/article.php(54): Model_Article::get_prev_next('prev', NULL)
#3 [internal function]: Controller_Article->action_show()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#8 {main}
2016-06-16 07:20:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 07:20:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:13:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:13:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-t.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: navframe/frame-t.htm ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:15:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: quotes/quote.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:15:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: quotes/quote.asp ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:49:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:49:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 08:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 08:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 09:41:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL editors/fckeditor/editor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 09:41:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL editors/fckeditor/editor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 09:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 09:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 10:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 10:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 10:53:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 10:53:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 11:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 11:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 11:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 11:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 11:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 11:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 12:20:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 12:20:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 12:20:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 12:20:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 12:21:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 12:21:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 12:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vgeoplus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 12:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vgeoplus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 12:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 12:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 12:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 12:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: plus/flink.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 12:57:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 12:57:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 12:59:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 12:59:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 13:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:21:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:21:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:28:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:28:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:33:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:33:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:39:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:39:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 13:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 13:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadify/images/btnbg.png was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 14:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/phone/sjz.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 14:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/phone/sjz.jpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 14:18:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadifyjs/jquery.Huploadify.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 14:18:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadifyjs/jquery.Huploadify.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 14:19:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadifyjs/jquery.Huploadify.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 14:19:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadifyjs/jquery.Huploadify.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 14:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadifyjs/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 14:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL api/Huploadifyjs/upload.php was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 15:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 15:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 15:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 15:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 15:48:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 15:48:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 15:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 15:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 15:48:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 15:48:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 16:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 16:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 16:57:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 16:57:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 17:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 17:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 17:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 17:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 17:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 17:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/token.php ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 18:01:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 18:01:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 19:18:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 19:18:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 20:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 20:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 20:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 20:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 20:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2016-06-16 20:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL res/images/blank.gif was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#2 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#3 {main}
2016-06-16 20:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 20:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}
2016-06-16 20:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2016-06-16 20:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1148 ]
--
#0 /home/wwwroot/www.aitto.net/index.php(143): Kohana_Request->execute()
#1 {main}