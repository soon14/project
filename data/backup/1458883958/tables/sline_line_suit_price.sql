-- 表的结构：sline_line_suit_price --
CREATE TABLE `sline_line_suit_price` (
  `lineid` int(11) NOT NULL,
  `suitid` int(11) NOT NULL DEFAULT '0' COMMENT '套餐id',
  `day` int(11) NOT NULL DEFAULT '0' COMMENT '日期',
  `childprofit` int(11) DEFAULT NULL COMMENT '小孩利润',
  `childbasicprice` int(11) DEFAULT NULL COMMENT '小孩基础报价',
  `childprice` int(11) DEFAULT NULL COMMENT '小孩价格',
  `oldprofit` int(11) DEFAULT NULL COMMENT '老人利润',
  `oldbasicprice` int(11) DEFAULT NULL COMMENT '老人基础报价',
  `oldprice` int(11) DEFAULT NULL COMMENT '老人价格',
  `adultprofit` int(11) DEFAULT NULL COMMENT '成人利润',
  `adultbasicprice` int(11) DEFAULT NULL COMMENT '成人基础报价',
  `adultprice` int(11) DEFAULT NULL COMMENT '成人报价',
  `description` varchar(50) DEFAULT NULL COMMENT '描述',
  `number` int(11) DEFAULT NULL COMMENT '库存',
  `roombalance` int(11) DEFAULT '0' COMMENT '单房差',
  PRIMARY KEY (`suitid`,`day`),
  KEY `IDX_lineid` (`lineid`) USING BTREE,
  KEY `IDX_suitid` (`suitid`) USING BTREE,
  KEY `IDX_day` (`day`) USING BTREE,
  KEY `IDX_lineid_suitid` (`lineid`,`suitid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='线路套餐按月报价表';-- <xjx> --

