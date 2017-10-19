<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>站点名称</title>
 {Common::css('yearold/bootstrap-min.css,yearold/layout.css')}
</head>
<body>

<header><img src="/phone/public/images/yearold/adv-head.jpg" width="100%"></header>

<section>
<div class="container-fluid">

<div class="message">
 <div class="message-in">
      <textarea name="" cols="" rows="" class="textarea"></textarea>
 </div>
</div>
 <a href="javascript:" onclick="liuyan()"><img src="/phone/public/images/yearold/but.png" width="100%"></a>
</div>
 <input type="hidden" name="crsf_code" id="crsf_code" value="{$crsf_code}">
</section>

</body>
</html>
<script src="/phone/public/js/jquery-1.11.3.min.js"></script>
<script src="/phone/public/js/yearold/bootstrap-min.js"></script>
{Common::js('layer/layer.js')}
<script>
    function liuyan(){
          var crsf_code  = $("#crsf_code").val();

          var content    =  $(".textarea").val();

        $.ajax({
            type:"POST",
            url :"/phone/comment/ajax_addcomment",
            data:{content:content,crsf_code:crsf_code},
            dataType:'json',
            success:function(data){
              layer.msg(data);
            }
        })
    }
</script>
