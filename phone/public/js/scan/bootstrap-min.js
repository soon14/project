/* ========================================================================
   侧边栏
 * ======================================================================== */
+function($) {
	
    // 侧边栏打开函数	 	    
    function offcanvasOpen(event) {
        event.stopPropagation();
        $(".ui-offcanvas-items").show();
        $(".ui-offcanvas-bar").animate({right: '0px'});
		$(document.body).addClass("ui-offcanvas-page");
    }
		
    // 侧边栏关闭函数	 	
    function offcanvasClose() {
        $(".ui-offcanvas-bar").animate({right: '-50%'});
        $(".ui-offcanvas-items").fadeOut(700);
		$(document.body).removeClass("ui-offcanvas-page");
    }
	
	 $(document).on('click', '.ui-offcanvas-bar a', offcanvasClose)
	 
   // 空白区域函数	 	   
	$(document).click(function(e) {
        var _targetArea = $('.ui-offcanvas-bar');// 设置目标区域
        if (!_targetArea.is(e.target) && _targetArea.has(e.target).length === 0) {offcanvasClose();}
    });
	
    // 侧边栏 调用
    // ===============    	
    $(document).on('click', '[data-toggle="collapse"]', offcanvasOpen)
	           .on('click', '[data-rel="close"]', offcanvasClose);

} (jQuery);

/* ========================================================================
   选项卡
 * ======================================================================== */
+function($) {		
    // 选项卡 导航 函数	    	 	    
    function tabsNavActive($this) {
        $this.addClass("current").siblings().removeClass("current");
    }
    // 选项卡 内容 函数	  
    function tabsCntOpen(targetCntId, cntIndex) {
        tabsCon = $(targetCntId).children(".tabs-pane");
        $(tabsCon).eq(cntIndex).addClass("active").siblings().removeClass("active");
    }
    // 调用选项卡 函数
    // ===============    	
    $(document).on('click', '[data-toggle="tabs"] li', function(e)
	{
        var $this = $(this);
        tabsNavActive($this);
		var targetCnt = $this.parent().attr('data-target')
        var targetCntId = "#" + targetCnt;
        if (targetCnt){
            var tabsIndex = $this.index();
            tabsCntOpen(targetCntId, tabsIndex);
        } else {
            return false;
        }
    });
} (jQuery);

