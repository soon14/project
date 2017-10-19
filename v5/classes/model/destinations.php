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
    public static function get_hot_dest($typeid=0,$offset=0,$row=30,$destid)
    {
        if($typeid==0)
        {
            $where = $destid ? "isopen=1 AND ishot=1 AND pid=$destid" : "isopen=1 AND ishot=1";
            $arr = ORM::factory('destinations')
                ->where($where)
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
                $destwhere = $destid ? " AND a.pid=$destid " : "";
                $sql = "SELECT a.id,a.kindname,a.pinyin FROM `sline_destinations` a LEFT JOIN ";
                $sql .= "`$table` b ON (a.id=b.kindid AND IFNULL(b.ishot,0)=1) ";
                $sql .= "WHERE FIND_IN_SET($typeid,a.opentypeids) AND IFNULL(b.ishot,0)=1 $destwhere";
                $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC ";
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
    public static function get_next($offset, $row, $pid,$typeid)
    {
        $typeid = $typeid ? $typeid : 0;
        $typewhere =$typeid ? " AND FIND_IN_SET($typeid,opentypeids) " : "";
        $sql = "SELECT * FROM `sline_destinations` ";
        $sql.= "WHERE pid=$pid AND isopen=1 {$typewhere}";
        $sql.= "ORDER BY displayorder ASC ";
        $sql.= "LIMIT {$offset},{$row}";
        $arr = DB::query(1,$sql)->execute()->as_array();
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
            $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC ";
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
               $v['precent'] =round($v['click_num']*100/$sum*1);
               $v['presum'] =ceil($sum*1/6);
           }
     }

      return $arr;

   }
    /*
     *   feng 1110
     *  获取城市的天气状况
     */
    public  static  function  get_kindWeather($pinyin){

        $ch = curl_init();
        $url = 'http://apis.baidu.com/thinkpage/weather_api/suggestion?location='.$pinyin.'&language=zh-Hans&unit=c&start=0&days=1';
        $header = array(
            'apikey: fd697fa125b0a185069a90af48f0db18',
        );
        // 添加apikey到header
        curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $res = curl_exec($ch);

        $re  = json_decode($res,true);
       // if(empty($re['errNum'])){
         return   $day  = $re['results'][0]['daily'][0];

       // }
                  /*
                   * location 所查询的位置
                参数值范围：
                - 城市ID 例如：location=WX4FBXXFKE4F
                - 城市中文名 例如：location=北京
                - 城市拼音/英文名 例如：location=beijing
                - 经纬度 例如：location=39.93:116.40 （注意纬度前经度在后，冒号分隔）
                - IP地址 例如：location=220.181.111.86
                - “ip”两个字母 自动识别请求IP地址，例如：location=ip

                language 语言 (可选)
                参数值范围：
                - zh-Hans 简体中文
                - zh-Hant 繁体中文
                - en 英文
                - ja 日语
                - de 德语
                - fr 法语
                默认值：zh-Hans

                unit 单位 (可选)
                参数值范围：
                - c 当参数为c时，温度c、风速km/h、能见度km、气压mb
                - f 当参数为f时，温度f、风速mph、能见度mile、气压inch
                默认值：c

                start 起始时间 (可选)
                参数值范围：
                - 日期 例如：start=2015/10/1
                - 整数 例如：start=0 代表今天、start=1 代表明天
                默认值：0

                days 天数 (可选) 返回从start算起days天的结果。默认为你的权限允许的最多天数。
                参数值范围：
                整数 例如：days=3 代表3天
               */
    }
    /*
    * 获取目的地优化标题
    * */
    public static function search_seo($destpy, $typeid)
    {
        $file = SLINEDATA . "/autotitle.cache.inc.php"; //载入智能title配置
        if (file_exists($file))
        {
            require_once($file);
        }
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
                    $kindlist_tablename = "sline_{$model['pinyin']}_kindlist";
                    $sql = "select a.kindname,b.seotitle,b.keyword,b.description FROM sline_destinations a LEFT JOIN $kindlist_tablename b ON a.id=b.kindid where b.kindid='$destId'";
                    $info = DB::query(1,$sql)->execute()->current();
                    //$info = ORM::factory($kindlist_tablename)->where("kindid", "=", $destId)->find()->as_array();
                    $seotitle = $info['seotitle'] ? $info['seotitle'] : $info['kindname'];
                    $result["seotitle"] = $seotitle;
                    $result["keyword"] = $info["keyword"];
                    $result["description"] = $info["description"];
                }
                if (empty($seotitle))
                {
                    $info = ORM::factory('destinations', $destId)->as_array();
                    //读取自动优化标题
                    if(empty($info['seotitle']) && !empty($cfg_dest_title))
                    {
                        $autotitle = str_replace('XXX', $info['kindname'], $cfg_dest_title);
                    }
                    //读取自动描述
                    if(empty($info['description']) && !empty($cfg_dest_desc))
                    {
                        $autodesc = str_replace('XXX', $info['kindname'], $cfg_dest_desc);
                    }


                    $result['seotitle'] = $info['seotitle'] ? $info['seotitle'] : $autotitle;
                    $result['seotitle'] = !empty($result['seotitle']) ? $result['seotitle'] : $info['kindname'];
                    $result['keyword'] = $info["keyword"];
                    $result['description'] = $info['description'] ? $info['description'] : $autodesc;

                }


            }
        }
        else
        {
            $info = Model_Nav::get_channel_info($typeid);
            $result["seotitle"] = $info['seotitle'] ;
            $result["keyword"] = $info["keyword"];
            $result["description"] = $info["description"];
        }

        return $result;
    }

    /**
     * @param $destid
     * @return array
     * @desc 返回上级所有目的地
     */

    public static function get_prev_dest($destid)
    {

        $loopid=$destid;
        $result=array();
        $looptime = 1;
        while(1)
        {
            $pid = ORM::factory('destinations',$loopid)->get('pid');
            if($pid!=0)
            {
                $pinfo = ORM::factory('destinations',$pid)->as_array();
                $result[]=$pinfo;
                $loopid=$pinfo['id'];
            }
            else
            {
                break;
            }
            //增加一个循环跳出机制,避免因数据库问题造成死循环
            $looptime++;
            if($looptime > 5)
            {
                break;
            }


        }
        $count=count($result);
        for($i=$count-1;$i>=0;$i--)
        {
            $newresult[]=$result[$i];
        }
        $destinfo=ORM::factory('destinations',$destid)->as_array();
        $newresult[]=$destinfo;
        return $newresult;

    }


    /**
     * @param $py
     * @desc 根据拼音首字母返回目的地
     */
    public static function get_dest_by_pinyin($py,$typeid,$offset,$row)
    {
        $ar = explode(',',$py);
        $whereArr = array();
        foreach($ar as $a)
        {
            $whereArr[]="a.pinyin LIKE '$a%' ";
        }
        $where = implode(" OR ",$whereArr);
        if($typeid==0)
        {
            $where = "isopen=1 AND ishot=1";
            $arr = ORM::factory('destinations')
                ->where($where)
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
                $sql .= "WHERE FIND_IN_SET($typeid,a.opentypeids) AND ($where) ";
                $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC ";
                $sql .= "LIMIT {$offset},{$row}";
                $arr = DB::query(1,$sql)->execute()->as_array();

            }

        }
        return $arr;



    }

    /**
     * @param $keyword
     * @return string
     * @desc 匹配拼音
     *
     */

    public static  function match_pinyin($keyword,$typeid)
    {
        if(empty($typeid))
        {
            $sql = "SELECT kindname AS matchname FROM `sline_destinations` WHERE isopen=1";
        }
        else
        {
            $modelInfo = ORM::factory('model',$typeid)->as_array();
            $joinTable = 'sline_'.$modelInfo['pinyin'].'_kindlist';
            $sql = "SELECT a.kindname FROM `sline_destinations` a ";
            $sql.= "LEFT JOIN $joinTable as b ON(a.id=b.kindid)  ";
            $sql.= "WHERE a.isopen=1 AND FIND_IN_SET($typeid,a.opentypeids)";

        }


        $res = DB::query(1,$sql)->execute()->as_array();
        $str = '';


        foreach($res AS $row) // 获取全部name
        {
            if(strlen($keyword) == 1)
            {
                $pinyin = Common::get_pinyin($row['kindname']); // 获取拼音
                if(strpos($pinyin, $keyword) !== false)
                {
                    if(substr($pinyin, 0, 1) == $keyword)
                    {
                        $str .= $row['kindname'] . ",";
                    }
                }
            }
            else
            {
                $pinyin = Common::get_pinyin($row['kindname'], 1); // 获取拼音
                if(strpos($pinyin, $keyword) !== false)
                {
                    $str .= $row['kindname'] . ",";
                }
            }
        }

        $str = substr($str, 0, strlen($str)-1);
        return $str;
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
        //关键词
        if(!empty($keyword))
        {
            //==========fenghjishu 08.10 增加
            $mdd = self::get_des();
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
            $where.= Product::get_attr_where($attrId);
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
          //  $v['attrlist'] = Model_Article_Attr::get_attr_list($v['attrid']);//属性列表.
          //  $v['url'] = Common::get_web_url($v['webid']) . "/raiders/show_{$v['aid']}.html";
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr
        );
        return $out;


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
            $url = self::get_search_mddurl($p['destpy'],'specialty','all','destpy',$p);
            $temp['url'] = $url;
            $temp['attr'] = '目的地';
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
                $temp['itemname'] = ORM::factory('specialty_attr',$ar)->get('attrname');

                $thisPid          = ORM::factory('specialty_attr',$ar)->get('pid');
                $temp['attr']     = ORM::factory('specialty_attr',$thisPid )->get('attrname');

                unset($orgArr[array_search($ar,$orgArr)]);
                if(!empty($attrid))
                {
                    $attrid = implode('_',$orgArr);
                }
                else
                {
                    $attrid = 0;
                }

//                $url = $GLOBALS['cfg_basehost'].'/raiders/';
//                $url.=$p['destpy'].'-'.$attrid.'-1';
                $url = $GLOBALS['cfg_basehost'].'/'.$p['destpy'].'/?param=specialty';
                //$url.=$p['destpy'].'-'.$attrid.'-1';
                $url .="&destpy=".$p['destpy']."&attrid=".$attrid."&p=1";
                $temp['url'] = $url;
                $out[] = $temp;
            }

        }
        return $out;

    }


    /*
       * 生成searh页地址
       * */
    public static function get_search_url($v,$paramname,$p,$currentpage=1)
    {

        $url = $GLOBALS['cfg_basehost'].'/raiders/';
        switch($paramname)
        {
            case "destpy":
                $url.=$v.'-'.$p['attrid'].'-'.$currentpage;
                break;

            case "attrid":
                $orignalArr = Product::get_attr_parent($p['attrid'],self::$typeid);
                $nowArr = Product::get_attr_parent($v,self::$typeid);
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
                $url.=$p['destpy'].'-'.$attr_list.'-'.$currentpage;
                break;

        }
        return $url;


    }

    /*
 * 生成searh页地址  正对城市
 * */
    public static function get_search_mddurl($mdd,$param,$v,$paramname,$p,$currentpage=1)
    {

        $url = $GLOBALS['cfg_basehost'].'/'.$mdd.'/?param='.$param;
        switch($paramname)
        {
            case "destpy":
                // $url.=$v.'-'.$p['attrid'].'-'.$currentpage;
                $url .="&destpy=".$v."&attrid=".$p['attrid']."&p=".$currentpage;
                break;

            case "attrid":
                $orignalArr = Product::get_attr_parent($p['attrid'],102);
                $nowArr = Product::get_attr_parent($v,102);
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
                //$url.=$p['destpy'].'-'.$attr_list.'-'.$currentpage;
                $url .="&destpy=".$p['destpy']."&attrid=".$attr_list."&p=".$currentpage;
                break;

        }
        return $url;


    }

    /*
     *  获取  特产  热门
     */

     public  static function get_hotspecialty(){

         $sql = "SELECT * FROM `sline_specialty` WHERE ";
         $sql .= " ishidden=0 order by shownum desc limit 0,4";
         $arr = DB::query(1,$sql)->execute()->as_array();
         return $arr;

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
    /**
 * @param $id 目的id
 * @param $typeid 栏目id 20
 * @return int 评论数量
 */
    public static function get_bigMan_num($id, $typeid)
    {

        $sql = "SELECT `memberid` FROM `sline_comment` WHERE kindid='$id' AND typeid='$typeid'  AND isshow=1 ";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $re  = array();
        foreach($ar as $k=>&$v){
            $re[$k] =$v['memberid'];
        }
        $re = count(array_unique ($re));
        return $re;//$ar['num'] ? $ar['num'] : 0;
    }
    /**
     * @param $id 目的id
     * @param $typeid 栏目id 2
     * @return int 评论数量
     */
    public static function get_authors($id, $typeid)
    {

        $sql = "SELECT `memberid` FROM `sline_comment` WHERE kindid='$id' AND typeid='$typeid'  AND isshow=1 ";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $re  = array();
        foreach($ar as $k=>&$v){

            $re[$k] =$v['memberid'];
        }
        $re =array_unique($re);
        $res =array();
        $sum = count($re);
        if($sum>8){
            for($i=0;$i<8;$i++){
                if(!empty($re[$i])) {
                    $sql = "SELECT * FROM `sline_member` WHERE mid=$re[$i] ";

                    $res[$i] = DB::query(1, $sql)->execute()->as_array();
                }else{
                    continue;
                }
            }
        }else{
                foreach ($re as $ke => $j) {
                    if(!empty($j)) {
                        $sql = "SELECT * FROM `sline_member` WHERE mid=$j ";

                        $res[$ke] = DB::query(1, $sql)->execute()->as_array();
                    }else{
                        continue;
                    }
                }

        }

        return $res ;

    }
    /*
     *   获取 目的评论
     */
    public  function get_comment($kindid,$typeid){
        $sql = "SELECT * FROM `sline_comment` WHERE kindid=$kindid and typeid=$typeid";
        $arr = DB::query(1,$sql)->execute()->as_array();
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
            $sql .= " and (title like '%$keyword%' or address like '%$keyword%') ";
        }
        $sql .= " ORDER BY addtime desc,modtime desc ";
        $sql .= " limit {$offset},{$pagesize}";

        Common::read_log($sql);
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$v){

            $v['url']  ="/spots/show_".$v['aid'].".html";

        }
        //计算总数
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by
        $totalN = DB::query(1,$totalSql)->execute()->current();
        $totalNum = $totalN['dd'] ? $totalN['dd'] : 0;

        $sql = "SELECT * FROM `sline_hotel` WHERE ishidden= 0 and finaldestid= $kindid";
        if(!empty($keyword)){
            $sql .= " and (title like '%$keyword%' or address like '%$keyword%') ";
        }
        $sql .= " order by addtime desc ";
        $sql .= " limit {$offset},{$pagesize}";
        $arr1 = DB::query(1,$sql)->execute()->as_array();
        foreach($arr1 as &$va){

            $va['url']  ="/hotels/show_".$va['aid'].".html";

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
            $sql .= " and (title like '%$keyword%' or address like '%$keyword%') ";
        }
        $sql .= " order by addtime desc,modtime desc ";
        $sql .= " limit {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();

        foreach($arr as &$v){

            $v['url']  ="/spots/show_".$v['aid'].".html";

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
            $sql .= " and (title like '%$keyword%' or address like '%$keyword%') ";
        }
        $sql .= " order by addtime desc ";
        $sql .= " limit {$offset},{$pagesize}";
        $arr = DB::query(1,$sql)->execute()->as_array();
        foreach($arr as &$va){

            $va['url']  ="/hotels/show_".$va['aid'].".html";

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
