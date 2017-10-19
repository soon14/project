-- 表的结构：sline_activity_user --
CREATE TABLE `sline_activity_user` (
  `openid` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '微信openid',
  `chanceno` enum('0','1','2','3') CHARACTER SET utf8 NOT NULL COMMENT '剩余机会次数',
  `rightnum` int(11) NOT NULL COMMENT '答对数量',
  `usetime` varchar(10) NOT NULL COMMENT '所用时间',
  `ctime` int(11) NOT NULL COMMENT '答题时间',
  `useno` int(11) NOT NULL COMMENT '用户答题次数',
  `sharenum` tinyint(3) DEFAULT '0' COMMENT '分享次数',
  PRIMARY KEY (`openid`),
  UNIQUE KEY `openid` (`openid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;-- <xjx> --

