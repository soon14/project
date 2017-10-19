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
