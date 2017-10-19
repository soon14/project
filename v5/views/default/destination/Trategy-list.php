<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:Common="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{$info['kindname']}旅游攻略大全_自助游攻略_游记攻略-河北旅游网</title>
  <meta name="keywords" content="{$info['kindname']}旅游攻略大全,自助游攻略,游记攻略" />
  <meta name="description" content="河北旅游网攻略,为旅游爱好者提供{$info['kindname']}全面和详细的旅行攻略大全,您可以详细了解到{$info['kindname']}周边景区攻略、游记、指南、地图、门票、美食、特产、交通等旅游信息。" />
<!-- 页面公用 public CSS 文件 -->
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
  {Common::css("common/bootstrap-min.css,common/public.css,mycss/strategy/Trategy.css")}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,strategy/Trategy.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb">
    <ul>
      <li><a href="/">首页<i class="icon-gt">&gt;</i></a></li>
      <li><a href="/{$info['pinyin']}?param=survey">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">攻略</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<div class="container " style="margin-top: 50px;">
  <section>
    {request "pub/CommonNav"}
  </section>
  <section>
    <!--区域选择 开始 -->
    <div class="category">
      <div class="top-category"><span>一共
        <dnf>{$total}</dnf>
        条结果&nbsp;&nbsp;您已选择:</span>
        <span>
           {loop $chooseitem $item}
           <span class="crumb-select-item chooseitem" data-url="{$item['url']}" style="margin-top: -1px">
             <a href="javascript:;">
               <b>{$item['attr']}</b>：<em>{$item['itemname']}</em>
               <i class="icon-remove"></i>
             </a>
           </span>
           {/loop}
        </span>
        <a href="javascript:void(0)" class="del-all" >删除全部搜索</a>
      </div>

      <div class="by-category">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">

          {st:attr action="query" flag="grouplist" typeid="4" return="grouplist"}
          {loop $grouplist $group}
          {if $group['attrname']!='目的地'}
          {if $group['attrname']!='游记·攻略'}
          <tr>
            <td valign="top"  class="text-right td-tit">{if $group['attrname']=='攻略'}主题：{else}{$group['attrname']}{/if}</td>
            {st:attr action="query" flag="childitem" typeid="4" groupid="$group['id']" return="attrlist"}
<!--            <td class="show-con">-->
            <td class="">
              {if count($attrlist)>14}
              <div class="show-more"> <span>更多</span><i class="icon-angle-down"></i> </div>
              {/if}
              <b>不限</b>
              <ul>

                {loop $attrlist $attr}
                <li {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}CLASS="current"{/if}><a href="{Model_Article::get_search_mddurl($info['pinyin'],'raider',$attr['id'],'attrid',$param)}">{$attr['attrname']}</a></li>
                {/loop}

              </ul>
            </td>
            {/st}
          </tr>
          {/if}
          {/if}
          {/loop}
          {/st}

        </table>

      </div>
    </div>
    <!--区域选择 结束 -->
    <!--区域选择 开始 -->

    <!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>
  <section>
    <div class="ctd-TrategyNotes-body">
      <div class="ctd-main">
        <div class="ctd-sort-view">
          <ul class="tabs" style=" ">
            <?php //var_dump($param['sorttype'])?>
            <li  {if $param['sorttype']==0}class="current"{/if}><a href="{Model_Article::get_search_mddurl($info['pinyin'],raider,0,'sorttype',$param,$currentpage)}">默认排序</a></li>

            <li {if $param['sorttype']==1}class="current"{/if}>

            <a href="{Model_Article::get_search_mddurl($info['pinyin'],raider,1,'sorttype',$param,$currentpage)}">&nbsp;最&nbsp;&nbsp;热&nbsp;<i></i></a>

            </li>

          </ul>
        </div>
        <div class="ctd-TrategyNotes-list">
          {if !empty($list)}
          <ul class="listItem">
            {loop $list $a}
            <li>
              <div class="pic"><a href="{$a['url']}"><img src="{Common::img($a['piclist'][1][0])}"  alt="{$a['title']}" ></a></div>
              <div class="info">
                <h3><a href="{$a['url']}">{$a['title']}</a></h3>
                <p class="user-line"><a href="javascript:" target="-blank">{$a['author']}</a><span>|</span>发表于 {date("Y-m-d",$a['addtime'])}<span>|</span>{$a['tuceNum']}张照片</p>
                <p class="user-con"><span>攻略简述：</span>{Common::cutstr_html($a['content'],200)}</p>
                <p class="count-line"> <span class="icon-pic"><i></i>图片{$a['tuceNum']}</span> <span class="icon-comment"><i></i>评论{$a['commentnum']}</span> <span class="icon-view"><i></i>浏览{$a['shownum']}</span> </p>
              </div>
            </li>
            {/loop}
          </ul>
          <!--分页 结束 -->
          <div class="pages">
            <div id="Pagination">
              <div class="pagination">
                {if $currentpage>1}
                <a class="" href="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p=1"><i></i>首页</a>

                <a class="prev" href="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p={$currentpage-1}">上页</a>
                {/if}
                <?php
                //每页显示数量
                $needpage = 10;
                $total_pages = ceil($total*1/$pagesize);
                $coefficient = floor($currentpage/$needpage);

                $ceil  = ceil($currentpage/$needpage);
                $mod = $currentpage % $needpage;


                $mod_startPage  =($ceil-1)*$needpage+1;
                $mod_endPage    =($ceil-1)*$needpage+10;
                //开始页码
                $startPage = $coefficient*$needpage +1;
                $endPage =   $coefficient*$needpage + 10;
                //如果endpage 大于 总页数,则取总页数
                $endPage = $endPage > $total_pages ? $total_pages : $endPage;
                ?>
                <?php if($mod>0):?>
                  <?php for ($i = $startPage; $i <= $endPage; $i++){ ?>
                    <?php if ($i == $currentpage){ ?>

                      <a class="current" href ="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p=<?php echo $i?>"><?php echo $i?></a>
                    <?php }else{ ?>

                      <a href="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p=<?php echo $i?>"><?php echo $i?></a>
                    <?php } ?>
                  <?php } ?>
                <?php else: ?>
                  <?php for ($i = $mod_startPage; $i <= $mod_endPage; $i++){ ?>
                    <?php if ($i == $currentpage){ ?>

                      <a class="current" href ="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p=<?php echo $i?>"><?php echo $i?></a>
                    <?php }else{ ?>

                      <a href="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p=<?php echo $i?>"><?php echo $i?></a>
                    <?php } ?>
                  <?php } ?>
                <?php endif ?>
                {if $currentpage<$total_pages}
                <a class="" href="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p={$currentpage+1}">下页</a>
                <a class="" href="/{$info['pinyin']}?param={$params}&destpy={$param['destpy']}&attrid={$param['attrid']}&sorttype={$param['sorttype']}&p={$total_pages}">尾页</a>
                {/if}
              </div>
            </div>
            <div class="searchPage">
              <span class="page-sum">共<strong class="allPage">{$total_pages}</strong>页</span>
              <span class="page-go">跳转<input type="number" min="1" style="width:35px">页</span>
              <a href="javascript:;" class="page-btn">GO</a>
            </div>
          </div>
          <!--分页 结束 -->
          {else}
          <div class="no-content">
            <p><i></i>抱歉，没有找到相关攻略！<a href="">查看全部攻略</a></p>
          </div>
          {/if}
          
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box side-About" style="height: 60px">
          <div class="wy-notice-img"><i></i><span>{$total}</span>篇攻略</div>
          <div class="wy-notice-btns">
<!--            <a href="#" class="Publish-Travels" rel="nofollow" target="-blank">-->
<!--              <i class="icon icon-publish"></i>发游记-->
<!--            </a>-->
<!--            <a href="#" target="-blank" rel="nofollow">-->
<!--              <i class="icon icon-comments"></i>写点评</a>-->
          </div>
        </div>
        <div class="side-box sid-Recommend">
          <h4>热门攻略推荐</h4>
          <ul>
            {loop $hotRaiders $k $hotR}
            {if $k<4}
            <li>
              <a href="{$hotR['url']}" title="{$hotR['title']}">
              <div class="note-img"><img src="{Common::img($hotR['litpic'])}" alt="{$hotR['title']}"/></div>
              <div class="note-con">
                <h5 title="{$hotR['title']}" style="overflow: hidden">{$hotR['title']}</h5>
                <div class="note-name"><span>{$hotR['author']}</span> {date("Y-m-d",$hotR['addtime'])} </div>
              </div>
                </a>
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
  $(".page-btn").click(function(){
    var ye = $(this).siblings('span[class=page-go]').find('input').val();
    if(ye.length==''){
      return false;
    }else{
      if(ye<=0){
        return false;
      }
      window.location ="/{$info[pinyin]}?param={$params}&p="+ye;
    }
  })
</script>
<script>
  //删除已选
  $(".chooseitem").find('i').click(function(){
    var url = $(this).parent().parent().attr('data-url');
    window.location.href = url;
  })
  //清空筛选条件
  $('.del-all').click(function(){
    var url = SITEURL+"{$info['pinyin']}/?param=raider";
    window.location.href = url;
  })
  //排序方式点击
  $('.sort-sum').find('a').click(function(){
    var url = $(this).find('i').attr('data-url');
    if(url==undefined){
      url = location.href;
    }
    window.location.href = url;
  })
</script>