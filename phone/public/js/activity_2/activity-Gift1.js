// =====================
// =====================
//同时多个选项卡组件
$(document).ready(function() {
    var tabs = $(".tabs li");
    var tabPane = ".tab-pane";
	
	//导航选项卡	
    $(tabs).on("click",
    function() {
        var tabIndex = $(this).index();
        var tabid = '#' + $(this).parent().parent().attr("id");
        				
        $(this).removeClass("hover");
        $(this).addClass("current").siblings().removeClass("current");
        FindTabCon(tabIndex, tabid);
    });

	//内容选项卡	
    function FindTabCon(tabIndex,conId) {
        index = tabIndex;
        tabCon = $(conId).children().children(tabPane);
        $(tabCon).eq(index).addClass("active").siblings().removeClass("active");
    }

});