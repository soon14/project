<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$destinfo['kindname']}特产</title>

    {Common::css('2017common/bootstrap.css,2017common/public.css')}
    {Common::css('2017new_ver/page.css')}
    {Common::js('jquery-1.11.3.min.js,rosestrap-min.js,template.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<header class="Dest-list-head">
  <h2 class="head-title"><a class="back-page" href="javascript:history.back()"></a><i></i>{$destinfo['kindname']}特产<span class="small"></span></h2>
</header>
<section class="ctd-common-warp clearfix">
  <div class="Dest-list-body">
    <ul class="listItem clearfix" id="result_list">

    </ul>
  </div>
  
</section>
<?php //var_dump($destinfo)?>
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="1"/>
<input type="hidden" id="mdd" value="{$destinfo['id']}"/>


{Common::js('layer/layer.m.js')}

<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <li>
        <a href="{{value.url}}" target="blank">
            <div class="list-img">
                <img src="{{value.litpic}}">
                <h3 class="list-title">{{value.title}}</h3>
                <div class="tip">特产</div>
            </div>
            <div class="city-from">产地:{{value.mdd}}</div>
        </a>
    </li>
    {{/each}}
</script>
</body>
</html>
<script>
    var destid = $('#mdd').val();
    // var attrid = $("#attr_p").val();
    //初始页码
    var loading = false;//用于限制
    $(function () {

        var pages=$("#page").val();//用于 取出页面返回 自动加载下一页的bug
        if(pages==1){
            $("#page").val(1);// 如刚开始第一页 返回 就是第一页 如果不是第一页 返回页面减一为上次页面 但是当最后一页返回会有bug
        }else{
            $("#page").val(pages*1-1);
        }
        get_data();// 默认数据

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
        //alert(destid+"gg"+attrid);
        var page = Number($("#page").val());
        var url  = '/phone/destination/specialty_s';
        $.getJSON(url,{page:page,destid:destid},function(data){
            if(data==false){
                $("#no-content").show();
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
                layer.closeAll();
            }
        });
    }
</script>
{Common::js('20170301_new/bootstrap-min.js')}