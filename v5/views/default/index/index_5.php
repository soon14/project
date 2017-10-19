<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$seoinfo['seotitle']}-{$webname}</title>
  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}"/>
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}"/>
  {/if}
<!-- 页面公用 public CSS 文件 -->
  {Common::css('mycss/destination/Destination.css')}
<link rel="stylesheet" type="text/css" href="style/Destination.css" />
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<!-- 广告条内容 开始 -->
<div class="ctd-head-box" style="background: url(/res/images/destination/banner.jpg) no-repeat center">
  <div class="ctd-tit">
    <h1>带您领路河北每一处风景</h1>
    <p>十大文化旅游名胜：承德避暑山庄及外八庙、清东西陵、山海关老龙头、坝上草原、崇礼滑雪场、白洋淀、北戴河新区、野三坡、乐亭三岛、武灵丛台。</p>
  </div>
  <div class="ctd-city">
    <ul class="city-nav" data-toggle="tabs">

      <li class="current"><a href="javascript:void(0)" onclick="window.location='{$cmsurl}shijiazhuang?param=survey'">石家庄</a></li>
      {st:dest action="query" flag="index_nav" row="10" return="index_mdd"}
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
                  <div class="J-img"><img src="{$value['litpic']}" style="height: 100%"></div>
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
              <div class="J-img"><img src="{Common::img($value['litpic'])}"></div>
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
                  <div class="J-img"><img src="{$value['litpic']}" style="height: 100%"></div>
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
                  <div class="J-img"><img src="{Common::img($value['litpic'])}"></div>
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
        <div class="more"><a href="#">查看更多内容</a></div>
      </div>
      <div class="ctd-travels">
        <ul>
          <li><a href="#">
            <div class="J-inner">
              <div class="J-img"><img src="/res/images/test-img/5.jpg">
                <div class="J-day"><span class="num">05</span><span class="day">May</span></div>
                <div class="user-name">可可西里玩不停</div>
                <div class="user-img"><img src="/res/images/test-img/pic-100-100.jpg" ></div>
              </div>
              <div class="J-tit">
                <h3>味蕾留恋川渝，视觉贪恋九寨 </h3>
                <p>喜欢上旅行是从高考后的毕业旅行开始，说来也觉得好笑，18岁的我第一次搭飞机去了帝都</p>
              </div>
              <div class="J-report"><span class="data">发表于2015/02/25</span><span class="icon-view"><i></i>评论275</span><span class="icon-comment"><i></i>浏览54</span></div>
            </div>
            </a> </li>
          <li><a href="#">
            <div class="J-inner">
              <div class="J-img"><img src="/res/images/test-img/5.jpg">
                <div class="J-day"><span class="num">05</span><span class="day">May</span></div>
                <div class="user-name">可可西里玩不停</div>
                <div class="user-img"><img src="/res/images/test-img/pic-100-100.jpg" ></div>
              </div>
              <div class="J-tit">
                <h3>味蕾留恋川渝，视觉贪恋九寨 </h3>
                <p>喜欢上旅行是从高考后的毕业旅行开始，说来也觉得好笑，18岁的我第一次搭飞机去了帝都</p>
              </div>
              <div class="J-report"><span class="data">发表于2015/02/25</span><span class="icon-view"><i></i>评论275</span><span class="icon-comment"><i></i>浏览54</span></div>
            </div>
            </a> </li>
          <li><a href="#">
            <div class="J-inner">
              <div class="J-img"><img src="/res/images/test-img/5.jpg">
                <div class="J-day"><span class="num">05</span><span class="day">May</span></div>
                <div class="user-name">可可西里玩不停</div>
                <div class="user-img"><img src="/res/images/test-img/pic-100-100.jpg" ></div>
              </div>
              <div class="J-tit">
                <h3>味蕾留恋川渝，视觉贪恋九寨 </h3>
                <p>喜欢上旅行是从高考后的毕业旅行开始，说来也觉得好笑，18岁的我第一次搭飞机去了帝都</p>
              </div>
              <div class="J-report"><span class="data">发表于2015/02/25</span><span class="icon-view"><i></i>评论275</span><span class="icon-comment"><i></i>浏览54</span></div>
            </div>
            </a> </li>
        </ul>
      </div>
    </div>
  </section>
</div>


<!--底部-->
{request "pub/footer"}
</body>
</html>
