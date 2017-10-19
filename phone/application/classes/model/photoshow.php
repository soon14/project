<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Photoshow extends ORM
{



    /**
     * 详情
     * @param $id
     * @return array
     */
    public static function detail($id)
    {
        $sql = "SELECT * FROM sline_act WHERE aid={$id} and webid={$GLOBALS['sys_webid']}";
        $arr = DB::query(1, $sql)->execute()->as_array();

        return $arr[0];
    }


    /*
   * 执行sql语句
   * */
    private static function execute($sql)
    {
        $arr = DB::query(1,$sql)->execute()->as_array();
        return $arr;
    }
    /*
     *  $typeid   模型 id
     *
     *  $id  活动 id
     *
     *  $openid
     */
    public  static function checkJoinAct($id,$openid,$typeid=107){

        if(empty($id)||empty($openid)){

             return false;
        }
        $re  = DB::select()->from("act_comment");

        $re  = $re->where("actid","=",$id);

        $re  = $re->and_where("openid","=",$openid);

        $re  = $re->and_where("typeid","=",$typeid);

        $arr =$re->execute()->as_array();
        
        return  !empty($arr) ? true :false;
    }

}