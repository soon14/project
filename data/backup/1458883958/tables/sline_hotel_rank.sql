-- 表的结构：sline_hotel_rank --
CREATE TABLE `sline_hotel_rank` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `webid` int(3) NOT NULL DEFAULT '1' COMMENT '弃用',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '弃用',
  `hotelrank` varchar(255) DEFAULT NULL COMMENT '星级名称',
  `orderid` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `IDX_AID_WEBID` (`aid`,`webid`) USING BTREE,
  KEY `IDX_ORDERID` (`orderid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='酒店星级表';-- <xjx> --

