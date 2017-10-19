/* =====游记头部导航 悬浮 函数===================================================================*/
$(document).ready(function() {
    function NotesNav() {
        WindowHeight = $(window).height();
        DocumentHeight = $(document).scrollTop();
        if (DocumentHeight > WindowHeight) {
            $('.ctd-TrategyFloat-nav').show();
        } else {
            $('.ctd-TrategyFloat-nav').hide();
        }
    }
    // 游记头部导航 悬浮 函数调用
    // ===============
    $(window).scroll(function(e) {
        NotesNav();
    })
});

/* =====游记右侧栏目 悬浮 函数===================================================================*/
$(document).ready(function() {
    function NotesSider() {
        WindowHeight = $(window).height();
        ScrollTopHeight = $(document).scrollTop();
        DocumentHeight = $(document).height();
        DocumentHeight = DocumentHeight - WindowHeight - 100;
        if (ScrollTopHeight > WindowHeight) {
            if (ScrollTopHeight < DocumentHeight) {
                $('.ctd-Travel-sider .notes-box').addClass("notes-box-fixed").removeClass("notes-box-absolute5");
            } else {
                $('.ctd-Travel-sider .notes-box').removeClass("notes-box-fixed").addClass("notes-box-absolute5");
            }
        } else {
            $('.ctd-Travel-sider .notes-box').removeClass("notes-box-fixed").removeClass("notes-box-absolute");
        }
    }
    // 游记右侧栏目 悬浮 函数调用
    // ===============
    $(window).scroll(function(e) {
        NotesSider();
    })
});

/* =====游记左侧目录 生成/悬浮/滚动 函数===================================================================*/
//==================根据页面内容生成游记左侧导航=======================
$(document).ready(function() {

    var allEle = $(':header[class*="CatalogHd"]');
    var headLen = allEle.length;
    var ddArr = [];
    //根据页面内容生成slide导航；
    allEle.each(function(i) {
        var sideIndex, sideName, ddId, active = '',
        ddClass, sideAnchor;
        sideName = $(this).find('.head-con').text();
        if ($(this).hasClass('CatalogHd-main')) {
            sideAnchor = $(this).prev().attr('id');
            ddClass = 'CatalogSd-main';
        } else {
            sideAnchor = $(this).prev().attr('id');
            ddClass = 'CatalogSd-child';
        }
        if (i == 0) {
            active = 'current';
        }
        var ddHtml = '<dd class="' + ddClass + ' ' + active + '">' + '<a href="#' + sideAnchor + '">' + sideName + '</a>' + '</dd>';
        ddArr.push(ddHtml);
    });
    $('.sideCatalog-catalog dl').html(ddArr.join(''));
});

//==================游记左侧滚动位置定位=======================
$(document).ready(function() {

    function sideToolScroll() {
        WindowHeight = $(window).height();
        ScrollTopHeight = $(document).scrollTop();
        DocumentHeight = $(document).height();
        articleHeight = $(".Travel-article").height();
        ctdcomment = $(".ctd-comment").height();
        DocumentHeight = DocumentHeight - WindowHeight - ctdcomment - 200;
        marginTop = ScrollTopHeight - articleHeight + 605;
        if (ScrollTopHeight > WindowHeight) {
            if (ScrollTopHeight < DocumentHeight) {
                $('.sideToolbar').addClass("notes-box-fixed");
                $('.sideToolbar').css("margin-top", "30px")
            } else {
                $('.sideToolbar').css("margin-top", -marginTop);
            }
        } else {
            $('.sideToolbar').removeClass("notes-box-fixed").removeAttr("style");
        }
    }
    function catalogCurrent() {
        var top = $(document).scrollTop(); //定义变量，获取滚动条的高度
        var menu = $(".sideCatalog-catalog"); //定义变量，抓取#menu
        var items = $(".ctd-content").find(".ebma-chapter"); //定义变量，查找.item
        var curId = "";
        //定义变量，当前所在的楼层item #id
        items.each(function() {
            var m = $(this); //定义变量，获取当前类
            var mid = m.children("a");
            var itemsTop = m.offset().top; //定义变量，获取当前类的top偏移量
            if (top > itemsTop - 100) {
                curId = "#" + mid.attr("id");
            } else {
                return false;
            }
        });

        //给相应的楼层设置cur,取消其他楼层的cur
        var curLink = menu.find(".current");
        var curlina = curLink.children("a").attr("href");
        if (curId && curlina != curId) {
            curLink.removeClass("current");
            cur = menu.find("[href=" + curId + "]");
            cur.parent().addClass("current");
        }
    };
    //==================点击生成当前选项=======================
    function catalogTabs() {
        $(this).addClass("current").siblings().removeClass("current");
    };

    // 游记左侧栏目 滚动 函数调用
    // ===============
    $(window).scroll(function() {
        catalogCurrent();
        sideToolScroll();
    });

    // 游记左侧栏目 点击 函数调用
    // ===============
    $(document).on('click', '.sideCatalog-catalog dd', catalogTabs);
});


$(document).ready(function() {
    var slideInnerHeight = $('.sideCatalog-catalog dl').height();
    var slideOutHeight = $('.sideCatalog-catalog').height();
    var enableTop = slideInnerHeight - slideOutHeight;
    var step = 50;
    $('.ebn-button-up').bind('click',function() {
        if ($(this).hasClass('sideCatalog-up-enable')) {
            if ((enableTop - Math.abs(parseInt($('.sideCatalog-catalog dl').css('top')))) > step) {
                $('.sideCatalog-catalog dl').stop().animate({
                    'top': '+=' + step
                },'fast');
                $('.ebn-button-down').removeClass('sideCatalog-down-disable').addClass('sideCatalog-down-enable')
            } else {
                $('.sideCatalog-catalog dl').stop().animate({
                    'top': '0'
                }, 'fast');
                $(this).removeClass('sideCatalog-up-enable').addClass('sideCatalog-up-disable');
            }
        } else {
            return false
        }

    });

    $('.ebn-button-down').bind('click',function() {
        if ($(this).hasClass('sideCatalog-down-enable')) {
            if ((enableTop - Math.abs(parseInt($('.sideCatalog-catalog dl').css('top')))) > step) {
                $('.sideCatalog-catalog dl').stop().animate({
                    'top': '-=' + step
                },'fast');
                $('.ebn-button-up').removeClass('sideCatalog-up-disable').addClass('sideCatalog-up-enable')
            } else {
                $('.sideCatalog-catalog dl').stop().animate({
                    'top': -enableTop
                },'fast');
                $(this).removeClass('sideCatalog-down-enable').addClass('sideCatalog-down-disable'); 
            }
        } else {
            return false
        }
    });
});




(function($){
    $.fn.ckSlide = function(opts){
        opts = $.extend({}, $.fn.ckSlide.opts, opts);
        this.each(function(){
            var slidewrap = $(this).find('.ck-slide-wrapper');
            var slide = slidewrap.find('li');
            var count = slide.length;
            var that = this;
            var index = 0;
            var time = null;
            $(this).data('opts', opts);
            // next
            $(this).find('.ck-next').on('click', function(){
                if(opts['isAnimate'] == true){
                    return;
                }
                
                var old = index;
                if(index >= count - 1){
                    index = 0;
                }else{
                    index++;
                }
                change.call(that, index, old);
            });
            // prev
            $(this).find('.ck-prev').on('click', function(){
                if(opts['isAnimate'] == true){
                    return;
                }
                
                var old = index;
                if(index <= 0){
                    index = count - 1;
                }else{                                      
                    index--;
                }
                change.call(that, index, old);
            });
            $(this).find('.ck-slidebox li').each(function(cindex){
                $(this).on('click.slidebox', function(){
                    change.call(that, cindex, index);
                    index = cindex;
                });
            });
            
            // focus clean auto play
            $(this).on('mouseover', function(){
                if(opts.autoPlay){
                    clearInterval(time);
                }
                $(this).find('.ctrl-slide').css({opacity:0.5});
            });
            //  leave
            $(this).on('mouseleave', function(){
                if(opts.autoPlay){
                    startAtuoPlay();
                }
                $(this).find('.ctrl-slide').css({opacity:0.15});
            });
            startAtuoPlay();
            // auto play
            function startAtuoPlay(){
                if(opts.autoPlay){
                    time  = setInterval(function(){
                        var old = index;
                        if(index >= count - 1){
                            index = 0;
                        }else{
                            index++;
                        }
                        change.call(that, index, old);
                    }, 5000);
                }
            }
            // 修正box
            var box = $(this).find('.ck-slidebox');
            box.css({
                'margin-left':-(box.width() / 2)
            })
            // dir
            switch(opts.dir){
                case "x":
                    opts['width'] = $(this).width();
                    slidewrap.css({
                        'width':count * opts['width']
                    });
                    slide.css({
                        'float':'left',
                        'position':'relative'
                    });
                    slidewrap.wrap('<div class="ck-slide-dir"></div>');
                    slide.show();
                    break;
            }
        });
    };
    function change(show, hide){
        var opts = $(this).data('opts');
        if(opts.dir == 'x'){
            var x = show * opts['width'];
            $(this).find('.ck-slide-wrapper').stop().animate({'margin-left':-x}, function(){opts['isAnimate'] = false;});
            opts['isAnimate'] = true
        }else{
            $(this).find('.ck-slide-wrapper li').eq(hide).stop().animate({opacity:0});
            $(this).find('.ck-slide-wrapper li').eq(show).show().css({opacity:0}).stop().animate({opacity:1});
        }
       
        $(this).find('.ck-slidebox li').removeClass('current');
        $(this).find('.ck-slidebox li').eq(show).addClass('current');
    }
    $.fn.ckSlide.opts = {
        autoPlay: false,
        dir: null,
        isAnimate: false
    };
})(jQuery);