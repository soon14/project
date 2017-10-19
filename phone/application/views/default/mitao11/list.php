<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <title>热门</title>
    {Common::css('lines_all.css')}
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
    </style>
</head>

<body class="bj-hui" style="padding: 10px">
{request "pub/header/typeid/$typeid"}
<section>

    <div class="mid_content">
        <!--栏目筛选-->
        <div class="st_list_line" id="list-content">
            <ul id="result_list">
            </ul>
            <div class="tuan_more" id="btn_getmore"><a class="cursor" style="color: #666">加载更多</a></div>
        </div>
        <!--没有相关信息-->
        <div class="no-content" id="no-content" style="display: none">
            <img src="{$GLOBALS['cfg_public_url']}images/nocon.png"/>
            <p>啊哦，暂时没有相关信息</p>
        </div>
    </div>
    <input type="hidden" id="keyword" value="{$keyword}"/>
    <input type="hidden" id="page" value="{$page}"/>
</section>
<script type="text/html" id="tpl_hotel_item">
    {{each list as value i}}
    <a href="{{value.url}}?is_expire={{value.cha_time}}">
    <div class=" bm-list" style="margin-top: 5px;">
        <div class="pic-baoming">
            <div class="bm-zhanshitu"><img src="{{value.newlitpic}}" width="100%"></div>
            <div class="zhedang">
                <p class="biaoti-yj">{{value.title}}</p>
                <p class="fbiaoti-yj">组织：一起流年俱乐部</p>
            </div>
            {{if value.cha_time>=0}}<div class="zzjx">活动已结束</div>{{else}}<div class="zzjs">正在进行</div>{{/if}}
            <p class="fps"><!--分1批--></p>
        </div>
        <div class="bm-zkl">
            <div class="djq left">
                <p class="zhi"><span>¥{{value.storeprice}}</span></p>
                <p class="zt">费用</p>
            </div>
            <div class="yue left">
                <p class="zhi">{{value.selfDriMdd}}</p>
                <p class="zt">地点</p>
            </div>
            <div class="jf left">
                <p class="zhi">{{value.linedate}}</p>
                <p class="zt">自驾时间</p>
            </div>
            <div class="clear"></div>
        </div>
        <p class="bmrs">
            已有<span>{{value.sellnum}}</span>人报名
            <i>&nbsp;&nbsp;</i>
            {{if value.stock<0}}{{else}}剩余{{/if}}
            <span>{{if value.stock<0}}不限 {{else}} {{value.stock}} {{/if}}</span>名额
        </p>
        <a href="{{value.url}}?is_expire={{value.cha_time}}" class="but-bm">我要报名</a>
    </div>
    </a>

    {{/each}}
</script>

{Common::js('layer/layer.m.js')}

<script>

    //初始页码
    $(function () {
        //获取更新数据
        $('#btn_getmore').click(function () {
            get_data();
        });
        //第一次加载数据
        get_data();
    })

    //获取list地址
    function get_url() {
        //获取选中的目的地
       // var url = $("#destpy").val();
        var url = "all";
        //获取dayid
        //var dayid = $("#dayid").val();
        var dayid = 0;
        //获取priceid
       // var priceid = $("#priceid").val();
        var priceid = 0;
        //startcityid
        //var startcityid = $("#startcityid").val();
        var startcityid = 0;
        //获取选中的属性
//        var attr = [];
//        $('#lsit-child').find("li[class^='gattr']").each(function (i, obj) {
//            if ($(obj).attr('data-type') == 'attrid' && $(this).hasClass('on')) {
//                attr.push($(this).attr('data-id'));
//            }
//        })

       // var attrid = $("#attrid").val();
//        if (attr.length > 0) {
//            attrid = attr.join('_');
//        }
        var attrid = 0;
        //排序规则
        //var sorttype = $("#sorttype").val();
        var sorttype = 0;
        //搜索名称
        var keyword = $('#keyword').val();
        //当前页 page
        var page = $("#page").val();
        //alert(page);
        keyword = keyword == '' ? 0 : keyword;

        url += '-' + dayid + '-' + priceid + '-' + sorttype + '-0-' + startcityid + '-' + attrid + '-' + page;
        if (keyword != 0) {
            url += '?keyword=' + keyword;
        }
        return url;
    }

    //ajax获取数据
    var contentNum = 0;
    function get_data() {
        var paramUrl = get_url();
       // alert(paramUrl);
        var url = SITEURL + 'mitao/ajax_line_more/' + paramUrl;

        layer.open({
            type: 2,
            content: '',
            time: 20

        });
        $.getJSON(url, {}, function (data) {
            if (data.list.length > 0) {
                var itemHtml = template('tpl_hotel_item', data);
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
            layer.closeAll();
        })
    }
</script>
{request "pub/code"}
{request "pub/footer"}

</body></html>