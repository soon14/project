<?php define('DATAPATH', dirname(dirname(dirname(__FILE__))));
require_once(DATAPATH . "/slinesql.class.php");
//执行sql  $mysql->query
//检测数据 $mysql->check_data  bool
//检测字段 $mysql->check_column bool
//检测表   $mysql->check_table bool
//检测索引 $mysql->check_index bool
//获取错误 $mysql->error() void | string(错误信息)


//供应商设置
$parent = array(0, '供应商', 'supplier');
$sql = "select * from sline_menu where pid={$parent[0]} and title='{$parent[1]}' and entitle='{$parent[2]}'";
$data = $mysql->query($sql);
if (!empty($data))
{
        $data = $data[0];
        $sql = "delete from sline_menu where pid={$data['id']} or id={$data['id']}";
        $mysql->query($sql);
}