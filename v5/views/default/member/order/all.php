<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title> {if $ordertype=='all'}全部订单{elseif $ordertype=='unpay'}未付款订单{else}未点评订单{/if}-{$webname}</title>

    {Common::css('user.css,base.css,extend.css')}
    {Common::css('common/bootstrap-min.css,common/public.css')}
    {Common::js('jquery.min.js,base.js,common.js')}

</head>



<body>



 {request "pub/header"}



  <div class="big">

  	<div class="wm-1200">



    	<div class="st-guide">

          <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{if $ordertype=='all'}全部订单{elseif $ordertype=='unpay'}未付款订单{else}未点评订单{/if}

        </div><!--面包屑-->



      <div class="st-main-page">



          {include "member/left_menu"}



        <div class="user-order-box">

        	<div class="user-home-box">

          	<div class="tabnav">

                <span {if $ordertype=='all'}class="on"{/if} data-type="all">全部订单</span>

                <span {if $ordertype=='unpay'}class="on"{/if} data-type="unpay">未付款/未下单订单</span>

                <span {if $ordertype=='uncomment'}class="on"{/if} data-type="uncomment">未点评订单</span>

            </div><!-- 订单切换 -->

            <div class="user-home-order">

              {if !empty($list)}

              <div class="order-list">

              	<table width="100%" border="0">

                  <tr>

                    <th width="40%" height="38" bgcolor="#fbfbfb" scope="col">订单信息</th>

                    <th width="15%" height="38" bgcolor="#fbfbfb" scope="col">支付方式</th>

                    <th width="5%" height="38" bgcolor="#fbfbfb" scope="col">数量</th>

                    <th width="10%" height="38" bgcolor="#fbfbfb" scope="col">订单金额</th>

                    <th width="15%" height="38" bgcolor="#fbfbfb" scope="col">订单状态</th>

                    <th width="15%" height="38" bgcolor="#fbfbfb" scope="col">订单操作</th>

                  </tr>

                  {loop $list $row}
                    <?php $time      = time()*1-86400;
                    $usedate   = strtotime($row['usedate']); ?>
                  <tr>

                    <td height="114">

                    	<div class="con">

                      	<dl>

                        	<dt><a href="{$row['producturl']}" target="_blank"><img src="{$row['litpic']}" alt="{$row['productname']}" /></a></dt>

                          <dd>

                          	<a class="tit" href="{$row['producturl']}" target="_blank">{$row['productname']}</a>

                            <p>订单编号：{$row['ordersn']}</p>

                            <p>下单时间：{Common::mydate('Y-m-d H:i:s',$row['addtime'])}</p>

                          </dd>

                        </dl>

                      </div>

                    </td>
                    <td align="center" style="text-align: center"><span class="price">{if $row['paytype']!=4}在线支付{else}景区支付{/if}</span></td>

                    <td align="center" style="text-align: center"><span class="price">{$row['dingnum']}</span></td>

                    <td align="center" style="text-align: center"><span class="price"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$row['totalprice']}</span></td>
                     <!----07.08  fengjishu  隐藏  下面的写了新的判断  start 08.05 增加 已过期状态--->
                     <!--td align="center"><span class="dfk">{$row['status']}</span></td-->

                     <td align="center" style="text-align: center"><span class="dfk">
                             {if $row['paytype']==4}
                               {if $row['status']=='交易完成'}
                                  {if $row['isconsume']==1}
                                     交易成功
                                  {else}
                                     {if $usedate<$time}

                                     已过期
                                     {else}
                                     预定成功
                                     {/if}
                                  {/if}
                               {elseif $row['status']=='等待付款'}
                                  {if $usedate<$time}
                                               已失效
                                              {else}
                                              未预定
                                              {/if}
                               {elseif $row['status']=='订单取消'}
                                  订单取消
                               {/if}
                             {else}
                               {if $row['status']=='付款成功'}
                                    {if $usedate<$time}
                                       已过期
                                    {else}
                                      {$row['status']}
                                    {/if}
                               {else}
                                      {if $usedate<$time}
                                       已失效
                                      {else}
                                      {$row['status']}
                                       {/if}
                               {/if}
                             {/if}
                         </span>
                     </td>
                      <!----07.08  fengjishu  隐藏  上面面的写了新的判断  end  --->
                    <td align="center" style="text-align: center">



                        {if $row['status']=='等待付款'}
                           {if $row['paytype']==4}
                                {if $usedate<$time}
                                {else}
                               <a class="now-fk" href="{$GLOBALS['cfg_basehost']}/payment/?ordersn={$row['ordersn']}&paytype={$row['paytype']}">确认下单</a>
                               <a class="cancel_order now-dp" style="background:#ccc" href="javascript:;" data-orderid="{$row['id']}">取消</a>
                               {/if}
                           {else}
                                {if $usedate<$time}
                                {else}
                                <a class="now-fk" href="{$cmsurl}member/index/pay?ordersn={$row['ordersn']}">立即付款</a>

                                <a class="cancel_order now-dp" style="background:#ccc" href="javascript:;" data-orderid="{$row['id']}">取消</a>
                               {/if}
                           {/if}
                        {elseif $row['status']=='付款成功'}
                            {if $usedate<$time}
                            <a class=" now-dp" style="background:#ccc" href="javascript:;" >已过期</a>
                            {else}
                            <a class="cancel_order now-dp" style="background:#ccc" href="javascript:;" data-ispay="1"  data-orderid="{$row['id']}">取消订单</a>
                            {/if}
                        {elseif $row['status']=='已退款'}

                            <!---07.08 新加  封冀蜀 s-------->
                           <!-- {if $row['ispinlun']==0}-->
                            <!-----07.08 新加  封冀蜀 e------>
                           <!-- <a class="now-dp" href="{$cmsurl}member/order/pinlun?ordersn={$row['ordersn']}">立即点评</a>
                            {else}
                            <a class="now-dp" href="JavaScript:">已点评</a>
                            {/if}-->

                        {elseif $ordertype=='unpay'}

                        <a class="now-fk" href="{$cmsurl}member/index/pay?ordersn={$row['ordersn']}">立即付款</a>

                        <a class="cancel_order now-dp" style="background:#ccc" href="javascript:;" data-orderid="{$row['id']}">取消</a>



                        {elseif $ordertype=='uncomment' || $row['status']=='交易完成'}
                         <!---07.08 新加  封冀蜀 08.01 jia  s-------->

                          {if $row['paytype']==4}
                            {if $row['isconsume']==1}
                                {if $row['ispinlun']==0}
                                <!-----07.08 新加  封冀蜀 e------>
                                <a class="now-dp" href="{$cmsurl}member/order/pinlun?ordersn={$row['ordersn']}">立即点评</a>
                                {else}
                                <a class="now-dp" href="JavaScript:">已点评</a>
                                {/if}
                            {else}
                                {if $usedate<$time}
                                <a class=" now-dp" style="background:#ccc" href="javascript:void(0);" >已过期</a>
                                {else}
                                <a class="cancel_order now-dp" style="background:#ccc" href="javascript:;" data-orderid="{$row['id']}">取消订单</a>
                                {/if}
                            {/if}

                          {else}
                             {if $row['ispinlun']==0}
                         <!-----07.08 新加  封冀蜀 e------>
                               <a class="now-dp" href="{$cmsurl}member/order/pinlun?ordersn={$row['ordersn']}">立即点评</a>
                             {else}
                               <a class="now-dp" href="JavaScript:">已点评</a>
                             {/if}
                          {/if}

                        {/if}

                        <a class="order-ck" href="{$cmsurl}member/order/view?ordersn={$row['ordersn']}">查看订单</a>



                     <!--   {if $ordertype=='all'}



                            {if $row['status']=='等待付款'}

                             <a class="now-fk" href="{$cmsurl}member/index/pay?ordersn={$row['ordersn']}" target="_blank">立即付款</a>



                            {/if}

                        {/if}

                        {if $ordertype=='unpay'}

                        <a class="now-fk" href="{$cmsurl}member/index/pay?ordersn={$row['ordersn']}" target="_blank">立即付款</a>



                        {/if}

                        {if $ordertype=='uncomment'}

                        <a class="now-dp" href="{$cmsurl}member/order/pinlun?ordersn={$row['ordersn']}" >立即点评</a>

                        {/if}

                        <a class="order-ck" href="{$cmsurl}member/order/view?ordersn={$row['ordersn']}">查看订单</a>-->


                    </td>

                  </tr>

                  {/loop}

                </table>

                <div class="main_mod_page clear">

                    {$pageinfo}

                </div><!-- 翻页 -->

              </div>

              {else}

                <div class="order-no-have"><span></span><p>没有查到相关订单信息，<a href="/" target="_blank">去逛逛</a>去哪儿玩吧！</p></div>

              {/if}

            </div><!-- 我的订单 -->

          </div>

        </div><!--所有订单-->



      </div>



    </div>

  </div>



{request "pub/footer"}

{Common::js('layer/layer.js')}

 <script>

     $(function(){

         //导航选中

         $('#nav_allorder').addClass('on');



         //订单类型切换

         $(".tabnav span").click(function(){

             var orderType = $(this).attr('data-type');

             var url = SITEURL+'member/order/all-'+orderType;

             window.location.href = url;

         })



     })

 </script>

 {include "member/order/jsevent"}



</body>

</html>

