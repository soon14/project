$(document).ready(function() {
    var Sys = {};
    var ua = navigator.userAgent.toLowerCase();


    var allEle = $(':header[class*="headline"]');// 获取  所有 h1~h6 的对象  *= 模糊查询？？
    var headLen = allEle.length;
    var ddArr = [];
    //根据页面内容生成slide导航；
    allEle.each(function(i) {
        var sideIndex, sideName, ddId, active = '',
        ddClass, sideAnchor;
        sideName = $(this).find('.headline-content').text();// 获取 h每一个的 title
        if ($(this).hasClass('headline-1')) {//区分 主，付  菜单
            sideAnchor = sideIndex = $(this).find('.anchor-1').eq(0).attr('name');
            ddClass = 'sideCatalog-item1';
        } else {
            sideAnchor = $(this).find('.anchor-2').eq(0).attr('name');
            sideIndex = sideAnchor.replace('-', '.');
            ddClass = 'sideCatalog-item2';
        }
        ddId = 'sideToolbar-item-0-' + sideAnchor;// 配置 左边的对应的名字
        if (i == 0) {
            active = 'active';// 默认 设置第一个的 样式 为 active
        }
        // 构造左边的   内容
        var ddHtml = '<dd id="' + ddId + '" class="' + ddClass + ' ' + active + '">' + '<a onclick="return false;" title="part' + sideAnchor + '" href="#' + sideAnchor + '">' + sideName + '</a>' + '<i></i>' + '</dd>';

        ddArr.push(ddHtml);
    });
	
    $('#sideCatalog-catalog dl').html(ddArr.join(''));

    var slideInnerHeight = $('#sideCatalog-catalog dl').height();
    var slideOutHeight = $('#sideCatalog-catalog').height();
    var enableTop = slideInnerHeight - slideOutHeight;
    var step = 50;

    //点击导航中的各个目录
    $('#sideCatalog-catalog dl').delegate('dd', 'click',
    function() {
        var index = $('#sideCatalog-catalog dl dd').index($(this));
		
        scrollSlide($(this), index);
        var ddIndex = $(this).find('a').stop().attr('href').lastIndexOf('#');
        var ddId = $(this).find('a').stop().attr('href').substring(ddIndex + 1);
        var  to  =$("html,body").scrollTop();
        var windowTop = $('a[name="' + ddId + '"]').offset().top*1;
        //  对谷歌浏览器做的兼容
        isBrowser(windowTop);

    })






$(function(){
	var toTopHeight = $(".travelInfo").offset().top;

    var  toBotHeight= $(".travelInfo").height();



    $(window).scroll(function() {
        var s =$(document).scrollTop();
        if( $(document).scrollTop() > toTopHeight && $(document).scrollTop() < toBotHeight )
		{

		 $("#sideToolbar").addClass("fixed").css({"top":"150px"});

           $(".ctd_head_box").addClass("HeadFixed").css("height", "130px");
            $("#hi_div").show();
          /*  $(".ctd_side").addClass("SideFixed").children(".listA-item").first().addClass("show").siblings().addClass("hidden");
             $(".ctd-tit").removeClass("hidden");
			    			*/
        for (var i = headLen - 1; i >= 0; i--) {

            if ($(this).scrollTop() >= allEle.eq(i).offset().top -allEle.eq(i).height()) {
                var index = i + 1;
				
                $('#sideCatalog-catalog dl dd').eq(index).addClass('active').siblings('dd').removeClass('active');
                scrollSlide($('#sideCatalog-catalog dl dd').eq(index), index);
                return false;
            } else {
                $('#sideCatalog-catalog dl dd').eq(0).addClass('active').siblings('dd').removeClass('active');
            }
        }
        }
		else{
            if($(document).scrollTop() < toTopHeight) {
                $('#sideCatalog-catalog dl dd').eq(0).addClass('active').siblings('dd').removeClass('active');
                $("#hi_div").hide();
                $("#sideToolbar").removeClass("fixed").removeAttr('class');
                 $(".ctd_head_box").removeClass("HeadFixed").css("height", "400px");
                // $(".ctd_side").removeClass("SideFixed").children(".listA-item").addClass("show").removeClass("hidden");
            }else if($(document).scrollTop() > toBotHeight){
                for (var i = headLen - 1; i >= 0; i--) {
                    if ($(this).scrollTop() >= allEle.eq(i).offset().top - allEle.eq(i).height()) {
                            var index = i + 1;

                            $('#sideCatalog-catalog dl dd').eq(index).addClass('active').siblings('dd').removeClass('active');
                            scrollSlide($('#sideCatalog-catalog dl dd').eq(index), index);
                            return false;
                    }
                }

            }
		}		
    });

});

    function isBrowser(windowTop){

        var Sys={};

        var ua=navigator.userAgent.toLowerCase();

        var s;

        (s=ua.match(/msie ([\d.]+)/))?Sys.ie=s[1]:

            (s=ua.match(/firefox\/([\d.]+)/))?Sys.firefox=s[1]:

                (s=ua.match(/chrome\/([\d.]+)/))?Sys.chrome=s[1]:

                    (s=ua.match(/opera.([\d.]+)/))?Sys.opera=s[1]:

                        (s=ua.match(/version\/([\d.]+).*safari/))?Sys.safari=s[1]:0;

        if(Sys.ie){//Js判断为IE浏览器
            $('body,html').animate({
                    scrollTop: windowTop-100
                },
                'fast');
           // alert('http://www.wangjinhai119.com'+Sys.ie);

            if(Sys.ie=='9.0'){//Js判断为IE 9

            }else if(Sys.ie=='8.0'){//Js判断为IE 8

            }else{

            }

        }
        else if(Sys.firefox){//Js判断为火狐(firefox)浏览器
            $('body,html').animate({
                    scrollTop: windowTop-100
                },
                'fast');

        }
        else if(Sys.chrome){//Js判断为谷歌chrome浏览器
            $('body,html').animate({
                    scrollTop: windowTop-125
                },
                'fast');
        }
        else if(Sys.opera){//Js判断为opera浏览器
            $('body,html').animate({
                    scrollTop: windowTop-125
                },
                'fast');
        }
       else if(Sys.safari){//Js判断为苹果safari浏览器



        }else{
            $('body,html').animate({
                    scrollTop: windowTop-100
                },
                'fast');
        }

    }




    //导航的滚动，以及向上，向下按钮的显示隐藏
    function scrollSlide(that, index) {
        if (index < 5) {
            $('#sideCatalog-catalog dl').stop().animate({
                'top': '0px'
            },
            'fast');
        } else if (index > 10) {
            $('#sideCatalog-catalog dl').stop().animate({
                'top': -enableTop
            },
            'fast');
        } else {
            var dlTop = parseInt($('#sideCatalog-catalog dl').css('top')) + slideOutHeight / 2 - (that.offset().top - $('#sideCatalog-catalog').offset().top);
            $('#sideCatalog-catalog dl').stop().animate({
                'top': dlTop
            },
            'fast');
        }
    }

});
