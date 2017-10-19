<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>搜索
     {if $param =='spot'}景点
     {elseif $param == 'hotel'}酒店
     {/if}

</title>

  {Common::css('2017common/bootstrap.css,2017common/public.css')}
  {Common::js('jquery-1.11.3.min.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body style="background:#FFF;">
<header class="Dest-search-head">
  <div class="searchBox">
    <div class="searchTitle"><a class="back-page" href="javascript:history.back()"></a>{$destinfo['kindname']}</div>
    <div class="search_p">
      <form>
        <div class="search_box"> <span class="dest_search_txt" id ="searchBtn">搜索</span>
          <input id="dest_search_input" class="search_text" type="text" placeholder="输入景区名称搜索" value="{if $keyword}{$keyword}{/if}" onkeyup="onkeys()">
          <a href="javascript:;" style="" class="dest_search_btn"></a> </div>
      </form>
    </div>
    <script>
      function onkeys(){
        var event = window.event || arguments.callee.caller.arguments[0];
        if (event.keyCode == 13)
        {
          $(".dest_search_btn").click();
        }
      }
    </script>
  </div>
</header>
<section class="Dest-search-list clearfix">
  <!----------------------------门票 搜索------------------------------------>
{if $param =='spot'}
  <!----目的地---->
  <div class="title">景点主题</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">
    {loop $spat1 $sp}
    <li data-id="{$sp['id']}" name="theme" {if $sp['id']==$info['theme']}class="current"{/if}><a href="javascript:;">{$sp['attrname']}</a></li>
    {/loop}
    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
  </ul>


  <!----主题------->
  <div class="title">景点等级</div>
  <ul data-search="search-li" class="Dest-search-list clearfix" data-toggle="tabs">
    {loop $spat2 $sp}
    <li name="greate" data-id="{$sp['id']}" data-title="{$sp['sttrname']}" {if $sp['id']==$info['greatid']}class="current"{/if}><a href="javascript:;">{$sp['attrname']}</a></li>
    {/loop}
<!--    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>-->
  </ul>

  <!----------------------------酒店 搜索------------------------------------>
{elseif $param=='hotel'}<!------酒店 搜索-------------->

  <!-----星级---->
  <div class="title">酒店星级</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">
    {st:hotel action="rank_list"}
    {loop $data $r}
    <li data-id="{$r['id']}" name="rank" {if $r['id']==$info['rankid']}class="current"{/if}><a href="javascript:;">{$r['title']}</a></li>
    {/loop}
    {/st}
    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
  </ul>

  <!-----价格--------->
  <div class="title">酒店价格</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">
    {st:hotel action="price_list"}
    {loop $data $r}
    <li data-id="{$r['id']}" name="price" {if $r['id']==$info['price']}class="current"{/if} style="width:auto"><a href="javascript:;">{$r['title']}</a></li>
    {/loop}
    {/st}

    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
  </ul>
   <!------特色服务--------->

  {st:attr action="query" flag="grouplist" typeid="2" return="grouplist"}
  {loop $grouplist $group}
  <div class="title">{$group['attrname']}</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">
    {st:attr action="query" flag="childitem" typeid="2" groupid="$group['id']" return="attrlist"}
    {loop $attrlist $k $attr}
    <li data-id="{$attr['id']}" data-pid="{$group['id']}" name="attr" {if Common::check_instr($info['attrid'], $attr['id'])}class="current"{/if}><a href="javascript:;">{$attr['attrname']}</a></li>
    {/loop}
    {/st}
    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
  </ul>
  {/loop}
  {/st}
 <input  type="hidden" value="{$param}" id="param">

  <!---------------------------- 攻略 搜索 ------------------------------------>
{elseif $param=='raider'}<!------攻略  搜索-------------->
  <!----目的地---->
  <div class="title">目的地</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">

    <li data-id="{$destinfo['id']}" name="mdd" class="current"><a href="javascript:;">{$destinfo['kindname']}</a></li>

  </ul>

  <!----主题------->
  <div class="title">主题</div>
  <ul data-search="search-li" class="Dest-search-list clearfix" data-toggle="tabs">
    {loop $attrs[1] $at}
    <li data-id="{$at['id']}" name="theme" {if $at['id']==$info['theme']}class="current"{/if}><a href="javascript:;">{$at['attrname']}</a></li>
    {/loop}
    <div data-more="searchMore" class="more"><a href="javascript:;">更多...</a></div>
  </ul>


  <!-------时间--------->
  <div class="title">时间</div>
  <ul class="Dest-search-list clearfix" data-toggle="tabs">
    {loop $attrs[0] $t}
    <li data-id="{$t['id']}" name="time" {if $t['id']==$info['time']}class="current"{/if}><a href="javascript:void(0)">{$t['attrname']}</a></li>
    {/loop}
  </ul>


  <!--------距离-------------->
  <div class="title">距离</div>
  <ul class="Dest-search-list distance clearfix" data-toggle="tabs">
    {loop $attrs[2] $a}
    <li data-id="{$a['id']}" name="address" {if $a['id']==$info['address']}class="current"{/if}><a href="javascript:void(0)">{$a['attrname']}</a></li>
    {/loop}
  </ul>
<!-----------------------------游记 ------------------------------------------->
  {elseif $param='note'}
  <!----目的地---->
  <div class="title">目的地</div>
  <ul data-search="search-li" data-toggle="tabs" class="Dest-search-list clearfix">


    <li data-id="{$destinfo['id']}" name="mdd" class="current"><a href="javascript:;">{$destinfo['kindname']}</a></li>


  </ul>


  <!-------时间--------->
  <div class="title">出行时间</div>
  <ul class="Dest-search-list clearfix" data-toggle="tabs">
    {loop $days  $key $t}
    <li data-id="{$key}" name="day"  {if $key==$info['day']}class="current"{/if}><a href="javascript:void(0)">{$t}</a></li>

    {/loop}
  </ul>


  <!--------出行方式-------------->
  <div class="title">出行方式</div>
  <ul class="Dest-search-list distance clearfix" data-toggle="tabs">
    {loop $ways $ke $w}
    <li data-id="{$ke}" name="way"  {if $ke==$info['way']}class="current"{/if}><a href="javascript:void(0)">{$w}</a></li>
    {/loop}
  </ul>

  {else}

  {/if}

<input type="hidden" name="thatPage" id="thatPage" value="111">
</section>
<div class="search-MakeSure"><a href="javascript:">搜索</a></div>
<script>
   var  param  = "{$param}";
  $('.search-MakeSure').click(function(){

     try
     {

       if(param.length!='') {

         var url = "/phone/{$destinfo['pinyin']}/des-"+param;
         if(param=='spot') {

           var greate;

           var theme;

           var greate1 = $('li[name=greate][class=current]').attr('data-id');

           typeof(greate1) == 'undefined' ? greate = '' : greate = greate1;

           var theme1 = $('li[name=theme][class=current]').attr('data-id');

           typeof(theme1) == 'undefined' ? theme = '' : theme = theme1;

            url += "?themeid=" + theme + "&greatid=" + greate;
         }else if(param=='hotel'){
           var rank ;var price; var attr =[];

           var rank1  = $('li[name=rank][class=current]').attr('data-id');
           typeof(rank1) == 'undefined' ? rank = '' : rank = rank1;

           var price1  = $('li[name=price][class=current]').attr('data-id');
           typeof(price1) == 'undefined' ? price = '' : price = price1;

           var attrLength  = $('li[name=attr][class=current]').length;
           var j =[];
            for(var i= 0;i<attrLength;i++){
              var thisLi  = $('li[name=attr][class=current]:eq('+i+')');
              j.push(thisLi.attr('data-id')+','+thisLi.attr('data-pid'))
            }
            var  attr = j.join('_');

           url += "?rankid=" + rank + "&priceid=" + price+"&attrid="+attr;

         }else if(param=='raider'){

           var mdd1     = $('li[name=mdd][class=current]').attr('data-id');
           if(typeof(mdd1)=='undefined'){var mdd= '';}else{var mdd=mdd1;}
           var theme1   = $('li[name=theme][class=current]').attr('data-id');

           if(typeof(theme1)=='undefined'){var theme='';}else{var theme =theme1;}

           var time1    = $('li[name=time][class=current]').attr('data-id');
           if(typeof(time1)=='undefined'){var time='';}else{var time =time1;}
           var address1  = $('li[name=address][class=current]').attr('data-id');
           if(typeof(address1)=='undefined'){var address='';}else{var address =address1;}
           url  += "?mdd="+mdd+"&theme="+theme+"&time="+time+"&address="+address;

         }else if (param=='note'){

           var mdd1     = $('li[name=mdd][class=current]').attr('data-id');

           if(typeof(mdd1)=='undefined'){var mdd= '';}else{var mdd=mdd1;}

           var day1    = $('li[name=day][class=current]').attr('data-id');

           if(typeof(day1)=='undefined'){var day='';}else{var day =day1;}

           var way1    = $('li[name=way][class=current]').attr('data-id');

           if(typeof(way1)=='undefined'){var way='';}else{var way =way1;}

           url  += "?mdd="+mdd+"&day="+day+"&way="+way;
         }
           window.location.href = url;
       }else{
         throw "请检查 param 参数,该参数不能为空";
       }
    }
     catch(err){

           alert(err);
     }
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
      var url  = "/phone/{$destinfo['pinyin']}/des-"+param+"?keyword="+keyword;
      window.location.href =url ;
    }
  }
</script>

{Common::js('20170301_new/bootstrap-min.js')}
</body>
</html>

