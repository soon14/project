


//弹幕一会显示一会消失
//	window.onload = function () {
//		setTimeout(show, 10000);
//	}
//显示
	function show() {
		document.getElementById('showmeg').style.display = "block";
		 $("#showmeg").animate({top:'40%'},1800);
		 $("#showmeg").animate({top:'20%'},1800);
		 $("#showmeg").animate({left:'10%'},1800);
		setTimeout(hide, 5000);
	}
//隐藏
	function hide() {
		document.getElementById('showmeg').style.display = "none";
		setTimeout(show, 10000);
	}



	$(function () {
	init_screen();
	});


//考虑数据的交互，多久请求一下数据库
	$(document).ready(function () {
	  setInterval("startRequest()",9500*2);
	   });

	function startRequest()
	{
	  id= $(".d_show").find("div:last").attr("id");
	 $.ajax({
	 type: 'post',
	 url: '/phone/comment/ajax_getcomment2?act=getdata',
	 data: {id:id},
	 dataType: 'json',
	 success: function (data) {
	html="";

	 for (var i = 0; i < data.length; i++) {
	 // html+= "<div id="+data[i].id+" style='font-size:" +data[i].size+ ";color:"+data[i].color+"'><p>"+data[i].username+":"+data[i].content+"</p></div>";
	  html+= "<div class='report' id="+data[i].id+"><span><i><img src='"+data[i]['headimgurl']+"' width='100%' ></i>"+data[i]['content']+"</span></div>";

	 }
	$(".d_show").children().remove();
	$(".d_show").append(html);
	init_screen();

	 num=$(".d_show").find("div").length;
		 //if(num>12) {
			// $(".d_show").find("div:lt(12)").remove();
		 //}

	 },
	 });
	// init_screen();
	}

	function init_screen() {
	var _top = 40;
	$(".d_show").find("div").show().each(function () {
		var _left = $(window).width() - $(this).width()+220+20;
		var _height = $(window).height()+100;

		_top = _top + 36;
		if (_top >= _height - 120) {
			_top = 40;
		}
		$(this).css({left: _left, top: _top});
		var time = 10000*1.5;
		if ($(this).index() % 2 == 0) {
			time = 12000*2;
		}
		 if ($(this).index() % 3 == 0) {
			time = 14000;
		}
		if ($(this).index() % 4 == 0) {
			time = 16000*2;
		}
		if ($(this).index() % 5 == 0) {
			time = 18000;
		}
		//if ($(this).index() % 7 == 0) {
		//	time = 20000;
		//}
		//if ($(this).index() % 8 == 0) {
		//	time = 23000;
		//}
		$(this).stop().animate({left: "-" + _left + "px"}, time, function () {
		});
	});
	}

	//随机获取颜色值
	function getReandomColor() {
	return '#' + (function (h) {
		return new Array(7 - h.length).join("0") + h
	})((Math.random() * 0x1000000 << 0).toString(16))
	}