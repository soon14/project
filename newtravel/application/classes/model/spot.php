<?php defined('SYSPATH') or die('No direct access allowed.');



class Model_Spot extends ORM {



    protected  $_table_name = 'spot';



    public function deleteClear()

    {

        $tickets=ORM::factory('spot_ticket')->where("spotid={$this->id}")->find_all()->as_array();

        foreach($tickets as $ticket)

        {

            $ticket->deleteClear();

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

    * 更新最低报价

    * */

    public static function updateMinPrice($spotid)

    {

        $sql = "SELECT MIN(cast(ourprice as unsigned)) as price FROM sline_spot_ticket WHERE spotid='$spotid'";

        $ar = DB::query(1,$sql)->execute()->as_array();

        $price = $ar[0]['price'] ? $ar[0]['price'] : 0;

        $model = ORM::factory('spot',$spotid);

        $model->price = $price;

        $model->update();





    }


    /**

     * @param $suitid

     * @return array

     * @desc 获取套餐详情

     */

    public static function suit_info($suitId)

    {

        $suit = ORM::factory('spot_ticket',$suitId)->as_array();



        $suit['sellprice']=Currency_Tool::price($suit['sellprice']);

        $suit['ourprice']=Currency_Tool::price($suit['ourprice']);

        $suit['dingjin'] = Currency_Tool::price($suit['dingjin']);

        //==================fengjishu  反序列话 lastoffer 07.14  用于结算景区结算价 start
        $suit['lastoffer'] =unserialize($suit['lastoffer']);
        //==================fengjishu  反序列话 lastoffer 07.14  用于结算景区结算价  end



        return $suit;

    }


    /**

     * 产品编号 共6位,不足6位前面被0

     * @param $id

     * @param $prefixId

     * @return string

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


    /**

     * @param $hotelid

     * @return mixed

     * 获取景点最低价

     */

    public static function get_minprice($spotid)

    {


        //fengjishu 加 0 将 varchar 装换 数字 08.19
        $sql = "SELECT MIN(ourprice+0) AS price,MIN(sellprice+0) AS sellprice FROM `sline_spot_ticket` ";

        $sql.= "WHERE spotid='$spotid' AND ourprice!=0";

        $row = DB::query(1,$sql)->execute()->as_array();
        //==fengjishu  08.19  隐藏 下文
        // $row[0]['price'] = Currency_Tool::price( $row[0]['price']);

        // $row[0]['sellprice'] = Currency_Tool::price( $row[0]['sellprice']);



        return $row[0];

    }


    /*

   * 生成订单编号

   * */

    public static function get_ordersn($kind)

    {

        /* 选择一个随机的方案 */

        return $kind.substr(time(),-5).substr(microtime(),2,5).sprintf('%02d',rand(0,99));

    }


    /**

     * 根据会员id获取用户信息

     * @param $mid

     * @return array

     */

    public static function get_member_byid($mid)

    {

        if ($mid)

        {

            $memberinfo = ORM::factory('member', $mid)->as_array();

            $memberinfo['last_logintime'] = Common::mydate('Y-m-d', $memberinfo['logintime']);

            $memberinfo['litpic'] = !empty($memberinfo['litpic']) ? $memberinfo['litpic'] : Common::member_nopic();

            //第三方登陆

            $third = DB::select()->from('member_third')->where("mid={$mid}")->execute()->as_array();

            $memberinfo['third'] = Model_Member_Third::thirdData($third);

            return $memberinfo;

        }



    }



}