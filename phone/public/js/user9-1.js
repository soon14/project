//弹框-背景遮罩
$(document).ready(function() {
	
    var modal = $(".modal");
	var dialog = $(".modal-dialog");
    var dialogClose = $(".modal .Close");

    //modal-dialog区域外
    $(document).on("click",
    function(e) {
        modal.hide();
    });

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
		 dialogModal.hide();
    });
	
    //modal-dialog显示
    function ShowDialog(thisObjID) {
        $(thisObjID).show();
        var thisObjcon = $(thisObjID).children(".modal-dialog");
        var thisobjmask = $(thisObjID).children(".modal-backdrop");
        var top = ($(window).height() - thisObjcon.height()) / 2;
        var left = ($(window).width() - thisObjcon.width()) / 2;
        thisObjcon.css({
            'top': top,
            'left': left
        }).show();
        thisobjmask.show();
        e = e || event;
        stopPropagation(e);
    }

    //点击modal行为	
    $(document).on('click', '[data-toggle="modal"]',
    function(e) { 
        var thisObjID = $(this).attr('data-target');;
        ShowDialog(thisObjID);
    })

    //点击阻止冒泡行为
    function stopPropagation(e) {
        e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
    }
});