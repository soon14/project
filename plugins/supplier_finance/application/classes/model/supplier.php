<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Supplier extends ORM
{
    //对应数据库
    protected $_table_name = 'supplier';
    protected $_primary_key = 'id';
    /**
     * 根据会员id获取用户信息
     * @param $mid
     * @return array
     */
    public static function get_supplier_byid($supplierid)
    {
        if ($supplierid)
        {
            $memberinfo = ORM::factory('supplier', $supplierid)->as_array();
            $memberinfo['supplierkind'] = ORM::factory('supplier_kind',$memberinfo['kindid'])->get('kindname');
            return $memberinfo;
        }

    }


}