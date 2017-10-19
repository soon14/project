<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Member extends ORM
{
    /**
     * 获取模型拼音标识
     * @param $id
     * @return mixed
     */
    static function email_by_id($id)
    {
        $sql = "select email from sline_member where mid={$id}";
        $arr=DB::query(Database::SELECT, $sql)->execute()->current();
        return $arr['email'];
    }
}