<div class="side-menu">
   <dl class="verify">
        <dt><a href="javascript:;">验单管理</a></dt>
        <dd>
            <a href="{$cmsurl}pc/checkorder/my_check" id="nav_my_check">我要验单</a>
            <a href="{$cmsurl}pc/checkorder/check_record" id="nav_check_record">验单记录</a>
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