-- 表的结构：sline_m_nav --
CREATE TABLE `sline_m_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `navid` int(8) DEFAULT '0' COMMENT '关联的导航id',
  `m_url` varchar(200) DEFAULT '0' COMMENT '手机链接地址',
  `m_title` varchar(50) DEFAULT '0' COMMENT '手机导航名称,默认为空',
  `m_ico` varchar(255) DEFAULT '' COMMENT '手机版导航ico',
  `m_displayorder` int(4) DEFAULT '9999' COMMENT '手机版导航排序',
  `m_isopen` int(1) DEFAULT '1' COMMENT '是否开启',
  PRIMARY KEY (`id`),
  KEY `navid` (`navid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='手机导航扩展表';-- <xjx> --

