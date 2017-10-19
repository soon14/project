-- 表的结构：sline_car_kind --
CREATE TABLE `sline_car_kind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL COMMENT '站点id',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用',
  `kindname` varchar(255) DEFAULT NULL COMMENT '分类信息',
  `title` varchar(255) DEFAULT NULL COMMENT '分类标题',
  `keyword` varchar(255) DEFAULT NULL COMMENT '关键词',
  `tagword` varchar(255) DEFAULT NULL COMMENT '文章相关词',
  `description` mediumtext COMMENT '信息描述',
  `orderid` varchar(255) DEFAULT NULL COMMENT '排序(弃用)',
  `displayorder` int(11) unsigned DEFAULT '9999' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='车型表';-- <xjx> --

