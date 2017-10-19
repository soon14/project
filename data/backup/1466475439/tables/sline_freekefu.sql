-- 表的结构：sline_freekefu --
CREATE TABLE `sline_freekefu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `phone` varchar(50) DEFAULT NULL COMMENT '客户电话',
  `addtime` int(11) DEFAULT NULL COMMENT '提交时间',
  `ip` varchar(255) DEFAULT NULL COMMENT '客户IP',
  `status` tinyint(1) DEFAULT '0' COMMENT '处理状态:0未处理，1已处理',
  `description` varchar(255) DEFAULT NULL COMMENT '处理说明',
  `finishtime` int(11) DEFAULT NULL COMMENT '处理完成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='免费通话表';-- <xjx> --

