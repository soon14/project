<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>会员安全中心-{$webname}</title>

    {include "pub/varname"}

    {Common::css('user.css,base.css,extend.css')}
    {Common::css('common/bootstrap-min.css,common/public.css')}
    {Common::js('jquery.min.js,base.js,common.js')}

</head>



<body>

{request "pub/header"}

<div class="big">

    <div class="wm-1200">



        <div class="st-guide">

            <a href="{$GLOBALS['cfg_basehost']}">{$GLOBALS['cfg_indexname']}</a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;安全中心

        </div><!--面包屑-->



        <div class="st-main-page">



            {include "member/left_menu"}



            <div class="user-cont-box">

                <div class="safe-center">

                    <h3 class="aq-tit">安全中心</h3>

                    <ul class="aq-con">

                        <li>

                            <div class="part1"><i class="tg"></i><!--没有通过就没有"tg"-->登录密码</div>

                            <div class="part2">

                                <strong class="fl">账户安全程度：</strong>

                                <p class="int">

                      <span>

                          {if !empty($info['email']) && !empty($info['mobile'])}

                              <i class="on"></i>

                              <i class="on"></i>

                              <i class="on"></i>



                          {else}

                              <i class="on"></i>

                              <i class="on"></i>

                              <i></i>



                          {/if}

                      </span>&nbsp;

                                    {if !empty($info['email']) && !empty($info['mobile'])}

                                    高

                                    {else}

                                    中

                                    {/if}

                                </p>

                            </div>

                            <div class="part4"><a href="{$cmsurl}member/index/modify_pwd" >{if !empty($info['pwd'])}修改密码{else}设置密码{/if}&gt;</a></div>

                        </li>

                        <li>

                            <div class="part1">

                                {if !empty($info['mobile'])}

                                <i class="tg"></i>

                                {else}

                                <i></i>

                                {/if}

                                手机验证

                            </div>

                            {if !empty($info['mobile'])}

                            <div class="part2">{$info['mobile']} </div>

                            <div class="part4"><a href="{$cmsurl}member/index/modify_phone?change=1">更换手机&gt;</a></div>

                            {else}

                            <div class="part2">未绑定手机 </div>

                            <div class="part3"><a href="{$cmsurl}member/index/modify_phone?change=0">绑定手机</a></div>

                            {/if}



                        </li>

                        <!--li>  07.09  fengjishu 隐藏

                          <div class="part1">

                            {if !empty($info['email'])}

                            <i class="tg"></i>

                            {else}

                            <i></i>

                            {/if}邮箱验证</div>

                        {if !empty($info['email'])}

                            <div class="part2"><em>{$info['email']}</em></div>

                            <div class="part4"><a href="{$cmsurl}member/index/modify_email?change=1">更换邮箱&gt;</a></div>

                        {else}

                            <div class="part2">未绑定邮箱 </div>

                            <div class="part3"><a href="{$cmsurl}member/index/modify_email?change=0">绑定邮箱</a></div>

                        {/if}



                      </li-->

                    </ul>

                </div><!--安全中心-->

            </div>





        </div>



    </div>

</div>



{request "pub/footer"}

<script>

    $(function(){

        $("#nav_safecenter").addClass('on');

    })

</script>

</body>

</html>

