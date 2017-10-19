-- 表的结构：sline_model_content --
CREATE TABLE `sline_model_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(3) DEFAULT '1' COMMENT '弃用',
  `typeid` int(4) DEFAULT '0' COMMENT '栏目id',
  `columnname` varchar(30) DEFAULT NULL COMMENT '在线路中使用的字段名称',
  `chinesename` varchar(100) DEFAULT NULL COMMENT '中文显示名称',
  `displayorder` int(3) DEFAULT '0' COMMENT '显示顺序',
  `issystem` int(1) DEFAULT NULL COMMENT '是否系统属性',
  `isopen` int(1) DEFAULT NULL COMMENT '是否使用1，0',
  `isline` int(1) DEFAULT '0' COMMENT '弃用',
  `isrealfield` tinyint(1) DEFAULT '0' COMMENT '是否是真实字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='扩展模块内容分类表';-- <xjx> --

