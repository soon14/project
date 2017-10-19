<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>找回密码-{$webname}</title>

    {Common::css('user.css,base.css,extend.css')}

    {include "pub/varname"}
    {Common::css('common/bootstrap-min.css,common/public.css')}
    {Common::js('jquery.min.js,base.js,common.js,jquery.validate.js,jquery.validate.addcheck.js,jquery.cookie.js')}

</head>



<body>



{request "pub/header"}



<div class="getback-pw-box">

    <div class="getback-pw-con">

        <div class="getback-pw-tit">找回密码</div>

        <div class="getback-pw-step">

            <span class="on"><i>1</i><em>验证身份</em></span>

            <span class="on"><i>2</i><em>重置密码</em></span>

            <span ><i>3</i><em>完成</em></span>

        </div>

        <div class="reg-cont-box">



            <form id="findfrm" method="post" action="{$cmsurl}member/findpwd/step3">

                <ul>

                    <li>

                        <span class="bt-sp">帐号：</span>

                        <span class="getback-name">{$account}</span>

                    </li>

                    <li>

                        <span class="bt-sp" style="width: 95px">动态验证码：</span>

                        <input type="text" id="msgcode" name="msgcode" class="reg-text w105" />

                        <input type="button" class="reg-get-pw sendmsg" value="获取验证码">

                        <span class="msg_contain"></span>

                    </li>

                    <li>

                        <span class="bt-sp" style="width: 95px">设置新密码：</span>

                        <input type="password" id="password1" name="password1" class="reg-text w230" placeholder="请输入登录密码" />

                        <span class="msg_contain"></span>

                        <span class="complex_contain"></span>



                    </li>

                    <li>

                        <span class="bt-sp" style="width: 95px">确认新密码：</span>

                        <input type="password" id="password2" name="password2" class="reg-text w230" placeholder="请输入登录密码" />

                        <span class="msg_contain"></span>



                    </li>

                </ul>

                <div class="now-reg-btn"><a href="javascript:;">下一步</a></div>

                <input type="hidden" name="frmcode" value="{$frmcode}"/>

                <input type="hidden" name="isphone" value="{$isphone}"/>

                <input type="hidden" name="loginname" id="loginname" value="{$loginname}"/>



            </form>

            <script>

                $(function(){

                    $('.now-reg-btn').click(function(){

                        $('#findfrm').submit();
                    })

                    //发送验证码

                    $('.sendmsg').click(function(){

                        var loginname = $("#loginname").val();
                        var t=this;
                        t.disabled=true;

                        var token = "{$frmcode}";//为 MD5（time（））；

                        var url = SITEURL+'member/findpwd/ajax_send_code';

                        $.post(url,{loginname:loginname,token:token},function(data) {

                            if(data.status)

                            {

                                var t=this;

                                t.disabled=true;

                                code_timeout(60);

                                return false;
                            }

                            else

                            {

                               t.disabled=false;

                                layer.alert(data.msg,{icon:5});

                                return false;

                            }

                        },'json');

                    })

                    $("#findfrm").validate({

                        rules: {

                            'password1': {

                                required: true,

                                minlength: 6

                            },

                            'password2': {

                                required: true,

                                equalTo: '#password1'

                            },

                            'msgcode':{

                                required:true,

                                remote:{

                                    url: SITEURL+'member/findpwd/ajax_check_code',

                                    type: 'post',

                                    data: {

                                        loginname: function() {

                                            return $( "#loginname" ).val();

                                        }

                                    }

                                }

                            }

                        },

                        messages: {

                            'password1':{

                                required:'请填写新密码',

                                minlength:'密码不得小于6位'

                            },

                            'password2':{

                                required:'密码前后不一致',

                                equalTo:'密码前后不一致'

                            },

                            'msgcode':{

                                required:'动态验证码不能为空',

                                remote:'动态验证码错误'

                            }

                        },

                        errorPlacement: function (error, element) {

                            $(element).parents('li:first').find('.msg_contain').html(error);

                            $(element).parents('li:first').find('.msg_contain').addClass('reg-error-txt').removeClass('reg-pass-ico');

                        },

                        success: function (msg, element) {

                            $(element).parents('li:first').find('.msg_contain').html('');

                            $(element).parents('li:first').find('.msg_contain').addClass('reg-pass-ico').removeClass('reg-error-txt');

                            if($(element).is('#password1')){

                                set_pwd_safe('#findfrm','#password1');

                            }

                        },

                        onkeyup:function(element,event)

                        {

                            set_pwd_safe('#findfrm','#password1');

                            $(element).valid();

                        }
                    });

                })

                //密码强度

                function set_pwd_safe(pselector,selector){

                    var pwd=$(pselector+' '+selector).val();

                    var pattern_1=/^[0-9]*$/i;

                    var pattern_2=/[a-z0-9]+/i;

                    var obj = $(pselector).find('.complex_contain');

                    var html = '';

                    //弱

                    if(pattern_1.test(pwd)&&pwd.length<8)

                    {
                        html = "<span class='reg-pw-intensity ruo'>弱</span>";

                        obj.html(html);

                        return false;

                    }

                    //中

                    if(pattern_1.test(pwd)&&pwd.length>=8)

                    {
                        html = "<span class='reg-pw-intensity zhong'>中</span>";

                        obj.html(html);

                        return false;

                    }

                    //高

                    if(pattern_2.test(pwd)&&pwd.length>=8)

                    {

                        html = "<span class='reg-pw-intensity gao'>高</span>";

                        obj.html(html);

                        return false;

                    }

                }

                //短信发送倒计时

                function code_timeout(v){

                    if(v>0)

                    {

                        $('.sendmsg').val((--v)+'秒后重发');

                        setTimeout(function(){

                            code_timeout(v)

                        },1000);

                    }

                    else

                    {

                        $('.sendmsg').val('重发验证码');

                        $('.sendmsg').disabled = false;

                    }

                }

            </script>
        </div>

    </div>

</div><!-- 找回密码 -->



{request "pub/footer"}



</body>

</html>

