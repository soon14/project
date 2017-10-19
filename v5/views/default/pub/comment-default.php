<div class="tabcon-list">
    <div class="list-tit"><strong>客户点评</strong></div>
    <div class="st-list-pl">
        {st:comment action="query" typeid="$typeid" row="5" articleid="$info['id']"}
         {loop $data $c}
            <dl>
                <dt>
                    <img src="{$c['litpic']}" />
                    <span>{$c['nickname']}</span>
                </dt>
                <dd>
                    {if !empty($c['jifencomment'])}
                    <p class="zs"><span>{$c['jifencomment']}分<i></i></span></p>
                    {/if}
                    <p class="txt">{$c['content']}</p>
                    <p class="grade">
                        <span><em>综合评分：</em><b><i style=" width:{$c['percent']}"></i></b></span>
                    </p>
                    <p class="date">{Common::mydate('Y-m-d',$c['addtime'])}</p>
                </dd>
            </dl>
         {/loop}
        {/st}
        <div class="st-pl-box">
            <span class="myd"><strong>96%</strong>满意度</span>
            <span class="txt">在网站购买过旅游产品的注册会员<br />回程归来发表点评即可获赠积分，积分根据{$channelname}而定，<br />获得的积分可在下次消费时抵用部分现金。</span>
            <a class="pl-btn" href="{$GLOBALS['cfg_basehost']}/member">我要评论 </a>
        </div>
    </div>
</div>