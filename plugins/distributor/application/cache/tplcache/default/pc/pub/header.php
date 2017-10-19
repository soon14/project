<div class="header">
    <div class="logo"><a href="<?php echo $logourl;?>" title="<?php echo $logotitle;?>" target="_blank"><img src="<?php echo $logo;?>" width="200" /></a></div>
    <div class="hd-menu">
        <a href="/plugins/supplier/" id="p_account" class="cur">账号</a>
        <?php if(!empty($line_product)) { ?>
        <a href="/plugins/supplier_line/" id="p_line">线路</a>
        <?php } ?>
        <?php if(!empty($hotel_product)) { ?>
        <a href="/plugins/supplier_hotel/" id="p_hotel" >酒店</a>
        <?php } ?>
        <?php if(!empty($car_product)) { ?>
        <a href="/plugins/supplier_car/" id="p_car">租车</a>
        <?php } ?>
        <?php if(!empty($spot_product)) { ?>
        <a href="/plugins/supplier_spot/" id="p_spot">门票</a>
        <?php } ?>
        <?php if(!empty($tuan_product)) { ?>
        <a href="/plugins/supplier_tuan/" id="p_tuan">团购</a>
        <?php } ?>
        <?php if(!empty($visa_product)) { ?>
        <a href="/plugins/supplier_visa/" id="p_visa">签证</a>
        <?php } ?>
        <?php if(!empty($tongyong_product)) { ?>
           <?php $n=1; if(is_array($tongyong_list)) { foreach($tongyong_list as $t) { ?>
            <a href="/plugins/supplier_tongyong/index/index/typeid/<?php echo $t['id'];?>" id="p_product_<?php echo $t['id'];?>"><?php echo $t['modulename'];?></a>
           <?php $n++;}unset($n); } ?>
        <?php } ?>
        <?php if(!empty($check_product)) { ?>
        <a href="/plugins/supplier_check/" id="p_check">验单</a>
        <?php } ?>
        <?php if(!empty($finance_manage)) { ?>
        <a href="/plugins/supplier_finance/" id="p_finance">财务</a>
        <?php } ?>
    </div>
    <div class="tx">
        <span class="wc">欢迎您，<?php if($userinfo['suppliername']) { ?><?php echo $userinfo['suppliername'];?><?php } else { ?>供应商<?php } ?>
</span>
        <a class="tc" href="<?php echo $cmsurl;?>pc/login/login_out">退出</a>
    </div>
</div><!-- 顶部 -->
<script>
    var SITEURL = "<?php echo $cmsurl;?>";
</script>