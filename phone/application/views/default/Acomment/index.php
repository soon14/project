<html>
<head>
<title>我想对TA说</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
{Common::js('yearold/jquery.js')}
{Common::css('yearold/swiper.min.css')}
{Common::js('yearold/swiper.js')}
<style>

</style>

</head>
<body >
<audio id="music" src="/phone/public/css/yearold/BeTheBest.mp3" autoplay="autoplay" loop></audio>
<a id="audio_btn"><img src="/phone/public/images/yearold/play.png" width="100%"  id="music_btn" border="0"></a>

<div id="title"><span>[</span>我想对ta说<span>]</span></div>
<div id="user">
	<div class="b">
		<img src="{$userinfo['headimgurl']}" width="100%" >
	</div>
</div>
<div class="swiper-container" >
	<div  id="conts" style="margin:0 auto ;padding-left:2%;padding-right:2%;height:280px;">   
		<div class="dm">
			<!--d_screen start-->
			<div class="d_screen">
				<a href="#" class="d_del">X</a>				
				<div class="d_show">

					{loop $all_coments $v}
					<div class="report"  id="{$v['id']}"><span><i><img src="{$v['headimgurl']}" width="100%" ></i>{$v['content']}</span></div>
					{/loop}
<!--				<div class="report"  id="{$v['id']}"><span><i><img src="/phone/public/images/yearold/user-img00-180-180.jpg" width="100%" ></i>欢迎你们的到来</span></div>-->
<!--				<div class="report"><span><i><img src="/phone/public/images/yearold/user-img01-180-180.jpg" width="100%" ></i>111111111</span></div>-->
<!--				<div class="report"><span><i><img src="/phone/public/images/yearold/user-img02-180-180.jpg" width="100%" ></i>2222222222</span></div>-->
<!--				<div class="report"><span><i><img src="/phone/public/images/yearold/user-img00-180-180.jpg" width="100%" ></i>7777777777</span></div>-->
<!--				<div class="report"><span><i><img src="/phone/public/images/yearold/user-img01-180-180.jpg" width="100%" ></i>33333333333</span></div>-->
<!--				<div class="report"><span><i><img src="/phone/public/images/yearold/user-img02-180-180.jpg" width="100%" ></i>44444444444</span></div>-->

				</div>
			</div>
		</div>
	</div> 
</div>


<input type="hidden" name="first" id ='first' value="{$all_coments[0]['id']}">



<!--<div class="adv-box"><span>2016</span><p>九条最感人的话语,寄去一年末礼物<p></div>-->

<div class="see-but"><a href="javascript:" onclick="window.location.href='/phone/comment/list'">看看别人说了什么</a></div>



{if empty($iscoment)}
<div class="report-but" ><a href="javascript:">我也想对ta说一句</a></div>

{else}

<div class="report-but1" ><a href="javascript:" class="butl">我还想再说一句</a><a href="javascript:" class="butr" onclick="window.location.href='/phone/comment/list?me_openid=<?php echo $userinfo['openid']?>'">查看我的</a></div>
{/if}
<div class="report-box">
<!--    <form id="reply-form2" action="/phone/comment/ajax_addcomment" method="post" >-->
    <div class="input">
      <input id="reply-write" name="content" type="text" value="" placeholder="留言内容限制15字" >
    </div>
    <div class="send-btn"><a class="txt" onClick="send_reply2()">确定</a> </div>
	<input type="hidden" name="crsf_code" id="crsf_code" value="{$crsf_code}">
<!--  </form>-->
</div>

</body>
</html>
{Common::js('layer/layer.js')}
<script>
	$(".report-but").click(function () {
		$(this).css('display','none');
		$('.report-box').css('display','block');
	});
	$(".butl").click(function () {
		$(this).parent().css('display','none');
		$('.report-box').css('display','block');
	});
	//输入想说的
	function send_reply2() {

		var crsf_code  = $("#crsf_code").val();

		var content = $("#reply-write").val();

		if ($.trim(content) == "") {
			layer.msg("亲，请输入你的想说的话！");
			return false;
		}
		if($.trim(content.length) >15){

			layer.msg("留言内容限制15字~");
			return false;
		}

		$.ajax({
			type:"POST",
			url :"/phone/comment/ajax_addcomment",
			data:{content:content,crsf_code:crsf_code},
			dataType:'json',
			success:function(data){
                if(data.status){
					layer.msg(data.msg);
					var div= "<div class='report' id='"+data['id']+"'><span><i><img src='{$userinfo[headimgurl]}' width='100%' ></i>"+ content+"</span></div>";
					$("#reply-write").val("");
					$(".d_show").append(div);
					init_screen();
				}else{
					layer.msg(data.msg);
				}

			}
		});

	//	var div="<div class='report'><span>"+text+"</span></div>";


	}

	//音乐播放
	$(function () {
		$("#audio_btn").click(function () {
			var music = document.getElementById("music");
			if (music.paused) {
				music.play();
				$("#music_btn").attr("src", "/phone/public/images/yearold/play.png");
			} else {
				music.pause();
				$("#music_btn").attr("src", "/phone/public/images/yearold/pause.png");
			}
		});
		[]
		a = $("span [class='swiper-pagination-bullet swiper-pagination-bullet-active']").index();
		//alert(a);
	})
	function liuyan(){
		var crsf_code  = $("#crsf_code").val();

		var content    =  $("#reply-write").val();

		$.ajax({
			type:"POST",
			url :"/phone/comment/ajax_addcomment",
			data:{content:content,crsf_code:crsf_code},
			dataType:'json',
			success:function(data){
				if(data.status){
					layer.msg(data);
					window.location.reload();
				}

			}
		})
	}
</script>
