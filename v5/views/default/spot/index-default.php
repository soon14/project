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
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js')}

</head>

<body>
  {request "pub/header"}
  <div class="big">
  	<div class="wm-1200">
    
      <div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
      </div><!--面包屑-->
      
      <div class="st-scenic-home-top">
        <div id="st-scenic-slideBox" class="st-scenic-slideBox">
          <div class="hd">
            <ul>
                {st:ad action="getad" name="SpotRollingAd" pc="1" return="spotad"}
                {loop $spotad['aditems'] $k $v}
                <li>$k</li>
                {/loop}

            </ul>
          </div>
          <div class="bd">
            <ul>
              {loop $spotad['aditems'] $k $v}
                <li><a href="{Common::img($v['adlink'])}" target="_blank"><img src="{Common::img($v['adsrc'])}" /></a></li>
              {/loop}

            </ul>
          </div>
          <!--前/后按钮代码-->
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
        </div><!--景点门票首页焦点图-->
      </div>
      {st:dest action="query" flag="channel_nav" typeid="$typeid" row="6" return="destlist"}
        {loop $destlist $dest}
            <div class="st-cp-slideTab">
      	     <div class="st-tabnav">
              <h3>{$dest['kindname']}</h3>
                 <span data-id="{$dest['id']}" class="on" data-url="/spots/{$dest['pinyin']}/">热门<i></i></span>
                 {st:dest action="query" flag="next" typeid="$typeid" pid="$dest['id']" row="6" return="nextdest"}
                     {loop $nextdest $nr}
                        <span data-id="{$nr['id']}" data-url="/spots/{$nr['pinyin']}/">{$nr['kindname']}<i></i></span>
                     {/loop}
                 {/st}

              <a href="/spots/{$dest['pinyin']}/" class="more">更多{$channelname}</a>
            </div>
             <div class="st-tabcon">
              <ul>

                  {st:spot action="query" flag="mdd" destid="$dest['id']" row="4" return="spotlist"}
                  {loop $spotlist $spot}
                    <li {if $n%4==0}class="mr_0"{/if}>
                        <i class="hot-ico"></i>
                        <a class="pic" href="{$spot['url']}" target="_blank"><img src="{Common::img($spot['litpic'],283,195)}" alt="{$spot['title']}" /></a>
                        <p class="tit"><a href="{$spot['url']}" target="_blank">{$spot['title']}</a></p>
                      <p class="data">
                          {if $spot['sellprice']}
                          <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$spot['sellprice']}</del>
                          {/if}
                          {if $spot['price']}
                          <span><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$spot['price']}</b>起</span>
                          {else}
                          <span></span>
                          {/if}

                      </p>
                   </li>
                  {/loop}
              </ul>
        </div>
            </div>
        {/loop}
      {/st}
    
    </div>
  </div>

  {request "pub/footer"}
  {request "pub/flink"}

</body>
<script type="text/html" id="tpl_spot">
    <ul class="st-cp-list">
        {{each list as value i}}
        <li {{if (i+1)%4==0}}class="mr_0"{{/if}}>
        <i class="hot-ico"></i>
        <a class="pic" href="{{value.url}}" target="_blank"><img src="{{value.litpic}}" alt="{{value.title}}" /></a>
        <p class="tit"><a href="{{value.url}}" target="_blank">{{value.title}}</a></p>
        <p class="data">
            {{if value.sellprice}}
            <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{{value.sellprice}}</del>
            {{/if}}
            {{if value.price}}
            <span><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{{value.price}}</b>起</span>
            {{else}}
            <span><b></b></span>
            {{/if}}

        </p>
        </li>
        {{/each}}
    </ul>

</script>

<script>
    $(function(){

        //景点门票首页焦点图
        $('.st-scenic-slideBox').slide({mainCell:'.bd ul',effect:"fold",easing:'easeOutCirc',autoPlay:true})

        //选中第一个选项
        $('.st-tabnav').each(function(i,obj){
           // $(obj).find('span').first().addClass('on');
        })

        $('.st-tabnav').find('span').click(function(){
            var destid = $(this).attr('data-id');
            var url = SITEURL+'spot/ajax_index_spot';
            var content = $(this).data(destid);
            var concontain = $(this).parents('.st-cp-slideTab').first().find('.st-tabcon');
            $(this).addClass('on').siblings().removeClass('on');
            var urlmore = $(this).attr("data-url");
            $(this).parent().find('.more').attr('href',urlmore);

            concontain.html('<img src="/res/images/loading.gif" style="display:block;width:28px;height:28px;margin:160px auto 157px auto;">');
            if(content){
                concontain.html(content);
            }else{
                $.getJSON(url, {destid:destid,pagesize:4}, function(data) {

                    var licontent = template('tpl_spot',data);
                    concontain.html(licontent);
                    concontain.data(destid,licontent);
                });

            }

        })

    })
</script>
</html>
