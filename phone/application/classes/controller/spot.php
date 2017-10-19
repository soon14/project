<?php defined('SYSPATH') or die('No direct script access.');


/**
 * Class Controller_Spot 门票景点
 */
class Controller_Spot extends Stourweb_Controller
{
    private $_typeid = 5;   //产品类型

    // 现在 为 河北旅游 的  appid  和secret
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
        $channelname = Model_Nav::get_channel_name($this->_typeid);
        $this->assign('typeid', $this->_typeid);
        $this->assign('channelname', $channelname);

        //分享用到的参数
        $signPackage = $this->GetSignPackage();
        $this->assign('signPackage',$signPackage);
    }

    /*
     * 景点首页
     * */
    public function  action_index()
    {   $model            = new Model_Nav();
        $sql  = "select id,attrname from `sline_spot_attr` where isopen=1 and pid=13 order by displayorder limit 0,4";
        $sql1  = "select id,attrname from `sline_spot_attr` where isopen=1 and pid=13 order by displayorder limit 4,4";
        $seoinfo = Model_Nav::get_channel_seo($this->_typeid);
        $attr2 = $model->get_sql($sql,1);
        $attr1 = $model->get_sql($sql1,1);
        $attr[0]  =$attr2;
        $attr[1]  =$attr1;
        $attrs   =array(0=>array(   0=>array('theme'=>"游乐场",'pic_url'=>"ico003",'themeid'=>'45'),
                                    1=>array('theme'=>"周末游",'pic_url'=>"ico004",'themeid'=>'31'),
                                    2=>array('theme'=>"亲子",'pic_url'=>"ico005",'themeid'=>'4'),
                                    3=>array('theme'=>"山水",'pic_url'=>"ico009",'themeid'=>'29'),
                                    4=>array('theme'=>"湖泊海洋",'pic_url'=>"ico007",'themeid'=>'32')
                          ),
                         1=>array(

                                    0=>array('theme'=>"漂流",'pic_url'=>"ico006",'themeid'=>'34'),
                                    1=>array('theme'=>"划船",'pic_url'=>"ico008",'themeid'=>'33'),
                                    2=>array('theme'=>"瀑布",'pic_url'=>"ico010",'themeid'=>'46'),
                                    3=>array('theme'=>"草原",'pic_url'=>"ico0011",'themeid'=>'2'),
                                    4=>array('theme'=>"古镇",'pic_url'=>"ico0012",'themeid'=>'10'),
            )
        );
        $this  ->assign("attrs",$attrs);
        $this  ->assign("tick",$getticket);
        $this  ->assign("attr",$attr);
        $this->assign('seoinfo', $seoinfo);
        $this->display('spot/index');
    }
    /*
     * 列表页面
     * */
    public function action_list()
    {
        //参数处理
        $urlParam = $this->request->param('params');
        $destPy = 'all';
        $priceId = $sortType = $keyword = $attrId = $page = 0;
        $params = explode('-', str_replace('/', '-', $urlParam));
        $count = count($params);
        switch ($count)
        {
            //目的地
            case 1:
                list($destPy) = $params;$flagattr="mdd";
                break;
            //关键字、属性
            case 5 :$flagattr ="attr";
            case 6:
                list($destPy, $priceId, $sortType, $keyword, $attrId, $page) = $params;
                break;
        }
        $keyword = Arr::get($_GET, 'keyword');
        $pinyin = Arr::get($_GET, 'pinyin');
        $attrId = Arr::get($_GET, 'attrid');
        $themeid = Arr::get($_GET, 'themeid');
        $greatid = Arr::get($_GET, 'greatid');

        $sortType =Arr::get($_GET, 'sorttype');

       // $destname = $destPy != 'all' ? ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('kindname') : '目的地';
        $destname   ='目的地';//隐藏 上 上面的  变量 重新定义
        $page = empty($page) ? 1 : $page;
        //获取seo信息
        $seo = Model_Hotel::search_seo($destPy,$this->_typeid);
        //获取 spot _attr 表的数据
        $at1      =Model_Spot::get_theme();
        $at2      =Model_Spot::get_dengji();
        $destnam = isset($pinyin)&&$pinyin!='' ? ORM::factory('destinations')->where("pinyin='$pinyin'")->find()->get('kindname') : '目的地';
        $theme   = isset($themeid) ? ORM::factory('spot_attr')->where("id='$themeid'")->find()->get('attrname') : '';
        $grea    = isset($greatid) ? ORM::factory('spot_attr')->where("id='$greatid'")->find()->get('attrname') : '';
        $atr     = isset($attrId) ? ORM::factory('spot_attr')->where("id='$attrId'")->find()->get('attrname') : '';

        $this  ->assign("destnam",$destnam);
        $this->assign("grea",$grea);
        $this->assign("theme",$theme);
        $this->assign("atr",$atr);
        $this->assign("pinyin",$pinyin);// 搜索页面 和 列表页面 跳转过来的id
        $this->assign("attrId",$attrId);//搜索页面 跳转过来的属性 id
        $this->assign("themeid",$themeid);//列表页 主题 跳转过来的id
        $this->assign("greatid",$greatid);// 列表页 等级 跳转过来的id
        $this->assign('flagattr',$flagattr);//设置 数据是有什么属性查询的
        $this->assign('seoinfo', $seo);// title 信息
        $this->assign('spotattr',$at);//  景点 主题 和景点等级 的 变量
        $this->assign('spat1',$at1);  // 景点主题的  所有子主题
        $this->assign('spat2',$at2);  //  景点等级 的 所有等级符号
        $this->assign('destpy', Common::remove_xss($destPy));
        $this->assign('destname', $destname);
        $this->assign('sorttype', Common::remove_xss($sortType));
        $this->assign('keyword', Common::remove_xss($keyword));
        $this->assign('attrid', Common::remove_xss($attrId));
        $this->assign('priceid', Common::remove_xss($priceId));
        $this->assign('page', $page);
        //$this->display('spot/list');
        $this->display('spot/Ticket-list');
    }

    /*
     * 景点/门票详细页
     * */
    public function action_show()
    {

        $aid = $this->request->param('aid');

        $admin  =    Arr::get($_GET, 'admin');
        //子站内容显示
        if (isset($_GET[webid]))
        {
            $GLOBALS['sys_webid'] = Common::remove_xss(Arr::get($_GET, 'webid'));
        }
        $row = ORM::factory('spot')
            ->where("webid=" . $GLOBALS['sys_webid'] . " AND aid='$aid'")
            ->find()
            ->as_array();
        //点击率加一
        Product::update_click_rate($aid, $this->_typeid);
        //========Mr.feng写入
        $tinfo        =   Model_Spot::get_ticketinfo($row['id']);
        //========
        //扩展字段信息
        $extend_info  = Model_Spot::get_extend_info($row['id']);
        $seoinfo      = Product::seo($row);
        $priceArr     = Model_Spot::get_minprice($row['id']);

        $row['hasticket']      = Model_Spot::has_ticket($row['id']);
         //  是否有套餐
        if($row['hasticket']){
            $arr = ORM::factory('spot_ticket')->where("spotid='$row[id]'")->get_all();
            $row['linedate1']= unserialize($arr[0]['lastoffer']);
        }
        // 剩余库存
        $row['stock']          = Model_Spot::get_stock($row['id'])*1;
        $row['piclist']        = Product::pic_list($row['piclist']);
        $row['price']          = $priceArr['price'];
        $row['sellprice']      = $priceArr['sellprice'];
        $row['attrlist']       = Model_Spot_Attr::get_attr_list($row['attrid']);//属性列表.
        $row['commentnum']     = Model_Comment::get_comment_num($row['id'], 5); //评论次数
        $row['satisfyscore']   = (int)Model_Comment::get_score($row['id'], $this->_typeid, $row['satisfyscore'], $row['commentnum']);//满意度
        $row['sellnum']        = Model_Member_Order::get_sell_num($row['id'], 5) + intval($row['bookcount']); //销售数量

       // echo $row['hasticket'];exit;
        $this->assign('ticketInfo', $tinfo);
        $this->assign('seoinfo', $seoinfo);
        $this->assign('info', $row);
        $this->assign('extendinfo', $extend_info);
        $this ->assign('aid',$aid);

        //$this->display('spot/ticket-page');
        $this->display('spot/newshow');
    }
    /*
     * map 地图页面
     * */
    public function  action_map(){
       // $aid =$this->request->param('aid');
        $aid = Common::remove_xss(Arr::get($_GET, 'aid'));
        $row = ORM::factory('spot')
            ->where("aid='$aid'")
            ->find()
            ->as_array();
        $this->assign("info",$row);
        $this->assign("aid",$aid);
        $this->display('spot/map');
    }
    /*
    * 门票 说明页面
    * */
    public function  action_TicketDes(){
        $tid   = Common::remove_xss(Arr::get($_GET, 'tid'));
        $tinfo = Model_Spot::get_ticket_Single_info($tid);
        $this->assign("tinfo",$tinfo);
        $this->display('spot/ticke-show');
    }
    /*
    * 门票预订
     * */
    public function action_book()
    {
        //要求预订前必须登陆
       // echo Common::get_current_url();exit;
//        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
//        {
//            $this->request->redirect(Common::get_main_host().'/phone/member/login?redirecturl=' . Common::get_current_url());
//        }
        $productid = Common::remove_xss($this->params['id']);

        $day       =Common::remove_xss(Arr::get($_GET, 'day'));

        $openid    =Common::session("openid");
        $suitid    =Common::remove_xss($_GET['suitid']);

        $info = ORM::factory('spot', $productid)->as_array();

        $extendInfo = Model_Spot::get_extend_info($info['id']);
        if(!empty($extendInfo['e_limitnum'])) {
            $info['canbuy'] = $this->_canBuy($info['aid'], $openid, $extendInfo['e_limitnum'], $this->_typeid);
        }else{
            $info['canbuy'] =-1;
        }
        $this->assign('info', $info);
        $this->assign('suitid',$suitid);
        $this->assign('day', $day);
        //=====================

        $suit = ORM::factory('spot_ticket')
            ->where("id='$suitid'")//
            ->get_all();
        foreach($suit as $key=> &$r)
        {
            $tickettype = ORM::factory('spot_ticket_type',$r['tickettypeid'])->get('kindname');
            $r['ticketname'] = $r['title'];
            $title = $r['title'].'('.$tickettype.')';
            $r['title'] = $title;
            $r['sellprice'] = Currency_Tool::price($r['sellprice']);
            $r['ourprice'] = Currency_Tool::price($r['ourprice']);//fengjishu 08.01 一暗藏

        }

        $openid =Common::session("openid");
        //  验证是否存在 该用户
        $mem = Model_Mitao::getUserInfo($openid);
        $this -> assign('suit',$suit[0]);
        $this->assign('member',$mem);
        $this->display('spot/book');
       // $this->display('spot/newbook');

    }
    public function action_book1()
    {
        $userinfo = Common::session('member');
        //要求预订前必须登陆
        // echo Common::get_current_url();exit;
//        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
//        {
//            $this->request->redirect(Common::get_main_host().'/phone/member/login?redirecturl=' . Common::get_current_url());
//        }
        $productid = Common::remove_xss($this->params['id']);
        //=========FENGJISHU START
        $get_title =Common::remove_xss($_GET['title']);// 票的title

        $suitid    =Common::remove_xss($_GET['suitid']);// 票的title

        //=========FENGJISHU END
        $info = ORM::factory('spot', $productid)->as_array();
        // echo $info['title'];exit;
        $priceArr = Model_Spot::get_minprice($info['id']);
        $info['price'] = $priceArr['price'];
        //$info['title']  = isset($get_title)?$get_title:$info['title'];
        $this->assign('info', $info);
        //=====================
        //新增  fengjishu 从 /phone/taglib/spot 中取得 因为之前前台页面从 这个方法中调取 先在这里直接调取
        $suit = ORM::factory('spot_ticket')
            ->where("id='$suitid'")//07.27 fengjishu修改
            ->get_all();
        foreach($suit as $key=> &$r)
        {
            $tickettype = ORM::factory('spot_ticket_type',$r['tickettypeid'])->get('kindname');
            $r['ticketname'] = $r['title'];
            $title = $r['title'].'('.$tickettype.')';
            $r['title'] = $title;
            $r['sellprice'] = Currency_Tool::price($r['sellprice']);
            $r['ourprice'] = Currency_Tool::price($r['ourprice']);//fengjishu 08.01 一暗藏

        }
        //====================
        // $this->assign('userinfo', $userinfo);
        $this -> assign('suit',$suit[0]);
        $member = Common::session('member');
        if (!empty($member))
        {
            $this->assign('member', Model_Member::get_member_byid($member['mid']));
        }
        $this->display('spot/book');
    }

    /*
     * 创建订单
     * */
    public function action_create()
    {
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;
        //套餐id
        $suitid = Arr::get($_POST, 'suitid');//spot ticket 表  fengjishu
        //联系人
       // $linkman = Arr::get($_POST, 'linkman');
        $linkman = Arr::get($_POST, 'user');
        //手机号
       // $linktel = Arr::get($_POST, 'linktel');
        $linktel = Arr::get($_POST, 'userPhone');

        $linkidcard = Arr::get($_POST, 'linkidcard');
        //备注信息
        $remark = Arr::get($_POST, 'remark');
        //产品id
        $id = Arr::get($_POST, 'productid');
        //使用时间
       // $usedate = Arr::get($_POST, 'usedate');
        $usedate = Arr::get($_POST, 'usedate');
          //=======fengjishu  对使用时间的处理start 08.05
           $t  = array();
           $t  =explode("-",$usedate);
           if(strlen($t[1])==1){
               $t[1] ="0".$t[1];
           }
           if(strlen($t[2])==1){
               $t[2] ="0".$t[2];
           }
        $usedate = $t[0]."-".$t[1]."-".$t[2];
          //=======fengjishu  end

        //预订数量
       // $dingnum = Arr::get($_POST, 'dingnum');
        $dingnum = Arr::get($_POST, 'qty_item_1');



        //验证部分
        $validataion = Validation::factory($_POST);
//        $validataion->rule('linktel', 'not_empty');
//        $validataion->rule('linktel', 'phone');
//        $validataion->rule('linkman', 'not_empty');
        $validataion->rule('userPhone', 'not_empty');
        $validataion->rule('userPhone', 'phone');
        $validataion->rule('user', 'not_empty');

        if (!$validataion->check())
        {
            $error = $validataion->errors();
            $keys = array_keys($validataion->errors());
            Common::message(array('message' => __("error_{$keys[0]}_{$error[$keys[0]][0]}"), 'jumpUrl' => $refer_url));
             exit;
        }
        $openid=Common::session("openid");


        $info = ORM::factory('spot')->where("id=$id")->find()->as_array();

        $extendInfo = Model_Spot::get_extend_info($id);
        if(!empty($extendInfo['e_limitnum'])) {
            $canbuy = $this->_canBuy($info['aid'], $openid, $extendInfo['e_limitnum'], $this->_typeid,$linktel);
            if(intval($dingnum)>$canbuy){
                Common::message(array('message' => __("您只能购买".$canbuy."个产品"), 'jumpUrl' => $refer_url));
                exit;
            }
        }

        $suitArr = ORM::factory('spot_ticket')
            ->where("id=:suitid")
            ->param(':suitid', $suitid)
            ->find()
            ->as_array();
        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
       //$suitArr['dingjin'] = $suitArr['number'];
        if(intval($dingnum)>intval($suitArr['number'])&&intval($suitArr['number'])!=-1){
            Common::message(array('message' => __("库存不足"), 'jumpUrl' => $refer_url));
            exit;
        }

        //==========engjishu  07.27
        $suitArr['lastoffer'] =unserialize($suitArr['lastoffer']);
        $info['spotprice']    =$suitArr['lastoffer']['adultbasicprice']*$dingnum*1;
        //==========fengjishu 07.27

        if ($suitArr['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.
        {
            $info['status'] = 0;
        } else
        {
            $info['status'] = 1;
        }
        $info['name'] = $info['title'] . "({$suitArr['title']})";
        $info['paytype'] = $suitArr['paytype'];
        $info['dingjin'] = doubleval($suitArr['dingjin']);
        $info['jifentprice'] = intval($suitArr['jifentprice']);//返回整数
        $info['jifenbook'] = intval($suitArr['jifenbook']);
        $info['jifencomment'] = intval($suitArr['jifencomment']);
        $info['ourprice'] = doubleval($suitArr['ourprice']);// fengjishu 08.01 xiugai
        $info['ourprice'] = $suitArr['ourprice'];
        $info['childprice'] = 0;
        $info['usedate'] = $usedate;
        $ordersn = Product::get_ordersn('05');
        $arr = array(
            'ordersn' => $ordersn,
            'webid' => 0,
            'typeid' => $this->_typeid,
            'openid' => $openid,
            'productautoid' => $id,
            'productaid' => $info['aid'],
            'productname' => $info['name'],
            'litpic' => $info['litpic'],
            'price' => $info['ourprice'],
            'spotprice' =>$info['spotprice'],//fengjishu 07.27 jia

            'partner_number' =>  $suitArr['PartnerNumber'],
            'childprice' => $info['childprice'],
            'jifentprice' => $info['jifentprice'],
            'jifenbook' => $info['jifenbook'],
            'jifencomment' => $info['jifencomment'],
            'paytype' => $info['paytype'],
            'dingjin' => $info['dingjin'],
            'usedate' => $info['usedate'],
            'departdate' => '',
            'addtime' => time(),
            'memberid' => null,
            'dingnum' => $dingnum,
            'childnum' => 0,
            'oldprice' => 0,
            'oldnum' => 0,
            'linkman' => $linkman,
            'linktel' => $linktel,
            'linkidcard' => $linkidcard,
            'suitid' => $suitid,
            'remark' => $remark,
            'status' => $info['status'] ? $info['status'] : 0,
            'usejifen' => $_POST['usejifen'] != 0 ? 1 : 0 ,//积分抵现
            'refundtype' => $info['refundtype'] ? $info['refundtype'] : 0// 订单的退款方式
        );

        //添加订单

        if (Product::add_order2($arr))
        {

            if ($info['status'] == 1)
            {
                $html = Common::payment_from(array('ordersn' => $ordersn,'paytype'=>$info['paytype']));
                if ($html)
                {  // echo "sdsssd";exit;
                    echo $html;exit;
                }
            } else
            {
                $url = Common::get_web_url($info['webid']) . '/pub/paystatus/?sign=13';
                $this->request->redirect($url);
            }

        }

    }

    /**
     *判断是否让购买
     * @param $aid 项目id
     * @param $openid
     * @param $limit 限制次数
     * @return mixed 大于0 可以购买 返回值是剩余的次数
     */
    private function _canBuy($aid,$openid,$limit,$typeid,$phone=0){

        if($phone==0){

            $sql = "SELECT dingnum,oldnum,childnum FROM `sline_member_order` WHERE openid='$openid' AND productaid='$aid' and typeid='$typeid'";

        }else{
            $sql = "SELECT dingnum,oldnum,childnum FROM `sline_member_order` WHERE (openid='$openid' or linktel='$phone') AND productaid='$aid' and typeid='$typeid'";

        }

        $arr = DB::query(1, $sql)->execute()->as_array();

        $dingAllNum=0;
        foreach($arr as $k=>$v) {
            $dingAllNum += intval($v['dingnum']) + intval($v['oldnum']) + intval($v['childnum']);
        }
        $comRs = intval($limit)-$dingAllNum;

        $rs = $comRs > 0 ?  $comRs : 0;
        return $rs;
    }
    /*

     * 景点搜索页(搜索初始页)

     */

    public function action_search()
    {

        $pinyin = Arr::get($_GET, 'pinyin');
        $themeid = Arr::get($_GET, 'themeid');
        $greatid = Arr::get($_GET, 'greatid');
        $this->assign("pinyin",$pinyin);// 搜索页面 和 列表页面 跳转过来的id
        $this->assign("themeid",$themeid);//列表页 主题 跳转过来的id
        $this->assign("greatid",$greatid);// 列表页 等级 跳转过来的id
        $this->display('spot/search');
    }
    /*
     * 侧重 周边城市页面 Mr.feng
     *
     */
    public  function action_nearCity(){
        $spotattr = Model_Nav::get_spotTDattr();
        $keyword = Arr::get($_GET, 'keyword');
        $pinyin = Arr::get($_GET, 'pinyin');
        $attrId = Arr::get($_GET, 'attrid');
        $themeid = Arr::get($_GET, 'themeid');
        $greatid = Arr::get($_GET, 'greatid');
        $at1      =Model_Spot::get_theme();
        $at2      =Model_Spot::get_dengji();
        $destid = isset($pinyin)? ORM::factory('destinations')->where("pinyin='$pinyin'")->find()->get('id'):"";
        $theme = isset($themeid)&&!empty($themeid) ? ORM::factory('spot_attr')->where("id='$themeid'")->find()->get('attrname') : '景点主题';
        $grea = isset($greatid) &&!empty($greatid) ? ORM::factory('spot_attr')->where("id='$greatid'")->find()->get('attrname') : '景点等级';
        $this ->assign("desid",$destid);
        $this->assign("grea",$grea);
        $this->assign("theme",$theme);
        $this->assign("pinyin",$pinyin);// 搜索页面 和 列表页面 跳转过来的id
        $this->assign("attrId",$attrId);//搜索页面 跳转过来的属性 id
        $this->assign("themeid",$themeid);//列表页 主题 跳转过来的id
        $this->assign("greatid",$greatid);// 列表页 等级 跳转过来的id
         $this->assign('spat1',$at1);  // 景点主题的  所有子主题
         $this->assign('spat2',$at2);  //  景点等级 的 所有等级符号
         $this ->display('spot/list_nearCity');
    }
    /*
    * 侧重 石家庄景区页面  fengjishu
    *
    */
    public  function action_sjz_Spot(){
        $spotattr = Model_Nav::get_spotTDattr();
        $keyword = Arr::get($_GET, 'keyword');
        $pinyin = Arr::get($_GET, 'pinyin');
        $attrId = Arr::get($_GET, 'attrid');
        $themeid = Arr::get($_GET, 'themeid');
        $greatid = Arr::get($_GET, 'greatid');

       // $at1      =array();
       // $at2      =array();
        $at1      =Model_Spot::get_theme();
        $at2      =Model_Spot::get_dengji();
        $theme = isset($themeid)&&!empty($themeid) ? ORM::factory('spot_attr')->where("id='$themeid'")->find()->get('attrname') : '景点主题';
        $grea = isset($greatid)&&!empty($greatid) ? ORM::factory('spot_attr')->where("id='$greatid'")->find()->get('attrname') : '景点等级';
        $this->assign("grea",$grea);
        $this  ->assign("theme", $theme);
         $this->assign("pinyin",$pinyin);// 搜索页面 和 列表页面 跳转过来的id
        $this->assign("attrId",$attrId);//搜索页面 跳转过来的属性 id
        $this->assign("themeid",$themeid);//列表页 主题 跳转过来的id
        $this->assign("greatid",$greatid);// 列表页 等级 跳转过来的id
        $this->assign('spotattr',$at);//  景点 主题 和景点等级 的 变量
        $this->assign('spat1',$at1);  // 景点主题的  所有子主题
        $this->assign('spat2',$at2);  //  景点等级 的 所有等级符号
        $this ->display('spot/sjz_Spot');
    }
    /**
     * ajax请求 加载更多
     */
    public function action_ajax_spot_more()
    {
        $urlParam = $this->request->param('params');
        $sjz = Arr::get($_GET, 'sjz') ? Arr::get($_GET, 'sjz') : '';
        $keyword = Arr::get($_GET, 'keyword') ? Arr::get($_GET, 'keyword') : '';
        $data = Model_Spot::search_result($urlParam, $keyword,$sjz);
//        $file  = fopen('phone.txt','a+');
//        fwrite($file, var_export($data,true)."\r\n");
//        fclose($file);
        echo $data;
    }
    //石家庄风景  fengjishu
    public function action_ajax_sjz_Spot()
    {
         $urlParam = $this->request->param('params');
         $keyword = Arr::get($_GET, 'keyword') ? Arr::get($_GET, 'keyword') : '';
        $data = Model_Spot::search_result($urlParam, $keyword);
        echo $data;
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