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
        {if !empty($info['price']) && !empty($info['dingnum'])}
        <tr>
            <td height="38">{$info['productname']}</td>
            <td>成人</td>
            <td>{$info['usedate']}</td>
            <td>{$info['price']}</td>
            <td>{$info['dingnum']}</td>
            <td>&yen;{php}echo intval($info['price']) * intval($info['dingnum']);{/php}</td>
        </tr>
        {/if}
        {if !empty($info['childprice']) && !empty($info['childnum'])}
        <tr>
            <td height="38">{$info['productname']}</td>
            <td>儿童</td>
            <td>{$info['usedate']}</td>
            <td>{$info['childprice']}</td>
            <td>{$info['childnum']}</td>
            <td>&yen;{php}echo intval($info['childprice']) * intval($info['childnum']);{/php}</td>

        </tr>
        {/if}
        {if !empty($info['oldprice']) && !empty($info['oldnum'])}
        <tr>
            <td height="38"><span class="l-con">{$info['productname']}</span></td>
            <td>老人</td>
            <td>{$info['usedate']}</td>
            <td>{$info['oldprice']}</td>
            <td>{$info['oldnum']}</td>
            <td>&yen;{php}echo intval($info['oldprice']) * intval($info['oldnum']);{/php}</td>

        </tr>
        {/if}
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
        {loop $info['tourer'] $t}
        <tr>
            <td height="38"><span class="l-con">{$t['tourername']}</span></td>
            <td>{$t['mobile']}</td>
            <td>{$t['cardnumber']}<span class="people-id">（{$t['cardtype']})</td>

        </tr>
        {/loop}

    </table>
</div>


{if !empty($info['roombalancenum'])}
<div class="order-item">
    <div class="os-tit">单房差</div>
    <div class="item-con">
        <ul class="nr">
            <li>购买数量： {$info['roombalancenum']}</li>
            <li>支付方式：
                {if $info['roombalance_paytype']==1}
                预付
                {else}
                到店付
                {/if}</li>
            <li>金额：&yen;{$info['roombalance']}</li>
        </ul>
    </div>
</div><!-- 单房差 -->
{/if}
{if !empty($info['insurance'])}
<div class="order-item">
    <div class="os-tit">保险方案</div>
    <div class="item-con">
        {loop $info['insurance'] $ins}
        <ul class="nr">
            <li>{$ins['productname']}</li>
            <li>数量：{$ins['insurednum']}</li>
            <li>金额：&yen;{$ins['payprice']}</li>
        </ul>
        {/loop}
    </div>
</div><!-- 保险方案 -->
{/if}
{if !empty($info['bill'])}
    <div class="order-item">
        <div class="os-tit">发票信息</div>
        <div class="item-con">
            <ul class="receipt">
                <li>发票抬头：{$info['bill']['title']}</li>
                <li>发票明细：{$info['bill']['receiver']}</li>
                <li>配送地址：{$info['bill']['address']}</li>
            </ul>
        </div>
    </div>
{/if}