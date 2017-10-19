<?php defined('SYSPATH') or die('No direct access allowed.');



class Model_Member_Order extends ORM

{

    /**

     * 订单是否存在

     * @param $ordersn

     * @return bool

     */

    public static function not_exists($ordersn)

    {

        $sql = "select * from sline_member_order where ordersn={$ordersn} order by id DESC limit 1";

        $rs = DB::query(Database::SELECT, $sql)->execute()->as_array();

        return empty($rs) ? true : false;

    }



    /**

     * 订单是否支付

     * @param $ordersn

     * @return bool

     */

    public static function payed($ordersn)

    {

        $sql = "select * from sline_member_order where ordersn={$ordersn}  and status=2 order by id DESC limit 1";

        $rs = DB::query(Database::SELECT, $sql)->execute()->as_array();

        return empty($rs) ? false : true;

    }



    /**

     * 订单信息并计算总价

     * @param $ordersn

     * @return array

     */

    public static function info($ordersn)

    {

        if (!preg_match('~^\d+$~', $ordersn))

        {

            return;

        }

        $sql = "select * from sline_member_order where ordersn='{$ordersn}' order by id DESC limit 1 ";



        $rs = DB::query(Database::SELECT, $sql)->execute()->current();

        $num = $rs['dingnum'] + $rs['childnum'] + $rs['oldnum'];

        if (($dingjin = $rs['dingjin']) > 0 && $rs['paytype'] == 2)

        {

            //定金支付

            $total = $dingjin * $num;

        }

        else

        {

            //全额支付

            $total = $rs['dingnum'] * $rs['price'] + $rs['childnum'] * $rs['childprice'] + $rs['oldnum'] * $rs['oldprice'];

        }

        //保险

        if ($rs['typeid'] == 1)

        {

            $sql = "select bookordersn,insurednum,payprice from sline_insurance_booking where bookordersn='{$ordersn}'";

            $insurance = DB::query(Database::SELECT, $sql)->execute()->as_array();

            //叠加保险金额

            foreach ($insurance as $v)

            {

                if (!empty($v['insurednum']))

                {

                    $total += $v['payprice'];

                }

            }



            if ($rs['roombalance_paytype'] == 1)

            {

                $balanceTotal = doubleval($rs['roombalance'] * intval($rs['roombalancenum']));

                $total += $balanceTotal;

            }



        }

        //总价

        $rs['total_fee'] = $total;

        //积分抵现

        if (intval($rs['usejifen']) === 1)

        {

            $total = $total - $rs['jifentprice'];

        }

        //实际支付写入数组

        $rs['total'] = $total;

        //产品详情页

        $rs['show_url'] = Common::show_url($rs['typeid'], $rs['productaid']);

        return $rs;

    }



    /**

     * 线上支付修改订单状态

     * @param $ordersn

     * @param string $payMethod

     */

    public static function change_order($ordersn, $payMethod)

    {

        //更改处理中订单状态 status=1    //07.08  fengjishu  加入ispay =1

        $rows = DB::update('member_order')->where('ordersn', '=', "{$ordersn}")->and_where('status', '=', 1)->set(array('status' => 2,'ispay'=>1, 'paysource' => $payMethod))->execute();

        if ($rows == 1)

        {  //================ 封冀蜀 07.28
               //查询订单表 信息
            $sql      = "SELECT * FROM `sline_member_order` WHERE ordersn='$ordersn'";

            $re       = DB::query(1, $sql)->execute()->as_array();
              //获取用户信息
//            $sql1     = "SELECT * FROM `sline_member` WHERE mid = ".$re['memberid'];
//
//            $userinfo = DB::query(1, $sql1)->execute()->as_array();

            //var_dump($re);exit;
           //================07.28 end
            if($re[0]['supplierlist']=='9'){
               //self::add_eticketno($ordersn);
                include_once(BASEPATH.'/api/meijing/base.php');
                $testObj  = new Base();
                /**
                 * @param $goodsId 商品id
                 * @param $num     数量
                 * @param $order_note 订单备注
                 * @param $forecasttime 预定时间【产品详情里IsReserve=True时，需传递该时间；IsReserve=False时，必须保留该值为空】
                 * @param $outOrderId 代理商订单编号
                 * @param $phone 客户电话【必填】
                 * @param $guest_name 客户名
                 * @param $identityno 证件号
                 * @param $consignee 收货地址(收货人)
                 * @param $address 收货地址(具体地址)
                 * @param $zipcode 收货地址(邮编)
                 * @param $isR 是否实名制 1 实名制  0 非实名制
                 * 必填值：user、password、goodsId、num、outOrderId
                 */
                $time          = date("Y-m-d H:i:s",$re[0]['addtime']);
                $linktel       = trim($re[0]['linktel']);
                $num           = trim($re[0]['dingnum']);
                $goods         = trim($re[0]['partner_number']);
                $linkman       = trim($re[0]['linkman']);
                $remark        = trim($re[0]['remark']);

                $goodsId       = "$goods";
                $num           = "$num";
                $order_note    = "$remark";
                $forecasttime  = "$time";
                $outOrderId    =  "$ordersn";
                $phone         = "$linktel";//"$re[0]['linktel']";
                $guest_name    = "$linkman";
                $identityno    = '';//$userinfo[0]['cardid'];
                $consignee     = "";// $re['linkman'];
                $address       = '';//$userinfo[0]['address'];
                $zipcode       = '';//$userinfo[0]['postcode'];

                $rs = $testObj->submitOrder($goodsId,$num,$order_note,$forecasttime,$outOrderId,$phone,$guest_name,$identityno,$consignee,$address,$zipcode,$isR=0,$meberInfo=array());
                $file = fopen("submit.txt","a+");
                fwrite($file,date("Y-md H:i:s",time())."  ".$ordersn."的验证码是:".$rs['body']['orderId'].',第三方订单号：'.$rs['body']['orderId'].',代理商订单号:'.$rs['body']['outOrderId'].',合作伙伴编号:'.$re[0]['partner_number'].",数量".$re[0]['dingnum'].',返回数量：'.$rs['body']['inCount'].",联系人电话".$re[0]['linktel'].",联系人".$re[0]['linkman'].',备注'.$re[0]['remark']."\r\n");
                fclose($file);
                //self::add_eticketno($ordersn);
                /*
                  1：问题: 验证吗 是否验证相同 ？
                  2：当 返回数量和 订购数量不等？
                 * **/

            }
            // 添加电子票
            if($re[0]['supplierlist']=="9") {
                self::add_eticketno($ordersn,$rs['body']['credence']);
                DB::update('member_order')->where('ordersn', '=', "{$ordersn}")->set(array('third_ordersn' => $rs['body']['orderId']))->execute();
            }else{
                self::add_eticketno($ordersn);
            }

            //订单详情

            $result = self::info($ordersn);

            //短信通知
            if($re[0]['supplierlist']!="9") {
                Common::send_sms_message($result);
            }

            //邮件通知

            Common::send_email_message($result);

            //送积分

            if (isset($result['jifenbook']) && $result['jifenbook'] > 0)

            {

                $rows = DB::update('member')->where('mid', '=', $result['memberid'])->set(array('jifen' => DB::expr("jifen + {$result['jifenbook']}")))->execute();

                //积分写入日志

                if ($rows == 1)

                {

                    DB::insert('member_jifen_log', array('memberid', 'content', 'jifen', 'type', 'addtime'))->values(array($result['memberid'], "预订{$result['productname']}获得积分{$result['jifenbook']}", $result['jifenbook'], 2, time()))->execute();

                }

            }



        }

        else

        {

            new Pay_Exception("订单({$ordersn})线上支付状态更新失败");

        }

    }

    /**

     * 获得    订单的信息

     * @param $ordersn

     *

     */

    static function get_order_detail($ordersn)

    {
        $sql = "SELECT * FROM `sline_member_order` WHERE ordersn='{$ordersn}'";

        $row = DB::query(1, $sql)->execute()->as_array();

        return $row[0];
    }

    /**

     * 零元支付

     * @param $ordersn

     * @param string $payMethod

     */

    static function zero_pay($ordersn,$payMethod='积分抵现')

    {

        self::change_order($ordersn,$payMethod);

        $info['sign'] = '13';

        $info['ordersn'] = $ordersn;

        Common::pay_status($info);

    }



    /**

     * 线下支付修改订单状态

     * @param $ordersn

     * @param $payMethod

     */

    public static function chang_order_by_line($ordersn, $payMethod)

    {

        //更改订单状态

        $rows = DB::update('member_order')->where('ordersn', '=', "{$ordersn}")->set(array('status' => 5,'paysource' => $payMethod))->execute();

        if ($rows != 1)

        {

            new Pay_Exception("订单({$ordersn})线下支付状态更新失败");

        }else{ //封冀蜀 07.26 新加 else 内容 只在线下支付是 关键 验单吗 和发送相对应的短信
            // 添加电子票

            self::add_eticketno($ordersn);
            //订单详情

            $result = self::info($ordersn);

            //短信通知

            Common::send_sms_message($result);
        }

    }



    //add eticketno

    public static function add_eticketno($ordersn,$sup=null)

    {
        if(!empty($sup)){
          $eticketno =$sup;

        }else {
            $eticketno = self::get_eticketno();
        }

        DB::update('member_order')->where('ordersn', '=', "{$ordersn}")->set(array('eticketno' => $eticketno))->execute();



    }



    //获取消费码.

    public static function get_eticketno()

    {



        $eticketno = "";



        while (true)

        {

            $eticketno = substr(self::get_random_number(9), 1, 8);



            $check_sql = "SELECT id FROM `sline_member_order` WHERE eticketno='{$eticketno}'";

            $row = DB::query(1, $check_sql)->execute()->as_array();



            if (count($row) <= 0)

                break;

            sleep(1);

        }

        return $eticketno;

    }



    public static function get_random_number($length = 4)

    {

        $min = pow(10, ($length - 1));

        $max = pow(10, $length) - 1;

        return mt_rand($min, $max);

    }

}