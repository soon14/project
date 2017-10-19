<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>供应商管理系统-{$webname}</title>
    {Common::css("style.css,base.css,extend.css")}
    {Common::js("jquery.min.js,common.js")}

</head>

<body>

	<div class="page-box">

        {request 'pc/pub/header'}

        {include "pc/pub/sidemenu"}
    
    <div class="main">
    	<div class="content-box">

            {include "pc/pub/qualifyalert"}
        
        <div class="frame-box">
        	<div class="frame-con">
          
            <div class="company-yz-box">
            	<div class="company-yz-con">
              	<div class="company-yz-tit"><strong class="bt">公司资质验证</strong>
                    {if $userinfo['verifystatus']==0}
                    <span class="before">未验证</span>
                    {elseif $userinfo['verifystatus']==1}
                    <span class="ing">审核中</span>
                    {elseif $userinfo['verifystatus']==2}
                    <span class="after">未通过</span>
                    {elseif $userinfo['verifystatus']==3}
                    <span class="pass">已验证</span>
                    {/if}
                </div>
                <div class="company-yz-txt">99%的会员完成了从业认证。<br />完成从业验证，既可享受更多会员服务！</div>
                   {if $userinfo['verifystatus']==1}
                    <a class="company-yz-btn" href="#" style=" color:#666; cursor:not-allowed; background:#e0e2e7">等待验证</a>
                   {elseif $userinfo['verifystatus']==2 || $userinfo['verifystatus']==0}
                    <a class="company-yz-btn" href="{$cmsurl}pc/qualify/step">立即验证</a>
                   {elseif $userinfo['verifystatus']==3}
                    <a class="company-yz-btn" href="{$cmsurl}pc/qualify/step">重新验证</a>
                   {/if}
              </div>
            </div><!-- 资质验证 -->
          
          </div>
        </div>

        {request "pc/pub/footer"}
        
      </div>
    </div><!-- 主体内容 -->
  
  </div>

</body>
<script>
    $(function(){
        $("#nav_qulification").addClass('on');
    })
</script>
</html>
