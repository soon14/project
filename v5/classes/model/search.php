<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Search
{


    public static function search_result($params,$keyword,$page,$pagesize)
    {

        $page = $page ? $page : 1;
        $offset = (intval($page)-1)*$pagesize;

        $sql = "SELECT a.* FROM `sline_search` a ";

        $sql.= "WHERE  a.ishidden=0 AND a.title like '%{$keyword}%' ";
        //选择了栏目
        if($params['typeid'])
        {
            $sql.=" AND a.typeid={$params['typeid']} ";
        }
        $sql.= "ORDER BY a.typeid ASC ";
        //$sql.= "LIMIT {$offset},{$pagesize}";
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by

        $totalN = DB::query(1,$totalSql)->execute()->as_array();
        $totalNum = $totalN[0]['dd'] ? $totalN[0]['dd'] : 0;

        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {

            $module_info = $row = ORM::factory('model',$v['typeid'])->as_array();
            $typeid = $v['typeid']<10 ? '0'.$v['typeid'] : $v['typeid'];
            $v['label'] = $module_info['modulename'];//标签
            $v['producttitle'] = preg_replace("/$keyword/",'<span class="tag">'.$keyword.'</span>',$v['title']);//标题
            $v['series'] = Product::product_number($v['tid'], $typeid);//编号
            $v['url'] = self::get_product_url($v['typeid'],$v['aid'],$v['webid']);//地址


        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;
    }
    /**
     * @param $where
     * @param $typeid
     * @return array
     */
    public static function get_left_nav($keyword)
    {


        $filter = "id not in(7,10,11,12,13,14) and isopen=1 ";//排除项

        $arr = ORM::factory('model')
            ->where($filter)
            ->get_all();
        // $where = "title like'%{$keyword}%'";
        //取得全部的查询数量
        $where = " title like '%$keyword%'";
        $allnum = self::get_count("where ".$where);//全部数量

        $out = array();
        $out[] = array('channelname'=>'全部','num'=>$allnum,'typeid'=>0);
        foreach($arr as $row)
        {
            $wh ="where $where and typeid = '{$row['id']}'";

            $num = self::get_count($wh);
            if($num>0)
            $out[] = array('channelname'=>$row['modulename'],'num'=>$num,'typeid'=>$row['id']);

        }

        return $out;

    }

    /**
     * @param $keyword
     * 添加热搜词表
     */
    public static function add_search_key($keyword)
    {

        $sql = "SELECT * FROM `sline_search_keyword` WHERE keyword = '$keyword' LIMIT 1";
        $id = DB::query(1,$sql)->execute()->get('id');
        if($id > 0)
        {
            $updatesql = "UPDATE `sline_search_keyword` SET keynumber = keynumber+1 WHERE id = $id";
            DB::query(Database::UPDATE,$updatesql)->execute();
        }
        else
        {
            $time = time();
            $insertsql = "INSERT INTO `sline_search_keyword`(keyword,keynumber,addtime) VALUES('$keyword',1,'$time')";
            DB::query(Database::INSERT,$insertsql)->execute();
        }


    }

    /**
     * @param $where
     * @return int
     * 获取关键词相关记录条数
     */
    private static function get_count($where)
    {
        $sql = "SELECT count(*) as num FROM `sline_search` $where";
        $num = DB::query(1,$sql)->execute()->get('num');
        return $num>0 ? $num : 0;
    }

    /**
     * @param $typeid
     * @param $aid
     * @param $pinyin
     * @param $webid
     * @return string
     * 获取产品地址
     */
    private static function get_product_url($typeid,$aid,$webid)
    {
        $module = ORM::factory('model',$typeid);
        $pinyin = $module->pinyin;
        $correct = $module->correct;
        $py = ($typeid>17 || $typeid==8 || $typeid==13) ? $pinyin : $correct;
        $url = Common::get_web_url($webid);
        $url.="/$py/show_{$aid}.html";
        return $url;
    }




}