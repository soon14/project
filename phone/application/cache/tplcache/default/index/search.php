<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>搜索</title>
<!-- 基础框架 bootstrap CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/phone/public/css/index/bootstrap.css" />
<!-- 页面公用 public CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/phone/public/css/index/public.css" />
<!-- 布局版面 layout CSS 文件-->
<link rel="stylesheet" type="text/css" href="/phone/public/css/index/HB_sale_v1_1.css" />
</head>
<body class="page-search">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>搜索</h1>
  <a class="ui-page-back" href="/"></a> </header>
<section class="ui-page-about">
  <div class="serch-box">
    <input type="text" placeholder="输入城市名、景点名进行搜索" name="keyword" id="keyword"><a href="javascript:;" class="serch-btn"></a>
  </div>
  <div class="serch-tab">
<!--    <ul class="clearfix">-->
<!--      <li><a href="#">动物园</a></li>-->
<!--      <li><a href="#">温泉</a></li>-->
<!--      <li><a href="#">漂流</a></li>-->
<!--      <li><a href="#">登山</a></li>-->
<!--      <li><a href="#">抱犊寨</a></li>-->
<!--      <li><a href="#">西柏坡</a></li>-->
<!--    </ul>-->
  </div>
</section>
<script src="/phone/public/js/jquery-1.11.3.min.js"></script><!-- jQuery库 -->
</body>
</html>
<script>
  $(".serch-btn").click(function () {
      var  keyword  = $("#keyword").val();
       console.log(keyword);
      if(keyword.length==''){
         $("#keyword").focus();
        return false;
      }
      window.location.href='/phone/index/index?keyword='+keyword;
  })
</script>
