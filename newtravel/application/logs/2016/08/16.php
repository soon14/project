<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-16 10:21:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'key_con' in 'field list' [ UPDATE `sline_weixin` SET `key_word`='1',`key_con`='jjjjjjjjjjjjjj',`gz_content`='艾玛，你终于来了，小游游还没穿好衣服呢~先自助观赏吧~底部菜单中有逃票攻略、没见过的风景、河北游记……随便点着看吧。小游游住在：河北出版传媒集团院内电话：87885822私聊微信号：18630172332求勾搭，求私聊！',`is_gzhf`='1',`wx_hao`='gh_d7a3d3ac9581 ',`wx_mail`='1114265646@qq.com',`wx_name`='ceshi',`wx_o_name`='e',`token`='weixin',`Business_id`='e',`appid`='wxf7962302e4e62023',`appsecret`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenu`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenuDes`='e' WHERE jk_model='服务号' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-16 10:21:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'key_con' in 'field list' [ UPDATE `sline_weixin` SET `key_word`='1',`key_con`='jjjjjjjjjjjjjj',`gz_content`='艾玛，你终于来了，小游游还没穿好衣服呢~先自助观赏吧~底部菜单中有逃票攻略、没见过的风景、河北游记……随便点着看吧。小游游住在：河北出版传媒集团院内电话：87885822私聊微信号：18630172332求勾搭，求私聊！',`is_gzhf`='1',`wx_hao`='gh_d7a3d3ac9581 ',`wx_mail`='1114265646@qq.com',`wx_name`='ceshi',`wx_o_name`='e',`token`='weixin',`Business_id`='e',`appid`='wxf7962302e4e62023',`appsecret`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenu`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenuDes`='e' WHERE jk_model='服务号' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(156): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuEdit()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}
2016-08-16 10:21:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'key_con' in 'field list' [ UPDATE `sline_weixin` SET `key_word`='1',`key_con`='jjjjjjjjjjjjjj',`gz_content`='艾玛，你终于来了，小游游还没穿好衣服呢~先自助观赏吧~底部菜单中有逃票攻略、没见过的风景、河北游记……随便点着看吧。小游游住在：河北出版传媒集团院内电话：87885822私聊微信号：18630172332求勾搭，求私聊！',`is_gzhf`='1',`wx_hao`='gh_d7a3d3ac9581 ',`wx_mail`='1114265646@qq.com',`wx_name`='ceshi',`wx_o_name`='e',`token`='weixin',`Business_id`='e',`appid`='wxf7962302e4e62023',`appsecret`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenu`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenuDes`='e' WHERE jk_model='服务号' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-16 10:21:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'key_con' in 'field list' [ UPDATE `sline_weixin` SET `key_word`='1',`key_con`='jjjjjjjjjjjjjj',`gz_content`='艾玛，你终于来了，小游游还没穿好衣服呢~先自助观赏吧~底部菜单中有逃票攻略、没见过的风景、河北游记……随便点着看吧。小游游住在：河北出版传媒集团院内电话：87885822私聊微信号：18630172332求勾搭，求私聊！',`is_gzhf`='1',`wx_hao`='gh_d7a3d3ac9581 ',`wx_mail`='1114265646@qq.com',`wx_name`='ceshi',`wx_o_name`='e',`token`='weixin',`Business_id`='e',`appid`='wxf7962302e4e62023',`appsecret`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenu`='d4624c36b6795d1d99dcf0547af5443d',`CustomMenuDes`='e' WHERE jk_model='服务号' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(NULL, 'UPDATE `sline_w...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('UPDATE `sline_w...', NULL)
#3 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/weixin.php(156): Kohana_ORM->query('UPDATE `sline_w...')
#4 [internal function]: Controller_Weixin->action_menuEdit()
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Weixin))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#8 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#9 {main}