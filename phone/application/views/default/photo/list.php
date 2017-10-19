<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {php echo Common::css('amazeui.css,style.css,extend.css');}
    {php echo Common::js('jquery.min.js,amazeui.js,layer/layer.m.js,template.js');}
    <script>
        $(function () {
            $('#my-st-slide').offCanvas('close');
        })
    </script>
</head>

<body>
{request "pub/header/typeid/$typeid"}

<section>

    <div class="mid_content">

        <div class="term-list">
            {request "pub/select/typeid/$typeid/destid/$destid"}
        </div>
        <!--栏目筛选-->
        <div class="gl_hot_list" id="list-content">
            <ul id="result_list">

            </ul>
            <div class="tuan_more" id="btn_getmore"><a class="cursor">加载更多</a></div>
        </div>
        <!--没有相关信息-->
        <div class="no-content" id="no-content" style="display: none">
            <img src="{$GLOBALS['cfg_public_url']}images/nocon.png"/>
            <p>啊哦，暂时没有相关信息</p>
        </div>
    </div>
    <input type="hidden" id="page" value="1"/>
</section>
{request "pub/code"}
{request "pub/footer"}
<script type="text/html" id="tpl_photo_item">
    {{each list as value i}}
    <li>
        <a href="{{value.url}}">
            <div class="pic"><img src="{{value.litpic}}" alt="{{value.title}}"/></div>
            <div class="con">
                <p class="bt">{{value.title}}</p>

                <p class="txt">{{value.description}}</p>

                <p class="data">
                    <span class="num">{{value.shownum}}</span>
                </p>
            </div>
        </a>
    </li>
    {{/each}}
</script>
</body>
<script>

    //初始页码
    var initpage = '{$page}';
    $(function () {
        if(initpage !=  $("#page").val()){
            $("#page").val(initpage);
        }
        //pub/select 确定选择点击事件在这里重写.
        $('.sure_btn').click(function () {
            $("#page").val(1);
            $('.tabcon').hide();
            $('.tab_bottom_btn').hide();
            var url = SITEURL + 'photos/' + get_url();

            window.location.href = url;

        })

        //获取更新数据
        $('#btn_getmore').click(function () {
            get_data();
        })

        //第一次加载数据
        get_data();
    })

    //获取list地址
    function get_url() {
        //获取选中的目的地
        var pinyin = $("#destpy").val();
        var url = pinyin;
        //获取选中的属性
        var attr = [];
        $('#lsit-child').find("li[class^='gattr']").each(function (i, obj) {
            if ($(obj).attr('data-type') == 'attrid' && $(this).hasClass('on')) {
                attr.push($(this).attr('data-id'));
            }
        })
        var attrid = $("#attrid").val();
        if (attr.length > 0) {
            attrid = attr.join('_');
        }
        if (attrid.length == 0) {
            attrid = 0;
        }
        //排序规则
        var sorttype = $("#sorttype").val()
        //var sorttype = $("#sorttype").val();
        var page = $("#page").val();

        url += '-' + attrid + '-' + page + '-' + sorttype;
        return url;
    }

    //ajax获取数据
    var contentNum = 0;
    function get_data() {
        var paramUrl = get_url();
        var url = SITEURL + 'photo/ajax_photo_more/' + paramUrl + '?' + Math.random();
        layer.open({
            type: 2,
            content: '',
            time: 20
        });
        $.post(url, {}, function (data) {
            if (data.list.length > 0) {
                var itemHtml = template('tpl_photo_item', data);
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
        }, 'json')

    }
</script
</html>
