<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Act extends ORM {

    protected  $_table_name = 'act';
    
	public function deleteClear()
	{
		 //DB::delete('line_suit_price')->where("suitid={$this->id}")->execute();
		 $suits=ORM::factory('line_suit')->where("lineid={$this->id}")->find_all()->as_array();
		 foreach($suits as $suit)
		 {
			 $suit->deleteClear();
		 }
		/* Common::deleteRelativeImage($this->litpic);
		 $piclist=explode(',',$this->piclist);
		 foreach($piclist as $k=>$v)
		 {
			  $img_arr=explode('||',$v);
			  Common::deleteRelativeImage($img_arr[0]);
		 }*/
		 $this->delete();
	}
    /*
     *   取得 线路套餐  feng 1122
     */
    public  function  suit_info($lineid){

          $sql = "SELECT * FROM `sline_line_suit` where lineid =$lineid";
          $arr =  DB::query(1,$sql)->execute()->as_array();
         if(count($arr)>1){
             $msg = array('message'=>'请检查您的报价套餐，是否为一个','jumpUrl'=>'');
             Common::message($msg);
             echo $msg['message'].'。并关闭当前页面';
             exit;
         }
          return $arr[0];
    }
    /*
     *   feng
     *  获得 自驾车辆总数]
     *  iscancle=0  非取消订单
     *  lineid  =  线路id
     */
    public static function get_carNum($lineid){

         $sql  = "select count(*) as carnum from `sline_member_car` where lineid=$lineid and iscancle=0";
        $carnum = DB::query(1,$sql)->execute()->get('carnum');
        return $carnum;
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
    /*
   *   feng
   *  获得 自驾车辆总数]
   *  iscancle=0  非取消订单
   *  lineid  =  线路id
   */
    public static function get_carmens($lineid){

        $sql  = "select sum(carmens) as carmens from `sline_member_car` where lineid=$lineid and iscancle=0";
        $carmens = DB::query(1,$sql)->execute()->get('carmens');
        return $carmens;
    }
    /*
     *  自驾人员统计
     */
    public static function humanCount($productaid,$typeid){

        if(empty($productaid)||empty($typeid)){

            return '请配置正确的参数';
        }

        $sql     = "SELECT * FROM `sline_member_order` where typeid=$typeid and productaid=$productaid and (status=2 or status=5)";

        $re    = DB::query(1,$sql)->execute()->as_array();

        return $re;
    }
    /**
     * @param $suitId
     * @param $useDate
     * @return array
     * @desc 获取套餐某天的报价. feng 1122
     */
    public static function suit_price($suitId,$useDate)
        { if(empty($useDate)){
            $msg = array('message'=>'请填写您的出团日期','jumpUrl'=>'');
            Common::message($msg);
            echo $msg['message'].'，并关闭当前页面';
            exit;
        }else{
            $time = strtotime($useDate);
            if(empty($time)){

                $msg = array('message'=>'请检查出团日期的格式','jumpUrl'=>'');
                Common::message($msg);
                echo $msg['message'].'，并关闭当前页面';
                exit;
            }

        }
        if(empty($suitId)){
            $msg = array('message'=>'请填写您的报价套餐','jumpUrl'=>'');
            Common::message($msg);
            echo $msg['message'].'，并关闭当前页面';
            exit;
        }


        $arr = ORM::factory('line_suit_price')
            ->where("suitid=$suitId AND day=$time")
            ->find()
            ->as_array();
        $arr['childprofit'] = Currency_Tool::price($arr['childprofit']);
        $arr['childbasicprice'] = Currency_Tool::price($arr['childbasicprice']);
        $arr['childprice'] = Currency_Tool::price($arr['childprice']);
        $arr['oldprofit'] = Currency_Tool::price($arr['oldprofit']);
        $arr['oldbasicprice'] = Currency_Tool::price($arr['oldbasicprice']);
        $arr['oldprice'] = Currency_Tool::price($arr['oldprice']);
        $arr['adultprofit'] = Currency_Tool::price($arr['adultprofit']);
        $arr['adultbasicprice'] = Currency_Tool::price($arr['adultbasicprice']);
        $arr['adultprice'] = Currency_Tool::price($arr['adultprice']);
        $arr['roombalance'] = Currency_Tool::price($arr['roombalance']);

        return $arr;

    }
    /*

   * 生成订单编号 feng 1122

   * */

    public static function get_ordersn($kind)

    {

        /* 选择一个随机的方案 */

        return $kind.substr(time(),-5).substr(microtime(),2,5).sprintf('%02d',rand(0,99));

    }
    //添加订单  feng 1122

    public static function add_order($arr,$carinfo,$wxuserid,$tourer,$orderid='')

    {
       if(empty($orderid)) {
           $model = ORM::factory('member_order');
       }else{
           $model = ORM::factory('member_order',$orderid);
       }

        $flag = 0;

        if(is_array($arr))

        {
            //添加供应商信息
           // $arr['supplierlist'] = self::get_product_supplier($arr['typeid'],$arr['productautoid']);

            if($arr['paytype']=='3')//这里补充一个当为二次确认时,修改订单为未处理状态.

            {

                $arr['status'] = 0;

            }

            if(empty($arr['memberid']))

            {

                $arr['memberid'] = self::auto_reg($arr['linktel']);

            }

            foreach($arr as $k=>$v)

            {
                $model->$k=$v;
            }
            $model->save();

            $flag = $model->saved();

            if($flag)

            {
                if(is_array($carinfo)){
                if(empty($orderid)) {
                    $models = ORM::factory('member_car');
                }else{
                    $models = ORM::factory('member_car')->where("orderid=$orderid")->find();;
                }
                foreach($carinfo as $ke=>$va)
                {
                    $models->$ke=$va;
                }

                $models ->mid=$arr['memberid'];
                $models ->orderid = $model->id;
                $models ->save();
                $res= $models->saved();

               }
               //  更新自驾次数 和 微信 会员的 mid
                if(!empty($wxuserid)&&empty($orderid)){
                    $sql  = " update `bbs_hjbox_users` set drivingRate=drivingRate+1,mid=".$arr['memberid'].",telphone=$arr[linktel]";
                    $sql  .= " where id =$wxuserid";

                    DB::query(1,$sql)->execute();
                }else{

                    $flag= 2;
                }
                self::add_tourer_pc($model->id,$tourer,$arr['memberid']);

                //下单成功,设置当前平台PC

               // Common::session('_platform', 'pc');

                //减库存

                $dingnum = intval($arr['dingnum'])+intval($arr['childnum'])+intval($arr['oldnum']);

                if($arr['typeid']!=2)

                {
                    self::minus_storage($arr['usedate'],$arr['typeid'],$arr['suitid'],$arr['productid'],$dingnum);
                }
                else

                {
                    self::minus_storage($arr['usedate'],$arr['typeid'],$arr['suitid'],$arr['productid'],$dingnum,$arr['departdate']);

                }
              //  $memberinfo =Model_Member::get_member_byid($arr['memberid']);

//                $mobile = $memberinfo['mobile'];
//
//                $prefix = !empty($memberinfo['nickname']) ? $memberinfo['nickname'] :$memberinfo['mobile'];

               // $orderAmount = self::calculate_price($model->as_array());

              /*  if($arr['paytype']=='3') //二次确认支付

                {

                    $msgInfo = self::get_define_msg($arr['typeid'],1);

                    if($msgInfo['isopen']==1) //等待客服处理短信

                    {

                        $content = $msgInfo['msg'];

                        $content = str_replace('{#MEMBERNAME#}',$memberinfo['nickname'],$content);

                        $content = str_replace('{#PRODUCTNAME#}',$arr['productname'],$content);

                        $content = str_replace('{#PRICE#}',$orderAmount['priceDescript'],$content);

                        $content = str_replace('{#NUMBER#}',$orderAmount['numberDescript'],$content);

                        $content = str_replace('{#TOTALPRICE#}',$orderAmount['totalPrice'],$content);

                        $content = str_replace('{#ORDERSN#}',$arr['ordersn'],$content);

                        $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);

                        self::send_msg($mobile,$prefix,$content);//发送短信.

                    }

                    $emailInfo=self::get_email_msg($arr['typeid'],1);

                    if($emailInfo['isopen']==1 && $memberinfo['email'])

                    {

                        $title="预定".$arr['productname'].'['.$GLOBALS['cfg_webname'].']';

                        $content = $emailInfo['msg'];

                        $content = str_replace('{#MEMBERNAME#}',$memberinfo['nickname'],$content);

                        $content = str_replace('{#PRODUCTNAME#}',$arr['productname'],$content);

                        $content = str_replace('{#PRICE#}',$orderAmount['priceDescript'],$content);

                        $content = str_replace('{#NUMBER#}',$orderAmount['numberDescript'],$content);

                        $content = str_replace('{#TOTALPRICE#}',$orderAmount['totalPrice'],$content);

                        $content = str_replace('{#EMAIL#}',$memberinfo['email'],$content);

                        $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);

                        self::order_email($memberinfo['email'],$title,$content);

                    }









                }

                else //全款支付/订金支付

                {

                    $msgInfo = self::get_define_msg($arr['typeid'],2);

                    if($msgInfo['isopen']==1)

                    {

                        $content = $msgInfo['msg'];

                        $content = str_replace('{#MEMBERNAME#}',$memberinfo['nickname'],$content);

                        $content = str_replace('{#PRODUCTNAME#}',$arr['productname'],$content);

                        $content = str_replace('{#PRICE#}',$orderAmount['priceDescript'],$content);

                        $content = str_replace('{#NUMBER#}',$orderAmount['numberDescript'],$content);

                        $content = str_replace('{#TOTALPRICE#}',$orderAmount['totalPrice'],$content);

                        $content = str_replace('{#ORDERSN#}',$arr['ordersn'],$content);

                        $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);

                        self::send_msg($mobile,$prefix,$content);//发送短信.

                    }

                    $emailInfo=self::get_email_msg($arr['typeid'],2);

                    if($emailInfo['isopen']==1 && $memberinfo['email'])

                    {

                        $title="预定".$arr['productname'].'['.$GLOBALS['cfg_webname'].']';

                        $content = $emailInfo['msg'];

                        $content = str_replace('{#MEMBERNAME#}',$memberinfo['nickname'],$content);

                        $content = str_replace('{#PRODUCTNAME#}',$arr['productname'],$content);

                        $content = str_replace('{#PRICE#}',$orderAmount['priceDescript'],$content);

                        $content = str_replace('{#NUMBER#}',$orderAmount['numberDescript'],$content);

                        $content = str_replace('{#TOTALPRICE#}',$orderAmount['totalPrice'],$content);

                        $content = str_replace('{#EMAIL#}',$memberinfo['email'],$content);

                        $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);

                        self::order_email($memberinfo['email'],$title,$content);

                    }





                }*/

//                $cfg_supplier_msg_open = $GLOBALS['cfg_supplier_msg_open'];
//
//                $content = $GLOBALS['cfg_supplier_msg'];
              /*  if($cfg_supplier_msg_open==1 )

                {



                    $content = str_replace('{#LINKMAN#}',$arr['linkman'],$content);

                    $content = str_replace('{#LINKNAME#}',$arr['linkman'],$content);

                    $content = str_replace('{#PRODUCTNAME#}',$arr['productname'],$content);

                    $content = str_replace('{#PHONE#}',$arr['linktel'],$content);

                    $content = str_replace('{#PRICE#}',$orderAmount['priceDescript'],$content);

                    $content = str_replace('{#NUMBER#}',$orderAmount['numberDescript'],$content);

                    $content = str_replace('{#TOTALPRICE#}',$orderAmount['totalPrice'],$content);

                    $content = str_replace('{#ORDERSN#}',$arr['ordersn'],$content);

                    $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);



                    //本站管理员短信发送

                    $cfg_webmaster_phone = $GLOBALS['cfg_webmaster_phone'];

                    if(!empty($cfg_webmaster_phone))

                    {

                        self::send_msg($cfg_webmaster_phone,$prefix,$content);//发送短信.

                    }



                    if(!empty($cfg_supplier_msg_open))

                    {

                        $supplierphone = self::get_supplier_tel($arr['productautoid'],$arr['typeid']);



                        if(!empty($supplierphone))

                        {

                            self::send_msg($supplierphone,$prefix,$content);//发送短信.

                        }



                    }

                }*/

            }

        }

        return $flag;
    }
    /**

     * @param $ordersn  feng 1124

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

     * @param $orderid  1124

     * @param $arr

     * 添加游客信息

     */

    public static function
    add_tourer_pc($orderid, $arr,$memberid)

    {



        for ($i = 0; isset($arr[$i]); $i++)

        {

            $ar = array(

                'orderid' => $orderid,

                'productid' => $arr[$i]['productid'],

                'typeid'   => $arr[$i]['typeid'],

                'tourername' => $arr[$i]['name'],

                'cardtype' => $arr[$i]['cardtype'],

                'cardnumber' => $arr[$i]['cardno'],

                'sex' => $arr[$i]['cardsex'],

                'mobile' => $arr[$i]['mobile']

            );

            if(!empty($arr[$i]['id'])) {
                $m = ORM::factory('member_order_tourer',$arr[$i]['id']);
            }else{
                $m = ORM::factory('member_order_tourer');
            }


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

     * @param $ar   feng  1124

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
    /**

     * @param $mobile

     * @return int|mixed

     * @desc 自动按手机号注册帐号  feng 1122

     */

    public static function auto_reg($mobile)

    {

        $out = 0;

        $sql = "SELECT mid FROM `sline_member` WHERE mobile='$mobile'";

        $row = DB::query(1,$sql)->execute()->as_array();

        if(!empty($row[0]['mid']))

        {

            $out = $row[0]['mid'];

        }

        else

        {

            $pwd=md5($mobile);

            $jointime=time();

            $joinip=Common::get_ip();

            $mtype = 1;//  标示 是后台 添加

            $jifen=empty($GLOBALS['cfg_reg_jifen']) ? 0 : $GLOBALS['cfg_reg_jifen'];//网上注册赠送积分

            $nickname=substr($mobile,0,5).'***';

            $m = ORM::factory('member');

            $member = array(

                'nickname'=>$nickname,

                'pwd'=>$pwd,

                'jointime'=>$jointime,

                'mtype' => $mtype,

                'email'=>'',

                'mobile'=>$mobile,

                'joinip'=>$joinip,

                'jifen'=>$jifen

            );

            foreach($member as $key => $value)

            {

                $m->$key = $value;

            }

            $m->save();

            if($m->saved())

            {

                //$content="尊敬的用户{$mobile}你好,你已经成功注册成为{$GLOBALS['cfg_webname']}会员,你的登陆名是:{$mobile},密码是:{$mobile},为了你的帐户安全,请尽快修改密码!";

 //                $msgInfo = self::get_define_msg(0,0);
//
//
//
//                if($msgInfo['isopen']==1)
//
//                {
//
//
//
//                    $content = $msgInfo['msg'];
//
//                    $content = str_replace('{#LOGINNAME#}',$mobile,$content);
//
//                    $content = str_replace('{#PASSWORD#}',$mobile,$content);
//
//                    $content = str_replace('{#WEBNAME#}',$GLOBALS['cfg_webname'],$content);
//
//                    $content = str_replace('{#PHONE#}',$GLOBALS['cfg_phone'],$content);
//
//                    self::send_msg($mobile,'',$content);//注册短信
//
//                }

                $out = $m->mid;



            }



        }

        return $out;





    }


    /**

     * 产品编号 共6位,不足6位前面被0

     * @param $id

     * @param $prefixId

     * @return string  feng 1122

     */

    public static function product_number($id, $prefixId)

    {

        $arr = array(

            'A' => '01',

            'B' => '02',

            'C' => '05',

            'D' => '03',

            'E' => '08',

            'G' => '13',

            'H' => '14',

            'I' => '15',

            'J' => '16',

            'K' => '17',

            'L' => '18',

            'M' => '19',

            'N' => '20',

            'O' => '21',

            'P' => '22',

            'Q' => '23',

            'R' => '24',

            'S' => '25',

            'T' => '26'

        );

        $str =  $id;

        return array_search($prefixId, $arr).str_pad($str, 6, "0",STR_PAD_LEFT);

    }

    /*
     * 提取景点
     * */
    public function autoGetSpot($content,$actid,$day)
    {
        $sql="select a.id,a.aid,a.title,a.litpic,a.webid from #@__spot as a where a.litpic !='' or a.piclist !='' group by a.title";


        $arr = ORM::factory('spot')->where("litpic !='' or piclist !=''")->group_by('title')->get_all();

        $keysarrs = $picsarr = $idsarr = $orderarr = array();
        foreach($arr as $row)
        {

            array_push($keysarrs,$row['shortname']);
            array_push($picsarr,$row['litpic']);
            array_push($idsarr,$row['id']);
            array_push($orderarr,$row['displayorder']);

        }


        $k=0;

        $num = count($keysarrs);
        $out = array();

        for($i=0;$i < $num;$i++)
        {

            if(Common::checkStr($content,trim($keysarrs[$i])))//如果找到
            {

                $litpic=empty($picsarr[$i]) ? Common::getDefaultImage() : $picsarr[$i];
                $spotid=$idsarr[$i];
                $spotname=$keysarrs[$i];

                $autoid = $this->insertDaySpot($lineid,$spotname,$litpic,$day,$spotid);
                if($autoid)
                $out[]=array('title'=>$spotname,'spotid'=>$spotid,'autoid'=>$autoid);

            }
            $k++;
        }

        return $out;
    }

    //插入到景点库
    private function insertDaySpot($lineid,$spotname,$litpic,$day,$spotid)
    {

        $sql="select count(*) as num from sline_act_dayspot where lineid='$lineid' and title='$spotname' and day=$day";

        $row = $this->query($sql,1);
        $flag = 0;
        if($row[0]['num']==0)
        {
            $sql="insert into sline_act_dayspot(lineid,title,spotid,litpic,day) values('$lineid','$spotname','$spotid','$litpic','$day')";
            $ar = $this->query($sql,Database::INSERT);
            if($ar[0]>0)$flag = $ar[0];
        }
        return $flag;
    }

    //删除提取景点
    public function delDaySpot($autoid)
    {
        $sql = "delete from sline_act_dayspot where id= '$autoid'";
        $flag = $this->query($sql,3);
        return $flag;
    }

    //获取行程景点
    public static function getDaySpotHtml($day,$lineid)
    {
        $sql = "select * from sline_act_dayspot where lineid='$lineid' and day='$day'";
        $arr = DB::query(1,$sql)->execute();
        $out = '';
        foreach($arr as $row)
        {
            $out.='<span><s onclick="delDaySpot(this,\''.$row['id'].'\')"></s>'.$row['title'].'</span>';
        }
        return $out;
    }

    /*
     * 克隆线路
     * */
    public function cloneLine($id, $num)
    {

        $arr=$this->where("id=$id")->find()->as_array();
        //$earr = getLineinfoExtend($id);
        unset($arr['id']);//去除id项.
        unset($arr['starttime']);
        unset($arr['endtime']);
        unset($arr['linephone']);
        unset($arr['istejia']);
        unset($arr['ssmalprovince']);
        unset($arr['ssmalcity']);
        unset($arr['ssmalarea']);
        for($i = 1; $i <= $num; $i++)
        {
            $newaid=Common::getLastAid('sline_act',0);//新线路aid
            $arr['aid']=$newaid;

            $arr['addtime']=$arr['modtime']=time();
         //   $arr['linepic']=$this->clonePicture($arr['linepic'],$arr['webid']);
            $pics=self::clonePiclist($arr['litpic'],$arr['piclist']);

            $arr['webid'] = 0;
            $arr['litpic']=$pics['litpic'];
            $arr['piclist']=$pics['piclist'];
            $arr['lineicon'] = '0';

            $sql="INSERT INTO sline_act (";
            $sql2="VALUES ( ";
            $sql_key = '';
            $sql_value = '';
            foreach ($arr as $key=>$value)
            {
                if(!empty($value)||$key=='webid')
                {
                    $sql_key.="`".$key."`,";
                    $sql_value.="'".addslashes($value)."',";
                }
            }
            $sql_key=substr($sql_key,0,-1).")";
            $sql_value=substr($sql_value,0,-1).")";
            $sql=$sql.$sql_key.$sql2.$sql_value.";";


            $ar = $this->query($sql,2);
            $new_line_id = $ar[0];//新插入id

            $this->cloneJieShao($id,$new_line_id);
        }

        return $new_line_id;
    }
    /*
     * 克隆图片
     * */
    private function clonePicture($path,$webid)
    {

        if(empty($path))return '';

        $sourcepath=BASEPATH.$path;//原路径
        $file=explode('/',$path);
        $oldname=$file[count($file)-1];
        $te=explode('.',$oldname);

        $ext=$te[count($te)-1];

        $newname=date('Ymdhis').".".$ext;
        $newdir=date("Ymd");
        $this->cloneCreateDir(BASEPATH.'/uploads/main/litimg/'.$newdir);
        $destpath=BASEPATH.'/uploads/main/litimg/'.$newdir."/".$newname;//目标路径

        if(copy($sourcepath,$destpath)) //拷贝
        {
            return "/uploads/main/litimg/".$newdir."/".$newname;
        }
        else
        {
            return $path;
        }



    }
    //路径检查，如果不存在则创建
    private function cloneCreateDir($url)
    {

        if(!file_exists($url))
        {
            mkdir($url);
        }

    }

    /*
     * 克隆新版行程内容
     * */
    private function cloneJieShao($oldlineid,$newlineid)
    {
        $sql = "select * from sline_act_jieshao where lineid='$oldlineid'";
        $arr = $this->query($sql,1);
        $intArr = array('breakfirsthas','supperhas','lunchhas');
        foreach($arr as $row)
        {
            unset($row['id']);
            $row['lineid'] = $newlineid;
            $sql="INSERT INTO sline_act_jieshao (";
            $sql2="VALUES ( ";
            $sql_key = '';
            $sql_value = '';
            foreach ($row as $key=>$value)
            {
                if(in_array($key,$intArr))
                {
                    $value = empty($value) ? 0 : $value;
                }
                $sql_key.="`".$key."`,";
                $sql_value.="'".addslashes($value)."',";
            }
            $sql_key=substr($sql_key,0,-1).")";
            $sql_value=substr($sql_value,0,-1).")";
            $sql=$sql.$sql_key.$sql2.$sql_value.";";
            $this->query($sql,2);
        }

    }

    private function clonePiclist($litpic,$piclist)
    {
        $imgDirs=array('litimg','allimg','lit240','lit160');
        $firstPic='';
        $picArr=explode(',',$piclist);
        $newPiclist=array();
        foreach($picArr as $k=>$v)
        {
            $picInfo=explode('||',$v);
            $filename=date('YmdHis'.mt_rand(10,99));
            $suffix=substr(strrchr($picInfo[0], '.'), 1);
            $newFilename=$filename.'.'.$suffix;
            $dirName=dirname($picInfo[0]);
            $urlFile=$dirName.'/'.$newFilename;
            if($litpic==$picInfo[0])
            {
                $firstPic=$urlFile;
            }
            $picDes=empty($picInfo[1])?'':$picInfo[1];
            $newPiclist[]=$urlFile.'||'.$picDes;
            foreach($imgDirs as $dir)
            {
                $oldFile=BASEPATH.str_replace('litimg',$dir,$picInfo[0]);
                $newFile=BASEPATH.str_replace('litimg',$dir,$dirName).'/'.$newFilename;
                copy($oldFile,$newFile);
            }
        }
        return array('litpic'=>$firstPic,'piclist'=>implode(',',$newPiclist));

    }
    /*

   * 库存操作

   * */

    public static function minus_storage($dingdate,$typeid,$suitid,$productid,$dingnum,$departdate='')

    {



        $day = strtotime($dingdate);

        $dingnum = $dingnum ? $dingnum : 1;

        switch($typeid)

        {

            case '1':



                $sql = "UPDATE `sline_act_suit` SET number=number-$dingnum WHERE  lineid='$productid' AND id='$suitid' AND number!=0 AND number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '2':



                $sdate = strtotime($dingdate);

                $edate = strtotime($departdate);

                $sql = "UPDATE `sline_hotel_room_price` ";

                $sql.= "SET number=number-$dingnum ";

                $sql.= "WHERE suitid='$suitid' AND day>=$sdate AND day<$edate AND number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '3':

                $sql = "UPDATE `sline_car_suit_price` SET number=number-$dingnum WHERE day='$day' AND suitid='$suitid' AND number!=0 and number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '5':

                $sql = "UPDATE `sline_spot_ticket` SET number=number-1 WHERE spotid='$productid' AND id='$suitid' AND number!=0";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '8':

                $sql = "UPDATE `sline_visa` SET number=number-$dingnum WHERE id='$productid' AND number!=0 AND number!=-1";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

            case '13':

                $sql = "UPDATE `sline_tuan` SET totalnum=totalnum-1 WHERE id='$productid' AND totalnum!=0";

                DB::query(Database::UPDATE,$sql)->execute();

                break;

        }



    }



    /*
    * 更新最低报价
    * */
    public static function updateMinPrice($lineid)
    {
	    $newtime = time();
        $sql = "SELECT MIN(adultprice) as price FROM sline_act_suit_price WHERE lineid='$lineid' and adultprice>0 and day>=$newtime";
        $ar = DB::query(1,$sql)->execute()->as_array();
        $price = $ar[0]['price'] ? $ar[0]['price'] : 0;
        $model = ORM::factory('act',$lineid);
        $model->price = $price;
        $model->update();


    }

}