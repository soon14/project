<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>集红叶秋山免费游</title>

<!-- 基础框架 bootstrap CSS 文件 -->
  {Common::css('activity_2/bootstrap-min.css,activity_2/public.css,activity_2/index.css,activity_2/activity-Join.css')}
  {Common::js('activity_2/jquery-1.11.3.min.js,activity_2/activity-Join.js,activity_2/index.js')}

  <script>
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

</head>

<body>
<header><img src="/phone/public/images/activity_2/header.jpg" width="100%"></header>
<section>
  <div class="container">
    <div class="join-regular">
      <div class="contit">活动规则</div>
      <div class="conbox">
        <p>1、参与活动后，邀请好友送红叶，<span>最先集齐18片红叶的前100位用户</span>可获得秋山免费门票一张；</p>
        <p>2、每位用户可给多个参与者各赠送一片红叶；</p>
        <p>3、本次活动仅限石家庄用户参加，活动结束后，中奖用户凭中奖短信和手机号到秋山景区售票口兑换门票。</p>

      </div>
      <div class="regular-button"><a href="http://t.cn/RVKRcsW">查看活动详情</a></div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="join-Prize"> <img src="/phone/public/images/activity_2/bg_01.png" width="100%"> </div>
    <div style="text-align:center;font-size: 10px;">点击图片查看详情</div>
    <div><img src="/phone/public/images/activity_2/ticke.png" width="100%" onclick="window.location='/phone/activity/prizeshow'"></div>

    <div class="join-button">

      {if time()>$overtime}
         <img src="/phone/public/images/activity_2/over.png" width="100%">
      {else}
         {if empty($playerid)}


        <a href="javascript:"  data-target="#DialogDiv3"  data-toggle="modal" data-index="index">  <img src="/phone/public/images/activity_2/button.png" width="100%" id="join"  ></a>

        {else}
          <a href = '/phone/activity/show'><img src="/phone/public/images/activity_2/seeme.png" width="100%"></a>
         {/if}
      {/if}

    </div>
  </div>
</section>
<!-- 代码开始 -->
<div class="baodao">
  <h2>集齐18片红叶 公告</h2>
  <div class="list_lh">
    <ul>
      {loop $exchangelist $v}
      <li> <span class="name">{$v['nickname']}</span><span class="btn_time">{$v['exchange_time']}</span><span >获得秋山门票</span></li>
      {/loop}

    </ul>
  </div>
  <!-- 代码结束 --> 
</div>
<div class="none-box"></div>
<div class="modal" id="DialogDiv3">
  <div class="modal-backdrop"></div>
  <div style="top: 211.5px; left: 191px;" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h4 style="text-align: center;margin: 4px 0px 0px 0px;font-size: 14px;">请填写手机号作为领奖凭证</h4></div>
      <div class="modal-body">
        <input class="login-text" placeholder="请输入您的手机号" id ="phone" name="phone" type="tel">
      </div>
      <div class="MsgBtns">
        <div class="MsgBtn ok" onclick="joins(this)">确定</div>
        <div class="MsgBtn Cancel" onclick="MsgClose('DialogBox')">取消</div>
      </div>
    </div>
  </div>
</div>
<!-- 弹框1 -->
<div class="modal" id="DialogDiv2">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content2">
      <div class="modal-body"><img src="/phone/public/images/activity_2/2wei.jpg"> </div>
      <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
    </div>
  </div>
</div>
<div class="modal" id="DialogDiv4">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">

        <div class="MsgBtns">

        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <ul>
    <li><a href="#"  onclick="window.location='/phone/activity/index'"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>
    <li><a href="#" onclick="window.location='/phone/activity/show'"><span class="ui-icon ico01"></span><span class="ui-txt">我的</span></a></li>
    <li><a href="#" class="last-child" onclick="window.location='/phone/activity/rank'"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>
  </ul>
</div>



</body>
</html>


<script>

  $(document).ready(function(){
    $('.list_lh li:even').addClass('lieven');
  })
  $(function(){
    $("div.list_lh").myScroll({
      speed:40, //数值越大，速度越慢
      rowHeight:40 //li的高度
    });
  });


//  $("#join").click(function(){
//
//    var thisObjID  ="#DialogDiv3";
//    $(thisObjID).addClass('in');
//    var thisObjcon = $(thisObjID).children(".modal-dialog");
//    thisObjcon.css({
//      'top': "35%",
//      'left': "10%"
//    });
//
//  });

  function joins(th){

    var userphone  = $("#phone").val();// 用户 预留的手机号

    var  reg       = /(1[3-9]\d{9}$)/;

    var ispart     = "{$isPart}";// 验证 是否关注 参数
    //return false;
    if(userphone=='') {

      return false;

    }
    if(!reg.test(userphone)){
      // $("#DialogDiv3").removeClass('in');
      $("#DialogDiv3").removeClass('in');
      var thisObjID  ="#DialogDiv4";
      $(thisObjID).addClass('in').children().children().children('.modal-body').text('输入正确手机格式');
      var thisObjcon = $(thisObjID).children(".modal-dialog");
      thisObjcon.css({
        'top': "35%",
        'left': "10%"
      });
      setTimeout(function(){ $(thisObjID).removeClass('in')},1500);
      return false;
    }
    $.ajax({
      type:"post",
      url : '/phone/activity/ajax_addPart',
      data:{phone:userphone,ispart:ispart},
      dataType:'json',
      success: function (data){
        //alert(data.status);
        if(data.status==1115){
          window.location.href = '/phone/activity/show_'+data.aid+'.html'
        }else if(data.status==1111){
          $("#DialogDiv3").removeClass('in');
          var thisObjID  ="#DialogDiv2";
          $(thisObjID).addClass('in');
          var thisObjcon = $(thisObjID).children(".modal-dialog");
          thisObjcon.css({
            'top': "10%",
            'left': "10%"
          });
        }else{
          $("#DialogDiv3").removeClass('in');
          var thisObjID  ="#DialogDiv4";
          $(thisObjID).addClass('in').children().children().children('.modal-body').text(data.msg);
          var thisObjcon = $(thisObjID).children(".modal-dialog");
          thisObjcon.css({
            'top': "35%",
            'left': "10%"
          });
          setTimeout(function(){ $(thisObjID).removeClass('in')},1500);
        }
      }
    });
  }
</script>
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
    wx.onMenuShareTimeline({
      title: "集18片“红叶”秋山免费游",// 111
      desc: "集18片“红叶”秋山免费游", // 分享描述
      link: "http://www.aitto.net/phone/activity/index", // ''
      imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
      success: function () {

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });

    wx.onMenuShareAppMessage({
      title: "集红叶秋山免费游", // 分享标题
      desc: "河北旅游网集18片“红叶”免费游秋山活动，正在进行中!", // 分享描述
      link: "http://www.aitto.net/phone/activity/index", // 分享链接
      imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
      type: 'link', // 分享类型,music、video或link，不填默认为link
      dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
      success: function () {
        // 用户确认分享后执行的回调函数
      },
      cancel: function () {
        // 用户取消分享后执行的回调函数
      }
    });


  })
</script>