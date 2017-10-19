<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>个人中心</title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}

</head>
<body class="pagePerson-index">
<!-- 个人中心 头部 -->
{request "pub/header2/typeid/$typeid"}
<!-- 个人中心 信息头部 -->


<section class="ui-personal-header">
  <p class="ui-userImg"><span><img src="images/ui-noUserImg.png" width="100%"></span></p>
  <p class="ui-username">思维的乐趣</p>
</section>


<!-- 个人中心 信息 -->
<section class="ui-personal-info">
  <div class="titlebar"><i>我的订单</i> <i class="more">查看全部订单</i></div>
  <ul class="clearfix">
    <li class="ui-account">
      <div class="info-inner"><span class="icon icon01"></span><span>待付款<i>(1)</i></span></div>
    </li>
    <li class="ui-myOrder">
      <div class="info-inner"><span class="icon icon02"></span><span>待使用<i>(1)</i></span></div>
    </li>
    <li class="ui-myIntegral">
      <div class="info-inner"><span class="icon icon03"></span><span>待评价<i>(1)</i></span></div>
    </li>
    <li class="ui-myIntegral">
      <div class="info-inner"><span class="icon icon04"></span><span>退款<i>(1)</i></span></div>
    </li>
  </ul>
</section>



<nav class="ui-personal-nav">
  <ul>
    <li class="ui-info"><a href="#"><i></i>个人信息<span class="ui-page-in"></span></a></li>    
    <li class="ui-fav"><a href="#"><i></i>我的收藏<span class="ui-page-in"></span></a></li>    
  </ul>
</nav>

<nav class="ui-personal-nav">
  <ul>
    <li class="ui-about"><a href="#"><i></i>关于我们<span class="ui-page-in"></span></a></li>
    <li class="ui-customer"><a href="#"><i></i>联系我们<span class="ui-page-in"></span></a></li>
  </ul>
</nav>
{Common::js('mitao/jquery-1.11.3.min.js,mitao_person_v1_1.js')}
</body>
</html>
