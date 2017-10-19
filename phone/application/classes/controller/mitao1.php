<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Line
 * 米淘控制器
 */
class Controller_Mitao extends Stourweb_Controller
{
    private $_typeid = 106;   //产品类型
     //产品类型

    public function before()
    {
        parent::before();

        $arr =  Model_Mitao::GetOpenid('wxc1ee3ce4c8424f1b','a616e600fa4eaddacb4fa16a8d64af4f');
       // var_dump($arr);
        Common::session("openidArr",$arr);

        Common::session("openid",$arr['openid']);

        $this->assign('openid',$arr['openid']);

        $this->assign('typeid', $this->_typeid);

    }

    /**
     * 米淘搜索页
     */
    public function action_list()
    {
        Common::before_header();
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
        $info['price'] = Model_mitao::get_minprice($info['id']);
        $this->assign('info', $info);
        $this->assign('day', $day);
        $this->assign('suitid',$suitid);

        $member = Common::session('member');
        if (!empty($member))
        {
            $this->assign('member', Model_Member::get_member_byid($member['mid']));
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
            'usejifen' => $_POST['usejifen'] != 0 ? 1 : 0 //积分抵现
        );
        //添加订单
        if (Product::add_order2($arr))
        {

            $orderInfo = Model_Member_Order::get_order_by_ordersn($ordersn);
            Model_Member_Order::add_tourer($orderInfo['id'], $_POST);
            //如果是立即支付则执行支付操作,否则跳转到产品详情页面
            if ($info['status'] == 1)
            {
                $html = Common::payment_from(array('ordersn' => $ordersn));
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


        $id = Common::remove_xss($this->request->param('aid'));
//        if(isset($_GET['code'])){
//           $code  = $_GET['code'];
//        }else{
//           $redirect_url = urlencode("http://www.aitto.net/phone/mitaos/show_$id.html?is_expire=$is_expire");
//            header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdf8497303505ae0d&redirect_uri='.$redirect_url.'&response_type=code&scope=snsapi_base&state=1#wechat_redirect');
//        }

        //==============
        //米淘详情
        $info = Model_mitao::detail($id);
        //点击率加一
        Product::update_click_rate($id, $this->_typeid);
        //seo
        $seoInfo = Product::seo($info);
        //获取套餐起止日期
        $info['linedate'] = Model_mitao::line_date($info['id']);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
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
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']);
        // 剩余库存
        $info['stock'] = Model_mitao::get_stock($info['id'])*1-$info['sellnum']*1;
        //产品编号
        $info['lineseries'] = Product::product_number($info['id'], '01');

        $info['kefuphoneArr']  =  explode(",",$info['kefuphone']);

        $this ->assign('countPhone',count( $info['kefuphoneArr']));
        $this->assign('seoinfo', $seoInfo);
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
        if(isset($arr['errcode'])){
            echo "这里需处理";
        }else{

            $openid         = $arr['openid'];

            $access_token  = $arr['access_token'];// 有效期 2小时

            $url_getuserinfo =  'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';

            $userinfo        = Model_Article::curl($url_getuserinfo);

            $userinfo_local  =  Model_Mitao::getUserInfo($openid);

            // 判断 用户是否存在
            if(empty($userinfo_local)){
                // 不存在 插入用户
                $data['openid'] =$openid;
                $result = DB::insert('member', array_keys($data))->values(array_values($data))->execute();
                if($result[1]>0){
                     $mes['mid']=$result[0];
                     Common::session("member",$mes);
                }
            }else{
                //  存在 产生用户的session  mid
                $mes['mid']=$userinfo_local['mid'];
                Common::session("member",$mes);
            }
            $this->assign('userinfo',$userinfo);
            $this->display('mitao/member/person-index');
        }

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
        $sex  = Common::remove_xss($this->request->param('sex'));
        $openid  = Common::remove_xss($this->request->param('openid'));

        $sex = $sex=='1'? '女' : $sex=='2' ?  '男' :'保密';
        $query = DB::select()->from('member')->where('openid', '=', $openid);
        $arr  = $query->execute()->as_array();
        if(empty($query)){
            $re= DB::insert('member', array('openid', 'sex'))->values(array($openid, $sex))->execute();
            if($re[1]){
                echo json_encode(array('msg'=>'修改成功','status'=>1));
            }
        }else{
            $re= DB::update('member')->set(array('sex' => $sex))->where('openid', '=', $openid)->execute();
            if($re){
                echo json_encode(array('msg'=>'更新成功','status'=>1));
            }
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
        $name  = Common::remove_xss($this->request->param('name'));
        $openid  = Common::remove_xss($this->request->param('openid'));

        $query = DB::select()->from('member')->where('openid', '=', $openid);
        $arr  = $query->execute()->as_array();
        if(empty($query)){
           $re= DB::insert('member', array('openid', 'truename'))->values(array($openid, $name))->execute();
           if($re[1]){
              echo json_encode(array('msg'=>'修改成功','status'=>1));
           }
        }else{
            $re= DB::update('member')->set(array('truename' => $name))->where('openid', '=', $openid)->execute();
            if($re){
                echo json_encode(array('msg'=>'更新成功','status'=>1));
            }
        }

    }
    /*
     *   验证手机页面
     */
    public function  action_checkPhone(){

        $this->display('mitao/member/person-admin-tel02');
    }
    /**
     * 快捷登陆发送验证码
     */
    public function action_ajax_send_message_fast(){
        //fengjishu 08.17 将验证 和 发送短信分离
        $phone = Arr::get($_POST, 'phone');
        $code = rand(1000, 9999);
        $model = ORM::factory('sms_msg');
        $content = $model->message_template('reg_msgcode');
        $content = str_replace(array('{#CODE#}', '{#WEBNAME#}', '{#PHONE#}'), array($code, $GLOBALS['cfg_webname'], $GLOBALS['cfg_phone']), $content);

        $status = $model->send_message($phone, $code, $content);
        echo $status;exit;
        //  echo intval($status);
    }

    //fengjishu 新加 ajax  验证手机号码 检测用户
    public  function  action_ajax_validation(){
        $validataion = Validation::factory($this->request->post());
        $validataion->rule('phone', 'not_empty');
        $validataion->rule('phone', 'phone');
        // fengjishu 09.29
        $fast    =trim($_POST['fastlogin']);//

        if (!$validataion->check())
        {
            exit(__('error_user_phone'));
        }
        //检测用户是否存在
        $phone = Arr::get($_POST, 'phone');
        $member = Model_Member::member_find($phone);

        if (empty($member))
        {
            if(!empty($fast)&&$fast=='fastlogin'){
                echo 1;
            }else{
                exit(__('账号不存在'));
            }

        }else{

            echo 1;
        }
    }

    /*
     *   我的订单
     */

    public function  action_order_all(){
        $row = $this->get_list();

        $this->assign('data', $row);
        $this->display("mitao/order/person-order");
    }

    /**
     * 获取订单列表
     * @return mixed
     */
    private function get_list()
    {
        $member= Common::session('member');
        $member['mid'] =$member['mid'];
        $row = Model_Member_Order::order_list($member['mid']);
        $row = self::get_data_initialization($row);
        return $row;
    }
    /**
     * 订单列表数据处理
     * @param $data
     * @return mixed
     */
    private function get_data_initialization($data)
    {
        foreach ($data as &$v)
        {
            //订单详情
            $v['url'] = Common::get_web_url($v['webid']) . "/member/order/show?id={$v['id']}";
            //支付url
            $v['payurl'] = Common::get_main_host() . "/payment/?ordersn={$v['ordersn']}"."&paytype=".$v['paytype'];

            //评论url
            $v['commenturl'] = Common::get_web_url($v['webid']) . "/member/comment/index?id={$v['id']}";
            //产品缩略图
            $v['litpic'] = Common::img($v['litpic'], 150, 90);
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


}