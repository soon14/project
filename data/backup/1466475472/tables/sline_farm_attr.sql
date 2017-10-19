-- 表的结构：sline_farm_attr --
CREATE TABLE `sline_farm_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(1) unsigned DEFAULT '0' COMMENT '站点ID',
  `attrname` varchar(255) DEFAULT NULL COMMENT '分类信息',
  `displayorder` int(11) DEFAULT NULL COMMENT '显示顺序',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  `pid` int(10) DEFAULT NULL COMMENT '上级id',
  `issystem` int(1) unsigned DEFAULT '0' COMMENT '是否为系统属性',
  `destid` varchar(255) DEFAULT NULL COMMENT '所属目的地id',
  `litpic` varchar(255) DEFAULT NULL COMMENT '封面图片',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`),
  KEY `IDX_PID_ID` (`pid`,`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='农家乐属性';-- <xjx> --

