{Common::css('header.css')}
{if $indexpage}
{st:ad action="getad" name="HeaderAd" pc="1" row="1"}
    {if !empty($data)}
    <div class="top-column-banner">
        <div class="wm-1200"><i class="top-closed"></i></div>
        <a href="{$data['adlink']}"><img src="{Common::img($data['adsrc'])}" title="{$data['adname']}"></a>
    </div><!--顶部广告-->
    {/if}
    <script>
        $(function(){
            $('.top-closed').click(function(){
                $(".top-column-banner").slideUp();
            })
        })
    </script>
{/if}
<div class="web-top">
    <div class="wm-1200">
        <div class="notice-txt">{$GLOBALS['cfg_gonggao']}</div>
        <div class="scroll-order">
            <ul>
                {st:comment action="query" flag="all" row="3"}
                  {loop $data $row}
                     <li>{$row['nickname']}{$row['pltime']}评论了{$row['productname']}</li>
                  {/loop}
                {/st}
            </ul>
        </div>
        <div class="top-login">
            <span id="loginstatus">

            </span>
            <a class="dd" href="{$cmsurl}search/order"><i></i>订单查询</a>
            <dl class="dh">
                <dt><i></i>网站导航</dt>
                <dd>
                    {st:channel action="pc" row="20"}
                      {loop $data $row}
                       <a href="{$row['url']}">{$row['title']}</a>
                      {/loop}
                    {/st}
                </dd>
            </dl>

        </div>
    </div>
</div><!--顶部-->

<div class="st-header">
    <div class="wm-1200">
        <div class="st-logo">
            {if !empty($GLOBALS['cfg_logo'])}
            <a href="{$GLOBALS['cfg_logourl']}"><img src="{$GLOBALS['cfg_logo']}" alt="{$GLOBALS['cfg_logotitle']}" /></a>
            {/if}
        </div>
        <div class="st-top-search">
            <div class="st-search-down">
                <strong id="typename"><i></i></strong>
                <ul class="st-down-select searchmodel">
                    <li data-id="0">全部</li>
                    {loop $searchmodel $m}
                        <li data-id="{$m['id']}" data-url="{$m['url']}">{$m['modulename']}</li>
                    {/loop}

                </ul>
            </div>
            <input type="text" id="st-top-search" class="st-txt searchkeyword" placeholder="输入目的地、酒店、攻略" />
        <span id="dt-top-search-span">
            {st:hotsearch action="hot" row="3"}
             {loop $data $row}
        	  <a href="{$row['url']}" target="_blank">{$row['title']}</a>
             {/loop}
            {/st}
        </span>
            <input type="button" value="搜索" class="st-btn" />
        </div>
        <div class="st-link-way">
            <strong>客服电话：</strong>
            <em>{$GLOBALS['cfg_phone']}</em>
        </div>
    </div>
</div><!--header-->

<div class="st-nav">
    <div class="wm-1200">
        {include "pub/usernav"}
        <div class="st-menu">
            <a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}<s></s></a>
            {st:channel action="pc" row="20"}
             {loop $data $row}
              <a href="{$row['url']}">{$row['title']}
                 {if $row['kind']==1}
                  <i class="st-new-ico"></i><s></s>
                 {elseif $row['kind']==2}
                  <i class="st-hot-ico"></i><s></s>
                 {elseif $row['kind']==3}
                  <i class="st-jing-ico"></i><s></s>
                 {elseif $row['kind']==4}
                  <i class="st-jian-ico"></i><s></s>
                 {/if}
              </a>
             {/loop}
            {/st}

        </div>
    </div>
</div><!--主导航-->
{Common::js('SuperSlide.min.js')}
<script>
    var SITEURL = "{$cmsurl}";

    $(function(){
        $(".searchmodel li").click(function(){
            var typeid = $(this).attr('data-id');
            var durl = $(this).attr('data-url');
            var typename = $(this).text();
            $("#typename").html(typename+'<i></i>');
            $("#typename").attr('data-id',typeid);
            $("#typename").attr('data-url',durl);

        })
        $(".searchmodel li:first").trigger('click');

        //search
        $('.st-btn').click(function(){

            var keyword = $('.searchkeyword').val();
            if(keyword == ''){
                $('.searchkeyword').focus();
                return false;
            }
            var typeid = $("#typename").attr('data-id');
            var durl = $("#typename").attr('data-url');
            if(typeid==0 || typeid==8){
                var url = SITEURL+'search/cloudsearch?keyword='+encodeURIComponent(keyword)+"&typeid="+typeid;
            }else{
                var url = "{$GLOBALS['cfg_basehost']}"+durl+'all?keyword='+encodeURIComponent(keyword);
            }

            location.href = url;
        })
        //search focus
        var topSearch={};
        topSearch.placeholder=$('#st-top-search').attr('placeholder');
        topSearch.spanHtml=$('#dt-top-search-span').html();
        $('#st-top-search').focus(function(){
            $('#st-top-search').attr('placeholder','');
            $('#dt-top-search-span').html('');
        });
        $('#st-top-search').blur(function(){
          if($(this).val()==''){
              $('#st-top-search').attr('placeholder',topSearch.placeholder);
              $('#dt-top-search-span').html(topSearch.spanHtml);
          }
        });
        //导航的选中状态
        $(".st-menu a").each(function(){
            var url= window.location.href;
            url=url.replace('index.php','');
            url=url.replace('index.html','');
            var ulink=$(this).attr("href");
            if(url==ulink)
            {
                $(this).addClass('active');
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
                }else{

                    $txt = '<a class="dl" href="{$cmsurl}member/login">登录</a>';
                    $txt+= '<a class="zc" href="{$cmsurl}member/register">免费注册</a>';
                }
                $("#loginstatus").html($txt);
            }

        })


    })


</script>