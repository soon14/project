<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>活动详情页面</title>
{Common::css('activity/bootstrap-min.css,activity/public.css,activity/activity-Join.css')}
  <script src="/phone/public/js/activity/jquery-1.11.3.min.js"></script><!-- jQuery库 -->
  <script src="/phone/public/js/activity/activity-Join.js"></script>
  <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?f968b43cd6404299f54d25d87c3bbe3a";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>
  <style>
    .modal-body1{
      position: relative;
      font-size: 1.1em;
      padding: 15px;
      text-align: center;
    }
    }
  </style>
</head>
<body>
<header><img src="/phone/public/images/activity/header.jpg" width="100%"></header>
<section>
  <div class="container">
    <div class="join-box">
      <div class="join-peo"><img src="{$userinfo['headimgurl']}"> </div>
      <div class="join-box-b">
        <p>已经获得{$player['getpay']}游票<br>
          大家快来帮我吧</p>
        <img src="/phone/public/images/activity/join-box-b.jpg" width="100%">
      </div>
    </div>
  </div>
</section>
<section>
  <?php
      $time= time();
      //活动结束时间
      $endtime = 1475139600;
  ?>
  <div class="container">
    {if $ispart=='1111' }<!---1111 未关注--->
    <div class="activity-button"><a href="javascript:" data-target="#DialogDiv2" data-toggle="modal" data-content="">关注后才能给TA送票，点击关注<a></div>


    {else}
    {if $time<$endtime}<!------判断时间---->
    {if $openid==$player['openid']}<!------判断是否是自己的show页面-------->

    {if $player['exchange_pid']=='0'}<!-----判断是否 兑换------->

    <div class="activity-button"><a href="javascript:" data-target="#DialogDiv3" data-toggle="modal1">请好友送游票<a></div>
    {else}
<!--    <div class="activity-nobutton"><a href="javascript:" data-target="#DialogDiv" data-toggle="moda">已兑换<a></div>-->
    {/if}
    {else}
    {if $player['exchange_pid']=='0'}
    {if empty($isplayer)&&empty($ishelper)}

    <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-Hopenid="{$openid}" data-Hname ="{$helperinfo[0]['nickname']}"  class="help-his help">剩余票数（1），送TA</a><a href="/phone/activity/index" class="help-me">我也要参加</a></div>

    {elseif empty($isplayer)&&!empty($ishelper)}

    <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="票数不足" class="help-success">剩余票数（0）</a><a href="/phone/activity/index" class="help-me">我也要参加</a></div>

    {elseif !empty($isplayer)&&empty($ishelper)}

    <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-Hopenid="{$openid}" data-Hname="{$helperinfo[0]['nickname']}"   class="help-his help">剩余票数（1），送TA</a><a href="/phone/activity/show_{$isplayer[0]['id']}.html" class="help-me">查看我的</a></div>

    {elseif !empty($isplayer)&&!empty($ishelper)}

    <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="票数不足" class="help-success">剩余票数（0）</a><a href="/phone/activity/show_{$isplayer[0]['id']}.html" class="help-me">查看我的</a></div>

    {/if}
    {else}
    {if empty($isplayer)}
    <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="已兑换，不能送游票了" class="help-success">已兑换，不能送游票了</a><a href="/phone/activity/index" class="help-me">我也要参加</a></div>
    {else}
    <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="已兑换，不能送游票了" class="help-success">已兑换，不能送游票了</a><a href="/phone/activity/show_{$isplayer[0]['id']}.html" class="help-me">查看我的</a></div>
    {/if}
    {/if}
    {/if}
    {else}
    {/if}
    {/if}

    <!--------first ----->
   <br/>
    <div class="join-top">
      <div class="joinName">{$userinfo['nickname']}<span class="num">（编号{$player['id']}）</span></div>
      <div class="joinJust">
        {if $player['exchange_pid']==0}

           离【{$proinfo['name']}】还差
          <span class="num">
          <?php

              $proinfo['pay']=$proinfo['pay']*1;

              $player['getpay']= $player['getpay']*1;
              if($proinfo['pay']>$player['getpay']){
                echo $p =$proinfo['pay']-$player['getpay'];
              }else{
                echo 0;
              }
          ?>
          </span>票
        {else}
           兑换了{$proinfo['name']}
        {/if}
      </div>
      <div class="join-box-m">
         <div class="join-box-m-l"><img src="{$proinfo['pic']}"></div>
         <div class="join-box-m-r"><p>{$proinfo['name']}</p><p>价值:{$proinfo['price']}元</p><p>游票数:{$proinfo['pay']}</p><p>剩余数量:{$proinfo['num']}</p></div>
         <div class="clearfix"></div>
      </div>
    </div>

    <!---------2--------->
  {if $ispart=='1111' }<!---1111 未关注--->
    <div class="activity-button"><a href="javascript:" data-target="#DialogDiv2" data-toggle="modal" data-content="">关注后才能给TA送票，点击关注<a></div>


  {else}
     {if $time<$endtime}<!------判断时间---->
       {if $openid==$player['openid']}<!------判断是否是自己的show页面-------->

         {if $player['exchange_pid']=='0'}<!-----判断是否 兑换------->

        <div class="activity-button"><a href="javascript:" data-target="#DialogDiv3" data-toggle="modal1">请好友送游票<a></div>
        {else}
        <div class="activity-nobutton"><a href="javascript:" data-target="#DialogDiv" data-toggle="moda">已兑换<a></div>

         {/if}
       {else}
         {if $player['exchange_pid']=='0'}
             {if empty($isplayer)&&empty($ishelper)}

             <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-Hopenid="{$openid}" data-Hname ="{$helperinfo[0]['nickname']}"  class="help-his help">剩余票数（1），送TA</a><a href="/phone/activity/index" class="help-me">我也要参加</a></div>

             {elseif empty($isplayer)&&!empty($ishelper)}

             <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="票数不足" class="help-success">剩余票数（0）</a><a href="/phone/activity/index" class="help-me">我也要参加</a></div>

             {elseif !empty($isplayer)&&empty($ishelper)}

             <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-Hopenid="{$openid}" data-Hname="{$helperinfo[0]['nickname']}"   class="help-his help">剩余票数（1），送TA</a><a href="/phone/activity/show_{$isplayer[0]['id']}.html" class="help-me">查看我的</a></div>

             {elseif !empty($isplayer)&&!empty($ishelper)}

             <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="票数不足" class="help-success">剩余票数（0）</a><a href="/phone/activity/show_{$isplayer[0]['id']}.html" class="help-me">查看我的</a></div>

             {/if}
         {else}
              {if empty($isplayer)}
              <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="已兑换，不能送游票了" class="help-success">已兑换，不能送游票了</a><a href="/phone/activity/index" class="help-me">我也要参加</a></div>
              {else}
               <div class="help-button"><a href="javascript:" data-target="#DialogDiv1" data-toggle="moda" data-content="已兑换，不能送游票了" class="help-success">已兑换，不能送游票了</a><a href="/phone/activity/show_{$isplayer[0]['id']}.html" class="help-me">查看我的</a></div>
              {/if}
         {/if}
       {/if}
     {else}
       {if $openid==$player['openid']}
       <div class="help-button"><a href="/phone/activity/prizeshow_{$player['exchange_pid']}.html" data-target="#DialogDi" data-Hopenid="{$openid}" data-Hname="{$helperinfo[0]['nickname']}"   class="help-his exchange">兑换</a><a href="/phone/activity/prizelist" class="help-me">兑换其他奖品</a></div>
       {else}
        {if $player['exchange_pid']=='0'}
        {else}
        <div class="activity-nobutton"><a href="javascript:" data-target="#DialogDiv" data-toggle="moda">未兑换<a></div>
        {/if}
       {/if}
     {/if}
   {/if}
    
  </div>
</section>
<section>
  <div class="container">
    <div class="join-friend">
      <table class="table table-Border" id="result_list">


      </table>
      <!-- 分页开始 -->
       <div id="Pagination" style="margin-top: 10px;">

       </div>
     <!-- 分页结束 -->
    </div>
  </div>
</section>
<section>
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
<div class="none-box"></div>
<input type="hidden" name="offset" id="offset" value="">
<input type="hidden" name="page" id="page" value="1">
<input type='hidden' id='next1' value="">
<div class="footer">
    <ul>
        <li><a href="/phone/activity/index"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>
        <li><a href="/phone/activity/prizelist"><span class="ui-icon ico01"></span><span class="ui-txt">礼品</span></a></li>
        <li><a href="/phone/activity/rank" class="last-child"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>
    </ul>
</div>
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

<!-- 弹框3  分享 -->
<div class="modal" id="DialogDiv3">


  <div class="modal-backdrop"></div>
  <div class="modal-dialog">
    <div class="modal-content2" style="width:100%;">
      <div class="modal-body"><img src="/phone/public/images/share.png" width="100%" onclick="Cancel(this)"> </div>
      <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
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
      title: "我正在参加河北旅游网游票免费得{$proinfo['name']}活动，帮帮我吧！",// 111
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
      link: "http://www.aitto.net/phone/activity/show_{$playerid}.html", // ''
      imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
      success: function () {

      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });
    wx.onMenuShareAppMessage({
      title: "我正在参加河北旅游网游票免费得{$proinfo['name']}活动，帮帮我吧！", // 分享标题
      desc: "兑个奖品过十一，天文望远镜、户外帐篷等1000件奖品统统带走！", // 分享描述
      link: "http://www.aitto.net/phone/activity/show_{$playerid}.html", // 分享链接
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

<script src="/phone/public/js/activity/activity-Join.js"></script><!-- 常用bootstrap jQuery库 -->
<script type="text/javascript">
  var pagesize  = 10;//0;//0;//0;//每页的页数

  $(document).ready(function(){

    $(function () {
     // $("#DialogDiv1").show();
    var  s ='';
      //第一次加载数据
      get_data(s);

    });

  });
  function get_data(s) {
    var offset    = $("#offset").val().length==""? 0:$("#offset").val();//  每页的开始 也是 limit 第1个参数
    var playerid  = '{$playerid}';
    $.ajax({
      type: "POST",
      url: '/phone/activity/gethelper',
      async:false,
      dataType: "json",
      data: {pagesize:pagesize,offset:offset,playerid:playerid},
      success: function(data){
        var page1      =$("#page").val()*1;//   当前页面
        var itemHtml = "";
        var pages    = "";
        $("#result_list").empty();
        $("#Pagination").empty();
        if(s==''){
        }else if(s=='pre'){
          $("#page").val(page1*1-1);
        }else if(s=='next'){
          $("#page").val(page1*1+1);
        }
         var  page3 =  $("#page").val()*1;//   当前页面
         var  p    = (page3-1)*pagesize;
        itemHtml +="<tr ><th>序号</th><th>送票好友</th><th>送票时间</th></tr>";
        for(var i=0;i<data.length;i++){

          itemHtml +="<tr>";
          itemHtml +="<td>"+(p+i+1)+"</td>";
          itemHtml +="<td>"+data[i]['nickname']+"</td>";
          itemHtml +="</div>";
          itemHtml +="<td>"+data[i]['helpime']+"</td>";
          itemHtml +="</tr>";
        }
        var page2      =$("#page").val()*1;//   当前页面
        if(data[0]['totalpage']!=0){
          pages  += "<a   onclick='pre()' style='margin-left: 100px;'>上一页</a>";
          pages  += "<a class='current'>"+page2+"/"+data[0]['totalpage']+"</a>";
          pages  += "<a  onclick='next()'>下一页</a>";

        }
        $("#result_list").append(itemHtml);

        $("#Pagination").append(pages);

        $("#next1").val(data[0]['totalpage']);
      }
    });
  }
  function pre(){
    var offset ="";
    var s   ='pre';
    var cur_page    = $("#page").val();
    var prepage = cur_page*1-1;
    if(prepage==0){
      return false;
    }else {
      offset = (prepage - 1) * pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  function next(){
    var offset ="";
    var s   ='next';
   // var cur_page    = $(".on").attr("data-page");
    var cur_page    = $("#page").val()*1;//attr("data-page");
    var total    = $("#next1").val()*1;//("data-total")*1;
    var nextpage = cur_page*1+1;
    if(total+1<=nextpage){
      return false;
    }else{
      offset =(nextpage-1)*pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  $(".help").click(function(){

     var helpOpenid = $(this).attr('data-Hopenid');// 送票人的id
     var helpName   = $(this).attr('data-Hname');

     var partid     = "{$playerid}";
    $.ajax({
      type:"POST",
      url :"/phone/Activity/addhelper",
      data:{helpOpenid:helpOpenid,helpName:helpName,partid:partid},
      dataType:'json',
      success:function(data){
        if(data.msg) {
          var thisObjID  ="#DialogDiv4";
          $(thisObjID).addClass('in').children().children().children('.modal-body').text(data.msg);
          var thisObjcon = $(thisObjID).children(".modal-dialog");
          thisObjcon.css({
            'top': "35%",
            'left': "10%"
          });
          setTimeout(function(){window.location.href = '/phone/activity/show_' + partid + '.html';},1000);

        }else{
          var thisObjID  ="#DialogDiv4";
          $(thisObjID).addClass('in').children().children().children('.modal-body').text(data.msg);
          var thisObjcon = $(thisObjID).children(".modal-dialog");
          thisObjcon.css({
            'top': "35%",
            'left': "10%"
          });
          setTimeout(function(){ $(thisObjID).removeClass('in')},1000);
        }
      }
    })
  })
  function Cancel(th){
   var s  = $(th).parents(".modal");
   s.removeClass("in");
  }
</script>
</body>
</html>
