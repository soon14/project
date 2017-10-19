<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Line
 * 米淘控制器
 */
class Controller_Mitao extends Stourweb_Controller
{
    private $_typeid = 106;   //产品类型
     //产品类型
    // 现在 为 河北旅游网 的  appid  和secret
    private $appId = 'wxdf8497303505ae0d';

    private $appSecret = 'ed95f4a2529b5b39f886e3df0e0511bd';
    public function before()
    {
        parent::before();


        $openid  =Common::session("openid");
      //  echo $openid;
        if(empty($openid)){

            $arr =  Model_Mitao::GetOpenid($this->appId,$this->appSecret);
            Common::session("openidArr",$arr);
            Common::session("openid",$arr['openid']);
        }
        $action = $this->request->action();
        $this->assign('action', $action);
        $this->assign('openid',$arr['openid']);

        $this->assign('typeid', $this->_typeid);

        //分享用到的参数
        $signPackage = $this->GetSignPackage();
        $this->assign('signPackage',$signPackage);

    }

    /**
     * 米淘搜索页
     */
    public function action_list()
    {

        //参数处理
        $urlParam = $this->request->param('params');
        $destPy = 'all';
        $dayId = $priceId = $sortType = $keyword = $attrId = $startcityId = 0;
        $params = explode('-', str_replace('/', '-', $urlParam));
        $count = count($params);
        switch ($count)
        {
            //目的地
            case 1:
                list($destPy) = $params;
                break;
            //关键字、属性
            case 8:
                list($destPy, $dayId, $priceId, $sortType, $keyword, $startcityId, $attrId, $page) = $params;
                break;
        }

        $keyword = Arr::get($_GET, 'keyword');
        $page = $page < 1 ? 1 : $page;

        $destname = $destPy != 'all' ? ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('kindname') : '目的地';
        //获取seo信息
        $seo = Model_Hotel::search_seo($destPy,1);
        $this->assign('seoinfo', $seo);

        $this->assign('destpy', Common::remove_xss($destPy));
        $this->assign('destname', $destname);
        $this->assign('dayid', Common::remove_xss($dayId));
        $this->assign('sorttype', Common::remove_xss($sortType));
        $this->assign('keyword', Common::remove_xss($keyword));
        $this->assign('attrid', Common::remove_xss($attrId));
        $this->assign('startcityid', Common::remove_xss($startcityId));
        $this->assign('priceid', Common::remove_xss($priceId));
        $this->assign('page', $page);
        $this->display('mitao/newlist');
    }

    /**
     * 米淘预订
     */
    public function action_book()
    {

        $productid = $this->params['id'];
        $day       =Common::remove_xss(Arr::get($_GET, 'day'));
        $suitid       =Common::remove_xss(Arr::get($_GET, 'suitid'));
        $info = ORM::factory('mitao', $productid)->as_array();
        $info['price'] = Model_Mitao::get_minprice($info['id']);
        $this->assign('info', $info);
        $this->assign('day', $day);
        $this->assign('suitid',$suitid);

        $member = Common::session('member');
        if (!empty($member))
        {
            $this->assign('member', Model_Member::get_member_byid($member['mid']));
        }else{
            $openid =Common::session("openid");
                //  验证是否存在 该用户
            $mem = Model_Mitao::getUserInfo($openid);

            $this->assign('member',$mem);
        }
        $this->display('mitao/newbook');
    }

    /**
     * 创建订单
     */
    public function action_create()
    {
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;
        //套餐id
        $suitid = Arr::get($_POST, 'suitid');
        //联系人
        $linkman = Arr::get($_POST, 'linkman');
        //手机号
        $linktel = Arr::get($_POST, 'linktel');

        $linkidcard = Arr::get($_POST, 'linkidcard');
        //备注信息
        $remark = Arr::get($_POST, 'remark');
        //产品id
        $id = Arr::get($_POST, 'productid');
        //出行时间
        $startdate = Arr::get($_POST, 'startdate');


        //成人数量
        $dingnum = Arr::get($_POST, 'dingnum');
        //小孩数量
        $childnum = Arr::get($_POST, 'childnum');
        //老人数量
        $oldnum = Arr::get($_POST, 'oldnum');


        //验证部分
        $validataion = Validation::factory($_POST);
        $validataion->rule('linktel', 'not_empty');
        $validataion->rule('linktel', 'phone');
        $validataion->rule('linkman', 'not_empty');

        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            Common::message(array('message' => __("error_{$keys[0]}_{$error[$keys[0]][0]}"), 'jumpUrl' => $refer_url));
        }

        $info = ORM::factory('mitao')->where("id=$id")->find()->as_array();
        $suitArr = ORM::factory('mitao_suit')
            ->where("id=:suitid")
            ->param(':suitid', $suitid)
            ->find()
            ->as_array();
        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
        $priceArr = ORM::factory('mitao_suit_price')->where("day=" . strtotime($startdate) . " and suitid=" . $suitid)->find()->as_array();

        $priceArr['adultprice'] = Currency_Tool::price($priceArr['adultprice']);
        $priceArr['childprice'] = Currency_Tool::price( $priceArr['childprice']);
        $priceArr['oldprice'] = Currency_Tool::price($priceArr['oldprice']);

        //库存判断
        $totalnum = $dingnum + $childnum + $oldnum;
        $storage = intval($priceArr['number']);
        if ($storage != -1 && $storage < $totalnum)
        {
            Common::message(array('message' => __("error_no_storage"), 'jumpUrl' => $refer_url));
            exit;
        }
        if ($suitArr['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.
        {
            $info['status'] = 0;
        } else
        {
            $info['status'] = 1;
        }
        $info['name'] = $info['title'] . "({$suitArr['suitname']})";
        $info['paytype'] = $suitArr['paytype'];
        $info['dingjin'] = doubleval($suitArr['dingjin']);
        $info['jifentprice'] = intval($suitArr['jifentprice']);
        $info['jifenbook'] = intval($suitArr['jifenbook']);
        $info['jifencomment'] = intval($suitArr['jifencomment']);
        $info['ourprice'] = doubleval($priceArr['adultprice']);
        $info['childprice'] = doubleval($priceArr['childprice']);
        $info['oldprice'] = doubleval($priceArr['oldprice']);
        $info['usedate'] = $startdate;
        $ordersn = Product::get_ordersn('01');
        $arr = array(
            'ordersn' => $ordersn,
            'webid' => 0,
            'typeid' => $this->_typeid,
            'openid' => Common::session("openid"),
            'productautoid' => $id,
            'productaid' => $info['aid'],
            'productname' => $info['name'],
            'litpic' => $info['litpic'],
            'price' => $info['ourprice'],
            'childprice' => $info['childprice'],
            'jifentprice' => $info['jifentprice'],
            'jifenbook' => $info['jifenbook'],
            'jifencomment' => $info['jifencomment'],
            'paytype' => $info['paytype'],
            'dingjin' => $info['dingjin'],
            'usedate' => $info['usedate'],
            'departdate' => $info['departdate'],
            'addtime' => time(),
            'memberid' => null,
            'dingnum' => $dingnum,
            'childnum' => $childnum,
            'oldprice' => $info['oldprice'],
            'oldnum' => $oldnum,
            'linkman' => $linkman,
            'linktel' => $linktel,
            'linkidcard' => $linkidcard,
            'suitid' => $suitid,
            'remark' => $remark,
            'status' => $info['status'] ? $info['status'] : 0,
            'usejifen' => $_POST['usejifen'] != 0 ? 1 : 0, //积分抵现

            'refundtype' => $info['refundtype'] ? $info['refundtype'] : 0// 订单的退款方式
        );
        //添加订单
        if (Product::add_order2($arr))
        {

            $orderInfo = Model_Member_Order::get_order_by_ordersn($ordersn);
            Model_Member_Order::add_tourer($orderInfo['id'], $_POST);
            //如果是立即支付则执行支付操作,否则跳转到产品详情页面
            if ($info['status'] == 1)
            {
                $html = Common::payment_from(array('ordersn' => $ordersn,'paytype'=>$info['paytype']));
                if ($html)
                {
                    echo $html;
                }
            } else
            {
                $url = Common::get_web_url($info['webid']) . '/pub/paystatus/?sign=13';
                $this->request->redirect($url);
            }

        }
    }

    /**
     * 米淘内容页
     */
    public function action_show()

    {
      //  setcookie("user", "Alex Porter", time()+3600);

        $id = Common::remove_xss($this->request->param('aid'));
        //==============
        //米淘详情
        $info = Model_mitao::detail($id);
        //点击率加一
        Product::update_click_rate($id, $this->_typeid);

        $data['openid'] =Common::session("openid");
        $data['typeid'] =$this->_typeid;
        $data['productid'] =$id;

        $is_collect= Model_mitao::is_collect($data);
        //seo
        $seoInfo = Product::seo($info);
        //获取套餐起止日期
        $info['linedate'] = Model_mitao::line_date($info['id']);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);

        //截止报名日期
        $info['linebefore'] = strtotime($info['act_time'])*1-86400*$info['linebefore'];

        //属性列表
        $info['attrlist'] = Model_mitao::line_attr($info['attrid']);
        //最低价
        $info['price'] = Model_mitao::get_minprice($info['id']);
        //出发城市
        $info['startcity'] = Model_Startplace::start_city($info['startcity']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid);

        $info['satisfyscore'] = Model_Comment::get_score($info['id'], $this->_typeid, $info['satisfyscore'], $info['commentnum']);//满意度
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_nums($info['id'], $this->_typeid) + intval($info['bookcount']);
        // 剩余库存
       // $info['stock'] = Model_mitao::get_stock($info['id'])*1-$info['sellnum']*1;
        $info['stock'] = Model_mitao::get_stock($info['id'])*1;
        //产品编号
        $info['lineseries'] = Product::product_number($info['id'], '01');

        $info['kefuphoneArr']  =  explode(",",$info['kefuphone']);

        $tinfo        =   Model_Mitao::get_mitao_suit($info['id']);

        $this->assign('ticketInfo', $tinfo);

        $this ->assign('countPhone',count( $info['kefuphoneArr']));
        $this->assign('seoinfo', $seoInfo);

        $this->assign('is_collect',$is_collect);
        $this->assign('info', $info);
        $this->display('mitao/newshow');
    }


    /**
     * 获取套餐人群
     */
    public function action_ajax_suit_people()
    {
        $out = array();
        $suitid = Arr::get($_GET, 'suitid');
        $day    = Arr::get($_GET, 'day');
        $row = ORM::factory('mitao_suit', $suitid)->as_array();
        $group_arr = explode(',', $row['propgroup']);

        //获取最接近当前日期的报价
        $day = strtotime($day);
        $ar = Model_mitao_Suit_Price::get_price_byday($suitid, $day);
        if ($ar)
        {

            $out['useday'] = date('Y-m-d', $ar[0]['day']);//当前使用日期.
            $out['storage'] = $ar[0]['number'];//库存

        }


        if (in_array(1, $group_arr))
        {
            $out['haschild'] = 1;
            $out['childprice'] = $ar[0]['childprice'] ? $ar[0]['childprice'] : 0;
        }
        if (in_array(2, $group_arr))
        {
            $out['hasadult'] = 1;
            $out['adultprice'] = $ar[0]['adultprice'] ? $ar[0]['adultprice'] : 0;
        }
        if (in_array(3, $group_arr))
        {
            $out['hasold'] = 1;
            $out['oldprice'] = $ar[0]['oldprice'] ? $ar[0]['oldprice'] : 0;
        }
        echo json_encode($out);
    }

    /**
     * 按天获取报价与库存.
     */
    public static function action_ajax_price_day()
    {
        $useday = strtotime(Arr::get($_GET, 'useday'));
        $suitid = intval(Arr::get($_GET, 'suitid'));
        $ar = Model_mitao_Suit_Price::get_price_byday($suitid, $useday);
        echo json_encode($ar[0]);
    }

    /**
     * ajax请求 加载更多
     */
    public function action_ajax_line_more()
    {

        $urlParam = $this->request->param('params');
        $keyword = Arr::get($_GET, 'keyword') ? Arr::get($_GET, 'keyword') : '';
        $data = Model_Mitao::search_result($urlParam, $keyword);
        echo($data);
    }
    /**
     * 评论 ajax请求 加载更多 fengjishu
     */
    public function action_ajax_comment_more()
    {
        $pagesize =10;
        $aid  = Common::remove_xss(Arr::get($_GET, 'aid'));
        $page = Common::remove_xss(Arr::get($_GET, 'page'));

        $offset =(intval($page) - 1) * $pagesize;
        $rows = Model_mitao::search_comment($aid,$offset,$pagesize);
        foreach($rows as $ke=>$v){
            $rows[$ke]["time"] =date("Y-m-d H:i",$v['addtime']);
        }
        echo Product::list_search_comment($rows, $page);
    }
    /**
     * ajax判断是否登陆
     */
    public function action_ajax_is_login()
    {
        //检测用户是否存在
        $userinfo = Common::session('member');
        if (!isset($userinfo['mid']))
        {
            exit(json_encode(array('status' => 0)));
        }
        else
        {
            exit(json_encode(array('status' => 1)));
        }
    }
    /**
     * 添加评论内容
     * 05.26 fengjishu
     */
    public function action_ajax_comment()
    {
        $model            = new Model_Nav();
        $con       = $_POST['content'];
        $articleid = $_POST['article'];
        $code      = $_POST['code'];
        if($code) {
            $url_getToken = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxdf8497303505ae0d&secret=ed95f4a2529b5b39f886e3df0e0511bd&code=$code&grant_type=authorization_code";
            $ch = curl_init();
            //3.设置参数
            curl_setopt($ch , CURLOPT_URL, $url_getToken);
            curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
            //4.调用接口
            $res = curl_exec($ch);
            //5.关闭curl
            curl_close( $ch );
            if( curl_errno($ch) ){
                var_dump( curl_error($ch) );
            }
            $arr = json_decode($res, true);
            //  $token  =$arr['access_token'];
            $openid =$arr['openid'];
        }
       // setcookie("CookieOpenid",$openid, time()+3600);
        //$openid  = isset($openid) ? $openid:$_COOKIE['CookieOpenid'];
        $memberId  = Cookie::get('st_userid') ?  Cookie::get('st_userid') :  '0';
        $sql       ="SELECT max(floorid) as floorid FROM `sline_comment` where articleid='$articleid'";
        $floorid    =  $model ->get_sql($sql,1);// $floorid     = ORM::factory('comment')->where("articleid='$articleid'")->find(max(floorid))->get();
        $floorid[0]['floorid'];

        if($floorid[0]['floorid']==0){
            $floorid=1;
        }else{
            $floorid=$floorid[0]['floorid']*1+1;
        }

        $m          = ORM::factory('comment');
        $m->articleid = $articleid;
        $m->content   = $con;
        $m->typeid    = 1;
        $m->memberid  = $memberId;
        $m->floorid   =$floorid;
        $m->openid    =$openid;
        $m->isshow    =1;
        // $m->dockid    = $dockid;
        $m->addtime   = time();
        $m->save();
        // $time= date('Y-m-d H:i:s',$time);
        if($m->saved())
        {
            echo $articleid;
            exit;
        }
    }


    /*
     *   米淘  个人中心  首页
     */
    public  function  action_member(){

        $arr = Common::session('openidArr');

            $openid         = $arr['openid'];
            $access_token  = $arr['access_token'];// 有效期 2小时
            $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
            $userinfo        = Model_Article::curl($url_getuserinfo);

            if(isset($userinfo['errcode'])){

                $arr = Model_Mitao::GetOpenid2('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
                Common::session("openidArr",$arr);
                Common::session("openid",$arr['openid']);
                $openid         = $arr['openid'];
                $access_token  = $arr['access_token'];// 有效期 2小时
                $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
                $userinfo        = Model_Article::curl($url_getuserinfo);

            }
            //待使用  2 value.usedate>=value.now_time 退款 4  未付款 1 value.usedate>=value.now_time 待评论 5 value.ispinlun == 0
            $nowtime = date(time(),'Y-m-d');

            $mem=  Model_Mitao::getUserInfo($openid);
            $query = DB::select('id')->from('member_order')->where('memberid', '=', $mem['mid'])->and_where('status','=','1');
            $noPayNum  = $query->execute()->count();
            $this->assign('noPayNum',$noPayNum);
            //  待使用 加入 线下支付的方式订单
            $query = DB::select('id')->from('member_order')->where('memberid', '=', $mem['mid'])->and_where('status','=','2');
            $waitUseNum  = $query->execute()->count();

            $query = DB::select('id')->from('member_order')->where('memberid', '=', $mem['mid'])->and_where('status','=','5')->and_where('isconsume','=','0')->and_where('paytype','=','4');

            $waitUseNum_offline  = $query->execute()->count();
             $this->assign('waitUseNum',$waitUseNum+$waitUseNum_offline);
              //=========================================
            $query = DB::select('id')->from('member_order')->where('memberid', '=', $mem['mid'])->and_where('status','IN',array('3','4','6'));
            $backPayNum  = $query->execute()->count();
            $this->assign('backPayNum',$backPayNum);
             //===========================================

             $query = DB::select('id')->from('member_order')->where('memberid', '=', $mem['mid'])->and_where('status','=','5')->and_where('isconsume','=','1')->and_where('ispinlun','=','0');

             $noCommNum_offline  = $query->execute()->count();

            $this->assign('noCommNum',$noCommNum_offline);
             //==================================================
            $this->assign('userinfo',$userinfo);
            $this->display('mitao/member/person-index');


    }

        /*
         *   关于我们
         */
    public function action_about(){

        $this->display('mitao/member/person-about');

    }
    /*
     * 联系我们
     */
    public function action_contactus(){

        $this->display('mitao/member/person-customer');

    }
    /*
    * 个人信息
     * /a: 根据openid 验证会员表 是否有 该openid
     *  |-有  就调用该用户的信息
     *  |-没有  绑定手机
     *     |-绑定手机 验证该手机号码是否存在
     *          |- 存在  将openid 保存到想对应的位置
     *          |- 不存在  插入新用户 保存 手机和 openid
     *
     * b:  根据openid 验证会员表 是否有 该openid
     *   有 显示 相关的信息
     *   没有  不显示信息 用户可进一步绑定信息操作
    */
    public function action_userinfo(){

        $openid = Common::session('openid');

        if(!empty($openid)){

            $mem=  Model_Mitao::getUserInfo($openid);

        }else{


        }
        $this->assign('memberinfo',$mem);

        $this->display('mitao/member/person-admin');

    }
    /*
     *   修改性别
     */
    public  function  action_editSex(){

        $this->display('mitao/member/person-admin-sex');
    }

    public  function  action_btn_sex(){
        $sex  = Common::remove_xss(Arr::get($_POST, 'sex'));

        $openid  = Common::session('openid');

       $sex = !empty($sex)? $sex :'保密';

        $query = DB::select()->from('member')->where('openid', '=', $openid);
        $arr  = $query->execute()->as_array();

            $re= DB::update('member')->set(array('sex' => $sex))->where("`openid`='".$openid."'")->execute();

            if($re){

                echo json_encode(array('msg'=>'更新成功','status'=>1));
            }else{
                echo json_encode(array('msg'=>'数据相同，更新失败','status'=>0));
            }


    }
    /*
     *   修改姓名
     */
    public  function  action_editName(){

        $this->display('mitao/member/person-admin-name');
    }
    /*
     * 保存姓名
     * DB::insert   返回 数组 rray(2) {
  [0]=>
  int(1282)
  [1]=>
  int(1)}
    DB::update('member')  成功 返回 int（1）
    *
     *

     */
    public  function  action_btn_name(){

        $name  = Common::remove_xss(Arr::get($_POST, 'name'));
        $openid  = Common::session('openid');
        $re= DB::update('member')->set(array('truename' => $name))->where("`openid`='".$openid."'")->execute();

         if($re){
                echo json_encode(array('msg'=>'更新成功','status'=>1));
            }else{
             echo json_encode(array('msg'=>'更新失败','status'=>0));
          }


    }
    /*
     *   验证手机页面
     */
    public function  action_checkPhone(){

        $openid = Common::session('openid');

        $mem=  Model_Mitao::getUserInfo($openid);


        $this->assign("info",$mem);

        $this->display('mitao/member/person-admin-tel02');
    }
    /*
     *  绑定手机
     */
    public function action_bidings(){

        $phone   =  Arr::get($_POST, 'phone');

        $openid  =Common::session("openid");
        if(preg_match("/^1[34578]\d{9}$/",$phone)){

            $sql     = "SELECT * FROM `sline_member` WHERE mobile='$phone'";

            $re      = DB::query(1,$sql)->execute()->as_array();

        }else{

            $message = array('msg' => __("手机号不合法"), 'status' => 0);

            exit(json_encode($message));
        }
        $mem=  Model_Mitao::getUserInfo($openid);
        if(empty($re)){

            if(empty($mem)){

                $m      = ORM::factory('member');

                $m  ->openid  =$openid;

            }else{

                $m      = ORM::factory('member',$mem['mid']);
            }

            $m  ->mobile  =$phone;
            $m  ->jointime  =time();
            $m->save();

            $status = 0 ;

            if($m->save()){

                $status  =1 ;
            }

            $message = array('msg' => __("绑定成功"), 'status' => $status);

            exit(json_encode($message));

        }else{

            if(empty($mem)){

                $re= DB::update('member')->set(array('openid' => $openid))->where("mobile={$phone}")->execute();
                $message = array('msg' => __("绑定成功"), 'status' => 1);

                exit(json_encode($message));
            }
            $message = array('msg' =>"此账户已绑定", 'status' => 0);

            exit(json_encode($message));

        }
    }
    /*
     *   协议 页面
     */
    public function action_agree(){

        $id = Common::remove_xss(Arr::get($_GET, 'aid'));
        //==============
        //米淘详情
        $this->assign("aid",$id);
        $this->display('mitao/order/order-check');

    }
    public function action_agree_show(){

        $id = Common::remove_xss(Arr::get($_GET, 'aid'));
        $type = Common::remove_xss(Arr::get($_GET, 'type'));
        //==============
        //米淘详情
        if(!empty($id)){
            $info = Model_mitao::detail($id);
        }

        $this->assign("aid",$id);
        $this->assign("type",$type);
        $this->assign("info",$info);
        $this->display('mitao/order/order-check-show');

    }


    /*
     *   我的订单
     */

    public function  action_order_all(){

        $type= Arr::get($_GET, 'type');
        $type = !isset($type) ? -1 : $type;
        $this->assign("type",$type);
       // $this->assign('data', $row);
        $this->display("mitao/order/person-order");
    }
    /*
     *  退款账户 状态
     */
    public  function  action_order_refund(){

        $id = Common::remove_xss($_GET['orderid']);

        $row = Model_Member_Order::get_order_detail($id);
        //支付金额
        $row['total'] = $row['paytype'] == 2 ? ($row['dingnum'] + $row['childnum'] + $row['oldnum']) * $row['dingjin'] : $row['price'] * $row['dingnum'] + $row['childprice'] * $row['childnum'] + $row['oldprice'] * $row['oldnum'];
        $this->assign('info', $row);
        $this->display("mitao/order/person-refund");
    }
    /**
     * 米淘订单详情
     */
    public function action_order_show()
    {
        $id = Common::remove_xss($_GET['id']);
        $row = Model_Member_Order::get_order_detail($id);
        //分割订单产品名称
        $tempArr = array_filter(preg_split('`[\(\)]`', $row['productname']));
        $row['subname'] = count($tempArr) > 1 ? $tempArr[count($tempArr) - 1] : '';
        $row['productname'] = str_replace("({$row['subname']})", '', $row['productname']);

        $productDetail   = Model_Mitao::detail($row['productaid']);
        $str             = Model_Mitao::get_dest_name($productDetail['kindlist']);
        $row['address']  = $str.$productDetail['selfDriMdd'];

        $row['sellpoint']  = $productDetail['sellpoint'];
        $row['addtime']  = date("Y-m-d H:i:s",$row['addtime']);
        //支付金额
        $row['total'] = $row['paytype'] == 2 ? ($row['dingnum'] + $row['childnum'] + $row['oldnum']) * $row['dingjin'] : $row['price'] * $row['dingnum'] + $row['childprice'] * $row['childnum'] + $row['oldprice'] * $row['oldnum'];
        //  产品的 详情 url
        $row['purl']  =self::get_product_info($row['typeid'],$row['productautoid']);
        //评论
        $comment = Model_Comment::get_comment($row['ordersn']);

        if (!empty($comment))
        {
            $comment['score'] = ($comment['score1'] * 20) . '%';
        }
        //08.02  fengjishu  加入 参数 paytype
        $row['payurl'] = Common::get_main_host() . "/payment/?ordersn={$row['ordersn']}"."&paytype=".$row['paytype'];

        $extendinfo = Model_Mitao::get_extend_info($row['productautoid'],$row['typeid']);

        $this->assign('backpay',$extendinfo['e_backpay']);//扩展信息
        $this->assign('info', $row);
        $this->assign('comment', $comment);
        $this->assign('member', $this->member);
        $this->display('mitao/order/order_show');
    }
    /**

     * @param $typeid

     * @param $productid

     * @return array

     * 获取产品详细信息

     */

    public  static function get_product_info($typeid,$productid)

    {

        $out = array();

        if($typeid)

        {

            $model = ORM::factory('model',$typeid);



            $table = $model->maintable;

            $pinyin = $model->pinyin;

            if($table)

            {

                $info = ORM::factory($table,$productid)->as_array();

                $py = ($typeid>17 || $typeid==8 || $typeid==13) ? $pinyin : $pinyin.'s';

                $url = Common::get_web_url($info['webid'])."/{$py}/show_{$info['aid']}.html";

                $info['url'] = $url;

                $out = $info;

            }



        }

        return $out;





    }
      /*
       *   米淘 券 页
       */
     public function action_order_quan(){
         $id = Common::remove_xss($_GET['orderid']);

         $row = Model_Member_Order::get_order_detail($id);

         $productDetail   = Model_Mitao::detail($row['productaid']);

         $str             = Model_Mitao::get_dest_name($productDetail['kindlist']);

         $row['address']  = $str.$productDetail['selfDriMdd'];

         $row['sellpoint']  = $productDetail['sellpoint'];

         $this->assign('info', $row);
         $this->display('mitao/order/person-detail-quan');
     }
    /**
     * 订单列表数据处理
     * @param $data
     * @return mixed
     */
    /**
     * 订单列表 查看更多
     */
    public function action_ajax_order_more()
    {

        $openid = Common::session("openid");

        $mem=  Model_Mitao::getUserInfo($openid);

        if(empty($mem)){

            $result['list'] = array();
            $result['page'] = -1;
            echo  json_encode($result);
            exit;
        }
        $member['mid'] =$mem['mid'];

        $page = Common::remove_xss(intval($_GET['page']));
//        $result['list'] = array();
//        $result['page'] = $page;
//        echo  json_encode($result);
//        exit;
        $page = $page < 1 ? 1 : $page;

        $param['type'] = Common::remove_xss(intval($_GET['type']));

        $row = Model_Member_Order::order_list2($member['mid'], $page, $param);

        $row = self::get_data_initialization($row);


        echo(Product::list_search_format1($row,$page,10));
    }

    private function get_data_initialization($data)
    {
        foreach ($data as &$v)
        {
            //订单详情
            $v['url'] = Common::get_web_url($v['webid']) . "/mitao/order_show?id={$v['id']}";
            //支付url
            $v['payurl'] = Common::get_main_host() . "/payment/?ordersn={$v['ordersn']}"."&paytype=".$v['paytype'];

            //评论url
            $v['commenturl'] = Common::get_web_url($v['webid']) . "/mitao/comment_index?id={$v['id']}";
            //产品缩略图
           // $v['litpic'] = Common::img($v['litpic'], 150, 90);
            //下单时间
            $v['addtime'] = date('Y-m-d H:i', $v['addtime']);
            //分割订单产品名称
            $tempArr = array_filter(preg_split('`[\(\)]`', $v['productname']));
            $v['subname'] = count($tempArr) > 1 ? $tempArr[count($tempArr) - 1] : '';
            $v['productname'] = str_replace("({$v['subname']})", '', $v['productname']);
            //全额支付
            $v['price']   = $v['price'] * $v['dingnum'] + $v['childprice'] * $v['childnum'] + $v['oldprice'] * $v['oldnum'];
            // 处理使用时间                 封冀蜀
            $v['now_time'] = time()*1-86400;
            $v['usedate']  = strtotime($v['usedate']);
            //支付方式
            switch ($v['paytype'])
            {
                case '1':
                    $v['paytype'] = '全款支付';
                    break;
                case '2':
                    $v['paytype'] = '定金支付';
                    $v['price'] = ($v['dingnum'] + $v['childnum'] + $v['oldnum']) * $v['dingjin'];
                    break;
                default:
                    $v['paytype'] = '线下支付';
                    break;
            }
            //1元积分兑换
            $v['exchange'] = $GLOBALS['cfg_exchange_jifen'];
        }
        return $data;
    }

 /*
  *   评论 首页
  */

    public  function action_comment_index(){
        $id = Common::remove_xss($_GET['id']);
        $row = Model_Member_Order::get_order_detail($id);

        $arr = Common::session('openidArr');

        $openid         = $arr['openid'];

        $access_token  = $arr['access_token'];// 有效期 2小时

        $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';

        $userinfo        = Model_Article::curl($url_getuserinfo);

        if(isset($userinfo['errcode'])){
            //获取点前页面的的地址
            $arr = Model_Mitao::GetOpenid2('wxdf8497303505ae0d','ed95f4a2529b5b39f886e3df0e0511bd');
            $openid         = $arr['openid'];

            $access_token  = $arr['access_token'];// 有效期 2小时
            Common::session("openidArr",$arr);
            Common::session("openid",$arr['openid']);
            $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';

            $userinfo        = Model_Article::curl($url_getuserinfo);

        }

        $this->assign('info', $row);
        $this->assign('userinfo',$userinfo);
        $this->display("mitao/order/order_comment");
    }


    /**     * 写入评论     */
    public function action_comment_save()
    {
        $openid = Common::session("openid");

        $member=  Model_Mitao::getUserInfo($openid);

        $id = Common::remove_xss($_GET['id']);
        $_POST = Common::remove_xss($_POST);
        //通过订单号码检测是否id是否合法
        $row = DB::select()->from('member_order')->where("id={$id}")->execute()->current();
        //var_dump($row);
        if (empty($row) || $row['ordersn'] != $_POST['orderid'])
        {
            $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $this->cmsurl . 'mitao/order_all';
            Common::message(array('message' => __('noallow'), 'jumpUrl' => $referer));
        }
        //写入评论
        $_POST['addtime'] = time();
        $_POST['memberid'] = $member['mid'];
        $_POST['isshow'] = 1;
        $_POST['piclist'] = trim($_POST['piclist']);
        list(, $row) = DB::insert('comment', array_keys($_POST))->values(array_values($_POST))->execute();
        if ($row > 0)
        {
           //更改订单状态
            DB::update('member_order')->set(array('ispinlun' => 1))->where("id={$id}")->execute();
            Common::message2(array('message' => __('success_comment'), 'jumpUrl' => $this->cmsurl . 'mitao/order_all'));
        }
        else
        {
            Common::message(array('message' => __('error_comment'), 'jumpUrl' => $_SERVER['HTTP_REFERER']));
        }
    }

    public function action_ajax_upload_picture()

    {


        $filedata = Arr::get($_FILES,'fileVal');


        $storepath = UPLOADPATH.'/'.date('Y').'/'.date('md').'/';

        if(!file_exists($storepath))

        {

            mkdir($storepath);

        }

        $filename = uniqid();

        $out = array();

        if(move_uploaded_file($filedata['tmp_name'], $storepath.$filename.$filedata['name']))

        {

            $out['status'] = 1;

            $out['litpic'] = '/new_uploads/'.date('Y').'/'.date('md').'/'.$filename.$filedata['name'];

        }

        echo json_encode($out);

    }

     /*
      *   收藏
      */
    public  function  action_like(){
        $data['openid'] = Common::remove_xss($_POST['openid']);

        $data['typeid'] = 106;

        $data['productid'] = Common::remove_xss($_POST['productid']);

        $data['like_time'] =time();

        // 是否收藏
        $query = DB::select()->from('like_notes')->where('openid', '=', $data['openid']);

        $query->and_where('typeid',"=",$data['typeid']);

        $query->and_where('productid',"=",$data['productid']);

        $arr  = $query->execute()->as_array();

        if(empty($arr)){

            $result = DB::insert('like_notes', array_keys($data))->values(array_values($data))->execute();
            if($result[1]>0){
                $message=array('msg'=>'收藏成功','status'=>1);
                    echo json_encode($message);
            }

        }else{
           $re=  DB::delete('like_notes')->where('openid', '=', $data['openid']);

           $re->and_where('typeid',"=",$data['typeid']);

           $result=  $re->and_where('productid',"=",$data['productid'])->execute();

            $message=array('msg'=>'取消收藏','status'=>0);
            echo json_encode($message);
        }

    }

    /*
     *    我的收藏
     */
    public  function action_mylike(){

        $openid= Common::session("openid");

        $typeid =106;

        $query = DB::select()->from('like_notes')->where('openid', '=', $openid);

        $query->and_where('typeid',"=",$typeid);

        $arr = $query->execute()->as_array();
        $info=array();
        foreach($arr as $k=>$v){

                $info[$k]=Model_Mitao::detail($v['productid']);
            //最低价
                $info[$k]['price']  = Model_mitao::get_minprice($info[$k]['id']);

                $info[$k]['sellnum']  =  Model_Member_Order::get_sell_num($info[$k]['id'], $this->_typeid) + intval($info[$k]['bookcount']);
        }
        $this->assign("info",$info);

        $this->display("mitao/member/person_like");
    }
    //米淘 取消订单

    public function action_ajax_order_cancel2()

    {
        $flag = 0;
        $orderId = Common::remove_xss(Arr::get($_GET,'orderid'));

        //================fengjishu  07.08 修改 当付款了 取消订单 的情况
        $ispay   = Common::remove_xss(Arr::get($_GET,'ispay'));

        if(empty($orderId)){

            echo json_encode(array('status'=>$flag));
            exit;
        }
        $m = ORM::factory('member_order',$orderId);


        if($ispay=='1'){//07.08 fengjishu 新加。付款了 取消订单 的情况

            $orderInfo = $m->as_array();

            // 判断 是否为美景的订单，去除美景订单 ，第三方用手动退款
            $supplier = $orderInfo['supplierlist'];
            if($supplier!=9){
                 // 该订单的退款方式
                 $refundtype=$orderInfo['refundtype'];

                if($refundtype==0&&$orderInfo['status']==2){
                    //  0 为 自动退款
                    $out_trade_no = $orderInfo['ordersn'];
                    $total      = $orderInfo['price'] * $orderInfo['dingnum'] + $orderInfo['childprice'] * $orderInfo['childnum'] + $orderInfo['oldprice'] * $orderInfo['oldnum'];
                    $total_fee    = intval($total)*100;//元 变成 分的单位
                    $refund_fee   = $total_fee;
                    include_once(VENDORPATH."WxpayAPI_php_v3.0.1/lib/WxPay.Api.php");
                    $input = new WxPayRefund();
                    $wxapi = new WxPayApi();
                    $input->SetOut_trade_no($out_trade_no);//订单号
                    $input->SetTotal_fee($total_fee);// 订单总额
                    $input->SetRefund_fee($refund_fee);//订单 退款金额
                    $input->SetOut_refund_no($out_trade_no.date("YmdHis"));//退款单号
                    $input->SetOp_user_id('1246273501');//设置操作员帐号, 默认为商户号
                    $result =$wxapi->refund($input);
                    if($result['return_code']=='SUCCESS'){
                          // 加 库存、
                        Common::refundStorage($orderInfo['id'],'plus');
                        $m->status =4;
                    }else{
                        $m->refundtime=time();
                        $m->status =6;
                    }

                }else{
                    $m->refundtime=time();
                    $m->status =6;
                }

            }else{

                $m->refundtime=time();
                $m->status =6;
            }



        }
        else{
            $m->status = 3;//取消订单
        }
        $m->save();



        if($m->saved())

        {

            $flag = 1;

        }

        echo json_encode(array('status'=>$flag));



    }
    /*
      *  删除收藏
      */
    public function action_delmylike(){

        $data['openid'] = Common::session("openid");

        $data['typeid'] =$this->_typeid;

        $data['productid'] = Common::remove_xss($_POST['productaid']);

        $re=  DB::delete('like_notes')->where('openid', '=', $data['openid']);

        $re->and_where('typeid',"=",$data['typeid']);

        $result =array();
        foreach($data['productid'] as $k=>$v){

            $result[$k] =   $re->and_where('productid',"=",$v)->execute();
        }


        $message=array('msg'=>'删除成功','status'=>0);

        echo json_encode($message);
    }

    public function getSignPackage() {
        $jsapiTicket = $this->getJsApiTicket();

        // 注意 URL 一定要动态获取，不能 hardcode.
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $timestamp = time();
        $nonceStr = $this->createNonceStr();

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
            "appId"     => $this->appId,
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature,
            "rawString" => $string
        );
        return $signPackage;
    }

    private function createNonceStr($length = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    private function getJsApiTicket() {
        // jsapi_ticket 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("jsapi_ticket.php"));
        if ($data->expire_time < time()) {
            $accessToken = $this->getAccessToken();
            // 如果是企业号用以下 URL 获取 ticket
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
            $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
            $res = json_decode($this->httpGet($url));
            $ticket = $res->ticket;
            if ($ticket) {
                $data->expire_time = time() + 7000;
                $data->jsapi_ticket = $ticket;
                $this->set_php_file("jsapi_ticket.php", json_encode($data));
            }
        } else {
            $ticket = $data->jsapi_ticket;
        }

        return $ticket;
    }

    private function getAccessToken() {
        // access_token 应该全局存储与更新，以下代码以写入到文件中做示例
        $data = json_decode($this->get_php_file("access_token.php"));
        if ($data->expire_time < time()) {
            // 如果是企业号用以下URL获取access_token
            // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
            $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
            $res = json_decode($this->httpGet($url));
            $access_token = $res->access_token;
            if ($access_token) {
                $data->expire_time = time() + 7000;
                $data->access_token = $access_token;
                $this->set_php_file("access_token.php", json_encode($data));
            }
        } else {
            $access_token = $data->access_token;
        }
        return $access_token;
    }

    private function httpGet($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);

        return $res;
    }

    private function get_php_file($filename) {
        return trim(substr(file_get_contents($filename), 15));
    }
    private function set_php_file($filename, $content) {
        $fp = fopen($filename, "w");
        fwrite($fp, "<?php exit();?>" . $content);
        fclose($fp);
    }


}