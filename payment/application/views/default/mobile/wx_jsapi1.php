<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/res/css/phone/global.css" />
    <!-- css库 -->
    <link rel="stylesheet" type="text/css" href="/res/css/phone/active.css" />
    <title>微信安全支付</title>
    <script type="text/javascript">
        //调用微信JS api 支付
        function jsApiCall()
        {
            WeixinJSBridge.invoke(
                'getBrandWCPayRequest',
                <?php echo $parameter; ?>,
                function(res){
                    if(res.err_msg == "get_brand_wcpay_request:ok"){
                       window.location.href="/payment/status/index/?<?php echo 'sign='.md5('11').'&ordersn='.$ordersn;?>";
                   }else{
                       //返回跳转到订单详情页面
                       window.location.href="/payment/status/?<?php echo 'sign='.md5('00');?>";
                   }
                }
            );
        }

        function callpay()
        {
            if (typeof WeixinJSBridge == "undefined"){
                if( document.addEventListener ){
                    document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                }else if (document.attachEvent){
                    document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                    document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                }
            }else{
                jsApiCall();
            }
        }
    </script>
</head>
<body style="background:#ededed; ">
<div class="active-pay">
    <h2 style="height: 80px">河北旅游网订单-<?php $pro=explode("(",$productname); echo $pro[0];?></h2>
    <div class="price-pay">¥<?php echo number_format($total_fee,2);?></div>
    <div class="price-txt">收款方<span>河北旅游网</span></div>
    <div class="price-but" onclick="callpay()"><a href="#">立即支付</a></div>
</div>

</body>
</html>