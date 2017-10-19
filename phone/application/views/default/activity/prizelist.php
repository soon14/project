<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>奖品列表</title>
  {Common::css('activity/bootstrap-min.css,activity/public.css,activity/activity-Join.css,activity/activity-Gift.css')}
  {Common::js('jquery.min.js,amazeui.js,template.js,strategy9-1.js')}
  <script type="text/javascript">
    var SITEURL = "{URL::site()}";
  </script>
  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?f968b43cd6404299f54d25d87c3bbe3a";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>

</head>
<body style="background:#fdecd2">
<section>
  <div id="tabs-001">
    <ul class="tabs tab-nav">
      <li ><a href="javascript:void(0)">兑换榜单</a></li>
      <li class="current"><a href="javascript:void(0)">礼物列表</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane">
        <div class="exchange">

          <ul id ="result_list">

          </ul>
        </div>
      </div>
      <div class="tab-pane active">
        <div class="exchange1">

          <ul>
            {loop $plist $k $list}
            <a href="/phone/activity/prizeshow_{$list['id']}.html">
            <li>
              <div class="join-gift">奖品{$k+1}</div>
              <div class="join-btn"><img src="/phone/public/images/activity/but01.png" width="95%"></div>
              <div class="join-box-m">
                <div class="join-box-m-l"><img src="{$list['pic']}"></div>
                <div class="join-box-m-r">
                  <p class="join-name">{$list['name']}</p>
                  <p class="join-price">市场价值<span>&yen;{$list['price']}</span>元</p>
                  <p>
                  <div class="join-l">奖品数:{$list['allnum']}</div>
                  <div class="join-r">剩余:{$list['num']}</div>
                  </p>
                </div>
                <div class="clearfix"></div>
              </div>
            </li>
            </a>
            {/loop}
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="none-box"></div>
<div class="footer">
  <ul>
    <li><a href="/phone/activity/index"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>
    <li><a href="/phone/activity/prizelist"><span class="ui-icon ico01"></span><span class="ui-txt">礼品</span></a></li>
    <li><a href="/phone/activity/rank" class="last-child"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>
  </ul>
</div>
<input type="hidden" id="page" value="1"/>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: '{$signPackage["appId"]}',
    timestamp: "{$signPackage['timestamp']}",
    nonceStr: '{$signPackage["nonceStr"]}',
    signature:'{$signPackage["signature"]}',
    jsApiList:['onMenuShareTimeline','onMenuShareAppMessage']
    // 所有要调用的 API 都要加到这个列表中
  });
  wx.ready(function(){
    wx.onMenuShareTimeline({
      title: "集“游”票兑奖品 带着它们去旅行",// 111
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
      link: "http://www.aitto.net/phone/activity/index", // ''
      imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
      success: function () {

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });
    wx.onMenuShareAppMessage({
      title: "集“游”票兑奖品 带着它们去旅行", // 分享标题
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
      link: "http://www.aitto.net/phone/activity/index", // 分享链接
      imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
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
</script>
<script src="/phone/public/js/activity/jquery-1.11.3.min.js"></script><!-- jQuery库 -->


<script src="/phone/public/js/activity/activity-Gift.js"></script><!-- jQuery库 -->
<script type="text/html" id="tpl_article_list">
  {{each list as value i}}
  <a href ="/phone/activity/show_{{value.id}}.html">
  <li>
    <div class="num">
      <div class="num-cicle">{{value.id}}</div>
    </div>
    <div class="peo"><img src="{{value.userpic}}"></div>
    <div class="txt">
      <p>{{value.username}}</p>
      <p>兑换了【{{value.product}}】</p>
      <p>{{value.exchange_time}}</p>
    </div>
    <div class="clearfix"></div>
  </li>
    </a>
  {{/each}}
</script>

<script>


  var loading = false;//用于限制
  $(function () {
    var s='first';

    get_data(s);
  })
  $(window).scroll(function(){
    // 当滚动到最底部以上100像素时， 加载新内容
    var scorllTop = $(this).scrollTop() + 100;
    var scorllHeight = $(document).height();
    var windowHeight = $(this).height();
    if (scorllTop + windowHeight > scorllHeight) {
      if(!loading){
        get_data();
      }
      // get_data();
    }
  });
  //获取list地址

  //ajax获取数据

  function get_data(s)
  {
    loading = true;
    if(s=='first'){
      var page =1;
    }else{
      var page = Number($("#page").val());
    }
    var url = '/phone/activity/ajax_getexchangeman';

    $.getJSON(url,{page:page},function(data){

      if (data.list.length > 0) {
        var itemHtml = template('tpl_article_list', data);

        $("#result_list").append(itemHtml);

      }
      //设置分页

      if (data.page != '-1') {
        $("#page").val(data.page);
        loading = false;
      } else {

        loading = true;
      }
    });
  }

</script>

</body>
</html>
