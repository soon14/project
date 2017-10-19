<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title></title>

    <link type="text/css" href="/min/?f=/res/css/lines.css,/res/css/base.css,/res/css/extend.css" rel="stylesheet">
    <link type="text/css" href="/min/?f=/res/css/lines.css,/res/css/base.css,/res/css/extend.css,/newtravel/public/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/min/?f=/res/js/jquery.min.js,/res/js/base.js,/res/js/common.js,/res/js/SuperSlide.min.js,/res/js/jquery.validate.js,/res/js/jquery.validate.addcheck.js"></script>
    <link rel="stylesheet" href="/res/js/layer/skin/layer.css" id="layui_layer_skinlayercss" style="">

  <style>
      .linkman-texts{
          float: left;
          width: 100px;
          height: 28px;
          line-height: 28px;
          padding-left: 5px;
          margin-bottom: 10px;
          font-size: 14px;
          border: 1px solid #d8d8d8;
          background: #fff;}
      .shuaxin{
          display:block;
          margin-left: 68.5%;
          width:80px;
          border: 1px solid #D8D8D8;
          text-align: center;
          height: 25px;
          border-radius:2px;
          line-height: 25px;

      }
      .edit{
          float: left;
          width: 40px;
          height: 25px;
          line-height: 25px;
          text-align: center;
      }
      .edit:hover{
          color: #003bb3;
      }
      .edit1{
          float: left;
          width: 40px;
          height: 25px;
          line-height: 25px;
          text-align: center;
      }
      .edit1:hover{
          color: #003bb3;
      }
      .edit3{
          float: left;
          width: 40px;
          height: 25px;
          line-height: 25px;
          text-align: center;
      }
      .edit3:hover{
          color: #003bb3;
      }

  </style>
</head>

<body >
<!--右侧内容区-->
<div class="big" style="margin-top: 0px">

    <div class="wm-1200" style="margin-left: 120px;margin-top: 0px">
        <br/>

        <div class="st-main-page">
            <a href ="#" onclick="window.location.reload()"  class="shuaxin">刷新</a>
            <form id="orderfrm" method="post" action="/newtravel/order/create">

                <div class="con-order-box">
                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico01">预定信息</strong></h3>

                        <dl class="pm-list">

                            <dt>产品编号：</dt>

                            <dd>{$info['series']}</dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>产品名称：</dt>

                            <dd>{$info['productname']}</dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>产品类型：</dt>

                            <dd>{$suitInfo['title']}</dd>

                        </dl>

                        <div class="table-msg">

                            <table width="100%" border="0" class="people_info">

                                <tr>

                                    <th width="20%" height="40" scope="col"><span class="l-con">日期</span></th>

                                    <th width="20%" scope="col">类型</th>

                                    <th width="20%" scope="col">单价</th>

                                    <th width="20%" scope="col">购买数量</th>

                                    <th width="20%" scope="col">金额</th>

                                </tr>

                                {if Common::check_instr($suitInfo['propgroup'],2)}
                                <tr>
                                    <td height="40"><span class="l-con">{$info['usedate']}</span></td>

                                    <td>成人</td>

                                    <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['adultprice']}</td>

                                    <td>

                                        <div class="control-box">

                                            <span class="add-btn sub">-</span>

                                            <input type="text" id="adult_num" name="adult_num" class="number-text" readonly value="{$info['dingnum']}"/>

                                            <span class="sub-btn add">+</span>

                                        </div>

                                    </td>

                                    <td><span class="price adult_total_price"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['adultprice']}</span></td>

                                </tr>

                                {/if}

                                {if Common::check_instr($suitInfo['propgroup'],1)}

                                <tr>

                                    <td height="40"><span class="l-con">{$info['usedate']}</span></td>

                                    <td>小孩</td>

                                    <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['childprice']}</td>

                                    <td>

                                        <div class="control-box">

                                            <span class="add-btn sub">-</span>

                                            <input type="text" id="child_num" name="child_num" class="number-text" readonly value="{$info['childnum']}"/>

                                            <span class="sub-btn add">+</span>

                                        </div>

                                    </td>

                                    <td><span class="price child_total_price"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['childprice']}</span></td>

                                </tr>

                                {/if}

                                {if Common::check_instr($suitInfo['propgroup'],3)}

                                <tr>

                                    <td height="40"><span class="l-con">{$info['usedate']}</span></td>

                                    <td>老人</td>

                                    <td><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['oldprice']}</td>

                                    <td>

                                        <div class="control-box">

                                            <span class="add-btn">-</span>

                                            <input type="text" id="old_num" name="old_num" class="number-text" readonly value="{$info['oldnum']}"/>

                                            <span class="sub-btn">+</span>

                                        </div>

                                    </td>

                                    <td><span class="price old_total_price"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['oldprice']}</span></td>

                                </tr>

                                {/if}

                            </table>

                        </div>

                    </div><!--预定信息-->

                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico02">联系人信息</strong></h3>

                        <dl class="pm-list">

                            <dt><span class="st-star-ico">*</span>联系人：</dt>

                            <dd><input type="text" class="linkman-text" name="linkman" value="{$info['linkman']}" /><em class="edit">修改</em><span class="st-ts-text hide"></span></dd>

                        </dl>

                        <dl class="pm-list">

                            <dt><span class="st-star-ico">*</span>手机号码：</dt>

                            <dd><input type="text" class="linkman-text" name="linktel" value="{$info['linktel']}" /><em class="edit">修改</em><span class="st-ts-text hide"></span></dd>

                        </dl>
                        <dl class="pm-list">
                            <dt>用户类型：</dt>
                            <dd>
                                <?php $arr = array(0=>'亲子',1=>'爱玩',2=>'聚会')?>
                                <select class="linkman-text" name="usertype">
                                    <option value="0">请选择</option>
                                    <?php for($i=0;$i<count($arr);$i++):?>
                                    <option <?php if($arr[$i]==$info['usertype']){ ?>selected = "selected"<?php } ?> value="<?php echo $arr[$i];?>"><?php echo $arr[$i];?></option>
                                    <?php endfor ?>
                                </select>
                                <em class="edit">修改</em>
                            </dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>电子邮箱：</dt>

                            <dd><input type="text" class="linkman-text" value="{$info['linkemail']}" name="linkemail" /><em class="edit">修改</em></dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>订单备注：</dt>

                            <dd><textarea class="order-remarks" value="{$info['remark']}" name="remark" cols="" rows=""></textarea><em class="edit">修改</em></dd>

                        </dl>

                    </div><!--自驾联系人信息-->
<script>
    $(".edit").click(function () {
        var orderid = "{$info['id']}";
        var value =$(this).prev().val();
        var name  =$(this).prev().attr('name');
        $.ajax({
            type:"POST",
            url :"/newtravel/order/editlineorder",
            data :{orderid:orderid,value:value,name:name,table:'member_order'},
            success: function (data) {
                alert(data);
            }
        })
    })
</script>
                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico02">自驾车辆信息</strong></h3>

                        <dl class="pm-list">

                            <dt><span class="st-star-ico">*</span>出行方式：</dt>
                            <dd>
                                <input type="radio" name="travelWay"  {if $carinfo['travelWay']==1}checked="checked"{/if} value="1"/>大巴
                                <input type="radio" name="travelWay"  {if $carinfo['travelWay']==2}checked="checked"{/if} value="2"/>自驾
                                <span class="st-ts-text hide"></span>
                            </dd>

                        </dl>
                        <dl class="pm-list">

                            <dt><span class="st-star-ico">*</span>是否要帐篷：</dt>

                            <dd>
                                <input type="radio" name="tent"  {if $carinfo['tent']==1}checked="checked"{/if} value="1"/>是
                                <input type="radio" name="tent"  {if $carinfo['tent']==2}checked="checked"{/if} value="2"/>否
                                <span class="st-ts-text hide"></span>
                            </dd>

                        </dl>

                        <dl class="pm-list">

<!--                            <dt><span class="st-star-ico">*</span>品牌：</dt>-->
                            <dt>品牌：</dt>
                            <dd><input type="text" class="linkman-text" name="carbrand" value="{$carinfo['carbrand']}" placeholder="宝马，大众"/><em class="edit1">修改</em><span class="st-ts-text hide"></span></dd>

                        </dl>

                        <dl class="pm-list">

                            <dt>车型：</dt>

                            <dd><input type="text" class="linkman-text" name="cartype" value="{$carinfo['cartype']}" placeholder="suv"/><em class="edit1">修改</em><span class="st-ts-text hide"></span></dd>

                        </dl>
                        <dl class="pm-list">

                            <dt>车牌号：</dt>

                            <dd><input type="text" class="linkman-text" name="carNumber" value="{$carinfo['carNumber']}" placeholder=""/><span class="st-ts-text hide"></span></dd>

                        </dl>

<!--                        <dl class="pm-list">-->
<!---->
<!--                            <dt>年份：</dt>-->
<!---->
<!--                            <dd><input type="text" class="linkman-text" name="carage" value="{$carinfo['carage']}" placeholder="" /><em class="edit1">修改</em></dd>-->
<!---->
<!--                        </dl>-->
<!--                        <dl class="pm-list">-->
<!---->
<!--                            <dt>保险日期：</dt>-->
<!---->
<!--                            <dd><input type="text" class="linkman-text" name="insuranceDate" value="{$carinfo['insuranceDate']}" placeholder=""/><em class="edit1">修改</em></dd>-->
<!---->
<!--                        </dl>-->
<!--                        <dl class="pm-list">-->
<!---->
<!--                            <dt>档次：</dt>-->
<!---->
<!--                            <dd><input type="text" class="linkman-text" name="cargrade"  value="{$carinfo['cargrade']}" placeholder="10w,10~30w,30w以上"/><em class="edit1">修改</em></dd>-->
<!---->
<!--                        </dl>-->
<!--                        <dl class="pm-list">-->
<!---->
<!--                            <dt>车主出生日期：</dt>-->
<!---->
<!--                            <dd><input type="text" class="linkman-text" value="{$carinfo['carhost']}" name="carhost" /><em class="edit1">修改</em></dd>-->
<!---->
<!--                        </dl>-->
<!--                        <dl class="pm-list">-->
<!---->
<!--                            <dt>车主职业：</dt>-->
<!---->
<!--                            <dd><input type="text" class="linkman-text" value="{$carinfo['hostwork']}" name="hostwork" /><em class="edit1">修改</em></dd>-->
<!---->
<!--                        </dl>-->
<!--                        <dl class="pm-list">-->
<!---->
<!--                            <dt>自驾频次：</dt>-->
<!---->
<!--                            <dd><input type="text" class="linkman-text" value="{$carinfo['driveRate']}" name="driveRate" /><em class="edit1">修改</em></dd>-->
<!---->
<!--                        </dl>-->


                    </div><!--自驾车辆信息-->
  <script>
                        $(".edit1").click(function () {
                            var orderid = "{$info['id']}";
                            var value =$(this).prev().val();
                            var name  =$(this).prev().attr('name');
                            $.ajax({
                                type:"POST",
                                url :"/newtravel/order/editlineorder",
                                data :{orderid:orderid,value:value,name:name,table:'member_car'},
                                success: function (data) {
                                    alert(data);
                                }
                            })
                        })
                        $(".edit2").click(function () {
                            var dl  = $(this).siblings('dl');
                            var Spot =new Array();
                            $(this).siblings('dl').each(function(){
                                    Spot.push($(this).find('dd').find('input').val())
                            })

                            var orderid = "{$info['id']}";
                            var value =Spot;
                            var name  =$(this).siblings('dl:eq(0)').find('dd').find('input').attr('name');
                            var names =name.replace(/[0|1|2|3]/, "");
                          //  alert(names);return;
                            $.ajax({
                                type:"POST",
                                url :"/newtravel/order/editlineorder",
                                data :{orderid:orderid,value:value,name:names,table:'member_car'},
                                success: function (data) {
                                    alert(data);
                                }
                            })
                        })
 </script>
                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico03">游客信息</strong></h3>


                        <div class="visitor-msg">

        <table width="100%" border="0" id="tourer_list">
             <?php $cardtype = array(0=>'护照',1=>'身份证',2=>'台胞证',3=>'港澳通行证',4=>'军官证',5=>'出生日期')?>
             <?php $Txue     = array(0=>'请选择',1=>'XL',2=>'M',3=>'XXL')?>
              {loop $tourer $k $v}
             <tr>
                 <input type="hidden" name="t_id[{$k}]" value="{$v['id']}">
           <td width="35%" height="60">
               <span class="st-star-ico fl">*</span><span class="child"><em>姓名：</em>
              <input type="text" name="t_name[{$k}]" value ="{$v['tourername']}"  class="lm-text t_name" /></span></dd></td>
           <td width="20%">
              <span class="child">
                 <em>性别：</em>
                 <select class="t_cardtype" name="t_cardsex[{$k}]">
                 <option value="保密" {if $v['sex']=='保密'}selected="selected"{/if}>保密</option>
                 <option value="男" {if $v['sex']=='男'}selected="selected"{/if}>男</option>
                 <option value="女" {if $v['sex']=='女'}selected="selected"{/if}>女</option>
                 </select>
               </span>
           </td>
             <td width="45%">

            <span class="st-star-ico fl">*</span>

             <span class="child">

             <em>证件号：</em>

             <select class="t_cardtype" name="t_cardtype[{$k}]">

             <option value="0">请选择</option>

              {loop $cardtype $ke $val}

              <option value="{$val}" {if $v['cardtype']==$val}selected="selected"{/if}>{$val}</option>
              {/loop}
            </select>

            <input type="text" class="lm-text t_cardno" value ="{$v['cardnumber']}" name="t_cardno[{$k}]" />
            </span>
            </td>

<!--           <td width="25%">-->
<!--             <span class="st-star-ico fl">*</span>-->
<!--           <span class="child">-->
<!--            <em>T桖：</em>-->
<!--            <select class="t_cardtype" name="t_shirttype[{$k}]">-->
<!--                <option value="0">请选择</option>-->
<!--                {loop $Txue $key $vale}-->
<!--                <option value="{$vale}" {if $v['shirttype']==$vale}selected="selected"{/if}>{$vale}</option>-->
<!--                {/loop}-->
<!--            </select>-->
<!--           </span>-->
<!--                 </td>-->
           </tr>
           {/loop}
        </table>

                        </div>

                    </div><!--游客信息-->
                    <script>
                        $(".edit3").click(function () {
                            var tourerid = $(this).attr('data-id');
                            var value =$(this).prev().val();
                            var name  =$(this).prev().attr('name');

                            $.ajax({
                                type:"POST",
                                url :"/newtravel/order/editlineorder",
                                data :{orderid:tourerid,value:value,name:name,table:'member_order_tourer'},
                                success: function (data) {
                                    alert(data);
                                }
                            })
                        })
                    </script>
                    {if !empty($suitPrice['roombalance'])}

                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico04">全程单房差</strong></h3>

                        <div class="table-msg">

                            <table width="100%" border="0">

                                <tr>

                                    <th width="20%" height="40" scope="col"><span class="l-con">单房差</span></th>

                                    <th width="20%" scope="col">购买数量</th>

                                    <th width="20%" scope="col">付款方式</th>

                                    <th width="20%" scope="col">金额</th>

                                </tr>

                                <tr>

                                    <td height="40"><span class="l-con">{$info['usedate']}</span></td>

                                    <td>

                                        <div class="control-box">

                                            <span class="add-btn">-</span>

                                            <input type="text" class="number-text" id="roombalance_num" name="roombalance_num" readonly value="1" />

                                            <span class="sub-btn">+</span>

                                        </div>

                                    </td>

                                    <td>

                                        <select class="fk-style" name="roombalance_paytype" id="roombalance_paytype">

                                            <option value="1">预付</option>

                                            <option value="2">到店付</option>

                                        </select>

                                    </td>

                                    <td><span class="price roombalance_total_price"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['roombalance']}</span></td>

                                </tr>

                            </table>

                        </div>

                    </div><!--全程单房差-->

                    {/if}



                    {if !empty($insuranceInfo)}

                    <div class="product-msg">

                        <h3 class="pm-tit"><strong class="ico05">保险方案</strong></h3>

                        <div class="table-msg">

                            <table width="100%" border="1">

                                <tr>

                                    <th width="50%" height="40">保险名称</th>

                                    <th width="25%">保险期限</th>

                                    <th width="25%">单价</th>

                                </tr>

                                {loop $insuranceInfo $ins}

                                <tr >

                                    <td height="40" class="ins_title"><span class="bx-tit"><i data-title="{$ins['productname']}" data-price="{$ins['ourprice']}" data-productcode="{$ins['productcode']}"></i>{$ins['productname']}</span></td>

                                    <td>{$ins['day']}</td>

                                    <td><span class="price"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$ins['ourprice']}</span></td>

                                </tr>

                                <tr style="display: none">

                                    <td colspan="3">

                                        <div class="bx-con-show">

                                            {$ins['description']}

                                        </div>

                                    </td>

                                </tr>

                                {/loop}



                            </table>



                        </div>

                    </div><!--保险方案-->

                    {/if}

                    <!--发票信息-->



                    <div class="order-js-box">

                        <div class="total">订单结算总额：<span class="totalprice"></span></div>

                        <div class="yz">

                            <input type="button" class="tj-btn" value="保存" />

<!--                            <input type="text" name="checkcode" id="checkcode" class="ma-text" />-->
<!---->
<!--                            <span class="pic"><img src="{$cmsurl}captcha" onClick="this.src=this.src+'?math='+ Math.random()" width="80" height="32" /></span>-->
<!---->
<!--                            <span class="bt">验证码：</span>-->



                        </div>

                    </div><!--提交订单-->

                </div><!--订单内容-->

                <!--隐藏域-->

                <input type="hidden" name="suitid" value="{$suitInfo['id']}"/>

                <input type="hidden" name="orderid" value="{$info['id']}"/>

                <input type="hidden" name="ordersn" value="{$info['ordersn']}"/>

                <input type="hidden" name="wxuser" value="{$info['wxuserId']}"/>

                <input type="hidden" name="lineid" value="{$info['productautoid']}"/>

                <input type="hidden" name="usedate" value="{$info['usedate']}"/>

                <input type="hidden" name="webid" value="{$info['webid']}"/>

                <input type="hidden" name="frmcode" value="{$frmcode}"><!--安全校验码-->

                <input type="hidden" name="usejifen" id="usejifen" value="0"/><!--是否使用积分-->

                <input type="hidden" name="insurance_code" id="insurance_code" value=""/><!--保险代码-->

                <input type="hidden" id="roombalance_price" value="{$suitPrice['roombalance']}"><!--单房差价格-->

                <input type="hidden" id="ins_total_price" value="0"/> <!--保险总价-->

                <input type="hidden" id="jifentprice" value="{$suitInfo['jifentprice']}"><!--积分抵现金额-->

                <input type="hidden" id="oldprice" value="{$suitPrice['oldprice']}"><!--老人价格-->

                <input type="hidden" id="childprice" value="{$suitPrice['childprice']}"><!--小孩价格-->

                <input type="hidden" id="adultprice" value="{$suitPrice['adultprice']}"><!--成人价格-->

                <input type="hidden" id="total_price" value=""/>

            </form>

<!--            <div class="st-sidebox">-->
<!---->
<!--                <div class="side-order-box">-->
<!---->
<!--                    <div class="order-total-tit">结算信息</div>-->
<!---->
<!--                    <div class="show-con">-->
<!---->
<!--                        <ul class="ul-cp">-->
<!---->
<!--                            <li><a class="pic" href="javascript:;"><img src="{$info['litpic']}" alt="{$info['title']}" /></a></li>-->
<!---->
<!--                            <li><a class="txt" href="javascript:;">{$info['title']}({$suitInfo['title']})</a></li>-->
<!---->
<!--                        </ul>-->
<!---->
<!--                        <ul class="ul-list">-->
<!---->
<!--                            <li>购买时间：{php echo date('Y-m-d');}</li>-->
<!---->
<!--                            <li>出行日期：{$info['usedate']}</li>-->
<!---->
<!--                            {if Common::check_instr($suitInfo['propgroup'],2)}-->
<!---->
<!--                            <li>成人：<span id="people_adult_num"></span>位 &times; <i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['adultprice']}</li>-->
<!---->
<!--                            {/if}-->
<!---->
<!--                            {if Common::check_instr($suitInfo['propgroup'],1)}-->
<!---->
<!--                            <li>儿童：<span id="people_child_num"></span>位 &times; <i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['childprice']}</li>-->
<!---->
<!--                            {/if}-->
<!---->
<!--                            {if Common::check_instr($suitInfo['propgroup'],3)}-->
<!---->
<!--                            <li>老人：<span id="people_old_num"></span>位 &times; <i class="currency_sy">{Currency_Tool::symbol()}</i>{$suitPrice['oldprice']}</li>-->
<!---->
<!--                            {/if}-->
<!---->
<!--                            <li>价格：<span id="people_price"><i class="currency_sy">{Currency_Tool::symbol()}</i>5000</span></li>-->
<!---->
<!--                        </ul>-->
<!---->
<!--                        {if !empty($suitPrice['roombalance'])}-->
<!---->
<!--                        <ul class="ul-list">-->
<!---->
<!--                            <li>单房差</li>-->
<!---->
<!--                            <li>数量：<span id="room_number"></span>间</li>-->
<!---->
<!--                            <li>付款方式：<span id="room_paytype">预付</span></li>-->
<!---->
<!--                            <li>价格：<span id="room_price"><i class="currency_sy">{Currency_Tool::symbol()}</i>500</span></li>-->
<!---->
<!--                        </ul>-->
<!---->
<!--                        {/if}-->
<!---->
<!--                        {if !empty($insuranceInfo)}-->
<!---->
<!--                        <ul class="ul-list" id="ins_list">-->
<!---->
<!---->
<!---->
<!--                        </ul>-->
<!---->
<!---->
<!---->
<!--                        {/if}-->
<!---->
<!--                        <div class="total-price">订单总额：<span class="totalprice"><i class="currency_sy">{Currency_Tool::symbol()}</i>9995.00</span></div>-->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--           </div>-->
            <!--订单结算信息-->

        </div>



    </div>

</div>










<script>

    $(function(){

        $('.tj-btn').click(function(){

            $("#orderfrm").submit();



        })

        //表单验证



        $("#orderfrm").validate({



            submitHandler:function(form){

                form.submit();

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
                travelWay:{
                    required:true
                },

                tent:{

                    required:true
                }
//                wxuser :{
//                     required :true
//                }
            },

            messages: {

                linkman:{

                    required: "请填写联系人信息"

                },

                linktel:{

                    required: "请填写联系方式"

                },
                wxuser :{
                    required :"请搜索并确认微信用户名"
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



        get_total_price();

        add_tourer();



        //数量减少

        $(".control-box").find('.add-btn').click(function(){



            var obj = $(this).parent().find('.number-text');

            var cur = Number(obj.val());



            if(cur>0){

                cur = cur-1;

                obj.val(cur);

                var total = get_total_num();

                if(total<=0){

                    obj.val(cur+1);

                }

                remove_tourer();

            }



            get_total_price();

        })

        //数量添加

        $(".control-box").find('.sub-btn').click(function(){

            var obj = $(this).parent().find('.number-text');

            var cur = Number(obj.val());

            cur++;

            obj.val(cur);

            add_tourer();

           get_total_price();

        })

        //单房差预付方式

        $("#roombalance_paytype").change(function(){

            $("#room_paytype").html($(this).find("option:selected").text());

        })

        //保险选择

        $(".ins_title").click(function(){



            $(this).find('.bx-tit').find('i').toggleClass('on');

            $(this).parents('tr').first().next().toggle();



            var adult_num = Number($("#adult_num").val());

            var child_num = Number($("#child_num").val());

            var old_num = Number($("#old_num").val());

            adult_num = isNaN(adult_num) ? 0 : adult_num;

            child_num = isNaN(child_num) ? 0 : child_num;

            old_num = isNaN(old_num) ? 0 : old_num;

            var total_num = adult_num + child_num + old_num;

            var ins_total_price = 0;

            var html = ' <li>保险费用</li>';

            var arr = new Array();

            $(".ins_title").find('.bx-tit i.on').each(function(i,obj){

                var ins_title = $(this).attr('data-title');

                var ins_price = $(this).attr('data-price');

                var ins_productcode = $(this).attr('data-productcode');

                var total = total_num * ins_price;

                ins_total_price+=total;

                arr.push(ins_productcode);

                html+='<li>'+ins_title+'</li>';

                html+='<li>'+total_num+'份 &times; <i class="currency_sy">￥</i>'+ins_price+'</li>';



            });

            $("#ins_total_price").val(ins_total_price);

            $('#ins_list').html(html);

            var ins_productcode = arr.join(',');

            $("#insurance_code").val(ins_productcode);

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



    /*获取总价格*/

    function get_total_price()

    {

        var adult_num = Number($("#adult_num").val());

        var child_num = Number($("#child_num").val());

        var old_num = Number($("#old_num").val());

        adult_num = isNaN(adult_num) ? 0 : adult_num;

        child_num = isNaN(child_num) ? 0 : child_num;

        old_num = isNaN(old_num) ? 0 : old_num;


        var adult_price = $("#adultprice").val();

        var child_price = $("#childprice").val();

        var old_price = $("#oldprice").val();



        //按人群价格

        var adult_total_price =ST.Math.mul(adult_num,adult_price);// adult_num * adult_price;

        var child_total_price = ST.Math.mul(child_num , child_price);

        var old_total_price = ST.Math.mul(old_num , old_price);



        $(".adult_total_price").html('<i class="currency_sy">￥</i>'+adult_total_price);

        $(".child_total_price").html('<i class="currency_sy">￥</i>'+child_total_price);

        $(".old_total_price").html('<i class="currency_sy">￥</i>'+old_total_price);





        //右侧人群价格统计信息

        var people_price = ST.Math.add(adult_total_price  , child_total_price);

        people_price= ST.Math.add(people_price, old_total_price);

        $("#people_adult_num").html(adult_num);

        $("#people_child_num").html(child_num);

        $("#people_old_num").html(old_num);

        $("#people_price").html('<i class="currency_sy">￥</i> '+people_price);



        //单房差统计

        var room = $("#roombalance_num").val();

        var room_num = room == undefined ? 0 : Number(room);

        var room_price = $("#roombalance_price").val();

        var room_total_price = ST.Math.mul(room_num , room_price);

        $('.roombalance_total_price').html('<i class="currency_sy">￥</i> '+room_total_price);

        //右侧单房差信息

        $("#room_number").html(room_num);

        $("#room_price").html('<i class="currency_sy">￥</i>'+room_total_price);



        //右侧保险总价

        var ins_total_price = parseFloat($("#ins_total_price").val());



        var jifentprice = 0;



        //是否使用积分

        if($('.use-jf span i').attr('class')=='on'){

            jifentprice = $("#jifentprice").val();

            $("#usejifen").val(1);

        }else{

            $("#usejifen").val(0);

        }



        //计算总价



        var total_price = ST.Math.add(people_price ,room_total_price);

        total_price=ST.Math.add(total_price,ins_total_price) ;

        $("#total_price").val(total_price);

        //减去积分抵现价格

        total_price = total_price- jifentprice;

        $('.totalprice').html('<i class="currency_sy">￥</i>'+total_price);





    }

    /*生成tourer html*/

    function add_tourer(){



        var adult_num = parseInt($("#adult_num").val());

        var child_num = parseInt($("#child_num").val());

        var old_num = parseInt($("#old_num").val());



        adult_num = isNaN(adult_num) ? 0 : adult_num;

        child_num = isNaN(child_num) ? 0 : child_num;

        old_num = isNaN(old_num) ? 0 : old_num;

        var total_num = adult_num + child_num + old_num;

        var html = '';

        var hasnum = $("#tourer_list").find('tr').length;



        for(var i=hasnum;i<total_num;i++){



            html+=' <tr>';

            html+='<td width="35%" height="60"><span class="st-star-ico fl">*</span><span class="child"><em>姓名：</em><input type="text" name="t_name['+i+']"';

            html+=' class="lm-text t_name" /></span></dd></td>';

            html+='<td width="20%">';

            html+='<span class="st-star-ico fl"></span>';

            html+='<span class="child">';

            html+='<em>性别：</em>';

            html+='<select class="t_cardtype" name="t_cardsex['+i+']">';

            html+= '<option value="保密">保密</option>';

            html+= '<option value="男">男</option>';

            html+= '<option value="女">女</option>';

            html+= '</select>';

            html+= '</span>';

            html+= '</td>';

            html+='<td width="45%">';

            html+='<span class="st-star-ico fl">*</span>';

            html+='<span class="child">';

            html+='<em>证件号：</em>';

            html+='<select class="t_cardtype" name="t_cardtype['+i+']">';

            html+= '<option value="0">请选择</option>';

            html+= '<option value="护照">护照</option>';

            html+= '<option value="身份证">身份证</option>';

            html+= '<option value="台胞证">台胞证</option>';

            html+= '<option value="港澳通行证">港澳通行证</option>';

            html+= '<option value="军官证">军官证</option>';

            html+= '<option value="出生日期">出生日期</option>';

            html+= '</select>';

            html+= '<input type="text" class="lm-text t_cardno" name="t_cardno['+i+']" />';

            html+= '</span>';

            html+= '</td>';

            html+= '</tr>';





        }

        $("#tourer_list").append(html);



        //动态添加游客姓名

        $("input[name^='t_name']").each(

            function(i,obj) {

                //console.log(obj);

                //$(obj).rules("remove");

                $(obj).rules("add", { required: true, messages: { required: "请输入姓名"} });

            }

        )

        //证件类型

        $("input[name^='t_cardno']").each(

            function(i,obj) {

                $(obj).rules("remove");

                $(obj).rules("add", { required: true, messages: { required: "请输入证件号"} });

            }

        )



    }

    /*移除tourer*/

    function remove_tourer(){

        $("#tourer_list tr").last().remove();

    }



    function get_total_num(){

        var adult_num = Number($("#adult_num").val());

        var child_num = Number($("#child_num").val());

        var old_num = Number($("#old_num").val());

        adult_num = isNaN(adult_num) ? 0 : adult_num;

        child_num = isNaN(child_num) ? 0 : child_num;

        old_num = isNaN(old_num) ? 0 : old_num;

        return adult_num + child_num + old_num;

    }


   function serach(th){

       var value = $(th).prev('input').val();
       $.ajax({
             type:'POST',
             url :'/newtravel/line/get_wxuser',
             data :{nickname:value},
             dataType:'json',
             success: function (data) {
                 var  html ;
                 html+= "<option value=\"0\" >请选择</option>";
                 for(var i=0;i<data.length;i++){
                    html += "<option value="+data[i]['id']+" >"+data[i]['nickname']+"</option>";
                 }
                 $("#wxuser").html(html);
             }
       });
   }










</script>



</body>

</html>

