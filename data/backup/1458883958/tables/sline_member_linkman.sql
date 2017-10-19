-- 表的结构：sline_member_linkman --
CREATE TABLE `sline_member_linkman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL COMMENT '会员id',
  `linkman` varchar(250) COLLATE utf8_bin DEFAULT NULL COMMENT '联系人姓名',
  `mobile` varchar(11) COLLATE utf8_bin DEFAULT NULL COMMENT '联系人手机',
  `idcard` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '证件号码',
  `cardtype` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT '证件类型',
  `sex` enum('0','1') COLLATE utf8_bin DEFAULT '0' COMMENT '0:女，1:男',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='会员常用联系人表';-- <xjx> --

