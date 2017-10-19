<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$seoinfo['seotitle']}-{$webname}</title>
  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}" />
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}" />
  {/if}
  {Common::css('2017common/bootstrap.css,2017common/public.css')}

  {Common::css('2017new_ver/hotel.css')}
  {Common::js('jquery-1.11.3.min.js')}
</head>
<body>
<header class="ctd-hotel-head">
  <div id="_c_head_info" class="head-info">
    <p class="head-pic"><img src="{$info['litpic']}"></p>
  </div>
</header>
<div id="_c_head_title" class="ctd-head-title">
  <h2 class="head-title">{$info['title']}</h2>
  <div id="_c_head_user" class="head-title-user"></div>
</div>
<section class="ctd-hotel-info">
  <p class="hotel_add"><i></i>{$info['address']}</p>
  <p class="t_info"><span class="a-sales">已售:{$info['sellnum']}</span><span class="a-score">满意度:{$info['satisfyscore']}%</span></p>
  {if $info['price']>0}
  <p class="hotel_price"><dfn>¥</dfn><strong>{$info['price']}</strong>起</p>
  {else}
  <div>价格：电询</div>
  {/if}
  <p class="hotel_tel"><i></i>酒店电:{$info['telephone']}</p>
</section>
<section class="ctd-hotel-price">
  <h3 class="hotel-title"><i></i>酒店信息</h3>
  <ul class="hotel-list clearfix">
    {st:hotel action="suit" row="10" productid="$info['id']" return="roomlist"}
    {loop $roomlist $room}
    <li>
      <p class="hotel-name">{$room['title']} </p>
      <p class="hotel_info">
        <span class="tip-p">{$room['roomstyle']}</span>
        <span class="tip-p">{$room['breakfirst']}</span>
        <span class="tip-p">{$room['computer']}</span></p>
      {if $room['price']}
      <p class="hotel_price"><dfn>¥</dfn><strong>{$room['price']}</strong></p>
      {/if}
<!--      <div class="order_btn"><a href="#"><span>我要<br>-->
<!--        预定</span></a></div>-->
    </li>
    {/loop}

    {/st}
  </ul>
</section>
<section class="ctd-hotel-body">
  <div class="ctd-nav-seat">
    <div class="ctd-nav-items" data-spy="scrollNav">
      <ul class="hotel-nav clearfix">
        {st:detailcontent action="get_content" typeid="2" productinfo="$info" onlyrealfield="1"}
        {loop $data $k $row}
        {if $k <2}
        <li   {if $k <1}class="current"{/if}><a href="#p{$k}">{$row['chinesename']}</a></li>
        {/if}
        {/loop}
          {/st}
        <li><a href="#p8">用户点评</a></li>
      </ul>
    </div>
  </div>
  <div class="article-body" data-spy="scrollCon">
    {st:detailcontent action="get_content" typeid="2" productinfo="$info" onlyrealfield="1"}
    {loop $data $k $row}
    {if $k<2}
    <div class="chapter"><a class="anchor0" id="p{$k}"></a>
      <div class="panel-hd"><i class="detail-icon-2"></i><span>{$row['chinesename']}</span></div>
      <div class="panel-bd">
        {$row['content']}
      </div>
    </div>
    {/if}
    {/loop}
    {/st}

    <div class="chapter"><a class="anchor0" id="p8"></a>
      <div class="panel-hd"><i class="detail-icon-4"></i><span>用户点评</span></div>
      <div class="panel-bd">
        <p style="height:600px;">&nbsp;</p>
      </div>
    </div>
  </div>
</section>

<div class="ctd-pop-mask" id="_J_pop_Reserve"> </div>

</body>
</html>
<script>

  function arrayToJson(o) {
    var r = [];
    if (typeof o == "string") return "\"" + o.replace(/([\'\"\\])/g, "\\$1").replace(/(\n)/g, "\\n").replace(/(\r)/g, "\\r").replace(/(\t)/g, "\\t") + "\"";
    if (typeof o == "object") {
      if (!o.sort) {
        for (var i in o)
          r.push(i + ":" + arrayToJson(o[i]));
        if (!!document.all && !/^\n?function\s*toString\(\)\s*\{\n?\s*\[native code\]\n?\s*\}\n?\s*$/.test(o.toString)) {
          r.push("toString:" + o.toString.toString());
        }
        r = "{" + r.join() + "}";
      } else {
        for (var i = 0; i < o.length; i++) {
          r.push(arrayToJson(o[i]));
        }
        r = "[" + r.join() + "]";
      }
      return r;
    }
    return o.toString();
  }
  //这个是调用微信图片浏览器的函数
  function imagePreview(curSrc, srcList) {
    if (!curSrc || !srcList || srcList.length == 0) {
      return;
    }

    WeixinJSBridge.invoke('imagePreview', {
      'current': curSrc,
      'urls': srcList
    });
  };

  (function ($) {

    var aa = [];
    var i = 0;
    var src = [];
    var json = null;
    aa = $(".article-body").find('img');
    for (i = 0; i < aa.length; i++) {
      src[i] = aa[i].src;    //把所有的src存到数组里
    }
    var srcList = arrayToJson(src); //转换成json并赋值给srcList

    aa.each(function (index) {
      $(this).on('click',function(){
        imagePreview(this.src, srcList);
      })
    })


  })(jQuery);
</script>

{Common::js('20170301_new/bootstrap-min.js')}