-- 表的结构：sline_page --
CREATE TABLE `sline_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(255) DEFAULT NULL,
  `kindname` varchar(255) DEFAULT NULL COMMENT '页面名称',
  `pagename` varchar(255) DEFAULT NULL COMMENT '页面名称(英文)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COMMENT='思途页面模块列表';-- <xjx> --

