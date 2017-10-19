/* =====门票价格显示详情 函数===================================================================*/
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
    $(document).on('click', '.TableDetail-btn', TableDetail).on('click', '.TableDetail-back', TableDetailBack);
});
/* =====门票更多价格 函数===================================================================*/

$(document).ready(function() {
    function TicketMmore() {
        var ticon = $(this).find("i");
        tspan = $(this).find("a");
        if ($(this).hasClass("zk")) {
            $(this).siblings(".ctd-ticket-booking").hide();
            ticon.removeClass("icon-angle-up");
            ticon.addClass("icon-angle-down");
            tspan.html("查看更多价格");
            $(this).removeClass("zk")
        } else {
            $(this).siblings(".ctd-ticket-booking").show();
            ticon.removeClass("icon-angle-down");
            ticon.addClass("icon-angle-up");
            tspan.html("收起更多价格");
            $(this).addClass("zk")
        }
    }

    // 游记左侧栏目 点击 函数调用
    // ===============
    $(document).on('click', '.Ticket-more', TicketMmore)

})

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


/* =====同时多个选项卡组件 函数===================================================================*/
$(document).ready(function() {
    //导航选项卡	 	    
    function activeJTabs() {
        //导航选项卡	 
        $(this).children().remove(".down-arrow");
        $(this).addClass("current").siblings().removeClass("current");
    };
    // 导航切换 函数调用
    // ===============		
    $(document).on('click', '[data-toggle="J-tabs"] > li', activeJTabs);
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

