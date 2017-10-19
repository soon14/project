-- 表的结构：sline_supplier_kind --
CREATE TABLE `sline_supplier_kind` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `kindname` varchar(255) DEFAULT NULL COMMENT '分类名称',
  `isopen` tinyint(1) DEFAULT '1' COMMENT '是否显示',
  `pid` int(11) unsigned DEFAULT '0' COMMENT '父级id',
  `displayorder` int(11) unsigned DEFAULT '9999' COMMENT '排序',
  `path` varchar(255) DEFAULT NULL COMMENT '分类路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='供应商类型表';-- <xjx> --

