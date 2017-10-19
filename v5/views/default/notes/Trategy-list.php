<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$seoinfo['seotitle']}</title>
  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}" />
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}" />
  {/if}
  {include "pub/varname"}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/strategy/Trategy2.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,strategy/Trategy2.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb">
    <ul>
      <li><a href="/">首页<i class="icon-gt">&gt;</i></a></li>
      <li><a href="{$cmsurl}raiders/">{$channelname}<i class="icon-gt">&gt;</i></a></li>
      {loop $predest $pre}
      <li class="current"><a href="{$cmsurl}raiders/{$pre['pinyin']}/">{$pre['kindname']}</a></li>
      {/loop}
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<?php $day = array(1=>"1天",2=>"2天",3=>"3天",4=>"4~7天",5=>"7天以上",);?>
<?php $way = array(1=>"跟团",2=>"自驾",3=>"自由行");?>
<div class="container ">
  <section> 
    <!--区域选择 开始 -->
    <div class="category" style="border: 0px">

      <div class="top-category" {if count($chooseitem)<1}style="display:none"{/if}>
        <span>一共
        <dnf>{$total}</dnf>
        条结果&nbsp;&nbsp;您已选择:
        </span>

        <span style="margin-top: -2px">
            {loop $chooseitem $item}
              <span class="crumb-select-item chooseitem"><a href="javascript:" data-url="{$item['url']}"><b>{$item['attr']}</b>：<em>{$item['itemname']}</em><i class=""></i></a></span>
             {/loop}
        </span>
      <a href="javascript:void(0)" class="del-all clearc" >删除全部搜索</a>
      </div>
    <div class="by-category">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">

        <tr>
          {st:dest action="query" typeid="101" flag="nextsame" row="30" return="destlist"}

          <td width="120" valign="top" class="text-right td-tit">目的地</td>
          <td class=""><b>不限</b>
            <ul>
              {loop $destlist $dest}
              <li {if $param['destpy']==$dest['pinyin']}class="current"{/if}><a href="{Model_Notes::get_search_url($dest['pinyin'],'destpy',$param)}">{$dest['kindname']}</a></li>
              {/loop}
            </ul>
          </td>
          {/st}
        </tr>
        <tr>
          <td valign="top"  class="text-right td-tit">出行天数：</td>
          <td class="">
            <b>不限</b>

            <ul>
              {loop $day $kd $d}
              <li {if $param['day']==$kd}class="current"{/if}><a href="{Model_Notes::get_search_url($kd,'day',$param)}">{$d}</a></li>
              {/loop}
            </ul>
          </td>
        </tr>
        <tr>
          <td valign="top"  class="text-right td-tit">出行方式：</td>
          <td class="">
            <b>不限</b>

            <ul>
              {loop $way $kw $w}
              <li {if $param['way']==$kw}class="current"{/if}><a href="{Model_Notes::get_search_url($kw,'way',$param)}">{$w}</a></li>
              {/loop}
            </ul>
          </td>
        </tr>
      </table>

    </div>
    </div>
    <!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>
  <section>
    <div class="ctd-TrategyNotes-body">
      <div class="ctd-main">
        <div class="ctd-TrategyNotes-list">
          {if !empty($list)}
          <ul class="listItem">
            {loop $list $a}
            <li onclick="window.location.href='{$a[url]}'" style="cursor: pointer">
              <div class="pic"><a href="{$a['url']}"><img src="{Common::img($a['litpic'])}" alt="{$a['title']}" ></a></div>
              <div class="info">
                <h3><a href="{$a['url']}">{$a['title']}</a></h3>
                <p class="user-line"><a href="{$a['url']}" target="-blank">{$a['member']['nickname']}</a><span>|</span>发表于 {Common::mydate('Y-m-d',$a['addtime'])}<span>|</span>{$a['tuceNum']}张照片</p>
                <p class="user-con"><span>游记简述：</span>
                  {Common::cutstr_html($a['content'],300)}
                </p>
                <p class="count-line"> <span class="icon-pic"><i></i>图片{$a['tuceNum']}</span> <span class="icon-comment"><i></i>评论{$a['commentnum']}</span> <span class="icon-view"><i></i>浏览{$a['shownum']}</span> </p>
              </div>
            </li>
            {/loop}
          </ul>
          <!--分页 结束 -->
          <div class="pages">
            {$pageinfo}
          </div>
          <!--分页 结束 -->
          {else}

          <div class="no-content">

            <p><i></i>抱歉，没有找到相关游记！<a href="/raiders/all">查看全部游记</a></p>

          </div>

          {/if}
          
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box side-About">
          <div class="wy-notice-img"><i></i><span>{$total}</span>篇游记</div>
          <div class="wy-notice-btns">
            <a href="/notes/WRITE" class="Publish-Travels" rel="nofollow" target="-blank">
              <i class="icon icon-publish"></i>发游记
            </a>
<!--            <a href="javascript:" target="-blank" rel="nofollow">-->
<!--              <i class="icon icon-comments"></i>写点评-->
<!--            </a>-->
          </div>
        </div>
        <div class="side-box sid-Recommend">
          <h4>热门攻略推荐</h4>
          <ul>
            {loop $hotRaiders $k $hotR}
            {if $k<4}
            <li onclick="window.location.href='{$hotR[url]}'" style="cursor: pointer">
              <div class="note-img"><img src="{Common::img($hotR['litpic'])}" title="{$hotR['title']}"/></div>
              <div class="note-con">
                <h5>{$hotR['title']}</h5>
                <div class="note-name"><span>{$hotR['author']}</span> {date("Y-m-d",$hotR['addtime'])}</div>
              </div>
            </li>
            {/if}
            {/loop}
          </ul>
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
  //清空筛选条件

  $('.clearc').click(function(){

    var url = SITEURL+'notes/all';

    window.location.href = url;

  })

  //删除已选

  $(".chooseitem").find('i').click(function(){

    var url = $(this).parent().attr('data-url');

    window.location.href = url;

  })


</script>
