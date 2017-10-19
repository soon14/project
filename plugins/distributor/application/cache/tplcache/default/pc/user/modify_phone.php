<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商管理系统-<?php echo $webname;?></title>
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js,jquery.validate.min.js");?>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <!-- 顶部 -->
    <?php echo  Stourweb_View::template('pc/pub/sidemenu');  ?>
    <!-- 侧边导航 -->
    <div class="main">
        <div class="content-box">
            <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
            <div class="frame-box">
                <div class="frame-con">
                    <div class="change-phone-box">
                        <div class="change-phone-tit"><strong class="bt">修改手机</strong></div>
                        <div class="change-phone-con">
                            <div class="change-phone-step">
                                <div class="current-step">
                                    <span class="on"><strong>身份验证</strong><i>1</i></span>
                                    <span id="setp2_span"><strong>绑定手机</strong><i>2</i></span>
                                    <span id="setp3_span"><strong>完成</strong><i>3</i></span>
                                </div>
                                <div class="current-con" id="setp1_div">
                                    <form id="setp1_form">
                                        <ul>
                                            <li>
                                                <strong class="bt">手机号码：</strong>
                                                <div class="msg-box"><span class="phone-num"><?php echo $data['mobile'];?></span></div>
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
                                        </ul>
                                        <div class="next-btn step1-btn"><a href="javascript:;">下一步</a></div>
                                    </form>
                                </div>
                                <!--第一步-->
                                <div class="current-con" id="setp2_div" style=" display:none">
                                    <form id="setp2_form">
                                        <ul>
                                            <li>
                                                <strong class="bt">新手机号：</strong>
                                                <div class="msg-box">
                                                    <input type="text" class="new-phone-num" name="newphone" id="newphone" placeholder="请输入新手机号"/>
                                                    <div class="error-txt" style="display: none"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <strong class="bt">手机验证码：</strong>
                                                <div class="msg-box">
                                                    <input type="text" class="num-txt" name="smscode" id="smscode" placeholder="输入手机验证码"/>
                                                    <span class="trends-ma sms-send" do-send="true">获取动态验证码</span>
                                                    <div class="error-txt" style="display: none"></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="next-btn step2-btn"><a  href="javascript:;">下一步</a></div>
                                    </form>
                                </div>
                                <!--第二步-->
                                <div class="current-con" id="setp3_div" style=" display:none">
                                    <div class="success-txt">恭喜您，手机修改成功！</div>
                                    <div class="back-home-btn"><a href="<?php echo $cmsurl;?>pc">去我的账户首页</a></div>
                                </div>
                                <!--第三步-->
                            </div>
                        </div>
                    </div>
                    <!-- 修改手机 -->
                </div>
            </div>
            <?php echo  Stourweb_View::template('pc/pub/footer');  ?>
        </div>
    </div>
    <!-- 主体内容 -->
</div>
<?php echo Common::js("layer/layer.js");?>
<script>
    $(function(){
        $("#nav_modify_phone").addClass('on');
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
                if ($("#newphone").val() != '') {
                    //发送验证码
                    $.post(SITEURL + 'pc/pub/ajax_send_message', {'phone': $("#newphone").val()}, function (bool) {
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
                }else{
                    $("#newphone").parent().find('.error-txt').html('“新手机号”格式错误');
                    $("#newphone").parent().find('.error-txt').show();
                }
            }
        });
        $('#setp1_form').validate({
            rules: {
                code: {
                    required: true,
                    minlength: 4,
                },
            },
            messages: {
                code: {
                    required: '“验证码”不少于4位',
                    minlength: '“验证码”不少于4位'
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
                //验证码
                $.post(SITEURL + 'pc/pub/ajax_do_code', {'code': $('#code').val()}, function (data) {
                    if (data.status == 1) {
                        $("#setp2_span").addClass('on');
                        $("#setp1_div").hide();
                        $("#setp2_div").show();
                    }else{
                        layer.msg('“验证码”错误', {icon:5});
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
                newphone: {
                    required: true,
                    mobile: true
                },
                smscode: {
                    required: true,
                    minlength: 4
                },
            },
            messages: {
                newphone: {
                    required: '“新手机号”不能为空',
                    mobile: '“新手机号”格式错误'
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
                $.post(SITEURL + 'pc/user/ajax_do_modify_phone_setp2', {
                    'newphone': $('#newphone').val(),
                    'smscode': $('#smscode').val(),
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
</body>
</html>
