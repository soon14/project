/* =====游记头部导航 悬浮 函数===================================================================*/
$(document).ready(function() {
    function NotesNav() {
        WindowHeight = $(window).height();
        DocumentHeight = $(document).scrollTop()+130;
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
        WindowHeight = $(window).height();//是获取当前 也就是你浏览器所能看到的页面的那部分的高度
        ScrollTopHeight = $(document).scrollTop()+130; //获取垂直滚动的距离  即当前滚动的地方的窗口顶端到整个页面顶端的距离
        DocumentHeight = $(document).height(); //是获取整个页面的高度
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
$(document).ready(function() {

    function sideToolScroll() {
        WindowHeight = $(window).height();
        ScrollTopHeight = $(document).scrollTop()+130;
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
        var ddHtml = '<dd class="' + ddClass + ' ' + active + '">' + '<a href="#' + sideAnchor + '" title="'+sideName+'">' + sideName + '</a>' + '</dd>';
        ddArr.push(ddHtml);
    });
    $('.sideCatalog-catalog dl').html(ddArr.join(''));
});

//==================游记左侧滚动位置定位=======================


$(document).ready(function() {
    var slideInnerHeight = $('.sideCatalog-catalog dl').height();
    var slideOutHeight = $('.sideCatalog-catalog').height();
    var enableTop = slideInnerHeight - slideOutHeight;
       // enableTop = enableTop*4;
    if(enableTop<0){
        $('.ebn-button-down').removeClass('sideCatalog-down-enable').addClass('sideCatalog-down-disable');
    }
    var step =112;
    $('.ebn-button-up').bind('click',function() {
        if ($(this).hasClass('sideCatalog-up-enable')) {

            var dltop  = $('.sideCatalog-catalog dl').css('top');
            if(dltop=='auto'){ dltop = 0;}
            //alert('sideCatalog-catalog dl:\n'+slideInnerHeight);
            //
            //alert('sideCatalog-catalog\n'+slideOutHeight);
           // alert(enableTop)
           //// alert('sideCatalog-catalog dl top:\n'+dltop);
           //
           // alert(Math.abs(parseInt(dltop)));
           //
           // alert('enableTop-Math.abs(parseInt(dltop):\n'+(enableTop - Math.abs(parseInt(dltop))))

            if (Math.abs(enableTop -Math.abs(parseInt(dltop))) < step) {
                if((enableTop - Math.abs(parseInt(dltop)))==0){
                    $('.sideCatalog-catalog dl').stop().animate({
                        'top': '0'
                    }, 'fast');
                    $(this).removeClass('sideCatalog-up-enable').addClass('sideCatalog-up-disable');
                    $('.ebn-button-down').removeClass('sideCatalog-up-disable').addClass('sideCatalog-down-enable')
                }else{
                    $('.sideCatalog-catalog dl').stop().animate({
                        'top': '+=' + step
                    },'fast');

                    $('.ebn-button-down').removeClass('sideCatalog-up-disable').addClass('sideCatalog-down-enable')
                }


            } else {
                $('.sideCatalog-catalog dl').stop().animate({
                    'top': '0'
                }, 'fast');
                $(this).removeClass('sideCatalog-up-enable').addClass('sideCatalog-up-disable');
                $('.ebn-button-down').removeClass('sideCatalog-up-disable').addClass('sideCatalog-down-enable')
            }
        } else {
            return false
        }

    });

    $('.ebn-button-down').bind('click',function() {
        if ($(this).hasClass('sideCatalog-down-enable')) {
            var dltop  = $('.sideCatalog-catalog dl').css('top');
            if(dltop=='auto'){ dltop = 0;}// 该句话 用于ie 多dltop 在ie 中为auto  不能解析 在这里将它赋值为0
            //alert('sideCatalog-catalog dl:\n'+slideInnerHeight);
            //
            //alert('sideCatalog-catalog\n'+slideOutHeight);
            //
            //alert('sideCatalog-catalog dl top:\n'+dltop);
            //
            //alert(enableTop)

            if ((enableTop - Math.abs(parseInt(dltop))) > step) {

                $('.sideCatalog-catalog dl').stop().animate({
                    'top': '-=' + step
                },'fast');

                $('.ebn-button-up').removeClass('sideCatalog-up-disable').addClass('sideCatalog-up-enable')
            } else {

                if(enableTop<0){

                    $(this).removeClass('sideCatalog-down-enable').addClass('sideCatalog-down-disable');
                }else{

                    $('.sideCatalog-catalog dl').stop().animate({
                        'top': -enableTop
                    },'fast');
                    $(this).removeClass('sideCatalog-down-enable').addClass('sideCatalog-down-disable');
                    $('.ebn-button-up').removeClass('sideCatalog-up-disable').addClass('sideCatalog-up-enable');
                }


            }
        } else {
            return false
        }
    });
});