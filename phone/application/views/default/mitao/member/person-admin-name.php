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
  <h1>修改姓名</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1)"></a> </header>
<!-- 个人中心 修改姓名 -->
<section class="ui-myAdmin-name">

  <div class="form-group">
    <label>姓名：</label>
    <input placeholder="姓名" type="text" name="name" value="{$name}" id="name">
  </div>
  <button class="ui-btn ui-btn-save">保存</button>
  <input type="hidden" name="openid" value="{$openid}">

</section>
{Common::js('mitao/jquery-1.11.3.min.js,layer_mobile/layer.js')}
</body>
</html>
<script>
  $(".ui-btn").click(function(){
    var name = $("#name").val();
    if(name.length==''){
      layer.open({
        content: '姓名不为空',
        skin: 'msg',
        time: 2 ,//2秒后自动关闭
        success:function(){
          return false;
        }
      });
    }
    $.ajax({
      type:"post",
      url : '/phone/mitao/btn_name',
      data:{name:name},
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

            }
      }
    });

  })
  </script>

