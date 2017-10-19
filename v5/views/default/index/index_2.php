<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$webname}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="qc:admins" content="15540121316114476654" />
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    {$GLOBALS['cfg_indexcode']}
    {include "pub/varname"}
    {Common::css("mycss/layout.css,mycss/index.css")}
    {Common::js("jquery.min.js,base.js,common.js,myjs/lubotu.js,myjs/web.js")}


</head>
<body style="background:#f5f5f5;">
{request "pub/header"}
<div id="banner">
{st:usernav action="topkind" row="8" return="data"}
{if !empty($data)}
<div class="container" {if empty($indexpage)}style="display: none;"{else}style="position:relative;"{/if}>
<!--<div class="product_sort fl">
	<div class="bd">
        {loop $data $nav}
		<div class="item">
			<div class="title one"><a href="{$nav['url']}" target="_blank">{$nav['kindname']}</a></div>
			<div class="arrow">&gt;</div>
			<div class="line"></div>
			<div class="subitem">
				<div class="inner">
                    {st:usernav action="childnav" parentid="$nav['id']" row="20" return="childnav"}
                    {if !empty($childnav)}
					<div class="tit tit1">
						<ul>
                            {loop $childnav $c}
                            <li><a href="{$c['url']}" target="_blank">{$c['kindname']}</a></li>
                            {/loop}
						</ul>
					</div>
                    {/if}
                    {/st}
				</div>
			</div>
		</div>
        {/loop}

	</div>
</div>-->
    <div class="product_sort fl">
        <div class="bd">
            <div id="tabs-001" class="product_hd">
                <ul class="tabs tab-nav">
                    <li class="current"><a href="javascript:void(0)">攻略</a></li>
                    <li><a href="javascript:void(0)">门票</a></li>
                </ul>
                <div class="tab-content product_bd">
                    <!-------------攻略开始--------->
                    <div class="tab-pane active">
                        <?php foreach ($data as $ke =>$v){?>
                        <?php if($ke<4){
                            continue;}else{?>
                        <div class="itembox">
                            <h2><i style="background: rgba(0, 0, 0, 0) url(<?php echo $v['litpic'];?>"></i>{$v['kindname']}</h2>
                            <ul>
                                {st:usernav action="childnav" parentid="$v['id']" row="8" return="childnav"}
                                {loop $childnav $c}
                                <li><a href="{$c['url']}">{$c['kindname']}</a></li>
                                {/loop}
                                {/st}
                            </ul>
                        </div>
                            <?php }?>
                        <?php }?>

               <!-------------攻略结束--------->
                    </div>
              <!-------------门票开始--------->
                    <div class="tab-pane">
                        <?php foreach ($data as $ke =>$nav){?>
                             <?php if($ke>3){
                                continue;}else{?>
                        <div class="itembox">
                            <h2><i style="background: rgba(0, 0, 0, 0) url(<?php echo $nav['litpic'];?>) no-repeat scroll 0 0"></i>{$nav['kindname']}</h2>
                            <ul>
                                {st:usernav action="childnav" parentid="$nav['id']" row="5" return="childnav"}
                                {loop $childnav $c1}
                                <li><a href="{$c1['url']}" target="_blank">{$c1['kindname']}</a></li>
                                {/loop}
                                {/st}

                            </ul>
                        </div>
                            <?php }?>
                        <?php }?>
                    </div>
                    <!-------------门票结束--------->
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">

//同时多个选项卡组件
$(document).ready(function(){
    function tabs(tabTit){
        $(tabTit).children().click(function()
        {
            //导航选项卡
            $(this).removeClass("hover");
            $(this).addClass("current").siblings().removeClass("current");
            //导航鼠标滑过样式
            $(tabTit).children().mouseover(function(){
                $(this).not(".current").addClass("hover").siblings().removeClass("hover");
            });
            $(tabTit).children().mouseout(function(){
                $(this).removeClass("hover");
            });
            //内容选项卡
            tabid = '#'+ $(this).parent().parent().attr("id");
            var index = $(tabid).children(".tabs").children().index(this);
            tabCon = $(this).parent().next()
            $(tabCon).children().eq(index).addClass("active").siblings().removeClass("active");
            $(tabCon).children().eq(index).show().siblings().hide();
        });
    }
    tabs($(".tabs"));
});
//首页旅游产品分类
$(".product_sort .bd .item").hover(function(){
	$(this).addClass("layer");
},function(){
	$(this).removeClass("layer");
});
</script>
</div>
{/if}
{/st}
<div class="lubo">
  <ul class="lubo_box">
      {st:ad action="getad" name="s_index_2" pc="1"}
      <li style=" opacity: 1;filter:alpha(opacity=100);"><a href="{$data['aditems'][0]['adlink']}"><img src="{$data['aditems'][0]['adsrc']}"></a></li>
      <li><a href="{$data['aditems'][1]['adlink']}"><img src="{$data['aditems'][1]['adsrc']}"></a></li>

      {/st}
    <!--li style=" opacity: 1;filter:alpha(opacity=100);"><a href="/raiders/show_20.html" style="background:url(/res/images/img/4.jpeg) center top no-repeat"></a></li>
    <li><a href="/spots/" style="background:url(/res/images/img/1.jpeg) center top no-repeat"></a></li-->
  </ul>
</div>

<script type="text/javascript">

$(function(){

    $(".lubo").lubo({

    });
    $(".lubo_box li").css("z-index","0");
    $(".lubo_box li:eq(0)").css("z-index","1");

})

</script>
</div>
<!--河北全攻略开始-->

<div class="container">
    <div class="main_title text-center">
        <div class="main_more"><a href="/raiders/all-37-1"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico5"></i>河北全攻略</h2>
        <span>足不出门看世界</span>
    </div>
    <div class="city-box"><i></i><span>城市选择</span>
        {st:dest action="query" flag="index_nav" row="10" return="index_mdd"}
        {loop $index_mdd $mdd}
        <a href="{$cmsurl}raiders/{$mdd['pinyin']}/">{$mdd['kindname']}</a>
        {/loop}
        {/st}
    </div>
    <div id="content">
        <ul style="display: block;">
            <div class="getyearbox-l"> <a href="/raiders/show_{$all_raiders[0]['aid']}.html" title="">
                    <div class="tt-img-box1">
                        <div class="tt-img1"><img src="{$all_raiders[0]['litpic']}"></div>
                        <div class="tt-bottom1">
                            <div class="tt-com1">                                
                                <div class="peo-box">
                                    <h2>{$all_raiders[0]['title']}</h2>
                                    <div class="col-ico"><img src="{$all_raiders[0]['Author_head']}"></div>
                                    <div class="fl">
                                        <div class="col-dz">阅读:{$all_raiders[0]['shownum']}&nbsp;&nbsp;&nbsp;评论:{$all_raiders[0]['commentnum']}</div>
                                       
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="getyearbox-r">

                <?php    foreach ($all_raiders as $ke =>$v){?>
                    <?php if($ke!=0){?>
                        <div class="col-md-2"> <a href="http://www.aitto.net/raiders/show_{$v['aid']}.html" title="">
                                <div class="tt-img-box">
                                    <div class="tt-img"><img src="{$v['litpic']}"> </div>
                                    <div class="tt-bottom">
                                        <div class="tt-com">
                                            <div class="col-ico"><img src="{$v['Author_head']}"></div>
                                            <p>{$v['title']}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </ul>
    </div>
</div>
<!--热门游记开始-->
<div class="container">
    <div class="main_title text-center">
        <div class="main_more"><a href="/raiders/all"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico5"></i>热门游记</h2>
        <span>足不出门看世界</span> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="tabbable " id="tabs-687555">
                    <ul class="nav nav-pills">
                        <li class="active"> <a href="#panel-502216" data-toggle="tab">河北游记 </a> </li>
                        <li> <a href="#panel-80964" data-toggle="tab">逃票攻略</a> </li>
                        <li> <a href="#panel-80965" data-toggle="tab">你没见过的风景</a> </li>
                        <li> <a href="#panel-80966" data-toggle="tab">自驾回顾</a> </li>
                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane  active" id="panel-502216">

                            {st:article action="query" flag="byattrid"  row="4" attrid="16" return="attrlist"}
                            {loop $attrlist $value}
                            <div class="col-md-4">
                                <div class="col-box"><a href="{$value['url']}" title="{$value['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($value['litpic'])}"> </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">{$value['shownum']}</div>
                                        <div class="col-ico"><img src="{$value['Author_head']}"></div>
                                        <div class="col-t">{$value['author']}</div>
                                    </div>
                                    <div class="col-tit"> <a href="{$value['url']}" title="{$value['title']}">{$value['title']}</a></div>
                                </div>
                            </div>
                            {/loop}
                            {/st}
                        </div>
                        <div class="tab-pane" id="panel-80964">
                            {st:article action="query" flag="byattrid"  row="4" attrid="18" return="attrlist"}
                            {loop $attrlist $value}
                            <div class="col-md-4">
                                <div class="col-box"><a href="{$value['url']}" title="{$value['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($value['litpic'])}"> </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">{$value['shownum']}</div>
                                        <div class="col-ico"><img src="{$value['Author_head']}"></div>
                                        <div class="col-t">{$value['author']}</div>
                                    </div>
                                    <div class="col-tit"> <a href="{$value['url']}" title="{$value['title']}">{$value['title']}</a></div>
                                </div>
                            </div>
                            {/loop}
                            {/st}
                        </div>
                        <div class="tab-pane" id="panel-80965">
                            {st:article action="query" flag="byattrid"  row="4" attrid="17" return="attrlist"}
                            {loop $attrlist $value}
                            <div class="col-md-4">
                                <div class="col-box"><a href="{$value['url']}" title="{$value['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($value['litpic'])}"> </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">{$value['shownum']}</div>
                                        <div class="col-ico"><img src="{$value['Author_head']}"></div>
                                        <div class="col-t">{$value['author']}</div>
                                    </div>

                                    <div class="col-tit" style="margin-top: 15px"> <a href="{$value['url']}" title="{$value['title']}" >{$value['title']}</a></div>
                                </div>
                            </div>
                            {/loop}
                            {/st}
                        </div>
                        <div class="tab-pane" id="panel-80966">
                            {st:article action="query" flag="byattrid"  row="4" attrid="19" return="attrlist"}
                            {loop $attrlist $value}
                            <div class="col-md-4">
                                <div class="col-box"><a href="{$value['url']}" title="{$value['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($value['litpic'])}"> </div>
                                        </div>
                                    </a>
                                    <div class="peo-box">
                                        <div class="col-dz">{$value['shownum']}</div>
                                        <div class="col-ico"><img src="{$value['Author_head']}"></div>
                                        <div class="col-t">{$value['author']}</div>
                                    </div>
                                    <div class="col-tit"> <a href="{$value['url']}" title="{$value['title']}">{$value['title']}</a></div>
                                </div>
                            </div>
                            {/loop}
                            {/st}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--景区门票开始-->
<div class="container">
    <div class="main_title text-center">
        <div class="main_more"><a href="/spots/all"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico1"></i>景区门票</h2>
        <span>这里有石家庄最便宜的门票</span> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div>
                <div class="city-box"><i></i><span>城市选择</span>
                    {st:dest action="query" flag="index_nav" row="10" return="index_mdd"}
                    {loop $index_mdd $mdd}
                    <a href="{$cmsurl}spots/{$mdd['pinyin']}/">{$mdd['kindname']}</a>
                    {/loop}
                    {/st}
                </div>
                <div class="tabbable " id="tabs-687555" >
                    <ul class="nav nav-pills ">
                        {st:attr action="query" flag="childitem" typeid="5" groupid="13" row="4" return="attrlist"}
                        {loop $attrlist $k $attr}
                            <li {if $k == 0}class="active"{/if}> <a href="#panel-{$attr['id']}" data-toggle="tab">{$attr['attrname']}</a> </li>
                        {/loop}
                        {/st}
                    </ul>
                    <div class="tab-content">
                        {loop $attrlist $k $attr}
                        {st:spot action="query" flag="attr" row="6" attrid="$attr['id']" return="indexspot"}
                        <div class="tab-pane {if $k == 0}active{/if}" id="panel-{$attr['id']}">
                            {if !empty($indexspot[0])}
                            <div class="col-md-2">
                                <div class="ticket-box">
                                    <div class="ticket-box-l"><a href="{$indexspot[0]['url']}"><img src="{$indexspot[0]['litpic']}"></a></div>
                                    <div class="ticket-box-r">
                                        <h2><a href="{$indexspot[0]['url']}">{$indexspot[0]['title']}</a></h2>
                                        <h3>国家4A级景区</h3>
                                        <del>票面价:{$indexspot[0]['sellprice']}元</del>
                                        <div class="ticket-price">优惠价:{$indexspot[0]['price']}元</div>
                                        <div class="col-but"><a href="{$indexspot[0]['url']}">我要购买</a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            {/if}
                            {if !empty($indexspot[1])}
                            <div class="col-md-2">
                                <div class="ticket-box">
                                    <div class="ticket-box-l"><a href="{$indexspot[1]['url']}"><img src="{$indexspot[1]['litpic']}"></a></div>
                                    <div class="ticket-box-r">
                                        <h2><a href="{$indexspot[1]['url']}">{$indexspot[1]['title']}</a></h2>
                                        <h3>国家4A级景区</h3>
                                        <del>票面价:{$indexspot[1]['sellprice']}元</del>
                                        <div class="ticket-price">优惠价:{$indexspot[1]['price']}元</div>
                                        <div class="col-but"><a href="{$indexspot[1]['url']}">我要购买</a></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            {/if}
                            {if !empty($indexspot[2])}
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$indexspot[2]['url']}" title="{$indexspot[2]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[2]['litpic']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[2]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$indexspot[2]['url']}" title="{$indexspot[2]['title']}">{$indexspot[2]['title']}</a></div>
                                </div>
                            </div>
                            {/if}
                            {if !empty($indexspot[3])}
                            <div class="col-md-4">
                                <?php// echo $indexspot[3]['litpic'];?>
                                <div class="col-box"> <a href="{$indexspot[3]['url']}" title="{$indexspot[3]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[3]['litpic']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[3]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$indexspot[3]['url']}" title="{$indexspot[3]['title']}">{$indexspot[3]['title']}</a></div>
                                </div>
                            </div>
                            {/if}
                            {if !empty($indexspot[4])}
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$indexspot[4]['url']}" title="{$indexspot[4]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[4]['litpic']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[4]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$indexspot[4]['url']}" title="{$indexspot[4]['title']}">{$indexspot[4]['title']}</a></div>
                                </div>
                            </div>
                            {/if}
                            {if !empty($indexspot[5])}
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$indexspot[5]['url']}" title="{$indexspot[5]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{$indexspot[5]['litpic']}"> </div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price"><span>¥{$indexspot[5]['price']}</span>
                                                    <yuan>元</yuan>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$indexspot[5]['url']}" title="{$indexspot[5]['title']}">{$indexspot[5]['title']}</a></div>
                                </div>
                            </div>
                            {/if}
                            <div class="clearfix"> </div>
                        </div>
                        {/st}
                        {/loop}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--酒店开始-->
<!--<div class="container">
    <div class="main_title text-center">
        <div class="main_more"><a href="/hotels/all"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico3"></i>酒店</h2>
        <span>拎包就走，轻松出游</span></div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div>
                <div class="city-box"><i></i><span>城市选择</span>
                    {st:dest action="query" flag="index_nav" row="10" return="index_mdd"}
                    {loop $index_mdd $mdd}
                    <a href="{$cmsurl}hotels/{$mdd['pinyin']}/">{$mdd['kindname']}</a>
                    {/loop}
                    {/st}
                </div>
                <div class="tabbable " id="tabs-687555" >
                    <ul class="nav nav-pills">
                        <li class="active"> <a href="#panel-00001" data-toggle="tab">今日特价</a></li>
                        <li> <a href="#panel-00002" data-toggle="tab">最新特价</a> </li>
                    </ul>

                    <div class="tab-content">
                        {st:hotel action="query" flag="order" row="7" return="hotellist"}
                        <div class="tab-pane  active" id="panel-00001">
                            <div class="col-md-2">
                                <a href="{$hotellist[0]['url']}" title="{$hotellist[0]['title']}">
                                <div class="tour-hot">
                                    <div class="tour-img-box"> <img src="{Common::img($hotellist[0]['litpic'])}" width="100%">
                                        <div class="tour-bottom">
                                            <div class="tour-tt">
                                                <p>酒店</p>
                                            </div>
                                            <div class="tour-price">
                                                {if $hotellist[0]['price']}
                                                <span>{Currency_Tool::symbol()}{$hotellist[0]['price']}</span>
                                                <yuan>元起</yuan>
                                                {else}
                                                <span>电询</span>
                                                {/if}
                                            </div>
                                        </div>
                                        <div class="tour-com">
                                            <p>{$hotellist[0]['title']}</p>
                                            <div class="tour-com-b">{Common::cutstr_html($hotellist[0]['content'],80)}</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[1]['url']}" title="{$hotellist[1]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[1]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[1]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[1]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[1]['url']}" title="{$hotellist[1]['title']}">{$hotellist[1]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[2]['url']}" title="{$hotellist[2]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[2]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[2]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[2]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[2]['url']}" title="{$hotellist[2]['title']}">{$hotellist[2]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[3]['url']}" title="{$hotellist[3]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[3]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[3]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[3]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[3]['url']}" title="{$hotellist[3]['title']}">{$hotellist[3]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[4]['url']}" title="{$hotellist[4]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[4]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[4]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[4]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[4]['url']}" title="{$hotellist[4]['title']}">{$hotellist[4]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[5]['url']}" title="{$hotellist[5]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[5]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[5]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[5]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[5]['url']}" title="{$hotellist[5]['title']}">{$hotellist[5]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[6]['url']}" title="[{$hotellist[6]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[6]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[6]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[6]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[6]['url']}" title="{$hotellist[6]['title']}">{$hotellist[6]['title']}</a></div>
                                </div>
                            </div>
                        </div>
                        {/st}
                        {st:hotel action="query" flag="new" row="7" return="hotellist"}
                        <div class="tab-pane" id="panel-00002">
                            <div class="col-md-2">
                                <div class="tour-hot">
                                    <div class="tour-img-box"> <img src="{Common::img($hotellist[0]['litpic'])}" width="100%">
                                        <div class="tour-bottom">
                                            <div class="tour-tt">
                                                <p>酒店</p>
                                            </div>
                                            <div class="tour-price">
                                                {if $hotellist[0]['price']}
                                                <span>{Currency_Tool::symbol()}{$hotellist[0]['price']}</span>
                                                <yuan>元起</yuan>
                                                {else}
                                                <span>电询</span>
                                                {/if}
                                            </div>
                                        </div>
                                        <div class="tour-com">
                                            <p>{$hotellist[0]['title']}</p>
                                            <div class="tour-com-b">{Common::cutstr_html($hotellist[0]['content'],80)}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[1]['url']}" title="{$hotellist[1]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[1]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[1]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[1]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[1]['url']}" title="{$hotellist[1]['title']}">{$hotellist[1]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[2]['url']}" title="{$hotellist[2]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[2]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>门票</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[2]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[2]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[2]['url']}" title="{$hotellist[2]['title']}">{$hotellist[2]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[3]['url']}" title="{$hotellist[3]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[3]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[3]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[3]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[3]['url']}" title="{$hotellist[3]['title']}">{$hotellist[3]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[4]['url']}" title="{$hotellist[4]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[4]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[4]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[4]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[4]['url']}" title="{$hotellist[4]['title']}">{$hotellist[4]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[5]['url']}" title="{$hotellist[5]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[5]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[5]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[5]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit"><a href="{$hotellist[5]['url']}" title="{$hotellist[5]['title']}">{$hotellist[5]['title']}</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-box"> <a href="{$hotellist[6]['url']}" title="[{$hotellist[6]['title']}">
                                        <div class="col-img-box">
                                            <div class="col-img"><img src="{Common::img($hotellist[6]['litpic'])}"></div>
                                            <div class="col-bottom">
                                                <div class="col-tt">
                                                    <p>酒店</p>
                                                </div>
                                                <div class="col-price">
                                                    {if $hotellist[6]['price']}
                                                    <span>{Currency_Tool::symbol()}{$hotellist[6]['price']}</span>
                                                    <yuan>元起</yuan>
                                                    {else}
                                                    <span>电询</span>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="col-tit1"><a href="{$hotellist[6]['url']}" title="{$hotellist[6]['title']}">{$hotellist[6]['title']}</a></div>
                                </div>
                            </div>
                        </div>
                        {/st}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--自驾游开始-->
<div class="container" >
    <div class="main_title text-center">
        <div class="main_more" style="top:3px;"><a href="/lines/all"><img src="/res/images/img/more.png"></a></div>
        <h2 class="index_title"><i class="main_t_ico4"></i>自驾游</h2>
        <span>一起流年，遇见不一样的风景</span> </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="tabbable " id="tabs-687555">
                <!--ul class="nav nav-pills">
                    <li class="active"> <a href="#panel-5022161" data-toggle="tab">正在进行</a> </li>
                    <li> <a href="#panel-809641" data-toggle="tab">已过期</a> </li>
                </ul-->
                <div class="tab-content">
                    <!--div class="tab-pane  active" id="panel-502216"-->
                    <div class="tab-pane  active" id="panel-5022161">
                        {st:line action="query" flag="new" row="3" return="linelist"}
                        <?php $time  = time(); ?>
                        {loop $linelist $value}
                        <?php
                        //fengjishu 08.02 jia
                        $linedate = strtotime($value['linedate']);
                        $cha      = ($time -$linedate)*1;
                        ?>
                        <div class="col-md-3">
                            <div class="col-box"> <a href="{$value['url']}" title="{$value['title']}">
                                    <div class="col-img-box1">
                                        <div class="col-img1"><img src="{Common::img($value['litpic'])}"> </div>
                                        <div class="col-bottom">
                                            <div class="col-com">
                                                <p>{$value['title']}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-info">
                                    <div class="col-ma-3 col-line">
                                        <p>{if $value['storeprice']}
                                            {$value['storeprice']}元
                                            {else}
                                            电询
                                            {/if}</p>
                                        费用</div>
                                    <div class="col-ma-3 col-line">
                                        <p>{$value['selfDriMdd']}</p>
                                        目的地</div>
                                    <div class="col-ma-3">
                                        <p>{$value['linedate']}</p>
                                        自驾时间</div>
                                    <div class="clearfix"></div>
                                </div>
                                <?php if($cha>0){  ?>
                                    <div class="col-but" style="background: #ccc;"><a href="javascript:void(0)">活动已结束</a></div>
                                <?php }else{?>
                                    <div class="col-but"><a href="{$value['url']}">我要报名</a></div>
                                <?php }?>
<!--                                <div class="col-but"><a href="{$value['url']}">我要报名</a></div>-->
                            </div>
                        </div>
                        {/loop}
                        {/st}
                    </div>
                    <div class="tab-pane" id="panel-809641">
                        {st:line action="query" flag="new_old" row="3" return="linelist"}
                        {loop $linelist $value}
                        <div class="col-md-3">
                            <div class="col-box"> <a href="{$value['url']}" title="{$value['title']}">
                                    <div class="col-img-box1">
                                        <div class="col-img1"><img src="{Common::img($value['litpic'])}"> </div>
                                        <div class="col-bottom">
                                            <div class="col-com">
                                                <p>{$value['title']}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-info">
                                    <div class="col-ma-3 col-line">
                                        <p>{if $value['price']}
                                            {$value['price']}元
                                            {else}
                                            电询
                                            {/if}</p>
                                        费用</div>
                                    <div class="col-ma-3 col-line">
                                        <p>{$value['selfDriMdd']}</p>
                                        目的地</div>
                                    <div class="col-ma-3">
                                        <p>{$value['linedate']}</p>
                                        自驾时间</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-but"><a href="{$value['url']}">我要报名</a></div>
                            </div>
                        </div>
                        {/loop}
                        {/st}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>





<!--底部-->
{request "pub/footer"}
{request "pub/flink"}
</body>
</html>