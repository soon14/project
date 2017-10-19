<?php defined('SYSPATH') or die('No direct script access.');



class Controller_Pub extends Stourweb_Controller

{

    /*

     * 公共请求控制器,此控制器不能删除.

     *

     * */



    public function before()

    {

        parent::before();



    }



    //请求CSS资源,合并输出

    public function action_css()

    {



        $this->response->headers('Content-Type', 'text/css');

        $this->response->headers('charset', 'utf-8');



        if (isset($_GET['file']))

        {

            $files = explode(",", $_GET['file']);

            $fc = '';

            foreach ($files as $val)

            {

                $fc .= file_get_contents(DOCROOT . $val);

            }

            //$fc = self::replace_note($fc);

            $fc = str_replace("\/t", "", $fc);

            $fc = str_replace("\/n", "", $fc);

            $fc = str_replace("\/r\/n", "", $fc);

            echo $fc;

        }

    }
/******************************************
 *      关于ajax 获取评论的说明             *
 *      方法是基于taglib /comment.php      *
 *     拷贝过来的方法  打上时间标签06.30的都是*
 *      fengjish                          *
 *                                        *
 ****************************************/

    /**
    ajax  获取评论  06.30  引入

     ***/
    public static function action_querys_conment()
    {
        $flag       =  $_POST['flag'];
        $typeid     =  $_POST['typeid'];
        $row        =  $_POST['row'];
        $offset     =  empty($_POST['offset'])?0:$_POST['offset'];
        $time       =  $_POST['time'];
        $articleid  =  $_POST['articleid'];

        //获取全部评论
        if($flag=='all')
        {
            $where = 'WHERE typeid!=4 and typeid !=6';
        }
        else if($flag == 'line' || $typeid==1) //线路评论
        {
            $where = 'WHERE typeid = 1';

        }
        else if($flag == 'hotel' || $typeid==2)
        {
            $where = 'WHERE typeid = 2';

        }
        else if($flag == 'car' || $typeid==3)
        {
            $where = 'WHERE typeid = 3';

        }
        else if($flag == 'raider' || $typeid==4)
        {
            $where = 'WHERE typeid = 4';

        }

        else if($flag == 'spot' || $typeid==5)
        {
            $where = 'WHERE typeid = 5';

        }
        else if($flag == 'photo' || $typeid==6)
        {
            $where = 'WHERE typeid = 6';

        }
        else if($flag == 'visa' || $typeid==8)
        {
            $where = 'WHERE typeid = 8';

        }
        else if($flag == 'tuan' || $typeid==13)
        {
            $where = 'WHERE typeid = 13';

        }
        else if($flag == 'tongyong' || $typeid>13)
        {
            $where = "WHERE typeid = $typeid";
        }

        //如果指定产品id
        if(!empty($articleid))
            $where.=' AND articleid='.$articleid;

        $where.=" AND isshow=1 ";
        //==================fengjishu  06.29 start
        if(!empty($time)){
            if ($time == 'asc') {
                $order_by = 'addtime asc';
            } elseif ($time == 'desc') {
                $order_by = 'addtime desc';
            }
        }
        //==================fengjishu  06.29 end
        else{
            if($flag == 'raider')
            {
                $order_by = 'addtime ASC';
            }
            else
            {
                $order_by = 'addtime DESC';
            }
        }

        $sql="SELECT * FROM `sline_comment` {$where}  ORDER BY {$order_by}  LIMIT $offset,$row";
        $arr = DB::query(1,$sql)->execute()->as_array();

        //=====================fengjishu xinzeng
        $sql ="SELECT COUNT(*) as total FROM `sline_comment` {$where}";
        $a = DB::query(1,$sql)->execute()->as_array();
        //===================================

        foreach($arr as &$r)
        {
            $awardinfo = self::get_award_info($r['orderid']);
            $memberinfo = self::get_member_info($r['memberid']);
            //======================06.08 fengjishu s
            $r['totalNumber'] =$a[0]['total'];
            $r['totalpage']   = ceil($r['totalNumber']/10*1);
            //======================06.08 fengjishu end
            //07.04  s
            $r['addtime']     =date("Y-m-d H:i",$r['addtime']);
            //07.04  e
            $r['jifentprice'] = $awardinfo['jifentprice'];
            $r['jifencomment'] = $awardinfo['jifencomment'];
            $r['jifenbook'] = $awardinfo['jifenbook'];
            //=====   06.30 fengjishu s
            $r['nickname'] = substr($memberinfo['nickname'],0,3)."****".substr($memberinfo['nickname'],7,3); //昵称
            //====    06.30 fengjsihu e
            $r['litpic']= !empty($memberinfo['litpic']) ? $memberinfo['litpic'] : Common::member_nopic();
            $r['pltime'] = Product::format_addtime($r['addtime']); //评论时间
            $r['percent']=20*$r['level'].'%';
            //判断是否有回复主题
            if(!empty($r['dockid']))
            {
                $reply_userid = ORM::factory('comment',$r['dockid'])->get('memberid');
                $reply_userinfo = self::get_member_info($reply_userid);
                $r['replyname'] = $reply_userinfo['nickname'];
            }

            $r['productname'] = $r['typeid']!='4' && $r['typeid']!='6'  ? self::get_order_name($r['articleid'],$r['typeid'],'',$r['id']) : '';
            if($r['productname']=='')continue;
            $product_info = self::get_product_info($r['articleid'],$r['typeid']);
            $r['product_litpic'] = Common::img($product_info[0]['litpic']);
            if(!empty($r['orderid']))
            {
                $r['product_price'] = ORM::factory('member_order',$r['orderid'])->get('price');
            }
        }
        echo json_encode($arr);exit;

    }
    /*
    * 获取产品信息  06.30  引入
    * */

    private static function get_product_info($id,$typeid)
    {
        $channeltable=array(
            "1"=>"sline_line",
            "2"=>"sline_hotel",
            "3"=>"sline_car",
            "5"=>"sline_spot",
            "8"=>"sline_visa",
            "13"=>"sline_tuan"
        );
        $tablename = $typeid<14 ? $channeltable[$typeid] : 'sline_model_archive';
        $sql = "SELECT * FROM {$tablename} WHERE id='$id'";
        $row = self::execute_sql($sql);
        return $row;
    }
    /*
    * 产品名称  06.30  引入
    * */
    private  static function get_order_name($id,$typeid,$commentid)
    {

        $channeltable=array(
            "1"=>"sline_line",
            "2"=>"sline_hotel",
            "3"=>"sline_car",
            "5"=>"sline_spot",
            "8"=>"sline_visa",
            "13"=>"sline_tuan"
        );
        $tablename = $typeid<14 ? $channeltable[$typeid] : 'sline_model_archive';
        $fields=array(
            '1'=>array('link'=>'lines'),
            '2'=>array('link'=>'hotels'),
            '3'=>array('link'=>'cars'),
            '5'=>array('link'=>'spots'),
            '8'=>array('link'=>'visa'),
            '13'=>array('link'=>'tuan')

        );
        $link =$fields[$typeid]['link'];
        if(empty($link))
        {
            $model_info = self::get_extend_model_info($typeid);
            $link = $model_info['pinyin'];


        }
        $out = '';
        if(!empty($tablename))
        {
            $sql = "SELECT aid,title,webid FROM {$tablename} WHERE id='$id'";
            $row = self::execute_sql($sql);


            $title = !empty($productname) ? $productname : $row[0]['title'];

            $url=Common::get_web_url($row[0]['webid']);
            $out = "<a href=\"{$url}/{$link}/show_{$row[0]['aid']}.html\" target=\"_blank\">{$title}</a>";
        }

        return $out;
    }
    /*
     * 会员信息   06.30  引入
     * */
    private static function get_member_info($memberid)
    {
        $sql = "SELECT * FROM `sline_member` WHERE mid='$memberid'";
        $row = self::execute_sql($sql);
        return $row ? $row[0] : array();
    }
    /*
     * 获取奖励信息   06.30  引入
     * */
    private static function get_award_info($orderid)
    {
        $sql = "SELECT jifenbook,jifentprice,jifencomment,price FROM `sline_member_order` WHERE id='$orderid'";
        $row = self::execute_sql($sql);
        return $row ? $row[0] : array();
    }
    private static function execute_sql($sql)
    {
        return DB::query(1,$sql)->execute()->as_array();

    }
    //请求js资源,合并输出

    public function action_js()

    {

        //输出JS



        $this->response->headers('Content-Type', 'application/x-javascript');

        $this->response->headers('charset', 'utf-8');

        if (isset($_GET['file']))

        {

            $files = explode(",", $_GET['file']);

            $str = '';

            foreach ($files as $val)

            {

                $str .= file_get_contents(DOCROOT . $val);

            }

            //$str = self::replace_note($str);

            $str = str_replace("\/t", "", $str);

            $str = str_replace("\/n", "", $str);

            //$str = preg_replace('#\/\/[^\n]*#','',$str);//行注释

            echo $str;

        }

    }



    /*

     * 网站头部

     * */

    public function action_header()

    {

        $uid = Cookie::get('st_userid');

        $loginname = Cookie::get('st_username');

        $searchModel = Model_Model::get_search_model();

        $this->assign('loginname',$loginname);

        $this->assign('searchmodel',$searchModel);

        $this->assign('uid',$uid);

        $templet = Product::get_use_templet('header');

      //  if($_GET['feng']=='feng'){
          //  $templet = $templet ? $templet : 'pub/header1';
//        }else{
            $templet = $templet ? $templet : 'pub/header';
//        }


        $this->display($templet);

    }
/*
 *      新版  二级 导航
 *
 */
    public function  action_CommonNav(){
        $this ->display('pub/twonav');
    }
/*
 * 车加车  右侧 详情
 */
     public  function  action_cheright(){
         $this->display('pub/cheright');
     }

    /*

     * 网站底部

     * */

    public function action_footer()

    {

        $templet = Product::get_use_templet('footer');

        $templet = $templet ? $templet : 'pub/footer';
       // if($_GET['feng']=='feng'){
       //     $templet = $templet ? $templet : 'pub/footer1';
//        }else{
   //         $templet = $templet ? $templet : 'pub/footer';
//        }
        $this->display($templet);

    }



    public function action_flink()

    {

        $templet = Product::get_use_templet('flink');

        $templet = $templet ? $templet : 'pub/flink';

        $this->display($templet);

    }



    /*

     * 帮助

     * */

    public function action_help()

    {

        $templet = Product::get_use_templet('help');

        $templet = $templet ? $templet : 'pub/help';

        $this->display($templet);

    }



    public function action_pay()

    {

        $this->display('pub/pay');

    }



    /**

     * 添加浏览次数

     */

    public function action_ajax_add_shownum()

    {

        $typeid = intval(Arr::get($_GET,'typeid'));

        $aid = Common::remove_xss(Arr::get($_GET,'productid'));

        if($typeid)

        {

            Product::update_click_rate($aid,$typeid);

        }

    }



    /**

     * 添加提问

     */

    public function action_ajax_add_question()

    {

        if(!$this->request->is_ajax())exit();

        $checkcode = Arr::get($_POST,'checkcode');

        $productid = Arr::get($_POST,'productid');

        $nickname = Arr::get($_POST,'nickname');

        $content = Arr::get($_POST,'content');

        $typeid = Arr::get($_POST,'typeid');

        $questype = Arr::get($_POST,'questype');

        //验证码

        $checkcode=strtolower($checkcode);

        if(!Captcha::valid($checkcode))

        {

            echo 1; //验证码错误

            exit;

        }

        /* if(empty($this->userinfo))

         {

             echo 2; //未登陆

             exit;

         }*/



        $ip = Common::get_ip();

        $nickname = $nickname ? $nickname : '匿名';



        $m = ORM::factory('question');

        $m->productid = $productid;

        $m->content = $content;

        $m->typeid = $typeid;

        $m->content = $content;

        $m->nickname = $nickname;

        $m->ip = $ip;

        $m->addtime = time();

        $m->memberid = '';

        $m->kindlist = '';

        $m->questype = $questype;

        $m->save();

        if($m->saved())

        {

            echo 3;

            exit;

        }







    }



    /**

     * 添加评论

     */

    public function action_ajax_add_comment()

    {

        if(!$this->request->is_ajax())exit();

        $checkcode = Common::remove_xss(Arr::get($_POST,'checkcode'));

        $productid = Common::remove_xss(Arr::get($_POST,'productid'));



        $content = Common::remove_xss(Arr::get($_POST,'content'));

        $typeid = Common::remove_xss(Arr::get($_POST,'typeid'));

        //验证码

        $checkcode=strtolower($checkcode);

        if(!Captcha::valid($checkcode))

        {

            echo 1; //验证码错误

            exit;

        }

        $memberId = Cookie::get('st_userid') ?  Cookie::get('st_userid') :  '0';

        $m = ORM::factory('comment');

        $m->articleid = $productid;

        $m->content = $content;

        $m->typeid = $typeid;

        $m->memberid = $memberId;

        $m->addtime = time();

        $m->save();

        if($m->saved())

        {

            echo 3;

            exit;

        }







    }



    /*

     * 验证验证码是否正确

     * */

    public function action_ajax_check_code()

    {

        $flag = 'false';

        $checkcode = strtolower(Arr::get($_POST,'checkcode'));

        if(Captcha::valid($checkcode))

        {

            $flag = 'true';

        }

        echo $flag;

    }



    /**

     * 附件下载

     */

    public function action_download(){

        $file=$_GET['file'];

        header("Content-type:application/octet-stream");

        header("Accept-Ranges:bytes");

        header("Content-Type:application/force-download");

        header("Content-Disposition:attachment;filename={$_GET['name']}");

        header("Accept-Length:".filesize($file));

        readfile(BASEPATH.$file);

    }















}