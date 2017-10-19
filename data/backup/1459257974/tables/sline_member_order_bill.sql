-- 表的结构：sline_member_order_bill --
CREATE TABLE `sline_member_order_bill` (
  ` id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL COMMENT '订单编号',
  `title` varchar(255) NOT NULL COMMENT '发票抬头',
  `receiver` varchar(255) NOT NULL COMMENT '收件人',
  `mobile` varchar(20) NOT NULL COMMENT '收件人联系电话',
  `province` varchar(20) NOT NULL COMMENT '省份',
  `city` varchar(20) NOT NULL COMMENT '城市',
  `address` varchar(20) NOT NULL COMMENT '详细地址',
  PRIMARY KEY (` id`),
  KEY ` id` (` id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单发票表';-- <xjx> --

