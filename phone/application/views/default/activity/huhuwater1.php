<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>沕沕水</title>
  {Common::css('huhu/layout.css,huhu/public.css,huhu/bootstrap-min.css')}
</head>
<body>
<div class="container-fluid"> <div class="dong"><img src="/phone/public/images/huhu/bg.png" width="100%"></div>
  <div class="logo"><img src="/phone/public/images/huhu/logo.png"></div>
  <section>
    <div class="titie">解救冰冻人,免费得沕沕水冰瀑门票</div>
  </section>
  <section>
    <div class="dialog clearfix">
      <div class="user"><img src="{$userinfo['headimgurl']}"></div>
      <div class="txt">
        <p class="mz">你的好友<span>{$userinfo['nickname']}</span></p>
        <p class="yq">邀请你来帮忙解冻</p>
      </div>    
      <div id="triangle-down"></div>
    </div>
  </section>
  
  <section>
    <ul class="wei clearfix"><li class="text-right" ><p style="border-right:1px solid #FFF; padding-right:10px;"><img src="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket={$erweima}"></p></li><li class="text-left"><p><img src="/phone/public/images/huhu/zw.png"></p></li>
    </ul>
  </section>
  <div class="bottom-txt"><p>快来9个小伙伴扫码即可帮我解冻,成功解冻即可获得沕沕水冰瀑门票一张</p></div>
</div>
{Common::js('huhu/jquery-1.11.3.min.js,huhu/bootstrap-min.js')}

</body>
</html>
