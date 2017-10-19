$(document).ready(function(){
  //图文切换
  $("#only_text").click(function(){
  tspan = $(this).children("em");
  if($(this).hasClass("mk")){
                    $(".ctd_content img").show();
					$(this).removeClass("clicked");
                    tspan.html("只看文字");
                    $(this).removeClass("mk")
                }else{
                    $(".ctd_content img").hide();
					$(this).addClass("clicked");					
                    tspan.html("图文模式");
                    $(this).addClass("mk")
                }
});	
});	


// 区域选择
$(function(){
		$(".show-con ul").css("height","25px");
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
                    THIPP = $(this).parent().parent().parents("tr");
                if(TTR==TT){
                    THI.removeClass("nzw12"); 
					THI.parent().removeClass("current");     
					              
                }
            })
        });
        $(".show-con a").click(function(event){
            event.preventDefault();
            THIP = $(this).parents("tr");
            if($(this).hasClass("nzw12")){
            }else{
                $(this).addClass("nzw12");
				$(this).parent().addClass("current");
                var zhiclass = $(this).parent().parent().parent().prev().text();
                    zhicon = $(this).text();
                    tianjaneir="<span class='crumb-select-item'><a href='/'><b>"+zhiclass+"</b>：<em>"+zhicon+"</em><i class='icon-remove'></i></a></span>"
                $(".top-category").children().last().after(tianjaneir);
                
            }
        });
		
		$(".del-all").click(function(){
		  $(".crumb-select-item").remove();
		  $(".show-con").removeClass("current"); 
		});	
					
		$(".more-category span").click(function(){
			 var ticon = $(this).siblings("i");
                 tspan = $(this);
			if($(this).hasClass("mk")){
                    $(this).parent().parent().parent().parent().parent().prev().addClass("hide").removeClass("show");
                    ticon.removeClass("icon-angle-up");
                    ticon.addClass("icon-angle-down");
                    tspan.html("高级选项搜索");
                    $(this).removeClass("mk")
                }else{
                    $(this).parent().parent().parent().parent().parent().prev().addClass("show").removeClass("hide");
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
                    $(this).siblings("ul").css("height","25px");
                    ticon.removeClass("icon-angle-up");
                    ticon.addClass("icon-angle-down");
                    tspan.html("更多");
                    $(this).removeClass("zk")
                }else{
                    $(this).siblings("ul").css("height","auto");
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
	