<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$seoinfo['seotitle']}-{$webname}</title>

  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}"/>
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}"/>
  {/if}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/index/index.css')}

  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/index/bootstrap-index.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>

<!-- 幻灯广告 开始 -->
<div class="ctd-head-box carousel-items" data-slide=""><!-- slide值有 空:“” 自动:"auto" 左右切换:"x"-->
  {st:ad action="getad" name="s_index_2" pc="1"}
  <ul class="slideImg-hd">

    <?php $src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
    <?php //var_dump($src);?>
    <?php for($i=0;$i<count($src);$i++):?>

    <li {if $i>0}style="display:none"{/if} onclick="window.location.href='{$link[$i]}'"><a href="{$link[$i]}"><img src="{$src[$i]}" alt="" width="100%" ></a></li>

    <?php endfor?>
  </ul>
  {/st}
  <a href="javascript:;" class="ctrl-slide Page-prev">上一张</a> <a href="javascript:;" class="ctrl-slide Page-next">下一张</a> 
  <!-- 幻灯导航 -->
  <div class="slideNav-bd">
    <ul class="nav-bar">
      <?php $src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
      <?php for($i=0;$i<count($src);$i++):?>

      <li {if $i==0}class="current"{/if}><em>{$i+1}</em></li>
       
      <?php endfor?>
    </ul>
  </div>
  <!-- 搜索条 开始 -->
  <div class="search-container">
    <div class="search-group">
      <div class="searchtab" id="_j_index_search_tab">
        <ul class="clearfix">

          <li data-index="3" class="tab-selected"><i onclick="change_css(this)" class="change_i"></i>攻略</li>
          <li data-index="4" ><i onclick="change_css(this)" class="change_i"></i>游记</li>
          <li data-index="2" ><i onclick="change_css(this)" class="change_i"></i>门票</li>
          <div class="clearfix"></div>
        </ul>
      </div>
      <script>

        function change_css(th){
         $(th).parent().addClass('tab-selected').siblings('li').removeClass('tab-selected');

        }
      </script>
      <!-- 全部 begin -->
      <div class="searchbar">
        <div class="search-wrapper">
          <div class="search-input">
            <input name="q" placeholder="输入目的/景区搜索" id="-j-index-search-input-all"  type="text">
          </div>
        </div>
        <div class="search-button"> <a role="button" href="javascript:"><i class="icon-search"></i></a> </div>
      </div>
      <!-- 全部 end -->
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- 搜索条 结束 --> 
</div>
<!-- 幻灯广告 结束 --> 

<!-- 广告导航 开始-->
<div class="advbox">
  <ul>
    <li onclick="window.location.href='/destination/'" style="cursor: pointer"><img src="/res/images/index/ad_01.jpg"  /></li>
    <li onclick="window.location.href='/lines/self'" style="cursor: pointer"><img src="/res/images/index/ad_02.jpg"  /></li>
    <li onclick="window.location.href='/notes'" style="cursor: pointer"><img src="/res/images/index/ad_03.jpg"  /></li>
    <li onclick="window.location.href='/raiders'" style="cursor: pointer"><img src="/res/images/index/ad_04.jpg"  /></li>
    <li onclick="window.location.href='/spots'" style="cursor: pointer"><img src="/res/images/index/ad_05.jpg"  /></li>
    <div class="clearfix"></div>
  </ul>
</div>
<!-- 广告导航 结束 -->

<div class="container ">
  <section>
    <div class="ctd-main-city clearfix">
      <div class="J-con-tit">
        <h2>带你游<span>河</span>北<span class="small-tit">了解河北从这里开始起步</span></h2>
        <div class="more"><a href="/destination">查看更多内容</a></div>
      </div>
      <div class="ctd-main-bd clearfix">
        <div class="sid-city">
          <div class="cityNav">
            <div class="cityNav-tit">
              <h4>城市</h4>
            </div>
            <div class="city">
              <ul>
                {st:dest action="query" flag="index_nav" row="11" return="index_mdd"}
                <?php //var_dump($index_mdd);exit?>
                {loop $index_mdd $mdd}
                <li ><a href="{$cmsurl}{$mdd['pinyin']}/?param=survey">{$mdd['kindname']}</a></li>
                {/loop}
                {/st}
              </ul>
            </div>
          </div>
          <br/>
          <div class="bd-sid-city">
<!--            <h3>带您游魅力河北</h3>-->
<!--            <p>吃—住—行—玩</p-->
            <img src="/res/images/index/wangmushang.jpg" alt="王母山景区"  onclick="location.href='/spots/show_42.html'" style="cursor: pointer"/>
          </div>
        </div>
        <ul class="mod-proList">
          {st:dest action="query" flag="index_nav" row="6" return="index_mdd"}
          {loop $index_mdd $mdds}
          <li style="cursor: pointer;" onclick="window.location.href='{$cmsurl}{$mdds[pinyin]}/?param=survey'">
            <div class="mak-box"> <img src="{Common::img($mdds['litpic'])}" alt="" />
              <div class="msk-tit">
                <h3>{$mdds['kindname']}</h3>
                <p>
                 {st:dest  action="query" flag="gettag" row="3" destid="$mdds[id]"  return="tags"}

                  {loop $tags $tag}
                  <span>{$tag['tag_name']}</span>
                  {/loop}
                 {/st}

                </p>
                <a href="{$cmsurl}{$mdds['pinyin']}/?param=survey" class="more">查看更多</a></div>
            </div>
          </li>
          {/loop}
          {/st}
        </ul>
      </div>
    </div>
  </section>
  <!-------------畅游 攻略 开始----------------->
  <section>
    <div class="ctd-main-Trategy clearfix">
      <div class="J-con-tit  clearfix">
        <h2>畅游<span>攻</span>略</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          {loop $index_mdd $k $mudd}
          {if $k<4}
          <li {if $k<1}class="current"{/if} data-panel = "{$k+1}" onclick="tab_raiders(this)"><a href="javascript:">{$mudd['kindname']}</a></li>
          {/if}
          {/loop}
        </ul>
        <div class="more"><a href="/raiders/all">查看更多内容</a></div>
      </div>
      {loop $index_mdd $ke $mudds}
      {if $ke<4}
      <div class="ctd-Trategy-List clearfix" {if $ke>0}style="display:none"{/if} id="panel-{$ke+1}">

        <ul>
          {st:article action="query" flag="mdd" row="3" destid="$mudds[id]" return="article"}

          {loop $article $ar}
          <li ><?php //var_dump($ar['piclist']);exit; ?>
            <div class="ctd-inner">
              <div class="J-img" onclick="window.location.href='{$ar[url]}'" style="cursor: pointer"><img src="{Common::img($ar['piclist'][1][0])}" height="100%">
                <div class="J-title">
                  <h2>{$ar['title']}</h2>
                  <p>{$ar['jiriyou']}</p>
                </div>
              </div>

              <div class="J-shots">
                <?php //var_dump($ar['piclist']);?>
                {loop $ar['piclist'] $pic_k $pic}
                {if $pic_k>1&&$pic_k<5}
                <span class="bshape" onclick="window.location.href='{$ar[url]}'" style="cursor: pointer">
                  <img src="{Common::img($pic[0])}" height="64">
                </span>
                {/if}
                {/loop}
                <span class="bshape last-child">
                  <a href="{$ar['url']}">查看<br/>
                详细内容</a>
                </span>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          {/loop}
          {/st}
        </ul>
      </div>
      {/if}
      {/loop}
    </div>
  </section>
  <script>
    //  攻略 的切换 js
   function tab_raiders(th){
      var panel = $(th).attr('data-panel');

      $(".ctd-Trategy-List").css({
       'display' : 'none'
     })
       $("#panel-"+panel).css({
         'display' : 'block'
       })
   }
  </script>

  <!--------精品游记开始 ----------------------->
  <section>
    <div class="ctd-main-travels clearfix">

      <div class="J-con-tit">
        <h2>精品<span>游</span>记<span class="small-tit">记录下美好瞬间,写下美好回忆</span></h2>
        <div class="more"><a href="/notes/list">查看更多内容</a></div>
      </div>

      <div class="ctd-travels">
        {st:notes action="query" flag="hot" row="3" return="notes"}
        <ul>
          {loop $notes $note}
          <li>
            <a href="{$note['url']}">
            <div class="J-inner">
              <div class="J-img"><img src="{Common::img($note['litpic'])}" width="100%" height="100%">
<!--                <div class="J-day"><span class="num"></span><span class="day"></span></div>-->
                <div class="user-name">{$note['member']['nickname']}</div>
                <div class="user-img"><img src="{if empty($note['member']['litpic'])}{Common::nopic()}{else}{$note['member']['litpic']}{/if}"></div>
              </div>
              <div class="J-tit">
                <h3>{$note['title']} </h3>
                <p></p>
              </div>
              <div class="J-report"><span class="data">发表于{date('Y-m-d',$note['addtime'])}</span><span class="icon-view"><i></i>评论{$note['commentnum']}</span><span class="icon-comment"><i></i>浏览{$note['shownum']}</span></div>
            </div>
            </a>
          </li>
          {/loop}
        </ul>
        {/st}
      </div>

    </div>
  </section>
  <!--------精品游记完 -------------->

  <!--------自驾游  ---------------->
  <section>
    <div class="ctd-main-SelfDrive clearfix">

      <div class="J-con-tit">
        <h2>自驾<span>游</span><span class="small-tit">跟着领队领略你从没看到过的风景</span></h2>
        <div class="more"><a href="/lines/self/all">查看更多内容</a></div>
      </div>

      <div class="mod-proList">
        {st:line action="query" flag="new" row="5" return="line"}
        <ul class="clearfix">
          <li class="sbig">
            <div class="mod-pic"> <a href="{$line[0]['url']}" title="" target="_blank"><img src="{Common::img($line[0]['piclist'][1][0])}" alt="" /></a>
            
               <div class="msk-but">
                  <h3>特别推荐</h3>
                </div>
            
              <div class="msk-tit">
                <div class="msk-doc">
                  <?php  $time = strtotime($line[0]['linedate']);?>
                  <span class="data">{date("m/d",$time)}</span><span class="md"> [{$line[0]['selfDriMdd']}]</span><span class="price">{$line[0]['storeprice']}元</span>
                </div>
                <h3>{$line[0]['title']}</h3>
                <p class="sub-title">{$line[0]['features']}</p>
              </div>
            </div>
          </li>
          {loop $line $l $li}
          {if $l>0}
          <li>
            <div class="mod-pic"> <a href="/lines/self_show_{$li['aid']}.html" title="" target="_blank"><img src="{Common::img($li['piclist'][1][0])}" alt="" /></a>
              <div class="msk-tit">
                <div class="msk-doc">
                  <?php $times = strtotime($li['linedate'])?>
                  <span class="data">{date("m/d",$times)}</span><span class="md"> [{$li['selfDriMdd']}]</span><span class="price">{$li['storeprice']}元</span>
                </div>
                <h3>{$li['title']}</h3>
              </div>
            </div>
          </li>
          {/if}
          {/loop}
        </ul>
        {/st}
      </div>

    </div>
  </section>
  <!--------自驾游完------------------>

  <!--------推荐景点------------------->
  <section>
    <div class="ctd-main-ticket clearfix">
      <div class="J-con-tit  clearfix">
        <h2>推荐<span>景</span>点</h2>
        <ul class="J-con-nav" data-toggle="tabs" data-target="tab-content1">
          {st:dest action="query" flag="index_nav" row="4" return="spot_mdd"}
          {loop $spot_mdd $g $s_mdd}
          <li {if $g<1}class="current"{/if} data-panel = "{$g+1}" onclick="tab_spots(this)"><a href="javascript:void(0)">{$s_mdd['kindname']}</a></li>
          {/loop}
          {/st}
        </ul>
        <div class="more"><a href="/spots/all">查看更多内容</a></div>
      </div>
      <div class="ctd-ticket-bd clearfix">
        <div class="sid-city">
          <div class="cityNav">
            <div class="cityNav-tit">
              <h4>主题</h4>
            </div>
            <div class="city">
              <ul>
                {st:attr action="query" flag="childitem" typeid="5" groupid="13" row="8" return="attrlist"}
                {loop $attrlist $k $attr}
                <li><a href="/spots/all-0-0-{$attr['id']}-1">{$attr['attrname']}</a></li>
                {/loop}
                {/st}
              </ul>
            </div>
          </div>
        </div>

        {loop $spot_mdd $gs $s_mdds}
        {if $gs<4}
        {st:spot action="query" flag="mdd" row="3" destid="$s_mdds[id]" return="spotbymdd"}
        {if !empty($spotbymdd)}
        <div class="ctd-tickets" id="spot_{$gs+1}" {if $gs>0}style="display:none"{/if}>
          <ul>

            {loop $spotbymdd $spot}
            <li onclick="location.href='{$spot[url]}'" style="cursor: pointer">
              <div class="J-inner">
                <div class="J-img"><img src="{$spot['litpic']}">
                  <div class="J-magazine">
                    <p>{$spot['mdd']}</p>
                  </div>
                </div>
                <div class="J-price">
                  <p class="price">{if !empty($spot['price'])}&yen;<i>{$spot['price']}</i>{else}电询{/if}</p>
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

        {/if}
        {/st}
        {/if}
        {/loop}

      </div>
    </div>
  </section>
  <!--------推荐景点 完------------------->
  <script>
    //  景点 的切换 js
    function tab_spots(th){
      var panel = $(th).attr('data-panel');

      $(".ctd-tickets").css({
        'display' : 'none'
      })
      $("#spot_"+panel).css({
        'display' : 'block'
      })
    }
  </script>

</div>
{request "pub/footer"}
</body>
</html>
<script>
  $("#-j-index-search-input-all").keydown(function(e){
    if(e.keyCode==13){
      $('.search-button').click();
    }
  });

  $('.search-button').click(function(){

    var keyword = $('#-j-index-search-input-all').val();
    if(keyword == ''){
      alert("请输入内容");
      $("#-j-index-search-input-all").focus();
      return false;
    }
    var  selected_li  = $('.tab-selected').attr('data-index');
    var  durl ;
    switch (selected_li){
      case '1' : '目的地';break;
      case '2' : durl ='spots';break;
      case '3' : durl ='raiders';break;
      case '4': durl ='notes';break;
    }
    // alert(durl);
   // return false;

      var url = "{$GLOBALS['cfg_basehost']}/"+durl+'/all?keyword='+encodeURIComponent(keyword);

   location.href = url;
  });
</script>
