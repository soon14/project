-- 表的结构：sline_plugin_autotitle --
CREATE TABLE `sline_plugin_autotitle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名称',
  `value` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='智能标题信息表';-- <xjx> --

