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
    $(document).on('click', '[data-toggle="tabs"] li', function(e){
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


/* ========================================================================
   模态框
 * ======================================================================== */
+function($) {	
    // 模态框 打开 函数	 	    
    function DialogOpen(event) { 
	    var $targetCnt = $(this).attr('data-target');
        event.stopPropagation();  
        $($targetCnt).fadeIn(200);           
        $(document.body).addClass("Dialog-page");
    }	
    // 模态框 关闭 函数	 	
    function DialogClose() {
        $(".ui-Modal").fadeOut(200);
        $(document.body).removeClass("Dialog-page");
    }	
   // 空白区域函数	 	   
   $(document).click(function(event) {
        var _targetArea = $('.Modal-Dialog');// 设置目标区域
        if (!_targetArea.is(event.target) && _targetArea.has(event.target).length === 0) {DialogClose();}
    });	
    // 调用模态框 函数
	// ===============    	
        $(document).on('click', '[data-toggle="Modal"]', DialogOpen)
        .on('click', '[data-dismiss="Modal"]', DialogClose);
} (jQuery);	
