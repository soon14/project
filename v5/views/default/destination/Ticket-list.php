<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
  {include "pub/varname"}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/spot/Ticket.css')}
    {Common::js('common/jquery-1.11.3.min.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
{request "pub/header"}
<div class="notebox"></div>
<section> 
  <!-- 面包屑 开始 -->
  <div  class="BreadCrumb Color-fafafa">
    <ul >
        <li><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}<i class="icon-gt">&gt;</i></a></li>
        <li><a href="/{$info['pinyin']}?param=survey">{$info['kindname']}<i class="icon-gt">&gt;</i></a></li>
        <li class="current"><a href="javascript:;">酒店</a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <!--  面包屑 结束 --> 
</section>
<section>
    {request "pub/CommonNav"}
 </section>
<!-- 广告banner 开始 -->
<div class="list-Banner" style="background:url(/res/images/spot/Ticketlist.png) center"></div>
<!-- 广告banner 结束 -->

<div class="container">
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
          <!------目的 属性 --------->

          <!--属性组读取-->
          {st:attr action="query" flag="grouplist" typeid="5" return="grouplist"}
          {loop $grouplist $group}
          <tr>
            <td valign="top"  class="text-right td-tit">{$group['attrname']}：</td>
            <td class="">
                {st:attr action="query" flag="childitem" typeid="5" groupid="$group['id']" return="attrlist"}
                {if count($attrlist)>14}
                <div class="show-more"> <span>更多</span><i class="icon-angle-down"></i> </div>
                {/if}
              <b>不限</b>

              <ul>
                {loop $attrlist $attr}

                <li {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="current"{/if}>

                <a href="{Model_Spot::get_search_mddurl($info['pinyin'],'spot',$attr['id'],'attrid',$param)}" >{$attr['attrname']}</a>
                </li>
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
    <!--门票列表 开始 -->
    <div class="ctd-ticketS-body">
      <div class="ctd-main">
        <div class="ctd-sort-view">
          <ul class="tabs" style=" ">
            <li  {if $param['sorttype']==0}class="current"{/if}><a href="{$cmsurl}{$info['pinyin']}/?param=spot">默认排序</a></li>

              {if $param['sorttype']!=1 && $param['sorttype']!=2}
              <li ><a href="{Model_Spot::get_search_mddurl($info['pinyin'],'spot',1,'sorttype',$param)}">价格排序<i style="background-position: -50px -30px"></i></a>  </li>
              {/if}
              {if $param['sorttype']==1}
            <li class="current">  <a href="{Model_Spot::get_search_mddurl($info['pinyin'],'spot',2,'sorttype',$param)}">价格排序<i></i></a>  </li>
              {/if}
              {if $param['sorttype']==2}
            <li class="current"> <a href="{Model_Spot::get_search_mddurl($info['pinyin'],'spot',1,'sorttype',$param)}">价格排序<i style="background-position: -70px -42px"></i></a>  </li>
              {/if}

              {if $param['sorttype']!=3 && $param['sorttype']!=4}
              <li ><a href="{Model_Spot::get_search_mddurl($info['pinyin'],'spot',4,'sorttype',$param)}">销量排序<i style="background-position: -50px -30px"></i></a>  </li>
              {/if}
              {if $param['sorttype']==4}
              <li class="current"> <a href="{Model_Spot::get_search_mddurl($info['pinyin'],'spot',3,'sorttype',$param)}">销量排序<i ></i></a>   </li>
              {/if}
              {if $param['sorttype']==3}
              <li class="current"> <a href="{Model_Spot::get_search_mddurl($info['pinyin'],'spot',4,'sorttype',$param)}">销量排序<i style="background-position: -70px -42px"></i></a>   </li>
              {/if}

          </ul>
        </div>
        <div class="ctd-ticket-list">
          {if !empty($list)}
          <ul class="listItem">
            {loop $list $row}
            <li>
              <a href="{$row['url']}" target="-blank">
              <div class="pic"><img class="Ticket-itemimg" src="{$row['litpic']}" ></div>
<!--              <div class="ticke-line"><img src="images/ticke-line.png" ></div>-->
              <div class="info">
                <div class="Ticket-tit">
                  <h3>{$row['title']}</h3>
                </div>
                <div class="Ticket-address"><i></i> <span>{$row['address']}</span></div>
                <div class="media-label">
                  <?php $i=1;?>
                  <?php foreach($row['themeName'] as $k=>$p):?>
                  <?php if($i>2)$i=1?>
                  <span class="h<?php echo $i;?>"><?php echo $p['attrname']?></span>
                  <?php $i++?>
                  <?php  endforeach?>

                </div>
                <div class="Ticket-servicetag"><span>{$row['grade']}景区</span></div>
                <div class="Ticket-datebar"><i></i> <span>开放时间:{$row['bus_time']['e_business_time']}</span></div>
              </div>
              <div class="Ticket-itemRight">
                <div class="Ticket-price"></div>
                  {if $row['price']}
                  <div class="Ticket-price">门票价<em>&yen;{$row['price']}</em>元</div>
                  {else}
                  <div class="Ticket-price">
                      <em>电询</em>
                  </div>
                  {/if}
                <div class="Ticket-btn">立即预订</div>
              </div>
              </a>
              <div class="clearfix"></div>
              <div  class="ctd-ticket-booking">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <th width="12%">门票类型 </th>
                      <th><div class="text-left">名称</div>
                      </th>
                      <th width="20%">提前预定时间 </th>
                      <th width="10%">市场价 </th>
                      <th width="10%">优惠价 </th>
                      <th width="15%">预定 </th>
                    </tr>
                    {st:spot action="suit_type" row="8" productid="$row['id']" return="typelist"}

                    {loop $typelist  $type}

                    {st:spot action="suit_by_type" row="10" productid="$row['id']" suittypeid="$type['id']" return="suitlist"}
                    {loop $suitlist $k $suit}
                    <tr>
                      <td rowspan="2" valign="top" bgcolor="#f7f8fb" class="tab-peo"><b>{if $k>0}{else}{$type['title']}{/if}</b></td>
                      <td><div class="text-left">{$suit['title']} <a href="javascript:;" class="TableDetail-btn" ><i></i></a> </div></td>
                      <td>{$row['bus_time']['e_Advance_buy_time']}</td>
                      <td><del>￥{$suit['sellprice']}</del></td>
                      <td><i>{if !empty($suit['ourprice'])}{Currency_Tool::symbol()}{$suit['ourprice']}{else}电询{/if}</i></td>
                      <td><div class="booking-but"><a class="booking-btn" href="{$row['url']}" data-suitid="12">在线预定</a></div></td>
                    </tr>
<?php// echo $typeid?>
                    {st:detailcontent action="get_content" pc="1" typeid="5" productinfo="$row" return="spotcontent"}
                    <?php //var_dump($spotcontent);exit;?>
                    <tr class="ticket-detail">
                      <td colspan="5" class="show-TableDetail"><div class="TableDetail-box"> <i class="arrow"></i>
                          <div class="TableDetail-pane">
                            {$spotcontent[1]['content']}
                              </div>
                          <div class="TableDetail-back">收起<i></i></div>
                        </div></td>
                    </tr>
                    {/st}
                    {/loop}
                    {/st}
                    {/loop}
                    {/st}

                  </tbody>
                </table>
              </div>
              <div class="Ticket-more"><a href="javascript:void(0)" >查看更多价格</a><i class="icon-angle-down"></i></div>
            </li>
            {/loop}
          </ul>
          {else}
          <div class="no-content">
            <p><i></i>抱歉，没有找到符合条件的产品！<a href="/spots/all">查看全部产品</a></p>
          </div>
          {/if}
        </div>

        <!---分页显示开始--->
          <div class="pages">
              <div id="Pagination">
                  <div class="pagination">
                      {if $currentpage>1}
                      <a class=" " href="/{$info['pinyin']}?param={$params}&p=1"><i></i>首页</a>

                      <a class="prev" href="/{$info['pinyin']}?param={$params}&p={$currentpage-1}">上页</a>
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

                              <a class="current" href ="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                          <?php }else{ ?>

                              <a href="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                          <?php } ?>

                      <?php } ?>
                      <?php else: ?>
                          <?php for ($i = $mod_startPage; $i <= $mod_endPage; $i++){ ?>
                              <?php if ($i == $currentpage){ ?>

                                  <a class="current" href ="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                              <?php }else{ ?>

                                  <a href="/{$info['pinyin']}?param={$params}&p=<?php echo $i?>"><?php echo $i?></a>
                              <?php } ?>

                          <?php } ?>
                      <?php endif ?>
                      {if $currentpage<$total_pages}
                      <a class="" href="/{$info['pinyin']}?param={$params}&p={$currentpage+1}">下页</a>
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

          <!--分页 结束 -->

      </div>
      <div class="ctd-side">
        <div class="side-box sid-Recommend">
          <h4>热卖门票推荐</h4>
          <ul>
            {st:spot action="query" flag="order" row="4" return="spotlist"}
            {loop $spotlist $spot}
            <li onclick="window.location.href='{$spot[url]}'" style="cursor: pointer">
              <div class="note-img"><img src="{$spot['litpic']}"/><div class="note-price"><strong>{$spot['finaldest']} </strong><span>￥<em>{$spot['price']}</em></span> </div></div>
              <div class="note-con">                
                <h5>{$spot['title']}</h5>
              </div>
            </li>
            {/loop}
            {/st}

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

    //套餐点击
    $(".type-tit").click(function(){
      $(this).parents('tr').first().next().toggle();
    })

    //排序方式点击
    $('.sort-sum').find('a').click(function(){
      var url = $(this).find('i').attr('data-url');
      if(url==undefined){
        url = location.href;
      }
      window.location.href = url;
    })
    //删除已选
    $(".chooseitem").find('i').click(function(){
      var url = $(this).parent().parent().attr('data-url');
      window.location.href = url;
    })
    //清空筛选条件
    $('.del-all').click(function(){
      var url = SITEURL+"{$info['pinyin']}?param=spot";
      window.location.href = url;
    })
    //隐藏没有属性下级分类
    $(".type").each(function(i,obj){
      var len = $(obj).find('dd p a').length;
      if(len<1){
        $(obj).hide();
      }
    })

</script>

{Common::js('common/bootsAitto-min.js')}
{Common::js('myjs/spot/bootstrap-Ticket.js')}