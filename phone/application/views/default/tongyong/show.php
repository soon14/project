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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {php echo Common::css('amazeui.css,style.css');}
    {php echo Common::js('jquery.min.js,amazeui.js,delayLoading.min.js');}
    <script>
        $(function(){
            $('#my-st-slide').offCanvas('close');
        })
</script>
</head>

<body>

{request "pub/header/typeid/$typeid/isshowpage/1"}
  
  <section>
    
  	<div class="mid_content">
     
      <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
        <ul class="am-slides">
            {loop $info['piclist'] $pic}
             <li><img src="{Common::img($pic[0])}"></li>
            {/loop}
        </ul>
      </div><!--轮播图-->
      
      <div class="line_show_top">
      	<p class="tit">{$info['title']}</p>
      	<p class="txt">{$info['sellpoint']}</p>
      	<p class="price">
            {if !empty($info['price'])}
            <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$info['price']}</b>起</span>
            {else}
            <span><b>电询</b></span>
            {/if}
            <del>原价:<i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['sellprice']}</del>
        </p>
         {if !empty($minsuit)}
        <p class="jf">积分抵现:{$minsuit['jifentprice']}&nbsp;&nbsp;评论送积分:{$minsuit['jifencomment']}&nbsp;&nbsp;预订送积分:{$minsuit['jifenbook']}</p>
       	{/if}
          <p class="num">
        	<span><b>{$info['sellnum']}</b>销量</span>
        	<span><b>{$info['score']}</b>满意度</span>
        	<span><b>{$info['commentnum']}</b>人点评<i>&gt;</i></span>
        </p>
      </div><!--顶部介绍-->
      
      <div class="cp_show_msg">
        <div class="opt_type">选择产品类型<i>&gt;</i></div>
      </div><!--产品信息-->
      
      <div class="line_tablist_box">
      	<div class="bt_tit"><span>产品介绍</span></div>
        <div class="cont_nr">
        	{$info['content']}
        </div>
      </div><!--景点介绍-->

    </div>
    
  </section>

{request 'pub/footer'}
  
  <div class="bom_link_box">
    <div class="bom_fixed">
        <a href="tel:{$GLOBALS['cfg_m_phone']}">电话咨询</a>
        <a class="on order" data-id="{$info['id']}" href="javascript:;">立即预定</a>
        {if Model_Fenxiao::is_fenxiao()}<a style="width:30%;background:#FFCCCC;color:#fff" href="/plugins/fx_phone/index/share?url={Model_Fenxiao::get_fx_url()}&content={urlencode($info['title'])}">我要分销</a>{/if}
    </div>
  </div>
<script>
    var pinyin="{$pinyin}";
    var id="{$info['id']}";
    $(function(){

        $('.pl').click(function(){
            var url = SITEURL+"pub/comment/id/{$info['id']}/typeid/{$typeid}";
            window.location.href = url;
        })
        //预订按钮
        $('.order').click(function(){
            var productid = $(this).attr('data-id');
            url = SITEURL+pinyin+'/book/id/'+id;
            window.location.href = url;
        })

        $(".opt_type").click(function(){
            url = SITEURL+pinyin+'/book/id/'+id;
            window.location.href = url;
        });
    });

</script>
</body>
</html>
