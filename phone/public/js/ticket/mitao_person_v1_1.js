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
/* ========================================================================
   评价星星
 * ======================================================================== */
+function($) {
    window.onload = function() {
        var oStar = document.getElementById("ui-star-items");
        var oLi = oStar.getElementsByTagName("li");
        var oUl = oStar.getElementsByTagName("ul")[0];
        var oSpan = oStar.getElementsByTagName("span")[1];
        var oP = oStar.getElementsByTagName("p")[0];
        var iScore = iStar = 0;
        var aMsg = ['很不满意', '不满意', '一般', '满意', '非常满意']
        for (var i = 0; i < oLi.length; i++) {
            oLi[i].index = i + 1;
			oLi[i].onmousemove = function() {
                showStar(this.index);
            };
            oLi[i].onmouseout = function() {
                showStar()
            };
            oLi[i].onclick = function() {
                iStar = this.index;
                oSpan.innerHTML = aMsg[this.index - 1];
            }
        }
        function showStar(_index) {
            iScore = _index || iStar;
            for (var i = 0; i < oLi.length; i++) {
                oLi[i].className = i < iScore ? "on": "";
            }
        }
    }
} (jQuery);