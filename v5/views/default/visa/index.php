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
    {Common::css('visa.css,base.css,extend.css',false)}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,template.js')}

</head>

<body>
{request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
        </div><!--面包屑-->
      
      <div class="st-main-page">
      
        <div class="visa_bg_box">
          <div class="country_sar">
            <div class="import">
              <input type="text" class="sr_text search_country" placeholder="请输入国家拼音/名称" />
              <input type="button" class="tj_btn gocountry" value="" />
            </div>
            <div class="public">
                {st:visa action="area" flag="order"  row="5" return="arealist"}
                {loop $arealist $k $area}
                <a href="{$area['url']}" target="_blank">{$area['title']}</a>
                {/loop}
                {/st}
            </div>
          </div>
        </div><!--签证搜索-->
          {Common::js('layer/layer.js')}
         <script>

             $(function(){

                 $('.search_country').Result({url:SITEURL+'visa/ajax_nation'});
                 //按目的地搜索
                 $(".gocountry").click(function(){
                     var countryname = $(".search_country").val();
                     if(countryname==''){
                         layer.open({
                             content: '{__("no_country_keyword")}',
                             btn: ['{__("OK")}']
                         });
                         $(".gocountry").focus();
                         return false;
                     }
                     var pinyin = get_nation_pinyin(countryname);
                     if(pinyin!='')
                     {
                         var url = SITEURL+'visa/'+pinyin+'/';
                         window.open(url,'_self');
                     }
                     else{

                         layer.open({
                             content: '{__("country_no_visa")}',
                             btn: ['{__("OK")}']
                         });
                         $(".gocountry").focus();
                     }


                 })
             })
             /*
             * 根据国家读取拼音
             * */
             function get_nation_pinyin(country)
             {
                 var pinyin = '';
                 $.ajax({
                     type:'POST',
                     url:SITEURL+'visa/ajax_nation_pinyin',
                     data:{areaname:country},
                     dataType:'json',
                     async:false,
                     success:function(data){
                         if(data.pinyin){
                             pinyin = data.pinyin;
                         }
                     }
                 })
                 return pinyin;

             }
         </script>
          <div class="visa-hot-country">
              <div class="hot-country-tit">热门签证国家</div>
              <div class="hot-country-block">
                  <ul>
                      {st:visa action="area" flag="order" minprice="true" row="8" return="arealist"}
                      {loop $arealist $k $area}
                      <li {if ($k+1)%4==0 }class="mr_0"{/if}>
                          <a href="{$area['url']}">
                              <div class="pic">
                                  <div class="layer">
                                      <span class="hy">{$area['title']}</span>
                                      <span class="eg">{$area['pinyin']}</span>
                                  </div>
                                  <img src="{$area['litpic']}" alt="{$area['title']}" />
                              </div>
                              <div class="txt">
                                  <span class="gj">{$area['title']}</span>
                                  {if $area['price']}
                                  <span class="jg"><b>{Currency_Tool::symbol()}{$area['price']}</b>起</span>
                                  {/if}
                              </div>
                          </a>
                      </li>
                      {/loop}
                      {/st}
                  </ul>
              </div>
          </div><!--签证国家-->
        <div class="hot-visa-box">
        	<div class="visa-bt"><h3>热门签证</h3></div>
          <div class="visa-list-box">
          	<ul class="st-visa-list">
              {st:visa action="query" flag="order" row="10" return="visalist"}
                {loop $visalist $v}
                  <li {if $n%5==0}class="mr_0"{/if}>
                    <a class="fl" href="{$v['url']}" target="_blank">
                      <div class="country"><em><img src="{$v['litpic']}" alt="{$v['title']}" width="77" height="77" /></em></div>
                      <span class="tit">{$v['title']}</span>
                    </a>
                    <p class="num">

                      <del>
                          {if !empty($v['sellprice'])}
                            原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$v['sellprice']}
                          {/if}
                      </del>
                      <span>
                          {if $v['price']}
                            <b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$v['price']}</b>
                          {else}
                             电询
                          {/if}
                      </span>
                    </p>
                  </li>
                {/loop}
              {/st}

            </ul>
          </div>
        </div><!--热门签证-->
        
        <div class="visa-tabbox-country">
          <div class="st-tabnav">
          	<strong>全部签证国家</strong>
           {st:visa action="area" flag="query" pid="0" row="10" return="arealist"}
             {loop $arealist $area}
                <span {if $n==1} class="on"{/if} data-id="{$area['id']}">{$area['title']}</span>
             {/loop}
           {/st}

          </div>
          <div class="st-tabcon">
            <ul>
              {st:visa action="area" flag="query" pid="$arealist[0]['id']" row="60" return="childarea"}
                {loop $childarea $a}
                    <li><a href="{$a['url']}" target="_blank">{$a['title']}</a></li>
                {/loop}
              {/st}

            </ul>
          </div>
        </div><!--全部签证国家-->

        <div class="visa_flow_path">
        	<div class="tit">
          	<h3>签证办理，快人一步</h3>
            <p>省时 · 省事 · 省心 · 省力</p>
          </div>
          <ul>
          	<li>
            	<img src="{$GLOBALS['cfg_public_url']}images/visa_bz01.png" alt="提交订单" />
              <p class="num1">
                <strong>提交订单</strong>
                <span>Submit orders</span>
              </p>
            </li>
            <li class="visa-arrow-right"></li>
          	<li>
            	<img src="{$GLOBALS['cfg_public_url']}images/visa_bz02.png" alt="提交订单" />
              <p class="num2">
                <strong>提交签证材料</strong>
                <span>Submit Visa materials</span>
              </p>
            </li>
            <li class="visa-arrow-right"></li>
          	<li>
            	<img src="{$GLOBALS['cfg_public_url']}images/visa_bz03.png" alt="提交订单" />
              <p class="num3">
                <strong>审核材料</strong>
                <span>Audit  material</span>
              </p>
            </li>
            <li class="visa-arrow-right"></li>
          	<li>
            	<img src="{$GLOBALS['cfg_public_url']}images/visa_bz04.png" alt="提交订单" />
              <p class="num4">
                <strong>送签（面试）</strong>
                <span>Interview </span>
              </p>
            </li>
            <li class="visa-arrow-right"></li>
          	<li>
            	<img src="{$GLOBALS['cfg_public_url']}images/visa_bz05.png" alt="提交订单" />
              <p class="num5">
                <strong>成功出签</strong>
                <span>Success</span>
              </p>
            </li>
          </ul>
        </div><!--签证流程-->

        <div class="visa_atc">
          {st:attr action="query" flag="childitem" row="4" typeid="4" groupid="6" return="att"}
            {php $index=0;}
            {loop $att $at}
              <div class="article_list {if $index%4==0}mr_0{/if}">
                <h3>{$at['title']}</h3>
                <ul>
                  {st:article action="query" flag="byattrid" attrid="$at['id']" row="4"}
                    {loop $data $v}
                        <li><a href="{$v['url']}" target="_blank">{$v['title']}</a></li>
                    {/loop}

                </ul>
              </div>
              {php $index++}
            {/loop}

        </div><!--签证文章-->
  
      </div>
    
    </div>
  </div>

{request "pub/footer"}
{request "pub/flink"}
{Common::js('result/result.js')}
<link type="text/css" href="/res/js/result/result.css" rel="stylesheet" />
<script type="text/html" id="tpl_area">
    <ul>
       {{each list as value i}}
        <li><a href="{{value.url}}" target="_blank">{{value.title}}</a></li>
       {{/each}}

    </ul>
</script>
<script>
    $(function(){
        //区域切换
        $('.st-tabnav').find('span').click(function(){
            var destid = $(this).attr('data-id');
            var url = SITEURL+'visa/ajax_index_area';
            var concontain = $('.st-tabcon');
            var content = concontain.data(destid);
            $(this).addClass('on').siblings().removeClass('on');

            concontain.html('<img src="/res/images/loading.gif" style="display:block;width:28px;height:28px;margin:160px auto 157px auto;">');
            if(content!=undefined){
                concontain.html(content);
            }else{
                $.getJSON(url, {areaid:destid,pagesize:60}, function(data) {

                    var licontent = template('tpl_area',data);
                    concontain.html(licontent);
                    concontain.data(destid,licontent);


                });

            }



        })
        //搜索国家
        $('.destname').Result({url:SITEURL+'destination/ajax_dest_by_pinyin',extraParams:{typeid:2}});
    })
</script>

</body>
</html>
