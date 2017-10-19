<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>搜索门票</title>

{Common::css('2017common/bootstrap.css,2017common/public.css')}
  {Common::js('jquery-1.11.3.min.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body style="background:#FFF;">
<header class="Dest-search-head">
  <div class="searchBox">
    <div class="searchTitle"><a class="back-page" href="#"></a>选择目的地</div>
    <div class="search_p">
      <form>
        <div class="search_box"> <span class="dest_search_txt" id="searchBtn">搜索</span>
          <input id="dest_search_input" class="search_text" type="text" placeholder="输入景区搜索">
          <a href="javascript:;" style="" class="dest_search_btn"></a> </div>
      </form>
    </div>
  </div>
</header>
<section class="Dest-search-list clearfix">

  <!----目的地---->
  <div class="title">目的地</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">
      {st:dest action="query" flag="hot" typeid="$typeid" row="10"}
      {loop $data $de}
     <li data-id="{$de['id']}" data-pinyin="{$de['pinyin']}" name="mdd" {if $pinyin==$de['pinyin']}class="current"{/if}><a href="javascript:;">{$de['kindname']}</a></li>
      {/loop}
      {if count($data)>7}
    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
      {/if}
      {/st}
  </ul>


  <!----主题------->
    {st:attr action="query" flag="grouplist" typeid="$typeid"}
    {loop $data $group}
   <div class="title">{$group['attrname']}</div>
   <ul data-search="search-li" class="Dest-search-list clearfix" data-toggle="tabs">
      {st:attr action="query" flag="childitem" return="list" typeid="$typeid" groupid="$group['id']" row="20"}
      {loop $list $at}
       {if $at['id']>19&&$at['id']<25}
       <li data-id="{$at['id']}" name="dengji" {if $greatid==$at['id']}class="current"{/if}><a href="javascript:;">{$at['attrname']}</a></li>
       {else}
       <li data-id="{$at['id']}" name="theme" {if $themeid==$at['id']}class="current"{/if}><a href="javascript:;">{$at['attrname']}</a></li>
       {/if}
       {/loop}
       {if count($list)>7}
        <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
       {/if}
       {/st}
  </ul>
    {/loop}
    {/st}

</section>
<div class="search-MakeSure"><a href="javascript:">搜索</a></div>
<script>
  $('.search-MakeSure').click(function(){

    var mdd1     = $('li[name=mdd][class=current]').attr('data-id');
    var pinyin     = $('li[name=mdd][class=current]').attr('data-pinyin');

    if(typeof(mdd1)=='undefined'){var mdd= 'all';}else{var mdd=mdd1;}
    if(typeof(pinyin)=='undefined'){var pinyin1= '';}else{var pinyin1=pinyin;}

    var theme1   = $('li[name=theme][class=current]').attr('data-id');

    if(typeof(theme1)=='undefined'){var theme=0;}else{var theme =theme1;}

    var dengji1   = $('li[name=dengji][class=current]').attr('data-id');

    if(typeof(dengji1)=='undefined'){var dengji='';}else{var dengji =dengji1;}

    var url  = "/phone/spots/"+mdd+"-0-0-0-"+theme+"?pinyin="+pinyin1+"&themeid="+theme+"&greatid="+dengji;
    localStorage.removeItem('dataHtmlticket');
    localStorage.removeItem('dataLoading');
    window.location.href =url;
  });

  $("#searchBtn").click(function(){
         sousuo();
  });
  $(".dest_search_btn").click(function(){
        sousuo();
  })
  function sousuo(){
    var keyword = $("#dest_search_input").val();
    if(keyword.length==0){
      alert('请输入关键词');
      $("#dest_search_input").focus();
      return false;
    }else{
      var url  = "/phone/spots/all?keyword="+keyword;
      window.location.href =url ;
    }
  }
</script>

{Common::js('20170301_new/bootstrap-min.js')}
</body>
</html>

