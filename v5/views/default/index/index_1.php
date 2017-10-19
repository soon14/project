<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$seoinfo['seotitle']}-{$webname}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    {$GLOBALS['cfg_indexcode']}
    {include "pub/varname"}
    {Common::css("base.css,index.css,extend.css")}
    {Common::js("jquery.min.js,base.js,common.js")}
</head>
<body>
{request 'pub/header'}
  
  <div class="focus_img">
    <div id="_banners" class="banners">
        {st:ad action="getad" name="IndexRollingAd" pc="1" return="ad"}
            {loop $ad['aditems'] $v}
                <div class="banner"><a href="{$v['adlink']}" target="_blank"><img width="1920" height="420" src="{Common::img($v['adsrc'])}" alt="{$v['adname']}" /></a></div>
            {/loop}
        {/st}

    </div>
    <div id="_focus" class="focus">
      {loop $ad['aditems'] $k}
      <a data-index="{php}echo $n-1;{/php}" href="javascript:void(0);" {if $n==1}class="on"{/if}><span class="bg-b"></span><span class="inner"></span></a>
      {/loop}
    </div>
  </div><!--滚动焦点图结束-->
  
  <div class="big">
  	<div class="wm-1200">
    {if $channel['line']['isopen']==1}
      <div class="st-slideTab">
      	<div class="st-tabnav">
          <h3 class="xl-bt">{$channel['line']['channelname']}</h3>
          {st:dest action="query" flag="channel_nav" row="6" typeid="1" return="linedest"}
            {loop $linedest $ld}
                <span data-id="{$ld['id']}">{$ld['kindname']}</span>
            {/loop}
          <a href="{$cmsurl}lines/" class="more">更多{$channel['line']['channelname']}</a>
        </div>
        {loop $linedest $ld}
        <div class="st-tabcon">
        	<ul class="st-cp-list">
            {st:line action="query" flag="mdd" destid="$ld['id']" row="6" return="linelist"}
              {loop $linelist $l}
                    <li>
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
                                <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['sellprice']}</del>
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
              {/loop}

          </ul>
        </div>

        {/loop}
          <div class="st-adimg">
              {st:ad action="getad" name="IndexLineAd1" pc="1" return="linead1"}
                  {if !empty($linead1)}
                    <a href="{$linead1['adlink']}"><img class="fl" src="{Common::img($linead1['adsrc'])}" alt="{$linead1['adname']}" width="285" height="622" /></a>
                  {/if}
              {/st}
          </div>
      </div><!--旅游线路结束-->
        {st:ad action="getad" name="IndexLineAd2" pc="1" return="linead2"}
        {if !empty($linead2)}
        <div class="st-list-sd">
            <a href="{$linead2['adlink']}"><img class="fl" src="{Common::img($linead2['adsrc'])}" alt="{$linead2['adname']}" width="1200" height="100"></a>
        </div>
        {/if}
    {/if}

    {if $channel['hotel']['isopen']==1}
      <div class="st-slideTab">
      	<div class="st-tabnav">
        	<h3 class="jd-bt">{$channel['hotel']['channelname']}</h3>
            {st:dest action="query" flag="channel_nav" row="6" typeid="2" return="hoteldest"}
            {loop $hoteldest $hd}
                <span data-id="{$hd['id']}">{$hd['kindname']}</span>
            {/loop}

          <a href="{$cmsurl}hotels/" class="more">更多{$channel['hotel']['channelname']}</a>
        </div>
       {loop $hoteldest $hd}
        <div class="st-tabcon">
        	<ul class="st-cp-list">
            {st:hotel action="query" flag="mdd" destid="$hd['id']" row="6" return="hotellist"}
              {loop $hotellist $h}
                <li>
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
            {/st}

          </ul>
        </div>
       {/loop}

        <div class="st-adimg">
            {st:ad action="getad" name="IndexHotelAd1" return="hotelad1"}
                {if !empty($hotelad1)}
                <a href="{$hotelad1['adlink']}"><img class="fl" src="{Common::img($hotelad1['adsrc'])}" alt="{$hotelad1['adname']}" width="285" height="570" /></a>
                {/if}
            {/st}

        </div>
      </div><!--热门酒店结束-->
        {st:ad action="getad" name="IndexHotelAd2" return="hotelad2"}
        {if !empty($hotelad2)}
        <div class="st-list-sd">
            <a href="{$hotelad2['adlink']}"><img class="fl" src="{Common::img($hotelad2['adsrc'])}" alt="{$hotelad2['adname']}" width="1200" height="100"></a>
        </div>
        {/if}
    {/if}


    {if $channel['spot']['isopen']==1}
      <div class="st-slideTab">
      	<div class="st-tabnav">
        	<h3 class="mp-bt">{$channel['spot']['channelname']}</h3>
            {st:dest action="query" flag="channel_nav" row="6" typeid="5" return="spotdest"}
            {loop $spotdest $sd}
            <span data-id="{$sd['id']}">{$sd['kindname']}</span>
            {/loop}
          <a href="/spots/" class="more">更多{$channel['spot']['channelname']}</a>
        </div>
        {loop $spotdest $sd}
            <div class="st-tabcon">
        	<ul class="st-cp-list">
                {st:spot action="query" flag="mdd" destid="$sd['id']" row="6" return="spotlist"}
                {loop $spotlist $s}
                <li>
                    <div class="pic">
                        <img class="fl" src="{Common::img($s['litpic'],285,190)}" alt="{$s['title']}" width="285" height="190" />
                        <div class="buy"><a href="{$s['url']}" target="_blank">立即预订</a></div>
                    </div>
                    <div class="js">
                        <a class="tit" href="{$s['url']}" target="_blank">{$s['title']}</a>
                        <p class="num">
                            {if !empty($s['sellprice'])}
                            <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$s['sellprice']}</del>
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
                {/st}

          </ul>
        </div>
        {/loop}

        <div class="st-adimg">
            {st:ad action="getad" name="IndexSpotAd1" return="spotad1"}
            {if !empty($spotad1)}
            <a href="{$spotad1['adlink']}"><img class="fl" src="{Common::img($spotad1['adsrc'])}" alt="{$spotad1['adname']}" width="285" height="570" /></a>
            {/if}
            {/st}

        </div>
      </div><!--景点门票结束-->
        {st:ad action="getad" name="IndexSpotAd2" return="spotad2"}
        {if !empty($spotad2)}
        <div class="st-list-sd">
            <a href="{$spotad2['adlink']}"><img class="fl" src="{Common::img($spotad2['adsrc'])}" alt="{$spotad2['adname']}" width="1200" height="100"></a>
        </div>
        {/if}

    {/if}



    {if $channel['tuan']['isopen']==1}
      <div class="st-slideTab">
      	<div class="st-tabnav">
        	<h3 class="tg-bt">{$channel['tuan']['channelname']}</h3>
            {st:dest action="query" flag="channel_nav" row="6" typeid="13" return="tuandest"}
                {loop $tuandest $td}
                <span data-id="{$td['id']}">{$td['kindname']}</span>
                {/loop}

          <a href="{$cmsurl}tuan/" class="more">更多{$channel['tuan']['channelname']}</a>
        </div>
       {loop $tuandest $td}
        <div class="st-tabcon">
        	<ul class="st-cp-list tuan-list">
                {st:tuan action="query" flag="mdd" destid="$td['id']" row="6" return="tuanlist"}
                {php}$k=1;{/php}
                {loop $tuanlist $t}
          	      <li {if $k%4==0}class="mr_0"{/if}>
            	<div class="pic">
              	<img class="fl" src="{Common::img($t['litpic'],285,190)}" alt="{$t['title']}" width="285" height="190" />
                <div class="buy"><a href="{$t['url']}" target="_blank">立即预订</a></div>
              </div>
              <div class="js">
              	<a class="tit" href="{$t['url']}" target="_blank">{$t['title']}</a>
                <p class="attr">
                    {loop $t['iconlist'] $ico}
                    <img src="{$ico['litpic']}" />
                    {/loop}
                </p>
                <p class="num">
                    {if !empty($t['sellprice'])}
                    <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$t['sellprice']}</del>
                    {/if}
                            <span>
                                {if !empty($t['price'])}
                                  <b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$t['price']}</b>元起
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
        </div>
       {/loop}
      </div><!--特价团购结束-->
        {st:ad action="getad" name="IndexTuanAd1" return="tuanad1"}
        {if !empty($tuanad1)}
        <div class="st-list-sd">
            <a href="{$tuanad1['adlink']}"><img class="fl" src="{Common::img($tuanad1['adsrc'])}" alt="{$tuanad1['adname']}" width="1200" height="100"></a>
        </div>
        {/if}
    {/if}


    {if $channel['car']['isopen']==1}
      <div class="st-slideTab">
      	<div class="st-tabnav">
          <h3 class="zc-bt">{$channel['car']['channelname']}</h3>
          <a href="{$cmsurl}cars/" class="more">更多{$channel['car']['channelname']}</a>
        </div>

            <div class="st-tabcon">
        	<ul class="st-car-list">

                {st:car action="query" flag="recommend"  row="5" return="carlist"}
                 {loop $carlist $c}
          	       <li {if $n%5==0}class="mr_0"{/if}>
                        <div class="pic">
                        <img class="fl" src="{Common::img($c['litpic'],224,190)}" alt="{$c['title']}" width="224" height="190" />
                        <div class="buy"><a href="{$c['url']}" target="_blank">立即预订</a></div>
                      </div>
                      <div class="js">
                        <a class="tit" href="{$c['url']}" target="_blank">{$c['title']}</a>
                        <p class="num">
                            {if !empty($c['sellprice'])}
                            <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$c['sellprice']}</del>
                            {/if}
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
        </div>

      </div><!--旅游租车结束-->
        <!--car ad-->
        {st:ad action="getad" name="IndexCarAd1" return="carad1"}
        {if !empty($carad1)}
        <div class="st-list-sd">
            <a href="{$carad1['adlink']}"><img class="fl" src="{Common::img($carad1['adsrc'])}" alt="{$carad1['adname']}" width="1200" height="100"></a>
        </div>
        {/if}

    {/if}

    {if $channel['visa']['isopen']==1}
      <div class="st-slideTab">
      	<div class="st-tabnav">
        	<h3 class="qz-bt">{$channel['visa']['channelname']}</h3>
          <a href="{$cmsurl}visa/" class="more">更多{$channel['visa']['channelname']}</a>
        </div>
        <div class="st-tabcon">
        	<ul class="st-visa-list">
             {st:visa action="query" flag="order" row="5" return="visalist"}
                {loop $visalist $v}
                    <li {if $n%5==0} class="mr_0" {/if}>
                        <a class="fl" href="{$v['url']}" target="_blank">
                        <div class="country"><em><img src="{Common::img($v['litpic'],77,77)}"  width="77" height="77" /></em></div>
                        <span class="tit">{$v['title']}</span>
                      </a>
                      <p class="num">
                        {if !empty($v['sellprice'])}
                            <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$v['sellprice']}</del>
                        {/if}
                        {if !empty($v['price'])}
                            <span><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$v['price']}</b>元</span>
                        {/if}
                      </p>
                    </li>
                {/loop}
          </ul>
        </div>
      </div><!--签证办理结束-->
        <!--visa ad-->
        {st:ad action="getad" name="IndexVisaAd1" return="visaad1"}
        {if !empty($visaad1)}
        <div class="st-list-sd">
            <a href="{$visaad1['adlink']}"><img class="fl" src="{Common::img($visaad1['adsrc'])}" alt="{$visaad1['adname']}" width="1200" height="100"></a>
        </div>
        {/if}
    {/if}


    {if $channel['article']['isopen']==1}
      <div class="st-slideTab">
      	<div class="st-tabnav">
          <h3 class="gl-bt">{$channel['article']['channelname']}</h3>
          <span>最新{$channel['article']['channelname']}</span>
          {st:dest action="query" flag="channel_nav" row="6" typeid="4" return="articledest"}
            {loop $articledest $ad}
            <span data-id="{$td['id']}">{$ad['kindname']}</span>
            {/loop}

          <a href="{$cmsurl}raiders/" class="more">更多{$channel['article']['channelname']}</a>
        </div>
        {st:article action="query" flag="order" row="7" return="articlelist"}
        <div class="st-tabcon">
        	<ul class="st-gl-list">
            {loop $articlelist $a}
                {if $n==1}
                    <li class="ml_0">
                        <a class="fl" href="{$a['url']}"><i class="hot">hot</i><img class="fl" src="{Common::img($a['litpic'],386,298)}" alt="{$a['title']}" width="386" height="298" /></a>
                      <a class="tit" href="{$a['url']}" target="_blank">{$a['title']}</a>
                      <p class="txt">{Common::cutstr_html($a['content'],70)}</p>
                    </li>
                {elseif $n<4}
                    <li>
                        <a class="fl" href="{$a['url']}"><i class="hot">hot</i><img class="fl" src="{Common::img($a['litpic'],386,298)}" alt="{$a['title']}" width="180" height="154" /></a>
                      <div class="con">
                        <a class="tit" href="{$a['url']}">{$a['title']}</a>
                        <p class="txt">{Common::cutstr_html($a['content'],70)}</p>
                      </div>
                    </li>



                {elseif $n>3}
                    <li>
                      <a class="tit" href="{$a['url']}" target="_blank">{$a['title']}</a>
                      <p class="txt">{Common::cutstr_html($a['content'],70)}</p>
                    </li>
                {/if}
            {/loop}

          </ul>
        </div>
        {loop $articledest $ad}
          <div class="st-tabcon">
              <ul class="st-gl-list">
                  {st:article action="query" flag="mdd" destid="$ad['id']" row="7" return="articlelist"}
                  {loop $articlelist $a}
                  {if $n==1}
                  <li class="ml_0">
                      <a class="fl" href="{$a['url']}"><i class="hot">hot</i><img class="fl" src="{Common::img($a['litpic'],386,298)}" alt="{$a['title']}" width="386" height="298" /></a>
                      <a class="tit" href="{$a['url']}" target="_blank">{$a['title']}</a>
                      <p class="txt">{Common::cutstr_html($a['content'],70)}</p>
                  </li>
                  {elseif $n<4}
                  <li>
                      <a class="fl" href="{$a['url']}"><i class="hot">hot</i><img class="fl" src="{Common::img($a['litpic'],386,298)}" alt="{$a['title']}" width="180" height="154" /></a>
                      <div class="con">
                          <a class="tit" href="{$a['url']}">{$a['title']}</a>
                          <p class="txt">{Common::cutstr_html($a['content'],70)}</p>
                      </div>
                  </li>



                  {elseif $n>3}
                  <li>
                      <a class="tit" href="{$a['url']}" target="_blank">{$a['title']}</a>
                      <p class="txt">{Common::cutstr_html($a['content'],70)}</p>
                  </li>
                  {/if}
                  {/loop}

              </ul>
          </div>
        {/loop}


      </div><!--旅游攻略结束-->
        {st:ad action="getad" name="IndexArticleAd1" return="articlead1"}
        {if !empty($articlead1)}
        <div class="st-list-sd">
            <a href="{$articlead1['adlink']}"><img class="fl" src="{Common::img($articlead1['adsrc'])}" alt="{$articlead1['adname']}" width="1200" height="100"></a>
        </div>
        {/if}
    {/if}

    
    </div>
  </div>

 {request 'pub/footer'}
 {request "pub/flink"}
 {Common::js("fcous.js,slideTabs.js")}

    <script>
        $(function(){
            $('.st-slideTab').switchTab()
        })
    </script>

</body>
</html>
