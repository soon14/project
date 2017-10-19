<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Tongyong
 * 通用控制器
 */
class Controller_Tongyong extends Stourweb_Controller
{
    protected $typeid = 0;   //产品类型
    protected $pinyin = 0;

    public function before()
    {
        parent::before();
        $channelname = Model_Nav::get_channel_name($this->typeid);
        $this->assign('typeid', $this->typeid);
        $this->assign('pinyin', $this->pinyin);
        $this->assign('channelname', $channelname);
    }

    /**
     * 首页
     */
    public function action_index()
    {
        $this->request->redirect($this->pinyin . '/list');
    }

    public function action_list()
    {
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $keyword = $_GET['keyword'];
        $destpy = $this->request->param('destpy');
        $sorttype = $this->request->param('sorttype');
        $attrid = $this->request->param('attrid');
        $page = $this->request->param('p');
        $destname = '目的地';
        $destid = 0;

        if (!empty($destpy))
        {
            $destModel = ORM::factory('destinations')->where('pinyin', '=', $destpy)->find();
            if ($destModel->loaded())
            {
                $destid = $destModel->id;
                $destname = $destModel->kindname;
            }
        }

        //获取seo信息
        // $seo = Model_Model::search_seo($destpy);
        $seo = array(); //需要修改seo信息
        $this->assign('seoinfo', $seo);
        $this->assign('destpy', Common::remove_xss($destpy));
        $this->assign('destname', $destname);
        $this->assign('destid', $destid);
        $this->assign('sorttype', $sorttype);
        $this->assign('attrid', $attrid);
        $this->assign('page', $page);
        $this->assign('seoinfo', $seoinfo);
        $this->assign('keyword', $keyword);
        $this->assign('typeid', $this->typeid);
        $this->display('tongyong/index');
    }

    /**
     * 详细页
     */
    public function action_show()
    {
        $aid = $this->request->param('aid');
        $info = Model_Tongyong::detail($aid, $this->typeid);
        //seo
        $seoInfo = Product::seo($info);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Tongyong::product_attr($info['attrid'], $this->typeid);
        //最低价
        $info['price'] = Model_Tongyong::get_minprice($info['id']);
        //市场价
        $info['sellprice'] = Model_Tongyong::get_min_sellprice($info['id']);
        //满意度
        $info['score'] = $info['satisfyscore'] . '%';
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->typeid);
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->typeid);
        //产品编号
        $info['series'] = Product::product_number($info['id'], $this->typeid);
        //产品图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        $info['content']=Product::strip_style($info['content']);
        //支付方式

        //扩展字段信息
        $extend_info = Model_Tongyong::extend($info['id'], $this->typeid);
        $minsuit = $this->getMinSuit($info['id']);

        $this->assign('minsuit', $minsuit);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->assign('extendinfo', $extend_info);
        $this->display('tongyong/show');
    }

    /**
     * 预订
     */
    public function action_book()
    {
        $userinfo = Common::session('member');
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
        {
            $this->request->redirect(Common::get_main_host().'/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $id = Common::remove_xss($this->params['id']);
        $model = ORM::factory('model_archive', $id);
        if (!$model->loaded())
            exit('产品ID不存在');

        $suitArr = ORM::factory('model_suit')->where('productid', '=', $id)->get_all();
        foreach($suitArr as &$v)
        {
            $v['dingjin']= Currency_Tool::price($v['dingjin']);
            $v['sellprice']= Currency_Tool::price($v['sellprice']);
            $v['ourprice']= Currency_Tool::price($v['ourprice']);
        }

        $info = $model->as_array();
        $info['price'] = Model_Tongyong::get_minprice($info['id']);
        $this->assign('userinfo', $userinfo);
        $this->assign('suits', $suitArr);
        $this->assign('info', $info);
        $this->display('tongyong/book');
    }

    public function action_ajax_more()
    {
        $page = $_POST['page'];
        $typeid = $_POST['typeid'];
        $attrid = $_POST['attrid'];
        $destpy = $_POST['destpy'];
        $sorttype = $_POST['sorttype'];
        $keyword = $_POST['keyword'];
        $page = empty($page) ? 1 : $page;
        $pagesize = 10;
        $offset = $pagesize * ($page - 1);

        $where = ' WHERE a.ishidden=0 and a.typeid=' . $typeid . ' ';

        if (!empty($destpy))
        {
            $destid = ORM::factory('destinations')->where('pinyin', '=', $destpy)->find()->get('id');
        }

        //排序
        $orderBy = "";
        if (!empty($sorttype))
        {
            if ($sorttype == 1)//价格升序
            {
                $orderBy = "  a.price ASC,";
            } else if ($sorttype == 2) //价格降序
            {
                $orderBy = "  a.price DESC,";
            } else if ($sorttype == 3) //销量降序
            {
                $orderBy = " a.shownum DESC,";
            } else if ($sorttype == 4)//推荐
            {
                $orderBy = " a.shownum DESC,";
            }
        }

        //关键词
        if (!empty($keyword))
        {
            $where .= " AND a.title like '%$keyword%' ";
        }
        //按属性
        if (!empty($attrid))
        {
            $where .= Product::get_attr_where($attrid);
        }
        if (!empty($destid))
        {
            $where .= " AND FIND_IN_SET($destid,a.kindlist) ";
        }
        //如果选择了目的地
        if (!empty($destid))
        {
            $sql = "SELECT a.* FROM `sline_model_archive` a ";
            $sql .= "LEFT JOIN `sline_kindorderlist` b ";
            $sql .= "ON (a.id=b.aid AND b.typeid=$typeid AND a.webid=b.webid AND b.classid=$destid)";
            $sql .= $where;
            $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";

        } else
        {
            $sql = "SELECT a.* FROM `sline_model_archive` a ";
            $sql .= "LEFT JOIN `sline_allorderlist` b ";
            $sql .= "ON (a.id=b.aid AND b.typeid=$typeid AND a.webid=b.webid)";
            $sql .= $where;
            $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";

        }

        //计算总数
        $totalSql = "SELECT count(*) as num " . strchr($sql, " FROM");
        $totalSql = str_replace(strchr($totalSql, "ORDER BY"), '', $totalSql);//去掉order by

        $totalNum = DB::query(Database::SELECT, $totalSql)->execute()->get('num');
        $hasmore = $totalNum > $pagesize * $page ? true : false;

        $sql .= "LIMIT {$offset},{$pagesize}";

        $arr = DB::query(1, $sql)->execute()->as_array();

        $model_info = ORM::factory('model', $typeid);
        foreach ($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'], $typeid); //评论次数
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'], $typeid); //销售数量
            $v['score'] = $v['satisfyscore'] . '%';
            $v['price'] = Model_Tongyong::get_minprice($v['id']);//最低价
            $v['attrlist'] = Model_Model_Attr::get_attr_list($v['attrid'], $typeid);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/{$model_info->pinyin}/show_{$v['aid']}.html";
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr,
            'hasmore' => $hasmore
        );
        echo json_encode($out);
    }

    public function action_create()
    {
        //套餐id
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;

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
        //使用时间
        $usedate = Arr::get($_POST, 'usedate');
        //预订数量
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


        $info = ORM::factory('model_archive')->where("id=$id")->find()->as_array();

        $suitArr = ORM::factory('model_suit')
            ->where("id=:suitid")
            ->param(':suitid', $suitid)
            ->find()
            ->as_array();

        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
        $suitArr['ourprice'] = Currency_Tool::price($suitArr['ourprice']);


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

        $info['jifentprice'] = intval($suitArr['jifentprice']);

        $info['jifenbook'] = intval($suitArr['jifenbook']);

        $info['jifencomment'] = intval($suitArr['jifencomment']);

        $info['ourprice'] = doubleval($suitArr['ourprice']);

        $info['childprice'] = 0;

        $info['usedate'] = $usedate;

        $ordersn = Product::get_ordersn($this->typeid);

        $arr = array(

            'ordersn' => $ordersn,

            'webid' => 0,

            'typeid' => $this->typeid,

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

    public function getMinSuit($id)
    {
        $suitModel = ORM::factory('model_suit')->where('productid', '=', $id)->order_by('ourprice', 'asc')->find();
        if (!$suitModel->loaded())
            return null;
        return $suitModel->as_array();
    }


}