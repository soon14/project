<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Member_Register
 * 会员注册
 */
class Controller_Member_Register extends Stourweb_Controller
{

    //注册首页
    public function action_index()
    {

        $forwardurl = Arr::get($_GET,'forwardurl');
        $forwardurl = empty($forwardurl) ? $GLOBALS['cfg_basehost'].'/member/' : $forwardurl;
        $this->assign('backurl',$forwardurl);

        $msgInfo = Product::get_define_msg(1,3,'reg_msgcode'); //检查是否开启手机短信验证
        if($msgInfo['isopen']==1)
        {
            $msgCode = 'shortmsg';
        }
        else
        {
            $msgCode = 'txtcode';
        }
        //邮件验证码是否开启
        $emailCode = 0;
        $emailInfo= Product::get_email_msg_config('reg_msgcode');
        if(!empty($emailInfo)&&$emailInfo['isopen']==1)
        {
            $emailCode=1;
        }
        //token
        $token = md5(time());
        //$token = 'testnetman';
        Common::session('crsf_code',$token);
        $this->assign('frmcode',$token);
        $this->assign('msgcode',$msgCode);
        $this->assign('emailcode',$emailCode);

        $templet = Product::get_use_templet('member_reg');//获取使用模板
        $templet = !empty($templet) ? $templet : 'member/register';
        $this->display($templet);
    }

    /*执行用户注册*/
    public function action_ajax_doreg()
    {


        $fromUrl = Arr::get($_POST,'fromurl');//来源页面
        $fromurl = empty($fromUrl) ? $GLOBALS['cfg_basehost'].'/member/' : $fromUrl;
        $frmCode = Arr::get($_POST,'frmcode');
        //安全校验码验证
        $orgCode = Common::session('crsf_code');
        if($orgCode!=$frmCode)
        {

            echo json_encode(array('status'=>0,'msg'=>'安全检验码错误'));
            exit;
        }
        else
        {
            //Common::session('crsf_code',null);
        }

        $joinTime = time();
        $joinIp = Common::get_ip();
        //网上注册赠送积分
        $jifen = empty($GLOBALS['cfg_reg_jifen']) ? 0 : $GLOBALS['cfg_reg_jifen'];
        $regType = Arr::get($_POST,'regtype');
        $m = ORM::factory('member');
        //通过手机注册
        if($regType == 'phone')
        {
//            $p_checkcode = Arr::get($_POST,'p_checkcode');
//            //验证码验证
//            if(!Captcha::valid($p_checkcode) || empty($p_checkcode))
//            {
//                echo json_encode(array('status'=>0,'msg'=>'验证码错误'));
//                exit;
//            }
//            else
//            {
//                //清空验证码
//                Common::session('captcha_response',null);
//            }
            $mobile = Arr::get($_POST,'mobile');
              $checkphone  =  Model_Member::check_member_exist2($mobile);
            //检测手机是否重复
            if($checkphone['flag']==1)
            {
                echo json_encode(array('status'=>0,'msg'=>'手机号重复'));
                exit;
            }elseif($checkphone['flag']==2){
                $m = ORM::factory('member',$checkphone['userid']);
            }

            //检查是否开启手机短信验证
            $msgInfo = Product::get_define_msg(1,3,'reg_msgcode');
            if($msgInfo['isopen']==1)
            {
                $msgCode = Arr::get($_POST,'msgcode');
                if(Common::session('mobilecode_'.$mobile) != $msgCode)
                {
                    exit('error msgcode');
                }
            }
            $password1 = Arr::get($_POST,'password1');
            $password2 = Arr::get($_POST,'password2');
            if($password1 != $password2)
            {
                echo json_encode(array('status'=>0,'msg'=>'密码不一致'));
                exit;
            }
            //昵称
            $nickname = preg_replace("/(d{3})d{5}/","$1*****",$mobile);

            $m->mobile = $mobile;
            $m->pwd = md5($password1);
            $m->jointime = $joinTime;
            $m->joinip = $joinIp;
            $m->jifen = $jifen;
            $m->nickname = $nickname;
            $m->regtype = 0;

            $uc_username = $mobile;
            $uc_password = $password1;
            $uc_email = $mobile."@qq.com";

            $login_user = $mobile;
            $login_pass = $password1;
        }
        //邮箱注册
        else if($regType == 'email')
        {
            $e_checkcode = Arr::get($_POST,'e_checkcode');
            //验证码验证
            if(!Captcha::valid($e_checkcode) || empty($e_checkcode))
            {
                echo json_encode(array('status'=>0,'msg'=>'验证码错误'));
                exit;
            }
            else
            {
                //清空验证码
                Common::session('captcha_response',null);
            }
            $email = Arr::get($_POST,'email');

            //检测邮箱是否重复
            if(Model_Member::check_member_exist($email))
            {
                echo json_encode(array('status'=>0,'msg'=>'邮箱重复'));
                exit;
            }


            //检测邮箱短信验证码是否开起
            $emailInfo= Product::get_email_msg_config('reg_msgcode');
            if(!empty($emailInfo)&&$emailInfo['isopen']==1)
            {

                $emailCode = Arr::get($_POST,'e_email_code');
                $email = Arr::get($_POST,'email');
                if(Common::session('emailcode_'.md5($email)) != $emailCode)
                {
                    //echo json_encode(array('status'=>0,'msg'=>'邮箱验证码错误'));
                    exit;
                }

            }
            $e_password1 = Arr::get($_POST,'e_password1');
            $e_password2 = Arr::get($_POST,'e_password2');
            if($e_password1 != $e_password2)
            {
                echo json_encode(array('status'=>0,'msg'=>'两次密码不匹配'));
                exit;
            }

            $m->email = $email;
            $m->pwd = md5($e_password1);
            $m->jointime = $joinTime;
            $m->joinip = $joinIp;
            $m->jifen = $jifen;
            $m->nickname = $email;
            $m->regtype = 1;

            $uc_username = $email;
            $uc_password = $e_password1;
            $uc_email = $email;

            $login_user = $email;
            $login_pass = $e_password1;
        }
        $m->save();
        if($m->saved())
        {

             $member = Model_Member::login($login_user, $login_pass);
             //增加积分记录
             if(!empty($jifen))
             {
                 Product::add_jifen_log($member['mid'],"注册赠送积分{$jifen}",$jifen,2);
             }

            //注册短信是否开启
            $msgInfo = Product::get_define_msg(0);
            if($msgInfo['isopen']==1 && $regType=='phone') //如果开启
            {
                // $nickname = !empty($nickname) ? $nickname : $mobile;
                $content = $msgInfo['msg'];
                $content = str_replace('{#LOGINNAME#}',$login_user,$content);
                $content = str_replace('{#PASSWORD#}',$login_pass,$content);
                $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);
                $content = str_replace('{#EMAIL#}',$GLOBALS['cfg_email'],$content);
                $content = str_replace('{#PHONE#}',$GLOBALS['cfg_phone'],$content);
                Product::send_msg($mobile,$mobile,$content);

            }
            //注册邮箱是否开启
            $email_reg_info= Product::get_email_msg_config('reg');
            if($email_reg_info['isopen']==1 && $regType=='email')
            {
                $title='邮箱注册成功';
                $content =$email_reg_info['msg'];
                $content = str_replace('{#PASSWORD#}',$e_password1,$content);
                $content = str_replace('{#EMAIL#}',$email,$content);
                $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);
                Product::order_email($email,$title,$content);
            }

            if(strpos($fromurl, 'findpass') !== false || strpos($fromurl, 'reg')!== false || strpos($fromurl, 'login')!== false)
            {


                $fromurl = $GLOBALS['cfg_basehost'];
            }

            //ucenter检测同步注册功用
            $ucsynlogin = '';
            if(defined('UC_API') && @include_once BASEPATH.'/uc_client/client.php')
            {
                $uid = uc_user_register($uc_username, $uc_password, $uc_email);
                if($uid <= 0)
                {
                  /*  if($uid == -1)
                    {
                        echo '用户名不合法';
                    }
                    elseif($uid == -2)
                    {
                        echo '包含要允许注册的词语';
                    }
                    elseif($uid == -3)
                    {
                        echo '用户名已经存在';
                    }
                    elseif($uid == -4)
                    {
                        echo 'Email 格式有误';
                    }
                    elseif($uid == -5)
                    {
                        echo 'Email 不允许注册';
                    }
                    elseif($uid == -6)
                    {
                        echo '该 Email 已经被注册';
                    }
                    else
                    {
                        echo '未定义';
                    }*/
                }
                else
                {
                    $ucsynlogin = uc_user_synlogin($uid);
                }
            }

            echo json_encode(array('status'=>1,'js'=>$ucsynlogin,'msg'=>'注册成功'));
            exit;
        }
        else
        {
            echo json_encode(array('status'=>0,'msg'=>'注册失败'));
            exit;
        }









    }

    //检测手机是否注册
    public function action_ajax_reg_checkmobile()
    {

        $inputMobile = Arr::get($_POST,'mobile');
        $flag = Model_Member::check_member_exist($inputMobile);
        if(!$flag)
        {
            $flag = 'true';
        }
        else
        {
            $flag = 'false';
        }
        echo $flag;
    }

    //检测邮箱是否注册
    public function action_ajax_check_email()
    {

        $inputEmail = Arr::get($_POST,'email');
        $flag = Model_Member::check_member_exist($inputEmail);
        if(!$flag)
        {
            $flag = 'true';
        }
        else
        {
            $flag = 'false';
        }
        echo $flag;
    }

    /*
     * 检测手机短信验证码是否正确
     * */
    public function action_ajax_check_msgcode()
    {
        $msgCode = Arr::get($_POST,'msgcode');
        $mobile = Arr::get($_POST,'mobile');
        $flag = 'false';
        if(Common::session('mobilecode_'.$mobile) == $msgCode)
        {
            $flag = 'true';
           // Common::session('mobilecode_'.$mobile,null);
        }
        echo $flag;

    }


    /**
     * 发送短信验证码
     */



    public function action_ajax_send_msgcode()
    {

        $mobile = Arr::get($_POST,'mobile');//手机
       // $pcode = Arr::get($_POST,'pcode');//验证码
        $token = Arr::get($_POST,'token');//
        $curtime=time();

        //安全校验码验证
        $orgCode = Common::session('crsf_code');
        if($orgCode!=$token)
        {
            echo json_encode(array('status'=>false,'msg'=>'检验码错误'));
            exit;
        }

        //验证码验证
//        if(!Captcha::valid($pcode) || empty($pcode))
//        {
//            echo json_encode(array('status'=>false,'msg'=>'验证码错误'));
//            exit;
//        }
        Common::session('captcha_response','');

        //手机号验证
        if(empty($mobile))
        {
            echo json_encode(array('status'=>false,'msg'=>'手机号不能为空'));
            exit;
        }
        else
        {
            $sentNum = Common::session('sendnum_'.$mobile); //已发验证码次数
            $lastSentTime = Common::session('senttime_'.$mobile);//上次发送时间
            $sentNum = empty($sentNum) ? 0 : $sentNum;
            $lastSentTime=empty($lastSentTime)?0:$lastSentTime;

            if($sentNum<3&&$sentNum>0&&$lastSentTime>($curtime-60))
            {
                echo json_encode(array('status'=>false,'msg'=>'验证码发送过于频繁，请稍后再试'));
                exit;
            }

            if($sentNum>=3&&$lastSentTime>($curtime-60*15))
            {
                echo json_encode(array('status'=>false,'msg'=>'验证码发送过于频繁，15分钟后再试'));
                exit;
            }

            $code =  Common::get_rand_code(5);//验证码
            $msgInfo = Product::get_define_msg(0,0,'reg_msgcode');

            $content = $msgInfo['msg'];
            $content = str_replace('{#CODE#}',$code,$content);
            $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);
            $content = str_replace('{#PHONE#}',$GLOBALS['cfg_phone'],$content);
            $flag = Product::send_msg($mobile,'',$content);

            if($flag->Success)//发送成功
            {

                Common::session('senttime_'.$mobile,$curtime);
                $sentNum=$sentNum>=3?0:$sentNum+1;
                Common::session('sendnum_'.$mobile,$sentNum);
                Common::session('mobilecode_'.$mobile,$code);
                echo json_encode(array('status'=>true,'msg'=>'验证码发送成功'));
            }
            else
            {
                //暂时找不到好的解决方案
//                echo json_encode(array('status'=>false,'msg'=>'验证码发送失败，请重试'.$flag->Message));
                Common::session('senttime_'.$mobile,$curtime);
                $sentNum=$sentNum>=3?0:$sentNum+1;
                Common::session('sendnum_'.$mobile,$sentNum);
                Common::session('mobilecode_'.$mobile,$code);
                echo json_encode(array('status'=>true,'msg'=>'验证码发送成功'));
            }

        }

    }


    /**
     * 检测email验证码是否正确.
     */
    public function action_ajax_check_email_code()
    {
        $emailCode = Arr::get($_POST,'e_email_code');

        $email = Arr::get($_POST,'email');
        $flag = 'false';
        if(Common::session('emailcode_'.md5($email)) == $emailCode)
        {
            $flag = 'true';
            //Common::session('emailcode_'.md5($email),null);

        }
        echo $flag;


    }
    /**
     * 快捷登陆发送验证码
     */
    public function action_ajax_send_message_fast(){

        $mobile = Arr::get($_POST,'mobile');//手机
        //手机号验证
        if(empty($mobile))
        {
            echo json_encode(array('status'=>false,'msg'=>'手机号不能为空'));
            exit;
        }
        else
        {
            $code =  Common::get_rand_code(5);//验证码
            $msgInfo = Product::get_define_msg(0,0,'reg_msgcode');

            $content = $msgInfo['msg'];
            $content = str_replace('{#CODE#}',$code,$content);
            $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);
            $content = str_replace('{#PHONE#}',$GLOBALS['cfg_phone'],$content);
            $flag = Product::send_msg($mobile,'',$content);

            if($flag->Success)//发送成功
            {
                Common::session('mobilecode_'.$mobile,$code);
                echo json_encode(array('status'=>true,'msg'=>'验证码发送成功'));
            }
            else
            {
                //暂时找不到好的解决方案
               //   echo json_encode(array('status'=>false,'msg'=>'验证码发送失败，请重试'.$flag->Message));
                Common::session('mobilecode_'.$mobile,$code);
                echo json_encode(array('status'=>true,'msg'=>'验证码发送成功'));
            }

        }
    }

    /*
     * 发送邮箱验证码
     * */
    public function action_ajax_send_emailcode()
    {

        $email = Arr::get($_POST,'email');
        $pcode = Arr::get($_POST,'pcode');//验证码
        $token = Arr::get($_POST,'token');//


        //安全校验码验证
        $orgCode = Common::session('crsf_code');
        if($orgCode!=$token)
        {
            echo json_encode(array('status'=>false,'msg'=>'检验码错误'));
            exit;
        }

        //验证码验证
        if(!Captcha::valid($pcode) || empty($pcode))
        {
            echo json_encode(array('status'=>false,'msg'=>'验证码错误'));
            exit;
        }
        Common::session('captcha_response','');

        $code =  Common::get_rand_code(5);//验证码
        if(empty($email))
        {
            echo json_encode(array('status'=>true,'msg'=>'邮箱不能为空'));
            exit;
        }
        $title=$GLOBALS['cfg_webname'].'邮箱注册验证码';
        $emailInfo=Product::get_email_msg_config('reg_msgcode');
        $content =$emailInfo['msg'];
        $content = str_replace('{#CODE#}',$code,$content);
        $content = str_replace('{#EMAIL#}',$email,$content);
        $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);
        $status = Product::order_email($email,$title,$content);
        if($status)
        {

            Common::session('emailcode_'.md5($email),$code);
            echo json_encode(array('status'=>true,'msg'=>'发送邮箱验证码成功'));
        }
        else
        {
            echo json_encode(array('status'=>false,'msg'=>'发送邮箱验证码失败'));
        }

    }





}