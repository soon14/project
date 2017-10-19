<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商登陆</title>
    {Common::css("login.css,base.css")}
    {Common::js("jquery.min.js,jquery.validate.min.js")}
</head>

<body>

{template 'pc/pub/login_header'}
<!-- 顶部 -->

<div class="main-login-box">
    <div class="main-con">
        <div class="login-box">
            <div class="login-con">
                <h3>供应商登录</h3>

                <form id="st_form">
                    <div class="user-name">
                        <input type="text" class="user-zh" name="loginname" id="loginname" value="" placeholder="请输入注册手机号"/>
                        <div class="error-ts" style="display: none"></div>
                    </div>
                    <div class="user-password">
                        <input type="password" class="user-zh" name="loginpwd" id="loginpwd" value="" placeholder="请输入登录密码"/>
                    </div>
                    <div class="user-num" style="display: {if $is_code}block{else}none{/if}" >
                        <input type="text" class="user-zh" name="code" id="code" placeholder="请输入验证码"/><span class="yzm"><img id="yzm-img" src="{$cmsurl}captcha" onClick="this.src=this.src+'?math='+ Math.random()" ></span><span class="change-next" onClick="document.getElementById('yzm-img').src=document.getElementById('yzm-img').src+'?math='+ Math.random()" >换一张</span>
                    </div>

                    <div class="find-password"><a href="{$cmsurl}pc/findpass">找回密码</a></div>
                    <div class="login-btn"><a class="login-btn" href="javascript:;">登 录</a></div>
                </form>
                <div class="mf-txt">还不是注册商家，<a href="{$cmsurl}pc/register">免费注册</a></div>
            </div>
        </div>
    </div>
</div>

{template 'pc/pub/footer'}

{Common::js("layer/layer.js")}
<script>
    $(function(){
        $('#st_form').validate({
            rules: {
                loginname: {
                    required: true,
                    mobile: true
                },
                loginpwd: {
                    required: true,
                    minlength: 6
                },
                code: {
                    required: true,
                    minlength: 4,
                },
            },
            messages: {
                loginname: {
                    required: '“手机号码”不能为空',
                    mobile: '“手机号码”格式不正确'
                },
                loginpwd: {
                    required: '“密码”不能为空',
                    minlength: '“密码”最小长度为六位'
                },
                code: {
                    required: '“验证码”不能为空',
                    minlength: '“验证码”最小长度为四位'
                }
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                var content = $('#st_form').find('.error-ts:eq(0)').html();
                if (content == '') {
                    $('#st_form').find('.error-ts:eq(0)').html('');
                    error.appendTo($('#st_form').find('.error-ts:eq(0)'));
                }
            },
            showErrors: function (errorMap, errorList) {
                if (errorList.length < 1) {
                    $('#st_form').find('.error-ts:eq(0)').html('');
                    $('#st_form').find('.error-ts:eq(0)').hide();
                } else {
                    $('#st_form').find('.error-ts:eq(0)').show();
                    this.defaultShowErrors();
                }
            }, submitHandler: function (form) {
                $.post(SITEURL + 'pc/login/ajax_do_login', {
                    'loginname': $('#loginname').val(),
                    'loginpwd': $('#loginpwd').val(),
                    'code': $('#code').val()
                }, function (data) {
                    if (data.status == 1) {
                        window.location.href = SITEURL + 'pc/index';
                    }else{
                        $(".user-num").show();
                        layer.msg(data.msg, {icon:5});
                    }
                }, 'json');
                return false;
            }
        });

        $(".login-btn").click(function(){
            $("#st_form").submit();
        });

    })
</script>
</body>
</html>
