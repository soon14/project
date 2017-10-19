<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$info['title']}-{$GLOBALS['cfg_webname']}</title>
    {include "pub/varname"}
    {Common::css('jieban.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,jquery.validate.js,jquery.validate.addcheck.js,jquery.cookie.js')}
    <script>
        $(function(){
            //获取焦点
            $('.jb-text').focus(function(){
                $(this).css({'background':'#fff','border':'1px solid #00b7ee'})
            })
            //失去焦点
            $('.jb-text').blur(function(){
                $(this).css({'background':'#e5e5e5','border':'1px solid #e5e5e5'})
            })
            //输入和删除内容后
            $('.jb-text').change(function(){
                if($(this).val()!==''){
                    $(this).addClass('active');
                }
                else{
                    $(this).removeClass('active')
                }
            })
        })
    </script>
</head>

<body>

{request "pub/header"}

<div class="big">
    <div class="wm-1200">

        <div class="st-guide">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;<a href="/jieban/">{$channelname}</a>
        </div><!--面包屑-->

        <div class="st-main-page">

            <div class="st-jieban-show">
                <div class="jieban-show-con">
                    <div class="show-top-con">
                        <div class="user-msg">
                            <dl>
                                <dt>
                                    <img src="{$info['member']['litpic']}" />
                                    <span class="name">{$info['member']['nickname']}</span>
                                    <span class="dest">{$info['kindnamelist']}</span>
                                </dt>
                                <dd>
                                    {if in_array($memberinfo['mid'],$joinmembers)}
                                    <div class="con">
                                        <p class="phone">{$info['member']['mobile']}</p>

                                      <!--  <p class="qq">{$info['member'][email]}</p>
                                        <p class="wx"></p>-->
                                    </div>
                                    {else}
                                    <div class="txt">联系方式：<span>报名登陆后可见</span></div>
                                    {/if}
                                </dd>
                            </dl>
                        </div>
                        <div class="jieban-msg">
                            <div class="msg-tit">
                                <h1>{$info['title']}</h1>
                                <p><span>发布时间：{Common::mydate('Y-m-d',$info['addtime'])}</span><span>访问量：{$info['shownum']}</span></p>
                            </div>
                            <div class="msg-list">
                                <ul>
                                    <li class="md">目的地：{$info['kindnamelist']}</li>
                                    <li class="cf">他的人数：成人{$info['adultnum']}人&nbsp;&nbsp;小孩{$info['childnum']}人</li>
                                    <li class="day">出发时间：{$info['startdate']}天</li>
                                    <li class="num">可调动时间：{$info['vartime']}</li>
                                    <li class="date">活动天数：{$info['day']}天</li>
                                    <li class="date">行程主题：
                                        {loop $info['attrlist'] $attr}
                                           {$attr['attrname']}&nbsp;
                                        {/loop}
                                    </li>
                                </ul>
                            </div>
                            <div class="msg-btn"><a href="#bm">我要加入</a></div>
                        </div>
                    </div>
                    <div class="show-main-con">
                       {$info['memo']}
                    </div>
                    <div class="jb-sign-up" id="bm">
                        <h3>我要报名</h3>
                        <form method="post" id="bmfrm">
                            <div class="sign-up-msg">
                            <ul>
                                <li>
                                    <span class="mt">联系电话：</span>
                                    <div class="con">
                                        <input type="text" id="linktel" name="linktel" class="jb-text w240" />
                                        <span class="need-txt"><em>*必填：</em>只对活动发起人和本人公开</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="mt">验证码(图)：</span>
                                    <div class="con">
                                        <input type="text" id="checkcode" name="checkcode" class="jb-text w240" />
                                        <img style="margin-left: 5px" src="{$cmsurl}captcha" onClick="this.src=this.src+'?math='+ Math.random()" width="80" height="32" />
                                        <span class="need-txt"></span>
                                    </div>
                                </li>
                                <li>
                                    <span class="mt">验证码(短)：</span>
                                    <div class="con">
                                        <input type="text" id="msgcode" name="msgcode" class="jb-text w240" />
                                        <input type="button" class="send-yzm sendmsg" value="发送验证码"/>
                                    </div>
                                </li>
                              <!--  <li>
                                    <span class="mt">性别：</span>
                                    <div class="con">
                                        <div class="sex">
                                            <span class="on"><i></i>男</span>
                                            <span><i></i>女</span>
                                        </div>
                                    </div>
                                </li>-->
                                <li>
                                    <span class="mt">同行人数：</span>
                                    <div class="con">
                                        <span class="people"><input type="text" name="adultnum" id="adultnum" class="jb-text w105" />成人(人)</span>
                                        <span class="people"><input type="text" name="childnum" id="childnum" class="jb-text w105" />儿童(人)</span>
                                    </div>
                                </li>
                              <!--  <li>
                                    <span class="mt">备注：</span>
                                    <div class="con">
                                        <textarea name="memo" id="memo" cols="" rows=""></textarea>
                                    </div>
                                </li>-->
                            </ul>
                            <a class="me-join" href="javascript:;">我要加入</a>
                        </div>
                            <input type="hidden" name="frmcode" value="{$frmcode}"/>
                            <input type="hidden" name="jiebanid" value="{$info['id']}"/>
                        </form>
                    </div>
                </div><!-- 结伴详情主体 -->

                <div class="st-sidebox">
                    <div class="jb-side-join-user">

                        <div class="bm-num"><strong>{$info['joinnum']}</strong>人报名加入此行程</div>
                        <!--<div class="sex">
                            <span class="nan"><i></i>7人</span>
                            <span class="nv"><i></i>8人</span>
                        </div>-->
                        <div class="people-list">
                            <ul>
                                {st:jieban action="join" jiebanid="$info['id']" }
                                 {loop $data $row}
                                   <li><img src="{$row['member']['litpic']}" /><span>{$row['member']['nickname']}</span></li>
                                 {/loop}
                                {/st}

                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

{request "pub/footer"}

{request "pub/flink"}

{Common::js('layer/layer.js')}

<script>

    $(function(){
        $(".me-join").click(function(){
            $("#bmfrm").submit();
        })
        //表单验证

        $("#bmfrm").validate({

            submitHandler:function(form){
                //form.submit();
                $.ajax({
                    type:'POST',
                    url:SITEURL+'jieban/ajax_add_join',
                    data:$("#bmfrm").serialize(),
                    dataType:'json',
                    success:function(data){
                        if(data.status){
                            layer.msg("{__('add_jieban_join_success')}", {
                                icon: 6,
                                time: 1000
                            })
                            location.reload();
                        }else{
                            layer.msg("{__('add_jieban_join_failure')}", {
                                icon: 5,
                                time: 1000

                            })

                        }
                    }

                })
            } ,
            errorClass:'need-txt',
            errorElement:'span',
            rules: {


                linktel:{
                    required:true,
                    isMobile:true

                },
                checkcode:{
                    required:true,
                    remote:{
                        url: SITEURL+'pub/ajax_check_code',
                        type: 'post'

                    }
                },
                msgcode:{
                    required:true,
                    remote:{
                        url:SITEURL+'jieban/ajax_check_msgcode',
                        type: 'post',
                        data:{
                            mobile: function() {
                            return $( "#linktel" ).val();
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


                linktel:{
                    required: "请填写联系方式"
                },
                checkcode:{
                    required: "请填写验证码",
                    remote: "验证码错误"
                },
                msgcode:{
                    required:"请填写短信验证码",
                    remote:"短信验证码错误"
                },
                adultnum:{
                    required:'',
                    digits:''
                },
                childnum:{
                    digits:''
                }

            },
            highlight: function(element, errorClass, validClass) {
                //$(element).attr('style','border:1px solid red');
            },
            unhighlight:function(element, errorClass){
               // $(element).attr('style','');
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

        //发送短信验证码
        $('.sendmsg').click(function(){
            var mobile = $("#linktel").val();
            var regPartton=/^1[3-8]+\d{9}$/;
            if (!regPartton.test(mobile))
            {
                layer.alert('请输入正确的手机号码', {icon:5});
                return false;
            }
            var pcode = $("#checkcode").val();
            if(pcode==''){
                layer.alert('请填写验证码', {icon:5});
                return false;
            }
            var t=this;
            t.disabled=true;


            //发送次数判断
            var sendnum = $.cookie('sendnum') ? $.cookie('sendnum') : 0;

            if(sendnum>3){
                layer.alert("验证码发送请求过于频繁,请过15分钟后再试",{icon:5});
                return false;
            }

            if(sendnum!=0){
                $.cookie('sendnum', sendnum++);
            }else{
                $.cookie('sendnum', 1,{ expires: 1/96 });
            }

            var token = "{$frmcode}";
            var url = SITEURL+'jieban/ajax_send_msgcode';

            $.post(url,{mobile:mobile,token:token,pcode:pcode},function(data) {
                if(data.status)
                {

                    t.disabled=true;
                    code_timeout(60);
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
