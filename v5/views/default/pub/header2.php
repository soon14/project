{Common::css("mycss/base.css")}
<!-- 登陆 -->
<div class="login-box">
    <div class="container">
        <div class="login-tit">
            <div class="login-l" id="loginstatus"></div>
            <div class="login-r"> <a href="javascript:" name="myorder">我的订单</a><!--原来我的订单链接是http://www.aitto.net/search/order--> | <a href="#" class="weixin">微信
                <div class="dropdown1" style="position: absolute;z-index: 888;">
                    <div class="weixin"><img src="/res/images/img/erwei.jpg" width="120" height="120"></div>
                </div></a>
                
                | <!--a href="#" class="weixin">微博</a>
                <div class="dropdown1" style="position: absolute;margin-left:72.5%;z-index: 888;">
                    <div class="QQ"><img src="/res/images/img/qq.jpg" width="136" height="58"></div>
                </div>
                | <a href="#"> 手机APP</a-- | --><span class="logo-tel">客服电话：</span><span class="logo-org">{$GLOBALS['cfg_phone']}</span></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- 头部 -->
<div class="head-box">
    <div class="container">
        <div class="logo"></div>
        <!-- 搜索 -->
        <div class="search-box">
            <div class="search radius6">
                <input name='ecmsfrom' type='hidden' value='9'>
                <input type="hidden" name="show" value="title,newstext">
                <input type="hidden" id="typename" data-id='4' data-url="/raiders/">
<!--                <input type="hidden" id="typename" data-id='0' >--07.18封冀蜀 隐藏 0 是全部收缩要展开-->
                <select name="classid" id="choose">
                    <!--<option data-id="0" onclick="optionChecked(this);">门票</option>-->
                    {loop $searchmodel $m}

                    <option data-id="{$m['id']}" data-url="{$m['url']}" onclick="optionChecked(this);" {if $m['modulename']=='攻略'}selected=selected{/if}>{if $m['modulename']=='景点'}门票{else}{$m['modulename']}{/if}</option>
                    {/loop}
                </select>
                <input name="keyboard" class="inp_srh" id="keywords"  placeholder="输入目的地、景区进行搜索" >
                <input class="btn_srh seacher" type="button"  value="搜索">
            </div>
        </div>

        <div class="kf-tel"></div><div class="clearfix"></div>
    </div>
</div>
<nav>
    <!-- 导航 -->
    <div class="navbar-collapse">
        <div class="container">
            <ul class="nav navbar-nav" style="text-align:left;">
                <li class="active st-menu"><a href="{$cmsurl}" class="current">{$GLOBALS['cfg_indexname']}</a></li>

                {st:channel action="pc" row="20"}

                {loop $data $row}
                <li class="st-menu"><a href="{$row['url']}">{$row['title']}</a></li>
                {/loop}
                {/st}
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</nav>
{Common::js("SuperSlide.min.js,base.js,common.js,myjs/bootstrap.min.js,myjs/jquery.select.js")}
<script>
    var SITEURL = "{$cmsurl}";
    function optionChecked(obj){
        var typeid = $(obj).attr('data-id');
        var durl = $(obj).attr('data-url');
       // alert(typeid+"["+durl);
        $("#typename").attr('data-id',typeid);
        $("#typename").attr('data-url',durl);
    }
    //====================07.05  s
    $("a[name=myorder]").click(function(){
        var  url1 =SITEURL+'member/order/all';//SITEURL 为 '/'
        var  url =SITEURL+'member/login?redirecturl='+url1;
        $.ajax({
            type:"POST",
            url:SITEURL+"member/login/ajax_is_login",
            dataType:'json',
            success:function(data){
                if(data.status==0){
                    alert("请先登录");
                   window.location.href =url;
                }else{
                    window.location.href =url1;
                }
            }
        })

    });
    //====================07.05  e
    $(".weixin").mouseover(function(){
        //  $(this).addClass("hover");
        $(this).children(".dropdown1").show()
    });
    $(".weixin").mouseout(function(){
        // $(this).removeClass("hover");
        $(this).children(".dropdown1").hide()
    });
   //
    $(function(){
        $("#keywords").keydown(function(e){
            if(e.keyCode==13){
                $('.btn_srh').click();
            }
        });

        $(".searchmodel li:first").trigger('click');
        //search

        $('.btn_srh').click(function(){

            var keyword = $('#keywords').val();
            if(keyword == ''){
                alert("请输入内容");
                $(".inp_srh").focus();
                return false;
            }
            var typeid = $("#typename").attr('data-id');
            var durl = $("#typename").attr('data-url');
            if(typeid==0 || typeid==8){//0  是全部  8是 签证
                var url = SITEURL+'search/cloudsearch?keyword='+encodeURIComponent(keyword)+"&typeid="+typeid;
            }else{
                var url = "{$GLOBALS['cfg_basehost']}"+durl+'all?keyword='+encodeURIComponent(keyword);
            }

            location.href = url;
        })

        //导航的选中状态
        $(".st-menu a").each(function(){
            $(".st-menu").removeClass('active');
            var url= window.location.href;
            // url=url.replace('index.php','');
            //url=url.replace('index.html','');
            var urlArr = url.split("/");
            var ulink=$(this).attr("href");
            var urlLinkArr = ulink.split("/");
            if(urlArr[3]==urlLinkArr[3])
            {
                $(this).parents('li').addClass('active');
                return false;
            }else{
                $(".st-menu").first().addClass('active');
            }
        })
        //登陆状态
        $.ajax({
            type:"POST",
            url:SITEURL+"member/login/ajax_is_login",
            dataType:'json',
            success:function(data){
                if(data.status){
                    $txt = '<a class="dl" style="padding:0" href="javascript:;">你好,</a>';
                    $txt+= '<a class="dl" href="{$cmsurl}member/">'+data.user.nickname+'</a>';
                    $txt+= '<a class="dl" href="{$cmsurl}member/login/loginout">退出</a>';
                    //$txt+= '<a class="dl" href="{$cmsurl}member">个人中心</a>';
                    $txt = '您好:<a href="{$cmsurl}member/">'+data.user.nickname+'</a>，欢迎使用河北旅游网！&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$cmsurl}member/login/loginout">退出</a>';
                }else{

                    //$txt = '<a class="dl" href="{$cmsurl}member/login">登录</a>';
                    // $txt+= '<a class="zc" href="{$cmsurl}member/register">免费注册</a>';
                    $txt = '您好，欢迎使用河北旅游网！&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$cmsurl}member/login">登录</a> | <a href="{$cmsurl}member/register">注册</a>';
                }
                $("#loginstatus").html($txt);
            }
        })
    })

</script>