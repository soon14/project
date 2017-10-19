<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Member_Linkman extends ORM
{
    /**
     * 常用联系人
     * @return mixed
     */
    public static function get_list($mid)
    {
        $sql = "SELECT * FROM sline_member_linkman ";
        $sql .= "WHERE memberid ={$mid} ";
        $sql .= "ORDER BY id desc";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 单个联系人
     * @param $id
     */
    public static function detail($id)
    {
        $sql = "SELECT * FROM sline_member_linkman ";
        $sql .= "WHERE id={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }
}