-- 表的结构：sline_line_jieshao --
CREATE TABLE `sline_line_jieshao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lineid` int(11) unsigned DEFAULT NULL,
  `day` int(11) unsigned DEFAULT NULL COMMENT '第N天',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `breakfirsthas` tinyint(1) DEFAULT '0' COMMENT '早餐是否选择',
  `breakfirst` varchar(255) DEFAULT NULL COMMENT '早餐',
  `transport` varchar(255) DEFAULT NULL COMMENT '交通',
  `hotel` varchar(255) DEFAULT NULL COMMENT '住宿',
  `jieshao` text COMMENT '行程内容',
  `lunchhas` tinyint(1) DEFAULT '0' COMMENT '午餐是否选择',
  `lunch` varchar(255) DEFAULT NULL COMMENT '午餐描述',
  `supperhas` tinyint(1) unsigned DEFAULT '0' COMMENT '是否有晚餐',
  `supper` varchar(255) DEFAULT NULL COMMENT '晚餐描述',
  PRIMARY KEY (`id`),
  KEY `IDX_lineid` (`lineid`) USING BTREE,
  KEY `IDX_day` (`day`) USING BTREE,
  KEY `IDX_lineid_day` (`lineid`,`day`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='线路行程内容表';-- <xjx> --

