<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('photo.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>


<body>

{request "pub/header"}
  
  
  
  <div class="big">
  	<div class="wm-1200">

    <div class="st-guide">
        <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="{$cmsurl}lines/">{$channelname}</a>
        {loop $predest $pre}
        &gt;&nbsp;&nbsp;<a href="{$cmsurl}lines/{$pre['pinyin']}/">{$pre['kindname']}</a>
        {/loop}
    </div><!--面包屑-->
      
      <div class="st-photolist-box">
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
                      <a href="{$cmsurl}photos/{$dest['pinyin']}/">{$dest['kindname']}</a>
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
                          <a href="{Model_Photo::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                          {/loop}
                          {/st}
                      </p>
                  </dd>
              </dl>
              {/loop}
              {/st}
          </div>
        </div><!--条件搜索-->
        <div class="photolist-con">
         {if empty($list)}
          <div class="no-content">
          	<p><i></i>抱歉，没有找到符合条件的产品！<a href="{$cmsurl}photos/all">查看全部产品</a></p>
          </div>
         {/if}
          <ul class="st-photolist">
           {loop $list $p}
          	<li {if $n%4==0}class="mr_0"{/if}>
            	<div class="pic">
            		<a href="{$p['url']}" target="_blank"><img src="{$p['litpic']}" alt="{$p['title']}" /></a>
                <div class="num">
                  <span class="zan-on">{$p['favorite']}</span>
                	<span class="pl">{$p['commentnum']}</span>
                </div>
              </div>
              <div class="txt">
              	<a href="{$p['url']}" target="_blank">{Common::cutstr_html($p['content'],40)}</a>
                <span>({$p['photonum']}张)</span>
              </div>
            </li>
           {/loop}

          </ul>
          <div class="main_mod_page clear">
              {$pageinfo}
          </div><!--分页-->
        </div>
      </div><!--相册搜索列表-->
    
    </div>
  </div>

<script>
    $(function(){
        //搜索条件去掉最后一条边框
        $('.line-search-tj').find('dl').last().addClass('bor_0')
        $(".line-search-tj dl dd em").toggle(function(){
            $(this).prev().height('auto');
            $(this).children('b').text('收起');
            $(this).children('i').addClass('up')
        },function(){
            $(this).prev()().height('24px');
            $(this).children('b').text('展开');
            $(this).children('i').removeClass('up')
        });

        //排序方式点击
        $('.sort-sum').find('a').click(function(){
            var url = $(this).find('i').attr('data-url');
            window.location.href = url;
        })
        //删除已选
        $(".chooseitem").find('i').click(function(){
            var url = $(this).parent().attr('data-url');
            window.location.href = url;
        })
        //清空筛选条件
        $('.clearc').click(function(){
            var url = SITEURL+'photos/all/';
            window.location.href = url;
        })
        //隐藏没有属性下级分类
        $(".type").each(function(i,obj){
            var len = $(obj).find('dd p a').length;
            if(len<1){
                $(obj).hide();
            }
        })
    })

</script>

{request "pub/footer"}

{request "pub/flink"}

</body>
</html>
