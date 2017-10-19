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
        var thiscontent = $(this).attr('data-content');// 获取 当前对象的 内容
        $(thisObjID).addClass("in");
        var thisObjcon = $(thisObjID).children(".modal-dialog");
        var thisobjmask = $(thisObjID).children(".modal-backdrop");
        var top = 150;
        if(thiscontent!=''&&thisObjID=='#DialogDiv1'){
          $(thisObjID).children().children().children('.modal-body').empty().text(thiscontent);//  $('.modal-body').empty();//.text(thiscontent);
        }
        thisObjcon.css({
            'top': "20%",
            'left': "10%"
        });
        
        e = e || event;
        stopPropagation(e);
    }
    //modal-dialog显示
    function ShowDialog1(e) {
        var thisObjID = $(this).attr('data-target');
        var thiscontent = $(this).attr('data-content');// 获取 当前对象的 内容
        $(thisObjID).addClass("in");
        var thisObjcon = $(thisObjID).children(".modal-dialog");
        var thisobjmask = $(thisObjID).children(".modal-backdrop");
        var top = 150;
        if(thiscontent!=''&&thisObjID=='#DialogDiv1'){
            $(thisObjID).children().children().children('.modal-body').empty().text(thiscontent);//  $('.modal-body').empty();//.text(thiscontent);
        }
        thisObjcon.css({
            'top': "0",
            'left': "0"
        });

        e = e || event;
        stopPropagation(e);
    }
    //点击modal行为		
	$(document).on('click','[data-toggle="modal"]',ShowDialog);
    $(document).on('click','[data-toggle="modal1"]',ShowDialog1);

    //点击阻止冒泡行为
    function stopPropagation(e) {
        e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
    }
});