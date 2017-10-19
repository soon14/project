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

    {Common::css('mycss/ticket.css,mycss/base.css,mycss/jcarousel.connected-carousels.css')}
    {Common::css('gonglue.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}

    <script type="text/javascript">

        $(function () {

            $(".remark").hide();

            $(".arrow2").click(function () {

                $("this").css("cursor","pointer");

                var trr = $(this).parent().parent().parent().next().children(".remark");

                if (trr.is(":visible")) {

                    trr.hide();

                    $(this).children().find("dfn").css('background-position','-290px -255px');//添加一个样式

                } else {

                    trr.show();

                    $(this).children().find("dfn").css('background-position','-290px -235px');//添加一个样式

                }

            });

        });

    </script>

    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH">

    </script>

    <style type="text/css">

        #destmap{height:100%}

        #bt:hover{text-decoration:solid}



    </style>

</head>

<body style="height:2000px;position:relative;">

{request "pub/header"}

<section>

    <div class="container crumbs">

        <a href="{$cmsurl}" class="current">{$GLOBALS['cfg_indexname']}</a><sub class="songti">-&gt;</sub><a href="/spots/">{$channelname}</a><sub class="songti">-&gt;</sub>

        {loop $predest $dest}

        <a href="/spots/{$dest['pinyin']}/" class="current">{$dest['kindname']}{$channelname}</a><sub class="songti">-&gt;</sub>

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

                                    <li><img src="{Common::img($pic[0])}" alt="" width="440" height="250" name="img"></li>

                                    {/loop}

                                </ul>



                            </div>

                        </div>

                        <div class="navigation"><a href="#" class="prev prev-navigation"></a> <a href="#" class="next next-navigation"></a>

                            <div class="carousel carousel-navigation">

                                <ul>

                                    {loop $info['piclist'] $pic}

                                    <li><img src="{Common::img($pic[0],90,59)}"  alt=""></li>

                                    {/loop}

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="product-main-box fr" style=" position:relative;">

                    <div >

                        <h1 class="product-hd">{$info['title']}</h1>

                        <div class="d_level">

                            <?php

                            foreach($info['attrlist'] as $key=>$value){

                                $str = strstr($value['attrname'],"A");

                                switch($str){

                                    case true:

                                        echo "景区等级：", $str;

                                        break;

                                    default;

                                }

                            }

                            ?>

                        </div>

                        <div class="preview-price"> <span style="display: inline;" class="fl disn">￥<strong class="min_price">{$info['price']}</strong>起</span> <span class="fr"><em><a href="#bye">立即预订</a></em></span> </div>

                    </div>



                    <div class="preview-a">

                        <div class="a_sales">已售{$info['sellnum']}</div>

                        <div class="a_score">{$info['satisfyscore']}分</div>
                    <?php //echo $userip;?>
                        <div class="a_judge" >
                            {if $userip!=0}
                            <i style="background-position:-6px -200px;cursor: pointer"  class="a_judges" data-id="0"></i><span>{$info['recommendnum']}</span>人推荐</div>
                            {else}
                            <i style="background-position:-45px -200px;cursor: pointer"  class="a_judges" data-id="0"></i><span>{$info['recommendnum']}</span>人推荐</div>
                            {/if}
                        <div class="clearfix"></div>

                        <dl>

                            <dt>营业时间</dt>
                            <dd>{$extendinfo['e_business_time']}</dd>

                        </dl>

                        <dl>

                            <dt>景区地址</dt>

                            <dd>{$info['address']}</dd>

                        </dl>

                        <dl>

                            <dt>景点简介</dt>

                            <dd>{Common::cutstr_html($info['content'],70)}</dd>

                        </dl>

                    </div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>

    </div>

</section>

<section>

    <div class="container  mt20">



        <!---选项卡插件多种tab标签切换开始--->



        <div class="demo" id="bye">

            <ul class="tabbtn" id="normaltab">

                <li class="current"><a href="#">景区门票</a></li>

                <!--li><a href="#">酒店</a></li-->

            </ul>

            <!--tabbtn end-->

            <div class="tabcon" id="normalcon">

                <div class="sublist">

                    <table width="100%" class="table table-hover">

                        <tr>

                            <th width="12%">门票类型

                            </td>

                            <th><div class="text-left">名称</div>

                            </td>

                            <th width="15%">提前预定时间

                            </td>

                            <th width="10%">市场价

                            </td>

                            <th width="10%">优惠价

                            </td>

                            <th width="15%">预定

                            </td>

                        </tr>

                        {st:spot action="suit_type" row="8" productid="$info['id']" return="typelist"}

                        {loop $typelist  $type}


                        {st:spot action="suit_by_type" row="10" productid="$info['id']" suittypeid="$type['id']" return="suitlist"}
                        <?php// var_dump($suitlist);?>
                        {loop $suitlist $k $suit}

                        <tr class="rr">

                            <td rowspan="2" bgcolor="#eff4fa" class="tab-line"><b>{if $k>0}{else}{$type['title']}{/if}</b></td>

                            <td><div class="text-left">{$suit['title']}<dfn class="arrow2"><a href="#"></a></dfn> </div></td>

                            <td>{$extendinfo['e_Advance_buy_time']}</td> 

                            <td><del>￥{$suit['sellprice']}</del></td>

                            <td><i>{if !empty($suit['ourprice'])}{Currency_Tool::symbol()}{$suit['ourprice']}{else}电询{/if}</i></td>

                            <td><div class="booking-but"><a class="booking-btn" href="javascript:;" data-suitid="{$suit['id']}">{if $suit['paytype']==4}景区支付{else}在线支付{/if}</a></div></td>

                        </tr>

                        <tr class="ticket-detail">

                            <td colspan="5" class="remark">

                                <div>

                                    {$suit['description']}

                                </div>

                            </td>

                        </tr>

                        {/loop}

                        {/loop}

                    </table>

                </div>

                <!--tabcon end-->

                <!--div class="sublist">酒店</div-->

                <!--tabcon end-->

            </div>

            <!--tabcon end-->



        </div>

        <!--tabbox end-->



    </div>

</section>

<section>

    <div class="container mt20">

        <div class="content-warp">

            <div class="content-left">

                <div class="" id="mymune">

                    <div id="naw-w" class="">

                        <div id="mynav">

                            <ul>

                                <li><a href="#con-001" >路线图</a></li>

                                <li><a href="#con-002" >景区简介</a></li>

                                <li><a href="#con-003" >购买须知</a></li>

                                <li><a href="#con-004" >旅游点评<span class="org-txt">({$info['commentnum']})</span></a></li>

                            </ul>

                            <div id="red-big-btn"><a href="#">我要购买</a></div>

                        </div>

                    </div>

                </div>


                {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="spotcontent"}

                <div id="box">

                    <div class="con-box" id="con-001">

                        <div class="con-fk-titile"><i class="fk-ico01"></i><span>推荐路线</span></div>

                        <div class="con-box"> <div class="map-area">



                                <div id="destmap"></div> </div> </div>

                    </div>

                    <div class="con-box"  id="con-002">

                        <div class="con-fk-titile"><i class="fk-ico02"></i><span>景区简介</span></div>

                        <div class="con-box">{$spotcontent[0]['content']}</div>

                    </div>

                    <div class="con-box" id="con-003">

                        <div class="con-fk-titile"><i class="fk-ico03"></i><span>购买须知</span></div>

                        <div class="con-box">{$spotcontent[1]['content']}</div>

                    </div>

                    {/st}

                    <div class="con-box"  id="con-004">

                        <div class="con-fk-titile mt30">



                            <div class="com-but">

<!--                                <div class="pl-but"><a href="javascript:" id="me_comment">我要评论</a></div>-->

                            </div>

                            <i class="fk-ico04"></i><span>旅游点评</span><span style="color: #666; padding-left:10px;font-size:14px; padding-top:8px;">*消费后可评价</span></div>

                        <div class="con-banDp" >

                            <div class="cinf-c-des">

                                <!--div class="grade_box" style="display:none;">
                                    <div class="hpl_box">

                                        <div class="hpl_grade"> <span>100<i>%</i></span>

                                            <p>满意度</p>

                                            <div class="star">

                                                <div class="vote-star"><i style="width:90%"></i></div></div>

                                        </div>

                                        <div class="hpl"><span>风景：<b><i style="width:96.6%"></i></b><em>96.6%</em></span><span>设施：<b><i style="width:3.2%"></i></b><em>3.2%</em></span><span class="bad">服务：<b><i style="width:0.2%"></i></b><em>0.2%</em></span></div>

                                    </div>
                                    <div class="com_idea_box">

                                        <div class="c_i_b_l"> <img src="http://img1.40017.cn/cn/s/final/2015/f_dp.png?v=22" alt=""> </div>

                                        <div class="c_i_b_r">

                                            <ul>

                                                <li typeid="15">整体不错(292)</li>

                                                <li typeid="65">环境好(168)</li>

                                                <li typeid="10">取票方便(128)</li>

                                                <li typeid="19">订票方便(101)</li>

                                            </ul>

                                        </div>

                                    </div>





                                </div-->

                                {if $info['hasticket']}

                                {include "pub/comment"}

                                {/if}
                                <!----------06.30 fengjishu----------->
                               <!-- <div class="publish-comment-box" id="replybox">
                                    <h3>发表评论</h3>
                                    <div class="comment-con"><textarea name="" id="content" cols="" rows=""></textarea></div>
                                    <div class="comment-msg">
                                        <a class="tj-btn" href="javascript:;" style="margin-right: 16px;">提交</a>
                                        <span class="yzm">验证码：<img src="{$cmsurl}captcha" onClick="this.src=this.src+'?math='+ Math.random()" width="80" height="30" /><input type="text" id="checkcode" class="w105" /></span>
                                       <span id="m_info">
                                       </span>
                                    </div>
                                </div>-->
                                <!----------06.30 fengjishu----------->
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="content-sider">

            <div class="sider-tit">热门推荐门票</div>

            <div class="sider-con">

                {st:spot action="query" flag="order" row="4" return="spotlist"}

                {loop $spotlist $spot}

                <div class="col-box" style="margin-bottom:15px;"> <a href="{$spot['url']}" title="{$spot['title']}">

                        <div class="col-img-box" >

                            <div class="col-img"><img src="{Common::img($spot['litpic'],283,195)}"> </div>

                            <div class="col-bottom">

                                <div class="col-tt">

                                    <p>门票</p>

                                </div>

                                <div class="col-price"><span>￥{$spot['price']}</span>

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


<input type="hidden" id="dockid" value="0"/>
<input type="hidden" id="user" value="{$userinfo['mid']}"/>
<input type="hidden" id="productid" value="{$info['id']}"/>


{request "pub/footer"}

{request "pub/flink"}

{Common::js('floatmenu/floatmenu.js,myjs/jquery.jcarousel.min.js,myjs/jcarousel.connected-carousels.js')}

{Common::css('/res/js/floatmenu/floatmenu.css',0,0)}

{Common::js('SuperSlide.min.js,template.js,scorll.img.js')}

{Common::js('layer/layer.js',0)}

<script type="text/javascript">

    $(document).ready(function(){

        //内容切换

        $.floatMenu({

            menuContain : '.tabnav-list',

            tabItem : 'span',

            chooseClass : 'on',

            contentContain : '.tabbox-list',

            itemClass : '.tabcon-list'

        });
        //fengjsihu 08.01  start
        $('.a_judges').click(function(){
            var  limit  = $(this).attr('data-id');

            if(limit==0) {
                var text = $(this).siblings('span').text();
                var spot_id = '<?php echo $info['id'];?>';
                var url = '/spot/ajax_recommendnum?rem=' + text;
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    data: {rem: text, spotid: spot_id},
                    success: function (data) {
                        if(data['status']==0){
                            alert(data['mes']);
                            $('.a_judges').css('background-position', '-6px -200px');
                        }
                        else {
                            // alert(data['ip']);
                            $('.a_judge').find('span').text(data['num']);
                            $('.a_judges').css('background-position', '-6px -200px');
                            $('#ip').val(data['ip']);
                            $('.a_judges').attr('data-id', '1');
                        }
                    }
                });
            }else{
                alert("您已推荐了")
            }

        });
        //==========end
        //套餐点击

        $(".type-tit").click(function(){

            $(this).parents('tr').first().next().toggle();

        })

        //预订

        $(".booking-btn").click(function(){

            var suitid = $(this).attr('data-suitid');

            var productid = $("#productid").val();

            var url = SITEURL+'spot/book/?suitid='+suitid+"&productid="+productid;

            window.location.href = url;

        })

        // $(".type-tit").first().trigger('click');

    });

</script>

<script type="text/javascript">

    $(function(){

        var toTopHeight = $("#mymune").offset().top;
        //====================06.30 fengjishu
        $("#me_comment").click(function(){
            $("#content").focus();
        });
        //====================06.30 fengjishu
        //================================06.29 fengjishu start
//        var total       = $("#total").val();
//        alert(total);
//        if(total.length==0){//06.30 增加
//            $("#totalNumber").text(0);
//
//        }else{
//            $("#totalNumber").text("("+total+")");
//        }

        $(".dp-c").click(function(){

          //  var url = window.location.href;

           // if(url_search.length==0){
            var urls = "/spots/show_{$info[id]}.html?time_sort=desc";
          //  }else{
         //   var urls = url+"&time_sort=desc";
         //   }
            window.location.href =urls;
        });
        $(".dp-au").click(function(){
            var url ='/spots/show_{$info[id]}.html';
            window.location.href =url;
        });
        //=================================06.29 fengishu end
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

      	var $li = $('#mynav li');

                $li.click(function(){

                    var $this = $(this);

                    var $t = $this.index();

                    $li.removeClass();

                    $this.addClass('current');

                    $ul.css('display','none');

                    $ul.eq($t).css('display','block');

                })



    });

</script>
{Common::js('layer/layer.js',0)}
<script>
    $(function(){
        //回复
        $(".reply_btn").click(function(){

            $("#dockid").val($(this).attr('data-replyid'));

        })
        //登陆状态
        $.ajax({
            type:"POST",
            url:SITEURL+"member/login/ajax_is_login",
            dataType:'json',
            success:function(data){

                if(data.status){
                    var txt = data.user.mid;
                }else{
                    var txt = '';
                }
                $("#user").val(txt);
            }

        })
        //提交问答
        $(".tj-btn").click(function(){
            var user      = $("#user").val();
            var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
            if(user.length==0){
                var url = '/member/login/?redirecturl='+urls;//
                window.location.href  =url ;
            }else {
                var articleid = $("#productid").val();
                var dockid = $("#dockid").val();
                var checkcode = $("#checkcode").val();
                var typeid = 5;
                var nickname = $("#nickname").val();
                var content = $("#content").val();

                if (content.length < 5) {
                    layer.msg('{__("reply_not_empty")}', {
                        icon: 5

                    })
                    return false;
                }
                if (checkcode == '') {
                    layer.msg('{__("checkcode_empty")}', {
                        icon: 5


                    })
                    return false;
                }
                $.ajax({
                    type: 'POST',
                    url: SITEURL + 'spot/ajax_add_comment',
                    data: {
                        articleid: articleid,
                        content: content,
                        checkcode: checkcode,
                        nickname: nickname,
                        typeid: typeid,
                        dockid: dockid
                    },
                    success: function (data) {
                        if (data == 1) {
                            layer.msg('{__("checkcode_error")}', {
                                icon: 5


                            })
                            //重新加载验证码
                            $("#imgcheckcode").attr('src', "{$cmsurl}captcha?" + Math.random());

                        } else if (data == 3) {

                            layer.msg('{__("reply_success")}', {
                                icon: 6,
                                time: 1500
                            });
                            location.reload();
                        } else {
                            layer.msg('{__("reply_failure")}', {
                                icon: 5
                            })
                        }
                        $("#limit").val(1);//在每个 模块的的show 页面都要写上这个

                    }

                })

            }
        })
    })
</script>
<script type="text/javascript">

    var map = new BMap.Map("destmap");

    // var point = new BMap.Point(103.928015,33.271453);

    var point = new BMap.Point({$info['lng']},{$info['lat']});

    // map.centerAndZoom(point, 15);

    //map.addOverlay(new BMap.Marker(point));

    //==========================================

    // 添加全景设置

    map.enableScrollWheelZoom(true);

    // 覆盖区域图层测试

    map.addTileLayer(new BMap.PanoramaCoverageLayer());



    var stCtrl = new BMap.PanoramaControl(); //构造全景控件

    stCtrl.setOffset(new BMap.Size(20, 20));

    map.addControl(stCtrl);//添加全景控件

    //============================================

    map.centerAndZoom(point, 16);

    var marker = new BMap.Marker(point);

    map.addOverlay(marker);

    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

    //============================================

    var opts = {

        width : 300,     // 信息窗口宽度

        height: 125,     // 信息窗口高度

        title : "<a href='#' style='color:#4D4D4D;display:block;margin-bottom:5px' id='bt'>{$info['title']}</a>"  // 信息窗口标题

    }

    //var img  = document.getElementsByName("img");

    var mcon ="<span style='font-size:12px;color:#4D4D4D'>景区地址：{$info['address']}</span><br/><span style='font-size:11.4px;color:#4D4D4D'>景区简介：{Common::cutstr_html($info['content'],42)}</span>";

    var infoWindow = new BMap.InfoWindow(mcon, opts);  // 创建信息窗口对象

    map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口

    //===========================================

    //控件

    map.addControl(new BMap.NavigationControl());//地图平移缩放控件

    map.addControl(new BMap.ScaleControl());   //比例尺控件，默认位于地图左下方，显示地图的比例关系 

    map.addControl(new BMap.OverviewMapControl());//缩略地图控件，默认位于地图右下方，是一个可折叠的缩略地图

    //map.addControl(new BMap.CopyrightControl());

    map.addControl(new BMap.GeolocationControl());//定位控件，针对移动端开发，默认位于地图左下方

    //===============================================

    //自定义控件

    function ZoomControl(){

        this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;

        this.defaultOffset = new BMap.Size(10, 10);

    }

    ZoomControl.prototype = new BMap.Control();

    ZoomControl.prototype.initialize = function(map){

        var div = document.createElement("div");

        div.appendChild(document.createTextNode("放大2级"));

        div.style.cursor = "pointer";

        div.style.border = "1px solid gray";

        div.style.backgroundColor = "white";

        div.onclick = function(e){

            map.zoomTo(map.getZoom() + 2);

        }

        map.getContainer().appendChild(div);

        return div;

    }

    var myZoomCtrl = new ZoomControl();

    //===============================================

</script>

</body>

</html>