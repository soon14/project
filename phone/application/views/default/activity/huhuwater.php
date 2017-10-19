<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>站点名称</title>
  {Common::css('huhu/layout.css,huhu/public.css,huhu/bootstrap-min.css')}
</head>
<body>
<div class="container-fluid">

  <section>
    <div class="dialog clearfix">
      <div class="user"><img src="{$userinfo['headimgurl']}"></div>
      <div class="txt">
        <p class="mz">你的好友<span>{$userinfo['nickname']}</span></p>
        <p class="yq"><img src="/phone/public/images/huhu/txt.png"> </p>
      </div>    
      <div id="triangle-down"></div>
    </div>
  </section>
  <section>
    <ul class="wei clearfix"><li class="text-right" ><p style="border-right:1px solid #FFF; padding-right:10px;"><img src="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket={$erweima}"></p></li><li class="text-left"><p><img src="/phone/public/images/huhu/zw.png"></p></li>
    </ul>
  </section>
  
</div>
{Common::js('huhu/jquery-1.11.3.min.js,huhu/bootstrap-min.js')}
</body>
</html>
