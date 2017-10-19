<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>预订{$info['title']}-{$GLOBALS['cfg_webname']}</title>

    <!-- main -->

    {include "pub/varname"}

    {Common::css('mycss/layout.css,mycss/base.css,mycss/ticket_order_min.css,mycss/doubleDate.css')}

    {Common::js('jquery.min.js,jquery.validate.js,jquery.validate.addcheck.js,myjs/payfor.js')}

    <script type="text/javascript">

        $(document).ready(function(){

            $(".detail_box").hide();

            $(".detail_btn").click(function(){

                $(this).toggleClass("on");

                $(".detail_box").toggle();

            });

            $(".close").click(function(){

                $(".detail_box").hide();

                $(this).parent().prev().children("a.detail_btn").removeClass("on");

            });



        });

    </script>

</head>

<body>

<!-- 登陆 -->
<div class="login-box">

    <div class="container">

        <div class="login-tit">

            <div class="login-l" id="loginstatus"></div>

            <div class="login-r">
                <a href="/member/order/all">我的订单</a> |
                <a href="javascript:" class="weixin">微信
                    <div class="dropdown1" style="position: absolute;z-index: 888;">
                        <div class="weixin"><img src="/res/images/img/erwei.jpg" width="120" height="120"></div>
                    </div>
                </a> | <!--a href="#">微博</a> | <a href="#"> 手机APP</a> |-->
                <span class="logo-tel">客服电话：</span><span class="logo-org">{$GLOBALS['cfg_phone']}</span></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>

<section>

    <div class="container">

        <div class="formbox">

            <div class="flow_steps">

                <ul>

                    <li class="current"><span>1.</span>确认订单</li>

                    <li><span>2.</span>选取支付方式</li>

                    <li class="last"><span>3.</span>购买成功</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<form id="orderfrm" method="post" action="{$cmsurl}spot/create">

<section>

    <div class="container">

        <div class="traveller_box mt20">

            <div class="header-1"><h2>预定信息</h2>

            </div>

            <div class="product_item">

                <h3 class="title"> <span>{$suitInfo['title']}</span> <a href="javascript:;" class="detail_btn detail.on" data-action="detail_toggle">详情<i></i></a> </h3>

                <div style="display: block;" class="detail_box product_detail" data-action="detail">

                    <dl>

                        <dt>产品编号</dt>

                        <dd>{$info['series']}</dd>

                    </dl>

                    <dl>

                        <dt>产品名称：</dt>

                        <dd>{$info['title']}<br>

                        </dd>

                    </dl>

                    <dl>

                        <dt>门票类型：</dt>

                        <dd>{$suitInfo['title']}<br>

                        </dd>

                    </dl>

                </div>

            </div>



            <div class="reply_info">



                <div class="reply_item">

                    <div class="reply_item_l"> <i>*&nbsp;</i>日期&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; </div>

                    <div class="reply_item_r">

                        <ul class="iptgroup">

                            <li>出发日期：</li>

                            <li><input type="text" class="inputdate" name="usedate" id="usedate" value="{date('Y-m-d')}"/></li>

                        </ul>

                    </div>



                    <div class="clearfix"></div>

                </div>

                <div class="reply_item">

                    <div class="reply_item_l"> <i>*&nbsp;</i>数量&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; </div>

                    <div class="reply_item_r">

                        <div class="p_number">

                            <div class="add_chose">

                                <a class="reduce disable" onClick="setAmount.reduce('#dingnum')" href="javascript:void(0)">

                                </a>

                                <input type="text" name="dingnum" value="1" id="dingnum" onKeyUp="setAmount.modify('#dingnum')" class="text" />

                                <a class="add" onClick="setAmount.add('#dingnum')" href="javascript:void(0)">

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>

                <div class="reply_item">

                    <div class="reply_item_l">价格&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</div>

                    <div class="reply_item_r reply-p"><dfn class="totalprice">{Currency_Tool::symbol()}{$info['price']}</dfn><!--span class="tip">（含特惠票<i>¥50.00</i>）</span--></div>

                </div>





            </div>





        </div>

    </div>

    </div>

</section>

<section>

    <div class="container">

        <div class="traveller_box mt20">

            <div class="header-1">

                <h2>取票人/出行人信息</h2>

                <span class="tip">您需填写<i id="J-qty">1</i>个出行人信息。</span> </div>

            <div class="traveller_input_box">

                <div class="fill_box" data-fill="false">

                    <ul>

                        <li class="item">

                            <label><i>* </i>姓名&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>

                            <div class="input_sec">

                                <input class="name_input input_m" name="linkman" value="{$userInfo['truename']}" data-regex="checkName" placeholder="姓名" type="text">

                            </div>

                            <!--<span class="input_help" data-type="input_help">填写说明</span> --></li>

                        <li class="item">

                            <label><i>* </i>手机号码&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>

                            <div class="input_sec">

                                <input class="input_m" name="linktel" value="{$userInfo['mobile']}" data-regex="checkMobile" placeholder="接收确认短信" type="text">

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<section>

  <!--  <div class="container" style="padding-bottom:80px;">

        <div id="J-protocol-box" class="protocol_box">

            <input name="" type="checkbox" value="">

            <a href="#" class="toggle_confirm select"><i></i>同意</a> <a href="#" class="open">古武当山协议</a> </div>

    </div>-->

</section>

<div class="defray_box">

    <div class="pay_box">

        <!-- 现付显示提交订单 -->

        <a id="J-submit" href="javascript:;" class="btn_submit f_r">{if $suitInfo['paytype']==4}确认订单{else}去支付{/if}</a>

        <div class="f_r">

            <div class="total_price"> 订单总金额 : <dfn id="J-price" class="totalprice">{Currency_Tool::symbol()}{$info['price']}</dfn> <!-- 现付显示 -->



            </div>

        </div>

    </div>

</div>

    <!--隐藏域-->



    <input type="hidden" name="productid" value="{$info['id']}"/>

    <input type="hidden" name="webid" value="{$info['webid']}"/>

    <input type="hidden" name="frmcode" value="{$frmcode}"><!--安全校验码-->

    <input type="hidden" name="usejifen" id="usejifen" value="0"/><!--是否使用积分-->

    <input type="hidden" id="price" value="{$suitInfo['ourprice']}"/>

    <input type="hidden" id="jifentprice" value="{$info['jifentprice']}"><!--积分抵现金额-->

    <input type="hidden" name="suitid" id="suitid" value="{$suitInfo['id']}"/>

    <input type="hidden" id="total_price" value=""/>

</form>

{Common::js('layer/layer.js',0)}

{Common::js('datepicker/WdatePicker.js',0)}

<script>

var SITEURL = "{$cmsurl}";

$(function(){
    $(".weixin").mouseover(function(){
        //  $(this).addClass("hover");
        $(this).children(".dropdown1").show()
    });
    $(".weixin").mouseout(function(){
        // $(this).removeClass("hover");
        $(this).children(".dropdown1").hide()
    });
    //出发日期选择

    $(".inputdate").focus(function(){



        WdatePicker({dateFmt:'yyyy-MM-dd',minDate:'%y-%M-%d',doubleCalendar:false,isShowClear:false,readOnly:true,errDealMode:1,onpicked:function(){

            $('.usedate').html($('.inputdate').val())

        }})

    })

    //登陆状态

    $.ajax({

        type:"POST",

        url:SITEURL+"member/login/ajax_is_login",

        dataType:'json',

        success:function(data){

            if(data.status){

                $txt = '<a class="dl" style="padding:0" href="javascript:;">你好,</a>';

                $txt+= '<a class="dl" href="{$cmsurl}member/">'+data.user.nickname+'</a>';

                $txt+= '<a class="dl" href="{$cmsurl}member/login/loginout">退出</a>';

                //$txt+= '<a class="dl" href="{$cmsurl}member">个人中心</a>';

                $txt = '您好:<a href="{$cmsurl}member/">'+data.user.nickname+'</a>，欢迎使用云智慧旅游网！&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$cmsurl}member/login/loginout">退出</a>';

            }else{



                //$txt = '<a class="dl" href="{$cmsurl}member/login">登录</a>';

                // $txt+= '<a class="zc" href="{$cmsurl}member/register">免费注册</a>';

                $txt = '您好，欢迎使用云智慧旅游网！&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$cmsurl}member/login">登录</a> | <a href="{$cmsurl}member/register">注册</a>';

            }

            $("#loginstatus").html($txt);

        }

    })

    //提交订单

    $('#J-submit').click(function(){

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

        url: SITEURL + 'spot/ajax_check_storage',

        data: {startdate: startdate,  dingnum: dingnum, suitid: suitid},

        async: false,

        dataType: 'json',

        success: function (data) {

            flag = data.status;

        }

    })

    return flag;



}

//获取总价--2016/03/27 author：tanyichao

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

    $(".totalprice").html('{Currency_Tool::symbol()}'+price);



}

</script>

</body>

</html>