-- 表的结构：sline_plugin_leftnav --
CREATE TABLE `sline_plugin_leftnav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(2) unsigned DEFAULT NULL,
  `kindname` varchar(255) DEFAULT NULL COMMENT '名称',
  `pid` int(11) unsigned DEFAULT NULL COMMENT '父级id',
  `linkurl` varchar(255) DEFAULT NULL COMMENT '链接url',
  `color` varchar(255) DEFAULT NULL COMMENT '颜色',
  `displayorder` int(4) unsigned NOT NULL DEFAULT '9999' COMMENT '排序',
  `isopen` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否开启',
  `litpic` varchar(200) DEFAULT NULL COMMENT '图标',
  `remark` varchar(200) DEFAULT NULL COMMENT '自定义说明',
  PRIMARY KEY (`id`),
  KEY `IDX_PID_DISPLAYORDER` (`pid`,`displayorder`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='顶部自定义导航表';-- <xjx> --

