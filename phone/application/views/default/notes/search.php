<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>搜索游记</title>

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
        <div class="search_box"> <span class="dest_search_txt" id ="searchBtn">搜索</span>
          <input id="dest_search_input" class="search_text" type="text" placeholder="输入目的地、游记标题">
          <a href="javascript:;" style="" class="dest_search_btn"></a> </div>
      </form>
    </div>
  </div>
</header>
<section class="Dest-search-list clearfix">

  <!----目的地---->
  <div class="title">目的地</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">
    {loop $des $de}
    <li data-id="{$de['id']}" name="mdd"><a href="javascript:;">{$de['kindname']}</a></li>
    {/loop}
    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
  </ul>


  <!-------时间--------->
  <div class="title">出行时间</div>
  <ul class="Dest-search-list clearfix" data-toggle="tabs">
    {loop $days  $key $t}
    <li data-id="{$key}" name="day"><a href="javascript:void(0)">{$t}</a></li>

    {/loop}
  </ul>


  <!--------出行方式-------------->
  <div class="title">出行方式</div>
  <ul class="Dest-search-list distance clearfix" data-toggle="tabs">
    {loop $ways $ke $w}
    <li data-id="{$ke}" name="way" ><a href="javascript:void(0)">{$w}</a></li>
    {/loop}
  </ul>

</section>
<div class="search-MakeSure"><a href="javascript:">搜索</a></div>
<script>
  $('.search-MakeSure').click(function(){

    var mdd1     = $('li[name=mdd][class=current]').attr('data-id');

    if(typeof(mdd1)=='undefined'){var mdd= '';}else{var mdd=mdd1;}

    var day1    = $('li[name=day][class=current]').attr('data-id');

    if(typeof(day1)=='undefined'){var day='';}else{var day =day1;}

    var way1    = $('li[name=way][class=current]').attr('data-id');
    if(typeof(way1)=='undefined'){var way='';}else{var way =way1;}

    var url  = "/phone/notes/search_list?mdd="+mdd+"&day="+day+"&way="+way;
    window.location.href =url ;
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
      var url  = "/phone/notes/search_list?keyword="+keyword;
      window.location.href =url ;
    }
  }
</script>

{Common::js('20170301_new/bootstrap-min.js')}
</body>
</html>

