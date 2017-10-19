<!DOCTYPE html>
<html xmlns:Common="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/hotel/Hotel.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js')}
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
      <li><a href="/{$info['pinyin']}?param=survey">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
      <li class="current"><a href="javascript:;">饭店</a></li>
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
        条结果&nbsp;&nbsp;您已选择:</span>
        <span>

           {loop $chooseitem $item}
           <span class="crumb-select-item chooseitem" data-url="{$item['url']}" style="margin-top: -1px"><a href="javascript:;"><b>{$item['attr']}</b>：<em>{$item['itemname']}</em><i class="icon-remove"></i></a></span>
           {/loop}
        </span>
        <a href="javascript:void(0)" class="del-all" >删除全部搜索</a>
      </div>
      <div class="by-category">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">

          <!--------  星级 设置 --------->
          {st:restaurant action="rank_list" row="20" return="ranklist"}
          <?php //var_dump($ranklist)?>
          {if !empty($ranklist)}
          <tr>
            <td valign="top"  class="text-right td-tit">星级：</td>

<!--            <td class="show-con">-->
            <td class="">
              {if count($ranklist)>14}
              <div class="show-more"> <span>更多</span><i class="icon-angle-down"></i> </div>
              {/if}
              <b>不限</b>
              <ul>
                {loop $ranklist $row}
                <li {if $param['rankid']==$row['id']}class="current"{/if}><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',$row['id'],'rankid',$param)}">{$row['title']}</a></li>
                {/loop}
              </ul>
            </td>
          </tr>
          {/if}
          {/st}
          <!--------  星级 设置 over --------->

          <!----------价格 区间 -------------->
          {st:restaurant action="price_list" row="20" return="pricelist"}
          <tr>
            <td valign="top" class="text-right td-tit">价格区间：</td>
<!--            <td class="show-con">-->
            <td class="">
              <b>不限</b>
              <ul>
                {loop $pricelist $row}
                <li {if $param['priceid']==$row['id']}class="current"{/if}><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',$row['id'],'priceid',$param)}">{$row['title']}</a></li>
                {/loop}
              </ul>
            </td>
          </tr>
          {/st}
          <!------------价格区间结束 ------------------>

          <!------------属性 开始------------------------>
          {st:attr action="query" flag="grouplist" typeid="103" return="grouplist"}
          <?php //var_dump($grouplist)?>
          {loop $grouplist $group}
          <tr>
            <td valign="top" class="text-right td-tit">{$group['attrname']}：</td>
<!--            <td class="show-con">-->
            <td class="">
              {st:attr action="query" flag="childitem" typeid="103" groupid="$group['id']" return="attrlist"}
              <b>不限</b>
              <ul>
                {loop $attrlist $attr}
                <li {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="current"{/if}><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',$attr['id'],'attrid',$param)}">{$attr['attrname']}</a></li>
                {/loop}
              </ul>
              {/st}
            </td>
          </tr>
          {/loop}
          {/st}
          <!------------属性 结束---------------------->

        </table>

      </div>
    </div>
    <!--区域选择 结束 -->
    <div class="clearfix"></div>
  </section>
  <section> 
    <!--门票列表 开始 -->
    <div class="ctd-ticketS-body">
      <div class="ctd-main">
        <div class="ctd-sort-view">
          <ul class="tabs">
            <li {if $param['sorttype']==0}class="current"{/if}><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',0,'sorttype',$param)}">默认排序</a></li>
            {if $param['sorttype']!=1 && $param['sorttype']!=2}
            <li><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',1,'sorttype',$param)}">价格排序<i></i></a></li>
            {/if}
            {if $param['sorttype']==1}
            <li class="current"><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',2,'sorttype',$param)}">价格排序<i></i></a></li>

            {/if}
            {if $param['sorttype']==2}
            <li class="current"><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',0,'sorttype',$param)}">价格排序<i></i></a></li>
            </a>
            {/if}
            {if $param['sorttype']!=3}
            <li><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',3,'sorttype',$param)}">销量排序<i></i></a></li>
            {/if}
            {if $param['sorttype']==3}
            <li class="current"><a href="{Model_Restaurant::get_search_mddurl($info['pinyin'],'restaurant',0,'sorttype',$param)}">销量排序<i></i></a></li>
            {/if}

          </ul>
        </div>
        <div class="ctd-ticket-list">
          <ul class="listItem">
            {if !empty($list)}
            {loop $list $h}
            <li>
              <div class="pic">

                <a href="{$h['url']}" target="-blank">
                  <img class="Ticket-itemimg" src="{Common::img($h['litpic'])}" alt="{$h['title']}" width="100%"/>
                </a>
              </div>
              <div class="ticke-line"></div>
              <div class="info">
                <div class="Ticket-tit">
                  <h3><a href="{$h['url']}" target="-blank">{$h['title']}</a></h3>
                </div>
                <div class="Ticket-address"><i></i> <span>{$h['address']}</span></div>
                <p class="user-con"><span>饭店介绍：</span>{Common::cutstr_html($h['content'],80)}</p>
                <p class="count-line"> <span class="icon-pic"><i></i>销量：{$h['sellnum']}</span> <span class="icon-comment"><i></i>满意度：5.0</span> </p>
              </div>
              <div class="Ticket-itemRight">
                <div class="Ticket-price"></div>
                <div class="Ticket-price"><em> {if $h['price']}&yen;{$h['price']}  {else}电询{/if}</em>元</div>
                <div class="Ticket-btn"><a href="{$h['url']}" target="-blank">立即查看</a></div>
              </div>
              <div class="clearfix"></div> 
              {st:restaurant action="suit" row="10" productid="$h['id']" return="roomlist"}
              {if !empty($roomlist)}
              <div  class="ctd-ticket-booking">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <th width="27%">套餐名称 </th>
                      <th width="10%">宽带 </th>
                      <th width="10%">优惠价 </th>
                      <th width="15%">优惠价 </th>
                      <th width="15%">预定 </th>
                    </tr>
                    {loop $roomlist $room}
                    <tr>
                      <td>{$room['title']}</td>
                      <td>{$room['computer']}</td>
                      <td><del>{if $room['sellprice']}{Currency_Tool::symbol()}{$room['sellprice']}{/if}</del></td>
                      <td><i>{if $room['price']}{Currency_Tool::symbol()}{$room['price']}{/if}</i></td>
                      <td><div class="booking-but"><a class="booking-btn" href="javascript:;" data-suitid="12">在线预定</a></div></td>
                    </tr>
                  {/loop}
                  </tbody>
                </table>
              </div>
              {/if}
              {/st}
              <div class="Ticket-more"><a href="javascript:void(0)" >查看更多价格</a><i class="icon-angle-down"></i></div>
            </li>
            {/loop}
            {else}
            <div class="no-content">
              <p><i></i>抱歉，没有找到符合条件的产品！</p>
            </div>
            {/if}
   
          </ul>
        </div>
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
      </div>
      <div class="ctd-side">
        {st:restaurant action="query" row="4" flag="bookcount" return="hot"}
        <div class="side-box sid-Recommend">
          <h4>热卖饭店</h4>
          <ul>
            {loop $hot $book}
            <li>
              <div class="note-img"><img src="{if empty($book['litpic'])}{Common::nopic()}{else}{$book['litpic']}{/if}"/><div class="note-price"><strong>{$book['finaldest']} </strong><span>{if $book['price']}￥<em>{$book['price']}</em>{else}<em>电询</em>{/if}</span> </div></div>
              <div class="note-con">                
                <h5>{$book['title']}</h5>
              </div>
            </li>
            {/loop}
          </ul>

        </div>
        {/st}
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
    var url = SITEURL+"{$info['pinyin']}/?param=restaurant";
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
{Common::js('hotel/bootstrap-Hotel.js')}