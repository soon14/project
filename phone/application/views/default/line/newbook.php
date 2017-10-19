<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$info['title']}预订</title>
    {Common::css('line/bootstrap.css')}
    {Common::css('line/public.css')}
    {Common::css('line/mitao_order.css')}
    {Common::js('jquery.min.js,common.js,amazeui.js,template.js,layer/layer.m.js')}
    {Common::js('mitao/mitao_v1_1.js')}

</head>
<body class="orderpage">

<!-- 米淘 头部 -->

<section class="mid_content" >
    <form  action="{$cmsurl}line/create" id="orderfrm" method="post">

  <!-- 订单 头部 -->
  <div class="mt_order_head">
    <h2>{$info['title']}</h2>
  </div>


  <!-- 订单 时间 -->
  <div class="mt_order_time">
      <div class="mt_order_title">选择的时间</div>
      <div class="probox clearfix">
          <p class="data">{$day}</p>
          <i class="prochk"></i>
      </div>
  </div>


  <!-- 订单 数量选择 -->
  <div class="mt_order_num">
    <div class="mt_order_title">选择数量<i class="Surplus"></i></div>
    <table class="pay-num" cellspacing="0" cellpadding="0">
      <tbody class="people_num">



      <tr id="adult_div" style="display: none">
          <td>成人</td>
          <td><p><i class="adultprice money"></i><i class="dw">/人</i></p></td>
          <td class="text-center">
              <div class="people_num">
                  <a class="sub" href="javascript:;"></a>
                  <input type="text" name="dingnum" id="adultnum" class="order-num" value="1" />
                  <a class="add" href="javascript:;"></a>
              </div>
          </td>
      </tr>


        <tr id="child_div" style="display: none">
          <td width="20%">儿童</td>
          <td width="40%"><p><i class="childprice money"></i><i class="dw">/人</i></p></td>
          <td width="40%" class="text-center">
            <div class="people_num">
              <a class="sub" href="javascript:;"></a>
                <input type="text" name="childnum" class="order-num" id="childnum" value="0" />
              <a class="add" href="javascript:;"></a>
            </div>
          </td>
        </tr>



        <tr id="old_div" style="display: none">
            <td>老人</td>
            <td><p><i class="oldprice money"></i><i class="dw">/人</i></p></td>
            <td class="text-center">
                <div class="people_num">
                    <a class="sub" href="javascript:;"></a>
                    <input type="text" name="oldnum" id="oldnum" class="order-num" value="0" />
                    <a class="add" href="javascript:;"></a>
                </div>
            </td>
        </tr>
      </tbody>
    </table>
  </div>


  <!-- 订单 联系人信息 -->
  <div class="mt_order_Contacts" >
    <div class="mt_order_title">联系人信息</div>

      <div class="form-group username">
        <label>姓名</label>
        <input placeholder="请输入您的真实姓名" type="text" id="linkman" name="linkman" value="{$member['truename']}">
      </div>
      <div class="form-group password">
        <label>电话</label>
        <input placeholder="请输入您的真实手机" type="phone" id="linktel" name="linktel" value="{$member['mobile']}">
      </div>
        <!--隐藏域-->
        <input type="hidden" name="suitid" id="suitid" value="{$suitid}"/>
        <input type="hidden" class="startdate" name="startdate" id="startdate" value="{$day}"/>
        <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
        <input type="hidden" name="typeid"  value="{$typeid}"/>
        <input type="hidden" name="deposite" id="deposit" value="">
        <input type="hidden" name="storage" id="storage" value=""/>
        <input type="hidden" name="usejifen" id="usejifen" value="0"/>

  </div>
    </form>
  <!-- 订单 合同阅读 -->
<!--  <p class="chkon">-->
<!--      <span>我已阅读并同意</span>-->
<!--      <a style="color:#8ac43e" href="/phone/mitao/agree?aid={$info['aid']}">协议条款、取消条款</a>-->
<!--      <span>等重要条款</span>-->
<!--  </p>-->

  <div class="bot-btn">
      <i class="btnl">
          <i class="total">需支付</i>
          <i class="totalprice"></i>
      </i>
      <i class="btnr btn_book">我要支付</i>
  </div>

</section>
<div id="js_calendar" style="display: none">

</div>
<script>
    var SITEURL = "{URL::site()}";
    $(function(){
        //套餐选择
        $(".mt_order_time .probox").click(function(){

            var suitid = $("#suitid").val();
            var day    = $("#startdate").val();
            get_people_group(suitid,day);

        })
        $(".mt_order_time .probox").first().trigger('click');

        //减少人数
        $('.sub').click(function(){
            var num=0;
            $('.people_num').find('.order-num').each(function(){
                num+=parseInt($(this).val());
            });
            if(num<2){
                return false;
            }
            var dingnum = $(this).parent().find('.order-num');
            var peopelnum = dingnum.val();
            if(peopelnum>=1){
                dingnum.val(parseInt(dingnum.val())-1);
            }
            get_total_price();
        });

        //添加人数
        $('.add').click(function(){

            var dingnum = $(this).parent().find('.order-num');
            dingnum.val(parseInt(dingnum.val())+1);
            get_total_price();

        });
        //输入人数
        $('.order-num').each(function(){
            $(this).change(function(){
                var val=$(this).val();
                if(val<1){
                    $(this).val(0);
                    return false;
                }
                get_total_price();
            });
        });

        //关闭日历
        $("body").delegate('.close_calendar','click',function(){
            hide_calendar();
        })
        //常用联系人选择事件
        $("body").delegate('.linkman_list li','click',function(){
            $(this).find('i').toggleClass('on');
        })

        //常用联系人选择
        $("#chooseman").click(function(){
            var url ='{$cmsurl}member/login/ajax_is_login';

            $.getJSON('/phone/line/ajax_is_login', {}, function (data) {
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
                                var sex = $(obj).attr('data-sex');
                                var lkmobile = $(obj).attr('data-mobile');
                                var idcard = $(obj).attr('data-idcard');
                                $("#tourer_list").find('dl').each(function (k, t) {
                                    if ($(t).find('input').val() == '') {
                                        $(t).find('.tourman').val(lkman);
                                        if(sex == 1){
                                            $(t).find('.toursex').val('男');
                                            $($(t).find('a').get(0)).addClass('on');
                                            $($(t).find('a').get(1)).removeClass('on');
                                        }else{
                                            $(t).find('.toursex').val('女');
                                            $($(t).find('a').get(1)).addClass('on');
                                            $($(t).find('a').get(0)).removeClass('on');
                                        }
                                        // $(t).find('.tourmobile').val(lkmobile);
                                        $(t).find('.tourcard').val(idcard);
                                        return false;
                                    }
                                })
                            })
                            layer.closeAll();
                        }
                    });
                }else {
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
            });
        });

        //提交订单
        $(".btn_book").click(function(){
            //检测购买数量
            var p=false;//網絡影響 产生的多个订单
            $num=0;
            $('.people_num').find('tr[id]').each(function(){
                var isshow=$(this).css('display')!='none'?true:false;
                if(!isshow){
                    return true;
                }
                $num+=parseInt($(this).find('input').val());
            });
            if($num<1){
                layer.open({
                    content: '请选择预订数量！',
                    btn: ['{__("OK")}']
                });
                return false;
            }
           // $validate = requireCheck();
            if(p==false) {
                   p=true;
                    var lkman = $("#linkman").val();
                    var lkmobile = $("#linktel").val();
                  //  var linkidcard = $("#linkidcard").val();
                    //联系人信息验证
                    if (lkman == '') {
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
//                    re = /^(\d{18,18}|\d{15,15}|\d{17,17}x)$/
//                    if (linkidcard != '') {
//                        if (!re.test(linkidcard)) {
//                            layer.open({
//                                content: '{__("身份证不合法")}',
//                                btn: ['{__("OK")}']
//                            });
//                            return false;
//                        }
//                    }
                    //订单金额验证
                    var totalprice = Number($('.totalprice').first().text());
                    if (totalprice == 0) {
                        layer.open({
                            content: '{__("error_no_product")}',
                            btn: ['{__("OK")}']
                        });
                        return false;
                    }
                    //库存验证
                    var storage = $("#storage").val();
                    var manNum = parseInt($('#adultnum').val());
                    var childNum = parseInt($('#childnum').val());
                    var oldNum = parseInt($('#oldnum').val());
                    var totalNum = manNum + childNum + oldNum;

                    if (storage != -1 && (storage < totalNum)) {
                        layer.open({
                            content: '{__("error_no_storage")}',
                            btn: ['{__("OK")}']
                        });
                        return false;
                    }
                    if(p==true){
                        $("#orderfrm").submit();
                        p=false;
                    }

            }
        });
    });


    //require 检测
    function requireCheck()
    {
        $flag = true;
        $('.require').each(function(i,obj){

            if($(obj).val()==''){
                layer.open({
                    content: '请您填写游客信息',
                    btn: ['{__("OK")}']
                })
                $flag = false;                }
        })
        return $flag;
    }

    //重新计算价格
    function get_total_price()
    {
        var money=0;
        var manNum = Number($('#adultnum').val());
        var childNum = Number($('#childnum').val());
        var oldNum = Number($('#oldnum').val());
        var manprice = Number($('.adultprice').html());
        var childprice = Number($('.childprice').html());
        var oldprice = Number($('.oldprice').html());
        var total =ST.Math.mul(manNum,manprice);
        total=ST.Math.add(total, ST.Math.mul(childNum,childprice));
        total=ST.Math.add(total, ST.Math.mul(oldNum,oldprice));

        //积分抵现
        if($('#usejifen').val()>0 && total>0){
            money=-(parseFloat($('#jifen-price').html()));
        }
        //计算总价格
        $('.totalprice').html(total+money);
        var totalnum = manNum+childNum+oldNum;
        gen_tourer(totalnum);


    }

    //生成游客信息
    function gen_tourer(num)
    {

        var list=$('#tourer_list').find('dl').length+1;
        if(list>num){
            $('#tourer_list').find('dl:gt('+(num-1)+')').remove();
        }else{
            var out = '';
            for(var i=list;i<=num;i++){
                out+=' <dl class="radio">';
                out+='   <dt>游客'+i+'</dt>';
                out+='    <dd><strong>姓名：</strong><input type="text"  name="tourname[]" placeholder="游客姓名" class="tourman require" /><span>(必填)</span></dd>';
                out+='    <dd><strong>性别：</strong><input type="hidden" name="toursex[]" class="toursex require" value="男"><a data-value="男" href="javascript:;" class="on">男</a><a data-value="女" href="javascript:;">女</a><span>(必填)</span></dd>';
                out+='    <dd><strong>联系电话：</strong><input type="text"  name="tourmobile[]" class="tourmobile require" placeholder="手机号或固定电话" value="{$member['mobile']}"';
                out+='    <span>(必填)</span></dd>';
                out+='    <dd><strong>身份证号：</strong><input type="text"  name="touridcard[]" class="tourcard require" placeholder="输入18位身份证号码" /><span>(必填)</span></dd>';
                out+=' </dl>';
            }
            $("#tourer_list").append(out);
        }
    }
    $("body").delegate(".radio a", 'click', function () {
        $(this).siblings().removeClass('on');
        $(this).addClass('on');
        $(this).parent().children('input').val($(this).attr('data-value'));
    });


    //显示日历
    function show_calendar()
    {
        $(".mid_content").hide();
        $("#js_calendar").show();
        $(".mt_order_Contacts").css('margin-top','100px')
        $(".sys_header").hide();

    }
    //隐藏日历
    function hide_calendar()
    {
        $("#js_calendar").hide();
        $(".mid_content").show();
        $(".sys_header").show();
    }

    //选择天数
    function choose_day(day,containdiv)
    {
        $("#"+containdiv).val(day);
        hide_calendar();
        get_day_price();

    }
    //日期添加
    function add_date(date,days)
    {
        var d=new Date(date);
        d.setDate(d.getDate()+days);
        var m=d.getMonth()+1;
        return d.getFullYear()+'-'+m+'-'+d.getDate();
    }




    //按套餐获取人群
    function get_people_group(suitid,day)
    {
        var url = SITEURL+'line/ajax_suit_people';
        $.getJSON(url,{suitid:suitid,day:day},function(data){

            if(data.useday){
                $("#startdate").val(data.useday);

            }
            if(data.storage){
                $("#storage").val(data.storage);
            }
            if(data.haschild){
                $("#child_div").show();
                $('.childprice').html(data.childprice);
            }
            if(data.hasadult){
                $("#adult_div").show();
                $('.adultprice').html(data.adultprice);
            }
            if(data.hasold){
                $("#old_div").show();
                $('.oldprice').html(data.oldprice);
            }
            //订金
            if(data.dingjin){
                $("#deposit").val(data.dingjin);
            }
            get_total_price();


        })
    }

    //获取按天数获取价格
    function get_day_price()
    {
        var suitid = $("#suitid").val();
        var useday = $("#startdate").val();
        var url = SITEURL+'mitao/ajax_price_day';
        $.getJSON(url,{suitid:suitid,useday:useday},function(data){


            $('.childprice').html(data.childprice);
            $('.adultprice').html(data.adultprice);
            $('.oldprice').html(data.oldprice);
            $('#storage').html(data.number);



        })
        get_total_price();

    }



</script>
</body>
</html>
