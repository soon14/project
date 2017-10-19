/* ========================================================================
   选项卡
 * ======================================================================== */
+function($) {		
    // 选项卡 导航 函数	    	 	    
    function tabsNavActive($this) {
        $this.addClass("active").siblings().removeClass("active");
    }
    // 选项卡 内容 函数	  
    function tabsCntOpen(targetCntId, cntIndex) {
        tabsCon = $(targetCntId).children(".tab-pane");
        $(tabsCon).eq(cntIndex).addClass("active").siblings().removeClass("active");
    }
    // 调用选项卡 函数
    // ===============    	
    $(document).on('click', '[data-toggle="tab"] li', function(e)
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