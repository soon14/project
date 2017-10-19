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
  <style>
    .paixu-totop {
      position: fixed;
      bottom: 5px;
      right: 10px;
      z-index: 99;
      width: 50px;
      height: 50px;
      background: url(/phone/public/images/mitao/paixu.png) no-repeat;
      background-size: auto auto;
      background-size: 50px;
    }
    .Dest-search-head .searchNav i {
      position: absolute;
      width: 20px;
      right: 5px;
      top: 15px;
      height: 10px;
      background: url(/phone/public/images/20170301/tit-down.png) no-repeat;
      background-size: 20px 10px;
    }
  </style>
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
    <ul class="clearfix"  data-spy="scrollNav"><i></i>
      <li class="{if $pinyin}active{/if}" data-url="/phone/spot/search?pinyin={$pinyin}&themeid={$themeid}&greatid={$greatid}"  onclick="toShow(this)"><a href="javascript:void(0)">{$destnam}</a></li>
      <li class="{if $themeid||$attrId>25||($attrId<20&&$attrId>0)}active{/if}" data-url="/phone/spot/search?pinyin={$pinyin}&themeid={$themeid}&greatid={$greatid}"  onclick="toShow(this)"><a href="javascript:void(0)">{if $theme!=''}{$theme}{else}{if $attrId>25}{$atr}{else}{if $attrId>0&&$attrId<20}{$atr}{else}景点主题{/if}{/if}{/if}</a></li>
      <li class="{if $greatid||($attrId>19&&$attrId<26)}active{/if}"  data-url="/phone/spot/search?pinyin={$pinyin}&themeid={$themeid}&greatid={$greatid}"  onclick="toShow(this)"><a href="javascript:void(0)">{if $grea!=''}{$grea}{elseif $attrId>19&&$attrId<26}{$atr}{else}景区级别{/if}</a></li>
    </ul>
  </div>
  <div class="mt_desc_con" id="mt_desc01" data-spy="scrollCon">
    <div class="tab-pane active" id="result_list">

    </div>
  </div>
</section>

<div class="sort-box" style="display: none;height: 0px">
  <a class="close"></a>
  <h2>排序方式</h2>
  <ul class="sort-list clearfix">
    <li><a href="javascript:;" data-sorttype="0" onclick="paixu(this)">默认排序</a></li>
    <li><a href="javascript:;" data-sorttype="3" onclick="paixu(this)">销量排序</a></li>
    <li><a href="javascript:;" data-sorttype="2" onclick="paixu(this)">价格排序↓</a></li>
  </ul>
<!--  <div class="sort-btn">-->
<!--    <button class="btn cancel">取消</button>-->
<!--    <button class="btn confirm">确定</button>-->
<!--  </div>-->
</div>
      <input type="hidden" id="keyword" value="{$keyword}"/>
      <input type="hidden" id="pinyin" value="{$pinyin}"/>
      <input type="hidden" id="sorttype" value="{$sorttype}"/>

<input type="hidden" id="attrid" value="{if $themeid&&$greatid}{$themeid}_{$greatid}{else}{if $greatid}{$greatid}{elseif $themeid}{$themeid}{elseif $attrId}{$attrId}{/if}{/if}"/>
<input type="hidden" id="page" value="1"/>
<div id ="allmap"></div>
<i id="paixu-totop" class="paixu-totop"></i>

<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script >
  wx.config({
    debug:false,
    appId: '{$signPackage["appId"]}',
    timestamp: "{$signPackage['timestamp']}",
    nonceStr: '{$signPackage["nonceStr"]}',
    signature:'{$signPackage["signature"]}',
    jsApiList:['onMenuShareTimeline','onMenuShareAppMessage']
    // 所有要调用的 API 都要加到这个列表中
  });
  wx.ready(function(){
    wx.onMenuShareTimeline({
      title: "河北旅游网",// 111
      desc: "河北哪儿好玩？上河北旅游网全知道，优惠、特惠门票，自驾游，亲子游等你来！", // 分享描述
      link: "http://www.aitto.net/phone/spots/all", // ''
      imgUrl: 'http://www.aitto.net/phone/public/images/success.png', // 分享图标
      success: function () {

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数


      }
    });
    wx.onMenuShareAppMessage({
      title: "河北旅游网", // 分享标题
      desc: "河北哪儿好玩？上河北旅游网全知道，优惠、特惠门票，自驾游，亲子游等你来！", // 分享描述
      link: "http://www.aitto.net/phone/spots/all", // 分享链接
      imgUrl: 'http://www.aitto.net/phone/public/images/success.png', // 分享图标
      type: 'link', // 分享类型,music、video或link，不填默认为link
      dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
      success: function () {
        // 用户确认分享后执行的回调函数

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });


  })
  wx.error(function(res){

    // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
    console.log(res);
  });
</script>
<script type="text/html" id="tpl_hotel_item">
  {{each list as value i}}
    {{if value.iconlist==6}}
    <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
      <div class="actbox_img">
        <img src="{{value.litpic}}"><span class="tip">抢购</span></div>
      <div class="actbox_con">
        <h2>{{value.title}}</h2>
        <p class="add address" data-lng="{{value.lng}}" data-lat="{{value.lat}}">{{value.finaldestname}} <span></span></p>
        <div class="price"><i class="paymoney">{{value.price}}</i>{{if value.sellprice}}<del>{{value.sellprice}}元</del>{{/if}} <span class="Surplus">剩余{{value.stock}}</span></div>
        <div class="ptag ticke"><i class="on">门票</i><i>特惠</i>{{if value.biaoqian}}<i>{{value.biaoqian}}</i>{{/if}}</div>
      </div>
    </div>
    {{else}}
    <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
      <div class="actbox_img"><img src="{{value.litpic}}"></div>
      <div class="actbox_con">
        <h2>{{value.title}}</h2>
        <p class="add address" data-lng="{{value.lng}}" data-lat="{{value.lat}}">{{value.finaldestname}} <span></span></p>
        <div class="price"><i class="paymoney">{{value.price}}</i>
          {{if value.ticketInfo>1}}
          <i class="dw">起</i>
          {{/if}}
        </div>
        <div class="ptag ticke"><i class="on">门票</i><i>优惠</i>{{if value.biaoqian}}<i>{{value.biaoqian}}</i>{{/if}}</div>
      </div>
    </div>
    {{/if}}
  {{/each}}
</script>



<script type="text/javascript">
  var initpage = '{$page}';
  if(initpage !=  $("#page").val()){
    $("#page").val(initpage);
  }
  if(localStorage.getItem('dataHtmlticket')){
    $("#result_list").append(localStorage.getItem('dataHtmlticket'));
    loading =  localStorage.getItem('dataLoading');
    if(loading==='false'){
      loading =false;
    }
    localStorage.removeItem('dataHtmlticket');
    localStorage.removeItem('dataLoading');
  }else {

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
      if(sorttype.length==''){sorttype=0;}

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

   $("#paixu-totop").click(function(){
       $("#paixu-totop").css("display","none");
      $(".sort-box").css("display","block");
   })
   $(".close").click(function(){
     $(".sort-box").css("display","none");
     $("#paixu-totop").css("display","block");

   })
   function paixu(th){
      var sorttype = $(th).attr("data-sorttype");

     window.location.href= "/phone/spot/list?pinyin={$pinyin}&themeid={$themeid}&greatid={$greatid}&keyword={$keyword}&sorttype="+sorttype
   }

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