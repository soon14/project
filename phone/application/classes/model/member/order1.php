<?php
defined('SYSPATH') or die('No direct access allowed.');

class Model_Member_Order extends ORM
{
    /**
     * @param int $id
     * @param $typeid
     * @param null $row
     * @return int
     * @description
     */
    public static function get_sell_num($id = 0, $typeid)
    {


        $id = $row != null ? $row['id'] : $id;
        $where = empty($id) ? "typeid='$typeid'" : "productautoid='$id' and typeid='$typeid'";
        $m = ORM::factory('member_order')
            ->where($where)
            ->get_all();
        $num = count($m);
        return $num ? $num : 0;

    }
    public static function get_sell_nums($id = 0, $typeid)
    {


        $id = $row != null ? $row['id'] : $id;
        $where = empty($id) ? "typeid='$typeid'" : "productautoid='$id' and typeid='$typeid'";
        $m = ORM::factory('member_order')
            ->where($where)
            ->get_all();
        $allnum =0;
        foreach($m as $k=>$v){

            $allnum  += intval($v['dingnum'])+intval($v['childnum'])+intval($v['oldnum']);
        }
        $num = $allnum;
        return $num ? $num : 0;

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
    public static function order_list($mid, $page = 1, $param = null)
    {
        if (!is_null($param) && isset($param['isquery']))
        {
            $data = self::query_order($page = 1, $param );
        }
        else
        {
            $data = self::my_order($mid, $page = 1, $param);
        }
        return $data;
    }
    /**
     * 米淘 订单列表
     * @param $mid
     * @param $page
     * @return mixed
     */
    public static function order_list2($mid, $page = 1, $param = null)
    {
        if (!is_null($param) && isset($param['isquery']))
        {
            $data = self::query_order2($page = 1, $param );
        }
        else
        {
            $data = self::my_order2($mid, $page = 1, $param);
        }
        return $data;
    }

    /**
     * 订单查询
     * @param $mid
     * @param int $page
     * @param null $param
     */
    public static function query_order($page, $param)
    {
        $offset = ($page - 1) * 10;
        $sql = "SELECT * FROM sline_member_order ";
        $sql .= "WHERE pid=0 AND `memberid` =(select mid from sline_member where mobile={$param['isquery']}) ";
        if (!is_null($param) && $param['type'] != -1)
        {
            switch ($param['type'])
            {
                case 0:
                    $sql .= "and `status` < 2 ";
                    break;
                case 1:
                    $sql .= "and `status` > 1 ";
                    break;
            }
        }
        $sql .= "ORDER BY id DESC ";
        $sql .= "LIMIT {$offset},10";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }
    /*
     *  米淘订单
     */
    public static function query_order2($page, $param)
    {
        $offset = ($page - 1) * 10;
        $sql = "SELECT * FROM sline_member_order ";
        $sql .= "WHERE pid=0 AND `memberid` =(select mid from sline_member where mobile={$param['isquery']}) and `typeid`=106 ";
        if (!is_null($param) && $param['type'] != -1)
        {
            switch ($param['type'])
            {
                case 0:
                    $sql .= "and `status` < 2 ";
                    break;
                case 1:
                    $sql .= "and `status` > 1 ";
                    break;
            }
        }
        $sql .= "ORDER BY id DESC ";
        $sql .= "LIMIT {$offset},10";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

    /**
     * 订单中心
     * @param $mid
     * @param int $page
     * @param null $param
     * @return mixed
     */
    public static function my_order($mid, $page,$param)
    {
        $offset = ($page - 1) * 10;
        $sql = "SELECT * FROM sline_member_order ";
        $sql .= "WHERE pid=0 AND `memberid`={$mid} ";
        if (!is_null($param) && $param['type'] != -1)
        {
            switch ($param['type'])
            {
                case 0:
                    $sql .= "and `status` < 2 ";
                    break;
                case 1:
                    $sql .= "and `status` > 1 ";
                    break;
            }
        }
        $sql .= "ORDER BY id DESC ";
        $sql .= "LIMIT {$offset},10";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }
    /**
     * 米淘 订单中心
     * @param $mid
     * @param int $page
     * @param null $param
     * @return mixed
     */
    public static function my_order2($mid, $page,$param)
    {
        $offset = ($page - 1) * 10;
        $sql = "SELECT * FROM sline_member_order ";
        $sql .= "WHERE pid=0 AND `memberid`={$mid} and `typeid`=106 ";
        if (!is_null($param) && $param['type'] != -1)
        {
            switch ($param['type'])
            {
                case 0:
                    $sql .= "and `status` < 2 ";
                    break;
                case 1:
                    $sql .= "and `status` =2  ";
                    break;
                case 2:
                    $sql .= "and `status` =5 and ispinlun=0 ";
                    break;
                case 3:
                    $sql .= "and (`status` =3 or `status` =4 or `status` =6) ";
                    break;

            }
        }
        $sql .= "ORDER BY id DESC ";
        $sql .= "LIMIT {$offset},10";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }
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
        $toursex = $arr['toursex'];
        $tourmobile = $arr['tourmobile'];
        $tourcard = $arr['touridcard'];

        for ($i = 0; isset($tourname[$i]); $i++)
        {

            $ar = array(
                'orderid' => $orderid,
                'tourername' => $tourname[$i],
                'sex' => $toursex[$i],
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
     * 查询未支付的订单
     * @param $memberid
     */
    public static function unpay($memberid)
    {
        $sql = "SELECT * FROM sline_member_order ";
        $sql .= "WHERE memberid={$memberid} AND paytype<3 AND ispay=0";
        $arr = DB::query(1, $sql)->execute()->as_array();
        return $arr;
    }

}
