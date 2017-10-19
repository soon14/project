<div class="order-item">
    <table class="order-msg-table" width="100%" border="0">
        <tr>
            <th width="50%" height="40" scope="col"><span class="l-con">产品名称</span></th>
            <th width="15%" scope="col">使用日期</th>
            <th width="10%" scope="col">数量</th>
            <th width="15%" scope="col">单价</th>
            <th width="10%" scope="col">总价</th>
        </tr>
        <tr>
            <td height="40"><span class="l-con"><?php echo $info['productname'];?></span></td>
            <td><?php echo $info['usedate'];?></td>
            <td><?php echo $info['dingnum'];?></td>
            <td><?php echo $info['price'];?></td>
            <td>&yen;<?php echo $info['total'];?></td>
        </tr>
    </table>
</div>
