//导航常用菜单 
$(document).ready(function(){
	//通用导航Li添加类
	var navbarnav = $("#navbar-nav").find("li");
	navbarnav.hover(function(){
		$(this).addClass("on");
		$(this).siblings().removeClass("on");
	},function(){
		$(this).removeClass("on");
	})
   //点击导航变当前类
   $("ul.navtabs li").click(function() {  
        $("ul.navtabs li").removeClass("current"); //Remove any "active" class  
        $(this).addClass("current"); //Add "active" class to selected tab 
    })
	
	//点击分页变当前类
   $("div.uPage a").click(function() {  
        $("div.uPage a").removeClass("current"); //Remove any "active" class  
        $(this).addClass("current"); //Add "active" class to selected tab 
    })
	
   //点击城市当前
   $("ul.area-tab li").click(function() {  
        $("ul.area-tab li").removeClass("current"); //Remove any "active" class  
        $(this).addClass("current"); //Add "active" class to selected tab 
    })
	
  //点击隐藏/显示
  $(".detail_box").hide();
  $(".detail_btn").click(function(){
  $(this).toggleClass("on");
  $(this).parent().parent().next().children().children().toggle();
  });
  $(".close").click(function(){	  
	  $(".detail_box").hide();
	  $(this).parent().prev().children().removeClass("on");
	  });	
	



})