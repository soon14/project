<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>排行榜</title>
<!-- 布局版面 layout CSS 文件-->
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
      var  thatpage =  "rank";
      var  url = "/phone/activity/share";
      wx.onMenuShareTimeline({
        title: "河北旅游网双11送大礼，户外帐篷等礼品免费拿！",// 111
        desc: "河北旅游网双11送大礼，户外帐篷等礼品免费拿！", // 分享描述
        link: "http://www.aitto.net/phone/activity/index", // ''
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
        desc: "河北旅游网双11送大礼，户外帐篷等礼品免费拿！", // 分享描述
        link: "http://www.aitto.net/phone/activity/index", // 分享链接
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
</head>
<body>
<header><img src="bg.png" width="100%"></header>

<section>
  <div class="container">
    <div class="ranking-list">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-Border">
        <tr>
          <th width="30">排名</th>          
          <th>微信昵称</th>          
          <th>成绩</th>
        </tr>
        <?php $p = ($page-1)*$pagesize;?>
        {loop $arr $k $v}
        <tr>
          <td><?php echo $s =$p+$k*1+1;?></td>
          <?php $id = $v['id']*1-1005;?>
          <td><div class="table-txt"><a href="/phone/activity/show_{$id}.html">{if empty($v['nickname'])}会员{else}{$v['nickname']}{/if}</a></div></td>
          <td><div class="table-txt" >{$v['best_time']}秒</div></td>
    </tr>
    {/loop}
        <tr>
          <td colspan="3"><!-- 分页开始 -->

            <div id="Pagination">
              <a class="prev" href="{if $page!=1}/phone/activity/rank?page={$page-1}{else}javascript:{/if}">上一页</a>
              <a class="current">{$page}/{$totalpagesize}</a>
              <a class="next" href="{if $page==$totalpagesize}javascript:{else}/phone/activity/rank?page={$page+1}{/if}">下一页</a>
              <input type="number" name="jump" id="jump" style="width: 30px;height: 24px">
              <a href="javascript:" onclick="jump(this)">跳转</a>
            </div>

            <!-- 分页结束 -->
          </td>
        </tr>
      </table>
    </div>
  </div>
</section>
<div class="none-box"></div>
<div class="footer">
          <ul>
    <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/index?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico00"></span><span class="ui-txt">首页</span></a></li>
    <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/show?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico01"></span><span class="ui-txt">我的</span></a></li>
    <li><a href="javascript:void(0)" onclick="window.location='/phone/activity/rank?rand=<?php echo rand(0,100)?>'"><span class="ui-icon ico02"></span><span class="ui-txt">排名</span></a></li>
    <li><a href="javascript:void(0)" onclick="window.location='http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100004737&idx=1&sn=d6abe0b4a9f49ee9a7f82ae9062e7cd8&chksm=17df092420a880328d8913d5a78fc7eda4c458f27181b2eda9a78507851d633f462eecebda37&mpshare=1&scene=23&srcid=1101qaUHrZYY2mBwN7sZ0l54#rd'" class="last-child"><span class="ui-icon ico03"></span><span class="ui-txt">奖品</span></a></li>
  </ul>
        </div>

<script type="text/javascript">
//li最后一行无边线
$(document).ready(function(){
	 $(".ranking-top .ran-box:last").css("border-right","none")
});
</script>
<script>
  function jump(th){
    var totalpage  =parseInt("{$totalpagesize}");
    var first      =0 ;
    var jumppage   = parseInt($(th).siblings('input[name=jump]').val());
    if(jumppage>first&&jumppage<=totalpage){
      window.location.href = "/phone/activity/rank?page="+jumppage
    }

  }

</script>
</body>
</html>
