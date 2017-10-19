-- 表的结构：sline_visa_city --
CREATE TABLE `sline_visa_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kindname` varchar(255) DEFAULT NULL COMMENT '签发城市',
  `displayorder` int(4) unsigned DEFAULT '9999' COMMENT '排序',
  `isopen` int(1) unsigned DEFAULT '0' COMMENT '是否开启',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='签证签发城市表';-- <xjx> --

