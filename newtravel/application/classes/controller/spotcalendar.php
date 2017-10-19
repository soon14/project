<?php defined('SYSPATH') or die('No direct script access.');

/*
    * 日历显示
    * */

class Controller_Spotcalendar extends Stourweb_Controller
{



    public function action_index()
    {
        $typeid = $this->params['typeid'];
        $suitid = $this->params['suitid'];
        $productid = $this->params['productid'];
        $year = date("Y"); //当前月
        $month = date("m");//当前年
        $out = '';
        for ($i = 1; $i <= 12; $i++)
        {
            if ($month == 13)
            {
                $year = $year + 1;
                $month = 1;
            }
            $priceArr = self::getSuitPriceArr($year, $month, $suitid, $typeid);
            $out .= self::myCalender($year, $month, $priceArr, $productid, $suitid, $typeid);
            $month++;
        }

        $this->assign('calendar', $out);
        $this->assign('typeid', $typeid);
        $this->display('stourtravel/spotcalendar');
    }
    public static function get_suit_table($typeid)
    {
       return 'spot_ticket_price';
    }

    /*
     * 动态修改报价
     * */
    public function action_ajax_modprice()
    {

        $typeid = Arr::get($_POST, 'typeid');

        $basicprice = Arr::get($_POST, 'basicprice') ? Arr::get($_POST, 'basicprice') : 0;
        $profit = Arr::get($_POST, 'profit') ? Arr::get($_POST, 'profit') : 0;
        $productid = Arr::get($_POST, 'productid') ? Arr::get($_POST, 'productid') : 0;

        $child_basicprice = Arr::get($_POST, 'child_basicprice') ? Arr::get($_POST, 'child_basicprice') : 0;
        $child_profit = Arr::get($_POST, 'child_profit') ? Arr::get($_POST, 'child_profit') : 0;

        $old_basicprice = Arr::get($_POST, 'old_basicprice') ? Arr::get($_POST, 'old_basicprice') : 0;
        $old_profit = Arr::get($_POST, 'old_profit') ? Arr::get($_POST, 'old_profit') : 0;

        $adult_marketprice=$_POST['adult_marketprice'];
        $adult_distributionprice=$_POST['adult_distributionprice'];

        $number = $_POST['number'] ? $_POST['number'] : 0;
        $number = (string)$number == '不限' ? -1 : $number;


        $day = Arr::get($_POST, 'day');
        $suitid = Arr::get($_POST, 'suitid');
        $price = (int)$basicprice + (int)$profit;
        $child_price = (int)$child_basicprice + (int)$child_profit;
        $old_price = (int)$old_basicprice + (int)$old_profit;

        $table = self::get_suit_table($typeid);

        $roombalance = empty($_POST['roombalance']) ? 0 : $_POST['roombalance'];


        $flag = false;


            $basicp_f = 'adultbasicprice';
            $profit_f = 'adultprofit';
            $price_f = 'adultprice';

        //小孩和成人(只有线路有)
        $add_update = '';

         $add_update .= ", adultmarketprice='$adult_marketprice'";
         $add_update .= ", adultdistributionprice='$adult_distributionprice'";


        if ($price == 0)
        {
            $sql = "delete from sline_{$table} ";

            $sql .= " where ticketid='$suitid' and day='$day'";
            $result = DB::query(Database::DELETE, $sql)->execute();
            if ($result) $flag = true;


        }
        else
        {
            $sql = "update sline_{$table} set $basicp_f='$basicprice'";
            $sql .= ", $profit_f='$profit'";
            $sql .= ", $price_f='$price'";
            $sql .= ", number='$number'";
            $sql .= $add_update;
            $sql .= " where ticketid='$suitid' and day='$day'";
            $result = DB::query(Database::UPDATE, $sql)->execute();
            if ($result) $flag = true;

        }
        $out = array();
        if ($flag)
        {
            $out['status'] = true;
            $out['price'] = $price;
            $out['basicprice'] = $basicprice;
            $out['profit'] = $profit;

            $out['child_price'] = $child_price;
            $out['child_basicprice'] = $child_basicprice;
            $out['child_profit'] = $child_profit;

            $out['old_price'] = $old_price;
            $out['old_basicprice'] = $old_basicprice;
            $out['old_profit'] = $old_profit;
            $out['adult_marketprice']=$adult_marketprice;
            $out['adult_distributionprice']=$adult_distributionprice;
            $out['roombalance'] = $roombalance;

            $out['number'] = $number;
            switch ($typeid)
            {
               /* case 1:
                    Model_Line::updateMinPrice($productid);
                    break;
                case 2:
                    Model_Hotel::updateMinPrice($productid);
                    break;
                case 3:
                    Model_Car::updateMinPrice($productid);
                    break;*/
            }
        }
        else
        {
            $out['status'] = false;
        }

        echo json_encode($out);
        exit;

    }

    //动态添加报价
    public function action_ajax_addprice()
    {
        /* $typeid = Arr::get($_POST,'typeid');
         $basicprice = Arr::get($_POST,'basicprice') ?  Arr::get($_POST,'basicprice') : 0;
         $profit = Arr::get($_POST,'profit') ? Arr::get($_POST,'profit') : 0;
         $day = Arr::get($_POST,'day');
         $suitid = Arr::get($_POST,'suitid');
         $productid = Arr::get($_POST,'productid');
         $price = (int)$basicprice+(int)$profit;*/
        $typeid = Arr::get($_POST, 'typeid');
        $productid = Arr::get($_POST, 'productid');
        $suitid = Arr::get($_POST, 'suitid');

        $basicprice = Arr::get($_POST, 'basicprice') ? Arr::get($_POST, 'basicprice') : 0;
        $profit = Arr::get($_POST, 'profit') ? Arr::get($_POST, 'profit') : 0;

        $child_basicprice = Arr::get($_POST, 'child_basicprice') ? Arr::get($_POST, 'child_basicprice') : 0;
        $child_profit = Arr::get($_POST, 'child_profit') ? Arr::get($_POST, 'child_profit') : 0;

        $old_basicprice = Arr::get($_POST, 'old_basicprice') ? Arr::get($_POST, 'old_basicprice') : 0;
        $old_profit = Arr::get($_POST, 'old_profit') ? Arr::get($_POST, 'old_profit') : 0;

        $adult_marketprice=$_POST['adult_marketprice'];
        $adult_distributionprice=$_POST['adult_distributionprice'];

        $number = $_POST['number'] == '' ? -1 : $_POST['number'];
        $number = (string)$number == '不限' ? -1 : $number;

        $day = Arr::get($_POST, 'day');

        $price = (int)$basicprice + (int)$profit;
        $child_price = (int)$child_basicprice + (int)$child_profit;
        $old_price = (int)$old_basicprice + (int)$old_profit;
        $table = self::get_suit_table($typeid);


         $arr = array(
                'spotid' => $productid,
                'ticketid' => $suitid,
                'adultbasicprice' => $basicprice,
                'adultprofit' => $profit,
                'adultprice' => $price,
                'adultmarketprice'=>$adult_marketprice,
                'adultdistributionprice'=>$adult_distributionprice,
                'day' => $day,
                'number'=>$number
          );




        $flag = false;
        if ($price != 0)
        {
            $sql_key = $sql_value = '';
            $sql = "INSERT INTO sline_{$table} (";
            $sql2 = "VALUES ( ";
            foreach ($arr as $key => $value)
            {
                $sql_key .= "`" . $key . "`,";
                $sql_value .= "'" . $value . "',";
            }
            $sql_key = substr($sql_key, 0, -1) . ")";
            $sql_value = substr($sql_value, 0, -1) . ")";
            $sql = $sql . $sql_key . $sql2 . $sql_value . ";";

            //$sql = "insert into sline_{$table} ($field) values(";
            //$sql.= "'{$productid}','{$suitid}','{$basicprice}','{$profit}','{$price}','{$day}')";
            $result = DB::query(Database::INSERT, $sql)->execute();
            if ($result) $flag = true;

        }

        $out = array();
        if ($flag)
        {
            $out['status'] = true;
            $out['price'] = $price;
            $out['basicprice'] = $basicprice;
            $out['profit'] = $profit;

            $out['child_price'] = $child_price;
            $out['child_basicprice'] = $child_basicprice;
            $out['child_profit'] = $child_profit;

            $out['old_price'] = $old_price;
            $out['old_basicprice'] = $old_basicprice;
            $out['old_profit'] = $old_profit;

            $out['adult_marketprice']=$adult_marketprice;
            $out['adult_distributionprice']=$adult_distributionprice;


            $out['number'] = $number == -1 ? '不限' : $number;


        }
        else
        {
            $out['status'] = false;
        }
        echo json_encode($out);
        exit;
    }


    /**
     * 生成格式化的数据
     * 用于日历中进行呈现
     * @param $arr
     */
    public function getSuitPriceArr($year, $month, $suitid, $typeid)
    {


        $start = strtotime("$year-$month-1");
        $end = strtotime("$year-$month-31");




        $arr = ORM::factory("spot_ticket_price")->where('ticketid', '=', $suitid)
            ->and_where('day', '>=', $start)
            ->and_where('day', '<=', $end)
            ->get_all();

        $price = array();
        foreach ($arr as $row)
        {
            if ($row)
            {

                $day = $row['day'];
                $price[$day]['date'] = Common::myDate('Y-m-d', $row['day']);
                $price[$day]['basicprice'] = isset($row['adultbasicprice']) ? $row['adultbasicprice'] : $row['basicprice'];
                $price[$day]['profit'] = isset($row['adultprofit']) ? $row['adultprofit'] : $row['profit'];
                $price[$day]['price'] = isset($row['adultprice']) ? $row['adultprice'] : $row['price'];

                $price[$day]['child_basicprice'] = isset($row['childbasicprice']) ? $row['childbasicprice'] : 0;
                $price[$day]['child_profit'] = isset($row['childprofit']) ? $row['childprofit'] : 0;
                $price[$day]['child_price'] = isset($row['childprice']) ? $row['childprice'] : 0;

                $price[$day]['old_basicprice'] = isset($row['oldbasicprice']) ? $row['oldbasicprice'] : 0;
                $price[$day]['old_profit'] = isset($row['oldprofit']) ? $row['oldprofit'] : 0;
                $price[$day]['old_price'] = isset($row['oldprice']) ? $row['oldprice'] : 0;

                $price[$day]['adultmarketprice'] = $row['adultmarketprice'];
                $price[$day]['adultdistributionprice'] = $row['adultdistributionprice'];

                $price[$day]['suitid'] = $suitid;
                $price[$day]['number'] = $row['number'];//库存
                $price[$day]['description'] = $row['description'];//描述
                if ($typeid == 1)
                {
                    $price[$day]['roombalance'] = $row['roombalance'];
                }


            }


        }


        return $price;
    }

    /*
     *
     * 读取线路报价类型(成人,老人,小孩)
     * */
    public function getPriceGroup($suitid)
    {
        $info = ORM::factory('spot_ticket')->where("id='$suitid'")->find();
        return $info->propgroup;

    }


    /**
     *
     * 我的日历(DateTime版本)
     * date_default_timezone_set date mktime
     * @param int $year
     * @param int $month
     * @priceArr array 成人,儿童,老人报价
     * @param string $timezone
     */


    public function myCalender($year = '', $month = '', $priceArr = NULL, $productid = null, $suitid = '', $typeid)
    {

        date_default_timezone_set('Asia/Shanghai');
        $year = abs(intval($year));
        $month = abs(intval($month));
        $tmonth = $month < 10 ? "0" . $month : $month;
        $defaultYM = $year . '-' . $tmonth;
        $nowDate = new DateTime();

        if ($year <= 0)
        {
            $year = $nowDate->format('Y');
        }

        if ($month <= 0 or $month > 12)
        {
            $month = $nowDate->format('m');
        }

        //上一年
        $pretYear = $year - 1;
        //上一月
        $mpYear = $year;
        $preMonth = $month - 1;
        if ($preMonth <= 0)
        {
            $preMonth = 1;
            $mpYear = $pretYear;
        }
        $preMonth = $preMonth < 10 ? '0' . $preMonth : $preMonth;

        //下一年
        $nextYear = $year + 1;
        //下一月
        $mnYear = $year;
        $nextMonth = $month + 1;
        if ($nextMonth > 12)
        {
            $nextMonth = 1;
            $mnYear = $nextYear;
        }
        $nextMonth = $nextMonth < 10 ? '0' . $nextMonth : $nextMonth;


        //日历头
        $html = '<div class="tab">
<table width="460" border="1" style="border-collapse: collapse;">

  <tr align="center" >
    <td colspan="3" class="top_title" style="height:50px;">' . $year . '年' . $month . '月</td>

  </tr>
  <tr>
  	<td colspan="5">
		<table width="100%" border="1" >
			<tr align="center">
				<td style="background-color:#DAF0DD;height:25px;">星期一</td>
				<td style="background-color:#DAF0DD;height:25px;">星期二</td>
				<td style="background-color:#DAF0DD;height:25px;">星期三</td>
				<td style="background-color:#DAF0DD;height:25px;">星期四</td>
				<td style="background-color:#DAF0DD;height:25px;">星期五</td>
				<td style="background-color:#F60;color:#fff;font-weight: bold;">星期六</td>
				<td style="background-color:#F60;color:#fff;font-weight: bold;">星期天</td>
			</tr>
';

        $currentDay = $nowDate->format('Y-m-j');

        //当月最后一天
        $creatDate = new DateTime("$year-$nextMonth-0");
        $lastday = $creatDate->format('j');
        $creatDate = NULL;

        //循环输出天数
        $day = 1;
        $line = '';
        while ($day <= $lastday)
        {
            $cday = $year . '-' . $month . '-' . $day;

            //当前星期几
            $creatDate = new DateTime("$year-$month-$day");
            $nowWeek = $creatDate->format('N');
            $creatDate = NULL;

            if ($day == 1)
            {
                $line = '<tr align="center">';
                $line .= str_repeat('<td>&nbsp;</td>', $nowWeek - 1);
            }
            if ($cday == $currentDay)
            {
                $style = 'style="font-size:16px; font-family:微软雅黑,Arial,Helvetica,sans-serif;color:#FF6600;line-height:22px;"';
            }
            else
            {
                $style = 'style=" font-size:16px; font-family:微软雅黑,Arial,Helvetica,sans-serif;line-height:22px;"';
            }
            //判断当前的日期是否小于今天
            $defaultmktime = mktime(1, 1, 1, $month, $day, $year);

            $currentmktime = mktime(1, 1, 1, date("m"), date("j"), date("Y"));
            //echo '<hr>';
            $tday = ($day < 10) ? '0' . $day : $day;
            $cdaydate = $defaultYM . '-' . $tday;
            $cdayme = strtotime($cdaydate);
            //单价
            $dayPrice = $priceArr[$cdayme]['price'];
            //成本
            $daybasicprice = $priceArr[$cdayme]['basicprice'];
            //利润
            $dayprofitprice = $priceArr[$cdayme]['profit'];

            //老人
            $day_old_price = $priceArr[$cdayme]['old_price'];
            $day_old_basicprice = $priceArr[$cdayme]['old_basicprice'];
            $day_old_profit = $priceArr[$cdayme]['old_profit'];
            //儿童
            $day_child_price = $priceArr[$cdayme]['child_price'];
            $day_child_basicprice = $priceArr[$cdayme]['child_basicprice'];
            $day_child_profit = $priceArr[$cdayme]['child_profit'];

            $day_adult_adultmarketprice=$priceArr[$cdayme]['adultmarketprice'];
            $day_adult_adultdistributionprice=$priceArr[$cdayme]['adultdistributionprice'];




            //库存
            $number = $priceArr[$cdayme]['number'] != -1 ? $priceArr[$cdayme]['number'] : '不限';

            //人群
            $group = $typeid == 1 ? self::getPriceGroup($suitid) : 2;


            //suitid
            $daysuitid = $suitid;

            //定义单元格样式，高，宽
            $tdStyle = "height='80'";
            //判断当前的日期是否小于今天
            $tdcontent = '<span class="num">' . $day . '</span>';

            if ($defaultmktime >= $currentmktime)
            {
                if ($dayPrice || $day_child_price || $day_old_price)
                {
                    if ($dayPrice > 0)
                    {
                        $dayPriceStrs = "成人:{$dayPrice}<br>";
                    }
                    else if ($day_child_price > 0)
                    {
                        $dayPriceStrs = "儿童:{$day_child_price}<br>";
                    }
                    else
                    {
                        $dayPriceStrs = "老人:{$day_old_price}<br>";
                    }
                    if($typeid != 1){
                        $dayPriceStrs = "报价:{$dayPrice}<br>";
                    }
                    $ydCls = '';
                    $balanceStr = '';
                    if ($typeid == 1)
                    {
                        $roombalance = $priceArr[$cdayme]['roombalance'];
                        $roombalance = empty($roombalance) ? 0 : $roombalance;
                        if($roombalance){
                            $balanceStr = '<b class="roombalance_b">单房差:' . $roombalance . '</b>';
                        }
                        $ydCls = "line_yes_yd";
                    }

                    $tdcontent .= '<b class="yes_yd ' . $ydCls . '">' . $dayPriceStrs . '</b>' . $balanceStr;
                    $onclick = 'onclick="modPrice(this)"';
                    $numberinfo = "<span class='kucun'>库存:$number</span>";

                }
                else
                {
                    $dayPriceStrs = '';
                    $tdcontent .= '<b class="no_yd">' . $dayPriceStrs . '</b>' . '<b class="roombalance_b"></b>';
                    $onclick = 'onclick="addPrice(this)"';
                    $numberinfo = "<span class='kucun'></span>";

                }

                $line .= "<td $tdStyle $onclick style='cursor:pointer;' data-price='" . $dayPrice . "' data-roombalance='" . $roombalance . "' data-basicprice='" . $daybasicprice . "' data-profit='" . $dayprofitprice . "' data-suitid='" . $daysuitid . "' data-day='" . $cdayme . "' data-date='" . $cdaydate . "' data-productid='" . $productid . "' data-typeid='" . $typeid . "' data-child-basicprice='" . $day_child_basicprice . "' data-child-profit='" . $day_child_profit . "' data-child-price='" . $day_child_price . "' data-old-basicprice='" . $day_old_basicprice . "' data-old-profit='" . $day_old_profit . "' data-old-price='" . $day_old_price . "' data-group='" . $group . "' data-number='" . $number . "'
                 data-adult-marketprice='".$day_adult_adultmarketprice."' data-adult-distributionprice='".$day_adult_adultdistributionprice."'>" . $tdcontent . $numberinfo . "</td>";
            }
            else
            {
                $dayPriceStrs = '&nbsp;&nbsp;';
                $tdcontent .= '<b class="no_yd">' . $dayPriceStrs . '</b>';
                $line .= "<td $tdStyle >" . $tdcontent . "</td>";
            }


            //$line .= "<td $style>$day <div>不可订</div></td>";

            //一周结束
            if ($nowWeek == 7)
            {
                $line .= '</tr>';
                $html .= $line;
                $line = '<tr align="center">';
            }

            //全月结束
            if ($day == $lastday)
            {
                if ($nowWeek != 7)
                {
                    $line .= str_repeat('<td>&nbsp;</td>', 7 - $nowWeek);
                }
                $line .= '</tr>';
                $html .= $line;

                break;
            }

            $day++;
        }

        $html .= '
		</table>
	</td>
  </tr>
</table>
</div>
';
        return $html;
    }


}