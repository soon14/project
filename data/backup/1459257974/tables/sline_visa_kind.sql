-- 表的结构：sline_visa_kind --
CREATE TABLE `sline_visa_kind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kindname` varchar(255) DEFAULT NULL COMMENT '签证类型',
  `displayorder` int(4) unsigned DEFAULT '9999' COMMENT '排序',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  PRIMARY KEY (`id`),
  KEY `IDX_KINDNAME` (`kindname`) USING BTREE,
  KEY `IDX_DISPLAYORDER_KINDNAME` (`displayorder`,`kindname`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='签证类型表';-- <xjx> --

