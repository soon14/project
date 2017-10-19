<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>我的提现-{$webname}</title>

    {Common::css("style.css,base.css")}

    {Common::js("jquery.min.js")}
    <style>
        .search-btn1 {
            float: left;
            color: #fff;
            width: 130px;
            height: 30px;
            line-height: 30px;
            border: 0;
            font-size: 14px;
            transition: all ease-in-out .3s;
            -webkit-transition: all ease-in-out .3s;
            -moz-transition: all ease-in-out .3s;
            -ms-transition: all ease-in-out .3s;
            background: #4cc34f;
        }
    </style>

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



                        <div class="verify-list-tit"><strong class="bt">提现管理</strong></div>

                        <div class="verify-search-box">

                            <div class="verify-search-con" style="float: left">

                                <span class="search-btn1">可提现金额：￥{$supmoney}</span>

                            </div>
                            <div class="verify-search-con" style="float: right">

                                <input type="button" class="search-btn" value="申请提现"/>

                            </div>

                        </div>

                        <div class="verify-con">

                            <table class="verify-table" width="100%" border="0">

                                <tr>

                                    <th width="10%" height="30" align="center" scope="col">提现金额</th>

                                    <th width="30%" height="30" align="center" scope="col">提现卡号</th>

                                    <th width="20%" height="30" align="center" scope="col">银行卡户名</th>

                                    <th width="10%" height="30" align="center" scope="col">申请提交时间</th>

                                    <th width="10%" height="30" align="center" scope="col">提现状态</th>

                                    <th width="10%" height="30" align="center" scope="col">申请审核时间</th>

                                    <th width="10%" height="30" align="center" scope="col">操作</th>

                                </tr>

                                {loop $data['list'] $v}

                                <tr>

                                    <td><span class="total">&yen;{$v['withdrawamount']}</span></td>

                                    <td><span>{$v['bankcardnumber']}</span></td>

                                    <td><span>{$v['bankaccountname']}</span></td>

                                    <td><span>{date('Y-m-d H:i:s',$v['addtime'])}</span></td>



                                    <td>

                                        <span

                                            class="{if $v['status']==1 }period{else}wxf{/if}">{$v['status_name']}</span>

                                    </td>

                                    <td>

                                        <span>{php} if(!empty($v['finishtime']))

                                                        echo date('Y-m-d H:i:s',$v['finishtime']);

                                               {/php}

                                        </span>

                                    </td>

                                    <td>

                                        <a class="show"

                                           href="{$cmsurl}pc/drawcash/drawcash_detail?id={$v['id']}">查看详情</a>

                                    </td>

                                </tr>

                                {/loop}

                            </table>

                            {$data['pageinfo']}



                            {if empty($data)}

                            <div class="nofound-order">对不起！没有符合条件，请尝试其他搜索条件。</div>

                            <!-- 搜索无结果 -->

                            {/if}



                        </div>

                    </div>

                    <!-- 验单记录 -->



                </div>

            </div>

            {template 'pc/pub/footer'}

        </div>

    </div>

    <!-- 主体内容 -->



</div>



<script>

    $(function () {

        $("#nav_drawcash").addClass('on');



        $(".search-btn").click(function () {

            location.href = "{$cmsurl}pc/drawcash/drawcash_apply";

        });



    });

</script>

</body>

</html>

