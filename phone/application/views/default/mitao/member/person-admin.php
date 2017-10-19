<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>个人信息</title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-myadmin">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>基本信息</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1)"></a> </header>
<!-- 个人中心 基本信息 -->
<nav class="ui-myAdmin-set">
  <ul>
   {if !empty($memberinfo)}
    <li onclick="window.location.href='/phone/mitao/editName'">  <a href="javascript:;">姓名<i class="ico-pageIn"></i><span class="ui-info-name">{$memberinfo['truename']}</span></a></li>
    <li onclick="window.location.href='/phone/mitao/editSex'">   <a href="javascript:;">性别<i class="ico-pageIn"></i><span class="ui-info-sex" data-sex="" data-value="">{$memberinfo['sex']}</span></a></li>
   {/if}
    <li onclick="window.location.href='/phone/mitao/checkPhone'"><a href="javascript:;">手机号<i class="ico-pageIn"></i><span class="ui-info-tel">{$memberinfo['mobile']}</span></a></li>
  </ul>
</nav>

</body>
</html>
