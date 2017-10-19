<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Class Model_Photo
 * 图片模块
 */
class Model_Photo extends ORM
{
    private static $_typeid = 6;
    /**
     * 图片详情
     * @param $aid
     * @return mixed
     */
    public static function photo_detail($aid)
    {
        $sql = 'SELECT * FROM sline_photo ';
        $sql .= "WHERE webid={$GLOBALS['sys_webid']} AND ishidden=0 AND aid={$aid} ";
        $sql .= "limit 1";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }

    /**
     * 图片列表
     * @param $id
     * @return mixed
     */
    public static function photo_picture($id)
    {
        $sql = 'SELECT b.* FROM sline_photo AS a LEFT JOIN sline_photo_picture AS b ON a.id=b.pid ';
        $sql .= "WHERE a.id={$id} ";
        $sql .= 'ORDER BY IFNULL(b.displayorder,9999) ASC,b.id DESC';
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 属性
     * @param $attrid
     * @return array
     */
    public static function photo_attr($attrid)
    {
        if (empty($attrid))
        {
            return;
        }
        $attrid = trim($attrid,',');
        $arr = DB::select('attrname')->from('photo_attr')->where("id in({$attrid}) and pid!=0")->execute()->as_array();
        return $arr;
    }

    /**
     * @param $id
     * @return mixed
     * 相册扩展字段
     */
    public static function photo_extend($id)
    {
        $sql = "SELECT * FROM sline_photo_extend_field WHERE productid={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }


    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $destPy = Common::remove_xss($params['destpy']);
        $attrId = Common::remove_xss($params['attrid']);
        $page = $currentpage;
        $page = $page ? $page : 1;

        $where = ' WHERE a.ishidden=0 ';
        //按目的地搜索
        if($destPy && $destPy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
            $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
        }

        //排序
        $orderBy = " ";

        //关键词
        if(!empty($keyword))
        {
            $where.= " AND a.title like '%$keyword%' ";
        }
        //按属性
        if(!empty($attrId))
        {
            $where.= Product::get_attr_where($attrId);
        }

        $offset = (intval($page)-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_photo` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=6 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_photo` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=2 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";


        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->as_array();
        $totalNum = $totalN[0]['dd'] ? $totalN[0]['dd'] : 0;

        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],self::$_typeid); //评论次数

            $v['attrlist'] = Model_Photo_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/photos/show_{$v['aid']}.html";
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
            $v['photonum'] = ORM::factory('photo_picture')->where("pid='".$v['id']."'")->count_all();
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;


    }

    /*
   * 生成searh页地址
   * */
    public static function get_search_url($v,$paramname,$p,$currentpage=1)
    {

        $url = $GLOBALS['cfg_basehost'].'/photos/';
        $typeId = 6;
        switch($paramname)
        {
            case "destpy":
                $url.=$v.'-'.$p['attrid'].'-'.$currentpage;
                break;
            case "attrid":

                $orignalArr = Product::get_attr_parent($p['attrid'],$typeId);
                $nowArr = Product::get_attr_parent($v,$typeId);
                if(!empty($nowArr))
                {
                    $attrArr = $nowArr + $orignalArr;
                    sort($attrArr);
                    $attr_list = join('_',$attrArr);
                }
                else
                {
                    $attr_list = 0;
                }
                $url.=$p['destpy'].'-'.$attr_list.'-'.$currentpage;;

                break;

        }
        return $url;


    }

    /**
     * @param $p
     * @return array
     * @desc 已选择项处理
     */
    public static function get_selected_item($p)
    {
        $p['displaytype'] = 0;
        $out = array();
        //目的地
        if($p['destpy']!='all')
        {
            $temp = array();
            $url = self::get_search_url('all','destpy',$p);
            $temp['url'] = $url;
            $temp['itemname'] = ORM::factory('destinations')->where("pinyin='".$p['destpy']."'")->find()->get('kindname');
            $out[]=$temp;
        }

        //属性
        if($p['attrid']!=0)
        {
            $attArr = $orgArr = explode('_',$p['attrid']);
            foreach($attArr as $ar)
            {

                $orgArr = $attArr;
                $temp = array();
                $temp['itemname'] = ORM::factory('photo_attr',$ar)->get('attrname');
                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($attrid))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }

                $url = $GLOBALS['cfg_basehost'].'/photos/';
                $url.=$p['destpy'].'-'.$attrid.'-1';

                $temp['url'] = $url;
                $out[] = $temp;
            }

        }
        return $out;

    }

    /**
     * @param $param
     * @return string
     * @desc 生成优化标题
     */
    public static function gen_seotitle($param)
    {
        $arr = array();
        if(!empty($param['destpy']))
        {
            $destInfo = Model_Destinations::search_seo($param['destpy'],1);
            $arr[] = $destInfo['seotitle'];
        }
        if(!empty($param['attrid']))
        {
            $arr[] = Model_Photo_Attr::get_attrname_list($param['attrid'],'_');

        }
        return implode('_',$arr);


    }


    /*
     * 获取目的地优化标题
     * */
    public static function search_seo($destpy)
    {
        if(!empty($destpy) && $destpy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destpy' AND isopen=1")->find()->get('id');
            $info = ORM::factory('destinations',$destId)->as_array();
            $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['kindname'];
        }
        else
        {
            $info = Model_Nav::get_channel_info(6);
            $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['m_title'];
        }

        return array('seotitle'=>$seotitle);
    }
}