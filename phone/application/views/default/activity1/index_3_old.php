<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta id="viewport" name="viewport" content="width=540,user-scalable=no">
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
                title: "攒“游”票兑奖品 带着它们去旅行",// 111
                desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
                link: "http://www.aitto.net/phone/activity/index", // ''
                imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
                success: function () {
                    var  data ={openid:openid,thatpage:thatpage,share_type:1};
                    $.ajax({
                        type:post,
                        url :url,
                        data:data,
                        success:function(data){
                            alert(data);
                        }
                    })
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
                    var  data ={openid:openid,thatpage:thatpage,share_type:1};
                    $.ajax({
                        type:post,
                        url :url,
                        data:data,
                        success:function(data){
                            alert(data);
                        }
                    })
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });


        })
    </script>
    <script data-main="js/main" src="require.js"></script>
    <script  src="/phone/public/js/jquery-1.11.3.min.js"></script>
    <title>一个都不能死</title>
    <style type="text/css">
        body{
            margin:0px;
            padding:0px;
            overflow: hidden;
        }
    </style>

    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="main" src="main.js"></script>
    <script>
        var mebtnopenurl = 'http://mp.weixin.qq.com/s?__biz=MzA5NTMzMTgxMg==&mid=200040545&idx=1&sn=429ecbe3ae11cb5c7ad65a35a9a60be7#rd';
        window.shareData = {
            "imgUrl": "http://www.wenzhangku.com/weixin/bunengsi/460.jpg",
            "timeLineLink": "http://www.wenzhangku.com/weixin/bunengsi/",
            "tTitle": "一个都不能死",
            "tContent": "玩起来怎么都停不下来的啊！"
        };


        function dp_submitScore(m,t){
        }

        function dp_Ranking(){
            window.location=mebtnopenurl;
        }
        function showAd(){
        }
        function hideAd(){
        }

    </script>
</head>
<body>
<input type="hidden" name="openid" id="openid" value="{$openid}">
<div style="text-align:center;">
    <canvas id="linkScreen" width="1366" height="621" style="width: 1366px; height: 621px;">
        很遗憾，您的浏览器不支持HTML5，请使用支持HTML5的浏览器。
    </canvas>
</div>
<div id="share" style="display:none">
    <img id="logo" width="100%" src="460.jpg" style="position:absolute;top:0;left:0;">
    <img width="100%" src="http://www.wenzhangku.com/weixin/bunengsi/2000.png" style="position:absolute;top:0;left:0;display:" onClick="document.getElementById(&#39;share&#39;).style.display=&#39;none&#39;;">
</div>
</body></html>