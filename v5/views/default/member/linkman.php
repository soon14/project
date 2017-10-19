<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>常用联系人-{$webname}</title>

    {include "pub/varname"}

    {Common::css('user.css,base.css,extend.css')}
    {Common::css('common/bootstrap-min.css,common/public.css')}
    {Common::js('jquery.min.js,base.js,common.js,jquery.validate.js,jquery.cookie.js')}

</head>



<body>



{request "pub/header"}



<div class="big">

    <div class="wm-1200">



        <div class="st-guide">

            <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;常用联系人

        </div><!--面包屑-->



        <div class="st-main-page">

            {include "member/left_menu"}

            <div class="user-cont-box">

                <div class="add-linkman-box">

                    <div class="linkman-tit">常用旅客</div>

                    <div class="linkman-con">

                        <div class="linkman-list">

                            <form id="linkmanfrm" method="post">

                                <table width="100%" border="0" id="linktable">



                                    {st:member action="linkman" memberid="$mid"}

                                    {if !empty($data[0]['linkman'])}

                                    {loop $data $row}

                                    <tr>

                                        <td width="40%" height="60"><span class="st-star-ico fl">*</span><span class="child"><em>姓名：</em><input type="text" name="t_name[{$n}]" class="lm-text" value="{$row['linkman']}" /></span></td>

                                        <td width="50%">

                                            <span class="st-star-ico fl">*</span>

                        <span class="child">

                          <em>证件号：</em>

                            <select name="t_cardtype[{$n}]">

                                <option value="身份证" {if $row['cardtype']=='身份证'}selected="selected"{/if}>身份证</option>

                                <option value="台胞证" {if $row['cardtype']=='台胞证'}selected="selected"{/if}>台胞证</option>

                                <option value="港澳通行证" {if $row['cardtype']=='港澳通行证'}selected="selected"{/if}>港澳通行证</option>

                                <option value="军官证" {if $row['cardtype']=='军官证'}selected="selected"{/if}>军官证</option>

                            </select>

                            <input type="text" data-id="{$row['id']}" class="lm-text" name="t_cardno[{$n}]" value="{$row['idcard']}" />

                          </span>



                                        </td>

                                        <td width="10%" align="center"><span class="st-delete-ico"></span></td>

                                    </tr>

                                    {/loop}

                                    {/if}

                                    {/st}



                                </table>



                                <div class="add-linkman-btn"><a href="javascript:;" class="addman"><i>+</i>添加</a></div>

                        </div>

                        <div class="keep-linkman"><a href="javascript:;" class="save">保 存</a></div>

                    </div>

                </div>

            </div>

        </div>



    </div>

</div>



{request "pub/footer"}

{Common::js('layer/layer.js')}

<script>

    $(function(){

        //导航选中

        $("#nav_linkman").addClass('on');



        $("#linkmanfrm").validate({



            submitHandler:function(form){

                $.ajax({

                    type:'POST',

                    url:SITEURL+'member/index/ajax_do_save_linkman',

                    data:$("#linkmanfrm").serialize(),

                    dataType:'json',

                    success:function(data){

                        if(data.status){

                            layer.msg("{__('save_success')}", {

                                icon: 6,

                                time: 1000

                            })

                            location.reload();

                        }else{

                            layer.msg("{__('save_failure')}", {

                                icon: 5,

                                time: 1000



                            })



                        }

                    }

                })

                return false;

            } ,

            errorClass:'st-ts-text',

            errorElement:'span',

            highlight: function(element, errorClass, validClass) {

                $(element).attr('style','border:1px solid red');

            },

            unhighlight:function(element, errorClass){

                $(element).attr('style','');

            },

            errorPlacement:function(error,element){

                $(element).parent().append(error)



            }







        });

        dynamic_event();



        //保存

        $(".save").click(function(){

            $("#linkmanfrm").submit();

        })



        //删除

        $(document).delegate('.st-delete-ico','click',function(){

            var obj = this;

            layer.confirm('{__("linkman_delete_content")}', {

                icon: 3,

                btn: ['{__("Abort")}','{__("OK")}'], //按钮,

                btn1:function(){

                    layer.closeAll();

                },

                btn2:function(){

                    var linkman = $(obj).parents('tr:first').find('.lm-text:first').val();

                    var code = $(obj).parents('tr:first').find('.lm-text:last').val();

                    $.ajax({

                        type:'POST',

                        url:SITEURL+'member/index/ajax_do_del_linkman',

                        data:{'linkman':linkman,'code':code},

                        dataType:'json',

                        success:function(data){

                            if(data.status){

                                $(obj).parents('tr:first').remove();

                            }

                            else

                            {

                                layer.msg("操作失败,刷新在试试！", {

                                    icon: 5,

                                    time: 3000

                                })

                            }

                        }

                    });

                },

                cancel: function(index, layero){

                    layer.closeAll();



                }

            });





        })





        //添加游客

        $(".addman").click(function(){

            var num = Number($("#linktable tr").length)+1;

            var html =' <tr>';

            html+=' <td width="40%" height="60"><span class="st-star-ico fl">*</span><span class="child"><em>姓名：</em><input type="text" name="t_name['+num+']" class="lm-text" value="" /></span></td>';

            html+='<td width="50%">';

            html+='<span class="st-star-ico fl">*</span>';

            html+='<span class="child">';

            html+='<em>证件号：</em>';

            html+='<select name="t_cardtype['+num+']">';

            html+='<option value="身份证">身份证</option>';

            html+='<option value="台胞证">台胞证</option>';

            html+='<option value="港澳通行证">港澳通行证</option>';

            html+='<option value="军官证">军官证</option>';

            html+='</select>';

            html+='<input type="text" class="lm-text" data-id="" name="t_cardno['+num+']" value="" />';

            html+='</span>'

            html+='<span class="st-ts-text"></span>';

            html+='</td>';

            html+='<td width="10%" align="center"><span class="st-delete-ico"></span></td>';

            html+='</tr>';

            $("#linktable").append(html);

            dynamic_event();



        })

    })



    function dynamic_event(){

        //动态添加游客姓名

        $("input[name^='t_name']").each(

            function(i,obj) {



                $(obj).rules("remove");

                $(obj).rules("add", {required: true,

                    messages: {

                        required: "请输入姓名"



                    } });

            }

        )

        //证件类型

        $("input[name^='t_cardno']").each(

            function(i,obj) {

                $(obj).rules("remove");

                $(obj).rules("add", {

                    required: true,

                    remote:{

                        url: SITEURL+'member/index/ajax_check_cardno',

                        type: 'post',

                        data: {

                            cardno: function() {

                                return $(obj).val();

                            },

                            cardtype:function(){

                                return $(obj).parent().find('select').val()

                            },

                            cardid:function(){

                                return $(obj).attr('data-id');

                            }

                        }

                    },

                    messages: {

                        required: "请输入证件号",

                        remote:"证件号重复"

                    } });

            }

        )

    }

</script>

</body>

</html>

