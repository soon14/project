<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人中心</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
    {php echo Common::css('bootstrap-min.css,public.css,user9-1.css');}
    {php echo Common::js('jquery-1.11.3.min.js,user9-1.js');}

</head>
<body style="background:#f9f7fc;">
{if $member}
<div class="user-top">
  <div class="user-peo"><img src="{$member['litpic']}"></div>
  <div class="user-name">{$member['nickname']}</div>
  <div class="user-admin"><i></i><span><a href="/phone/member/Linkman/useradmin">账号管理</a></span></div>
</div>
{else}
<div class="user-top">
      你还没有登录，<a href ="/phone/member/login">立即登录</a>
</div>
{/if}
<div class="user-list">
  <ul>
     <li><a href="/phone/member/order/list "><i class="arrow"></i><i class="ico06"></i>我的订单</a></li>
     <li><a href="/phone/member/linkman/mynote"><i class="arrow"></i><i class="ico07"></i>我的游记</a></li>
     <li><a href="/phone/member/linkman/myenjoy?gl=gl"><i class="arrow"></i><i class="ico08"></i>我的喜欢</a></li>
     <li><a href="http://t.cn/Rc1qRtX"><i class="arrow"></i><i class="ico09"></i>联系我们</a></li>
  </ul>
</div>

</body>
</html>
