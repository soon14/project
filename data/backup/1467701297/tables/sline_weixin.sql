-- 表的结构：sline_weixin --
CREATE TABLE `sline_weixin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `wx_hao` varchar(200) NOT NULL COMMENT '微信号',
  `jk_model` varchar(100) NOT NULL COMMENT '接口类型',
  `wx_mail` varchar(100) NOT NULL COMMENT '微信邮箱',
  `wx_name` varchar(100) NOT NULL COMMENT '微信名称',
  `wx_o_name` varchar(100) NOT NULL COMMENT '微信原始名称',
  `token` varchar(200) NOT NULL COMMENT 'tocken',
  `Business_id` varchar(200) NOT NULL COMMENT '商家总店id',
  `appid` varchar(100) NOT NULL,
  `appsecret` varchar(100) NOT NULL,
  `CustomMenu` varchar(100) NOT NULL COMMENT '自定义菜单',
  `CustomMenuDes` varchar(200) NOT NULL COMMENT '自定义菜单说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;-- <xjx> --

