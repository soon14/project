<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 微信公众号开发
 * Class Controller_Weixin
 */
class Controller_Activity extends Stourweb_Controller
{

    private  $parentkey = null;
    private  $itemid = null;
    private  $model;
    private  $acid;  //  哪期活动的数据
    private  $admin;
    public function before()
    {
        parent::before();
        $model            = new Model_Nav();
        $this ->model     =$model;
        $sql              = "SELECT * FROM `sline_weblist`";
        $weblist          = $model->get_sql($sql,1);
        $sql              = "select * from `sline_activity`";

        $activity1          = $model->get_sql($sql,1);
        //  ishidden  =1 隐藏/ ishidden = 2 展示      哪期活动数据；
        $sql              = "select * from `sline_activity` where ishidden=2";

        $activity          = $model->get_sql($sql,1);
        $session = Session::instance();
        $this->admin = ORM::factory('admin', $session->get('userid'))->get('username');
        $this->assign('username',$this->admin);
        $this ->acid   = Arr::get($_GET,'actid');
        $this->assign('activity',$activity1);
        $this->assign('weblist',$weblist[0]);
        $this->assign('parentkey', $this->params['parentkey']);

    }
    //活动首页
    public function action_index(){

        $acid    = $this ->acid;

        $pagesize = 20;

        $page     = $_GET['page'] ? $_GET['page'] : 1;
        $sta      = $_GET['status'] ;//? $_GET['status'];

        $istakeprize  = trim($_GET['paysource']);

        //====来自 weixin/usermana  管理页面的  的用户openid
        $openid   = Arr::get($_GET,'openid');

      //  echo $istakeprize;exit;
        $offset   = ceil($page-1)*$pagesize;
        $searchKey  = $_GET['searchKey'] ;

        $sql =  "SELECT * FROM `sline_activity_player` ";
        if(!empty($acid)){
            $sql  .= " where act_id=$acid ";
        }else{

            if(!empty($openid)){
                $sql  .= " where openid= '$openid' ";
            }else{
                $sql  .= " where act_id>0 ";
            }

        }


            if($sta=='0'){
                $sql .= " and  exchange_pid=0 " ;
            }elseif($sta=='1'){
                $sql .= "  and exchange_pid!=0 " ;
            }


       if($istakeprize=='0'){
           $sql .= " and istakeprize='$istakeprize' ";
       }elseif($istakeprize=='1'){
           $sql .= " and istakeprize='$istakeprize' ";
       }

        if($acid==3){
            if(!empty($searchKey)){
                $sql .=" and (id='$searchKey' or phone='$searchKey' or phone like '%$searchKey%') ";
            }
            $sql .= " ORDER BY best_time desc ";
        }elseif($acid==2){
            if(!empty($searchKey)){
                $sql .=" and (id='$searchKey' or phone='$searchKey' or phone like '%$searchKey%') ";
            }
            $sql .= " ORDER BY exchange_time asc ";
        }else{
            if(!empty($searchKey)){
                $sql .=" and (id='$searchKey' or phone='$searchKey' or phone like '%$searchKey%') ";
            }
            $sql .= " ORDER BY addtime desc ";
        }

        $sql .= " limit $offset,$pagesize";

        $re = $this->model->get_sql($sql,1);


        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;


        $total  =  $totalNum;

        $totalPage = ceil($total/$pagesize)*1;

        foreach ($re as &$v){

              $userinfo         =  $this->getheadurl($v['openid']);

              $v['headimgurl']  =  $userinfo['headimgurl'];

              $v['nickname']    =  $userinfo['nickname'];

              $v['isgz']        =  $userinfo['is_gz'];
              // 或得兑换奖品
              $prize            =  $this ->getprize($v['exchange_pid']);

              $v['prize']        = $prize['name'];
              $v['best_time']    = $v['best_time']*1/1000;

              //  分享多少次 页面
              if(empty($acid)){
                $v['share']        =  $this ->getshare($v['openid'],$v['act_id']);
            }
            else{
                $v['share']        =  $this ->getshare($v['openid'],$acid);
            }
              //  获取 活动名
              $v['activity_name'] =  $this -> getactName($v['act_id']);

        }
        $this ->assign('openid',$openid);
        $paysources   =array('0'=>'未领奖','1'=>'已领奖');
        $status =array('0'=>'未兑换','1'=>'已兑换');
        $this  ->assign("acid",$acid);
        $this  ->assign('paysources',$paysources);
        $this  ->assign('get',$_GET);
        $this  ->assign('status',$status);
        $this ->assign('page',$page);
        $this  ->assign('totalPage',$totalPage);
        $this->assign('info', $re);
        if($acid==3){
            $this->display('stourtravel/activity/index_3');
        }else{
            $this->display('stourtravel/activity/index');
        }

    }
    /*
     *   每个微信用户  分享了多少次
     */
    public  function getshare($openid,$acid){
                 $sql = "select count(*) as dd from `sline_activity_share` where openid='$openid'";
              if(!empty($acid)){
                  $sql .= " and act_id=$acid";
              }
        if(!empty($openid)){
           return  DB::query(1,$sql) ->execute()->get('dd');
        }
    }
    /*
     * 获取 活动名
     */
    public  function  getactName($actid){
        $sql  = "select activity_name from `sline_activity` where id =$actid";
       return  DB::query(1,$sql)->execute()->get('activity_name');
    }
    /*
     *    分享数据
     */
    public  function action_share(){
        $acid    = $this ->acid;
        $pagesize = 25;

        $getopenid = trim($_GET['openid']);
        $page     = $_GET['page'] ? $_GET['page'] : 1;

        $offset   = ceil($page-1)*$pagesize;
        $searchKey  = $_GET['searchKey'] ;

        $sql =  "SELECT * FROM `sline_activity_share` ";
        if(!empty($acid)){
            $sql  .= " where act_id=$acid ";
        }else{

                $sql  .= " where act_id>0 ";

        }
        if(!empty($getopenid)){
            $sql .= " and openid ='$getopenid' ";
        }
        if(!empty($searchKey)){
            $sql .=" and  nickname like '%$searchKey%' ";
        }

        $sql .= " order by share_time desc ";

        $sql .= " limit $offset,$pagesize";

        $re = $this->model->get_sql($sql,1);
        $sql =  "SELECT count(*) as alls FROM `sline_activity_share` ";

        if(!empty($acid)){
            $sql  .= " where act_id=$acid ";
        }else{


                $sql  .= " where act_id>0 ";


        }
        if(!empty($getopenid)){
            $sql .= " and openid ='$getopenid' ";
        }
        if(!empty($searchKey)){
            $sql .=" and  nickname like '%$searchKey%' ";
        }

        $total  =$this->model->get_sql($sql,1);

        $total  = $total[0]['alls']*1;

        $totalPage = ceil($total/$pagesize)*1;
        foreach ($re as &$v){

            $userinfo         =  $this->getheadurl($v['openid']);

            $v['headimgurl']  =  $userinfo['headimgurl'];

            $v['nickname']    =  $userinfo['nickname'];

            $v['isgz']        =  $userinfo['is_gz'];
            $v['share_page']  =  $this ->sharepage($v['share_page']);
            //  获得 编号
            if(!empty($acid)){
                $v['bian']        =   $this ->getbiaohao($acid,$v['openid']);
            }


        }
        $this  ->assign("acid",$acid);

        $this ->assign('page',$page);
        $this  ->assign('totalPage',$totalPage);
        $this->assign('info', $re);
        $this->display('stourtravel/activity/share');
    }
    public  function action_vote(){
        $acid    = $this ->acid;
        $pagesize = 50;

        $getopenid = trim($_GET['openid']);
        $page     = $_GET['page'] ? $_GET['page'] : 1;

        $offset   = ceil($page-1)*$pagesize;
        $searchKey  = $_GET['searchKey'] ;

        $sql =  "SELECT * FROM `sline_activity_helper` ";
        if(!empty($acid)){
            $sql  .= " where act_id=$acid ";
        }else{

            $sql  .= " where act_id>0 ";

        }
        if(!empty($getopenid)){
            $sql .= " and openid ='$getopenid' ";
        }
        if(!empty($searchKey)){
            $sql .=" and  nickname like '%$searchKey%' ";
        }

        $sql .= " ORDER BY id desc ";

        $sql .= " limit $offset,$pagesize";

        $re = $this->model->get_sql($sql,1);
        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");
        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by


        $totalN = DB::query(1,$totalSql)->execute()->get('dd');
        $totalNum = $totalN ? $totalN : 0;

        $total  = $totalNum*1;

        $totalPage = ceil($total/$pagesize)*1;
        foreach ($re as &$v){

            $userinfo         =  $this->getheadurl($v['openid']);

            $v['headimgurl']  =  $userinfo['headimgurl'];

            $v['nickname']    =  $userinfo['nickname'];

            $v['isgz']        =  $userinfo['is_gz'];
           // $v['share_page']  =  $this ->sharepage($v['share_page']);
            //  获得 编号
            if(!empty($acid)){
              //  $v['bian']        =   $this ->getbiaohao($acid,$v['openid']);
            }

        }
        $this  ->assign("acid",$acid);

        $this ->assign('page',$page);
        $this  ->assign('totalPage',$totalPage);
        $this->assign('info', $re);
        $this->display('stourtravel/activity/vote');
    }
    public  function  getbiaohao($acid,$openid){
        !empty($acid)  ?
        $sql = "select id from `sline_activity_player` where act_id=$acid and openid ='$openid'"
            :
       $sql = "select id from `sline_activity_player` where act_id>0 and openid ='$openid'";
        $biaohao = DB::query(1,$sql)->execute()->get('id');
        return $biaohao;
    }
    public  function sharepage($sharepage){
        switch($sharepage){
            case 'index' : return '首页';break;
            case 'show'  : return "详细页面"; break;
            case 'rank'   : return "排行榜"; break;
            default : $sharepage;
        }
    }
    /*
     *   插入 数据
     */
    public  function action_insert_bbs_user(){

        $openid   = Arr::get($_POST,'openid');
        $sql = "SELECT * FROM `bbs_hjbox_users` WHERE `openid` LIKE '%$openid%' ";
        $re =  DB::query(1,$sql)->execute()->as_array();

        $message  = array('msg' =>'用户已存在','status' =>0);
        if(empty($re)){



             $arr = self::updateuser($openid,3);

             $message  = array('msg' =>$arr,'status' =>1,'re'=>$re,'sql'=>$sql);

        }else{
            $msg = self::updateuser($openid);

            $message  = array('msg' =>$msg,'status' =>1,'re'=>$re,'sql'=>$sql);
        }
        echo json_encode($message);
    }
    /*
   *   批量插入 数据
   */
    public  function action_insert_bbs_users(){
        $openid   = Arr::get($_POST,'openids');
        $openids  = array();
        $openids =explode(',',$openid);
//        $user_list = array('user_list' =>$openids);
//
//        $s =    json_encode($user_list);
//
//        $re   =  self::get_AUsers_Mes($s);
//        echo json_encode($re);exit;
       foreach ($openids as $k=>&$v){

           $openid = trim($v);

           $sql = "SELECT * FROM `bbs_hjbox_users` WHERE `openid` LIKE '%$openid%' ";

           $re =  DB::query(1,$sql)->execute()->as_array();

           $message  = array('msg' =>'用户已存在','status' =>0);
           if(empty($re)){

               $arr = self::updateuser($openid,3);

               $message  = array('msg' =>$arr,'status' =>1,'re'=>$re,'sql'=>$sql);

           }else{
               $msg = self::updateuser($openid);

               $message  = array('msg' =>$msg,'status' =>1,'re'=>$re,'sql'=>$sql);
           }
       }

        echo json_encode($message);
    }
    /*
     *   修改 活动 内容的数据
     */
    public  function  action_changeacid(){

           $acid   =intval(trim($_POST['acid']));

           $sql  = "update `sline_activity` set ishidden=1";
           $this  ->model->get_sql($sql,1);
           $sql  = "update `sline_activity` set ishidden=2 WHERE id =$acid";
           $s =$this  ->model->get_sql($sql,1);
           echo $s ;

    }
    /*
     * 获取 微信 头像
     */
   public  function  getheadurl($openid)
   {

       $sql = "SELECT * FROM `bbs_hjbox_users` WHERE openid='$openid'";

       $ar =$this->model->get_sql($sql, 1);

       return $ar[0];

   }
    /*
     * 获取 奖品
     */
    public  function  getprize($id)
    {

        $sql = "SELECT * FROM `sline_activity_prize` WHERE id='$id'";

        $ar =$this->model->get_sql($sql, 1);

        return $ar[0];

    }
   public  function  action_changestatus(){

           $id  = trim($_POST['id']);
          $time  =date('Y-m-d H:i:s',time());
          $sql          ="UPDATE `sline_activity_player` SET `istakeprize`=1,`take_time`='$time' WHERE id='$id'";
          $s            =  $this->model-> query($sql);
          $file   = fopen('change.txt','a+');


           if($s==1){
              $message  =array('msg'=>'修改成功','status'=>1);
               fwrite($file,$time.'修改了编号为'.$id."的参赛者的领奖装态：修改成功"."\r\n");
               fclose($file);
           }else{
              $message  =array('msg'=>'修改失败','status'=>0);
               fwrite($file,$time.'修改了编号为'.$id."的参赛者的领奖装态：修改失败"."\r\n");
               fclose($file);
           }
           echo json_encode($message);

   }
    /*
     * 导出数据
     */

    public function action_genexcel()

    {

        $acid    = $this ->acid;//  哪期 活动

        $sta = trim($_GET['status']);//是否 兑换

        $istake =trim($_GET['istake']);// 是否 领奖

        $sql =  "SELECT * FROM `sline_activity_player` ";
        if(!empty($acid)){
            $sql  .= " where act_id=$acid ";
        }else{
            $sql  .= " where act_id>0 ";
        }

            if($sta=='0'){
                $sql .= " and  exchange_pid=0 " ;
            }elseif($sta=='1'){
                $sql .= "  and exchange_pid!=0 " ;
            }

            if($istake=='0'){
                $sql .= " and istakeprize='$istake' ";
            }elseif($istake=='1'){
                $sql .= " and istakeprize='$istake' ";
            }
        $sql .= " order by exchange_time asc ";


        $arr = $this->model->get_sql($sql,1);

        $table = "<table><tr>";

        $table .= "<td>昵称</td>";

        $table .= "<td>期望奖品</td>";

        $table .= "<td>获得票数</td>";

        $table .= "<td>兑换奖品</td>";

        $table .= "<td>兑换日期</td>";

        $table .= "<td>预留手机号</td>";

        $table .= "<td>编号</td>";


        if($istake=='0'){
            $table .= "<td>是否领奖</td>";
        }elseif($istake=='1'){
            $table .= "<td>是否领奖</td>";
            $table .= "<td>领奖日期</td>";
        }


        $table .= "</tr>";



        foreach ($arr as &$row)

        {
            $userinfo           =  $this->getheadurl($row['openid']);

            $row['nickname']     =  $userinfo['nickname'];

            $prize              =  $this ->getprize($row['exchange_pid']);

            $row['prize']        = $prize['name'];

            $expect              =  $this ->   getprize($row['expect_pid']);

            $row['expect']      =$expect['name'];

            $order = $row;

            $table .= "<tr>";

            $table .= "<td>{$row['nickname']}</td>";

            $table .= "<td>{$row['expect']}</td>";

            $table .= "<td>{$row['getpay']}</td>";

            $table .= "<td>{$row['prize']}</td>";

            $table .= "<td>{$row['exchange_time']}</td>";

            $table .= "<td>{$row['phone']}</td>";

            $table .= "<td>{$row['id']}</td>";


                if($istake=='0'){
                    $table .= "<td>未领奖</td>";
                }elseif($istake=='1'){
                    $table .= "<td>已领奖</td>";
                    $table .= "<td>{$row['take_time']}</td>";
                }


            $table .= "</tr>";

        }

        $table .= "</table>";

        $filename = date('Ymdhis');

        header('Pragma:public');

        header('Expires:0');

        header('Content-Type:charset=utf-8');

        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');

        header('Content-Type:application/force-download');

        header('Content-Type:application/vnd.ms-excel');

        header('Content-Type:application/octet-stream');

        header('Content-Type:application/download');

        header('Content-Disposition:attachment;filename=' . $filename . ".xls");

        header('Content-Transfer-Encoding:binary');

        if (empty($arr))

        {

            echo iconv('utf-8', 'gbk', $table);

        }

        else

            echo $table;

        exit();

    }
    /*
        * 导出活动3 数据
        */

    public function action_genexcel_3()

    {

        $acid    = $this ->acid;//  哪期 活动


        $istake =trim($_GET['istake']);// 是否 领奖

        $sql =  "SELECT * FROM `sline_activity_player` ";
      //  $sql  .= " where act_id=$acid ";
        if(!empty($acid)){
            $sql  .= " where act_id=$acid ";
        }else{
            $sql  .= " where act_id>0 ";
        }

        if($istake=='0'){
            $sql .= " and istakeprize='$istake' ";
        }elseif($istake=='1'){
            $sql .= " and istakeprize='$istake' ";
        }
        $sql .= " order by best_time desc ";


        $arr = $this->model->get_sql($sql,1);

        $table = "<table><tr>";
        $table .= "<td>排名</td>";
        $table .= "<td>昵称</td>";

        $table .= "<td>编号</td>";

        $table .= "<td>分享次数</td>";

        $table .= "<td>游戏次数</td>";

        $table .= "<td>最好成绩</td>";

        if($istake=='0'){
            $table .= "<td>是否领奖</td>";
        }elseif($istake=='1'){
            $table .= "<td>是否领奖</td>";
            $table .= "<td>领奖日期</td>";
        }

        $table .= "</tr>";

        foreach ($arr as $k=>&$row)

        {   $j =$k+1 ;
            $userinfo           =  $this->getheadurl($row['openid']);

            $row['nickname']     =  $userinfo['nickname'];

            $prize              =  $this ->getprize($row['exchange_pid']);

            $row['prize']        = $prize['name'];

            $expect              =  $this ->   getprize($row['expect_pid']);

            $row['expect']      =$expect['name'];
            $row['best_time']   =$row['best_time']*1/1000;
            $order = $row;

            $table .= "<tr>";
            $table .= "<td>{$j}</td>";
            $table .= "<td>{$row['nickname']}</td>";

            $table .= "<td>{$row['id']}</td>";

            $table .= "<td>{$row['share_num']}</td>";

            $table .= "<td>{$row['play_num']}</td>";

            $table .= "<td>{$row['best_time']}秒</td>";

            if($istake=='0'){
                $table .= "<td>未领奖</td>";
            }elseif($istake=='1'){
                $table .= "<td>已领奖</td>";
                $table .= "<td>{$row['take_time']}</td>";
            }

            $table .= "</tr>";
        }

        $table .= "</table>";

        $filename = date('Ymdhis');

        header('Pragma:public');

        header('Expires:0');

        header('Content-Type:charset=utf-8');

        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');

        header('Content-Type:application/force-download');

        header('Content-Type:application/vnd.ms-excel');

        header('Content-Type:application/octet-stream');

        header('Content-Type:application/download');

        header('Content-Disposition:attachment;filename=' . $filename . ".xls");

        header('Content-Transfer-Encoding:binary');

        if (empty($arr))

        {

            echo iconv('utf-8', 'gbk', $table);

        }

        else

            echo $table;

        exit();

    }
    /*
   * 导出分享数据
   */

    public function action_genexcel_share()

    {

        $acid    = $this ->acid;//  哪期 活动

        $time   = strtotime("2016-11-04 11:00");

        $sql =  "SELECT * FROM `sline_activity_share` ";
        if(!empty($acid)){
            $sql  .= " where act_id=$acid ";
        }else{
            $sql  .= " where act_id>0 ";
        }

        $sql  .= " and  unix_timestamp(share_time)>= $time ";

        $sql .= " order by share_time desc ";

        $arr = $this->model->get_sql($sql,1);

        $table = "<table><tr>";

        $table .= "<td>昵称</td>";

        $table .= "<td>编号</td>";

        $table .= "<td>分享页面</td>";

        $table .= "<td>分享类型</td>";

        $table .= "<td>分享时间</td>";

        $table .= "<td>是否关注</td>";

       // $table .= "<td>个人分享的总次数</td>";

        $table .= "</tr>";



        foreach ($arr as &$row)

        {
            $userinfo         =  $this->getheadurl($row['openid']);

            $row['isgz']        =  $userinfo['is_gz']=='1'?'关注' :'未关注';

            $row['share_page']  =  $this ->sharepage($row['share_page']);
            //  获得 编号
            $row['bian']        =   $this ->getbiaohao($acid,$row['openid']);
            // 获得中次数     =
           // $row['share_all']   =  $this ->getshareall($row['openid']);
            $row['share_type']  = $row['share_type']==1 ? '朋友圈' : '好友';


            $table .= "<tr>";

            $table .= "<td>{$row['nickname']}</td>";

            $table .= "<td>{$row['bian']}</td>";

            $table .= "<td>{$row['share_page']}</td>";

            $table .= "<td>{$row['share_type']}</td>";

            $table .= "<td>{$row['share_time']}</td>";

            $table .= "<td>{$row['isgz']}</td>";

          //  $table .= "<td>{$row['share_all']}</td>";

            $table .= "</tr>";

        }

        $table .= "</table>";

        $filename = date('Ymdhis');

        header('Pragma:public');

        header('Expires:0');

        header('Content-Type:charset=utf-8');

        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');

        header('Content-Type:application/force-download');

        header('Content-Type:application/vnd.ms-excel');

        header('Content-Type:application/octet-stream');

        header('Content-Type:application/download');

        header('Content-Disposition:attachment;filename=' . $filename . ".xls");

        header('Content-Transfer-Encoding:binary');

        if (empty($arr))

        {

            echo iconv('utf-8', 'gbk', $table);

        }

        else

            echo $table;

        exit();

    }
    public  function getshareall($openid,$acid){
        //if($_SESSION['openid']=="$openid"){
            $sql = " select share_num from `sline_activity_player` where act_id= $acid and openid ='$openid'";
            $share = DB::query(1,$sql)->execute()->get('share_num');
            return $share;
//        }else{
//            return '';
//        }

    }
    public function  action_checkip(){
        header("Content-type: text/html; charset=utf-8");
        $admin =$this->admin;
         if(empty($admin)){

             $url = 'www.aitto.net/newtravel/index';
             echo "<script>window.location.href=".$url."</script>";
         }else{
             if($admin=='feng'){

                 $sql  ="SELECT `openid`, `helpip` FROM `sline_activity_helper` WHERE helpip!='' ORDER by id asc limit 4300,200";

                 $re   =$this  ->model->get_sql($sql,1);
                 foreach($re as $v){

                     $data =$this->baiduip($v['helpip']);
                     $file = fopen('ip.txt','a+');
                     fwrite($file,date('Y-m-d H:i:s').".返回数据：".var_export($data,true)."\r\n");
                     fclose($file);
                     if($data['city']=='石家庄'){
                         $sql ="UPDATE `bbs_hjbox_users` SET `isSJZ`=1 WHERE openid='$v[openid]'";
                         $this  ->model->get_sql($sql,1);
                     }

                 }
                //  var_dump($re);
             }else{

                 exit("你没有管理权限");
             }
         }
    }
    //获取 判断 ip  是否属于石家庄
    private function get_ip_data($ips){
        //  淘宝code 的int(0) 代表 成功   1  代表失败  当ip 为空 或者错误的ip 返回的code ==1
        /*
         *  淘宝返会的 城市码：city 参数为 ‘石家庄市’ 有城市city_id 字符串''
         *  百度 api  城市码 ：city 参数为‘石家庄’  没有城市ctity_id
         */
        $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ips;

        $data= $this ->curl($url);

        if($data['code']==0){
            return $data['data'];
        }else{
            $data= $this->baiduip($ips);
            return $data['retData'];
        }

    }
    private function baiduip($ip){

        $url = 'http://apis.baidu.com/apistore/iplookupservice/iplookup?ip='.$ip;
        $header = array(
            'apikey:fd697fa125b0a185069a90af48f0db18',
        );
        $data= $this ->curl($url,$header);

        return $data['retData'];

    }
    private  function  curl($url,$header=null){
        $ch = curl_init();

        // 添加apikey到header
        if($header!=null){
            curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);

        $res = curl_exec($ch);

        return json_decode($res,true);
    }
    /**
     * 是否为石家庄ip
     * return 1(限制区域内),0
     */
    private function isSJZ(){
        $tpip = $this->GetIP();

        $ipdata = $this->get_ip_data($tpip);

        $file = fopen('ip.txt','a+');
        fwrite($file,"ip为:".$tpip."的用户；调用接口返回的数据：".var_export($ipdata)."。时间：".time()."\r\n");
        fclose($file);
        if($ipdata['city_id'] == '130100'||$ipdata['city']=='石家庄'){
            return 1;
        }else{
            return 0;//超出区域限制
        }
    }
    private function GetIP(){


        $ip=false;
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if(count($ips)<2){
                $ips = explode (",", $_SERVER['HTTP_X_FORWARDED_FOR']);
            }
            if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
            for ($i = 0; $i < count($ips); $i++) {
                if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        // echo 'ip:'.$ip."<br/>";
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

    public  function updateuser($openid,$s){
        $openid  = trim($openid);
        $arr  = self::getUsersMes($openid);
        //return $arr;
        if(empty($arr['errcode'])) {
            if($arr['subscribe']==1){
                if($s==3) {
                    $sql = "INSERT INTO `bbs_hjbox_users`(`openid`) VALUES ('$openid')";

                    $re = DB::query(1, $sql)->execute();
                }
                $sql = "UPDATE `bbs_hjbox_users`  SET `nickname`='$arr[nickname]',`sex`='$arr[sex]',`city`='$arr[city]',`country`='$arr[country]',`province`='$arr[province]',`headimgurl`='$arr[headimgurl]',`is_gz`=1 WHERE openid='$openid'";
                DB::query(1, $sql)->execute();
            }else{
                return '已取消关注';
            }

            return 'ok';
        }else{
            $sql = "UPDATE `bbs_hjbox_users`  SET `is_gz`=1 WHERE openid='$openid'";
            DB::query(1, $sql)->execute();

            return  $arr['errmsg'];
        }


    }
    //====批量 获取用户信息
    public  function   get_AUsers_Mes($data){
        $access_token=self::get_access_token('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
        $url = "https://api.weixin.qq.com/cgi-bin/user/info/batchget?access_token=".$access_token;
        $re  = self::curls($url,$type='post',$res='json',$data);
        return $re;
    }
    //获取 用户的  信息
    public function getUsersMes($openid){
        $access_token=self::get_access_token('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
        $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
        //2初始化
        $ch = curl_init();
        //3.设置参数
        curl_setopt($ch , CURLOPT_URL, $url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        //4.调用接口
        $res = curl_exec($ch);
        //5.关闭curl
        curl_close( $ch );
        if( curl_errno($ch) ){
            return ( curl_error($ch) );
        }
        $arr = json_decode($res, true);
        return $arr;
    }
    /**
     * 获取access_token
     */
    private function get_access_token($appid,$appsecret){
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
        $data = json_decode(file_get_contents($url),true);
        if($data['access_token']){
            return $data['access_token'];
        }else{
            return "";
        }
    }
    /*
    * $url 接口的URL string
    * $type 请求的类型string
    * $res  返回数据类型string
    * $arr  post 请求参数 string
    *
    * */
    public function  curls($url,$type='post',$res='json',$arr=''){
        $ch = curl_init();
        //3.设置参数
        curl_setopt($ch , CURLOPT_URL, $url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        if($type=='post'){
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
        }
        //4.调用接口
        $output = curl_exec($ch);
        //5.关闭curl
        curl_close( $ch );
        if( curl_errno($ch) ){
            var_dump( curl_error($ch) );
        }
        if($res=='json'){
            $arrs = json_decode($output, true);
        }
        return $arrs;
    }
}