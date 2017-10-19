<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Destinations extends ORM
{
   
    public static function  home_display()
    {
        $sql = 'select * from (select kindid,displayorder from sline_line_kindlist where isnav=1) as a left join (select id,kindname,pinyin,opentypeids from sline_destinations) as b on a.kindid=b.id where find_in_set(b.opentypeids,1) order by a.displayorder asc';
        return DB::query(Database::SELECT, $sql)->execute()->as_array();
    }

    /**
     * 生成子站列表
     */
    public static function gen_web_list()
    {
        $webfile = APPPATH.'/cache/weblist.php';
        if (!file_exists($webfile))
        {
            $out = array();
            $arr = ORM::factory('destinations')
                ->where("iswebsite=1")
                ->get_all();
            foreach($arr as $row)
            {
                $out[$row['webprefix']]=array(
                    'webprefix'=>$row['webprefix'],
                    'weburl'=>$row['weburl'],
                    'kindname'=>$row['kindname'],
                    'webid'=>$row['id']
                );
            }
            if(!empty($out))
            {

                $weblist = "<?php defined('SYSPATH') or die('No direct script access.');". PHP_EOL . "\$weblist= ".var_export($out,true).";";
                $fp = fopen($webfile,'wb');
                flock($fp,3);
                fwrite($fp,$weblist);
                fclose($fp);
            }

        }

    }


    /**
     * 按栏目读取热门目的地
     * @param $typeid
     */
    public static function get_hot_dest($typeid=0,$offset=0,$row=30)
    {
        if($typeid==0)
        {
            $arr = ORM::factory('destinations')
                ->where('isopen=1 AND ishot=1')
                ->order_by("displayorder","ASC")
                ->offset($offset)
                ->limit($row)
                ->get_all();
        }
        else
        {
            $pinyin = ORM::factory('model',$typeid)->get('pinyin');
            if(!empty($pinyin))
            {
                //对应目的地表
                $table = 'sline_' . $pinyin . '_kindlist';
                $sql = "SELECT a.id,a.kindname,a.pinyin FROM `sline_destinations` a LEFT JOIN ";
                $sql .= "`$table` b ON (a.id=b.kindid) ";
                $sql .= "WHERE FIND_IN_SET($typeid,a.opentypeids) AND b.ishot=1 ";
                $sql .= "ORDER BY b.displayorder ASC ";
                $sql .= "LIMIT $offset,$row";
                $arr = DB::query(1,$sql)->execute()->as_array();

            }

        }
        return $arr;

    }



    /**
     * @param $offset
     * @param $row
     * @return mixed 顶级目的地列表
     */
    public static function get_top($offset, $row)
    {
        $arr = ORM::factory('destinations')
            ->where("pid=0 AND isopen=1")
            ->order_by('displayorder', 'ASC')
            ->offset($offset)
            ->limit($row)
            ->get_all();
        return $arr;

    }

    /**
     * @param $offset 偏移量
     * @param $row  条数
     * @param $pid  父级目的地id
     * @return mixed 下级目的地列表
     */
    public static function get_next($offset, $row, $pid)
    {
        $arr = ORM::factory('destinations')
            ->where("pid=$pid AND isopen=1")
            ->order_by('displayorder', 'ASC')
            ->offset($offset)
            ->limit($row)
            ->get_all();
        return $arr;
    }

    /**
     * @param $offset 偏移量
     * @param $row  条数
     * @param $pid  父级目的地id
     * @param $typeid  类型id
     * @return mixed 下级目的地列表
     */
    public static function get_dest($pid=0, $typeid=0, $offset, $row=10)
    {
        $arr = ORM::factory('destinations')
            ->where("isopen=1 AND pid=$pid AND FIND_IN_SET($typeid,opentypeids)")
            ->order_by('displayorder', 'ASC')
            ->offset($offset)
            ->limit($row)
            ->get_all();
        return $arr;
    }

    /**
     * @param $offset
     * @param $row
     * @return mixed 首页导航目的地
     */
    public static function get_index_nav($offset, $row)
    {
        $arr = ORM::factory('destinations')
            ->where("isnav=1 AND isopen=1")
            ->order_by('displayorder', 'ASC')
            ->offset($offset)
            ->limit($row)
            ->get_all();
        return $arr;
    }
    /**
     * @param $id 目的id
     * @param $typeid 栏目id 20
     * @return int 评论数量
     */
    public static function get_comment_num($id, $typeid)
    {

        $sql = "SELECT count(*) as num FROM `sline_comment` WHERE kindid='$id' AND typeid='$typeid'  AND isshow=1 ";
        $ar = DB::query(1,$sql)->execute()->current();
        return $ar['num'] ? $ar['num'] : 0;
    }
    /*
     * 获取  目的地标签    feng 1110
     */
    public  static  function get_kindTag($kindid){

        $sql = "SELECT * FROM `sline_destinations_tag` WHERE `kindid`=$kindid order by display";
        $arr =  DB::query(1,$sql)->execute()->as_array();
        $sql = "SELECT sum(click_num) as sums FROM `sline_destinations_tag` WHERE `kindid`=$kindid";
        $sum =  DB::query(1,$sql)->execute()->get('sums');

        // echo $sum ;exit;
        if(!empty($sum)){
            foreach($arr as  &$v){
                $v['precent'] =round($v['click_num']*100/$sum*1).'%';
                $v['presum'] =ceil($sum*1/6);
            }
        }

        return $arr;

    }
    /**
     * @param $offset
     * @param $row
     * @param $typeid
     * @return array 栏目首页导航目的地
     */

    public static function get_channel_nav($offset, $row, $typeid)
    {
        $pinyin = ORM::factory('model', $typeid)->get('pinyin');
        $arr = array();
        if ($pinyin)
        {
            //对应目的地表
            $table = 'sline_' . $pinyin . '_kindlist';
            $sql = "SELECT a.id,a.kindname,a.pinyin FROM `sline_destinations` a LEFT JOIN ";
            $sql .= "`$table` b ON (a.id=b.kindid) ";
            $sql .= "WHERE FIND_IN_SET($typeid,a.opentypeids) AND b.isnav=1 ";
            $sql .= "ORDER BY b.displayorder ASC ";
            $sql .= "LIMIT $offset,$row";
            $arr = DB::query(Database::SELECT, $sql)->execute()->as_array();
        }
        return $arr;
    }

   /*
    * 获取目的地最后一级信息
    * */

    public static function  get_last_dest($kindlist)
    {
        $kindlistArr = explode(',', $kindlist);
        $maxdest = max($kindlistArr);
        if(empty($maxdest))
            return array();

        $sql = "SELECT	* FROM	sline_destinations WHERE id ={$maxdest}";
        $rows = DB::query(Database::SELECT, $sql)->execute()->as_array();
        if(count($rows) > 0)
            return $rows[0];
        else
            return array();
    }

    /*
    * 获取目的地通过拼音
    * */
    public static function get_dest_bypinyin($destpy)
    {
        if (!empty($destpy) && $destpy != 'all')
        {
            $rows = ORM::factory('destinations')->where("pinyin='$destpy' AND isopen=1")->get_all();
            if (count($rows) > 0)
                return $rows[0];
            else
                return array();
        } else
        {
            return array();
        }
    }

    /*
    * 获取目的地优化标题
    * */
    public static function search_seo($destpy, $typeid)
    {
        $result = array(
            'seotitle' => "",
            'keyword' => "",
            'description' => ""
        );

        if (!empty($destpy) && $destpy != 'all')
        {
            $dest = Model_Destinations::get_dest_bypinyin($destpy);
            $destId = $dest["id"];
            if (!empty($destId))
            {
                $seotitle = "";
                $model = ORM::factory("model", $typeid)->as_array();
                if (!empty($model['pinyin']))
                {
                    $kindlist_tablename = "{$model['pinyin']}_kindlist";
                    $info = ORM::factory($kindlist_tablename)->where("kindid", "=", $destId)->find()->as_array();
                    $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['kindname'];
                }
                if (empty($seotitle))
                {
                    $info = ORM::factory('destinations', $destId)->as_array();
                    $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['kindname'];
                }

                $result["seotitle"] = $seotitle;
                $result["keyword"] = $info["keyword"];
                $result["description"] = $info["description"];
            }
        } else
        {
            $info = Model_Nav::get_channel_info($typeid);
            $result["seotitle"] = $info['seotitle'] ? $info['seotitle'] : $info['m_title'];
            $result["keyword"] = $info["keyword"];
            $result["description"] = $info["description"];
        }

        return $result;
    }

    /**
     * 参数解析
     * @param $params
     */
    public static function search_result($params,$keyword,$currentpage,$pagesize='10')
    {
        $destPy = Common::remove_xss($params['destpy']) ;
        $attrId = Common::remove_xss($params['attrid']);
        $page = $currentpage;
        $page = $page ? $page : 1;

        $where = ' WHERE a.ishidden=0 ';
        //按目的地搜索
        if($destPy && $destPy!='all')
        {

            $where.= " AND FIND_IN_SET('$destPy',a.kindlist) ";
        }
        //关键词
        if(!empty($keyword))
        {
            //==========fenghjishu 08.10 增加
          //  $mdd = self::get_des();
            $mdds = '';
            foreach ($mdd as $k=>$v){
                if($keyword==$v['kindname']){
                    $mdds =$v['id'];
                }
            }
            if(!empty($mdds)){
                if(!empty($destPy) && $destPy!='all'){
                    $where .= " or FIND_IN_SET($mdds,a.kindlist)" ;
                }else{
                    $where .= " AND FIND_IN_SET($mdds,a.kindlist) ";
                }

            }else{
                $where.= "AND a.title like '%$keyword%' or FIND_IN_SET('$keyword',a.keyword)  ";
            }
            // $where.= " AND a.title like '%$keyword%' or FIND_IN_SET('$keyword',a.keyword) ";//06.25 fengjishu 增加or  索引
        }
        //按属性
        if(!empty($attrId))
        {
          //  $where.= Product::get_attr_where($attrId);
        }

        $offset = (intval($page)-1)*$pagesize;

        //如果选择了目的地
        if(!empty($destId))
        {
            $sql = "SELECT a.* FROM `sline_specialty` a ";
            $sql.= "LEFT JOIN `sline_kindorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=102 AND a.webid=b.webid AND b.classid=$destId)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";
        }
        else
        {
            $sql = "SELECT a.* FROM `sline_specialty` a ";
            $sql.= "LEFT JOIN `sline_allorderlist` b ";
            $sql.= "ON (a.id=b.aid AND b.typeid=102 AND a.webid=b.webid)";
            $sql.= $where;
            $sql.= "ORDER BY IFNULL(b.displayorder,9999) ASC,a.modtime DESC,a.addtime DESC ";
            //$sql.= "LIMIT {$offset},{$pagesize}";
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
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'],102); //评论次数
            $v['mdd']        = ORM::factory('destinations')->where("id='{$v['finaldestid']}'")->find()->get('kindname');
            $v['litpic']     = Common::img($v['litpic'],550,344);
            //  $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
              $v['url'] =  "/phone/destination/specialty_show?speid=".$v['id']."&kindid=".$v['finaldestid'];
        }

        return   $arr;


    }
    /*
    *  特产详情
    *
    */
    public  static function getSpecialtyDetial($id){

        $sql = "SELECT * FROM `sline_specialty` WHERE id= $id";
        $arr =DB::query(1,$sql)->execute()->as_array();
        return $arr;
    }

    /*
   *  地图页面 的 获取数据q
   *  景点 sMap 饭店 rMap 酒店 hMap
   *  $kindid 目的地id
   */
    public static function get_alldata($sMap,$rMap,$hMap,$keyword,$offset,$pagesize,$kindid){

        if(!empty($sMap)&&!empty($hMap)){

            $arr=  self::alldata($keyword,$offset,$pagesize,$kindid);
        }elseif(!empty($sMap)&&empty($hMap)){
            $arr=  self::getsMap($keyword,$offset,$pagesize,$kindid);
        }elseif(empty($sMap)&&!empty($hMap)){

            $arr=  self::gethMap($keyword,$offset,$pagesize,$kindid);
        }else{
            $arr=  self::alldata($keyword,$offset,$pagesize,$kindid);
        }
        return $arr;
    }

    private function alldata($keyword,$offset,$pagesize,$kindid){
        //$pagesize  = $pagesize/2;
        $sql  = " select *  FROM `sline_spot` ";
        $sql .= " where finaldestid=$kindid and ishidden=0 ";
        if(!empty($keyword)){
            $sql .= " and title like '%$keyword%' or address like '%$keyword%' ";
        }
        $sql .= " ORDER BY addtime desc,modtime desc ";
        $sql .= " limit {$offset},{$pagesize}";

        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v){

            $v['url']   ="/phone/spots/show_".$v['aid'].".html";
            $extentInfo =Model_Spot::get_extend_info($v['id']);
            $v['telephone'] =$extentInfo['e_tel'];
        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by
        $totalN = DB::query(1,$totalSql)->execute()->current();
        $totalNum = $totalN['dd'] ? $totalN['dd'] : 0;

        $sql = "SELECT * FROM `sline_hotel` WHERE ishidden= 0 and finaldestid= $kindid";
        if(!empty($keyword)){
            $sql .= " and title like '%$keyword%' or address like '%$keyword%' ";
        }
        $sql .= " order by addtime desc ";
        $sql .= " limit {$offset},{$pagesize}";
        $arr1 = DB::query(1,$sql)->execute()->as_array();
        foreach($arr1 as &$va){

            $va['url']  ="/phone/hotels/show_".$va['aid'].".html";

        }
        //计算总数
        $totalSql1 = "SELECT count(*) as dd1 ".strchr($sql," FROM");
        $totalSql1 = str_replace(strchr($totalSql1,"ORDER BY"),'', $totalSql1);//去掉order by
        $totalN1 = DB::query(1,$totalSql1)->execute()->current();
        $totalNum1 = $totalN1['dd1'] ? $totalN1['dd1'] : 0;
        $re  = array_merge($arr,$arr1);
        shuffle($re);//随机打乱数组
        if(!empty($re)&&count($re)>=$pagesize){
            for($i=0;$i<$pagesize;$i++){
                $re1[$i] =$re[$i];
            }
            $res[0] =$re1;
        }else{
            $res[0] =$re;
        }
        $total = intval($totalNum*1+$totalNum1*1);

        $res[1] =$total;
        return $res ;
    }
    private function getsMap($keyword,$offset,$pagesize,$kindid){
        $sql  = " select * from `sline_spot` ";
        $sql .= " where finaldestid=$kindid and ishidden=0 ";
        if(!empty($keyword)){
            $sql .= " and title like '%$keyword%' or address like '%$keyword%' ";
        }
        $sql .= " order by addtime desc,modtime desc ";
        $sql .= " limit {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();

        foreach($arr as &$v){

            $v['url']  ="/phone/spots/show_".$v['aid'].".html";

        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by
        $totalN = DB::query(1,$totalSql)->execute()->current();
        $totalNum = $totalN['dd'] ? $totalN['dd'] : 0;
        $res[0] = $arr;
        $res[1] = $totalNum;
        return $res ;
    }
    private function gethMap($keyword,$offset,$pagesize,$kindid){
        $sql = "SELECT * FROM `sline_hotel` WHERE ishidden= 0 and finaldestid= $kindid";
        if(!empty($keyword)){
            $sql .= " and title like '%$keyword%' or address like '%$keyword%' ";
        }
        $sql .= " order by addtime desc ";
        $sql .= " limit {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$va){

            $va['url']  ="/phone/hotels/show_".$va['aid'].".html";

        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by
        $totalN = DB::query(1,$totalSql)->execute()->current();
        $totalNum = $totalN['dd'] ? $totalN['dd'] : 0;
        $res[0] = $arr;
        $res[1] = $totalNum;
        return $res ;
    }



}
