<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>提现详情-{$webname}</title>
    {Common::css("style.css,base.css")}
    {Common::js("jquery.min.js")}
    <style>
        .order-con .order-msg ul li .itemtitle
        {

            width: 120px;
        }
    </style>
</head>

<body>

<div class="page-box">

    {request 'pc/pub/header'}

    {template 'pc/pub/sidemenu'}

    <div class="main">
        <div class="content-box">

            <div class="frame-box">
                <div class="frame-con">

                    <div class="order-box">
                        <div class="order-show-tit"><strong class="bt">提现详情</strong></div>
                        <div class="order-con">

                            <div class="order-msg">
                                <ul>
                                    <li><strong class="itemtitle">提现金额：</strong><span class="jg">&yen;{$info['withdrawamount']}</span>
                                    </li>
                                    <li><strong class="itemtitle">提现卡号：</strong>{$info['bankcardnumber']}</li>
                                    <li><strong class="itemtitle">银行卡户名：</strong>{$info['bankaccountname']}</li>
                                    <li><strong class="itemtitle">开卡银行：</strong>{$info['bankname']}</li>
                                    <li><strong class="itemtitle">申请提交时间：</strong>{date('Y-m-d H:i:s',$info['addtime'])}</li>
                                    <li><strong class="itemtitle">备注说明：</strong>{$info['description']}</li>
                                    <li><strong class="itemtitle">进度状态：</strong>
                                        {if $info['status']==0}
                                        <span class="dfk">{$info['status_name']}</span>
                                        {elseif $info['status']==2}
                                        <span class="dcl">{$info['status_name']}</span>
                                        {else}
                                        <span class="ywc">{$info['status_name']}</span>
                                        {/if}
                                    </li>
                                    <li><strong class="itemtitle">申请审核时间：</strong>
                                        {php}
                                        if(!empty($info['finishtime']))
                                            echo date('Y-m-d H:i:s',$info['finishtime']);
                                        {/php}
                                    </li>
                                    <li><strong class="itemtitle">审核说明：</strong>{$info['audit_description']}</li>
                                </ul>

                            </div>

                        </div>

                        <div class="back-prev"><a class="back-btn" href="#">返回</a></div>

                    </div>
                    <!-- 订单详情 -->

                </div>
            </div>

            <div class="st-record">Copyright@2015思途CMS</div>

        </div>
    </div>
    <!-- 主体内容 -->

</div>
<script>
    $(function () {
        $("#nav_drawcash").addClass('on');
        $(".back-btn").click(function () {
            location.href = "{$cmsurl}pc/drawcash/list";
        });

    });
</script>
</body>
</html>
