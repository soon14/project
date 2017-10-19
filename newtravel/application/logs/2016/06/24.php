<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-06-24 11:59:14 --- ERROR: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-06-24 11:59:14 --- STRACE: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('isoutsidesuppli...', '1')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/supplier.php(109): Kohana_ORM->__set('isoutsidesuppli...', '1')
#2 [internal function]: Controller_Supplier->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Supplier))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-06-24 16:34:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.isoutsidesupplier' in 'order clause' [ select a.*  from sline_supplier as a  order by a.isoutsidesupplier ASC,a.addtime desc limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-06-24 16:34:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.isoutsidesupplier' in 'order clause' [ select a.*  from sline_supplier as a  order by a.isoutsidesupplier ASC,a.addtime desc limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.*  fro...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/supplier.php(69): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Supplier->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Supplier))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-06-24 16:34:33 --- ERROR: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-06-24 16:34:33 --- STRACE: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('isoutsidesuppli...', '1')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/supplier.php(109): Kohana_ORM->__set('isoutsidesuppli...', '1')
#2 [internal function]: Controller_Supplier->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Supplier))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-06-24 16:34:35 --- ERROR: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-06-24 16:34:35 --- STRACE: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('isoutsidesuppli...', '0')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/supplier.php(109): Kohana_ORM->__set('isoutsidesuppli...', '0')
#2 [internal function]: Controller_Supplier->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Supplier))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-06-24 16:34:36 --- ERROR: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-06-24 16:34:36 --- STRACE: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('isoutsidesuppli...', '1')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/supplier.php(109): Kohana_ORM->__set('isoutsidesuppli...', '1')
#2 [internal function]: Controller_Supplier->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Supplier))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2016-06-24 16:34:37 --- ERROR: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
2016-06-24 16:34:37 --- STRACE: Kohana_Exception [ 0 ]: The isoutsidesupplier property does not exist in the Model_Supplier class ~ MODPATH/orm/classes/kohana/orm.php [ 771 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(713): Kohana_ORM->set('isoutsidesuppli...', '0')
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/supplier.php(109): Kohana_ORM->__set('isoutsidesuppli...', '0')
#2 [internal function]: Controller_Supplier->action_index()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Supplier))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}