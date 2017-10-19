<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$searchtitle}-{$webname}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('tongyong.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>

<body>

{request "pub/header"}

  <div class="big">
  	<div class="wm-1200">

    <div class="st-guide">
        <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
    </div><!--面包屑-->
      
      <div class="st-main-page">
      
      	<div class="st-public-list-box">
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
                                <a href="{$cmsurl}{$module_pinyin}/{$dest['pinyin']}/">{$dest['kindname']}</a>
                            {/loop}
                        {/st}
                    </p>
                    {if count($destlist)>10}
                    <em><b>展开</b><i></i></em>
                    {/if}
                </dd>
              </dl>
                {st:attr action="query" flag="grouplist" typeid="$typeid" return="grouplist"}
                    {loop $grouplist $group}
                    <dl class="type">
                        <dt>{$group['attrname']}：</dt>
                        <dd>
                            <p>
                                {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$group['id']" return="attrlist"}
                                    {loop $attrlist $attr}
                                        <a href="{Model_Tongyong::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                                    {/loop}
                                {/st}
                            </p>
                        </dd>
                    </dl>
                    {/loop}
                {/st}
            </div>
          </div><!-- 条件搜索 -->
          <div class="st-sort-menu">
            <span class="sort-sum">
              <a href="javascript:;">综合排序</a>
              <a href="javascript:;">价格
                  {if $param['sorttype']!=1 && $param['sorttype']!=2}
                  <i class="jg-default" data-url="{Model_Tongyong::get_search_url(1,'sorttype',$param)}"></i>
                  {/if}
                  {if $param['sorttype']==1}
                  <i class="jg-up" data-url="{Model_Tongyong::get_search_url(2,'sorttype',$param)}"></i>
                  {/if}
                  {if $param['sorttype']==2}
                  <i class="jg-down" data-url="{Model_Tongyong::get_search_url(0,'sorttype',$param)}"></i></a>
                    {/if}
              </a>
              <a href="javascript:;">销量
                  {if $param['sorttype']!=3}
                  <i class="xl-default" data-url="{Model_Tongyong::get_search_url(3,'sorttype',$param)}"></i>
                  {/if}
                  {if $param['sorttype']==3}
                  <i class="xl-down" data-url="{Model_Tongyong::get_search_url(0,'sorttype',$param)}"></i>
                  {/if}

              </a>
              <a href="#">推荐
                  {if $param['sorttype']!=4}
                    <i class="tj-default" data-url="{Model_Tongyong::get_search_url(4,'sorttype',$param)}"></i>
                  {/if}
                  {if $param['sorttype']==4}
                    <i class="tj-down" data-url="{Model_Tongyong::get_search_url(0,'sorttype',$param)}"></i>
                  {/if}
              </a>
            </span>
          </div><!--排序-->
          <div class="public-list-con">
            {if !empty($list)}
            <ul>
             {loop $list $p}
              <li {if $n%4==0}class="mr_0"{/if}>
                <div class="pic">
                  <img class="fl" src="{Common::img($p['litpic'],285,190)}" alt="{$p['title']}" width="285" height="190" />
                  <div class="buy"><a href="{$p['url']}" target="_blank">立即预订</a></div>
                </div>
                <div class="js">
                	<a class="tit" href="{$p['url']}" target="_blank">{$p['title']}</a>
                  <p class="num">
                  <del>满意度 {$p['score']}</del>
                    <span>
                       {if !empty($p['price'])}
                        <i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$p['price']}</b>起
                       {else}
                         电询
                       {/if}

                    </span>
                  </p>
              	</div>
              </li>
             {/loop}

            </ul>
            <div class="main_mod_page clear">
             {$pageinfo}
            </div><!-- 翻页 -->
            {else}
              <div class="no-content">
                  <p><i></i>抱歉，没有找到符合条件的产品！</p>
              </div>
            {/if}
          </div>
        </div>
      
      </div>
    </div>
  </div>
  
{request "pub/footer"}

<script>
    $(function(){

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
            var url = SITEURL+'{$module_pinyin}/all/';
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

</body>
</html>
