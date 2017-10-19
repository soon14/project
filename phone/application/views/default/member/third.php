<div class="other_login">
    <h3><span>其他登录方式</span></h3>
    <p>
        {if $qqlogin}
        <a class="ico_qq" href="{Common::get_main_host()}/plugins/login_qq/index/index/?refer={urlencode($url)}"><em></em><span>QQ</span></a>
        {/if}
        {if $weixinlogin}
        <a class="ico_wx" href="{Common::get_main_host()}/plugins/login_weixin/index/index/?refer={urlencode($url)}"><em></em><span>微信</span></a>
        {/if}
        {if $sinalogin}
        <a class="ico_wb" href="{Common::get_main_host()}/plugins/login_weibo/index/index/?refer={urlencode($url)}"><em></em><span>微博</span></a>
        {/if}
    </p>
</div>