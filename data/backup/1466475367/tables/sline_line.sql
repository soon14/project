-- 表的结构：sline_line --
CREATE TABLE `sline_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) unsigned DEFAULT '1',
  `aid` int(11) unsigned DEFAULT NULL COMMENT '文章ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `seotitle` varchar(100) DEFAULT NULL COMMENT 'seo标题',
  `startcity` varchar(255) DEFAULT NULL COMMENT '出发城市',
  `overcity` varchar(255) DEFAULT NULL COMMENT '目的城市',
  `selfDriMdd` varchar(50) NOT NULL COMMENT '自驾目的地',
  `linedate` varchar(255) DEFAULT NULL COMMENT '出团日期',
  `price` int(11) DEFAULT NULL COMMENT '最低价',
  `lineday` int(3) unsigned DEFAULT NULL COMMENT '线路天数',
  `linenight` int(5) DEFAULT NULL COMMENT '多少晚',
  `litpic` varchar(255) DEFAULT NULL COMMENT '封面图片',
  `linedoc` text COMMENT '线路行程word版地址',
  `tagword` varchar(255) DEFAULT NULL COMMENT 'tag词',
  `keyword` varchar(255) DEFAULT NULL COMMENT '关键词',
  `jieshao` longtext COMMENT '线路行程',
  `biaozhun` longtext COMMENT '服务标准',
  `beizu` longtext COMMENT '温鑫提示(备注)',
  `payment` longtext COMMENT '付款方式',
  `feeinclude` longtext COMMENT '费用包含',
  `features` longtext COMMENT '行程特色',
  `description` varchar(700) DEFAULT NULL COMMENT '描述',
  `shownum` int(11) DEFAULT '1' COMMENT '浏览次数',
  `seatleft` int(11) DEFAULT NULL COMMENT '空位数',
  `storeprice` int(11) DEFAULT NULL COMMENT '门市价',
  `transport` longtext COMMENT '交通方式',
  `linebefore` int(11) DEFAULT NULL COMMENT '提前报名天数',
  `addtime` int(10) unsigned DEFAULT NULL COMMENT '添加时间',
  `modtime` int(10) unsigned DEFAULT NULL COMMENT '更新时间',
  `reserved1` longtext COMMENT '线路内容自定义1',
  `reserved2` longtext COMMENT '线路内容自定义2',
  `reserved3` longtext COMMENT '线路内容自定义3',
  `color` varchar(255) DEFAULT NULL COMMENT '标题颜色',
  `childrule` varchar(255) NOT NULL DEFAULT '' COMMENT '小孩说明',
  `kindlist` varchar(255) DEFAULT NULL COMMENT '所属目的地',
  `themelist` varchar(255) DEFAULT NULL COMMENT '主题',
  `attrid` varchar(255) DEFAULT NULL COMMENT '主站属性',
  `satisfyscore` int(11) DEFAULT NULL COMMENT '满意度',
  `bookcount` int(11) unsigned DEFAULT NULL COMMENT '预订次数',
  `ishidden` int(3) DEFAULT '0' COMMENT '是否显示',
  `isstyle` varchar(255) DEFAULT NULL COMMENT '介绍显示样式',
  `sellpoint` varchar(255) DEFAULT NULL COMMENT '卖点',
  `piclist` text COMMENT '图片列表',
  `distance` int(6) DEFAULT NULL COMMENT '距离(弃用)',
  `zijiaseat` varchar(255) DEFAULT NULL COMMENT '自驾座位数(弃用)',
  `zijiaprice` varchar(255) DEFAULT NULL COMMENT '自驾价格(弃用)',
  `zijiacar` varchar(255) DEFAULT NULL COMMENT '车辆名称(类型弃用)',
  `showrepast` int(1) DEFAULT '1' COMMENT '是否显示餐饮',
  `paytype` int(1) DEFAULT '1' COMMENT '支付方式',
  `templet` varchar(255) DEFAULT 'line_show.htm' COMMENT '使用模板',
  `iconlist` varchar(255) DEFAULT NULL COMMENT '图标列表',
  `supplierlist` varchar(255) DEFAULT NULL COMMENT '所属供应商',
  `insuranceids` varchar(255) DEFAULT NULL COMMENT '保险id',
  `sourcelineid` varchar(50) DEFAULT NULL COMMENT '弃用',
  `islinebefore` tinyint(1) DEFAULT '0' COMMENT '是否开启提前预订',
  `recommendnum` int(11) DEFAULT '0' COMMENT '推荐次数',
  `adminid` int(11) DEFAULT NULL COMMENT '管理员编号',
  `finaldestid` int(11) DEFAULT NULL COMMENT '最终目的地id',
  PRIMARY KEY (`id`),
  KEY `searchkey` (`kindlist`(50),`attrid`(50)) USING BTREE,
  KEY `lineday` (`lineday`) USING BTREE,
  KEY `lineprice` (`price`) USING BTREE,
  KEY `attrid` (`attrid`) USING BTREE,
  KEY `id` (`id`) USING BTREE,
  KEY `ishidden` (`ishidden`) USING BTREE,
  KEY `IDX_AID` (`aid`) USING BTREE,
  KEY `kindlist` (`kindlist`) USING BTREE,
  KEY `IDX_webid` (`webid`) USING BTREE,
  KEY `IDX_ishidden` (`ishidden`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='线路信息表';-- <xjx> --

