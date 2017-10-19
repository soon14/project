-- 表的结构：sline_wxaddmenu --
CREATE TABLE `sline_wxaddmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0' COMMENT '二级菜单父id',
  `type` tinyint(2) DEFAULT '1' COMMENT 'type 类型1 跳转url； 2 关键字； 3 扫码推事件； 4 拍照或者相册；5 地理位置；',
  `title` varchar(25) DEFAULT NULL COMMENT '菜单名称',
  `content` varchar(1000) DEFAULT NULL COMMENT '菜单内容',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '排序权重',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;-- <xjx> --

