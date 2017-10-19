<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>会员中心-{$webname}</title>

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

            <a href="{$cmsurl}">首页</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;会员中心

        </div><!--面包屑-->



        <div class="st-main-page">

            {include "member/left_menu"}

            <div class="user-cont-box">

                <div class="personal-data">

                    <h3 class="gr-tit">个人资料</h3>

                    <dl>

                        <dt>头&nbsp;&nbsp;像：</dt>

                        <dd>

                            <div class="head-pic"><img id="face" src="{$info['litpic']}" /><span class="upload">编辑头像</span></div>

                            <input type="hidden" id="litpic" value="{$info['litpic']}">

                        </dd>

                    </dl>

                    <dl>

                        <dt>昵&nbsp;&nbsp;称：</dt>

                        <dd>

                            <input type="text" class="msg-text" id="nickname" value="{$info['nickname']}" /><span class="star-ico">*</span>

                        </dd>

                    </dl>

                    <dl>

                        <dt>性&nbsp;&nbsp;别：</dt>

                        <dd>

                            <span class="sex"><a {if $info['sex']=='男'}class="on"{/if} href="javascript:;">男</a><a href="javascript:;" {if $info['sex']=='女'}class="on"{/if}>女</a></span>

                            <input type="hidden" name="sex" id="sex" value="{$info['sex']}">

                        </dd>

                    </dl>

                    <dl>

                        <dt>手机号：</dt>

                        <dd>

                            {if !empty($info['mobile'])}

                            <span class="phone-num">{$info['mobile']}</span>

                            <a class="revise" href="{$cmsurl}member/index/modify_phone?change=1">更换手机&gt;</a>

                            {else}

                            <a class="revise" href="{$cmsurl}member/index/modify_phone?change=1">绑定手机&gt;</a>

                            {/if}

                        </dd>

                    </dl>

                    <dl>

                        <dt>E-mail：</dt>

                        <dd>

                            {if !empty($info['email'])}

                            <span class="mail">{$info['email']}</span>

                            <a class="revise" href="{$cmsurl}member/index/modify_email?change=1">更换邮箱&gt;</a>

                            {else}

                            <a class="revise" href="{$cmsurl}member/index/modify_email?change=1">绑定邮箱&gt;</a>

                            {/if}



                        </dd>

                    </dl>

                    <hr />

                    <p class="msg-p">以下为本站保密信息，预订产品时做为身份验证，不会用作其他用途！</p>

                    <dl>

                        <dt>真实姓名：</dt>

                        <dd><input type="text" name="truename" id="truename" class="msg-text" value="{$info['truename']}" /><span class="star-ico">*</span></dd>

                    </dl>

                    <dl>

                        <dt>身份证号：</dt>

                        <dd><input type="text" name="cardid" id="cardid" class="msg-text" value="{$info['cardid']}" /></dd>

                    </dl>

                    <dl>

                        <dt>常住地址：</dt>

                        <dd><input type="text" class="msg-text" name="address" id="address" value="{$info['address']}" /></dd>

                    </dl>

                    <div class="save-revise"><a href="javascript:;" class="saveinfo">保存修改</a></div>

                    <div class="success-out-box" style=" display:none">

                        <div class="box-con">

                            <h3><img src="{$GLOBALS['cfg_public_url']}images/success-ico.png" />个人资料修改成功！</h3>

                            <a href="javascript:;" class="close_success">确 定</a>

                        </div>

                    </div><!--修改成功弹出框-->

                </div>

            </div>

        </div>



    </div>

</div>

<input type="hidden" id="mid" value="{$info['mid']}"/>

<input type="hidden" id="frmcode" value="{$frmcode}">

{Common::js('layer/layer.js')}



{request "pub/footer"}

<script>

    $(function(){

        //导航选中

        $("#nav_userinfo").addClass('on');



        //上传头像点击

        $('.upload').click(function(){





            if($("#upiframe").length<1)

            {

                var s_left=Math.abs($(window).width()/2-350);

                var s_top=$(window).scrollTop()+200;

                ST.Util.createFade();//创建遮罩

                var url = SITEURL+"member/index/uploadface";

                var imgdiv="<div id='upiframe' style='width:700px;height:500px;position:absolute;left:"+s_left+"px;top:"+s_top+"px;z-index:9999'> <iframe src='"+url+"' style='width:100%;height:100%;border:none;'></iframe></div>";

                $("body").append(imgdiv);

                //fade点击

                $(".fade").live('click',function(){

                    ST.Util.closeFade();

                    $("#upiframe").remove();//移除

                });

            }







        })

        //性别点击选择

        $(".sex a").click(function(){

            $("#sex").val($(this).html());

            $(this).addClass('on').siblings().removeClass('on');

        })



        //关闭保存成功信息提示框

        $('.close_success').click(function(){

            $(".success-out-box").hide();

        })

        //保存修改

        $('.saveinfo').click(function(){



            var mid = $("#mid").val();

            var nickname = $("#nickname").val();

            var sex = $("#sex").val();

            var truename = $("#truename").val();

            var cardid = $("#cardid").val();

            var address = $("#address").val();

            var frmcode = $("#frmcode").val();

            var litpic = $("#litpic").val();

            $.ajax({

                type:'post',

                url:SITEURL+'member/index/ajax_userinfo_save',

                data:{

                    mid:mid,

                    nickname:nickname,

                    sex:sex,

                    truename:truename,

                    cardid:cardid,

                    address:address,

                    frmcode:frmcode,

                    litpic:litpic

                },

                dataType:'json',

                success:function(data){

                    if(data.status){

                        //$(".success-out-box").show();

                        layer.msg("个人资料修改成功!",{

                            icon:6,

                            time:1000

                        })

                    }else{

                        layer.msg(data.msg, {icon:5});

                        return false;

                    }

                }

            })







        })

    })

</script>



</body>

</html>

