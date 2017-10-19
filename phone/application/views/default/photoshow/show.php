<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$info['title']}</title>

{Common::css('photoshow/bootstrap.css')}
{Common::css('photoshow/public.css')}
{Common::css('photoshow/layout.css')}

{Common::js('jquery-1.11.3.min.js')}
{Common::js('photoshow/bootstrap-min.js')}

</head>
<body class="ActSpecial-index">
<!--活动 banner-->
<div class="act-banner"><img src="{$info['litpic']}"></div>

{if $info['isover']}

{else}
<a class="btn act-btn-attend">
  <img src="/phone/public/images/photoshow/act-btn-attend.png">
</a>
{/if}
<div class="act-detail">
  <h2 class="act-detail-title"><span>活动详情</span></h2>
  <div class="act-detail-cnt">
    <p class="act-detail-data">活动时间：{$info['linedate']}~{$info['timeover']}</p>
    {$info['reserved1']}
  </div>
</div>
<div class="act-prize">
  <h2 class="act-detail-title"><span>活动奖品</span></h2>
  <div class="act-prize-list clearfix">
    <ul>
      {loop $info['piclist1'] $v}
      <li><div class="act-prize-list-item"><img src="{$v[0]}"><p>{$v[1]}</p></div></li>
      {/loop}
    </ul>
  </div>
</div>
<!-- 底部导航 开始 -->

{request "pub/photoshow_footer"}

<!-- 底部导航 结束 -->
</body>
</html>
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
      title: "{$info['title']}",// 111
      desc: "{$info['sellpoint']}", // 分享描述
      link: "http://www.aitto.net/phone/photos/show_{$info['aid']}.html", // ''
      imgUrl: "http://www.aitto.net{$info['piclist'][0][0]}", // 分享图标
      success: function () {

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });
    wx.onMenuShareAppMessage({
      title: "{$info['title']}",// 111
      desc: "{$info['sellpoint']}", // 分享描述
      link: "http://www.aitto.net/phone/photos/show_{$info['aid']}.html", // ''
      imgUrl: "http://www.aitto.net{$info['piclist'][0][0]}", // 分享图标
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
    //console.log(res);
  });
</script>