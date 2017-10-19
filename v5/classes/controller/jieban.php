<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Jieban extends Stourweb_Controller{
    /*
     * 结伴总控制器
     * */

    private $typeid = 11;
    public function before()
    {
        parent::before();
        $channelname = Model_Nav::get_channel_name($this->typeid);
        $this->assign('typeid', $this->typeid);
        $this->assign('channelname', $channelname);
    }

    //首页
    public function action_index()
    {

        $destname = Common::remove_xss(Arr::get($_GET,'destname'));
        $attrid = Common::remove_xss(Arr::get($_GET,'attrid'));
        $day = Common::remove_xss(Arr::get($_GET,'day'));
        $startdate = Common::remove_xss(Arr::get($_GET,'startdate'));

        //目的地属性
        $attr = ORM::factory('jieban_attr')
            ->where("pid!=0 AND isopen=1")
            ->get_all();

        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $route_array = array(
            'destname'=>$destname,
            'attrid'=>$attrid,
            'day'=>$day,
            'startdate'=>$startdate
        );
        $pagesize = 8;
        $p = intval(Arr::get($_GET,'p'));

        $out = Model_Jieban::search_result($route_array,'',$p,$pagesize);
        $pager = Pagination::factory(
            array(

                'current_page' => array('source' => 'query_string', 'key' => 'p'),
                'view'=>'default/pagination/search',
                'total_items' => $out['total'],
                'items_per_page' => $pagesize,
                'first_page_in_url' => false,
            )
        );
        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        $totalJoin = 0;

        //总加入人数
        foreach($out['list'] as $r)
        {
            $totalJoin += $r['joinnum'];
        }

        //结伴时间与对数量
        $timeArr = Model_Jieban::get_time_arr();

        $this->assign('seoinfo', $seoinfo);
        $this->assign('list',$out['list']);
        $this->assign('total',$out['total']);
        $this->assign('totaljoin',$totalJoin);
        $this->assign('pageinfo',$pager);
        $this->assign('attr',$attr);
        $this->assign('timearr',$timeArr);
        $this->assign('params',$route_array);
        $this->display('jieban/index');
    }
    //详细页
    public function action_show()
    {

        $id = Common::remove_xss($this->request->param('id'));
        $memberinfo = Product::get_login_user_info();
        $joinmembers = Model_Jieban::get_join_member_ids($id);
        $info = Model_Jieban::jieban_detail($id);
        Product::update_click_rate($id, $this->typeid);
        //token
        $token = md5(time());
        Common::session('crsf_code',$token);
        $this->assign('frmcode',$token);
        $this->assign('info',$info);
        $this->assign('memberinfo',$memberinfo);
        $this->assign('joinmembers',$joinmembers);//已加入结伴的会员
        $this->display('jieban/show');

    }

    //发布结伴
    public function action_add()
    {
        $member = Product::get_login_user_info();
        if(empty($member['mid']))
        {
            $this->request->redirect('member/login');
        }

        $attr = ORM::factory('jieban_attr')
            ->where("pid!=0 AND isopen=1")
            ->get_all();
        //token
        $token = md5(time());
        Common::session('crsf_code',$token);
        $this->assign('frmcode',$token);
        $this->assign('attr',$attr);
        $this->display('jieban/add');
    }

    //结伴保存
    public function action_ajax_add_save()
    {

        $title = Common::remove_xss(Arr::get($_POST,'title'));
        //$mobile = Common::remove_xss(Arr::get($_POST,'mobile'));
        $destname = Common::remove_xss(Arr::get($_POST,'destname'));
        $vartime = Common::remove_xss(Arr::get($_POST,'vartime'));
        $startdate = Common::remove_xss(Arr::get($_POST,'startdate'));
        $jiebanday = Common::remove_xss(Arr::get($_POST,'jiebanday'));
        $attrid = Common::remove_xss(Arr::get($_POST,'attrid'));
        $memo = htmlentities(Arr::get($_POST,'memo'));
        $adultnum = intval(Common::remove_xss(Arr::get($_POST,'adultnum')));
        $childnum = intval(Common::remove_xss(Arr::get($_POST,'childnum')));
        $frmcode = Common::remove_xss(Arr::get($_POST,'frmcode'));
        //安全校验码验证
        $orgCode = Common::session('crsf_code');
        if($orgCode!=$frmcode)
        {
            exit('error frmcode');
        }
        $kindid = ORM::factory('destinations')
            ->where("kindname='$destname'")
            ->find()
            ->get('id');
        $kindlist = !empty($kindid) ? $kindid : 0;

        $member = Product::get_login_user_info();
        $m = ORM::factory('jieban');
        $m->day = $jiebanday;
        $m->attrid = $attrid;
        $m->startdate = $startdate;
        $m->memo = $memo;
        $m->addtime = time();
        $m->vartime = $vartime;
        $m->kindlist = $kindlist;
        $m->finaldestid = $kindlist;
        $m->memberid = $member['mid'];
        $m->title = $title;
        $m->adultnum = $adultnum;
        $m->childnum = $childnum;
        $m->save();
        $out = array();

        if($m->saved())
        {
            $out['status'] = 1;


        }
        else
        {
            $out['status'] = 0;

        }
        echo json_encode($out);
        exit;





    }

    //加入结伴
    public function action_ajax_add_join()
    {
        $mobile = Common::remove_xss(Arr::get($_POST,'linktel'));
        $checkcode = Common::remove_xss(Arr::get($_POST,'checkcode'));
        $msgcode = Common::remove_xss(Arr::get($_POST,'msgcode'));
        $frmcode = Common::remove_xss(Arr::get($_POST,'frmcode'));
        $adultnum = intval(Common::remove_xss(Arr::get($_POST,'adultnum')));
        $childnum = intval(Common::remove_xss(Arr::get($_POST,'childnum')));
        $jiebanid = Common::remove_xss(Arr::get($_POST,'jiebanid'));

        //安全校验码验证
        $orgCode = Common::session('crsf_code');
        if($orgCode!=$frmcode)
        {
            exit('error frmcode');
        }
        //验证码验证
        if(Common::session('mobilecode_'.$mobile) != $msgcode)
        {
            exit('error msgcode');
        }

        //获取会员id
        $memberinfo = Product::get_login_user_info();
        if(!empty($memberinfo['mid']))
        {
            $memberid = $memberinfo['mid'];
        }
        else
        {
            $memberid = Product::auto_reg($mobile);
        }

        $m = ORM::factory('jieban_join');
        $m->jiebanid = $jiebanid;
        $m->mobile = $mobile;
        $m->adultnum = $adultnum;
        $m->childnum = $childnum;
        $m->memberid = $memberid;
        $m->save();
        $out = array();
        if($m->saved())
        {
           $out['status'] = 1;
        }
        else
        {
          $out['status'] = 0;
        }
        echo json_encode($out);

    }

    //列表页
    public function action_list()
    {

    }

    /**
     * 发送短信验证码
     */



    public function action_ajax_send_msgcode()
    {

        $mobile = Arr::get($_POST,'mobile');//手机
        $pcode = Arr::get($_POST,'pcode');//验证码
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
        if(!Captcha::valid($pcode) || empty($pcode))
        {
            echo json_encode(array('status'=>false,'msg'=>'验证码错误'));
            exit;
        }
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

            $content = "当前手机短信验证码为:{$code},请输入验证";
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
                echo json_encode(array('status'=>false,'msg'=>'验证码发送失败，请重试'.$flag->Message));
            }

        }

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









}