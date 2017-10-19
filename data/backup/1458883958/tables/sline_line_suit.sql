-- 表的结构：sline_line_suit --
CREATE TABLE `sline_line_suit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lineid` int(11) NOT NULL COMMENT '线路id',
  `suitname` varchar(255) DEFAULT NULL COMMENT '套餐名称',
  `description` text COMMENT '描述',
  `displayorder` int(11) DEFAULT '999999' COMMENT '排序',
  `jifenbook` int(11) DEFAULT '0' COMMENT '预订积分',
  `jifentprice` int(11) DEFAULT '0' COMMENT '积分抵现',
  `jifencomment` int(11) DEFAULT '0' COMMENT '评论送积分',
  `propgroup` varchar(6) DEFAULT NULL COMMENT '1:小孩 2:成人 3:老人',
  `paytype` tinyint(1) unsigned DEFAULT '1' COMMENT '支付方式 1:全款支付 2,定金支付,3,二次确认',
  `dingjin` varchar(255) DEFAULT NULL COMMENT '订金金额',
  `lastoffer` text NOT NULL COMMENT '上次报价',
  PRIMARY KEY (`id`),
  KEY `lineid` (`lineid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='线路套餐表';-- <xjx> --

