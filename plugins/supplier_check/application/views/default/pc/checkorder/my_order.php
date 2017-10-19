<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>我的订单-{$webname}</title>
    {Common::css("style.css,base.css")}
    {Common::js("jquery.min.js")}
</head>

<body>

<div class="page-box">
    {request 'pc/pub/header'}
    <!-- 顶部 -->

    {template 'pc/pub/sidemenu'}
    <!-- 侧边导航 -->

    <div class="main">
        <div class="content-box">

            <div class="frame-box">
                <div class="frame-con">

                    <div class="verify-box">
                        <form id="st_form" method="get" action="{$cmsurl}pc/checkorder/my_order">
                        <div class="verify-list-tit"><strong class="bt">我的订单</strong></div>
                        <div class="verify-search-box">
                            <div class="verify-search-con">
                                <input type="text" name="searchKey" class="search-txt" placeholder="请输入短信码或订单号进行搜索" value="{$get['searchKey']}"/>
                                <input type="button" class="search-btn" value="搜索"/>
                            </div>
                        </div>
                        <div class="verify-con">
                            <table class="verify-table" width="100%" border="0">
                                <tr>
                                    <th width="45%" height="40" align="center" scope="col">订单信息</th>
                                    <th width="10%" height="40" align="center" scope="col">价格</th>
                                    <th width="10%" height="40" align="center" scope="col">数量</th>
                                    <th width="10%" height="40" align="center" scope="col">总额</th>
                                    <th width="10%" height="40" align="center" scope="col">状态</th>
                                    <th width="15%" height="40" align="center" scope="col">操作</th>
                                </tr>
                                {loop $data['list'] $v}
                                <tr>
                                    <td>
                                        <div class="cp">
                                            <a href="{$v['url']}" target="_blank">
                                                <div class="pic">
                                                    <img src="{$v['litpic']}" width="112" height="80" alt="{$v['productname']}"/>
                                                </div>
                                                <div class="con">
                                                    <p class="bt">{$v['productname']}</p>

                                                    <p class="dx">短信码：{$v['smscode']}</p>

                                                    <p class="hm">订单号：{$v['ordersn']}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td><span class="price">&yen;{$v['unitprice']}</span></td>
                                    <td><span class="num">x{$v['num']}</span></td>
                                    <td><span class="total">&yen;{$v['total']}</span></td>
                                    <td>
                                        <span class="{if $v['isconsume']==1 }period{else}wxf{/if}">{if $v['isconsume']==1 }已消费{else}未消费{/if}</span>
                                    </td>
                                    <td>
                                        <a class="show" href="{$cmsurl}pc/checkorder/show_order?id={$v['id']}">查看订单</a>
                                    </td>
                                </tr>
                                {/loop}
                            </table>

                            {$data['pageinfo']}

                            {if empty($data)}
                            <div class="nofound-order">对不起！没有符合条件，请尝试其他搜索条件。</div>
                            <!-- 搜索无结果 -->
                            {/if}
                        </form>
                        </div>
                    </div>
                    <!-- 验单记录 -->

                </div>
            </div>
            {request 'pc/pub/footer'}
        </div>
    </div>
    <!-- 主体内容 -->

</div>

<script>
    $(function(){
        $("#nav_my_order").addClass('on');
        $('body').delegate('.add-list','click',function() {
            $(this).parent().after('<li><input name="num[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>');
            $(this).remove();
        });
        $(".search-btn").click(function(){
            $("#st_form").submit();
        });
    });
</script>
</body>
</html>
