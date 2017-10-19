<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('visa.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js')}
</head>
<body>
{request "pub/header"}
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="{$cmsurl}visa/">{$channelname}</a>
       </div><!--面包屑-->
      
      <div class="st-main-page">
      
        <div class="list_headimg" style="background: url({$country['banner']}) center no-repeat;">
          <div class="gj_txt">
            <dl>
              <dt>
                <img src="{$country['nation_flag']}" alt="{$country['name']}" />
                <h3>{$country['name']}签证</h3>
              </dt>
              <dd>
                {$country['jieshao']}
              </dd>
            </dl>
          </div>
        </div>
      
        <div class="list_mdd_tj">
          <dl>
            <dt>办理领区：</dt>
            <dd>
                <a href="{Model_Visa::get_search_url(0,'cityid',$param)}" {if empty($param['cityid'])}class="on"{/if}>不限</a>
              {st:visa action="city" row="30" return="citylist"}
                {loop $citylist $city}
                    <a href="{Model_Visa::get_search_url($city['id'],'cityid',$param)}" {if $city['id']==$param['cityid']}class="on"{/if}>{$city['title']}</a>
                {/loop}
              {/st}
            </dd>
          </dl>
          <dl>
            <dt>签证类型：</dt>
            <dd>
                <a href="{Model_Visa::get_search_url(0,'visatypeid',$param)}" {if empty($param['visatypeid'])}class="on"{/if}>不限</a>
                {st:visa action="kind" row="30"}
                    {loop $data $row}
                        <a href="{Model_Visa::get_search_url($row['id'],'visatypeid',$param)}" {if $row['id']==$param['visatypeid']}class="on"{/if}>{$row['title']}</a>
                    {/loop}
                {/st}
            </dd>
          </dl>
        </div>
        
        <div class="st-sort-menu">
          <span class="sort-sum">
            <a href="javascript:;">综合排序</a>
             <a href="javascript:;">价格
                 {if $param['sorttype']!=1 && $param['sorttype']!=2}
                 <i class="jg-default" data-url="{Model_Visa::get_search_url(1,'sorttype',$param)}"></i>
                 {/if}
                 {if $param['sorttype']==1}
                 <i class="jg-up" data-url="{Model_Visa::get_search_url(2,'sorttype',$param)}"></i>
                 {/if}
                 {if $param['sorttype']==2}
                 <i class="jg-down" data-url="{Model_Visa::get_search_url(0,'sorttype',$param)}"></i></a>
                    {/if}
                <a href="javascript:;">销量
                    {if $param['sorttype']!=3}
                    <i class="xl-default" data-url="{Model_Visa::get_search_url(3,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==3}
                    <i class="xl-down" data-url="{Model_Visa::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>
          </span>
          <div class="buy-sou">
             <!-- <input class="search-text" type="text" id="keyword" placeholder="请输入目的地/景点等关键词" />
              <input class="search-btn" type="button" value="搜索" />-->
          </div>
        </div><!--排序-->
        
        <div class="visa_list_box">
          {if !empty($list)}
          <ul>
            {loop $list $v}
                <li>
                  <a class="pic" href="{$v['url']}" target="_blank"><img src="{$v['litpic']}" /><em class="attr-ico01"><b>{$v['visatype']}</b></em></a>
                  <div class="txt_con">
                    <p class="p1">
                        <a href="{$v['url']}" target="_blank" class="tit">{$v['title']}{loop $v['iconlist'] $icon}<img src="{$icon['litpic']}" />{/loop}</a></p>
                    <p class="p2"><em>办理时长：</em>{$v['handleday']}</p>
                    <p class="p3">
                      <span>
                        <em>签证类型：</em>{$v['visatype']}
                      </span>
                      <span>
                        <em>所属领区：</em>{$v['belongconsulate']}
                      </span>
                      <span>
                        <em>停留时间：</em>{$v['partday']}
                      </span>
                      <span>
                        <em>有效日期：</em>{$v['validday']}
                      </span>
                    </p>
                    <p class="p4">{$v['sellpoint']}</p>
                  </div>
                  <div class="yd">
                    <span>
                        {if $v['price']}
                            <i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$v['price']}</b>
                        {/if}
                    </span>
                    <a href="{$v['url']}" target="_blank">预定办签</a>
                  </div>
                </li>
            {/loop}

          </ul>
          <div class="main_mod_page clear">
           {$pageinfo}
          </div>
         {else}
            <div class="no-content">
                <p><i></i>抱歉，没有找到符合条件的产品！</p>
            </div>
         {/if}
      
      </div>
    
    </div>
  </div>
{Common::js('layer/layer.js')}
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
               var url = SITEURL+"visa/{$param['countrypy']}?keyword="+encodeURIComponent(keyword);
               window.location.href = url;
           })
       })
   </script>
</body>
</html>
