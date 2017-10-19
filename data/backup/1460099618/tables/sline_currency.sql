-- 表的结构：sline_currency --
CREATE TABLE `sline_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countryname` varchar(100) DEFAULT NULL COMMENT '国家名称',
  `chinesename` varchar(100) DEFAULT NULL COMMENT '货币中文名',
  `englishname` varchar(100) DEFAULT NULL COMMENT '货币英文名',
  `code` char(20) DEFAULT NULL COMMENT '货币代码,一般是三个字母',
  `symbol` varchar(10) DEFAULT NULL COMMENT '货币符号',
  `isopen` tinyint(1) DEFAULT '0' COMMENT '是否启用',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='汇率表';-- <xjx> --

