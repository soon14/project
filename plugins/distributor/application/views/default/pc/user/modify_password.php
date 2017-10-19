<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商管理系统-{$webname}</title>
    {Common::css("style.css,base.css")}
    {Common::js("jquery.min.js,jquery.validate.min.js,layer/layer.js")}
</head>

<body>

<div class="page-box">
    {request 'pc/pub/header'}
    <!-- 顶部 -->

    {include 'pc/pub/sidemenu'}
    <!-- 侧边导航 -->

    <div class="main">
        <div class="content-box">

            {include "pc/pub/qualifyalert"}

            <div class="frame-box">
                <div class="frame-con">

                    <div class="change-password-box">
                        <div class="change-password-tit"><strong class="bt">修改密码</strong></div>
                        <div class="change-password-con">
                            <form id="st_form">
                                <ul>
                                    <li>
                                        <strong class="lm">当前密码：</strong>

                                        <div class="m-box">
                                            <input type="password" class="password-txt" name="oldpassword" id="oldpassword" placeholder="请输入当前账号密码"/>
                                            <span class="error-txt" style="display: none"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <strong class="lm">新密码：</strong>

                                        <div class="m-box">
                                            <input type="password" class="password-txt" name="newpassword1" id="newpassword1" placeholder="请输入新设置密码"/>
                                            <span class="error-txt" style="display: none"></span>
                                    </li>
                                    <li>
                                        <strong class="lm">确认密码：</strong>

                                        <div class="m-box">
                                            <input type="password" class="password-txt" name="newpassword2" id="newpassword2" placeholder="请再输入一次新密码"/>
                                            <span class="error-txt" style="display: none"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="pd-save-box"><a class="pd-save-btn" href="javascript:;">保存</a></div>
                            </form>
                        </div>
                    </div>
                    <!-- 修改密码 -->

                </div>
            </div>

            {template 'pc/pub/footer'}

        </div>
    </div>
    <!-- 主体内容 -->

</div>

{Common::js("layer/layer.js")}
<script>
    $(function () {
        $("#nav_modify_password").addClass('on');

        $('#st_form').validate({
            rules: {
                oldpassword: {
                    required: true,
                    minlength: 6
                },
                newpassword1: {
                    required: true,
                    minlength: 6
                },
                newpassword2: {
                    required: true,
                    minlength: 6,
                },
            },
            messages: {
                oldpassword: {
                    required: '“当前密码”不少于6位',
                    minlength: '“当前密码”不少于6位'
                },
                newpassword1: {
                    required: '“新密码”不少于6位',
                    minlength: '“新密码”不少于6位'
                },
                newpassword2: {
                    required: '“确认密码”不少于6位',
                    minlength: '“确认密码”不少于6位'
                },
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                var content =$(element).parent().find('.error-txt').html();
                if (content == '') {
                    $(element).parent().find('.error-txt').html('')
                    error.appendTo($(element).parent().find('.error-txt'));
                }
            },
            showErrors: function (errorMap, errorList) {
                if (errorList.length < 1) {
                    $('.error-txt').html('');
                    $('.error-txt').hide();
                } else {
                    $(errorList[0].element).parent().find('.error-txt').show();
                    this.defaultShowErrors();
                }
            }, submitHandler: function (form) {
                if($("#oldpassword").val() == $("#newpassword1").val()) {
                    $("#newpassword1").parent().find('.error-txt').html('“新密码”不能与“当前密码”相同');
                    $("#newpassword1").parent().find('.error-txt').show();
                    return false;
                }
                if($("#newpassword1").val() != $("#newpassword2").val()) {
                    $("#newpassword2").parent().find('.error-txt').html('密码前后不一致');
                    $("#newpassword2").parent().find('.error-txt').show();
                    return false;
                }

                $.post(SITEURL + 'pc/user/ajax_do_modify_password', {
                    'oldpassword': $('#oldpassword').val(),
                    'newpassword': $('#newpassword1').val(),
                }, function (data) {
                    if (data.status == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                        }, function(){
                            window.location.href = SITEURL + 'pc/index';
                        });
                    }else{
                        layer.msg(data.msg, {icon:5});
                    }
                }, 'json');
                return false;
            }
        });
        //第一步
        $(".pd-save-btn").click(function(){
            $("#st_form").submit();
        });
    });
</script>
</body>
</html>
