<?php defined('SYSPATH') or die('No direct access allowed.');



class Model_Member_Order extends ORM {


   //==封冀蜀 08.05 加入 7 的status 状态
    public static $statusNames=array(0=>'未处理',1=>'处理中',2=>'付款成功',3=>'取消订单',4=>'已退款',5=>'交易完成',6=>'待退款',7=>'已过期',8=>'已失效');

    /*

     * 返积分操作

     * */

    public static function refundJifen($orderid)

    {

        $row = ORM::factory('member_order')->where('id='.$orderid)->find()->as_array();

        if(isset($row))

        {

            $memberid = $row['memberid'];

            $jifenbook = intval($row['jifenbook']);

            $member = ORM::factory('member')->where("mid=$memberid");

            $member->jifen = intval($member->jifen) + $jifenbook;

            $member->save();

            if($member->saved())

            {

                $memberid = $member->mid;

                $content = "预订{$row['productname']}获得{$jifenbook}积分";

                self::addJifenLog($memberid,$content,$jifenbook,2);

            }



        }



    }



    public static function addJifenLog($memberid,$content,$jifen,$type)

    {

        $addtime = time();

        $sql = "insert into sline_member_jifen_log(memberid,content,jifen,`type`,addtime) values ('$memberid','$content','$jifen','$type','$addtime')";

        DB::query(Database::INSERT,$sql)->execute();



    }





    /*

     * 返库存操作

     * */

    public static function refundStorage($orderid,$op)

    {

        $row = ORM::factory('member_order')->where('id='.$orderid)->find()->as_array();

        if(isset($row))

        {

            $dingnum = intval($row['dingnum'])+intval($row['childnum']);

            $suitid = $row['suitid'];

            $productid = $row['productautoid'];

            $typeid = $row['typeid'];

            $usedate = strtotime($row['usedate']);





            $storage_table=array(

                '1'=>'sline_line_suit_price',

                '2'=>'sline_hotel_room_price',

                '3'=>'sline_car_suit_price',

                '5'=>'sline_spot_ticket',

                '8'=>'sline_visa',

                '13'=>'sline_tuan'

            );

            $table = $storage_table[$typeid];

            if(empty($table))

                return;

            //加库存

            if($op=='plus')

            {

                if($typeid==1||$typeid==2||$typeid==3)

                    $sql = "update {$table} set number=number+$dingnum where day='$usedate' and suitid='$suitid'";

                elseif($typeid==13)

                    $sql = "update {$table} set totalnum=CAST(totalnum AS SIGNED)+$dingnum where id=$productid";

                elseif($typeid==5)

                    $sql = "update {$table} set number=number+$dingnum where id='$suitid'";

                else

                    $sql = "update {$table} set number=number+$dingnum where id=$productid";

            }

            else if($op=='minus')

            {

                if($typeid==1||$typeid==2||$typeid==3)

                    $sql = "update {$table} set number=number-$dingnum where day='$usedate' and suitid='$suitid'";

                elseif($typeid==13)

                    $sql = "update {$table} set totalnum=CAST(totalnum AS SIGNED)-$dingnum where id=$productid";

                elseif($typeid==5)

                    $sql = "update {$table} set number=number-$dingnum where id='$suitid'";

                else

                    $sql = "update {$table} set number=number-$dingnum where id=$productid";

            }

            DB::query(2,$sql)->execute();

        }



    }

    public static function getStatusName($key)

    {

        return self::$statusNames[$key];

    }

    public static function getStatusNamesJs()

    {

        $jsonArr=array();

        foreach(self::$statusNames as $k=>$v)

        {

            $jsonArr[]=array('status'=>$k,'name'=>$v);

        }

        return $jsonArr;

    }

    public static function getPaySources()

    {

        $sql="select paysource from sline_member_order where paysource is not null group by paysource";

        $result=DB::query(Database::SELECT,$sql)->execute()->as_array();

        $arr=array();

        foreach($result as $k=>$v)

        {

            $arr[]=$v['paysource'];

        }

        return $arr;

    }
    //=================fengjishu 07.13 start 获取供应商
    public static function getSupplier()

    {

        $sql="select id,suppliername from sline_supplier where verifystatus=3";

        $result=DB::query(Database::SELECT,$sql)->execute()->as_array();


        return $result;

    }


//获取总额

    public static function get_payed_amount($rs)

    {

        $num = $rs['dingnum'] + $rs['childnum'] + $rs['oldnum'];



        //全额支付

        $total = $rs['dingnum'] * $rs['price'] + $rs['childnum'] * $rs['childprice'] + $rs['oldnum'] * $rs['oldprice'];



        //保险

        if ($rs['typeid'] == 1)

        {

            $sql = "select bookordersn,insurednum,payprice from sline_insurance_booking where bookordersn='{$rs['ordersn']}'";

            $insurance = DB::query(Database::SELECT, $sql)->execute()->as_array();

            //叠加保险金额

            foreach ($insurance as $v)

            {

                if (!empty($v['insurednum']))

                {

                    $total += $v['payprice'];

                }

            }

            if($rs['roombalance_paytype']==1)

            {

                $balanceTotal=doubleval($rs['roombalance']*intval($rs['roombalancenum']));

                $total+=$balanceTotal;

            }

        }

        //积分抵现

        if (intval($rs['usejifen']) === 1)

        {

            $total = $total - $rs['jifentprice'];

        }

        return $total;

    }

}