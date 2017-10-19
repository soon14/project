-- 表的结构：sline_role --
CREATE TABLE `sline_role` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `rolename` varchar(20) DEFAULT NULL COMMENT '角色名称',
  `description` varchar(100) DEFAULT NULL COMMENT '描述',
  `masterid` int(11) DEFAULT NULL,
  `createdate` int(11) DEFAULT NULL,
  `isoptn` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='后台管理员角色表';-- <xjx> --

