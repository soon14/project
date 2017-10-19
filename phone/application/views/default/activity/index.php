<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>攒“游”票兑奖品 带着它们去旅行</title>
  {Common::css('activity/bootstrap-min.css,activity/public.css,activity/activity-Join.css,activity/index.css')}
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
</head>
<body>
<header><img src="/phone/public/images/activity/header.jpg" width="100%"></header>
<section>
  <div class="container">
    <div class="join-regular">
      <div class="contit"><img src="/phone/public/images/activity/regular.jpg" width="100%"></div>
      <div class="conbox">
        <p>1、选择你心仪的奖品，请朋友帮忙送游票，攒够规定数量的游票数即可兑换相应的奖品，<span style="color: #fff000">未达到规定票数，依然可以兑换其它任意一款低票数礼品。</span></p>
        <p>2、活动期间内，每位用户仅可参与一次活动、兑换一次奖品</p>
        <p>3、奖品数量1000件，随兑随领，兑完为止</p>
        <p>4、本次活动仅限石家庄用户参加</p>
        <p>5、活动解释权归河北旅游网所有</p>
      </div>
      <div class="regular-button"><a href="http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100003810&idx=1&sn=34cccdabe9c2c5ecdd9ce34db684eba9&chksm=17df154720a89c51b743a23c61f1e7667bff01b0fe96df85036d19f5191185acf831a1c0f628&scene=1&srcid=0923InFjxmQOV0M3DsnAS1UM#rd">查看活动详情</a></div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="join-Prize"> <img src="/phone/public/images/activity/bg_01.png" width="100%">
      <div class="join-Prize-m">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
              <a href="javascript:void(0)" prid="1" content="你选择了天文望远镜,需要399“游”票"> <img src="/phone/public/images/activity/pic_02.png"> </a>
            </td>
            <td>
              <a href="javascript:void(0)" prid="2" content="你选择了户外帐篷,需要299“游”票"> <img src="/phone/public/images/activity/pic_03.png"> </a>
            </td>
            <td>
              <a href="javascript:void(0)" prid="3" content="你选择了紫海香田门票,需要99“游”票"> <img src="/phone/public/images/activity/pic_04.png"> </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="javascript:void(0)" prid="4" content="你选择了太阳能野营灯,需要75“游”票"> <img src="/phone/public/images/activity/pic_05.png"> </a>
            </td>
            <td>
              <img src="/phone/public/images/activity/pic_01.png">
            </td>
            <td>
              <a href="javascript:void(0)" prid="5" content="你选择了户外急救包,需要50“游”票"> <img src="/phone/public/images/activity/pic_06.png"> </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="javascript:void(0)" prid="6" content="你选择了运动水壶,需要35“游”票"> <img src="/phone/public/images/activity/pic_07.png"> </a>
            </td>
            <td>
              <a href="javascript:void(0)" prid="7" content="你选择了沙滩包,需要25“游”票"> <img src="/phone/public/images/activity/pic_08.png"> </a>
            </td>
            <td>
              <a href="javascript:void(0)" prid="8" content="你选择了魔术头巾,需要15“游”票"> <img src="/phone/public/images/activity/pic_09.png"> </a>
            </td>
          </tr>
        </table>
        <div class="clearfix"></div>
      </div>
    </div>
    {if $isPart == 1111}
    <div class="join-button">
      <img src="/phone/public/images/activity/button.png" width="100%" data-target="#DialogDiv2" data-toggle="modal">
    </div>
    {else}
    <div class="join-button" id="btn" pvl="0" content="">
      <img src="/phone/public/images/activity/button.png" width="100%" data-target="#DialogDiv3" data-toggle="modal">
    </div>
    {/if}
  </div>
</section>
<!-- 代码开始 -->
<div class="baodao">
  <h2>兑换报道</h2>
  <div class="list_lh">

    <ul>
      {loop $exchangelist $value}
      <li>
        <span class="name">{$value['nickname']}</span><span class="btn_time">{$value['exchange_time']}</span><span >{$value['name']}</span ><span><em class="btn_lh">已兑换</em></span>
      </li>
      {/loop}
    </ul>
  </div>
  <!-- 代码结束 -->
</div>
<div class="none-box"></div>
<div class="footer">
  <ul>
    <li><a href="/phone/activity/index"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>
    <li><a href="/phone/activity/prizelist"><span class="ui-icon ico01"></span><span class="ui-txt">礼品</span></a></li>
    <li><a href="/phone/activity/rank" class="last-child"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>
  </ul>
</div>
<footer></footer>
<!-- 弹框1 -->
<div class="modal" id="DialogDiv1">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">参与活动必须为石家庄地区用户<br>
        您目前不属于该范围用户</div>
      <div class="MsgBtns"><div class="MsgBtn Cancel" onclick="dialogCancel('DialogBox')">确定</div></div>
    </div>
  </div>
</div>
<!-- 弹框1 -->
<div class="modal" id="DialogDiv3">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" id="return">参与活动必须为石家庄地区用户<br>
        您目前不属于该范围用户</div>
      <div class="MsgBtns"><div class="MsgBtn Cancel" onclick="tiaozhuan(this);" url="" id="sure">确定</div><!--div class="MsgBtn Cancel" onclick="dialogCancel('DialogBox')">取消</div--></div>
    </div>
  </div>
</div>

<!-- 弹框1 -->
<div class="modal" id="DialogDiv2">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content2">
      <div class="modal-body"><img src="/phone/public/images/activity/2wei.jpg"> </div>
      <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
    </div>
  </div>
</div>
<input type="hidden" value="{$isPart}" id="isPart"/>
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
      title: "攒“游”票兑奖品 带着它们去旅行",// 111
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
      link: "http://www.aitto.net/phone/activity/index", // ''
      imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
      success: function () {

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });
    wx.onMenuShareAppMessage({
      title: "攒“游”票兑奖品 带着它们去旅行", // 分享标题
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
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
<script src="/phone/public/js/activity/jquery-1.11.3.min.js"></script><!-- jQuery库 -->
<script src="/phone/public/js/activity/index.js"></script>
<script>
  function tiaozhuan(obj){
    var url = $(obj).attr('url');
    if(url != ''){
      window.location.href=url;
    }
  }
  function tz(){
    var url= $('#sure').attr('url');
    if(url != ''){
      window.location.href=url;
    }
  }
  $(function(){
    //点击对应奖品修改btn的值
    $('.join-Prize-m a').click(function(){
      var prid = $(this).attr('prid');
      var content = $(this).attr('content');
      $('.join-Prize-m div').remove();
      $('#btn').attr('pvl',prid);
      $('#btn').attr('content',content);
      $(this).before("<div class='mask-img'><img src='/phone/public/images/activity/pic_00.png' width='100%'></div>");
    })
    $('#btn').click(function(){
      var pvl = $(this).attr('pvl');
      var content = $(this).attr('content');
      var isPart = $('#isPart').val();
      ///alert(isPart);
      if(pvl == 0){
        $('#return').html("活动已结束");
        //$('#return').html("请选择想要获取的奖品");
       }else{
        $('#return').html("活动已结束");
/*        $.ajax({
          type: "POST",
          url: '/phone/activity/ajax_addPart',
          async:false,
          dataType: "json",
          data: {pid:pvl,isPart:'{$isPart}'},
          success: function(data){
            if(data == 1){
              $('#return').html(content+"<br/><span class='org'>未达到条件任然可以兑换其它奖品</span>");
              $('#sure').attr('url','/phone/activity/show');
              setTimeout("tz()",6000);
            }else if(data == 1111){
              $('#return').html("请关注公众号后参加活动");
            }else if(data == 1113){
              $('#return').html("您已经参加过活动");
            }else if(data == 1115){
              $('#return').html("请选择奖品");
            }else if(data == 1112){
              $('#return').html("本次活动仅限石家庄用户参与");
              var url="/phone/activity/index";
            }else{
              $('#return').html("未获取参加资格，请联系客服");
            }
          }
        });*/
      }
    })
  })
  $(document).ready(function(){
    $('.list_lh li:even').addClass('lieven');
  })
  $(function(){
    $("div.list_lh").myScroll({
      speed:40, //数值越大，速度越慢
      rowHeight:40 //li的高度
    });
  });
</script>
<script src="/phone/public/js/activity/activity-Join.js"></script><!-- 常用bootstrap jQuery库 -->

</body>
</html>
