<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-05-04 16:00:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:00:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:00:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:01:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:01:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:01:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:01:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:01:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:01:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:01:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:01:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:01:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:01:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:01:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:01:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:02:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:02:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:02:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:02:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:02:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:02:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:02:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:02:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens DESC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:03:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-05-04 16:03:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'carmens' in 'order clause' [ select a.id,a.aid,a.title,a.supplierlist,a.linedate,a.selfDriMdd,a.iconlist,a.finaldestid,a.price,a.startcity,a.attrid,if(length(ifnull(a.attrid,''))=0,0,1) as order_attrid,if(length(ifnull(a.kindlist,''))=0,0,1) as order_kindlist,if(length(ifnull(a.iconlist,''))=0,0,1) as order_iconlist,if(length(ifnull(a.themelist,''))=0,0,1) as order_themelist,a.webid,a.kindlist,a.ishidden,a.piclist,a.themelist,b.isjian,IFNULL(b.displayorder,9999) as displayorder,b.isding,b.istejia,ifnull(d.suitday,0) as suitday from sline_line as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=1)   left join (select

c.lineid,c.id,min(c.suitday) as suitday from(select a.lineid,a.id,max(ifnull(b.day,0)) as suitday from sline_line_suit a left join sline_line_suit_price b on a.id=b.suitid group by a.id) c group by c.lineid) d on a.id=d.lineid where a.id is not null order by carmens ASC,a.modtime desc  limit 0,30 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /home/wwwroot/www.aitto.net/core/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.a...', false, Array)
#1 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/line.php(681): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Line->action_line()
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#6 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#7 {main}
2017-05-04 16:38:19 --- ERROR: Kohana_Exception [ 0 ]: Cannot update spot model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
2017-05-04 16:38:19 --- STRACE: Kohana_Exception [ 0 ]: Cannot update spot model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1486 ]
--
#0 /home/wwwroot/www.aitto.net/newtravel/application/classes/controller/spot.php(1135): Kohana_ORM->update()
#1 [internal function]: Controller_Spot->action_ajax_save()
#2 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Spot))
#3 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/wwwroot/www.aitto.net/core/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#5 /home/wwwroot/www.aitto.net/newtravel/index.php(121): Kohana_Request->execute()
#6 {main}