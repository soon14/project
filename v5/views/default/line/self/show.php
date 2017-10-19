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
    {Common::css('mycss/driving.css,mycss/base.css,mycss/bootstrap-responsive.min.css,mycss/jcarousel.connected-carousels.css')}
    {Common::js('jquery.min.js,myjs/bootstrap.min.js,myjs/jquery.select.js,myjs/jquery.jcarousel.min.js,myjs/jcarousel.connected-carousels.js,myjs/jquery.tabso_yeso.js')}
</head>
<body>
{request "pub/header"}
<section>
    <div class="container crumbs">
        <a href="{$cmsurl}" class="current">{$GLOBALS['cfg_indexname']}</a>
        <sub class="songti">-&gt;</sub>
        <a href="/lines/" class="current">{$channelname}</a>
        <sub class="songti">-&gt;</sub>
        {loop $predest $dest}
        <a href="/lines/{$dest['pinyin']}/" class="current">{$dest['kindname']}</a>&gt;&nbsp;
        {/loop}
    </div>
</section>
<section>
    <div class="container">
        <div class="product-intro">
            <div class="product-intro-main">
                <div class="product-side-box fl">
                    <div class="connected-carousels">
                        <div class="stage">
                            <div class="carousel carousel-stage">
                                <ul>
                                    {loop $info['piclist'] $pic}
                                    <li><img src="{Common::img($pic[0])}" width="440" height="250"/></li>
                                    {/loop}
                                </ul>
                            </div>
                        </div>
                        <div class="navigation"><a href="#" class="prev prev-navigation"></a> <a href="#" class="next next-navigation"></a>
                            <div class="carousel carousel-navigation">
                                <ul>
                                    {loop $info['piclist'] $pic}
                                    <li><img src="{Common::img($pic[0])}"/></li>
                                    {/loop}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-main-box fr" style=" position:relative;">
                    <div >
                        <h1 class="product-hd" style="margin-top:-5px;">{$info['title']}</h1>
                    </div>
                    <div class="pro_rig_data">
                        <ul class="pro_ul">
                            <li class="li_1">
                                <p class="p1">优惠价：
                                    <strong>
                                        {if $info['price']}
                                        {Currency_Tool::symbol()}{$info['price']}起
                                        {else}
                                        电询
                                        {/if}</strong></p>
                                <!--p class="p2">1.2米以下儿童半价</p-->
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="preview-b">

                        <div class="mb10">
                            活动时间：{$info['linedate']['starttime']}~{$info['linedate']['endtime']}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提前报名：{$info['linebefore']}天以上
                        </div>
                        <dl>
                            <dt>目&nbsp;&nbsp;的&nbsp;&nbsp;地&nbsp;：</dt>
                            <dd>{$info['selfDriMdd']}</dd>
                        </dl>
                        <dl>
                            <dt>特&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色&nbsp;：</dt>
                            <dd>{$info['sellpoint']}</dd>
                        </dl>
                    </div>
                    <div id="red-big-btn1"><a href="javascript:" data-suitid="{$info['suitid']}" data-lineid="{$info['id']}" data-endtime="{$info['linedate']['endtime']}" type="button" data-chatime="{$info['cha_time']}"  class="one">我要报名</a></div>
                    <div class="box2">
                        <div class="login5">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="/res/images/myimages/active_01.jpg"></td>
  </tr>
  <tr>
    <td><a href="http://www.aitto.net/lines/all"><img src="/res/images/myimages/active_02.jpg"></a></td>
  </tr>
</table>
                            
                         <a class="close"></a>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
{st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="linecontent"}
<?php //var_dump($linecontent);?>
<section>
    <div class="container mt20">
        <div class="content-warp">
            <div class="content-left">
                <div class="" id="mymune">
                    <div id="naw-w" class="">
                        <div id="mynav">
                            <ul>


                                <?php foreach($linecontent as $k=>$row){ ?>


                                    <?php if($row['chinesename']=='行程附件'||$row['chinesename']=='签约付款') {
                                           continue;
                                    }else{
                                     ?>
                                <li><a href="#con-00{$k}" >{$row['chinesename']}</a></li>


                                     <?php } ?>

                                <?php  }?>

                            </ul>
                            <div id="red-big-btn"><a href="#">我要报名</a></div>
                        </div>
                    </div>
                </div>
                <div id="box">

                    <?php foreach($linecontent as $k=>$row){ ?>


                    <?php if($row['chinesename']=='行程附件'||$row['chinesename']=='签约付款') {
                        continue;
                    }else{
                    ?>
                    <div class="con-box" id="con-00{$k}">
                        <div class="con-fk-titile"><i class="fk-ico01"></i><span>{$row['chinesename']}</span></div>
                        <div class="con-box">{$row['content']} </div>
                    </div>
                        <?php } ?>

                    <?php  }?>

                </div>
            </div>
        </div>
        <div class="content-sider">
            <div class="sider-tit">热门推荐门票</div>
            <div class="sider-con">
                {st:spot action="query" flag="order" row="4" return="spotlist"}
                {loop $spotlist $spot}
                <div class="col-box" style="margin-bottom:15px;">
                    <a href="{$spot['url']}" title="{$spot['title']}">
                        <div class="col-img-box" >
                            <div class="col-img"><img src="{Common::img($spot['litpic'],283,195)}"> </div>
                            <div class="col-bottom">
                                <div class="col-tt">
                                    <p>门票</p>
                                </div>
                                <div class="col-price"><span>¥{$spot['price']}</span>
                                    <yuan>元</yuan>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="col-tit"><a href="{$spot['url']}" title="{$spot['title']}">{$spot['title']}</a></div>
                </div>
                {/loop}
                {/st}
            </div>
        </div>
    </div>
    </div>
</section>
{/st}
{request "pub/footer"}
{request "pub/flink"}
<script type="text/javascript">
    $(document).ready(function($){

        //上下滑动选项卡切换
        $("#move-animate-top").tabso({
            cntSelect:"#topcon",
            tabEvent:"mouseover",
            tabStyle:"move-animate",
            direction : "top"
        });

        //左右滑动选项卡切换
        $("#move-animate-left").tabso({
            cntSelect:"#leftcon",
            tabEvent:"mouseover",
            tabStyle:"move-animate",
            direction : "left"
        });

        //淡隐淡现选项卡切换
        $("#fadetab").tabso({
            cntSelect:"#fadecon",
            tabEvent:"mouseover",
            tabStyle:"fade"
        });

        //默认选项卡切换
        $("#normaltab").tabso({
            cntSelect:"#normalcon",
            tabEvent:"mouseover",
            tabStyle:"normal"
        });

    });
</script>

<script type="text/javascript">
    $(function(){
        var toTopHeight = $("#mymune").offset().top;
        $(window).scroll(function() {
            $("#red-big-btn").hide();
            if( $(document).scrollTop() > toTopHeight ){
                if ('undefined' == typeof(document.body.style.maxHeight)) {	//检测是否为IE6。jQuery1.9中去掉了msie的方法，所以只好这样写
                    var scrollTop = $(document).scrollTop();
                    $("#mymune").css({'position':'absolute','top':scrollTop+'px'});
                }
                else{
                    $("#mymune").addClass("nav_fixed");
                    $("#naw-w").removeClass("nav_a");
                    $("#naw-w").addClass("nav_f");
                    $("#red-big-btn").show();
                }
            }
            else{
                if ('undefined' == typeof(document.body.style.maxHeight)) {
                    $("#mymune").css({'position':'absolute','top':toTopHeight+'px'});
                }else{
                    $("#mymune").removeClass("nav_fixed");
                    $("#naw-w").removeClass("nav_a");
                    $("#naw-w").addClass("nav_f");
                    $("#red-big-btn").show();
                }

                $("#naw-w").addClass("nav_a");
                $("#red-big-btn").hide();
            }
        });
        $('#mynav').find("li:first").addClass("current")
        $(function(){
            window.onload = function()
            {	var $li = $('#mynav li');
                $li.mousedown(function(){
                    var $this = $(this);
                    var $t = $this.index();
                    $li.removeClass();
                    $this.addClass('current');
                    $ul.css('display','none');
                    $ul.eq($t).css('display','block');
                })
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".top_nav").mousedown(function(e){
            $(this).css("cursor","move");//改变鼠标指针的形状
            var offset = $(this).offset();//DIV在页面的位置
            var x = e.pageX - offset.left;//获得鼠标指针离DIV元素左边界的距离
            var y = e.pageY - offset.top;//获得鼠标指针离DIV元素上边界的距离
            $(document).bind("mousemove",function(ev){ //绑定鼠标的移动事件，因为光标在DIV元素外面也要有效果，所以要用doucment的事件，而不用DIV元素的事件
                $(".popup").stop();//加上这个之后
                var _x = ev.pageX - x;//获得X轴方向移动的值
                var _y = ev.pageY - y;//获得Y轴方向移动的值
                $(".popup").animate({left:_x+"px",top:_y+"px"},10);
            });
        });
        $(document).mouseup(function() {
            $(".popup").css("cursor","default");
            $(this).unbind("mousemove");
        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.one').click(function(){
            //var cha_time  =$(this).attr("data-chatime");
            //var suitid    = $(this).attr("data-suitid");
            //var lineid    = $(this).attr("data-lineid");
            //var endtime   = $(this).attr("data-endtime")
            //if(cha_time==-1){
             //   alert("活动已过期，请选择其他活动")
           // }else{
            //     var url ="/lines/book/?usedate="+endtime+"&lineid="+lineid+"&suitid="+suitid;

              //  window.location.href =url;
            //}
            $('.box2').show();
        });
        $('.login5 a').click(function(){
            $('.box2').hide();
        });
        //$('.box').easydrag();
    });
</script>
</body>
</html>
