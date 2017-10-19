<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/10 0010
 * Time: 13:59
 */
class Plugin_Fenxiao extends Plugin_Core_Base{
    public function on_orderstatus_changed($params){
        try {
            if ($params['status'] == 5)
                $this->pay_commission($params);
          }catch(Exception $excep){


        }

    }
    //反佣
    private function pay_commission($order)
    {
        $fenxiaoModel=ORM::factory('fenxiao')->where('memberid','=',$order['memberid'])->find();

        if(!$fenxiaoModel->loaded())
            return;
        $consumeAmount=Model_Member_Order::get_payed_amount($order);


        $commissiontype=Model_Fenxiao_Config::get_val('cfg_fenxiao_commission_type_'.$order['typeid']);


        $rateArr=array();
        $cashArr=array();
        if($commissiontype==1) {
            $rateArr = $this->get_commission_rate($order['typeid'], $order['productautoid']);
        }
        else {
            $cashArr = $this->get_commission_cash($order['typeid'], $order['productautoid']);
        }

        $fenxiaoArr=array();
        $fenxiaoArr[]=Model_Fenxiao::get_ancestor_fenxiao($order['memberid'],1);
        $fenxiaoArr[]=Model_Fenxiao::get_ancestor_fenxiao($order['memberid'],2);
        $fenxiaoArr[]=Model_Fenxiao::get_ancestor_fenxiao($order['memberid'],3);
        $curtime=time();
        //一级分销反佣


        foreach($fenxiaoArr as $k=>$v) {
            if ($v) {
                $hasNum=ORM::factory('fenxiao_record')->where('memberid','=',$v['memberid'])->and_where('fxmemberid','=',$order['memberid'])->and_where('type','=',0)->and_where('orderid','=',$order['id'])->count_all();
                if($hasNum>0)
                    continue;
                $fenxiaoModel = ORM::factory('fenxiao', $v['id']);
                if ($fenxiaoModel->loaded()) {
                    if($fenxiaoModel->isfrozen==1)
                        continue;

                    $payAmount=0;
                    if($commissiontype==1)
                    {
                        $payAmount = floatval($consumeAmount * $rateArr[$k]);
                    }else
                    {
                        $payAmount = floatval($cashArr[$k]);
                    }


                    $fenxiaoModel->fxamount += $payAmount;
                    $fenxiaoModel->save();
                    if ($fenxiaoModel->saved()) {
                        $fenxiaoRecord = ORM::factory('fenxiao_record');
                        $fenxiaoRecord->memberid = $v['memberid'];
                        $fenxiaoRecord->type = 0;
                        $fenxiaoRecord->amount = $payAmount;
                        $fenxiaoRecord->orderid=$order['id'];
                        $fenxiaoRecord->fxmembertype=$k+1;
                        $fenxiaoRecord->fxmemberid=$order['memberid'];
                        $fenxiaoRecord->addtime=$curtime;
                        $fenxiaoRecord->save();
                   }
                }
            }
        }
    }
    public function get_commission_rate($typeid,$productid)
    {
        $configList=ORM::factory('fenxiao_config')->get_all();
        $first=0;
        $second=0;
        $third=0;

        $ratioModel=ORM::factory('fenxiao_ratio')->where('typeid','=',$typeid)->and_where('productid','=',$productid)->find();
        if($ratioModel->loaded())
        {
            $first=$ratioModel->fxratio1;
            $first=empty($first)?0:$first/100;

            $second=$ratioModel->fxratio2;
            $second=empty($second)?0:$second/100;

            $third=$ratioModel->fxratio3;
            $third=empty($third)?0:$third/100;
        }

        foreach($configList as $k=>$v)
        {
            if($v['varname']=='cfg_fenxiao_first_ratio_'.$typeid && empty($first))
            {
                $val=floatval($v['value']);
                $first=empty($val)?0:$val/100;
            }
            if($v['varname']=='cfg_fenxiao_second_ratio_'.$typeid  && empty($second))
            {
                $val=floatval($v['value']);
                $second=empty($val)?0:$val/100;
            }
            if($v['varname']=='cfg_fenxiao_third_ratio_'.$typeid && empty($third))
            {
                $val=floatval($v['value']);
                $third=empty($val)?0:$val/100;
            }
        }
        return array($first,$second,$third);
    }
    public function get_commission_cash($typeid,$productid)
    {
        $configList=ORM::factory('fenxiao_config')->get_all();
        $first=0;
        $second=0;
        $third=0;

        $ratioModel=ORM::factory('fenxiao_ratio')->where('typeid','=',$typeid)->and_where('productid','=',$productid)->find();
        if($ratioModel->loaded())
        {
            $first=$ratioModel->cash1;
            $first=empty($first)?0:$first;

            $second=$ratioModel->cash2;
            $second=empty($second)?0:$second;

            $third=$ratioModel->cash3;
            $third=empty($third)?0:$third;
        }

        foreach($configList as $k=>$v)
        {
            if($v['varname']=='cfg_fenxiao_first_cash_'.$typeid && empty($first))
            {
                $val=floatval($v['value']);
                $first=empty($val)?0:$val;
            }
            if($v['varname']=='cfg_fenxiao_second_cash_'.$typeid  && empty($second))
            {
                $val=floatval($v['value']);
                $second=empty($val)?0:$val;
            }
            if($v['varname']=='cfg_fenxiao_third_cash_'.$typeid && empty($third))
            {
                $val=floatval($v['value']);
                $third=empty($val)?0:$val;
            }
        }
        return array($first,$second,$third);
    }
}