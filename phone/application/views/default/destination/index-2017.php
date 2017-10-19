<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />

  <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
  {if $seoinfo['keyword']}
  <meta name="keywords" content="{$seoinfo['keyword']}" />
  {/if}
  {if $seoinfo['description']}
  <meta name="description" content="{$seoinfo['description']}" />
  {/if}

  {Common::css('2017common/bootstrap.css,2017common/public.css')}
  {Common::css('2017new_ver/index.css')}
  {Common::js('jquery-1.11.3.min.js')}
  <style>

  </style>
    {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<header class="Dest-index-head">
  <div class="head-img"><img src="{Common::img('/phone/public/images/20170301/banner.jpg')}"></div>
</header>
<div class="Dest-index-body">
  <section class="ctd-common-warp clearfix" data-slide="">
    <h2 class="ntd-theme-title">
      <i class="Hebei-Tour"></i>
<!--      <a class="in-page" href="javascript:alert('《正在努力开发中》')"></a>-->
      <span class="tit-big">带你游河北</span>
      <span class="tit-small">这里汇集河北-吃喝玩乐</span>
    </h2>
    <ul class="slideImg-hd  clearfix">
        <li name="num1" style="float: left;">
           <ul class="ntd-Hebei-Tour">
            {loop $info $k $des}
             {if $k<6}
            <li onclick="location.href='{$des[url]}'"><span><img src="{Common::img($des['p_litpic'])}"></span></li>
             {/if}
               {/loop}
            </ul>
        </li>
      <li name="num1" style="display: none">
           <ul class="ntd-Hebei-Tour">
           {loop $info $k $des}
           {if $k>5&&$k<12}
               <li onclick="location.href='{$des[url]}'"><span><img src="{Common::img($des['p_litpic'])}"></span></li>
           {/if}
           {/loop}

        </ul>
      </li>

      </ul>
      <div class="slide">
      <a href="javascript:;" class="ctrl-slide Page-prev1" style="background:#ef2f24 "></a>
      <a href="javascript:;" class="ctrl-slide Page-next1"></a>
      </div>
    <script type="text/javascript">

      /* ========================================================================
       幻灯广告
       * ======================================================================== */
      + (function($) {
        $.fn.activeSlide = function(opts) {
          opts = $.extend({}, $.fn.activeSlide.opts, opts);
          this.each(function() {

            // 初始化
            var slidewrap = $(this).find('.slideImg-hd');
            var slide = slidewrap.find('li[name=num1]');
            var count = slide.length; // 图片总数量

            var that = this;
            var index = 0;
            $(this).data('opts', opts);

            // 大图上一页 翻页
            $(this).find('.Page-prev1').on('click',
                function() {
                  if (opts['isAnimate'] == true) {
                    return;
                  }
                  var old = index;
                  if (index <= 0) {
                    index = count - 1;
                  } else {
                    index--;
                  }
                  change.call(that, index, old);
                    $('.ctrl-slide').css(
                        {   'background':'#000',
                            'opacity'   : '.2'
                        });
                    $('.Page-prev1').css({
                        'background':'#ef2f24',
                        'opacity'   : 'inherit'
                    });

                });

            // 大图下一页 翻页
            $(this).find('.Page-next1').on('click',
                function() {
                  if (opts['isAnimate'] == true) {
                    return;
                  }
                  var old = index;
                  if (index >= count - 1) {
                    index = 0;
                  } else {
                    index++;
                  }
                  change.call(that, index, old);
                    $('.ctrl-slide').css(
                        {   'background':'#000',
                            'opacity'   : '.2'
                        });
                    $('.Page-next1').css({
                        'background':'#ef2f24',
                        'opacity'   : 'inherit'
                    });
                });

          });
        };
          $(".slideImg-hd").on("touchstart", function(e) {
              // e.preventDefault();
              startX = e.originalEvent.changedTouches[0].pageX,
                  startY = e.originalEvent.changedTouches[0].pageY;
          });
          $(".slideImg-hd").on("touchmove", function(e) {
              // e.preventDefault();
              moveEndX = e.originalEvent.changedTouches[0].pageX,
                  moveEndY = e.originalEvent.changedTouches[0].pageY,
                  X = moveEndX - startX,
                  Y = moveEndY - startY;

              if ( Math.abs(X) > Math.abs(Y) && X > 0 ) {
                 // alert("left 2 right");
                  change.call(this,0,1);
                  $('.ctrl-slide').css(
                      {   'background':'#000',
                          'opacity'   : '.2'
                      });
                  $('.Page-prev1').css({
                      'background':'#ef2f24',
                      'opacity'   : 'inherit'
                  });

              }
              else if ( Math.abs(X) > Math.abs(Y) && X < 0 ) {
                  //alert("right 2 left");
                  change.call(this,1,0);
                  $('.ctrl-slide').css(
                      {   'background':'#000',
                          'opacity'   : '.2'
                      });
                  $('.Page-next1').css({
                      'background':'#ef2f24',
                      'opacity'   : 'inherit'
                  });
              }
              else if ( Math.abs(Y) > Math.abs(X) && Y > 0) {
                  // alert("top 2 bottom");

              }
              else if ( Math.abs(Y) > Math.abs(X) && Y < 0 ) {
                  //  alert("bottom 2 top");
                  //  reloading =true;

              }
              else{
                  // alert("just touch");
              }
          });
        // 大图显示
        function change(show, hide) {

            $(this).find('li[name=num1]').eq(hide).stop().animate({
              //opacity: 0
            }).hide();
            $(this).find('li[name=num1]').eq(show).css({
            //  opacity: 0
            }).stop().animate({
           //   opacity: 1
            }).show();

        }

        // 幻灯方式选择
        $.fn.activeSlide.opts = {
          autoPlay: false,
          dir: null,
          isAnimate: false
        };

        // 判断幻灯执行选择
        // ===============
        $(window).on('load',
            function() {
              var targetValue = $("[data-slide]").attr("data-slide");
              $('[data-slide]').activeSlide({
                dir: targetValue
              });
            });

      })(jQuery);

    </script>
  </section>
  <section class="ctd-common-warp clearfix">
    <h2 class="ntd-theme-title"><a class="in-page" href="/phone/article/search_list"></a><i class="Hebei-Raid"></i><span class="tit-big">目的地攻略</span><span class="tit-small">带您亲身体验魅力河北</span></h2>
    <ul class="ntd-Hebei-Raid">
      <!---------调用 推荐的 攻略------------>
      {st:article action="query" flag="recomment" row="3" return="rec"}
      <?php //var_dump($rec);?>
      {loop $rec $ment}
      <li onclick="location.href='{$ment[url]}'">
        <div class="mask"></div>
        <p class="Raid-img"><img src="{Common::img($ment['piclist'][1][0],500,313)}"></p>
        <p class="Raid-tip"><span>{$ment['mdd']}&nbsp;|&nbsp;{$ment['dayTour']}</span><span><i>{$ment['tuceNum']}</i>图</span></p>
        <div class="Raid-tit">{$ment['title']}</div>
      </li>
      {/loop}
      {/st}
    </ul>
  </section>
  <section class="ctd-common-warp clearfix">
    <h2 class="ntd-theme-title"><a class="in-page" href="/phone/shijiazhuang/des-note"></a><i class="Hebei-Note"></i><span class="tit-big">目的地游记</span><span class="tit-small">一场边走边记录的旅行</span></h2>
    <ul class="ntd-Hebei-Note">
      {st:notes action="query" flag="hot" $row="3" return="notes"}
        <?php //var_dump($notes)?>
       {loop $notes $n}
      <li onclick="location.href= '{$n[url]}'">
        <div class="mask"></div>
        <p class="Note-img"><img src="{Common::img($n['litpic'],640,400)}"></p>
        <h2 class="Note-tit">{$n['title']}
          <p class="Note-tip"><span>{$n['mdd']}</span>|<span class="data">{date("j/M.Y",$n['addtime'])}</span></p>
        </h2>
        <p class="user-name">{$n['member']['nickname']}</p>
        <p class="user-info"><span class="user-img"><img src="{if $n['member']['litpic']}{$n['member']['litpic']}{else}{Common::member_nopic()}{/if}"></span></p>
      </li>
      {/loop}
      {/st}
    </ul>
  </section>
</div>

</body>
</html>
{Common::js('jquery-1.11.3.min.js')}
{Common::js('20170301_new/bootstrap-min.js')}
