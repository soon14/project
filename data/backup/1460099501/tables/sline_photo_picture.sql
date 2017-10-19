-- 表的结构：sline_photo_picture --
CREATE TABLE `sline_photo_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) DEFAULT NULL,
  `pid` int(11) NOT NULL COMMENT '所属相册id',
  `litpic` varchar(100) DEFAULT NULL COMMENT '小图连接地址',
  `bigpic` varchar(100) DEFAULT NULL COMMENT '大图连接地址',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `isindex` int(1) DEFAULT NULL COMMENT '弃用',
  `modtime` int(10) unsigned DEFAULT NULL COMMENT '修改时间',
  `displayorder` int(5) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='相册图片表';-- <xjx> --

