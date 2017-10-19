<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>订单详情</title>

    <meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    {Common::css("style.css,base.css")}

    {Common::js("jquery.min.js")}



</head>

{include "mobile/pub"}

<body>



<header class="header-top">

    <div class="ht-back"></div>

    <h1 class="ht-h1">订单详情</h1>

</header>



<section class="content">

    <div class="mark-list-box">



        <div class="mark-list-con">

            <ul>

                <li>

                    <div {if $data['isconsume']==0}class="badge-before"{else}class="badge-after"{/if}></div>

        <div class="num"><span>消费码：{$data['smscode']}</span></div>

        <div class="nr">

            <div class="pic"><img src="{$data['litpic']}" alt="asdf" /></div>

            <div class="txt">

                <p>{$data['productname']}</p>

                <p class="sz"></p>

            </div>

        </div>

        <div class="cp">



            {if $data['pricetype'] != ''}<p>价格类型：<span>{$data['pricetype']}</span></p>{/if}

            <p>下单时间：{if $data['addtime']}{date('Y-m-d H:i', $data['addtime'])}{/if}</p>

            <p>验票时间：{if $data['consumetime']}{date('Y-m-d H:i', $data['consumetime'])}{/if}</p>

        </div>

        <div class="sl">

            <p>预订电话：{$data['linktel']}</p>

            <p>购买数量：<span class="people">{if $data['dingnum']}成人 x{$data['dingnum']}&nbsp;&nbsp;{/if}{if $data['oldnum']}老人 x{$data['oldnum']}&nbsp;&nbsp;{/if}{if $data['childnum']}小孩 x{$data['childnum']}&nbsp;&nbsp;{/if}</span></p>

        </div>

        <div class="hj"><span style="float:left">{if $data['paytype']==4}景区支付{else}在线支付{/if}</span>合计：<span>&yen;{$data['total']}</span></div>

        </li>

        </ul>

        {if $data['isconsume']==0}

        <a class="confirm-btn" href="javascript:;" data-smscode="{$data['smscode']}" data-id="{$data['id']}">确认验单</a>

        {Common::js("layer/layer.js")}

        <script>

            $(function(){

                $(".confirm-btn").click(function(){

                    var smscode = $(this).attr('data-smscode');

                    var smsid = $(this).attr('data-id');

                    $.ajax({

                        type:'POST',

                        url:SITEURL+'mobile/order/ajax_check_order',

                        data:{smscode:smscode,id:smsid},

                        dataType:'json',

                        success:function(data){

                            if(data.status){

                                layer.msg("验单成功", {

                                    icon: 6,time:1000

                                }, function(){

                                    window.location.href = location.href;

                                });

                            }// fengjishu 08.10 加入 else
                            else {

                                layer.msg(data.msg, {icon:5});

                            }

                        }

                    })

                })

            })

        </script>

        {/if}



        {if $from=='scan' && $data['isconsume']==1}

        <a class="confirm-btn" href="{$cmsurl}mobile/order/scan">继续验单</a>

        {/if}



    </div><!-- list -->





</section>

<script>

    var f = "{$from}";

    $(function(){

        $('.ht-back').click(function(){

            if(f=='scan'){

                window.location.href = SITEURL+'mobile/'

            }else{

                history.go(-1);

            }



        })

    })

</script>



</body>

</html>

