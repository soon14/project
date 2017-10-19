<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录--{$webname}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{php echo Common::css('style.css,amazeui.css,extend.css');}
<script type="text/javascript">
        var SITEURL = "{URL::site()}";
    </script>
  
<style type="text/css">
/** Tab导航 开始 **/
.tab-nav{
    border-bottom:1px solid #CCC;
	height:49px;
	margin:0;
	padding:0;	
	}	
.tab-nav li {
	display:inline-block; width:50%;
	height:50px;
	line-height:50px;

	float: left;	
}
.tab-nav li a {
	display:block;background: #fff; color:#666; text-align:center;

}
.tab-nav li a:visited {
	text-decoration: none; color:#666;
}

.tab-nav li.current>a{ display:block; background:#f3f3f3;	
    border-bottom: none;
	color:#337ab7;
	text-decoration: none;
}

/** Tab内容 开始 **/
.tab-content{ }
.tab-content>.active{
    display: block;
}
.tab-pane{display:none}
</style>

</head>

<body>
<header>
  <div class="header_top">
<!--    <div class="st_back"><a href="{$url}"></a></div>-->
    <h1 class="tit">登录</h1>
    <a class="top_user_reg" href="{$cmsurl}member/register">注册</a> </div>
</header>

<section>
  <div class="mid_content">

    <!-- tab切换内容 开始 -->
    <div id="tabs-001">
      <ul class="tabs tab-nav">
        <li class="current"><a href="#">短信快捷登录</a></li>
        <li><a href="#">账号密码登录</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active">
          <div class="st_user_box">
            <div class="st_login">
                <form id="form-mobile">
                    <div class="number_password">
                        <p><strong>账号：</strong><input type="tel" id="phone" name="user" class="" placeholder="请输入手机号"/><a
                                class="yz_num cursor" id="resend" do-send="true">获取验证码</a></p>

                        <p><strong>验证码：</strong><input type="tel" name="msg" class="" placeholder="请输入短信验证码"/></p>

                       <p style="display: none"><strong>密码：</strong><input type="password" name="pwd" class="" placeholder="请输入密码" value="<?php echo rand(111111,999999);?>"/></p>
                    </div>
                    <div class="error_txt"></div>
                    <div class="submit_btn" id="phone_button"><input type="button" value="快捷登录"/></div>
                </form>
            </div>
           </div>
        </div>
        <div class="tab-pane">
          <div class="st_user_box">
            <form id="form-submit">
                <div class="st_login">
                    <div class="number_password" id="login-content">
                        <p><strong>账号：</strong><input type="tel" id="type" class="" name="user" placeholder="手机" /></p>
                        <p><strong>密码：</strong><input type="password" name="pwd" class="" placeholder="请输入密码" /><!--<a href="{$cmsurl}member/find">忘记密码</a>--></p>
                        {if !$one}
                        <p><strong>验证码：</strong><input type="text" name="code" class="" placeholder="请填写验证码" /><img class="yzm_pic cursor captcha" id="captcha" src="" height="30" /></p>
                        {/if}
                    </div>

                    <div class="error_txt" id="error_txt"></div>

                    <div class="submit_btn" id="submit_btn"><input type="button" value="登录" /></div>
                    <a href="/phone/member/find" style="float: right;margin-top: 3px;padding-right: 10px">密码找回</a>

                </div>
            </form>
<!--            {request 'member/login/third'}-->
          </div>
        </div>
      </div>
    </div>
    <!-- tab切换内容 结束 --> 
    
  </div>

    <input  type="hidden" id="reurl" name="reurl" value="{$reurl}">
</section>

</body>
{php echo Common::js('jquery.min.js,common.js,jquery.validate.min.js,layer/layer.m.js');}
<script type="text/javascript">
    //  账号密码 登录
    $(document).ready(function(){
        $('.captcha').attr('src',ST.captcha(SITEURL+'captcha'));
        $('.captcha').click(function(){
            $(this).attr('src',ST.captcha($(this).attr('src')));
        });
        //验证
        $('#form-submit').validate({
            rules:{
                email:{
                   required:true,
                   email: true
                },
                mobile: {
                    required:true,
                    mobile:true
                },
                code:'required',
                pwd: {
                    required: true,
                    minlength: 6
                }
            },
            messages:{
                mobile: {
                    required: '{__("error_user_not_empty")}',
                    mobile: '{__("error_user_phone")}'
                },
                email: {
                    required: '{__("error_user_not_empty")}',
                    email: '{__("error_user_email")}'
                },
                code:'{__("error_code_not_empty")}',
                pwd: {
                    required: '{__("error_pwd_not_empty")}',
                    minlength: '{__("error_pwd_min_length")}'
                }
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                var content=$('#error_txt').html();
                if(content==''){
                    $('#error_txt').html('<i></i>');
                    error.appendTo($('#error_txt'));
                }
            },
            showErrors:function(errorMap,errorList){
                if(errorList.length<1){
                    $('#error_txt').html('');
                }else{
                    this.defaultShowErrors();
                }
            }
        });
        $('#type').keyup(function(){
            var reg=/^[0-9]+$/;
            if(!reg.test($(this).val())){
                $(this).attr({class:'email',name:'email'});
                }else{
                $(this).attr({class:'mobile',name:'mobile'});
             }
        });
        //提交数据
        $('#submit_btn').click(function(){
            if($("#form-submit").valid()){
                var data={};
                $("#form-submit").find('input').each(function(){
                    if($(this).attr('type')!='button'){
                        var name=$(this).attr('name');
                        if(name=='email' || name=='mobile'){
                            data['user']=$(this).val();
                        }else{
                           data[name]=$(this).val(); 
                        }
                    }
                });
                var  reurl =$("#reurl").val();
               $.post(SITEURL+'member/login/ajax_check?reurl='+reurl,data,function(rs){

                   if(parseInt(rs.status)<1){
                       $('#error_txt').html('<i></i>'+rs.msg);
                       if($('#captcha').length>0){
                           $('#captcha').attr('src',ST.captcha(SITEURL+'captcha'));
                       }else{
                         $('#login-content').append('<p><strong>验证码：</strong><input type="text" name="code" class="" placeholder="请填写验证码" /><img class="yzm_pic cursor captcha" id="captcha" src="'+SITEURL+'captcha" height="30" /></p>');
                       }
                   }else{
                       layer.open({
                            content: '{__("success_login")}',
                            time: 2,
                            end:function(){

                               window.location.href=rs.url;
                            }
                        });
                   }
                },'json');
            }
        });
    });
</script>
<script type="text/javascript">
//同时多个选项卡组件
$(document).ready(function(){ 
        //导航选项卡	 	    

    function tabs(tabTit,on,tabCon){
        $(tabTit).children().click(function(){
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
           	$(tabCon).eq(index).show().siblings().hide();
    	});
	};
    tabs(".tabs","current",".tab-pane");


});
</script>
<script type="text/javascript">
    $(document).ready(function () {
        //验证码切换
        $('.captcha').attr('src', ST.captcha(SITEURL+'captcha'));
        $('.captcha').click(function () {
            $(this).attr('src', ST.captcha($(this).attr('src')));
        });
        //
        $('#swap a').click(function () {
            var index = $(this).index();
            $(this).addClass('on').siblings().removeClass('on');
            $('.st_login').eq(index).removeClass('hide').siblings('.st_login').addClass('hide');
        });
        //验证
        $('#form-mobile').validate({
            rules: {
                user: {
                    required: true,
                    mobile: true
                },
                msg: 'required',
                code: 'required',
            },
            messages: {
                user: {
                    required: '{__("error_user_not_empty")}',
                    mobile: '{__("error_user_phone")}'
                },
                msg: '{__("error_code_not_empty")}',
                code: '{__("error_code_not_empty")}'
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                var content = $('#form-mobile').find('.error_txt:eq(0)').html();
                if (content == '') {
                    $('#form-mobile').find('.error_txt:eq(0)').html('<i></i>');
                    error.appendTo($('#form-mobile').find('.error_txt:eq(0)'));
                }
            },
            showErrors: function (errorMap, errorList) {
                if (errorList.length < 1) {
                    $('#form-mobile').find('.error_txt:eq(0)').html('');
                } else {
                    this.defaultShowErrors();
                }
            }
        });
        $('#resend').click(function () {
            var bool = $(this).attr('do-send');
            var node = this;
            if (bool === 'true') {
                 //=========fengjishu 08.17 将原来的一个ajax 分离成两个 第一个为验证  第二个位 发送短信
                $.post(SITEURL+'member/register/ajax_validation', {'phone': $('#phone').val(),'fastlogin':"fastlogin"}, function (bool) {
                    $('#form-mobile').find('.error_txt:eq(0)').html('');
                    if (bool != 1) {
                        var message = bool == 0 ? '发送失败，稍后在试' : bool;
                        $('#form-mobile').find('.error_txt:eq(0)').html('<i></i>' + message);
                    }else{
                        count_down(60);
                        $.post(SITEURL+'member/register/ajax_send_message_fast', {'phone': $('#phone').val()}, function (bool) {

                        }, 'text')
                    }
                }, 'text')

            }
        });
        function count_down(v) {
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
        //提交
        $('#phone_button').click(function(){
            var node=$('#form-mobile');
            if(node.valid()){
                var data={};
                node.find('input').each(function(){
                    if($(this).attr('type')!='button'){
                        data[$(this).attr('name')]=$(this).val();
                    }
                });
                var  reurl =$("#reurl").val();
                $.post(SITEURL+'member/register/ajax_reg?reurl='+reurl,data,function(rs){

                    if(parseInt(rs.status)<1){
                        node.find('.error_txt:eq(0)').html('<i></i>'+rs.msg);
                        $('.captcha').attr('src',ST.captcha(SITEURL+'captcha'));
                    }else{
                        layer.open({
                            content: '{__("success_login")}',
                            time: 2,
                            end:function(){
                                window.location.href=rs.url;
                            }
                        });
                    }
                },'json');
            }
        });
    });
</script>
</html>
