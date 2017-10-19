<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>搜索攻略</title>

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
          <input id="dest_search_input" class="search_text" type="text" placeholder="输入目的地、景区搜索攻略">
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


  <!----主题------->
  <div class="title">主题</div>
  <ul data-search="search-li" class="Dest-search-list clearfix" data-toggle="tabs">
    {loop $attrs[1] $at}
    <li data-id="{$at['id']}" name="theme"><a href="javascript:;">{$at['attrname']}</a></li>
    {/loop}
    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
  </ul>


  <!-------时间--------->
  <div class="title">时间</div>
  <ul class="Dest-search-list clearfix" data-toggle="tabs">
    {loop $attrs[0] $t}
    <li data-id="{$t['id']}" name="time"><a href="javascript:void(0)">{$t['attrname']}</a></li>
    {/loop}
  </ul>


  <!--------距离-------------->
  <div class="title">距离</div>
  <ul class="Dest-search-list distance clearfix" data-toggle="tabs">
    {loop $attrs[2] $a}
    <li data-id="{$a['id']}" name="address" ><a href="javascript:void(0)">{$a['attrname']}</a></li>
    {/loop}
  </ul>

</section>
<div class="search-MakeSure"><a href="javascript:">搜索</a></div>
<script>
  $('.search-MakeSure').click(function(){

    var mdd1     = $('li[name=mdd][class=current]').attr('data-id');

    if(typeof(mdd1)=='undefined'){var mdd= '';}else{var mdd=mdd1;}

    var theme1   = $('li[name=theme][class=current]').attr('data-id');

    if(typeof(theme1)=='undefined'){var theme='';}else{var theme =theme1;}

    var time1    = $('li[name=time][class=current]').attr('data-id');
    if(typeof(time1)=='undefined'){var time='';}else{var time =time1;}
    var address1  = $('li[name=address][class=current]').attr('data-id');
    if(typeof(address1)=='undefined'){var address='';}else{var address =address1;}
    var url  = "/phone/article/search_list?mdd="+mdd+"&theme="+theme+"&time="+time+"&address="+address;
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
      var url  = "/phone/article/search_list?keyword="+keyword;
      window.location.href =url ;
    }
  }
</script>

{Common::js('20170301_new/bootstrap-min.js')}
</body>
</html>

