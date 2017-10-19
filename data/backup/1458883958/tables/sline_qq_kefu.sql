-- 表的结构：sline_qq_kefu --
CREATE TABLE `sline_qq_kefu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned DEFAULT '0' COMMENT '父级id',
  `qqname` varchar(50) DEFAULT NULL COMMENT '名称',
  `qqnum` varchar(20) DEFAULT NULL COMMENT 'qq号码',
  `isopen` tinyint(3) DEFAULT '1' COMMENT '是否开启',
  `displayorder` int(4) DEFAULT '9999' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='qq客服表';-- <xjx> --

