<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />

<title></title>
{Common::css('index/bootstrap.css')}
{Common::css('index/public.css')}

{Common::css('index/HB_HotSale.css')}

{Common::css('mitao/swiper.min.css')}

{Common::js('index/jquery-1.11.3.min.js')}
{Common::js('jquery.min.js,amazeui.js,template.js')}
{Common::js('mitao/swiper.min.js')}
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
</head>
<body class="HB_HotSale">
<!-- HB-商城 头部 -->
<header id="HB_header">

  {request "pub/header3/typeid/$typeid"}

<!-- 产品详情页 幻灯 -->
<div class="HB_banner">
  
  <div class="swiper-container swiper-container-horizontal">
    <div class="swiper-wrapper">

      {st:ad action="getad" name="s_index_1"}
      {loop $data['aditems'] $v}

      <div class="swiper-slide" data-url="{$v[adlink]}"  onclick="toShow(this)"><img src="{Common::img($v['adsrc'])}" title="{$v['adname']}"></div>
      {/loop}
      {/st}
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination picnum swiper-pagination-fraction"><span class="swiper-pagination-current">4</span> / <span class="swiper-pagination-total">10</span></div>
  </div>
  <script>
   $(document).ready(function() {
	  putToper();
   });
  </script>
  <script>
    var swiper = new Swiper('.swiper-container', {
		height: 300,//你的slide高度
        pagination: '.swiper-pagination',
        paginationType: 'bullets'
    });
  </script>
</div>
<div class="HB-class-tab clearfix">
  <div class="serch-box">
    <input type="text" placeholder="输入城市名、景点名进行搜索" onfocus="search()">
  </div>
  <ul>
    <li><a href="javascript:;" data-url="/phone/spots/all"  onclick="toShow(this)"><img src="/phone/public/images/index/active01.jpg"></a></li>
    <li><a href="javascript:;" data-url="/phone/mitaos/all"  onclick="toShow(this)"><img src="/phone/public/images/index/active02.jpg"></a></li>
    <li><a href="javascript:;" data-url="/phone/lines/all"  onclick="toShow(this)"><img src="/phone/public/images/index/active03.jpg"></a></li>
  </ul>
</div>
</header>
<!-- HB-商城 热门推荐 -->
<div class="HB-title-top">热门推荐<span>HOT</span></div>
<section class="ui-SelfDriving-list" id="result_list">


</section>
<div class="no-content" id="no-content" style="text-align: center; display:none; ">
  <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="80%"/>
  <p>啊哦，暂时没有相关信息</p>
</div>
<div id ="allmap"></div>
<input type="hidden" name="page" id="page" value="1"/>
<input type="hidden" name="keyword" id="keyword" value="{$keyword}"/>


<script type="text/html" id="tpl_hotel_item">
  {{each list as value i}}
  {{if value.typeid==5}}
  {{if value.iconlist==6}}
  <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
    <div class="actbox_img"><img src="{{value.litpic}}"><span class="tip">抢购</span></div>
    <div class="actbox_con">
      <h2>{{value.title}}</h2>
      <p class="add address" data-lng="{{value.lng}}" data-lat="{{value.lat}}">{{value.kindlist}}&nbsp;&nbsp;<span></span></p>
      <div class="price"><i class="paymoney">{{value.price}}</i>
        {{if value.ticketinfo>1}}
        <i class="dw">起</i>
        {{/if}}
        <del>{{value.sellprice}}元</del> <span class="Surplus">{{if value.stock}}剩余{{value.stock}}{{/if}}</span></div>
      <div class="ptag ticke"><i class="on">门票</i><i>特惠</i>{{if value.biaoqian}}<i>{{value.biaoqian}}</i>{{/if}}</div>
    </div>
  </div>
  {{else}}
  <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
    <div class="actbox_img"><img src="{{value.litpic}}"></div>
    <div class="actbox_con">
      <h2>{{value.title}}</h2>
      <p class="add address" data-lng="{{value.lng}}" data-lat="{{value.lat}}">{{value.kindlist}}&nbsp;&nbsp;<span></span></p>
      <div class="price"><i class="paymoney">{{value.price}}</i>
        {{if value.ticketinfo>1}}
        <i class="dw">起</i>
        {{/if}}
      </div>
      <div class="ptag ticke"><i class="on">门票</i><i>优惠</i>{{if value.biaoqian}}<i>{{value.biaoqian}}</i>{{/if}}</div>
    </div>
  </div>
  {{/if}}
  {{/if}}
  {{if value.typeid==106}}
  <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
    <div class="actbox_img">
      <img src="{{value.litpic}}">
      {{if value.cha_time>0}}
      <span class="tip off">已过期</span>
      {{else}}
            {{if value.now_time>value.linebefore}}
            <span class="tip off">报名已截止</span>
            {{/if}}
      {{/if}}

    </div>
    <div class="actbox_con">
      <h2>{{value.title}}</h2>
      <p class="time">活动时间：{{value.act_time}}</p>
      <div class="price">
        {{if value.price}}<i class="paymoney">{{value.price}}</i>
        {{if value.ticketinfo>1}}
        <i class="dw">起</i>
        {{/if}}
        {{/if}}</div>
      <div class="ptag qinzi"><i class="on">亲子游</i>{{if value.attrname1}}<i>{{value.attrname1}}</i>{{/if}}{{if value.attrname2}}<i>{{value.attrname2}}</i>{{/if}}</div>
    </div>
  </div>
  {{/if}}
  {{if value.typeid==1}}
  <div class="actlist clearfix" data-url="{{value.url}}"  onclick="toShow(this)">
    <div class="actbox_img">
      <img src="{{value.newlitpic}}">
      {{if value.cha_time>0}}
      <span class="tip off">已过期</span>
      {{else}}
        {{if value.now_time>value.linebefore}}
        <span class="tip off">报名已截止</span>
        {{else}}
           {{if value.stock==0}}
            <span class="tip off">名额已满</span>
           {{/if}}
        {{/if}}
      {{/if}}
    </div>
    <div class="actbox_con">
      <h2>{{value.title}}</h2>
      <p class="time">自驾时间：{{value.linedate}}</p>
      <div class="price">{{if value.price}}<i class="paymoney">{{value.price}}</i>
        {{if value.ticketinfo>1}}
        <i class="dw">起</i>
        {{/if}}
        {{else}}&nbsp;&nbsp;{{/if}}</div>
      <div class="ptag zijia">
        <i class="on">自驾游</i>
        {{each value.attrlist as va i}}
        <i>{{va.attrname}}</i>
        {{/each}}

      </div>
    </div>
  </div>
  {{/if}}
  {{/each}}
</script>
</body>
</html>


{Common::js('layer/layer.m.js')}
<script type="text/javascript">
  if(localStorage.getItem('dataHtmlindex')){
    $("#result_list").append(localStorage.getItem('dataHtmlindex'));
    loading =  localStorage.getItem('dataLoading');
    if(loading==='false'){
      loading =false;
    }
    localStorage.removeItem('dataHtmlindex');
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
      var url = 'all';
//      if(pinyin.length==0){
//        var  url ='all';
//      }else{
//        var url = pinyin;
//      }
      //获取priceid
      //var priceid = $("#priceid").val();
      var priceid =0;
      //获取选中的属性
      //var attrid =$("#attrid").val();
      var attrid =0;
      //排序规则
      //var sorttype = $("#sorttype").val();
      var  sorttype  = 0;//1是特价排序 2 价格  3是销量 4是人气 5是满意度
      //搜索名称
      var keyword = '';
      //当前页 page
      var page = 1;
      keyword = keyword == '' ? 0 : keyword;
      url += '-' + priceid + '-' + sorttype + '-0-' + attrid + '-' + page + '?keyword=' + encodeURIComponent(keyword);
      return url;
    }
    //ajax获取数据
    var contentNum = 0;
    function get_data() {
      loading = true;
      //var paramUrl = get_url();
      var page = $("#page").val();
      var keyword = $("#keyword").val();
      var url = '/phone/index/ajax_get_line_spot_mitao/?page='+page+"&keyword="+keyword;
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
          $("#btn_getmore").hide();
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
  function toShow(th){
    var  url  = $(th).attr('data-url');
    var  html = $("#result_list").html();
    localStorage.setItem('dataHtmlindex', html);
    localStorage.setItem('dataLoading', loading);
    location.href = url;
  }

  function search(){
    var  html = $("#result_list").html();
    localStorage.setItem('dataHtmlindex', html);
    localStorage.setItem('dataLoading', loading);
    window.location.href='/phone/index/search'
  }
</script>
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
      link: "http://www.aitto.net/phone/", // ''
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
      link: "http://www.aitto.net/phone/", // 分享链接
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
    }
    else {
      var geolocation = new BMap.Geolocation();
      geolocation.getCurrentPosition(function (r) {

        if (this.getStatus() == BMAP_STATUS_SUCCESS) {
          document.cookie = "status=" + this.getStatus();
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
            $(this).find('span').text("距您" + distance + " km");

          });
        }
        else {
          alert('failed' + this.getStatus());

        }
      }, {enableHighAccuracy: true, maximumAge: 30000})
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