<footer>
    <div class="foot" style="display: none;">
        <div class="foot_menu">
            {st:footnav action="query"}
              {loop $data $row}
                <a href="{$row['url']}">{$row['title']}</a>
                {if count($data)!=$n}|{/if}
              {/loop}
            {/st}
        </div>
        <div class="txt">{$GLOBALS['cfg_m_icp']}</div>
        <div class="foot_btn">
            <a class="foot_ico01" href="{$GLOBALS['cfg_m_main_url']}">
                <em></em>
                <span>首页</span>
            </a>
            <a class="foot_ico02" href="{$weburl}?computerversion=1">
                <em></em>
                <span>电脑版</span>
            </a>
            <a class="foot_ico03" href="tel:{$GLOBALS['cfg_m_phone']}">
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