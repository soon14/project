<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>河北游记</title>
  {Common::css('2017common/bootstrap.css,2017common/public.css')}
  {Common::css('2017new_ver/travel.css')}
  {Common::js('jquery-1.11.3.min.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<header class="ctd-page-head">
  <div id="_c_head_info" class="head-info">
    <p class="head-pic"><img src="{$info['litpic']}" alt="{$info['title']}"></p>
    <p class="head-data"><span>{date("j/M.Y",$info['addtime'])}</span><span><i>{$info['tuceNum']}</i>图</span></p>
    <p class="user-name">{$info['author']}</p>
    <p class="user-img"><img src="{if $member['litpic']}{$member['litpic']}{else}/phone/public/images/member_nopic.png{/if}"></p>
  </div>
</header>
<div id="_c_head_title" class="ctd-head-title">
  <h2 class="head-title">{$info['title']}</h2>
<!--  <div id="_c_head_user" class="head-title-user"><span class="img"><img src="{if $member['litpic']}{$member['litpic']}{else}/phone/public/images/member_nopic.png{/if}"></span><span class="name">{$info['author']}</span><span class="data">{date("j/M.Y",$info['addtime'])}</span></div>-->
</div>
<?php $day = array(1=>"1天",2=>"2天",3=>"3天",4=>"4~7天",5=>"7天以上");?>
<?php $way = array(1=>"跟团",2=>"自驾",3=>"自由行");?>
<section class="ctd-page-body">
  <div class="ctd-article">
    <div class="ntd-chapter">
      <div class="chapter-area"> <a class="anchor"  id="p0"></a>
        <h2 class="chapterHd-main" id="Catalog0"><span class="Catalog-text"><i></i>旅游概况</span></h2>
        <div class="Survey-h2">
          <li><i class="ico12"></i><span>目的地:</span>{if $info['gl_mdd']}{$info['gl_mdd']}{else}{$info['mdd']}{/if}</li>
          <li><i class="ico13"></i><span>出行日期:</span>{$info['travel_date']}</li>
          <li><i class="ico13"></i><span>出行天数:</span>{$day[$info['travel_day']]}</li>
          <li><i class="ico14"></i><span>人均花费：</span>{$info['travel_consume']}</li>
          <li><i class="ico15"></i><span>出行人物：</span>{$info['travel_men']}</li>
          <li><i class="ico16"></i><span>出行方式：</span> {$way[$info['travel_way']]}</li>
        </div>
      </div>
    </div>
    <?php //var_dump($notelist)?>
    {loop $notelist $k $v}

    <div class="ntd-chapter">
      <div class="chapter-area"><a class="anchor" id="p{$k+1}"></a>
        <h2 class="chapterHd-main" id="Catalog{$k+1}"><span class="Catalog-text"><i></i>{$v['title_s']}</span></h2>
        {if $v['notes_id']>167}
        {htmlspecialchars_decode($v['content'],ENT_QUOTES)}
        {else}
        {$v['content']}
        {/if}
      </div>

      {loop $v['child'] $ke $val}
      <div class="chapter-area"><a class="anchor" id="p{$k+1}-{$ke+1}"></a>
        <h3 class="chapterHd-child" id="Catalog{$k+1}-{$ke+1}"><span class="Catalog-text">{$val['title_s']}</span></h3>
        {if $v['notes_id']>167}
        {htmlspecialchars_decode($val['content'],ENT_QUOTES)}
        {else}
        {$val['content']}
        {/if}
      </div>
      {/loop}
    </div>
    {/loop}


  </div>
</section>

<!-- 占位-->
<div class="ctd-no-content"></div>
<div class="ctd-page-info">
  <ul class="user-link clearfix">
    <li><a id="_j_link_like" class="link-like  faver" href="javascript:;" title="喜欢就点击一下"><i {if !empty($info['islike'])}class="on"{/if}></i><span>{if !empty($info['islike'])}{count($info['islike'])}{else}0{/if}</span></a></li>
    <li><a class="link-comment comm" href="javascript:;" title="我要评论"><i></i><span>{$info['commentnum']}</span></a></li>
    <li><a class="link-browse" href="javascript:;"><i></i><span>{$info['shownum']}</span> </a></li>
  </ul>
</div>
<div id="_j_ctd_catalog" class="ctd-catalog-bot"></div>
<div id="_j_ctd_catalog_show" class="ctd-catalog">
  <h2><i></i>目录</h2>
  <div class="sideNav-bar">
    <div class="NavList">
      <ul>
      </ul>
    </div>
  </div>
</div>


<!-------结束 ------->
<input type="hidden" id="noteid" name="noteid" value="{$info['id']}">
{Common::js('layer/layer.js')}
{Common::js('20170301_new/bootstrap-min.js')}
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
    //$(th).find("a").css('text-decoration','none');
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
          $(th).find("i").addClass('on');
          $(th).find("span").text(data.likenum);
        }else{
          layer.msg(data.msg);
          $(th).find("i").removeClass('on');
          $(th).find("span").text(data.likenum);

        }

      }

    });
  }


</script>
