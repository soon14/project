<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>河北旅游网</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH">

  </script>
  {Common::css('mycss/chejiache/car.css,mycss/bootstrap-responsive.min.css,mycss/jcarousel.connected-carousels.css')}
  {Common::css('common/bootstrap-min.css,common/public.css')}
  {Common::js('chejiache/jquery-1.8.3.min.js,chejiache/jcarousel.connected-carousels.js,chejiache/jquery.jcarousel.min.js,chejiache/bootstrap.min.js,chejiache/jquery.select.js')}

</head>
<body>
<!-- 头部开始 -->
{request "pub/header"}
<!-- 头部结束 -->
<section style="margin-top: 60px;">
  <div class="container crumbs"> <a href="/" class="current">首页</a><sub class="songti">-&gt;</sub><a href="/spots/" class="current">车主服务</a><sub class="songti">-&gt;</sub><a>{$info['business_name']}</a></div>
</section>
<section>
  <div class="container">
    <div class="product-intro">
      <div class="product-intro-main">
        <div class="product-side-box fl">
          <div class="connected-carousels">
            <div class="stage">
              <div class="carousel carousel-stage">
                <ul>
                  <li><img src="{$info['litpic']}" width="436" height="250" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="navigation"><a href="javascript:" class="prev prev-navigation"></a> <a href="javascript:" class="next next-navigation"></a>
              <div class="carousel carousel-navigation">
                <ul>
                  <li><img src="{$info['litpic']}" width="100" height="56" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="product-main-box fr" style=" position:relative;">
          <div >
            <h1 class="product-hd" style="margin-top:-5px;">{$info['business_name']}</h1>
          </div>
          <div class="pro_rig_data">
            <ul class="pro_ul">
              <li class="li_1">
                <?php
                     $start  =  strtotime("2017-01-15");

                     $over   =  strtotime("2017-02-12");

                    $time    =  time();

                ?>

                <?php if($time>$start&&$time<$over){?>
                  <p class="p1"><strong> 2017.01.15-2017.02.12暂停使用</strong></p>
                  <p class="p2">
                      
                  </p>
                <?php }else{?>
                  <p class="p1">优惠价：<strong>¥{$info['minprice']}</strong></p>
                <p class="p2">
                  <del>原价：￥{$type[0]['costprice']}&nbsp;&nbsp;会员价：￥{$type[0]['vipprice']}</del>
                </p>
                <?php }?>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="preview-b">
            <div class="mb10"> {$info['describes']}</div>
            <dl>
              <dt>有效期限</dt>
              <dd>{$info['timelimit']}</dd>
            </dl>
            <dl>
              <dt>商家地址</dt>
              <dd>{$info['address']}</dd>
            </dl>
            <dl>
              <dt>联系电话</dt>
              <dd>{$info['tel']}</dd>
            </dl>
          </div>
          <div class="box2">
            <div class="login5">
              <h2>报名方式</h2>
              <a class="close"></a> </div>
            <div class="login51"> <img src="img/baoming.png"> </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container  mt20"> 
    <div class="demo" id="bye">
      <ul class="tabbtn" id="normaltab">
        <li class="current"><a href="#">景区门票</a></li>
      </ul>
      <div class="tabcon" id="normalcon">
        <div class="sublist">
          <table class="table table-hover" width="100%">
            <tr>
              <th width="25%"><div class="text-left">商家名称</div>
              </th>
              <th width="15%">车型</th>
              <th width="15%">服务种类</th>
              <th width="10%">优惠价</th>
              <th width="10%">原价</th>
              <th width="10%">会员价</th>
            </tr>
            {loop $type $v}
            <tr>
              <td><div class="text-left">{$info['business_name']}</div></td>
              <td>{$v['model']}</td>
              <td>{$v['type']}</td>
              <td><i>￥{$v['price']}</i></td>
              <td><del>￥{$v['costprice']}</del></td>
              <td><del>￥{$v['vipprice']}</del></td>
            </tr>
          {/loop}
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="content-warp">
      <div class="content-left">
        <div class="" id="mymune">
          <div id="naw-w" class="">
            <div id="mynav">
              <ul>
                <li><a href="#con-001" >商家地图</a></li>
                <li><a href="#con-002" >优惠详情</a></li>
                <li><a href="#con-003" >商家介绍</a></li>
              </ul>              
            </div>
          </div>
        </div>
        <div id="box">
          <div class="con-box" id="con-001">
            <div class="con-fk-titile"><i class="fk-ico01"></i><span>路线图</span></div>
            <div class="con-box" id="destmap" style="height:400px;"> </div>
          </div>
          <div class="con-box"  id="con-002">
            <div class="con-fk-titile mt30"><i class="fk-ico02"></i><span>优惠详情</span></div>
            <div class="con-box">
           {$info['detail']}
            </div>
          </div>
          <div class="con-box" id="con-003">
            <div class="con-fk-titile  mt30"><i class="fk-ico03"></i><span>商家介绍</span></div>
            <div class="con-box"><p></p></div>
          </div>
        </div>
      </div>
    </div>

    <!-- 侧边开始 -->
    {request "pub/cheright"}
    <!-- 侧边结束 -->
  </div>
</section>

<!-- 尾部开始 -->
{request "pub/footer"}
<!-- 尾部结束 -->

<script type="text/javascript">
$(function(){
	var toTopHeight = $("#mymune").offset().top;

	$(window).scroll(function() {
	$("#red-big-btn").hide();
	
		if( $(document).scrollTop() > toTopHeight ){
			if ('undefined' == typeof(document.body.style.maxHeight)) {	//检测是否为IE6。jQuery1.9中去掉了msie的方法，所以只好这样写
				var scrollTop = $(document).scrollTop();
				$("#mymune").css({'position':'absolute','top':scrollTop+'px'});

			}
			else{
				$("#mymune").addClass("nav_fixed");
				$("#naw-w").removeClass("nav_a");
				$("#naw-w").addClass("nav_f");
                $("#red-big-btn").show();
			}
		}
		else{
			if ('undefined' == typeof(document.body.style.maxHeight)) {
				$("#mymune").css({'position':'absolute','top':toTopHeight+'px'});
			}else{
				$("#mymune").removeClass("nav_fixed");
				$("#naw-w").removeClass("nav_a");
				$("#naw-w").addClass("nav_f");
				$("#red-big-btn").show();
			}
			
			    $("#naw-w").addClass("nav_a");
				$("#red-big-btn").hide();
		}
	});
	
 $('#mynav').find("li:first").addClass("current")
  $(function(){
		window.onload = function()
		{	var $li = $('#mynav li');		
			$li.mousedown(function(){
				var $this = $(this);
				var $t = $this.index();
				$li.removeClass();
				$this.addClass('current');
				$ul.css('display','none');
				$ul.eq($t).css('display','block');
			})
			

		}
	});
	
	
});
</script>
<script type="text/javascript">

  var map = new BMap.Map("destmap");

  var point = new BMap.Point({$info['lon']},{$info['lat']});

  //var point = new BMap.Point({$info['lng']},{$info['lat']});

   map.centerAndZoom(point, 15);

  map.addOverlay(new BMap.Marker(point));

  //==========================================

  // 添加全景设置

  map.enableScrollWheelZoom(true);
//
//  // 覆盖区域图层测试
//
//  map.addTileLayer(new BMap.PanoramaCoverageLayer());
//
//
//
  var stCtrl = new BMap.PanoramaControl(); //构造全景控件
//
  stCtrl.setOffset(new BMap.Size(20, 20));
//
  map.addControl(stCtrl);//添加全景控件

  //============================================

  map.centerAndZoom(point, 16);

  var marker = new BMap.Marker(point);

  map.addOverlay(marker);

  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

  //============================================

  var opts = {

    width : 250,     // 信息窗口宽度

    height: 125,     // 信息窗口高度

    title : "<a href='#' style='color:#4D4D4D;display:block;margin-bottom:5px' id='bt'>{$info['business_name']}</a>"  // 信息窗口标题

  }

  //var img  = document.getElementsByName("img");

  var mcon ="<span style='font-size:12px;color:#4D4D4D'>商家地址：{$info['address']}</span><br/><span style='font-size:11.4px;color:#4D4D4D'>商家电话：{$info['tel']}</span>";

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