-- 表的结构：sline_dzorder --
CREATE TABLE `sline_dzorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordersn` varchar(255) DEFAULT NULL COMMENT '订单号',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `dingjin` int(11) DEFAULT NULL COMMENT '支付定金',
  `username` varchar(255) DEFAULT NULL COMMENT '用户',
  `phone` varchar(255) DEFAULT NULL COMMENT '联系电话',
  `travelnum` int(11) DEFAULT NULL COMMENT '旅游天数',
  `description` text COMMENT '描述',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `finishtime` int(11) DEFAULT NULL COMMENT '完团时间',
  `status` int(11) DEFAULT '0' COMMENT '状态',
  `viewstatus` tinyint(1) DEFAULT '0' COMMENT '查看状态',
  `paysource` char(50) DEFAULT NULL COMMENT '支付来源',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='定制订单表(弃用)';-- <xjx> --

