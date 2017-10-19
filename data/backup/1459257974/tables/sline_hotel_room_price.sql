-- 表的结构：sline_hotel_room_price --
CREATE TABLE `sline_hotel_room_price` (
  `hotelid` int(11) NOT NULL,
  `suitid` int(11) NOT NULL DEFAULT '0' COMMENT '房型id',
  `day` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  `profit` int(11) DEFAULT NULL COMMENT '利润',
  `basicprice` int(11) DEFAULT NULL COMMENT '基础报价',
  `price` int(11) DEFAULT NULL COMMENT '报价',
  `description` varchar(255) DEFAULT NULL COMMENT '描述',
  `number` int(11) DEFAULT NULL COMMENT '库存',
  UNIQUE KEY `suitid` (`suitid`,`day`),
  KEY `IDX_hotelid` (`hotelid`) USING BTREE,
  KEY `IDX_suitid` (`suitid`) USING BTREE,
  KEY `IDX_day` (`day`) USING BTREE,
  KEY `IDX_hotelid_suitid` (`hotelid`,`suitid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='酒店房型按月报价表';-- <xjx> --

