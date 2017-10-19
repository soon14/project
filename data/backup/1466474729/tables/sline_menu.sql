-- 表的结构：sline_menu --
CREATE TABLE `sline_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID编号',
  `pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '父ID',
  `title` varchar(255) DEFAULT NULL COMMENT '中文标题',
  `entitle` varchar(255) NOT NULL COMMENT '英文标题',
  `controller` varchar(60) DEFAULT NULL COMMENT '控制器',
  `method` varchar(60) DEFAULT NULL COMMENT '方法',
  `ico` varchar(255) DEFAULT NULL COMMENT '标题图标',
  `displayorder` int(11) unsigned DEFAULT '0' COMMENT '排序',
  `extraparam` varchar(255) DEFAULT NULL COMMENT '额外参数',
  `extlink` tinyint(1) DEFAULT '0' COMMENT '外部链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=utf8;-- <xjx> --

