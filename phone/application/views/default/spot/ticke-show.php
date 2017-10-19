<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>门票说明</title>
<link rel="stylesheet" type="text/css" href="/res/css/phone/global.css" />
<!-- css库 -->
<link rel="stylesheet" type="text/css" href="/res/css/phone/rosestrap-min.css" />
<!-- 框架 CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/res/css/phone/base-phone.css" />
<!-- 全局 CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/res/css/phone/ticket-phone.css"/>
<!-- 布局版面 CSS 文件-->
<script src="/res/js/phone/jquery-1.8.3.min.js"></script><!-- jQuery库 -->
<script src="/res/js/phone/rosestrap-min.js"></script><!-- 常用jQuery库 -->

</head>

<body>
<section>
  <div class="container-fluid ticke-box">
      <div class="Booking-otes">
         {$tinfo[0]['description']}
      </div>
  <div class="p-box"></div>
  </div>
</section>
<div class="defray_box">
  <div class="pay_box"> 
    <!-- 现付显示提交订单 --> 
    <a id="J-submit" href="javascript:;" class="btn_submit fr">提交支付</a>
    <div class="total_price fr">门票优惠价格：<i>¥</i><dfn class="total-font" id="total_item_1">{$tinfo[0]['ourprice']}</dfn> </div>
    <!-- 现付显示 --> 
  </div>
</div>
</body>
</html>
