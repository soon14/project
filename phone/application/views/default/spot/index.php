<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>景区门票</title>
    <!--<title>{$seoinfo['seotitle']}-{$webname}</title>-->
<link rel="stylesheet" type="text/css" href="/res/css/phone/global.css"/>
<!-- 全局 CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/res/css/phone/layout.css"/>
<!-- 布局版面 CSS 文件-->
<!--{Common::js('phone/jquery-1.8.3.min.js,phone/rosestrap-min.js,phone/lubotu.js')}-->
<script src="/res/js/phone/jquery-1.8.3.min.js"></script><!-- jQuery库 -->
<script src="/res/js/phone/rosestrap-min.js"></script><!-- 常用jQuery库 -->
<script type="text/javascript" src="/res/js/myjs/lubotu.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
    <style>
        .play-in-bot{ width:40px; height:40px;  margin:5px auto; background:#F2F2F2;-moz-border-radius:50%;
            -webkit-border-radius:50%;
            border-radius:50%;}
        .play-in-txt{ font-size:.8em;  text-align:center;color: #666}
        .ico003{ background: url(/res/images/phone/ico014.png) 50%  #ac6edd no-repeat; background-size:100%; }
        .ico004{ background: url(/res/images/phone/ico003.png) 50%  #47a4ea no-repeat; background-size:100%; }
        .ico005{ background: url(/res/images/phone/ico004.png) 50%  #33c7e5 no-repeat; background-size:100%; }
        .ico006{ background: url(/res/images/phone/ico013.png) 50%  #4bce8e no-repeat; background-size:100%; }
        .ico007{ background: url(/res/images/phone/ico007.png) 50%  #668ee5 no-repeat; background-size:100%; }
        .ico008{ background: url(/res/images/phone/ico012.png) 50%  #ff7558 no-repeat; background-size:100%; }
        .ico009{ background: url(/res/images/phone/ico005.png) 50%  #fd8789 no-repeat; background-size:100%; }
        .ico010{ background: url(/res/images/phone/ico011.png) 50%  #ff9d3a no-repeat; background-size:100%; }
        .ico0011{ background: url(/res/images/phone/ico008.png) 50%  #fd8789 no-repeat; background-size:100%; }
        .ico0012{ background: url(/res/images/phone/ico010.png) 50%  #ff9d3a no-repeat; background-size:100%; }
    </style>
<script type="text/javascript">
//JQuery
//li最后一行无边线
$(document).ready(function(){
	 $(".listLR-item li:last").css("border-bottom","none")
});
</script>
</head>
<body>

<div class="banner">
<div class="lubo">
  <ul class="lubo_box">
      {st:ad action="getad" name="s_spot_index_1"}

      {loop $data['aditems'] $v}

      <li style="opacity: 1;filter:alpha(opacity=100);"><a href="{$v['adlink']}" style="background:url({Common::img($v['adsrc'],480,310)}) 0px 0px no-repeat;background-size:100%;"></a></li>
      {/loop}
      {/st}
  </ul>
</div>

<script type="text/javascript">

$(function(){
    $(".lubo").lubo({
    })
    $(".lubo_box li").css("z-index","0");
    $(".lubo_box li:eq(0)").css("z-index","1");
})
</script>
</div>
<section>
  <div class="container-fluid">
    <div class="classify">
      <div class="area" name="sjz_Spot" style="cursor: pointer"><a href="{$cmsurl}spot/sjz_Spot" style="margin-left:10px;color:#333;">&nbsp;&nbsp;石家庄景区</a></div>
      <div class="city" name="nearCity" style="cursor: pointer"><a href="{$cmsurl}spot/nearCity" style="margin-left:10px;color:#333;">周边城市</a></div>
    </div>
  </div>
<div class="play-box">

  {loop $attrs $k $sx}

     {loop $sx $ke $s}

    <div class="play-in">
      <a href="{$cmsurl}spots/all?attrid={$s['themeid']}">
          <div class="play-in-bot {$s['pic_url']}"></div>
<!--        <div class="tx"><img src ="{$s['pic_url']}" width="100%" height="100%"></div>-->
       <div class="play-in-txt" style="min-width:56px;">{$s['theme']}</div>
      </a>
    </div>
    

    {/loop}

  {/loop}<div style="clear:both"></div>

</div>

  <div class="container-fluid ticke-box">
    <div class="ticket-name">
      <h2>本季热门景区</h2>
    </div>
    <div class="listLR-item">
      <ul>
        {st:spot action="query" flag="order" row="4"}
        {loop $data $row}
        <li data-url ="{$row['url']}" class="li_url">
          <div class="img-item"><a target="_blank" href="{$row['url']}" title=""><img src="{Common::img($row['litpic'],302,180)}"></a></div>
          <div class="txt-item">
            <h2 class="title-item"><a target="_blank" href="{$row['url']}" title="">{$row['title']}</a></h2>
            <div class="about-item"> <dfn class="total-font" id="total_item_1">{if $row['price']}￥{$row['price']}{else}电询{/if}</dfn> <del>¥{$row['sellprice']}</del> <span>已售{$row['sellnum']}</span> </div>
            <div class="address" data-lng="{$row['lng']}" data-lat="{$row['lat']}"><!--北京 50m-->{$row['kindlist']}&nbsp;&nbsp;&nbsp;&nbsp;<span></span></div>
          </div>
          <div class="cl"></div>
        </li>
        {/loop}
        {/st}
      </ul>
    </div>
      <div id ="allmap"></div>
  </div>
<div class="show-more"><a href="{$cmsurl}spots/all">显示更多</a></div>
</section>
<script>
    $(".li_url").click(function(){
        var url =$(this).attr('data-url');
        window.location.href =url;
    });
   $("div[name=sjz_Spot]").click(function(){
    // var attrid = $(this).attr('data-id');
     var url = '{$cmsurl}spot/sjz_Spot?pinyin=shijiazhuang';
     window.location.href = url;
   });
   $("div[name=nearCity]").click(function(){
     // var attrid = $(this).attr('data-id');
     var url = '{$cmsurl}spot/nearCity';
     window.location.href = url;
   });
    function tabs(tabTit,on,tabCon){
        $(tabTit).children().click(function(){
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
           	$(tabCon).eq(index).show().siblings().hide();
    	});
	};
    tabs(".fixedTabbox .tab","current",".tab-content");
</script>
<script type="text/javascript">
    // 百度地图API功能

    var map = new BMap.Map("allmap");
    var point = new BMap.Point(116.331398,39.897445);
    map.centerAndZoom(point,12);
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            var pointB = new BMap.Point(r.point.lng,r.point.lat);
            map.panTo(r.point);//当前位置的经纬度；
            $('.address').each(function(){
                var mdd_lng = $(this).attr('data-lng');
                var mdd_lat = $(this).attr('data-lat');
                var pointA = new BMap.Point(mdd_lng,mdd_lat);
               var distance = (map.getDistance(pointA,pointB)*1/1000).toFixed(0);
                $(this).find('span').text(distance+" km");

            });
//            var pointA = new BMap.Point(106.486654,29.490295);  // 创建点坐标A--大渡口区
//             // 创建点坐标B--江北区
//            alert(''+(map.getDistance(pointA,pointB)).toFixed(2)+' 米。');
//            alert('您的位置：'+r.point.lng+','+r.point.lat);
        }
        else {
            alert('failed'+this.getStatus());
        }
    },{enableHighAccuracy: true})
    //关于状态码
    //BMAP_STATUS_SUCCESS	检索成功。对应数值“0”。
    //BMAP_STATUS_CITY_LIST	城市列表。对应数值“1”。
    //BMAP_STATUS_UNKNOWN_LOCATION	位置结果未知。对应数值“2”。
    //BMAP_STATUS_UNKNOWN_ROUTE	导航结果未知。对应数值“3”。
    //BMAP_STATUS_INVALID_KEY	非法密钥。对应数值“4”。
    //BMAP_STATUS_INVALID_REQUEST	非法请求。对应数值“5”。
    //BMAP_STATUS_PERMISSION_DENIED	没有权限。对应数值“6”。(自 1.1 新增)
    //BMAP_STATUS_SERVICE_UNAVAILABLE	服务不可用。对应数值“7”。(自 1.1 新增)
    //BMAP_STATUS_TIMEOUT	超时。对应数值“8”。(自 1.1 新增)

</script>
</body>
</html>
