<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>预订{$info['title']}-{$GLOBALS['cfg_webname']}</title>


    <link type="text/css" href="/min/?f=/res/css/mycss/layout.css,/res/css/mycss/base.css,/res/css/mycss/ticket_order_min.css,/res/css/mycss/doubleDate.css" rel="stylesheet">
    <script type="text/javascript" src="/min/?f=/res/js/jquery.min.js,/res/js/jquery.validate.js,/res/js/jquery.validate.addcheck.js,/res/js/myjs/payfor.js"></script>

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
<section>
    <a href="javascript:" onclick="window.location.reload()">刷新</a>


</section>

<form id="orderfrm" method="post" action="/newtravel/spot/createorder">

<section>

        <div class="container"  style="width: 480px">

            <div class="traveller_box mt20">

                <div class="header-1">

                    <h2>选择套餐</h2>

                    <span class="tip"></span> </div>

                <div class="traveller_input_box">

                    <div class="fill_box" data-fill="false">


                        <table width="100%" class="table table-hover">
                            <tr>

                                <th width="22%">门票类型

                                </td>

                                <th><div class="text-left">名称</div>

                                </td>

                                <th width="10%">优惠价

                                </td>

                                <th width="22%">预定

                                </td>

                            </tr>
                            {loop $suit $type}
                            {st:spot action="suit_by_type" row="10" productid="$info['id']" suittypeid="$type['id']" return="suitlist"}

                            {loop $suitlist $k $suit}
                            <tr class="rr" >

                                <td rowspan="2" bgcolor="#eff4fa" class="tab-line"><b>{if $k>0}{else}{$type['title']}{/if}</b></td>

                                <td><div class="text-left">{$suit['title']}<dfn class="arrow2"><a href="#"></a></dfn> </div></td>


                                <td><i>{if !empty($suit['ourprice'])}{Currency_Tool::symbol()}{$suit['ourprice']}{else}电询{/if}</i></td>

                                <td><div class="booking-but" onclick="gocreate(this,{$info[id]},{$suit[id]})"><a class="booking-btn" href="javascript:;" data-suitid="{$suit['id']}">{if $suit['paytype']==4}景区支付{else}创建订单{/if}</a></div></td>

                            </tr>
                            <tr class="ticket-detail">

                                <td colspan="5" class="remark">

                                    <div>

                                        {$suit['description']}

                                    </div>

                                </td>

                            </tr>
                            {/loop}
                            {/loop}

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--隐藏域-->


</form>

{Common::getScript('layer/layer.js',0)}

{Common::getScript('datepicker/WdatePicker.js',0)}

<script>

    function gocreate(th,id,suitid)
    {
        //parent.document  为父页面
        $('.ui-popup-show', parent.document).css('display','none').next('div').css('display','none');
        var url = SITEURL+'spot/gobook/parentkey/product/itemid/4/id/'+id+"?suitid="+suitid;

        parent.window.addTab('创建订单',url,0);

    }
var SITEURL = "/newtravel/";

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