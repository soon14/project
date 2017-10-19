<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>供应商信息-<?php echo $webname;?></title>
<meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<?php echo  Stourweb_View::template('mobile/pub');  ?>
<body>

  <header class="header-top">
  <div class="ht-back"></div>
    <h1 class="ht-h1">账户资料</h1>
  </header>

  <section class="content">
  <div class="account-show-box">
    <!--<p><strong>头像</strong><span><img src="<?php echo $tpl;?>/Supplier/images/login-page-bg.jpg" /></span></p>-->
        <p><strong>公司全称</strong><span><?php echo $info['suppliername'];?></span></p>
    <p><strong>法人代表</strong><span><?php echo $info['reprent'];?></span></p>
    <p><strong>绑定手机</strong><span><?php echo $info['mobile'];?></span></p>
        <p><strong>公司地址</strong><span><?php echo $info['address'];?></span></p>
    <p><strong>所在地</strong><span><?php echo $info['province'];?> <?php echo $info['city'];?></span></p>
    <p class="modifypwd"><strong>修改密码</strong><span><i class="more"></i></span></p>
      <a class="account-bowout-btn loginout" href="javascript:;">退出当前账号</a>
    </div>
  </section>
<script>
    $(function(){
        $('.ht-back').click(function(){
            history.go(-1);
        })
        //修改密码
        $('.modifypwd').click(function(){
            var url = SITEURL+'mobile/index/modifypwd';
            location.href = url;
        })
        $('.loginout').click(function(){
            localStorage.removeItem('TOKEN_LOGIN');
            window.location.href="<?php echo $cmsurl;?>mobile/login/login_out"
        })
    })
</script>
</body>
</html>
