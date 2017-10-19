<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Supplier_Kind extends ORM
{
    /**
     * @return Array
     * 供应商分类表
     */
    public static function  get_kind_list()
    {
        return ORM::factory('supplier_kind')
            ->where("isopen=1")
            ->get_all();

    }

}