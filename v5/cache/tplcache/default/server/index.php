<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $info['servername'];?>-<?php echo $webname;?></title>
    <?php echo  Stourweb_View::template("pub/varname");  ?>
    <?php echo Common::css('help.css,base.css,extend.css');?>
    <?php echo Common::css('common/bootstrap-min.css,common/public.css');?>
    <?php echo Common::js('jquery.min.js,base.js,common.js,piccontent.min.js');?>
</head>
<body>
<?php echo Request::factory("pub/header")->execute()->body(); ?>
<div class="big">
    <div class="wm-1200">
        <div class="st-guide">
            <a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<?php echo $info['servername'];?>
        </div><!--面包屑-->
        <div class="st-main-page">
            <div class="help-side-menu">
                <?php require_once ("/home/wwwroot/www.aitto.net/taglib/footnav.php");$footnav_tag = new Taglib_Footnav();if (method_exists($footnav_tag, 'pc')) {$data = $footnav_tag->pc(array('action'=>'pc',));}?>
                <?php $n=1; if(is_array($data)) { foreach($data as $s) { ?>
                <a <?php if($s['id']==$info['id']) { ?>class="on"<?php } ?>
 href="<?php echo $s['url'];?>"><?php echo $s['title'];?></a>
                <?php $n++;}unset($n); } ?>
                
            </div><!-- 导航 -->
            <div class="help-main-box">
                <div class="help-showCon">
                    <h1><?php echo $info['servername'];?></h1>
                    <div class="txtCon">
                        <?php echo $info['content'];?>
                    </div>
                </div>
            </div><!-- 列表内容 -->
        </div>
    </div>
</div>
<?php echo Request::factory("pub/footer")->execute()->body(); ?>
</body>
</html>
