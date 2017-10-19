{if $userinfo['verifystatus']!=3}
<div class="hint-msg-box">
    <p class="hint-txt">温馨提示：您尚未通过公司<strong>资质验证</strong>，无法使用全部功能</p>
    <a class="hint-btn" href="javascript:;">确定</a>
</div><!-- 提示框 -->
<script>
    $(function(){
        $(".hint-btn").click(function(){
            $(".hint-msg-box").hide('slow');
        })
    })
</script>
{/if}