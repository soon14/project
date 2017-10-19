<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Line
 * 线路控制器
 */
class Controller_Line extends Stourweb_Controller
{
    private $_typeid = 1;   //产品类型

    public function before()
    {
        parent::before();

        $channelname = Model_Nav::get_channel_name($this->_typeid);
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', $channelname);
    }

    /**
     * 线路首页
     */
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo($this->_typeid);
        $this->assign('seoinfo', $seoinfo);
        $this->display('line/index');
    }

    /**
     * 线路搜索页
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
        $this->display('line/list');
    }

    /**
     * 线路搜索页(搜索初始页)
     */
    public function action_search()
    {
        $this->display('line/search');
    }

    /**
     * 线路预订
     */
    public function action_book()
    {
        $userinfo = Common::session('member');
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
        {
            $this->request->redirect(Common::get_main_host().'/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $productid = $this->params['id'];
        $info = ORM::factory('line', $productid)->as_array();
        $info['price'] = Model_Line::get_minprice($info['id']);
        $this->assign('info', $info);
        $this->assign('userinfo', $userinfo);
        $member = Common::session('member');
        if (!empty($member))
        {
            $this->assign('member', Model_Member::get_member_byid($member['mid']));
        }
        $this->display('line/book');
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

        $info = ORM::factory('line')->where("id=$id")->find()->as_array();
        $suitArr = ORM::factory('line_suit')
            ->where("id=:suitid")
            ->param(':suitid', $suitid)
            ->find()
            ->as_array();
        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
        $priceArr = ORM::factory('line_suit_price')->where("day=" . strtotime($startdate) . " and suitid=" . $suitid)->find()->as_array();

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
        if (Product::add_order($arr))
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
     * 线路内容页
     */
    public function action_show()
    {
        $id = Common::remove_xss($this->request->param('aid'));
        $is_expire  = $_GET['is_expire'];
        if(isset($_GET['code'])){
           $code  = $_GET['code'];
        }else{
           $redirect_url = urlencode("http://www.aitto.net/phone/lines/show_$id.html?is_expire=$is_expire");
            header('Location:https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxdf8497303505ae0d&redirect_uri='.$redirect_url.'&response_type=code&scope=snsapi_base&state=1#wechat_redirect');
        }
        //子站内容显示
        if (isset($_GET[webid]))
        {
            $GLOBALS['sys_webid'] = Common::remove_xss(Arr::get($_GET, 'webid'));
        }
        //================2017.05.27 fengjishu


        //==============
        //线路详情
        $info = Model_Line::detail($id);
        //点击率加一
        Product::update_click_rate($id, $this->_typeid);
        //seo
        $seoInfo = Product::seo($info);
        //获取套餐起止日期
        $info['linedate'] = Model_Line::line_date($info['id']);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Line::line_attr($info['attrid']);
        //最低价
        $info['price'] = Model_Line::get_minprice($info['id']);
        //出发城市
        $info['startcity'] = Model_Startplace::start_city($info['startcity']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid);
        $info['satisfyscore'] = Model_Comment::get_score($info['id'], $this->_typeid, $info['satisfyscore'], $info['commentnum']);//满意度
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']);
        // 剩余库存
        $info['stock'] = Model_line::get_stock($info['id'])*1-$info['sellnum']*1;
        //产品编号
        $info['lineseries'] = Product::product_number($info['id'], '01');
        $this->assign("code",$code);
        $this ->assign("is_expire",$is_expire);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->display('line/show');
    }


    /**
     * 获取套餐人群
     */
    public function action_ajax_suit_people()
    {
        $out = array();
        $suitid = Arr::get($_GET, 'suitid');
        $row = ORM::factory('line_suit', $suitid)->as_array();
        $group_arr = explode(',', $row['propgroup']);

        //获取最接近当前日期的报价
        $day = time();
        $ar = Model_Line_Suit_Price::get_price_byday($suitid, $day);
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
        $ar = Model_Line_Suit_Price::get_price_byday($suitid, $useday);
        echo json_encode($ar[0]);
    }

    /**
     * ajax请求 加载更多
     */
    public function action_ajax_line_more()
    {
        $urlParam = $this->request->param('params');
        $keyword = Arr::get($_GET, 'keyword') ? Arr::get($_GET, 'keyword') : '';
        $data = Model_Line::search_result($urlParam, $keyword);
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
        $rows = Model_Line::search_comment($aid,$offset,$pagesize);
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
}