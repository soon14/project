-- 表的结构：sline_hotel_pricelist --
CREATE TABLE `sline_hotel_pricelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL COMMENT 'WEBID',
  `aid` int(11) unsigned DEFAULT NULL,
  `min` int(11) DEFAULT NULL COMMENT '最小酒店价格',
  `max` int(11) DEFAULT NULL COMMENT '最大酒店价格',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=gb2312 ROW_FORMAT=FIXED COMMENT='酒店价格范围表';-- <xjx> --

