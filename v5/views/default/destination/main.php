<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('dest.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,slideTabs.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>

<body>
{request "pub/header"}
          
  <div class="big">
  	<div class="wm-1200">
    
      <div class="st-guide">
          <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$info['kindname']}
      </div><!--面包屑-->
      
    	<div class="st-main-page">
        
		  <div class="dest-sum-box">
        	<div class="dest-sum-pic">
          	<img src="{Common::img($info['litpic'])}" alt="{$info['kindname']}" />
            <span class="num morepic" style="cursor: pointer" data-url="{$GLOBALS['cfg_basehost']}/photos/{$info['pinyin']}/"><i></i>查看更多图片</span>
          </div>
        	<div class="dest-sum-txt">
          	<h3>{$info['kindname']}</h3>
            <div class="nr" style="overflow-y:auto"><div>{strip_tags(Common::cutstr_html($info['jieshao'],280))}{if strlen($info['jieshao'])>280}<a class="more" href="javascript:;">[展开介绍]</a>{/if}</div><div class="hide">{strip_tags($info['jieshao'])}<a class="more" href="javascript:;">[收缩介绍]</a></div></div>
          </div>
        </div><!-- 目的地概括 -->
        
        <div class="hot-dest-box">
        <strong>推荐目的地：</strong>
          <div class="hotlist">
            {st:dest action="query" flag="next" pid="$info['id']" return="nextdest"}
              {loop $nextdest $next}
          	    <a href="{$GLOBALS['cfg_basehost']}/{$next['pinyin']}/">{$next['kindname']}</a>
              {/loop}
          </div>
        </div><!-- 目的地推荐 -->
        
        <div class="st-dest-cplist">
        	<div class="st-tabnav">
             {if $channel['line']['isopen']==1}
          	  <span data-url="{$GLOBALS['cfg_basehost']}/lines/{$info['pinyin']}/">{$channel['line']['channelname']}</span>
             {/if}
                {if $channel['hotel']['isopen']==1}
                <span data-url="{$GLOBALS['cfg_basehost']}/hotels/{$info['pinyin']}/">{$channel['hotel']['channelname']}</span>
                {/if}
                {if $channel['car']['isopen']==1}
                <span data-url="{$GLOBALS['cfg_basehost']}/cars/">{$channel['car']['channelname']}</span>
                {/if}
                {if $channel['spot']['isopen']==1}
                <span data-url="{$GLOBALS['cfg_basehost']}/spots/{$info['pinyin']}/">{$channel['spot']['channelname']}</span>
                {/if}

            <a href="{$GLOBALS['cfg_basehost']}/lines/{$info['pinyin']}" class="more productmore" target="_blank">更多</a>
          </div>
          {if $channel['line']['isopen']}
            <div class="st-tabcon">
            <ul class="st-cp-list">
              {st:line action="query" flag="mdd" destid="$info['id']" row="8" return="linelist"}
                {php}$k=1;{/php}
                {loop $linelist $l}
                 <li {if $k%4==0}class="mr_0"{/if}>
                <div class="pic">
                  <img class="fl" src="{Common::img($l['litpic'],285,190)}" alt="{$l['title']}" width="285" height="190" />
                  <div class="buy"><a href="{$l['url']}" target="_blank">立即预订</a></div>
                </div>
                <div class="js">
                  <a class="tit" href="{$l['url']}" target="_blank">{$l['title']}</a>
                  <p class="attr">
                      {loop $l['iconlist'] $ico}
                        <img src="{$ico['litpic']}" />
                      {/loop}

                  </p>
                  <p class="num">
                      {if !empty($l['storeprice'])}
                      <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['storeprice']}</del>
                      {/if}
                            <span>
                                {if !empty($l['price'])}
                                  <b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['price']}</b>元起
                                {else}
                                    电询
                                {/if}
                            </span>
                  </p>
                </div>
              </li>
                {php}$k++{/php}
                {/loop}

            </ul>
            </div><!-- 线路 -->
          {/if}
         {if $channel['hotel']['isopen']}
          <div class="st-tabcon">
            <ul class="st-cp-list">
                {st:hotel action="query" flag="mdd" destid="$info['id']" row="8" return="hotellist"}
                {loop $hotellist $h}
                  <li {if $n%4==0}class="mr_0"{/if}>
                    <div class="pic">
                      <img class="fl" src="{Common::img($h['litpic'],285,190)}" alt="{$h['title']}" width="285" height="190" />
                      <div class="buy"><a href="{$h['url']}" target="_blank">立即预订</a></div>
                    </div>
                    <div class="js">
                      <a class="tit" href="{$h['url']}" target="_blank">{$h['title']}</a>
                      <p class="num">
                          {if !empty($h['sellprice'])}
                          <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$h['sellprice']}</del>
                          {/if}
                            <span>
                                {if !empty($h['price'])}
                                  <b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$h['price']}</b>元起
                                {else}
                                    电询
                                {/if}
                            </span>
                      </p>
                    </div>
                  </li>
                {/loop}

            </ul>
          </div><!-- 酒店 -->
         {/if}
          {if $channel['car']['isopen']}
            <div class="st-tabcon">
            <ul class="st-cp-list">
                {st:car action="query" flag="recommend"  row="8" return="carlist"}
                {loop $carlist $c}
                  <li {if $n%4==0}class="mr_0"{/if}>
                <div class="pic">
                  <img class="fl" src="{Common::img($c['litpic'],285,190)}" alt="{$c['title']}" width="285" height="190" />
                  <div class="buy"><a href="{$c['url']}" target="_blank">立即预订</a></div>
                </div>
                <div class="js">
                  <a class="tit" href="{$c['url']}" target="_blank">{$c['title']}</a>
                  <p class="num">
                    <em>满意度:{$c['satisfyscore']}</em>
                            <span>
                                {if !empty($c['price'])}
                                  <b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$c['price']}</b>元起
                                {else}
                                    电询
                                {/if}
                            </span>
                  </p>
                </div>
              </li>
                {/loop}

            </ul>
          </div><!-- 租车 -->
          {/if}
            {if $channel['spot']['isopen']}
              <div class="st-tabcon">
            <ul class="st-cp-list">
                {st:spot action="query" flag="mdd" destid="$info['id']" row="8" return="spotlist"}
                {loop $spotlist $s}
                  <li {if $n%4==0}class="mr_0"{/if}>
                    <div class="pic">
                      <img class="fl" src="{Common::img($s['litpic'],285,190)}" alt="{$s['title']}" width="285" height="190" />
                      <div class="buy"><a href="{$s['url']}" target="_blank">立即预订</a></div>
                    </div>
                    <div class="js">
                      <a class="tit" href="{$s['url']}" target="_blank">{$s['title']}</a>
                      <p class="num">
                          {if !empty($s['sellprice'])}
                          <del>票面价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$s['sellprice']}</del>
                          {/if}
                            <span>
                                {if !empty($s['price'])}
                                  <b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$s['price']}</b>元起
                                {else}
                                    电询
                                {/if}
                            </span>
                      </p>
                    </div>
                  </li>
                {/loop}
            </ul>
          </div><!-- 景点 -->
            {/if}
        </div><!-- 目的地产品列表 -->
        
        <div class="dest-hot-article">
        	<div class="st-tabnav">
          	<span class="on">热门{$channel['article']['channelname']}</span>
            <a class="more" href="/raiders/{$info['pinyin']}" target="_blank">更多</a>
          </div>
          <div class="st-tabcon">
          	<ul>
                {st:article action="query" flag="mdd" destid="$info['id']" row="4" return="articlelist"}
                {loop $articlelist $a}
            	    <li {if $n%2==0}class="mr_0"{/if}>
                        <a href="{$a['url']}">
                            <div class="pic"><img src="{$a['litpic']}" alt="{$a['title']}" /></div>
                          <div class="nr">
                            <p class="bt">{$a['title']}</p>
                            <p class="txt">{Common::cutstr_html($a['content'],70)}</p>
                            <p class="sj">
                                <span class="date">{Common::mydate('Y-m-d',$a['addtime'])}</span>
                              <span class="num">{$a['shownum']}</span>
                            </p>
                          </div>
                        </a>
                    </li>
            	{/loop}
            </ul>
          </div>
        </div><!-- 热门攻略 -->
        
      </div>
    	
    </div>
  </div>
  
{request "pub/footer"}
<script>
    $(function(){
        $('.st-dest-cplist').switchTab({
            effect:'fade'
        })

        $(".st-tabnav span").click(function(){
            var url = $(this).attr('data-url');
            $('.productmore').attr('href',url);
        })
        //更多图片
        $(".morepic").click(function(){
            var url = $(this).attr('data-url');
            location.href = url;
        })
        //展开详情
        $('.dest-sum-txt').find('.more').click(function(){
            $(this).parent().addClass('hide').siblings('div').removeClass('hide');
        });
    })
</script>

</body>
</html>
