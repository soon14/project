-- 表的结构：sline_spot_pricelist --
CREATE TABLE `sline_spot_pricelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL COMMENT '站点id(弃用)',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用',
  `min` int(11) DEFAULT NULL COMMENT '景区最低价格',
  `max` int(11) DEFAULT NULL COMMENT '景区最高价格',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=gb2312 ROW_FORMAT=FIXED COMMENT='景点价格范围表';-- <xjx> --

