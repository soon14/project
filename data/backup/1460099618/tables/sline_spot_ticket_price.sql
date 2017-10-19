-- 表的结构：sline_spot_ticket_price --
CREATE TABLE `sline_spot_ticket_price` (
  `spotid` int(11) DEFAULT NULL COMMENT '景点ID',
  `ticketid` int(11) NOT NULL DEFAULT '0' COMMENT '票id',
  `day` int(11) NOT NULL DEFAULT '0' COMMENT '日期',
  `childprofit` int(11) DEFAULT NULL COMMENT '小孩利润',
  `childbasicprice` int(11) DEFAULT NULL COMMENT '小孩基础报价',
  `childprice` int(11) DEFAULT NULL COMMENT '小孩价格',
  `childmarketprice` int(11) DEFAULT NULL COMMENT '小孩市场价格',
  `childdistributionprice` int(11) DEFAULT NULL COMMENT '小孩分销商价格（第三方推送备用）',
  `oldprofit` int(11) DEFAULT NULL COMMENT '老人利润',
  `oldbasicprice` int(11) DEFAULT NULL COMMENT '老人基础报价',
  `oldprice` int(11) DEFAULT NULL COMMENT '老人价格',
  `olddistributionprice` int(11) DEFAULT NULL COMMENT '老人分销商价格（第三方推送备用）',
  `oldmarketprice` int(11) DEFAULT NULL COMMENT '老人市场价格',
  `adultprofit` int(11) DEFAULT NULL COMMENT '成人利润',
  `adultbasicprice` int(11) DEFAULT NULL COMMENT '成人基础报价',
  `adultprice` int(11) DEFAULT NULL COMMENT '成人报价',
  `adultmarketprice` int(11) DEFAULT NULL COMMENT '成人市场价格',
  `adultdistributionprice` int(11) DEFAULT NULL COMMENT '成人分销商价格（第三方推送备用）',
  `description` varchar(50) DEFAULT NULL COMMENT '描述',
  `number` int(11) DEFAULT NULL COMMENT '库存',
  PRIMARY KEY (`ticketid`,`day`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='线路套餐按月报价表';-- <xjx> --

