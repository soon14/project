<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Member_Order_listener extends ORM
{
    public static function detect($ordersn)
    {
        $sql = "select * from sline_member_order where ordersn='{$ordersn}'";
        $orderlist = DB::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($orderlist) <= 0)
            return true;

        $sql = <<<sql
        SELECT
            *
        FROM
            sline_member_order_listener
        WHERE
            (webid IS NULL OR webid = {$orderlist[0]['webid']})
        AND (typeid IS NULL OR typeid = {$orderlist[0]['typeid']})
        AND (
            supplierlist IS NULL
            OR supplierlist = ''
            OR supplierlist = '{$orderlist[0]['supplierlist']}'
        )
        AND (
            distributor IS NULL
            OR distributor = ''
            OR distributor = '{$orderlist[0]['distributor']}'
        )
        AND (
            productautoid IS NULL
            OR productautoid = {$orderlist[0]['productautoid']}
        )
        AND (suitid IS NULL OR suitid = {$orderlist[0]['suitid']})
        AND (
            order_status IS NULL
            OR order_status = {$orderlist[0]['status']}
        )
        AND isenabled = 1
sql;

        $listenerlist = DB::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($listenerlist) <= 0)
            return true;

        foreach ($listenerlist as $listener)
        {
            $execurl = $listener['execute_url'];
            if (stristr($execurl, '?') === false)
                $execurl = $execurl . "?ordersn={$ordersn}";
            else
                $execurl = $execurl . "&ordersn={$ordersn}";

            $execresult = self::request($execurl);
            if ($execresult->status != 1)
                return $execresult->msg;
        }
        return true;
    }

    private static function request($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));

        $return = curl_exec($ch);
        curl_close($ch);

        return json_decode($return);
    }
}