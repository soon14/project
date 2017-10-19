<!DOCTYPE html>
<html xmlns:Common="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>{$info['kindname']}特产-河北旅游网</title>
  <meta name="keywords" content="{$info['kindname']}特产" />
  <meta name="description" content="河北旅游网为旅游爱好者提供{$info['kindname']}特产信息介绍" />
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/destination/Destination.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/destination/Destination.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb Color-fff">
    <ul >
      <li><a href="/">首页<i class="icon-gt">&gt;</i></a></li>
      <!--      <li><a href="#">目的地<i class="icon-gt">&gt;</i></a></li>-->
      <li><a href="/{$info['pinyin']}?param=survey">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="#">特产</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<section>
  {request "pub/CommonNav"}
</section>
<div class="container ">
  <section> 
    <!--区域选择 开始 -->
    <div class="category">
      <div class="top-category"><span>一共
        <dnf>{$total}</dnf>
        条结果</span>
        <span>
           {loop $chooseitem $item}
           <span class="crumb-select-item chooseitem" data-url="{$item['url']}" style="margin-top: -1px"><a href="javascript:;"><b>{$item['attr']}</b>：<em>{$item['itemname']}</em><i class="icon-remove"></i></a></span>
           {/loop}
        </span>
        <a href="javascript:void(0)" class="del-all" >删除全部搜索</a></div>
      <div class="by-category">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">

          {st:attr action="query" flag="grouplist" typeid="102" return="grouplist"}
          <?php //var_dump($grouplist);?>

          {loop $grouplist $group}
          <tr>
            <td valign="top"  class="text-right td-tit"> {$group['attrname']}</td>
            <td class="">
              {st:attr action="query" flag="childitem" typeid="102" groupid="$group['id']" return="attrlist"}
               {if count($attrlist)>14}
              <div class="show-more"> <span>更多</span><i class="icon-angle-down"></i> </div>
               {/if}
              <b>不限</b>
              <ul>

                {loop $attrlist $attr}

                <li {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}CLASS="current"{/if}><a href="{Model_Destinations::get_search_mddurl($info['pinyin'],'specialty',$attr['id'],'attrid',$param)}">{$attr['attrname']}</a></li>

                {/loop}

              </ul>
              {/st}
            </td>
          </tr>
          {/loop}

          {/st}

        </table>
      </div>
    </div>
    <!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>


  <section>
    <div class="ctd-Destination-body">
      <div class="ctd-main">
        <div class="ctd-Destination-list">
          {if !empty($list)}
          <ul class="listItem">
            {loop $list $a}
            <li><a href="/destination/specialty?speid={$a['id']}&kindid={$info['id']}">
              <div class="pic"><img src="{$a['litpic']}">
                <div class="tip"></div>
              </div>
              <div class="info">
                <h3>{$a['title']}</h3>
                <p>{Common::cutstr_html($a['content'],200)}</p>
                <div class="Specialty"><span class="">{$info['kindname']}特产</span></div>
              </div>
              <div class="clearfix"></div>
              </a> </li>
            {/loop}
          </ul>
          <!--分页 结束 -->


          <div class="pages">
            <div id="Pagination">
              <div class="pagination">
                <a class="current " href="/{$info['pinyin']}?param={$params}&p=1"><i></i>首页</a>
                {if $currentpage>1}
                <a class="current prev" href="/{$info['pinyin']}?param={$params}&p={$currentpage-1}">上页</a>
                {/if}
                <?php
                //每页显示数量
                $needpage = $pagesize;
                $total_pages = ceil($total*1/$pagesize);
                $coefficient = floor($currentpage/$needpage);
                $mod = $currentpage % $needpage;
                //开始页码
                $startPage = $coefficient*$needpage +1;
                $endPage =   $coefficient*$needpage + 10;

                //如果endpage 大于 总页数,则取总页数
                $endPage = $endPage > $total_pages ? $total_pages : $endPage;
                ?>
                <?php for ($i = $startPage; $i <= $endPage; $i++){ ?>
                  <?php if ($i == $currentpage){ ?>

                    <a class="current" href ="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                  <?php }else{ ?>

                    <a href="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                  <?php } ?>

                <?php } ?>
                <a class="current" href="/{$info['pinyin']}?param={$params}&p={$currentpage+1}">下页</a>

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
            <p><i></i>抱歉，没有找到相关特产！</p>
          </div>
          {/if}
        </div>
      </div>

      <div class="ctd-side">
        <div class="side-box sid-Specialty">
          <div class="sidebox-hd">
            <h2 class="hd-title">特产推荐</h2>
            <a class="hd-more" href="#">更多</a> </div>
          <div class="list-item">
            <div class="img">
              <a href="/destination/specialty?speid={$te[0]['id']}&kindid={$info['id']}" target="-blank"><img src="{$te[0]['litpic']}" ></a>
              <div class="img-txt">
                <h4>{$te[0]['title']}</h4>
              </div>
            </div>
            <ul class="list-item-bot">
              {loop $te $v}
              <li><a href="/destination/specialty?speid={$v['id']}&kindid={$info['id']}" target="-blank"><span></span>{$v['title']}</a></li>
              {/loop}
            </ul>
          </div>
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
    var url = SITEURL+"{$info['pinyin']}/?param=specialty";
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