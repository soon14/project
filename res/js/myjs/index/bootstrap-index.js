(function($) {
    $.fn.activeSlide = function(opts) {
        opts = $.extend({},
        $.fn.activeSlide.opts, opts);
        this.each(function() {
            var slidewrap = $(this).find('.slideImg-hd');
            var slide = slidewrap.find('li');
            var count = slide.length;
            var that = this;
            var index = 0;
            var time = null;
            $(this).data('opts', opts);
            // next
            $(this).find('.Page-next').on('click',
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
            });
            // prev
            $(this).find('.Page-prev').on('click',
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
            });
            $(this).find('.slideNav-bd li').each(function(cindex) {
                $(this).on('click.slidebox',
                function() {
                    change.call(that, cindex, index);
                    index = cindex;
                });
            });

            // focus clean auto play
            $(this).on('mouseover',
            function() {
                if (opts.autoPlay) {
                    clearInterval(time);
                }
                $(this).find('.ctrl-slide').css({
                    opacity: 0.6
                });
            });
            //  leave
            $(this).on('mouseleave',
            function() {
                if (opts.autoPlay) {
                    startAtuoPlay();
                }
                $(this).find('.ctrl-slide').css({
                    opacity: 0.15
                });
            });

            // 修正box
            var box = $(this).find('.slideNav-bd');
            box.css({
                'margin-left': -(box.width() / 2)
            })
            // dir
            switch (opts.dir) {
            case "x":
                opts['width'] = $(this).width();
                slidewrap.css({
                    'width': count * opts['width']
                });
                slide.css({
                    'float': 'left',
                    'position': 'relative'
                });
                slidewrap.wrap('<div class="carousel-items-Dir"></div>');
                slide.show();
                break;

            case "auto":
                time = setInterval(function() {
                    var old = index;
                    if (index >= count - 1) {
                        index = 0;
                    } else {
                        index++;
                    }
                    change.call(that, index, old);
                },
                2000); // 设定等待秒数
                break;

            }
        });
    };
    function change(show, hide) {
        var opts = $(this).data('opts');
        if (opts.dir == 'x') {
            var x = show * opts['width'];
            $(this).find('.slideImg-hd').stop().animate({
                'margin-left': -x
            },
            function() {
                opts['isAnimate'] = false;
            });
            opts['isAnimate'] = true
        } else {
            $(this).find('.slideImg-hd li').eq(hide).stop().animate({
                opacity: 0
            });
            $(this).find('.slideImg-hd li').eq(show).show().css({
                opacity: 0
            }).stop().animate({
                opacity: 1
            });
        }

        $(this).find('.slideNav-bd li').removeClass('current');
        $(this).find('.slideNav-bd li').eq(show).addClass('current');
    }
    $.fn.activeSlide.opts = {
        autoPlay: false,
        dir: null,
        isAnimate: false
    };

    // 调用幻灯广告切换 函数
    // ===============	
    $(window).on('load',function() {
        var targetValue = $("[data-slide]").attr("data-slide");
        $('[data-slide]').activeSlide({
            dir: targetValue
        });
    });
})(jQuery);