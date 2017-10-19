<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>供应商管理系统-{$webname}</title>

    {Common::css("style.css,base.css")}

    {Common::js("jquery.min.js")}

</head>



<body>



<div class="page-box">

    {request 'pc/pub/header'}

    <!-- 顶部 -->



    {template 'pc/pub/sidemenu'}

    <!-- 侧边导航 -->



    <div class="main">

        <div class="content-box">

            <div class="frame-box">

                <div class="frame-con">



                    <div class="order-show-box">

                        <div class="order-show-tit"><strong class="bt">订单详情</strong></div>

                        <div class="order-show-con">

                            <ul>

                                <li class="msg-num">短信码： {$data['smscode']}</li>

                                <li class="nr">

                                    <a href="{$data['url']}">

                                        <div class="pic"><img src="{$data['litpic']}" alt="{$data['productname']}"/></div>

                                        <div class="txt">

                                            <p class="bt">{$data['productname']}</p>

                                        </div>

                                    </a>

                                </li>

                                <li class="cp-msg">

                                    <p>订单号：<span>{$data['ordersn']}</span></p>



                                    {if $data['pricetype'] != ''}<p>价格类型：<span>{$data['pricetype']}</span></p>{/if}



                                    <p>下单时间：<span>{if $data['addtime']}{date('Y-m-d H:i', $data['addtime'])}{/if}</span></p>



                                    <p>付款时间：<span>{if $data['finishtime']}{date('Y-m-d H:i', $data['finishtime'])}{/if}</span></p>

                                </li>

                                <li class="user-msg">

                                    <p>预定电话：<span>{$data['linktel']}</span></p>



                                    <p>购买数量：<span>{if $data['dingnum']}成人 x{$data['dingnum']}&nbsp;&nbsp;{/if}{if $data['oldnum']}老人 x{$data['oldnum']}&nbsp;&nbsp;{/if}{if $data['childnum']}小孩 x{$data['childnum']}&nbsp;&nbsp;{/if}</span></p>

                                </li>

                                <li class="total">

                                    <span class="jg" style="float: left">支付方式：{if $data['paytype']==4}景区支付{else}在线支付{/if}</span>
                                    <span class="jg">总额：<strong>&yen;{$data['total']}</strong></span>

                                    {if $data['isconsume']!=1 }<a class="yd-btn check-order"  href="javascript:;" data-id="{$data['id']}">确认验单</a>{/if}

                                </li>

                            </ul>

                            {if $data['isconsume']==1 }

                            <div class="order-after-ico"></div>

                            {else}

                            <div class="order-before-ico"></div>

                            {/if}

                        </div>

                    </div>

                    <!-- 订单详情 -->



                </div>

            </div>



            {request 'pc/pub/footer'}



        </div>

    </div>

    <!-- 主体内容 -->



</div>



{Common::js("layer/layer.js")}

<script>

    $(function(){

        $("#nav_check_record").addClass('on');

        $(".check-order").click(function(){

            $.post('{$cmsurl}pc/checkorder/ajax_check_order', {

                'id': $(this).attr("data-id"),

            },function(data) {

                if (data.status == 1) {

                    layer.msg(data.msg, {icon:6, end: function(){

                        window.location.reload();

                    }});

                } else {

                    layer.msg(data.msg, {icon:5});

                }

            },'json');

        });

    });

</script>

</body>

</html>

