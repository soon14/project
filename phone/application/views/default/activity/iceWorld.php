<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>邀好友扫码，领冰雕大世界儿童门票</title>
<!-- 基础框架 bootstrap CSS 文件 -->
    {Common::css('iceworld/public.css,iceworld/bootstrap-min.css,iceworld/layout.css')}
</head>
<body>
<div class="container-fluid">


    <div class="dialog clearfix">
      <div class="user"><img src="{$userinfo['headimgurl']}"></div>
      <div class="txt">
        <p class="mz">你的好友<span>{$userinfo['nickname']}</span></p>
        <p class="yq"><img src="/phone/public/images/iceworld//txt.png"></p>
      </div>    
      <div id="triangle-down"></div>
    </div>

    <ul class="wei clearfix"><li class="text-right" ><p style="border-right:1px solid #ccc; padding-right:10px;"><img src="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket={$erweima}"></p></li><li class="text-left"><p><img src="/phone/public/images/iceworld/zw.png" style=" width:75%; padding-top:10px;"></p></li>
    </ul>

  
</div>
<script src="js/jquery-1.11.3.min.js"></script><!-- jQuery库 --> 
<script src="js/bootstrap-min.js"></script><!-- 常用bootstrap jQuery库 -->
</body>
</html>
