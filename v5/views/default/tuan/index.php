<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    {include "pub/varname"}
    {Common::css('tuan.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js,tuan.js')}
<script>
	$(function(){
		//团购首页焦点图
		$('.st-tuan-slideBox').slide({mainCell:'.bd ul',easing:'easeOutCirc',autoPlay:true})
	})
</script>
</head>

<body>

{request "pub/header"}
  
   
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
        </div><!--面包屑-->
      
      <div id="st-tuan-slideBox" class="st-tuan-slideBox">
        <div class="hd">
          <ul>
              {st:ad action="getad" name="TuanRollingAd" pc="1" return="tuanad"}
                  {loop $tuanad['aditems'] $k $v}
                    <li>{$k}</li>
                  {/loop}
              {/st}

          </ul>
        </div>
        <div class="bd">
          <ul>
              {loop $tuanad['aditems'] $v}
                <li><a href="{$v['adlink']}" target="_blank"><img src="{Common::img($v['adsrc'])}" width="1200" height="360"/></a></li>
              {/loop}
          </ul>
        </div>
        <!--前/后按钮代码-->
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
      </div><!--团购首页焦点图-->
      
      <div class="tuan-home-lsit">
      	<div class="st-cp-slideTab">
        	<div class="st-tabnav">
          	<h3>团购精选</h3>
                {st:dest action="query" flag="channel_nav" typeid="$typeid" row="6" return="destlist"}
                  {loop $destlist $dest}
                    <span {if $n==1}class="on"{/if} data-id="{$dest['id']}">{$dest['kindname']}<i></i></span>
                  {/loop}
                {/st}
            <a href="{$cmsurl}tuan/all/" class="more">更多</a>
          </div>
          <div class="st-tabcon">
          	<ul class="st-cp-list">
              {st:tuan action="query" flag="mdd" destid="$destlist[0]['id']" row="6" return="tuanlist"}
               {php}$index=1;{/php}
               {loop $tuanlist $t}
                    <li {if $index%3==0}class="mr_0"{/if}>
                    <i class="hot-ico"></i>
                    <a class="pic" href="{$t['url']}" target="_blank"><img class="fl" src="{$t['litpic']}" alt="{$t['title']}" width="378" height="265" /></a>
                    <a class="tit" href="{$t['url']}" target="_blank">{$t['title']}</a>
                    <p class="attr">
                        {loop $t['iconlist'] $ico}
                            <img src="{$ico['litpic']}" />
                        {/loop}
                    </p>
                    <p class="num">

                      <del>{if !empty($t['sellprice'])}原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$t['sellprice']}{/if}</del>
                      <span>{if !empty($t['price'])}<i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$t['price']}</b>{else}电询{/if}</span>
                      <em>{if $t['discount']}<b>{$t['discount']}</b>折{/if}</em>
                    </p>
                    <p class="data">
                      <span class="rq">
                          <span class="dao" id="tick_{$t['id']}">
                              <span class="RemainD"></span>天
                              <span class="RemainH"></span>时
                              <span class="RemainM"></span>分
                              <span class="RemainS"></span>秒
                              <input type="hidden" class="ticktime" rel="tick_{$t['id']}" value="{php echo date('Y/m/d H:i:s',$t['endtime']);}">
                          </span>
                      </span>
                      <span class="yg">{$t['sellnum']}人已购</span>
                    </p>
                  </li>
                {php}$index++;{/php}
               {/loop}
              {/st}
            </ul>
          </div>
        </div>
      </div><!--团购首页列表-->
    
    </div>
  </div>

{request "pub/footer"}
{request "pub/flink"}
<script type="text/html" id="tpl_tuan">
    <ul class="st-cp-list">

      {{each list as value i}}

        <li{{if i==2 || i==5}}class="mr_0"{{/if}}>
        <i class="hot-ico"></i>
        <a class="pic" href="{{value.url}}" target="_blank"><img class="fl" src="{{value.litpic}}" alt="{{value.title}}" width="378" height="265" /></a>
        <a class="tit" href="{{value.url}}" target="_blank">{{value.title}}</a>
        <p class="attr">
            {{each value.iconlist as ico k}}
                <img src="{{ico['litpic']}}" />
            {{/each}}
        </p>
        <p class="num">

            <del>{{if value.sellprice}}原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{{value.sellprice}}{{/if}}</del>
            <span>{{if value.price}}<i class="currency_sy">{Currency_Tool::symbol()}</i><b>{{value.price}}</b>{{else}}电询{{/if}}</span>
            <em>{{if value.discount}}<b>{{value.discount}}</b>折{{/if}}</em>
        </p>
        <p class="data">
                      <span class="rq">
                          <span class="dao" id="tick_{{value.id}}">
                              <span class="RemainD"></span>天
                              <span class="RemainH"></span>时
                              <span class="RemainM"></span>分
                              <span class="RemainS"></span>秒
                              <input type="hidden" class="ticktime" rel="tick_{{value.id}}" value="{{jsdate(value.endtime)}}"/>
                          </span>
                      </span>
            <span class="yg">{{value.sellnum}}人已购</span>
        </p>
        </li>
        {{/each}}

    </ul>

</script>

<script>
    $(function(){

        //js模板扩展函数
        template.helper('jsdate', function (unixtime) {

            var   now = new   Date(parseInt(unixtime) * 1000);
            var   year=now.getFullYear();
            var   month=now.getMonth()+1;
            var   date=now.getDate();
            var   hour=now.getHours();
            var   minute=now.getMinutes();
            var   second=now.getSeconds();
            var   nowdate =   year+"/"+month+"/"+date+" 00:00:00";
            return nowdate;
        });
        //倒计时
        $(".ticktime").each(function(index, element) {
            Tuan.tickTimeEle(element);
        });

        $('.st-tabnav').find('span').click(function(){
            var destid = $(this).attr('data-id');
            var url = SITEURL+'tuan/ajax_index_tuan';
            var content = $(this).data(destid);
            var concontain = $('.st-tabcon');
            var content = concontain.data(destid);
            $(this).addClass('on').siblings().removeClass('on');

            concontain.html('<img src="/res/images/loading.gif" style="display:block;width:28px;height:28px;margin:160px auto 157px auto;">');
            if(content!=undefined){
                concontain.html(content);
            }else{
                $.getJSON(url, {destid:destid,pagesize:6}, function(data) {

                    var licontent = template('tpl_tuan',data);
                    concontain.html(licontent);
                    concontain.data(destid,licontent);

                    $(".ticktime").each(function(index, element) {

                        Tuan.tickTimeEle(element);
                    });
                });

            }



        })


    })

</script>

</body>
</html>
