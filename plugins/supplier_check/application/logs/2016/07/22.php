<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-22 14:11:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/controller/pc/checkorder.php [ 220 ]
2016-07-22 14:11:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/classes/controller/pc/checkorder.php [ 220 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2016-07-22 14:58:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'paysouce' in 'where clause' [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and paysouce =微信支付(移动) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-22 14:58:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'paysouce' in 'where clause' [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and paysouce =微信支付(移动) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(628): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(364): Model_Member_Order->_set_pages('member_order', 20, Array, 'consumetime', ' (status='5' OR...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/pc/checkorder.php(74): Model_Member_Order->get_check_record_list(NULL, NULL, '\xE5\xBE\xAE\xE4\xBF\xA1\xE6\x94\xAF\xE4\xBB\x98(\xE7\xA7...')
#5 [internal function]: Controller_Pc_Checkorder->action_check_record()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Checkorder))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#10 {main}
2016-07-22 14:59:30 --- ERROR: Database_Exception [ 1305 ]: FUNCTION stourwebcms.微信支付 does not exist [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and paysource =微信支付(移动) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-22 14:59:30 --- STRACE: Database_Exception [ 1305 ]: FUNCTION stourwebcms.微信支付 does not exist [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and paysource =微信支付(移动) ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(628): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(364): Model_Member_Order->_set_pages('member_order', 20, Array, 'consumetime', ' (status='5' OR...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/pc/checkorder.php(74): Model_Member_Order->get_check_record_list(NULL, NULL, '\xE5\xBE\xAE\xE4\xBF\xA1\xE6\x94\xAF\xE4\xBB\x98(\xE7\xA7...')
#5 [internal function]: Controller_Pc_Checkorder->action_check_record()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Checkorder))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#10 {main}
2016-07-22 15:01:09 --- ERROR: Database_Exception [ 1305 ]: FUNCTION stourwebcms.微信 does not exist [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and find_in_set(微信(PC),paysource)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-22 15:01:09 --- STRACE: Database_Exception [ 1305 ]: FUNCTION stourwebcms.微信 does not exist [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and find_in_set(微信(PC),paysource)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(628): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(364): Model_Member_Order->_set_pages('member_order', 20, Array, 'consumetime', ' (status='5' OR...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/pc/checkorder.php(74): Model_Member_Order->get_check_record_list(NULL, NULL, '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#5 [internal function]: Controller_Pc_Checkorder->action_check_record()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Checkorder))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#10 {main}
2016-07-22 15:04:35 --- ERROR: Database_Exception [ 1305 ]: FUNCTION stourwebcms.微信 does not exist [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and paysource =微信(PC)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-07-22 15:04:35 --- STRACE: Database_Exception [ 1305 ]: FUNCTION stourwebcms.微信 does not exist [ SELECT COUNT(`sline_member_order`.`id`) AS `records_found` FROM `sline_member_order` AS `sline_member_order` WHERE  (status='5' OR status='2') AND find_in_set('3',supplierlist) AND isconsume='1' and paysource =微信(PC)  ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1780): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(628): Kohana_ORM->count_all()
#3 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(364): Model_Member_Order->_set_pages('member_order', 20, Array, 'consumetime', ' (status='5' OR...', 'DESC', 'query_string')
#4 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/pc/checkorder.php(74): Model_Member_Order->get_check_record_list(NULL, NULL, '\xE5\xBE\xAE\xE4\xBF\xA1(PC)')
#5 [internal function]: Controller_Pc_Checkorder->action_check_record()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Checkorder))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#10 {main}