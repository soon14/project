<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>父亲节亲子分析仪</title>
    {php echo Common::css('stylefuqingjie.css,Huploadify.css');}
  {php echo Common::js('jquery.js,jquery.Huploadify.js');}
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
<body class="page-default">
<form>
  <!--  page_upload -->
  <div class="wrap-default" id="page_upload">
    <h2 class="ddfont title-upload">上传照片</h2>
    <!-- 上传照片 -->
    <div class="upload-box clearfix">
      <div class="photo-item item-left">        
        <div class="btn-upload"  id="upload_button"></div>
        <a href="javascript:;" class="photo-frame">
          <img id="photo_frame" src="/res/images/fuqingjie/cartoon_roco.png" alt="" width="100%">
          <span class="photo-img-box">
            <img id="load_img" class="photo-img" src="" alt="" width="100%">
          </span>
          <img class="scan-mask none" id="scan_mask" src="/res/images/fuqingjie/scan_mask.png" alt="" width="74%">
          <img class="scan-green none" id="scan_green" src="/res/images/fuqingjie/scan_green2.png" alt="" width="74%">
        </a>
        <a href="javascript:;" class="photo-change">
          <img id="photo_change1" src="/res/images/fuqingjie/change_tip3.png" alt="" width="100%">
        </a>
      </div>
      <div class="photo-item item-right">
        <div class="btn-upload" id="uploadBtn2"></div>
        <a href="javascript:;" class="photo-frame">
          <img id="photo_frame2" src="/res/images/fuqingjie/cartoon_maqiu.png" alt="" width="100%">
          <span class="photo-img-box">
            <img id="load_img2" class="photo-img" src="" alt="" width="100%">
          </span>
          <img class="scan-mask none" id="scan_mask2" src="/res/images/fuqingjie/scan_mask.png" alt="" width="74%">
          <img class="scan-green none" id="scan_green2" src="/res/images/fuqingjie/scan_green2.png" alt="" width="74%">
        </a>
        <a href="javascript:;" class="photo-change">
          <img id="photo_change2" src="/res/images/fuqingjie/change_tip4.png" alt="" width="100%">
        </a>
      </div>
    </div>

    <!-- /上传照片 -->    
    <div class="ddfont state-txt" id="test_state">把你漂亮的眼睛、鼻子和嘴巴都露出来哦！</div>
    <a href="javascript:" class="btn-start" id="btn_start"><img src="/res/images/fuqingjie/btn_start.png" alt="" width="100%"></a> </div>
</form>
<div class="popBox" id="box">
  <div class="popCon" style="margin-left:45%; margin-top:30%;">
    <!-- 代码 开始 -->
    <div class="upfile">
      <div class="loader">
        <div class="loader-inner ball-spin-fade-loader">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <div style=" text-align:center; color:#FFF; font-size:20px;" id="pp">正在鉴定…</div>
  <div style=" text-align:center; color:#FFF; font-size:20px;display: none" id="jz">图片上传中…</div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.querySelector('.upfile').className += 'loaded';
    });
  </script>
</div>
<div id="upload" style="display: none"></div>
<input type="hidden" value="" id="isSelect">
</body>
</html>
<!-------------------------

返回 的地址:/api/+obj.filename
---------------------->
<script type="text/javascript">

  $("#btn_start").click(function(){
       var  img_l = $("#load_img").attr("src");
       var  img_r = $("#load_img2").attr("src");
      if(img_l==""||img_r==""){
        alert("请选择您和您父亲(孩子)的照片");
        return false
      }else{
        $('.popBox').show();
        $.ajax({
          type: "POST",
          url : "/phone/tuan/ajax_tuan_data",
          data :{img_l:img_l,img_r:img_r},
          success:function(data){
            if(data!=0){
              $(".popBox").hide();
              var url = "/phone/tuan?shareid="+data;
              window.location.href =url;
            }
          }
        });
      }
  });
</script>
<script type="text/javascript">
  $(function(){
    var up = $('#upload').Huploadify({
      auto:true,
      fileTypeExts:'*.jpg;*.png;*.jpeg',
      multi:false,
      fileSizeLimit:6000,
      breakPoints:false,
      saveInfoLocal:false,
      showUploadedPercent:false,//是否实时显示上传的百分比，如20%
      showUploadedSize:false,
      removeTimeout:9999999,
      uploader:'/api/Huploadify/upload.php',
      onUploadStart:function(){
        $("#jz").show();
        $("#pp").hide();
        var s =  $('.popBox').show();
        //up.settings('formData', {aaaaa:'1111111',bb:'2222'});
        up.Huploadify('settings','formData', {aaaaa:'1111111',bb:'2222'});
      },
      onUploadSuccess:function(file,data,response){
        var isSelect = $('#isSelect').val();
        $("#"+isSelect).attr("src",'/api/Huploadify/uploads/'+eval(data));

        //alert('上传成功');
      },
      onUploadComplete:function(){
        //alert('上传完成');
        $(".popBox").hide();
        $("#pp").show();
        $("#jz").hide();
      }
    });

    $('#upload_button').click(function(){
      //$('#upload').click();
      $('#isSelect').val('load_img');
      $('.uploadify-button').trigger("click");
    });
    $('#uploadBtn2').click(function(){
      //$('#upload').click();
      $('#isSelect').val('load_img2');
      $('.uploadify-button').trigger("click");
    });
  });
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  var share_p = '父亲节到了，请证明你爸是你爸！';
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
      title: share_p,// 朋友圈
      desc: share_p, // 分享描述
      link: "http://www.chejiache.com/1.php", // ''
      imgUrl: 'http://www.aitto.net/image/fenxiang.png', // 分享图标
      success: function () {
        //增加次数
        $.post(SITEURL+'tuan/ajax_tuan_data', {}, function (bool) {
          if(bool == 1){
            alert('分享未成功，请重新操作');
            window.location.href="http://www.aitto.net/phone/tuan/book/id/3?test="+parseInt(new Date().getTime()/1000);
          }else{
            window.location.href="http://www.aitto.net/phone/tuan/book/id/3?test="+parseInt(new Date().getTime()/1000);
          }
        }, 'text')
      },
      cancel: function () {
        // 用户取消分享后执行的回调函数

      }
    });
    wx.onMenuShareAppMessage({
      title: share_p, // 分享标题
      desc: share_p+"河北旅游网（河北青年报旗下网站）", // 分享描述
      link: "http://www.chejiache.com/1.php", // 分享链接
      imgUrl: 'http://www.aitto.net/image/fenxiang.png', // 分享图标
      type: 'link', // 分享类型,music、video或link，不填默认为link
      dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
      success: function () {
      },
      cancel: function () {
        // 用户取消分享后执行的回调函数
      }
    });


  })
</script>
