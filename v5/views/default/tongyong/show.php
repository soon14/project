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
    {Common::css('tongyong.css,base.css,extend.css,calendar.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,focus-slide.js,template.js')}
</head>

<body>
  {request "pub/header"}
  <div class="big">
  	<div class="wm-1200">

    <div class="st-guide">
        <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/{$module_pinyin}/">{$channelname}</a>&gt;&nbsp;&nbsp;
        {loop $predest $dest}
            <a href="/lines/{$dest['pinyin']}/">{$dest['kindname']}</a>
        {/loop}
    </div><!--面包屑-->
      
      <div class="st-main-page">
      
      	<div class="st-public-show">
          <div class="lineshow-tw">
            <div class="lw-title">
              <h1>{$info['title']}</h1>
              <p>{$info['sellpoint']}</p>
            </div>
            <div class="focus-slide">
              <div class="imgnav" id="imgnav"> 
                <div id="img">
                    {loop $info['piclist'] $pic}
                        <img src="{Common::img($pic[0])}" width="460" height="325"/>
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
                            <li><img src="{Common::img($pic[0])}"/></li>
                            {/loop}
                        </ul>
                    </div>
                </div> 
              </div>
            </div>
            <div class="cp-show-msg">
              <div class="jg">
                  {if $info['price']}
                  <span>优惠价：<i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$info['price']}</b>起</span>
                  {else}
                  <span>优惠价：电询</span>
                  {/if}
                  {if $info['sellprice']}
                  <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['sellprice']}</del>
                  {/if}
              </div>
              <div class="sl">
                  <span>销量：{$info['sellnum']}</span><s>|</s><span>满意度：{$info['score']}</span>
              </div>
              <dl class="tc">
                <dt>产品类型：</dt>
                <dd class="type suitlist">
                    {st:tongyong action="suit" productid="$info['id']"}
                        {loop $data $s}
                        <a href="javascript:;" data-suitid="{$s['id']}" data-jifentprice="{$s['jifentprice']}" data-jifenbook="{$s['jifenbook']}">{$s['title']}</a>
                        {/loop}
                    {/st}

                </dd>
                <dd class="yd-btn">
                  <a href="javascript:;">立即预订</a>
                </dd>
              </dl>
              <ul class="msg-ul">
                <li>
                    <em>积分优惠：</em>
                    <p>
                        <span class="fan jifentprice"><i></i></span>
                        <span class="song jifenbook"><i></i></span>
                    </p>
                </li>
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
              </ul>	
            </div>
          </div>
          <div class="lineshow-con">
            <div class="tabnav-list">
              <span>产品详情</span>
              <span>客户评价</span>
              <span>我要咨询</span>
              <a class="yd-btn yd-btn-menu hide" href="javascript:;">立即预订</a>
            </div><!--线路导航-->
            <div class="tabbox-list">


                <div class="tabcon-list">
                    <div class="list-tit"><strong>产品详情</strong></div>
                    <div class="list-txt">
                        {$info['content']}
                    </div>
                </div>


                {include "pub/comment"}
                {include "pub/ask"}
              
            </div>
          </div>
        </div><!--详情主体-->
          <!--隐藏域-->
          <input type="hidden" id="suitid" value=""/>
          <input type="hidden" id="productid" value="{$info['id']}"/>
        
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="show"}
        </div><!--边栏模块-->
      
      </div>
    
    </div>
  </div>

  {request "pub/footer"}

  {request "pub/flink"}
  {Common::js('floatmenu/floatmenu.js,scorll.img.js')}
  {Common::css('/res/js/floatmenu/floatmenu.css',0,0)}

</body>
<script type="text/javascript">
    $(document).ready(function(){


        //内容切换
        $.floatMenu({
            menuContain : '.tabnav-list',
            tabItem : 'span',
            chooseClass : 'on',
            contentContain : '.tabbox-list',
            itemClass : '.tabcon-list'
            }
        );
        //套餐选择
        $('.suitlist').find('a').click(function(){

            var suitid = $(this).attr('data-suitid');
            var jifentprice = $(this).attr('data-jifentprice');
            var jifenbook = $(this).attr('data-jifenbook');
            if(jifentprice){
                $('.jifentprice').html(jifentprice+'元<i></i>')
            }else{
                $('.jifentprice').hide();
            }
            if(jifenbook){
                $('.jifenbook').html(jifenbook+'分<i></i>')
            }else{
                $('.jifenbook').hide();
            }
            $("#suitid").val(suitid);
            $(this).addClass('on').siblings().removeClass('on');



        })
        //选中第一个
        $('.suitlist').find('a').first().trigger('click');

        //预订
        $('.yd-btn').click(function(){
            var suitid = $("#suitid").val();
            var productid = $("#productid").val();
            var pinyin = "{$module_pinyin}";
            var url = SITEURL+pinyin+"/book?suitid="+suitid+"&productid="+productid;
            window.location.href = url;
        })

        var topHeight = $('.tabnav-list').offset().top;
        $(window).scroll(function(){
            if($(document).scrollTop() >= topHeight){
                $(".yd-btn-menu").show()
            }else{
                $(".yd-btn-menu").hide();
            }
        });


    });
</script>
</html>
