{Common::css("mycss/base.css")}
<!-- 登陆 -->
<div class="login-box">
    <div class="container">
        <div class="login-tit">
            <div class="login-l" id="loginstatus"></div>
            <div class="login-r"> <a href="{$cmsurl}search/order">我的订单</a> | <a href="#">微信</a> | <a href="#">微博</a> | <a href="#"> 手机APP</a> | <span class="logo-tel">客服电话：</span><span class="logo-org">{$GLOBALS['cfg_phone']}</span></div>
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
                <input type="hidden" id="typename" data-id='0' >
                <select name="classid" id="choose">
                    <option data-id="0" onclick="optionChecked(this);">全部</option>
                    {loop $searchmodel $m}
                    <option data-id="{$m['id']}" data-url="{$m['url']}" onclick="optionChecked(this);">{$m['modulename']}</option>
                    {/loop}
                </select>
                <input name="keyboard" class="inp_srh" id="keywords" placeholder="输入目的地、酒店、攻略" >
                <input class="btn_srh" type="button"  value="搜索">
            </div>
        </div>
        <div class="kf-tel"></div>
        <div class="clearfix"></div>
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
        $("#typename").attr('data-id',typeid);
        $("#typename").attr('data-url',durl);
    }
    $(function(){
        $(".searchmodel li:first").trigger('click');
                //search
               $('.btn_srh').click(function(){
                   var keyword = $('#keywords').val();
                   if(keyword == ''){
                       return false;
                   }
                   var typeid = $("#typename").attr('data-id');
                   var durl = $("#typename").attr('data-url');
                   if(typeid==0 || typeid==8){
                       var url = SITEURL+'search/cloudsearch?keyword='+encodeURIComponent(keyword)+"&typeid="+typeid;
                   }else{
                       var url = "{$GLOBALS['cfg_basehost']}"+durl+'all?keyword='+encodeURIComponent(keyword);
                   }            }            location.href = url;
    })
     //导航的选中状态
       $(".st-menu a").each(function(){
           $(".st-menu").removeClass('active');
       }
    var url= window.location.href;
               // url=url.replace('index.php','');
               // url=url.replace('index.html','');
                    var urlArr = url.split("/");
    var ulink=$(this).attr("href");
    var urlLinkArr = ulink.split("/");
    if(urlArr[3]==urlLinkArr[3])
    {
        $(this).parents('li').addClass('active');
        return false;
    }else{
        $(".st-menu").first().addClass('active');
    }        })
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
                    $txt = '您好:<a href="{$cmsurl}member/">'+data.user.nickname+'</a>，欢迎使用云智慧旅游网！&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$cmsurl}member/login/loginout">退出</a>';
                }else{
                                   //$txt = '<a class="dl" href="{$cmsurl}member/login">登录</a>';
                                   // $txt+= '<a class="zc" href="{$cmsurl}member/register">免费注册</a>';
                      $txt = '您好，欢迎使用云智慧旅游网！&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$cmsurl}member/login">登录</a> | <a href="{$cmsurl}member/register">注册</a>';
                }
                $("#loginstatus").html($txt);
            }
        })
    })
</script>