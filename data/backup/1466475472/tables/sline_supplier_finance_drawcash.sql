-- 表的结构：sline_supplier_finance_drawcash --
CREATE TABLE `sline_supplier_finance_drawcash` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `supplierid` int(11) DEFAULT NULL COMMENT '分销商ID',
  `withdrawamount` float DEFAULT NULL COMMENT '提现金额',
  `bankname` varchar(255) DEFAULT NULL COMMENT '银行名称',
  `bankcardnumber` varchar(100) DEFAULT NULL COMMENT '银行卡号',
  `bankaccountname` varchar(255) DEFAULT NULL COMMENT '银行账户名',
  `description` varchar(255) DEFAULT NULL COMMENT '说明',
  `addtime` int(11) DEFAULT NULL COMMENT '申请时间',
  `finishtime` int(11) DEFAULT NULL COMMENT '完成或拒绝时间',
  `status` tinyint(2) DEFAULT '0' COMMENT '提现状态(0 提交中，1完成,  2未通过)',
  `audit_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;-- <xjx> --

