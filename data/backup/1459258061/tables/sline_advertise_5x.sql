-- 表的结构：sline_advertise_5x --
CREATE TABLE `sline_advertise_5x` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) unsigned NOT NULL DEFAULT '0',
  `flag` enum('1','2') NOT NULL DEFAULT '1' COMMENT '广告类别 1:单图 2:多图',
  `custom_label` varchar(255) DEFAULT NULL COMMENT '自定义标示',
  `kindlist` varchar(255) DEFAULT NULL COMMENT '目的地属性',
  `adsrc` text NOT NULL COMMENT '广告图片地址',
  `adlink` text COMMENT '广告链接',
  `adname` tinytext COMMENT '广告名称',
  `adorder` varchar(255) DEFAULT NULL COMMENT '广告排序',
  `is_system` enum('0','1') DEFAULT '0' COMMENT '系统广告 1：是  0：不是',
  `is_show` enum('0','1') DEFAULT '0' COMMENT '是否显示 0：隐藏 1：显示',
  `is_pc` enum('0','1') NOT NULL DEFAULT '1' COMMENT '所属平台 1：pc版 0:手机版',
  `prefix` varchar(100) NOT NULL DEFAULT '' COMMENT '广告位前缀',
  `number` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '广告序列数',
  `modtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `remark` tinytext COMMENT '备注：广告位图片是尺寸',
  PRIMARY KEY (`id`),
  UNIQUE KEY `prefix_num` (`is_system`,`is_pc`,`prefix`,`number`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COMMENT='5.1版本广告策略';-- <xjx> --

