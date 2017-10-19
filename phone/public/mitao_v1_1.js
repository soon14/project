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

 
+function($) {	
    // 收藏	    	 	    
    function in_mark() {
        $(this).toggleClass("ic_mark2");
    }
    $(document).on('click', '.ic_mark', in_mark)
} (jQuery);






// 设置返回顶部按钮
function putToper() {
  setInterval(
      function() {     
        var t = $(document).scrollTop();
        if (t > 500) {
          if ($('#mt-toTop').length <= 0) {   
            $(document.body)
                .append(
                    '<i id="mt-toTop" class="mt-totop" onclick="$(document).scrollTop(0);"></i>');
          }
        } else {
          setTimeout(function() {            
            $('#mt-toTop').remove();
          }, 20);
        }
      }, 300);
}


/* ========================================================================
 导航/内容 监听
 * ======================================================================== */
$(document).ready(function() {
  try {
      var scrollSpy_nav = $('[data-spy="scrollNav"]');
      var scrollSpy_con = $('[data-spy="scrollCon"]');
      var SpyNavTop = scrollSpy_nav.offsetTop;
      var SpyConHeight = scrollSpy_con.height();
      var SpyNavHide = SpyNavTop + SpyConHeight

      function NavScrollCon() { //*菜单浮动 函数*//
          if ($(document).scrollTop() > SpyNavTop && $(document).scrollTop() < SpyNavHide) {
              scrollSpy_nav.addClass("navFixed");
          } else {
              scrollSpy_nav.removeClass("navFixed");
          }
      }

      // 浮动置顶 函数调用
      // ===============
      $(window).scroll(function () {
          NavScrollCon();
          NavCurrent();
      });
  }catch(e){

  }
});