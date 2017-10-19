<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>预订{$info['title']}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('hotel.css,base.css,extend.css,stcalendar.css')}
    {Common::js('jquery.min.js,base.js,common.js,SuperSlide.min.js,jquery.validate.js,jquery.validate.addcheck.js')}

</head>
<body>

 {request "pub/header"}

  <div class="big">
  	<div class="wm-1200">

    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;{$channelname}
        </div><!--面包屑-->

      <div class="st-main-page">
      <form id="orderfrm" method="post" action="{$cmsurl}tuan/create">
      	<div class="con-order-box">
        	<div class="product-msg">
          	<h3 class="pm-tit"><strong class="ico01">预定信息</strong></h3>
            <dl class="pm-list">
            	<dt>产品编号：</dt>
              <dd>{$info['series']}</dd>
            </dl>
            <dl class="pm-list">
            	<dt>产品名称：</dt>
              <dd>{$info['title']}</dd>
            </dl>
            <div class="table-msg">
              <table width="100%" border="0" class="people_info">
                <tr>
                  <th width="33%" height="40" scope="col"><span class="l-con">使用日期</span></th>

                  <th width="33%" scope="col">购买数量</th>
                  <th width="33%" scope="col">总价格</th>
                </tr>
                  <tr>
                      <td height="40">
                            <span><input type="text" class="inputdate" name="usedate" value="{date('Y-m-d')}"/></span>
                      </td>

                      <td>
                          <div class="control-box">
                              <span class="add-btn">-</span>
                              <input type="text" id="dingnum" name="dingnum" class="number-text" value="1"/>
                              <span class="sub-btn">+</span>
                          </div>
                      </td>
                      <td><span class="price totalprice"></span></td>
                  </tr>

              </table>
            </div>
          </div><!--预定信息-->
          <div class="product-msg">
          	<h3 class="pm-tit"><strong class="ico02">联系人信息</strong></h3>
            <dl class="pm-list">
              <dt><span class="st-star-ico">*</span>联系人：</dt>
              <dd><input type="text" class="linkman-text" name="linkman" value="{$userInfo['truename']}" /><span class="st-ts-text hide"></span></dd>
            </dl>
            <dl class="pm-list">
            	<dt><span class="st-star-ico">*</span>手机号码：</dt>
              <dd><input type="text" class="linkman-text" name="linktel" value="{$userInfo['mobile']}" /><span class="st-ts-text hide"></span></dd>
            </dl>
            <dl class="pm-list">
            	<dt>电子邮箱：</dt>
              <dd><input type="text" class="linkman-text" name="linkemail" /></dd>
            </dl>
            <dl class="pm-list">
            	<dt>订单留言：</dt>
              <dd><textarea class="order-remarks" name="remark" cols="" rows=""></textarea></dd>
            </dl>
          </div><!--联系人信息-->


          <!--支付方式-->

          <div class="product-msg">
          	<h3 class="pm-tit"><strong class="ico08">积分优惠</strong></h3>
            <div class="jf">
              {if $suitInfo['jifentprice']}
                <span><em>积分抵现</em><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitInfo['jifentprice']}</b></span>
              {/if}
              {if $suitInfo['jifenbook']}
                <span><em>预订送分</em><b>{$suitInfo['jifenbook']}</b></span>
              {/if}
              {if $suitInfo['jifencomment']}
                <span><em>评论送分</em><b>{$suitInfo['jifencomment']}</b></span>
              {/if}
            </div>
            <dl class="pm-list">
              <dt>订单总额：</dt>
              <dd>
              	<span class="zj totalprice"></span>
                {if $info['jifenbook']}
                    <span class="hq">获得积分：{$info['jifenbook']}分</span>
                {/if}
              </dd>
            </dl>
              <!--用户为登陆状态,此套餐积分抵现金额不为0,-->
            {if !empty($userInfo) && !empty($info['jifentprice']) && $userInfo['jifen']>$needjifen}
                <dl class="pm-list">
                    <dt>我当前的积分：</dt>
                  <dd>
                    <div class="all-jf">{$userInfo['jifen']}</div>
                    <div class="use-jf">
                          <span><i></i>使用{$needjifen}积分抵现</span>
                          <em>- <i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['jifentprice']}</em>

                    </div>
                  </dd>
                </dl>
            {/if}
          </div><!--积分优惠-->
          <div class="order-js-box">
          	<div class="total">订单结算总额：<span class="totalprice"></span></div>
            <div class="yz">
              <input type="button" class="tj-btn" value="提交订单" />
              <input type="text" name="checkcode" id="checkcode" class="ma-text" />
              <span class="pic"><img src="{$cmsurl}captcha" onClick="this.src=this.src+'?math='+ Math.random()" width="80" height="32" /></span>
              <span class="bt">验证码：</span>

            </div>
          </div><!--提交订单-->
        </div><!--订单内容-->
        <!--隐藏域-->

        <input type="hidden" name="productid" value="{$info['id']}"/>
        <input type="hidden" name="webid" value="{$info['webid']}"/>
        <input type="hidden" name="frmcode" value="{$frmcode}"><!--安全校验码-->
        <input type="hidden" name="usejifen" id="usejifen" value="0"/><!--是否使用积分-->
        <input type="hidden" id="price" value="{$info['price']}"/>
        <input type="hidden" id="jifentprice" value="{$info['jifentprice']}"><!--积分抵现金额-->
        <input type="hidden" id="total_price" value=""/>

      </form>
        <div class="st-sidebox">
          <div class="side-order-box">
              <div class="order-total-tit">结算信息</div>
              <div class="show-con">
                  <ul class="ul-cp">
                      <li><a class="pic" href="javascript:;"><img src="{$info['litpic']}" alt="{$info['title']}"></a></li>
                      <li>
                          <a class="txt" href="javascript:;">{$info['title']}</a>
                          <p class="address">{$info['address']}</p>
                      </li>
                  </ul>
                  <ul class="ul-list">
                      <li>使用日期：<span class="usedate">{date('Y-m-d')}</span></li>
                      <li>数量：<span class="dingnum">1</span></li>
                      <li>单价：<i class="currency_sy">{Currency_Tool::symbol()}</i>{$info['price']}</li>

                  </ul>
                  <div class="total-price">订单总额：<span class="totalprice"></span></div>
              </div>
          </div>

          </div>
        </div><!--订单结算信息-->
      </div>

    </div>

 {request "pub/footer"}
 {Common::js('layer/layer.js',0)}
 {Common::js('datepicker/WdatePicker.js',0)}
 <div id="calendar"></div>
<script>


    $(function(){

        get_total_price();

        //出发日期选择
        $(".inputdate").focus(function(){

            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d',doubleCalendar:false,isShowClear:false,readOnly:true,errDealMode:1,onpicked:function(){
                $('.usedate').html($('.inputdate').val())
            }})
        })

        //提交订单
        $('.tj-btn').click(function(){
            $("#orderfrm").submit();
        })

        //表单验证

        $("#orderfrm").validate({

            submitHandler:function(form){

                var flag = check_storage();
                if(!flag){
                    layer.open({
                        content: '{__("error_no_storage")}',
                        btn: ['{__("OK")}']
                    });
                    return false;

                }else{
                    form.submit();
                }


            } ,
            errorClass:'st-ts-text',
            errorElement:'span',
            rules: {

                linkman:{
                    required: true

                },
                linktel:{
                    required:true,
                    isPhone:true

                },
                checkcode:{
                    required:true,
                    remote:{
                        url: SITEURL+'pub/ajax_check_code',
                        type: 'post'

                    }
                }
            },
            messages: {
                linkman:{
                    required: "请填写联系人信息"
                },
                linktel:{
                    required: "请填写联系方式"
                },
                checkcode:{
                    required: "",
                    remote: ""
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).attr('style','border:1px solid red');
            },
            unhighlight:function(element, errorClass){
                $(element).attr('style','');
            },
            errorPlacement:function(error,element){
                if(!element.is('#checkcode'))
                {
                   $(element).parent().append(error)
                }
                else{
                    layer.tips('验证码错误', '#checkcode', {
                        tips: 3
                    });
                }

            }



        });




        //数量减少
        $(".control-box").find('.add-btn').click(function(){

           var obj = $(this).parent().find('.number-text');
           var cur = Number(obj.val());
           if(cur>1){
               cur = cur-1;
               obj.val(cur);

           }
            $('.dingnum').html(cur);
            get_total_price();
        })
        //数量添加
        $(".control-box").find('.sub-btn').click(function(){

            var obj = $(this).parent().find('.number-text');
            var cur = Number(obj.val());
            cur++;
            obj.val(cur);
            $('.dingnum').html(cur);
            get_total_price();
        })

        //使用积分抵现
        $('.use-jf span i').click(function(){
            var totalprice = Number($("#total_price").val());
            if($('.use-jf span i').attr('class')!='on'){
                var jifentprice = Number($("#jifentprice").val());
                if(jifentprice > totalprice){
                    layer.alert('{__("can_not_tprice")}',{
                        icon:5
                    })
                    return false;
                }
            }
            $(this).toggleClass('on');
            get_total_price();

        })



    })

    //检测库存
    function check_storage() {
        var startdate = $("#usedate").val();
        var dingnum = $("#dingnum").val();
        var suitid = $("#suitid").val();
        var flag = 1;

        $.ajax({
            type: 'POST',
            url: SITEURL + 'tuan/ajax_check_storage',
            data: {startdate: startdate,  dingnum: dingnum, suitid: suitid},
            async: false,
            dataType: 'json',
            success: function (data) {
                flag = data.status;
            }
        })
        return flag;

    }
    //获取总价
    function get_total_price(){
        var price = Number($("#price").val());
        var dingnum = Number($("#dingnum").val());
        var jifentprice = 0;

        //是否使用积分
        if($('.use-jf span i').attr('class')=='on'){
            jifentprice = $("#jifentprice").val();
            $("#usejifen").val(1);
        }else{
            $("#usejifen").val(0);
        }
       price = price * dingnum - jifentprice;
       $("#total_price").val(price);
       $(".totalprice").html('<i class="currency_sy">{Currency_Tool::symbol()}</i>'+price);

    }









</script>

</body>
</html>
