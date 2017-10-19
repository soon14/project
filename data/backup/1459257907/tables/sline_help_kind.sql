-- 表的结构：sline_help_kind --
CREATE TABLE `sline_help_kind` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `webid` int(2) DEFAULT NULL COMMENT '弃用',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用',
  `kindname` varchar(255) DEFAULT NULL COMMENT '帮助分类名称',
  `litpic` varchar(255) DEFAULT NULL COMMENT '标识图片',
  `displayorder` int(11) unsigned DEFAULT NULL COMMENT '显示顺序',
  `isopen` int(1) unsigned DEFAULT '1' COMMENT '是否启用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='帮助类型分类表';-- <xjx> --

