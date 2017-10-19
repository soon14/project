<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>{$info['title']}地图</title>
<link rel="stylesheet" type="text/css" href="/res/css/phone/global.css" /><!-- css库 -->>
<link rel="stylesheet" type="text/css" href="/res/css/phone/ticket-phone.css" /><!-- 布局版面 CSS 文件-->
<script src="/res/js/phone/jquery-1.8.3.min.js"></script> <!-- jQuery库 -->
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
</head>
<body>
<header>
<div class="order-head"><a class="back-home" href="/phone/spots/show_{$aid}.html" style="font-size: 18px;font-weight: 700;margin-top: -4px;color: #555"><</a>地图</div>
</header>
<section>
  <div class="map" id="destmap" style="height:500px;width:400px;min-width:400px;margin:0px auto;border: 1px solid #666;margin-top: 50px"></div>
</section>
{request "pub/footer"}
{Common::js('SuperSlide.min.js,template.js,scorll.img.js')}
{Common::js('layer/layer.js',0)}
<script type="text/javascript">
  var map = new BMap.Map("destmap");
  // var point = new BMap.Point(103.928015,33.271453);
  var point = new BMap.Point({$info['lng']},{$info['lat']});
  // map.centerAndZoom(point, 15);
  //map.addOverlay(new BMap.Marker(point));
  //==========================================
  // 添加全景设置
  map.enableScrollWheelZoom(true);
  // 覆盖区域图层测试
  map.addTileLayer(new BMap.PanoramaCoverageLayer());

  var stCtrl = new BMap.PanoramaControl(); //构造全景控件
  stCtrl.setOffset(new BMap.Size(20, 20));
  map.addControl(stCtrl);//添加全景控件
  //============================================
  map.centerAndZoom(point, 16);
  var marker = new BMap.Marker(point);
  map.addOverlay(marker);
  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
  //============================================
  var opts = {
    width : 100,     // 信息窗口宽度
    height: 65,     // 信息窗口高度
    title : "<a href='#' style='color:#4D4D4D;display:block;margin-bottom:5px' id='bt'>{$info['title']}</a>"  // 信息窗口标题
  }
  //var img  = document.getElementsByName("img");
  var mcon ="<span style='font-size:12px;color:#4D4D4D'>景区地址：{$info['address']}</span><br/><span style='font-size:11.4px;color:#4D4D4D'>景区简介：{Common::cutstr_html($info['content'],42)}</span>";
  var infoWindow = new BMap.InfoWindow(mcon, opts);  // 创建信息窗口对象
  map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口
  //===========================================
  //控件
  map.addControl(new BMap.NavigationControl());//地图平移缩放控件
  map.addControl(new BMap.ScaleControl());   //比例尺控件，默认位于地图左下方，显示地图的比例关系
  map.addControl(new BMap.OverviewMapControl());//缩略地图控件，默认位于地图右下方，是一个可折叠的缩略地图
  //map.addControl(new BMap.CopyrightControl());
  map.addControl(new BMap.GeolocationControl());//定位控件，针对移动端开发，默认位于地图左下方
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
</body>
</html>
