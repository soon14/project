<div class="product-msg">
    <h3 class="pm-tit"><strong class="ico03">游客信息</strong></h3>
    <div class="table-msg">
        <table width="100%" border="0">
            <tr>
                <th width="30%" height="40" scope="col"><span class="l-con">姓名</span></th>
                <th width="30%" scope="col">手机号</th>
                <th width="40%" scope="col">证件号</th>

            </tr>
            {st:member action="order_tourer" orderid="$info['id']" return="tourer"}
                {loop $tourer $t}
                <tr>
                    <td height="40"><span class="l-con">{$t['tourername']}</span></td>
                    <td>{$t['mobile']}</td>
                    <td>{$t['cardnumber']}({$t['cardtype']})</td>

                </tr>
                {/loop}
            {/st}

        </table>
    </div>
</div>
{if !empty($info['roombalancenum'])}
<div class="product-msg">
    <h3 class="pm-tit"><strong class="ico04">单房差</strong></h3>
    <div class="table-msg">
        <table width="100%" border="0">
            <tr>
                <th width="30%" height="40" scope="col"><span class="l-con">单房差</span></th>
                <th width="20%" scope="col">购买数量</th>
                <th width="30%" scope="col">支付方式</th>
                <th width="20%" scope="col">金额</th>
            </tr>
            <tr>
                <td height="40">单房差</td>
                <td height="40">{$info['roombalancenum']}</td>
                <td>
                    {if $info['roombalance_paytype']==1}
                    预付
                    {else}
                    到店付
                    {/if}
                </td>
                <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['roombalance']}</td>
            </tr>


        </table>
    </div>
</div>
{/if}
{st:member action="order_insurance" ordersn="$info['ordersn']" return="insurance"}
{if !empty($insurance)}
<div class="product-msg">
    <h3 class="pm-tit"><strong class="ico05">保险方案</strong></h3>
    <div class="table-msg">
        <table width="100%" border="0">
            <tr>
                <th width="30%" height="40" scope="col">保险名称</th>
                <th width="10%" scope="col">保险期限</th>
                <th width="10%" scope="col">单价</th>
                <th width="25%" scope="col">数量</th>
                <th width="25%" scope="col">总价</th>
            </tr>

            {loop $insurance $ins}
            <tr>
                <td height="40">{$ins['productname']}</td>
                <td>
                   {$ins['period']}
                </td>
                <td>
                   {$ins['productprice']}
                </td>
                <td>{$ins['insurednum']}</td>
                <td>
                    {$ins['payprice']}
                </td>
            </tr>
           {/loop}


        </table>
    </div>
</div>
{/if}
{st:member action="order_bill" orderid="$info['id']" return="bill"}
{if !empty($bill)}
<div class="product-msg">
    <h3 class="pm-tit"><strong class="ico06">发票信息</strong></h3>
    <div class="table-msg">
        <table width="100%" border="0">
            <tr>
                <th width="20%" height="40" scope="col">发票抬头</th>
                <th width="20" scope="col">接收人</th>
                <th width="20%" scope="col">发票明细</th>
                <th width="40%" scope="col">邮寄地址</th>
            </tr>

            <tr>
                <td height="40">{$bill['title']}</td>
                <td>
                    {$bill['receiver']}
                </td>
                <td>
                    旅游费
                </td>
                <td>{$bill['province']} {$bill['city']} {$bill['address']}</td>

            </tr>



        </table>
    </div>
</div>
{/if}