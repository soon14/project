//弹框-背景遮罩

$(document).ready(function() {

    var modal = $(".modal");
	var dialog = $(".modal-dialog");
    var dialogClose = $(".modal .Close");
	 var dialogCancel = $(".modal .Cancel");
	

    //modal-dialog区域外
    $(document).on("click",
    function(e) {
        modal.removeClass("in");
    });
    //点击modal行为
    $(document).on('click','[data-toggle="modal"]',ShowDialog);
    //modal-dialog区域
    dialog.on("click",
    function(e) {
        e = e || event;
        stopPropagation(e);
    });

    //modal-dialog关闭
    dialogClose.on('click',
    function() {
        dialogModal = $(this).parents(".modal");
		 dialogModal.removeClass("in");
    });
	
    //modal-dialog取消
    dialogCancel.on('click',
    function() {
        dialogModal = $(this).parents(".modal");
		 dialogModal.removeClass("in");
    });
	
    //modal-dialog显示
    function ShowDialog(e) {


		var thisObjID = $(this).attr('data-target');
       // var index     = $(this).attr('data-index');
        $(thisObjID).addClass("in");
        var thisObjcon = $(thisObjID).children(".modal-dialog");
        var thisobjmask = $(thisObjID).children(".modal-backdrop");
        var top = 150;
        //if(index=='index'){
            thisObjcon.css({
                'top': "25%",
                'left': "10%"
            });
        //}else{
        //    thisObjcon.css({
        //        'top': "-6%",
        //        'left': "10%"
        //    });
        //}

        e = e || event;
        stopPropagation(e);
    }



    //点击阻止冒泡行为
    function stopPropagation(e) {
        e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
    }
});




// =====================
//同时多个选项卡组件
//$(document).ready(function() {
//
//    //导航选项卡
//    function activeTabs() {
//        //当前选项
//		$(".mask-box").removeClass("current");
//        $(this).children(".mask-box").addClass("current");
//		$("join-Prize-m td").not("current").hide();
//    }
//
//
//
//    //点击modal行为
//    $(document).on('click', '.join-Prize-m td', activeTabs)
//});
