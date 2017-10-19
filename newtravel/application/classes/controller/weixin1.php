<?php defined('SYSPATH') or die('No direct script access.');
//include(BASEPATH.'/api/weixin.php');
/**
 * 微信公众号开发
 * Class Controller_Weixin
 */


class Controller_Weixin extends Stourweb_Controller
{

    private  $parentkey = null;
    private  $itemid = null;
    private  $model;
    private  $acid ;
    public function before()
    {
        parent::before();
        $model            = new Model_Nav();
        $this ->model     =$model;
        $sql              = "SELECT * FROM `sline_weblist`";
        $weblist          = $model->get_sql($sql,1);
        $sql      ="SELECT * FROM `sline_activity` where ishidden=2";
        $activity =  $model->get_sql($sql,1);
        $this ->acid =$activity[0]['id'];
        $this->assign('weblist',$weblist[0]);
        $this->assign('parentkey', $this->params['parentkey']);

    }
    //微信基本信息
    public function action_index(){

      //  $model            = new Model_Nav();
        $sql              = "SELECT * FROM `sline_weixin` WHERE jk_model='服务号'";
        $s                = $this->model->get_sql($sql,1);
        $this->assign('info', $s[0]);
        $this->display('stourtravel/weixin/index');
    }
    //微信菜单列表
    public function action_ajax_selchange(){
        $model            = new Model_Nav();
        $sql              = "select * from `sline_weixin` where jk_model='$_POST[sel]'";
        $s                =  $model ->get_sql($sql,1);
        $s                =$s[0];
        echo json_encode($s);
    }
    //图文 删除
    public  function  action_tuwenDel(){
         $model   = new Model_Nav();
         $id     = $_POST['id'];
         $sql     ="delete from `sline_wximagenews` where id='$id'";
         $r       =  $model   ->query($sql);
         echo $r;

    }
    public  function action_updateuser(){
        $openid  = Arr::get($_POST,'openid');
        $arr  = self::getUsersMes($openid);
        if(empty($arr['errcode'])) {
            $sql = "UPDATE `bbs_hjbox_users`  SET `nickname`='$arr[nickname]',`sex`='$arr[sex]',`city`='$arr[city]',`country`='$arr[country]',`province`='$arr[province]',`headimgurl`='$arr[headimgurl]' WHERE openId='$openid'";
            DB::query(1, $sql)->execute();
            echo 'ok';
        }else{
            echo $arr['errmsg'];
        }


    }
    public function action_changes(){




        $radio_val = Arr::get($_POST,'radio')*1;

        $mulu_id   = Arr::get($_POST,'mulu');


        if(!empty($mulu_id)){

            $sql = "UPDATE `sline_wxaddmenu` SET `is_show`=$radio_val  WHERE id= $mulu_id";
            DB::query(1,$sql)->execute();

            echo '~修改成功~';exit;

        }




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

    //图文加载页面
    public function action_imageNews(){
        $model         = new Model_Nav();
        $sql           ="SELECT * FROM `sline_wximagenews`";
        $re            = $model-> get_sql($sql,1);
        $this ->assign('new',$re);
        $this ->display('stourtravel/weixin/image_text');
    }
    // 增加 图文 信息
    public function  action_addimageNews(){
        $model            = new Model_Nav();
        $keywords       =  $_POST['keywords'];
        $title          =  $_POST['title'];
        $imgAddress     =  $_POST['imgAddress'];
        $imgLinkAddress =  $_POST['imgLinkAddress'];
        $status         =  $_POST['status'];
        $sort           =  $_POST['sort'];
        $description    =  $_POST['description'];
        $update_id      =  $_POST['update_id'];
        $time           =time();
        if($update_id==-1){
        $sql            ="INSERT INTO `sline_wximagenews`(`keywords`, `title`, `content`, `pic`, `url`, `type`, `state`, `sort`, `is_openid`, `add_time`) VALUES ('$keywords','$title','$description','$imgAddress','$imgLinkAddress','暂时未用','未用','$sort','$status','$time')";
        $s              =  $model -> query($sql);
        if($s==1){echo "添加图文成功";}else{echo '添加失败';}
        }else{
          $sql          ="UPDATE `sline_wximagenews` SET `keywords`='$keywords',`title`='$title',`content`='$description',`pic`='$imgAddress',`url`='$imgLinkAddress',`type`='暂时未用',`state`='未用',`sort`='$sort',`is_openid`='$status',`add_time`='$time' WHERE id='$update_id'";
          $s            =  $model -> query($sql);
          if($s==1){echo "更新成功";}else{echo "更新失败";}
        }

    }

    //微信菜单添加
    public function action_zdy_menu(){
        $model            = new Model_Nav();
        $sql              = "SELECT * FROM `sline_wxaddmenu` where pid=0";
        $s                = $model->get_sql($sql,1);
        $sql              = "select * from `sline_wxaddmenu` where pid!=0";
        $r                = $model-> get_sql($sql,1);
        $this -> assign('z_menu',$r);
        $this->assign('menu',$s);
        $this ->display('stourtravel/weixin/zdy_menu');
    }
    //微信公众号 用戶管理
    public function action_usermana(){

        $perNumber        =  50;
        $page             =  $_GET['page'];
        $keywords  = trim($_GET['keywords']);
        $sql              = "SELECT COUNT(*) as cou FROM `bbs_hjbox_users` where is_gz=1 ";
                        if(!empty($keywords)){
                            $sql .= " and (`nickname` like '%$keywords%' or openid like '%$keywords%') " ;
                        }
        $count            =  $this->model->get_sql($sql,1);
        $totalNumber      = $count[0]['cou'];
        $totalPage=ceil($totalNumber/$perNumber);
        if (!isset($page)) {
            $page=1;
        }
        $startCount=($page-1)*$perNumber;

        $sql              = "SELECT * FROM `bbs_hjbox_users` where is_gz=1  ";
                   if(!empty($keywords)){
                       $sql .= " and (`nickname` like '%$keywords%' or openid like '%$keywords%')" ;
                   }

                     $sql .=" ORDER by id limit {$startCount},{$perNumber}";
        $s                = $this->model->get_sql($sql,1);
        foreach($s as $k=>&$v){
            //  获取截图 分享活动的次数
            $v['cutpic']  = $this ->get_cutpic($v['openid']);
            //  获取 吸粉活动的次数
            $v['Powder']    =$this ->  get_powder($v['openid']);
        }

        $this ->assign('keywords',$keywords);
        $this->assign('userMes', $s);
        $this->assign("totalPage",$totalPage);
        $this->assign("page",$page);
        $this->assign("count",$count);
        $this->display('stourtravel/weixin/usermana');
    }
    /*
     *   获取截图 分享活动的次数
     */
    public  function get_cutpic($openid){

        $sql = "select count(*) as dd from `sline_cutPicture_user` where openid ='$openid'";
        return  DB::query(1,$sql)->execute()->get('dd');
    }
    /*
     *   获取 吸粉活动的次数
     */
    public  function get_powder($openid){
        $sql = "select count(*) as dd from `sline_activity_player` where openid ='$openid'";
        return  DB::query(1,$sql)->execute()->get('dd');
    }
    //取消用户 页面
    public function action_usermana_2(){

        $perNumber        =  50;
        $page             =  $_GET['page'];
        $sql              = "SELECT COUNT(*) as cou FROM `bbs_hjbox_users` where is_gz=0";
        $count2           =  $this->model->get_sql($sql,1);
        $totalNumber2      = $count2[0]['cou'];
        $totalPage2=ceil($totalNumber2/$perNumber);
        if (!isset($page)) {
            $page=1;
        }
        $startCount=($page-1)*$perNumber;
        $sql              = "SELECT * FROM `bbs_hjbox_users` where is_gz=0  ORDER by id limit {$startCount},{$perNumber}";
        $s2                =$this->model->get_sql($sql,1);
        $this->assign("totalPage2",$totalPage2);
        $this->assign("page",$page);
        $this ->assign("count2",$count2);
        $this->assign('userMes2', $s2);
        $this->display('stourtravel/weixin/usermana_2');
    }
    //微信公众号设置编辑
    public function action_menuEdit(){
        $jk_model         = $_POST['jk_model'];
        $sql              = "SELECT * FROM `sline_weixin` WHERE jk_model='$jk_model'";
        $s                = $this ->model->get_sql($sql,1);
        $key_word         = $_POST['key_word'];
        $image_con          = isset($_POST['image_con'])?$_POST['image_con']:$s[0]['image_con'];
        $isimage          = isset($_POST['isimages'])?$_POST['isimages']*1:$s[0]['isimage'];
        $key_con          = isset($_POST['key_content'])?$_POST['key_content']:$s[0]['key_content'];
        $is_gzhf          = isset($_POST['atten'])?$_POST['atten']:$s[0]['id_gzhf'];
        $gz_content       = isset($_POST['attens'])?$_POST['attens']:$s[0]['gz_content'];
        $wx_hao           = isset($_POST['wx_hao'])?$_POST['wx_hao']:$s[0]['wx_hao'];
        $wx_name          = isset($_POST['wx_name'])?$_POST['wx_name']:$s[0]['wx_name'];
        $wx_originalname  = isset($_POST['wx_originalname'])?$_POST['wx_originalname']:$s[0]['wx_o_name'];
        $wx_mail          = isset($_POST['wx_mail'])?$_POST['wx_mail']:$s[0]['wx_mail'];
        $tocken           = isset($_POST['api_token'])?$_POST['api_token']:$s[0]['token'];
        $Business         = isset($_POST['Business_id'])?$_POST['Business_id']:$s[0]['Business_id'];
        $appid            = isset($_POST['appid'])?$_POST['appid']:$s[0]['appid'];
        $appSecret        = isset($_POST['appSecret'])?$_POST['appSecret']:$s[0]['appsecret'];
        $CustomMenu       = isset($_POST['CustomMenu'])?$_POST['CustomMenu']:$s[0]['CustomMenu'];
        $CustomMenuDes    = isset($_POST['CustomMenuDes'])?$_POST['CustomMenuDes']: $s[0]['CustomMenuDes'];
        if(isset($s[0]['jk_model'])&&$s[0]['jk_model']=="$jk_model"){
            $sql           = "UPDATE `sline_weixin` SET `isimage`=$isimage,`image_con`='$image_con',`key_word`='$key_word',`key_content`='$key_con',`gz_content`='$gz_content',`is_gzhf`='$is_gzhf',`wx_hao`='$wx_hao',`wx_mail`='$wx_mail',`wx_name`='$wx_name',`wx_o_name`='$wx_originalname',`token`='$tocken',`Business_id`='$Business',`appid`='$appid',`appsecret`='$appSecret',`CustomMenu`='$CustomMenu',`CustomMenuDes`='$CustomMenuDes' WHERE jk_model='$jk_model'";
            $u             =  $this ->model->query($sql);
            if($u==1){
                echo 2;
            }else{
                echo "数据新旧一致";
            }

        }else{
            $sql            = "INSERT INTO `sline_weixin`(`wx_hao`, `jk_model`,`wx_mail`, `wx_name`, `wx_o_name`, `token`, `Business_id`, `appid`, `appsecret`,`CustomMenu`, `CustomMenuDes`,`is_gzhf`,`gz_content`,`key_con`,`key_word`,`isimage`,`image_con`) VALUES('$wx_hao','$jk_model','$wx_mail','$wx_name','$wx_originalname','$tocken','$Business','$appid','$appSecret','$CustomMenu','$CustomMenuDes','$is_gzhf','$gz_content','$key_con','$key_word',$isimage,'$image_con')";
            $s                = $this ->model->get_sql($sql,2);
            if($s['1']==1){
                echo 1;
            }else{
                echo "添加失败";
            }

        }

    }
    //微信菜单删除
    public function action_menuDel(){
     $model            = new Model_Nav();
     $id               = $_POST['id'];
     $sql              = "select * from `sline_wxaddmenu` where pid='$id'";
     $r2               = $model->get_sql($sql,1);
     if(!empty($r2)){
         $sql          ="delete  from `sline_wxaddmenu` where pid='$id' or id='$id'";
         $r            =    $model ->query($sql);
         echo $r;
     }
     else{
         $sql          = "DELETE FROM `sline_wxaddmenu` WHERE id='$id'";
         $r            =$model->query($sql);
         echo $r;
     }

    }
    //微信自定义菜单生成
    public function action_menuCreate(){

     $title            = $_POST['title'];
     $content          = $_POST['content'];
     $status           = $_POST['status'];
     $type             = trim($_POST['type']);
      switch($type){//  fengjishu 08.10 新增
          case "1" : $type='view';break;
          case "2" : $type='click';break;
          case "3" : $type='scancode_push';break;
          case "4" : $type='pic_photo_or_album';break;
          case "5" : $type='location_select';break;
      }
     $pid              = isset($_POST['pid'])?$_POST['pid']:0;
     $up_id            = $_POST['up_id'];
     $p_id             = $_POST['sub_menu_pid'];
     $model            = new Model_Nav();
      if($up_id==-1){
          if($p_id!=-2){
              $sql              = "INSERT INTO `sline_wxaddmenu`(`pid`, `type`, `title`, `content`, `status`) VALUES ('$p_id','$type','$title','$content','$status')";
              $s                = $model->query($sql);
              if($s==1)echo "添加子菜单成功";

          }
          else{
              $sql              = "INSERT INTO `sline_wxaddmenu`(`pid`, `type`, `title`, `content`, `status`) VALUES ('$pid','$type','$title','$content','$status')";
              $s                = $model->query($sql);
              if($s==1)echo "添加一级菜单成功";
          }
      }else{
      $sql             ="UPDATE `sline_wxaddmenu` SET `type`='$type',`title`='$title',`content`='$content',`status`='$status' WHERE id='$up_id'";
      $s               =$model ->query($sql);
         if($s==1)
         {
             echo "更新成功";
         }else{
             echo "更新失败";
         }

      }
    }

   /*
    * 编辑 手机
    */
   public  function  action_editphone(){
       $phone = trim($_POST['phone']);
       $openid= trim($_POST['openid']);
       $sql  ="UPDATE `bbs_hjbox_users` SET telphone='$phone' WHERE openid='$openid'";
       $s    =$this ->model ->query($sql);
       echo $s;
   }
    /*
   * 添加活动
   */
    public  function  action_addpart(){

        $acid  = $this ->acid;
        if(empty($acid)){
            exit('请设置第几期活动');
        }
        $phone = trim($_POST['phone']);
        $openid= trim($_POST['openid']);
        $time  =date("Y-m-d H:i:s");
        $sql  = "SELECT * FROM `sline_activity_player` where act_id=$acid and openid ='$openid'";
        $re  = $this ->model ->query($sql);
        if(empty($re)) {
            if($acid==2){
            $sql = "INSERT INTO `sline_activity_player`(`act_id`, `addtime`,  `phone`, `openid`) VALUES ($acid,'$time','$phone','$openid')";
            $s = $this->model->query($sql);
            echo $s;
            exit;
            }elseif($acid==3){
                $sql = "INSERT INTO `sline_activity_player`(`act_id`, `addtime`, `openid`,`play_num`) VALUES ($acid,'$time','$openid',0)";
                $s = $this->model->query($sql);
                echo $s;
                exit;
            }
        }else{
            echo "rrrrr";
        }

    }

}