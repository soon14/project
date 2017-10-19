<!doctype html>
<html>
<head>
<meta charset="utf-8">
<head>
    <meta charset="utf-8">
    <title>{$searchtitle}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('hotel.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js')}
</head>


<script>
	$(function(){
		//酒店搜索条件去掉最后一条边框
		$('.line-search-tj').find('dl').last().addClass('bor_0')
		$(".line-search-tj dl dd em").toggle(function(){
				$(this).prev().children('.hide-list').show();
				$(this).children('b').text('收起');
				$(this).children('i').addClass('up')
			},function(){
				$(this).prev().children('.hide-list').hide();
				$(this).children('b').text('展开');
				$(this).children('i').removeClass('up')
		});
		$(".hpic-slide").slide({mainCell:".bd ul",delayTime:0,trigger:"click"});
		
	})
</script>
<body>

{request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="{$cmsurl}hotels/">{$channelname}</a>
            {loop $predest $pre}
            &gt;&nbsp;&nbsp;<a href="{$cmsurl}hotels/{$pre['pinyin']}/">{$pre['kindname']}</a>
            {/loop}
      </div><!--面包屑-->
      
      <div class="st-main-page">
      	<div class="st-hotellist-box">
          <div class="st-list-search">
          	<div class="been-tj" {if count($chooseitem)<1}style="display:none"{/if}>
            	<strong>已选条件：</strong>
              <p>
                  {loop $chooseitem $item}
                    <span class="chooseitem" data-url="{$item['url']}">{$item['itemname']}<i></i></span>
                  {/loop}
                  <a href="javascript:;" class="clearc">清空筛选条件 </a>
              </p>
            </div>
            <div class="line-search-tj">
              <dl class="date">
                <dt>日期：</dt>
                <dd>
                	<input type="text" placeholder="入住日期" id="txtHotelTime1" />
                  <span>-</span>
                	<input type="text" placeholder="离开日期" id="txtHotelTime2" />
                </dd>
              </dl>
              <dl class="type">
                <dt>目的地：</dt>
                <dd>
                	<p>
                        {st:dest action="query" typeid="$typeid" flag="nextsame" row="30" pid="$destid" return="destlist"}
                            {loop $destlist $dest}
                                <a href="{$cmsurl}hotels/{$dest['pinyin']}/">{$dest['kindname']}</a>
                            {/loop}
                        {/st}
                  </p>
                    {if count($destlist)>10}
                        <em><b>展开</b><i></i></em>
                    {/if}

                </dd>
              </dl>
              <dl class="type">
                <dt>星级：</dt>
                <dd>
                	<p>
                     {st:hotel action="rank_list" row="20" return="ranklist"}
                       {loop $ranklist $row}
                            <a {if $param['rankid']==$row['id']}class="on"{/if} href="{Model_Hotel::get_search_url($row['id'],'rankid',$param)}">{$row['title']}</a>
                       {/loop}
                  </p>
                   {if count($ranklist)>10}
                    <em><b>展开</b><i></i></em>
                   {/if}
                </dd>
              </dl>
              <dl class="type">
                <dt>价格区间：</dt>
                <dd>
                    <p>
                        {st:hotel action="price_list" row="20" return="pricelist"}
                            {loop $pricelist $row}
                                <a {if $param['priceid']==$row['id']}class="on"{/if} href="{Model_Hotel::get_search_url($row['id'],'priceid',$param)}">{$row['title']}</a>
                            {/loop}
                        {/st}
                    </p>
                </dd>
              </dl>
                <!--属性组读取-->
                {st:attr action="query" flag="grouplist" typeid="$typeid" return="grouplist"}
                    {loop $grouplist $group}
                        <dl class="type">
                            <dt>{$group['attrname']}：</dt>
                            <dd>
                                <p>
                                    {st:attr action="query" flag="childitem" typeid="$typeid" groupid="$group['id']" return="attrlist"}
                                    {loop $attrlist $attr}
                                    <a href="{Model_Hotel::get_search_url($attr['id'],'attrid',$param)}" {if Common::check_in_attr($param['attrid'],$attr['id'])!==false}class="on"{/if}>{$attr['attrname']}</a>
                                    {/loop}
                                    {/st}
                                </p>
                            </dd>
                        </dl>
                    {/loop}
                {/st}
            </div>
          </div><!--条件搜索-->
          <div class="st-hotellist-con">
          	<div class="st-sort-menu">
            	<span class="sort-sum">
              	<a href="javascript:;">综合排序</a>
                <a href="javascript:;">价格
                    {if $param['sorttype']!=1 && $param['sorttype']!=2}
                    <i class="jg-default" data-url="{Model_Hotel::get_search_url(1,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==1}
                    <i class="jg-up" data-url="{Model_Hotel::get_search_url(2,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==2}
                    <i class="jg-down" data-url="{Model_Hotel::get_search_url(0,'sorttype',$param)}"></i></a>
                    {/if}
                <a href="javascript:;">销量
                    {if $param['sorttype']!=3}
                    <i class="xl-default" data-url="{Model_Hotel::get_search_url(3,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==3}
                    <i class="xl-down" data-url="{Model_Hotel::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>
                <a href="javascript:;">推荐
                    {if $param['sorttype']!=4}
                    <i class="tj-default" data-url="{Model_Hotel::get_search_url(4,'sorttype',$param)}"></i>
                    {/if}
                    {if $param['sorttype']==4}
                    <i class="tj-down" data-url="{Model_Hotel::get_search_url(0,'sorttype',$param)}"></i>
                    {/if}
                </a>
              </span><!--排序-->
            </div>
            <div class="hotel-list-con">
                {if !empty($list)}
                    {loop $list $h}
                        <div class="list-child">
                    <div class="hot-ico"></div>
                    <div class="lc-image-text">
                        <div class="pic"><a href="#"><img src="{Common::img($h['litpic'],265,180)}" alt="{$h['title']}" /></a></div>
                      <div class="text">
                        <p class="bt">
                            <a href="{$h['url']}" target="_blank">{$h['title']}
                                {loop $h['iconlist'] $icon}
                                <img src="{$icon['litpic']}" />
                                {/loop}
                            </a>
                        </p>
                        <p class="attr">
                          <span>销量：{$h['sellnum']}</span>
                          <span>满意度：5.0</span>
                          <span>推荐：{$h['recommentnum']}</span>
                        </p>
                        <p class="js">酒店介绍：{Common::cutstr_html($h['content'],80)}</p>
                        <p class="ads">{$h['address']}</p>
                      </div>
                      <div class="lowest-jg">
                         {if $h['price']}
                            <span><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$h['price']}</b>起</span>
                         {else}
                            <span>电询</span>
                         {/if}
                      </div>
                    </div>
                  {st:hotel action="suit" row="10" productid="$h['id']" return="roomlist"}
                    {if !empty($roomlist)}
                    <div class="roomtype-con">

                        <table width="100%" border="0">
                        <tr class="room-attr">
                          <th width="218" height="40" scope="col"><span class="pl20">房型</span></th>
                          <th width="105" scope="col">床型</th>
                          <th width="105" scope="col">餐标</th>
                          <th width="105" scope="col">宽带</th>
                          <th width="105" scope="col">原价</th>
                          <th width="105" scope="col">优惠价</th>
                          <th width="150" scope="col">&nbsp;</th>
                        </tr>

                            {loop $roomlist $room}
                            <tr >
                                <td height="40" class="room" style="cursor: pointer"><strong class="type-tit">{$room['title']}</strong>{if !empty($room['piclist'])}<i class="pic-ico"></i>{/if}</td>
                                <td align="center"><span>{$room['roomstyle']}</span></td>
                                <td align="center"><span>{$room['breakfirst']}</span></td>
                                <td align="center"><span>{$room['computer']}</span></td>
                                <td align="center"><span>{if $room['sellprice']}<i class="currency_sy">{Currency_Tool::symbol()}</i>{$room['sellprice']}{/if}</span></td>
                                <td align="center"><span class="yh">{if $room['price']}<i class="currency_sy">{Currency_Tool::symbol()}</i>{$room['price']}{/if}</span></td>
                                <td><a class="booking-btn" href="/hotels/book?suitid={$room['id']}&hotelid={$h['id']}">预订</a></td>
                            </tr>
                            <tr style="display: none">
                                <td height="40" colspan="7">
                                    <div class="roomtype-sheshi">
                                        {if !empty($room['piclist'])}
                                            <div class="images-con">
                                                <img class="show-pic" src="{$room['piclist'][0][0]}" />
                                                <span class="ck"><em>查看全部{count($room['piclist'])}张图片</em></span>
                                            </div>
                                        {/if}
                                        <ul class="type-attr">
                                            <li>面积：{$room['roomarea']}平方米</li>
                                            <li>楼层：{$room['roomfloor']}层</li>
                                            <li>房间：{$room['number']}间</li>
                                            <li>窗户：{$room['window']}</li>
                                            <li>宽带：{$room['computer']}</li>
                                        </ul>
                                        <div class="pic-fixed-box" style=" display:none">
                                            <div class="zoom-images-box">

                                                <div id="hpic-slide" class="hpic-slide">
                                                    <div class="bd">
                                                        <h3>{$room['title']}</h3>
                                                        <ul>
                                                            {loop $room['piclist'] $pic}
                                                            <li><img src="{Common::img($pic[0],456,330)}" /></li>
                                                            {/loop}

                                                        </ul>
                                                        <a class="prev" href="javascript:void(0)"></a>
                                                        <a class="next" href="javascript:void(0)"></a>
                                                    </div>
                                                    <div class="hd">
                                                        <div class="hp-closed"><span></span></div>
                                                        <ul>
                                                            {loop $room['piclist'] $pic}
                                                            <li><img src="{Common::img($pic[0],110,74)}" /></li>
                                                            {/loop}

                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            {/loop}
                            {/st}


                      </table>
                    </div>
                    {/if}
                  </div>
                    {/loop}
                  <div class="main_mod_page clear">
                    {$pageinfo}
                  </div>
                {else}
                <div class="no-content">
                    <p><i></i>抱歉，没有找到符合条件的产品！<a href="/hotels/all">查看全部产品</a></p>
                </div>
                {/if}
              
            </div>
          </div>
        </div><!--列表主体-->
        <div class="st-sidebox">
            {st:right action="get" typeid="$typeid" data="$templetdata" pagename="search"}
        </div><!--边栏模块-->
      </div>
    
    </div>


{request "pub/footer"}

{request "pub/flink"}
{Common::js('datepicker/WdatePicker.js',0)}
<script>
    $(function(){
        //展示房型详细信息
        $('.room').click(function(){
            $(this).parent().next().toggle();
        })
        //展示更新房型图片
        $('.ck').click(function(){
            $(this).parents('.roomtype-sheshi').first().find('.pic-fixed-box').show();
        })
        //关闭图层显示
        $(".hp-closed").click(function(){
            $(this).parents(".pic-fixed-box").first().hide();
        })
        //酒店预订时间选择
        $("#txtHotelTime1").focus(function(){
            $("#txtHotelTime2").attr('value','');
            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d',maxDate:'#F{$dp.$D(\'txtHotelTime2\',{d:-1});}',doubleCalendar:true,isShowClear:false,readOnly:true,errDealMode:1})

            $("#txtHotelTime1").css("color","#333");
            $("#txtHotelTime2").blur();
        })
        $("#txtHotelTime2").focus(function(){
            WdatePicker({minDate:'#F{$dp.$D(\'txtHotelTime1\',{d:1});}',dateFmt:'yyyy-MM-dd',doubleCalendar:true,isShowClear:false,readOnly:true,errDealMode:1});
            $("#txtHotelTime2").css("color","#333");
            $("#txtHotelTime2").blur();
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
            var url = $(this).parent().attr('data-url');
            window.location.href = url;
        })
        //清空筛选条件
        $('.clearc').click(function(){
            var url = SITEURL+'hotels/all/';
            window.location.href = url;
        })
        //隐藏没有属性下级分类
        $(".type").each(function(i,obj){
            var len = $(obj).find('dd p a').length;
            if(len<1){
                $(obj).hide();
            }
        })
    })
</script>

</body>
</html>
