<!DOCTYPE>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <!--script type="text/javascript" src="%E6%B5%81%E5%B9%B4%E8%AF%A6%E6%83%85_files/jquery-1.js"></script-->
    <title>{if $model==4}你没见过的风景{/if}{if $model==3}逃票攻略{/if}{if $model==2}乐游团回顾{/if}{if $model==1}河北游记{/if}</title>
    {Common::css('Fleetingdetail.css')}
    {Common::js('jquery.min.js,amazeui.js,template.js,jquery.lazyload.js')}
        <script type="text/javascript">
            jQuery(document).ready(
                function($){
                    $("img").lazyload({
                        placeholder : "/res/imagesgrey.gif",
                        effect      : "fadeIn",
                        threshold : 200
                    });
                });
        </script>
    <style>
        .strategy-show{ position:relative;}

        .strategy-show .item-con{position: relative;height:200px;overflow: hidden;}
        .strategy-show .item-img{
            height: 220px;
            overflow: hidden;
        }
        .strategy-show .item-mask{ width:100%; height:200px; background:url(/phone/public/images/bg.png);position:absolute;top:0px; left:0; z-index:555;}
        .strategy-show .item-title{ position:absolute; bottom:0px; left:0; z-index:666; font-size: 18px; color:#FFF;text-shadow:1px 1px 0px #333; }
        .strategy-show .item-top{ position:absolute; top:5px;  right:10px; z-index:666; font-size: 16px; color:#FFF;text-shadow:1px 1px 0px #333; }
        .strategy-show .item-pic{ position:absolute; top:25px;  right:10px; z-index:666; font-size: 16px; color:#FFF;text-shadow:1px 1px 0px #333; }
        .strategy-show .item-pic span{ font-size: 30px;}
        .strategy-show .item-title span{ display:block; padding:0 10px;}
        .strategy-show .item-img img {
            position: absolute;
            top: 50%;
            left: 0;
            height: 220px;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        .tuan_more {
            display: block;
            width: 100%;
            margin: 1.5rem 0;
            text-align: center;
        }
        .cursor{
            padding: 10px;
            border: 1px solid #666;
            cursor: pointer;
        }

        .on{
            background:#B5CE6B;
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
        .cursor:hover{
        }</style>
        {$GLOBALS['cfg_tongjicode']}
</head>
<body class="bj-hui">
{request "pub/header/typeid/$typeid/isshowpage/1"}
<div class="pic-zhanshi">
    <div class="zhanshitu2"><img src="{$info['litpic']}" height="220"></div>
    <div class="zhedang2">
        <p class="biaoti-yj">{$info['title']}</p>
        <p class="bzxx2 left"><span class="icon-bj-hui"></span>{$info['author']}</p>

        <p class="bzxx2 left"> <span class="icon-shijian-hui"></span>{date('Y-m-d', $info['addtime'])}</p>
        <p class="bzxx2 left"><span class="icon-yd"></span>{$info['shownum']}</p>
        <!--  <p class="bzxx2 left"><span class="icon-shijian"></span>今天</p>-->
        <div class="clear"></div>
    </div>
</div>
<!--<div class="pic-zhanshi-xq">-->
<!--    <div class="yhz" style="margin-bottom:10px;">-->
<!--        <div class="zd-ytx bbj">-->
<!--            --><?php//// var_dump($info['authorhead']);?>
<!--            <div class="tx"> <img src="{if empty($info['authorhead'][0]['litpic'])}{$info['litpic']}{else}{$info['authorhead'][0]['litpic']}{/if}" height="100%" width="100%"></div>-->
<!--            <div class="xq-txnr">-->
<!--                <p class="biaoti-yj dbt">{$info['title']}</p>-->
<!--                <p class="bzxx2 left">-->
<!--                    <span class="icon-bj-hui"></span>{$info['author']}-->
<!--                </p>-->
<!--                 <p class="bzxx2 left">-->
<!--                     <span class="icon-shijian-hui"></span>-->
<!--                     {date('Y-m-d', $info['addtime'])}-->
<!--                 </p>-->
<!--                <p class="bzxx2 left">-->
<!--                    <span class="icon-yd-hui"></span>-->
<!--                    <span>{$info['shownum']}</span>-->
<!--                </p>-->
<!--                <div class="clear"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="lnxq">
    <div class="twnr">

        {$info['content']}
</div>
<div id="plnr" class="plnr">
    <h3 class="plbt"><span class="icon-pinglun-big"></span>评论</h3>
    <ul class="lcpl" id="result_list">

    </ul>
</div>
    <div class="tuan_more" id="btn_getmore"><a href="javascript:" class="cursor" style="color: #666">加载更多</a></div>
    <input type="hidden" id="page" value="1"/>
<div style="margin-bottom:50px;"></div>

</div>
<div class="wypl">
    <input id="travel_id" name="travel_id" value="60" type="hidden">
    <input id="article_id" value="{$info['id']}" type="hidden">
    <input id="aid" value="{$info['aid']}" type="hidden">
    <input id="code" value="{$code}" type="hidden">
    <div class="srpl"><textarea style="width: 100%;padding: 10px 0px;font-size: 14px;border:none;pa" rows="1" name="content" id="travel_content" type="text" placeholder="我要评论"></textarea></div>
    <div class="but-pl"><a onclick="return issue()" href="javascript:;" class="button-dbpl">评论</a></div>
</div>
<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <li>
        <div class="pltx"><img src="{if value.headimgurl}{{value.headimgurl}}{else}{$info['litpic']}{/if}" width="100%"></div>
        <div class="pingl">
            <p class="yonghu left"><span class="icon-yonghu"></span>{{value.ChatNick}}</p>
            <p class="right louceng">{{value.floorid}}楼</p>
            <div class="clear"></div>
            <p class="scsj" style="padding: 0px 10px"><span class="icon-shijian-hui1" style="color: #66667A">{{value.time}}</span></p>
            <div class="xian-x"></div>
            <p class="jtpl">&nbsp;&nbsp;{{value.content}}</p>
        </div>
    </li>
    {{/each}}
</script>
{Common::js('layer/layer.m.js')}

<script>
        //获取更新数据
   $(document).ready(function(){
       $('#btn_getmore').click(function(){
           get_data();
       });
       get_data();
   });
    function issue()
    {
        var content=$('#travel_content').val();
        var article_id=$('#article_id').val();
        var aid      = $('#aid').val();
       // alert(aid);
        var code     =$('#code').val();
        if(content.length<3) {
            alert('内容至少3个字');
            return false;
        }else{
            $.ajax({
                type: "POST",
                url: "/phone/article/ajax_comment",
                data:{content:content,article:article_id,code:code,aid:aid},
                success: function (msg) {
                    if(msg==3){
                        alert("评论成功");
                        var url ="/phone/raiders/show_"+aid+".html";
                        window.location.href = url ;
                        //window.location.reload();
                    }
                }
            });
        }
    }
        var contentNum = 0;
        function get_data()
        {
/*            layer.open({
         type: 2,
         content: '正在加载数据...',
         time :10
         });*/
            var url = '/phone/article/ajax_comment_more';
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