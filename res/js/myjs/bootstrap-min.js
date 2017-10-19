//登陆下拉
$(document).ready(function(){
  $("#topNavPanel .drop").mouseover(function(){	
      $(this).addClass("hover");
	  $(this).children(".dropdown").show()
  });
  $(".drop").mouseout(function(){	
      $(this).removeClass("hover");
	  $(this).children(".dropdown").hide()
  });
});

//设为首页 www.16css.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
  
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}

//下拉菜单
$(document).ready(function(){
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function MenuDrop_open()
{	MenuDrop_canceltimer();
	MenuDrop_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

function MenuDrop_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function MenuDrop_timer()
{	closetimer = window.setTimeout(MenuDrop_close, timeout);}

function MenuDrop_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}

$(document).ready(function()
{	$('#MenuDrop > li').bind('mouseover', MenuDrop_open);
	$('#MenuDrop > li').bind('mouseout',  MenuDrop_timer);});

document.onclick = MenuDrop_close;
});	

//隐藏/显示
$(document).ready(function(){
  //表单点击隐藏/显示
  $(".TxtDetail-box").hide();
  $(".TxtDetail-btn").click(function(){
  $(this).toggleClass("on");
  $(".TxtDetail-box").toggle();

  });
  $(".TxtDetail-back").click(function(){	  
	$(".TxtDetail-box").hide();	 
	$(this).parent().prev().children("a").toggleClass("on"); 
  });
});	


//表单隐藏/显示
$(document).ready(function(){
  //表单点击隐藏/显示
  $(".show-TableDetail").hide();
  $(".TableDetail_btn").click(function(){
      $(this).toggleClass("on");
      $(this).parent().parent().next().children().toggle();
	  $(this).parent().parent().next().children().css("border","none");
  });
  $(".TableDetail-back").click(function(){	  
	  $(this).parent().parent().hide();
	  $(this).parent().parent().parent().prev().children().children("a").toggleClass("on");
	  });	
	  
	
	  	  

//*菜单显示/置顶切换 隐藏显示附加内容 开始*/
$(document).ready(function(){	
    $("#FloaBtn").hide();
	$("ul.f-tabs li").click(function(){  
    $(this).addClass("current").siblings().removeClass("current");
	var index = $(this).index();	
    if( $(document).scrollTop() > toTopHeight ){
		$("#Float_content").children().eq(index).removeClass("f-top02");
		$("#Float_content").children().eq(index).addClass("f-top01").siblings().removeClass("f-top01");
		}
	else{
		$("#Float_content").children().eq(index).removeClass("f-top01");
		$("#Float_content").children().eq(index).addClass("f-top02").siblings().removeClass("f-top02");	
		}
    })		
	var toTopHeight = $("#FloatCase").offset().top;	  	
	$(window).scroll(function() { 
		if( $(document).scrollTop() > toTopHeight ){
		$("#FloatCase").addClass("NavFixed");		
		$("#float-nav-box").addClass("FloatWarp").removeClass("NavReturn");
		$("#FloaBtn").show();
		}
		else{
		$("#FloatCase").removeClass("NavFixed");
		$("#float-nav-box").removeClass("FloatWarp");
		$("#FloaBtn").hide();
		$("#Float_content").children().removeClass("f-top01");	
		$("#Float_content").children().removeClass("f-top02");	
			}		
        });		
});
})
/*菜单显示/置顶切换 隐藏显示附加内容 结束*/

//同时多个选项卡组件
$(document).ready(function(){ 
        //导航选项卡	 	    
		function tabs(tabTit){	
            $(tabTit).children().click(function(){													
			$(this).removeClass("hover");	
            $(this).addClass("current").siblings().removeClass("current");	
		//内容选项卡	 	
			tabid = '#'+ $(this).parent().parent().attr("id");			
			var index = $(tabid).children(".tabs").children().index(this);			
			tabCon = $(this).parent().next()
			$(tabCon).children().eq(index).addClass("active").siblings().removeClass("active");	
           	$(tabCon).children().eq(index).show().siblings().hide();					
           });	
		//鼠标滑过样式切换   	 
		$(tabTit).children().mouseover(function(){			
            $(this).not(".current").addClass("hover").siblings().removeClass("hover");			
    	   });		
		$(tabTit).children().mouseout(function(){			
            $(this).removeClass("hover");			
           });
		}		  
	   tabs($(".tabs"));
});

//表格组件
$(document).ready(function(){
    //表格奇偶行不同颜色
    $("table.table-striped tr:odd").addClass("oddColor");
    $("table.table-striped tr:even").addClass("evenColor");

});
$(document).ready(function(){ 
   //表格鼠标悬停
    $("table.table-hover tr:gt(0)").hover(
    function () { $(this).addClass("active") },
    function () { $(this).removeClass("active")})

});


/** 计算加减/总和**/
(function($) {
    var defaults = {reNumbers: /(-|-\$)?(\d+(,\d{3})*(\.\d{1,})?|\.\d{1,})/g, cleanseNumber: function (v) {
        return v.replace(/[^0-9.\-]/g, "");
    }, useFieldPlugin: (!!$.fn.getValue), onParseError: null, onParseClear: null};
    $.Calculation = {version: "0.4.07",setDefaults: function(options) {
        $.extend(defaults, options);
    }};
    $.fn.parseNumber = function(options) {
        var aValues = [];
        options = $.extend(options, defaults);
        this.each(function () {
            var $el = $(this),sMethod = ($el.is(":input") ? (defaults.useFieldPlugin ? "getValue" : "val") : "text"),v = $.trim($el[sMethod]()).match(defaults.reNumbers, "");
            if (v == null) {
                v = 0;
                if (jQuery.isFunction(options.onParseError)) options.onParseError.apply($el, [sMethod]);
                $.data($el[0], "calcParseError", true);
            } else {
                v = options.cleanseNumber.apply(this, [v[0]]);
                if ($.data($el[0], "calcParseError") && jQuery.isFunction(options.onParseClear)) {
                    options.onParseClear.apply($el, [sMethod]);
                    $.data($el[0], "calcParseError", false);
                }
            }
            aValues.push(parseFloat(v, 10));
        });
        return aValues;
    };
    $.fn.calc = function(expr, vars, cbFormat, cbDone) {
        var $this = this, exprValue = "", precision = 0, $el, parsedVars = {}, tmp, sMethod, _, bIsError = false;
        for (var k in vars) {
            expr = expr.replace((new RegExp("(" + k + ")", "g")), "_.$1");
            if (!!vars[k] && !!vars[k].jquery) {
                parsedVars[k] = vars[k].parseNumber();
            } else {
                parsedVars[k] = vars[k];
            }
        }
        this.each(function (i, el) {
            var p, len;
            $el = $(this);
            sMethod = ($el.is(":input") ? (defaults.useFieldPlugin ? "setValue" : "val") : "text");
            _ = {};
            for (var k in parsedVars) {
                if (typeof parsedVars[k] == "number") {
                    _[k] = parsedVars[k];
                } else if (typeof parsedVars[k] == "string") {
                    _[k] = parseFloat(parsedVars[k], 10);
                } else if (!!parsedVars[k] && (parsedVars[k] instanceof Array)) {
                    tmp = (parsedVars[k].length == $this.length) ? i : 0;
                    _[k] = parsedVars[k][tmp];
                }
                if (isNaN(_[k])) _[k] = 0;
                p = _[k].toString().match(/\.\d+$/gi);
                len = (p) ? p[0].length - 1 : 0;
                if (len > precision) precision = len;
            }
            try {
                exprValue = eval(expr);
                if (precision) exprValue = Number(exprValue.toFixed(Math.max(precision, 4)));
                if (jQuery.isFunction(cbFormat)) {
                    var tmp = cbFormat.apply(this, [exprValue]);
                    if (!!tmp) exprValue = tmp;
                }
            } catch(e) {
                exprValue = e;
                bIsError = true;
            }
            $el[sMethod](exprValue.toString());
        });
        if (jQuery.isFunction(cbDone)) cbDone.apply(this, [this]);
        return this;
    };
    $.each(["sum", "avg", "min", "max"], function (i, method) {
        $.fn[method] = function (bind, selector) {
            if (arguments.length == 0)return math[method](this.parseNumber());
            var bSelOpt = selector && (selector.constructor == Object) && !(selector instanceof jQuery);
            var opt = bind && bind.constructor == Object ? bind : {bind: bind || "keyup", selector: (!bSelOpt) ? selector : null, oncalc: null};
            if (bSelOpt) opt = jQuery.extend(opt, selector);
            if (!!opt.selector) opt.selector = $(opt.selector);
            var self = this, sMethod, doCalc = function () {
                var value = math[method](self.parseNumber(opt));
                if (!!opt.selector) {
                    sMethod = (opt.selector.is(":input") ? (defaults.useFieldPlugin ? "setValue" : "val") : "text");
                    opt.selector[sMethod](value.toString());
                }
                if (jQuery.isFunction(opt.oncalc)) opt.oncalc.apply(self, [value, opt]);
            };
            doCalc();
            return self.bind(opt.bind, doCalc);
        }
    });
    var math = {sum: function (a) {
        var total = 0, precision = 0;
        $.each(a, function (i, v) {
            var p = v.toString().match(/\.\d+$/gi), len = (p) ? p[0].length - 1 : 0;
            if (len > precision) precision = len;
            total += v;
        });
        if (precision) total = Number(total.toFixed(precision));
        return total;
    },avg: function (a) {
        return math.sum(a) / a.length;
    },min: function (a) {
        return Math.min.apply(Math, a);
    },max: function (a) {
        return Math.max.apply(Math, a);
    }};
})(jQuery);
/** ------------- choose -------------------- **/
/* reduce_add */
var setAmount = {
    min:1,
    max:999,
    reg:function(x) {
        return new RegExp("^[1-9]\\d*$").test(x);
    },
    amount:function(obj, mode) {
        var x = $(obj).val();
        if (this.reg(x)) {
            if (mode) {
                x++;
            } else {
                x--;
            }
        } else {
            alert("请输入正确的数量！");
            $(obj).val(1);
            $(obj).focus();
        }
        return x;
    },
    reduce:function(obj) {

        var x = this.amount(obj, false);
        if (x >= this.min) { 
            $(obj).val(x);		
            recalc();
        } else {
            $('.reduce').attr({"disabled":"disabled"});
			$(".reduce").addClass("disable"); 
            $(obj).val(1);
			
            $(obj).focus();
        }
    },
    add:function(obj) {
        var x = this.amount(obj, true);
        if (x <= this.max) {
			$('.reduce').removeAttr("disabled");//去掉a标签中的onclick事件
            $(".reduce").removeClass("disable");
            $(obj).val(x);
            recalc();
        } else {
            alert("商品数量最多为" + this.max);
            $(obj).val(999);
            $(obj).focus();
        }
    },
    modify:function(obj) {
        var x = $(obj).val();
        if (x < this.min || x > this.max || !this.reg(x)) {
            alert("请输入正确的数量！");
            $(obj).val(1);
            $(obj).focus();
        }
    }
}

function BuyUrl(wid) {
    var pcounts = $("input[id^=qty_item_]").val();
    var patrn = /^[0-9]{1,4}$/;
    if (!patrn.exec(pcounts)) {
        pcounts = 1;
    }
    else {
        if (pcounts <= 0)
            pcounts = 1;
        if (pcounts >= 1000)
            pcounts = 999;
    }
}
;

/** total_item **/
$(document).ready(function () {
    $("input[name^=qty_item_]").bind("keyup", recalc);
    recalc();
});

function recalc() {
    $("input[id^=total_item]").val()
    //产品价格统计
    $("[id^=total_item]").calc(
        "qty * price",
        {
            qty: $("input[name^=qty_item_]"),
            price: $("[id^=price_item_]")
        },
        function (s) {
            return  s.toFixed(2);
        },

        function ($this) {
            var sum = $this.sum();
            $("[id^=total_item]").text(
                 sum.toFixed(2)
            );
            $("#total_price").val($("[id^=total_item]").text());
        }
    );
}; 

//背景透明弹出框
$(document).ready(function(){	
	$('.popClick').click(function(){		
		$('.popBox').show();			
		});			
	$('.popClose').click(function(){		
		$('.popBox').hide();	
		});	
});	



;(function ($) {
    /**
     * 单选按钮
     */
    $.fn.jRadio = function (settings) {
        // 默认参数
        var defaults = {
            valueSelector: ".radio-value",  // 存放radio的value值的input表单的css选择器
            itemSelector: ".options > li", // radio项的css选择器
            checkedClass: "checked",    // 选择状态的类名
            completeFunction: function () {}    // 回调函数
        };

        var options = $.extend(defaults, settings || {});   // 使用参数

        var div = this;
        var radioValueInput = div.find(options.valueSelector);  // 单选按钮value的input表单
        var items = div.find(options.itemSelector); // 单选按钮项数组

        /*----初始化----*/
        /**
         * 进入页面，初始化单选按钮状态
         */
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
        /**
         * 更新数据
         * @param item  操作项
         */
        function updateState(item) {
            var value = item.data("value");  // 获取当前项的value值
            radioValueInput.val(value); // 修改隐藏表单的值

            items.removeClass(options.checkedClass);    // 移除所有项的选中样式
            item.addClass(options.checkedClass);    // 为当前项添加选中样式
        }
    };

    /**
     * 复选框
     */
    $.fn.jCheckBox = function (settings) {
        // 默认参数
        var defaults = {
            valueSelector: ".checkbox-value",  // 存放每一项checkbox的value值的input表单的css选择器
            itemSelector: ".options > li", // checkbox项的css选择器
            checkedClass: "checked",    // 选择状态的类名
            completeFunction: function () {}    // 回调函数
        };
        var options = $.extend(defaults, settings || {});   // 使用参数

        var div = this;
        var items = div.find(options.itemSelector); // 复选框项数组

        /*----初始化----*/
        /**
         * 进入页面，初始化复选框状态
         */
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

    /**
     * 下拉选择菜单
     */
    $.fn.jSelect = function (settings) {
        // 默认参数
        var defaults = {
            viewSelector: ".select-view",   // select选择层容器css选择器
            valueSelector: ".select-value", // 存放select的value值的input表单的css选择器
            textSelector: ".select-text",  // select显示文本的css选择器
            iconSelector: ".select-icon", // select的icon的css选择器
            iconClickAble: true,    // 是否使用点击icon展示下拉项

            itemContainerSelector: ".options",    // 下拉层css选择器
            itemSelector: ".options > li",   // 下拉项css选择器

            completeFunction: function () {}    // 回调函数
        };

        var options = $.extend(defaults, settings || {});   // 使用参数

        var div = this;
        var selectView = div.find(options.viewSelector);    // select显示层容器
        var selectValueInput = selectView.find(options.valueSelector);   // select的value值的input表单
        var selectText = selectView.find(options.textSelector); // select显示文本
        var selectIcon = selectView.find(options.iconSelector); // select的icon
        var selectItemContainer = div.find(options.itemContainerSelector);  // select下拉层
        var items = div.find(options.itemSelector); // select下拉项

        /*----添加事件----*/
        /**
         * 点击icon或者点击显示层，显示下拉层
         */
        if(options.iconClickAble) {
            selectIcon.on("click", function () {
                selectItemContainerToggle();

                return false;
            });
        } else {
            selectView.on("click", function () {
                selectItemContainerToggle();

                return false;
            });
        }

        /**
         * 点击下拉项，修改value值，改变显示文本
         */
        items.each(function () {
            var item = $(this);

            item.on("click", function () {
                var value = $(this).data("value");  // 获取当前项的value
                var text = $(this).text();  // 获取当前项的文本内容

                selectValueInput.val(value);    // 修改value
                selectText.text(text);  // 修改文本内容

                selectItemContainer.slideUp("fast");    // 收起下拉层
                options.completeFunction(); // 执行回调函数
                return false;
            });
        });

        /*----函数----*/
        /**
         * 显示或者隐藏下拉层
         */
        function selectItemContainerToggle() {
            selectItemContainer.slideToggle("fast");
        }
    }

})(jQuery);


// 轮播
;(function($){
	
	$.fn.lubo=function(options){
		
		// var defaults={

		// }
	
		// //通过覆盖来传参数
		// var options=$.extend(defaults,options);
		
		return this.each(function(){

			var _lubo=jQuery('.Carousel');

			var _box=jQuery('.Carousel_box');

			var _this=jQuery(this); // 

			var luboHei=_box.height();

			var Over='mouseover';

			var Out='mouseout';

			var Click='click';

			var Li="li";

			var _cirBox='.cir_box';

			var cirOn='cir_on';

			var _cirOn='.cir_on';

			var cirlen=_box.children(Li).length; //圆点的数量  图片的数量

			var luboTime=2000; //轮播时间

			var switchTime=400;//图片切换时间

			cir();

			Btn();

		//根据图片的数量来生成圆点

			function cir(){

				_lubo.append('<ul class="cir_box"></ul>');

				var cir_box=jQuery('.cir_box');

				for(var i=0; i<cirlen;i++){

					cir_box.append('<li style="" value="'+i+'"></li>');
				}

				var cir_dss=cir_box.width();

				cir_box.css({

					left:'50%',

					marginLeft:-cir_dss/2,

					bottom:'10%' 

				});

				cir_box.children(Li).eq(0).addClass(cirOn);

			}

		//生成左右按钮

			function Btn(){

				_lubo.append('<div class="Carousel_btn"></div>');

				var _btn=jQuery('.Carousel_btn');

				_btn.append('<div class="left_btn"><i></i></div><div class="right_btn"><i></i></div>');

				var leftBtn=jQuery('.left_btn');

				var rightBtn=jQuery('.right_btn');

			//点击左面按钮

				leftBtn.bind(Click,function(){

				var cir_box=jQuery(_cirBox);

			 	var onLen=jQuery(_cirOn).val();	

				_box.children(Li).eq(onLen).stop(false,false).animate({

					opacity:0

				},switchTime);

				if(onLen==0){

			 		onLen=cirlen;

			 	}

				_box.children(Li).eq(onLen-1).stop(false,false).animate({

					opacity:1

				 },switchTime);
				
				cir_box.children(Li).eq(onLen-1).addClass(cirOn).siblings().removeClass(cirOn);

				})

			//点击右面按钮

				rightBtn.bind(Click,function(){

				var cir_box=jQuery(_cirBox);

			 	var onLen=jQuery(_cirOn).val();	

				_box.children(Li).eq(onLen).stop(false,false).animate({

					opacity:0

				},switchTime);

				if(onLen==cirlen-1){

				 		onLen=-1;

				 	}

				_box.children(Li).eq(onLen+1).stop(false,false).animate({

					opacity:1

				 },switchTime);
				
				cir_box.children(Li).eq(onLen+1).addClass(cirOn).siblings().removeClass(cirOn);

				})
			}

		//定时器

			 int=setInterval(clock,luboTime);

			 function clock(){

			 	var cir_box=jQuery(_cirBox);

			 	var onLen=jQuery(_cirOn).val();	

				_box.children(Li).eq(onLen).stop(false,false).animate({

					opacity:0

				},switchTime);

				if(onLen==cirlen-1){

				 		onLen=-1;

				 	}

				_box.children(Li).eq(onLen+1).stop(false,false).animate({

					opacity:1

				 },switchTime);
				
				cir_box.children(Li).eq(onLen+1).addClass(cirOn).siblings().removeClass(cirOn);
			 	
			 }

		// 鼠标在图片上 关闭定时器
			
			_lubo.bind(Over,function(){

				clearTimeout(int);

			});

			_lubo.bind(Out,function(){

				int=setInterval(clock,luboTime);

			});

		//鼠标划过圆点 切换图片

			jQuery(_cirBox).children(Li).bind(Over,function(){

				var inde = jQuery(this).index();

				jQuery(this).addClass(cirOn).siblings().removeClass(cirOn);

				_box.children(Li).stop(false,false).animate({

					opacity:0

				},switchTime);

				_box.children(Li).eq(inde).stop(false,false).animate({

					opacity:1

				},switchTime);
			});
		});
	}	
})(jQuery);


$(function(){

    $(".Carousel").lubo({

    });

})
// 区域选择
$(function(){
		$(".show-con").css("height","14px");
        $(document).on("click", ".top-category span.crumb-select-item", function(event){
            if(event.type=='mouseenter'){ 
            $(this).addClass("crumb-select-itemon");
            }else{ 
            $(this).removeClass("crumb-select-itemon");
            } 
        });
		
        $(document).on("click", ".top-category span.crumb-select-item", function(event){
            $(this).remove();
            var TTR = $(this).find("em").text();
            $(".show-con a").each(function(){
                var TT = $(this).text();
                    THI = $(this);
                    THIPP = $(this).parents("dl");
                if(TTR==TT){
                    THI.removeClass("nzw12");
                    THIPP.css("display","block");
                }
            })
        });
        $(".show-con a").click(function(event){
            event.preventDefault();
            THIP = $(this).parents("dl");
            if($(this).hasClass("nzw12")){
            }else{
                $(this).addClass("nzw12");
                var zhiclass = $(this).parents("dd").siblings("dt").find("a").text();
                    zhicon = $(this).text();
                    tianjaneir="<span class='crumb-select-item'><a href='/'><b>"+zhiclass+"</b><em>"+zhicon+"</em><i class='icon-remove'></i></a></span>"
                $(".top-category").children().last().after(tianjaneir);
                THIP.css("display","none");
            }
        });
		
		$(".del-all").click(function(){
		  $(".crumb-select-item").remove();
		});	
					
		$(".more-category span").click(function(){
			 var ticon = $(this).siblings("i");
                 tspan = $(this);
			if($(this).hasClass("mk")){
                    $(this).parent().prev().addClass("hide").removeClass("show");
                    ticon.removeClass("icon-angle-up");
                    ticon.addClass("icon-angle-down");
                    tspan.html("高级选项搜索");
                    $(this).removeClass("mk")
                }else{
                    $(this).parent().prev().addClass("show").removeClass("hide");
                    ticon.removeClass("icon-angle-down");
                    ticon.addClass("icon-angle-up");
                    tspan.html("收起");
                    $(this).addClass("mk")
                }
            $(this).parent().prev().show();
			
		});		
        $(".show-more").click(function(event){
            event.preventDefault();
            var ticon = $(this).find("i");
                tspan = $(this).find("span");
                if($(this).hasClass("zk")){
                    $(this).siblings(".show-con").css("height","14px");
                    ticon.removeClass("icon-angle-up");
                    ticon.addClass("icon-angle-down");
                    tspan.html("更多");
                    $(this).removeClass("zk")
                }else{
                    $(this).siblings(".show-con").css("height","auto");
                    ticon.removeClass("icon-angle-down");
                    ticon.addClass("icon-angle-up");
                    tspan.html("收起");
                    $(this).addClass("zk")
                }
        });
        $("#sxbtn").click(function(event){
            event.preventDefault();
            var xicon = $(this).find("span i");
                xspan = $(this).find("span em");
            if($(this).hasClass("zkon")){
                xspan.text("收起筛选");
                xicon.removeClass("icon-angle-down");
                xicon.addClass("icon-angle-up");
                $(".sxcon").slideDown();
                $(this).removeClass("zkon")
            }else{
                xspan.text("查看筛选");
                xicon.removeClass("icon-angle-up");
                xicon.addClass("icon-angle-down");
                $(".sxcon").slideUp();
                $(this).addClass("zkon")
            }
        })


    })
