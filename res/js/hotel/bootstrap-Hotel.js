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