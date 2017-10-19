-- 表的结构：sline_currency_rate --
CREATE TABLE `sline_currency_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currencycode1` char(20) DEFAULT NULL COMMENT '汇率代码1',
  `currencycode2` char(20) DEFAULT NULL COMMENT '汇率代码2',
  `ratio1` float(255,4) DEFAULT '1.0000' COMMENT '汇率代码1比值',
  `ratio2` float(255,4) DEFAULT '1.0000' COMMENT '汇率代码2比值',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_union_unique` (`currencycode1`,`currencycode2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='汇率对照表';-- <xjx> --

