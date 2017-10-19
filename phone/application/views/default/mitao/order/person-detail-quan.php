<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>我的米淘券</title>
<!-- 基础框架 bootstrap CSS 文件 -->
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-detail">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>米淘券</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1)"></a> </header>
  
<section class="ui-Person-detail">
  <div class="mt_order_head">
    <h2>{$info['productname']}</h2>
    <p class="active-time">{$info['sellpoint']}</p>
  </div>
  <div class="mt_tags">
    <div class="ico botl ic_time"><i class="c9">{$info['usedate']}</i></div>
    <div class="ico ic_add"><i class="c9">{$info['address']}</i></div>
  </div>
  <div class="mt-code">
    <h2>券码：{$info['eticketno']}</h2>

    <p><img src="/res/vendor/qrcode/make.php?param={$info['eticketno']}"></p>
  </div>
</section>

</body>
</html>
