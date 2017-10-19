<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Jieban extends ORM
{

    private static $typeid = 11;
    /**
     * 结伴详情 BY id
     * @param $id
     * @return mixed
     */
    public static function jieban_detail($id)
    {
        $sql = "SELECT * FROM sline_jieban ";
        $sql .= "WHERE ishidden=0 AND id={$id} ";
        $sql .= "limit 1";
        $row = DB::query(1, $sql)->execute()->current();
        $row['litpic'] =  Common::img(Model_Jieban::get_pic($row['memo']));
        $row['kindnamelist'] = implode('-',self::get_kindname_list($row['kindlist']));
        $member_info = Model_Member::get_member_byid($row['memberid']);
        $row['member'] = $member_info;
        $row['url'] = $GLOBALS['cfg_cmsurl'].'/jieban/show_'.$row['id'].'.html';
        $row['attrlist'] = Model_Jieban_Attr::get_attr_list($row['attrid']);
        $join = Model_Jieban_Join::get_join_number($row['id']);
        $row['joinnum'] = intval($join['adultnum']) + intval($join['childnum']);
        $row['memo'] = $row['memo']=='null' ? '' : $row['memo'];
        $row['vartime'] = empty($row['vartime']) ? 0 : $row['vartime'];


        //$row['pkname'] = get_par_value($row['kindlist'], self::$typeid);
        //$row['destid'] = array_remove_value($row['kindlist']);
        //$row['pinyin'] = Helper_Archive::getDestPinyin($row['destid']);
        //$row['kindid'] = $row['destid'];

        return $row;
    }
    /**
     * 结伴目的地
     * @param string $kindlist
     * @return string
     */
    public static function get_kindname_list($kindlist='')
    {
        if (empty($kindlist) || is_null($kindlist) || $kindlist == 'null')
        {
            return '';
        }

        $kindArr = explode(',',$kindlist);
        $out = array();
        foreach($kindArr as $k=>$v)
        {
            $arr = DB::select('kindname')->from('destinations')->where("id=".$v)->execute()->current();
            if($arr['kindname'])
            {
              $out[] = $arr['kindname'];
            }
        }
        return $out;
    }


    /**
     * 详情页中提取seo
     * @param $arr
     * @return array
     */
    public static function seo($arr)
    {
        $description = common::cutstr_html($arr['memo'],120);
        $description = $description ? $description : $arr['title'];
        $seoArr = array(
            'seotitle' => $arr['title'],
            'keyword' => $arr['title'],
            'description' => $description
        );
        foreach ($seoArr as &$v)
        {
            $v = trim($v);
        }
        return $seoArr;
    }

    /**
     * 根据ID读取参考推荐
     * @param string $kindlist
     * @param string $day
     * @param int $row
     * @return mixed
     */
    public static function get_line_recommend($kindlist = '', $day = '',$row = 3)
    {
        $sql = "SELECT a.id,a.title,a.litpic,a.price,a.webid,a.aid FROM `sline_line` AS a LEFT JOIN `sline_allorderlist` b ON (a.id=b.aid and b.typeid=1) ";
        $sql .= "WHERE a.ishidden=0 AND a.webid=0 AND kindlist='{$kindlist}' AND lineday='{$day}' ";
        $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";
        $sql .= "LIMIT 0,".$row;
        $data = DB::query(1,$sql)->execute()->as_array();
        return $data;
    }


    /**
     * 回去结伴内容中的第一个图片
     * @param $str
     * @return mixed
     */
    public static function get_pic($str){
        preg_match_all("/<img.*\>/isU",$str,$ereg);//正则表达式把图片的整个都获取出来了
        $img=$ereg[0][0];//图片
        preg_match("#src=('|\")(.*)('|\")#isU",$img,$match);
        $img_path =$match[2];//获取第一张图片路径
        return $img_path;
    }


    /**
     * @param $params
     * @param $keyword
     * @param $currentpage
     * @param string $pagesize
     * @return array
     * 结伴搜索
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {

        $where = '';
        //按目的地搜索
        if(!empty($params['destname']))
        {

            $destid = ORM::factory('destinations')
                ->where("kindname='{$params['destname']}'")
                ->find()
                ->get('id');
            if(!empty($destid))
            {
                $where.=" AND FIND_IN_SET($destid,a.kindlist) ";
            }
        }
        //按属性搜索
        if(!empty($params['attrid']))
        {
            $where.="AND FIND_IN_SET({$params['attrid']},a.attrid) ";
        }
        //按天搜索
        if(!empty($params['day']))
        {
            $day_arr = explode('-',$params['day']);
            if($day_arr[1]!=0)
            {
                $where.=" AND (a.day>=$day_arr[0] AND a.day<=$day_arr[1] ) ";
            }
            else
            {
                $where.=" AND (a.day>=$day_arr[0]) ";
            }

        }
        //按出发时间搜索
        if(!empty($params['startdate']))
        {
            $startdateid = $params['startdate'];
            //当天
            if($startdateid == 2)
            {
                $time = strtotime(date('Y-m-d'));
                $where.=" AND UNIX_TIMESTAMP(a.startdate)=$time ";
            }
            //30天
            if($startdateid == 3)
            {
                $time = strtotime("+30 day");
                $where.= " AND UNIX_TIMESTAMP(a.startdate)<=$time ";

            }
            //90天
            if($startdateid == 4)
            {
                $time = strtotime("+90 day");
                $where.= " AND UNIX_TIMESTAMP(a.startdate)<=$time ";
            }
            //90天以上
            if($startdateid == 5)
            {
                $time = strtotime("+90 day");
                $where.= " AND UNIX_TIMESTAMP(a.startdate)>$time ";
            }

        }

        $page = $currentpage;
        $page = $page ? $page : 1;
        $offset = (intval($page)-1)*$pagesize;

        $sql = "SELECT a.* FROM `sline_jieban` a ";
        $sql.= "LEFT JOIN `sline_allorderlist` b ";
        $sql.= "ON (a.id=b.aid AND b.typeid=11) ";
        $sql.= "WHERE  a.ishidden=0 and a.status=1 {$where} ";
        $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.addtime DESC ";
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
            //提取结伴图片
            $v['litpic'] = Model_Jieban::get_pic($v['memo']);

            //活动类型
            $v['attrlist'] = Model_Jieban_Attr::get_attr_list($v['attrid']);
            //参与人
            $joinnumArr = Model_Jieban_Join::get_join_number($v['id']);
            $v['joinnum'] = intval($joinnumArr['adultnum'])+ intval($joinnumArr['childnum']);
            //描述
            $v['description'] = common::cutstr_html($v['memo'],120);
            //URL地址
            $v['url'] = Common::get_web_url(0) . "/jieban/show_{$v['id']}.html";
            //剩余天数
            $v['leftday'] = Common::diff_between_twodays(date('Y-m-d'),$v['startdate']);

            $memberInfo = ORM::factory('member',$v['memberid'])->as_array();
            $v['membername'] = $memberInfo['nickname'] ? $memberInfo['nickname'] : '游客';
            $v['memberpic'] = $memberInfo['litpic'] ? $memberInfo['litpic'] : $GLOBALS['cfg_public_url'].'images/member_nopic.png';
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;
    }




    /**
     * 获取时间对应结伴数量数组
     */
    public static function get_time_arr()
    {
        $arr = array();
        //全部
        $w = "status=1";
        $arr[] = array(
            'id'=>1,
            'tagname'=>'全部',
            'num'=>self::get_jieban_num($w)
        );
        //今天出发
        $time = strtotime(date('Y-m-d'));
        $where = "UNIX_TIMESTAMP(startdate)=$time AND status=1 ";
        $arr[] = array(
            'id'=>2,
            'tagname'=>'今天',
            'num'=>self::get_jieban_num($where)
        );
        //30天
        $time = strtotime("+30 day");
        $where = "UNIX_TIMESTAMP(startdate)<=$time AND status=1 ";
        $arr[] = array(
            'id'=>3,
            'tagname'=>'一个月内',
            'num'=>self::get_jieban_num($where)
        );
        //90天以内
        $time = strtotime("+90 day");
        $where = "UNIX_TIMESTAMP(startdate)<=$time AND status=1 ";
        $arr[] = array(
            'id'=>4,
            'tagname'=>'1-3个月内',
            'num'=>self::get_jieban_num($where)
        );
        //90天以上
        $time = strtotime("+90 day");
        $where = "UNIX_TIMESTAMP(startdate)>$time AND status=1 ";
        $arr[] = array(
            'id'=>5,
            'tagname'=>'3个月以上',
            'num'=>self::get_jieban_num($where)
        );
        return $arr;



    }


    /**
     * @param $where
     * @return mixed
     * 根据条件获取结伴数量
     */
    public static function get_jieban_num($where)
    {
        $sql = "SELECT count(*) AS num FROM `sline_jieban` WHERE {$where}";
        $num = DB::query(1,$sql)->execute()->get('num');
        return $num;
    }

    /**
     * @param $jiebanid
     * @return mixed
     * 获取某个结伴加入的会员id数组
     */
    public static function get_join_member_ids($jiebanid)
    {
        $out = array();
        $sql = "SELECT memberid FROM `sline_jieban_join` WHERE jiebanid='$jiebanid'";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as $row)
        {
            $out[]=$row['memberid'];
        }
        return $out;
    }



}