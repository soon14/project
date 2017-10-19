<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>供应商系统-{$webname}</title>
<meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {Common::css("style.css,base.css")}
    {Common::js("jquery.min.js")}
</head>
<body>
  <section class="content">
  	<div class="user-center-box">
    
      <div class="user-center-top">
        {if $info['verifystatus']!=3}
      	 <div class="yz-label-before">未资质验证</div>
        {elseif $info['verifystatus']==3}
      	 <div class="yz-label-after">已资质验证</div>
        {/if}
      	<div class="con">
          <p class="tx"><img src="{$GLOBALS['cfg_res_url']}/images/default-headimg.jpg"/></p>
          <p class="mz">{$userinfo['suppliername']}</p>
          <p class="id">ST{str_pad($info['id'],6,'0',STR_PAD_LEFT)}</p>
          <p class="zl"><a href="{$cmsurl}mobile/index/userinfo">账户资料</a></p>
        </div>
      </div>
      <div class="user-center-con">
      	<a class="iwant-yd-btn" href="{$cmsurl}mobile/order/scan">我要验单</a>
      	<a class="note-yd-btn" href="{$cmsurl}mobile/order/check_history">验单记录</a>
      </div>
    </div>
  </section>

</body>
</html>
