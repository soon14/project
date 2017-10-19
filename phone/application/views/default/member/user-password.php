<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改密码</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
    {php echo Common::css('bootstrap-min.css,public.css,user9-1.css');}
    {php echo Common::js('jquery-1.11.3.min.js,user9-1.js');}
</head>
<body style="background:#f9f7fc;">

<div class="user-head1">{$member['nickname']}</div>
<div class="user-form">
  <form> 
    <ul>
       <li class="form-item" style="margin-bottom:5px;"><label>原密码</label><span><input class="login-text" placeholder="原密码" type="password" name="oldpass"></span></li>
       <li class="form-item" style="margin-bottom:5px;"><label>新密码</label><span><input class="login-text"  placeholder="新密码" type="password" name="newpass1"></span></li>
       <li class="form-item" style="margin-bottom:5px;"><label>确认密码</label><span><input class="login-text"  placeholder="确认密码" type="password" name="newpass2"></span></li>

    </ul>
      <input type="checkbox" style="margin-top: 20px" value="" id="check"><span>显示密码</span>
  </form>
  <div class="user-btn"><button onclick="changepassword()">确定修改</button></div>
</div>


</body>
{php echo Common::js('layer/layer.js');}
</html>
<script>
    $("#check").click(function () {
       var s = $(this).prop("checked");
        if(s){
            $("input[type=password]").attr('type','text');
        }else{
            $("input[type=text]").attr('type','password');
        }

    })
    function changepassword(){
        var oldpass  =  $('input[name=oldpass]').val();

        var newpass1 = $('input[name=newpass1]').val();

        var newpass2 =  $('input[name=newpass2]').val();
        if(newpass1.length<6||newpass2.length<6){
            layer.msg('密码长度不小于6位');
            return false;
        }
        var  url    =  '/phone/member/linkman/changepassword';
        $.ajax({
            type:'POST',
            url : url ,
            data:{oldpass:oldpass,newpass1:newpass1,newpass2:newpass2},
            dataType:'json',
            success: function (data) {
                 if(data.status){
                     layer.msg(data.msg)
                     window.location.href = '/phone/member/Linkman/useradmin';
                 }else if(!data.status){
                     layer.msg(data.msg)
                 }
            }
        })
    }
</script>
