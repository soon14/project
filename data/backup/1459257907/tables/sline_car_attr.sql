-- 表的结构：sline_car_attr --
CREATE TABLE `sline_car_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(3) DEFAULT NULL COMMENT '弃用',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用',
  `attrname` varchar(255) DEFAULT NULL COMMENT '属性名称',
  `displayorder` int(11) unsigned DEFAULT NULL COMMENT '排序',
  `isopen` int(11) unsigned DEFAULT '0' COMMENT '是否开启',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `destid` varchar(255) DEFAULT NULL COMMENT '目的地id',
  `issystem` int(1) DEFAULT '0' COMMENT '是否是系统属性',
  `litpic` varchar(255) DEFAULT NULL COMMENT '缩略图',
  PRIMARY KEY (`id`),
  KEY `IDX_PID_ID` (`pid`,`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='租车属性表';-- <xjx> --

