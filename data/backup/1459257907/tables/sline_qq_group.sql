-- 表的结构：sline_qq_group --
CREATE TABLE `sline_qq_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(30) DEFAULT NULL,
  `groupdes` varchar(150) DEFAULT NULL,
  `isopen` tinyint(1) DEFAULT '1',
  `webid` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='qq组分类表(弃用)';-- <xjx> --

