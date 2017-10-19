<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商登陆-{$webname}</title>
    <meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {Common::css("style.css,base.css")}
    {Common::js("jquery.min.js")}

</head>
{include 'mobile/pub'}
<body>

<div class="login-page-box clearfix">
    <div class="login-page-con">
        <div class="login-page-mid">
            <div class="logo-box"><img src="{$logo}" alt="logo" /></div>
            <div class="user-account">
                <p class="zh"><i></i><input type="text" class="" id="loginname" placeholder="请输入登录账号" /></p>
                <p class="pd"><i></i><input type="password" class="" id="loginpwd" placeholder="请输入登录密码" /></p>
                <a class="login-btn" href="javascript:;">登 录</a>
                <!-- <a class="forget-pd" href="#">忘记密码？</a>-->
                <input type="hidden" id="code" value="{$code}"/>
            </div>
        </div>
    </div>
</div>
{Common::js("layer/layer.js")}
<script>
    $(function(){
        $(".login-btn").click(function(){

            var url = SITEURL + 'mobile/login/ajax_do_login';

            $.post(SITEURL + 'mobile/login/ajax_do_login', {
                'loginname': $('#loginname').val(),
                'loginpwd': $('#loginpwd').val(),
                'code': $('#code').val()
            }, function (data) {
                if (data.status == 1) {
                    layer.msg(data.msg, {
                        icon: 6,time:1000
                    }, function(){
                        localStorage.setItem('TOKEN_LOGIN', data.token);
                        window.location.href = SITEURL + 'mobile/';
                    });
                }else{

                    layer.msg(data.msg, {icon:5,time:1000});
                }
            }, 'json');
            return false;
        })

        var token = localStorage.getItem('TOKEN_LOGIN');
        $.ajax({
            type:'POST',
            url:SITEURL + 'mobile/login/ajax_logintoken_login',
            data:{token:token},
            dataType:'json',
            success:function(data){
                if(data.status==1){
                    setTimeout(function(){
                        window.location.href = SITEURL+'/mobile';
                    },200)
                }
            }

        })
    })
</script>

</body>
</html>
