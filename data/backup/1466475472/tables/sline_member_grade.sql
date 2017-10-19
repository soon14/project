-- 表的结构：sline_member_grade --
CREATE TABLE `sline_member_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) NOT NULL COMMENT '等级名称',
  `begin` int(11) NOT NULL COMMENT '开始积分',
  `end` int(11) NOT NULL COMMENT '终止积分',
  `displayorder` int(11) NOT NULL DEFAULT '999',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `modtime` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='会员等级';-- <xjx> --

