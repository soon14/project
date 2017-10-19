<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>我的订单-{$webname}</title>
    <script type="text/javascript" src="/newtravel/public/js/hdate/hdate.js"></script>
    <link type="text/css" href="/newtravel/public/js/hdate/hdate.css" rel="stylesheet" />



    {Common::css("style.css,base.css")}

    {Common::js("jquery.min.js")}


    <style>
       .normal-btn{
           width:80px;height: 30px;line-height:30px;float: right;margin-right: 50px;background:#4CC34F;color: white;text-align: center;
       }
    </style>

</head>



<body>



<div class="page-box">

    {request 'pc/pub/header'}

    <!-- 顶部 -->



    {template 'pc/pub/sidemenu'}

    <!-- 侧边导航 -->



    <div class="main">

        <div class="content-box">



            {include "pc/pub/qualifyalert"}



            <div class="frame-box">

                <div class="frame-con">



                    <div class="verify-box">

                        <form id="st_form" method="get" action="{$cmsurl}pc/order/all">
                              <input type="hidden" id="supid" value="{$supid}">
                            <div class="verify-list-tit"><strong class="bt">我的订单</strong></div>
                            <div class="verify-search-box">
                                <div style="width: 259px; float: left">
                                    <span style="float: left;height: 30px;line-height: 30px;">订单预定日期：</span>
                                    <input type="text" value="{if $get['starttime']}{$get['starttime']}{else}开始时间{/if}" name="starttime" id="starttime" style="width:77px;height:30px;float:left;cursor:pointer;padding-left:3px;background: #2ECC71;color: white;text-align: center"  onclick="calendar.show({ id: this })" />
                                    <span style="float: left;height: 30px;line-height: 30px;">~</span>
                                    <input type="text" value="{if $get['endtime']}{$get['endtime']}{else}结束时间{/if}" name="endtime" id="endtime" style="width:77px;height:30px;float:left;cursor:pointer;padding-left:3px;margin:0px 2px;background: #2ECC71;color: white;text-align: center"  onclick="calendar.show({ id: this })" />
                                </div>

                                <div class="" style="width: 183px;float: left;height: 30px;margin-right: 5px">

                                    <select name="status" onchange="togStatus(this)" class="bar-select" style="width: 90px;height: 32px; float: left">

                                        <option value="" {if $get['status']==''||$get['status']==null}selected="selected"{/if}>订单状态</option>

                                        {loop $status $k $row}

                                        <option value="{$k}" {if $get['status']==$k&&$get['status']!==null&&$get['status']!==''}selected=selected{/if}>{$row}</option>

                                        {/loop}


                                    </select>
                                    <select name="paysource" onchange="togPaysource()" class="bar-select" style="width: 90px;height: 32px;margin-left:3px;float: left">

                                        <option value="" {if $get['paysource']==''||$get['paysource']==null}selected=selected{/if}>支付方式</option>

                                        {loop $paysources $v}

                                        <option value="{$v}" {if $get['paysource']==$v&&$get['paysource']!==null&&$get['paysource']!==''}selected=selected{/if}>{$v}</option>

                                        {/loop}

                                    </select>

                                </div>

                                <div class="verify-search-con">

                                    <input type="text" name="searchKey" class="search-txt" style="width: 230px" placeholder="请输入短信码或订单号进行搜索" value="{$get['searchKey']}"/>

                                    <input type="button" class="search-btn" value="搜索"/>

                                </div>

                                <a href="javascript:;"  class="normal-btn btn_excel" title="导出Excel报表">导出Excel</a>

                            </div>

                            <div class="verify-con">

                                <table class="verify-table" width="100%" border="0">

                                    <tr>

                                        <th width="30%" height="40" align="center" scope="col">订单信息</th>
                                        <th width="7%" height="40" align="center" scope="col">支付方式</th>
                                        <th width="10%" height="40" align="center" scope="col">预定日期</th>

                                        <th width="10%" height="40" align="center" scope="col">使用日期</th>

                                        <th width="10%" height="40" align="center" scope="col">数量</th>

                                        <th width="10%" height="40" align="center" scope="col">总额</th>

                                        <th width="10%" height="40" align="center" scope="col">状态</th>

                                        <th width="13%" height="40" align="center" scope="col">操作</th>

                                    </tr>
                                    <?php $time  =date("Y-m-d",time());?>
                                    {loop $data['list'] $v}

                                    <tr>

                                        <td>

                                            <div class="cp">

                                                <a href="{$v['url']}" target="_blank">

                                                    <div class="pic">

                                                        <img src="{$v['litpic']}" width="112" height="80" alt="{$v['productname']}"/>

                                                    </div>

                                                    <div class="con">

                                                        <p class="bt">{$v['productname']}</p>

                                                        <p class="hm">订单号：{$v['ordersn']}</p>

                                                    </div>

                                                </a>

                                            </div>

                                        </td>
                                        <td><span class="wxf">{if $v['paytype']==4}景区支付{else}在线支付{/if}</span></td>
                                        <td><span class="price">{date("Y-m-d",$v['addtime'])}</span></td>
                                        <td><span class="price">{$v['usedate']}</span></td>

                                        <td><span class="num">{$v['num']}</span></td>

                                        <td><span class="total">&yen;{$v['total']}<br/>{$v['paysource']}</span></td>

                                        <td>

                                            <span class="{if $v['status']==2 }period{else}wxf{/if}" {if $v['order_status']=='已过期'}style="color:#999;"{/if}>

                                                {$v['order_status']}

                                            </span>

                                        </td>

                                        <td>

                                            <a class="show" href="{$cmsurl}pc/order/show?id={$v['id']}">查看订单</a>

                                        </td>

                                    </tr>

                                    {/loop}

                                </table>

                                {$data['pageinfo']}



                                {if empty($data)}

                                <div class="nofound-order">对不起！没有符合条件，请尝试其他搜索条件。</div>

                                <!-- 搜索无结果 -->

                                {/if}

                        </form>

                    </div>

                </div>

                <!-- 验单记录 -->



            </div>

        </div>

        {template 'pc/pub/footer'}

    </div>

</div>

<!-- 主体内容 -->



</div>



<script>

    $(function(){
         //==================== fengjishu end
        //导出excel

        $(".btn_excel").click(function(){
            var  typeid   = 5; // 4  为 景区门票
            var  timetype  = 6;// 6  为自定义时间
            var  s_time1    = $("#starttime").val();//开始时间
            if(s_time1=='开始时间'){
                var s_time ='2000-01-01';
            }else{
                var s_time =s_time1;
            }
            var  e_time1    = $("#endtime").val();//结束时间
            if(e_time1=='结束时间'){
                var e_time ='2050-01-01';

            }else{
                var e_time = e_time1;
            }
            var  status    = $("option[selected=selected]").val();

            var  sup_id    = $("#supid").val();

            var  sups      = 9;

            var url = '/plugins/supplier/pc/order/genexcel/typeid/'+typeid+'/timetype/'+timetype+'?starttime='+s_time+'&endtime='+e_time+'&status='+status+'&supid='+sup_id+"&sups"+sups;

            window.open(url);
//            var channelname ="{$cmsurl}";
//            var url="/plugins/supplier/pc/order/excel/typeid/5";

        })
         //=====================fengjishu  end
        $("#nav_all_order").addClass('on');

        $('body').delegate('.add-list','click',function() {

            $(this).parent().after('<li><input name="num[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>');

            $(this).remove();

        });

        $(".search-btn").click(function(){

            $("#st_form").submit();

        });

    });
    function togStatus(ele)

    {  $("#st_form").submit();


    }
    function togPaysource(){
        $("#st_form").submit();
    }
</script>

</body>

</html>

