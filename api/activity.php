<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);

include_once ('db.php');



//$s   = new Activity();
//echo $s -> action_ajax_addPart('oyq3hv_jdG4ctOudu1S651npEyTc',13931993592);

class Activity
{
    private $activity_id;
    public  $ceshi = 222;
    public function __construct($_db)
    {
        $this ->activity_id = 9;//7;
        $this->_db        = $_db;
        $sql  = "select * from `sline_weixin` where jk_model='服务号' ";
        $serviceNum         = $this->_db->get_all($sql);
        //var_dump($serviceNum);
    }
    /**
     *ajax参加活动
     *  $openid  参赛 用户 openid
     *  $phone   参赛用户  手机
     *  获取 nicnknanme
     */
    public function action_ajax_addPart($openid,$phone)
    {
       // $this->_db        = new DB();
        //  活动 表的 id
        $acid  = $this ->activity_id;

        //参与 时间
        $addtime = date('Y-m-d H:i:s', time());

        // 参赛用户名
        $nickname = self::get_nickname($openid);

        if($acid==9){
            $phone  = trim($phone);
            $openid  = trim($openid);

            //  验证 是否参加活动
            $sql = "SELECT `id` FROM `sline_activity_player` WHERE openid='$openid' and act_id=$acid";
            $re =$this->_db ->get_one($sql);
            if(empty($re)){
                // 插入 参与者 信息  注意 act_id
                $sql = "INSERT INTO `sline_activity_player`(`addtime`, `openid`, `phone`,`act_id`,`nickname`) VALUES ('$addtime','$openid','$phone',$acid,'$nickname')";
                $affectRow = $this->_db ->query($sql);//   $affectRow  布尔值
                // 更新 活动表 的参赛总人员
                if ($affectRow > 0) {
                    // 更新微信用户信息
                    $upwx_sql ="update `bbs_hjbox_users` set `telphone` ='$phone',Powder=Powder+1 where openid='$openid'";
                    $this->_db ->query($upwx_sql);


                    $sql = "UPDATE `sline_activity` SET `part_num`=part_num+1,`show_num`=show_num+1 WHERE id=$acid";
                    $this->_db ->query($sql);
                    $sql = "SELECT id FROM `sline_activity_player` WHERE act_id=$acid and openid='$openid'";
                    $aid =$this->_db ->get_one($sql);

                    $message = array('status'=>1115,'msg'=>  '参与成功','scene_id' =>$aid['id']);

                    return $message;exit;
                } else {
                    $message = array('status'=>1114,'msg'=>  '插入失败');

                     return $message;exit;
                }

            }else{
                $message = array('status'=>1113,'msg'=>'您已经参与活动，点击底部菜单我的冰雕，或回复“我的冰雕”，查看扫码数量。');
                return $message ;exit;
            }

        }

    }


    /*
     *   扫描二维码  给好友 解冻
     *
     * $helpOpenid  解冻人员 openid

     * $partid    参赛人员 id
     *
     */

    public  function  action_addhelper($helpOpenid,$partid){
        // 送票人的 openid  和  姓名
        $helperOpenid  = trim($helpOpenid);

        $helperName  = self::get_nickname($helperOpenid);

        // 活动表  id
        $acid      =$this ->activity_id;

        $helperIp  = self::GetIP();

        $time  = date("Y-m-d H:i:s",time());
        $sql  ="SELECT `id` FROM `sline_activity_helper` WHERE openid='$helperOpenid' and prid=$partid and act_id=$acid";
        $re   =$this->_db ->get_one($sql);

        if(empty($re)){

            $sql = "INSERT INTO `sline_activity_helper`(`act_id`,`prid`, `openid`, `nickname`, `helpip`, `helpime`) VALUES ('$acid','$partid','$helperOpenid','$helperName','$helperIp','$time')";

            $this->_db ->query($sql);

            $sql = "UPDATE `sline_activity` SET `help_num`=help_num+1 WHERE id=$acid";

            $this->_db ->query($sql);

            //  小于9  更新数量
           // if($getpay<10) {

                $sql = "UPDATE `sline_activity_player` SET `getpay`=getpay+1 WHERE id='$partid' and act_id =$acid";

               $l = $this->_db ->query($sql);
                if($l){
                    //  获取 得到 票数
                    $sql_play="SELECT * FROM `sline_activity_player` WHERE id='$partid' and act_id=$acid";

                    $parterinfo =  $this->_db ->get_one($sql_play);
//                    $file  = fopen('feng.txt','a+');
//                    fwrite($file,var_export($file,true));
//                    fclose($file);
                }

                $getpay =$parterinfo['getpay']*1;//
           // }

            //  获取 奖品的数量
            $sql   = "SELECT num FROM `sline_activity_prize` WHERE `act_id`=$acid";
            $num   =$this->_db ->get_one($sql);
            $nums = $num['num']*1;

            //  满足 条件 开始兑换
            if($getpay==6&&$nums>0&&$nums<201){


                $exchange_pid  =  $parterinfo['exchange_pid'];
                //  判断是否兑换过
                if(empty($exchange_pid)){

                    //4: 更新  兑换信息
                    $sql = "UPDATE `sline_activity_player` SET `exchange_pid`='$partid',`exchange_time`='$time' WHERE id='$partid' and act_id=$acid";
                    $this->_db ->query($sql);
                    // 5: 更新 商品的数量
                    $sql = "UPDATE `sline_activity_prize` SET `num`=num-1 WHERE act_id =$acid";

                    $this->_db ->query($sql);

                    $message = array('msg'=>'您已成功扫码一次，如果您未参与活动，微信回复“冰雕”即可参与本次冰雕大世界赠票活动。','status'=>3);
                     return $message;
                    exit;

                }else{
                    $message  = array("msg"=>'用户已兑换过了','status'=>2);
                    return $message;
                    exit;
                }


            }
            $message  = array("msg"=>'您已成功扫码一次，如果您未参与活动，微信回复“冰雕”即可参与本次冰雕大世界赠票活动。','status'=>1,'exchange'=> $exchange_pid);

        }else{
            $message  = array("msg"=>'您已帮好友扫码.','status'=>0);
        }

       return $message;

    }
    
    /*
      我的 排名
     $openid
     */
    public function action_rank($openid){
        //  用于 活动中的调试 页面
        $acid = $this ->activity_id;

       $openid = trim($openid);

        //  验证 是否参加活动
        $sql = "SELECT * FROM `sline_activity_player` WHERE openid='$openid' and act_id=$acid";
        $re =$this->_db ->get_one($sql);
        if(empty($re)){// 未参加

            return  $message = array('status'=>1116,'msg'=>'您还未参与活动，请回复“冰雕”参与活动');
        }else{

            // 已参加
            $sql ="select * from `sline_activity_prize` where act_id=$acid";

            $res =$this->_db ->get_one($sql);

            $num = $res['num']*1;
            // 获取 投票人员

            $sql  = "select count(*) as dd from `sline_activity_helper` where act_id=$acid and  prid=".$re['id'];
          //  return  $message = array('status'=>1116,'msg'=> $sql);
            $dd =$this->_db ->get_one($sql);
            // 用户 的票数
            $getpay   =   $re['getpay']*1;
            //  还剩与 票数
             $vars  =6;
            $piao  = $vars-$getpay;

            $piao  = $piao <0 ? 0 :$piao ;

            if($piao<1){
                 //  获得门票
                if(!empty($re['exchange_pid'])) {
                    return $message = array('status' => 1117, 'msg' => '已有'.$dd['dd'].'个好友帮您扫码，还需'.$piao.'个好友扫码，中奖名单将于1.23日17：30在底部菜单【粉丝福利—冰雕活动中奖名单】处公布');
                }
                else{
                    return  $message = array('status'=>1117,'msg'=>'已有'.$dd['dd'].'个好友帮您扫码，还需'.$piao.'个好友扫码，中奖名单将于1.23日17：30在底部菜单【粉丝福利—冰雕活动中奖名单】处公布');
                }

            }elseif($piao>0&&$piao<$vars){
                return  $message = array('status'=>1117,'msg'=>'已有'.$dd['dd'].'个好友帮您扫码，还需'.$piao.'个好友扫码，中奖名单将于1.23日17：30在底部菜单【粉丝福利—冰雕活动中奖名单】处公布');
            }elseif($piao==$vars){
                return  $message = array('status'=>1117,'msg'=>'已有'.$dd['dd'].'个好友帮您扫码，还需'.$piao.'个好友扫码，中奖名单将于1.23日17：30在底部菜单【粉丝福利—冰雕活动中奖名单】处公布。
');
            }else{
                // 未或得 门票
                return  $message = array('status'=>1118,'msg'=>'已有'.$dd['dd'].'个好友帮您扫码，还需'.$piao.'个好友扫码，中奖名单将于1.23日17：30在底部菜单【粉丝福利—冰雕活动中奖名单】处公布。');
            }


        }

    }
/*
 *   获取微信名
 */
    public  function  get_nickname($openid){

        $sql = "select nickname from `bbs_hjbox_users` where openid ='$openid'";
        $re = $this ->_db ->get_one($sql);
        return $re['nickname'];
    }
/*
 *  获取 ip
 */
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









}
