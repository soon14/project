<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-11 13:31:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-11 13:31:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_m...', 'Model_Member_Or...', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(205): Kohana_ORM->get_all()
#5 [internal function]: Controller_Pc_Order->action_genexcel()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-11 13:32:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-11 13:32:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_m...', 'Model_Member_Or...', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(205): Kohana_ORM->get_all()
#5 [internal function]: Controller_Pc_Order->action_genexcel()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-11 13:34:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-11 13:34:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_m...', 'Model_Member_Or...', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(206): Kohana_ORM->get_all()
#5 [internal function]: Controller_Pc_Order->action_genexcel()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-11 13:42:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2016-08-11 13:42:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column '3sups9' in 'where clause' [ SELECT `sline_member_order`.`id` AS `id`, `sline_member_order`.`ordersn` AS `ordersn`, `sline_member_order`.`back_order_number` AS `back_order_number`, `sline_member_order`.`partner_number` AS `partner_number`, `sline_member_order`.`memberid` AS `memberid`, `sline_member_order`.`typeid` AS `typeid`, `sline_member_order`.`supplierlist` AS `supplierlist`, `sline_member_order`.`distributor` AS `distributor`, `sline_member_order`.`webid` AS `webid`, `sline_member_order`.`productaid` AS `productaid`, `sline_member_order`.`productname` AS `productname`, `sline_member_order`.`productautoid` AS `productautoid`, `sline_member_order`.`litpic` AS `litpic`, `sline_member_order`.`price` AS `price`, `sline_member_order`.`marketprice` AS `marketprice`, `sline_member_order`.`spotprice` AS `spotprice`, `sline_member_order`.`distributorprice` AS `distributorprice`, `sline_member_order`.`childprice` AS `childprice`, `sline_member_order`.`usedate` AS `usedate`, `sline_member_order`.`dingnum` AS `dingnum`, `sline_member_order`.`childnum` AS `childnum`, `sline_member_order`.`ispay` AS `ispay`, `sline_member_order`.`status` AS `status`, `sline_member_order`.`linkman` AS `linkman`, `sline_member_order`.`linktel` AS `linktel`, `sline_member_order`.`linkemail` AS `linkemail`, `sline_member_order`.`linkqq` AS `linkqq`, `sline_member_order`.`linkidcard` AS `linkidcard`, `sline_member_order`.`isneedpiao` AS `isneedpiao`, `sline_member_order`.`addtime` AS `addtime`, `sline_member_order`.`finishtime` AS `finishtime`, `sline_member_order`.`ispinlun` AS `ispinlun`, `sline_member_order`.`jifencomment` AS `jifencomment`, `sline_member_order`.`jifentprice` AS `jifentprice`, `sline_member_order`.`jifenbook` AS `jifenbook`, `sline_member_order`.`dingjin` AS `dingjin`, `sline_member_order`.`suitid` AS `suitid`, `sline_member_order`.`paytype` AS `paytype`, `sline_member_order`.`oldnum` AS `oldnum`, `sline_member_order`.`oldprice` AS `oldprice`, `sline_member_order`.`usejifen` AS `usejifen`, `sline_member_order`.`needjifen` AS `needjifen`, `sline_member_order`.`pid` AS `pid`, `sline_member_order`.`haschild` AS `haschild`, `sline_member_order`.`remark` AS `remark`, `sline_member_order`.`kindlist` AS `kindlist`, `sline_member_order`.`roombalance` AS `roombalance`, `sline_member_order`.`roombalancenum` AS `roombalancenum`, `sline_member_order`.`viewstatus` AS `viewstatus`, `sline_member_order`.`roombalance_paytype` AS `roombalance_paytype`, `sline_member_order`.`paysource` AS `paysource`, `sline_member_order`.`departdate` AS `departdate`, `sline_member_order`.`eticketno` AS `eticketno`, `sline_member_order`.`isconsume` AS `isconsume`, `sline_member_order`.`consumetime` AS `consumetime`, `sline_member_order`.`consumeverifyuser` AS `consumeverifyuser`, `sline_member_order`.`consumeverifymemo` AS `consumeverifymemo`, `sline_member_order`.`distributororderexdata` AS `distributororderexdata`, `sline_member_order`.`supplierorderexdata` AS `supplierorderexdata`, `sline_member_order`.`is_drawcash` AS `is_drawcash`, `sline_member_order`.`third_ordersn` AS `third_ordersn`, `sline_member_order`.`third_status` AS `third_status`, `sline_member_order`.`third_failure_reason` AS `third_failure_reason` FROM `sline_member_order` AS `sline_member_order` WHERE addtime>=946656000 and addtime ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_m...', 'Model_Member_Or...', Array)
#1 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /home/wwwroot/www.aitto.net/core/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /home/wwwroot/www.aitto.net/plugins/supplier/application/classes/controller/pc/order.php(175): Kohana_ORM->get_all()
#5 [internal function]: Controller_Pc_Order->action_genexcel()
#6 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Pc_Order))
#7 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#9 /home/wwwroot/www.aitto.net/plugins/supplier/index.php(133): Kohana_Request->execute()
#10 {main}
2016-08-11 13:43:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Member_Order::getStatusName() ~ APPPATH/classes/controller/pc/order.php [ 395 ]
2016-08-11 13:43:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Member_Order::getStatusName() ~ APPPATH/classes/controller/pc/order.php [ 395 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}