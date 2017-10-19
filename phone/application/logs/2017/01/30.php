<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-01-30 00:03:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-6,3' at line 33 [ SELECT a.id,
                                a.webid,
                                a.aid,
                                a.title,
                                a.seotitle,
                                a.comefrom,
                                a.fromsite,
                                a.author,
                                a.content,
                                a.litpic,
                                a.addtime,
                                a.modtime,
                                a.shownum,
                                a.tagword,
                                a.keyword,
                                a.description,
                                a.kindlist,
                                a.gl_mdd,
                                a.themelist,
                                a.attrid,
                                a.ad_productid,
                                a.ad_kindid,
                                a.redirecturl,
                                a.ishidden,
                                a.iconlist,
                                a.templet,
                                a.summary,
                                a.isoffical,
                                a.piclist,
                                a.attachment,
                                a.finaldestid,
                                a.downnum,
                                a.likeNum FROM `sline_article` a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid and b.typeid=4) WHERE a.ishidden=0 AND FIND_IN_SET(37,a.attrid) AND a.title like '%灯光节%' ORDER BY a.addtime DESC LIMIT -6,3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-30 02:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-697.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 03:22:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-357.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 03:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-170.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 03:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1054.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 05:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1053.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 06:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/typeid-2.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 08:11:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1357.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 11:48:55 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-6,3' at line 33 [ SELECT a.id,
                                a.webid,
                                a.aid,
                                a.title,
                                a.seotitle,
                                a.comefrom,
                                a.fromsite,
                                a.author,
                                a.content,
                                a.litpic,
                                a.addtime,
                                a.modtime,
                                a.shownum,
                                a.tagword,
                                a.keyword,
                                a.description,
                                a.kindlist,
                                a.gl_mdd,
                                a.themelist,
                                a.attrid,
                                a.ad_productid,
                                a.ad_kindid,
                                a.redirecturl,
                                a.ishidden,
                                a.iconlist,
                                a.templet,
                                a.summary,
                                a.isoffical,
                                a.piclist,
                                a.attachment,
                                a.finaldestid,
                                a.downnum,
                                a.likeNum FROM `sline_article` a LEFT JOIN `sline_kindorderlist` b ON (a.id=b.aid and b.typeid=4) WHERE a.ishidden=0 AND FIND_IN_SET(59,a.kindlist) AND FIND_IN_SET(40,a.attrid) AND FIND_IN_SET(37,a.attrid) ORDER BY a.addtime DESC LIMIT -6,3 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-30 17:19:59 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and a.isshow='1' order by addtime asc LIMIT 0,5' at line 1 [ SELECT a.*,b.ChatNick,b.headimgurl FROM `sline_comment` a left JOIN  `sline_wxusermanage` b on a.openid=b.openId WHERE a.articleid =39 and a.typeid =  and a.isshow='1' order by addtime asc LIMIT 0,5 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2017-01-30 18:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL destination/specialty was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2017-01-30 18:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1323.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 19:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-954.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 19:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 19:31:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-1037.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 20:20:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-870.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 21:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-848.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 22:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/ayid-90.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 22:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/free-1362.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]
2017-01-30 22:52:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: che/aid-728.html ~ SYSPATH/classes/kohana/request.php [ 1148 ]