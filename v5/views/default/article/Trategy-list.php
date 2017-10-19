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
  {/if} {include "pub/varname"}
  {Common::css('common/bootstrap-min.css,common/public.css')}
  {Common::css('mycss/strategy/Trategy2.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,strategy/Trategy2.js')}
  <style>.ctd-sort-view {
      height: 50px;
      background: #FFF;
      line-height: 50px;
      border-bottom: 1px solid #eee;
      margin-bottom: 10px;
    }

    .ctd-sort-view li {
      float: left;
      height: 50px;
      line-height: 50px;
      border-right: 1px solid #eee;
    }
    .ctd-sort-view .current a {
      background: #fd8800;
      color: #FFF;
      padding: 15px;
    }
  </style>
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
<div class="container">
  <section> 
    <!--区域选择 开始 -->
    <div class="category" >
      <div class="top-category" {if count($chooseitem)<1}style="display:none"{/if}>
        <span>一共
        <dnf>{$total}</dnf>
        条结果&nbsp;&nbsp;您已选择:</span>

        <span style="margin-top: -2px">

            {loop $chooseitem $item}
              <span class="crumb-select-item chooseitem"><a href="javascript:" data-url="{$item['url']}"><b>{$item['attr']}</b>：<em>{$item['itemname']}</em><i class=""></i></a></span>
<!--           <strong class="chooseitem" data-url="{$item['url']}">{$item['itemname']}<i></i></strong>-->
             {/loop}
        </span>
        <a href="javascript:void(0)" class="del-all clearc" >删除全部搜索</a>
      </div>
      <div class="by-category">
        {if $param['attrid']!=19}
        <table width="100%" border="0" cellpadding="0" cellspacing="0">

          <tr>
            {st:dest action="query" typeid="$typeid" flag="nextsame" row="30" pid="$destid" return="destlist"}

            <td width="120" valign="top" class="text-right td-tit">目的地</td>

            <td class=""><b>不限</b>
              <ul>
                {loop $destlist $dest}
                <li {if $param['destpy']==$dest['pinyin']}class="current"{/if}><a href="{Model_Article::get_search_url($dest['pinyin'],'destpy',$param)}">{$dest['kindname']}</a></li>
                {/loop}

              </ul>
            </td>
            {/st}
          </tr>
          {st:attr action="query" flag="grouplist" typeid="$typeid" return="grouplist"}

          {loop $grouplist $group}
          {if $group['attrname']!='目的地'}
          {if $group['attrname']!='游记·攻略'}
          <tr>
            <td valign="top"  class="text-right td-tit">{$group['attrname']}：</td>
            <td class="">
              {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$group['id']" return="attrlist"}
              {if count($attrlist)>14}
              <div class="show-more"> <span>更多</span><i class="icon-angle-down"></i></div>
              {/if}
              <b>不限</b>
              <ul>

                {loop $attrlist $attr}
                <li {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="current"{/if}><a href="{Model_Article::get_search_url($attr['id'],'attrid',$param)}">{$attr['attrname']}</a></li>
                {/loop}
                {/st}
              </ul>
            </td>
          </tr>
          {/if}
          {/if}
          {/loop}

          {/st}
        </table>
        {/if}
      </div>
    </div>
    <!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>
  <section>
    <div class="ctd-TrategyNotes-body">
      <div class="ctd-main">
        <div class="ctd-sort-view">
          <ul class="tabs" style=" ">
            <?php //var_dump($param['sorttype'])?>
            <li  {if $param['sorttype']==0}class="current"{/if} ><a href="{Model_Article::get_search_url(0,'sorttype',$param,$currentpage)}" >默认排序</a></li>

            <li {if $param['sorttype']==1}class="current"{/if}>

            <a href="{Model_Article::get_search_url(1,'sorttype',$param,$currentpage)}" >&nbsp;最&nbsp;&nbsp;热&nbsp;<i></i></a>

            </li>

          </ul>
        </div>
        <div class="ctd-TrategyNotes-list">
          {if !empty($list)}
          <ul class="listItem">

            {loop $list $a}
            <li style="cursor: pointer" onclick="window.location.href='{$a[url]}'">
              <?php //var_dump($a['piclist']);exit?>
              <div class="pic"><a href="{$a['url']}"><img src="{$a['piclist'][1][0]}" alt="{$a['title']}" ></a></div>
              <div class="info">
                <h3><a href="{$a['url']}">{$a['title']}</a></h3>
                <p class="user-line"><a href="#" target="-blank">{$a['author']}</a><span>|</span>发表于 {Common::mydate('Y-m-d',$a['addtime'])}<span>|</span>{$a['tuceNum']}张照片</p>
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

            <p><i></i>抱歉，没有找到相关攻略！<a href="/raiders/all">查看全部攻略</a></p>

          </div>

          {/if}
          
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box side-About">
          <div class="wy-notice-img"><i></i><span>{$total}</span>篇攻略</div>
          <div class="wy-notice-btns">
            <a href="/notes/WRITE" class="Publish-Travels" rel="nofollow" target="-blank">
              <i class="icon icon-publish"></i>写游记
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
            <li style="cursor: pointer" onclick="window.location.href='{$hotR[url]}'">
              <div class="note-img"><img src="{Common::img($hotR['piclist'][1][0])}" title="{$hotR['title']}"/></div>
              <div class="note-con">
                <h5 style="overflow: hidden">{$hotR['title']}</h5>
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

    var url = SITEURL+'raiders/all/';

    window.location.href = url;

  })

  //删除已选

  $(".chooseitem").find('i').click(function(){

    var url = $(this).parent().attr('data-url');

    window.location.href = url;

  })


</script>
