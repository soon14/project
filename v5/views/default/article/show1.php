<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('mycss/article/base.css,mycss/article/travels-strategy.css')}

    <!-- 页面公用 public CSS 文件 -->
    {Common::js('myjs/jquery-1.8.3.min.js,myjs/jquery.select.js,strateg.js')}
</head>
<body>
{request "pub/header"}
<section>
    <div class="bgf2f2f2">

        <div class="container">
            <div class="breadbar_v1" >
                <ul >
                    <li style="padding: 15px 10px"><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a><i class="icon_gt">&gt;</i></li>
                    <li style="padding: 15px 10px"><a href="/raiders/" style="color: #999999">{$channelname}</a><i class="icon_gt" style="color: #999999"></i></li>
                </ul>
            </div>
        </div>
        <div style="height: 450px;display: none" id="hi_div" >

        </div>
        <div class="ctd_head_box" style="background:url(<?php echo $info['litpic'];?>) no-repeat;background-size: 100% 100%;">
            <div class="ctd_head_Warp"  >
                <div class="ctd_head"></div>

            </div>
            <div class="ctd_info_Warp" >
                <div class="ctd_info">
                    <div class="user_img"><img src="{if !empty($info['authorhead'])}{$info['authorhead']}{else}{$info['litpic']}{/if}" width="180" height="180"></div>
                    <div class="user_info">
                        <h2>{$info['title']}</h2>
                        <div class="user_bot">
                            <span class="user_name"></span>
                            <span class="user_data">{date("j/M.Y",$info['addtime'])}</span>
                            <span class="user_name">{if empty($info['author'])}匿名{else}{$info['author']}{/if}</span>

             <span class="fr link_box" style="margin:8px 0px 0px 100px">
                <a class="link_share bds_more bdsharebuttonbox" style="float: left;color: #fff" href="javascript:;" title="一键分享" rel="nofollow"  data-cmd="more"> <i></i>分享 </a>
                <!--a-- id="TitleFavourite" href="#" style="float: left" class="link_collect  a_popup_login bdsharebuttonbox" data-favouriteid="2223188" data-cmd="bdysc" data-favouritecategory="1" title="一键收藏"> <i></i>收藏 </--a-->
                <a id="TitleLike" href="javascript:;" style="float: left;margin: auto 20px;" data-id="{$info['id']}" class="link_like" title="喜欢就点击一下" rel="nofollow"> <i></i>{if !empty($info['islike'])}取消喜欢{else}喜欢{/if}<span>{$info['likeNum']}</span> </a>
                <a class="link_comment " href="javascript:;" style="float: left" title="我要评论" rel="nofollow"><i></i>评论<span>{$info['commentnum']}</span></a>
                <a class="link_browse" href="javascript:;" style="margin-left:20px;margin-top: -20px;"> <i></i> 浏览 <span>{$info['shownum']}</span> </a>
            </span>
                        </div>
                    </div>
                </div>

            </div>

            <script>
                window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
            </script>
        </div>



        <div class="container cf" style="background: #0C3;">
            <!-- 左半部分 -->
            <div class="ctd_main">
                <!-- 游记正文 -->
                <?php //var_dump($mulu);?>
                <div class="ctd_main_body">

                    <div class="travelInfo">
                        <div class="travelModeList_pic" >
                            <div style="z-index:111;">
                                <div class="daybox" style="">
                                    <h2 class="headline-1"> <a class="anchor-1" name="1"></a><span class="headline-content">概况</span> </h2>
                                    <div class="tarvel_dir_list">
                                        <ul>
                                            <li class="time">目的地：      {$extendinfo['e_travel_mdd']}</li>
                                            <li class="day">出行天数：    {$extendinfo['e_travel_day']}</li>
                                            <li class="cost">人均花费：    {$extendinfo['e_travel_sonsume']}</li>
                                            <li class="people">最佳出游时间： {$extendinfo['e_travel_time']}</li>
                                            <li class="jingqu" style="width: 405px">景点：   {$extendinfo['e_travel_spot']}  </li>
                                            <div class="clearfix"></div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="daybox">
                                    <h2 class="headline-1"> <a class="anchor-1" name="2"></a><span class="headline-content">景区简介</span> </h2>
                                    <div class="daybox_detail">{$info['content']}

                                       </div>
                                </div>
                                <div class="daybox">
                                    <h2 class="headline-1"> <a class="anchor-1" name="4"></a><span class="headline-content">交通路线</span> </h2>
                                    <div class="daybox_detail" >{$extendinfo['e_travel_traffic']}</div>
                                </div>
                                {loop $mulu $k $m}
                                <div class="daybox">
                                    <h2 class="headline-1"> <a class="anchor-1" name="{$k+5}"  style=""></a><span class="headline-content">{$m['title']}</span> </h2>
                                    <div class="daybox_detail">{$m['content']} </div>
                                </div>
                                {if !empty($m['child'])}
                                {loop $m['child'] $ke $j}
                                <div class="daybox">
                                    <h2 class="headline-2"> <a class="anchor-2" name="{$k+5}-{$ke+1}"></a><span class="headline-content">{$j['title']}</span> </h2>
                                    <div class="daybox_detail">{$j['content']}</div>
                                </div>
                                {/loop}
                                {/if}
                                {/loop}

                            </div>

                            <div id="leftightSideShow">
                                <div id="sideToolbar">
                                    <div id="sideCatalog">
                                        <div id="sideCatalog-catalog">
                                            <dl>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>

                <!-- 评论 -->
                <div class="ctd_comments" style="border: 1px solid #d8d8d8;padding:20px 0px 20px 0px;width: 83.5%;margin-left: 140px">
                    <h2 class="ctd_comments_title" style="padding:0px 0px 10px 20px;font-size:16px;"> 评论<span></span> </h2>
                    <div class="ctd_comments_box cf" style="margin-top: -20px">
                        <div class="textarea_box fr">
                            <div class="textarea" >
                                <textarea id="report_area" placeholder="Hi，楼主等你的回复呢~" maxlength="1000"></textarea>
                                <span id="ctd_comments_tip" class="ctd_comments_tip"> <em class="word_length" id="now_zf">0</em>/<em class="word_total" id="max">1000</em> </span> </div>
                            <a class="gs_btn_v2 btn_publish fl  a_popup_login tj-btn" id="btnJournalCommment" href="javascript:;" style="margin:10px 0px 0px 0px"> 发表评论 </a> </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="replyboxid">
                        {st:comment action="query" flag="raider" articleid="$info['id']" row="$info['row']" offset="$info['offset']" return="comment" }
                        {loop $comment $c}
                        <div class="ctd_comments_box cf" style="padding: 10px;width: 850px">
                            <a class="img" href="javascript:"> <img src="{if $c['nickname']}{$c['litpic']}{else}/res/images/img/pic1_100_100.jpg{/if}"></a>
                            <div class="textarea_box fr" style="margin-top:-70px;width:90%; ">

                                <a class="ctd_comments_username" target="_blank" href="#">{if $c['nickname']}{$c['nickname']}{else}匿名{/if}</a>
                                <p class="ctd_comments_text">{$c['content']}</p>
                                <div class="ctd_comments_contrl"> <span class="fl">发表于{Common::mydate('Y-m-d H:i:s',$c['addtime'])}</span> </div>
                                <div class="ctd_comments_reply">
                                    <div class="textarea">
                                        <textarea></textarea>
                                        <span><em class="word_length">0</em>/<em class="word_total">1000</em></span> </div>
                                </div>
                            </div>

                        </div>
                        {/loop}
                        <!---分页显示开始--->
                        <div class="uPageBox">
                            <?php
                            //   修改 每页显示的 内容


                            ?>
                            <div class="uPage"><?php if(!empty($comment[0]['totalpage'])){?> <a class="uPrevpage" href="/raiders/show_{$info['aid']}.html?page=1">首页</a><?php }?>
                                <?php if($page!=1){?><a href ="/raiders/show_{$info['aid']}.html?page=<?php echo ($page*1-1);?>" >上页</a>
                                <?php }  $totalPage=$comment[0]['totalpage'];
                                if($page+3<=$totalPage){
                                    for($i=$page;$i<$page+3;$i++){
                                        ?>
                                        <a href="/raiders/show_{$info['aid']}.html?page=<?php echo ($i);?>" class="num <?php if($page==$i){?>on<?php } ?>"><?php echo $i;?></a>
                                    <?php }
                                }
                                else{
                                    for($i=$page;$i<$totalPage+1;$i++){
                                        ?>
                                        <a href="/raiders/show_{$info['aid']}.html?page=<?php echo ($i);?>" class="num <?php if($page==$i){?>on<?php } ?>"><?php echo $i;?></a>
                                    <?php }
                                }
                                if($page<$totalPage){?>
                                    <a href="/raiders/show_{$info['aid']}.html?page={$page+1}" class="num">下页</a><?php } if(!empty($totalPage)){?>
                                    <a href ="/raiders/show_{$info['aid']}.html?page={$totalPage}" class="num" style="margin-left: 8px;">尾页</a><?php }?>
                                <!--a class="num on">1</a><a class="num">2</a><a class="num">3</a><a class="uNnextpage" href="#">下一页</a--> </div>
                        </div>
                        {/st}
                        <!---分页显示结束--->

                    </div>
                </div>
                <!-- 评论 -->

            </div>
        </div>
        <!-- 左半部分 end -->

        <!-- 右半部分 -->
        <div class="ctd_side">
            <div class="ctd-tit">河北全攻略<a class="fr" href="/raiders/all-0-1" target="_blank" style="font-size: 14px;color: #999;padding: 0px 20px 0px 0px">更多</a></div>

            <!-- 单图片列表开始 -->
            <!--      {st:article action="query" flag="new"  row="5" return="alist"}-->
            {loop $hotRaiders $hotR}
            <div class="listA-item">
             <?php //var_dump($hotR);?>
                <div class="listA-item-in">
                    <div class="img-item1">
                        <div class="title-item">
                            <p>{$hotR['title']} </p>
                        </div>
                        <a target="_blank" href="{$hotR['url']}" title="{$hotR['title']}">
                            <img src="{Common::img($hotR['litpic'])}" alt="{$hotR['title']}">
                        </a>
                    </div>
                    <a href="{$hotR['url']}">
                        <!--div class="about-item1">
                          <p>{$hotR['summary']}</p>
                        </div-->
                    </a>
                    <div class="Published">  <span><i></i><em>评论&nbsp;&nbsp;{$hotR['commentnum']}</em></span> 发表:{$hotR['addtime']}</div>
                </div>

            </div>
            {/loop}
            <div class="ctd-tit">近期活动<a class="fr" href="#" target="_blank">更多</a></div>

            <!-- 单图片列表开始 -->
            {loop $recent_activities $ra}
            <div class="listA-item">
                <div class="listA-item-in">
                    <div class="img-item1">
                        <div class="title-item">
                            <p>{$ra['title']} </p>
                        </div><a target="_blank" href="{$ra['url']}" title=""><img src="{Common::img($ra['litpic'])}" alt="{$ra['title']}">
                        </a></div>
                    <!--div class="about-item1">
                        <p>{$ra['summary']}</p>
                    </div-->
                    <div class="Published">  <span><i></i><em>评论{if $ra['commentnum']!=0}{$hotR['commentnum']}{else}0{/if}</em></span> 发表:{Common::mydate('Y-m-d',$ra['addtime'])}</div>
                </div>
            </div>
            {/loop}
        </div>
    </div>
    <div class="clearfix"></div>
</section>
{request "pub/footer"}
<input type="hidden" id="articleid" value="{$info['aid']}">
<input type="hidden" id="user" value="{$userinfo['mid']}"/>
<script type="text/javascript" src="/res/js/myjs/bootstrap-strategy.js"></script>
{Common::js('layer/layer.js',0)}
</body>
</html>

<script>
    /******
     *  评论  是 按照  文章的id
     *  喜欢是 按照 文章 的aid
     */
    $(".link_like").click(function(){
        var  th  = this;
        $.ajax({
            type:"POST",
            url:SITEURL+"member/login/ajax_is_login",
            dataType:'json',
            success:function(data){

                if(data.status){//已经 登录

                    addlike(th);

                }else{  //没有登录

                    layer.confirm('是否登录，将游记添加到收藏？', {
                        btn: ['是','否'] //按钮
                    }, function(){
                        var url  = window.location.href;//获取当前页面的地址

                        var login_url  =SITEURL+"member/login/?redirecturl="+url; //www.aitto.net/member/login/?redirecturl=
                        window.location.href=login_url;
                    }, function(){

                        // addlike(th);

                    });

                }

            }

        })



    });
    function addlike(th){
        var i  = 1 ;
        var infoid  = $(th).attr("data-id");
        //  alert(infoid);
        var s  = $(th).find("span").text();
        var arid = $("#articleid").val();
        //alert(arid);
        $.ajax({
            type: "POST",
            url: SITEURL+"article/ajax_add_like",
            dataType:'json',
            data: {l_num:s,arId:arid,infoid:infoid,typeid:'4'},
            success:function(data){
                if(data.status){
                    layer.msg(data.msg);

                    $(th).html("<i></i>取消喜欢<span>"+data.likenum+"</span>");
                }else{
                    layer.msg(data.msg);
                    $(th).html("<i></i>喜欢<span>"+data.likenum+"</span>");
                }

            }

        });
    }
    //提交问答
    $(".tj-btn").click(function(){
        var user      = $("#user").val();
        // return false;
        var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
        if(user.length==0){
            var url = '/member/login/?redirecturl='+urls;//
            window.location.href  =url ;
        }else {
            var articleid = "{$info['id']}";
            var dockid = $("#dockid").val();
            //var checkcode = $("#checkcode").val();
            var typeid = 4;
            //var nickname = $("#nickname").val();
            var content = $("#report_area").val();

            if (content.length < 5) {
                if(content.length==0){
                    layer.msg('{__("reply_not_empty")}', {
                        icon: 5

                    })
                    return false;
                }else{
                    layer.msg('{__("至少五个字符")}', {
                        icon: 5

                    })
                    return false;
                }

            }

            $.ajax({
                type: 'POST',
                url: SITEURL + 'article/ajax_add_comment',
                data: {
                    articleid: articleid,
                    content: content,
                    typeid: typeid,
                    dockid: dockid
                },
                success: function (data) {
                    if (data == 1) {
                        layer.msg('{__("checkcode_error")}', {
                            icon: 5


                        })
                        //重新加载验证码
                        $("#imgcheckcode").attr('src', "{$cmsurl}captcha?" + Math.random());

                    } else if (data == 3) {

                        layer.msg('{__("reply_success")}', {
                            icon: 6,
                            time: 1500
                        });
                        location.reload();
                    } else {
                        layer.msg('{__("reply_failure")}', {
                            icon: 5
                        })
                    }

                }

            })

        }
    })
</script>