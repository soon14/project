<div class="side-menu">
    <dl class="finance">
        <dt><a href="javascript:;">财务管理</a></dt>
        <dd>
            <a href="<?php echo $cmsurl;?>pc/drawcash/list" id="nav_drawcash">提现管理</a>
        </dd>
    </dl>
    <div class="shrink-btn"></div>
</div><!-- 侧边导航 -->
<script>
    $(function(){
        $('.shrink-btn').toggle(function(){
            $('.main').animate({left:'50px'},0);
            $(this).parent().addClass('mini-menu');
            $(this).css('right','97px');
        },function(){
            $('.main').animate({left:'160px'},0);
            $(this).parent().removeClass('mini-menu');
            $(this).css('right','-13px');
        })
    })
</script>