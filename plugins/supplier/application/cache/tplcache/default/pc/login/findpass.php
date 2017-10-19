<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>密码找回</title>
    <?php echo Common::css("login.css,base.css");?>
    <?php echo Common::js("jquery.min.js,jquery.validate.min.js");?>
</head>
<body>
<?php echo  Stourweb_View::template('pc/pub/login_header');  ?>
<!-- 顶部 -->
<div class="main-getback-box">
    <div class="main-con">
        <div class="getback-box">
            <div class="reg-phone-tit">密码找回</div>
            <div class="reg-phone-step">
                <div class="current-step">
                    <span class="on"><strong>身份验证</strong><i>1</i></span>
                    <span id="setp2_span"><strong>重置密码</strong><i>2</i></span>
                    <span id="setp3_span"><strong>完成</strong><i>3</i></span>
                </div>
                <div class="current-con" id="setp1_div">
                    <form id="setp1_form">
                        <ul>
                            <li>
                                <strong class="bt">手机号码：</strong>
                                <div class="msg-box">
                                    <input type="text" class="new-phone-num" name="phone" id="phone" placeholder="输入手机号码"/>
                                    <div class="error-txt" style="display: none"></div>
                                </div>
                            </li>
                            <li>
                                <strong class="bt">验证码：</strong>
                                <div class="msg-box">
                                    <input type="text" class="num-txt" name="code" id="code" placeholder="输入验证码"/>
                                    <span class="yz-num"><img id="yzm-img" src="<?php echo $cmsurl;?>captcha" onClick="this.src=this.src+'?math='+ Math.random()" ></span>
                                    <span class="change-yzm">看不清，<a style="cursor: pointer" onClick="document.getElementById('yzm-img').src=document.getElementById('yzm-img').src+'?math='+ Math.random()">换一张</a></span>
                                    <div class="error-txt" style="display: none"></div>
                                </div>
                            </li>
                            <li>
                                <strong class="bt">短信验证码：</strong>
                                <div class="msg-box">
                                    <input type="text" class="num-txt" name="smscode" id="smscode" placeholder="输入手机验证码"/>
                                    <span class="trends-ma sms-send" do-send="true">获取动态验证码</span>
                                    <div class="error-txt" style="display: none"></div>
                                </div>
                            </li>
                        </ul>
                        <div class="next-btn step1-btn"><a href="javascript:;">下一步</a></div>
                    </form>
                </div><!--第一步-->
                <div class="current-con" id="setp2_div" style=" display:none">
                    <form id="setp2_form">
                        <ul>
                            <li>
                                <strong class="bt">密码：</strong>
                                <div class="msg-box">
                                    <input type="password" class="new-phone-num" name="password1" id="password1" placeholder="请填写登录密码"/>
                                    <span class="error-txt" style="display: none"></span>
                                </div>
                            </li>
                            <li>
                                <strong class="bt">确认密码：</strong>
                                <div class="msg-box">
                                    <input type="password" class="new-phone-num" name="password2" id="password2" placeholder="再输入一次密码"/>
                                    <span class="error-txt" style="display: none"></span>
                                </div>
                            </li>
                        </ul>
                        <div class="next-btn step2-btn"><a href="javascript:;">下一步</a></div>
                        <input type="hidden" name="account" id="account">
                        <input type="hidden" name="smscode2" id="smscode2">
                        <input type="hidden" name="code2" id="code2">
                    </form>
                </div>
                <!--第二步-->
                <div class="current-con" id="setp3_div" style=" display:none">
                    <div class="success-txt"><h3>恭喜您，密码重置成功！</h3><p class="fu">请牢记您的新密码，并妥善保存，以免再次丢失造成您的不便。</p></div>
                    <div class="back-btn"><a class="now-btn" href="<?php echo $cmsurl;?>pc">去我的账户首页</a></div>
                </div>
                <!--第三步-->
            </div>
        </div>
    </div>
</div>
<?php echo Common::js("layer/layer.js");?>
<script>
    $(function(){
        function count_down(v) {
            if (v > 0) {
                $('.sms-send').html(--v  + '秒后重新发送');
                setTimeout(function () {
                    count_down(v);
                }, 1000);
            }
            else {
                $('.sms-send').attr('do-send', 'true').html('重新发送');
            }
        }
        //验证码
        $('.sms-send').click(function () {
            $("#smscode").parent().find('.error-txt').hide();
            var bool = $(this).attr('do-send');
            var node = this;
            if (bool === 'true') {
                if ($("#phone").val() != '') {
                    if ($("#code").val() != '') {
                        //发送验证码
                        $.post(SITEURL + 'pc/pub/ajax_do_code', {'code': $('#code').val()}, function (data) {
                            if (data.status == 1) {
                                //发送验证码
                                $.post(SITEURL + 'pc/pub/ajax_send_message', {'phone': $('#phone').val()}, function (bool) {
                                    if (bool != 1) {
                                        var message = bool == 0 ? '发送失败，稍后在试' : bool;
                                        $("#smscode").parent().find('.error-txt').html(message);
                                        $("#smscode").parent().find('.error-txt').show();
                                        $("#yzm-img").attr('src', $("#yzm-img").attr('src') + '?math='+ Math.random());
                                        $("#code").val('');
                                    } else {
                                        count_down(60);
                                    }
                                    return false;
                                }, 'text');
                            } else {
                                $("#code").parent().find('.error-txt').html('“验证码”错误');
                                $("#code").parent().find('.error-txt').show();
                            }
                        }, 'json')
                    }else{
                        $("#code").parent().find('.error-txt').html('“验证码”错误');
                        $("#code").parent().find('.error-txt').show();
                    }
                }else{
                    $("#phone").parent().find('.error-txt').html('“手机号码”错误');
                    $("#phone").parent().find('.error-txt').show();
                }
            }
        });
        $('#setp1_form').validate({
            rules: {
                phone: {
                    required: true,
                    mobile: true
                },
                code: {
                    required: true,
                    minlength: 4,
                },
                smscode: {
                    required: true,
                    minlength: 4
                },
            },
            messages: {
                phone: {
                    required: '“手机号码”不能为空',
                    mobile: '“手机号码”格式不正确'
                },
                code: {
                    required: '“验证码”不能为空',
                    minlength: '“验证码”不少于4位'
                },
                smscode: {
                    required: '“短信验证码”不能为空',
                    minlength: '“短信验证码”不少于4位'
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
                $.post(SITEURL + 'pc/findpass/ajax_do_setp1', {
                    'phone': $('#phone').val(),
                    'smscode': $('#smscode').val(),
                    'code': $('#code').val(),
                }, function (data) {
                    if (data.status == 1) {
                        $("#account").val($('#phone').val())
                        $("#smscode2").val($('#smscode').val())
                        $("#code2").val($('#code').val())
                        $("#setp2_span").addClass('on');
                        $("#setp1_div").hide();
                        $("#setp2_div").show();
                    }else{
                        layer.msg(data.msg, {icon:5});
                    }
                }, 'json');
                return false;
            }
        });
        //第一步
        $(".step1-btn").click(function(){
            $("#setp1_form").submit();
        });
        $('#setp2_form').validate({
            rules: {
                password1: {
                    required: true,
                    minlength: 6
                },
                password2: {
                    required: true,
                    minlength: 6
                },
            },
            messages: {
                password1: {
                    required: '“密码”不能为空',
                    minlength: '“密码”不少于6位'
                },
                password2: {
                    required: '“确认密码”不能为空',
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
                if($("#password1").val() != $("#password2").val()) {
                    layer.msg('密码前后不一致', {icon:5});
                    return false;
                }
                if($('#account').val() == ''){
                    layer.msg('“电话号码”不能为空', {icon:5},function(){
                        window.location.reload();
                    });
                }
                if($('#smscode2').val() == '' && $('#code2').val() == ''){
                    layer.msg('“验证码”不能为空', {icon:5},function(){
                        window.location.reload();
                    });
                }
                $.post(SITEURL + 'pc/findpass/ajax_do_setp2', {
                    'password': $('#password1').val(),
                    'account': $('#account').val(),
                    'smscode': $('#smscode2').val(),
                    'code': $('#code2').val(),
                }, function (data) {
                    if (data.status == 1) {
                        $("#setp3_span").addClass('on');
                        $("#setp2_div").hide();
                        $("#setp3_div").show();
                    }else{
                        layer.msg(data.msg, {icon:5});
                    }
                }, 'json');
                return false;
            }
        });
        //第一步
        $(".step2-btn").click(function(){
            $("#setp2_form").submit();
        });
    });
</script>
<?php echo  Stourweb_View::template('pc/pub/footer');  ?>
</body>
</html>
