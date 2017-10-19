<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>儿童节答题赢大奖</title>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link type="text/css" href="/phone/api/askanswer/css/style.css" rel="stylesheet">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="browsermode" content="application"/>
    <style>
        #J_game_end{
            display:none;
        }
    </style>
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
<body>

<div class="section" id="J_game">
    <div class="hdgz">
        <h2>排名规则：</h2>
        <p>1、关注后参与答题，首次拥有3次答题机会，共9次；</p>
        <p>   2、答错题目，当次成绩作废，您可以选择提前结束答题保存当前成绩；</p>
        <p>   3、获奖名次，按答对题目数量和用时进行排名；</p>
        <p>   4、答对题目数量和用时一样，按答题时间排名。</p>
    </div>
    <div class="bd">
        <h2 class="phb-bt"><img src="http://ceshi.chejiache.com/weixin/askanswer/images/basic/phb.png" width="100%"></h2>
        <ul class="phlb">
            {loop $list $key $value}
            <li>
                <div class="tx"><img src="{$value['headimgurl']}" width="100%"></div>
                <div class="nr">
                    <p class="mc">{$value['ChatNick']}<span><?php echo date('Y-m-d H:i:s',$value['ctime']); ?></span></p>
                    <p class="dtqk">答对了<span>{$value['rightnum']}</span>个题目，用时<span>{$value['usetime']}</span>秒</p>
                </div>
                <p class="pm1">{$key+1}</p>
                <div class="clear"></div>
            </li>
            {/loop}
        </ul>
        <br/>
    </div>
</div>
<footer style="position: fixed;" id="J_footer" class="footer">
    <ul>
        <li class="width25"><a href="http://www.aitto.net/phone/tuan/book/id/3?test="<? echo time();?>>答题</a></li>
        <li class="width25"><a href="http://www.aitto.net/phone/tuan/all">排行榜</a></li>
        <li class="width25"><a href="http://www.aitto.net/phone/tuan" >我的成绩</a></li>
        <li class="width25"><a href="http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100000309&idx=1&sn=1ff1ec8ea0861d3e4c6781be3d980e5b#rd">活动奖品</a></li>
    </ul>
</footer>
<div class="share-popup" id="J_share_popup" style="z-index:98;"></div>
<div class="share-popup-tips" id="J_share_popup_t" style="z-index:99;">
    <i></i>
    <span id="J_share_cont">分享到朋友圈</span>
</div>
{php echo Common::js('jquery.min.js');}
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    var share_p = '一起过6.1，小学题目你会做几道？做题还能赢儿童滑板车哦';
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
                        window.location.href="http://www.aitto.net/phone/tuan/book/id/3";
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
            desc: share_p, // 分享描述
            link: "http://www.chejiache.com/1.php", // 分享链接
            imgUrl: 'http://www.aitto.net/image/fenxiang.png', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
                //增加次数
                /*                $.post(SITEURL+'tuan/ajax_tuan_data', {}, function (bool) {
                 if(bool == 1){
                 alert('分享未成功，请重新操作');
                 window.location.href="http://www.aitto.net/phone/tuan/book/id/3";
                 }else{
                 window.location.href="http://www.aitto.net/phone/tuan/book/id/3";
                 }
                 }, 'text')*/
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });


    })
</script>
</body>
</html>
