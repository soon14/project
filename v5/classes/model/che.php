<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Che extends ORM
{

   //  获取 商家的信息
    public static function get_che_business($aid)
    {
        $sql = "SELECT * FROM sline_che ";
        $sql .= "WHERE id={$aid} ";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }
  // 获取 对应商家的的车型信息 清洗信息
    public static function get_che_type($aid)
    {
        $sql = "SELECT * FROM sline_che_attr ";
        $sql .= "WHERE cheid=$aid ";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }
   // 获取 商家信息
    public static function get_che()
    {
        $arr = DB::select('*')->from('che')->execute()->as_array();
        return $arr;
    }
    public  static  function get_min_price($id){
        $sql   = " select min(price) as minprice  from `sline_che_attr` ";
        $sql  .=" where cheid = {$id} ";
        $arr   = self::execute($sql);
        return $arr[0]['minprice'];
    }

    //=-==================================




    /**
     * 属性
     * @param $attrid
     * @return array
     */
    public static function attr($attrid)
    {
        if (empty($attrid))
        {
            return;
        }
        $attrid = trim($attrid,',');
        $arr = DB::select('attrname')->from('article_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
        return $arr;
    }




    /*
    * 执行sql语句
    * */
    private static function execute($sql)
    {
        $arr = DB::query(1,$sql)->execute()->as_array();
        return $arr;
    }



}