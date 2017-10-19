-- 表的结构：sline_sms_msg --
CREATE TABLE `sline_sms_msg` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `msgtype` varchar(255) DEFAULT NULL COMMENT '消息类型',
  `msg` varchar(255) DEFAULT NULL COMMENT '消息',
  `isopen` int(1) unsigned DEFAULT '1' COMMENT '是否开启',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='短信信息配置表';-- <xjx> --

