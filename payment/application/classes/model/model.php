<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Model extends ORM
{
    /**
     * 获取模型拼音标识
     * @param $id
     * @return mixed
     */
    static function pinyin_by_id($id, $ismsg = false)
    {
        $sql = "select pinyin,correct,maintable from sline_model where id={$id}";
        $arr = DB::query(Database::SELECT, $sql)->execute()->current();

        if ($ismsg == true)
        {
            if ($arr['maintable'] == "model_archive")
                return "tongyong";
            else
                return $arr['pinyin'];
        } else
        {
            $py = empty($arr['correct']) ? $arr['pinyin'] : $arr['correct'];
            return $py;
        }

    }
}