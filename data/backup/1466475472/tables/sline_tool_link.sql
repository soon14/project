-- 表的结构：sline_tool_link --
CREATE TABLE `sline_tool_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` int(1) DEFAULT '2' COMMENT '1,重要目标关键词,2,长尾关键词',
  `linkurl` varchar(500) DEFAULT NULL COMMENT '链接地址',
  `linelink` int(6) DEFAULT '0' COMMENT '线路链接数量',
  `addtime` int(10) unsigned DEFAULT '0' COMMENT '添加时间',
  `hotellink` int(6) unsigned DEFAULT '0' COMMENT '酒店产品链接数量',
  `carlink` int(6) unsigned DEFAULT '0' COMMENT '租车产品链接数量',
  `articlelink` int(6) unsigned DEFAULT '0' COMMENT '文章链接数量',
  `spotlink` int(6) unsigned DEFAULT '0' COMMENT '景点链接数量',
  `photolink` int(6) unsigned DEFAULT '0' COMMENT '相册链接数量',
  `visalink` int(6) unsigned DEFAULT '0' COMMENT '签证链接数量',
  `questionlink` int(6) unsigned DEFAULT '0' COMMENT '问答链接数量',
  `tuanlink` int(6) unsigned DEFAULT '0' COMMENT '团购链接数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='智能链接优化表';-- <xjx> --

