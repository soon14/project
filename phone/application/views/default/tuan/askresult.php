<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>父亲节亲子分析仪</title>
    {php echo Common::css('style_fuqingjie_index.css');}
    {php echo Common::js('jquery-1.11.3.min.js');}
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
<body class="wrap-result">
<div class="page">
    <h2 class="ddfont title">分析结果</h2>
    <div class="photo-box"> <img class="frame-bg" src="/res/images/fuqingjie/frame_bg.png" alt="" width="100%">
        <div class="photo-widget"></div>
        <div class="photo-item item-left"><img src="/res/images/fuqingjie/kong.png" width="100%"><span class="photo-img-box photo-img-box2"><img class="photo-img" id="leftPhoto"  src="{$arr[1]}" alt="" width="100%"></span></div>
        <div class="photo-item item-right"><img src="/res/images/fuqingjie/kong.png" width="100%"><span class="photo-img-box photo-img-box2"><img class="photo-img" id="rightPhoto"  src="{$arr[2]}"  alt="" width="100%"></span></div>
        <div class="result"><img class="result-bg" src="/res/images/fuqingjie/value_bg.png" alt="" width="100%"><span class="result-value"><i id="score">{$percent}</i>%</span></div>
    </div>
    <div class="result-text ddfont"> <span id="showWords" style="color:#F00; font-weight:bold;">{$name}</span> </div>
    <div class="result-action"> <a href="javascript:;" class="btn-half share-tip popClick"><img src="/res/images/fuqingjie/btn_share.png" alt="" width="100%"></a> <a href="http://www.aitto.net/phone/tuan/book/id/3" class="btn-half"><img src="/res/images/fuqingjie/btn_get.png" alt="" width="100%"></a> </div>
    <div class="ddfont result-copy">分析结果仅供娱乐</div>
    <div class="ddfont result-copy">“亲子分析仪”由河北旅游网提供技术支持</div>
</div>

<div class="popBox">
    <div class="popCon">
        <img src="/res/images/fuqingjie/fenxiagn.png" width="100%"/> </div>
</div>
<script>
    //背景透明弹出框
    $(document).ready(function(){
        $('.popClick').click(function(){
            $('.popBox').show();
        });
        $('.popCon').click(function(){
            $('.popBox').hide();
        });
    });
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
{php echo Common::js('jquery.min.js');}
<script>
    var share_p = '{$nameshare}';
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
            title: share_p,// 朋友圈
            desc: share_p, // 分享描述
            link: "http://www.chejiache.com/1.php", // ''
            imgUrl: 'http://www.aitto.net/image/fenxiang.png', // 分享图标
            success: function () {
                //增加次数
                $.post(SITEURL+'tuan/ajax_tuan_data', {}, function (bool) {
                    if(bool == 1){
                        alert('分享未成功，请重新操作');
                        window.location.href="http://www.aitto.net/phone/tuan/book/id/3?test="+parseInt(new Date().getTime()/1000);
                    }else{
                        window.location.href="http://www.aitto.net/phone/tuan/book/id/3?test="+parseInt(new Date().getTime()/1000);
                    }
                }, 'text')
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数

            }
        });
        wx.onMenuShareAppMessage({
            title: share_p, // 分享标题
            desc: share_p+"河北旅游网（河北青年报旗下网站）", // 分享描述
            link: "http://www.chejiache.com/1.php", // 分享链接
            imgUrl: 'http://www.aitto.net/image/fenxiang.png', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });


    })
</script>
</body>
</html>
