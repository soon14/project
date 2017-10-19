-- 表的结构：sline_photo_attr --
CREATE TABLE `sline_photo_attr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(3) DEFAULT NULL COMMENT '弃用',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用',
  `attrname` varchar(255) DEFAULT NULL COMMENT '属性名称',
  `displayorder` int(11) unsigned DEFAULT NULL COMMENT '排序',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `issystem` int(1) NOT NULL DEFAULT '0' COMMENT '是否系统属性',
  `litpic` varchar(255) DEFAULT NULL COMMENT '属性图片',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `destid` varchar(255) DEFAULT NULL COMMENT '所属目的地',
  PRIMARY KEY (`id`),
  KEY `IDX_PID_ID` (`pid`,`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='相册属性表';-- <xjx> --

