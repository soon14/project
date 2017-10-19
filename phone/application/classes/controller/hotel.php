<?php defined('SYSPATH') or die('No direct script access.');



/**

 * Class Controller_Hotel

 * @desc 酒店总控制器

 */

class Controller_Hotel extends Stourweb_Controller

{

    private $_typeid = 2;   //产品类型



    public function before()

    {

        parent::before();

        $channelname = Model_Nav::get_channel_name($this->_typeid);

        $this->assign('typeid', $this->_typeid);

        $this->assign('channelname', $channelname);

    }



    /**

     * 酒店首页

     */

    public function action_index()

    {

        $seoinfo = Model_Nav::get_channel_seo($this->_typeid);

        $this->assign('seoinfo', $seoinfo);

        $this->display('hotel/index');

    }

    public function action_map()

    {

        $id=$_GET['id'];

        $model=ORM::factory('hotel',$id);

        //  if(!$model->loaded())

        //     exit('酒店不存在');

        $info=$model->as_array();

        $seoinfo=array('seotitle'=>$info['title']);

        $this->assign('info',$info);

        $this->assign('seoinfo',$seoinfo);

        $this->display('hotel/map');

    }

    public function action_mapnear()

    {

        $seoinfo=array('seotitle'=>'附近酒店');

        $this->assign('seoinfo',$seoinfo);

        $this->display('hotel/mapnear');

    }



    /*

     * 酒店搜索页(搜索初始页)

     */

    public function action_search()

    {

        $this->display('hotel/search');

    }



    /*

     * 酒店搜索列表页

     * */

    public function action_list()

    {

        //参数处理

        $urlParam = $this->request->param('params');

        $destPy = 'all';

        $destId = $rankId = $priceId = $sortType = $keyword = $attrId = 0;

        $params = explode('-', str_replace('/', '-', $urlParam));

        $count = count($params);

        switch ($count)

        {

            //目的地

            case 1:

                list($destPy) = $params;

                break;

            //关键字、属性

            case 7:

                list($destPy, $rankId, $priceId, $sortType, $keyword, $attrId, $page) = $params;

                break;

        }

        $keyword = Arr::get($_GET, 'keyword');

        $page = $page < 1 ? 1 : $page;

        $destname = $destPy != 'all' ? ORM::factory('destinations')->where("pinyin='$destPy'")->find()->get('kindname') : '目的地';

        //获取seo信息

        $seo = Model_Hotel::search_seo($destPy,2);

        $this->assign('seoinfo', $seo);

        $this->assign('destpy', Common::remove_xss($destPy));

        $this->assign('destname', $destname);

        $this->assign('rankid', Common::remove_xss($rankId));

        $this->assign('sorttype', Common::remove_xss($sortType));

        $this->assign('keyword', Common::remove_xss($keyword));

        $this->assign('attrid', Common::remove_xss($attrId));

        $this->assign('priceid', Common::remove_xss($priceId));

        $this->assign('page', $page);

        $this->display('hotel/list');

    }



    /*

     * 酒店详细页

     */

    public function action_show()

    {
        $admin  = Common::remove_xss(Arr::get($_GET, 'admin'));
        $aid = Common::remove_xss($this->request->param('aid'));

        //子站内容显示

        if (isset($_GET[webid]))

        {

            $GLOBALS['sys_webid'] = Common::remove_xss(Arr::get($_GET, 'webid'));

        }

        $info = ORM::factory('hotel')

            ->where("webid=" . $GLOBALS['sys_webid'] . " AND aid='$aid'")

            ->find()

            ->as_array();

        //扩展字段信息

        $extend_info = ORM::factory('hotel_extend_field')

            ->where("productid=" . $info['id'])

            ->find()

            ->as_array();

        //点击率加一

        Product::update_click_rate($aid, $this->_typeid);

        $seoinfo = Product::seo($info);

        $info['piclist'] = Product::pic_list($info['piclist']);

        $info['price'] = Model_Hotel::get_minprice($info['id']);

        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->_typeid); //评论次数

        $info['satisfyscore'] = Model_Comment::get_score($info['id'], $this->_typeid, $info['satisfyscore'], $info['commentnum']);//满意度

        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->_typeid) + intval($info['bookcount']); //销售数量

        $info['hotelrank'] = ORM::factory('hotel_rank', $info['hotelrankid'])->get('hotelrank');

        $this->assign('seoinfo', $seoinfo);

        $this->assign('info', $info);

        $this->assign('extendinfo', $extend_info);
        if($admin=='feng'){
            $this->display('hotel/show');
        }else{
            $this->display('hotel/hotel-page');
        }

        // $this->display('hotel/show');

    }



    /*

     * 酒店预订页

     * */

    public function action_book()

    {

        $userinfo = Common::session('member');

        //要求预订前必须登陆

        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))

        {

            $this->request->redirect(Common::get_main_host().'/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));

        }

        $productid = Common::remove_xss($this->params['id']);

        $info = ORM::factory('hotel', $productid)->as_array();

        $info['price'] = Model_Hotel::get_minprice($info['id']);

        $this->assign('info', $info);

        $this->assign('userinfo', $userinfo);

        $member = Common::session('member');

        if (!empty($member))

        {

            $this->assign('member', Model_Member::get_member_byid($member['mid']));

        }

        $this->display('hotel/book');

    }



    /*

     * 创建订单

     * */

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

        //入住时间

        $startdate = Arr::get($_POST, 'startdate');

        //离店时间

        $leavedate = Arr::get($_POST, 'leavedate');

        //预订房间数

        $dingnum = Arr::get($_POST, 'dingnum');

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

        $info = ORM::factory('hotel')->where("id=$id")->find()->as_array();



        $suitArr = ORM::factory('hotel_room')

            ->where("id=:suitid")

            ->param(':suitid', $suitid)

            ->find()

            ->as_array();

        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);

        $suitPrice = Model_Hotel::suit_range_price($suitid,$startdate,$leavedate,$dingnum);

        if ($suitArr['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.

        {

            $info['status'] = 0;

        } else

        {

            $info['status'] = 1;

        }

        $info['name'] = $info['title'] . "({$suitArr['roomname']})";

        $info['paytype'] = $suitArr['paytype'];

        $info['dingjin'] = doubleval($suitArr['dingjin']);

        $info['jifentprice'] = intval($suitArr['jifentprice']);

        $info['jifenbook'] = intval($suitArr['jifenbook']);

        $info['jifencomment'] = intval($suitArr['jifencomment']);

        $info['ourprice'] = doubleval($suitPrice);

        $info['childprice'] = 0;

        $info['usedate'] = $startdate;

        $info['departdate'] = $leavedate;

        $ordersn = Product::get_ordersn('02');

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

            'childnum' => 0,

            'oldprice' => 0,

            'oldnum' => 0,

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

            $sql = "SELECT id FROM `sline_member_order` WHERE ordersn='$ordersn'";

            $ar = DB::query(1, $sql)->execute()->as_array();

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

     * ajax请求 加载更多

     */

    public function action_ajax_hotel_more()

    {

        $urlParam = $this->request->param('params');

        $keyword = Arr::get($_GET, 'keyword') ? Arr::get($_GET, 'keyword') : '';

        $data = Model_Hotel::search_result($urlParam, $keyword);

        echo($data);

    }



    public function action_ajax_near_hotels()

    {

        $lat=floatval($_POST['lat']);

        $lng=floatval($_POST['lng']);

        $maxDistance=3000;

        $sql="select id,aid,webid,title,price,address,lng,lat,ROUND(6378.138*2*ASIN(SQRT(POW(SIN((".$lat."*PI()/180-lat*PI()/180)/2),2)+COS(".$lat."*PI()/180)*COS(lat*PI()/180)*POW(SIN((".$lng."*PI()/180-lng*PI()/180)/2),2))))  AS distance from sline_hotel where ROUND(6378.138*2*ASIN(SQRT(POW(SIN((".$lat."*PI()/180-lat*PI()/180)/2),2)+COS(".$lat."*PI()/180)*COS(lat*PI()/180)*POW(SIN((".$lng."*PI()/180-lng*PI()/180)/2),2))))<".$maxDistance." and  lat is not null and lng is not null order by distance asc";

        $list=DB::query(Database::SELECT,$sql)->execute()->as_array();

        foreach($list as &$row)

        {

            $row['url']=Common::get_web_url($row['webid']) . "/hotels/show_{$row['aid']}.html";

        }

        echo json_encode(array('status'=>true,'data'=>$list));

    }



    /*

     * 获取房型进店和离店日期价格

     * */

    public function action_ajax_range_price()

    {

        $startdate = Arr::get($_GET, 'startdate');

        $enddate = Arr::get($_GET, 'leavedate');

        $suitid = Arr::get($_GET, 'suitid');

        $dingnum = Arr::get($_GET, 'dingnum');

        $price = Model_Hotel::suit_range_price($suitid, $startdate, $enddate, $dingnum);

        $price = $price * $dingnum;

        echo json_encode(array('price' => $price));

    }



    /**

     *

     * 获取套餐可预订的最小日期.

     *

     */

    public function action_ajax_mindate_book()

    {

        $suitid = Arr::get($_GET, 'suitid');

        $day = Model_Hotel::suit_mindate_book($suitid);

        echo json_encode(array(

            'startdate' => date('Y-m-d', $day),

            'enddate' => date('Y-m-d', strtotime("+1 day", $day))

        ));

    }



    /**

     *

     * 检测库存是否能够预订

     */

    public function action_ajax_check_storage()

    {

        $startdate = Arr::get($_POST, 'startdate');

        $enddate = Arr::get($_POST, 'enddate');

        $dingnum = Arr::get($_POST, 'dingnum');

        $suitid = Arr::get($_POST, 'suitid');

        $flag = Model_Hotel::check_suit_storage($suitid, $startdate, $enddate, $dingnum);

        echo json_encode(array('status' => $flag));

    }

}