<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Nav extends ORM
{
    /**
     * @param $typeid 根据$typeid获取栏目信息
     * @return mixed
     */
    public static function get_channel_info($typeid)
    {

        $sql = "SELECT a.* FROM sline_nav as a WHERE a.typeid=$typeid and a.webid=0";
        $arr = DB::query(1,$sql)->execute()->as_array();
        return $arr[0];
    }

    /**
     * @param $typeid 栏目IDs
     * @return mixed 返回栏目名称
     */
    public static function get_channel_name($typeid)
    {
        $ar = self::get_channel_info($typeid);
        $channelname = $ar['shortname'];
        return $channelname;
    }

    /**
     * @param $typeid
     * @return mixed 返回栏目优化标题等信息.
     */
    public static function get_channel_seo($typeid)
    {
        $sql = "SELECT seotitle,keyword,description,shortname FROM sline_nav WHERE typeid='$typeid' limit 1";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $ar[0]['seotitle'] = !empty($ar[0]['seotitle']) ? $ar[0]['seotitle'] : $ar[0]['shortname'];
        return $ar[0];
    }

    /**
     * @return array
     */

    public static function get_all_channel_info()
    {
        global $sys_webid;
        $out = array();
        $sql = "SELECT a.typeid,a.shortname,a.isopen,b.pinyin FROM `sline_nav` a ";
        $sql.= "LEFT JOIN `sline_model` b on(a.typeid=b.id) WHERE a.webid='$sys_webid'";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as $row)
        {
            $info = array();
            $info['isopen'] = $row['isopen'];
            $info['channelname'] = $row['shortname'];
            $out[$row['pinyin']] = $info;
        }
        return $out;

    }



}