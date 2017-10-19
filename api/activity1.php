<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
include_once ('db.php');
class Activity
{
    private $activity_id;
    public function __construct()
    {
        $this ->activity_id = 7;
        $this->_db        = new DB();
        $sql  = "select * from `sline_weixin` where jk_model='服务号' ";
        $serviceNum         = $this->_db->get_all($sql);
    }
    /**
     *ajax参加活动
     */
    public function action_ajax_addPart()
    {
        //  活动 表的 id
        $acid  = $this ->activity_id;

        //
        // $admin = Common::remove_xss(Arr::get($_GET, ''));
        //参与 时间
        $addtime = date('Y-m-d H:i:s', time());
        //
        if($acid==2){
            $openid = Common::remove_xss(Arr::get($_POST, 'ispart'));
            $phone  = Common::remove_xss(Arr::get($_POST, 'phone'));

            //  验证 是否关注
            $isGz = $this->isAttentionByOpenid($openid);

            if($isGz=='0'){
                $message = array('status'=>1111,'msg'=>'你还未关注公众号','openid'=>33333);
                echo json_encode($message);exit;
            }

            //  验证 是否符合 石家庄地区
//          $inSJZ = $this->isSJZ();
//          if ($inSJZ == '0') {
//              $message = array('status'=>1112,'msg'=>'您不在石家庄地区');
//              echo json_encode($message);exit;
//          }

            //  验证 是否参加活动
            $sql = "SELECT `id` FROM `sline_activity_player` WHERE openid='$openid' and act_id=$acid";
            $re = DB::query(1, $sql)->execute()->as_array();
            if(empty($re)){
                // 插入 参与者 信息  注意 act_id
                $sql = "INSERT INTO `sline_activity_player`(`addtime`, `openid`, `phone`,`act_id`) VALUES ('$addtime','$openid','$phone',$acid)";
                $affectRow = DB::query(1, $sql)->execute();
                // 更新 活动表 的参赛总人员
                if ($affectRow > 0) {
                    $sql = "UPDATE `sline_activity` SET `part_num`=part_num+1,`show_num`=show_num+1 WHERE id=$acid";
                    DB::query(1, $sql)->execute();
                    $sql = "SELECT id FROM `sline_activity_player` WHERE act_id=$acid and openid='$openid'";
                    $aid =DB::query(1, $sql)->execute()->get('id');

                    $message = array('status'=>1115,'msg'=>  '参与成功','aid' =>$aid);

                    echo json_encode($message);exit;
                } else {
                    $message = array('status'=>1114,'msg'=>  '插入失败');

                    echo json_encode($message);exit;
                }

            }else{
                $message = array('status'=>1113,'msg'=>'您已经参与活动');
                echo json_encode($message);exit;
            }

        }elseif($acid==1) {

            $pid = Common::remove_xss(Arr::get($_POST, 'pid'));
            $openid = Common::remove_xss(Arr::get($_POST, 'isPart'));
            if (empty($pid)) {
                echo 1115;
                exit;
            }//为空

            //判断是否关注
            //var_dump($openid);exit;
            $isGz = $this->isAttentionByOpenid($openid);
            if ($isGz == '0') {
                echo 1111;
                exit;
            } else {
                $inSJZ = $this->isSJZ();
                if ($inSJZ == 0) {
                    echo 1112;
                    exit;
                }
                $sql = "SELECT `id` FROM `sline_activity_player` WHERE openid='$openid'";
                $re = DB::query(1, $sql)->execute()->as_array();
                if (empty($re)) {//没有参加活动
                    $sql = "INSERT INTO `sline_activity_player`(`addtime`, `openid`, `expect_pid`) VALUES ('$addtime','$openid','$pid')";
                    $affectRow = DB::query(1, $sql)->execute();
                    if ($affectRow > 0) {
                        $sql = "UPDATE `sline_activity` SET `part_num`=part_num+1,`show_num`=show_num+1 WHERE id=1";
                        DB::query(1, $sql)->execute();
                        echo 1;
                        exit;
                    } else {
                        echo 1114;//插入失败
                        exit;
                    }
                } else {
                    echo 1113;//已经参加活动
                    exit;
                }
            }
        }
    }
}