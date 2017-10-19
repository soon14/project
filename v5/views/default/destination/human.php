<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$info['kindname']}人文历史-河北旅游网</title>
  <meta name="keywords" content="{$info['kindname']}人文历史" />
  <meta name="description" content="河北旅游网为您提供{$info['kindname']}介绍，人文历史，风土人情等信息" />

  {Common::css('common/bootstrap-min.css,common/public.css,mycss/destination/Destination.css')}

  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}

  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH">

  </script>
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
      <li><a href="#">首页<i class="icon-gt">&gt;</i></a></li>
<!--      <li><a href="#">目的地<i class="icon-gt">&gt;</i></a></li>-->
      <li><a href="/{$info['pinyin']}?param=survey">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">人文历史</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 -->
</section>
<section>
  {request "pub/CommonNav"}
</section>
<section>
  <div class="ctd-head-common">
    <div class="container">
      <div class="ctd-title">
        <div class="ctd-name">
          <h1>{$info['kindname']}历史</h1>
        </div>
<!--        <div class="ctd-Season"> <span class="J-Specialty"></span> </div>-->
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
          {$info['jieshao']}
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box">
          <a href="/destination/photo_album?pinyin={$info[pinyin]}" target="_blank" style="cursor: pointer" >
          <div class="sid-summaryImg">{if !empty($info['piclist'][0][0])} <img src="{$info['piclist'][0][0]}" >{else}<img src="{Common::nopic()}" >{/if}
            <div>{$info['kindname']}图册</div>
          </div>
          </a>
        </div>

        <div class="side-box sid-Specialty" style="height: 225px;width: 225px" id ="destmap">

        </div>
        <button style="margin: 0px auto;cursor: pointer" onclick="location.href='/{$info[pinyin]}?param=map'">查看地图</button>

      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
<!--底部-->
{request "pub/footer"}

</body>
</html>
<script type="text/javascript">

  var map = new BMap.Map("destmap");
  //==========================================
  map.centerAndZoom("{$info['kindname']}", 12);
  map.addControl(new BMap.NavigationControl());//地图平移缩放控件
  var marker1 = new BMap.Marker(point[1]);
</script>