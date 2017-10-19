<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>供应商管理系统-<?php echo $webname;?></title>
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<body>
<div class="page-box">
    <?php echo Request::factory('pc/pub/header')->execute()->body(); ?>
    <!-- 顶部 -->
    <?php echo  Stourweb_View::template('pc/pub/sidemenu');  ?>
    <!-- 侧边导航 -->
    <div class="main">
        <div class="content-box">
            <?php echo  Stourweb_View::template("pc/pub/qualifyalert");  ?>
            <div class="frame-box">
                <div class="frame-con">
                    <div class="order-show-box">
                        <div class="order-show-tit"><strong class="bt">订单详情</strong></div>
                        <div class="order-show-con">
                            <ul>
                                <li class="msg-num">短信码： <?php echo $data['smscode'];?></li>
                                <li class="nr">
                                    <a href="<?php echo $data['url'];?>">
                                        <div class="pic"><img src="<?php echo $data['litpic'];?>" alt="<?php echo $data['productname'];?>"/></div>
                                        <div class="txt">
                                            <p class="bt"><?php echo $data['productname'];?></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="cp-msg">
                                    <p>订单号：<span><?php echo $data['ordersn'];?></span></p>
                                    <?php if($data['pricetype'] != '') { ?><p>价格类型：<span><?php echo $data['pricetype'];?></span></p><?php } ?>
                                    <p>下单时间：<span><?php if($data['addtime']) { ?><?php echo date('Y-m-d H:i', $data['addtime']);?><?php } ?>
</span></p>
                                    <p>付款时间：<span><?php if($data['finishtime']) { ?><?php echo date('Y-m-d H:i', $data['finishtime']);?><?php } ?>
</span></p>
                                </li>
                                <li class="user-msg">
                                    <p>预定电话：<span><?php echo $data['linktel'];?></span></p>
                                    <p>购买数量：<span><?php if($data['dingnum']) { ?>成人 x<?php echo $data['dingnum'];?>&nbsp;&nbsp;<?php } ?>
<?php if($data['oldnum']) { ?>老人 x<?php echo $data['oldnum'];?>&nbsp;&nbsp;<?php } ?>
<?php if($data['childnum']) { ?>小孩 x<?php echo $data['childnum'];?>&nbsp;&nbsp;<?php } ?>
</span></p>
                                </li>
                                <li class="total">
                                    <span class="jg">总额：<strong>&yen;<?php echo $data['total'];?></strong></span>
                                    <?php if($data['isconsume']!=1 ) { ?><a class="yd-btn check-order"  href="javascript:;" data-id="<?php echo $data['id'];?>">确认验单</a><?php } ?>
                                </li>
                            </ul>
                            <?php if($data['isconsume']==1 ) { ?>
                            <div class="order-after-ico"></div>
                            <?php } else { ?>
                            <div class="order-before-ico"></div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- 订单详情 -->
                </div>
            </div>
            <?php echo  Stourweb_View::template('pc/pub/footer');  ?>
        </div>
    </div>
    <!-- 主体内容 -->
</div>
<?php echo Common::js("layer/layer.js");?>
<script>
    $(function(){
        $("#nav_check_record").addClass('on');
        $(".check-order").click(function(){
            $.post('<?php echo $cmsurl;?>pc/checkorder/ajax_check_order', {
                'id': $(this).attr("data-id"),
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
