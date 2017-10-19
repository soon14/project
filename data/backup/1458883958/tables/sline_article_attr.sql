-- 表的结构：sline_article_attr --
CREATE TABLE `sline_article_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(3) DEFAULT '0' COMMENT '站点id,弃用',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用.',
  `attrname` varchar(255) DEFAULT NULL COMMENT '属性名称',
  `displayorder` int(11) unsigned DEFAULT NULL COMMENT '排序',
  `isopen` int(11) unsigned DEFAULT '0' COMMENT '是否开启',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `destid` varchar(255) DEFAULT NULL COMMENT '所属目的地',
  `litpic` varchar(255) DEFAULT NULL COMMENT '属性图片',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `issystem` int(1) DEFAULT '0' COMMENT '是否是系统属性',
  PRIMARY KEY (`id`),
  KEY `IDX_PID_ID` (`pid`,`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='文章属性表';-- <xjx> --

