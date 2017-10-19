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
  {/if} {include "pub/varname"}

  {Common::css('common/bootstrap-min.css,common/public.css,mycss/spot/Ticket.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js')}
  <script>
    $(document).ready(function () {
     $('.ctd-ticket-scenic:eq(1)').find('div[class=ctd-scenic-list]:eq(0)').css('display','block');
     $('.ctd-ticket-scenic:eq(2)').find('div[class=ctd-scenic-list]:eq(0)').css('display','block');

    })
        function change(th){
          var  index = $(th).index();
          $(th).parent().parent().siblings('div[class=ctd-scenic-list]').css({'display':'none'});
          $(th).parent().parent().siblings('div[class=ctd-scenic-list]:eq('+index+')').css('display',"block")
        }
  </script>
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>


<div class="ctd-head-box"> 
  <!-- 图片相册上下切换开始 -->
  {st:ad action="getad" name="s_spot_index_1" pc="1"}
  <div class="ck-slide">
    <ul class="ck-slide-wrapper">

      <?php $src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>

      <?php for($i=0;$i<count($src);$i++):?>
      <li {if $i>0}style="display:none"{/if}><a href="{$link[$i]}"><img src="{$src[$i]}" alt="" width="100%"></a></li>
      <?php endfor?>


    </ul>
    <a href="javascript:;" class="ctrl-slide ck-prev">上一张</a>
    <a href="javascript:;" class="ctrl-slide ck-next">下一张</a>
    <div class="ck-slidebox">
      <div class="slideWrap">
        <ul class="dot-wrap">
          <?php $src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
          <?php for($i=0;$i<count($src);$i++):?>
          <li {if $i==0}class="current"{/if}><em>{$i+1}</em></li>
          <?php endfor?>

        </ul>
      </div>
    </div>
  </div>
  {/st}
  <!-- js --> 
  

  
  <!-- 图片相册上下切换结束 --> 
    <!-- 搜索条 开始 -->
  <div class="ticket-search-container">
    <div class="search-group"> 
      
      <!-- 全部 begin -->
      
      <div class="ticket-search-hot">
        <ul>
          <li class="md hot-line">
            <h4><i></i>目的地</h4>
            {st:dest action="query" flag="hot" typeid="$typeid" destid="0" row="11" return="hotdest"}
            {loop $hotdest $dest}
            <a href="{$cmsurl}spots/{$dest['pinyin']}" style="color: #FFFFff">{$dest['kindname']}</a>
            {/loop}
            {/st}
          </li>
          <li class="zt hot-line">
            <h4><i></i>主题</h4>
            {st:attr action="query" flag="childitem" typeid="5" groupid="13" row="10" return="attrlist"}
            {loop $attrlist $k $attr}
            <a href="/spots/all-0-0-{$attr['id']}-1" style="color: #FFFFff">{$attr['attrname']}</a>
            {/loop}
            {/st}
          </li>
          <li class="sj">
            <h4><i></i>热门景区</h4>
            <!------07.06 fengjishu  设置热门同网站首页热门景点一致 s------->
            {st:usernav action="childnav" parentid="1" row="11" return="childnav"}
            {if !empty($childnav)}
            {loop $childnav $c}
            <a href="{$c['url']}" target="_blank"> {$c['kindname']} </a>
            {/loop}
            {/if}
            {/st}
            <!------07.06 fengjishu  e------->
            </li>
        </ul>
      </div>
      <!-- 全部 end -->
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- 搜索条 结束 --> 

</div>


<?php //exit?>
<div class="container">
  <section>
    <div class="ctd-ticket-subject">
      <ul>
        {st:ad action="getad" name="s_spot_index_2" pc="1"}
        <?php $src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
        <?php for($i=0;$i<count($src);$i++):?>
        <li><a href="{$link[$i]}"><img src="{$src[$i]}"></a></li>
        <?php endfor?>
        {/st}
        <div class="clearfix"></div>
      </ul>
    </div>
  </section>
  <section>
    <div class="ctd-ticket-TimeSale">
      <div class="Ticket-title"><span>精选热卖</span>河北最热门的景区</div>
      <div class="Ticket-Index-warp">
        <ul>
          {st:spot action="query" flag="sellmore"  row="4"}
          {loop $data $v}
          <li  onclick="window.location.href='{$v[url]}'" style="cursor: pointer">
            <div class="Ticket-IBox">
              <div class="Ticket-IBut"><a href="{$v['url']}"><img src="/res/images/spot/Ticket-IBut.png"></a></div>
              <div class="Ticket-IPic">
                <div class="MaskTit">
                  <p>{$v['title']}</p>
                </div>
                <div class="add"><i></i><span class="big">{$v['mdd']}</span></div>
                <img src="{Common::img($v['litpic'])}"> </div>
              <div class="Ticket-Iprice"> {if !empty($v['price'])}<dfn>抢购价:&nbsp;¥</dfn><span>{$v['price']}{else}<dfn>电询</dfn>{/if}</span></div>
            </div>
          </li>
          {/loop}
          {/st}
          <div class="clearfix"></div>
        </ul>
      </div>
    </div>
  </section>
  <section> 
    <!-- 门票首页 推荐景点-->
    <div class="ctd-ticket-scenic">
      <div class="J-con-tit">
        <h2>周<span>末</span>游</h2>
        <div class="more"><a href="/spots/all">查看更多内容</a></div>
      </div>
      <div class="ctd-scenic-list">
        <ul>
          {st:spot action="query" flag="attr" row="3" attrid="31" return="holidays"}
          <?php //var_dump($holidays)?>
          {loop $holidays $day}
          <li onclick="window.location.href='{$day[url]}'" style="cursor: pointer">
            <div class="J-inner">
              <div class="J-img"><img src="{Common::img($day['litpic'])}">
                <div class="J-magazine">
                  <div class="J-mask">
                    <h2>{$day['mdd']}</h2>
                    <h3>{$day['title']}</h3>

                  </div>
                </div>
              </div>
              <div class="J-price">
                <div class="price">{if $day['price']}优惠价格 &yen;<i>{$day['price']}</i><del>&yen;{$day['sellprice']}</del>{else}电询{/if}</div>
                <span class="{if $hot['price']}price-but{else}price-but1{/if}">
                <a href="{$day['url']}">
                  {if $hot['price']}
                <div class="but-txt">购买优惠门票</div>
                <div class="but-on">立即抢购</div>
                  {else}
                  <div class="but-txt">更多门票信息</div>
                  <div class="but-on">查看详情</div>
                  {/if}
                <div class="but-bugle"></div>
                </a>
                </span>
              </div>
            </div>
          </li>
          {/loop}
          {/st}
        </ul>
      </div>
    </div>
  </section>
  <section> 
    <!-- 门票首页 推荐景点-->
    <div class="ctd-ticket-scenic">
      <div class="J-con-tit">
        <h2>热门<span>目的</span>地</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          {loop $hot_mdd $k $attr}
          <li {if $k == 0}class="current"{/if} onclick='change(this)'><a href="javascript:void(0)">{$attr['kindname']}</a></li>
          {/loop}
        </ul>
        <div class="more"><a href="/spots/all">查看更多内容</a></div>
      </div>
      {loop $hot_mdd $k $attr}
      {st:spot action="query" flag="mdd"  row="3" destid="$attr['kindid']" return="hotspot"}
      <div class="ctd-scenic-list" style="display: none">
        <ul>
          {loop $hotspot $hot}
          <li onclick="window.location.href='{$hot[url]}'" style="cursor: pointer">
            <div class="J-inner">
              <div class="J-img"><img src="{Common::img($hot['litpic'])}">
                <div class="J-magazine">
                  <div class="J-mask">
                    <h2>{$hot['mdd']}</h2>
                    <h3>{$hot['title']}</h3>

                  </div>
                </div>
              </div>
              <div class="J-price">
                <div class="price">{if $hot['price']}优惠价格 &yen;<i>{$hot['price']}</i><del>&yen;{$hot['sellprice']}</del>{else}电询{/if}</div>
                <span class="{if $hot['price']}price-but{else}price-but1{/if}">
                <a href="javascript:;" title="{$hot['title']}">
                  {if $hot['price']}
                <div class="but-txt">购买优惠门票</div>
                <div class="but-on">立即抢购</div>
                  {else}
                  <div class="but-txt">更多门票信息</div>
                  <div class="but-on">查看详情</div>
                  {/if}
                <div class="but-bugle"></div>
                </a>
                </span>
              </div>
            </div>
          </li>
          {/loop}


        </ul>
      </div>
      {/st}
      {/loop}
    </div>
  </section>
  <section> 
    <!-- 门票首页 推荐景点-->
    <div class="ctd-ticket-scenic">
      <div class="J-con-tit">
        <h2>热门<span>主</span>题</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          {st:attr action="query" flag="childitem" typeid="5" groupid="13" row="4" return="attrlist"}
          {loop $attrlist $k $attr}
          <li {if $k == 0}class="current" {/if} onclick='change(this)'><a href="javascript:void(0)">{$attr['attrname']}</a></li>
          {/loop}
          {/st}
        </ul>
        <div class="more"><a href="/spots/all">查看更多内容</a></div>
      </div>
      {loop $attrlist $k $attr}
      {st:spot action="query" flag="attr" row="3" attrid="$attr['id']" return="hotspot"}
      <div class="ctd-scenic-list" style="display: none">
        <ul>
          {loop $hotspot $hot}
          <li onclick="window.location.href='{$hot[url]}'" style="cursor: pointer">
            <div class="J-inner">
              <div class="J-img"><img src="{Common::img($hot['litpic'])}">
                <div class="J-magazine">
                  <div class="J-mask">
                    <h2>{$hot['mdd']}</h2>
                    <h3>{$hot['title']}</h3>

                  </div>
                </div>
              </div>
              <div class="J-price">

                <div class="price">{if $hot['price']}优惠价格 &yen;<i>{$hot['price']}</i><del>&yen;{$hot['sellprice']}</del>{else}电询{/if}</div>
                <span class="{if $hot['price']}price-but{else}price-but1{/if}"><a href="javascript:;" title="{$hot['title']}">
                    {if $hot['price']}
                    <div class="but-txt">购买优惠门票</div>
                    <div class="but-on">立即抢购</div>
                    {else}
                    <div class="but-txt">更多门票信息</div>
                    <div class="but-on">查看详情</div>
                    {/if}
                <div class="but-bugle"></div>
                </a></span></div>
            </div>
          </li>
          {/loop}
        </ul>
      </div>
      {/st}
      {/loop}
    </div>
  </section>
</div>
{request "pub/footer"}

</body>
</html>
{Common::js('myjs/spot/bootstrap-Ticket.js')}
<script>$('.ck-slide').ckSlide({autoPlay: true});</script>