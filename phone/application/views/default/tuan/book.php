<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>充值1元可获5元话费</title>
    <link rel="stylesheet" type="text/css" href="/res/css/phone/global.css" />
    <!-- css库 -->
    <link rel="stylesheet" type="text/css" href="/res/css/phone/active.css" />
    <!-- 全局 CSS 文件 -->
    <script type="text/javascript">
        var SITEURL = "{URL::site()}";
    </script>
</head>
<body style="background:no-repeat bottom #fae6c7; ">
<div class="mb5"><img src="/res/images/phone/active01.png" width="100%"></div>
<form action="{$cmsurl}tuan/create" id="orderfrm" method="post">
    <input type="hidden" id="linkman" name="linkman" value="1元充5元话费"/>
    <input type="hidden" id="linktel" name="linktel" />
    <input type="hidden" name="dingnum" value="1"/>
    <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
    <input type="hidden" id="storage" value="{$info['totalnum']}"/>
    <input type="hidden" name="usejifen" id="usejifen" value="0"/>
</form>
<div class="active-input">
    <form id="form-mobile">
    <ul>
        {if $info['totalnum'] < 1}
        <li>
            <div class="button"><a href="javascript:;" class="button-off">活动结束，下期即将开始</a></div>
        </li>
        {else}
        {if empty($userinfo['mid'])}
        <li>
            <div class="active-int">
                <input type="tel" id="phone" name="user"  placeholder="请输入您的手机号码"/>
            </div>
        </li>
        <li>
            <div class="active-int">
                <div class="active-int2 fl">
                    <input name="msg" type="tel" placeholder="输入验证码" />
                </div>
                <div class="active-int3 fr"><a id="resend" do-send="true">获取验证码</a></div>
                <div class="cl"></div>
            </div>
        </li>
        {else}
        <li>
            <div class="active-int">
                <input type="tel" id="phone" value="{$member['mobile']}" name="user" readonly/>
            </div>
        </li>
        {/if}
        <li>
                {if empty($member)}
                <div class="button"><a href="javascript:;" class="submit_btn">抢话费</a></div>
                {else}
                    {if $isBuy == 1}
                     <div class="button"><a href="/phone/member/order/list">查看订单（未付款）</a></div>
                    {elseif $isBuy == 2}
                        <div class="button"><a href="/phone/member/order/list">查看订单</a></div>
                    {else}
                        <div class="button"><a href="javascript:;" class="login_btn">抢话费</a></div>
                    {/if}
                {/if}

        </li>
        {/if}
        <li>
            <div class="button1"><a href="javascript:;" class="btn_active2">分享给好友</a></div>
        </li>

    </ul>
    <!-- 隐藏于密码-->
    <input type="hidden" value="<?php echo rand(100000,999999);?>" name="pwd"/>
    </form>
</div>
<div class="active-info">
    <h3>活动说明</h3>
    <p>1、点击“抢话费”充值1元即可获5元话费<br>
2、仅限2000名额，先到先得<br>
3、每个手机号限参加一次活动<br>
4、充值后话费将在3个工作日内到账<br>
5、客服电话：87885822<br>
超值体验：<br>
5月8日紫云山自驾一日游 30元/人(含餐)<br>
可在公众微信号底部菜单查询活动详情。<br>
 </p>
</div>
<div class="active-box1">
    <div class="login51">
        <div class="p20">
            <p id="warn">您好,一个用户只能充值一次哦!</p>
            <div class="close"><a href="#">确认</a></div>
        </div>
    </div>
</div>
<div class="active-box2"> <img src="/res/images/phone/active03.png" width="100%">
    <div class="close1"><a href="#"><img src="/res/images/phone/active04.png" width="100%"></a></div>
</div>
{php echo Common::js('jquery.min.js,common.js,jquery.validate.min.js,layer/layer.m.js');}
<script type="text/javascript">
    $(document).ready(function () {
        var timeout = false;
        //验证
        $('#resend').click(function () {
            var bool = $(this).attr('do-send');
            var node = this;
            timeout = false;
            if (bool === 'true') {
                count_down(60);
                //发送验证码
                $.post(SITEURL+'member/register/ajax_send_message', {'phone': $('#phone').val()}, function (bool) {
                    $('#form-mobile').find('.error_txt:eq(0)').html('');
                    if (bool != 1) {
                        if(bool == '账号已存在'){
                            var message = '该账号已购买话费';
                        }else{
                            var message = bool == 0 ? '发送失败，稍后在试' : bool;
                        }
                        $('#warn').html(message);
                        $('.active-box1').show();
                        timeout = true;
                        $('#resend').attr('do-send', 'true').addClass('cursor').html('获取验证码');
                    }else{
                       // count_down(60);
                    }
                    return false;
                }, 'text')

            }
        });
        function count_down(v) {
            if(timeout) return;
            if (v > 0) {
                $('#resend').html(--v+'秒后');
                $('#resend').attr('do-send','false').removeClass('cursor');
                setTimeout(function () {
                    count_down(v);
                }, 1000);
            }
            else {
                $('#resend').attr('do-send', 'true').addClass('cursor').html('重新获取验证码');
            }
        }
        //登陆提交
        $('.login_btn').click(function(){
            $('#linktel').val($('#phone').val());
            $('#orderfrm').submit();
        });
        //注册提交
        $('.submit_btn').click(function(){
            var node=$('#form-mobile');
            if(node.valid()){
                var data={};
                node.find('input').each(function(){
                    if($(this).attr('type')!='button'){
                        data[$(this).attr('name')]=$(this).val();
                    }
                });
                $.post(SITEURL+'member/register/ajax_reg',data,function(rs){
                    if(parseInt(rs.status)<1){
                        $('#warn').html(rs.msg);
                        $('.active-box1').show();
                    }else{
                        $('#linktel').val($('#phone').val());
                        $('#orderfrm').submit();
                    }
                },'json');
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
/*
        $('.btn_active1').click(function(){
            $('.active-box1').show();
        });
*/

        $('.close a').click(function(){
            $('.active-box1').hide();
        });
    });

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.btn_active2').click(function(){
            $('.active-box2').show();
        });

        $('.close1 a').click(function(){
            $('.active-box2').hide();
        });
    });

</script>
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
            title: "手机话费充1元=5元",// 111
            desc: "河北旅游网（河北青年报旗下网站）", // 分享描述
            link: "http://www.aitto.net/phone/tuan/book/id/3", // ''
            imgUrl: 'http://www.aitto.net/image/111.jpg', // 分享图标
            success: function () {

            },
            cancel: function () {
                // 用户取消分享后执行的回调函数

            }
        });
        wx.onMenuShareAppMessage({
            title: "手机话费充1元=5元", // 分享标题
            desc: "河北旅游网（河北青年报旗下网站）", // 分享描述
            link: "http://www.aitto.net/phone/tuan/book/id/3", // 分享链接
            imgUrl: 'http://www.aitto.net/image/123.png', // 分享图标
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
</body>
</html>
