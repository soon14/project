<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title></title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-myadmin">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>绑定新手机</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1);"></a> </header>
<!-- 个人中 绑定新手机-->

<section class="ui-myAdmin-tel">
  <div class="tel-step"><span class="active">①绑定新手机</span></div>
  {if $info['mobile']}
  <div class="form-group userTel">
    当前绑定手机号：{$info['mobile']}
  </div>
  {/if}
    <div class="form-group">
      <input placeholder="请填写您的新手机号" type="text" id="phone" name="phone" >
    </div>
<!--    <div class="form-group userCode">-->
<!--      <input placeholder="请填写手机验证码" type="text" name ='newcode' id="newcode">-->
<!--      <a class="ui-VerificationCode" href="javascript:;" id='resend' do-send="true">获取手机验证码</a>-->
<!--    </div>-->
    <button class="ui-btn ui-btn-save" onclick="bidings()">立即绑定</button>

</section>

{php echo Common::js('jquery.min.js,common.js,jquery.validate.min.js,layer_mobile/layer.js');}
</body>
</html>
<script>
  function bidings(){
    var  url  = '/phone/mitao/bidings';

    var phone = $('#phone').val();

    if(phone.length==''){
      layer.msg('手机号不为空');
      return false;
    }
    var reg  = /(1[3-9]\d{9}$)/;
    if(!reg.test(phone)){

      layer.msg('手机格式不正确');

      return false;
    }
    $.ajax({
      type:'POST',
      url :url,
      data:{phone:phone},
      dataType:'json',
      success:function(data){
        if(data.status){
          layer.msg(data.msg);
          var url2 ='/phone/mitao/userinfo';
          window.location.href = url2;
        }else{
          layer.open({
            content: data.msg,
            skin: 'msg',
            time: 3 //2秒后自动关闭
          });
        }
      }
    })
  }



</script>