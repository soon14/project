-- 表的结构：sline_farm_suit --
CREATE TABLE `sline_farm_suit` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `webid` int(3) NOT NULL DEFAULT '1' COMMENT '站点ID',
  `farmid` int(11) DEFAULT NULL COMMENT '农家乐id',
  `suitname` varchar(255) DEFAULT NULL COMMENT '套餐名称',
  `price` int(11) unsigned DEFAULT NULL COMMENT '价格',
  `sellprice` int(11) unsigned DEFAULT NULL COMMENT '市场价',
  `displayorder` int(11) DEFAULT NULL COMMENT '显示顺序',
  `piclist` text COMMENT '图片列表',
  `jifencomment` int(11) DEFAULT '0' COMMENT '评论送积分',
  `jifentprice` int(11) DEFAULT '0' COMMENT '积分抵现金',
  `jifenbook` int(11) DEFAULT '0' COMMENT '预订送积分',
  `paytype` int(1) unsigned DEFAULT '1' COMMENT '支付类型:1全额支付,2,定金支付 3,二次确认支付',
  `dingjin` varchar(255) DEFAULT NULL COMMENT '定金',
  `lastoffer` text NOT NULL COMMENT '上次报价',
  `description` text COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='农家乐套餐表';-- <xjx> --

