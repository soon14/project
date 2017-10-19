<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>提现详情-<?php echo $webname;?></title>
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
    <style>
        .order-con .order-msg ul li .itemtitle
        {
            width: 120px;
        }
    </style>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <?php echo  Stourweb_View::template('pc/pub/sidemenu');  ?>
    <div class="main">
        <div class="content-box">
            <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
            <div class="frame-box">
                <div class="frame-con">
                    <div class="order-box">
                        <div class="order-show-tit"><strong class="bt">提现详情</strong></div>
                        <div class="order-con">
                            <div class="order-msg">
                                <ul>
                                    <li><strong class="itemtitle">提现金额：</strong><span class="jg">&yen;<?php echo $info['withdrawamount'];?></span>
                                    </li>
                                    <li><strong class="itemtitle">提现卡号：</strong><?php echo $info['bankcardnumber'];?></li>
                                    <li><strong class="itemtitle">银行卡户名：</strong><?php echo $info['bankaccountname'];?></li>
                                    <li><strong class="itemtitle">开卡银行：</strong><?php echo $info['bankname'];?></li>
                                    <li><strong class="itemtitle">申请提交时间：</strong><?php echo date('Y-m-d H:i:s',$info['addtime']);?></li>
                                    <li><strong class="itemtitle">备注说明：</strong><?php echo $info['description'];?></li>
                                    <li><strong class="itemtitle">进度状态：</strong>
                                        <?php if($info['status']==0) { ?>
                                        <span class="dfk"><?php echo $info['status_name'];?></span>
                                        <?php } else if($info['status']==2) { ?>
                                        <span class="dcl"><?php echo $info['status_name'];?></span>
                                        <?php } else { ?>
                                        <span class="ywc"><?php echo $info['status_name'];?></span>
                                        <?php } ?>
                                    </li>
                                    <li><strong class="itemtitle">申请审核时间：</strong>
                                        <?php 
                                        if(!empty($info['finishtime']))
                                            echo date('Y-m-d H:i:s',$info['finishtime']);
                                        ?>
                                    </li>
                                    <li><strong class="itemtitle">审核说明：</strong><?php echo $info['audit_description'];?></li>
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
        $(".back-btn").click(function () {
            location.href = "<?php echo $cmsurl;?>pc/finance/drawcash";
        });
    });
</script>
</body>
</html>
