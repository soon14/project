<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title></title>
<!-- 基础框架 bootstrap CSS 文件 -->
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-myadmin">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>修改性别</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1);"></a> </header>
<!-- 个人中心 性别修改 -->
<section class="ui-myAdmin-sex">
  <ul>
    <li class="active" data-sex="女"><a href="javascript:;">女</a></li>
    <li data-sex="男"><a href="javascript:;">男</a></li>

  </ul>
  <input type="hidden" name="openid" value="{$openid}">
</section>
{Common::js('mitao/jquery-1.11.3.min.js,layer_mobile/layer.js')}
</body>
</html>
<script>
  $(".ui-myAdmin-sex ul li").click(function(){

      var  sex  = $(this).attr("data-sex");
      $(this).addClass('active').siblings().removeClass('active');
      $.ajax({
        type:"post",
        url : '/phone/mitao/btn_sex',
        data:{sex:sex},
        dataType:'json',
        success: function (data){
          if(data.status){
            layer.open({
              content: data.msg,
              skin: 'msg',
              time: 2,
              success:function(){
                window.location.href="/phone/mitao/userinfo";
              }

            });
          }else{
            layer.open({
              content: data.msg,
              skin: 'msg',
              time: 2

            });
          }
        }
      });


  })
</script>
