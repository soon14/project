
{Common::css('common/bootstrap-min.css,common/public.css')}

<header>
    <div id="commonHead">
        <div id="commonWarp">
            <div class="logo" style="cursor:pointer;" {if !empty($GLOBALS['cfg_logo'])}onclick="window.location.href='{$GLOBALS[cfg_logourl]}'"{/if} ></div>

        <div class="nav">
                <ul>
                    <li class="current st-menu">
                        <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}
                        </a>
                    </li>
                    {st:channel action="pc" row="20"}
                    {loop $data $row}
                    <li class="st-menu"><a href="{$row['url']}">{$row['title']}</a></li>
                    {/loop}
                    {/st}
                </ul>
            </div>
      {if $typeid==4||$typeid==101||$typeid==5}
        <div class="head-search">
            <div class="head-search-wrapper">
                <div class="head-searchform">
                    <input id="_j_head_search_input" type="text" value="{if $_GET['keyword']}{$_GET['keyword']}{/if}" {if $typeid==4}placeholder="搜索攻略"{elseif $typeid==101}placeholder="搜索游记"{elseif $typeid==5}placeholder="搜索门票"{/if}>
                    <a role="button" href="javascript:" class="icon-search" id="_j_head_search_link" onclick=""></a> </div>
            </div>
        </div>
      {/if}
            <div class="login-info">
                <div class="userLogin" id="loginstatus">

                </div>
                <div class="head-user drop-trigger" id="-j-head-user">
                    <a class="" href="#">
                        <div class="user-ico"></div>
                        <i class="icon-caret-down"></i>
                    </a>
                    <div class="dropdown">
                        <h2 class="drop-tit">会员中心</h2>
                        <div class="dropdown-menu" >
                            <ul>
                                <li class="icon-home"><a href="/member/"><i></i>会员首页</a></li>
                                <li class="icon-order"><a href="/member/order/all"><i></i>我的订单</a></li>
                                <li class="icon-writenotes"><a href="/member/index/mynotes"><i></i>我的游记</a></li>
                                <li class="icon-jifen"><a href="/member/index/jifen"><i></i>我的积分</a></li>
                                <li class="icon-Personal"><a href="/member/index/userinfo"><i></i>个人中心</a></li>
                                <li class="icon-traveller"><a href="/member/index/linkman"><i></i>常用旅客</a></li>
                                <li class="icon-logout"><a href="{$cmsurl}member/login/loginout"><i></i>退出登录</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="head-code drop-trigger" id="-j-head-code" > <a class="" href="#">
                        <div class="code-ico"></div>
                        <i class="icon-caret-down"></i> </a>
                    <div class="dropdown">
                        <h2 class="drop-tit">扫二维码 关注官方微信</h2>
                        <div class="drop-con">
                            <div class="WeChat"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>

<script type="text/javascript">
    //JQuery
    $(document).ready(function(){
        $(document).on("click",
            function(e) {
                isActive = $(e.target).parent().attr("class");
                var  typeid= "{$typeid}";
                if (isActive=='head-searchform') {

                    if(typeid==101){
                          $(".head-search-focus").css('width',"345px");
                          $(".head-search-focus .head-searchform input").css('width',"323px");
                    }
                    if(typeid==5){
                        $(".head-search-focus").css('width',"285px");
                        $(".head-search-focus .head-searchform input").css('width',"263px");
                    }
                }
                else {
                    if(typeid==101||typeid==5){

                        $(".head-searchform input").css('width',"108px");
                        $(".head-search-wrapper").css('width',"130px");
                    }
                    $(".head-search-wrapper").removeClass("head-search-focus");


                }
            })
        $("#_j_head_search_input").click(function(){
            $(".head-search-wrapper").addClass("head-search-focus");

        });
    });
</script>
{Common::js("SuperSlide.min.js,base.js,common.js,myjs/bootstrap.min.js,myjs/jquery.select.js,comomn/jquery-1.11.3.min.js,common/bootsAitto-min.js")}

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
        var typeid  = "{$typeid}";



        $("#_j_head_search_input").keydown(function(e){
            if(e.keyCode==13){
                $('#_j_head_search_link').click();
            }
        });

        $(".searchmodel li:first").trigger('click');
        //search

        $('#_j_head_search_link').click(function(){

            var keyword = $('#_j_head_search_input').val();
            if(keyword == ''){
                alert("请输入内容");
                $("#_j_head_search_link").focus();
                return false;
            }
//            var typeid = $("#typename").attr('data-id');
//            var durl = $("#typename").attr('data-url');

//            if(typeid==0 || typeid==8){//0  是全部  8是 签证
//                var url = SITEURL+'search/cloudsearch?keyword='+encodeURIComponent(keyword)+"&typeid="+typeid;
//            }else{
//                var url = "{$GLOBALS['cfg_basehost']}"+durl+'all?keyword='+encodeURIComponent(keyword);
//            }
            if(typeid==4){

                var url = "{$GLOBALS['cfg_basehost']}"+"/raiders/"+'all?keyword='+encodeURIComponent(keyword);
            }else if(typeid==101){

                var url = "{$GLOBALS['cfg_basehost']}"+"/notes/list"+'?keyword='+encodeURIComponent(keyword);
            }else if(typeid==5){

                var url = "{$GLOBALS['cfg_basehost']}"+"/spots/"+'all?keyword='+encodeURIComponent(keyword);

            }

            location.href = url;
        })

        //导航的选中状态
        $(".st-menu a").each(function(){
            $(".st-menu").removeClass('current');
            var url= window.location.href;
            // url=url.replace('index.php','');
            //url=url.replace('index.html','');
            var urlArr = url.split("/");
            var ulink=$(this).attr("href");

            var urlLinkArr = ulink.split("/");
             //  定义目的地拼音

            var pinyin  ="{$info['pinyin']}";

            var  sss   = urlArr[3].split("?");
            var   p    = sss[0];
         console.log(urlArr[3]);
        // console.log(urlLinkArr[3]);
            if(urlArr[3]==urlLinkArr[3])
            {
                $(this).parents('li').addClass('current');
                return false;
            }else if(pinyin==p&&urlLinkArr[3]=='destination'&&pinyin.length!=''){

                $(this).parents('li').addClass('current');

                return false;
            }
            else{
                if(urlArr[3]!='member'){
                    $(".st-menu").first().addClass('current');
                }

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
                    $txt = '您好:<a href="{$cmsurl}member/">'+data.user.nickname+'</a>';
                }else{

                    //$txt = '<a class="dl" href="{$cmsurl}member/login">登录</a>';
                    // $txt+= '<a class="zc" href="{$cmsurl}member/register">免费注册</a>';
                    $txt = '&nbsp;&nbsp;&nbsp;&nbsp;<a href="{$cmsurl}member/login">登录</a> | <a href="{$cmsurl}member/register">注册</a>';
                }
                $("#loginstatus").html($txt);
            }
        })
    })

</script>
<script>
    var s  = 3;
</script>