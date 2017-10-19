<div class="side-menu">
    <dl class="home">
        <dt><a href="<?php echo $cmsurl;?>pc" id="nav_index">账户首页</a></dt>
    </dl>
    <dl class="account">
        <dt><a href="javascript:;" id="nav_account">账号管理</a></dt>
        <dd>
            <a href="<?php echo $cmsurl;?>pc/index/userinfo" id="nav_userinfo">账户资料</a>
            <a href="<?php echo $cmsurl;?>pc/qualify/index" id="nav_qulification">资质验证</a>
            <a href="<?php echo $cmsurl;?>pc/user/modify_phone" id="nav_modify_phone">修改手机</a>
            <a href="<?php echo $cmsurl;?>pc/user/modify_password" id="nav_modify_password">修改密码</a>
        </dd>
    </dl>
    <dl class="order">
        <dt><a href="javascript:;">订单管理</a></dt>
        <dd>
            <a href="<?php echo $cmsurl;?>pc/order/all" id="nav_all_order">我的订单</a>
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