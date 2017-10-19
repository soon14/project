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
  <h2>恭喜您通关“迷之方阵”</h2>
  <p>成绩：{$times}</p>
</div>
<div class="page-hd">
  <h2><img src="/phone/public/images/scan/next-star.png"></h2>
  <p class="title"><img src="/phone/public/images/scan/next-title4.png"></p>
  <p class="active-img"><img src="/phone/public/images/scan/active-img04.png"></p>
  <div class="active-box">
    <h3><img src="/phone/public/images/scan/next-guize.png" width="120"></h3>
    <p><span>一击即中：</span>手持沙包，站在绳外，瞄准指定区域内任意一个方格中的矿泉水，砸中即可领取。</p>
    <p><span>通关提示：</span>随便选择一瓶矿泉水，砸中后，扫瓶子上的二维码确定通关，前往下一关，凭瓶子上的数字进行礼品领取。</p>
  </div>
</div>
<div class="page-fd">
  <h2><img src="/phone/public/images/scan/next-map.png"></h2>
  <p class="map" id="content"><img src="/phone/public/images/scan/map4.png"></p>
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