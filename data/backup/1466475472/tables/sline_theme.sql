-- 表的结构：sline_theme --
CREATE TABLE `sline_theme` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aid` varchar(255) DEFAULT NULL COMMENT '弃用',
  `webid` int(2) unsigned DEFAULT '0' COMMENT '站点id(弃用)',
  `ztname` varchar(255) DEFAULT NULL COMMENT '专题名称',
  `seotitle` varchar(255) DEFAULT NULL COMMENT 'seo标题',
  `shortname` varchar(255) DEFAULT NULL COMMENT '专题简短主题',
  `keyword` varchar(255) DEFAULT NULL COMMENT '关键词',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `logo` varchar(255) DEFAULT NULL COMMENT '主题游LOGO',
  `jieshao` text COMMENT '专题介绍',
  `bgcolor` varchar(255) DEFAULT NULL COMMENT '背景颜色',
  `bgimage` varchar(255) DEFAULT NULL COMMENT '专题背景',
  `templetpath` varchar(255) DEFAULT NULL COMMENT '自定义模板名称',
  `kindlist` varchar(255) DEFAULT NULL COMMENT '专题所属目的地',
  `tagword` varchar(255) DEFAULT NULL COMMENT 'tag词',
  `shownum` int(11) unsigned DEFAULT NULL COMMENT '查看次数',
  `displayorder` int(11) unsigned DEFAULT '9999' COMMENT '排序',
  `addtime` int(11) unsigned DEFAULT NULL COMMENT '添加时间',
  `modtime` varchar(255) DEFAULT NULL COMMENT '修改时间',
  `isopen` int(1) unsigned DEFAULT '1' COMMENT '是否开启',
  `templet` varchar(255) DEFAULT NULL COMMENT '专题模板',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='专题表';-- <xjx> --

