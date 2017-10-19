-- 表的结构：sline_car_extend_field --
CREATE TABLE `sline_car_extend_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `productid` int(11) DEFAULT NULL COMMENT '产品id',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='租车字段扩展表';-- <xjx> --

