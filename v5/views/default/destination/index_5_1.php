<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>河北热门旅游目的地_景区推荐-河北旅游网</title>
  <meta name="keywords" content="河北热门旅游目的地,热门景区推荐,目的地攻略" />
  <meta name="description" content="河北旅游网,为旅游爱好者免费提供河北地区11个城市目的地攻略,提供目的地介绍、攻略、游记、酒店、特产等旅游信息。我们帮您寻找到适合你的旅行目的地,让你的旅行更精彩！" />
<!-- 页面公用 public CSS 文件 -->
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/destination/Destination.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<!-- 广告条内容 开始 -->
{st:ad action="getad" name="c_dest_index_1" pc="1"}
<?php //var_dump($data);?>

<div class="ctd-head-box" style="background: url({$data['adsrc']}) no-repeat center">
  <div class="ctd-tit">
    <h1>带您领略河北每一处风景</h1>
    <p>十大文化旅游名胜：承德避暑山庄及外八庙、清东西陵、山海关老龙头、坝上草原、崇礼滑雪场、白洋淀、北戴河新区、野三坡、乐亭三岛、武灵丛台。</p>
  </div>
  <div class="ctd-city">
    <ul class="city-nav" data-toggle="tabs">

      <li><a href="javascript:void(0)" onclick="window.location='{$cmsurl}shijiazhuang?param=survey'">石家庄</a></li>
<!--      <li class="current"><a href="javascript:void(0)" onclick="window.location='{$cmsurl}shijiazhuang?param=survey'">石家庄</a></li>-->
      {st:dest action="query" flag="index_nav" row="12" return="index_mdd"}
      {loop $index_mdd $mdd}
        {if $mdd['kindname']!='石家庄'}
        <li><a href="javascript:void(0)" onclick="window.location='{$cmsurl}{$mdd[pinyin]}?param=survey'" >{$mdd['kindname']}</a></li>
        {/if}
      {/loop}
      {/st}
    </ul>
  </div>
</div>
<!-- 广告条内容 结束 -->
{/st}
<div class="container ">
  <section> 
    <!-- 带你游河北-->
    <div class="ctd-Main-Tour">
      <div class="J-con-tit">
        <h2>带你游<span>河</span>北<span class="small-tit">这里汇集河北-吃喝玩乐</span></h2>
      </div>
      <div class="ctd-Hebei-Tour">
        <ul>
          <li><a href="{$cmsurl}shijiazhuang?param=survey"><img src="/res/images/destination/city-sjz.jpg"></a></li>
          <li><a href="{$cmsurl}zhangjiakou?param=survey"><img src="/res/images/destination/city-zjk.jpg"></a></li>
          <li><a href="{$cmsurl}qinhuangdao?param=survey"><img src="/res/images/destination/city-qhd.jpg"></a></li>
          <li><a href="{$cmsurl}baoding?param=survey"><img src="/res/images/destination/city-bd.jpg"></a></li>
          <li><a href="{$cmsurl}xingtai?param=survey"><img src="/res/images/destination/city-xt.jpg"></a></li>
          <div class="clearfix"></div>
        </ul>
      </div>
    </div>
  </section>
  <section> 
    <!-- 目的地 攻略-->
    <div class="ctd-main-strategy">
      <div class="J-con-tit">
        <h2>目的地<span>攻</span>略</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          <li class="current"><a href="javascript:void(0)">一日游</a></li>
         {loop $dayattr $day}
           {if $day['attrname']!='一日游'}
           <li><a href="javascript:void(0)">{$day['attrname']}</a></li>
           {/if}
         {/loop}

        </ul>
        <div class="more"><a href="/raiders/all">查看更多内容</a></div>
      </div>
      <div id="tab-content1">
        <!---------------------------------------->
        {loop $dayattr $day}
          {if $day['attrname']=='一日游'}
          {st:article action="query" flag="byattrid"  row="7" attrid="$day['id']" return="attrlist"}
          <div class="ctd-strategy tab-pane active">
          <ul>

            {loop $attrlist $ke $value}
              {if $ke==0}
                <li class="figure"><a href="{$value['url']}">
                  <div class="J-img"><img src="{$value['piclist'][1][0]}" style=""></div>
                  <div class="J-tit">
                    <div class="J-tit-l"><span class="day">DAY</span><span class="num">1</span></div>
                    <div class="J-tit-r">
                      <h3 title="{$value['title']}">{$value['title']}</h3>
                      <span class="line">{$value['extend'][0]['e_travel_spot']}</span></div>
                  </div>
                  </a>
                </li>
              {/if}
            {/loop}

            {loop $attrlist $ke $value}
            {if $ke!=0}
            <li>
              <a href="{$value['url']}">
              <div class="J-img"><img src="{Common::img($value['piclist'][1][0])}"></div>
              <div class="J-tit">
                <div class="J-tit-l"><span class="day">DAY</span><span class="num">1</span></div>
                <div class="J-tit-r">
                  <h3 title="{$value['title']}">{$value['title']}</h3>
                  <span class="line">{$value['extend'][0]['e_travel_spot']}</span></div>
              </div>
              </a>
            </li>
            {/if}
            {/loop}

            <div class="clearfix"></div>
          </ul>
        </div>
          {/st}
          {/if}
        {/loop}
        <!------------------------------>
        {loop $dayattr $day}
          {if $day['attrname']!='一日游'}
        {st:article action="query" flag="byattrid"  row="7" attrid="$day['id']" return="attrlist"}
        <div class="ctd-strategy tab-pane">
            <ul>
              {loop $attrlist $ke $value}
              {if $ke==0}
              <li class="figure">
                <a href="{$value['url']}">
                  <div class="J-img"><img src="{$value['piclist'][1][0]}" style=""></div>
                  <div class="J-tit">
                    <div class="J-tit-l"><span class="day">DAY</span><span class="num">{if $day['attrname']=='二日游'}2{elseif $day['attrname']=='三日游'}3{elseif $day['attrname']=='七日游'}7{/if}</span></div>
                    <div class="J-tit-r">
                      <h3 title="{$value['title']}">{$value['title']}</h3>
                      <span class="line">{$value['extend'][0]['e_travel_spot']}</span></div>
                  </div>
                </a>
              </li>
              {/if}
              {/loop}

              {loop $attrlist $ke $value}
              {if $ke!=0}
              <li>
                <a href="{$value['url']}">
                  <div class="J-img"><img src="{Common::img($value['piclist'][1][0])}"></div>
                  <div class="J-tit">
                    <div class="J-tit-l"><span class="day">DAY</span><span class="num">{if $day['attrname']=='二日游'}2{elseif $day['attrname']=='三日游'}3{elseif $day['attrname']=='七日游'}7{/if}</span></div>
                    <div class="J-tit-r">
                      <h3 title="{$value['title']}">{$value['title']}</h3>
                      <span class="line">{$value['extend'][0]['e_travel_spot']}</span></div>
                  </div>
                </a>
              </li>
              {/if}
              {/loop}

              <div class="clearfix"></div>
            </ul>
            </div>
            {/st}
          {/if}
        {/loop}
<!--        <div class=" tab-pane">攻略 秦皇岛</div>-->
<!--        <div class=" tab-pane">攻略 保定</div>-->
<!--        <div class=" tab-pane">攻略 张家口</div>-->
      </div>
    </div>
  </section>
  <section> 
    <!-- 目的地 游记-->
    <div class="ctd-main-travels J-top">
      <div class="J-con-tit">
        <h2>目的地<span>游</span>记</h2>
        <div class="more"><a href="/notes/list">查看更多内容</a></div>
      </div>
      {st:notes action="query" flag="new" row="3" return="notes"}
      <div class="ctd-travels">
        <ul>
          {loop $notes $n}
          <li><a href="/notes/show_{$n['id']}.html">
            <div class="J-inner">
              <div class="J-img"><img src="{$n['litpic']}" height="100%" width="100%">
<!--                <div class="J-day"><span class="num">05</span><span class="day">May</span></div>-->
                <div class="user-name">{$n['member']['nickname']}</div>
                <div class="user-img"><img src="{if empty($n['member']['litpic'])}{Common::nopic()}{else}{$n['member']['litpic']}{/if}" ></div>
              </div>
              <div class="J-tit">
                <h3>{$n['title']} </h3>
                <p></p>
              </div>
              <div class="J-report"><span class="data">发表于{date("Y/m/d",$n['addtime'])}</span><span class="icon-view"><i></i>评论{$n['commentnum']}</span><span class="icon-comment"><i></i>浏览{$n['shownum']}</span></div>
            </div>
            </a>
          </li>
          {/loop}

        </ul>
      </div>
      {/st}
    </div>
  </section>
</div>


<!--底部-->
{request "pub/footer"}
</body>
</html>
