<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>订单详情-{$webname}</title>

    {Common::css('user.css,base.css,extend.css')}
    {Common::css('common/bootstrap-min.css,common/public.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
    <style>
      .expired{
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            float: right;
            font-size: 16px;
            height: 34px;
            line-height: 34px;
            margin-right: 25px;
            text-align: center;
            width: 120px;
        }
    </style>

</head>



<body>



{request "pub/header"}



<div class="big">

    <div class="wm-1200">



        <div class="st-guide">

            <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;会员中心&nbsp;&nbsp;&gt;&nbsp;&nbsp;订单详情

        </div><!--面包屑-->



        <div class="st-main-page">



            {include "member/left_menu"}

            <?php $time      = time()*1-86400;
            $usedate   = strtotime($info['usedate']); ?>

            <div class="user-cont-box">

                <div class="user-order-show">

                    {if $info['status']=='等待处理'}

                    <div class="flow-path first"></div>

                    {elseif $info['status']=='等待付款' || $info['status']=='付款成功'}

                    <div class="flow-path second"></div>



                    {elseif $info['status']=='交易完成' && $info['ispinlun']==0}

                    <div class="flow-path third"></div>



                    {elseif $info['status']=='交易完成' && $info['ispinlun']==1}

                    <div class="flow-path fourth"></div>

                    {/if}

                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico01">预定信息</strong></h3>

                        <dl class="pm-list">

                            <dt>订单号：</dt>

                            <dd>{$info['ordersn']}</dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>订单状态：</dt>

                            <dd>

                                {if $info['status']=='等待处理'}

                                <span class="zt-dcl">等待处理</span>

                                {elseif $info['status']=='等待付款'}

                                    {if $info['paytype']==4}
                                        {if $usedate<$time}
                                        已失效
                                        {else}
                                        <span class="zt-nfk">未预定</span>
                                        {/if}
                                    {else}
                                        {if $usedate<$time}
                                        已失效
                                        {else}
                                         <span class="zt-nfk">等待付款</span>
                                         {/if}
                                    {/if}
                                {elseif $info['status']=='订单取消'}

                                <span class="zt-dcl">订单取消</span>

                                {elseif $info['status']=='交易完成'}

                                    {if $info['paytype']==4}
                                     {if $info['isconsume']==1}
                                     <span class="zt-nfk">交易完成</span>
                                     {else}
                                         {if $usedate<$time}
                                         <span class="zt-nfk">已过期</span>
                                         {else}
                                         <span class="zt-nfk">预定成功</span>
                                         {/if}
                                      {/if}
                                    {else}

                                    <span class="zt-end">交易完成</span>

                                    {/if}

                                {elseif $info['status']=='已退款'}

                                <span class="zt-end">已退款</span>

                                {elseif $info['status']=='付款成功'}
                                     {if $usedate<$time}
                                     <span class="zt-end">已过期</span>
                                     {else}
                                     <span class="zt-end">付款成功</span>
                                     {/if}
                                {elseif $info['status']=='退款中..'}

                                <span class="zt-end">退款中..</span>

                                {elseif empty($info['ispinlun'])}

                                <span class="zt-dp">未点评</span>

                                {/if}

                            </dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>下单时间：</dt>

                            <dd>{date('Y-m-d H:i:s',$info['addtime'])}</dd>

                        </dl>



                    </div><!--预定信息-->

                    {if $info['typeid'] == 1}

                    {include "member/order/line_detail"}

                    {elseif $info['typeid']==2}

                    {include "member/order/hotel_detail"}

                    {elseif $info['typeid']==3}

                    {include "member/order/car_detail"}

                    {elseif $info['typeid']==5}

                    {include "member/order/spot_detail"}

                    {elseif $info['typeid']==8}

                    {include "member/order/visa_detail"}

                    {elseif $info['typeid']==13}

                    {include "member/order/tuan_detail"}

                    {elseif empty($issystem)}

                    {include "member/order/tongyong_detail"}



                    {/if}







                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico02">联系人信息</strong></h3>

                        <dl class="pm-list">

                            <dt>联系人姓名：</dt>

                            <dd>{$info['linkman']}</dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>手机号码：</dt>

                            <dd>{$info['linktel']}</dd>

                        </dl>

                        {if !empty($info['linkemail'])}

                        <dl class="pm-list">

                            <dt>电子邮箱：</dt>

                            <dd>{$info['linkemail']}</dd>

                        </dl>

                        {/if}

                        <!--<dl class="pm-list">

                            <dt>最晚到店时间：</dt>

                          <dd>20:00</dd>

                        </dl>-->

                        {if !empty($info['remark'])}

                        <dl class="pm-list">

                            <dt>备注留言：</dt>

                            <dd>{$info['remark']}</dd>

                        </dl>

                        {/if}

                    </div><!--联系人信息-->



                    {if $info['typeid']==1}

                    {include "member/order/line_detail_more"}

                    {/if}







                    <div class="product-msg">

                        {if !empty($info['jifentprice']) || !empty($info['jifenbook']) || !empty($info['jifencomment'])}

                        <h3 class="pm-tit"><strong class="ico03">积分优惠</strong></h3>

                        {/if}

                        <div class="jf">

                            {if !empty($info['jifentprice'])}

                            <span><em>积分抵现</em><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['jifentprice']}</b></span>

                            {/if}

                            {if !empty($info['jifenbook'])}

                            <span><em>预订送分</em><b>{$info['jifenbook']}</b></span>

                            {/if}

                            {if !empty($info['jifencomment'])}

                            <span><em>评论送分</em><b>{$info['jifencomment']}</b></span>

                            {/if}

                        </div>

                        <dl class="pm-list">

                            <dt>订单总额：</dt>



                            <dd>

                                <span class="zj"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['totalprice']}</span>

                                {if !empty($info['jifenbook'])}

                                <span class="hq">获得积分：{$info['jifenbook']}</span>

                                {/if}

                            </dd>

                        </dl>

                        {if !empty($info['dingjin'])}

                        <dl class="pm-list">

                            <dt>定金支付：</dt>



                            <dd>

                                <span class="zj"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['payprice']}</span>



                            </dd>

                        </dl>

                        {/if}



                        {if $info['usejifen']}

                        <dl class="pm-list">

                            <dt>使用积分：</dt>

                            <dd>

                                <span class="nj">{$info['needjifen']}</span>

                                <span class="pj">-<i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['jifentprice']}</span>

                            </dd>

                        </dl>

                        {/if}

                    </div><!--积分优惠-->

                    {if !empty($info['eticketno'])}

                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico04">消费码</strong></h3>

                        <div class="consume-box">

                            <div class="consume-num">短信消费码：<span>{$info['eticketno']}</span></div>

                            <div class="consume-pic"><img src="/res/vendor/qrcode/make.php?param={$info['eticketno']}"></div>

                        </div>

                    </div>

                    {/if}

                    <div class="order-settle">

                        {if $info['status']=='等待处理'}

                        <input type="button" class="load-btn" value="等待处理" />

                        {/if}

                        {if $info['status']=='订单取消'}

                        <input type="button" class="cancel-dd-btn" value="订单取消" />

                        {/if}

                        {if $info['status']=='已退款'}

                        <input type="button" class="cancel-dd-btn" value="已退款" />

                        {/if}

                        {if $info['status']=='等待付款'}

                          {if $info['paytype']==4}
                              {if $usedate<$time}
                              <input type="button" class="expired"  value="已失效" />
                              {else}
                             <input type="button" class="now-fk-btn"  id="btn_ding" data-paytype="{$info['paytype']}" value="确认订单" />
                              {/if}
                          {else}
                                {if $usedate<$time}
                                <input type="button"  class="expired" value="已失效" />
                                {else}
                                <input type="button" class="now-fk-btn" value="立即付款" />
                                {/if}
                          {/if}

                        {/if}

                        {if $info['status']=='付款成功'}

                        {if $usedate<$time}
                        <input type="button"  class="expired" value="已过期" />
                        {else}
                        <input type="button" class="load-btn" data-ispay="1"  data-orderid="{$info['id']}" value="取消订单" />
                         {/if}
                        {/if}

                        {if $info['status']=='交易完成' && $info['ispinlun']!=1}
                            {if $info['paytype']==4}
                             {if $info['isconsume']==1}
                              <input type="button" class="now-dp-btn" value="立即点评" />
                              {else}
                                     {if $usedate<$time}
                                     <input type="button"  class="expired" value="已过期" />
                                     {else}
                                     <input type="button" class="load-btn"  data-orderid="{$info['id']}" value="取消订单" />
                                     {/if}
                               {/if}
                            {else}

                            <input type="button" class="now-dp-btn" value="立即点评" />

                            {/if}
                        {/if}

                        <span>订单结算总额：<strong><i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['payprice']}</strong></span>

                    </div>

                </div>

            </div>

        </div>



    </div>

</div>

{request "pub/footer"}
{Common::js('layer/layer.js')}
<script>

    $(function(){

        //立即付款

        $(".now-fk-btn").click(function(){

            var locateurl = "{$GLOBALS['cfg_basehost']}/member/index/pay/?ordersn={$info['ordersn']}";

            location.href = locateurl;

        })
        //确认订单  风极速 08.02

        $("#btn_ding").click(function(){

            var locateurl = "{$GLOBALS['cfg_basehost']}/payment/?ordersn={$info['ordersn']}&paytype={$info['paytype']}";
            location.href = locateurl;

        })

        //立即点评

        $(".now-dp-btn").click(function(){

            var url = "{$GLOBALS['cfg_basehost']}/member/order/pinlun?ordersn={$info['ordersn']}";

            location.href = url;

        })

        //  取消订单

        $('.load-btn').click(function(){

            var url  ="{$GLOBALS['cfg_basehost']}/member/order/ajax_order_cancel";

            var orderid = $(this).attr('data-orderid');
            var ispay   = $(this).attr('data-ispay');// 封冀蜀 07.08  新增 用于判断付款后取消定单

            var url = SITEURL +'member/order/ajax_order_cancel';

            layer.confirm('{__("order_cancel_content")}', {

                icon: 3,

                btn: ['{__("Abort")}','{__("OK")}'], //按钮

                btn1:function(){

                    layer.closeAll();

                },

                btn2:function(){

                    $.getJSON(url,{orderid:orderid,ispay:ispay},function(data){

                        if(data.status){

                            layer.msg('{__("order_cancel_ok")}', {icon:6,time:1000});

                            setTimeout(function(){location.reload()},1000);

                        }

                        else{

                            layer.msg('{__("order_cancel_failure")}', {icon:5,time:1000});

                        }



                    })

                },

                cancel:function(){

                    layer.closeAll();

                }





            })

        });





    })

</script>

</body>

</html>

