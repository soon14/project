<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>404页面未找到-<?php echo $GLOBALS['cfg_webname'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo Common::css('amazeui.css,style.css,extend.css');?>
    <?php echo Common::js('jquery.min.js,amazeui.js,template.js,layer/layer.m.js');?>
</head>
<body>
<?php echo Request::factory("pub/header/")->execute()->body(); ?>
<section>
    <div class="mid_content">
        <div class="no-content">
            <img src="<?php echo $cmsurl;?>public/images/nofound.png">
            <p></p>
            <div class="st_userSelect_cz">
                <h3></h3>
                <p style="width: 30%;margin: 0 auto">
                    <a href="<?php echo $cmsurl;?>">去首页</a>
                </p>
            </div>
        </div>
    </div>
    </div>
</section>
<?php echo Request::factory("pub/footer")->execute()->body(); ?>
</body>
</html>