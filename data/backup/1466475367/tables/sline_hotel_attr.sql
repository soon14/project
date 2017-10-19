-- 表的结构：sline_hotel_attr --
CREATE TABLE `sline_hotel_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(1) unsigned DEFAULT '0',
  `attrname` varchar(255) DEFAULT NULL COMMENT '属性名称',
  `displayorder` int(11) DEFAULT NULL COMMENT '排序',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `issystem` int(1) unsigned DEFAULT '0' COMMENT '是否系统属性',
  `destid` varchar(255) DEFAULT NULL COMMENT '目的地id',
  `litpic` varchar(255) DEFAULT NULL COMMENT '属性图片',
  `description` varchar(255) DEFAULT NULL COMMENT '属性描述',
  PRIMARY KEY (`id`),
  KEY `IDX_PID_ID` (`pid`,`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8 COMMENT='酒店属性表';-- <xjx> --

