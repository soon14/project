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
    //获取下级分销商的分享代码
    public static function get_sub_fxcode($fxcode,$type)
    {

        if(empty($type) ||$type==1) {
            $sql="select fxcode from sline_fenxiao where fxpcode='{$fxcode}'";
            $list = DB::query(Database::SELECT, $sql)->execute()->as_array();
            $arr=array();
            foreach($list as $v)
            {
                $arr[]=$v['fxcode'];
            }
            return empty($arr)?null:$arr;
        }
        if($type==2)
        {
            $fxcodeArr=self::get_sub_fxcode($fxcode,0);
            if(empty($fxcodeArr))
                return null;
            foreach($fxcodeArr as &$v)
            {
                $v="'".$v."'";
            }
            $sql="select fxcode from sline_fenxiao where fxpcode in (".implode(',',$fxcodeArr).")";
            $list = DB::query(Database::SELECT, $sql)->execute()->as_array();
            $arr=array();
            foreach($list as $v)
            {
                $arr[]=$v['fxcode'];
            }
            return empty($arr)?null:$arr;
        }
        if($type==3)
        {
            $fxcodeArr=self::get_sub_fxcode($fxcode,2);
            if(empty($fxcodeArr))
                return null;
            foreach($fxcodeArr as &$v)
            {
                $v="'".$v."'";
            }
            $sql="select fxcode from sline_fenxiao where fxpcode in (".implode(',',$fxcodeArr).")";
            $list = DB::query(Database::SELECT, $sql)->execute()->as_array();
            $arr=array();
            foreach($list as $v)
            {
                $arr[]=$v['fxcode'];
            }
            return empty($arr)?null:$arr;
        }

    }
    public static function joinus($mid)
    {
        $model=ORM::factory('fenxiao')->where('memberid','=',$mid)->find();
        if($model->loaded())
            return true;
        $code='';
        while(true) {
            $code=self::gene_code();
            $count = ORM::factory('fenxiao')->where('fxcode', '=', $code)->count_all();
            if($count<=0)
                break;
        }
        $model->memberid=$mid;
        $model->fxjointime=time();
        $model->fxamount=0;
        $model->fxcode=$code;
        $model->save();
        if($model->saved())
            return true;
        else
            return false;
    }
    public static function invite($mid,$fxpcode)
    {
        $model=ORM::factory('fenxiao')->where('memberid','=',$mid)->find();
        if($model->loaded())
            return true;
        $code='';
        while(true) {
            $code=self::gene_code();
            $count = ORM::factory('fenxiao')->where('fxcode', '=', $code)->count_all();
            if($count<=0)
                break;
        }
        $model->memberid=$mid;
        $model->fxjointime=time();
        $model->fxamount=0;
        $model->fxcode=$code;
        $model->fxpcode=$fxpcode;
        $model->save();
        if($model->saved())
            return true;
        else
            return false;
    }
    public static function gene_code()
    {
        $str="0123456789abcdefghijklmnpqrstuvwxyz";
        $len=strlen($str);
        $number=8;
        $code='';
        for($i=0;$i<$number;$i++)
        {
            $code.=$str[mt_rand(0,$len-1)];
        }
        $num=ORM::factory('fenxiao')->where('fxcode','=',$code)->count_all();
        return $code;
    }
    //获取已提现总额
    public static function get_withdrawed_amount($mid)
    {
        $arr=DB::query(Database::SELECT,"select sum(ifnull(withdrawamount,0)) as amount from sline_fenxiao_withdraw where memberid={$mid} and status=1")->execute()->as_array();
        if(!empty($arr) &&!empty($arr[0]['amount']))
            return $arr[0]['amount'];
        return 0;
    }
    public static function is_fenxiao()
    {

        try {
            $member = Common::session('member');
            if (empty($member))
                throw new Exception();
            $fenxiaoModel = ORM::factory('fenxiao')->where('memberid', '=', $member['mid'])->find();
            if (!$fenxiaoModel->loaded())
                throw new Exception();
            $fenxiao=$fenxiaoModel->as_array();
            $fxurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?fxcode='.$fenxiao['fxcode'];
            return $fenxiao;
        }
        catch(Exception $excep)
        {
            $fxcode=$_GET['fxcode'];
            Common::session('fxcode',$fxcode);
            return false;
        }
    }
    public static function get_fx_url()
    {
        $member = Common::session('member');
        if (empty($member))
            return null;
        $fenxiaoModel = ORM::factory('fenxiao')->where('memberid', '=', $member['mid'])->find();
        if (!$fenxiaoModel->loaded())
           return null;
        $fenxiao=$fenxiaoModel->as_array();
        $fxurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?fxcode='.$fenxiao['fxcode'];
        $fxurl=urlencode($fxurl);
        return $fxurl;
    }
    public static function is_installed()
    {
        return file_exists(BASEPATH.'/plugins/fx_phone');
    }
	


}