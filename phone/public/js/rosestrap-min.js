//同时多个选项卡组件
$(document).ready(function(){ 
        //导航选项卡	 	    
		function tabs(tabTit){	
            $(tabTit).children().click(function(){
			$(this).removeClass("hover");	
            $(this).toggleClass("current").siblings().removeClass("current");	
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


//背景透明弹出框
$(document).ready(function(){	
	$('.classify').click(function(){

		$('.classify i').toggleClass("on");
		$('.popBox').toggle();			
		});			
});	