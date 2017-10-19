<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改密码-{$webname}</title>
<meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 {Common::css("style.css,base.css")}
 {Common::js("jquery.min.js")}
</head>
{include "mobile/pub"}
<body>
	
  <header class="header-top">
  	<div class="ht-back"></div>
    <h1 class="ht-h1">修改密码</h1>
  </header>
  <section class="content">
  	<div class="revise-pd-box">
        <p><input type="password" class="" name="oldpwd" id="oldpwd" placeholder="请输入旧密码" /></p>
    	<p><input type="password" class="" name="pwd1" id="pwd1" placeholder="请输入新密码" /></p>
    	<p><input type="password" class="" name="pwd2" id="pwd2" placeholder="再次输入新密码" /></p>
      <a class="confirm-btn" href="javascript:;">确认修改</a>
    </div>
  </section>

<script>
    $(function(){
        $('.ht-back').click(function(){
            history.go(-1);
        })
        $(".confirm-btn").click(function(){
            var oldpwd = $("#oldpwd").val();
            var pwd1 = $("#pwd1").val();
            var pwd2 = $("#pwd2").val();
            if(oldpwd==''){
                alert("旧密码不能为空");
                return false;
            }
            if(pwd1==''){
               alert("新密码不能为空");
               return false;
            }
            if(pwd1!=pwd2){
                alert("两次输入密码不一致")
                return false;
            }
            $.ajax({
                type:'POST',
                data:{pwd1:pwd1,pwd2:pwd2,oldpwd:oldpwd},
                dataType:'json',
                url:SITEURL+'mobile/index/ajax_save_modifypwd',
                success:function(data){
                    if(data.status){
                        alert('密码修改成功');
                        location.href = SITEURL+'mobile'
                    }else{
                        alert(data.msg);
                        return false;
                    }

                }

            })
        })
    })
</script>
</body>
</html>
