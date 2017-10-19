-- 表的结构：sline_member_order_listener --
CREATE TABLE `sline_member_order_listener` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `supplierlist` varchar(50) DEFAULT NULL,
  `distributor` varchar(255) DEFAULT NULL,
  `productautoid` int(11) DEFAULT NULL,
  `suitid` int(11) DEFAULT NULL,
  `order_status` int(11) DEFAULT NULL COMMENT '监听的订单状态',
  `execute_url` varchar(5000) NOT NULL COMMENT '调用的url',
  `exdata` longtext COMMENT '扩展数据预留',
  `isenabled` int(11) NOT NULL DEFAULT '1' COMMENT '是否可用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;-- <xjx> --

