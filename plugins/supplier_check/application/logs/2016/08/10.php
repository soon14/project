<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-10 15:50:45 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 1030 ]
2016-08-10 15:50:45 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 1030 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#1 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(1201): Kohana_ORM->get_all()
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/mobile/order.php(105): Model_Member_Order->check_order_mobile_info('43685873')
#3 [internal function]: Controller_Mobile_Order->action_ajax_check_order()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Order))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#8 {main}
2016-08-10 15:50:52 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 1030 ]
2016-08-10 15:50:52 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 1030 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#1 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/model/member/order.php(1201): Kohana_ORM->get_all()
#2 /home/wwwroot/www.aitto.net/plugins/supplier_check/application/classes/controller/mobile/order.php(105): Model_Member_Order->check_order_mobile_info('43685873')
#3 [internal function]: Controller_Mobile_Order->action_ajax_check_order()
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Mobile_Order))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#7 /home/wwwroot/www.aitto.net/plugins/supplier_check/index.php(133): Kohana_Request->execute()
#8 {main}