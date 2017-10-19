<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

    <title>我的喜欢</title>

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
        }
     .travesls-list a{
         float: left;
         width: 49.5%;
         line-height: 30px;
         color:#000000;
         text-align: center;
         border-right: 0.5px solid #666;
         border-bottom:1px solid #666;


    }
    </style>

</head>
<!--------

   **    修改css  属性在 本页修改  2016.09.27

--------->
<body class="bj-hui">

<div class="travesls-list" style="padding-top: 0px;">
    <a href ="/phone/member/linkman/myenjoy?gl=gl" {if $gl=='gl'}style="background:#666;color:white;"{/if}>喜欢的攻略</a><a href="/phone/member/linkman/myenjoy" style="float: right;{if $gl!='gl'}background:#666;color:white;{/if}">喜欢的游记</a>
<br/><br/>
    <ul id="result_list" >
    </ul>

</div>
<!--没有相关信息-->
<div class="no-content" id="no-content" style="text-align: center; display: none">
    <img src="{$GLOBALS['cfg_public_url']}images/nocon.png"  width="30%"/>
    <p style="text-align: center;margin-top: 10px">啊哦，暂时没有相关信息</p>
</div>
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="1"/>
<input type="hidden" id="attr_p" value="{$attrid}"/>


<script type="text/html" id="tpl_article_list">
    {{each list as value i}}
    <li class="m-strategy-item">
        <a href="{{value.url}}?model=1" style="width: 100%">
            <div class="item-con">
                <div class="item-img"><img src="{{value.litpic}}" height="220"></div>
                <p class="item-title">
                    <span class="item-tit">{{value.title}}</span>
                    <span class="item-top">{{value.mdd}}|{{value.addtime}}</span>
                </p>
                <div class="item-peo"><div class="peo-ico"><img src="{{value.headimg}}"></div><div class="peo-name">{{value.author}}</div></div>
                <div class="item-mask"></div>
            </div>
        </a>
    </li>
    {{/each}}
</script>

{Common::js('layer/layer.m.js')}
<script>

    var isgl   =  "{$gl}";

   // var

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

        var url = '/phone/member/linkman/ajax_likenotes';
        $.getJSON(url,{page:page,memberid:memberid,isgl:isgl},function(data){

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
