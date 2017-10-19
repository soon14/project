<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>亲子游</title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_v1_1.css')}
  {Common::js('jquery.min.js,amazeui.js,template.js')}
  {Common::js('mitao/jquery-1.11.3.min.js,mitao/mitao_v1_1.js')}
  <script>
    $(document).ready(function() {
      putToper();

    });
  </script>
</head>
<body class="indexPage">

{request "pub/header2/typeid/$typeid"}
<!-- 米淘首页 幻灯 -->
<!--div class="banner"><img src="/phone/public/images/mitao/banner.jpg"></div-->
<!-- 米淘首页 产品列表 -->
<section id="result_list" style="margin-top: 10px">
<!--  <div class="mt-module-title">-->
<!--    <div class="place"></div>-->
<!--    <h1>亲子活动</h1>-->
<!--  </div>-->
</section>

<script type="text/html" id="tpl_hotel_item">
  {{each list as value i}}
  <div class="mt-actList-box" onclick="window.location.href='{{value.url}}'">
    <div class="actImg"><img src="{{value.litpic}}">
      <div class="price"> <i class="paymoney">{{value.price}}</i><i class="dw">起</i> </div>
      <i class="joincnt">{{if value.cha_time>0}}已过期{{else}}{{value.sellnum}}人购买{{/if}}</i> </div>
    <div class="actCon">
      <h2>{{value.title}}</h2>
      <p>{{value.sellpoint}}</p>
      <div class="ptag">{{if value.attrname1}}<i>{{value.attrname1}}</i>{{/if}}<i>{{value.desfinal}}</i>{{if value.attrname2}}<i>{{value.attrname2}}</i>{{/if}}</div>
    </div>
  </div>
  {{/each}}
</script>
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="{$page}"/>
<!-- 米淘页面 置顶按钮 -->
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
      link: "http://www.aitto.net/phone/mitaos/all", // ''
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
      link: "http://www.aitto.net/phone/mitaos/all", // 分享链接
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
{Common::js('layer/layer.m.js')}

<script>
  //初始页码
  $(function () {
    //获取更新数据
    $('#btn_getmore').click(function () {
      get_data();
    });
    //第一次加载数据
    get_data();
  })

  //获取list地址
  function get_url() {
    //获取选中的目的地

    var url = "all";
    //获取dayid

    var dayid = 0;
    //获取priceid

    var priceid = 0;
    //startcityid

    var startcityid = 0;
    //获取选中的属性

    var attrid = 0;
    //排序规则

    var sorttype = 0;
    //搜索名称
    var keyword = $('#keyword').val();
    //当前页 page
    var page = $("#page").val();

    keyword = 0;

    url += '-' + dayid + '-' + priceid + '-' + sorttype + '-0-' + startcityid + '-' + attrid + '-' + page;
    if (keyword != 0) {
      url += '?keyword=' + keyword;
    }
    return url;
  }

  //ajax获取数据
  var contentNum = 0;
  function get_data() {
    var paramUrl = get_url();
    // alert(paramUrl);
    var url ='/phone/mitao/ajax_line_more/' + paramUrl;

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
      } else {
        $("#btn_getmore").hide();
      }
      //设置内内容显示
      if (contentNum == 0) {
        $('#list-content').hide();
        $("#no-content").show();
      }
      layer.closeAll();
    })
  }
</script>

</body>
</html>
