<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$info['seotitle']}-{$GLOBALS['cfg_webname']}</title>
  {if $info['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}"/>
  {/if}
  {if $info['description']}
  <meta name="description" content="{$seoinfo['description']}"/>
  {/if}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/destination/Destination.css')}

  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb Color-fff">
    <ul >
      <li><a href="{$cmsurl}">首页<i class="icon-gt">&gt;</i></a></li>
      <li><a href="{$cmsurl}destination/">目的地<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">{$info['kindname']}</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<section>
  {request "pub/CommonNav"}
</section>

<div class="container ">
  <section> 
    <!-- 目的地 城市印象-->
    <div class="ctd-impress-city">
      <div class="ctd-impress-city-img"> 
        <!-- 图片相册上下切换开始 -->
        <div class="connected-carousels connected-level"> 
          <!-- 大图 -->
          <div class="stage">
            <div class="carousel carousel-stage">
              <ul>
                {loop  $info['imginfo'] $img}
                <li onclick="window.location='{$img[2]}'">
                  <img src="{$img[0]}" alt="">
                  <div class="mtd-name">
                    <h2>{$img[1]}</h2>
                  </div>
                </li>
                {/loop}
              </ul>
            </div>
          </div>
          <!-- 小图 -->
          <div class="navigation">
            <div class="carousel carousel-navigation">
              <ul>
                {loop  $info['imginfo'] $img}
                <li><img src="{$img[0]}" width="86" height="60" alt=""></li>
                {/loop}

              </ul>
            </div>
          </div>
        </div>
        <!-- 图片相册上下切换结束 --> 
      </div>
      <div class="ctd-impress-city-txt" style="background:url({$info['imginfo'][0][0]});">
        <div class="impress-mask"></div>
        <div class="impress-hd">
          <div class="hd-top">
            <div class="hd-l"><span class="title-hd">
              <h4>印象</h4>
              <h5>{$info[kindname]}</h5>
              </span>
              <span class="title-but" style="cursor: pointer;" onclick="window.location='/destination/comment?kindid={$info[id]}'">我要评价</span>
            </div>
            <div class="hd-r">

            <div class="star">
              <div class="vote-star"><i style="width:80%"></i></div>总评分9.4
            </div>
              <ul>

                {loop $info['tag'] $k $tag}
                  {if $k+1<7}
                  <li><span class="h{$k+1}">{$tag['tag_name']}</span><em>|&nbsp;{$tag['precent']}%</em></li>
                  {/if}
                  {if $k+1>6&&$k+1<13}
                  <li><span class="h{$k-6}">{$tag['tag_name']}</span><em>|&nbsp;{$tag['precent']}%</em></li>
                  {/if}
                {/loop}
              </ul>
            </div>

            <div class="clearfix"></div>
          </div>
          <div class="hd-bot">
            <h3>{$info['kindname']}简介</h3>
            <p>{Common::cutstr_html($info['description'],50)}...<a href="/{$info['pinyin']}?param=human">查看详情>></a></p>
<!--            <p>十大文化旅游名胜：承德避暑山庄及外八庙、清东西陵、山海关老龙头、坝上草原、崇礼滑雪场、白洋淀、北戴河新区、野三坡、乐亭...<a href="#">查看详情>></a></p>-->
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  <section> 
    <!-- 目的地 城市 攻略-->
    <div class="ctd-main-strategy">
      <div class="J-con-tit">
        <h2>{$info['kindname']}<span>攻</span>略</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          <?php $j =0;?>
          {loop $dayattr $key $day}

          {st:article action="query" flag="byattrids"  row="7" attrid="$day['id']" cityid="$info['id']"  return="attrlist"}
          {if !empty($attrlist)}
          <?php $j ++;?>
          <li <?php if($j==1){?>class="current"<?php }?>><a href="javascript:void(0)">{$day['attrname']}</a></li>
          {/if}
          {/st}

          {/loop}
        </ul>
        <div class="more"><a href="/raiders/{$info['pinyin']}">查看更多内容</a></div>
      </div>
      <div id="tab-content1">
        <!---------------------------------------->
        <?php $j2=0;?>
        {loop $dayattr $day}

        {st:article action="query" flag="byattrids"  row="7" attrid="$day['id']" cityid="$info['id']"  return="attrlist"}
        {if !empty($attrlist)}
        <?php $j2 ++;?>
        <div class="ctd-strategy tab-pane <?php if($j2==1){?>active<?php }?>">
          <ul>
            {loop $attrlist $ke $value}
            {if $ke==0}
            <li class="figure"><a href="{$value['url']}">
                <div class="J-img"><img src="{Common::img($value['piclist'][1][0])}"></div>
                <div class="J-tit">
                  <div class="J-tit-l"><span class="day">DAY</span><span class="num">{if $day['attrname']=='二日游'}2{elseif $day['attrname']=='三日游'}3{elseif $day['attrname']=='一日游'}1{elseif $day['attrname']=='七日游'}7{/if}</span></div>
                  <div class="J-tit-r">
                    <h3 title="{$value['title']}">{$value['title']}</h3>
                    <span class="line">{$value['extend'][0]['e_travel_mdd']}</span></div>
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
                  <div class="J-tit-l"><span class="day">DAY</span><span class="num">{if $day['attrname']=='二日游'}2{elseif $day['attrname']=='三日游'}3{elseif $day['attrname']=='一日游'}1{elseif $day['attrname']=='七日游'}7{/if}</span></div>
                  <div class="J-tit-r">
                    <h3 title="{$value['title']}">{$value['title']}</h3>
                    <span class="line">{$value['extend'][0]['e_travel_mdd']}</span></div>
                </div>
              </a>
            </li>
            {/if}
            {/loop}

            <div class="clearfix"></div>
          </ul>
        </div>
        {/if}
        {/st}

        {/loop}
        <!------------------------------>


      </div>

    </div>
  </section>
  <section> 
    <!-- 目的地 城市 推荐景点-->
    <div class="ctd-main-ticket">
      <div class="J-con-tit">
        <h2>推荐<span>景</span>点</h2>
        <div class="more"><a href="/spots/{$info['pinyin']}">查看更多内容</a></div>
      </div>

      <div class="ctd-tickets">
        <ul>
          {loop $info['spot'] $spot}
          <li onclick="location.href='{$spot[url]}'" style="cursor: pointer">
            <div class="J-inner">
              <div class="J-img"><img src="{Common::img($spot['litpic'])}">
                <div class="J-magazine">
                  <p>{$info['kindname']}</p>
                </div>
              </div>
              <div class="J-price">
                <p class="price">{if $spot['price']}&yen;<i>{$spot['price']}</i>{else}电询{/if}</p>
                <div class="ticket-tit">
                  <h2><a href="javascript:;">{$spot['title']}</a></h2>
                  <h3>{if $spot['grade']}{$spot['grade']}级景区{/if}</h3>
                </div>
              </div>
            </div>
          </li>
          {/loop}
        </ul>
      </div>

    </div>
  </section>
  <section> 
    <!-- 目的地 城市 游记-->
    <div class="ctd-main-travels">
      <div class="J-con-tit">
        <h2>{$info['kindname']}<span>游</span>记</h2>
        <div class="more"><a href="/">查看更多内容</a></div>
      </div>
      <div class="ctd-travels">
        <ul>
          {loop $info['notes'] $notes}
          <li>
            <a href="{$notes['url']}">
            <div class="J-inner">
              <div class="J-img"><img src="{if empty($notes['litpic'])}{Common::nopic()}{else}{$notes['litpic']}{/if}" height="100%" width="100%">
                <div class="J-day"><span class="num">{Common::mydate('m',$notes['addtime'])}</span><span class="day">月</span></div>
                <div class="user-name">{$notes['member']['nickname']}</div>
                <div class="user-img"><img src="{$notes['member']['litpic']}" ></div>
              </div>
              <div class="J-tit">
                <h3>{$notes['title']}</h3>
                <p></p>
              </div>
              <div class="J-report"><span class="data">发表于{Common::mydate('Y-m-d',$notes['addtime'])}</span><span class="icon-view"><i></i>评论{$notes['commentnum']}</span><span class="icon-comment"><i></i>浏览{$notes['shownum']}</span></div>
            </div>
            </a>
          </li>
          {/loop}

        </ul>
      </div>
    </div>
  </section>
</div>
<!--底部-->
{request "pub/footer"}

</body>
</html>
