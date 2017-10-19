<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>{$info['productname']}-{$GLOBALS['cfg_webname']}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {php echo Common::css('amazeui.css,style.css,extend.css');}

    {php echo Common::js('jquery.min.js,amazeui.js,template.js,layer/layer.m.js');}

</head>



<body>

{request "pub/header/typeid/$typeid/isorder/1"}



<section>



    <div class="mid_content">

        <div class="confirm_order_msg">

            <dl>

                <dt><img src="{Common::img($info['litpic'])}"></dt>

                <dd>

                    <span>{$info['productname']}</span>

                    <strong>¥<b>{$info['price']}</b>起</strong>

                </dd>

            </dl>

            <ul>

                {if !empty($info['subname'])}

                <li><span>门票类型：</span>{$info['subname']}</li>

                {/if}

                <li><span>预订电话：</span>{$info['linktel']}</li>

<!--                <li><span>预定人数：</span>{$info['num']}</li>-->

            </ul>

            <ul>

                <li><span>订单编号：</span>{$info['ordersn']}</li>

                <li><span>订单时间：</span>{date('Y-m-d',$info['addtime'])}</li>

                <li><span>支付方式：</span><em class="no">{if $info['paytype']!=4}在线支付{else}景区支付{/if}</em></li>
                <?php  $time =time()*1-86400;
                       $usedate =strtotime($info['usedate']);?>
                <li><span>订单状态：</span>
                    <em class="no">
                        {if $info['status']==5}
                          {if $info['paytype']==4}
                             {if $info['isconsume']==1}
                              交易成功
                             {else}
                                {if $usedate <$time}
                                  已过期
                                {else}
                                  预定成功
                                {/if}

                             {/if}
                          {else}
                           交易成功
                          {/if}
                        {elseif $info['status']==4}
                           已退款
                        {elseif $info['status']==6}
                           退款中
                        {elseif $info['status']==3}
                           取消订单
                        {elseif $info['status']==2}
                            {if $usedate<$time}
                              已过期
                             {else}
                              付款成功
                             {/if}

                        {elseif $info['status']==1}
                           {if $info['paytype']==4}
                             {if $usedate<$time}
                              已失效
                             {else}
                             待下单
                             {/if}
                           {else}
                             {if $usedate<$time}
                             已失效
                             {else}
                             待付款
                             {/if}
                           {/if}
                        {else}
                           等待处理
                        {/if}
                    </em></li>

                <li><span>订单数量：</span><em class="no">{$info['dingnum']}</em></li>
            </ul>

            {if !empty($info['eticketno'])}

            <ul>



                <style>

                    /*消费码*/

                    .consume-box{

                        clear:both;

                        }

                    .consume-box .consume-num{ padding-left:20px;

                        color:#333;

                        font-size:14px}

                    .consume-box .consume-num span{

                        color:#999}

                    .consume-box .consume-pic{

                        margin-top:20px}

                    .consume-box .consume-pic img{

                        /*width:180px;

                        height:180px;

                        padding:15px;*/

                        border-radius:10px;

                        border:1px solid #dcdcdc}



                </style>

                <div class="consume-box">
                    <div class="consume-num">短信消费码：<span>{$info['eticketno']}</span></div>

                    <div class="consume-pic" style="padding-left: 1.5rem">
                        <!--<img src="{$GLOBALS['cfg_basehost']}/qrcode.php?data={$info['eticketno']}&size=7">-->
                        <img src="/res/vendor/qrcode/make.php?param={$info['eticketno']}">
                    </div>

                </div>

            </ul>

            {/if}

            <div class="total"><span style="float: left;color: #ccc;font-size: 18px;padding-top: 3px;padding-left: 5px;color: #ff6b1a;">{if $info['paytype']!=4}在线支付{else}景区支付{/if}</span>总额：<span><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['total']}</span></div>





        </div>

        {if $info['ispinlun']}

        <div class="dp_con_box">

            <h3 class="tit">我的点评</h3>

            <ul class="dp_list">

                <li>

                    <dl>

                        <dt>

                            <span class="name"><img src="{$member['litpic']}">{$member['nickname']}</span>

                            <span class="myd">满意度：<b>{$comment['score']}</b></span>

                        </dt>

                        <dd>{$comment['content']}</dd>

                    </dl>

                </li>

            </ul>

        </div>

        {/if}

    </div>

</section>





<div class="bom_link_box" {if $info['status']==3||$info['ispinlun']==1}style="display:none"{/if}>

    <div class="bom_fixed" >
        {if $info['status']==1}
            {if $info['paytype']==4}
               {if $usedate<$time}
              <a class="on" href="javascript:">已失效</a>
                {else}
               <a class="on" href="{$info['payurl']}">确认订单</a>
               {/if}
            {else}
                {if $usedate<$time}
                <a class="on" href="javascript:">已失效</a>
                {else}
                <a class="on" href="{$info['payurl']}">付款</a>
                {/if}
            {/if}
        {/if}


        {if $info['status']==2}
           {if $usedate>=$time}

           <a class="on cancel_order" data-ispay="1"  data-orderid="{$info['id']}" href="JavaScript:void(0)">取消订单</a>
            {/if}
        {/if}


        {if empty($info['ispinlun']) && $info['status']==5}
            {if $info['paytype']==4}
               {if $info['isconsume']==0}
                  {if $usedate<$time}
                     <a class="dp" href="javascript:">已过期</a>
                  {else}
                    <a class="on cancel_order" data-ispay="0"  data-orderid="{$info['id']}" href="JavaScript:void(0)">取消订单</a>
                  {/if}
              {else}
               <a class="dp" href="{$cmsurl}member/comment/index?id={$info['id']}">立即点评</a>
               {/if}
            {else}
            <a class="dp" href="{$cmsurl}member/comment/index?id={$info['id']}">立即点评</a>
            {/if}
        {/if}

    </div>

</div>





</body>

</html>
<script src="/res/js/layer/layer.js"></script>
<script>

    $(function(){



        //取消订单

        $(".cancel_order").click(function(){

            var orderid = $(this).attr('data-orderid');
            var ispay   = $(this).attr('data-ispay');// 封冀蜀 07.08  新增 用于判断付款后取消定单

            var url = SITEURL +'member/order/ajax_order_cancel';

            layer.confirm('{__("确认取消订单")}', {

                icon: 3,

                btn: ['{__("取消")}','{__("OK")}'], //按钮

                btn1:function(){

                    layer.closeAll();

                },

                btn2:function(){

                    $.getJSON(url,{orderid:orderid,ispay:ispay},function(data){

                        if(data.status){

                            layer.msg('{__("订单已取消")}', {icon:6,time:1000});

                            setTimeout(function(){location.reload()},1000);

                        }

                        else{

                            layer.msg('{__("订单取消失败")}', {icon:5,time:1000});

                        }



                    })

                },

                cancel:function(){

                    layer.closeAll();

                }





            })



        })

    })

</script>
