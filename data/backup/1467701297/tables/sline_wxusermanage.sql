-- 表的结构：sline_wxusermanage --
CREATE TABLE `sline_wxusermanage` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `openId` varchar(40) NOT NULL COMMENT '微信用户openId',
  `ChatNick` varchar(50) NOT NULL COMMENT '微信昵称',
  `UserPhone` varchar(15) NOT NULL COMMENT '手机号',
  `AttenTime` varchar(15) NOT NULL COMMENT '关注时间',
  `isCancel` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否取消 1 关注 ；2取消',
  `sex` varchar(10) NOT NULL DEFAULT '保密' COMMENT '性别',
  `city` varchar(25) NOT NULL,
  `province` varchar(15) NOT NULL COMMENT '省份',
  `country` varchar(25) NOT NULL DEFAULT '中国' COMMENT '国家',
  `headimgurl` varchar(1000) NOT NULL COMMENT '用户图片地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6542 DEFAULT CHARSET=utf8;-- <xjx> --

