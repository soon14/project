<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Member_Linkman extends ORM
{
    /**
     * 常用联系人
     * @return mixed
     */
    public static function get_list($mid)
    {
        $sql = "SELECT * FROM sline_member_linkman ";
        $sql .= "WHERE memberid ={$mid} ";
        $sql .= "ORDER BY id desc";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 单个联系人
     * @param $id
     */
    public static function detail($id)
    {
        $sql = "SELECT * FROM sline_member_linkman ";
        $sql .= "WHERE id={$id}";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr[0];
    }
    /*
     * 搜索 我的游记
     */
    public static function search_notes($memberid,$offset,$row)
    {


        $sql = "SELECT a.* FROM `sline_notes` a ";

        $sql.= "WHERE a.status=1 and a.is_dra=0 ";

        $sql.= " and a.memberid={$memberid} ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = self::execute($sql);
        return $arr;
    }
    /*
* 获得游记附加信息
* */
    public static function get_notes_attachinfo($list)
    {
        //对获取的数据进行初始化处理
        foreach($list as &$v)
        {

            $v['mdd']     = Model_Article::get_mdds($v['finaldestid']);//最终目的地

            //===fengjsihu 07.28
            //Mr。feng09.10 获取内容里面有多少个 img
            $v['img_count'] = substr_count($v['content'],'<img')*1;

            //Mr.feng09.10
            $v['lastdest']= Model_Destinations::get_last_dest($v['kindlist']);//最低层目的地
            $v['authorhead'] = ORM::factory('member',$v['memberid'])->get('litpic');//获取会员头像;
            $v['author']    = ORM::factory('member',$v['memberid'])->get('nickname');
            //   $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/notes/show_{$v['id']}.html";
        }
        return $list;
    }
    /*
    * 喜欢的游记
    */
    public static  function member_like_notes($mid,$currentpage,$pagesize,$gl=''){
        //===============================================================
        //notes 表

        $page = $currentpage ? $currentpage : 1;

        $offset = (intval($page)-1)*$pagesize;

        $sql = "SELECT * FROM `sline_like_notes`  ";

        $sql.= "WHERE mid=$mid ";

        if($gl==''){
            $sql .= " and articleid ='' ";
        }else{
            $sql .=" and noteid ='' ";
        }

        $sql.= " ORDER BY id ";

        //计算总数
        //echo $sql ;exit;
//        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
//        // $totalSql   =SELECT * FROM `sline_notes` WHERE is_draft=0 and status=1 and find_in_set($mid,is_like))"
//        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by
//        return 1;
//        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
//        //=================================================
//
//        $totalNum = $totalN ? $totalN : 0;


        $sql.= " LIMIT {$offset},{$pagesize}";


        $arr = self::execute($sql);



        foreach($arr as &$row)

        {
            if($gl=='') {
                $sql1 = " SELECT * FROM `sline_notes` WHERE id ={$row[noteid]}";

                $arr1 = DB::query(1, $sql1)->execute()->as_array();

                $row['url'] = $GLOBALS['cfg_basehost'] . '/notes/show_' . $row['noteid'] . '.html';
                $row['headimg'] = ORM::factory('member',$arr1[0]['memberid'])->get('litpic');


            }
            else{
                //获取 游记攻略的板块属性 属性
                $sql_attr  = "SELECT id,attrname FROM `sline_article_attr` WHERE `pid`=15 and`isopen`=1 ";

                $re        =  DB::query(1,$sql_attr)->execute()->as_array();

                //获取对应 id 的 攻略属性
                $sql1 = " SELECT * FROM `sline_article` WHERE id ={$row[articleid]}";

                $arr1 = DB::query(1, $sql1)->execute()->as_array();
                // 遍历
                $attr  =explode(",",$arr1[0]['attrid']);

                foreach($re as $v){

                    if(in_array($v['id'],$attr)){
                        $row['plate']  =$v['attrname'];

                    }
                }

                $row['url'] =$GLOBALS['cfg_basehost'] . '/raiders/show_' . $arr1[0]['aid'] . '.html';
                $name  =  self::get_authorHead($arr1[0]['author']);
                $row['headimg']  =$name[0]['litpic'];
            }

            $row['title'] =   $arr1[0]['title'];
            $row['litpic'] =  $arr1[0]['litpic'];
            $row['addtime'] = date("Y-m-d H:i:s",$arr1[0]['addtime']);
            // 获取目的地
            $row['mdd']     = self::getmdd($arr1[0]['finaldestid']);


        }


        return $arr;

    }
    public  function getmdd($id){

        $sql ="SELECT kindname FROM `sline_destinations` WHERE id='$id'";

        $arr = self::execute($sql);

        return $arr[0]['kindname'];

    }
    /*
    * 获得 作者头像
    */
    public  static  function  get_authorHead($authorname){

        $attrid = trim($authorname);


            $sql = "SELECT litpic FROM `sline_admin` WHERE author_name='$attrid'";
            $arr = self::execute($sql);

        // $arr = DB::select('litpic')->from('sline_admin')->where(" author_article_id  in({$attrid}) ")->execute()->as_array();
        return  $arr;
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