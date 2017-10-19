-- 表的结构：sline_notes --
CREATE TABLE `sline_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `title` varchar(150) NOT NULL DEFAULT '' COMMENT '标题',
  `bannerpic` varchar(255) NOT NULL DEFAULT '' COMMENT 'banner 图片',
  `litpic` varchar(255) NOT NULL DEFAULT '' COMMENT '封面图片',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `content` text NOT NULL COMMENT '游记内容',
  `shownum` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '浏览次数',
  `modtime` int(10) NOT NULL COMMENT '游记更新时间',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '审核 -1.未通过 0.审核中 1.通过',
  `reason` varchar(255) NOT NULL COMMENT '审核未通过理由',
  `audittime` int(10) DEFAULT NULL COMMENT '审核时间',
  `addtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `displayorder` smallint(6) DEFAULT '0' COMMENT '排序',
  `issend` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0：积分未送 1：积分已送',
  `kindlist` varchar(255) NOT NULL DEFAULT '0' COMMENT '所属目的地',
  `finaldestid` varchar(255) NOT NULL DEFAULT '0' COMMENT '最终目的地',
  PRIMARY KEY (`id`),
  KEY `IDX_status` (`status`) USING BTREE,
  KEY `IDX_kindlist` (`kindlist`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='游记信息表(4.2版本用)';-- <xjx> --

