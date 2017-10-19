-- 表的结构：sline_customize --
CREATE TABLE `sline_customize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dest` varchar(80) DEFAULT NULL COMMENT '目的地',
  `starttime` int(11) DEFAULT NULL COMMENT '出发时间',
  `startplace` varchar(80) DEFAULT NULL COMMENT '出发地',
  `days` int(11) DEFAULT NULL COMMENT '天数',
  `adultnum` int(11) DEFAULT NULL COMMENT '成人数量',
  `childnum` int(11) DEFAULT NULL COMMENT '小孩数量',
  `planerank` varchar(30) DEFAULT NULL COMMENT '舱位等级',
  `hotelrank` varchar(30) DEFAULT NULL COMMENT '酒店等级',
  `room` varchar(30) DEFAULT NULL COMMENT '房型',
  `food` varchar(30) DEFAULT NULL COMMENT '餐钦',
  `sex` varchar(6) DEFAULT NULL COMMENT '姓别',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `phone` varchar(30) DEFAULT NULL COMMENT '电话',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `contacttime` varchar(50) DEFAULT NULL COMMENT '适合联系时间',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `contactname` varchar(30) DEFAULT NULL COMMENT '联系人',
  `status` tinyint(4) DEFAULT '0' COMMENT '状态',
  `content` text COMMENT '其它需求',
  `viewstatus` tinyint(1) DEFAULT '0' COMMENT '查看状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='私人定制表(4.2)';-- <xjx> --

