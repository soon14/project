<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <title>自驾游</title>
    {Common::css('popup.css,style_line_show.css')}
    {Common::css('Fleetingdetail.css')}
    {Common::js('jquery.min.js,amazeui.js,template.js')}
    <style>
        .tuan_more {
            display: block;
            width: 100%;            
            text-align: center;
            margin-top:15px; padding-bottom:15px;
        }
        .cursor{
            padding: 5px 50px; border-radius:20px;
            border: 1px solid #666;
            cursor: pointer;
        }
        .box2 {display: none;
            width: 100%;
            height: 100%;
            margin: 0 auto;

            z-index: 999;
            position: fixed; top:0; left:0;
            background: rgba(0, 0, 0, 0.52) none repeat scroll 0% 0%;
            opacity: 1;
        }
        .but-bm{ background:#F60; width:80%; margin:0 auto; border-radius:8px; }
        .but-bm a{ display:block; color:#FFF;height:30px; font-size:1.2em; line-height:30px; text-align:center; padding:0;}
        .login5 {
            width: 80%;
            height: 55px;
            background: #b52200;
            text-align: center;
            position: relative;
            margin: 50px auto 0px auto;
        }
        .login5 h2 {
            font-size: 22px;
            line-height: 55px; font-weight:normal;
            color: #ffffff;
        }
        .login5 a {
            background: url(/res/images/img/login_reg.png) 0px 0px no-repeat;
            position: absolute;
            width: 33px;
            height: 33px;
            right: 10px;
            top: 15px;
        }
        .login51 {
            width: 80%;
            padding: 20px;
            margin: 0 auto;
            background: #EFEFEF;
        }
        .icon-shijian-hui1{
            height: 18px;
            line-height: 18px;
            background-size: 100%;
            color: #fff;
            margin-right: 5px;
            position: relative;
            top: 0px;
        }
    </style>
</head>
<body class="bj-hui">
{request "pub/header/typeid/$typeid/isshowpage/1"}
<div class="pic-zhanshi-xq com">
    <div class="zhanshitu"><img src="{Common::img($info['piclist'][0][0],500,300)}"></div>
    <div class="zhedang">
        <div class="xq-txnr">
            <p class="biaoti-yj">{$info['title']}</p>
        </div>
    </div>
</div>

<div id="" style="width:100%;" class="com">
    <div class="yhz">
        <p class="jiage"><span class="fulijia"> {if !empty($info['storeprice'])}¥{$info['storeprice']}&nbsp;&nbsp;{else}电询{/if}</span><span class="zs"><!--1.2米以下儿童半价-->{$info['childrule']}</span></p>
    </div>
</div>

<div class="yhz com">
    <p><span class="juli">已有<strong id="strong_people_num">{$info['sellnum']}</strong>报名</span><span class="right"><span id="span_left"></span>{if $info['stock']<=0}<span style="color:#FF6631">不限</span>名额{else}剩余<span style="color: #FF6631">{$info['stock']}</span>个名额{/if}</span></p><div class="clear"></div><p></p>
</div>

<div class="yhz com">
    <p class="kfdh">咨询电话: <span><a href="tel:031187885822" style="color: #FF6600">031187885822</a> </span> / <span><a href="tel:18630172332" style="color: #FF6600">18630172332</a></span></p>
</div>
<div style="margin-bottom:10px;" class="com"></div>
<div class="zysx com">
    <h3 class="zysx-bt"><span class="icon-zysx-big"></span>重要事项</h3>
    <p class="zys"><strong> 报名时间：</strong><span>&nbsp;&nbsp;{$info["linedate"]["starttime"]}前</span></p>
    <p class="zys" >
        自驾时间：{$info["linedate"]["starttime"]}~{$info["linedate"]["endtime"]}
    </p>
    <p class="zys" style="height: 22px;">目&nbsp;的&nbsp;地&nbsp;&nbsp;：{$info["selfDriMdd"]}</p>
</div>

<div class="lnxq com">
    <h3 class="yh-bt"><span class="icon-fy-big"></span>费用详情</h3>
    <div class="fy">
        {$info["feeinclude"]}
        <div class="clear"></div>
        <!--p class="fysm"><b>说明：</b></p>
        <p>1、{$info["childrule"]}</p>
        <p>2、一经购买，概不退款</p-->
    </div>
</div>

<div class="lnxq com">
    <h3 class="yh-bt">详细介绍</h3>
    {$info["jieshao"]}
</div>
<div class="plnr com">
    <div class="plbt"><span class="icon-pinglun-big"></span>评论</div>
    <ul class="lcpl" id="result_list"></ul>
</div>
<div class="tuan_more com" id="btn_getmore"><a href="javascript:" class="cursor" style="color: #666">加载更多</a></div>
<input type="hidden" id="page" value="1"/>
<div style="margin-bottom:50px;" class="com"></div>
<div class="xfk">
    <div class="baoming left"><a href="javascript:" id="submit_a" no_id="">立即报名</a></div>
    <div class="box2">
        <div class="login5">
            <h2>报名方式</h2>
            <a class="close"></a> </div>
           <div class="login51">
               <div class="but-bm"><a href="/phone/line/book/id/{$info['id']}">在线报名 </a></div>
             <a href="tel:0311-87885822"><img src="/res/images/img/baoming1.png" width="100%"></a>
            <img src="/res/images/img/baoming2.png" width="100%">
           </div>
    </div>
    <div class="bm-pl left" id="comment1"><a href="javascript:">评论</a></div>
</div>
<div class="wypl" style="display: none" id="comment">

    <input id="travel_id" name="travel_id" value="60" type="hidden">
    <input id="article_id" value="{$info['id']}" type="hidden">
    <input id="code" value="{$code}" type="hidden">
    <input id="expire" value="{$is_expire}" type="hidden">
    <div class="srpl"><textarea style="width: 100%;padding: 10px 0px;font-size: 14px;border:none;" rows="1" name="content" id="travel_content" type="text" placeholder="我要评论"></textarea></div>
    <div class="but-pl"><a onclick="return issue()" href="javascript:;" class="button-dbpl">评论</a></div>
    <!--a href="javascript:" id="back" class="button-dbpl" style="float: right;margin-top: -10px">返回</a-->
</div>
</div>

<!--<script src="detail_files/modernizr.htm"></script> <!-- Modernizr fengjsihu 07.15 yincang -->
<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <li>
        <div class="pltx"><img src="{if value.headimgurl}{{value.headimgurl}}{else}{$info['litpic']}{/if}" width="100%"></div>
        <div class="pingl">
            <p class="yonghu left"><span class="icon-yonghu"></span>{{value.ChatNick}}</p>
            <p class="right louceng">{{value.floorid}}楼</p>
            <div class="clear"></div>
            <p class="scsj"><span class="icon-shijian-hui1" style="color: #66667A">{{value.time}}</span></p>
            <div class="xian-x"></div>
            <p class="jtpl">{{value.content}}</p>
        </div>
    </li>
    {{/each}}
</script>
{Common::js('layer/layer.m.js')}
{php echo Common::js('jquery.js,main.js');}
<!--0script src="detail_files/jquery.js"></script>
<script src="detail_files/main.js"></script> <!-- Resource jQuery -->
<script>
    $(document).ready(function(){
        $('#btn_getmore').click(function(){
            get_data();
        });
        get_data();
    });
    $(document).ready(function(){
        //选择时间
        $(".check_span").click(function(){
            //alert($(this).attr('no_id'));
            var no_id = $(this).attr('no_id');
            var more_num = $(this).attr('more_num');
            var people_num = $(this).attr('people_num');
            people_num == '' ? people_num = 0 : people_num = people_num;
            var left_num = more_num - people_num;
            $('#strong_people_num').html(people_num);
            $('#span_left').html(left_num);
            $('#submit_a').attr('no_id',no_id);
        });
        $("#submit_a").click(function(){
            var is_expire = $("#expire").val();
           // alert('{$is_expire}');
            if(is_expire>=0){
                alert("该活动已过期,请选择其他活动");
               // return false;
            }else{ $('.box2').show();}
        });
        $('.login5 a').click(function(){
            $('.box2').hide();
        });
        $('.com').click(function(){
            $("#comment").hide();
        });
        $("#comment1").click(function(){
            $("#comment").show();
        });
        $("#back").click(function(){
            $("#comment").hide(0);
        });
//        $("#d_info").html($("#info").val().replace(/\{空格}/g, "&nbsp;"));
//        var w_v=$("#d_info").css("width").replace("px","");
//        var t_h="";
//        var t_w="";
//        var mid_h="";
//        $.each($("#d_info").find('img'),function(n,e){
//            t_h=$(e).css("height").replace("px","");
//            t_w=$(e).css("width").replace("px","");
//            if(parseInt(w_v)<parseInt(t_w)){
//                mid_h=parseInt(w_v)/parseInt(t_w);
//                $(e).css("width",w_v+"px");
//                $(e).css("height",t_h*mid_h+"px");
//            }
//        });
//        var imgh=$("#ul_right").css("height");
//        imgh=imgh.replace("px","");
//        imgh=parseInt(imgh)-3;
//        $("#img_h").css("height",imgh+"px");

    });
    function issue()
    {
        var content=$('#travel_content').val();
        var article_id=$('#article_id').val();
        var code     =$('#code').val();
        if(content.length<3) {
            alert('内容至少3个字');
            return false;
        }else{
            $.ajax({
                type: "POST",
                url: "/phone/line/ajax_comment",
                data:{content:content,article:article_id,code:code},
                success: function (msg) {
                    if(msg==article_id){
                        alert("评论成功");
                        var url ="http://www.aitto.net/phone/lines/show_"+msg+".html?is_expire={$is_expire}";
                        window.location.href= url ;//为了刷新 code
                    }
                }
            });
        }
    }
    var contentNum = 0;
    function get_data()
    {
            layer.open({
                type: 2,
                content: '正在加载数据...',
                time :10
            });
        var url = '/phone/line/ajax_comment_more';
        $.getJSON(url,{page:$("#page").val(),aid:$("#article_id").val()},function(data){
            if (data.list.length > 0) {
                var itemHtml = template('tpl_article_list', data);
                console.log(itemHtml);
                $("#result_list").append(itemHtml);
                contentNum++;
            }
            //设置分页
            if (data.page != -1) {
                $("#page").val(data.page);
            } else {
                $("#btn_getmore").hide();
            }
            //设置内内容显示
            if (contentNum == 0) {
                $('#list-content').hide();
                $("#no-content").show();
            }
            if (data.page != -1) {
                $("#page").val(data.page);
            } else {
                $("#btn_getmore").hide();
            }
            layer.closeAll();
        });
    }
</script>


</body></html>