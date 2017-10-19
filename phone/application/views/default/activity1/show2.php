<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>集红叶秋山免费游</title>
  {Common::css('activity_2/bootstrap-min.css,activity_2/public.css,activity_2/activity-Join.css')}
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
  {Common::js('activity_2/jquery-1.11.3.min.js,activity_2/activity-Join.js')}
</head>
<body>
<header><img src="/phone/public/images/activity_2/header.jpg" width="100%"></header>
{if time()<$overtime}
   <!---是否参与活动-->
   {if  empty($player_info)}
    <section>
      <div class="container">
        <div class="join-box">
          <div class="finish">你还没有参与活动</div>
          <div class="activity-button"><a href="/phone/activity/index"><span>立即参与活动</span></a></div>

          </div>
      </div>
    </section>
   {else}
        <section>
          <div class="container">
            <div class="join-box">
              <div class="join-peo"><img src="{$userinfo['headimgurl']}"> </div>
              <!----自己看还是 他人看------>
               {if $openid==$player_info['openid']}
                     <!--自己看-->
                 <!---是否已经达到兑换------->
                   {if  $player_info['exchange_pid']==0}
                      <!----判断是否 是集齐 -->
                           <?php $player_info['getpay']=$player_info['getpay']*1?>
                        {if $player_info['getpay']<18}
                            <!--自己是否送过自己--->
                            {if empty($ishelpme)}
                            <div class="help-button"><a href="javascript:" class="help-his help"  data-name="{$userinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>送自己红叶</span></a><a href="javascript:" class="help-me" data-target="#DialogDiv3" data-toggle="modal">邀请好友</a></div>
                            {else}
                            <div class="help-button"><a href="javascript:" class="help-his " data-name="{$userinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>已经送过了</span></a><a href="javascript:" class="help-me" data-target="#DialogDiv3" data-toggle="modal">邀请好友</a></div>
                            {/if}
                        {else}

                           <div class="activity-nobutton"><a href="javascript:"><span>很遗憾，没有进入前100名</span></a></div>

                        {/if}
                   {else}
                      <div class="finish-top">恭喜集够<span><img src="/phone/public/images/activity_2/red2.png" width="60"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片红叶</div>
                      <div class="finish-bot">活动结束后，凭手机号到景区兑换门票</div>
                   {/if}

               {else}
                     <!---他人看-->
                <!---是否已经达到兑换------->
                {if  $player_info['exchange_pid']==0}
                  <!----判断是否 是集齐 -->
                  <?php $player_info['getpay']=$player_info['getpay']*1?>
                  {if $player_info['getpay']<18}
                        <!--他人 是否对参赛用户送票 --->
                        {if empty($ishelper)}
                          <div class="activity-button"><a href="javascript:" class="help"  data-name="{$helperinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>送TA红叶</span></a></div>
                        {else}
                          <div class="activity-nobutton"><a href="javascript:"  data-name="{$helperinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>已经送过了</span></a></div>
                        {/if}
                  {else}

                  <div class="activity-nobutton"><a href="javascript:"><span>很遗憾，没有进入前100名</span></a></div>

                  {/if}
                {else}
                  <div class="finish-top">恭喜集够<span><img src="/phone/public/images/activity_2/red2.png" width="60"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片红叶</div>
                  <div class="finish-bot">活动结束后，凭手机号到景区兑换门票</div>
                {/if}
               {/if}
              <!--<div class="activity-button"><a href="#"><i></i><span>送TA红叶</span></a></div>-->
              <!--<div class="activity-nobutton"><a href="#"><i></i><span>已经送过了</span></a></div>-->
              <!--<div class="finish-show">活动结束，很遗憾您没有集够红叶</div>-->

            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="join-top">
              <div class="joinName">{$userinfo['nickname']}<span class="num">（编号{$player_info['id']}）</span></div>
              <div class="joinJust" style="font-size: 23px"><span><img src="/phone/public/images/activity_2/red.png" width="30"></span>红叶数({$player_info['getpay']})</div>

              <div class="join-box-m" style="margin-top: 0px"> <a href="/phone/activity/prizeshow"><img src="/phone/public/images/activity_2/ticke.png" width="100%"></a>
                <div style="text-align:center;font-size: 10px;">点击图片查看详情</div>
                <div class="clearfix"></div>
              </div>
            </div>
            <!----自己看还是 他人看------>
            {if $openid==$player_info['openid']}
                <!--自己看-->
                <!---是否已经达到兑换------->
                {if  $player_info['exchange_pid']==0}
                    <!----判断是否 是集齐 -->
                    <?php $player_info['getpay']=$player_info['getpay']*1?>
                    {if $player_info['getpay']<18}
                          <!--自己是否送过自己--->
                          {if empty($ishelpme)}
                          <div class="help-button"><a href="javascript:" class="help-his help"  data-name="{$userinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>送自己红叶</span></a><a href="javascript:" class="help-me" data-target="#DialogDiv3" data-toggle="modal">邀请好友</a></div>
                          {else}
                          <div class="help-button"><a href="javascript:" class="help-his" data-name="{$userinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>已经送过了</span></a><a href="javascript:" class="help-me" data-target="#DialogDiv3" data-toggle="modal">邀请好友</a></div>
                          {/if}
                    {else}

                    <div class="activity-nobutton"><a href="javascript:"><span>很遗憾，没有进入前100名</span></a></div>

                    {/if}
                {else}
                  <div class="finish-top">恭喜集够<span><img src="/phone/public/images/activity_2/red2.png" width="60"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片红叶</div>
                  <div class="finish-bot">活动结束后，凭手机号到景区兑换门票</div>
                {/if}

            {else}
                <!---他人看-->
                <!---是否已经达到兑换------->
                {if  $player_info['exchange_pid']==0}
                  <!----判断是否 是集齐 -->
                  <?php $player_info['getpay']=$player_info['getpay']*1?>
                  {if $player_info['getpay']<18}
                    <!--他人 是否对参赛用户送票 --->
                    {if empty($ishelper)}
                    <div class="activity-button"><a href="javascript:" class="help" data-name="{$helperinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>送TA红叶</span></a></div>
                    {else}
                    <div class="activity-nobutton"><a href="javascript:"  data-name="{$helperinfo['nickname']}" data-Hopenid="{$openid}" data-popenid="{$player_info['openid']}"><i></i><span>已经送过了</span></a></div>
                    {/if}
                  {else}

            <div class="activity-nobutton"><a href="javascript:"><span>很遗憾，没有进入前100名</span></a></div>

            {/if}
                {else}
                  <div class="finish-top">恭喜集够<span><img src="/phone/public/images/activity_2/red2.png" width="60"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片红叶</div>
                  <div class="finish-bot">活动结束后，凭手机号到景区兑换门票</div>
                {/if}
            {/if}

          </div>
        </section>
        <section>
          <div class="container">
            <div class="join-friend">
              <table class="table table-Border" id="result_list">
                <tr>
                  <th>序号</th>
                  <th>好友</th>
                  <th>送“红叶”时间</th>
                </tr>

                <tr>

              </table>
              <!-- 分页开始 -->
              <div id="Pagination" style="margin-top: 10px;">

              </div>
              <!-- 分页结束 -->
            </div>
          </div>
        </section>
   {/if}
{else}<!--活动结束 --->
    <!--是否参与--->
     {if empty($player_info)}
     <div class="finish">活动结束了</div>
     {else}
      <section>
        <div class="container">
          <div class="join-box">
            <div class="join-peo"><img src="{$userinfo['headimgurl']}"> </div>
             <!---是否 兑换奖品--->
            {if empty($player_info['exchange_pid'])}
            {if $player_info['getpay']==18}
            <div class="activity-nobutton"><a href="javascript:"><span>很遗憾，没有进入前100名</span></a></div>
            {else}
            <div class="activity-nobutton"><a href="javascript:"><span>活动结束，很遗憾没有集够红叶</span></a></div>

            {/if}
            {else}
            <div class="finish-top">恭喜集够<span><img src="/phone/public/images/activity_2/red2.png" width="60"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片红叶</div>
            <div class="finish-bot">活动结束后，凭手机号到景区兑换门票</div>
            {/if}
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="join-top">
            <div class="joinName">{$userinfo['nickname']}<span class="num">（编号{$player_info['id']}）</span></div>
            <div class="joinJust" style="font-size: 23px"><span><img src="/phone/public/images/activity_2/red.png" width="30"></span>红叶数({$player_info['getpay']})</div>
            <div class="join-box-m" style="margin-top: 0px"> <a href="/phone/activity/prizeshow"><img src="/phone/public/images/activity_2/ticke.png" width="100%"></a>
              <div style="text-align:center;font-size: 10px;">点击图片查看详情</div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!---是否 兑换奖品--->
          {if empty($player_info['exchange_pid'])}

            {if $player_info['getpay']==18}
              <div class="activity-nobutton"><a href="javascript:"><span>很遗憾，没有进入前100名</span></a></div>
            {else}
             <div class="activity-nobutton"><a href="javascript:"><span>活动结束，很遗憾没有集够红叶</span></a></div>

            {/if}

          {else}
          <div class="finish-top">恭喜集够<span><img src="/phone/public/images/activity_2/red2.png" width="60"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片红叶</div>
          <div class="finish-bot">活动结束后，凭手机号到景区兑换门票</div>
          {/if}
          </div>
      </section>
      <section>
        <div class="container">
          <div class="join-friend">
            <table class="table table-Border" id="result_list">
              <tr>
                <th>序号</th>
                <th>好友</th>
                <th>送“红叶”时间</th>
              </tr>

            </table>
            <!-- 分页开始 -->
            <div id="Pagination" style="margin-top: 10px;">

            </div>
            <!-- 分页结束 -->
          </div>
        </div>
      </section>
     {/if}
{/if}

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
<div class="none-box"></div>
<div class="footer">
  <ul>
    <li><a href="#"  onclick="window.location='/phone/activity/index'"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>
    <li><a href="#" onclick="window.location='/phone/activity/show'"><span class="ui-icon ico01"></span><span class="ui-txt">我的</span></a></li>
    <li><a href="#" class="last-child" onclick="window.location='/phone/activity/rank'"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>
  </ul>
</div>
<input type="hidden" name="offset" id="offset" value="">
<input type="hidden" name="page" id="page" value="1">
<input type='hidden' id='next1' value="">
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
      <div class="modal-body"><img src="/phone/public/images/activity_2/2wei.jpg"> </div>
      <div class="modal-header"><a class="Close" data-dismiss="modal"></a></div>
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
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  var  pid  = "{$player_info['id']}";


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
    if(pid.length==''){
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
     // var  link  ="http://www.aitto.net/phone/activity/index";
    }else{
      wx.onMenuShareTimeline({
        title: "我正参加河北旅游网集18片“红叶”免费游秋山活动，帮帮我吧！",// 111
        desc: "我正参加河北旅游网集18片“红叶”免费游秋山活动，帮帮我吧！", // 分享描述
        link: "http://www.aitto.net/phone/activity/show_{$player_info['id']}.html", // ''
        imgUrl: 'http://www.aitto.net/phone/public/images/activity/share.jpg', // 分享图标
        success: function () {

        },
        cancel: function () {
          // 用户取消分享后执行的回调函数

        }
      });
      wx.onMenuShareAppMessage({
        title: "集红叶秋山免费游", // 分享标题
        desc: "我正参加河北旅游网集18片“红叶”免费游秋山活动，帮帮我吧", // 分享描述
        link: "http://www.aitto.net/phone/activity/show_{$player_info['id']}.html", // 分享链接
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

    }



  })
</script>
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
    var playerid  = "{$player_info['id']}";
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
        itemHtml +="<tr ><th>序号</th><th>好友</th><th>送“红叶”时间</th></tr>";
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
    var helpName   = $(this).attr('data-name');// 送票人的信息

    var partid     = "{$player_info['id']}";// 得票人的id
    $.ajax({
      type:"POST",
      url :"/phone/Activity/addhelper",
      data:{helpOpenid:helpOpenid,helpName:helpName,partid:partid},
      dataType:'json',
      success:function(data){
        if(data.status) {
          var thisObjID  ="#DialogDiv4";
          $(thisObjID).addClass('in').children().children().children('.modal-body').text(data.msg);
          var thisObjcon = $(thisObjID).children(".modal-dialog");
          thisObjcon.css({
            'top': "35%",
            'left': "10%"
          });
          setTimeout(function(){window.location.href = '/phone/activity/show_' + partid + '.html';},1000);

        }else{
             if(data.isgz==1111){

               var thisObjID = "#DialogDiv2";
               $(thisObjID).addClass('in');
               var thisObjcon = $(thisObjID).children(".modal-dialog");
               thisObjcon.css({
                 'top': "15%",
                 'left': "10%"
               });
             }else {
               var thisObjID = "#DialogDiv4";
               $(thisObjID).addClass('in').children().children().children('.modal-body').text(data.msg);
               var thisObjcon = $(thisObjID).children(".modal-dialog");
               thisObjcon.css({
                 'top': "35%",
                 'left': "10%"
               });
               setTimeout(function () {
                 $(thisObjID).removeClass('in')
               }, 1000);
             }
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
