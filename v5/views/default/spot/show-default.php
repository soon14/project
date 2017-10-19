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
    {Common::css('scenic.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>

<body>
{request "pub/header"}

  <div class="big">
  	<div class="wm-1200">

    <div class="st-guide">
        <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&gt;<a href="/spots/">{$channelname}</a>&gt;
        {loop $predest $dest}
        <a href="/spots/{$dest['pinyin']}/">{$dest['kindname']}{$channelname}</a>&gt;
        {/loop}
    </div><!--面包屑-->
      
      <div class="st-main-page">
      	<div class="st-scenic-show">
        	<div class="scenicshow-tw">
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
                        <li><img src="{Common::img($pic[0],90,59)}"/></li>
                        {/loop}

                    </ul>
                  </div>
                </div>        
              </div>
            </div>
            <div class="cp-show-msg">
            	<div class="hs-title">
              	<h1>{$info['title']}</h1>
                <p>{$info['address']}</p>
              </div>
              {if $info['hasticket']}
              <div class="price">
                  {if !empty($info['price'])}
                  <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$info['price']}</b>起</span>
                  {else}
                  <span>电询</span>
                  {/if}</div>
              <div class="sl">
              	<span>销量：{$info['sellnum']}</span><s>|</s><span>满意度：{$info['satisfyscore']}</span><s>|</s><span>推荐：{$info['recommendnum']}</span>
              </div>
             {/if}
              <div class="sell-point">
                  <span>景点简介</span>
                  {Common::cutstr_html($info['content'],70)}
              </div>
              <ul class="msg-ul">
              	<li><em>景区主题：</em><p>
                        {loop $info['attrlist'] $attr}
                         {$attr['attrname']}&nbsp;
                        {/loop}</p></li>
                <li><em>取票方式：</em><p>{$info['getway']}</p></li>
                {if $info['hasticket']}
                <li class="mb_0"><em>付款方式：</em>
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
                        {/if}
                    </p>
                </li>
                {/if}
              </ul>	
            </div>
          </div>
          <div class="scenicshow-con">
          	<div class="tabnav-list">
                {if $info['hasticket']}
            	    <span class="on">门票信息</span>
                {/if}
                {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="spotcontent"}
                    {loop $spotcontent $row}
                      <span>{$row['chinesename']}</span>
                    {/loop}
                {/st}
                {if $info['hasticket']}
            	<span>客户评价</span>
            	<span>我要咨询</span>
                {/if}
            </div><!--酒店导航-->
            <div class="tabbox-list">
            	
              <div class="tabcon-list">
                <div class="car-typetable">
                    <table width="100%" border="0">

                        {st:spot action="suit_type" row="8" productid="$info['id']" return="typelist"}
                        {loop $typelist $type}

                        <tr>
                            <th width="220" height="40" scope="col"><span class="pl20">{$type['title']}</span></th>

                            <th width="80" scope="col">原价</th>
                            <th width="80" align="center" scope="col">优惠价</th>
                            <th width="80" scope="col">支付方式</th>
                            <th width="260" scope="col">&nbsp;</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        {st:spot action="suit_by_type" row="10" productid="$info['id']" suittypeid="$type['id']" return="suitlist"}
                        {loop $suitlist $suit}
                        <tr>
                            <td height="40"><strong class="type-tit">{$suit['title']}</strong></td>

                            <td align="center"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suit['sellprice']}</td>
                            <td align="center"><span class="price">{if !empty($suit['ourprice'])}<i class="currency_sy">{Currency_Tool::symbol()}</i>{$suit['ourprice']}起{else}电询{/if}</span></td>
                            <td>
                                {if $suit['paytype']==1}
                                <span class="fk-way">全款支付</span>

                                {elseif $suit['paytype']==2}
                                <span class="fk-way">定金支付</span>
                                {elseif $suit['paytype']==3}
                                <span class="fk-way">二次确认</span>
                                {/if}
                            </td>
                            <td>
                                {if $suit['jifenbook']}
                                <span class="s-jf">{$suit['jifenbook']}分<i></i></span>
                                {/if}
                                {if $suit['jifencomment']}
                                <span class="p-jf">{$suit['jifencomment']}分<i></i></span>
                                {/if}
                                {if $suit['jifentprice']}
                                <span class="d-jf">{$suit['jifentprice']}元<i></i></span>
                                {/if}
                            </td>
                            <td><a class="booking-btn" href="javascript:;" data-suitid="{$suit['id']}">预订</a></td>
                        </tr>
                        <tr style="display: none">
                            <td colspan="7">
                                <div class="cartype-nr">
                                    {$suit['description']}
                                </div>
                            </td>
                        </tr>
                        {/loop}
                        {/loop}

                    </table>
                </div>
              </div>

                {loop $spotcontent $s}
                <div class="tabcon-list">
                    <div class="list-tit"><strong>{$s['chinesename']}</strong></div>
                    <div class="list-txt">
                        {$s['content']}
                    </div>
                </div>
                {/loop}
                {if $info['hasticket']}
                    {include "pub/comment"}
                    {include "pub/ask"}
                {/if}

              
            </div>
          </div>
        </div><!--详情主体-->
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="show"}
        </div><!--边栏模块-->
      </div>
    
    </div>
  </div>
  <input type="hidden" id="productid" value="{$info['id']}"/>

{request "pub/footer"}
{request "pub/flink"}
{Common::js('floatmenu/floatmenu.js')}
{Common::css('/res/js/floatmenu/floatmenu.css',0,0)}
{Common::js('SuperSlide.min.js,template.js,scorll.img.js')}
{Common::js('layer/layer.js',0)}
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
        //套餐点击
        $(".type-tit").click(function(){
            $(this).parents('tr').first().next().toggle();
        })

        //预订
        $(".booking-btn").click(function(){
            var suitid = $(this).attr('data-suitid');
            var productid = $("#productid").val();
            var url = SITEURL+'spot/book/?suitid='+suitid+"&productid="+productid;
            window.location.href = url;
        })

       // $(".type-tit").first().trigger('click');





    });


</script>
</body>
</html>
