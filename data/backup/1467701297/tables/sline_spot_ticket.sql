-- 表的结构：sline_spot_ticket --
CREATE TABLE `sline_spot_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spotid` int(11) unsigned DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL COMMENT '门票名称',
  `tickettypeid` int(11) unsigned DEFAULT NULL COMMENT '门票类型id',
  `sellprice` varchar(255) DEFAULT NULL COMMENT '票面价格',
  `ourprice` varchar(255) DEFAULT NULL COMMENT '优惠价格',
  `memberdayprice` varchar(255) DEFAULT NULL COMMENT '会员价(弃用)',
  `paytype` varchar(255) DEFAULT NULL COMMENT '支付方式',
  `award` int(11) unsigned DEFAULT NULL COMMENT '会员预订返现奖金',
  `description` varchar(5000) DEFAULT NULL COMMENT '门票描述',
  `addtime` int(10) unsigned DEFAULT NULL COMMENT '添加时间',
  `modtime` int(10) unsigned DEFAULT NULL COMMENT '修改时间',
  `displayorder` int(11) unsigned DEFAULT '9999' COMMENT '排序',
  `number` int(11) DEFAULT NULL COMMENT '门票数量(库存)',
  `bnum` varchar(255) DEFAULT NULL COMMENT '已被预订数量',
  `mnum` varchar(255) DEFAULT NULL COMMENT '会员限制预订数量',
  `buylimitnummin` int(11) DEFAULT NULL COMMENT '每次最少预定数量',
  `buylimitnummax` int(11) DEFAULT NULL COMMENT '每次最多预定数量',
  `iscanrefund` int(11) DEFAULT NULL COMMENT '是否能退票（0：不能，1：支持全退）',
  `refundBeforeValidEndDay` int(11) DEFAULT NULL COMMENT '退票应在有效期结束前（正数）或后（负数）多少天',
  `refundInfo` varchar(500) DEFAULT NULL COMMENT '退票说明',
  `eticketType` varchar(50) DEFAULT 'S_CODE' COMMENT '电子票类型',
  `eticketsmssign` varchar(255) DEFAULT NULL COMMENT '电子票短信签名头',
  `eticketsmstemplet` varchar(1000) DEFAULT NULL COMMENT '电子票短信模板',
  `startdate` varchar(255) DEFAULT NULL COMMENT '限制开始日期',
  `enddate` varchar(255) DEFAULT NULL COMMENT '限制结束时间',
  `jifencomment` int(11) DEFAULT '0' COMMENT '评论送积分',
  `jifentprice` int(11) DEFAULT '0' COMMENT '积分抵现金',
  `jifenbook` int(11) DEFAULT '0' COMMENT '预订送积分',
  `dingjin` varchar(255) DEFAULT NULL COMMENT '定金',
  `lastoffer` text COMMENT '最后一次报价记录',
  PRIMARY KEY (`id`),
  KEY `IDX_SPOTID_OURPRICE` (`spotid`,`ourprice`) USING BTREE,
  KEY `IDX_SPOTID_SELLPRICE` (`spotid`,`sellprice`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='景点门票表';-- <xjx> --

