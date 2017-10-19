<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>供应商系统-<?php echo $webname;?></title>
<meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<body>
  <section class="content">
  <div class="user-center-box">
    
      <div class="user-center-top">
        <?php if($info['verifystatus']!=3) { ?>
       <div class="yz-label-before">未资质验证</div>
        <?php } else if($info['verifystatus']==3) { ?>
       <div class="yz-label-after">已资质验证</div>
        <?php } ?>
      <div class="con">
          <p class="tx"><img src="<?php echo $GLOBALS['cfg_res_url'];?>/images/default-headimg.jpg"/></p>
          <p class="mz"><?php echo $userinfo['suppliername'];?></p>
          <p class="id">ST<?php echo str_pad($info['id'],6,'0',STR_PAD_LEFT);?></p>
          <p class="zl"><a href="<?php echo $cmsurl;?>mobile/index/userinfo">账户资料</a></p>
        </div>
      </div>
      <div class="user-center-con">
      <a class="iwant-yd-btn" href="<?php echo $cmsurl;?>mobile/order/scan">我要验单</a>
      <a class="note-yd-btn" href="<?php echo $cmsurl;?>mobile/order/check_history">验单记录</a>
      </div>
    </div>
  </section>
</body>
</html>
