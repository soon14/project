-- 表的结构：sline_templet --
CREATE TABLE `sline_templet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `zippath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='模板皮肤表(4.2版本使用)';-- <xjx> --

