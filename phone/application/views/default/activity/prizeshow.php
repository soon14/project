<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>{$info['name']}</title>
  {Common::css('activity/bootstrap-min.css,activity/public.css,activity/activity-Join.css,activity/activity-Gift.css')}
  <script src="/phone/public/js/activity/jquery-1.11.3.min.js"></script><!-- jQuery库 -->
  <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
  <script src="/phone/public/js/activity/activity-Join.js"></script>

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
<section>
 <div class="gift-con">
   <img src="{$info['head_pic']}">
   <div class="gift-con-b">
     <p class="price">兑换市场价值<span>&yen;{$info['price']}</span>元</p>
   <p>{$info['content']} </p>

   <p></p></div>
 </div>
</section>

<section style="margin-bottom:60px;">
  <div class="container">
    <div class="join-regular">
      <div class="contit"><img src="/phone/public/images/activity/regular1.jpg" width="100%"></div>
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

<!-- 弹框1 -->
<div class="modal" id="DialogDiv1">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">必须关注后才能点击送票<br>
        每人只能<span class="org">送票1次</span></div>
      <div class="MsgBtns">
        <!--        <div class="MsgBtn ok">确定</div>-->
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
      <div class="modal-body"><img src="/phone/public/images/activity/2wei.jpg"> </div>
      <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
    </div>
  </div>
</div>

<footer>
  {if  empty($getpay)}
  <div class="foot-btn"><div class="btn-zhu">票数{$info['pay']}</div><div class="btn-dui"><a href="/phone/activity/index" style="font-size: 1.2em">点击参与活动<span>(奖品剩余{$info['num']})</span><a></div></div>
  {else}
    {if  $info['num']==0}
    <div class="foot-btn"><div class="btn-zhu">票数{$info['pay']}</div><div class="btn-fin"><a href="javascript:" data-target="#DialogDiv1" data-toggle="modal" data-content="兑换光了，看看其他的奖品吧">兑换光了<span>(奖品剩余0)</span><a></div></div>
    {else}
      {if empty($isexchange)&&!empty($getpay)}
         <?php

         $getpay = $getpay['getpay']*1;
                $pay  =$info['pay']*1;

         ?>
        {if $getpay<$pay}
         <div class="foot-btn"><div class="btn-zhu">票数{$info['pay']}</div><div class="btn-fin"><a href="javascript:">游票数不够<span>(奖品剩余{$info['num']})</span><a></div></div>
        {else}
        <div class="foot-btn"><div class="btn-zhu">票数{$info['pay']}</div><div class="btn-dui"><a href="javascript:"  {if $ispart=='1111'} data-target="#DialogDiv2" {elseif $ispart=='1112'} data-target="#DialogDiv1" data-content="未在活动指定区域内"{else} data-target="#DialogDiv3" {/if} data-toggle="modal" >立即兑换<span>(奖品剩余{$info['num']})</span><a></div></div>
        {/if}
      {else}
        <div class="foot-btn"><div class="btn-zhu">票数{$info['pay']}</div><div class="btn-fin"><a href="javascript:">没有机会了<span>(奖品剩余{$info['num']})</span><a></div></div>
      {/if}
    {/if}
  {/if}
  <!--<div class="foot-btn"><div class="btn-zhu">助力值3000</div><div class="btn-fin"><a href="#">兑换光了<span>(剩余0)</span><a></div></div> --
  <!--<div class="foot-btn"><div class="btn-zhu">助力值3000</div><div class="btn-fin"><a href="#">没有机会了<span>(剩余0)</span><a></div></div> -->

</footer>
<div class="none-box"></div>
<!--<div class="footer">-->
<!--  <ul>-->
<!--    <li><a href="/phone/activity/index"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>-->
<!--    <li><a href="/phone/activity/prizelist"><span class="ui-icon ico01"></span><span class="ui-txt">礼品</span></a></li>-->
<!--    <li><a href="/phone/activity/rank" class="last-child"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>-->
<!--  </ul>-->
<!--</div>-->
<div class="modal" id="DialogDiv3">
  <div class="modal-backdrop"></div>
  <div style="top: 211.5px; left: 191px;" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h4>请输入您的手机号码</h4></div>
      <div class="modal-body"><input class="login-text" placeholder="请输入您的手机号" id ="phone" name="phone" type="text"></div>
      <div class="MsgBtns"><div class="MsgBtn ok" onclick="exchange(this)">确定</div><div class="MsgBtn Cancel" onclick="MsgClose('DialogBox')">取消</div></div>
    </div>
  </div>
</div>
<!--------55---->
<div class="modal" id="DialogDiv4">
  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <br/>
        兑换成功
      <div class="MsgBtns">

      </div>
    </div>
  </div>
</div>
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
      title: "我正在参加河北旅游网游票免费得户外帐篷活动，帮帮我吧！",// 111
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
      link: "http://www.aitto.net/phone/activity/prizeshow_{$prizeid}.html", // ''
      imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
      success: function () {

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });
    wx.onMenuShareAppMessage({
      title: "我正在参加河北旅游网游票免费得户外帐篷活动，帮帮我吧！", // 分享标题
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
      link: "http://www.aitto.net/phone/activity/prizeshow_{$prizeid}.html", // 分享链接
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
{Common::js('layer/layer.js')}
<script>
  //feng
  //立即兑换  方法
  /*
    1: 验证 是否关注 、是否在同一个地区
    2： ajax 发送数据 兑换商品
   */
  function exchange(th){
      var ispart    = "{$ispart}";// 验证 是否关注 参数

      var productid = "{$info['id']}";// 兑换商品的id

      var userphone =  $(th).parent().siblings('.modal-body').children('input').val();// 用户 的 手机

      var pay       =  "{$info['pay']}";//  商品 的票数

     var  reg       = /(1[3-9]\d{9}$)/;

    //return false;
     if(userphone=='') {

       return false;
     }
     if(!reg.test(userphone)){
       $("#DialogDiv3").removeClass('in');
      layer.msg('输入正确手机格式');
       return false;
     }
      if(ispart=='1111'){
           return false;
      }else if(ispart =='1112'){
         return false;
      }else{
        $.ajax({
          type:"POST",
          url :"/phone/Activity/exchange",
          data:{openid:ispart,productid:productid,phone:userphone,pay:pay},
          dataType:'json',
          success:function(data){
            if(data.status){
              $("#DialogDiv3").removeClass('in');
              var thisObjID  ="#DialogDiv4";
              $(thisObjID).addClass('in');
              var thisObjcon = $(thisObjID).children(".modal-dialog");
              thisObjcon.css({
                'top': "35%",
                'left': "10%"
              });
              setTimeout(function(){ window.location.href = '/phone/activity/show';},1000);

            }else{
              $("#DialogDiv3").removeClass('in');
              var thisObjID  ="#DialogDiv4";
              $(thisObjID).addClass('in').children().children().children('.modal-body').empty().text(data.msg);
              var thisObjcon = $(thisObjID).children(".modal-dialog");
              thisObjcon.css({
                'top': "35%",
                'left': "10%"
              });
              setTimeout(function(){$(thisObjID).removeClass('in')},1000);
            }
          }
        })
      }
  }
</script>
</body>
</html>
