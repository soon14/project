-- 表的结构：sline_car --
CREATE TABLE `sline_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) unsigned DEFAULT NULL COMMENT '站点id',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '前端显示id',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `seatnum` int(11) DEFAULT NULL COMMENT '座位数',
  `maxseatnum` int(11) DEFAULT NULL COMMENT '建议座位数',
  `sellpoint` varchar(255) DEFAULT NULL COMMENT '卖点',
  `displayorder` int(11) DEFAULT '9999' COMMENT '车务编号排序',
  `litpic` varchar(255) DEFAULT NULL COMMENT '封面图',
  `content` longtext COMMENT '车务介绍',
  `shownum` int(11) DEFAULT '0' COMMENT '浏览次数',
  `addtime` int(10) unsigned DEFAULT NULL COMMENT '添加时间',
  `modtime` int(10) unsigned DEFAULT NULL COMMENT '更新时间',
  `tagword` varchar(255) DEFAULT NULL COMMENT '文章相关词',
  `keyword` varchar(255) DEFAULT NULL COMMENT '关键词',
  `description` longtext COMMENT '信息描述',
  `seotitle` varchar(255) DEFAULT NULL COMMENT 'seo标题',
  `carkindid` int(11) DEFAULT NULL COMMENT '对应的类型ID',
  `usedyears` int(3) DEFAULT NULL COMMENT '使用年限',
  `kindlist` varchar(255) DEFAULT NULL COMMENT '所属目的地id',
  `themelist` varchar(255) DEFAULT NULL COMMENT '专题',
  `attrid` varchar(50) DEFAULT NULL COMMENT '属性id',
  `ishidden` int(3) DEFAULT '0' COMMENT '是否显示',
  `unit` varchar(255) DEFAULT NULL COMMENT '单位',
  `piclist` text COMMENT '图片列表',
  `tanknum` int(11) DEFAULT NULL COMMENT '总容量',
  `phone` varchar(30) DEFAULT NULL COMMENT '联系电话',
  `notice` mediumtext COMMENT '提示',
  `iconlist` varchar(255) DEFAULT NULL COMMENT '图标',
  `satisfyscore` int(11) DEFAULT NULL COMMENT '满意度',
  `bookcount` varchar(11) DEFAULT NULL COMMENT '预订数量',
  `supplierlist` varchar(255) DEFAULT NULL COMMENT '所属供应商',
  `templet` varchar(255) DEFAULT NULL COMMENT '模板',
  `price` int(11) DEFAULT NULL COMMENT '价格',
  `recommendnum` int(11) DEFAULT '0' COMMENT '推荐次数',
  `finaldestid` int(11) DEFAULT NULL COMMENT '最终目的地',
  PRIMARY KEY (`id`),
  KEY `IDX_AID` (`aid`) USING BTREE,
  KEY `IDX_carkindid` (`carkindid`) USING BTREE,
  KEY `IDX_kindlist` (`kindlist`) USING BTREE,
  KEY `IDX_attrid` (`attrid`) USING BTREE,
  KEY `IDX_ishidden` (`ishidden`) USING BTREE,
  KEY `IDX_webid` (`webid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='车辆信息表';-- <xjx> --

