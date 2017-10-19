<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>悠乐谷戏雪</title>

    {Common::css('playsnow/layout.css,playsnow/public.css,playsnow/bootstrap-min.css')}
</head>
<body>
<div class="container-fluid">


    <div class="dialog clearfix">
      <div class="user"><img src="{$userinfo['headimgurl']}"></div>
      <div class="txt">
        <p class="mz">你的好友<span>{$userinfo['nickname']}</span></p>
        <p class="yq"><img src="/phone/public/images/playsnow/txt.png"></p>
      </div>    
      <div id="triangle-down"></div>
    </div>

    <ul class="wei clearfix">
        <li class="text-right" >
            <p style="border-right:1px solid #ccc; padding-right:10px;">
                <img src="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket={$erweima}">
            </p>
        </li>
        <li class="text-left">
            <p>
                <img src="/phone/public/images/playsnow/zw.png" style=" width:75%; padding-top:10px;">
            </p>
        </li>
    </ul>

  
</div>
{Common::js('playsnow/jquery-1.11.3.min.js,playsnow/bootstrap-min.js')}
</body>
</html>
