<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Visa extends Stourweb_Controller{
    /*
     * 签证总控制器
     * */

    private $typeid = 8;
    private $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get',$this->_cache_key);
        if(!empty($html))
        {
            echo $html;
            exit;
        }
        $channelname = Model_Nav::get_channel_name($this->typeid);
        $this->assign('typeid', $this->typeid);
        $this->assign('channelname', $channelname);
    }

    //首页
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $this->assign('seoinfo', $seoinfo);
        $this->display('visa/index');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }
    //详细页
    public function action_show()
    {
        $id = Common::remove_xss($this->request->param('aid'));
        $info = Model_Visa::visa_detail($id);
        //seo
        $seoInfo = Product::seo($info);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Visa::attr($info['attrid']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->typeid);
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->typeid) + intval($info['bookcount']);
        //产品编号
        $info['series'] = Product::product_number($info['id'], '08');
        //产品图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        $info['visatype'] = ORM::factory('visa_kind',$info['visatype'])->get('kindname');
		//面签
        $info['interview'] = $info['needinterview']==0?'不需要':$info['needinterview']==1?"需要":"领馆决定";
        //邀请函
        $info['letter'] = $info['needletter']==0?'不需要':$info['needletter']==1?"需要":"领馆决定";
        //附件
        $info['attachment']=unserialize($info['attachment']);
        //支付方式
        $paytypeArr=explode(',',$GLOBALS['cfg_pay_type']);

        //扩展字段信息
        $extend_info = Model_Visa::visa_extend($info['id']);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->assign('paytypeArr',$paytypeArr);
        $this->assign('extendinfo',$extend_info);
        $this->display('visa/show');
        Product::update_click_rate($info['aid'], $this->typeid);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);

    }


    //列表页
    public function action_list()
    {
        //参数值获取
        $countryPy = $this->request->param('countrypy');
        $sign = $this->request->param('sign');
        $cityId = intval($this->request->param('cityid'));
        $sortType = intval($this->request->param('sorttype'));
        $visaTypeid = intval($this->request->param('visatypeid'));
        $p = intval($this->request->param('p'));
        if(empty($countryPy))exit;
        $pagesize = 10;
        $keyword = Arr::get($_GET,'keyword');

        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'countrypy' => $countryPy,
            'cityid' => $cityId,
            'sorttype'=> $sortType,
            'visatypeid' => $visaTypeid
        );
        //$start_time=microtime(true); //获取程序开始执行的时间

        $out = Model_Visa::search_result($route_array,$keyword,$p,$pagesize);
        $pager = Pagination::factory(
            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),
                'view'=>'default/pagination/search',
                'total_items' => $out['total'],
                'items_per_page' => $pagesize,
                'first_page_in_url' => false,
            )
        );
        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);

        //国家信息

        $country = ORM::factory('visa_area')
            ->where("pinyin",'=',$countryPy)
            ->find()
            ->as_array();

        $country['banner'] = $country['bigpic'] ? $country['bigpic'] : $GLOBALS['cfg_public_url'].'images/guojia_bg.jpg';
        $country['name'] = $country['kindname'];
        $country['nation_flag'] = $country['countrypic'] ? $country['countrypic'] : Product::get_default_image();


        //$end_time=microtime(true);

        //$total=$end_time-$start_time; //计算差值

        $searchTitle = Model_Visa::gen_seotitle($route_array);

        $this->assign('country',$country);
        $this->assign('list',$out['list']);
        $this->assign('searchtitle',$searchTitle);
        $this->assign('param',$route_array);
        $this->assign('currentpage',$p);
        $this->assign('pageinfo',$pager);
        $this->display('visa/list');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }

    //团购预订
    public function action_book()
    {
        $userInfo = Product::get_login_user_info();
        //要求预订前必须登陆
        if(empty($userInfo['mid']))
        {
            $this->request->redirect('/member/login/?redirecturl='.urlencode(Common::get_current_url()));
        }
        $productId = Common::remove_xss(Arr::get($_GET,'productid'));
        $useDate = Common::remove_xss(Arr::get($_GET,'usedate'));
        $dingNum = Common::remove_xss(Arr::get($_GET,'dingnum'));
        //防止空提交
        if(empty($productId))
        {
            $this->request->redirect($this->request->referrer());
        }
        //产品信息
        $info = Model_Visa::visa_detail_id($productId);
        //产品编号
        $info['series'] = Product::product_number($info['id'], '08');
        $info['usedate'] = $useDate;
        $info['visatype'] = ORM::factory('visa_kind',$info['visatype'])->get('kindname');
        $info['dingnum'] = $dingNum;
        //frmcode
        $code = md5(time());
        Common::session('code',$code);
        //积分抵现所需积分
        $needjifen = $GLOBALS['cfg_exchange_jifen'] * $info['jifentprice']; //所需积分

        $this->assign('info',$info);
        $this->assign('userInfo',$userInfo);
        $this->assign('needjifen',$needjifen);
        $this->assign('frmcode',$code);
        $this->display('visa/book');
    }

    //保存订单
    public function action_create()
    {
        $frmCode = Arr::get($_POST,'frmcode');
        $checkCode = strtolower(Arr::get($_POST,'checkcode'));
        //验证码验证
        if(!Captcha::valid($checkCode)||empty($checkCode))
        {
            exit();
        }
        //安全校验码验证
        $orgCode = Common::session('code');
        if($orgCode!=$frmCode)
        {
            exit();
        }
        $userInfo = Product::get_login_user_info();
        $memberId = $userInfo ? $userInfo['mid'] : 0;//会员id
        $webid = intval(Arr::get($_POST,'webid'));//网站id
        $dingNum = intval(Arr::get($_POST,'dingnum'));//数量
        $suitId = 0 ;
        $productId = intval(Arr::get($_POST,'productid'));//产品id
        $useDate = Arr::get($_POST,'usedate');//使用日期

        $linkMan = Arr::get($_POST,'linkman');//联系人姓名
        $linkTel = Arr::get($_POST,'linktel');//联系人电话
        $linkEmail = Arr::get($_POST,'linkemail');//联系人邮箱
        $remark = Arr::get($_POST,'remark');//订单备注


        $payType = Arr::get($_POST,'paytype');//支付方式
        $useJifen = intval(Arr::get($_POST,'usejifen'));//是否使用积分

        //产品信息
        $info = Model_Visa::visa_detail_id($productId);
        $orderSn = Product::get_ordersn('08');
        //判断积分使用是否满足需求.
        $needJifen = 0;
        if($useJifen)
        {
            $needJifen = $GLOBALS['cfg_exchange_jifen'] * $info['jifentprice']; //所需积分
            if($userInfo['jifen']<$needJifen)
            {
                $useJifen = 0;
            }
        }
        //订单状态(全款支付,定金支付,二次确认)
        $status = $info['paytype'] != 3 ? 1 : 0;

        $arr = array(
            'ordersn'=>$orderSn,
            'webid'=>$webid,
            'typeid'=>$this->typeid,
            'productautoid'=>$info['id'],
            'productaid'=>$info['aid'],
            'productname'=>$info['title'],
            'price'=>$info['price'],
            'usedate'=>$useDate,
            'dingnum'=>$dingNum,
            'departdate'=>'',

            'linkman'=>$linkMan,
            'linktel'=>$linkTel,
            'linkemail'=>$linkEmail,
            'jifentprice'=>$info['jifentprice'],
            'jifenbook'=>$info['jifenbook'],
            'jifencomment'=>$info['jifencomment'],
            'addtime'=>time(),
            'memberid'=>$memberId,
            'dingjin'=>$info['dingjin'],
            'paytype'=>$info['paytype'],
            'suitid'=>$suitId,
            'usejifen'=>$useJifen,
            'needjifen'=>$needJifen,

            'status'=>$status,
            'remark'=>$remark,
            'isneedpiao'=>0

        );

        //添加订单
        if(Product::add_order($arr))
        {

            if($info['paytype']!=3)
            {
                $payurl = "{$GLOBALS['cfg_basehost']}/payment/?ordersn=".$orderSn;
                $this->request->redirect($payurl);
            }
            else
            {
                $this->request->redirect("/member");
            }


        }
    }

    //首页按目的地读取区域
    public function action_ajax_index_area()
    {
        $destid = Arr::get($_GET,'areaid');
        $pagesize = Arr::get($_GET,'pagesize');
        $list = Model_Visa::vias_area_by_id($destid,$pagesize);
        foreach($list as &$l)
        {
            $l['url'] = Common::get_web_url(0) . "/visa/{$l['pinyin']}/";
            $l['title'] = $l['kindname'];
        }
        echo json_encode(array('list'=>$list));
    }

    /*
     * 异步获取国家名称
     */
    public function action_ajax_nation()
    {
        if(!$this->request->is_ajax())exit;
        $keyword = Common::js_unescape(Arr::get($_GET,'keyword'));
        $rule = "/^[a-zA-Z]+$/i";
        if(!preg_match($rule, $keyword))
        {
           //按文字进行搜索
           $str = Model_Visa_Area::match_chinese($keyword);
        }
        else
        {
            //按拼音进行搜索
            $str = Model_Visa_Area::match_pinyin($keyword);
        }
        echo $str;

    }

    //异步获取区域拼音
    public function action_ajax_nation_pinyin()
    {
        if(!$this->request->is_ajax())exit;
        $kindname = Arr::get($_POST,'areaname');
        $pinyin = Model_Visa_Area::get_pinyin($kindname);
        echo json_encode(array('pinyin'=>$pinyin));

    }








}