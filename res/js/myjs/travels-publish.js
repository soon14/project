$(function(){

  function  p(t){
      var Catalogparent = $(t).parent();
      var active = Catalogparent.hasClass('noOnthisSeed');//检查 是否有这个类名 you 返回true
      var sideId = Catalogparent.attr('id');



      $(".zhangjieCon input").each(function(index, element) {
          text = $(this).val()
          $(this).parent().parent().prev().children("p").text(text) ;

      });

      if(active){
          $('.ClickSeed').removeClass('onthisSeed').addClass('noOnthisSeed');
          Catalogparent.removeClass('noOnthisSeed').addClass('onthisSeed');
          Catalogparent.parent().addClass("active").siblings().removeClass("active");
      }

      $(".zhangjieBodySeed input").each(function(index, element) {

          text = $(this).val()
          $(this).parent().parent().prev().children("p").text(text) ;
      });

      ArticlesCrap(sideId);

  }
    $('.ClickSeed h4').on("click",function(){

        p(this);
    })
$(".ClickSeed").live('mousemove', function () {
    $(this).children().children('a').css("display", "block");
});
$(".ClickSeed").live('mouseleave', function () {
    $(this).children().children('a').css("display", "none");
});


function ArticlesCrap(sideId) {
    var ArticlId = "A"+sideId.substring(1)

	sideName = $("[id="+ArticlId+"]").attr("id");	
	sideindex =  $("#"+sideName).index();
	$("#"+sideName).prevAll().removeClass("none");
	$("#"+sideName).nextAll().addClass("none");
	$("#"+sideName).parent().nextAll().addClass("none");
	$(".zhangjieCon").children().removeClass('articl');
    $("#"+sideName).addClass('articl').removeClass("none");
	$("#"+sideName).parent().removeClass("none");	
	$("#"+sideName).parent().siblings().children(".zhangjieBodyChild").addClass("none")
	

	
	var target = "$('#'"+sideName+")";

	
    if (target != null && target.length > 0) {
        var targets = target.offset().top; //目标对象的位置，比如D
        var positionTop = targets - 10 + "px";
		
        $("html, body").animate({ scrollTop: positionTop }, 500); //500是ms,也可以用slow代替
    }
}




})



//$('.ClickSeed a').live('click', function () {
//        $('#zhezhao').show();
//        $('#zhezhao').css({
//            display: "block",
//            background: '#333333',
//            height: $(document).height()
//        });
//        var h1 = $(document).height();
//        var h2 = $(document).scrollTop();
//        var h3 = $(window).height();
//        var h4 = h2 + h3 / 2;
//        $('#zhezhao').show();
//        $('#zhezhao').css({
//            display: "block",
//            background: '#333333',
//            height: $(document).height()
//        });
//        $(".deleteBox").css("top", h3 / 2 - 140);
//        $(".deleteBox").removeClass("none");
//})

$(".closeBtn").live('click', function () {	
	$('#zhezhao').hide();
	 $(".deleteBox").addClass("none");
})

$(".tishiHead a").live('click', function () {	
	$('#zhezhao').hide();
	 $(".deleteBox").addClass("none");
})

;(function ($) {
/** 单选按钮开始 */
    $.fn.jRadio = function (settings) {
        // 默认参数
        var defaults = {
            valueSelector: ".radio-value", // 存放radio的value值的input表单的css选择器
            itemSelector: ".options > li", // radio项的css选择器
            checkedClass: "checked", // 选择状态的类名
            completeFunction: function () {} // 回调函数
        };
        var options = $.extend(defaults, settings || {}); // 使用参数
        var div = this;
        var radioValueInput = div.find(options.valueSelector); // 单选按钮value的input表单
        var items = div.find(options.itemSelector); // 单选按钮项数组

        /*----初始化 进入页面，初始化单选按钮状态 */
        items.each(function () {
            if($(this).hasClass(options.checkedClass)) {
                updateState($(this));
            }
        });
		
        /*---- 添加事件----*/
        div.on("click", options.itemSelector, function () {
            var item = $(this);
            // 如果当前项的状态为未选择
            if(!item.hasClass(options.checkedClass)) {
                updateState(item);
                options.completeFunction(); // 执行回调函数
            }
            return false;
        });

        /*----函数----*/
        function updateState(item) {
            var value = item.data("value");  // 获取当前项的value值
            radioValueInput.val(value); // 修改隐藏表单的值
            items.removeClass(options.checkedClass);    // 移除所有项的选中样式
            item.addClass(options.checkedClass);    // 为当前项添加选中样式
        }
    };
/** 单选按钮结束 */

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

})(jQuery);


