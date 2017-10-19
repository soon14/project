<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>{$destinfo['kindname']}人文</title>
  {Common::css('2017common/bootstrap.css,2017common/public.css')}
  {Common::css('2017new_ver/page.css')}
    {Common::js('jquery-1.11.3.min.js')}
    {Common::js('jquery.min.js,amazeui.js,template.js')}
    {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<header class="Dest-page-head">
  <div class="head-info" id="_j_head_info">
      <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
          <ul class="am-slides">

              {loop Product::pic_list($destinfo['piclist']) $piclist}
              <li><img src="{Common::img($piclist[0],640,340)}"></li>
              {/loop}

          </ul>
      </div><!--轮播图-->

    <h2 id="_j_page_name" class="page-name"><span>{$destinfo['kindname']}</span></h2>
  </div>
  <h2 class="page-nav" id="_j_page_nav"></h2>  
</header>

<div class="Dest-page-title"><h2 id="_j_page_tip" class="page-title"><i class="techan"></i><span>人文历史</span></h2></div>

<section class="Dest-page-body">

  <div class="page-article">
    {$destinfo['jieshao']}
  </div>
</section>

</body>
</html>
<script>
    function arrayToJson(o) {
        var r = [];
        if (typeof o == "string") return "\"" + o.replace(/([\'\"\\])/g, "\\$1").replace(/(\n)/g, "\\n").replace(/(\r)/g, "\\r").replace(/(\t)/g, "\\t") + "\"";
        if (typeof o == "object") {
            if (!o.sort) {
                for (var i in o)
                    r.push(i + ":" + arrayToJson(o[i]));
                if (!!document.all && !/^\n?function\s*toString\(\)\s*\{\n?\s*\[native code\]\n?\s*\}\n?\s*$/.test(o.toString)) {
                    r.push("toString:" + o.toString.toString());
                }
                r = "{" + r.join() + "}";
            } else {
                for (var i = 0; i < o.length; i++) {
                    r.push(arrayToJson(o[i]));
                }
                r = "[" + r.join() + "]";
            }
            return r;
        }
        return o.toString();
    }
    //这个是调用微信图片浏览器的函数
    function imagePreview(curSrc, srcList) {
        if (!curSrc || !srcList || srcList.length == 0) {
            return;
        }

        WeixinJSBridge.invoke('imagePreview', {
            'current': curSrc,
            'urls': srcList
        });
    };

    (function ($) {

        var aa = [];
        var i = 0;
        var src = [];
        var json = null;
        aa = $(".page-article").find('img');
        for (i = 0; i < aa.length; i++) {
            src[i] = aa[i].src;    //把所有的src存到数组里
        }
        var srcList = arrayToJson(src); //转换成json并赋值给srcList

        aa.each(function (index) {
            $(this).on('click',function(){
                imagePreview(this.src, srcList);
            })
        })


    })(jQuery);
</script>
