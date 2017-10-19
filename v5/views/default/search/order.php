<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>订单查询-{$webname}</title>
    {include "pub/varname"}
    {Common::css('photo.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,jquery.validate.js,jquery.validate.addcheck.js,jquery.cookie.js')}

</head>

<body>

{request "pub/header"}
  
  <div class="big">
  	<div class="wm-1200">
    
    	<div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;订单查询
      </div><!--面包屑-->
    
    	<div class="inquiry-order-box">
        <form action="{$cmsurl}search/order" method="get" id="queryfrm">
      	<div class="inquiry-msg">
        	<h3>订单查询</h3>
          <ul>
          	<li><strong>手机号码：</strong><input type="text" class="cx-text" id="mobile" name="mobile" value="{$mobile}" /><span class="send-txt" style="display: none;">验证码已经发送到您手机，请注意查收</span></li>

            <li><strong>验证码：</strong><input type="text" class="cx-text" id="checkcode" name="checkcode" />
                <input type="button" class="send-yzm sendmsg" value="发送验证码"/>
            </li>
          </ul>
          <input type="hidden" id="frmcode" name="frmcode" value="{$frmcode}"/>
          <div class="begin-cx-btn"><a href="javascript:;" class="query">开始查询</a></div>
        </div>
       </form>
        {if !empty($mobile)}
         <div class="inquiry-box">
        	<h3>手机{$mobile}查询到以下订单：</h3>
          <div class="inquiry-con">
            <div class="order-list">
              <table width="100%" border="0">
                <tr>
                  <th width="40%" height="38" scope="col">订单信息</th>
                  <th width="20%" height="38" scope="col">订单金额</th>

                  <th width="20%" height="38" scope="col">订单状态</th>
                  <th width="20%" height="38" scope="col">订单操作</th>
                </tr>
                {loop $list $row}
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
                  <td align="center"><span class="price"><i class="currency_sy">{Currency_Tool::symbol()}</i>{$row['totalprice']}</span></td>
                  <td align="center"><span class="dfk">{$row['status']}</span></td>
                  <td align="center">
                    <a class="now-fk" href="{$cmsurl}member/order/view?orderid={$row['id']}">立即付款</a>
                    <a class="order-ck" href="{$cmsurl}member/order/view?ordersn={$row['ordersn']}">查看订单</a>
                  </td>
                </tr>
                {/loop}

              </table>
            </div>
            <div class="main_mod_page clear">
              {$pageinfo}
            </div>
             {if empty($list)}
              <div class="order-no-have"><span></span><p>您的订单空空如也，<a href="{$GLOBALS['cfg_basehost']}">去逛逛</a>去哪儿玩吧！</p></div>
             {/if}
          </div>
        </div>
        {/if}
        
      </div><!-- 订单查询 -->
    
    </div>
  </div>
  
{request "pub/footer"}
{Common::js('layer/layer.js')}

<script>
    $(function(){

        $("#queryfrm").validate({

            submitHandler:function(form){
                form.submit();
            } ,
            errorClass:'need-txt',
            errorElement:'span',
            rules: {


                mobile:{
                    required:true,
                    isMobile:true

                },
                checkcode:{
                    required:true,
                    remote:{
                        url:SITEURL+'search/ajax_check_msgcode',
                        type: 'post',
                        data:{
                            mobile: function() {
                                return $( "#mobile" ).val();
                            }}
                    }
                },
                adultnum:{
                    required:true,
                    digits:true
                },
                childnum:{
                    digits:true
                }
            },
            messages: {

                mobile:{
                    required: ""
                },

                checkcode:{
                    required:"",
                    remote:""
                }

            },
            highlight: function(element, errorClass, validClass) {
                $(element).attr('style','border:1px solid red');
            },
            unhighlight:function(element, errorClass){
                $(element).attr('style','');
            }
            /* errorPlacement:function(error,element){
             *//* if(!element.is('#checkcode'))
             {
             $(element).parent().append(error)
             }
             else{
             layer.tips('验证码错误', '#checkcode', {
             tips: 3
             });
             }*//*

             }*/



        });

        //查询
        $('.query').click(function(){
            $("#queryfrm").submit();
        })

        //发送短信验证码
        $('.sendmsg').click(function(){
            var mobile = $("#mobile").val();
            var regPartton=/^1[3-8]+\d{9}$/;
            if (!regPartton.test(mobile))
            {
                layer.alert('请输入正确的手机号码', {icon:5});
                return false;
            }


            var t=this;
            t.disabled=true;


            //发送次数判断
            var sendnum = $.cookie('sendnum') ? $.cookie('sendnum') : 0;

            if(sendnum>3){
                //layer.alert("验证码发送请求过于频繁,请过15分钟后再试",{icon:5});
                //return false;
            }

            if(sendnum!=0){
                $.cookie('sendnum', sendnum++);
            }else{
                $.cookie('sendnum', 1,{ expires: 1/96 });
            }

            var token = "{$frmcode}";
            var url = SITEURL+'search/ajax_send_msgcode';

            $.post(url,{mobile:mobile,token:token},function(data) {
                if(data.status)
                {

                    t.disabled=true;
                    code_timeout(60);
                    $(".send-txt").show();
                    return false;
                }
                else
                {
                    t.disabled=false;
                    layer.alert(data.msg,{icon:5});
                    return false;
                }
            },'json');


        })
    })
    //短信发送倒计时
    function code_timeout(v){
        if(v>0)
        {
            $('.sendmsg').val((--v)+'秒后重发');
            setTimeout(function(){
                code_timeout(v)
            },1000);
        }
        else
        {
            $('.sendmsg').val('重发验证码');
            $('.sendmsg').disabled = false;
        }
    }
</script>

</body>
</html>
