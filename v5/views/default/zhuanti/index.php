<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{$seoinfo['seotitle']}-{$webname}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('theme.css,header.css,base.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>

<body>
<div class="web-top">
    <div class="wm-1200">
        <div class="notice-txt">{$GLOBALS['cfg_gonggao']}</div>
        <div class="scroll-order">
            <ul>
                {st:comment action="query" flag="all" row="3"}
                {loop $data $row}
                <li>{$row['nickname']}{$row['pltime']}评论了{$row['productname']}</li>
                {/loop}
                {/st}
            </ul>
        </div>
        <div class="top-login">
            <span id="loginstatus">

            </span>
            <a class="dd" href="{$cmsurl}search/order"><i></i>订单查询</a>
            <dl class="dh">
                <dt><i></i>网站导航</dt>
                <dd>
                    {st:channel action="pc" row="10"}
                    {loop $data $row}
                    <a href="{$row['url']}">{$row['title']}</a>
                    {/loop}
                    {/st}
                </dd>
            </dl>
            <a class="lx_us" href="#"><i></i>联系我们</a>
        </div>
    </div>
</div><!--顶部-->


    {if !empty($info['bgimage'])}
      <div class="st-theme-head-box" style=" background:url({$info['bgimage']}) center no-repeat"></div><!-- 顶部背景 -->
    {else}
      <div class="st-theme-head-box" style=" background:url(/res/images/theme-top-bg.jpg) center no-repeat"></div><!-- 顶部背景 -->
    {/if}
  
  <div class="big" {if !empty($info['bgcolor'])}style=" background:#{$info['bgcolor']}"{else}style=" background:#dce9fa"{/if}>
  	<div class="wm-1200">
    
    	<div class="st-main-page">
        
        <div class="st-theme-center">
        	<h3 class="con-tit">{$info['ztname']}</h3>
          <div class="con-txt">
          	{$info['jieshao']}
          </div>
        </div><!-- 专题简介 -->
        {st:line action="query" flag="theme" themeid="$info['id']" row="6" return="linelist"}
        {if count($linelist)>0}
            <div class="st-theme-cpbox">
        	<div class="cp-tit"><strong>推荐线路</strong></div>
          <div class="cp-conbox">


          	    <div class="adv-imgbox">
                    {st:ad action="getad" name="zt_line_ad" row="1" pc="1" return="linead"}
                    {if !empty($linead)}
                    <a target="_blank" href="{$linead['adlink']}"><img src="{Common::img($linead['adsrc'])}" alt="{$linead['adname']}" width="229" height="573px" /></a>
                    {/if}
                </div>

            <div class="cp-conlist">
            	<ul>
                    {loop $linelist $l}
              	      <li>
                	<a class="show-link" href="{$l['url']}" target="_blank">
                    <div class="pic">
                        {if $l['saveprice']>0}
                        <span class="sub"><em>立减</em><strong>{$l['saveprice']}元</strong></span>
                        {/if}
                        <img src="{Common::img($l['litpic'])}" alt="{$l['title']}" /></div>
                    <div class="bt">{$l['title']}</div>
                    <div class="cz">
                      <span class="jg"><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['price']}</b>起</span>
                      <span class="now-gm">立即购买</span>
                    </div>
                  </a>
                </li>
                    {/loop}
              </ul>
            </div>
          </div>
        </div><!-- 产品列表 -->
        {/if}
        {st:hotel action="query" flag="theme" themeid="$info['id']" row="6" return="hotellist"}
        {if count($hotellist)>0}
            <div class="st-theme-cpbox">
        	<div class="cp-tit"><strong>推荐酒店</strong></div>
          <div class="cp-conbox">
            <div class="cp-conlist">
            	<ul>
                 {loop $hotellist $h}
              	<li>
                	<a class="show-link" href="{$h['url']}" target="_blank">
                    <div class="pic"><img src="{Common::img($h['litpic'])}" alt="{$h['title']}" /></div>
                    <div class="bt">{$h['title']}</div>
                    <div class="cz">
                      <span class="jg"><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$h['price']}</b>起</span>
                      <span class="now-gm">立即购买</span>
                    </div>
                  </a>
                </li>
                {/loop}
              </ul>
            </div>
              {st:ad action="getad" name="zt_hotel_ad" row="1" pc="1" return="hotelad"}

                <div class="adv-imgbox">
                    {if !empty($hotelad)}
                    <a target="_blank" href="{$hotelad['adlink']}"><img src="{Common::img($hotelad['adsrc'])}" alt="{$hotelad['adname']}" width="229" height="573" /></a>{/if}
                </div>

          </div>
        </div><!-- 产品列表 -->
        {/if}

          {st:car action="query" flag="theme" themeid="$info['id']" row="6" return="carlist"}
            {if count($carlist)>0}
            <div class="st-theme-cpbox">
                <div class="cp-tit"><strong>推荐车辆</strong></div>
                <div class="cp-conbox">
                    {st:ad action="getad" name="zt_car_ad" row="1" pc="1" return="carad"}

                    <div class="adv-imgbox">
                        {if !empty($carad)}
                        <a target="_blank" href="{$carad['adlink']}"><img src="{Common::img($carad['adsrc'])}" alt="{$carad['adname']}" width="229" height="573" /></a>
                        {/if}
                    </div>

                    <div class="cp-conlist">
                        <ul>
                            {loop $carlist $c}
                            <li>
                                <a class="show-link" href="{$c['url']}" target="_blank">
                                    <div class="pic">
                                        <img src="{Common::img($c['litpic'])}" alt="{$c['title']}" /></div>
                                    <div class="bt">{$c['title']}</div>
                                    <div class="cz">
                                        <span class="jg"><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$c['price']}</b>起</span>
                                        <span class="now-gm">立即购买</span>
                                    </div>
                                </a>
                            </li>
                            {/loop}
                        </ul>
                    </div>
                </div>
            </div><!-- 产品列表 -->
            {/if}

            {st:spot action="query" flag="theme" themeid="$info['id']" row="6" return="spotlist"}
            {if count($spotlist)>0}
            <div class="st-theme-cpbox">
                <div class="cp-tit"><strong>推荐景点</strong></div>
                <div class="cp-conbox">
                    <div class="cp-conlist">
                        <ul>
                            {loop $spotlist $s}
                            <li>
                                <a class="show-link" href="{$s['url']}" target="_blank">
                                    <div class="pic"><img src="{Common::img($s['litpic'])}" alt="{$s['title']}" /></div>
                                    <div class="bt">{$s['title']}</div>
                                    <div class="cz">
                                        <span class="jg"><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$s['price']}</b>起</span>
                                        <span class="now-gm">立即购买</span>
                                    </div>
                                </a>
                            </li>
                            {/loop}
                        </ul>
                    </div>
                    {st:ad action="getad" name="zt_spot_ad" row="1" pc="1" return="spotad"}

                    <div class="adv-imgbox">
                        {if !empty($spotad)}
                        <a target="_blank" href="{$spotad['adlink']}"><img src="{Common::img($spotad['adsrc'])}" alt="{$spotad['adname']}" width="229" height="573" /></a>
                        {/if}
                    </div>

                </div>
            </div><!-- 产品列表 -->
            {/if}

        {st:article action="query" flag="theme" themeid="$info['id']" row="4" return="arclist"}
        {if count($arclist)>0}
            <div class="st-theme-cpbox">
        	<div class="cp-tit"><strong>推荐攻略</strong></div>
          <div class="gl-conbox">
          	<ul>
                {loop $arclist $a}
            	    <li>
                        <a href="{$a['url']}" target="_blank">
                          <div class="pic"><img src="{Common::img($a['litpic'],270,170)}" alt="{$a['title']}" /></div>
                          <div class="bt">{$a['title']}</div>
                          <div class="nr">{Common::cutstr_html($a['content'],30)}</div>
                        </a>
                    </li>
                {/loop}

            </ul>
          </div>
        </div><!-- 产品列表 -->
        {/if}
        
      </div>
    
    </div>

{request 'pub/footer'}
{request "pub/flink"}

</body>
</html>
