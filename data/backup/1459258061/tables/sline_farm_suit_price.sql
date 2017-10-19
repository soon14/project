-- 表的结构：sline_farm_suit_price --
CREATE TABLE `sline_farm_suit_price` (
  `farmid` int(11) NOT NULL COMMENT '农家乐id',
  `suitid` int(11) NOT NULL DEFAULT '0' COMMENT '套餐id',
  `day` int(11) NOT NULL DEFAULT '0' COMMENT '日期',
  `profit` int(11) DEFAULT NULL COMMENT '利润',
  `basicprice` int(11) DEFAULT NULL COMMENT '成本价',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `number` int(11) DEFAULT NULL COMMENT '库存',
  UNIQUE KEY `suitid` (`suitid`,`day`),
  KEY `IDX_farmid` (`farmid`) USING BTREE,
  KEY `IDX_suitid` (`suitid`) USING BTREE,
  KEY `IDX_day` (`day`) USING BTREE,
  KEY `IDX_farm_suitid` (`farmid`,`suitid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='农家乐套餐报价表';-- <xjx> --

