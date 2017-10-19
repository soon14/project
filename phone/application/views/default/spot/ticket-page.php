<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>景区门票</title>
  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}" />
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}" />
  {/if}
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
  {Common::css('2017common/bootstrap.css,2017common/public.css')}

  {Common::css('2017new_ver/ticket.css')}

  {Common::js('jquery-1.11.3.min.js')}
  {Common::js('jquery.min.js,amazeui.js,template.js')}
  <style>
    .modal{position: fixed; top: 0; right: 0; bottom: 0; left: 0; z-index:9998; display:none ; background-color:rgba(0,0,0,0.5);}
    </style>

</head>
<body>
<header class="ctd-ticket-head">
  <div id="_c_head_info" class="head-info">
    <p class="head-pic"><img src="{Common::img($info['piclist'][0][0],640,300)}"></p>
  </div>
</header>
<div id="_c_head_title" class="ctd-head-title">
  <h2 class="head-title">{$info['title']}</h2>
  <div id="_c_head_user" class="head-title-user"></div>
</div>
<section class="ctd-ticket-info">
  <p class="ticket_add"><i></i>{$info['address']}</p>
  <p class="t_info"><span class="a-sales">已售:{$info['sellnum']}</span><span class="a-score">评分:{$info['satisfyscore']}</span><span class="a-judge">推荐:{$info['recommendnum']}</span></p>
  <p class="ticket_price">{if !empty($info['price'])}<dfn>&yen;</dfn><strong>{$info['price']}</strong>起<del>&yen;{$info['sellprice']}</del>{else}电询{/if}</p>
  <p class="ticket_time"><i></i>开放时间:{$extendinfo['e_business_time']}</p>
  <?php //var_dump($extendinfo);?>
</section>
<section class="ctd-ticket-price">
  <h3 class="ticket-title"><i></i>门票预定</h3>
  <ul class="ticket-list clearfix">
    {loop $ticketInfo $tf}
    <li>
      <p class="ticket-name">{$tf['title']}</p>
      <p class="ticket_price"><dfn>&yen;</dfn><strong>{$tf['price']}</strong><del>&yen;{$tf['sellprice']}</del><span class="tip-p">{if $tf['paytype']==4}景区支付{else}在线支付{/if}</span><span class="tip-x" onclick="ydxz()">门票说明</span></p>
      <p class="ticket-time"><i></i>当日17：00以前可订票</p>
      <div class="order_btn">
        <a href="/phone/spot/book/id/{$info['id']}?title={$tf['title']}&suitid={$tf['id']}">
          <span>我要<br>
        预定</span>
        </a>
      </div>
    </li>
    {/loop}

  </ul>
</section>
<section class="ctd-ticket-body">
  <div class="ctd-nav-seat">
    <div class="ctd-nav-items" data-spy="scrollNav">
      <ul class="ticket-nav clearfix">
        <li class="current"><a href="#p0">交通指南</a></li>
        <li><a href="#p1">景区简介</a></li>
        <li><a href="#p2">购买须知</a></li>
        <li><a href="#p3">用户点评</a></li>
      </ul>
    </div>
  </div>
  {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="spotcontent"}
  <div class="article-body" data-spy="scrollCon">
    <div class="chapter"><a class="anchor0" id="p0"></a>
      <div class="panel-hd"><i class="detail-icon-1"></i><span>交通指南</span></div>
      <div class="panel-bd" id="destmap" style="height: 300px">

      </div>

    </div>
    <div class="chapter"><a class="anchor0" id="p1"></a>
      <div class="panel-hd"><i class="detail-icon-2"></i><span>景区简介</span></div>
      <div class="panel-bd">
        {$spotcontent[0]['content']}
      </div>
    </div>
    <div class="chapter"><a class="anchor0" id="p2"></a>
      <div class="panel-hd"><i class="detail-icon-3"></i><span>购买须知</span></div>
      <div class="panel-bd">
        {$spotcontent[1]['content']}
      </div>
    </div>
    <div class="chapter"><a class="anchor0" id="p3"></a>
      <div class="panel-hd"><i class="detail-icon-4"></i><span>用户点评</span></div>
      <div class="panel-bd">
        <p style="height: 500px" id="dp_list">

        </p>
      </div>
    </div>
  </div>
</section>
<!-------该 ------>
<input type="hidden" id ="thatPage" >
<div class="ctd-pop-box cui-layer " style=" margin-left:-140px; margin-top:-200px;display: none">
  <div class="cui-hd">门票说明<span class="cui-top-close" onclick="ydxz(1)"></span></div>
  <div class="cui-bd">
    {$spotcontent[1]['content']}
  </div>
</div>
<div class="ctd-pop-mask" id="_J_pop_Reserve"> </div>
<input type="hidden" id="articleid" value="{$info['id']}"/>
<input type="hidden" id="typeid" value="{$typeid}"/>
<input type="hidden" id="page" value="1"/>
<script type="text/html" id="tpl_comment">
  {{each list as value i}}
  <div class="down_mid" style="border-bottom: 1px dashed #666">
    <div class="useful" style="padding-top: 10px">{if value.tel}{{value.tel}}{else}匿名{/if}</div>
    <!--        <div class="star">-->
    <!--            <div class="vote-star"><i style="width:50%"></i></div>-->
    <!--            <span>满意度：{{value.score}}</span> </div>-->
    <div class="dp-c-name">
      <p>{{value.content}}</p>
    </div>
    <div class="dp-time">{{value.addtime}}发表</div>
    <!--div class="answer">
        <dnf>回复:</dnf>
        <span>谢谢您的发表,我们会继续努力为大家服务!谢谢服务!</span> <i>2016-03-06 回复</i> </div-->
  </div>
  {{/each}}
</script>

</body>
</html>
  <script>
  function ydxz(index){
    if(index==1){
      $(".ctd-pop-box").css("display","none");
      $(".ctd-pop-mask").css("display","none");
      $("body").removeClass('offcanvas-page');
    }else{
      $(".ctd-pop-box").css("display","block");
      $(".ctd-pop-mask").css("display","block");
      $("body").addClass('offcanvas-page');
    }

  }
  $(function(){

    get_pinlun();
    //滚动加载内容
    $(window).scroll(function(){
      // 当滚动到最底部以上100像素时， 加载新内容
      if ($(document).height() - $(this).scrollTop() - $(this).height()<100){
        get_pinlun();
      }
    });
  })

  function get_pinlun()
  {
    var articleid = $("#articleid").val();
    var typeid = $("#typeid").val();
    var page = Number($("#page").val());
    var url = '/phone/pub/ajax_comment';
    $.getJSON(url,{articleid:articleid,typeid:typeid,page:page},function(data){
      if(data){
        var html = template("tpl_comment",data);
        $("#dp_list").append(html);
        $("#page").val(page+1)
      }
    })
  }
  </script>
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

<script type="text/javascript">

  var map = new BMap.Map("destmap");

  // var point = new BMap.Point(103.928015,33.271453);

  var point = new BMap.Point({$info['lng']},{$info['lat']});

  map.centerAndZoom(point, 12);

  //map.addOverlay(new BMap.Marker(point));

  //==========================================

  // 添加全景设置

 // map.enableScrollWheelZoom(true);

  // 覆盖区域图层测试

 // map.addTileLayer(new BMap.PanoramaCoverageLayer());



//  var stCtrl = new BMap.PanoramaControl(); //构造全景控件
//
//  stCtrl.setOffset(new BMap.Size(20, 20));
//
//  map.addControl(stCtrl);//添加全景控件

  //============================================

  map.centerAndZoom(point, 16);

  var marker = new BMap.Marker(point);

  map.addOverlay(marker);

  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

  //============================================

  var opts = {

    width : 220,     // 信息窗口宽度

    height: 125,     // 信息窗口高度

    offset :new BMap.Size(-4,-13),

    title : "<a href='#' style='color:#4D4D4D;display:block;margin-bottom:5px' id='bt'>{$info['title']}</a>"  // 信息窗口标题

  }

  var img  = document.getElementsByName("img");

  var mcon ="<span style='font-size:12px;color:#4D4D4D'>景区地址：{$info['address']}</span><br/><span style='font-size:11.4px;color:#4D4D4D'>景区简介：{Common::cutstr_html($info['content'],42)}</span>";

  var infoWindow = new BMap.InfoWindow(mcon, opts);     // 创建信息窗口对象

  map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口

  //===========================================

  //控件

//  map.addControl(new BMap.NavigationControl());//地图平移缩放控件
//
//  map.addControl(new BMap.ScaleControl());   //比例尺控件，默认位于地图左下方，显示地图的比例关系
//
//  map.addControl(new BMap.OverviewMapControl());//缩略地图控件，默认位于地图右下方，是一个可折叠的缩略地图
//
//  //map.addControl(new BMap.CopyrightControl());
//
//  map.addControl(new BMap.GeolocationControl());//定位控件，针对移动端开发，默认位于地图左下方

  //===============================================

  //自定义控件

  function ZoomControl(){

    this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;

    this.defaultOffset = new BMap.Size(10, 10);

  }

  ZoomControl.prototype = new BMap.Control();

  ZoomControl.prototype.initialize = function(map){

    var div = document.createElement("div");

    div.appendChild(document.createTextNode("放大2级"));

    div.style.cursor = "pointer";

    div.style.border = "1px solid gray";

    div.style.backgroundColor = "white";

    div.onclick = function(e){

      map.zoomTo(map.getZoom() + 2);

    }

    map.getContainer().appendChild(div);

    return div;

  }

  var myZoomCtrl = new ZoomControl();

  //===============================================

</script>
{Common::js('20170301_new/bootstrap-min.js')}