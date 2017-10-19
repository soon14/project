<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$info['title']}详情</title>
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/destination/Destination.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb Color-fff">
    <ul >
      <li><a href="/">首页<i class="icon-gt">&gt;</i></a></li>
      <li ><a href="/{$info['kind']['pinyin']}?param=survey">{$info['kind']['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li ><a href="/{$info['kind']['pinyin']}?param=specialty">特产<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">{$info['title']}详情</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<section>
  <div class="ctd-head-common">
    <div class="container">
      <div class="ctd-title">
        <div class="ctd-name">
          <h1>{$info['title']}</h1>
        </div>
<!--        <div class="ctd-Season"> <span class="J-Specialty">{$info['title']}详情</span> </div>-->
      </div>
    </div>
  </div>
</section>
<div class="container">
  <section> 
    <!-- 内容备注-->
    <div class="ctd-content">
      <div class="ctd-article">
        <div class="ctd-con">
        {$info['content']}
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box">
          <div class="sid-summaryImg"> <img src="{if empty($tuce[1][0])}{Common::nopic()}{else}{$tuce[1][0]}{/if}" >
            <div>{$info['title']}图册</div>
          </div>
        </div>
        <div class="side-box sid-Specialty">
          <div class="sidebox-hd">
            <h2 class="hd-title">特产推荐</h2>
            <a class="hd-more" href="#">更多</a> </div>
          <div class="list-item">
            <div class="img">
              <a href="/destination/specialty?speid={$te[0]['id']}&kindid={$info['id']}" target="-blank"><img src="{$te[0]['litpic']}" ></a>
              <div class="img-txt">
                <h4>{$te[0]['title']}</h4>
              </div>
            </div>
            <ul class="list-item-bot">
              {loop $te $v}
              <li><a href="/destination/specialty?speid={$v['id']}&kindid={$info['id']}" target="-blank"><span></span>{$v['title']}</a></li>
              {/loop}
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
{request "pub/footer"}<!-- 网站置顶 结束-->

</body>
</html>
