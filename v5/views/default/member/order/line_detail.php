<div class="product-msg">
    <div class="table-msg">
        <table width="100%" border="0">
            <tr>
                <th width="45%" height="40" scope="col"><span class="l-con">产品名称</span></th>
                <th width="10%" scope="col">类型</th>
                <th width="15%" scope="col">出行日期</th>
                <th width="10%" scope="col">单价</th>
                <th width="10%" scope="col">人数</th>
                <th width="10%" scope="col">总价</th>
            </tr>
            {if !empty($info['price']) && !empty($info['dingnum'])}
            <tr>
                <td height="40"><span class="l-con">{$info['productname']}</span></td>
                <td>成人</td>
                <td>{$info['usedate']}</td>
                <td>{$info['price']}</td>
                <td>{$info['dingnum']}</td>
                <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{php}echo intval($info['price']) * intval($info['dingnum']);{/php}</td>

            </tr>
            {/if}
            {if !empty($info['childprice']) && !empty($info['childnum'])}
            <tr>
                <td height="40"><span class="l-con">{$info['productname']}</span></td>
                <td>儿童</td>
                <td>{$info['usedate']}</td>
                <td>{$info['childprice']}</td>
                <td>{$info['childnum']}</td>
                <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{php}echo intval($info['childprice']) * intval($info['childnum']);{/php}</td>

            </tr>
            {/if}

            {if !empty($info['oldprice']) && !empty($info['oldnum'])}
            <tr>
                <td height="40"><span class="l-con">{$info['productname']}</span></td>
                <td>老人</td>
                <td>{$info['usedate']}</td>
                <td>{$info['oldprice']}</td>
                <td>{$info['oldnum']}</td>
                <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{php}echo intval($info['oldprice']) * intval($info['oldnum']);{/php}</td>

            </tr>
            {/if}

        </table>
    </div>
</div>