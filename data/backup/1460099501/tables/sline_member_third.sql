-- 表的结构：sline_member_third --
CREATE TABLE `sline_member_third` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL COMMENT '会员id',
  `openid` varchar(255) NOT NULL COMMENT '第三方openid',
  `from` varchar(100) NOT NULL COMMENT '第三方平台',
  `nickname` varchar(100) DEFAULT NULL COMMENT '第三方昵称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员第三方登陆信息表';-- <xjx> --

