<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>自驾游</title>
  <!-- 基础框架 bootstrap CSS 文件 -->
  <link rel="stylesheet" type="text/css" href="/phone/public/css/index/bootstrap.css" />
  <!-- 页面公用 public CSS 文件 -->
  <link rel="stylesheet" type="text/css" href="/phone/public/css/index/public.css" />
  <!-- 布局版面 layout CSS 文件-->
  <link rel="stylesheet" type="text/css" href="/phone/public/css/line/HB_SelfDriving.css"/>
  {Common::js('jquery.min.js,amazeui.js,template.js')}
</head>
<body class="indexPage">

<!-- HB-商城 头部 -->
<header id="HB_header">
  {request "pub/header3/typeid/$typeid"}
</header>
<script>
  $(document).ready(function() {
    putToper();
  });
</script>
<!-- 米淘首页 产品列表 -->
<section class="HB-actList" id="result_list">


</section>
<!-- 米淘页面 置顶按钮 -->
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="{$page}"/>
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
      link: "http://www.aitto.net/phone/lines/all", // ''
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
      link: "http://www.aitto.net/phone/lines/all", // 分享链接
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
    <div class="HB-actList-box" data-url="{{value.url}}"  onclick="toShow(this)">
      <div class="actImg">
        <img src="{{value.newlitpic}}">
        {{if value.cha_time>0}}
        <i class="joincnt past">已过期</i>
        {{else}}
        <i class="joincnt">正在进行</i>
        {{/if}}


        <h2><span>{{value.title}}</span></h2>
      </div>
      <div class="actCon">
        <ul class="clearfix">
          <li>
            <p><span class="price"><i>{{if value.price}}{{value.price}}{{else}}{{value.storeprice}}{{/if}}</i></span><span>费用</span></p>
          </li>
          <li>
            <p><span>{{value.selfDriMdd}}</span><span>地点</span></p>
          </li>
          <li>
            <p><span>{{value.linedate}}</span><span>自驾时间</span></p>
          </li>
        </ul>
      </div>
    </div>
  {{/each}}
</script>
{Common::js('layer/layer.m.js')}

<script>
  if(localStorage.getItem('dataHtmlline')){
    $("#result_list").append(localStorage.getItem('dataHtmlline'));
    loading =  localStorage.getItem('dataLoading');
    if(loading==='false'){
      loading =false;
    }
    localStorage.removeItem('dataHtmlline');
    localStorage.removeItem('dataLoading');
  }else {
    var loading = false;//用于限制
    //初始页码
    $(function () {

      //第一次加载数据
      get_data();
    })
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
    // var url = $("#destpy").val();
    var url = "all";
    //获取dayid
    //var dayid = $("#dayid").val();
    var dayid = 0;
    //获取priceid
    // var priceid = $("#priceid").val();
    var priceid = 0;
    //startcityid
    //var startcityid = $("#startcityid").val();
    var startcityid = 0;
    //获取选中的属性

    var attrid = 0;
    //排序规则
    //var sorttype = $("#sorttype").val();
    var sorttype = 0;
    //搜索名称
    var keyword = $('#keyword').val();
    //当前页 page
    var page = $("#page").val();
    //alert(page);
    keyword = keyword == '' ? 0 : keyword;

    url += '-' + dayid + '-' + priceid + '-' + sorttype + '-0-' + startcityid + '-' + attrid + '-' + page;
    if (keyword != 0) {
      url += '?keyword=' + keyword;
    }
    return url;
  }

  //ajax获取数据
  var contentNum = 0;
  function get_data() {
    loading = true;
    var paramUrl = get_url();
    // alert(paramUrl);
    var url = SITEURL + 'line/ajax_line_more/' + paramUrl;

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
       // $("#btn_getmore").hide();
        loading = true;
      }
      //设置内内容显示
      if (contentNum == 0) {
        $('#list-content').hide();
        $("#no-content").show();
      }
      layer.closeAll();
    })
  }

  function toShow(th){
    var  url  = $(th).attr('data-url');
    var  html = $("#result_list").html();
    localStorage.setItem('dataHtmlline', html);
    localStorage.setItem('dataLoading', loading);
    // console.log(localStorage.getItem('dataLoading'));
    location.href = url;
  }
</script>

</body>
</html>
{Common::js('mitao/mitao_v1_1.js')}