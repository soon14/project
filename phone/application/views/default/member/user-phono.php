<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改手机</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
    {php echo Common::css('bootstrap-min.css,public.css,user9-1.css');}
    {php echo Common::js('jquery-1.11.3.min.js,user9-1.js');}
</head>
<body style="background:#f9f7fc;">

<div class="user-head">修改绑定手机</div>
<div class="user-step"><span class="active">①验证手机</span>&nbsp;>&nbsp;②绑定新手机
</div>
<div class="user-form">
  <form> 
    <ul>
       <li class="form-item"><label style="width:120px;" >当前账号</label><span>{$member['mobile']}</span></li>
       <li class="form-item"><label style="width:120px;">当前绑定手机号</label><span>{$member['mobile1']}</span><span id="pcheck"></span></li>
       <li class="form-item"><span style="margin-left: 33%"><input id='code' name ='code' class="login-text"  placeholder="请填写手机验证码" type="text" ></span><div class="form-tit"><a  id='resend' do-send="true">获取手机验证码</a></div></li>
    </ul>   
    
  </form>
  <input type="hidden" name="phone" id="phone" value="{$member['mobile']}">
  <div class="user-btn"><button onclick="checkcode()">验证</button></div>
</div>


</body>
</html>
<script>
    function checkcode(){
        var  url = "/phone/member/linkman/checkcode";
        var code = $("#code").val();
        $.ajax({
            type:"POST",
            url: url ,
            data:{code:code},
            dataType:'json',
            success:function(data){
                if(data.status){
                    var  url2  = '/phone/member/linkman/changephone';
                    window.location.href =url2;
                }
            }
        })
    }
    $('#resend').click(function () {
        var bool = $(this).attr('do-send');
        var node = this;
        var phone = $('#phone').val();
        var reg  = /(1[3-9]\d{9}$)/;
        if(!reg.test(phone)){
            $('#pcheck').html("<i style='color: red'>手机格式不正确</i>")
            return false;
        }

        if (bool === 'true') {
            //=========fengjishu 08.17 将原来的一个ajax 分离成两个 第一个为验证  第二个位 发送短信
            $.post('/phone/member/register/ajax_validation', {'phone':phone }, function (bool) {
                $('#form-mobile').find('.error_txt:eq(0)').html('');
                if (bool != 1) {

                    var message = bool == 0 ? '发送失败，稍后在试' : bool;
                    $('#form-mobile').find('.error_txt:eq(0)').html('<i></i>' + message);
                }else{
                    count_down(60);
                    $.post('/phone/member/register/ajax_send_message_fast', {'phone': $('#phone').val()}, function (bool) {

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
</script>