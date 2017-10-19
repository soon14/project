<div class="order-item">
    <table class="order-msg-table" width="100%" border="0">
        <tr>
            <th width="30%" height="38" scope="col">套餐</th>
            <th width="20%" scope="col">类型</th>
            <th width="20%" scope="col">出行日期</th>
            <th width="10%" scope="col">单价</th>
            <th width="10%" scope="col">人数</th>
            <th width="10%" scope="col">金额</th>
        </tr>
        <?php if(!empty($info['price']) && !empty($info['dingnum'])) { ?>
        <tr>
            <td height="38"><?php echo $info['productname'];?></td>
            <td>成人</td>
            <td><?php echo $info['usedate'];?></td>
            <td><?php echo $info['price'];?></td>
            <td><?php echo $info['dingnum'];?></td>
            <td>&yen;<?php echo intval($info['price']) * intval($info['dingnum']);?></td>
        </tr>
        <?php } ?>
        <?php if(!empty($info['childprice']) && !empty($info['childnum'])) { ?>
        <tr>
            <td height="38"><?php echo $info['productname'];?></td>
            <td>儿童</td>
            <td><?php echo $info['usedate'];?></td>
            <td><?php echo $info['childprice'];?></td>
            <td><?php echo $info['childnum'];?></td>
            <td>&yen;<?php echo intval($info['childprice']) * intval($info['childnum']);?></td>
        </tr>
        <?php } ?>
        <?php if(!empty($info['oldprice']) && !empty($info['oldnum'])) { ?>
        <tr>
            <td height="38"><span class="l-con"><?php echo $info['productname'];?></span></td>
            <td>老人</td>
            <td><?php echo $info['usedate'];?></td>
            <td><?php echo $info['oldprice'];?></td>
            <td><?php echo $info['oldnum'];?></td>
            <td>&yen;<?php echo intval($info['oldprice']) * intval($info['oldnum']);?></td>
        </tr>
        <?php } ?>
    </table>
</div>
<div class="order-item">
    <div class="os-tit">游客信息</div>
    <table class="user-msg-table" width="100%" border="0">
        <tr>
            <th width="20%" height="38" scope="col">姓名</th>
            <th width="20%" scope="col">手机号</th>
            <th scope="col">证件号</th>
        </tr>
        <?php $n=1; if(is_array($info['tourer'])) { foreach($info['tourer'] as $t) { ?>
        <tr>
            <td height="38"><span class="l-con"><?php echo $t['tourername'];?></span></td>
            <td><?php echo $t['mobile'];?></td>
            <td><?php echo $t['cardnumber'];?><span class="people-id">（<?php echo $t['cardtype'];?>)</td>
        </tr>
        <?php $n++;}unset($n); } ?>
    </table>
</div>
<?php if(!empty($info['roombalancenum'])) { ?>
<div class="order-item">
    <div class="os-tit">单房差</div>
    <div class="item-con">
        <ul class="nr">
            <li>购买数量： <?php echo $info['roombalancenum'];?></li>
            <li>支付方式：
                <?php if($info['roombalance_paytype']==1) { ?>
                预付
                <?php } else { ?>
                到店付
                <?php } ?>
</li>
            <li>金额：&yen;<?php echo $info['roombalance'];?></li>
        </ul>
    </div>
</div><!-- 单房差 -->
<?php } ?>
<?php if(!empty($info['insurance'])) { ?>
<div class="order-item">
    <div class="os-tit">保险方案</div>
    <div class="item-con">
        <?php $n=1; if(is_array($info['insurance'])) { foreach($info['insurance'] as $ins) { ?>
        <ul class="nr">
            <li><?php echo $ins['productname'];?></li>
            <li>数量：<?php echo $ins['insurednum'];?></li>
            <li>金额：&yen;<?php echo $ins['payprice'];?></li>
        </ul>
        <?php $n++;}unset($n); } ?>
    </div>
</div><!-- 保险方案 -->
<?php } ?>
<?php if(!empty($info['bill'])) { ?>
    <div class="order-item">
        <div class="os-tit">发票信息</div>
        <div class="item-con">
            <ul class="receipt">
                <li>发票抬头：<?php echo $info['bill']['title'];?></li>
                <li>发票明细：<?php echo $info['bill']['receiver'];?></li>
                <li>配送地址：<?php echo $info['bill']['address'];?></li>
            </ul>
        </div>
    </div>
<?php } ?>
