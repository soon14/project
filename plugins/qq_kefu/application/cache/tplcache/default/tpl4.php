<style>
    /*重置CSS*/
    body,
    html{
        font-size:12px}
    body,
    html,
    div,
    blockquote,
    img,
    label,
    p,
    h1,h2,h3,h4,h5,h6,
    pre,
    ul,ol,li,
    dl,dt,dd,
    form,
    a,
    fieldset,
    input,
    th,
    td{
        margin:0;
        padding:0;
        border:0;
        outline:none;
        font-family:'微软雅黑'}
    select,textarea{
        outline:none;
        font-family:'微软雅黑'}
    table {
        border-collapse:collapse;
        border-spacing:0}
    fieldset,img {
        border:0}
    address,caption,cite,code,dfn,em,strong,th,var{
        font-style:normal;
        font-weight:normal}
    ol,ul {
        list-style:none;
        list-style-position:inside}
    a{
        color:#333;
        text-decoration:none}
    caption,th{
        text-align:left;}
    h1,h2,h3,h4,h5,h6{
        font-size:100%;
        font-weight:normal}
    q:before,q:after{
        content:'.';
        display:block;
        height:0;
        clear:both;
        visibility:hidden}
    abbr,acronym{
        border:0}
    /*在线咨询*/
    .st-online-box{
        width:125px;
        position:absolute;
        left:10px;
        top:300px;
        z-index:99999;
        overflow:hidden;
        border-radius:5px;
        box-shadow:3px 3px 9px rgba(0,0,0,.25),-3px -3px 9px rgba(0,0,0,.25);
        background:#fff}
    .st-online-box .online-tit{
        color:#fff;
        height:45px;
        line-height:45px;
        font-size:14px;
        text-align:center;
        background:#00c0ff}
    .st-online-box .online-tit:before{
        content:' ';
        display:inline-block;
        width:19px;
        height:18px;
        vertical-align:middle;
        margin:-3px 7px 0 0;
        background:url(<?php echo $GLOBALS['cfg_res_url'];?>/images/tpl4/st-side-kf.png) no-repeat 0 bottom}
    .st-online-box .online-list{
        padding-bottom:10px}
    .st-online-box .online-list dt{
        color:#353434;
        height:32px;
        line-height:32px;
        text-align:center;
        background:#f5f5f5}
    .st-online-box .online-list dd{
        padding:10px 10px 0}
    .st-online-box .online-list dd a{
        display:block;
        color:#fff;
        height:30px;
        line-height:30px;
        text-align:center;
        border-radius:5px;
        background:#69c32c}
    .st-online-box .online-list dd a:hover{
        background:#60b427}
    .st-online-box .online-list dd a:before{
        content:' ';
        display:inline-block;
        width:19px;
        height:12px;
        vertical-align:middle;
        margin:-3px 2px 0 0;
        background:url(<?php echo $GLOBALS['cfg_res_url'];?>/images/tpl4/st-side-kf.png) no-repeat 0 0}
    @-webkit-keyframes leftFadeIn{
        0%{opacity:0;-webkit-transform:translatex(-30px)}
        100%{opacity:1;-webkit-transform:translatex(0)}
    }
    @-moz-keyframes leftFadeIn{
        0%{opacity:0;-moz-transform:translatex(-30px)}
        100%{opacity:1;-moz-transform:translatex(0)}
    }
    @keyframes leftFadeIn{
        0%{opacity:0;transform:translatex(-30px)}
        100%{opacity:1;transform:translatex(0)}
    }
</style>
<div class="st-online-box">
    <div class="online-tit">在线咨询</div>
    <?php $n=1; if(is_array($group)) { foreach($group as $g) { ?>
    <dl class="online-list">
        <dt><?php echo $g['qqname'];?></dt>
        <?php $n=1; if(is_array($g['qq'])) { foreach($g['qq'] as $q) { ?>
        <dd><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $q['qqnum'];?>&site=qq&menu=yes"><?php echo $q['qqname'];?></a></dd>
        <?php $n++;}unset($n); } ?>
    </dl>
    <?php $n++;}unset($n); } ?>
</div><!-- 在线咨询 -->
<script>
    $(function(){
        //在线客服
        $(window).scroll(function () {
            var offsetTop = $(window).scrollTop() + 300 + "px";
            $('.st-online-box').animate({top: offsetTop}, {duration: 500, queue: false});
        })
    })
</script>