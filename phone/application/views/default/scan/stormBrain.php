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
  <h2>恭喜您通关“柿子保卫战”</h2>
  <p>成绩：{$times}</p>
</div>
<div class="page-hd">
  <h2><img src="/phone/public/images/scan/next-star.png"></h2>
  <p class="title"><img src="/phone/public/images/scan/next-title2.png"></p>
  <p class="active-img"><img src="/phone/public/images/scan/active-img02.png"></p>
  <div class="active-box">
    <h3><img src="/phone/public/images/scan/next-guize.png" width="120"></h3>
    <p><span>最强大脑：</span>穿过国学走廊，在走廊终端扫码进行答题；限时1分钟，答对6题者方为闯关成功，将成功页面出示给工作人员即可前往下一关；未答对者需要重新进行答题。</p>
    <p><span>通关提示：</span>家庭成员需要相互分工，分别记忆，才能提高效率，在最短时间完成挑战。</p>
  </div>
</div>
<div class="page-fd">
  <h2><img src="/phone/public/images/scan/next-map.png"></h2>
  <p class="map" id="content"><img src="/phone/public/images/scan/map2.png"></p>
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