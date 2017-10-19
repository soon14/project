<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>点评</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {php echo Common::css('amazeui.css,style.css,extend.css');}
    {php echo Common::js('jquery.min.js,amazeui.js,jquery.validate.min.js');}

    <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/1.1.0/weui.min.css">
    <script type="text/javascript" src="/phone/public/js/ui/dist/weui.min.js"></script>
    <script>
        $(function () {
            $('#my-st-slide').offCanvas('close');
        })
    </script>
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

<body>

<header>
    <div class="header_top">
        <div class="st_back"><a href="/phone/mitao/order_all"></a></div>
        <h1 class="tit">点评</h1>
    </div>
</header>

<section>

    <div class="mid_content">

        <div class="confirm_order_msg">
            <dl>
                <dt><img src="{Common::img($info['litpic'],150,90)}"/></dt>
                <dd>
                    <span>{$info['productname']}</span>
                    <strong><b>{$info['childprice']}</b>起</strong>
                </dd>
            </dl>
            <div class="dp_cp_show">
                <form action="{$cmsurl}mitao/comment_save?id={$info['id']}" method="post" id="form">
                    <em class="tit">整体满意度：</em>
                  <span class="p_rate" id="p_rate">
                    <i title="1分" style="width: 20px; z-index: 5;" class="select"></i>
                    <i title="2分"></i>
                    <i title="3分"></i>
                    <i title="4分"></i>
                    <i title="5分"></i>
                      <input type="hidden" name="score1" id="score" value="1">
                      <input type="hidden" name="orderid" value="{$info['ordersn']}">
                      <input type="hidden" name="articleid" value="{$info['productautoid']}">
                      <input type="hidden" name="typeid" value="{$info['typeid']}">


                      <input type="hidden" name="openid" value="{$userinfo['openid']}">
                      <input type="hidden" name="wx_imgurl" value="{$userinfo['headimgurl']}">
                      <input type="hidden" name="wx_nickname" value="{$userinfo['nickname']}">


                  </span>
<!--                    <strong class="snum" id="snum">1分</strong>-->
                    <textarea name="content" cols="" rows="" placeholder="请输入评价"></textarea>
                    <input type="hidden" name="piclist" value="" id="piclist">
                </form>
            </div>

            <div class="weui-uploader">
                <p class=weui-cells__title>图片自动上传<span class="num"><span id="uploadCount">0</span>/9</span></p>
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
            </div>


            <div class="pl-btn">
                <a id="submit" class="cursor">确认</a>
            </div>
        </div>

    </div>

</section>
<script type="text/javascript">
    $(document).ready(function () {
        var pRate = function (box, callBack) {
            this.Index = null;
            var B = $("#" + box),
                rate = B.children("i"),
                w = rate.width(),
                n = rate.length,
                me = this;
            for (var i = 0; i < n; i++) {
                rate.eq(i).css({
                    'width': w * (i + 1),
                    'z-index': n - i
                });
            }
            rate.hover(function () {
                var S = B.children("i.select");
                $(this).addClass("hover").siblings().removeClass("hover");
                if ($(this).index() > S.index()) {
                    S.addClass("hover");
                }
            }, function () {
                rate.removeClass("hover");
            })
            rate.click(function () {
                rate.removeClass("select hover");
                $(this).addClass("select");
                me.Index = $(this).index() + 1;
                if (callBack) {
                    callBack();
                }
            })
        }
        var Rate = new pRate("p_rate", function () {
            //alert("点评成功"+Rate.Index+"分")
          //  var snum = document.getElementById('snum');
           // snum.innerHTML = Rate.Index + '分';
            $('#score').val(Rate.Index);
        });
        $('#submit').click(function () {

            $('#form').submit();

        });
        $('#form').validate({
            rules:{
                content:{
                    required:true,
                    minlength:15
                }
            },
            messages:{
                content:{
                    required:'* 评论内容不得低于15个字！',
                    minlength:'* 评论内容不得低于15个字！'
                }
            }

        });
    })
</script>
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