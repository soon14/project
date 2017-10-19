<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('scenic.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>
<body>

{request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">

    <div class="st-guide">
        <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="{$cmsurl}spots/">{$channelname}</a>

    </div><!--面包屑-->
    
      <div class="st-main-page">
      	<div class="st-sceniclist-box">
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
                        <a href="{$cmsurl}spots/{$dest['pinyin']}/">{$dest['kindname']}</a>
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
                            <a href="{Model_Spot::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                            {/loop}
                            {/st}
                        </p>
                    </dd>
                </dl>
                {/loop}
                {/st}
                <dl class="type">
                    <dt>价格区间：</dt>
                    <dd>
                        <p>
                            {st:spot action="price_list" row="20" return="pricelist"}
                            {loop $pricelist $row}
                            <a {if $param['priceid']==$row['id']}class="on"{/if} href="{Model_Spot::get_search_url($row['id'],'priceid',$param)}">{$row['title']}</a>
                            {/loop}
                            {/st}
                        </p>
                    </dd>
                </dl>
            </div>
          </div><!--条件搜索-->
          <div class="st-sceniclist-con">
              <div class="st-sort-menu">
            	<span class="sort-sum">
              	<a href="javascript:;">综合排序</a>
                <a href="javascript:;">价格
                    {if $param['sorttype']!=1 && $param['sorttype']!=2}
                    <i class="jg-default" data-url="{Model_Spot::get_search_url(1,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==1}
                    <i class="jg-up" data-url="{Model_Spot::get_search_url(2,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==2}
                    <i class="jg-down" data-url="{Model_Spot::get_search_url(0,'sorttype',$param)}"></i></a>
                    {/if}
                <a href="javascript:;">销量
                    {if $param['sorttype']!=3}
                    <i class="xl-default" data-url="{Model_Spot::get_search_url(3,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==3}
                    <i class="xl-down" data-url="{Model_Spot::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>
                <a href="javascript:;">推荐
                    {if $param['sorttype']!=4}
                    <i class="tj-default" data-url="{Model_Spot::get_search_url(4,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==4}
                    <i class="tj-down" data-url="{Model_Spot::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>
              </span><!--排序-->
              </div>
            <div class="scenic-list-con">
            
              {if !empty($list)}
              {loop $list $row}
                <div class="list-child">
              	<div class="hot-ico"></div>
              	<div class="lc-image-text">
                	<div class="pic"><a href="{$row['url']}" target="_blank"><img src="{Common::img($row['litpic'],265,180)}" alt="{$row['title']}" /></a></div>
                  <div class="text">
                  	<p class="bt"><a href="{$row['url']}" target="_blank">{$row['title']}
                             {loop $row['iconlist'] $ico}
                                <img src="{$ico['litpic']}" />
                             {/loop}
                        </a></p>
                    {if $row['hasticket']}
                  	<p class="attr">
                    	<span>销量：{$row['sellnum']}</span>
                        <span>满意度：{$row['satisfyscore']}</span>
                        <span>推荐：{$row['recommednum']}</span>
                    </p>
                  	<p class="js">推荐理由：{$row['sellpoint']}</p>
                    {/if}
                  	<p class="ads">{$row['address']}</p>
                  </div>
                 {if $row['hasticket']}
                  <div class="lowest-jg">
                    {if !empty($row['price'])}
                  	    <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$row['price']}</b>起</span>
                    {else}
                        <span>电询</span>
                    {/if}
                  </div>
                 {/if}
                </div>
                {if $row['hasticket']}
                    <div class="car-typetable">
                        <table width="100%" border="0">

                            {st:spot action="suit_type" row="8" productid="$row['id']" return="typelist"}
                            {loop $typelist $type}

                            <tr>
                                <th width="200" height="40" scope="col"><span class="pl20">{$type['title']}</span></th>

                                <th width="80" scope="col">原价</th>
                                <th width="80" align="center" scope="col">优惠价</th>
                                <th width="80" scope="col">支付方式</th>
                                <th width="260" scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            {st:spot action="suit_by_type" row="10" productid="$row['id']" suittypeid="$type['id']" return="suitlist"}
                            {loop $suitlist $suit}
                            <tr>
                                <td height="40"><strong class="type-tit">{$suit['title']}</strong></td>

                                <td align="center"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suit['sellprice']}</td>
                                <td align="center"><span class="price">{if !empty($suit['price'])}<i class="currency_sy">{Currency_Tool::symbol()}</i>{$suit['price']}起{else}电询{/if}</span></td>
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
                                <td><a class="booking-btn" href="{$row['url']}" target="_blank">预订</a></td>
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
                {/if}
              </div>
              {/loop}
            	
	          <div class="main_mod_page clear">
                {$pageinfo}
              </div>
             {else}
                <div class="no-content">
                    <p><i></i>抱歉，没有找到符合条件的产品！<a href="/spots/all">查看全部产品</a></p>
                </div>
             {/if}
            </div>
          </div>
        </div>
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="search"}
        </div><!--边栏模块-->
      </div>
    
    </div>


{request "pub/footer"}

{request "pub/flink"}

<script>
    $(function(){
        //套餐点击
        $(".type-tit").click(function(){
            $(this).parents('tr').first().next().toggle();
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
            var url = SITEURL+'spots/all/';
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
