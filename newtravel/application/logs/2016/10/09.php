<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-10-09 14:49:25 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'd'f's'd'f',`content`='手动阀手动阀手动阀手动阀' WHERE id='151' at line 1 [ UPDATE `sline_article_mulu` SET `title`='s'd'f's'd'f',`content`='手动阀手动阀手动阀手动阀' WHERE id='151' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-10-09 14:49:25 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'd'f's'd'f',`content`='手动阀手动阀手动阀手动阀' WHERE id='151' at line 1 [ UPDATE `sline_article_mulu` SET `title`='s'd'f's'd'f',`content`='手动阀手动阀手动阀手动阀' WHERE id='151' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'UPDATE `sline_a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/article.php(438): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Article->action_ajax_saves()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Article))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}