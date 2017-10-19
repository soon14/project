<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$title}</title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_order.css')}
</head>
<body class="pageCheck">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1> {if $type==2}
      取消条款
      {else}
      协议条款
      {/if}
  </h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1);"></a>
</header>
<section class="check-article">
  <div class="check-article-innner">
      {if $type==2}
     {$info['feeinclude']}
      {else}
      {$info['payment']}
    {/if}
   </div>
</section>

</body>
</html>
