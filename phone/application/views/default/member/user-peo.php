<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>头像编辑</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
    {php echo Common::css('bootstrap-min.css,public.css,user9-1.css');}
    {php echo Common::js('jquery-1.11.3.min.js,user9-1.js,jquery.upload.js');}
</head>
<body style="background:#f9f7fc;">


<div class="user-form">
  <div class="peo-box"><img src="{if $member['litpic']}{$member['litpic']}{else}/res/images/test-img/user_img_180_180.jpg{/if}"></div>

  <div class="user-btn"><button >上传头像</button></div>
</div>
</body>
</html>
{Common::js('layer/layer.js',0)}
<script>
     $(".user-btn").click(function () {
         upload();
     })
    //上传模板
    function upload(type){

        // 上传方法
        $.upload({
            // 上传地址
            url: '/phone/member/linkman/ajax_upload_picture',
            // 文件域名字
            fileName: 'filedata',
            fileType: 'png,jpg,jpeg,gif,webp',
            // 其他表单数据
            params: {},
            // 上传之前回调,return true表示可继续上传
            onSend: function() {
                return true;
            },
            // 上传之后回调
            onComplate: function(data) {
                var data = $.parseJSON(data);
                //如果上传成功
                if(data.status){
                    layer.msg('上传成功');
                    $(".peo-box").find('img').attr('src',data.litpic);

                    window.location.href  = '/phone/member/linkman/useradmin'

                }else{
                    layer.msg(data.msg);

                }
            }
        });
    }
</script>
