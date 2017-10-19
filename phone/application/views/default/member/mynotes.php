<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

    <title>我的游记</title>

    {Common::css('NoSeeSpot.css,bootstrap-min.css,public.css,travels9-1.css')}
    {Common::js('jquery.min.js,amazeui.js,template.js,strategy9-1.js')}
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

</head>
<!--------

   **    修改css  属性在 本页修改  2016.09.27

--------->
<body class="bj-hui">

<div class="travesls-list" style="padding-top: 0px;">
    <!--h2 class="yuefen">2016年01月</h2-->
    <ul id="result_list" >
    </ul>
    <!--div class="tuan_more" id="btn_getmore"><a class="cursor">加载更多</a></div-->
</div>
<!--没有相关信息-->
<div class="no-content" id="no-content" style="text-align: center;display: none;">
    <img src="{$GLOBALS['cfg_public_url']}images/nocon.png"  width="30%"/>
    <p style="text-align: center;margin-top: 10px">啊哦，暂时没有相关信息</p>
</div>
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="1"/>
<input type="hidden" id="attr_p" value="{$attrid}"/>


<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <li class="m-strategy-item">
        <a href="{{value.url}}?model=1">
            <div class="item-con">
                <div class="item-img"><img src="{{value.litpic}}"></div>
                <p class="item-title">
                    <span class="item-tit">{{value.title}}</span>
                    <span class="item-top">{{value.mdd}}|{{value.year}}-{{value.time}}</span>
                </p>
                <div class="item-peo"><div class="peo-ico"><img src="{{value.authorhead}}"></div><div class="peo-name">{{value.author}}</div></div>
                <div class="item-mask"></div>
            </div>
        </a>
    </li>
    {{/each}}
</script>

{Common::js('layer/layer.m.js')}
<script>


    var memberid = "{$member['mid']}";


    //初始页码
    var loading = false;//用于限制
    $(function () {

        get_data();

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

        var url = '/phone/member/linkman/ajax_article_more';
        $.getJSON(url,{page:page,memberid:memberid},function(data){

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
    $("#searchBtn").click(function(){
        var keyword = $("#sousuo").val();
        var attrid  = $("#attr_p").val();
        var  model  = "{$_GET['model']}";
        if(keyword.length==0){
            alert('请输入关键词');
            $("#sousuo").focus();
            return false;
        }else{
            var url  = "/phone/article/list?model="+model+"&keyword="+keyword+"&attrid="+attrid;
            window.location.href =url;
        }
    });
    $("#sousuo").keydown(function(e){
        if(e.keyCode==13){
            $('#searchBtn').click();
        }
    });
</script>
</body>
</html>
