<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{$info['kindname']}游记_{$info['kindname']}自助游游记_{$info['kindname']}自驾游游记_{$info['kindname']}旅游热门游记-河北旅游网</title>
  <meta name="keywords" content="{$info['kindname']}游记,{$info['kindname']}自助游游记,{$info['kindname']}自驾游游记,{$info['kindname']}旅游热门游记" />
  <meta name="description" content="{$info['kindname']}游记,是由旅游爱好者记录的{$info['kindname']}旅游中的风土人情,休闲娱乐,特色美食等旅游信息" />
  {Common::css("common/bootstrap-min.css,common/public.css,mycss/strategy/TravelNotes.css")}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,strategy/TravelNotes.js')}
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
      <li><a href="/{$info['pinyin']}?param=note">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">游记</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<div class="container ">

  <section>
    {request "pub/CommonNav"}
  </section>

  <?php $day = array(1=>"1天",2=>"2天",3=>"3天",4=>"4~7天",5=>"7天以上",);?>
  <?php $way = array(1=>"跟团",2=>"自驾",3=>"自由行");?>
  <section> 
    <!--区域选择 开始 -->
    <div class="category">
      <div class="top-category"><span>一共
        <dnf>{$total}</dnf>
        条结果&nbsp;&nbsp;您已选择:</span>
        <span>

<!--           <span class="crumb-select-item chooseitem" data-url="" style="margin-top: -1px"><a href="javascript:;"><b>目的地</b>：<em>{$info['kindname']}</em><i class="icon-remove"></i></a></span>-->
           {loop $chooseitem $item}
           <span class="crumb-select-item chooseitem" data-url="{$item['url']}" style="margin-top: -1px"><a href="javascript:;"><b>{$item['attr']}</b>：<em>{$item['itemname']}</em><i class="icon-remove"></i></a></span>
           {/loop}
        </span>
        <a href="javascript:void(0)" class="del-all" >删除全部搜索</a></div>

      <div class="by-category">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">

          <tr>
            <td valign="top"  class="text-right td-tit">出行天数：</td>
            <td class="">
              <b>不限</b>

              <ul>
                {loop $day $kd $d}
                <li {if $param['day']==$kd}class="current"{/if}><a href="{Model_Notes::get_search_mddurl($info['pinyin'],'note',$kd,'day',$param)}">{$d}</a></li>
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
                <li {if $param['way']==$kw}class="current"{/if}><a href="{Model_Notes::get_search_mddurl($info['pinyin'],'note',$kw,'way',$param)}">{$w}</a></li>
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
    <div class="ctd-TravelNotes-body">
      <div class="ctd-main">
        <div class="ctd-TravelNotes-list">
          {if !empty($list)}
          <?php //var_dump($list);?>
          <ul class="listItem">
            {loop $list $a}
            <li>
              <div class="pic"><a href="/notes/show_{$a['id']}.html"><img src="{Common::img($a['litpic'])}"  alt="{$a['title']}"></a></div>
              <div class="info">
                <h3><a href="/notes/show_{$a['id']}.html">{$a['title']}</a></h3>
                <p class="user-line"><a href="#" target="-blank">{$a['member']['nickname']}</a><span>|</span>发表于 {date("Y-m-d",$a['addtime'])}<span></span></p>
                <p class="user-con"><span>游记简述：{Common::cutstr_html($a['content'],200)}</span></p>
                <p class="count-line"> <span class="icon-pic"><i></i>图片{$a['tuceNum']}</span> <span class="icon-comment"><i></i>评论{if $a['commentNum']}{$a['commentNum']}{else}0{/if}</span> <span class="icon-view"><i></i>浏览{$a['shownum']}</span> </p>
              </div>
            </li>
            {/loop}

          </ul>



          <!--分页 开始-->
          <div class="pages">
            <div id="Pagination">
              <div class="pagination">
                {if $currentpage>1}
                <a class="" href="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p=1"><i></i>首页</a>

                <a class="prev" href="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p={$currentpage-1}">上页</a>
                {/if}
                <?php
                //每页显示数量
                $needpage = $pagesize;
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

                    <a class="current" href ="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p=<?php echo $i?>"><?php echo $i?></a>
                  <?php }else{ ?>

                    <a href="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p=<?php echo $i?>"><?php echo $i?></a>
                  <?php } ?>

                <?php } ?>
                <?php else: ?>
                  <?php for ($i = $mod_startPage; $i <= $mod_endPage; $i++){ ?>
                    <?php if ($i == $currentpage){ ?>

                      <a class="current" href ="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p=<?php echo $i?>"><?php echo $i?></a>
                    <?php }else{ ?>

                      <a href="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p=<?php echo $i?>"><?php echo $i?></a>
                    <?php } ?>

                  <?php } ?>
                <?php endif ?>
                {if $currentpage<$total_pages}
                <a class="" href="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p={$currentpage+1}">下页</a>

                <a class="" href="/{$info['pinyin']}?param={$params}&day={$param['day']}&way={$param['way']}&p={$total_pages}"><i></i>尾页</a>
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
            <p><i></i>抱歉，没有找到相关游记！<a href=""></a></p>
          </div>
          {/if}

        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box side-About">
          <div class="wy-notice-img"><i></i><span>{$total}</span>篇游记</div>
          <div class="wy-notice-btns">
            <a href="/notes/write/" class="Publish-Travels" rel="nofollow" target="-blank">
              <i class="icon icon-publish"></i>
              发游记
            </a>
<!--            <a href="#" target="-blank" rel="nofollow">-->
<!--              <i class="icon icon-comments"></i>-->
<!--              写点评-->
<!--            </a>-->
          </div>
        </div>
        <div class="side-box sid-Recommend">
          <h4>热门游记推荐</h4>
          <ul>
            {loop $hotNotes $ho}
            <li>
              <a href ="/notes/show_{$ho['id']}.html">
              <div class="note-img"><img src="{$ho['litpic']}"/></div>
              <div class="note-con">
                <h5>{$ho['title']}</h5>
                <div class="note-name" style="margin-top: -5px;"><span>{$ho['member']['nickname']}</span> {date("Y-m-d",$ho['addtime'])} </div>
              </div>
                </a>
            </li>
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
  //删除已选
  $(".chooseitem").find('i').click(function(){
    var url = $(this).parent().parent().attr('data-url');
    window.location.href = url;
  })
  //清空筛选条件
  $('.del-all').click(function(){
    var url = SITEURL+"{$info['pinyin']}/?param=note";
    window.location.href = url;
  })
  //排序方式点击
//  $('.sort-sum').find('a').click(function(){
//    var url = $(this).find('i').attr('data-url');
//    if(url==undefined){
//      url = location.href;
//    }
//    window.location.href = url;
//  })
</script>