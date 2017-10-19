<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>订单详情</title>
    <meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php echo Common::css("style.css,base.css");?>
    <?php echo Common::js("jquery.min.js");?>
</head>
<?php echo  Stourweb_View::template("mobile/pub");  ?>
<body>
<header class="header-top">
    <div class="ht-back"></div>
    <h1 class="ht-h1">订单详情</h1>
</header>
<section class="content">
    <div class="mark-list-box">
        <div class="mark-list-con">
            <ul>
                <li>
                    <div <?php if($data['isconsume']==0) { ?>class="badge-before"<?php } else { ?>class="badge-after"<?php } ?>
></div>
        <div class="num"><span>消费码：<?php echo $data['smscode'];?></span></div>
        <div class="nr">
            <div class="pic"><img src="<?php echo $data['litpic'];?>" alt="asdf" /></div>
            <div class="txt">
                <p><?php echo $data['productname'];?></p>
                <p class="sz"></p>
            </div>
        </div>
        <div class="cp">
            <?php if($data['pricetype'] != '') { ?><p>价格类型：<span><?php echo $data['pricetype'];?></span></p><?php } ?>
            <p>下单时间：<?php if($data['addtime']) { ?><?php echo date('Y-m-d H:i', $data['addtime']);?><?php } ?>
</p>
            <p>验票时间：<?php if($data['consumetime']) { ?><?php echo date('Y-m-d H:i', $data['consumetime']);?><?php } ?>
</p>
        </div>
        <div class="sl">
            <p>预订电话：<?php echo $data['linktel'];?></p>
            <p>购买数量：<span class="people"><?php if($data['dingnum']) { ?>成人 x<?php echo $data['dingnum'];?>&nbsp;&nbsp;<?php } ?>
<?php if($data['oldnum']) { ?>老人 x<?php echo $data['oldnum'];?>&nbsp;&nbsp;<?php } ?>
<?php if($data['childnum']) { ?>小孩 x<?php echo $data['childnum'];?>&nbsp;&nbsp;<?php } ?>
</span></p>
        </div>
        <div class="hj"><span style="float:left"><?php if($data['paytype']==4) { ?>景区支付<?php } else { ?>在线支付<?php } ?>
</span>合计：<span>&yen;<?php echo $data['total'];?></span></div>
        </li>
        </ul>
        <?php if($data['isconsume']==0) { ?>
        <a class="confirm-btn" href="javascript:;" data-smscode="<?php echo $data['smscode'];?>" data-id="<?php echo $data['id'];?>">确认验单</a>
        <?php echo Common::js("layer/layer.js");?>
        <script>
            $(function(){
                $(".confirm-btn").click(function(){
                    var smscode = $(this).attr('data-smscode');
                    var smsid = $(this).attr('data-id');
                    $.ajax({
                        type:'POST',
                        url:SITEURL+'mobile/order/ajax_check_order',
                        data:{smscode:smscode,id:smsid},
                        dataType:'json',
                        success:function(data){
                            if(data.status){
                                layer.msg("验单成功", {
                                    icon: 6,time:1000
                                }, function(){
                                    window.location.href = location.href;
                                });
                            }// fengjishu 08.10 加入 else
                            else {
                                layer.msg(data.msg, {icon:5});
                            }
                        }
                    })
                })
            })
        </script>
        <?php } ?>
        <?php if($from=='scan' && $data['isconsume']==1) { ?>
        <a class="confirm-btn" href="<?php echo $cmsurl;?>mobile/order/scan">继续验单</a>
        <?php } ?>
    </div><!-- list -->
</section>
<script>
    var f = "<?php echo $from;?>";
    $(function(){
        $('.ht-back').click(function(){
            if(f=='scan'){
                window.location.href = SITEURL+'mobile/'
            }else{
                history.go(-1);
            }
        })
    })
</script>
</body>
</html>
