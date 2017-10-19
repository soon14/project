<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
  {Common::css('common/bootstrap-min.css,common/public.css')}
  {Common::css('mycss/strategy/Trategy2.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,strategy/Trategy2.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<div class="ctd-head-box"> 
  <!-- 图片相册上下切换开始 -->
  
  <div class="ck-slide">
<!--    {st:ad action="getad" name="s_article_index_1" pc="1"}-->
    <ul class="ck-slide-wrapper">
      <?php //var_dump($data);exit;?>
      <?php //$src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
      <?php //$adname  =unserialize($data['adname']); $admdd=unserialize($data['admdd']);?>

      <?php for($i=0;$i<count($ad_articlie);$i++):?>
      <li {if $i>0}style="display:none"{/if}>
        <div class="ctd-head-main"><a href="{$ad_articlie[$i]['url']}"><img src="{$ad_articlie[$i]['litpic']}"></a>
          <div class="mtd-info"><a href="{$ad_articlie[$i]['url']}">
              <div class="mtd-user-info">
                <div class="mtd-user-bot"> <span class="mtd-user-name"></span> </div>
                <h2>{$ad_articlie[$i]['title']}</h2>
                <p class="mtd-location">
                  <span style="font-size:24px">{date('d/m.Y',$ad_articlie[$i]['addtime'])}</span>&nbsp;&nbsp;
                  <span class="user-name">{$ad_articlie[$i]['author']}</span>&nbsp;&nbsp;
                  <span class="user-lv">LV{$ad_articlie[$i]['author_lv']}</span>&nbsp;&nbsp;
                  <span class="user-num">{$ad_articlie[$i]['all_article']}篇攻略</span>
                </p>
                <div class="mtd-more" onclick="window.location.href='{$ad_articlie[$i][url]}'"></div>
              </div>
            </a>
          </div>
        </div>
      </li>
      <?php endfor?>

    </ul>

    <a href="javascript:;" class="ctrl-slide ck-prev">上一张</a> <a href="javascript:;" class="ctrl-slide ck-next">下一张</a>
    <div class="ck-slidebox">
      <div class="slideWrap">
        <ul class="dot-wrap">
          <?php //$src  =unserialize($data['adsrc']); $link=unserialize($data['adlink']);?>
          <?php for($i=0;$i<count($ad_articlie);$i++):?>
          <li {if $i==0}class="current"{/if}><em>{$i+1}</em></li>
          <?php endfor?>

        </ul>
      </div>
    </div>
    {/st}
  </div>
  
  <!-- js --> 
  
  <script>$('.ck-slide').ckSlide({autoPlay: true});</script> 
  
  <!-- 图片相册上下切换结束 --> 
  
  <!-- 搜索条 开始 -->
  <div class="searchPlace-box" style="z-index: 5">
    <div class="search-place"> 
      <!-- 全部 begin -->
      <div class="place-search-hot">
        <ul>
          <li class="md">
            <h4><i></i>目的地</h4>
            {loop $kindlist $kind}
            <a href="/raiders/{$kind['pinyin']}">{$kind['kindname']}</a>
            {/loop}
          </li>
          <?php  $model =array(2=>'zt',3=>'sj',4=>'jl')?>
          {loop $arattrid $key $attr}
          {if $attr['attrname']!='目的地'}
          {if $attr['attrname']!='游记·攻略'}
          <li class="{$model[$key]}">
            <h4><i></i>{$attr['attrname']}</h4>
            {loop $attr['child'] $ch}
            <a href="/raiders/all-{$ch['id']}-0-1">{$ch['attrname']}</a>
            {/loop}
          </li>
          {/if}
          {/if}
          {/loop}
        </ul>
      </div>
      <div class="searchbar">
        <div class="search-wrapper">
          <div class="search-input">
            <input  placeholder="输入景区、目的搜索攻略" id="search" autocomplete="off" type="text" onkeyup="onkeys()">
          </div>
        </div>
        <div class="search-button"> <a role="button" href="javascript:"><i class="icon-search"></i></a> </div>
        <div class="clearfix"></div>
      </div>
      <!-- 全部 end --> 
      
    </div>
  </div>
  <!-- 搜索条 结束 --> 
</div>
<div class="container">
  <section> 
    <!-- 热门游记-->
    <div class="M-Hot-Trategy J-top">
      <div class="ctd-title-bd">
        <h1>热门攻略<span>给你一个不一样的旅游</span>
          <div class="english">Gonglue Travels</div>
        </h1>
        <ul class="J-con-nav J-con-navM " data-toggle="tabs" data-target="tab-content1">
          {loop $kindlist $k $v}
          {if $k<3}
          <li {if $k<1}class="current"{/if}><a href="javascript:" data-id="panel-{$k+1}" onclick="tabcity(this)">{$v['kindname']}</a></li>
          {/if}
          {/loop}
        </ul>
        <div class=" clearfix"></div>
      </div>


      <?php //var_dump($kindlist)?>
      {loop $kindlist $ke $ve}
      {if $ke<3}
      <div class="ctd-Trategy-List" id="panel-{$ke+1}" {if $ke>0}style='display:none'{/if}>
        {st:article action="query" flag="mdd"  row="3" destid="$ve['id']"}
        <ul>
          {loop $data $j}
          <li onclick="window.location.href='{$j[url]}'" style="cursor: pointer">

            <div class="ctd-inner">
              <div class="J-img"><img src="{$j['piclist'][1][0]}" height="100%">
                <div class="J-title">
                  <h2>{$j['title']}</h2>
                  <p>{if $j['gl_mdd']}{$j['gl_mdd']}{else}{$j['mdd']}{/if} {if $j['jiriyou']}/{$j['jiriyou']}{/if}</p>
                </div>
              </div>
              <div class="J-shots">
                {loop $j['piclist'] $key $g}
                <?php //var_dump($g);?>
                {if $key<5&&$key>1}
                <span class="bshape">
                  <img src="{$g[0]}" height="64">
                </span>
                {/if}
                {/loop}
                <span class="bshape last-child">
                  <a href="{$j['url']}">查看<br />
                详细内容
                  </a>
                </span>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          {/loop}
        </ul>
        {/st}
      </div>
      {/if}
      {/loop}
      <div class=" clearfix"></div>
    </div>
  </section>
  <section> 
    <!--区域选择 开始 --><!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>
  <section>
    <div class="ctd-TrategyNotes-body">
      <div class="ctd-main">
        <div class="ctd-TrategyNotes-list">
          <h4 class=""><span>精华攻略</span><a class="more" href="/raiders/all">更多</a></h4>

          <ul class="listItem" style="cursor: pointer">
            {loop $jing_hua $jh}
            <li onclick="window.location.href='{$jh[url]}'">
              <div class="pic"><a href="javascript:" ><img src="{$jh['piclist'][1][0]}" ></a></div>
              <div class="info">
                <h3><a href="{$jh['url']}">{$jh['title']}</a></h3>
                <p class="user-line"><a href="{$jh['url']}" target="-blank">{$jh['author']}</a><span>|</span>发表于{date("Y-m-d",$jh['addtime'])}<span>|</span>{$jh['tuceNum']}张照片</p>
                <p class="user-con"><span>攻略简述：</span> 
                {Common::cutstr_html($jh['content'],200)}
                </p>
                <p class="count-line"> <span class="icon-pic"><i></i>图片{$jh['tuceNum']}</span> <span class="icon-comment"><i></i>评论{$jh['commentnum']}</span> <span class="icon-view"><i></i>浏览{$jh['shownum']}</span> </p>
              </div>
            </li>
            {/loop}
          </ul>
          

          
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-border sid-Recommend">
          <h4>热门攻略推荐</h4>

          <ul>
            {loop $hotRaiders $k $hotR}
            {if $k<4}
            <li style="cursor: pointer" onclick="window.location.href='{$hotR[url]}'">
              <div class="note-img"><img src="{Common::img($hotR['piclist'][1][0])}"/></div>
              <div class="note-con">
                <h5 title="{$hotR['title']}">{$hotR['title']}</h5>
                <div class="note-name"><span>{$hotR['author']}</span>&nbsp;&nbsp;&nbsp;{date("Y-m-d",$hotR['addtime'])} </div>
              </div>
            </li>
            {/if}
            {/loop}
          </ul>
        </div>
        <div onclick="location.href='/spots/show_41.html'" style="cursor: pointer">

          <img src="/res/images/index/ad_tuoliang.jpg" alt="驼梁">

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
   $(".search-button").click(function(){

       var button = $("#search").val();
       if(button.length==''){
          return ;
       }

       window.location.href = '/raiders/all?keyword='+button;
   });

   function onkeys(){
     var event = window.event || arguments.callee.caller.arguments[0];
     if (event.keyCode == 13)
     {
       $(".search-button").click();
     }
   }

  function tabcity(th){

    // 获取 应该显示的div  id

     var id  = $(th).attr('data-id');

   //  alert(id);

     $(".ctd-Trategy-List").each(function(){
            $(this).css('display','none');
     });
     $("#"+id).css('display','block');
    //alert(length)
  }
</script>