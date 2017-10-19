
$(document).ready(function() {
	
	var domWindth = $(".hd-pic").width();
	var domDheight = $(".hd-pic").height();
    var domHeigh = $(".kd-tit").height();
	

    //从左侧显示遮罩效果
	$(".kd-cut").css({"left":-domWindth,"top":"0"});
    //从左侧显示遮罩效果
    function slideleft() {		
        $(this).find(".kd-tit").stop().animate({"height": 0},200);
        $(this).find(".kd-cut").stop().animate({"left": 0});
    }
    function leftleave() {
        $(this).find(".kd-tit").stop().animate({"height": domHeigh},200);
        $(this).find(".kd-cut").stop().animate({"left": -domWindth});
    }
    $(document).on('mouseover', '[data-slide="left"]', slideleft)
	           .on('mouseleave', '[data-slide="left"]', leftleave)

});


/* =====自驾价格显示详情 函数===================================================================*/
$(document).ready(function() {
    function TableDetail() {
        $(this).toggleClass("on");
        var itemsNTr = $(this).parents("tr").next();
        itemsNTr.children().css("border-top", "none");
        itemsNTr.children().toggle();

    }
    function TableDetailBack() {
        var itemsTr = $(this).parents("td");
        itemsPTr = $(this).parents("tr").prev();
        itemsTr.hide();
        itemsPTr.find(".TableDetail-btn").removeClass("on");
    }
    // 游记左侧栏目 点击 函数调用
    // ===============
    $(document).on('click', '.TableDetail-btn', TableDetail)
	.on('click', '.TableDetail-back', TableDetailBack);
});


/* =====菜单 浮动置顶/切换/锚点定位 函数===================================================================*/
$(document).ready(function() {
    var toTopHeight = $(".ctdF-Case").offset().top;

    function NavFloat() { //*菜单浮动 函数*//
        var num = 0;
        if ($(document).scrollTop() > toTopHeight) {
            $(".ctdF-Case").removeClass("J-relative").addClass("J-fixed");
            $(".PresetBtn").show();
        } else {
            $(".ctdF-Case").removeClass("J-fixed").addClass("J-relative");
            $(".PresetBtn").hide();
        }
    }
    function NavCurrent() { //*菜单当前选项 函数*//
        var top = $(document).scrollTop(); //定义变量，获取滚动条的高度
        var menu = $(".ctdF-nav"); //定义变量，抓取#menu
        var items = $(".ctd-content").find(".ctd-chapter"); //定义变量，查找.item
        var curId = "";
        //定义变量，当前所在的楼层item #id
        items.each(function() {
            var items = $(this); //定义变量，获取当前类
            var itemid = items.children("a");
            var itemsTop = items.offset().top; //定义变量，获取当前类的top偏移量
            if (top > itemsTop - 100) {
                curId = "#" + itemid.attr("id");
            } else {
                return false;
            }
        });
        //给相应的楼层设置current,取消其他楼层的current
        var curLink = menu.find(".current");
        var curlina = curLink.children("a").attr("href");
        if (curId && curlina != curId) {
            curLink.removeClass("current");
            cur = menu.find("[href=" + curId + "]");
            cur.parent().addClass("current");
        }
    };

    // 浮动置顶 函数调用
    // ===============
    $(window).scroll(function() {
        NavFloat();
        NavCurrent();
    });

});


/* ========================================================================
 幻灯广告
 * ======================================================================== */
+ (function($) {
    $.fn.activeSlide = function(opts) {
        opts = $.extend({},
            $.fn.activeSlide.opts, opts);
        this.each(function() {

            // 初始化
            var slidewrap = $(this).find('.slideImg-hd');
            var slide = slidewrap.find('li');
            var count = slide.length; // 图片总数量
            var that = this;
            var index = 0;
            var time = null;
            var Move_picDir = $(this).find('.slideNav-bd').attr("data-dir");
            var stepMove_w = $('.navMx-panel li').outerWidth(true); // 小图水平移动步长
            var stepMove_h = $('.navMx-panel li').outerHeight(true) + 5; // 小图垂直移动步长
            var Move_picNum = 0 // 移动图片数量
            var Show_picNum = 3 // 显示图片数量
            var Min_picNum = Show_picNum - 1 // 最小图片数量
            $(this).data('opts', opts);

            // 修正导航位置
            var box = $(this).find('.slideNav-bd');
            box.css({
                'margin-left': -(box.width() / 2)
            })

            // 鼠标经过 翻页按钮明暗变化
            $(this).on('mouseover',
                function() {
                    if (opts.autoPlay) {
                        clearInterval(time);
                    }
                    $(this).find('.ctrl-slide').css({
                        opacity: 0.6
                    });
                });
            // 鼠标离开 翻页按钮明暗变化
            $(this).on('mouseleave',
                function() {
                    if (opts.autoPlay) {
                        startAtuoPlay();
                    }
                    $(this).find('.ctrl-slide').css({
                        opacity: 0.15
                    });
                });

            // 大图上一页 翻页
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
                    Move_picNum = index;
                    smallShow(Move_picNum)
                });

            // 大图下一页 翻页
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
                    Move_picNum = index;
                    smallShow(Move_picNum)
                });

            // 小图点击 大图变化
            $(this).find('.slideNav-bd li').each(function(cindex) {
                $(this).on('click.slidebox',
                    function() {
                        change.call(that, cindex, index);
                        index = cindex;
                    });

            });

            // 水平小图上一页 翻页
            box.find('.imgMx-prev').on('click',
                function() {
                    if (Move_picNum == 0) {
                        Move_picNum = picnum - 1;
                    };
                    Move_picNum--;
                    smallShow(Move_picNum);
                    old = Move_picNum + 1;
                    change.call(that, Move_picNum, old);
                })

            // 水平小图下一页 翻页
            box.find('.imgMx-next').on('click',
                function() {
                    if (Move_picNum == count - 1) {
                        Move_picNum = -1
                    }
                    Move_picNum++;
                    smallShow(Move_picNum);
                    old = Move_picNum - 1;
                    change.call(that, Move_picNum, old);
                })

            // 垂直小图上一页 翻页
            box.find('.imgMy-up').on('click',
                function() {
                    if (Move_picNum == 0) {
                        Move_picNum = picnum - 1;
                    };
                    Move_picNum--;
                    smallShow(Move_picNum);
                    old = Move_picNum + 1;
                    change.call(that, Move_picNum, old);
                })

            // 垂直小图下一页 翻页
            box.find('.imgMy-down').on('click',
                function() {
                    if (Move_picNum == count - 1) {
                        Move_picNum = -1
                    }
                    Move_picNum++;
                    smallShow(Move_picNum);
                    old = Move_picNum - 1;
                    change.call(that, Move_picNum, old);
                })

            // 垂直小图显示
            function smallShow(Move_picNum) {

                if (Move_picDir == 'level') {
                    if (Move_picNum < count - Min_picNum) {
                        var MstepMove_w = -(Move_picNum) * stepMove_w;
                    } // 移动图片宽度}
                    if (Move_picNum <= Min_picNum) {
                        MstepMove_w == 0;
                    }
                    box.find('li').eq(Move_picNum).addClass('current').siblings().removeClass('current');
                    box.find('ul').animate({
                        left: MstepMove_w
                    });

                }

                if (Move_picDir == 'vertical') {

                    if (Move_picNum < count - Min_picNum) {
                        var MstepMove_h = -(Move_picNum) * stepMove_h;
                    } // 移动图片宽度}
                    if (Move_picNum <= Min_picNum) {
                        MstepMove_h == 0;
                    }
                    box.find('li').eq(Move_picNum).addClass('current').siblings().removeClass('current');
                    box.find('ul').animate({
                        top: MstepMove_h
                    });
                }

            }

            // 幻灯方式选择
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
                    slidewrap.wrap('<div class="carousel-Dir"></div>');
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

    // 大图显示
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

