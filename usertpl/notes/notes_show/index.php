<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>河北旅游网-{$info['title']}</title>
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

    <div style="height: 450px;display: none" id="hi_div" >

    </div>
    <div class="ctd_head_box" style="background:url(<?php echo $info['litpic'];?>) no-repeat;background-size: 100% 100%;">
      <div class="ctd_head_Warp"  >
        <div class="ctd_head"></div>

      </div>
      <div class="ctd_info_Warp" >
        <div class="ctd_info">
          <div class="user_img"><img src="{if !empty($member['litpic'])}{$member['litpic']}{else}{$info['litpic']}{/if}" width="180" height="180"></div>
          <div class="user_info">
            <h2>{$info['title']}</h2>
            <div class="user_bot">
              <span class="user_name"></span>
              <span class="user_data">{date("j/M.Y",$info['addtime'])}</span>
              <span class="user_name">{if empty($member['nickname'])}匿名{else}{$member['nickname']}{/if}</span>

             <span class="fr link_box" style="margin:8px 0px 0px 100px">
                <a class="link_share bds_more bdsharebuttonbox" style="float: left" href="#" title="一键分享" rel="nofollow"  data-cmd="more"> <i></i>分享 </a>
                <!--a-- id="TitleFavourite" href="#" style="float: left" class="link_collect  a_popup_login bdsharebuttonbox" data-favouriteid="2223188" data-cmd="bdysc" data-favouritecategory="1" title="一键收藏"> <i></i>收藏 </--a-->
                <a id="TitleLike" href="javascript:;" style="float: left; margin: auto 20px;"" data-id="{$info['id']}" class="link_like" title="喜欢就点击一下" rel="nofollow"> <i></i>{if !empty($info['islike'])}取消喜欢{else}喜欢{/if}<span>{$info['likeNum']}</span> </a>
                <a class="link_comment " href="javascript:;" style="float: left" title="我要评论" rel="nofollow"><i></i>评论<span>{$info['commentnum']}</span></a> <a class="link_browse" href="javascript:;" style="margin-left:20px;margin-top: -20px;"> <i></i> 浏览 <span>{$info['shownum']}</span> </a>
            
            
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
                    <li class="time">目的地：   {$info['mdd']}</li>
                    <li class="day">出发日期： {$info['travel_date']}</li>
                    <li class="day">出行天数： {$info['travel_day']}</li>
                    <li class="cost">人均花费： {$info['travel_consume']}</li>
                    <li class="people">出行人物： {$info['travel_men']}</li>
                    <li class="jingqu">出行方式： {$info['travel_way']}</li>
                    <div class="clearfix"></div>
                   </ul> 
                   </div>
                </div>
              <?php //var_dump($notelist);?>
                {loop $notelist $k $m}
                <div class="daybox">
                  <h2 class="headline-1"> <a class="anchor-1" name="{$k+2}"  style=""></a><span class="headline-content">{$m['title_s']}</span> </h2>
                  <div class="daybox_detail">{$m['content']} </div>
                </div>
                {if !empty($m['child'])}
                {loop $m['child'] $ke $j}
                <div class="daybox">
                  <h2 class="headline-2"> <a class="anchor-2" name="{$k+2}-{$ke+1}"></a><span class="headline-content">{$j['title_s']}</span> </h2>
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
        
        <!-- 评论 --><!-- 评论 -->

      </div>

    </div>
    <!-- 左半部分 end -->

    <!-- 右半部分 -->
    <div class="ctd_side">
      <div class="ctd-tit">热门游记<a class="fr" href="/raiders/all-0-1" target="_blank" style="font-size: 14px;color: #999;padding: 0px 20px 0px 0px">更多</a></div>

      <!-- 单图片列表开始 -->
      <!--      {st:article action="query" flag="new"  row="5" return="alist"}-->
      {loop $hot_notes $hotR}
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
          <div class="Published">  <span><i></i><em>浏览{$hotR['shownum']}</em></span> 发表:{Common::mydate('Y-m-d',$hotR['addtime'])}</div>
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
<input type="hidden" id="user" value="{$userinfo['mid']}"/>
<input type="hidden" id="articleid" value="{$info['id']}">
<script type="text/javascript" src="/res/js/myjs/bootstrap-strategy.js"></script>
{Common::js('layer/layer.js',0)}
</body>
</html>

<script>
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

    //layer.msg("sssssssss");


  });
  function addlike(th){
    var i  = 1 ;
    var infoid  = $(th).attr("data-id");
    //  alert(infoid);
    var s  = $(th).find("span").text();
    var arid = $("#articleid").val();//  游记 id


    $.ajax({
      type: "POST",
      url: SITEURL+"article/ajax_add_like",
      dataType:'json',
      data: {l_num:s,arId:arid,infoid:infoid,typeid:101},
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
</script>