<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('lines.css,base.css,extend.css,calendar.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
</head>

<body>

	{request "pub/header"}

  <div class="big">
  	<div class="wm-1200">

    	<div class="st-guide">
      	<a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/lines/">{$channelname}</a>&gt;&nbsp;&nbsp;
            {loop $predest $dest}
                <a href="/lines/{$dest['pinyin']}/">{$dest['kindname']}</a>&gt;&nbsp;
            {/loop}
      </div><!--面包屑-->

      <div class="st-main-page">
      	<div class="st-line-show">
        	<div class="lineshow-tw">
          	<div class="lw-title">
            	<a href="/line/print/id/{$info['id']}" class="print-btn">打印行程</a>
            	<h1>{$info['title']}
                    {loop $info['iconlist'] $icon}
                        <img src="{$icon['litpic']}" />
                    {/loop}
                </h1>
              <p>{$info['sellpoint']}</p>
            </div>
            <div class="focus-slide">
              <div class="imgnav" id="imgnav">
                <div id="img">
                  {loop $info['piclist'] $pic}
                   <img src="{Common::img($pic[0])}" width="460" height="325"/>
                  {/loop}
                  <div id="front" title="上一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                  <div id="next" title="下一张"><a href="javaScript:void(0)" class="pngFix"></a></div>
                </div>


                <div id="cbtn">
                  <i class="picSildeLeft"><img src="{$GLOBALS['cfg_public_url']}images/picSlideLeft.gif"/></i>
                    <i class="picSildeRight"><img src="{$GLOBALS['cfg_public_url']}images/picSlideRight.gif"/></i>
                    <div id="cSlideUl">
                        <ul>
                            {loop $info['piclist'] $pic}
                            <li><img src="{Common::img($pic[0])}"/></li>
                            {/loop}
                        </ul>
                    </div>
                </div>

              </div>
            </div>
            <div class="cp-show-msg">
            	<div class="jg">
                {if $info['price']}
              	    <span>优惠价：<i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$info['price']}</b>起</span>
                {else}
                    <span>优惠价：电询</span>
                {/if}
                {if $info['sellprice']}
                 <del>原价：<i class="currency_sy">{Currency_Tool::symbol()}</i>$info['sellprice']</del>
                {/if}
              </div>
              <div class="sl">
              	<span>销量：{$info['sellnum']}</span><s>|</s><span>满意度：{$info['score']}</span>
              </div>
              <dl class="tc">
                <dt>套餐类型：</dt>
                <dd class="type suitlist">
                  {st:line action="suit" productid="$info['id']"}
                    {loop $data $s}
                     <a href="javascript:;" data-suitid="{$s['id']}" data-jifentprice="{$s['jifentprice']}" data-jifenbook="{$s['jifenbook']}">{$s['title']}</a>
                    {/loop}
                  {/st}

                </dd>
                <dd class="yd-btn">
                  <a href="#calendar">立即预订</a>
                </dd>
              </dl>
              <ul class="msg-ul">
              	<li><em>线路编号：</em><p>{$info['series']}</p></li>
                <li><em>积分优惠：</em><p><span class="fan jifentprice"><i></i></span><span class="song jifenbook"><i></i></span></p></li>
                <li><em>往返交通：</em><p>{$info['transport']}</p></li>
                <li><em>提前报名：</em><p>{$info['linebefore']}天以上</p></li>
                <li class="mb_0"><em>付款方式：</em>
                    <p>
                        {if in_array(1,$paytypeArr)}
                            <img src="{$GLOBALS['cfg_public_url']}images/pay_zfb.gif" />
                        {/if}
                        {if in_array(2,$paytypeArr)}
                            <img src="{$GLOBALS['cfg_public_url']}images/pay_kq.gif" />
                        {/if}
                        {if in_array(3,$paytypeArr)}
                            <img src="{$GLOBALS['cfg_public_url']}images/pay_hc.gif" />
                        {/if}
                        {if in_array(4,$paytypeArr)}
                            <img src="{$GLOBALS['cfg_public_url']}images/pay_yl.gif" />
                        {/if}
                        {if in_array(5,$paytypeArr)}
                            <img src="{$GLOBALS['cfg_public_url']}images/pay_qb.gif" />
                        {/if}
                        {if in_array(7,$paytypeArr)}
                            <img src="{$GLOBALS['cfg_public_url']}images/pay_bb.gif" />
                        {/if}
                        {if in_array(8,$paytypeArr)}
                            <img src="{$GLOBALS['cfg_public_url']}images/pay_wx.gif" />
                        {/if}

                    </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="lineshow-con">
          	<div class="tabnav-list">
            	<span class="on">在线预订</span>
                {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="linecontent"}
                    {loop $linecontent $row}
            	        <span>{$row['chinesename']}</span>
                    {/loop}
                {/st}
            	<span>客户评价</span>
            	<span>我要咨询</span>
              <a class="yd-btn yd-btn-menu hide"  href="#calendar">立即预订</a>
            </div><!--线路导航-->
            <div class="tabbox-list">
                <div class="tabcon-list" id="calendar">

                </div>
            {loop $linecontent $line}
                {if preg_match('/^\d+$/',$line['content']) && $line['columnname']=='jieshao'}
                    <div class="tabcon-list">
                    <div class="list-tit"><strong>{$line['chinesename']}</strong></div>
                    {if $info['isstyle']==2}
                        <div class="eachday">
                        {php $indexkey = 1;}
                        {loop Model_Line_Jieshao::detail($line['content'],$info['lineday']) $v}
                            <div class="day-con part" id="day_c_{$indexkey}">
                            <div class="day-num">{$v['day']}</div>
                        <div class="day-tit"><strong>第{Common::daxie($v['day'])}天</strong><p>{$v['title']}</p></div>
                        <table class="day-tb" width="100%" border="0" bgcolor="#f9f8f8">
                          <tr>
                            <th width="110" scope="row"><span class="yc">用餐情况：</span></th>
                            <td width="237">
                                {if breakfirsthas}
                                  早餐：{$v[breakfirst]}
                                {else}
                                  早餐：无
                                {/if}
                            </td>
                            <td width="237">
                                {if lunchhas}
                                    午餐：{$v[lunch]}
                                {else}
                                    午餐：无
                                {/if}
                            </td>
                            <td width="237">
                                {if supperhas}
                                  晚餐：{$v['supper']}
                                {else}
                                  晚餐:无
                                {/if}
                            </td>
                          </tr>
                          <tr>
                            <th width="110" scope="row"><span class="zs">住宿情况：</span></th>
                            <td colspan="3">{$v['hotel']}</td>
                          </tr>
                          <tr class="bor_0">
                            <th width="110" scope="row"><span class="gj">交通工具：</span></th>
                            <td colspan="3">
                                {loop explode(',',$v['transport']) $t}
                                   {$t}
                                {/loop}
                            </td>
                          </tr>
                        </table>
                        <div class="txt">
                            {$v['jieshao']}
                        </div>
                        <ul class="jd-lsit">
                           {st:line action="line_spot" day="$v['day']" productid="$v['lineid']" return="spotlist"}
                            {loop $spotlist $spot}
                                <li>
                                <a class="pic" href="{$spot['url']}" target="_blank"><img src="{Common::img($spot['litpic'])}" alt="{$spot['title']}" /></a>
                                <a class="tit" href="{$spot['url']}" target="_blank">{$spot['title']}</a>
                                </li>
                            {/loop}

                        </ul>
                      </div>
                            {php $indexkey++;}
                        {/loop}
                            <div class="day-leftnav" id="day-leftNav" style="display: block;">
                                <ul class="day-navlist">
                                   {php}
                                     for($index=1;$index<=$info['lineday'];$index++)
                                     {
                                        $str.= '<li><a href="#day_c_'.$index.'" class="">DAY'.$index.'</a></li>';
                                     }
                                     echo $str;
                                   {/php}
                                </ul>
                            </div>
                      <div class="end"></div>
                    </div>
                    {else}
                        <div class="list-txt">
                            {$info['jieshao']}
                        </div>
                    {/if}
                  </div>
                {else}
                    <div class="tabcon-list">
                        <div class="list-tit"><strong>{$line['chinesename']}</strong></div>
                        <div class="list-txt">
                           {$line['content']}
                        </div>
                    </div>
                {/if}
            {/loop}
            {include "pub/comment"}
            {include "pub/ask"}
            </div>
          </div>
        </div><!--详情主体-->
        <div class="st-sidebox">
           {st:right action="get" typeid="$typeid" data="$templetdata" pagename="show"}
        </div><!--边栏模块-->
      </div>

    </div>
  </div>
    {request "pub/footer"}
    {request "pub/flink"}
    {Common::js('floatmenu/floatmenu.js')}
    {Common::js('SuperSlide.min.js,template.js,date.js,calendar.js,scorll.img.js')}
    {Common::css('/res/js/floatmenu/floatmenu.css',0,0)}
    <!--隐藏域-->
    <input type="hidden" id="suitid" value=""/>
    <input type="hidden" id="lineid" value="{$info['id']}"/>

<script type="text/javascript">
$(document).ready(function(){


    var topHeight = $('.tabnav-list').offset().top;
    $(window).scroll(function(){
        if($(document).scrollTop() >= topHeight){
            $(".yd-btn-menu").show()
        }else{
            $(".yd-btn-menu").hide();
        }
    });

    //线路内容切换
    $.floatMenu({
        menuContain : '.tabnav-list',
        tabItem : 'span',
        chooseClass : 'on',
        contentContain : '.tabbox-list',
        itemClass : '.tabcon-list'});
    //套餐选择
    $('.suitlist').find('a').click(function(){

        var suitid = $(this).attr('data-suitid');
        var jifentprice = $(this).attr('data-jifentprice');
        var jifenbook = $(this).attr('data-jifenbook');
        if(jifentprice){
            $('.jifentprice').html(jifentprice+'元<i></i>')
        }else{
            $('.jifentprice').hide();
        }
        if(jifenbook){
            $('.jifenbook').html(jifenbook+'分<i></i>')
        }else{
            $('.jifenbook').hide();
        }
        $("#suitid").val(suitid);
        $(this).addClass('on').siblings().removeClass('on');
        var lineid = $("#lineid").val();
        get_calendar(suitid,lineid)


    })
    //选中第一个
    $('.suitlist').find('a').first().trigger('click');

    $(window).onload = pageScroll();
    $(window).bind('scroll', pageScroll);
    $(".day-navlist li").click(function (e) {
        $(window).unbind("scroll");
        var index = $(this).index(),
            offset = $('.part').eq(index).offset().top,
            scrollTop = $(window).scrollTop();
        $(".day-navlist a").removeClass("cur");
        $(this).find("a").addClass("cur");
        $("html, body").animate({
            scrollTop: offset
        }, "slow", function () {
            $(window).bind('scroll', pageScroll);
        });
        e.preventDefault();
    })


    //获取日历报价
    function get_calendar(suitid,lineid)
    {

        showCalendar('calendar',suitid,function(){$(".calendar:first").css("margin-right","15px")},lineid);
    }



});
function pageScroll() {
    var scrollTop = $(window).scrollTop();
    var size = $(".day-navlist a").size();
    var listTop = $(".part").eq(0).offset().top;
    if (size != null) {
        for (var i = 0; i < size; i++) {
            var firstOffset = $(".part").eq(0).offset().top,
                edge = $(".part").eq(size - 1).offset().top + $(".part").eq(size - 1).height(),
                offset = $(".part").eq(i).offset().top;
            if (scrollTop < firstOffset || scrollTop > edge) {
                $(".day-navlist a").removeClass("cur");
            } else if (scrollTop >= offset && scrollTop <= edge) {
                $(".day-navlist a").removeClass("cur");
                $(".day-navlist a").eq(i).addClass("cur");
            }
        }
    }
    if (scrollTop >= listTop) {
        $("#day-leftNav").show();
    }
    else{
        $("#day-leftNav").hide();
    }
}

//预订产品
  function setBeginTime(y,m,d,price,lineid,suitid)
  {
      var udate = y+'-'+m+'-'+d;
      var url = SITEURL+"lines/book/?usedate="+udate+"&lineid="+lineid+"&suitid="+suitid;
      window.location.href = url;
  }
</script>
</body>
</html>
