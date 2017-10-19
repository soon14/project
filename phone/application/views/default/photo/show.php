<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}"/>
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}"/>
    {/if}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {php echo Common::css('amazeui.css,style.css,extend.css');}
    {php echo Common::js('jquery.min.js,amazeui.js,delayLoading.min.js');}
    <script>
        $(function () {
            $('#photo-slider').flexslider({
                slideshow: false,
                after: function(param){
                    $('.txt_con').eq(param.currentSlide).removeClass('hide').siblings('.txt_con').addClass('hide');
                    $('#index').text(param.currentSlide+1);

                }
            });
            var t_img; // 定时器
            var isLoad = true; // 控制变量

            // 判断图片加载状况，加载完成后回调
            isImgLoad(function () {
                // 加载完成
                var $hp = $(window).height() - 50;
                var $hs = $('#photo-slider').innerHeight();
            });

            // 判断图片加载的函数
            function isImgLoad(callback) {
                // 注意我的图片类名都是cover，因为我只需要处理cover。其它图片可以不管。
                // 查找所有封面图，迭代处理
                $('img').each(function () {
                    // 找到为0就将isLoad设为false，并退出each
                    if (this.height === 0) {
                        isLoad = false;
                        return false;
                    }
                });
                // 为true，没有发现为0的。加载完毕
                if (isLoad) {
                    clearTimeout(t_img); // 清除定时器
                    // 回调函数
                    callback();
                    // 为false，因为找到了没有加载完成的图，将调用定时器递归
                } else {
                    isLoad = true;
                    t_img = setTimeout(function () {
                        isImgLoad(callback); // 递归扫描
                    }, 1000); // 我这里设置的是500毫秒就扫描一次，可以自己调整
                }
            }
        })
    </script>
</head>
<body class="img-show">
<header>
    <div class="header_top photo_bg_black">
        <div class="st_back"><a href="{$cmsurl}photos/"></a></div>
        <h1 class="tit">{$info['title']}</h1>
    </div>
</header>
<section>
    <div class="mid_content">
        <div class="photo_pic">
            <div class="am-slider am-slider-default" id="photo-slider">
                <ul class="am-slides">
                    {loop $info['piclist'] $v}
                    <li><img src="/public/images/grey.gif" st-src="{Common::img($v['litpic'],640,300)}"/></li>
                    {/loop}
                </ul>
            </div>
            <div class="photo_con_box">
                <div class="tit_h">
                    <h3>{$info['title']}<span>(<i id="index">1</i>/<i>{count($info['piclist'])}</i>)</span></h3>
                </div>
                {loop $info['piclist'] $v}
                <div class="txt_con {if $n>1}hide{/if}">
                    {$v['description']}
                </div>
                {/loop}
            </div>
        </div>
    </div>
</section>
{request "pub/code"}
</body>
</html>
