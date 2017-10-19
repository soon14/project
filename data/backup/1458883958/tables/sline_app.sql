-- 表的结构：sline_app --
CREATE TABLE `sline_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '应用编号',
  `number` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '产品序列号',
  `status` tinyint(1) DEFAULT '1' COMMENT '是否启用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='应用信息表';-- <xjx> --

