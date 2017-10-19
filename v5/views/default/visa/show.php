<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
    {Common::css('visa.css,base.css,extend.css',false)}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,slideTabs.js')}
</head>
<script>
	$(function(){
			$('.crowd-tabbox').switchTab();
            if($('#attachment').length>0){
                $('#download_arr').removeClass('hide');
            }
	})
</script>
<body>

{request "pub/header"}
  
<div class="big">
    <div class="wm-1200">

        <div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/visa/">{$channelname}</a>
            {loop $predest $dest}
            <a href="/hotels/{$dest['pinyin']}/">{$dest['kindname']}</a>
            {/loop}
        </div><!--面包屑-->

        <div class="st-main-page">

            <div class="visa_show_top">
                <a class="pic" href="javascript:;"><img src="{$info['litpic']}" alt="{$info['title']}" width="450" height="298" /></a>
                <div class="txt_con">
                    <h1>{$info['title']}</h1>
                    <ul>
                        <li class="li_c"><em>办理时长：</em>{$info['handleday']}</li>
                        <li class="li_d"><em>签证类型：</em>{$info['visatype']}</li>
                        <li class="li_d"><em>所属领区：</em>{$info['belongconsulate']}</li>
                        <li class="li_d"><em>停留时间：</em>{$info['partday']}</li>
                        <li class="li_d"><em>有效日期：</em>{$info['validday']}</li>
                        <li class="li_d"><em>面试需要：</em>{$info['interview']}</li>
                        <li class="li_d"><em>邀 请 函：</em>{$info['letter']}</li>{php}$download=1;{/php}
                        <li class="li_c"><em>受理范围：</em>{$info['handlerange']}</li>
                        <li class="li_c hide" id="download_arr"><a class="download-btn" href="#download">下载资料</a></li>
                    </ul>
                    <p>{$info['sellpoint']}</p>
                </div>
                <div class="show_msg">
                    <p class="price">优惠价：<span>{if !empty($info['price'])}<i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$info['price']}</b>{else}电询{/if}</span></p>
                    <p class="date"><input type="text" id="usedate" placeholder="请选择出行时间" /></p>
                    <p class="lx"><span>{$info['visatype']}<s></s></span></p>
                    <p class="num">
                        <em>预定数量：</em>
                        <span class="sub"></span>
                        <input type="text" id="dingnum" value="1" />
                        <span class="add"></span>
                    </p>
                    <p class="price">总价：<span><i class="currency_sy">{Currency_Tool::symbol()}</i><b class="totalprice">{$info['price']}</b></span></p>
                    <p class="now_btn"><a href="javascript:;">立即预定</a></p>
                </div>
            </div><!--顶部介绍-->

            <div class="st-visa-show">
                <div class="visashow-con">
                    <div class="tabnav-list">
                        {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="visacontent"}
                        {loop $visacontent $row}
                        <span>{$row['chinesename']}</span>
                        {/loop}
                        {/st}

                        <span>客户评价</span>
                        <span>我要咨询</span>
                    </div><!--签证导航-->
                    <div class="tabbox-list">
                        {loop $visacontent $v}
                        {if $v['columnname']=='material'}
                        <div class="tabcon-list">
                            <div class="list-tit"><strong>{$v['chinesename']}</strong></div>
                            <div class="crowd-tabbox">
                                <div class="st-tabnav">
                                    <span class="on">在职人员</span>
                                    <span class="">自由职业</span>
                                    <span class="">退休人员</span>
                                    <span class="">学生</span>
                                    <span class="">学龄前儿童</span>
                                </div>
                                <div class="st-tabcon" style="display: block;">
                                    {$info['material']}
                                </div>
                                <div class="st-tabcon" style="display: none;">
                                    {$info['material2']}
                                </div>
                                <div class="st-tabcon" style="display: none;">
                                    {$info['material3']}
                                </div>
                                <div class="st-tabcon" style="display: none;">
                                    {$info['material4']}
                                </div>
                                <div class="st-tabcon" style="display: none;">
                                    {$info['material5']}
                                </div>
                            </div>
                            <div class="list-txt">

                            </div>
                        </div>
                        {elseif $v['columnname']=='attachment'}
                        <a name="download"></a>
                        <div class="tabcon-list">
                            <div class="list-tit"><strong>{$v['chinesename']}</strong></div>
                            <div class="list-txt">
                                <ol class="attachment" id="attachment">
                                {loop $info['attachment']['path'] $k $v}
                                <li><a href="/pub/download/?file={$v}&name={$info['attachment']['name'][$k]}" title="{$info['attachment']['name'][$k]} 下载" class="name">{$info['attachment']['name'][$k]}</a></li>
                                {/loop}
                                </ol>
                            </div>
                        </div>
                        {else}
                        <div class="tabcon-list">
                            <div class="list-tit"><strong>{$v['chinesename']}</strong></div>
                            <div class="list-txt">
                                {$v['content']}
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
{Common::css('/res/js/floatmenu/floatmenu.css',0,0)}
{Common::js('datepicker/WdatePicker.js',0)}
<input type="hidden" id="price" value="{$info['price']}">
<input type="hidden" id="productid" value="{$info['id']}"/>
<script>
    $(function(){

        //预订
        $(".now_btn").click(function(){
            var productId = $("#productid").val();
            var useDate = $("#usedate").val();
            var dingNum = Number($("#dingnum").val());
            var url = SITEURL+'visa/book?usedate='+useDate+"&productid="+productId+"&dingnum="+dingNum;
            window.location.href = url;

        })

        //内容切换
        $.floatMenu({
            menuContain : '.tabnav-list',
            tabItem : 'span',
            chooseClass : 'on',
            contentContain : '.tabbox-list',
            itemClass : '.tabcon-list'
        });
        $("#usedate").focus(function(){

            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d',doubleCalendar:false,isShowClear:false,readOnly:true,errDealMode:1})

        })
        //减少数量
        $(".sub").click(function(){
            var dingnum = Number($("#dingnum").val());
            if(dingnum>2){
                dingnum--;
                $("#dingnum").val(dingnum);
            }
            get_total_price();
        })
        //增加数量
        $(".add").click(function(){
            var dingnum = Number($("#dingnum").val());
            dingnum++;
            $("#dingnum").val(dingnum);
            get_total_price();
        })
    })
    //获取总价
    function get_total_price()
    {
        var price = Number($("#price").val());
        var dingnum = Number($("#dingnum").val());
        var total = price * dingnum;
        $('.totalprice').html(total);
    }
</script>

</body>
</html>
