<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>订单详情</title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-detail">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <h1>订单详情</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1)"></a> </header>
<?php  $time =time()*1-86400;
$usedate =strtotime($info['usedate']);?>
<section class="ui-Person-detail">
  <a href="{$info['purl']['url']}">
  <div class="mt_order_head">
     <h2>{$info['productname']}</h2>
    <p class="active-time">{$info['sellpoint']}</p>
  </div>
  </a>
  <div class="mt_tags">
    <div class="ico botl ic_time"><i class="c9">{$info['usedate']}</i></div>
    <div class="ico ic_add"><i class="c9">{$info['address']}</i></div>
  </div>

{if $info['status']>1&&$usedate>$time}
  <div class="mt_Voucher">
    {if $info['status']==2}
    {if $backpay == 0}
    <a class="backPay-btn cancel_order" data-ispay="1"  data-orderid="{$info['id']}" href="JavaScript:void(0)">申请退款</a>
    {/if}
    <div class="Voucher-title"><img src="/phone/public/images/mitao/mt_Voucher.png"></div>
    <div class="code">{if $info['eticketno']}券码：{$info['eticketno']}{/if} <span class="tt">未消费</span></div>
    {/if}
    {if $info['status']==3}
    <a class="backPay-btn" href="javascript:;">取消订单</a>
    <div class="Voucher-title"><img src="/phone/public/images/mitao/mt_Voucher.png"></div>
    <div class="code">{if $info['eticketno']}券码：{$info['eticketno']}{/if} </div>

    {/if}
    {if $info['status']==4}
    <a class="backPay-btn" href="javascript:;">退款完成</a>
    <div class="Voucher-title"><img src="/phone/public/images/mitao/mt_Voucher.png"></div>
    <div class="code">{if $info['eticketno']}券码：{$info['eticketno']}{/if} </div>

    {/if}
    {if $info['status']==5}

    <div class="Voucher-title"><img src="/phone/public/images/mitao/mt_Voucher.png"></div>
    <div class="code">{if $info['eticketno']}券码：{$info['eticketno']}{/if}
      {if $info['isconsume']==1&&empty($info['ispinlun'])}
      <span class="tt">待评论</span>
      {/if}
    </div>

    {/if}
    {if $info['status']==6}

    <div class="Voucher-title"><img src="/phone/public/images/mitao/mt_Voucher.png"></div>
    <div class="code">{if $info['eticketno']}券码：{$info['eticketno']}{/if} <span class="tb">退款中...</span></div>
    <a href="/phone/mitao/order_refund?orderid={$info['id']}" class="see-btn">查看退款进度</a>
    {/if}
  </div>
{/if}

  <h2 class="title">价格信息</h2>
  <div class="mt_num">
    <table cellspacing="0" cellpadding="0">
      <tbody>
       {if $info['dingnum']>0}
       <?php
         $audlt_total = $info['dingnum']*$info['price'];
       ?>
        <tr>
          <td width="20%">成人</td>
          <td width="40%"><p><i>&yen;{$info['price']}</i><i class="dw">/人</i></p></td>
          <td width="20%">×{$info['dingnum']}</td>
          <td width="20%">&yen;{$audlt_total}</td>
        </tr>
       {/if}

       {if $info['childnum'] > 0}
       <?php
       $child_total = $info['childnum']*$info['childprice'];
       ?>
        <tr>
          <td width="20%">儿童</td>
          <td width="40%"><p><i>&yen;{$info['childprice']}</i><i class="dw">/人</i></p></td>
          <td width="20%">×{$info['childnum']}</td>
          <td width="20%">&yen;{$child_total}</td>
        </tr>
       {/if}

        <tr>
          <td colspan="4"><p class="total">合计：<i class="money">{$info['total']}</i><i class="dw"></i></p></td>
        </tr>
      </tbody>
    </table>
  </div>
  <h2 class="title">联系人信息</h2>
  <div class="mt-order-box">
    <ul>
      <li>姓名：{$info['linkman']}</li>
      <li>手机号：{$info['linktel']}</li>
    </ul>
  </div>
  <h2 class="title">订单信息</h2>
  <div class="mt-order-box">
    <ul>
      <li>订单号：{$info['ordersn']}</li>
      <li>订单时间：{$info['addtime']}</li>
      {if $info['paysource']}
      <li>支付方式：{$info['paysource']}</li>
      {/if}
    </ul>
  </div>
</section>

<!---  待付款 --------->
{if $info['status']==1}
{if $usedate<$time}
<div class="bot-btn overdue-btn">已过期</div>
{else}
<div class="bot-btn"><i class="btnl"><i class="total">订单总额</i><i class="totalprice">{$info['total']}</i></i> <a href="{$info['payurl']}" class="btnr">我要支付</a> </div>
{/if}
{/if}

{if empty($info['ispinlun']) && $info['status']==5&&$info['isconsume']==1}

<div class="bot-btn evaluate-btn" onclick="window.location.href='/phone/mitao/comment_index?id={$info[id]}'">立即评价</div>
{else}
<!--<div class="bot-btn evaluate-btn">查看我的评价</div>-->
{/if}

</body>
</html>
{php echo Common::js('jquery.min.js');}
<script src="/res/js/layer/layer.js"></script>
<script>
  var SITEURL = "{URL::site()}";
  $(function(){



    //取消订单

    $(".cancel_order").click(function(){

      var orderid = $(this).attr('data-orderid');
      var ispay   = $(this).attr('data-ispay');// 封冀蜀 07.08  新增 用于判断付款后取消定单

      var url = SITEURL +'mitao/ajax_order_cancel2';

      layer.confirm('{__("确认取消订单")}', {

        icon: 3,

        btn: ['{__("取消")}','{__("OK")}'], //按钮

        btn1:function(){

          layer.closeAll();

        },

        btn2:function(){

          $.getJSON(url,{orderid:orderid,ispay:ispay},function(data){

            if(data.status){

              layer.msg('{__("订单已取消")}', {icon:6,time:1000});

              setTimeout(function(){location.reload()},1000);

            }

            else{

              layer.msg('{__("订单取消失败")}', {icon:5,time:1000});

            }



          })

        },

        cancel:function(){

          layer.closeAll();

        }





      })



    })

  })

</script>