<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Qq_Kefu extends ORM {

    /**
     * 获取qq客服列表
     * @return Array
     */
    public  function get_qq()
     {
         $group = $this->where("pid=0 AND isopen=1")->get_all();
         foreach($group as &$g)
         {
             $qq_list = $this->where("pid=".$g['id']." AND isopen=1")->get_all();
             $g['qq'] = $qq_list;
         }
         return $group;
     }

}