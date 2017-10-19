<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{$seoinfo['seotitle']}</title>
  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}"/>
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}"/>
  {/if}
  {include "pub/varname"}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/selfDriving/SelfDriving.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body  class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb">
    <ul >
      <li><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}<i class="icon-gt">&gt;</i></a></li>
      <li><a href="{$cmsurl}lines/self/">{$channelname}<i class="icon-gt">&gt;</i></a></li>
      {loop $predest $pre}
      <li class="current"><a href="{$cmsurl}lines/self/{$pre['pinyin']}/">{$pre['kindname']}</a></li>
      {/loop}
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<div class="container">
  <section>     
    <!--区域选择 开始 -->

    <div class="ctd-SelfDriving-body">
      <div class="ctd-main">
        <div class="ctd-sort-view">
          <ul class="tabs sort-sum" data-toggle="tabs">

            <li {if $param['sorttype']==0}class="current"{/if}><a href="javascript:void(0)" data-url="{Model_Line::get_search_url(0,'sorttype',$param,1,1)}">全部</a></li>


            <li {if $param['sorttype']==6}class="current"{/if}><a href="javascript:void(0)" data-url="{Model_Line::get_search_url(6,'sorttype',$param,1,1)}">正在进行<i></i></a></li>

            <li {if $param['sorttype']==7}class="current"{/if}><a href="javascript:void(0)" data-url="{Model_Line::get_search_url(7,'sorttype',$param,1,1)}">往期自驾<i></i></a></li>


          </ul>
        </div>
        <div class="ctd-SelfDriving-list">
          {if !empty($list)}
          <ul class="listItem">
            {loop $list $line}

            <li onclick="window.location.href='{$line[url]}'" style="cursor: pointer;">
              <div class="SelfDrive-top">
                <div class="pic"><img src="{Common::img($line['piclist'][1][0])}"></div>
                <div class="SelfDrive-tit">
                  <div class="SelfDrive-tj">领队推荐</div>
                  <div class="SelfDrive-peo"><img src="{Common::img($line['litpic'])}" alt="{$line['title']}"></div>
                  <h3>{$line['title']}</h3>
                  <p>{$line['sellpoint']}</p>
                </div>
                <div class="SelfDrive-price"> <strong><dfn>¥</dfn>{$line['storeprice']}<em>/人起</em></strong>
                  {if $line['cha']==1}
                  <div class="SelfDrive-butOn"><a href="{$line['url']}" target="_blank"></a></div>
                  {else}
                  <div class="SelfDrive-butOff"><a href="{$line['url']}" target="_blank"></a></div>
                  {/if}
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="SelfDrive-bot">
                <dl>
                  <dd>
                    <b class="bLine">
                    <h4>出发地</h4>
                    <em>
                      {if !empty($line['startcity'])}
                      [{$line['startcity']}出发]
                      {else}
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      {/if}
                    </em>
                    </b>
                  </dd>
                  <dd><b class="bLine">
                    <h4>目的地</h4>
                    <em>{$line['selfDriMdd']}</em></b></dd>
                  <dd><b class="bLine">
                    <h4>自驾日期</h4>
                    <em>{$line['linedate']}</em></b></dd>
                  <dd><b>
                    <h4>点评</h4>
                    <em>{$line['commentnum']}人</em></b></dd>
                </dl>
              </div>
            </li>
            {/loop}

          </ul>
        </div>
        <!--分页 结束 -->
        <div class="pages">
          {$pageinfo}
        </div>
        <!--分页 结束 -->
        {else}
          <div class="no-content">
            <p><i></i>抱歉，没有找到符合条件的产品！<a href="/lines/all">查看全部产品</a></p>
          </div>
        {/if}
      </div>
      <div class="ctd-side">
        <div class="side-box sid-Recommend">
          <h4>精彩活动推荐</h4>
          <ul>
            {loop $huodong $h}
            <a href="/lines/self_show_{$h['aid']}.html">
            <li>
              <div class="note-img"><img src="{Common::img($h['piclist'][1][0])}" width="100%" height="100%"/><div class="note-price"><strong>{if !empty($h['startcity'])}出发地:{$h['startcity']}{/if}</strong><span>￥<em>{$h['storeprice']}</em></span> </div></div>
              <div class="note-con">
                <h5>{$h['title']}</h5>
              </div>
            </li>
            </a>
            {/loop}

          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
{request "pub/footer"}
</body>
</html>
<script>
  //清空筛选条件
  $('.clearc').click(function(){
    var url = SITEURL+'lines/self/all/';
    window.location.href = url;
  })
  //删除已选
  $(".chooseitem").find('i').click(function(){
    var url = $(this).parent().attr('data-url');
   // alert(url);
    window.location.href = url;
  })
  //排序方式点击
  $('.sort-sum').find('a').click(function(){
    var url = $(this).attr('data-url');
    if(url==undefined){
      url = location.href;
    }
    window.location.href = url;
  })
  $(".show-more").click(function(event) {
    event.preventDefault();
    var ticon = $(this).find("i");
    tspan = $(this).find("span");
    if ($(this).hasClass("zk")) {
      $(this).siblings("ul").css("height", "25px");
      ticon.removeClass("icon-angle-up");
      ticon.addClass("icon-angle-down");
      tspan.html("更多");
      $(this).removeClass("zk")
    } else {
      $(this).siblings("ul").css("height", "auto");
      ticon.removeClass("icon-angle-down");
      ticon.addClass("icon-angle-up");
      tspan.html("收起");
      $(this).addClass("zk")
    }
  });









</script>
{Common::js('myjs/selfDriving/bootstrap-SelfDriving.js')}