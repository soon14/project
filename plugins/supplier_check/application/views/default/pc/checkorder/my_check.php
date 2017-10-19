<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>我要验单-{$webname}</title>

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

                        <div class="verify-list-tit"><strong class="bt">我要验单</strong></div>

                        <div class="verify-search-box">

                            <form id="st_form" method="get" action="{$cmsurl}pc/checkorder/my_check">

                                <div class="verify-search-list">

                                    <ul>

                                        {if empty($get['searchKey'])}



                                        <li><input name="searchKey[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>

                                        {else}

                                        {loop $get['searchKey'] $v}

                                        <li>

                                            <input name="searchKey[]" type="text" class="num-list" placeholder="" value="{$v}"/>

                                            {if $n == count($get['searchKey'])}<span class="add-list">增加</span>{/if}

                                        </li>

                                        {/loop}

                                        {/if}

                                    </ul>

                                </div>

                                <div class="search-all-btn"><a href="javascript:void(0)">搜索</a></div>

                            </form>

                        </div>

                        <div class="verify-con">

                            <table class="verify-table" width="100%" border="0">

                                <tr>

                                    <th width="40%" height="40" align="center" scope="col">订单信息</th>

                                    <th width="10%" height="40" align="center" scope="col">价格</th>

                                    <th width="10%" height="40" align="center" scope="col">数量</th>
                                    <th width="10%" height="40" align="center" scope="col">使用时间</th>
                                    <th width="10%" height="40" align="center" scope="col">总额</th>

                                    <th width="10%" height="40" align="center" scope="col">状态</th>

                                    <th width="10%" height="40" align="center" scope="col">操作</th>

                                </tr>

                                {loop $data['orderData'] $v}
                                <?php $time  = time()*1-86400;
                                  $usedate   =  strtotime($v['usedate']);
                                ?>
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
                                    <td><span class="num">{$v['usedate']}</span></td>

                                    <td><span class="total">&yen;{$v['total']}</span></td>

                                    <td>

                                        <span class="{if $v['isconsume']==1 }period{else}wxf{/if}"><?php if($time>$usedate){ ?>已过期<?php }else{?>{if $v['isconsume']==1 }已消费{else}未消费{/if}<?php }?></span>

                                    </td>

                                    <td>

                                        <a class="show" href="{$cmsurl}pc/checkorder/show_order?id={$v['id']}">查看订单</a>
                                        <?php if($time>$usedate){ ?><?php }else{?>
                                        {if $v['isconsume']!=1 }<a class="now-yd check-order" href="javascript:;" data-id="{$v['id']}"<?php if($time>$usedate){ ?>style="background: #E3E8F3" <?php }?> >确认验单</a>{/if}
                                         <?php }?>

                                    </td>

                                </tr>

                                {/loop}

                            </table>

                            {if !empty($data['noOrderData'])}

                            <div class="error-order">

                                抱歉！没有找到{loop $data['noOrderData'] $v}{if $n > 1}、{/if}<span>{$v}</span>{/loop}订单，请尝试其他搜索条件。

                            </div>

                            {/if}

                            <!-- 搜索无结果 -->

                        </div>

                    </div>

                    <!-- 我要验单 -->



                </div>

            </div>



            {request 'pc/pub/footer'}



        </div>

    </div>

    <!-- 主体内容 -->



</div>

{Common::js("layer/layer.js")}

<script>

    $(function(){

        $("#nav_my_check").addClass('on');

        $('body').delegate('.add-list','click',function() {

            $(this).parent().after('<li><input name="num[]" type="text" class="num-list" placeholder="请输入短信码进行搜索"/><span class="add-list">增加</span></li>');

            $(this).remove();

        });

        $(".search-all-btn a").click(function(){

            $("#st_form").submit();

        });

        //验单

        $(".check-order").click(function(){

            $.post('{$cmsurl}pc/checkorder/ajax_check_order', {

                'id': $(this).attr("data-id")

            },function(data) {

                if (data.status == 1) {

                    layer.msg(data.msg, {icon:6, end: function(){

                        window.location.reload();

                    }});

                } else {

                    layer.msg(data.msg, {icon:5});

                }

            },'json');

        });

    });

</script>

</body>

</html>

