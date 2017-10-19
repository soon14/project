-- 表的结构：sline_startplace --
CREATE TABLE `sline_startplace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destid` int(11) DEFAULT NULL COMMENT '目的地ID',
  `cityname` varchar(255) DEFAULT NULL COMMENT '出发城市',
  `isdefault` int(1) unsigned DEFAULT '0' COMMENT '是否默认',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  `displayorder` int(11) DEFAULT '9999' COMMENT '排序',
  `domain` varchar(255) DEFAULT NULL COMMENT '域名',
  `pid` int(8) NOT NULL COMMENT '弃用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COMMENT='出发地表';-- <xjx> --

