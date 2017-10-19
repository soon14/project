<!--订单中心用的js事件-->

<script>

    $(function(){



        //取消订单

        $(".cancel_order").click(function(){

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



        })

    })

</script>