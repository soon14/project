{if !empty($GLOBALS['cfg_usernav_open'])}
<div class="st-global">
<div class="global-bt">旅游导航</div>
{st:usernav action="topkind" row="6"}
 {if !empty($data)}
<div class="global-list" {if empty($indexpage)}style="display: none;"{/if}>
        {php}$k=0;{/php}

        {loop $data $nav}

            <div class="gl-list-tabbox">
                <h3>
                    <strong><em><img src="{$nav['litpic']}" /></em><a href="{$nav['url']}" target="_blank">{$nav['kindname']}</a></strong>
                    <p>
                        {st:usernav action="childnav" parentid="$nav['id']" row="5" return="childnav"}
                          {loop $childnav $c}
                           <a href="{$c['url']}" target="_blank">{$c['kindname']}</a>
                          {/loop}
                        {/st}

                    </p>
                    <i class="arrow-rig"></i>
                </h3>
                <div class="tabcon-item">
                    <div class="item-list">
                        {st:usernav action="childnav" parentid="$nav['id']" row="10" return="childnav2"}
                          {loop $childnav2 $r2}
                              <dl>
                                <dt><a href="{$r2['url']}" target="_blank">{$r2['kindname']}</a></dt>
                                <dd>
                                    {st:usernav action="childnav" parentid="$r2['id']" return="childnav3" row="20"}
                                     {loop $childnav3 $r3}
                                        <a href="{$r3['url']}">{$r3['kindname']}</a>
                                     {/loop}
                                    {/st}
                                </dd>
                            </dl>
                          {/loop}
                        {/st}
                    </div>
                    <div class="ad-box">
                        {st:ad action="sortad" index="$k" pc="1" adname="Header_Usernav_1,Header_Usernav_2,Header_Usernav_3,Header_Usernav_4,Header_Usernav_5,Header_Usernav_6" return="pluginad"}
                              {if !empty($pluginad)}
                              <a href="{$pluginad['adlink']}"><img src="{Common::img($pluginad['adsrc'])}" title="{$pluginad['adname']}" width="980" height="100"></a>
                              {/if}
                        {/st}
                    </div>
                </div>
            </div>
          {php}$k++;{/php}
        {/loop}
</div>
 {/if}
{/st}
</div>
<script>
    $(function(){
        $('.gl-list-tabbox,.st-dh-con').hover(function(){
            $(this).children('h3').addClass('hover').next('.tabcon-item,.st-dh-item').show();
            $(this).children('h3').find('.arrow-rig').hide();
        },function(){
            $(this).children('h3').removeClass('hover').next('.tabcon-item,.st-dh-item').hide();
            $(this).children('h3').find('.arrow-rig').show();
        })
        {if empty($indexpage)}
            $('.global-list').hide();
            $('.st-global').hoverDelay(function(){
                $('.global-list').show();
            },function(){
                $('.global-list').hide();
            })
        {/if}
    })
</script>
{/if}