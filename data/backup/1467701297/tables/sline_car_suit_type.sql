-- 表的结构：sline_car_suit_type --
CREATE TABLE `sline_car_suit_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kindname` varchar(255) DEFAULT NULL COMMENT '套餐类型名称',
  `carid` varchar(255) DEFAULT NULL COMMENT '车辆id',
  `description` varchar(255) DEFAULT NULL COMMENT '类型描述',
  `displayorder` int(11) unsigned DEFAULT '9999' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='租车套餐类型表.';-- <xjx> --

