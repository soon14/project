<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>攒“游”票兑奖品 带着它们去旅行</title>
  {Common::css('activity/bootstrap-min.css,activity/public.css,activity/activity-Join.css,activity/index.css')}
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
<body>
<header><img src="/phone/public/images/activity/header.jpg" width="100%"></header>
<section>
  <div class="container">
    <div class="join-box">
      <div class="join-peo"><img src="{$result['0']['headimgurl']}"> </div>
      <div class="join-box-b">
        <p>{$showmsg}<br>
你的“游”票{$result['0']['getpay']}</p>
          <div class="join-check"><a href="/phone/activity/show_{$result['0']['id']}.html">快去兑奖</a></div>
        <img src="/phone/public/images/activity/join-box-b.jpg" width="100%">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="join-Prize"> <img src="/phone/public/images/activity/bg_01.png" width="100%">
      <div class="join-Prize-m">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
              <a href="/phone/activity/prizeshow_1.html" prid="1"> <img src="/phone/public/images/activity/pic_02.png"> </a>
            </td>
            <td>
              <a href="/phone/activity/prizeshow_2.html" prid="2"> <img src="/phone/public/images/activity/pic_03.png"> </a>
            </td>
            <td>
              <a href="/phone/activity/prizeshow_3.html" prid="3"> <img src="/phone/public/images/activity/pic_04.png"> </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="/phone/activity/prizeshow_4.html" prid="4"> <img src="/phone/public/images/activity/pic_05.png"> </a>
            </td>
            <td>
              <img src="/phone/public/images/activity/pic_01.png">
            </td>
            <td>
              <a href="/phone/activity/prizeshow_5.html" prid="5"> <img src="/phone/public/images/activity/pic_06.png"> </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="/phone/activity/prizeshow_5.html" prid="6"> <img src="/phone/public/images/activity/pic_07.png"> </a>
            </td>
            <td>
              <a href="/phone/activity/prizeshow_7.html" prid="7"> <img src="/phone/public/images/activity/pic_08.png"> </a>
            </td>
            <td>
              <a href="/phone/activity/prizeshow_8.html" prid="8"> <img src="/phone/public/images/activity/pic_09.png"> </a>
            </td>
          </tr>
        </table>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<br/>
<!-- 代码开始 -->
<div class="baodao">
  <h2>兑换报道</h2>
  <div class="list_lh">

    <ul>
      {loop $exchangelist $value}
      <li>
        <span class="name">{$value['nickname']}</span><span class="btn_time">{$value['exchange_time']}</span><span >{$value['name']}</span ><span><em class="btn_lh">已兑换</em></span>
      </li>
      {/loop}
    </ul>
  </div>
  <!-- 代码结束 -->

<div class="footer">
  <ul>
    <li><a href="/phone/activity/index"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>
    <li><a href="/phone/activity/prizelist"><span class="ui-icon ico01"></span><span class="ui-txt">礼品</span></a></li>
    <li><a href="/phone/activity/rank" class="last-child"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>
  </ul>
</div>
<footer></footer>
</div>
<div class="none-box"></div>
<script src="/phone/public/js/activity/jquery-1.11.3.min.js"></script><!-- jQuery库 -->
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
  <script src="/phone/public/js/activity/index.js"></script>
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
      title: "攒“游”票兑奖品 带着它们去旅行",// 111
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
      title: "攒“游”票兑奖品 带着它们去旅行", // 分享标题
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
  <script>
    $(document).ready(function(){
      $('.list_lh li:even').addClass('lieven');
    })
    $(function(){
      $("div.list_lh").myScroll({
        speed:40, //数值越大，速度越慢
        rowHeight:40 //li的高度
      });
    });
  </script>
<script src="/phone/public/js/activity/activity-Join.js"></script><!-- 常用bootstrap jQuery库 -->

</body>
</html>
