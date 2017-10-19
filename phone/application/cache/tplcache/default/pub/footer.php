<footer>
    <div class="foot" style="display: none;">
        <div class="foot_menu">
            <?php require_once ("/home/wwwroot/www.aitto.net/phone/taglib/footnav.php");$footnav_tag = new Taglib_Footnav();if (method_exists($footnav_tag, 'query')) {$data = $footnav_tag->query(array('action'=>'query',));}?>
              <?php $n=1; if(is_array($data)) { foreach($data as $row) { ?>
                <a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a>
                <?php if(count($data)!=$n) { ?>|<?php } ?>
              <?php $n++;}unset($n); } ?>
            
        </div>
        <div class="txt"><?php echo $GLOBALS['cfg_m_icp'];?></div>
        <div class="foot_btn">
            <a class="foot_ico01" href="<?php echo $GLOBALS['cfg_m_main_url'];?>">
                <em></em>
                <span>首页</span>
            </a>
            <a class="foot_ico02" href="<?php echo $weburl;?>?computerversion=1">
                <em></em>
                <span>电脑版</span>
            </a>
            <a class="foot_ico03" href="tel:<?php echo $GLOBALS['cfg_m_phone'];?>">
                <em></em>
                <span>客服电话</span>
            </a>
            <a class="foot_ico04" id="roll_top" href="javascript:;">
                <em></em>
                <span>返回顶部</span>
            </a>
        </div>
    </div>
</footer>
<script>
   $(function(){
       //返回顶部
       $('#roll_top').click(function(){
           $('html,body').animate({scrollTop: '0px'}, 800);
       });
   })
</script>