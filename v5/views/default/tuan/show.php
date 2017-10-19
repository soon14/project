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
    {Common::css('tuan.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,tuan.js')}
</head>

<body>
{request "pub/header"}
  
  
  
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/cars/">{$channelname}</a>&gt;&nbsp;&nbsp;
            {loop $predest $dest}
            <a href="/hotels/{$dest['pinyin']}/">{$dest['kindname']}</a>
            {/loop}
      </div><!--面包屑-->
      
      <div class="st-main-page">
      
      	<div class="st-tuanlist-box">
        	<div class="tuanshow-tw">
          	<div class="focus-slide">
              <div class="imgnav" id="imgnav"> 
                <div id="img">
                    {loop $info['piclist'] $pic}
                        <img src="{Common::img($pic[0],460,325)}" width="460" height="325"/>
                    {/loop}
                  <div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                  <div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                </div>
                <div id="cbtn">
                  <i class="picSildeLeft"><img src="{$GLOBALS['cfg_public_url']}images/picSlideLeft.gif"/></i>
                  <i class="picSildeRight"><img src="{$GLOBALS['cfg_public_url']}images/picSlideRight.gif"/></i>
                  <div id="cSlideUl">
                    <ul>
                        {loop $info['piclist'] $pic}
                            <li><img src="{Common::img($pic[0],460,325)}"/></li>
                        {/loop}
                    </ul>
                  </div>
                </div>         
              
              </div>
            </div><!--产品轮播图-->
            <div class="cp-show-msg">
            	<h1 class="buy-tit">
                    {$info['title']}
                    {loop $info['iconlist'] $icon}
                    <img src="{$icon['litpic']}" />
                    {/loop}
                </h1>
              <div class="sell-point"><span>推荐理由</span>{$info['sellpoint']}</div>
              <div class="data">
                  <span class="dao" id="tick_{$info['id']}">
                              <span class="RemainD"></span>天
                              <span class="RemainH"></span>时
                              <span class="RemainM"></span>分
                              <span class="RemainS"></span>秒
                              <input type="hidden" class="ticktime" rel="tick_{$info['id']}" value="{php echo date('Y/m/d H:i:s',$info['endtime']);}">
                  </span>
              </div>
              <div class="book-box">
              	<div class="price">
                    {if $info['price']}
                	    <span><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['price']}</span>
                    {else}
                    <span>电询</span>
                    {/if}
                  <em>{if $info['discount']}{$info['discount']}折{/if}</em>
                    {if $info['sellprice']}
                        <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['sellprice']}</del>
                    {else}
                        <del>原价：电询</del>
                    {/if}
                </div>
                <div class="yd-btn">
                    {if $info['expire']==1}
                	    <a style=" cursor:not-allowed; background: #d5d5d5" href="javascript:;">即将开始</a>
                    {else}
                        <a href="javascript:;">立即抢购</a>
                    {/if}
                </div>
              </div>
              <div class="sl">
                  <span>销量：{$info['sellnum']}</span><s>|</s><span>满意度：{if $info['satisfyscore']}{$info['satisfyscore']}%{/if}</span><s>|</s><span>推荐：{$info['recommendnum']}</span>
              </div>
              <div class="fk-fs">
              	<span>付款方式：</span>
                <p>
                    {if in_array(1,$paytypeArr)}
                    <img src="{$GLOBALS['cfg_public_url']}images/pay_zfb.gif" />
                    {/if}
                    {if in_array(2,$paytypeArr)}
                    <img src="{$GLOBALS['cfg_public_url']}images/pay_kq.gif" />
                    {/if}
                    {if in_array(3,$paytypeArr)}
                    <img src="{$GLOBALS['cfg_public_url']}images/pay_hc.gif" />
                    {/if}
                    {if in_array(4,$paytypeArr)}
                    <img src="{$GLOBALS['cfg_public_url']}images/pay_yl.gif" />
                    {/if}
                    {if in_array(5,$paytypeArr)}
                    <img src="{$GLOBALS['cfg_public_url']}images/pay_qb.gif" />
                    {/if}
                    {if in_array(7,$paytypeArr)}
                    <img src="{$GLOBALS['cfg_public_url']}images/pay_bb.gif" />
                    {/if}
                    {if in_array(8,$paytypeArr)}
                    <img src="{$GLOBALS['cfg_public_url']}images/pay_wx.gif" />
                    {/if}</p>
              </div>
            </div>
          </div>
          <div class="lineshow-con">
          	<div class="tabnav-list">
                {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="tuancontent"}
                    {loop $tuancontent $row}
                    <span>{$row['chinesename']}</span>
                    {/loop}
                {/st}
            	<span>客户评价</span>
            	<span>我要咨询</span>
                {if $info['expire']==0}
                 <a class="yd-btn" href="javascript:;">立即抢购</a>
                {/if}
            </div><!--线路导航-->
            <div class="tabbox-list">
                {loop $tuancontent $hotel}
                <div class="tabcon-list">
                    <div class="list-tit"><strong>{$hotel['chinesename']}</strong></div>
                    <div class="list-txt">
                        {$hotel['content']}
                    </div>
                </div>
                {/loop}
                {include "pub/comment"}
                {include "pub/ask"}

            </div>
          </div>
        </div>
        
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="show"}
        </div>
      
      </div>
    
    </div>
  </div>
<input type="hidden" id="productid" value="{$info['id']}"/>
{request "pub/footer"}
{request "pub/flink"}
{Common::js('floatmenu/floatmenu.js')}
{Common::js('scorll.img.js')}
{Common::css('/res/js/floatmenu/floatmenu.css',0,0)}
<script type="text/javascript">
$(document).ready(function(){                          

    //内容切换
    $.floatMenu({
        menuContain : '.tabnav-list',
        tabItem : 'span',
        chooseClass : 'on',
        contentContain : '.tabbox-list',
        itemClass : '.tabcon-list'
    });
    //倒计时
    Tuan.tickTimeEle($('.ticktime')[0]);

    {if $info['expire']==0}
    //预订
    $('.yd-btn').click(function(){
        var productid = $("#productid").val();
        var url = SITEURL+'tuan/book?productid='+productid;
        window.location.href = url;
    })
   {/if}

	
});
</script>
</body>
</html>
