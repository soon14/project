﻿<?php
include_once "./jssdk.php";
$jssdk = new JSSDK("wxfc591782c59ebc65", "bca8d316a6083351478d90eb465b845b");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>疯狂猜水果</title>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link type="text/css" href="./styles/style.css" rel="stylesheet">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="browsermode" content="application"/>
	<link rel="stylesheet" type="text/css" href="css/game9g.css">
    <script src="js/game9g.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<style>
		#J_game_end{
			display:none;
		}
	</style>
</head>
<body>
<!--#
    include_once "./jssdk.php";
    $jssdk = new JSSDK("wxfc591782c59ebc65", "bca8d316a6083351478d90eb465b845b");
    $signPackage = $jssdk->GetSignPackage();
#-->
<div class="section" id="J_game">
    <div class="game-menu clearfix">
        <div class="game-menu-l">
            六六36关，第<span id="J_level_num">1</span>关&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;计时:<span class="game-res-num" id="J_count_time">0</span>秒
        </div>
    </div>
    <div id="J_game_main">
        <div class="game-main" id="J_game_m">
            <div class="game-fruits-img">
                <img id="J_fruits_img" />
            </div>
            <div class="game-stop-popup">?</div>
            <div class="game-bg"></div>
        </div>
        <div class="game-answer" id="J_answer"></div>
       <!-- <div class="game-help">
            <div class="ui-btn J_share_h">向朋友圈求助</div>
        </div>-->
    </div>
</div>
<div class="section" id="J_game_end">
    <div class="game-res">
        <p>哟喂,你用时<span class="game-res-num" id="J_fruits_time"></span>秒，你认出了<span class="game-res-num" id="J_fruits_num"></span>种水果，</p>
        <p style="font-size:22px;" id="J_game_over"></p>
        <div><div class="game-res-share ui-btn" onClick="playagain();">再玩一次</div></div>
		<div><div class="game-res-share ui-btn" onClick="dp_share();">炫耀我的战绩</div></div>
        <div class="game-res-arrow"></div>
    </div>
    <div class="game-res-gz">
        <p>离“东北老爷们”还有最后一<br />步，赶快去抢！</p>
        <div><a href="#" onClick="clickMore();" class="game-res-gz-btn ui-btn">抢爷们</a></div>
    </div>
</div>
<footer id="J_footer">
    <a href="#" onClick="clickMore();">关注百晓生</a>
</footer>

<div class="share-popup" id="J_share_popup" style="z-index:98;"></div>
<div class="share-popup-tips" id="J_share_popup_t" style="z-index:99;">
    <i></i>
    <span id="J_share_cont">分享到朋友圈</span>
</div>

<script type="text/javascript" src="js/zepto.min.js"></script>
<script type="text/javascript">
    (function(){



        //游戏状态 0:未开始 1:游戏中 2:游戏结束 3:游戏完成
        var game_status = 0;
        //游戏时间 毫秒
        var game_time = 60000;
        //时间
        var timer = "";
        //水果名称
        var fruits_name = "";
        //背景随机颜色
       // var bg_color = ["#9ff", "#ffc", "#cfc", "#f99", "#fcf", "#cff", "#fcc", "#98e2f1"];
        //默认背景颜色
        var def_bg_color = "#98e2f1";
        //问题等级
        var level = [0, 13, 38, 78, 194];
        //每关问题数，最后等级为所有问题
        var pre_level_num = 2;
        //每个关卡对应问题答案数
        var pre_level_ans_num = 4;
        //游戏等级
        var game_level = 0;
        //游戏关数
        var game_num = 1;
        //计时
        var count_time=0;
        //问题索引
        var ques_index = "";
        //图片索引
        var img_index = "";
        //分享
        var share_type = "游戏页好友分享";
        var share_type_p = "游戏页朋友圈分享";
        var share_desc = "这个水果叫什么？快来一起玩猜水果，抢东北老爷们！";
       // var share_url = "http://www.txl.site/games/fkcsg";
		//var mebtnopenurl = 'http://www.txl.site/games/';
       // var guanzhuurl ="http://mp.weixin.qq.com/s?__biz=MzA3NTM3NTc0MQ==&mid=214135147&idx=1&sn=ae695d9ebc8fd0c3ac2b8dee9f7bb7ea#rd";
       // var share_img = "http://www.txl.site/games/fkcsg/icon.png";

        $("#J_replay").on("tap", function(){
            game.start_game();

            $("#J_game_status").find("span").removeClass("stop");

            $("#J_game_status").attr("data-stop", 0).html("<span>暂停</span>");;
        });

        $("#J_continue_game").on("tap", function(){
            game.continue_game();

            $("#J_game_status").attr("data-stop", 0).html("<span>暂停</span>");
        });

        $("#J_game_status").on("tap", function(){
            var is_stop = $(this).attr("data-stop");
            if(is_stop == 1){
                game.continue_game();

                $(this).attr("data-stop", 0).html("<span>暂停</span>");
            }else{
                game.stop_game();

                $(this).attr("data-stop", 1).html("<span class='stop'>继续</span>");
            }
            
        });
       /* while(true){
            window.setTimeout("doUpdate(" + count_time + ")", i * 1000);
            count_time++;
        }*/

       /* $("#J_skip_share").on("tap", function(){
            $("#J_share_popup").show();
            $("#J_share_popup_t").show();
        });*/

      /*  $(".J_share_h").on("tap", function(){
            $("#J_share_popup").show();
            $("#J_share_popup_t").show();
            $("#J_share_cont").html("不认识它？<br />向朋友求助");

            game.stop_game();
        });*/

        $("#J_share_popup").on("tap", function(){
            $(this).hide();
            $("#J_share_popup_t").hide();
        });
        $("#J_share_popup_t").on("tap", function(){
            $(this).hide();
            $("#J_share_popup").hide();
        });

        var game = {
            question_list : [],
            ques_game_num : 1,
            ques_game_index : 0,
            right_num : 0,
            count_time:1,
            is_ansing : 0,
            //开始游戏
            start_game : function(){
                //初始化参数
                clearInterval(timer);
                game_time = 60000;
                game_status = 1;

                pre_level_num = 2;
                game_level = 0;
                level = [0, 13, 38, 78, 194];
                game_num = 1;
                game.ques_game_num = 1;
                game.question_list = [];
                fruits_name = [["桂圆","白牡丹","桃美人","黑法师", 37], ["佛手果","白牡丹","桃美人","黑法师", 67], ["椰子","白牡丹","桃美人","黑法师", 22], ["石榴","白牡丹","桃美人","黑法师", 9], ["菠萝莓", "白牡丹","桃美人","黑法师",82], ["枇杷","白牡丹","桃美人","黑法师", 14]];

                //是否为求助页面
              /*  var help_hash = window.location.hash.replace(/^#/, "");
                if(help_hash != "" && typeof fruits_name[help_hash] !== "undefined"){
                    var tmp_fruits_game = fruits_name[help_hash];
                    fruits_name[help_hash] = fruits_name[0];
                    fruits_name[0] = tmp_fruits_game;
                }*/

               // share_type = "游戏求助好友分享";
                //share_type_p = "游戏求助朋友圈分享";

                $("#J_level_num").html(game_num);

                game.lazy_load_img();

                game.select_ques();
                for(i=1;i<=100;i++) {
                    window.setTimeout("addTime(" + i + ")", i * 1000);
                }
                footer_bot();

            },
            //选问题
            select_ques : function(){
                //随机水果名
                //var fruits_name_rand = [38 : [,"桂圆"],"白牡丹","桃美人","黑法师","女心果","熊童实","姬星美人","吉娃娃果","黑王子","紫果丹","玉珠帘","宝石果","紫珍珠","碧玉莲","绒绢莓","唐莓","玉露黄","大和锦","姬麒麟","鬼切芦荟","吉祥果","帝释天荔枝","佛手掌","青鸾果","神风玉","天女簪","仙宝果","龙骨角","魔玉果","龙角果","紫龙角","巨龙角","阿修罗果","佛头瓜","铁锡柚","念珠瓜","七宝果","蛮鬼果","盘叶莲花枣","轮回莓","长生果","伽蓝果","钟鬼果","万物想桃","白蔓莲橙","碧雷鼓橙","龙树之眼","阿修罗果","九头龙柿","达摩卧桃","姬红小杏","橙黄松叶枣","初鹰之恋","千兔瓜","月兔瓜","丽春玉","百惠果","喷炎龙果","喷火龙果","豆瓣绿提子","趣蝶莲柠檬","短叶神刀果"];

               // var ans_name = [["桂圆","白牡丹","桃美人","黑法师", 38], ["佛手果","白牡丹","桃美人","黑法师", 68], ["椰子", 23], ["石榴", 10], ["菠萝莓", 83], ["枇杷", 15], ["海棠果", 14], ["金桔", 24], ["西番莲", 95], ["菠萝", 9], ["樱桃", 12], ["荸荠", 18], ["菇娘", 27], ["杨桃", 17], ["苹婆", 65], ["荔枝", 37], ["乌鲁库", 79], ["蓝莓", 69], ["山竹", 137], ["青梅", 32], ["槟榔子", 34], ["人参果", 98], ["桑葚", 108], ["红毛丹", 141], ["九月炸", 45], ["凉薯", 47], ["杨梅", 50], ["木瓜", 149], ["莲雾", 81], ["菠萝蜜", 87], ["五月茶", 91], ["柚子", 8], ["无花果", 28], ["蒲桃", 72], ["蔓越莓", 103], ["塞舌尔海椰子", 104]];
/*
                ans_name[game_num - 1] = ans_name[ans_name.length - 1];
                alert(ans_name);
                ans_name.pop();*/
                //判断当前的关数
                if(game_num <= pre_level_num){
                    var l = 0;
                }else{
					gameOver(game.right_num);
                    return false;
                }
                //随机数选问题
                var right_ques_i = Math.floor(Math.random() * fruits_name.length);
                var question=fruits_name[right_ques_i];
                fruits_name.splice(right_ques_i,1);
                //fruits_name.remove(right_ans_i);
                //var question = game.question_list.shift();

                game.lazy_load_img();

                img_index = question[question.length - 1] + 1;
                question.pop();

                $("#J_fruits_img").attr("src", "images/fruits/"+ img_index +".jpg");
                var ans_html = "";
                var right_ans_i = Math.floor(Math.random() * pre_level_ans_num);
               var right_ans = question.shift();

                //随机答案处理
                var new_question = question;
                //var is_fruits_name_rand = 0;
               /* for(var i = 0; i < pre_level_ans_num; i++){
                    var rand_ques = Math.ceil(Math.random() * 100);
                    if(i == right_ans_i){
                        new_question.push(right_ans);
                    }else if(rand_ques < 30 || is_fruits_name_rand == 1){
                        var rand_index = Math.floor(Math.random() * ans_name.length);
                        new_question.push(ans_name[rand_index][0]);

                        ans_name[rand_index] = ans_name[ans_name.length - 1];
                        ans_name.pop();
                    }else{
                        var rand_index = Math.floor(Math.random() * fruits_name_rand.length);
                        new_question.push(fruits_name_rand[rand_index]);

                        fruits_name_rand[rand_index] = fruits_name_rand[fruits_name_rand.length - 1];
                        fruits_name_rand.pop();

                        is_fruits_name_rand = 1;
                    }
                }*/
                //存放答案
               /* var rand_num = [1,2,1,3,1,3,2,2,3];
                for (var i = 0;i<pre_level_ans_num; i++)
                {
                    var rand_ques = Math.ceil(Math.random() * 10);
                    if (i == right_ans_i) {
                        new_question.push(question[0]);
                    }else{

                    }
                }*/
                for(var i = 0; i < pre_level_ans_num; i++){
                    if(i == right_ans_i){
                        ans_html += '<span class="game-an-btn ui-btn" data-ans="1">'+ right_ans +'<i></i></span>';
                    }else{
                        var rand_num = Math.floor(Math.random() * new_question.length);
                        ans_html += '<span class="game-an-btn ui-btn" data-ans="0">'+ new_question[rand_num] +'<i></i></span>';
                        new_question.splice(rand_num,1);
                    }
                }

                $("#J_answer").html(ans_html);
                //背景
               /* $("body").css({
                    background : bg_color[Math.floor(Math.random() * bg_color.length)]
                });*/


                footer_bot();
            },
            //回答
            answer : function(){
                $("#J_answer span").live("tap", function(){
                    if(game.is_ansing == 1){
                        return false;
                    }

                    game.is_ansing = 1;

                    var is_ans = $(this).attr("data-ans");
                    var that = $(this);
                    if(is_ans == 1){

                        $(this).addClass("right-btn");

                        game.right_num++;
                    }else{
                        $(this).addClass("error-btn");
                        $("#J_answer span").each(function(){
                            if( $(this).attr("data-ans") == 1){
                                $(this).addClass("right-btn");
                                return false;
                            }
                        });
                    }

                    var ans_timer = setTimeout(function(){
                        game_num++;

                        $("#J_level_num").html(game_num);
                        
                        game.select_ques();

                        game.is_ansing = 0;
                    }, 500);

                });
            },
            //图片预加载
            lazy_load_img : function(){
                var laod_img_num = 6;

                if(game.question_list.length < laod_img_num && game_level < 36){
                    var len = laod_img_num - game.question_list.length;

                    for(var i = 0; i < len; i++){

                        //问题随机数
                        var question = fruits_name[game_level];

                        game.question_list.push(question);
                        game.load_img("images/fruits/"+ (question[question.length - 1] + 1) +".jpg");

                        game_level++;
                    }
                }
            },
            load_img : function(url, cb){
                var img = "";

                delete img.onload;

                img = new Image();
                
                img.onload = function(){
                    (function(img){
                        cb && cb(img);
                    })(img);
                    
                    img.onload = null;
                };

                img.src = url;

            }
        };

        game.start_game();
        game.answer();

        //底部自适应
        function footer_bot(){

            $("#J_footer").css({
                position : "static"
            });

            var win_height = $(window).height();
            var body_height = $("body").height();

            if(win_height > body_height - 30){
                $("#J_footer").css({
                    position : "absolute"
                });
            }
        }
        footer_bot();

        $(window).on("resize", function(){
            footer_bot();
        });

    })();
	//称号
   // var fruits_nick_name = ["水果爱好者", "水果学霸", "水果学者", "水果学家", "水果大师"];
	function gameOver(game_num){
		$('#J_game').hide();
		$('#J_game_end').show();

        var game_time = $('#J_count_time').text();
        $("#J_fruits_num").html(game_num);
		$("#J_fruits_time").html(game_time);
        /*$.get('',{'game_num':game_num,'game_time':game_time},function(data){
            $("#J_game_over").html("击败了全国"+data+"用户");
        })*/
		dp_submitScore(game_num,share_desc);
	}
	function playagain(){
		window.location.href=window.location.href;
	}
    //计时
    function addTime(num) {
        $('#J_count_time').html(num);

    }
</script>
<script language=javascript>
        var game9g = new Game9G("fkcsg");
        game9g.shareData.title = "疯狂猜水果";
        game9g.shareData.content = "疯狂猜水果";
		function goHome(){
			window.location=game9g.homeurl;
		}
		function clickMore(){
			 if((window.location+"").indexOf("f=zf",1)>0){
			 	window.location = game9g.gzurl;
			  }
			  else{
			 	goHome();
			  }
		}
		/*function dp_share(){
			game9g.share();
		}*/
		function dp_Ranking(){
			window.location=game9g.homeurl;
		}

		function showAd(){
		}
		function hideAd(){
		}
		function dp_submitScore(score,stitle){
			game9g.score =parseInt(score);
			game9g.scoreName = "猜中"+score+"种水果";
			game9g.shareData.title = stitle+"";
			
		}
		</script>
		<div style="display: none;">
			<script type="text/javascript">
			game9g.utils.tongji();
			</script>
		</div>
<script>
    function dp_share() {
        wx.config({
            debug: false,
            appId: '<?php echo $signPackage["appId"];?>',
            timestamp: "<?php echo $signPackage['timestamp'];?>",
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage']
            // 所有要调用的 API 都要加到这个列表中
        });
        wx.ready(function () {
            wx.onMenuShareTimeline({
              /*  title: '排名第一', // 111
                link: 'http://ceshi.chejiache.com/weixin/askanswer/index.php', // ''
                imgUrl: 'http://demo.open.weixin.qq.com/jssdk/images/p2166127561.jpg', // 分享图标
                success: function () {

                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数

                }*/
                WeixinJSBridge.invoke('shareTimeline',{
                    "img_url":'http://demo.open.weixin.qq.com/jssdk/images/p2166127561.jpg',
                    //"img_width":"640",
                    //"img_height":"640",
                    "link":'http://ceshi.chejiache.com/weixin/askanswer/index.php',
                    "desc": '111111',
                    "title":'111'
            });
            wx.onMenuShareAppMessage({
                title: '', // 分享标题
                desc: '', // 分享描述
                link: '', // 分享链接
                imgUrl: '', // 分享图标
                type: '', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });






        })
    }
</script>
<!--百度统计 //
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?31376ef66ea764a8f65bc01a1c4d3966";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>-->
</body>
</html>

