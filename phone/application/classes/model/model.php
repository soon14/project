<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Model extends ORM
{
    /**
     * 查询指定模型
     */
    public static function all_model($id)
    {
        $sql = "SELECT * FROM sline_model ";
        $sql .= "WHERE id={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }

    /**
     * 检测模型是否存在
     * @param $pinyin
     * @return bool
     */
    public static function exsits_model($pinyin){
        $sql = "SELECT * FROM sline_model ";
        $sql .= "WHERE pinyin='{$pinyin}'";
        $arr = DB::query(1, $sql)->execute()->current();
        return !empty($arr)?ture:false;
    }

    /**
     * 在栏目中全局查询产品信息
     */
    public static function get_product_bymodel($modelid, $productautoid, $fields)
    {
        $modelrow = Model_Model::all_model($modelid);
        if ($modelrow == null)
            return null;

        $fieldsarr = explode(",", $fields);
        foreach ($fieldsarr as $fieldname)
        {
            $sql = "show columns from `sline_{$modelrow['maintable']}` like '{$fieldname}'";
            if (count(DB::query(1, $sql)->execute()->as_array()) <= 0)
                return null;
        }

        $sql = "select {$fields} from sline_{$modelrow['maintable']} where id={$productautoid}";
        return DB::query(1, $sql)->execute()->as_array();
    }

}