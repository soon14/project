<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>景区门票</title>
<!-- 基础框架 bootstrap CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/phone/public/css/index/bootstrap.css" />
<!-- 页面公用 public CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/phone/public/css/index/public.css" />
<!-- 布局版面 layout CSS 文件-->
<link rel="stylesheet" type="text/css" href="/phone/public/css/ticket/HB_Ticket.css"/>

  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
  {Common::js('jquery.min.js,amazeui.js,template.js,ticket/HB_sale_v1_1.js')}
  {Common::js('layer/layer.m.js')}
</head>
<body class="HB_Ticket">
<!-- HB-商城 头部 -->
<header id="HB_header">
  {request "pub/header3/typeid/$typeid"}
</header>
<script>
  $(document).ready(function() {
    putToper();
  });
</script>
<!-- HB-商城 热门推荐 -->
<section class="HB-Ticket-list">
  <div class="HB-class-tab">
    <ul class="clearfix" data-toggle="tab" data-target="mt_desc01" data-spy="scrollNav">
      <li class="{if $pinyin}active{/if}" data-url="/phone/spot/search"  onclick="toShow(this)"><a href="javascript:void(0)">{$destnam}</a></li>
      <li class="{if $themeid||$attrId>25||($attrId<20&&$attrId>0)}active{/if}" data-url="/phone/spot/search"  onclick="toShow(this)"><a href="javascript:void(0)">{if $theme!=''}{$theme}{else}{if $attrId>25}{$atr}{else}{if $attrId>0&&$attrId<20}{$atr}{else}景点主题{/if}{/if}{/if}</a></li>
      <li class="{if $greatid||($attrId>19&&$attrId<26)}active{/if}"  data-url="/phone/spot/search"  onclick="toShow(this)"><a href="javascript:void(0)">{if $grea!=''}{$grea}{elseif $attrId>19&&$attrId<26}{$atr}{else}景区级别{/if}</a></li>
    </ul>
  </div>
  <div class="mt_desc_con" id="mt_desc01" data-spy="scrollCon">
    <div class="tab-pane active" id="result_list">


    </div>

  </div>
</section>


<div class="sort-box" style="display: none">
  <a class="close"></a>
  <h2>排序方式</h2>
  <ul class="sort-list clearfix">
    <li><a href="#">默认排序</a></li>
    <li><a href="#">价格排序↑</a></li>
  </ul>
  <div class="sort-btn">
    <button class="btn cancel">取消</button>
    <button class="btn confirm">确定</button>
  </div>
</div>
      <input type="hidden" id="keyword" value="{$keyword}"/>
      <input type="hidden" id="pinyin" value="{$pinyin}"/>
      <input type="hidden" id="sorttype" value="{$sorttype}"/>

<input type="hidden" id="attrid" value="{if $themeid&&$greatid}{$themeid}_{$greatid}{else}{if $greatid}{$greatid}{elseif $themeid}{$themeid}{elseif $attrId}{$attrId}{/if}{/if}"/>
<input type="hidden" id="page" value="1"/>
<div id ="allmap"></div>

<script type="text/html" id="tpl_hotel_item">
  {{each list as value i}}
    {{if value.iconlist==6}}
    <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
      <div class="actbox_img">
        <img src="{{value.litpic}}"><span class="tip">抢购</span></div>
      <div class="actbox_con">
        <h2>{{value.title}}</h2>
        <p class="add address" data-lng="{{value.lng}}" data-lat="{{value.lat}}">{{value.finaldestname}} <span></span></p>
        <div class="price"><i class="paymoney">{{value.price}}</i> <span class="Surplus">{{if value.stock}}剩余{{value.stock}}{{/if}}</span></div>
        <div class="ptag ticke"><i class="on">门票</i><i>特惠</i>{{if value.biaoqian}}<i>{{value.biaoqian}}</i>{{/if}}</div>
      </div>
    </div>
    {{else}}
    <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
      <div class="actbox_img"><img src="{{value.litpic}}"></div>
      <div class="actbox_con">
        <h2>{{value.title}}</h2>
        <p class="add address" data-lng="{{value.lng}}" data-lat="{{value.lat}}">{{value.finaldestname}} <span></span></p>
        <div class="price"><i class="paymoney">{{value.price}}</i><i class="dw">起</i></div>
        <div class="ptag ticke"><i class="on">门票</i><i>优惠</i>{{if value.biaoqian}}<i>{{value.biaoqian}}</i>{{/if}}</div>
      </div>
    </div>
   {{/if}}
  {{/each}}
</script>



<script type="text/javascript">
  if(localStorage.getItem('dataHtmlticket')){
    $("#result_list").append(localStorage.getItem('dataHtmlticket'));
    loading =  localStorage.getItem('dataLoading');
    if(loading==='false'){
      loading =false;
    }
    localStorage.removeItem('dataHtmlticket');
    localStorage.removeItem('dataLoading');
  }else {
    var initpage = '{$page}';
    var loading = false;//用于限制
    $(function () {
      //第一次加载数据
      get_data();
      allmap();
    });
  }
    $(window).scroll(function(){

      // 当滚动到最底部以上100像素时， 加载新内容
      var scorllTop = $(this).scrollTop() + 100;
      var scorllHeight = $(document).height();
      var windowHeight = $(this).height();
      if (scorllTop + windowHeight > scorllHeight) {
        if(!loading){
          get_data();
        }
      }
    });
    //获取list地址
    function get_url() {
      //获取选中的目的地
      var pinyin = $("#pinyin").val();
      if(pinyin.length==0){
        var  url ='all';
      }else{
        var url = pinyin;
      }
      //获取priceid
      //var priceid = $("#priceid").val();
      var priceid =0;
      //获取选中的属性
      var attrid =$("#attrid").val();

      if(attrid.length==''){

           attrid=0;
      }
      //排序规则
      var sorttype = $("#sorttype").val();//1是特价排序 2 价格  3是销量 4是人气 5是满意度


      //搜索名称
      var keyword = $('#keyword').val();
      //当前页 page
      var page = $("#page").val();
      keyword = keyword == '' ? 0 : keyword;
      url += '-' + priceid + '-' + sorttype + '-0-' + attrid + '-' + page + '?keyword=' + encodeURIComponent(keyword);;
      return url;
    }
    //ajax获取数据
    var contentNum = 0;
    function get_data() {
      loading = true;
      var paramUrl = get_url();
      var url = '/phone/spot/ajax_spot_more/'+paramUrl;
      layer.open({
        type: 2,
        content: '',
        time: 20
      });
      $.getJSON(url, {}, function (data) {
        if (data.list.length > 0) {
          var itemHtml = template('tpl_hotel_item', data);
          $("#result_list").append(itemHtml);
          contentNum++;
        }
        //设置分页
        if (data.page != -1) {
          $("#page").val(data.page);
          loading = false;
        } else {
          //$("#btn_getmore").hide();
          loading = true;
        }
        //设置内内容显示
        if (contentNum == 0) {
          $('#list-content').hide();
          $("#no-content").show();
        }
        allmap();
        layer.closeAll();
      });
    }
    $("#textfield").click(function(){
      window.open("/phone/spot/search");
    });

    //目的地点击
    $("li[name=mdd]").click(function(){
      // var themeid = $("#themeid").val();
      //var greatid = $("#greatid").val();
      var url = '/phone/spots/'+$(this).attr('data-id')+'?pinyin='+$(this).attr('data-title');//+'&themeid='+themeid+'&greatid='+greatid;
      window.location.href = url;
    });

    //属性点击
    $("li[name=theme]").click(function(){
      var pinyin  = $("#pinyin").val();
      var greatid = $("#greatid").val();
      var attrid  = $(this).attr('data-id');
      var url     = '/phone/spots/all-0-0-0-'+attrid+'?themeid='+attrid+'&pinyin='+pinyin+'&greatid='+greatid;
      window.location.href = url;
    });
    //等级点击
    $("li[name=grate]").click(function(){
      var themeid = $("#themeid").val();
      var pinyin  = $("#pinyin").val();
      var attrid = $(this).attr('data-id');
      var url = '/phone/spots/all-0-0-0-'+attrid+'?greatid='+attrid+'&themeid='+themeid+'&pinyin='+pinyin;
      window.location.href = url;
    });

    function toShow(th){
      var  url  = $(th).attr('data-url');
      var  html = $("#result_list").html();
      localStorage.setItem('dataHtmlticket', html);
      localStorage.setItem('dataLoading', loading);
      // console.log(localStorage.getItem('dataLoading'));
      location.href = url;
    }

</script>
</body>
</html>
<script type="text/javascript">
  // 百度地图API功能
  function allmap() {
    var map = new BMap.Map("allmap");
    var point = new BMap.Point(116.331398, 39.897445);
    map.centerAndZoom(point, 12);
    if(getCookie('userlng')&&getCookie('userlat')){
      var pointB = new BMap.Point(getCookie('userlng'),getCookie('userlat'));
      $('.address').each(function () {
        var mdd_lng = $(this).attr('data-lng');
        var mdd_lat = $(this).attr('data-lat');
        var pointA = new BMap.Point(mdd_lng, mdd_lat);
        var distance = (map.getDistance(pointA, pointB) * 1 / 1000).toFixed(0);
        $(this).find('span').text("距您" + distance + " km");

      });
    }else {
      var geolocation = new BMap.Geolocation();
      geolocation.getCurrentPosition(function (r) {
        if (this.getStatus() == BMAP_STATUS_SUCCESS) {
          var mk = new BMap.Marker(r.point);
          map.addOverlay(mk);

          map.panTo(r.point);//当前位置的经纬度；
          var pointB = new BMap.Point(r.point.lng, r.point.lat);
          document.cookie = "userlng=" + r.point.lng;
          document.cookie = "userlat=" + r.point.lat;
          $('.address').each(function () {
            var mdd_lng = $(this).attr('data-lng');
            var mdd_lat = $(this).attr('data-lat');
            var pointA = new BMap.Point(mdd_lng, mdd_lat);
            var distance = (map.getDistance(pointA, pointB) * 1 / 1000).toFixed(0);
            $(this).find('span').text(distance + " km");

          });
        }
        else {
          alert('failed' + this.getStatus());
        }
      }, {enableHighAccuracy: true})
    }

  }
  function getCookie(cname)
  {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++)
    {
      var c = ca[i].trim();
      if (c.indexOf(name)==0) return c.substring(name.length,c.length);
    }
    return "";
  }
</script>
{Common::js('mitao/mitao_v1_1.js')}