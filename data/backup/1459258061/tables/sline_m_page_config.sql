-- 表的结构：sline_m_page_config --
CREATE TABLE `sline_m_page_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pageid` int(11) unsigned DEFAULT NULL COMMENT '页面id',
  `path` varchar(255) DEFAULT NULL COMMENT '模板路径',
  `isuse` tinyint(1) unsigned DEFAULT '0' COMMENT '是否使用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='手机模板页面配置表';-- <xjx> --

