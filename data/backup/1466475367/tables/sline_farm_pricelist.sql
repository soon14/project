-- 表的结构：sline_farm_pricelist --
CREATE TABLE `sline_farm_pricelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL COMMENT '站点id',
  `aid` int(11) unsigned DEFAULT NULL,
  `min` int(11) DEFAULT NULL COMMENT '最小农家乐价格',
  `max` int(11) DEFAULT NULL COMMENT '最大农家乐价格',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='农家乐价格分类';-- <xjx> --

