<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

    <title>{if $model==4}你没见过的风景{/if}{if $model==3}逃票攻略{/if}{if $model==2}自驾回顾{/if}{if $model==1}河北游记{/if}</title>
    {Common::css('NoSeeSpot.css')}
    {Common::js('jquery.min.js,amazeui.js,template.js')}
    <style>.tuan_more {
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

        .cursor:hover{
        }</style>
    {$GLOBALS['cfg_tongjicode']}
</head>

<body class="bj-hui">

<div class="xxk" style="display:none">
    <ul>
        {loop $tl $k $v}
        <li {if $k+1==4}style="width: 33%"{/if}{if $k+1==3}style="width: 25%"{/if}{if $k+1==2}style="width: 21%"{/if}{if $k+1==1}style="width: 21%"{/if}><a href="/phone/raiders/all-1-{$v['id']}?model={$k+1}" class="{if $attrid==$v['id']}on{/if}">{$v['attrname']}</a></li>
        {/loop}
        <div class="clear"></div>
    </ul>
</div>

<div class="sjz-cd" style="">
        <!--h2 class="yuefen">2016年01月</h2-->
       <ul id="result_list" >
       </ul>
       <!--div class="tuan_more" id="btn_getmore"><a class="cursor">加载更多</a></div-->
</div>
        <!--没有相关信息-->
        <div class="no-content" id="no-content" style="display: none">
            <img src="{$GLOBALS['cfg_public_url']}images/nocon.png"/>
            <p>啊哦，暂时没有相关信息</p>
        </div>
        <input type="hidden" id="keyword" value=""/>
        <input type="hidden" id="page" value="1"/>
        <input type="hidden" id="attr_p" value="{$attrid}"/>

{if $model==1}
<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <!--h2 class="yuefen">{{value.year}}年{{value.month}}月</h2-->
    <a href="{{value.url}}?model=1" style="display:block;margin-top: 20px">
        <div class="pic-zhanshi">
            <div class="zhanshitu"><img src="{{value.litpic}}" width="100%"></div>
            <div class="zhedang" style="background:url(/res/images/phone/tm.png) repeat center;">
                <p class="biaoti-yj" >{{value.title}}<span></span></p>
                <p class="bzxx2 left"><span class="icon-dt" style="/res/images/phone/dt.png"></span>{{value.gl_mdd}}</p>
                <p class="bzxx2 left"><span class="icon-yd"></span>{{value.shownum}}</p>
                <p class="bzxx2 left"><span class="icon-shijian"></span>{{value.time}}</p>
                <div class="clear"></div>
            </div>
        </div>
    </a>
    {{/each}}
</script>
{/if}
{if $model==2}
<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <!--h2 class="yuefen">{{value.year}}年{{value.month}}月</h2-->
    <a href="{{value.url}}?model=2" style="display:block;margin-top: 20px">
        <div class="pic-zhanshi">
            <div class="zhanshitu2"><img src="{{value.litpic}}" width="100%"></div>
            <div class="zhedang2">
                <p class="biaoti-yj">{{value.title}}</p>
                <p class="bzxx2 left"><span class="icon-bj"></span>{{value.author}}</p>
                <p class="bzxx2 left"><span class="icon-yd"></span>{{value.shownum}}</p>
                <!--  <p class="bzxx2 left"><span class="icon-shijian"></span>今天</p>-->
                <div class="clear"></div>
            </div>
            <div class="jsrq">
                <h6>{{value.month}}月</h6>
                <p class="ywrq"><span class="jt">{{value.day}}日</span></p>
            </div>
        </div>
    </a>
    {{/each}}
</script>
{/if}
{if $model==3}
<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <!--h2 class="yuefen">{{value.year}}年{{value.month}}月</h2-->
    <a href="{{value.url}}?model=3" style="display:block;margin-top: 20px">
        <div class="pic-zhanshi">
            <div class="zhanshitu"><img src="{{value.litpic}}" width="100%"></div>
            <div class="zhedang-center">
                <div class="nr">
                    <p class="biaoti-yj">{{value.title}}</p>
                    <div class="zsxx">
                        <p class="bzxx"><span class="icon-dt"></span>{{value.gl_mdd}}</p>
                        <p class="bzxx"><span class="icon-yd"></span>{{value.shownum}}</p>
                        <p class="bzxx"><span class="icon-shijian"></span>{{value.time}}</p>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    {{/each}}
</script>
{/if}
{if $model==4}
<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <!--h2 class="yuefen">{{value.year}}年{{value.month}}月</h2-->
    <a href="{{value.url}}?model=4" style="display:block;margin-top: 20px">
        <div class="pic-zhanshi">
            <div class="zhanshitu"><img src="{{value.litpic}}" width="100%" alt="{{value.title}}"></div>
            <div class="zhedang-cen" style="background:url(/res/images/phone/tm.png) repeat center;">
                <p class="biaoti-yj" style="background:url(/res/images/phone/hwx.png) no-repeat center bottom;">{{value.lastdest.kindname}} {{value.title}}</p>
                <p class="fbt">{{value.gl_mdd}}</p>
            </div>
        </div>
    </a>
    {{/each}}
</script>
{/if}

{Common::js('layer/layer.m.js')}
<script>
    var keyword = "";
    var destid = 0;
    var sorttype = 2;// 不为空 按照 浏览次数 排序 又大到小
    var attrid = $("#attr_p").val();
    //初始页码
    var loading = false;//用于限制
    $(function () {

        var pages=$("#page").val();//用于 取出页面返回 自动加载下一页的bug
        if(pages==1){
            $("#page").val(1);// 如刚开始第一页 返回 就是第一页 如果不是第一页 返回页面减一为上次页面 但是当最后一页返回会有bug
        }else{
            $("#page").val(pages*1-1);
        }

        get_data();
       // 获取更新数据
//        $('#btn_getmore').click(function(){
//            get_data();
//        })
        //第一次加载数据
    })
   $(window).scroll(function(){
        // 当滚动到最底部以上100像素时， 加载新内容
           var scorllTop = $(this).scrollTop() + 100;
           var scorllHeight = $(document).height();
           var windowHeight = $(this).height();
           if (scorllTop + windowHeight > scorllHeight) {
               if(!loading){
                   get_data();
               }
           }
    });
    //获取list地址

    //ajax获取数据
    var contentNum = 0;
    function get_data()
    {   
        loading = true;
        layer.open({
            type: 2,
            content: '正在加载数据...',
            time :20
        });

        var page = Number($("#page").val());
        var url = '/phone/article/ajax_article_more';
        $.getJSON(url,{page:page,destid:destid,sorttype:sorttype,attrid:attrid,keyword:keyword},function(data){

            if(data==false){
                $("#page").val(page-1);
                layer.closeAll();
            }else {
                if (data.list.length > 0) {
                    var itemHtml = template('tpl_article_list', data);
                    console.log(itemHtml);
                    $("#result_list").append(itemHtml);
                    contentNum++;
                }
                //设置分页
                if (data.page != -1) {
                    $("#page").val(data.page);
                    loading = false;
                } else {
                    //$("#page").val(data.page);
                    //$("#btn_getmore").hide();
                    loading = true;
                }
                // 设置内内容显示
                if (contentNum == 0) {
                    $('#list-content').hide();
                    $("#no-content").show();
                }
                layer.closeAll();
            }
        });
    }
</script>
</body>
</html>
