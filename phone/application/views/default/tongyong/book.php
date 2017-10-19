<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>{$info['title']}预订-{$webname}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {Common::css('amazeui.css,style.css,extend.css')}
    {Common::js('jquery.min.js,amazeui.js,template.js,layer/layer.m.js')}
    {Common::css('../js/mobiscroll/css/mobiscroll.frame.css,../js/mobiscroll/css/mobiscroll.frame.android.css')}
    {Common::css('../js/mobiscroll/css/mobiscroll.scroller.css,../js/mobiscroll/css/mobiscroll.scroller.android.css')}
    {Common::js('mobiscroll/js/mobiscroll.core.js,mobiscroll/js/mobiscroll.frame.js,mobiscroll/js/mobiscroll.scroller.js')}
    {Common::js('mobiscroll/js/mobiscroll.util.datetime.js,mobiscroll/js/mobiscroll.datetimebase.js,mobiscroll/js/mobiscroll.datetime.js')}
    {Common::js('mobiscroll/js/mobiscroll.frame.android.js,mobiscroll/js/i18n/mobiscroll.i18n.zh.js')}
<script>
	$(function(){
		$('#my-st-slide').offCanvas('close');
	})
</script>
</head>

<body>

   {request "pub/header/typeid/$typeid/isbookpage/1"}
  
  <section>
    
  	<div class="mid_content">
        {if empty($userinfo['mid'])}
        <div class="order-hint-msg-box">
            <p class="hint-txt">温馨提示：<a href="/phone/member/login">登录</a>可享受预定送积分、积分抵现！</p>
        </div><!-- 未登录提示 -->
        {/if}
        <form method="post" action="{$cmsurl}{$pinyin}/create" id="orderfrm">
			<div class="confirm_order_msg">
      	<dl>
        	<dt><img src="{$info['litpic']}" /></dt>
          <dd>
          	<span>{$info['title']}</span>
              {if !empty($info['price'])}
                <strong><i class="currency_sy">{Currency_Tool::symbol()}</i><b>{$info['price']}</b>起</strong>
              {else}
                <strong><b>电询</b></strong>
              {/if}
          </dd>
        </dl>
      </div><!--产品简介-->
      
      <div class="book_type">
      	<h3 class="book_tit">产品类型</h3>
        <div class="book_con_box">
        	<ul id="suit_container">
               {loop $suits $row}
                 <li data-suitid="{$row['id']}" data-price="{$row['ourprice']}" data-storage="{$row['number']}">{$row['suitname']}</li>
               {/loop}
          </ul>
        </div>
      </div><!--产品类型-->
      
      <div class="book_type">
      	<h3 class="book_tit">选择日期</h3>
        <div class="people_num">
            <p>
                <strong>使用日期：</strong>
            <span>
            <input type="text" class="startdate" name="usedate"  style="width:8rem" id="usedate" readonly="true" value="{date('Y-m-d')}"/>
            </span>
            </p>

        </div>
      </div><!--选择日期-->
      
      <div class="book_type">
      	<h3 class="book_tit">购买数量</h3>
        <div class="people_num">
        	<p>
          	<strong>数量：</strong>
            <span>
            	<a class="sub" href="javascript:;">-</a>
                <input type="text" name="dingnum" value="1" id="dingnum" readonly/>
            	<a class="add" href="javascript:;">+</a>
            </span>
            单价：<em id="single_price"><i class="currency_sy">{Currency_Tool::symbol()}</i><b></b></em>
            <span class="sto"><label>库存：</label><span id="sto_num" class="sto_num">不限</span></span>
          </p>
        </div>
      </div><!--购买数量-->
      
      <div class="book_type">
      	<h3 class="book_tit">联系人信息<a href="javascript:;" id="chooseman">选择常用联系人&gt;</a></h3>
        <div class="linkman">
        	<dl>
            <dd><strong>姓名：</strong><input type="text" name="linkman" id="linkman" class="" /><span>(必填)</span></dd>
            <dd><strong>联系电话：</strong><input type="text" name="linktel" id="linktel" class="" placeholder="手机号或固定电话" /><span>(必填)</span></dd>
            <dd><strong>身份证号：</strong><input type="text" name="linkidcard" id="linkidcard" class="" placeholder="输入18位身份证号码" /></dd>
            <dd><strong>订单备注：</strong><textarea name="remark" cols="" rows=""></textarea></dd>
            <input type="hidden" name="suitid" id="suitid" value=""/>
            <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
            <input type="hidden" name="typeid"  value="{$typeid}"/>

          </dl>
        </div>
      </div><!--预定人数-->
      </form>
    </div>
      <!--常用联系人-->
      <div id="linkman_list" style="display: none">
          <div class="linkman_page">
              <h3 class="tit">选择一个联系人</h3>
              <ul class="linkman_list">
                  {st:member action="linkman" memberid="$userinfo['mid']"}
                  {loop $data $r}
                  <li>
                      <strong>{$r['linkman']}</strong>
                      <span>联系电话{$r['mobile']}</span>
                      <span>身份证号{$r['idcard']}</span>
                      <i class="lk_choose" data-linkman="{$r['linkman']}" data-mobile="{$r['mobile']}" data-idcard="{$r['idcard']}"></i>
                  </li>
                  {/loop}
                  {/st}

              </ul>
          </div><!--选择联系人-->
      </div>
    
  </section>

   <script>
       var price=0;
       var storage=-1;
       var currency_symbol="{Currency_Tool::symbol()}";
       $(function(){

              $(".people_num .add,.people_num .sub").click(function(){
                   var textEle=$(this).siblings("input:first");
                   var val=textEle.val();
                   val=parseInt(val);
                   val=!val?1:val;
                   if($(this).is(".add")) {
                       ++val;
                   }
                   else
                     val=val>1?--val:1;
                   textEle.val(val);
                   countPrice();
              });

             $("#suit_container li").click(function(){
                    var price= $(this).attr('data-price');
                    var storage= $(this).attr('data-storage');
                    var id= $(this).attr('data-suitid');
                    $(this).siblings("li").removeClass("on");
                    $(this).addClass("on");
                    onSuitChanged(id,price,storage);
             });
             $("#suit_container li:first").trigger('click');


            $("#btn_book").click(function(){
               var lkman = $("#linkman").val();
               var lkmobile = $("#linktel").val();
               var linkidcard = $("#linkidcard").val();
               //联系人信息验证
               if(lkman==''){
                   layer.open({
                       content: '{__("error_linkman_not_empty")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }
               //联系人手机验证
               re = /^1\d{10}$/
               if (!re.test(lkmobile)) {
                   layer.open({
                       content: '{__("error_user_phone")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }
               //联系人身份证验证
               re = /^(\d{18,18}|\d{15,15}|\d{17,17}x)$/
               if(linkidcard != ''){
                   if (!re.test(linkidcard)) {
                       layer.open({
                           content: '{__("身份证不合法")}',
                           btn: ['{__("OK")}']
                       });
                       return false;
                   }
               }
               //订单金额验证
               var totalprice = Number($('#total_price b').text());
               if(totalprice==0){
                   layer.open({
                       content: '{__("error_no_product")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }
               //库存验证
               var dingnum = parseInt($('#dingnum').val());
               if(storage!=-1 && (storage<dingnum)){
                   layer.open({
                       content: '{__("error_no_storage")}',
                       btn: ['{__("OK")}']
                   });
                   return false;
               }

               $("#orderfrm").submit();

           })

           //选择常用联系人开始
           $("#chooseman").click(function () {
               $.getJSON('{$cmsurl}member/login/ajax_is_login', {}, function (data) {
                   if (data.status == 1) {
                       var content = $("#linkman_list").html();
                       layer.open({
                           type: 1,
                           content: content,
                           style: 'width:80%; border:none;',
                           btn: ['{__("OK")}'],
                           yes: function () {
                               $(".linkman_list").find('.on').each(function (i, obj) {
                                   var lkman = $(obj).attr('data-linkman');
                                   var lkmobile = $(obj).attr('data-mobile');
                                   var idcard = $(obj).attr('data-idcard');
                                   $("#linkman").val(lkman);
                                   $("#linktel").val(lkmobile);
                                   $("#linkidcard").val(idcard);
                               })
                               layer.closeAll();
                           }
                       });
                   } else {
                       layer.open({
                           content: '{__("error_linktel_not_login")}',
                           btn: ['确认', '取消'],
                           shadeClose: false,
                           yes: function () {
                               window.location.href = "{$cmsurl}member/login";
                           }, no: function () {
                           }
                       });
                   }

               })
           });



           var stdate = new Date();
               $('#usedate').mobiscroll().date({
                   theme: 'android',
                   mode: 'scroller',
                   display: 'modal',
                   lang: 'zh',
                   dateFormat: 'yy-mm-dd',
                   minDate: new Date(stdate.getFullYear(), stdate.getMonth(), stdate.getDate())
               });


       })
       function onSuitChanged(id,price,storage)
       {
           $("#single_price b").text(price);
           $("#suitid").val(id);
            window.price=price;
            window.storage=storage;
            var storageStr=storage==-1?'不限':storage;
            $("#sto_num").text(storageStr);
            countPrice();

       }
       function countPrice()
       {
           var num=$("#dingnum").val();
           num=parseInt(num);
           num=!num?0:num;
           var totalPrice=num*price;
           $("#total_price").html("<i class='currency_sy'>"+currency_symbol+"</i><b>"+totalPrice+"</b>");

       }

   </script>


   {request "pub/code"}
   {request "pub/footer"}
  
  <div class="bom_link_box">
    <div class="bom_fixed">
      <a class="price" href="javascript:;">总额：<span id="total_price"><i class="currency_sy">{Currency_Tool::symbol()}</i><b>0</b></span></a>
      <a class="on" href="javascript:;" id="btn_book">立即预定</a>
    </div>
  </div>

</body>
</html>
