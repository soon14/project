<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>我的作品</title>
  {Common::css('photoshow/bootstrap.css')}
  {Common::css('photoshow/layout.css')}
  {Common::js('jquery-1.11.3.min.js')}
  {Common::js('photoshow/bootstrap-min.js')}
  <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/1.1.0/weui.min.css">
  <script type="text/javascript" src="/phone/public/js/ui/dist/weui.min.js"></script>
  <style>
    .weui-uploader__file {
      float: left;
      margin-right: 9px;
      margin-bottom: 9px;
      width: 79px;
      height: 79px;
      background: no-repeat 50%;
      background-size: cover;
      margin-top: 12px;
    }
    .weui-cells__title .num{ float:right;}
    .weui-cell{ padding:10px 10px 0 10px;}
    .confirm_order_msg ul{ border:none; padding:0;}
    .weui-cells:after{ border:none;}
    .weui-uploader__file { margin-top:0;width: 77px;
      height: 77px;}
  </style>
</head>
<body class="ActSpecial-MyWorks">
<header class="HB-header-items">
  <h1>我的作品</h1>
</header>
<section> 
  <!-- 基本信息 表单 -->
  <div class="HB-List">
    <ul>
      <form action="{$cmsurl}photoshow/savePhotos" method="post" id="form">
      <li class="clearfix">
        <div class="List-cell-hd">
          <label class="HB-label">地点</label>
        </div>
        <div class="List-cell-bd">
          {if $info["selfDriMdd"]}
          <input class="HB-input" type="text"  name="mdd" value="{$info['selfDriMdd']}" placeholder="紫云山">
          {else}
          <input class="HB-input" type="text" name="mdd" value="">
          {/if}

        </div>
      </li>
      <li class="clearfix">
        <div class="List-cell-hd">
          <label class="HB-label">上传图片</label>
        </div>
        <div class="weui-uploader">

          <div class="weui-cells weui-cells_form" id=uploader>
            <div class=weui-cell>
              <div class=weui-cell__bd>
                <div class=weui-uploader>
                  <div class=weui-uploader__bd>
                    <ul class=weui-uploader__files id=uploaderFiles>


                    </ul>
                    <div class=weui-uploader__input-box>
                      <input id=uploaderInput class=weui-uploader__input type=file accept=image/* capture=camera multiple="" name="fileVal"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class=weui-cells__title>图片最多上传9张&nbsp;&nbsp;&nbsp;<span class="num"><span id="uploadCount">0</span>/9</span></p>
        </div>
      </li>
      <li class="clearfix">
        <div class="List-cell-hd">
          <label class="HB-label">简介</label>
        </div>
        <div class="List-cell-bd HB-introduction">
          <textarea name="content" cols="" rows="5" class="HB-textarea" placeholder="说点什么"></textarea>
        </div>
      </li>
      <li class="clearfix">
        <div class="List-cell-hd">
          <label class="HB-label">手机号</label>
        </div>
        <div class="List-cell-bd">
          <input class="HB-input" type="tel" name="mobile" value="" placeholder="填写自驾报名的手机号">
        </div>
      </li>

        <input type="hidden" name="actid" value="{$info['id']}">
        <input type="hidden" name="typeid" value="{$info['typeid']}">

        <input type="hidden" name="openid" value="{$userinfo['openid']}">
        <input type="hidden" name="wx_imgurl" value="{$userinfo['headimgurl']}">
        <input type="hidden" name="wx_nickname" value="{$userinfo['nickname']}">

        <input type="hidden" name="piclist" value="" id="piclist">
      </form>
    </ul>

    <a href="javascript:;" id="submit" class="btn-save">发布</a>
  </div>
</section>
<!-- 底部导航 开始 -->
{request "pub/photoshow_footer"}
<!-- 底部导航 结束 -->
</body>
</html>
<script type="text/javascript">
  var uploadCount = 0;
  var uploadList = [];
  var uploadListImg =[];
  var uploadCountDom = document.getElementById("uploadCount");
  weui.uploader('#uploader', {
    url: '/phone/mitao/ajax_upload_picture',
    auto: true,
    type: 'file',
    fileVal: 'fileVal',
    compress: {
      width: 1600,
      height: 1600,
      quality: .8
    },
    onBeforeQueued: function(files) {
      // `this` 是轮询到的文件, `files` 是所有文件

      if(["image/jpg", "image/jpeg", "image/png", "image/gif"].indexOf(this.type) < 0){
        weui.alert('请上传图片');
        return false; // 阻止文件添加
      }
      if(this.size > 10 * 1024 * 1024){
        weui.alert('请上传不超过10M的图片');
        return false;
      }
      if (files.length > 9) { // 防止一下子选择过多文件
        weui.alert('最多只能上传9张图片，请重新选择');
        return false;
      }
      if (uploadCount + 1 > 9) {
        weui.alert('最多只能上传9张图片');
        return false;
      }

      ++uploadCount;

      // return true; // 阻止默认行为，不插入预览图的框架
    },
    onQueued: function(){
      uploadList.push(this);

      // console.log(this);

      // console.log(this.status); // 文件的状态：'ready', 'progress', 'success', 'fail'
      // console.log(this.base64); // 如果是base64上传，file.base64可以获得文件的base64

      // this.upload(); // 如果是手动上传，这里可以通过调用upload来实现；也可以用它来实现重传。
      // this.stop(); // 中断上传

      // return true; // 阻止默认行为，不显示预览图的图像
    },
    onBeforeSend: function(data, headers){
      // console.log(this, data, headers);
      // $.extend(data, { test: 1 }); // 可以扩展此对象来控制上传参数
      // $.extend(headers, { Origin: 'http://127.0.0.1' }); // 可以扩展此对象来控制上传头部

      // return false; // 阻止文件上传
    },
    onProgress: function(procent){
      //  console.log(this, procent);
      // return true; // 阻止默认行为，不使用默认的进度显示
    },
    onSuccess: function (ret) {

      if(ret.status==1){

        uploadListImg.push(ret.litpic);

        $("#uploadCount").text(uploadCount);

        var piclist = $("#piclist").val();

        if(piclist.length==""){
          $("#piclist").val(ret.litpic)
        }else{

          var newpiclist =piclist+','+ret.litpic;
          $("#piclist").val(newpiclist)
        }

      }
      // return true; // 阻止默认行为，不使用默认的成功态
    },
    onError: function(err){
      //   console.log(this, err);
      // return true; // 阻止默认行为，不使用默认的失败态
    }
  });
  // 缩略图预览
  document.querySelector('#uploaderFiles').addEventListener('click', function (e) {
    var target = e.target;

    while (!target.classList.contains('weui-uploader__file') && target) {
      target = target.parentNode;
    }
    if (!target) return;

    var url = target.getAttribute('style') || '';
    var id = target.getAttribute('data-id');

    if (url) {
      url = url.match(/url\((.*?)\)/)[1].replace(/"/g, '');
    }
    var gallery = weui.gallery(url, {
      className: 'custom-name',
      onDelete: function onDelete() {
        weui.confirm('确定删除该图片？', function () {
          --uploadCount;
          uploadCountDom.innerHTML = uploadCount;

          for (var i = 0, len = uploadList.length; i < len; ++i) {
            var file = uploadList[i];
            if (file.id == id) {

              file.stop();
              break;
            }
          }
          var j=id-1;
          uploadListImg.splice(j,1,0);
          var imgl="";
          for(var i=0;i<uploadListImg.length;i++){

            if(uploadListImg[i]!=0){
              if(imgl==""){
                imgl= uploadListImg[i];
              }else{
                imgl +=","+uploadListImg[i];
              }
            }
          }
          $("#piclist").val(imgl);
          target.remove();
          gallery.hide();
        });
      }
    });
  });
</script>
<script>
  $('#submit').click(function () {

    $('#form').submit();

  });
</script>