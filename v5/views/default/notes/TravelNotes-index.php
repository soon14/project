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
  {Common::css('common/bootstrap-min.css,common/public.css')}

  {Common::css('mycss/TravelNotes/TravelNotes.css')}

  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,TravelNotes/TravelNotes.js')}

  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<div class="ctd-head-box"> 
  
  <!-- 图片相册上下切换开始 -->
  <div class="connected-carousels connected-vertical">
    {st:ad action="getad" name="c_notes_index_1" pc="1"}
    <!-- 大图 -->
    <div class="stage">
      <div class="carousel carousel-stage">
        <ul>
          <?php $src  = $data['aditems'];?>
          <?php $adname  =unserialize($data['adname']); $admdd=unserialize($data['admdd']);?>
          <?php for($i=0;$i<count($src);$i++):?>
          <li>
            <div class="ctd-head-main"><a href="{$src[$i]['adlink']}"><img src="{$src[$i]['adsrc']}" width="100%" height="100%"></a>
              <div class="mtd-info"><a href="{$src[$i]['adlink']}">
                <div class="mtd-user-info">
                  <h2>{$src[$i]['adname']}</h2>
                  <div class="mtd-user-bot"> <span class="mtd-user-data"></span><span class="mtd-user-name"></span><span class="mtd-user-lv"></span><span class="mtd-user-num"></span> </div>
                </div>
                </a>
              </div>
            </div>
          </li>
          <?php endfor?>
        </ul>
      </div>
    </div>
    <!-- 小图 -->
    <div class="navigation">
      <div class="carousel carousel-navigation">
        <ul>
          <?php $src  = $data['aditems'];?>
          <?php for($i=0;$i<count($src);$i++):?>
            <li><img src="{$src[$i]['adsrc']}" alt=""></li>
          <?php endfor?>

        </ul>
      </div>
    </div>
  </div>
  <!-- 图片相册上下切换结束 --> 
  <!-- 搜索条 开始 -->
  <div class="search-container">
    <div class="search-group">
      <div class="searchtab">找到你想去的地方</div>
      <!-- 全部 begin -->
      <div class="searchbar">
        <div class="search-wrapper">
          <div class="search-input">
            <input name="q" placeholder="搜游记的标题" id="-j-index-search-input-all" autocomplete="off" type="text" onkeyup="onkeys()">
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
<div class="container">
  <section> 
    <!-- 热门游记-->
    <div class="Main-travels">
      <div class="ctd-TravelNotes-top">
        <h1>热门游记<span>足不出门看世界</span>
          <div class="english">Gonglue Travels</div>
        </h1>
      </div>
      <div class="ctd-travelsM-list">
        {st:notes action="query" flag="hot" row="3" return="seasonarc"}
        <ul>
          {loop $seasonarc $sarc}
          <li><a href="{$sarc['url']}">
            <div class="J-inner">
              <div class="J-img"><img src="{Common::img($sarc['litpic'],280,175)}" width="100%" height="100%">
                <div class="J-day"><span class="num">{Common::mydate("m",$sarc['modtime'])}</span><span class="day">May</span></div>
                <div class="user-name">{$sarc['member']['nickname']}</div>
                <div class="user-img"><img src="{Common::img($sarc['member']['litpic'],56,56)}" ></div>
              </div>
              <div class="J-tit">
                <h3>{$sarc['title']} </h3>
                <p>{$sarc['description']}</p>
              </div>
              <div class="J-report"><span class="data">发表于{Common::mydate("Y/m/d",$sarc['modtime'])}</span><span class="icon-view"><i></i>评论{$sarc['commentnum']}</span><span class="icon-comment"><i></i>浏览{$sarc['shownum']}</span></div>
            </div>
            </a>
          </li>
          {/loop}

        </ul>
      </div>
    </div>
  </section>
  <section>
    <div class="ctd-TravelNotes-body">
      <div class="ctd-main"> 
        <!-- 精华游记<-->
        <div class="ctd-TravelMain-list">
          <h4 class=""><span>精华游记</span><a class="more" href="/notes/all">更多</a></h4>
          {st:notes action="query" flag="new" row="3" return="seasonarc2"}
          <ul class="listItem">
            {loop $seasonarc2 $sarc2}
            <li>
              <div class="pic"><a href="{$sarc2['url']}"><img src="{Common::img($sarc2['litpic'],280,175)}" ></a></div>
              <div class="info">
                <h3><a href="{$sarc2['url']}">{$sarc2['title']}</a></h3>
                <p class="user-line"><a href="{$sarc2['url']}" target="-blank">{$sarc2['member']['nickname']}</a><span>|</span>发表于 {Common::mydate("Y-m-d",$sarc2['modtime'])}<span>|</span>{$sarc2['tuceNum']}张照片</p>
                <p class="user-con"><span>游记简述：</span>
                  {Common::cutstr_html($sarc2['content'],200)}
                </p>
                <p class="count-line"> <span class="icon-pic"><i></i>图片{$sarc2['tuceNum']}</span> <span class="icon-comment"><i></i>评论{$sarc2['commentnum']}</span> <span class="icon-view"><i></i>浏览{$sarc2['shownum']}</span> </p>
              </div>
            </li>
            {/loop}
          </ul>
          {/st}
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-border side-About">
          <div class="wy-notice-img"><i></i><span>{$total_notes}</span>篇游记</div>
          <div class="wy-notice-btns">
            <a href="/notes/WRITE" class="Publish-Travels" rel="nofollow" target="-blank">
              <i class="icon icon-publish"></i>发游记
            </a>
<!--            <a href="#" target="-blank" rel="nofollow">-->
<!--              <i class="icon icon-comments"></i>写点评-->
<!--            </a>-->
          </div>
        </div>
        <div class="side-border sid-Recommend">
          <h4>热门游记推荐</h4>
          <ul>
            {st:notes action="query" flag="hot" row="10" return="seasonarc3"}
            <?php shuffle($seasonarc3)?>
            {loop $seasonarc3 $n $sarc3}

            {if $n<3}
            <li onclick="window.location.href='{$sarc3[url]}'" style="cursor: pointer">
              <div class="note-img"><img src="{Common::img($sarc3['litpic'])}"/></div>
              <div class="note-con">
                <h5>{$sarc3['title']}</h5>
                <div class="note-name" style="font-size: 11px">
                  <span>
                    {$sarc3['member']['nickname']}
                  </span>
                  <span>
                    {Common::mydate("Y-m-d",$sarc3['modtime'])}
                  </span></div>
              </div>
            </li>
             {/if}
            {/loop}
           {/st}
          </ul>
        </div>
        <div>

          <img src="/res/images/index/ad_huhu.jpg" alt="沕沕水">
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

    var keyword = $("#-j-index-search-input-all").val();
    if(keyword.length==''){
      alert('请输入内容');
      $("#-j-index-search-input-all").focus();
      return false;
    }

    window.location.href = '/notes/list?keyword='+encodeURIComponent(keyword);
  });

  function onkeys(){
    var event = window.event || arguments.callee.caller.arguments[0];
    if (event.keyCode == 13)
    {
      $(".search-button").click();
    }
  }
</script>
