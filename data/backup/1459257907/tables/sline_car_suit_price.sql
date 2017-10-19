-- 表的结构：sline_car_suit_price --
CREATE TABLE `sline_car_suit_price` (
  `carid` int(11) NOT NULL COMMENT '车辆id',
  `suitid` int(11) NOT NULL DEFAULT '0' COMMENT '套餐id',
  `day` int(11) NOT NULL DEFAULT '0' COMMENT '天/时间戳',
  `adultprofit` int(11) DEFAULT NULL COMMENT '利润',
  `adultbasicprice` int(11) DEFAULT NULL COMMENT '基础报价',
  `adultprice` int(11) DEFAULT NULL COMMENT '报价',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `number` int(11) DEFAULT '0' COMMENT '库存',
  PRIMARY KEY (`suitid`,`day`),
  KEY `IDX_carid` (`carid`) USING BTREE,
  KEY `IDX_suitid` (`suitid`) USING BTREE,
  KEY `IDX_day` (`day`) USING BTREE,
  KEY `IDX_carid_suitid` (`carid`,`suitid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='租车套餐按天报价表';-- <xjx> --

