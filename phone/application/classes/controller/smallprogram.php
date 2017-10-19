<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Smallprogram
 *
 * @desc 小程序的总控制器
 */
class Controller_Smallprogram extends Stourweb_Controller
{

    private static  $_appid='wx5813165640b04123';

    private  static $_appsecret='af10c9529c30c92d0e8e555707f98e56';

    private $_actid;

    private $all_correct_num;


    public function before()
    {
        parent::before();

       $this->_actid = ORM::factory('smallprogram')->where('ishidden=0')->find()->get('id');

    }

    public  function action_index(){



    }
    /*
     *   获取活动的 信息
     */
    public function action_requestActInfo(){


       $actInfo = Model_Smallprogram::getActInfo();

        foreach($actInfo as $k=>&$v){

            $v['content'] = strip_tags($v['content']);// 去掉  html 标签
            $v['piclist'] = explode(",",$v['piclist']);
            if(empty($v['joinnum'])){
                $v['joinnum'] =0;
            }
            //设置忘了设置封面的情况
            if(empty($v['litpic'])){
                $v['litpic'] = $v['piclist'][0];
            }
        }
       echo json_encode($actInfo);exit;
    }
    /*
     *
     */
    public function action_joinGame(){

        $actid = $this->_actid;
        $re =Model_Smallprogram::setJoinUser($actid);

        echo $actid;exit;

    }

   /*
     *
     * 获取 题目信息
     *
     *
   */
    public function  action_getQuestion(){

        $quesInfo  =Model_Smallprogram::getQuestion();

        foreach($quesInfo as $k=>&$v){

            $v['answer'] =explode("###",$v['answer']);

            foreach($v['answer'] as $ke=>&$ve){
                  $ve =explode(":",$ve);
            }

        }

        echo json_encode($quesInfo);exit;

    }
    /*
     *  验证 登录的状态
     *  开发者服务器使用登录凭证 code 获取 session_key 和 openid。
     *  seeion_key 是对用户数据进行加密签名的密钥.为了自身应用安全，session_key 不应该在网络上传输。
     */

    public  function  action_checkCode(){

        $code = Common::remove_xss(Arr::get($_GET, 'code'));

        if(!empty($code)){

            $https_url ="https://api.weixin.qq.com/sns/jscode2session?appid=".self::$_appid."&secret=".self::$_appsecret."&js_code=".$code."&grant_type=authorization_code";

            $arr       = json_decode(Common::http($https_url),true);

            if(!empty($arr['openid'])){

                $rdSession = time().rand(10,1000);

                Common::session('openid',$arr['openid']);

                Common::session("rdSesstion",$arr['session_key']."+".$arr['openid']);

                echo json_encode(array('rdsession'=>$rdSession,'openid'=>Common::session('openid')));exit;
                exit;
            }else{
                echo json_encode($arr);//40029
                exit;
            }


        }

    }

    /*
     *  检查正确的答案
     *  1234 分别代表 ABCD；
     *
     */
   public function action_checkAnswer(){


   }

    /*
     * 分享统计
     */
   public function action_shareCount(){

        $actid  =  $this->_actid;
        $openid  = Common::remove_xss(Arr::get($_GET, 'openid'));

        //更新 本次答题活动的分享次数
        Model_Smallprogram::updateShareNum($actid);
        //增加分享该次活动的详细记录
       if(!empty($openid)){
           if(!empty($actid)){
               Model_Smallprogram::addShareDetail($openid,$actid);
               echo $actid.$openid;exit;
           }else{

               echo '没有找到相关活动信息';
           }

       }else{
            echo '没有openid';exit;
       }




   }

    /*
     *  增加 用户答题信息
     *  $openid
     *  $taketime 花费时间
     *  $all_correct_num 正确的个数
     *
     */
    public  function  action_addUserAnswerInfo(){
           $taketime  = Common::remove_xss(Arr::get($_GET,'taketime'));
           $openid    = Common::remove_xss(Arr::get($_GET,"openid"));
           $all_correct_num = Common::remove_xss(Arr::get($_GET,"all_correct_num"));
        if(!empty($openid)){
            Model_Smallprogram::addUserAnswerInfo($openid,$taketime,$all_correct_num);
        }else{
            echo '没有用户信息';
        }
    }

}
