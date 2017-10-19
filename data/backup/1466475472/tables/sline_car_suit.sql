-- 表的结构：sline_car_suit --
CREATE TABLE `sline_car_suit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carid` int(11) DEFAULT NULL COMMENT '车辆id',
  `suitname` varchar(255) DEFAULT NULL COMMENT '套餐名称',
  `content` text COMMENT '描述',
  `unit` varchar(255) DEFAULT NULL COMMENT '单位',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `jifenbook` int(11) DEFAULT '0' COMMENT '预订送积分',
  `jifentprice` int(11) DEFAULT NULL COMMENT '积分抵现',
  `jifencomment` int(11) DEFAULT NULL COMMENT '评论送积分',
  `paytype` int(1) unsigned DEFAULT '1' COMMENT '支付方式 1,全款,2,定金,3,二次确认',
  `dingjin` varchar(255) DEFAULT NULL COMMENT '定金',
  `suittypeid` int(11) DEFAULT '0' COMMENT '套餐类型id',
  `displayorder` int(11) DEFAULT '9999' COMMENT '排序',
  `number` int(11) DEFAULT '0' COMMENT '库存',
  `lastoffer` text COMMENT '上次报价',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='租车套餐表';-- <xjx> --

