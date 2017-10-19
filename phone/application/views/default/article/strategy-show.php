<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>河北全攻略</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
  {Common::css('bootstrap-min.css,public.css,strategy9-1.css')}
  {Common::js('jquery-1.11.3.min.js,strategy9-1.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body style="background:#FFF;">

      <div class="strategy-show">

          <div class="item-con"> 
            <div class="item-img"><img src="{$info['litpic']}" width="100%"></div>
            <p class="item-title"><span>{$info['title']}</span></p>
            <p class="item-top">{if $info['gl_mdd']}{$info['gl_mdd']}{else}{$info['mdd']}{/if}|{$info['dayTour']}</p>
            <p class="item-pic"><span></span></p>
            <div class="item-mask"></div>                    
          </div>
      </div>
<section style="padding-bottom:60px;">
  <div class="strategy-title"><i style="float:left">1</i><a name="1" style="float:left;color:#000000">概况</a></div>
  <div class="strategy-content" style="padding-bottom:20px;">
      <div class="select-h2"><i class="ico13">目的地</i><span>{if $info['gl_mdd']}{$info['gl_mdd']}{else}{$info['mdd']}{/if}</span></div>
      <div class="select-h2"><i class="ico12">出行天数</i><span>{$extinfo['e_travel_day']}</span></div>
      <div class="select-h2"><i class="ico14">人均消费</i><span>{$extinfo['e_travel_sonsume']}</span></div>
      <div class="select-h2"><i class="ico15">最佳出游时间</i><span>{$extinfo['e_travel_time']}</span></div>
      <div class="select-h2"><i class="ico16">景点</i><span>{$extinfo['e_travel_spot']}</span></div>
  </div>
  <div class="strategy-title"><i style="float:left">2</i><a name="2" style="float:left;color:#000000">景区简介</a></div>
  <div class="strategy-content" style="padding-bottom:20px;">
   <p>{$info['content']}</p>
  </div>
  <div class="strategy-title"><i style="float:left">3</i><a name="3" style="float:left;color:#000000">交通路线</a></div>
  <div class="strategy-content" style="padding-bottom:20px;">
   {$extinfo['e_travel_traffic']}
  </div>
  <?php //var_dump($mulu);?>
  {loop $mulu $k $v}
  <div class="strategy-title"><i style="float:left">{$k+4}</i><a name="{$k+4}" style="float:left;color:#000000">{$v['title']}</a></div>
  <div class="strategy-content">
    {$v['content']}
    {loop $v['child'] $ke $val}
    <div class="strategy-h2"><i></i><span><a name="{$k+4}-{$ke+1}" style="float:left;color:#000000">{$val['title']}</a></span></div>
    {$val['content']}
    {/loop}
  </div>
  {/loop}
</section>
<div class="strategy-catalog"></div>
<div class="travlCbox">
  <div class="close"></div>
  <div class="travlwarp">
    <ul>
      <li class="CatalogMain"><i></i><a href ="#1">概况</a></li>
      <li class="CatalogMain" ><i></i><a href ="#2">景区简介</a></li>
      <li class="CatalogMain"><i></i><a href ="#3">交通路线</a></li>
      {loop $mulu $k1 $v1}
      <li class="CatalogMain"><i></i><a href ="#{$k1+4}">{$v1['title']}</a></li>
      {loop $v1['child'] $ke1 $val1}
      <li class="CatalogChild"><i></i><a href ="#{$k1+4}-{$ke1+1}">{$val1['title']}</a></li>
      {/loop}
      {/loop}

    </ul>
  </div>
</div>
<div class="strategy-nav" style="width: 70%">
  <ul>
    <li class="read"><a href="javascript:void(0)"><i></i>阅读</a><span>{$info['shownum']}</span></li>
    
    <li class="faver {if !empty($info['islike'])}faverOn{/if}"><a href="javascript:void(0)"><i ></i>{if !empty($info['islike'])}取消喜欢{else}喜欢{/if}</a><span>{$info['likeNum']}</span></li>

    <li class="comm"><a href="javascript:void(0)"><i></i>评论</a><span>{$info['commentnum']}</span></li>
  </ul>
</div>
<footer></footer>
<div class="MaskBox"></div>
<input type="hidden" id="articleid" name="articleid" value="{$info['id']}">
<input type="hidden" id="articleaid" name="articleaid" value="{$info['aid']}">
{Common::js('layer/layer.js')}
</body>
</html>


<script>

  //点击评论
 $(".comm").click(function(){

     var arid   = $("#articleaid").val();//文章aid
     var typeid    = '4';

     var   url  = "/phone/pub/New_comment/id/"+arid+"/typeid/"+typeid;

   location.href =url;
 });
//  点击 喜欢
$(".faver").click(function(){
  var  th  = this;
  $(th).find("a").css('text-decoration','none');
  $.ajax({
    type:"POST",
    url:"/phone/member/login/ajax_is_login",
    dataType:'json',
    success:function(data){

      if(data.status){//已经 登录

        addlike(th);

      }else{  //没有登录

        layer.confirm('是否登录，将游记添加到收藏？', {
          btn: ['是','否'] //按钮
        }, function(){
          var url  = window.location.href;//获取当前页面的地址

          var login_url  ="/phone/member/login/?redirecturl="+url; //www.aitto.net/member/login/?redirecturl=
          window.location.href=login_url;
        }, function(){

        });

      }

    }

  })

});
function addlike(th){
  //获取 喜欢的值
  var s  = $(th).find("span").text();
  //获取 文章的id
  var arid = $("#articleaid").val();
  // 获取 typeid
  var  typeid = '4';

  $.ajax({
    type: "POST",
    url: "/phone/article/ajax_add_like",
    dataType:'json',
    data: {l_num:s,arId:arid,typeid:typeid},
    success:function(data){

      if(data.status){
        layer.msg(data.msg);
        $(th).addClass('faverOn');
        $(th).find("a").css('text-decoration','none');
        $(th).find("a").html("<i></i>取消喜欢");
        $(th).find("span").text(data.likenum);
      }else{
        layer.msg(data.msg);
        $(th).removeClass('faverOn');
        $(th).find("a").css('text-decoration','none');
        $(th).find("a").html("<i></i>喜欢");
        $(th).find("span").text(data.likenum);

      }

    }

  });
}
</script>
