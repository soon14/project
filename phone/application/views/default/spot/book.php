<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>{$info['title']}预订-{$webname}</title>
<link rel="stylesheet" type="text/css" href="/res/css/phone/global.css" />
<!-- css库 -->
<link rel="stylesheet" type="text/css" href="/res/css/phone/base-phone.css" />
<!-- 全局 CSS 文件 -->
<link rel="stylesheet" type="text/css" href="/res/css/phone/payment-phone.css" />
<!-- 布局版面 CSS 文件-->
<link rel="stylesheet" type="text/css" href="/res/css/phone/calendar.css" />
<!-- 布局版面 CSS 文件-->
  {Common::js('jquery.min.js,amazeui.js,template.js,layer/layer.m.js')}
<script src="/res/js/phone/jquery-1.8.3.min.js"></script><!-- jQuery库 -->
<script src="/res/js/phone/rosestrap-min.js"></script><!-- 常用jQuery库 -->
<script src="/res/js/phone/payfor.js"></script>
</head>
<body>
<form action="{$cmsurl}spot/create" id="orderfrm" method="post">
<section>
  <div class="container-fluid order-box">
    <div class="scenic-name">{$info['title']}</div>
    <div class="order-item">
      <dl>
        <dt>&nbsp;&nbsp;日&nbsp;&nbsp;期</dt>
        <dd>
          <div id="demo">
            <input type="text" id="dt" name = "usedate" placeholder="请选择出行日期" class="deply-input" value="{$day}">
<!--            <div id="dd"> </div>-->
          </div>
        </dd>
      </dl>
      <dl>
        <dt>&nbsp;&nbsp;数&nbsp;&nbsp;量</dt>
        <dd>

          <div class="number_box">
            <div class="p_number">
              <div class="add_chose"> <a class="reduce disable" onClick="setAmount.reduce('#qty_item_1')" href="javascript:void(0)"> </a>
                <input type="text" name="qty_item_1" value="1" id="qty_item_1" onKeyUp="setAmount.modify('#qty_item_1')" class="text" />
                <a class="add" onClick="setAmount.add('#qty_item_1')" href="javascript:void(0)"> </a> </div>
            </div>
          </div>
        </dd>
      </dl>
      <dl>
        <dt>&nbsp;&nbsp;价&nbsp;&nbsp;格</dt>
        <dd>
          <div class="reply-price"><i>¥</i><dfn id="price_item_1">{$suit['ourprice']}</dfn></div>
        </dd>
      </dl>
      <div class="cl"></div>
    </div>
  </div>
  <div class="container-fluid order-box">
    <div class="order-name">
      <h2>取票人信息</h2>
    </div>
    <div class="order-item">
      <dl>
        <dt>&nbsp;&nbsp;姓&nbsp;&nbsp;名</dt>
        <dd>
          <input name="user" type="text" value="{if $member['truename']}{$member['truename']}{/if}" class="deply-input" id="user"  placeholder="填写您的姓名">
        </dd>
      </dl>
      <dl>
        <dt>&nbsp;&nbsp;手&nbsp;机&nbsp;号</dt>
        <dd>
          <input name="userPhone" type="text" value="{if $member['mobile']}{$member['mobile']}{/if}" class="deply-input" id="userPhone"  placeholder="填写您的手机号" >
        </dd>
      </dl>
      <div class="cl"></div>
    </div>
  </div>

  <div class="p-box1"></div>
</section>
<div class="defray_box">
  <div class="pay_box">
    <input type="hidden" name="suitid" id="suitid" value="{$suit['id']}">
    <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
    <input type="hidden" name="typeid"  value="{$typeid}"/>
    <input type="hidden" name="price" id="price" value="{$info['price']}">
    <input type="hidden" name="storage" id="storage" value="{$suit['number']}">
    <input type="hidden" name="usejifen" id="usejifen" value="0"/>
    <input type="hidden" name="canbuy" id="canbuy" value="{$info['canbuy']}"/>

    <!-- 现付显示提交订单 --> 
    <a id="J-submit" href="javascript:;" class="btn_submit fr">提交支付</a>
    <div class="total_price fr">订单金额：<i>¥</i><dfn class="total-font" id="total_item_1">0</dfn> </div>
    <!-- 现付显示 --> 
  </div>
</div>
</form>
<div class="box2">
<div class="login5"> <a class="close"></a> </div>
<script src="/res/js/phone/calendar.js"></script>
<script>
   $("#J-submit").click(function(){
     var user       = $("#user").val();
     var userPhone  = $("#userPhone").val();
     var totalprice = Number($("#total_item_1").text());
     var traveltime = $("#dt").val();
     var agree      = $("#agree");//.attr("checked");
     var canbuy     = $("#canbuy").val();
     var num        = $("#qty_item_1").val();
//     if(!agree.is(":checked")){
//       layer.open({
//         content :"请仔细阅读订票协议",
//         btn     :["{__("OK")}"]
//       });
//       return false;
//     }
     if(traveltime==""){
       layer.open({
         content:"请选择你的出行日期",
         btn    :["{__("OK")}"]
       });
       return false;
     }
     if(user==''){
       layer.open({
         content: '{__("error_linkman_not_empty")}',
         btn: ['{__("OK")}']
       });
       return false;
     }
     //联系人手机验证
     re = /^1\d{10}$/
     if (!re.test(userPhone)) {
       layer.open({
         content: '{__("error_user_phone")}',
         btn: ['{__("OK")}']
       });
       return false;
     }
     //订单金额验证
     if(totalprice==0){
       layer.open({
         content: '{__("error_no_product")}',
         btn: ['{__("OK")}']
       });
       return false;
     }

     if(canbuy>=0){
       if(num>canbuy) {
         layer.open({
           content: '您只能购买'+canbuy+'个产品',
           btn: ['{__("OK")}']
         });
         return false;
       }
     }
     $("#orderfrm").submit();
   });
    $('#dd').calendar({
        trigger: '#dt',
        zIndex: 999,
		format: 'yyyy-mm-dd',
        onSelected: function (view, date, data) {
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) {
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });
  $(".back-home").click(function(){
    $("#dd").css("display","none");
  })
</script> 
<script type="text/javascript">
$(document).ready(function(){	
	$('.one').click(function(){		
		$('.box2').show();			
		});
			
	$('.login5 a').click(function(){		
		$('.box2').hide();	
		});		
	//$('.box').easydrag();
	});
</script>
</body>
</html>
