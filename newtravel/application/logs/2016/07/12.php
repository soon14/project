<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-12 14:09:31 --- ERROR: Kohana_Exception [ 0 ]: The supplierlist property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 698 ]
2016-07-12 14:09:31 --- STRACE: Kohana_Exception [ 0 ]: The supplierlist property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 698 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(369): Kohana_ORM->get('supplierlist')
#1 [internal function]: Controller_Order->action_index()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-07-12 14:09:43 --- ERROR: Kohana_Exception [ 0 ]: The supplierlist property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 698 ]
2016-07-12 14:09:43 --- STRACE: Kohana_Exception [ 0 ]: The supplierlist property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 698 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(369): Kohana_ORM->get('supplierlist')
#1 [internal function]: Controller_Order->action_index()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}
2016-07-12 14:09:59 --- ERROR: Kohana_Exception [ 0 ]: The supplierlist property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 698 ]
2016-07-12 14:09:59 --- STRACE: Kohana_Exception [ 0 ]: The supplierlist property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 698 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/order.php(369): Kohana_ORM->get('supplierlist')
#1 [internal function]: Controller_Order->action_index()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Order))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}