//导航常用菜单 
$(document).ready(function(){
   var selectMeau = $(".selectMeau li");
   var selectCont = $(".selectCont");
   var searchdown = $(".search-down li");
   var travlCatalog =$(".travl-catalog"); 
   var strategyCatalog =$(".strategy-catalog");
   
   var MaskBox = $(".MaskBox"); 
   
   //点击选择菜单
   selectMeau.on("click",function(){
	   var index = selectMeau.index(this);
       $(this).toggleClass("current").siblings().removeClass("current"); 
	   selectDown(index);
   });
   
   //点击下拉菜单
   searchdown.on("click",function(){
	   selectCont.hide();
	   selectMeau.removeClass("current");
	   $(document.body).removeClass("body-flow");	
   });
   

   
   //相应菜单内容
    function selectDown(index){
	   if (selectMeau.hasClass("current")){
	     var C_index=index;	    
	     selectCont.children().eq(C_index).show().siblings().hide();
		 selectCont.show();
		 $(document.body).addClass("body-flow");
	   }
	   else{
		   selectCont.children().hide();
	       selectCont.hide();
		   $(document.body).removeClass("body-flow");
	   }
    };
	
   //点击目录
   travlCatalog.on("click",function(){
        MaskBox.show();
		$(".travlCbox").show();		
   });
   // 点击左下角红色按钮
   strategyCatalog.on("click",function(){
        MaskBox.show();
		$(".travlCbox").show();		
   });
   // 点击关闭左下角的 红色按钮
   $(".travlwarp li").on("click",function(){
	   $(".travlCbox").hide();
	   MaskBox.hide();		
   });
   
   $(".travl-catalog .close").on("click",function(){
	   $(".travlCbox").hide();
	   MaskBox.hide();		
   });
   
 
    $(".strategy-catalog .close").on("click",function(){
	   $(".travlCbox").hide();
	   MaskBox.hide();		
   });  
   
   // 点击  游记 喜欢
   //$(".travl-nav .faver").on("click",function(){
	//   $(this).toggleClass("faverOn");
	//});
   //
      //点击攻略 喜欢
  /* $(".strategy-nav .faver").on("click",function(){



	   $(this).toggleClass("faverOn");


	});*/
   
})