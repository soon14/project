<?php

defined('SYSPATH') or die('No direct access allowed.');



class Model_Member_Order extends ORM

{





    /**

     * @var array

     * 订单状态

     */

    public  static $orderStatus = array(

        0=>'等待处理',

        1=>'等待付款',

        2=>'付款成功',

        3=>'订单取消',

        4=>'已退款',

        5=>'交易完成',

        6=>'退款中..'//07.08 fengjishu 加入 

    );

    /**

     * @var array

     * typeid 对应栏目链接

     */

    public static $typeidTolink = array(

        1=>'lines',

        2=>'hotels',

        3=>'cars',

        5=>'spots',

        8=>'visa',

        13=>'tuan'

    );

    /**

     * @param int $id

     * @param $typeid

     * @param null $row

     * @return int

     * @description

     */

    public static function get_sell_num($id = 0, $typeid)

    {

        $where = empty($id) ? "typeid='$typeid'" : "productautoid='$id' and typeid='$typeid'";

        $sql = "SELECT COUNT(*) as dd FROM `sline_member_order` WHERE $where";

        $ar = DB::query(1,$sql)->execute()->as_array();

        return $ar[0]['dd'] ? $ar[0]['dd'] : 0;

    }



    /**

     * @param $orderid

     * @return array

     * 获取订单详情.

     */



    public static function get_order_detail($orderid)

    {

        $row = ORM::factory('member_order', $orderid)->as_array();

        return $row;

    }



    /**

     * 订单列表

     * @param $mid

     * @param $page

     * @return mixed

     */

    /* public static function order_list($mid, $page = 1)

     {

         $offset = ($page - 1) * 10;

         $sql = "SELECT * FROM sline_member_order ";

         $sql .= "WHERE memberid={$mid} ";

         $sql .= "ORDER BY id DESC ";

         $sql .= "LIMIT {$offset},10";

         $arr = DB::query(1, $sql)->execute()->as_array();

         return $arr;

     }*/



    /**

     * @param $ordersn

     * @return mixed

     * 根据ordersn获取订单信息.

     */



    public static function get_order_by_ordersn($ordersn)

    {

        $row = ORM::factory('member_order')

            ->where("ordersn='$ordersn'")

            ->find()

            ->as_array();

        return $row;

    }



    /**

     * @param $orderid

     * @param $arr

     * 添加游客信息

     */

    public static function add_tourer($orderid, $arr)

    {



        $tourname = $arr['tourname'];

        $tourmobile = $arr['tourmobile'];

        $tourcard = $arr['touridcard'];



        for ($i = 0; isset($tourname[$i]); $i++)

        {



            $ar = array(

                'orderid' => $orderid,

                'tourername' => $tourname[$i],

                'cardtype' => '身份证',

                'cardnumber' => $tourcard[$i],

                'mobile' => $tourmobile[$i]



            );

            $m = ORM::factory('member_order_tourer');

            foreach ($ar as $k => $v)

            {

                $m->$k = $v;

            }

            $m->save();

            $m->clear();

        }





    }



    /**

     * @param $orderid

     * @param $arr

     * 添加游客信息

     */

    public static function add_tourer_pc($orderid, $arr,$memberid)

    {



        for ($i = 0; isset($arr[$i]); $i++)

        {

            $ar = array(

                'orderid' => $orderid,

                'tourername' => $arr[$i]['name'],

                'cardtype' => $arr[$i]['cardtype'],

                'cardnumber' => $arr[$i]['cardno'],

                'mobile' => ''

            );

            $m = ORM::factory('member_order_tourer');



            foreach ($ar as $k => $v)

            {

                $m->$k = $v;

            }

            $m->save();

            if($m->saved())

            {



                self::add_tourer_to_linkman($ar,$memberid);

            }

            $m->clear();

        }

    }



    /**

     * @param $ar

     * 检测常用联系人是否存在,不存在则添加.

     */

    public static function add_tourer_to_linkman($ar,$mid)

    {

        $m = ORM::factory('member_linkman')

            ->where("memberid=$mid and linkman='{$ar['tourername']}'")

            ->find();



        $new = array(

            'linkman'=>$ar['tourername'],

            'idcard'=>$ar['cardnumber'],

            'cardtype'=>$ar['cardtype'],

            'memberid'=>$mid



        );

        //如果没有找到,则自动加入常用联系人表

        if(!$m->loaded())

        {

            $_m = ORM::factory('member_linkman');



            foreach ($new as $k => $v)

            {

                $_m->$k = $v;

            }



            $_m->save();





        }

    }









    /*

     * 添加发票信息

     * */

    public static function add_bill_info($orderId,$billInfo)

    {

        $m = ORM::factory('member_order_bill');

        $m->orderid = $orderId;

        foreach($billInfo as $k => $v)

        {

            $m->$k = $v;

        }

        $m->save();





    }



    /**

     * @param $insuranceCodes

     * @param $orderSn 产品订单编号

     * @param $dingNum 预订数量

     * @param $memberId 会员ID

     * @param $useDate 出发日期

     * @param $lineDay 天数

     * @param $tourer 游客表

     */

    public static function add_insurance_order($insuranceCodes,$orderSn,$dingNum,$memberId,$useDate,$lineDay,$tourer)

    {





        $codes = explode(',',$insuranceCodes);

        foreach($codes as $code)

        {

            $sql = "SELECT * FROM `sline_insurance` WHERE productcode='$code'";

            $ar = DB::query(1,$sql)->execute()->as_array();

            $info = $ar[0];

            if(empty($info))

            {

                continue;

            }

            $curtime = time();

            $m = ORM::factory('insurance_booking');

            $insInfo = array(

                'bookordersn'=>$orderSn,

                'productcasecode'=>$code,

                'insurednum'=>$dingNum,

                'memberid'=>$memberId,

                'payprice'=>$info['ourprice']*$dingNum*$lineDay,

                'begindate'=>$useDate,

                'enddate'=>date('Y-m-d',strtotime($useDate)+($lineDay-1)*24*3600),

                'ordersn'=>'INS' . $curtime . mt_rand(11, 99),

                'addtime'=>$curtime,

                'modtime'=>$curtime

            );

            foreach($insInfo as $k => $v)

            {

                $m->$k = $v;

            }

            $m->save();

            if($m->saved())

            {

                $insOrderId = $m->id;

                foreach($tourer as $t)

                {



                    $insuredModel = ORM::factory('insurance_booking_tourer');

                    $insuredModel->name = $t['name'];

                    $insuredModel->sex = 0;

                    $insuredModel->mobile = '';

                    $insuredModel->cardcode = $t['cardno'];

                    $insuredModel->cardtype = self::get_card_type($t['cardtype']);

                    $insuredModel->orderid = $insOrderId;

                    $insuredModel->insurantrelation = 6;

                    $insuredModel->count = 1;

                    $insuredModel->save();

                    $insuredModel->clear();





                }

            }









        }







    }

    /*

     * 获取证件id,仅保险使用

     * */

    private static  function get_card_type($name)

    {

        $_arr=array(

            array('name'=>'身份证','id'=>1),

            array('name'=>'军官证','id'=>2),

            array('name'=>'因私护照','id'=>3),

            array('name'=>'港澳通行证','id'=>4),

            array('name'=>'台胞证','id'=>7));

        foreach($_arr as $v)

        {

            if($v['name']==$name)

                return $v['id'];

        }







    }



    /**

     * @param $typeid 栏目id

     * @param $params 参数

     *

     */

    public static function order_list($typeid,$mid,$ordertype,$currentpage,$pagesize='10',$linktel='')

    {



        $page = $currentpage ? $currentpage : 1;

        $offset = (intval($page)-1)*$pagesize;

        if(!empty($mid))

        {

            $where = "WHERE a.memberid='$mid'";

        }

        else

        {

            $where = "WHERE a.memberid>0";

        }



        if(!empty($typeid))

        {

            $where.= " AND a.typeid=$typeid";

        }



        switch($ordertype)

        {

            //全部订单

            case 'all':

                break;

            //未付款订单

            case 'unpay':

                $where.= " AND a.status=1";

                break;

            //未点评订单(需要交易完成后才能点评)

            case 'uncomment':

                $where.= " AND a.status=5 AND a.ispinlun=0 and a.isconsume=1 ";

                break;

        }

        //按手机号进行查询

        if(!empty($linktel))

        {

            $where.= " AND (a.linktel='$linktel' OR b.mobile='$linktel')";

        }



        $sql = "SELECT a.* FROM `sline_member_order` a LEFT JOIN `sline_member` b ON(a.memberid=b.mid)  $where   ORDER BY a.addtime DESC ";



        //计算总数

        $totalSql = "SELECT count(*) as dd ".strchr($sql," FROM");

        $totalSql = str_replace(strchr($totalSql,"ORDER BY"),'', $totalSql);//去掉order by





        $totalN = DB::query(1,$totalSql)->execute()->as_array();

        $totalNum = $totalN[0]['dd'] ? $totalN[0]['dd'] : 0;



        $sql.= "LIMIT {$offset},{$pagesize}";

        $arr = DB::query(1,$sql)->execute()->as_array();

        foreach($arr as &$v)

        {

            $orderInfo = self::order_info($v['ordersn']);

            $productInfo = self::get_product_info($v['typeid'],$v['productautoid']);

            $v['status'] = self::$orderStatus[$v['status']];//订单状态

            //$productUrl = Common::get_web_url($v['weburl']).'/'.self::$typeidTolink[$typeid]."/show_".$v['productaid'].'.html';

            $v['producturl'] = $productInfo['url'];

            $v['litpic'] = Common::img($productInfo['litpic']);

            $v['totalprice'] = $orderInfo['payprice'];

            $v['price'] = $v['price']=='0' ? $v['childprice']:$v['price'];



        }

        $out = array(

            'total' => $totalNum,

            'list' => $arr

        );

        return $out;



    }



    //获取产品地址

    public static function get_product_url($id,$typeid,$productname='')

    {



        $channeltable=array(

            "1"=>"sline_line",

            "2"=>"sline_hotel",

            "3"=>"sline_car",

            "4"=>"",

            "5"=>"sline_spot",

            "6"=>"",

            "7"=>"",

            "8"=>"sline_visa",

            "9"=>"",

            "10"=>"",

            "11"=>"",

            "12"=>"",

            "13"=>"sline_tuan");

        $tablename = $channeltable[$typeid];

        $fields=array(

            '1'=>array('field'=>'title','link'=>'lines'),

            '2'=>array('field'=>'title','link'=>'hotels'),

            '3'=>array('field'=>'title','link'=>'cars'),

            '4'=>array('field'=>'title','link'=>'article'),

            '5'=>array('field'=>'title','link'=>'spots'),

            '8'=>array('field'=>'title','link'=>'visa'),

            '13'=>array('field'=>'title','link'=>'tuan')

        );

        $field = $fields[$typeid]['field'];

        $link =$fields[$typeid]['link'];



        //如果为空,则是通用模块

        if(empty($field))

        {

            $moduleinfo = Model_Model::getModuleInfo($typeid);

            $field = 'title';

            $link = $moduleinfo['pinyin'];

            $tablename = 'sline_model_archive';



        }

        $sql = "SELECT aid,{$field} AS title,webid FROM {$tablename} WHERE id='$id'";

        $ar = DB::query(1,$sql)->execute()->as_array();

        $row = $ar[0];

        $title = !empty($productname) ? $productname : $row['title'];

        $weburl = Common::get_web_url($row['webid']);

        $out = "<a href=\"{$weburl}/{$link}/show_{$row['aid']}.html\" target=\"_blank\">{$title}</a>";

        return $out;



    }





    /**

     * 订单信息并计算总价

     * @param $ordersn

     * @return array

     */

    public static function order_info($ordersn)

    {



        $sql = "SELECT * FROM `sline_member_order` WHERE ordersn='{$ordersn}' ORDER BY id DESC LIMIT 1 ";

        $rs = DB::query(Database::SELECT, $sql)->execute()->current();

        $num=$rs['dingnum']+$rs['childnum']+$rs['oldnum'];

        if(doubleval($rs['dingjin'])>0&&$rs['paytype']==2)

        {

            //定金支付

            $total= doubleval($rs['dingjin'])*$num;

        }

        else if($rs['typeid']!=2)

        {

            //全额支付

            $total=$rs['dingnum']*$rs['price']+$rs['childnum']*$rs['childprice']+$rs['oldnum']*$rs['oldprice'];

        }

        else

        {

            //酒店需要重新计算金额

            //$total = Model_Hotel::suit_range_price($rs['suitid'],$rs['usedate'],$rs['departdate'],$rs['dingnum']);

            $total=$rs['dingnum']*$rs['price'];

        }



        //单房差

        if($rs['roombalancenum'] && $rs['roombalance'])

        {

            $total = $total+doubleval($rs['roombalance']);

        }





        $rs['totalprice'] = $total;//订单金额

        //保险

        if ($rs['typeid'] == 1)

        {

            $sql ="SELECT bookordersn,insurednum,payprice FROM `sline_insurance_booking` WHERE bookordersn='{$ordersn}'";

            $insurance=DB::query(Database::SELECT, $sql)->execute()->as_array();

            //叠加保险金额



            foreach($insurance as $v)

            {

                if(!empty($v['insurednum']))

                {

                    $total+=$v['payprice'];





                }

            }

        }



        //积分抵现

        if(intval($rs['usejifen'])===1)

        {

            $total=$total-$rs['jifentprice'];

        }



        $rs['status'] = self::$orderStatus[$rs['status']];



        //总金额写入数组

        $rs['payprice']=$total;

        return $rs;

    }



    /**

     * @param $typeid

     * @param $productid

     * @return array

     * 获取产品详细信息

     */

    public  static function get_product_info($typeid,$productid)

    {

        $out = array();

        if($typeid)

        {

            $model = ORM::factory('model',$typeid);



            $table = $model->maintable;

            $pinyin = $model->pinyin;

            if($table)

            {

                $info = ORM::factory($table,$productid)->as_array();

                $py = ($typeid>17 || $typeid==8 || $typeid==13) ? $pinyin : $pinyin.'s';

                $url = Common::get_web_url($info['webid'])."/{$py}/show_{$info['aid']}.html";

                $info['url'] = $url;

                $out = $info;

            }



        }

        return $out;





    }


    /**

     * 获取订单信息

     */

    public function check_order_info($ordersn)

    {

        $st_supplier_id = 9;

        $whereStr = " (status='5' OR status='2') AND find_in_set('{$st_supplier_id}',supplierlist)";

        $whereStr .= " AND ordersn='{$ordersn}'" ;

        $data = ORM::factory('member_order')

            ->where($whereStr)

            ->get_all();



        if($data[0]['isconsume'] == 0)

        {

            $updateArr = array(

                'isconsume' => 1,

                'consumetime' => time(),

                'status'      => 5,// fengjishu  07.14 新加

                'consumeverifyuser' => $st_supplier_id,

                'consumeverifymemo' => '三方接口验单'

            );

            $whereStr .= " AND consumetime IS NULL";

            $rtn = $this->_update_field_by_where($updateArr, $whereStr, 'member_order');

            if($rtn)

            {

                $rtnData = array('status' => 1,'msg' => '验单成功');

            }

            else

            {

                $rtnData = array('status' => 0,'msg' => '验单失败');

            }

        }

        else

        {

            $rtnData = array('status' => 0,'msg' => '该票已被使用');

        }



        return $rtnData;

    }



    /**

     * 数据修改

     * @param $update_arr

     * @param $where

     * @param $tabName

     * @return object

     */

    private function _update_field_by_where($updateArr, $where, $tabName)

    {

        return DB::update($tabName)->set($updateArr)->where($where)->execute();

    }












}

