<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>河北游记</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
  {Common::css('bootstrap-min.css,public.css,travels9-1.css')}
  {Common::js('jquery-1.11.3.min.js,strategy9-1.js')}
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body style="background:#FFF;">
<div class="travesls-show">
  <div class="item-con">
    <div class="item-img"><img src="{$info['litpic']}"></div>
    <p class="item-title"> <span class="item-tit">{$info['title']}</span> <span class="item-top">{$info['mdd']}|{date('Y-m-d',$info['addtime'])}</span> </p>
    <div class="item-peo">
      <div class="peo-ico"><img src="{$member['litpic']}"></div>
      <div class="peo-name">{$member['nickname']}</div>
    </div>
    <div class="item-mask"></div>
  </div>
</div>
<section style="padding-bottom:60px;">

  <div class="travl-title" id="catalog01"><i style="float:left">1</i><a name ="catalog01" style="float:left;color:#000000">概况</a></div>
  <div class="travl-content" style="padding-bottom:20px;">
      <div class="select-h2"><i class="ico13">目的地：</i><span>{$info['mdd']}</span></div>
      <div class="select-h2"><i class="ico12"> 出发日期：</i><span>{$info['travel_date']}</span></div>
      <div class="select-h2"><i class="ico14">出行天数：</i><span>{$info['travel_day']}</span></div>
      <div class="select-h2"><i class="ico15"> 人均花费：</i><span>{$info['travel_consume']}</span></div>
      <div class="select-h2"><i class="ico16">出行人物：</i><span>{$info['travel_men']}</span></div>
     <div class="select-h2"><i class="ico16">出行方式：</i><span>{if $info['travel_way']==0}跟团{elseif $info['travel_way']==1}自驾{elseif $info['travel_way']==2}自由行{/if}</span></div>
  </div>
  {loop $notelist $k $v}
  <div class="travl-title" id="catalog02"><i style="float:left">{$k+2}</i><a name="{$k+2}" style="float:left;color:#000000">{$v['title_s']}</a></div>
  <div class="travl-content">
      {if $v['notes_id']>167}
      {htmlspecialchars_decode($v['content'],ENT_QUOTES)}
      {else}
      {$v['content']}
      {/if}
     {loop $v['child'] $ke $val}
    <div class="travl-h2">
        <i style="float:left"></i>
        <span><a name="{$k+2}-{$ke+1}" style="float:left;color:#000000">{$val['title_s']}</a>
        </span>
    </div>
    
      {if $m['notes_id']>167}
      {htmlspecialchars_decode($val['content'],ENT_QUOTES)}
      {else}
      {$val['content']}
      {/if}
     {/loop}

  </div>
  {/loop}
</section>
<div class="travl-catalog"></div>
<div class="travlCbox">
  <div class="close"></div>
  <div class="travlwarp">
    <ul>
      <li class="CatalogMain"><i></i><a href="#catalog01">概况</a></li>
      {loop $notelist $k1 $v1}
      <li class="CatalogMain"><i></i><a href="#{$k1+2}">{$v1['title_s']}</a></li>
      {loop $v1['child'] $ke1 $val1}
      <li class="CatalogChild"><i></i><a href="#{$k1+2}-{$ke1+1}">{$val1['title_s']}</a></li>
      {/loop}
      {/loop}

    </ul>
  </div>
</div>
<div class="travl-nav">
  <ul>
    <li class="faver {if !empty($info['islike'])}faverOn{/if}"><a href="javascript:void(0)"><i></i>{if !empty($info['islike'])}取消喜欢{else}喜欢{/if}</a><span>{$info['likeNum']}</span></li>
    <li class="read"><a href="javascript:void(0)"><i></i>阅读</a><span>{$info['shownum']}</span></li>
    <li class="comm"><a href="javascript:void(0)"><i></i>评论</a><span>{$info['commentnum']}</span></li>
  </ul>
</div>
<footer></footer>
<input type="hidden" id="noteid" name="noteid" value="{$info['id']}">
<div class="MaskBox"></div>
{Common::js('layer/layer.js')}
</body>
</html>
<script>
    //点击评论
    $(".comm").click(function(){

        var arid   = $("#noteid").val();//游记 id
        var typeid    = '101';

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
    var arid = $("#noteid").val();
    // 获取 typeid
    var  typeid = '101';

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