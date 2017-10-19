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
    {Common::css('car.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js')}

</head>

<body>

 {request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">
    
      <div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
      </div><!--面包屑-->
      
      <div class="st-car-home-top">
				<div class="st-car-search">
        	<dl class="search-dl">
          	<dt><i class="car-dest"></i>出发地</dt>
            <dd>
                <input type="text" class="cs-text up-ico searchattr" placeholder="出发地" data-id="0" />
                <div class="cs-select-box">
                    {st:attr action="query" flag="childitem" groupid="11" row="10" typeid="3"}
                        {loop $data $city}
                            <span data-id="{$city['id']}">{$city['title']}</span>
                        {/loop}
                    {/st}

                </div>
            </dd>
          </dl>
        	<dl class="search-dl">
          	<dt><i class="car-type"></i>车型</dt>
            <dd>
              <input type="text" class="cs-text up-ico carkind" placeholder="车型" data-id="0" />
              <div class="cs-select-box">
                {st:car action="kind_list" row="10"}
                  {loop $data $kind}
                    <span data-id="{$kind['id']}">{$kind['title']}</span>
                  {/loop}
                {/st}

              </div>
            </dd>
          </dl>
        	<dl class="search-dl">
          	<dt><i class="car-type"></i>类型</dt>
            <dd>
            	<input type="text" class="cs-text up-ico searchattr" placeholder="经济型" data-id="0" />
              <div class="cs-select-box">
                  {st:attr action="query" flag="childitem" groupid="1" row="10" typeid="$typeid"}
                      {loop $data $r}
                        <span data-id="{$r['id']}">{$r['title']}</span>
                      {/loop}
                  {/st}

              </div>
            </dd>
          </dl>
        	<dl class="search-dl">
          	<dt>用途</dt>
            <dd>
            	<input type="text" class="cs-text up-ico searchattr" placeholder="用途" data-id="0" />
              <div class="cs-select-box">
                  {st:attr action="query" flag="childitem" groupid="9" row="10" typeid="$typeid"}
                      {loop $data $r}
                        <span data-id="{$r['id']}">{$r['title']}</span>
                      {/loop}
                  {/st}

              </div>
            </dd>
          </dl>
          <div class="car-search-btn"><a href="javascript:;">搜索</a></div>
        </div><!--租车搜索-->
        <div id="st-car-slideBox" class="st-car-slideBox">
          <div class="hd">
            <ul>
                {st:ad action="getad" name="CarRollingAd" pc="1" return="carad"}
                    {loop $carad['aditems'] $k $v}
                        <li>{$k}</li>
                    {/loop}
            </ul>
          </div>
          <div class="bd">
            <ul>
                {loop $carad['aditems'] $v}
                    <li><a href="{$v['adlink']}" target="_blank"><img src="{Common::img($v['adsrc'])}" width="815" height="320"/></a></li>
                {/loop}
            </ul>
          </div>
          <!--前/后按钮代码-->
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
        </div><!--租车首页焦点图-->
      </div>
      
      <div class="st-cp-slideTab">
      	<div class="st-tabnav">
          <h3>热门推荐</h3>
          {st:car action="kind_list" return="carkind"}
            {loop $carkind $kind}
                <span data-id="{$kind['id']}" {if $n==1}class="on"{/if}>{$kind['title']}<i></i></span>
            {/loop}
          <a href="/cars/all" class="more">更多</a>
        </div>
        <div class="st-tabcon">
        	<ul>
              {st:car action="query" flag="recommend" kindid="$carkind[0]['id']" row="8"}
                {loop $data $c}
                    <li {if $n%4==0}class="mr_0"{/if}>
                        <i class="hot-ico"></i>
                        <a class="pic" href="{$c['url']}" target="_blank"><img src="{$c['litpic']}" alt="{$c['title']}" /></a>
                        <p class="tit"><a href="{$c['url']}" target="_blank">{$c['title']}</a></p>
                      <p class="data">
                        <em>满意度 {$c['satisfyscore']}</em>
                        {if !empty($c['price'])}
                            <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$c['price']}</b>起</span>
                        {else}
                            <span>电询</span>
                        {/if}
                      </p>
                    </li>
                {/loop}
              {/st}
          </ul>
        </div>
      </div>
        <script type="text/html" id="tpl_car">
          {{each list as value i}}
            <li {{if i%4==0}}class="mr_0"{{/if}}>
            <i class="hot-ico"></i>
            <a class="pic" href="{{value.url}}" target="_blank"><img src="{{value.litpic}}" alt="{{value.title}}" /></a>
            <p class="tit"><a href="{{value.url}}" target="_blank">{{value.title}}</a></p>
            <p class="data">
                <em>满意度 {{value.satisfyscore}}</em>
                {{if value.price!=''}}
                <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{{value.price}}</b>起</span>
                {{else}}
                 <span>电询</span>
                {{/if}}
            </p>
            </li>
          {{/each}}
        </script>
        <script>
            $(function(){
                $('.st-tabnav').find('span').click(function(){
                    var carkindid = $(this).attr('data-id');
                    var url = SITEURL+'car/ajax_index_car';
                    var content = $(this).data(carkindid);

                    var concontain = $('.st-tabcon');
                    $(this).addClass('on').siblings().removeClass('on');

                    concontain.html('<img src="/res/images/loading.gif" style="display:block;width:28px;height:28px;margin:160px auto 157px auto;">');
                    if(content){
                        concontain.html(content);
                    }else{
                        $.getJSON(url, {carkindid:carkindid,pagesize:8}, function(data) {

                               var licontent = template('tpl_car',data);
                               concontain.html(licontent);
                               concontain.data(carkindid,licontent);



                        });

                    }

                })
            })
        </script>
      
      <div class="comment-list-box">
      	<div class="com-tit">
        	<h3>客户点评</h3>
          <p>已为<span>{$totalorder}</span>位客户提供旅游租车服务</p>
        </div>
        <div class="com-conbox">
           {st:comment action="query" flag="car" row="5"}

            {loop $data $c}
                <dl>
                <dt><img src="{$c['product_litpic']}"/></dt>
                <dd>
                    <p class="bt">
                        {if !empty($c['productname'])}
                        <a href="{$c['producturl']}">{$c['productname']}</a>
                        {/if}
                        <span class="price">{if !empty($c['product_price'])}预定价格：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$c['product_price']}{/if}</span></p>
                   <p class="user"><span class="name">{$c['nickname']}</span><span class="date">{Common::mydate('Y-m-d',$c['addtime'])}</span></p>
                  <p class="txt">{$c['content']}</p>
                  <p class="score"><em>综合评分：</em><span><i style=" width:{$c['percent']}"></i></span></p>
                </dd>
                </dl>
            {/loop}
           {/st}
        </div>
      </div>
    
    </div>
  </div>
  
  

 {request "pub/footer"}

 {request "pub/flink"}

 <script>
     $(function(){
         //租车首页焦点图
         $('.st-car-slideBox').slide({mainCell:'.bd ul',easing:'easeOutCirc',autoPlay:true})

         //租车下拉选择
         $('.cs-text').click(function(){
             var selectBox =$(this).parent().find('.cs-select-box');
             if(selectBox.css("display")=="none"){
                 $(this).removeClass('up-ico').addClass('down-ico')
                 $(this).next().slideDown("fast");
             }else{
                 $(this).next().slideUp("fast");
                 $(this).removeClass('down-ico').addClass('up-ico');
                 selectBox.hide();
             }
         });
         $(".cs-select-box span").click(function(){
             $(this).parent().prev().removeClass('down-ico').addClass('up-ico')
             var txt = $(this).text();
             $(this).parent().prev().val(txt);
             var value = $(this).attr("data-id");
             $(this).parent().prev().attr('data-id',value);
             $(this).parent().hide();
         });
         //搜索
         $(".car-search-btn").click(function(){
             var carkind = $(".carkind").attr('data-id');
             var attrid = '';
             var attrArr = [];
              $('.searchattr').each(function(i,obj){
                  attrArr.push($(obj).attr('data-id'))
              })
             attrid = attrArr.join('_',attrArr);
             var url = SITEURL+'cars/all-'+carkind+'-'+attrid;
             location.href = url;

         })

     })
 </script>

</body>
</html>
