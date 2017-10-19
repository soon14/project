-- 表的结构：sline_line_attr --
CREATE TABLE `sline_line_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(3) DEFAULT NULL COMMENT '弃用',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用',
  `attrname` varchar(255) DEFAULT NULL COMMENT '属性名称',
  `displayorder` int(11) unsigned DEFAULT NULL COMMENT '排序',
  `isopen` int(11) unsigned DEFAULT '0' COMMENT '是否开启',
  `issystem` int(11) unsigned DEFAULT '0' COMMENT '是否系统属性',
  `channeldispaly` int(1) DEFAULT NULL COMMENT '栏目是否显示',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `destid` varchar(255) DEFAULT NULL COMMENT '所属目的地id',
  `litpic` varchar(255) DEFAULT NULL COMMENT '封面图',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`),
  KEY `IDX_PID_ID` (`pid`,`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COMMENT='线路属性表';-- <xjx> --

