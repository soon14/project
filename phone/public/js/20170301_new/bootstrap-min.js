/*
      评论页面 选择标签
 */

$(document).ready(function() {

    /** 复选框开始 */
    $.fn.jCheckBox = function (settings) {
        // 默认参数
        var defaults = {
            valueSelector: ".checkbox-value", // 存放每一项checkbox的value值的input表单的css选择器
            itemSelector: ".options > li", // checkbox项的css选择器
            checkedClass: "checked", // 选择状态的类名
            completeFunction: function () {} // 回调函数
        };
        var options = $.extend(defaults, settings || {}); // 使用参数
        var div = this;
        var items = div.find(options.itemSelector); // 复选框项数组

        /*----初始化 进入页面，初始化复选框状态 */
        items.each(function () {
            var item = $(this);
            var valueInput = item.find(options.valueSelector);
            if(item.hasClass(options.checkedClass)) {
                var value = item.data("value"); // 获取当前项value
                valueInput.val(value); // 修改隐藏表单的值
            } else {
                valueInput.val(""); // 置空隐藏表单的值
            }
        });

        /*----添加事件----*/
        div.on("click", options.itemSelector, function () {
            var item = $(this);
            var valueInput = item.find(options.valueSelector);
            if(item.hasClass(options.checkedClass)) {
                valueInput.val(""); // 置空隐藏表单的值
                item.removeClass(options.checkedClass);
            } else {
                var value = item.data("value"); // 获取当前项value
                valueInput.val(value); // 修改隐藏表单的值
                item.addClass(options.checkedClass);
            }
            options.completeFunction(); // 执行回调函数
            return false;
        });
    };
    /** 复选框结束 */
    $("#checkbox").jCheckBox();
});

/* ========================================================================
 导航/内容 监听   2017 03 17 新加
 * ======================================================================== */


var thatPage = document.getElementById('thatPage');//  可以用 限定页面 避免 window.scroll 错误 或者 先将错误抛出 try catch


$(document).ready(function() {

    try {
        var scrollSpy_nav = $('[data-spy="scrollNav"]');
        var scrollSpy_con = $('[data-spy="scrollCon"]');
        var SpyNavTop = scrollSpy_nav.offset().top;
        var SpyConHeight = scrollSpy_con.height();
        var SpyNavHide = SpyNavTop + SpyConHeight

        function NavScrollCon() { //*菜单浮动 函数*//
            if ($(document).scrollTop() > SpyNavTop && $(document).scrollTop() < SpyNavHide) {
                scrollSpy_nav.addClass("navFixed");
            } else {
                scrollSpy_nav.removeClass("navFixed");
            }
        }

        function NavCurrent() { //*菜单当前选项 函数*//
            var scrollTop = $(document).scrollTop(); //定义变量，获取滚动条的高度
            var chapter = scrollSpy_con.find(".chapter"); //定义变量，查找.item
            var curIndex = "";
            //定义变量，当前所在的楼层item #id
            chapter.each(function () {
                var items = $(this); //定义变量，获取当前类
                var itemId = items.children("a");
                var itemsTop = items.offset().top; //定义变量，获取当前类的top偏移量
                if (scrollTop > itemsTop - 101) {
                    curIndex = "#" + itemId.attr("id");
                } else {
                    return false;
                }
            });
            //给相应的楼层设置current,取消其他楼层的current
            var curLink = scrollSpy_nav.find(".current");
            var curName = curLink.children("a").attr("href");
            if (curIndex && curName != curIndex) {
                curLink.removeClass("current");
                cur = scrollSpy_nav.find("[href=" + curIndex + "]");
                cur.parent().addClass("current");
            }
        };
        // 浮动置顶 函数调用
        // ===============
        $(window).scroll(function () {
            NavScrollCon();
            NavCurrent();
        });
    }
    catch(err){
        // alert(err)
    }
});


/* ========================================================================
   同时多个选项卡组件
 * ======================================================================== */
+function($) {
    // 导航选项卡 函数	    	 	    
    function activeTabs($this) {
        //$this.addClass("current").siblings().removeClass("current");
        $this.toggleClass("current").siblings().removeClass("current");
    }
    // 内容选项卡 函数	  
    function FindTabCon(ConObjID, ConIndex) {
        tabCon = $(ConObjID).children(".tab-pane");
        $(tabCon).eq(ConIndex).addClass("active").siblings().removeClass("active");
    }
    // 调用Tab切换 函数
    // ===============    	
    $(document).on('click', '[data-toggle="tabs"] li',
    function(e) {
        var $this = $(this);
        activeTabs($this);
        var ConObjID = "#" + $this.parent().attr('data-target');
        if ($(ConObjID).length > 0) {
            var ConIndex = $this.index();
            FindTabCon(ConObjID, ConIndex);
        } else {
            return false;
        }
    });
} (jQuery);



//搜索 导航悬浮 函数
$(document).ready(function() {
	var domHeigh = $('#_j_search_nav').height(); 
	
    function searchNavFloat() { //*菜单浮动 函数*//       
		if ($(document).scrollTop() > domHeigh) {	
            $('#_j_search_nav').addClass("searchNav-fixed");
        } else {
            $('#_j_search_nav').removeClass("searchNav-fixed");
        }
    }
    // 浮动置顶 函数调用
    // ===============
    $(window).scroll(function() {
        searchNavFloat();
    });
});

//搜索 导航悬浮 函数
$(document).ready(function() {

  var param  = $('#param').val();
  $('[data-search="search-li"] li').each(function(){

    var indexNum = $(this).index();

	if (indexNum > 6) {$(this).hide()}

  });
    /*  2017 0321 feng jia  */
    if(param=='hotel') {

        var searchMore = document.getElementsByClassName('more');
        for(var i= 0 ;i<searchMore.length;i++){

           var j = searchMore[i].parentNode.children.length*1-1;

           if(j<7){
                searchMore[i].style.display='none';
           }

        }
    }


  function searchMore() {
        $(this).hide();  
		$(this).siblings().show();      
  }
  $(document).on('click', '[data-more="searchMore"]', searchMore)

});



//特产/人文 导航悬浮 函数
$(document).ready(function() {
    var domHeigh = $('#_j_head_info').height(); 
	var domTxt = $('#_j_page_name').text();
		
    function PageNavFloat() { //*菜单浮动 函数*//
        if ($(document).scrollTop() > domHeigh) {			
            $('#_j_page_nav').addClass("PageNav-fixed");
			$('#_j_page_tip').addClass("PageTitle-fixed").css('top',"45px");
			$('#_j_page_nav').html(domTxt);
        } else {
            $('#_j_page_nav').removeClass("PageNav-fixed");
			$('#_j_page_tip').removeClass("PageTitle-fixed").removeAttr("style");
			$('#_j_page_nav').empty();
        }
    }
    // 浮动置顶 函数调用
    // ===============
    $(window).scroll(function() {
        PageNavFloat();
    });
});



//攻略/游记 导航悬浮 函数
$(document).ready(function() {
    var domHeigh = $('#_c_head_info').height(); 		
    function CtdNavFloat() { //*菜单浮动 函数*//
        if ($(document).scrollTop() > domHeigh) {			
            $('#_c_head_title').addClass("headTitle-fixed");
			$('#_c_head_user').show();
        } else {
            $('#_c_head_title').removeClass("headTitle-fixed");
			$('#_c_head_user').hide();
        }
    }
    // 浮动置顶 函数调用
    // ===============
    $(window).scroll(function() {
        CtdNavFloat();
    });
	
	
	function LinkLink() {
        $(this).children("i").toggleClass("on");        
    }
    // 喜欢点击 函数调用
    // ===============
    //$(document)
    //.on('click', '#_j_link_like', LinkLink);
	
    function ctdCatalog(e) {
        $('#_j_ctd_catalog_show').css("left","0");
        $('body').addClass('offcanvas-page');
    }
    function move_ctdCatalog(e){
        $("#_j_ctd_catalog_show").css("left","-55%");
        $('body').removeClass('offcanvas-page');
        e.stopPropagation;
    }
    // 喜欢点击 函数调用
    // ==============
    $('#_j_ctd_catalog').on('click',ctdCatalog);
    $('.ctd-page-body').on('click',move_ctdCatalog);
    $('.ctd-page-head').on('click',move_ctdCatalog);

});




//根据页面内容生成左侧导航
$(document).ready(function() {

    var CatalogDl = [];
    $(".chapterHd-main").each(function() {
        var CatalogId = $(this).attr("id");
        var allEle = $(':header[id*="' + CatalogId + '"]');
        var headLen = allEle.length;
        var ddArr = [];
		var dtArr = [];
        //根据页面内容生成slide导航；< >
        allEle.each(function(i) {
            var sideIndex, sideName, ddId, active = '',
            ddClass, sideAnchor;
  $("body").parent()
            sideName = $(this).find('.Catalog-text').text();
            if ($(this).hasClass('chapterHd-main')) {
                sideAnchor = $(this).prev().attr('id');
                var dtHtml = '<a href="#' + sideAnchor + '" onclick="move_ctdCatalog(this)">' + '<i class="main-dot"></i><span>' + sideName + '</span></a>' ;
                dtArr.push(dtHtml);
            } else {
                sideAnchor = $(this).prev().attr('id');                
                var ddHtml = '<li>' + '<a href="#' + sideAnchor + '" onclick="move_ctdCatalog(this)">' + '<i class="small-dot"></i><span>' + sideName + '</span></a>' + '</li>';
                ddArr.push(ddHtml);
            }

            if (i == 0) {
                active = 'current';
            }
        });
        CatalogDl = CatalogDl + "<li>" + dtArr.join('') + "<ul class='nav'>" + ddArr.join('') + "</ul></li>";

    });
    CatalogDl += '<script'+'>function move_ctdCatalog(th){$("#_j_ctd_catalog_show").css("left","-55%");$(th).parents("li").siblings("li").find("span").removeClass("commonspan"); $(th).find("span").toggleClass("commonspan");$("body").removeClass("offcanvas-page");}<'+'/script>'

    $('.NavList ul').html(CatalogDl);

});

//==================左侧滚动位置定位=======================
$(document).ready(function() {
    try {
        WindowHeight = $(window).height();
        DocTop = $(".article-items").offset().top;
        catalogHeight = $(".sideNav-bar").height();
        DocHeight = $(".article-items").height();
        DocBottom = DocTop + DocHeight - catalogHeight;
        $('.ctd-catalog').css("height", DocHeight);
        function sideToolScroll() {
            ScrollTop = $(document).scrollTop();
            if (ScrollTop > DocTop) {
                if (ScrollTop < DocBottom) {
                    $('.sideNav-bar').addClass("catalog-fixed").removeClass("catalog-absolute");
                    $('.sideNav-bar').css("margin-top", 0);
                } else {
                    $('.sideNav-bar').removeClass("catalog-fixed").addClass("catalog-absolute");
                }
            } else {
                $('.sideNav-bar').removeClass("catalog-fixed").removeAttr("style");
            }
        }

        function CatalogalogCurrent() {
            var top = $(document).scrollTop(); //定义变量，获取滚动条的高度
            var menu = $(".NavList"); //定义变量，抓取#menu

            var items = $(".ctd-article").find(".chapter-area"); //定义变量，查找.item
            var curId = "";
            //定义变量，当前所在的楼层item #id
            items.each(function () {
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
                cur.addClass("current");
                cur.parents("li").addClass("active").siblings().removeClass("active");
            }
        };

        // 左侧栏目 滚动 函数调用
        // ===============
        $(window).scroll(function () {
            CatalogalogCurrent();
            sideToolScroll();
        });
    }catch(err){

       // alert(err);
    }

});
