-- 表的结构：sline_role_module --
CREATE TABLE `sline_role_module` (
  `roleid` int(11) NOT NULL COMMENT '角色id',
  `moduleid` char(15) DEFAULT NULL COMMENT '模块名称',
  `slook` tinyint(1) NOT NULL DEFAULT '0' COMMENT '查看权限',
  `smodify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '修改权限',
  `sadd` tinyint(1) NOT NULL DEFAULT '0' COMMENT '添加权限',
  `sdelete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '删除权限',
  `sall` tinyint(1) NOT NULL DEFAULT '0' COMMENT '全部权限'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台模块权限表.';-- <xjx> --

