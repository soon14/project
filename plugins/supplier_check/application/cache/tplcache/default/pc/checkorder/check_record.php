<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商管理系统-<?php echo $webname;?></title>
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
    <script type="text/javascript" src="/newtravel/public/js/hdate/hdate.js"></script>
    <link type="text/css" href="/newtravel/public/js/hdate/hdate.css" rel="stylesheet" />
    <style>
        .normal-btn{
            width:80px;height: 30px;line-height:30px;float: right;margin-right: 50px;background:#4CC34F;color: white;text-align: center;
        }
    </style>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <!-- 顶部 -->
    <?php echo  Stourweb_View::template('pc/pub/sidemenu');  ?>
    <!-- 侧边导航 -->
    <div class="main">
        <div class="content-box">
            <div class="frame-box">
                <div class="frame-con">
                    <div class="verify-box">
                        <form id="st_form" method="get" action="<?php echo $cmsurl;?>pc/checkorder/check_record">
                            <input type="hidden" id="supid" value="<?php echo $supid;?>">
                            <div class="verify-list-tit"><strong class="bt">验单记录</strong></div>
                            <div class="verify-search-box">
                                <div style="width: 259px; float: left">
                                    <span style="float: left;height: 30px;line-height: 30px;">订单消费日期：</span>
                                    <input type="text" value="<?php if($get['starttime']) { ?><?php echo $get['starttime'];?><?php } else { ?>开始时间<?php } ?>
" name="starttime" id="starttime" style="width:79px;height:30px;float:left;cursor:pointer;text-align:center;background: #2ECC71;color: white"  onclick="calendar.show({ id: this })" />
                                    <span style="float: left;height: 30px;line-height: 30px;">~</span>
                                    <input type="text" value="<?php if($get['endtime']) { ?><?php echo $get['endtime'];?><?php } else { ?>结束时间<?php } ?>
" name="endtime" id="endtime" style="width:79px;height:30px;float:left;cursor:pointer;text-align:center;margin:0px 2px;background: #2ECC71;color: white"  onclick="calendar.show({ id: this })" />
                                </div>
                                <div class="" style="width: 90px;float: left;height: 30px;margin-right: 5px">
                                    <select name="paysource" onchange="togPaysource()" class="bar-select" style="width: 90px;height: 32px">
                                        <option value="" <?php if($get['paysource']==''||$get['paysource']==null) { ?>selected=selected<?php } ?>
>支付方式</option>
                                        <?php $n=1; if(is_array($paysources)) { foreach($paysources as $v) { ?>
                                        <option value="<?php echo $v;?>" <?php if($get['paysource']==$v&&$get['paysource']!==null&&$get['paysource']!=='') { ?>selected=selected<?php } ?>
><?php echo $v;?></option>
                                        <?php $n++;}unset($n); } ?>
                                    </select>
                                </div>
                                <div class="verify-search-con">
                                    <input type="text" name="searchKey" class="search-txt" placeholder="请输入短信码或订单号进行搜索" value="<?php echo $get['searchKey'];?>"/>
                                    <input type="button" class="search-btn" value="搜索"/>
                                </div>
                                <a href="javascript:;"  class="normal-btn btn_excel" title="导出Excel报表">导出Excel</a>
                            </div>
                            <div class="verify-con">
                                <table class="verify-table" width="100%" border="0">
                                    <tr>
                                        <th width="30%" height="40" align="center" scope="col">订单信息</th>
                                        <th width="7%" height="40" align="center" scope="col">支付方式</th>
                                        <th width="10%" height="40" align="center" scope="col">消费日期</th>
                                        <th width="10%" height="40" align="center" scope="col">价格</th>
                                        <th width="9%" height="40" align="center" scope="col">数量</th>
                                        <th width="9%" height="40" align="center" scope="col">总额</th>
                                        <th width="8%" height="40" align="center" scope="col">结算价/平台佣金</th>
                                        <th width="8%" height="40" align="center" scope="col">状态</th>
                                        <th width="9%" height="40" align="center" scope="col">操作</th>
                                    </tr>
                                    <?php $n=1; if(is_array($data['list'])) { foreach($data['list'] as $v) { ?>
                                    <tr>
                                        <td>
                                            <div class="cp">
                                                <a href="<?php echo $v['url'];?>" target="_blank">
                                                    <div class="pic">
                                                        <img src="<?php echo $v['litpic'];?>" width="112" height="80" alt="<?php echo $v['productname'];?>"/>
                                                    </div>
                                                    <div class="con">
                                                        <p class="bt"><?php echo $v['productname'];?></p>
                                                        <p class="dx">短信码：<?php echo $v['smscode'];?></p>
                                                        <p class="hm">订单号：<?php echo $v['ordersn'];?></p>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td><span class="price"><?php if($v['paytype']==4) { ?>景区支付<?php } else { ?>在线支付<?php } ?>
</span></td>
                                        <td><span class="price"><?php echo date("Y-m-d",$v['consumetime']);?></span></td>
                                        <td><span class="price">&yen;<?php echo $v['unitprice'];?><br/><?php echo $v['paysource'];?></span></td>
                                        <td><span class="num">x<?php echo $v['num'];?></span></td>
                                        <td><span class="total">&yen;<?php echo $v['total'];?></span></td>
                                        <td><span class="total">&yen;(<?php if($v['paytype']==4) { ?><?php echo $v['yongjin'];?>x<?php echo $v['num'];?><?php } else { ?><?php echo $v['costprice'];?>x<?php echo $v['num'];?><?php } ?>
)<br/><?php if($v['paytype']==4) { ?>佣金x数量<?php } else { ?>结算价x数量<?php } ?>
</span></td>
                                        <td>
                                            <span class="<?php if($v['isconsume']==1 ) { ?>period<?php } else { ?>wxf<?php } ?>
"><?php if($v['isconsume']==1 ) { ?>已消费<?php } else { ?>未消费<?php } ?>
</span>
                                        </td>
                                        <td>
                                            <a class="show" href="<?php echo $cmsurl;?>pc/checkorder/show_order?id=<?php echo $v['id'];?>">查看订单</a>
                                        </td>
                                    </tr>
                                    <?php $n++;}unset($n); } ?>
                                </table>
                                <?php echo $data['pageinfo'];?>
                                <?php if(empty($data)) { ?>
                                <div class="nofound-order">对不起！没有符合条件，请尝试其他搜索条件。</div>
                                <!-- 搜索无结果 -->
                                <?php } ?>
                        </form>
                    </div>
                </div>
                <!-- 验单记录 -->
            </div>
        </div>
        <?php echo Request::factory('pc/pub/footer')->execute()->body(); ?>
    </div>
</div>
<!-- 主体内容 -->
</div>
<script>
    $(function(){
        //==================== fengjishu start
        //导出excel
        $(".btn_excel").click(function(){
            var  typeid   = 5; // 4  为 景区门票
            var  timetype  = 6;// 6  为自定义时间
            var  costprice  = 3;// 定义一个验单 参数 用来判断结算价
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
            var  status    = 5;
            var  sup_id    = $("#supid").val();
            var url = '/plugins/supplier/pc/order/genexcel/typeid/'+typeid+'/timetype/'+timetype+'?starttime='+s_time+'&endtime='+e_time+'&status='+status+'&supid='+sup_id+'&costprice='+costprice;
            window.open(url);
//            var channelname ="<?php echo $cmsurl;?>";
//            var url="/plugins/supplier/pc/order/excel/typeid/5";
        })
        //=====================fengjishu  end
        $("#nav_check_record").addClass('on');
        $('body').delegate('.add-list','click',function() {
            $(this).parent().after('<li><input name="num[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>');
            $(this).remove();
        });
        $(".search-btn").click(function(){
            $("#st_form").submit();
        });
    });
function togPaysource(){
    $("#st_form").submit();
}
</script>
</body>
</html>
