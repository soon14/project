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
    {Common::css('mycss/travels-strategy.css')}
    {Common::css('common/bootstrap-min.css,common/public.css')}
     <!--    原来的css   修饰相关路线推荐 开始-->
    {Common::css('gonglue.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js')}
    <!--    原来的css   修饰相关路线推荐  结束-->
    {Common::js('myjs/jquery-1.8.3.min.js,myjs/jquery.select.js,myjs/strateg.js,jquery.lazyload.js')}
    <script type="text/javascript">
        jQuery(document).ready(
            function($){
                $("img").lazyload({
                    placeholder : "/res/imagesgrey.gif",
                    effect      : "fadeIn",
                    threshold : 200
                });
            });
    </script>
    <!--script src="js/jquery-1.8.3.min.js"></script><!-- 常用jQuery库 >
    <script src="js/jquery.select.js"></script>
    <script src="js/strateg.js"></script -->
    <style>
        a[class=next]:hover{
        color: #FF7534;
        text-decoration:underline}
        a[class=prev]:hover{
            color: #FF7534;
        text-decoration:underline;}

        a[class=fr]:hover{
            color: #FF7534;
            text-decoration:underline;
        }
    </style>
    {$GLOBALS['cfg_tongjicode']}
</head>
<body bgcolor="#f5f5f5">
{request "pub/header"}
<div class="notebox"></div>
<section>
  <div class="bgf2f2f2">
  <div style="" class="backmask"> </div>
<!--  <div class="container">-->
<!--    <div class="breadbar_v1" >-->
<!--      <ul >-->
<!--        <li style="padding: 15px 10px"><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a><i class="icon_gt">&gt;</i></li>-->
<!--        <li style="padding: 15px 10px"><a href="/raiders/" style="color: #999999">{$channelname}</a><i class="icon_gt" style="color: #999999"></i></li>-->
<!--      </ul>-->
<!--    </div>-->
<!--  </div>-->
  
<div class="ctd_head_box" style="background:url(<?php echo $info['litpic'];?>) no-repeat;background-size: 100% 100%;">
  <div class="ctd_head_Warp">
    <div class="ctd_head"></div>
  </div>
  <div class="ctd_info_Warp">
    <div class="ctd_info">
      <div class="user_img"><img src="{if !empty($info['authorhead'])}{$info['authorhead']}{else}{$info['litpic']}{/if}" width="180" height="180"></div>
      <div class="user_info">
        <h2>{$info['title']}</h2>
        <div class="user_bot"><span class="user_name"></span><span class="user_data">{date("j/M.Y",$info['addtime'])}</span><span class="user_name">{if empty($info['author'])}匿名{else}{$info['author']}{/if}</span><span class="user_lv" >Lv&nbsp;{$info['author_lv']}</span><span class="user_num">{$info['all_article']}篇游记</span></div>
      </div>
    </div>
  </div>
</div>
  <div class="container cf"> 
    <!-- 左半部分 -->
    <div class="ctd_main"> 
      <!-- 游记正文 -->
      <div class="ctd_main_body" style="border: 1px solid #d8d8d8;">
        <div class="ctd_controls cf" >
            <a class="fl" href="javascript:;" rel="nofollow" id="only_text"><i></i><em>只看文字</em> </a>
            <span class="fr">
                <a class="link_share bds_more bdsharebuttonbox" style="float: left" href="#" title="一键分享" rel="nofollow"  data-cmd="more"> <i></i>分享 </a>
                <!--a-- id="TitleFavourite" href="#" style="float: left" class="link_collect  a_popup_login bdsharebuttonbox" data-favouriteid="2223188" data-cmd="bdysc" data-favouritecategory="1" title="一键收藏"> <i></i>收藏 </--a-->
                <a id="TitleLike" href="javascript:;" style="float: left" data-id="{$info['id']}" class="link_like" title="喜欢就点击一下" rel="nofollow"> <i></i>喜欢<span>{$info['likeNum']}</span> </a>
                <a class="link_comment " href="javascript:;" style="float: left" title="我要评论" rel="nofollow"><i></i>评论<span>{$info['commentnum']}</span></a> <a class="link_browse" href="javascript:;" style="margin-top: -20px;"> <i></i> 浏览 <span>{$info['shownum']}</span> </a>
            </span>

        </div>
        <script>
          window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        </script>
        <div class="ctd_content" style="border: 1px solid #d8d8d8;padding-top: 20px" >
          <h3> 发表于 {Common::mydate('Y-m-d H:i',$info['addtime'])}</h3>
          <p>{$info['gl_mdd']}</p>
           {$info['content']}
            <br/>
            <div class="article-list">
                {if !empty($info['prev']['title'])}
                <a class="prev" href="{$info['prev']['url']}" style="font-size: 14px">上一篇：{$info['prev']['title']}</a>
                {else}
                <a class="prev" href="javascript:;" style="font-size: 14px">上一篇：没有了</a>
                {/if}
                {if !empty($info['next']['title'])}
                <a class="next" href="{$info['next']['url']}" style="float: right;font-size: 14px">下一篇：{$info['next']['title']}</a>
                {else}
                <a class="next" href="javascript:;" style="font-size: 14px">上一篇：没有了</a>
                {/if}

            </div>
        </div>

          {if !empty($info['finaldestid'])}
          <div class="xg-lines-box" style="padding:0px 40px 10px 40px;margin-top: -5px">
              <h4 style="padding-top: 15px;font-weight: 700;border-bottom: 1px solid #D8D8D8">相关线路推荐</h4>
              <div class="conlist">
                  <ul>
                      {st:line action="query" flag="relative" row="4" destid="$info['finaldestid']" return="rlist"}
                      {loop $rlist $l}
                      <li>
                          <div class="pic"><a href="{$l['url']}" target="_blank"><img src="{Common::img($l['litpic'],100,68)}" alt="{$l['title']}" /></a></div>
                          <div class="nr">
                              <p class="bt"><a href="{$l['url']}" target="_blank">{$l['title']}</a></p>
                              <p class="attr">
                                  {loop $l['iconlist'] $ico}
                                  <img src="{$ico['litpic']}" />
                                  {/loop}
                              </p>
                              <p class="data">
                                  {if !empty($l['booknum'])}
                                  <span>销量：{$l['booknum']}</span>
                                  {/if}
                                  {if !empty($l['satisfyscore'])}
                                  <span>满意度：{$l['satisfyscore']}</span>
                                  {/if}
                                  {if !empty($l['recommendnum'])}
                                  <span>推荐：{$l['recommendnum']}</span></p>
                              {/if}
                          </div>
                          <div class="price" style="margin-top: -10px">
                              {if !empty($l['sellprice'])}
                              <em>原价：<del><i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['sellprice']}</del></em>
                              {/if}
                              {if !empty($l['price'])}
                              <span><b><i class="currency_sy">{Currency_Tool::symbol()}</i>{$l['price']}</b>元</span>
                              {else}
                              <span>电询</span>
                              {/if}
                          </div>
                      </li>
                      {/loop}

                  </ul>
              </div>
          </div><!-- 相关线路推荐 -->
          {/if}
      </div>
      <!-- 游记正文 end >
        {if !empty($info['finaldestid'])}
        <div class="xg-read-box" style="width: 870px;margin:-20px 0px 20px 0px">
            <h3>相关阅读</h3>
            <div class="conlist" >
                <ul>
                    {st:article action="query" flag="relative" row="4" destid="$info['finaldestid']" return="arc"}
                    {loop $arc $a}
                    <li style="width: 190px">
                        <a href="{$a['url']}" target="_blank"><img src="{Common::img($a['litpic'],200,140)}" alt="{$a['title']}" /><p>{$a['title']}</p></a>
                    </li>
                    {/loop}

                </ul>
            </div>
        </div>
        {/if}<!-- 相关阅读 -->

      <div class="ctd_comments" style="border: 1px solid #d8d8d8;padding:20px 0px 20px 0px;">
        <h2 class="ctd_comments_title" style="padding:0px 0px 10px 20px;font-size:16px;"> 评论<span></span> </h2>
        <div class="ctd_comments_box cf" style="margin-top: -20px">
          <div class="textarea_box fr">
            <div class="textarea" style="margin:-20px 0px 0px -25px">
              <textarea id="report_area" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Hi，楼主等你的回复呢~" maxlength="1000"></textarea>
              <span id="ctd_comments_tip" class="ctd_comments_tip"> <em class="word_length" id="now_zf">0</em>/<em class="word_total" id="max">1000</em> </span> </div>
            <a class="gs_btn_v2 btn_publish fl  a_popup_login tj-btn" id="btnJournalCommment" href="javascript:;" style="margin:10px 0px 0px -25px"> 发表评论 </a> </div>
          <div class="clearfix"></div>
        </div>
        <div id="replyboxid">
          {st:comment action="query" flag="raider" articleid="$info['id']" row="2" offset="$info['offset']" return="comment" }
          {loop $comment $c}
          <div class="ctd_comments_box cf" style="padding: 10px;width: 850px">
            <div class="textarea_box fr"> <a class="ctd_comments_username" target="_blank" href="#">{if $c['nickname']}{$c['nickname']}{else}匿名{/if}</a>
              <p class="ctd_comments_text">{$c['content']}</p>
              <div class="ctd_comments_contrl"> <span class="fl">发表于{Common::mydate('Y-m-d H:i:s',$c['addtime'])}</span> </div>
              <div class="ctd_comments_reply">
                <div class="textarea">
                  <textarea></textarea>
                  <span><em class="word_length">0</em>/<em class="word_total">1000</em></span> </div>
              </div>
            </div>
            <a class="img" href="javascript:"> <img src="{if $c['nickname']}{$c['litpic']}{else}/res/images/img/pic1_100_100.jpg{/if}"></a>
          </div>
          {/loop}
          <!---分页显示开始--->
          <div class="uPageBox">
            <div class="uPage"><?php if(!empty($comment[0]['totalpage'])){?> <a class="uPrevpage" href="/raiders/show_{$info['aid']}.html?page=1">首页</a><?php }?>
              <?php if($page!=1){?><a href ="/raiders/show_{$info['aid']}.html?page=<?php echo ($page*1-1);?>" >上页</a>
              <?php } $totalPage=$comment[0]['totalpage'];
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
          <!---分页显示结束---> 
          
        </div>
      </div>
    </div>
    <!-- 左半部分 end --> 
    
    <!-- 右半部分 -->
    <div class="ctd_side">
      <div class="ctd-tit">热门游记<a class="fr" href="/raiders/all-0-1" target="_blank" style="font-size: 14px;color: #999;padding: 0px 20px 0px 0px">更多</a></div>
      
      <!-- 单图片列表开始 -->
<!--      {st:article action="query" flag="new"  row="5" return="alist"}-->
     {loop $hotRaiders $hotR}
      <div class="listA-item">

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
          <div class="Published">  <span><i></i><em>评论{if $hotR['commentnum']!=0}{$hotR['commentnum']}{else}0{/if}</em></span> 发表:{Common::mydate('Y-m-d',$hotR['addtime'])}</div>
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
    <input type="hidden" id="dockid" value="0"/>
      <input type="hidden" id="user" value="{$userinfo['mid']}"/>
    <input type="hidden" id="articleid" value="{$info['id']}"/>
</section>
{request "pub/footer"}
{Common::js('layer/layer.js',0)}
<script>
  $(".link_comment").click(function(){
   $("#report_area").focus();
  });
//  String.prototype.len = function()
//  {
//      return this.replace(/[^\x00-\xff]/g, "xx").length;
//  }
  $("#report_area").keyup(function(){
      var zf      = $(this).val();
      var len     = zf.length;
      $("#now_zf").text(len);
  });
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

                      addlike(th);

                  });

              }

          }

      })

      //layer.msg("sssssssss");


  });
  function addlike(th){
      var i  = 1 ;
      var infoid  = $(th).attr("data-id");
      //  alert(infoid);
      var s  = $(th).find("span").text();
      var arid = $("#articleid").val();


      $.ajax({
          type: "POST",
          url: SITEURL+"article/ajax_add_like",
          dataType:'json',
          data: {l_num:s,arId:arid,infoid:infoid},
          success:function(data){
              if(data.status){
                  layer.msg(data.msg);
                  if(s==""){
                      s=1*1;
                  }else{
                      s = s*1+1;
                  }
                //  $(th).find("span").text(s);
              }else{
                  layer.msg(data.msg);
              }

          }

      });
  }
  $(function(){
    //回复
    $(".reply_btn").click(function(){

      $("#dockid").val($(this).attr('data-replyid'));

    })
      //登陆状态
      $.ajax({
          type:"POST",
          url:SITEURL+"member/login/ajax_is_login",
          dataType:'json',
          success:function(data){

              if(data.status){
                  var txt = data.user.mid;
              }else{
                  var txt = '';
              }
              $("#user").val(txt);
          }

      })
    //提交问答
    $(".tj-btn").click(function(){
        var user      = $("#user").val();
       // return false;
        var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
        if(user.length==0){
            var url = '/member/login/?redirecturl='+urls;//
            window.location.href  =url ;
        }else {
            var articleid = $("#articleid").val();
            var dockid = $("#dockid").val();
            //var checkcode = $("#checkcode").val();
            var typeid = 4;
            //var nickname = $("#nickname").val();
            var content = $("#report_area").val();

            if (content.length < 5) {
                layer.msg('{__("reply_not_empty")}', {
                    icon: 5

                })
                return false;
            }
//      if(checkcode==''){
//        layer.msg('{__("checkcode_empty")}', {
//          icon: 5
//
//
//        })
//        return false;
//      }
            $.ajax({
                type: 'POST',
                url: SITEURL + 'article/ajax_add_comment',
                data: {
                    articleid: articleid,
                    content: content,
                    // checkcode:checkcode,
                    /// nickname:nickname,
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


//    //登陆状态
//    $.ajax({
//      type:"POST",
//      url:SITEURL+"member/login/ajax_is_login",
//      dataType:'json',
//      success:function(data){
//
//        if(data.status){
//          $txt = '';
//        }else{
//          $txt = '<a class="dl-btn" href="/member/login">登陆</a>';
//        }
//        $("#m_info").html($txt);
//      }
//
//    })
  })
</script>
</body>
</html>
