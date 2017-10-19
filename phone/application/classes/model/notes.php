<?php defined('SYSPATH') or die('No direct access allowed.');



class Model_Notes extends ORM

{



    /**

     * 会员发布的游记列表

     * @param $mid

     * @param $page

     * @param $pagesize

     * @return mixed

     */

    public static function member_notes_list($mid,$currentpage,$pagesize)

    {

        $page = $currentpage ? $currentpage : 1;

        $offset = (intval($page)-1)*$pagesize;





        $sql = "SELECT a.* FROM `sline_notes` a ";

        $sql.= "WHERE a.memberid=$mid ";

        $sql.= "ORDER BY modtime desc ";



        //计算总数

        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");

        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by



        $totalN = DB::query(1,$totalSql)->execute()->get('dd');

        $totalNum = $totalN ? $totalN : 0;

        $sql.= "LIMIT {$offset},{$pagesize}";

        $arr = DB::query(1,$sql)->execute()->as_array();

        foreach($arr as &$row)

        {

            $row['url'] = $GLOBALS['cfg_basehost'].'/notes/show_'.$row['id'].'.html';

        }

        $out = array(

            'total' => $totalNum,

            'list' => $arr

        );

        return $out;



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

         $sql.= "ORDER BY id ";

         //计算总数
         //echo $sql ;exit;
         $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        // $totalSql   =SELECT * FROM `sline_notes` WHERE is_draft=0 and status=1 and find_in_set($mid,is_like))"
         $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by

         $totalN = DB::query(1,$totalSql)->execute()->get('dd');
         //=================================================




         $totalNum = $totalN ? $totalN : 0;

         $sql.= "LIMIT {$offset},{$pagesize}";


         //$file  =fopen()

         $arr = DB::query(1,$sql)->execute()->as_array();



         foreach($arr as &$row)

         {
             if($gl=='') {
                 $sql1 = " SELECT * FROM `sline_notes` WHERE id ={$row[noteid]}";

                 $arr1 = DB::query(1, $sql1)->execute()->as_array();

                 $row['url'] = $GLOBALS['cfg_basehost'] . '/notes/show_' . $row['noteid'] . '.html';
             }
             else{
                 //获取 游记攻略的板块属性 属性
                 $sql_attr  = "SELECT id,attrname FROM `sline_article_attr` WHERE `pid`=15 and`isopen`=1 ";

                 $re        =  DB::query(1,$sql_attr)->execute()->as_array();

                  //获取对应 id 的 攻略属性
                 $sql1 = " SELECT * FROM `sline_article` WHERE aid ={$row[articleid]}";

                 $arr1 = DB::query(1, $sql1)->execute()->as_array();
                 // 遍历
                 $attr  =explode(",",$arr1[0]['attrid']);

                 foreach($re as $v){

                     if(in_array($v['id'],$attr)){
                         $row['plate']  =$v['attrname'];

                     }
                 }

                 $row['url'] =$GLOBALS['cfg_basehost'] . '/raiders/show_' . $arr1[0]['aid'] . '.html';

             }

             $row['title'] =   $arr1[0]['title'];
             $row['litpic'] =  $arr1[0]['litpic'];
             $row['modtime'] = $arr1[0]['modtime'];

         }

         $out = array(

             'total' => $totalNum,

             'list' => $arr

         );

         return $out;

     }
    /*
     * 取消喜欢 游记
     */
    public  static  function dellikenote($id){

          $sql  = "delete  from `sline_like_notes` where id ='$id'";
          $re   =DB::query(1,$sql)->execute()->as_array();
          return $re ;
    }


    /**

     * 获取总的游记数量

     * @return int

     */

    public static function get_total_notes()

    {

        $sql = "SELECT COUNT(*) as dd FROM `sline_notes` WHERE status=1";

        $num = DB::query(1,$sql)->execute()->get('dd');

        return $num ? $num : 0;

    }
    public  static  function search_note_result($params,$keyword,$currentpage,$pagesize='10'){
        $destPy = Common::remove_xss($params['destpy']);
        $page = $currentpage;
        $page = $page ? $page : 1;
        $offset = (intval($page)-1)*$pagesize;

        $sql="SELECT a.* FROM ";
        $sql.=" `sline_notes` a ";
        $sql.=" WHERE a.status=1  ORDER BY a.addtime DESC LIMIT {$offset},{$pagesize}";
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;
        $ar = DB::query(1,$sql)->execute()->as_array();
        foreach($ar as $k=>&$v){
            //  获取 图片的个数
            $v['tuce'] =self::get_note_tuce($v['id']);
            $v['member']      =  ORM::factory('member',$v['memberid'])->as_array();
            $s =  preg_match('/^1([0-9]{9})/',$v['member']['nickname']);
            if($s){

                $v['member']['nickname'] =substr($v['member']['nickname'],0,3).'****'.substr($v['member']['nickname'],7,4);
            }
            $v['conmmentNum'] = Model_Comment::get_comment_num($v['id'], 102);
            $v['content']    = self::get_noteContent($v['id']);
        }
        $out = array(
            'total' => $totalNum,
            'list' => $ar
        );
        return $out;

    }
    /*
     *   获取 游记的内容
     * $noteid  游记的id
     */
    public  static function  get_noteContent($noteid){

        $sql  = "SELECt * FROM `sline_notes_list` where notes_id = $noteid";


        $notecontent  =DB::query(1,$sql)->execute()->as_array();
        $con ='';
        foreach ($notecontent as &$v){
            $con.= $v['content'];
        }

        return $con;

          }
    /*
     *   获取 作者 游记总数
     */
    public  static  function  get_notenum($memid){
         $sql = "select count(memberid) as dd from `sline_notes` where memberid=$memid and status=1";
         $re  = DB::query(1,$sql)->execute()->get('dd');
        return $re ;
    }
    /*
     * 获取作者等级
     * $memberid  会员id
     */
    public  static  function get_author_greate($memid){
        $sql = "select count(memberid) as dd from `sline_notes` where memberid=$memid and status=1";
        $re  = DB::query(1,$sql)->execute()->get('dd');
        $offset  = 5 ;
        $x  = ceil($re*1/$offset)*1;
        return $x ;
    }
    /*
     * 获取总游记
     */
    public  static function get_all_notesNum(){
        $sql ="select count(*) as dd from `sline_notes` where status=1 and is_dra=0";
        $arr =DB::query(1,$sql)->execute()->get('dd');
        return $arr;
    }
    /*
     * 获取 图册
     */
        public static function get_note_tuce($vid){

            $sql = "select content from `sline_notes_list` where notes_id=$vid";
            $arr = DB::query(1,$sql)->execute()->as_array();
            $str ="";
            foreach($arr as $k=>&$v){
                $str .= $v['content'];

        }

            //  获取 图册
            preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg]))[\'|\"].*?[\/]?>/',$str,$arr);
            return count($arr[0]);
        }



    /**

     * 获取最新游记

     * @param $offset

     * @param $pagesize

     * @return mixed

     */

    public static function get_new_notes($offset,$pagesize)

    {

        $sql = "SELECT * FROM `sline_notes` AS a  LEFT JOIN (SELECT mid,nickname,litpic as memberpic,remarks FROM sline_member) AS m ON m.mid=a.memberid WHERE a.status=1";

        $sql.= " ORDER BY modtime DESC LIMIT $offset,$pagesize";

        $arr = DB::query(1,$sql)->execute()->as_array();

        foreach($arr as &$row)

        {

            $row['url'] = $GLOBALS['cfg_basehost'].'/notes/show_'.$row['id'].'.html';



        }

        return $arr;





    }

    /*
   * 获取 目的 fengjishu
   */
    public static  function  get_mdd(){

        $sql  = "SELECT id,kindname,pinyin FROM `sline_destinations` WHERE pid =0 and isopen =1 ORDER by displayorder";

        $arr = DB::query(1,$sql)->execute()->as_array();

        return $arr;

    }
    /*
     * fengjishu
     * 获取热门 游记
     */
    public static function get_hot_notes($kindid,$row=4){

        $sql ="SELECT * FROM `sline_notes` where status=1 and is_dra=0 ";
        if(!empty($kindid)&&$kindid!=-1){
         $sql .= " and finaldestid = $kindid ";
        }
        $sql .= " ORDER BY shownum DESC limit 0,{$row} ";

        $arr = DB::query(1,$sql)->execute()->as_array();
        if(!empty($kindid)){
            foreach($arr as $k =>&$v){

                $v['member'] = ORM::factory('member',$v['memberid'])->as_array();

                $s =  preg_match('/^1([0-9]{9})/',$v['member']['nickname']);
                if($s){

                    $v['member']['nickname'] =substr($v['member']['nickname'],0,3).'****'.substr($v['member']['nickname'],7,4);
                }
                $v['url']    ='notes/show_'.$v['id'].'.html';
                $v['commentnum'] = Model_Comment::get_comment_num($v['id'],101); //评论次数

            }
        }

        return $arr;

    }
    /*
    * 获取 游记 目录 表信息 list
    * fengjishu
    */
    public static function get_list_A2($noteid){

        $sql = "SELECT * FROM `sline_notes_list` WHERE notes_id=$noteid and m_id='A2' ORDER by id";

        //echo $sql ;exit;

        $arr_pid = DB::query(1,$sql)->execute()->as_array();

        $p= self::unlimitedForLayer($arr_pid);

        return $p;
    }
    /*
     * 获取 游记 目录 表信息 list
     * fengjishu
     */
    public static function get_list($noteid){

        $sql = "SELECT * FROM `sline_notes_list` WHERE notes_id=$noteid and m_id!='A2'  ORDER by id";

        $arr_pid = DB::query(1,$sql)->execute()->as_array();

        $p= self::unlimitedForLayer($arr_pid);

        return $p;
    }
     public static function unlimitedForLayer ($cate ,$pid = 0 , $child = 'child', $parentField='pid', $primarykey='id') {
        $arr = array();
        foreach ($cate as  $v) {
            if ($v[$parentField] == $pid) {
                $v[$child] = self::unlimitedForLayer($cate, $v[$primarykey], $child, $parentField, $primarykey);
                $arr[] = $v;
            }
        }
        return $arr;
    }
    /*
     * 插入 主目录
     */
    public static function insert_main_lu($notes_id,$main_id,$dis,$mid){

         $sql ="INSERT INTO `sline_notes_list`(`notes_id`, `m_id`, `displayorder`,`mid`) VALUES ('$notes_id','$main_id','$dis','$mid')";

         DB::query(1,$sql)->execute()->as_array();

         $sql  = "SELECT id FROM `sline_notes_list` WHERE z_id='' and notes_id ='$notes_id' and m_id='$main_id'";

         $s    = DB::query(1,$sql)->execute()->as_array();

        return $s[0]['id'];
    }
    /*
    * 插入 字目录
    */
    public static function insert_zi_lu($notes_id,$child_id,$dis,$m_id,$mid,$parentid){

        $sql ="INSERT INTO `sline_notes_list`(`notes_id`, `z_id`, `displayorder`,`m_id`,`mid`,`pid`) VALUES ('$notes_id','$child_id','$dis','$m_id','$mid','$parentid')";

        $s= DB::query(1,$sql)->execute()->as_array();

        return $s;
    }
    /*
     *  插入第一主章节
     */
    public  static function insert_mian_first($a=array()){
        $time =time();
        $sql= "SELECT id FROM `sline_notes_list` WHERE notes_id ='$a[noteid]' and m_id='A2' and z_id='' ";

        $s    = DB::query(1,$sql)->execute()->as_array();
        if(empty($s)) {
            $sql = "INSERT INTO `sline_notes_list` ";

            $sql .= " (`title_s`, `notes_id`, `addtime`, `content`, `mid`, `m_id`, `displayorder`)";

            $sql .= " VALUES ";

            $sql .= "('$a[title]','$a[noteid]','$time','$a[con]','$a[mid]','A2','1')";

            DB::query(1, $sql)->execute()->as_array();


            $sql = "SELECT id FROM `sline_notes_list` WHERE notes_id ='$a[noteid]' and m_id='A2' and z_id='' ";

            $s = DB::query(1, $sql)->execute()->as_array();
           // return $s[0]['id'];
        }else{
            $sql ="  UPDATE `sline_notes_list` SET `title_s`='$a[title]',`notes_id`='$a[noteid]',`addtime`='$time',`content`='$a[con]' WHERE notes_id='$a[noteid]' AND m_id='A2' AND z_id='' ";
            DB::query(1,$sql)->execute()->as_array();
        }

        return $s[0]['id'];

    }
    /*
     * 更新 第一章
     */
    public  static  function  update_firstmulu($first_muluid,$noteid){
        $sql ="  UPDATE `sline_notes_list` SET `pid`='$first_muluid' WHERE notes_id='$noteid' AND m_id='A2' and z_id!=''";
        DB::query(1,$sql)->execute()->as_array();
    }
    /*
    *  更新 章节
    */
    public  static function update_mulu($post=array(),$get=array(),$firstid,$noteid){
        $time  =time();
       //   20170223  封冀蜀 将 大于 1  改为 大于0
          if($get['m_length']>0){

              for($i=0;$i<$get['m_length'];$i++){

                      $title  = $_POST['A'.($i+3)];
                      $content= $_POST['A'.($i+3).'_con'];
                      $m_id   = "A".($i+3);
                  $sql ="  UPDATE `sline_notes_list` SET `title_s`='$title',`notes_id`='$noteid',`addtime`='$time',`content`='$content' WHERE notes_id='$noteid' AND m_id='$m_id'";
                  DB::query(1,$sql)->execute()->as_array();
              }
          }
          if($get['z_length']>0){

              for($k=0;$k<$get['m_length'];$k++){

                  $m_id  = "A".($k+2);

                  $sql = " SELECT COUNT(*) as zmulu FROM `sline_notes_list` WHERE z_id!='' and m_id = '$m_id' and notes_id ='$noteid'";

                  $re  = DB::query(1,$sql)->execute()->as_array();

                  $zmulu  =$re[0]['zmulu']*1;

                  for($j=0;$j<$zmulu;$j++){
                   $title_z   = $_POST[$m_id.'-'.($j+1)];
                   $content_z = $_POST[$m_id.'-'.($j+1).'_UP'];
                   //   echo $m_id.'-'.($j+1).'UP'."/".$content_z;exit;
                   $z_id   = $m_id.'-'.($j+1);
                   if($m_id=='A2'){
                       $sql ="  UPDATE `sline_notes_list` SET `title_s`='$title_z',`pid`='$firstid',`notes_id`='$noteid',`addtime`='$time',`content`='$content_z' WHERE notes_id='$noteid' AND z_id='$z_id'";
                   }else{
                       $sql ="  UPDATE `sline_notes_list` SET `title_s`='$title_z',`notes_id`='$noteid',`addtime`='$time',`content`='$content_z' WHERE notes_id='$noteid' AND z_id='$z_id'";
                   }
                   DB::query(1,$sql)->execute()->as_array();
                  }

              }

          }


    }
    /*
   *  更新 章节
   */
    public  static function update_mulu2($post=array(),$get=array(),$noteid){
        $time  =time();

        if($get['m_length']>0){

            for($i=0;$i<$get['m_length'];$i++){

                $title  = $_POST['A'.($i+2)];
                $content= $_POST['A'.($i+2).'_con'];
                $m_id   = "A".($i+2);
                $sql ="  UPDATE `sline_notes_list` SET `title_s`='$title',`notes_id`='$noteid',`addtime`='$time',`content`='$content' WHERE notes_id='$noteid' and pid=0 AND m_id='$m_id'";
                DB::query(1,$sql)->execute()->as_array();
            }
        }
        if($get['z_length']>1||$get['z_length']==1){

            for($k=0;$k<$get['m_length'];$k++){

                $m_id  = "A".($k+2);

                $sql = " SELECT COUNT(*) as zmulu FROM `sline_notes_list` WHERE z_id!='' and m_id = '$m_id' and notes_id ='$noteid'";

                $re  = DB::query(1,$sql)->execute()->as_array();

                $zmulu  =$re[0]['zmulu']*1;

                for($j=0;$j<$zmulu;$j++){
                    $title_z   = $_POST[$m_id.'-'.($j+1)];
                    $content_z = $_POST[$m_id.'-'.($j+1).'_UP'];
                    //   echo $m_id.'-'.($j+1).'UP'."/".$content_z;exit;
                    $z_id   = $m_id.'-'.($j+1);

                    $sql ="  UPDATE `sline_notes_list` SET `title_s`='$title_z',`notes_id`='$noteid',`addtime`='$time',`content`='$content_z' WHERE notes_id='$noteid' AND z_id='$z_id'";

                    DB::query(1,$sql)->execute()->as_array();
                }

            }

        }


    }
    /*
     * 删除 主目录
     *
     */
    public  function del_mainlu($noteid,$id){

        $sql  = " DELETE FROM `sline_notes_list` WHERE id ='$id' or pid='$id'";

       $s = DB::query(1,$sql)->execute()->as_array();

        return $s;
    }
    /*
    * 删除 子目录
    *
    */
    public  function del_zimulu($mid,$noteid,$m_id){

        $sql  = " DELETE FROM `sline_notes_list` WHERE mid='$mid' and notes_id ='$noteid' and z_id='$m_id'";

        DB::query(1,$sql)->execute()->as_array();

        return 1;
    }

    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $destPy = Common::remove_xss($params['destpy']);

        $page = $currentpage;
        $page = $page ? $page : 1;

        $where = ' WHERE a.status=1 ';
        //按目的地搜索
        if($destPy && $destPy!='all')
        {
            $destId = ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
            $where.= " AND FIND_IN_SET('$destId',a.kindlist) ";
        }
        //关键词
        if(!empty($keyword))
        {

//                $where.= "AND a.title like '%$keyword%' or FIND_IN_SET('$keyword',a.keyword)  ";
                $where.= "AND a.title like '%$keyword%' ";

        }

        $offset = (intval($page)-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_notes` a ";
//            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
//            $sql.= "ON (a.id=b.aid AND b.typeid=101 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(a.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";


        }
        else
        {
            $sql = "SELECT a.* FROM `sline_notes` a ";
//            $sql.= "LEFT JOIN `sline_allorderlist` b ";
//            $sql.= "ON (a.id=b.aid AND b.typeid=4 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(a.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";



        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;

        $sql.= "LIMIT {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],101); //评论次数

            // $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
            $v['url'] =  "/notes/show_{$v['id']}.html";
            //   匹配相册
            //  获取 图册
            $v['tuceNum'] = self::get_tuceNum($v['id']);

            $v['member']      =  ORM::factory('member',$v['memberid'])->as_array();
            $s =  preg_match('/^1([0-9]{9})/',$v['member']['nickname']);
            if($s){

                $v['member']['nickname'] =substr($v['member']['nickname'],0,3).'****'.substr($v['member']['nickname'],7,4);
            }
            $v['content']    = Model_Notes::get_noteContent($v['id']);
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;


    }

    private   function get_tuceNum($arid){
        $sql  ="select content from `sline_notes_list` where notes_id=$arid order by id asc";
        $mulu =DB::query(1,$sql)->execute()->as_array();
        $str  = '';
        foreach($mulu as &$v){
            $str.= $v['content'];
        }
        //  获取 图册
        preg_match_all('/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg]))[\'|\"].*?[\/]?>/',$str,$arr);
        $tuce  =  count($arr[0]);
        return $tuce;

    }

}