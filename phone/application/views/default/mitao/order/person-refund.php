<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title></title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-refun">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>退款中</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1)"></a> </header>
<section class="ui-refun">
  <div class="ui-refun-top">
    <ul>
      <li>退款金额<span class="money">￥{$info['total']}</span></li>
      <li>退款账户<span>微信钱包</span></li>
      <?php $t = $info['refundtime']+8600;
            $t = date("Y-m-d",$t);
      ?>
      <li>到账时间<span>预计最晚{$t}日到账</span></li>
    </ul>
  </div>
  <h2 class="title">退款流程</h2>
  <div class="ui-refun-step">
    <ul>
      <li class="active">
        <i class="step-i"></i>
        <h2>米淘亲子审核</h2>
        <p>退款申请后，米淘会在1个工作日内完成审核</p>
<!--        <p>2017-7-28 12：11</p>-->
      </li>
      <li>
      <i class="step-i"></i>
        <h2>微信钱包退款处理</h2>
        <p>米淘审核通过后，将退款申请提交到微信钱包，微信钱包会在1个工作日内完成退款处理</p>
      </li>
      <li>
      <i class="step-i"></i>
        <h2>退款入账</h2>
        <p>微信钱包退款处理成功后会在1天内完成入账，将退款入账至您的微信钱包中</p>
      </li>
    </ul>
  </div>
</section>
</body>
</html>
