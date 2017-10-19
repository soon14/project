-- 表的结构：sline_email_msg --
CREATE TABLE `sline_email_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msgtype` char(30) DEFAULT NULL COMMENT '消息类型',
  `msg` varchar(255) DEFAULT NULL COMMENT '消息',
  `isopen` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否开启',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='邮件信息配置表';-- <xjx> --

