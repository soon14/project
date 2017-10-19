<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Tuan extends Stourweb_Controller{
    /*
     * 团购总控制器
     * */

    private $typeid = 13;
    private $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get',$this->_cache_key);
        $genpage = Common::remove_xss(Arr::get($_GET,'genpage'));
        if(!empty($html) && empty($genpage))
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
        $templet = Product::get_use_templet('tuan_index');
        $templet = $templet ? $templet : 'tuan/index';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }
    //详细页
    public function action_show()
    {
        $id = Common::remove_xss($this->request->param('aid'));
        $info = Model_Tuan::tuan_detail($id);
        //seo
        $seoInfo = Product::seo($info);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Tuan::attr($info['attrid']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->typeid);
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->typeid) + intval($info['virtualnum']);
        //产品编号
        $info['series'] = Product::product_number($info['id'], '13');
        //产品图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);
        //折扣
        $info['discount'] =  $info['price'] == $info['sellprice'] ? '不打折' : round($info['price'] / $info['sellprice'], 2) * 10;
        //支付方式
        $paytypeArr=explode(',',$GLOBALS['cfg_pay_type']);


        //是否过期
        $info['expire'] = ($info['starttime']<= time() && $info['endtime'] >= time()) ? 0 : 1;

        //扩展字段信息
        $extend_info = Model_Tuan::tuan_extend($info['id']);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->assign('paytypeArr',$paytypeArr);
        $this->assign('extendinfo',$extend_info);
        $templet = Product::get_use_templet('tuan_show');
        $templet = $templet ? $templet : 'tuan/show';
        $this->display($templet);
        Product::update_click_rate($info['aid'], $this->typeid);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);

    }


    //列表页
    public function action_list()
    {
        //参数值获取
        $destPy = $this->request->param('destpy');
        $sign = $this->request->param('sign');
        $status = intval($this->request->param('status'));
        $sortType = intval($this->request->param('sorttype'));
        $attrId = $this->request->param('attrid');
        $p = intval($this->request->param('p'));
        $attrId = !empty($attrId) ? $attrId : 0;

        $destPy = $destPy ? $destPy : 'all';
        $pagesize = 12;
        $keyword = Arr::get($_GET,'keyword');


        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'status'=> $status,
            'sorttype'=> $sortType,
            'attrid' => $attrId,
        );
        //$start_time=microtime(true); //获取程序开始执行的时间

        $out = Model_Tuan::search_result($route_array,$keyword,$p,$pagesize);
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
        $destId = $destPy=='all' ? 0 : ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('id');
        $destId = $destId ? $destId : 0;
        //目的地信息
        $destInfo = array();
        $preDest = array();
        if($destId)
        {
            $destInfo = ORM::factory('destinations',$destId)->as_array();
            $preDest = Model_Destinations::get_prev_dest($destId);
        }
        //$end_time=microtime(true);

        //$total=$end_time-$start_time; //计算差值



        $chooseitem = Model_Tuan::get_selected_item($route_array);
        $searchTitle = Model_Tuan::gen_seotitle($route_array);
        $this->assign('destid',$destId);
        $this->assign('destinfo',$destInfo);
        $this->assign('predest',$preDest);
        $this->assign('list',$out['list']);
        $this->assign('chooseitem',$chooseitem);
        $this->assign('searchtitle',$searchTitle);
        $this->assign('param',$route_array);
        $this->assign('currentpage',$p);
        $this->assign('pageinfo',$pager);
        $templet = Product::get_use_templet('tuan_list');
        $templet = $templet ? $templet : 'tuan/list';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }

    //团购预订
    public function action_book()
    {

        //会员信息
        $userInfo = Product::get_login_user_info();
        //要求预订前必须登陆
        if(empty($userInfo['mid']))
        {
            $this->request->redirect('/member/login/?redirecturl='.urlencode(Common::get_current_url()));
        }

        $productId = Common::remove_xss(Arr::get($_GET,'productid'));
        if(empty($productId))
        {
            $this->request->redirect($this->request->referrer());
        }
        //产品信息
        $info = Model_Tuan::tuan_detail_id($productId);
        //产品编号
        $info['series'] = Product::product_number($info['id'], '13');

        //frmcode
        $code = md5(time());
        Common::session('code',$code);
        //积分抵现所需积分
        $needjifen = $GLOBALS['cfg_exchange_jifen'] * $info['jifentprice']; //所需积分

        $this->assign('info',$info);
        $this->assign('userInfo',$userInfo);
        $this->assign('needjifen',$needjifen);
        $this->assign('frmcode',$code);
        $this->display('tuan/book');
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
        $info = Model_Tuan::tuan_detail_id($productId);
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

    //首页按目的地读取数据
    public function action_ajax_index_tuan()
    {
        $destid = Arr::get($_GET,'destid');
        $pagesize = Arr::get($_GET,'pagesize');
        $list = Model_Tuan::tuan_by_mdd($destid,0,$pagesize);
        echo json_encode(array('list'=>$list));
    }








}