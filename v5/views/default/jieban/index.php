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
    {Common::css('jieban.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}

</head>

<body>

  {request "pub/header"}
  
  <div class="st-jieban-home-top">
  	<div class="top-position-img"><img src="{$GLOBALS['cfg_public_url']}images/jieban-top-img.jpg" width="1920" height="380" /></div>
    <div class="jieban-home-wm">
    	<div class="plan">我们共有<strong>{$total}</strong>个结伴计划</div>
      <div class="join"><strong>{$totaljoin}</strong>人报名参加</div>
      <div class="pub"><a href="{$cmsurl}jieban/add">发布我的结伴计划</a></div>
    </div>
  </div>
  <div class="st-jieban-menubox">
      <div class="wm-1200">
          <div class="jb-dest-ui"><input type="text" class="ui-input destname" placeholder="请输入目的地" value="{$params['destname']}" /></div>
          <div class="jb-attr-ui">
              <input type="text" class="ui-input" placeholder="行程主题" />
              <div class="zt-conbox hide mlist">
                  <ul>
                      {loop $attr $atr}
                        <li><a href="javascript:;" data-value="{$atr['id']}" data-type="attrid" data-tag="{$atr['attrname']}" {if $atr['id']==$params['attrid']}data-curr=1{/if}>{$atr['attrname']}</a></li>
                      {/loop}

                  </ul>
              </div>
          </div>
          <div class="jb-date-ui">
              <input type="text" class="ui-input" placeholder="行程日期" />
              <div class="rp-conbox hide mlist">
                  <ul>
                      {loop $timearr $time}
                        <li><a href="javascript:;" data-type="startdate" data-value="{$time['id']}" data-tag="{$time['tagname']}" {if $time['id']==$params['startdate']}data-curr=1{/if}><span class="num _j_show_num"><em>{$time['num']}</em>结伴</span>{$time['tagname']}</a></li>
                      {/loop}

                  </ul>
              </div>
          </div>
          <div class="jb-day-ui">
              <input type="text" class="ui-input" placeholder="行程天数"  />
              <div class="ts-conbox hide mlist">
                  <ul>
                      <li><a href="javascript:;" data-type="day" data-value="1-2" data-tag="1~2天" {if $params['day']=='1-2'}data-curr=1{/if}  >1~2天</a></li>
                      <li><a href="javascript:;" data-type="day" data-value="2-5" data-tag="2~5天" {if $params['day']=='2-5'}data-curr=1{/if}>2~5天</a></li>
                      <li><a href="javascript:;" data-type="day" data-value="5-8" data-tag="5~8天" {if $params['day']=='5-8'}data-curr=1{/if}>5~8天</a></li>
                      <li><a href="javascript:;" data-type="day" data-value="8-12" data-tag="8~12天" {if $params['day']=='8-12'}data-curr=1{/if}>8~12天</a></li>
                      <li><a href="javascript:;" data-type="day" data-value="12-0" data-tag="12天以上" {if $params['day']=='12-0'}data-curr=1{/if}>12天以上</a></li>
                  </ul>
              </div>
          </div>
          <a class="jb-search-btn" href="javascript:;">搜索结伴</a>
      </div>
  </div><!-- 结伴筛选 -->
  
  <div class="big">
  	<div class="wm-1200">
      
      <div class="st-main-page">
      	
      	<div class="st-jieban-home">
        	<div class="st-jieban-home-tit">结伴热门目的地</div>
          <div class="st-jieban-home-list">
          	<ul>
                {loop $list $row}
            	    <li {if $n%4 == 0}class="mr_0"{/if}>
                        <div class="pic"><a href="{$row['url']}" target="_blank"><img src="{$row['litpic']}" /></a></div>
                        <div class="con">
                            <a href="{$row['url']}" target="_blank">{$row['title']}</a>
                          <p>{$row['description']}</p>
                        </div>
                        <div class="user">
                          <img src="{$row['memberpic']}" />
                          <span>{$row['membername']}</span>
                        </div>
                        <div class="day">
                            <p>已有<span>{$row['joinnum']}</span>人加入</p>
                          <p>剩余时间：<span>{$row['leftday']}</span>天</p>
                        </div>
                    </li>
                {/loop}

            </ul>
            <div class="main_mod_page clear">
               {$pageinfo}
            </div><!-- 翻页 -->
          </div>
        </div>
      
      </div>
    
    </div>
  </div>

  {request "pub/footer"}

  {request "pub/flink"}
  {Common::js('result/result.js',0)}
  <link type="text/css" href="{$GLOBALS['cfg_public_url']}js/result/result.css" rel="stylesheet" />
  <!--隐藏域-->
  <input type="hidden" id="attrid" value="0"/>
  <input type="hidden" id="startdate" value="0"/>
  <input type="hidden" id="day" value="0"/>

</body>
<script>

    var day = "{$params['day']}";
    var startdate = "{$params['startdate']}";
    var attrid = "{$params['attrid']}";

    $(function(){
        $('.ui-input').focus(function(){
            $(this).addClass('bd-color');
            $(".mlist").addClass("hide");
            $(this).next().removeClass('hide')
        })
        $('.ui-input').blur(function(){
            $(this).removeClass('bd-color');
            //$(this).next().addClass('hide')
        })

        //目的地选择
        $('.destname').Result({url:SITEURL+'destination/ajax_dest_by_pinyin',extraParams:{typeid:11}});

        //菜单选择
        $(".mlist ul li a").click(function(){

            var type = $(this).attr('data-type');
            var tag = $(this).attr('data-tag');
            var value = $(this).attr('data-value');
            $("#"+type).val(value);
            $(this).parents('.mlist').first().parent().find('input').val(tag);
            $(this).parents('.mlist').first().addClass('hide');
        })



        //搜索结伴
        $(".jb-search-btn").click(function(){
            var destname = $('.destname').val();
            var attrid = $('#attrid').val();
            var day = $("#day").val();
            var startdate = $("#startdate").val();
            var url = SITEURL+'jieban?destname='+encodeURIComponent(destname)+"&attrid="+attrid+"&day="+attrid+"&startdate="+startdate+"&day="+day;
            window.location.href = url;

        })
        //菜单选择
        $(".mlist ul li a").each(function(i,obj){

            var type = $(obj).attr('data-type');
            var tag = $(obj).attr('data-tag');
            var value = $(obj).attr('data-value');
            var iscurrent = $(obj).attr('data-curr');
            if(iscurrent==1){
                $(this).parents('.mlist').first().parent().find('input').val(tag);
            }

        })


    })

</script>
</html>
