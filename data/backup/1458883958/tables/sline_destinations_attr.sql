-- 表的结构：sline_destinations_attr --
CREATE TABLE `sline_destinations_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(1) unsigned DEFAULT '0',
  `attrname` varchar(255) DEFAULT NULL COMMENT '分类信息',
  `displayorder` int(11) DEFAULT NULL COMMENT '排序',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `issystem` int(1) unsigned DEFAULT '0' COMMENT '是否系统属性',
  `destid` varchar(255) DEFAULT NULL COMMENT '所属目的地id',
  `litpic` varchar(255) DEFAULT NULL COMMENT '封面图',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='目的地属性表(弃用)';-- <xjx> --

