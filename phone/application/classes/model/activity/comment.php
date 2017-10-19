<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Activity_Comment extends ORM
{
    /*
     * 对    参数的处理的封装函数
     * $post  取值 $_GET/$_POST
     * $para  参数
     */
    public static  function handle_fun($post,$para){

        return Common::remove_xss(Arr::get($post,$para));
    }
    /*
     * 更新 对应活动的阅读量
     */
    public static function update_shownum($acid){
        $sql = "UPDATE `sline_activity` SET `show_num`=show_num+1 WHERE id=$acid";
        DB::query(1, $sql)->execute();
    }
    /*
     * 获取 对应活动的奖品内容
     */
    public  static function get_prize($acid){
        $sql     = "SELECT * FROM `sline_activity_prize` WHERE `act_id`=$acid";
        $proinfo =  DB::query(1,$sql)->execute()->as_array();
        return $proinfo;
    }
    /*
     * 判断用户 是否参与该期活动
     * $acid 该期活动的id
     *
     */
    public  static function is_joinpart($acid,$openid){
        $sql = "select `id` from `sline_activity_player` where `act_id`=$acid and openid='$openid'";
        $player_id = DB::query(1, $sql)->execute()->as_array();
        return $player_id;
    }
    /*
     *  显示兑换数据 0,20条
     */
    public  static function exchangeinfo($acid){
        $sql = "SELECT a.exchange_time,b.nickname FROM `sline_activity_player` a LEFT JOIN `bbs_hjbox_users` b ON a.openid=b.openid  WHERE a.exchange_pid != 0 and a.act_id=$acid ORDER BY a.exchange_time DESC limit 0,20";
        return  $exchangelist = DB::query(1, $sql)->execute()->as_array();
    }
    /*
     * ========================
     *    index 方法结束
     *
     * ========================
     */
    /*
     * 根据 show_***.html 根据 参数***获取 参赛人的信息
     *
     */
    public static function get_playerinfo($playerid){

        $sql = "select * from sline_activity_player where id='$playerid'";
        $player_info = DB::query(1, $sql)->execute()->as_array();
        return $player_info;
    }
    /*
     *  没有参赛人员的id
     * 根据 登录页面的人员的openid 和 活动的id $acid 获取
     *
     */
    public static function get_playerinfo2($acid,$openid){
        $sql = "select * from sline_activity_player where act_id= $acid and openid='$openid'";
        $player_info = DB::query(1, $sql)->execute()->as_array();
        return $player_info;
    }
    /*
     *   获取投票人的信息/获取参赛人的信息
     *   $get 用于是否获取特定字段的信息
     */
    public  static function get_voterinfo($openid,$get=null){

        $sql_helperinfo = "SELECT * FROM `bbs_hjbox_users` WHERE openid='$openid'";

        if($get==null){
            $helperinfo = DB::query(1, $sql_helperinfo)->execute()->as_array();
        }else{
            $helperinfo = DB::query(1, $sql_helperinfo)->execute()->get("$get");
        }
        return $helperinfo;
    }
    /*
     * 获取投票的人员
     */
    public static function get_helper($acid,$playerid,$offset,$pagesize){

        $sql  = "SELECT * FROM `sline_activity_helper` WHERE act_id =$acid and prid='$playerid' order by id desc limit $offset,$pagesize";

        $re   = DB::query(1, $sql)->execute()->as_array();
    }
    //=========================
    /*
     *   分享 统计
     */
    /*
     * 更新 对应活动的阅读量
     */
    public static function update_sharenum($acid){
        $sql = "UPDATE `sline_activity` SET `share_num`=share_num+1 WHERE id=$acid";
        DB::query(1, $sql)->execute();
    }
    //========================================
    /*
     * 活动 3  不能死
     */
    // 判断 参与的用户是否分享
    public static function is_share($acid,$openid){
        $sql = "SELECT * FROM `sline_activity_player` WHERE `act_id` = $acid AND `openid`='$openid'";
        $arr  = DB::query(1, $sql)->execute()->get('is_share');
        return $arr;
    }
    //  更新成绩   $time=成绩

    public  static function update_time($acid,$openid,$time){

        $sql = "SELECT `best_time` FROM `sline_activity_player` WHERE act_id = $acid and openid ='$openid'";
        $arr  = DB::query(1, $sql)->execute()->as_array();
        $addtime = date('Y-m-d H:i:s');
        if(empty($arr)){
            $sql  = "INSERT INTO `sline_activity_player`(`act_id`,`openid`,`addtime`, `best_time`) VALUES ($acid,'$openid','$addtime',$time)";
            DB::query(1, $sql)->execute();
            $message  = array("status"=>2,'msg'=>'参与成功');
        }else{
            $besttime  = $arr[0]['best_time']*1;
            if($besttime>$time){
                $message  = array("status"=>0,'msg'=>'不是最好成绩');
            }
            else{
                $sql = "UPDATE `sline_activity_player` SET `best_time`=$time WHERE act_id=$acid and openid='$openid'";
                DB::query(1, $sql)->execute();
                $message  = array("status"=>1,'msg'=>'ok','arrtime'=>$arr[0]['best_time']);

            }
        }
        return $message;
    }
    //  获取 share 未分享的三次机会
    public static  function getsharenum($openid){
        $sql = "SELECT  `share` FROM `bbs_hjbox_users` WHERE openid='$openid'";
        $arr  = DB::query(1, $sql)->execute()->get('share');
        return $arr;

    }
    //  未分享  更新 用户玩的次数
    public static  function updatesharenum($openid){
        $sql = "UPDATE `bbs_hjbox_users` SET `share`=share+1 WHERE  openid='$openid'";
        DB::query(1, $sql)->execute();
    }
    //  未分享  更新 用户玩的次数
    public static  function update_play_sharenum($openid){
        $sql = "UPDATE `sline_activity_player` SET `play_num`=play_num+1 WHERE  openid='$openid'";
        DB::query(1, $sql)->execute();
    }
    //  更新用户的 的  分享的状态
    public static function update_user_isshare($openid,$acid){
        $sql ="UPDATE `sline_activity_player` SET `is_share`=2,`share_num`=share_num+1 WHERE act_id=$acid and openid='$openid'";
        DB::query(1, $sql)->execute();

    }
    //1 判断 进入页面的用户 与 参赛 id 的关系 从而知道是自己查看页面还是他人查看
    public  static function getplayerinfo($playerid,$acid,$openid){
        if (!empty($playerid)) {
            $sql = "select * from sline_activity_player where id='$playerid'";
            $player_info = DB::query(1, $sql)->execute()->as_array();

        }else {
            $sql = "select * from sline_activity_player where act_id= $acid and openid='$openid'";
            $player_info = DB::query(1, $sql)->execute()->as_array();
        }
        if($acid==3&&!empty($player_info)){
            foreach ($player_info as &$v){
                $v['best_time'] = $v['best_time']*1/1000;
            }
        }
        return $player_info;
    }
    public static function getUserRank($openid,$acid){
        $sql  =  "SELECT openid FROM `sline_activity_player` ";

        $sql .= " where act_id =$acid  ";

        $sql .= " order by best_time desc ";

        $arr  = DB::query(1,$sql)->execute()->as_array();

        foreach($arr as $k =>$v){
            if($v['openid']==$openid){
                $rank = $k+1;
                return $rank;
            }
        }


    }
    public  static  function updatepartnum($acid){
        $sql = "UPDATE `sline_activity` SET `part_num`=part_num+1 WHERE id=$acid";
        DB::query(1, $sql)->execute();
    }


}