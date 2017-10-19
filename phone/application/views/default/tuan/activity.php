<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>父亲节亲子分析仪</title>
    {php echo Common::css('style_fuqingjie_index.css');}
    {php echo Common::js('jquery-1.6.2.js');}
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
<body class="page-default">
<div class="wrap-default" id="page_index">
    <h1 class="act-title"><img src="/res/images/fuqingjie/title.png" alt="" width="100%"></h1>
    <p class="act-intro ddfont"> <a href="http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100000759&idx=1&sn=db1ed8e7cae05bf240c05e7e5a2a642c#rd"><img src="/res/images/fuqingjie/btn_test3.png" width="40%" /></a><br>
        这个父亲节就靠这个过了 </p>
    <div class="act-model"><img src="/res/images/fuqingjie/model.png" alt="" width="100%"></div>
    <div class="act-action"> <a href="javascript:" class="btn-half popClick" id="btn_test1"><img src="/res/images/fuqingjie/btn_test1.png" alt="" width="100%"></a> <a href="#" class="btn-half popClick" id="btn_test2"><img src="/res/images/fuqingjie/btn_test2.png" alt="" width="100%"></a> </div>
</div>
<div class="popBox">
    <div class="popCon" >
        <div style="background:#900; height:40px; line-height:40px;"><span style="float:right; margin-top:5px; margin-right:5px;"><a href="#" class="popCon" ><img src="/res/images/fuqingjie/login_reg.png" width="30" height="30" /></a></span></div>
        <div style="background:#efefef;"><img src="/res/images/fuqingjie/erwei.png" width="100%"/></div>
    </div>
</div>
<input type="hidden" name="code" id ="code" value="<?php echo $_GET['code']?>">
<input type="hidden" name="isAttion" id="isAttion" value="{$isAttion}">
</body>
</html>
<script>
    //背景透明弹出框
    $(document).ready(function(){
        // ajax_get_userOpenid();
        // $('.popBox').show();
        var isAttion = $("#isAttion").val();
        //var isAttion = 1;
        // alert("k"+isAttion+"p");
        if(isAttion!=1){
            $('.popBox').show();
        }
        $('.popClick').click(function(){
            if(isAttion!=1){
                $('.popBox').show();
            }else{
                var url ="/phone/tuan/show_3.html";
                window.location.href=url;
            }
        });
        $('.popCon').click(function(){

            $('.popBox').hide();
        });
    });
    function ajax_get_userOpenid(){
        var code = $("#code").val();
        alert(code);
//        $.ajax({
//            type:"POST",
//            url :"/api/weixin.php"
//            data:{code:code,activity:1},
//            success:function(data){
//                alert(data);
//            }
//        });
        $.ajax({
            type: "POST",
            url: "/api/weixin.php",
            data: {code:code,activity:1},
            //dataType: "json",
            success: function(data){
                alert(data);
            }
        });

    }
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
{php echo Common::js('jquery.min.js');}
<script>
    var share_p = '父亲节到了，请证明你爸是你爸！';
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