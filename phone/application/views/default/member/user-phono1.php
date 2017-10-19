<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>绑定手机</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
    {php echo Common::css('bootstrap-min.css,public.css,user9-1.css');}
    {php echo Common::js('jquery-1.11.3.min.js,user9-1.js');}
</head>
<body style="background:#f9f7fc;">

<div class="user-head">绑定新手机</div>
<div class="user-form">
  <form  >
    <ul>
       <li class="form-item"><span style="margin-left:32%"><input  name ='phone' type="text" class="login-text" placeholder="填写您新的手机号" id="phone"></span></li>
       <li class="form-item"><span style="margin-left:32%"><input  name ='newcode' class="login-text"  type="text" placeholder="填写手机验证码" id ='newcode' ><div class="form-tit"><a  id='resend' do-send="true">获取手机验证码</a></div></span></li>
    </ul>       
  </form>
  <div class="user-tip">重新绑定后，之前绑定的手机不能再用于账号登录</div>
  <div class="user-btn"><button onclick="bidings()">立即绑定</button></div>
</div>

</body>
{php echo Common::js('jquery.min.js,common.js,jquery.validate.min.js,layer/layer.js');}
</html>
<script>
    function bidings(){
        var  url  = '/phone/member/linkman/bidings';
        var phone = $('#phone').val();
        var newcode = $('#newcode').val();
        if(newcode.length==''){
            layer.msg('验证码为空')
            return false;
        }else if(phone.length==''){
            layer.msg('手机号不为空')
            return false;
        }
        $.ajax({
            type:'POST',
            url :url,
            data:{phone:phone,newcode:newcode},
            dataType:'json',
            success:function(data){
               if(data.status){
                   layer.msg(data.msg);
                   var url2 ='/phone/member/linkman/userAdmin';
                   window.location.href = url2;
               }else{
                   layer.msg(data.msg);
               }
            }
        })
    }
    $('#resend').click(function () {
        var bool = $(this).attr('do-send');
        var node = this;
        if (bool === 'true') {
            //=========fengjishu 08.17 将原来的一个ajax 分离成两个 第一个为验证  第二个位 发送短信
           count_down(60);
           $.post('/phone/member/register/ajax_send_message_fast', {'phone': $('#phone').val()}, function (bool) {

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