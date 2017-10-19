<div class="header">
    <div class="logo"><a href="{$logourl}" title="{$logotitle}" target="_blank"><img src="{$logo}" width="200" /></a></div>
    <div class="hd-menu">
        <a href="/plugins/supplier/" id="p_account" class="cur">账号</a>
        {if !empty($line_product)}
        <a href="/plugins/supplier_line/" id="p_line">线路</a>
        {/if}
        {if !empty($hotel_product)}
        <a href="/plugins/supplier_hotel/" id="p_hotel" >酒店</a>
        {/if}
        {if !empty($car_product)}
        <a href="/plugins/supplier_car/" id="p_car">租车</a>
        {/if}
        {if !empty($spot_product)}
        <a href="/plugins/supplier_spot/" id="p_spot">门票</a>
        {/if}
        {if !empty($tuan_product)}
        <a href="/plugins/supplier_tuan/" id="p_tuan">团购</a>
        {/if}
        {if !empty($visa_product)}
        <a href="/plugins/supplier_visa/" id="p_visa">签证</a>
        {/if}
        {if !empty($tongyong_product)}
           {loop $tongyong_list $t}
            <a href="/plugins/supplier_tongyong/index/index/typeid/{$t['id']}" id="p_product_{$t['id']}">{$t['modulename']}</a>
           {/loop}
        {/if}
        {if !empty($check_product)}
        <a href="/plugins/supplier_check/" id="p_check">验单</a>
        {/if}
        {if !empty($finance_manage)}
        <a href="/plugins/supplier_finance/" id="p_finance">财务</a>
        {/if}
    </div>
    <div class="tx">
        <span class="wc">欢迎您，{if $userinfo['suppliername']}{$userinfo['suppliername']}{else}供应商{/if}</span>
        <a class="tc" href="{$cmsurl}pc/login/login_out">退出</a>
    </div>
</div><!-- 顶部 -->
<script>
    var SITEURL = "{$cmsurl}";
</script>