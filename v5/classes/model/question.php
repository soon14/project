<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Question extends ORM
{
    /**
     * @param $currentpage
     * @param $pagesize
     * @param $questype
     * @return array
     * 问答搜索页面
     */
    public static function search_result($currentpage,$pagesize,$questype)
    {

        $page = $currentpage ? $currentpage : 1;
        $offset = (intval($page)-1)*$pagesize;
        $questype = $questype ? $questype : 0;

        $sql = "SELECT a.* FROM `sline_question` a ";
        $sql.= "WHERE a.questype=$questype AND replytime!='' ";
        $sql.= "ORDER BY replytime desc ";
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by

        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;
        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = self::execute($sql);
        foreach($arr as &$row)
        {
            /*$product_info = self::get_product_info($row['typeid'],$row['productid']);
            $row['productname'] = $product_info['title'];
            $row['producturl'] = $product_info['url'];*/
            $row['title'] = !empty($row['title']) ? $row['title'] : Common::cutstr_html($row['content'],20);
        }

        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;
    }



    /**
     * @param $mid
     * @param $currentpage
     * @param int $pagesize
     * @return array
     * 搜索我的问答
     */

    public static function question_list($mid,$questype,$currentpage,$pagesize=10)
    {

        $page = $currentpage ? $currentpage : 1;
        $offset = (intval($page)-1)*$pagesize;
        $questype = $questype ? $questype : 0;

        $sql = "SELECT a.* FROM `sline_question` a ";
        $sql.= "WHERE a.memberid=$mid ";

        $sql.= "ORDER BY replytime desc ";

        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by

        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;
        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = self::execute($sql);
        foreach($arr as &$row)
        {
            $product_info = self::get_product_info($row['typeid'],$row['productid']);
            $row['productname'] = $product_info['title'];
            $row['producturl'] = $product_info['url'];
        }

        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;
    }

    private  static function get_product_info($typeid,$productid)
    {
        $out = array();
        if($typeid)
        {
            $model = ORM::factory('model',$typeid);

            $table = $model->maintable;
            $pinyin = $model->pinyin;
            if($table)
            {
                $info = ORM::factory($table,$productid)->as_array();
                $url = Common::get_web_url($info['webid'])."/{$pinyin}/show_{$info['aid']}.html";
                $out['title'] = $info['title'];
                $out['url'] = $url;
            }

        }
        return $out;


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