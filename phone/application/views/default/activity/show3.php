<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <title>我的成绩
</title>
<link rel="stylesheet" type="text/css" href="index.css" />
  <script src="/phone/public/js/activity_2/jquery-1.11.3.min.js"></script><!-- jQuery库 -->
  <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
  <script>
    wx.config({
      debug: false,
      appId: '{$signPackage["appId"]}',
      timestamp: "{$signPackage['timestamp']}",
      nonceStr: '{$signPackage["nonceStr"]}',
      signature:'{$signPackage["signature"]}',
      jsApiList:['onMenuShareTimeline','onMenuShareAppMessage']
      // 所有要调用的 API 都要加到这个列表中
    });
    wx.ready(function(){
      //  1   为 分享朋友圈   2  分享 好友
      var  post = "POST";
      var  openid   = "{$openid}";
      var  thatpage =  "show";

      var  url = "/phone/activity/share";
      wx.onMenuShareTimeline({
        title: "我坚持了{$player_info['best_time']}秒，排名第{$userinfo['rank']}名，差一点就能拿到户外帐篷了！",// 111
        desc: "我坚持了{$player_info['best_time']}秒，排名第{$userinfo['rank']}名，差一点就能拿到户外帐篷了！", // 分享描述
        link: "http://www.aitto.net/phone/activity/show_{$pid}.html", // ''
        imgUrl: 'http://www.aitto.net/phone/activity/share_3.jpg', // 分享图标
        success: function () {
          var  data ={openid:openid,thatpage:thatpage,share_type:1};
          $.ajax({
            type:post,
            url :url,
            data:data,
            success:function(data){

            }
          })
        },
        cancel: function () {
          // 用户取消分享后执行的回调函数

        }
      });
      wx.onMenuShareAppMessage({
        title: "双11前的疯狂，拼手速免费拿户外帐篷", // 分享标题
        desc: "我坚持了{$player_info['best_time']}秒，排名第{$userinfo['rank']}名，差一点就能拿到户外帐篷了！", // 分享描述
        link: "http://www.aitto.net/phone/activity/show_{$pid}.html", // 分享链接
        imgUrl: 'http://www.aitto.net/phone/activity/share_3.jpg', // 分享图标
        type: 'link', // 分享类型,music、video或link，不填默认为link
        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
        success: function () {
          // 用户确认分享后执行的回调函数
          var  data ={openid:openid,thatpage:thatpage,share_type:2};
          $.ajax({
            type:post,
            url :url,
            data:data,
            success:function(data){

            }
          })
        },
        cancel: function () {
          // 用户取消分享后执行的回调函数
        }
      });


    })
  </script>
  <script type="text/javascript">
    var SITEURL = "{URL::site()}";
  </script>
  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?f968b43cd6404299f54d25d87c3bbe3a";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
    {Common::css('activity_2/activity-Join.css')}
    {Common::js('activity_2/activity-Join.js')}
</head>
<body>
<header><img src="bg.png" width="100%"></header>
<section>
  <div class="container">
    <div class="join-box" >
      {if !empty($player_info)}
      <div class="join-peo"><img src="{$userinfo['headimgurl']}">  </div>
      {else}
      <div class="join-peo"  style="border: 0px ">  </div>
      {/if}
    </div>
  </div>
</section>
<section>
  <!------是否活动中 ---->
  {if $overtime>time()}
      <!----判断是否参加---->
      {if !empty($player_info)}
            <!---判断他人看  还是 自己看------->
            {if $openid ==$player_info['openid']}
            <!-----自记 看----->
                  <div class="container">
                    <div class="join-top">
                      <div class="joinName">{$userinfo['nickname']}<span class="num">（编号{$player_info['id']}）</span></div>
                      <div class="joinJust">最好成绩{$player_info['best_time']}秒</div>
                      <div class="pai">目前排名第{$userinfo['rank']}</div>
                    </div>
                     <div class="xuanyao-button"><a href="javascript:" data-target="#DialogDiv3" data-toggle="modal" data-index="show_3"><span>炫耀我的战绩</span></a></div>
                     <div class="activity-button"><a href="/phone/activity/index?rand=<?php echo rand(0,100)?>"><span>再玩一次&nbsp;go&nbsp;>></span></a></div>
                  </div>
            {else}
            <!-----他人看----->
              <div class="container">
                <div class="join-top">
                    <div class="joinName">{$userinfo['nickname']}<span class="num"></span></div>
                    <div class="joinJust">最好成绩{$player_info['best_time']}秒</div>
                    <div class="pai">目前排名第{$userinfo['rank']}</div>
                </div>

                <div class="activity-button"><a href="/phone/activity/index?rand=<?php echo rand(0,100)?>"><span>我也要玩&nbsp;go&nbsp;>></span></a></div>
              </div>
            {/if}
      {else}<!--未参加-->
      <div class="container">
       <div style="padding: 15px;text-align: center">你还没有参与游戏，参与赢大奖</div>
      <div class="activity-button"><a href="/phone/activity/index?rand=<?php echo rand(0,100)?>"><span>开始玩&nbsp;go&nbsp;>></span></a></div>
      </div>
      {/if}

  {else}<!--活动结束 -->

      <!----判断是否参加---->
      {if !empty($player_info)}
          <!---判断他人看  还是 自己看------->
          {if $openid ==$player_info['openid']}
                <!-----自记 看----->
            <div class="container">
            <div class="join-top">
              <div class="joinName">{$userinfo['nickname']}<span class="num">（编号{$player_info['id']}）</span></div>
              <div class="joinJust">最好成绩{$player_info['best_time']}秒</div>
              <div class="pai">目前排名第{$userinfo['rank']}</div>
            </div>

            <div class="activity-nobutton"><a href="javascript:"><span>活动结束，成绩不计入排行榜</span></a></div>
            <div class="activity-button"><a href="/phone/activity/index?rand=<?php echo rand(0,100)?>"><span>开始玩&nbsp;go&nbsp;>></span></a></div>
           </div>
          {else}
           <div class="container">
                <!-----他人看----->
              <div class="join-top">
                <div class="joinName">{$userinfo['nickname']}<span class="num"></span></div>
                <div class="joinJust">最好成绩{$player_info['best_time']}秒</div>
                <div class="pai">目前排名第{$userinfo['rank']}</div>
              </div>

              <div class="activity-nobutton"><a href="javascript:"><span>活动结束，成绩不计入排行榜</span></a></div>
              <div class="activity-button"><a href="/phone/activity/index?rand=<?php echo rand(0,100)?>"><span>开始玩&nbsp;go&nbsp;>></span></a></div>
          </div>
          {/if}
      {else}
        <div class="container">
            <div class="activity-nobutton"><a href="javascript:"><span>活动结束，成绩不计入排行榜</span></a></div>
            <div class="activity-button"><a href="/phone/activity/index?rand=<?php echo rand(0,100)?>"><span>开始玩&nbsp;go&nbsp;>></span></a></div>
         </div>
      {/if}
  {/if}
</section>


<!-- 弹框1 -->
<div class="modal" id="DialogDiv1">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">必须关注后才能点击助力<br>
        每人只能<span class="org">助力1次</span></div>
      <div class="MsgBtns">
        <div class="MsgBtn ok">确定</div>
        <div class="MsgBtn Cancel" onclick="dialogCancel('DialogBox')">取消</div>
      </div>
    </div>
  </div>
</div>

<!-- 弹框1 -->
<div class="modal" id="DialogDiv2">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content2">
      <div class="modal-body"><img src="gz_3.jpg"> </div>
      <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
    </div>
  </div>
</div>
<div class="modal" id="DialogDiv3">
    <div class="modal-backdrop"></div>
    <div class="modal-dialog" style="height:100%">
        <div class="modal-content2" style="width:100%;height:100%">
            <div class="modal-body" style="width:100%;height:100%"><img src="sharenew_3.png" width="100%" height="100%"  onclick="Cancel(this)"> </div>
            <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
        </div>
    </div>

</div>
<br/>
<div class="none-box"></div>
<div class="footer">
    <ul>
        <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/index?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico00"></span><span class="ui-txt">首页</span></a></li>
        <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/show?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico01"></span><span class="ui-txt">我的</span></a></li>
        <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/rank?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico02"></span><span class="ui-txt">排名</span></a></li>
        <li><a href="javascript:void(0)" onclick="window.location='http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100004737&idx=1&sn=d6abe0b4a9f49ee9a7f82ae9062e7cd8&chksm=17df092420a880328d8913d5a78fc7eda4c458f27181b2eda9a78507851d633f462eecebda37&mpshare=1&scene=23&srcid=1101qaUHrZYY2mBwN7sZ0l54#rd'" class="last-child"><span class="ui-icon ico03"></span><span class="ui-txt">奖品</span></a></li>
    </ul>
        </div>
</body>
</html>
<script>

    function Cancel(th){
        var s  = $(th).parents(".modal");
        s.removeClass("in");
    }
</script>