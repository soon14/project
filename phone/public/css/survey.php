<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$destinfo['kindname']}</title>
  {Common::css('2017common/bootstrap.css,2017common/public.css')}

  {Common::css('2017new_ver/city.css')}
  <style>

    </style>
</head>
<body>
<?php //var_export($destinfo)?>
<header class="Dest-city-head">
<!--  <p class="head-pic"><img src="{$destinfo['litpic']}"></p>-->
  <canvas id="mycanvas"  style=" height: 100%;width: 100%;margin: 0;padding: 0;display: block;">

    您的浏览器不支持Html5 canvas，请换一个浏览器。
  </canvas>
<!--  <p class="head-weather"><span>23.0℃  14~25</span><span>空气质量：爆表</span></p>-->
  <h2 class="head-cityName">{$destinfo['kindname']}</h2>
  <div class="head-impress">城市印象:<span class="ctd-star">

      <div class="vote-star">

        {if $star==0}
        <i style="width:20%"></i>
        {elseif $star==1}
        <i style="width:40%"></i>
        {elseif $star==2}
        <i style="width:60%"></i>
        {elseif $star==3}
        <i style="width:80%"></i>

        {else}
        <i style="width:100%"></i>
        {/if}

      </div>

    </span>
  </div>
  <div class="comment-btn"><a href="/phone/{$destinfo['pinyin']}/des-comment">评论</a></div>
</header>
<div class="city-impress">  
  <div class="ctd-comment-impress">
    <ul class="clearfix">

      {loop $destinfo['tag'] $k $tag}
      {if $k+1<7}
      <li class="a{$k+1}">{$tag['tag_name']}{$tag['precent']}%</li>
      {/if}
      {if $k+1>7&&$k+1<13}
      <li class="a{$k+1}">{$tag['tag_name']}{$tag['precent']}%</li>
      {/if}
      {/loop}
    </ul>
  </div>
</div>

<div class="navbar-con">
  <ul class="navbar clearfix">
<!--    <li class="city-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-survey" > <i class="navbar-icon"></i><span>概况</span> </a> </li>-->
    <li class="human-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-human"> <i class="navbar-icon"></i><span>人文</span> </a> </li>
    <li class="map-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-map"> <i class="navbar-icon"></i><span>地图</span> </a> </li>
    <li class="scenic-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-spot"> <i class="navbar-icon"></i><span>景点</span> </a> </li>
    <li class="hotel-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-hotel"> <i class="navbar-icon"></i><span>酒店</span> </a> </li>
<!--    <li class="restaurant-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-restaurant"> <i class="navbar-icon"></i><span>饭店</span> </a> </li>-->
    <li class="Specialty-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-specialty"> <i class="navbar-icon"></i><span>特产</span> </a> </li>
    <li class="Raiders-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-raider"> <i class="navbar-icon"></i><span>攻略</span> </a> </li>
    <li class="travels-guide"> <a class="navbar-btn" href="/phone/{$destinfo['pinyin']}/des-note"> <i class="navbar-icon"></i><span>游记</span> </a> </li>
  </ul>
</div>
<section class="page-list-body clearfix">
  <h2 class="ntd-theme-title">
    <a class="in-page" href="/phone/{$destinfo['pinyin']}/des-raider"></a>
    <i class="Hebei-Raid"></i>
    <span class="tit-big">目的地攻略</span>
    <span class="tit-small">带您亲身体验魅力河北</span>
  </h2>
  <ul class="ntd-Hebei-Raid">
    {st:article action="query" destid="$destinfo['id']" row="3" flag="relative"  attrid="37" havepic="true"}
    {loop $data $travel}
    <li onclick="location.href='{$travel[url]}'+'?admin=feng'">
      <div class="mask"></div>
      <p class="Raid-img"><img src="{$travel['piclist'][1][0]}"></p>
      <p class="Raid-tip"><span>{$travel['mdd']}&nbsp;|&nbsp;{$travel['dayTour']}</span><span><i>{$travel['tuceNum']}</i>图</span></p>
      <div class="Raid-tit">{$travel['title']}</div>
    </li>
    {/loop}
    {/st}
  </ul>
</section>
<section class="ticket_list_body clearfix">
  <h2 class="ntd-theme-title"><a class="in-page" href="#"></a><i class="Hebei-Raid"></i><span class="tit-big">景点推荐</span><span class="tit-small">河北最美的景色</span></h2>
  <ul class="ticket_list">
    {st:spot action="query" flag="mdd" destid="$destinfo['id']" haveRem="true" row="3"}
<?php// var_dump($data)?>
    {loop $data $spot}
    <li class="clearfix"> <a href="{$spot['url']}?admin=feng" target="blank">
      <div class="ticket-pic">
        {if $spot['isrecommend']} <div class="tip">推荐</div>{/if}
        <div class="ticket-txt">{$spot['mdd']}</div>
        <img class="Ticket-itemimg" src="{$spot['piclist'][1][0]}"></div>
      <div class="ticket-info">
        <h3  class="ticket-tit">{$spot['title']}</h3>
        <p class="ticket-address">{$spot['address']}</p>
        {if $spot['greate']}
        <p class="ticket-servicetag"><span>{$spot['greate']}景区</span></p>
        {/if}
        {if $spot['price']}
        <p class="ticket_price"><dfn>¥</dfn><strong>{$spot['price']}</strong>起<span>已售:{$spot['sellnum']}</span></p>
        {else}
        电询
        {/if}
      </div>
      </a>
    </li>
   {/loop}
    {/st}
  </ul>
</section>
<section class="page-list-body clearfix">
  <h2 class="ntd-theme-title"><a class="in-page" href="#"></a><i class="Hebei-Note"></i><span class="tit-big">目的地游记</span><span class="tit-small">一场边走边记录的旅行</span></h2>
  <ul class="ntd-Hebei-Note">
   {st:notes action="query" destid="$destinfo['id']" flag="new" row="3"}
  {loop $data $note}
    <li onclick="location.href='{$note[url]}'+'?admin=feng'">
      <div class="mask"></div>
      <p class="Note-img"><img src="{$note['litpic']}" height="250"></p>
      <h2 class="Note-tit">{$note['title']}
        <p class="Note-tip"><span>{$note['mdd']}</span>|<span class="data">{date("j/M.Y",$note['addtime'])}</span></p>
      </h2>
      <p class="user-name">{$note['member']['nickname']}</p>
      <p class="user-info"><span class="user-img"><img src="{if $note['member']['litpic']}{$note['member']['litpic']}{else}{Common::member_nopic()}{/if}"></span></p>
    </li>
    {/loop}
  {/st}
  </ul>
</section>
</body>
</html>
<script>

  canvas_cutPicture("{$destinfo['litpic']}",180,0,500,450,0,0,400,230);
  /*
   litpic  图片地址
   ,sx 开始截取的x 坐标
   ,sy 开始截取的y 坐标,
   sw 截取的 宽度
   ,sh截取的 高度度
   ,x  放到画布canvas的位置 横坐标,、
   y  放到画布canvas的位置  y坐标,
   w,  放到画布canvas 宽度
   h    放到画布canvas 高度度

   */
  function canvas_cutPicture(litpic,sx,sy,sw,sh,x,y,w,h){
    var  theCanvas  = document.getElementById('mycanvas');
    try {
      if (!theCanvas || !theCanvas.getContext) {
        throw '该浏览器不支持canvas';
      }else {
        var ctx=theCanvas.getContext("2d");

        var img = new Image();
        img.src = litpic;
        img.onload  = function(){

          ctx.drawImage(img,sx,sy,sw,sh,x,y,w,h);
        }

      }
    }catch(err){
      alert(err)
    }
  }

</script>