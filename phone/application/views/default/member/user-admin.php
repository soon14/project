<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人中心</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
    {php echo Common::css('bootstrap-min.css,public.css,user9-1.css');}
    {php echo Common::js('jquery-1.11.3.min.js,user9-1.js');}

</head>
<body style="background:#f9f7fc;">
<!--<a href="/phone/member/linkman/index" style="float: left">返回个人中心</a>-->
<div class="user-head">账号管理</div>
<div class="user-form">
  <form> 
    <ul>
       <li class="form-item"><dfn><a href="javascript:" onclick="editnickname()" >修改</a></dfn><label>昵称</label><span><input type="text" id ="nickname" value="{$member['nickname']}"> </span></li>
       <li class="form-item"><dfn><a href="/phone/member/linkman/editlitpic">修改</a></dfn><label style="margin-top:15px;">头像</label><span><div class="user-peo"><img src="{$member['litpic']}"></div></span></li>
       <li class="form-item"><dfn><a href="javascript:" data-target="#DialogDiv" data-toggle="modal">修改</a></dfn><label>性别</label><span>{$member['sex']}</span></li>
       <li class="form-item"><dfn><a href="/phone/member/linkman/userpassword">修改</a></dfn><label>登陆密码</label><span></span></li>
       <li class="form-item"><dfn><a href="/phone/member/linkman/editphone">修改</a></dfn><label>手机</label><span>{$member['mobile1']}</span></li>
<!--        <li class="form-item" style="margin: 25px 10px"><dfn><a href="/phone/member/login/loginout" style="margin-right:150px ">退出登录</a></dfn><label></label><span ></span></li>-->

    </ul>

  </form>
</div>
<div class="user-btn"><button onclick="window.location.href='/phone/member/login/loginout'">退出登录</button></div>


<div class="modal" id="DialogDiv">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="user-sex">
      <ul>

        <li class="user-woman {if $member['sex']=='保密'}active{/if}"    data-sex="0" onclick="changesex(this)"><span>保密</span></li>
        <li class="user-man {if $member['sex']=='男'}active{/if}" data-sex="1" onclick="changesex(this)"><span>男</span></li>
        <li class="user-woman {if $member['sex']=='女'}active{/if}"    data-sex="2" onclick="changesex(this)"><span>女</span></li>

      </ul>
      <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
    </div>

  </div>
</div>




</body>
</html>
<script>
    function editnickname(th){
         var nick =  $("#nickname").val();
         var oldnick = "{$member['nickname']}";
        if(nick==oldnick){
            return false;
        }
        $.ajax({
            type:'GET',
            url :'/phone/member/linkman/editnickname',
            data:{nick:nick},
            success: function (data) {
                alert(data)
                window.location.reload();
            }
        })
    }
    function changesex(th){
        var sex  =   $(th).attr('data-sex');
        var  url  ='/phone/member/linkman/changesex';
        $.ajax({
          type:'GET',
          url :url,
          data:{sex:sex},
          success: function (data) {
             window.location.reload();
          }
      })
    }
</script>