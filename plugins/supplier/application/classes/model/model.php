<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Model extends ORM
{
    /**
     * 获取通用模型
     * @return Array
     */
    public static function get_tongyong_model()
    {
        return ORM::factory('model')
            ->where("maintable='model_archive' and isopen=1")
            ->get_all();
    }
}