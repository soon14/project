// JavaScript Document
$(document).ready(function(){         //导航选项卡	 	    
	
            $(".tabs").children().click(function(){												
	
            $(this).addClass("current").siblings().removeClass("current");	
		//内容选项卡	 	
			tabid = '#'+ $(this).parent().parent().attr("id");			
			var index = $(tabid).children(".tabs").children().index(this);						
			tabCon = $(this).parent().next();
			$(tabCon).addClass("1")
			$(tabCon).children().eq(index).addClass("active").siblings().removeClass("active");	
           	$(tabCon).children().eq(index).show().siblings().hide();					
           });