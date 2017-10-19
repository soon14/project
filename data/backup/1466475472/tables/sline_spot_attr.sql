-- 表的结构：sline_spot_attr --
CREATE TABLE `sline_spot_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL COMMENT '站点id(弃用)',
  `attrname` varchar(255) DEFAULT NULL COMMENT '属性名称',
  `displayorder` int(11) DEFAULT NULL COMMENT '排序',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `destid` varchar(255) DEFAULT NULL COMMENT '所属目的地',
  `issystem` int(1) DEFAULT '0' COMMENT '是否系统属性',
  `litpic` varchar(255) DEFAULT NULL COMMENT '属性图片',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='景点属性表';-- <xjx> --

