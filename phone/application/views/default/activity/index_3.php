<!DOCTYPE html>
<html>
		<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta id="viewport" name="viewport" content="width=540,user-scalable=no">

		<link rel="stylesheet" type="text/css" href="index.css" />
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
					//  1   为 分享朋友圈   2  分享 好友
					var  post = "POST";
					var  openid   = "{$openid}";
					var  thatpage =  "index";
					var  url = "/phone/activity/share";
					wx.onMenuShareTimeline({
						title: "河北旅游网双11送大礼，户外帐篷等礼品免费拿！",// 111
						desc: "河北旅游网双11送大礼，户外帐篷等礼品免费拿！", // 分享描述
						link: "http://www.aitto.net/phone/activity/index", // ''
						imgUrl: 'http://www.aitto.net/phone/activity/share_3.jpg', // 分享图标
						success: function () {
							var  data ={openid:openid,thatpage:thatpage,share_type:1};
							$.ajax({
								type:post,
								url :url,
								data:data,
								success:function(data){

								}
							})
						},
						cancel: function () {
							// 用户取消分享后执行的回调函数

						}
					});
					wx.onMenuShareAppMessage({
						title: "双11前的疯狂，拼手速免费拿户外帐篷", // 分享标题
						desc: "河北旅游网双11送大礼，户外帐篷等礼品免费拿！", // 分享描述
						link: "http://www.aitto.net/phone/activity/index", // 分享链接
						imgUrl: 'http://www.aitto.net/phone/activity/share_3.jpg', // 分享图标
						type: 'link', // 分享类型,music、video或link，不填默认为link
						dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
						success: function () {
							// 用户确认分享后执行的回调函数
							var  data ={openid:openid,thatpage:thatpage,share_type:2};
							$.ajax({
								type:post,
								url :url,
								data:data,
								success:function(data){

								}
							})
						},
						cancel: function () {
							// 用户取消分享后执行的回调函数
						}
					});


				})
			</script>
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
		<script data-main="js/main" src="require.js"></script>
		<script  src="/phone/public/js/jquery-1.11.3.min.js"></script>
		<title>双11拼手速免费拿户外奖品
		</title>

		<!--<script type="text/javascript" src="http://www.wenzhangku.com/weixin/" charset="UTF-8"></script>-->

		<script language="javascript">
		var mebtnopenurl = 'http://www.aitto.net/phone/activity/show';
		window.shareData = {
		        "imgUrl": "http://www.wenzhangku.com/weixin/bunengsi/460.jpg",
		        "timeLineLink": "http://www.wenzhangku.com/weixin/bunengsi/",
		        "tTitle": "一个都不能死",
		        "tContent": "玩起来怎么都停不下来的啊！"
		};
		
		
		function dp_submitScore(m,t){
		}
		
		function dp_share(t){
			document.title = t/1000+"秒！不行了，我都快变双重人格了！这游戏实在太虐心了！";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}

		function dp_share2(t){
			document.title = t/1000+"秒！不行了，我都快变双重人格了！这游戏实在太虐心了！";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
			window.location=mebtnopenurl;
		}

		function showAd(){
			$("div[class=gz]").css("display","block")
			$("div[class=top]").css("display","block")
		}
		function hideAd(){
		}
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		    
		    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
		        WeixinJSBridge.invoke('sendAppMessage', {
		            "img_url": window.shareData.imgUrl,
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, function(res) {
		        	document.location.href = mebtnopenurl;
		        })
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, function(res) {
		        	document.location.href = mebtnopenurl;
		        });
		    });
		}, false);
		</script>
		<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main" src="main.js"></script>
			{Common::js('activity_2/activity-Join.js')}
			{Common::css('activity_2/activity-Join.css')}
		</head>
		<body>
<div style="text-align:center;">
          <canvas id="linkScreen" width="1366" height="621" style="width: 1366px; height: 621px;"> 很遗憾，您的浏览器不支持HTML5，请使用支持HTML5的浏览器。 </canvas>
        </div>
<div id="share" style="display:none"> <img id="logo" width="100%" src="" style="position:absolute;top:0;left:0;"> <img width="100%"  src="sharenew_3.png" style="position:absolute;top:0;left:0;background-color: rgba(0,0,0,.6);display:" onClick="document.getElementById(&#39;share&#39;).style.display=&#39;none&#39;;"></div>
<div class="top"><img src="bg.png" width="100%"></div>
<div class="gz">
          <div class="gz-box">
    <div class="join-regular">

      <div class="contit">活动规则</div>
      <div class="conbox">

	<p>	  活动时间：11月3日--11月6日 17：00（结束）</p>
	<p>	  领奖时间：11月7日--11月18日 17：00</p>
	<p>	  活动规则：</p>
    <p>1、点击开始游戏，控制2个小人跳过障碍物，坚持时间越长成绩越好。</p>
    <p>2、活动时间，排行榜将记录最好成绩，排名前100位均有奖品。。</p>
    <p>3、活动结束后，获奖用户凭编号前往河北旅游网领取奖品。</p>
    <p>*成绩相同，则按时间排序</p>
      </div>
      <div class="regular-button"><a href="http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100004715&idx=1&sn=38ff6a892b3bd93af0762c8df85994fe&chksm=17df09ce20a880d85c564f2e27d5cb58f6d151c13f7c1ab4a0a8a6262e33de825890effb2758&mpshare=1&scene=23&srcid=1101jOpxkX6jpwKYw2h3sAns#rd">查看活动详情</a></div>
    </div>
  </div>
   </div>

<div class="footer1">
          <ul>
    <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/index?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico00"></span><span class="ui-txt">首页</span></a></li>
    <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/show?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico01"></span><span class="ui-txt">我的</span></a></li>
    <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/rank?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico02"></span><span class="ui-txt">排名</span></a></li>
    <li><a href="javascript:void(0)" onclick="window.location='http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100004737&idx=1&sn=d6abe0b4a9f49ee9a7f82ae9062e7cd8&chksm=17df092420a880328d8913d5a78fc7eda4c458f27181b2eda9a78507851d633f462eecebda37&mpshare=1&scene=23&srcid=1101qaUHrZYY2mBwN7sZ0l54#rd'" class="last-child"><span class="ui-icon ico03"></span><span class="ui-txt">奖品</span></a></li>
  </ul>
        </div>
<input type="hidden" name="openid" id="openid" value="{$openid}">
<div class="modal" id="DialogDiv2">
	<div class="modal-backdrop"></div>
	<div class="modal-dialog">
		<div class="modal-content2">
			<div class="modal-body"><img src="gz_3.jpg"> </div>
			<div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
		</div>
	</div>
</div>
<!-- 弹框3  分享 -->
<div class="modal" id="DialogDiv3">

	<div class="modal-backdrop"></div>
	<div class="modal-dialog">
		<div class="modal-content2" style="width:100%;">
			<div class="modal-body" style="padding: 0px"><img src="sharenew_3.png" width="100%" onclick="Cancel(this)"> </div>
			<div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
		</div>
	</div>

</div>
<div class="modal" id="DialogDiv4">
	<div class="modal-backdrop"></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">

				<div class="MsgBtns">

				</div>

			</div>
		</div>
	</div>
</div>
<div class="modal" id="DialogDiv5">
	<div class="modal-backdrop"></div>
	<div style="top: 211.5px; left: 191px;" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"><h4></h4></div>
			<div class="modal-body">
				<input class="login-text" placeholder="请输入您的手机号" id ="phone" name="phone" type="tel">
			</div>
			<div class="MsgBtns">
				<div class="MsgBtn ok" onclick="shares()" style="height: 45px;width: 100px;line-height: 45px;">确定</div>
				<div class="MsgBtn Cancel" onclick="MsgClose(this)" style="height: 45px;width: 100px;line-height: 45px;">取消</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<script>
	function MsgClose(th){
		$("#DialogDiv5").removeClass('in');
	}
	function shares(){
		$("#DialogDiv5").removeClass('in');
		var thisObjID  ="#DialogDiv3";
		$(thisObjID).addClass('in');
		var thisObjcon = $(thisObjID).children(".modal-dialog");
		thisObjcon.css({
			'top': 0,
			'left': "0px"
		});
	}
	function Cancel(th){
		var s  = $(th).parents(".modal");
		s.removeClass("in");
	}
</script>