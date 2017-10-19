-- 表的结构：bbs_hjbox_users --
CREATE TABLE `bbs_hjbox_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(1000) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `city` varchar(1000) DEFAULT NULL,
  `country` varchar(1000) DEFAULT NULL,
  `province` varchar(1000) DEFAULT NULL,
  `headimgurl` varchar(1000) DEFAULT NULL,
  `is_gz` tinyint(1) NOT NULL DEFAULT '1',
  `openid` varchar(1000) NOT NULL,
  `telphone` varchar(100) DEFAULT NULL,
  `bbsuid` int(11) DEFAULT NULL,
  `gztime` int(11) NOT NULL,
  `yuliua` int(11) DEFAULT NULL,
  `yuliub` int(11) DEFAULT NULL,
  `yuliuc` int(11) DEFAULT NULL,
  `yuliud` varchar(1000) DEFAULT NULL,
  `yuliue` varchar(1000) DEFAULT NULL,
  `yuliuf` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6369 DEFAULT CHARSET=utf8;-- <xjx> --

