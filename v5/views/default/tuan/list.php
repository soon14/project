<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('tuan.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,tuan.js')}
</head>

<body>
{request "pub/header"}
  <div class="big">
  	<div class="wm-1200">
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="{$cmsurl}tuan/">{$channelname}</a>
            {loop $predest $pre}
            &gt;&nbsp;&nbsp;<a href="{$cmsurl}hotels/{$pre['pinyin']}/">{$pre['kindname']}</a>
            {/loop}
      </div><!--面包屑-->
      
      <div class="st-buylist-box">
        <div class="st-list-search">
          <div class="been-tj" {if count($chooseitem)<1}style="display:none"{/if}>
            <strong>已选条件：</strong>
            <p>
                {loop $chooseitem $item}
                <span class="chooseitem" data-url="{$item['url']}">{$item['itemname']}<i></i></span>
                {/loop}
                <a href="javascript:;" class="clearc">清空筛选条件 </a>
            </p>
          </div>
          <div class="line-search-tj">
              <dl class="type">
                  <dt>目的地：</dt>
                  <dd>
                      <p>
                          {st:dest action="query" typeid="$typeid" flag="nextsame" row="30" pid="$destid" return="destlist"}
                          {loop $destlist $dest}
                          <a href="{$cmsurl}tuan/{$dest['pinyin']}/">{$dest['kindname']}</a>
                          {/loop}
                          {/st}
                      </p>
                      {if count($destlist)>10}
                      <em><b>展开</b><i></i></em>
                      {/if}
                  </dd>
              </dl>
              <!--属性组读取-->
              {st:attr action="query" flag="grouplist" typeid="$typeid" return="grouplist"}
              {loop $grouplist $group}
              <dl class="type">
                  <dt>{$group['attrname']}：</dt>
                  <dd>
                      <p>
                          {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$group['id']" return="attrlist"}
                          {loop $attrlist $attr}
                          <a href="{Model_Tuan::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                          {/loop}
                          {/st}
                      </p>
                  </dd>
              </dl>
              {/loop}
              {/st}
            <dl class="type bor_0">
              <dt>状态：</dt>
              <dd>
                <p>
                  <a {if $param['status']==0}class="on"{/if} href="{Model_Tuan::get_search_url(0,'status',$param)}">进行中</a>
                  <a {if $param['status']==1}class="on"{/if} href="{Model_Tuan::get_search_url(1,'status',$param)}">未开始</a>
                </p>
              </dd>
            </dl>
          </div>
        </div><!--条件搜索-->
        <div class="st-sort-menu">
         	<span class="sort-sum">
              <a href="javascript:;">综合排序</a>
                  <a href="javascript:;">价格
                      {if $param['sorttype']!=1 && $param['sorttype']!=2}
                      <i class="jg-default" data-url="{Model_Tuan::get_search_url(1,'sorttype',$param)}"></i>
                      {/if}
                      {if $param['sorttype']==1}
                      <i class="jg-up" data-url="{Model_Tuan::get_search_url(2,'sorttype',$param)}"></i>
                      {/if}
                      {if $param['sorttype']==2}
                      <i class="jg-down" data-url="{Model_Tuan::get_search_url(0,'sorttype',$param)}"></i></a>
                    {/if}
                <a href="javascript:;">销量
                    {if $param['sorttype']!=3}
                    <i class="xl-default" data-url="{Model_Tuan::get_search_url(3,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==3}
                    <i class="xl-down" data-url="{Model_Tuan::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>

              </span><!--排序-->
         <!-- <div class="buy-sou">
          	<input class="search-text" type="text" id="keyword" placeholder="请输入目的地/景点等关键词" />
            <input class="search-btn" type="button" value="搜索" />
          </div>-->
        </div><!--排序-->
        <div class="buylsit-con">
            {if !empty($list)}

          <ul class="st-cp-list">

              {php}$index=1;{/php}

              {loop $list $t}
                <li {if $index%3==0}class="mr_0"{/if}>
                  <i class="hot-ico"></i>
                  <a class="pic" href="{$t['url']}" target="_blank"><img class="fl" src="{$t['litpic']}" alt="{$t['title']}" width="378" height="265" /></a>
                  <a class="tit" href="{$t['url']}" target="_blank">{$t['title']}</a>
                  <p class="attr">
                      {loop $t['iconlist'] $icon}
                        <img src="{$icon['litpic']}" />
                      {/loop}
                  </p>
                  <p class="num">
                      <del>{if !empty($t['sellprice'])}原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$t['sellprice']}{/if}</del>
                      <span>{if !empty($t['price'])}<i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$t['price']}</b>{else}电询{/if}</span>
                      <em>{if $t['discount']}<b>{$t['discount']}</b>折{/if}</em>
                  </p>
                  <p class="data">
                    <span class="rq">
                        {if empty($param['status'])}
                            <span class="dao" id="tick_{$t['id']}">
                                  <span class="RemainD"></span>天
                                  <span class="RemainH"></span>时
                                  <span class="RemainM"></span>分
                                  <span class="RemainS"></span>秒
                                  <input type="hidden" class="ticktime" rel="tick_{$t['id']}" value="{php echo date('Y/m/d H:i:s',$t['endtime']);}">
                              </span>
                        {else}
                            即将开始
                        {/if}
                    </span>
                    <span class="yg">{$t['sellnum']}人已购</span>
                  </p>
                </li>
              {php}$index++;{/php}
           {/loop}

          </ul>
          <div class="main_mod_page clear">
              {$pageinfo}
          </div>
            {else}
            <div class="no-content">
                <p><i></i>抱歉，没有找到符合条件的产品！<a href="/tuan/all">查看全部产品</a></p>
            </div>
            {/if}
        </div>
      </div><!--团购搜索列表-->
    
    </div>
{request "pub/footer"}
{request "pub/flink"}
{Common::js('layer/layer.js')}
<script>
    $(function(){
        $('.ticktime').each(function(i,obj){
            Tuan.tickTimeEle(obj);
        })
        //排序方式点击
        $('.sort-sum').find('a').click(function(){
            var url = $(this).find('i').attr('data-url');
            if(url==undefined){
                url = location.href;
            }
            window.location.href = url;
        })
        //删除已选
        $(".chooseitem").find('i').click(function(){
            var url = $(this).parent().attr('data-url');
            window.location.href = url;
        })
        //清空筛选条件
        $('.clearc').click(function(){
            var url = SITEURL+'tuan/all/';
            window.location.href = url;
        })
        //隐藏没有属性下级分类
        $(".type").each(function(i,obj){
           var len = $(obj).find('dd p a').length;
            if(len<1){
                $(obj).hide();
            }
        })

        //按关键词搜索
        $('.search-btn').click(function(){
            var keyword = $("#keyword").val();
            if(keyword==''){
                layer.open({
                    content: '{__("no_keyword")}',
                    btn: ['{__("OK")}']
                });
                return false;
            }
            var url = SITEURL+'tuan/all?keyword='+encodeURIComponent(keyword);
            window.location.href = url;
        })
    })
</script>
</body>
</html>
