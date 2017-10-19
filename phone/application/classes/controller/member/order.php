<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Member_Order
 * 订单管理
 */
class Controller_Member_Order extends Stourweb_Controller
{
    /**
     * 订单管理前置操作
     */
    public function before()
    {
        parent::before();
        $this->member = Common::session('member');
        $order_query_token = Common::session('order_query_token', null);
/*        if (empty($this->member) && empty($order_query_token))
        {
            Common::message(array('message' => __('unlogin'), 'jumpUrl' => $this->cmsurl . 'member/login'));
        }*/
        if (empty($this->member))
        {
            //Common::message(array('message' => __('unlogin'), 'jumpUrl' => $this->cmsurl . 'member/login'));
            header('location:/phone/member/login');
        }

    }

    /**
     * 订单列表
     */
    public function action_list()
    {
        //没有登录
        if (empty($this->member['mid']))
        {
            exit;
        }
        $row = $this->get_list();
        $this->assign('title', '订单中心');
        $this->assign('data', $row);
        $this->display('member/order_list');

    }

    /**
     * 获取订单列表
     * @return mixed
     */
    private function get_list()
    {
        $row = Model_Member_Order::order_list($this->member['mid']);
        $row = self::get_data_initialization($row);
        return $row;
    }

    /**
     * 订单列表 查看更多
     */
    public function action_ajax_order_more()
    {
        $page = Common::remove_xss(intval($_GET['page']));
        $page = $page < 1 ? 1 : $page;
        $param['type'] = Common::remove_xss(intval($_GET['type']));
        if (isset($_GET['isquery']))
        {
            $param['isquery'] = Common::remove_xss($_GET['isquery']);
        }
        $row = Model_Member_Order::order_list($this->member['mid'], $page, $param);

        $row = self::get_data_initialization($row);
        echo(Product::list_search_format($row, $page));
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

    /**
     * 订单详情
     */
    public function action_show()
    {
        $id = Common::remove_xss($_GET['id']);
        $row = Model_Member_Order::get_order_detail($id);
        //分割订单产品名称
        $tempArr = array_filter(preg_split('`[\(\)]`', $row['productname']));
        $row['subname'] = count($tempArr) > 1 ? $tempArr[count($tempArr) - 1] : '';
        $row['productname'] = str_replace("({$row['subname']})", '', $row['productname']);
        //支付金额
        $row['total'] = $row['paytype'] == 2 ? ($row['dingnum'] + $row['childnum'] + $row['oldnum']) * $row['dingjin'] : $row['price'] * $row['dingnum'] + $row['childprice'] * $row['childnum'] + $row['oldprice'] * $row['oldnum'];
        //预订人数
        $num = array();
        if ($row['dingnum'] > 0)
        {
            array_push($num, "成人{$row['dingnum']}个");
        }
        if ($row['childnum'] > 0)
        {
            array_push($num, "小孩{$row['childnum']}个");
        }
        if ($row['oldnum'] > 0)
        {
            array_push($num, "老人{$row['oldnum']}个");
        }
        $row['num'] = implode('，', $num);
        //评论
        $comment = Model_Comment::get_comment($row['ordersn']);
        if (!empty($comment))
        {
            $comment['score'] = ($comment['score1'] * 20) . '%';
        }
        //08.02  fengjishu  加入 参数 paytype
        $row['payurl'] = Common::get_main_host() . "/payment/?ordersn={$row['ordersn']}"."&paytype=".$row['paytype'];
        $this->assign('info', $row);
        $this->assign('comment', $comment);
        $this->assign('member', $this->member);
        $this->display('member/order_show');
    }

    //取消订单

    public function action_ajax_order_cancel()

    {
        //=========07.29 fengjishu
        include_once(BASEPATH.'/api/meijing/base.php');
        $testObj  = new Base();
        /**
         * @param $outBackId 代理商退单号
         * @param $third_orderid   UTS订单编号
         * @return array|mixed
         * 退单，不能退部分订单
         */
        //=========07.29
        $orderId = Common::remove_xss(Arr::get($_GET,'orderid'));

        //================fengjishu  07.08 修改 当付款了 取消订单 的情况
        $ispay   = Common::remove_xss(Arr::get($_GET,'ispay'));
        //===07.29
        // $outBackId     = $orderId.rand(10,99);
        $outBackId     = ORM::factory('member_order')->where("id='$orderId'")->find()->get('ordersn');
        $outBackId     = $outBackId.rand(10,99);
        $third_orderid = ORM::factory('member_order')->where("id='$orderId'")->find()->get('third_ordersn');
        //===07.29
        //=================   end

        $m = ORM::factory('member_order',$orderId);

        if($ispay=='1'){//07.08 fengjishu 新加。付款了 取消订单 的情况
            $m->status =6;
            if(!empty($third_orderid)) {
                $rs = $testObj->refundByOrderID($outBackId, $third_orderid);
                $file = fopen("refundByOrderID.txt", "a+");
                fwrite($file, date("Y-md H:i:s", time()) . "退单号" . $outBackId . "第三方订单" . $third_orderid . "状态" . $rs['head']['status'] . "成功票码：" . $rs['body']['scredenceno'] . "，失败票码：" . $rs['body']['fcredenceno'] . "退票成功人数" . $rs['body']['backCount'] . "第三方订单" . $third_orderid . "\r\n");
                fclose($file);
                if ($rs['head']['status'] == '0') {
                    $m->third_status = 0;
                    $m->back_order_number = $outBackId; //退单号
                } else {
                    $m->third_failure_reason = $rs['head']['message'];
                }
            }

        }else{
            $m->status = 3;//取消订单
        }
        $m->save();

        $flag = 0;

        if($m->saved())

        {

            $flag = 1;
            //对于后台创建地自驾订单  用户主动取消订单的时候1129 feng
            if($m->typeid==1){// 判断是否属于自驾模型线路
                $sql = "select wxuserid from `sline_member_car` where orderid=$orderId";
                $wxuserid   = DB::query(1,$sql)->execute()->get('wxuserid');
                if(!empty($wxuserid)){
                    self::update_wxdrivingRate($wxuserid);
                }
                self::update_membercar_iscancle($orderId,1);
            }
        }

        echo json_encode(array('status'=>$flag));



    }



    /*
    *  更新 自驾次 数
   */
    public static function update_wxdrivingRate($wxuserid,$p=false){
        if($p==false) {
            $sql = " update `bbs_hjbox_users` set drivingRate=drivingRate-1 ";
        }else{
            $sql = " update `bbs_hjbox_users` set drivingRate=drivingRate+1 ";
        }
        $sql .= " where id =$wxuserid";
        DB::query(1, $sql)->execute();
    }
    /*
    * 取消订单 更新  member_car 表的iscancle 状态
    * $orderid  订单id
    * $num 更新成的数字  1 为取消订单 0 正常
    */
    public static function update_membercar_iscancle($orderid,$num){

        $sql = "update `sline_member_car` set iscancle =$num where orderid = $orderid";
        DB::query(1,$sql)->execute();

    }

}