-- 表的结构：sline_tuan_kindlist --
CREATE TABLE `sline_tuan_kindlist` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kindid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '目的地表',
  `seotitle` varchar(255) DEFAULT NULL COMMENT '优化标题',
  `keyword` varchar(255) DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `tagword` varchar(255) DEFAULT NULL COMMENT 'tag词',
  `jieshao` text COMMENT '介绍',
  `isfinishseo` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否完成优化',
  `displayorder` int(4) unsigned DEFAULT '9999' COMMENT '排序',
  `isnav` int(1) unsigned DEFAULT '0' COMMENT '是否导航',
  `ishot` int(1) unsigned DEFAULT '0' COMMENT '是否热门',
  `shownum` int(8) DEFAULT NULL COMMENT '数量(弃用)',
  `templetpath` varchar(255) DEFAULT NULL COMMENT '模板路径',
  PRIMARY KEY (`id`),
  KEY `IDX_KINDID` (`kindid`) USING BTREE,
  KEY `IDX_DISPLAYORDER_KINDID` (`displayorder`,`kindid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COMMENT='团购目的地表';-- <xjx> --

