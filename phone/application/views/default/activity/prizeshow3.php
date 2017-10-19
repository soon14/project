<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>奖品详情</title>
    {Common::css('activity_2/bootstrap-min.css,activity_2/public.css,activity_2/index.css,activity_2/activity-Ranking.css,activity_2/activity-Join.css')}
<!-- 基础框架 bootstrap CSS 文件 -->
<link rel="stylesheet" type="text/css" href="../style/bootstrap-min.css" />
<!-- 页面公用 public CSS 文件 -->
<link rel="stylesheet" type="text/css" href="../style/public.css" />
<!-- 布局版面 layout CSS 文件-->
<link rel="stylesheet" type="text/css" href="style/activity-Gift.css"/>
</head>
<body>
<section>
  <div class="gift-con"> 
    <div class="gift-img"><img src="../images/pic003.jpg"></div>
    <div class="gift-con-b">
      <ul>

      <li>秋山景区门票1张 </li>
      <li>市场价值：￥50 </li>
      <li>景区地址：石家庄灵寿县陈庄镇草坡庄秋山景区</li>
      <li>客服电话：0311-87885822</li>
      </ul>
    </div>
    
    <div class="gift-con-a">
<p>秋山原生态自然风景区位于河北省灵寿县境内，东临燕川水库，西临藤龙山景区，北连横山湖旅游度假区，南望下观水库，</p>
<p><img src="../images/1.jpg"></p>
<p>距省会石家庄60公里，距灵寿县城30公里，南距平山县城30公里，西距革命胜地西柏坡35公里。是一处集地址景观、森林生态、人文历史景观于一体的高品位原生态自然风景区，面积达8平方公里。秋山风景区资源优势鲜明，山青、林绿、石奇、水碧、夏凉、秋花、冬雪、冰瀑，以森林生态和地址形态为依托，呈现奇、险、凉、野、幽的原始生态环境。
    </div>
    
  </div>
</section>
<section>
  <div class="container">
    <div class="join-regular">
      <div class="contit">活动规则</div>
      <div class="conbox">
        <p>1、参与活动后，邀请好友送红叶，<span>最先集齐18片红叶的前100位用户</span>可获得秋山免费门票一张；</p>
        <p>2、每位用户可给多个参与者各赠送一片红叶；</p>
        <p>3、本次活动仅限石家庄用户参加，中奖用户凭中奖短信和手机号到秋山景区售票口兑换门票。</p>
      </div>
      <div class="regular-button"><a href="">查看活动详情</a></div>
    </div>
  </div>
</section>
<div class="nobox"></div>
<div class="footer">
  <ul>
    <li><a href="#"><span class="ui-icon ico00"></span><span class="ui-txt">活动首页</span></a></li>
    <li><a href="#"><span class="ui-icon ico01"></span><span class="ui-txt">我的</span></a></li>
    <li><a href="#" class="last-child"><span class="ui-icon ico02"></span><span class="ui-txt">排行榜</span></a></li>
  </ul>
</div>

<!-- 弹框1 -->
<div class="modal" id="DialogDiv1">
  <div class="modal-backdrop"></div>
  <div style="top: 211.5px; left: 191px;" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>请输入您的手机号码</h4>
      </div>
      <div class="modal-body">
        <input class="login-text" value="请输入您的手机号" onfocus="if(value =='请输入您的手机号'){value =''}" onblur="if (value ==''){value='请输入您的手机号'}" type="text">
      </div>
      <div class="MsgBtns">
        <div class="MsgBtn ok">确定</div>
        <div class="MsgBtn Cancel" onclick="MsgClose('DialogBox')">取消</div>
      </div>
    </div>
  </div>
</div>
<script src="../js/jquery-1.11.3.min.js"></script><!-- jQuery库 --> 
<script type="text/javascript">
//弹框-背景遮罩
$(document).ready(function() {
	
    var modal = $(".modal");
	var dialog = $(".modal-dialog");
    var dialogClose = $(".modal .Close");
	 var dialogCancel = $(".modal .Cancel");
	

    //modal-dialog区域外
    $(document).on("click",
    function(e) {
        modal.removeClass("in");
    });

    //modal-dialog区域
    dialog.on("click",
    function(e) {
        e = e || event;
        stopPropagation(e);
    });

    //modal-dialog关闭
    dialogClose.on('click',
    function() {
        dialogModal = $(this).parents(".modal");
		 dialogModal.removeClass("in");
    });
	
    //modal-dialog取消
    dialogCancel.on('click',
    function() {
        dialogModal = $(this).parents(".modal");
		 dialogModal.removeClass("in");
    });
	
    //modal-dialog显示
    function ShowDialog() {
		var thisObjID = $(this).attr('data-target');
        $(thisObjID).addClass("in");
        var thisObjcon = $(thisObjID).children(".modal-dialog");
        var thisobjmask = $(thisObjID).children(".modal-backdrop");
        var top = 150;		
        thisObjcon.css({
            'top': "20%",
            'left': "10%"
        });
        
        e = e || event;
        stopPropagation(e);
    }

    //点击modal行为		
	$(document).on('click','[data-toggle="modal"]',ShowDialog);

    //点击阻止冒泡行为
    function stopPropagation(e) {
        e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
    }
});

</script>
</body>
</html>
