<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title></title>
  {Common::css('scan/bootstrap.min.css')}
  {Common::css('scan/public.css')}
  {Common::css('scan/layout.css')}
  {Common::js('jquery-1.11.3.min.js')}
  {Common::js('scan/bootstrap-min.js')}
</head>
<body>
<div class="page-bd">
  <h2>恭喜您通关“最强大脑”</h2>
  <p>成绩：{$times}</p>
</div>
<div class="page-hd">
  <h2><img src="/phone/public/images/scan/next-star.png"></h2>
  <p class="title"><img src="/phone/public/images/scan/next-title3.png"></p>
  <p class="active-img"><img src="/phone/public/images/scan/active-img03.png"></p>
  <div class="active-box">
    <h3><img src="/phone/public/images/scan/next-guize.png" width="120"></h3>
    <p><span>迷之方阵：</span>前往八卦迷宫阵，并成功走出</p>
    <p><span>通关提示：</span>选手需进入八卦阵中，找到出口的工作人员扫码，即可完成前往下一关。</p>
  </div>
</div>
<div class="page-fd">
  <h2><img src="/phone/public/images/scan/next-map.png"></h2>
  <p class="map" id="content"><img src="/phone/public/images/scan/map3.png"></p>
</div>
</body>
</html>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  $(function(){
    var imgsurl=[];
    var nowurl='';
    var imgObj=$("#content img");
    for(var i=0;i<imgObj.length;i++){
      imgsurl[i]=imgObj[i].src;
      imgObj[i].onclick=function(){
        nowurl=this.src;
        wx.previewImage({
          current: nowurl,
          urls: imgsurl
        });
      }
    }
  });

</script>