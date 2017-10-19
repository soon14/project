<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Fenxiao extends ORM {
    public static function get_consume_amount($mid)
    {
        $orderList=DB::query(Database::SELECT,"select * from sline_member_order where memberid='$mid' and (status=2 or status=5)")->execute()->as_array();
        $amount=0;
        foreach($orderList as $row)
        {
            $amount+=Model_Member_Order::get_payed_amount($row);
        }
        return $amount;
    }
    public static function get_ancestor_fenxiao($mid,$grade=1)
    {
        if(empty($grade) || $grade==1)
        {
            $model = ORM::factory('fenxiao')->where('memberid', '=', $mid)->find();
            if ($model->loaded())
            {
                $fenxiao=ORM::factory('fenxiao')->where('fxcode','=',$model->fxpcode)->find();
                if($fenxiao->loaded())
                    return $fenxiao->as_array();
            }
            else
                return null;
        }
        if($grade==2)
        {
            $firstFenxiao=self::get_ancestor_fenxiao($mid,1);
            if(empty($firstFenxiao))
                return null;
            return self::get_ancestor_fenxiao($firstFenxiao['memberid'],1);
        }
        if($grade==3)
        {
            $firstFenxiao=self::get_ancestor_fenxiao($mid,2);
            if(empty($firstFenxiao))
                return null;
            return self::get_ancestor_fenxiao($firstFenxiao['memberid'],1);
        }
    }
}