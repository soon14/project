-- 表的结构：sline_spot_ticket_type --
CREATE TABLE `sline_spot_ticket_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kindname` varchar(255) DEFAULT NULL COMMENT '门票类型名称',
  `spotid` varchar(255) DEFAULT NULL COMMENT '景点id',
  `description` varchar(255) DEFAULT NULL COMMENT '类型描述',
  `displayorder` int(11) unsigned DEFAULT '9999' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='景点门票类型表';-- <xjx> --

