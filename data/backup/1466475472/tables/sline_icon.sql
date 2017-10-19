-- 表的结构：sline_icon --
CREATE TABLE `sline_icon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL COMMENT '弃用.',
  `kind` char(50) NOT NULL COMMENT '名称',
  `picurl` varchar(255) NOT NULL COMMENT '图片地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='图标表';-- <xjx> --

