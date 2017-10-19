<!doctype html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>最强大脑</title>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link type="text/css" href="/phone/api/askanswer/css/style.css" rel="stylesheet">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="browsermode" content="application"/>
    <script>
            localStorage.removeItem('besttime');
            if(localStorage.getItem('besttime')){

                window.location.href='http://www.aitto.net/phone/scan/maze?usetime='+localStorage.getItem('besttime');

            }
    </script>
    <script src="/phone/api/askanswer/js/game9g.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<style>
#J_game_end{display: none;}
/*弹出框*/#red-big-btn{width: 70%;margin: 0 auto;margin-top: 15px;}
#red-big-btn a{display: block;height: 38px;padding: 3px 1em 0;font: 18px/38px 'microsoft yahei';color: #fff;text-align: center;background-color: #fb9125;border-radius: 3px;border: 1px solid #e08821;box-shadow: inset 0 1px 0 0 #fcad5c;}
#red-big-btn a:link, a:visited{color: #fff;text-decoration: none;outline: none;}
.popBox{position: fixed;display: none;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(0,0,0,.6);z-index: 999;}
.popCon{position: relative;margin: 40% auto 0 auto;text-align: center;padding: 20px;width: 80%;border-radius: 5px;background-color: #fff;}
.popTit1{height: 90px;}
.popTit1 p{line-height: 30px;font-size: 16px;}
.pop-bottom{height: 40px;width: 100%;left: 0;-moz-border-radius: 0 0 5px 5px;-webkit-border-radius: 0 0 5px 5px;border-radius: 0 0 5px 5px;line-height: 40px;z-index: 999;border-top: 1px solid #ccc;position: absolute;bottom: 0;}
.pop-bottom a{display: inline-block;color: #fff;text-decoration: none;text-align: center;}
.pop-bottom .cancel{width: 50%;background: #3bb012;-moz-border-radius: 0 0 5px 0;-webkit-border-radius: 0 0 5px 0;border-radius: 0 0 5px 0;}
.pop-bottom .confirm{width: 50%;background: #eb7200;-moz-border-radius: 0 0 0 5px;-webkit-border-radius: 0 0 0 5px;border-radius: 0 0 0 5px;}
</style>
    <script type="text/javascript">
        var SITEURL = "{URL::site()}";
    </script>
    </head>
    <body>
<div class="section" id="J_game">
  <div class="game-menu clearfix">
    <div class="game-menu-l">
      <p class="game-hd">共6题，第<span id="J_level_num">1</span>题</p>
      <p class="game-time">计时：<span class="djs" id="J_count_time">0</span>秒</p>
      <div class="clear"></div>
    </div>
  </div>
  <div id="J_game_main">
    <div class="game-main" id="J_game_m">
      <div class="game-fruits-img" style="display:none;"> <img id="J_fruits_img" /> </div>
      
      
<div class="answer">
  <div class="answer-bosi"><img src="/phone/api/askanswer/images/boshi.png"></div>
  <div class="answer-box"><img src="/phone/api/askanswer/images/tiban.png"></div>
  <div class="answer-txt">
    <div class="answer-pane" id="J_content">最早采用中医切脉诊断方法医病的是以下哪位神医？</div>
  </div>
</div>
     
      <div class="game-stop-popup">?</div>
      <div class="game-bg"></div>
    </div>
    <input type="hidden" id="J_time" value="1"/>
    <input type="hidden" id="right_num" value="0"/>
    <div class="game-answer" id="J_answer"></div>
    <!-- <div class="game-help">
           <div class="ui-btn J_share_h">向朋友圈求助</div>
         </div>
    --> 
  </div>
</div>



<div class="section" id="J_game_end">
  <div class="game-res">
    <p class="top">挑战用时：<span class="game-res-num" id="J_fruits_time"></span>秒，答对了<span class="game-res-num" id="J_fruits_num"></span>题，</p>
    <p style="font-size:22px;" id="J_game_over"></p>
    <div id="playagain">
       <div class="game-res-share"><img src="/phone/api/askanswer/images/cuo.png">
       <img src="/phone/api/askanswer/images/cuop.png" style="width:60%"></div>
      <div class="game-res-share" onClick="playagain();"><img src="/phone/api/askanswer/images/agin.png" style="width:80%"></div>
    </div>
    <div id="ok" style="display: none">
      <div class="game-res-share ui-btn">闯关成功</div>
    </div>    
  </div>
</div>



<footer style="position: fixed; display:none;" id="J_footer" class="footer">
  <ul>
    <li class="width25"><a href="http://www.aitto.net/phone/tuan/book/id/3?test="<? echo time();?>>答题</a></li>
    <li class="width25"><a href="http://www.aitto.net/phone/tuan/all">排行榜</a></li>
    <li class="width25"><a href="http://www.aitto.net/phone/tuan" >我的成绩</a></li>
    <li class="width25"><a href="http://mp.weixin.qq.com/s?__biz=MzIxOTIzODM0Ng==&mid=100000309&idx=1&sn=1ff1ec8ea0861d3e4c6781be3d980e5b#rd">活动奖品</a></li>
  </ul>
</footer>
<div class="share-popup" id="J_share_popup" style="z-index:98;"></div>
<div class="share-popup-tips" id="J_share_popup_t" style="z-index:99;"> <i></i> <span id="J_share_cont">分享到朋友圈</span> </div>



<script type="text/javascript" src="/phone/api/askanswer/js/zepto.min.js"></script> 
<script type="text/javascript">
    //计时
    var count_time=0;

    (function(){
        window.dd='111';

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
        var pre_level_num = 10;
        //每个关卡对应问题答案数
        var pre_level_ans_num = 4;
        //游戏等级
        var game_level = 0;
        //游戏关数
        var game_num = 1;

        //问题索引
        var ques_index = "";
        //图片索引
        var img_index = "";

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
            num : 0,
            count_time:1,
            is_ansing : 0,
            //开始游戏
            start_game : function(){
                //初始化参数
                clearInterval(timer);
                game_time = 60000;
                game_status = 1;
                pre_level_num = 6;
                game_level = 0;
                level = [0, 13, 38, 78, 194];
                game_num = 1;
                game.ques_game_num = 1;
                game.question_list = [];
                fruits_name = [["25+，船长资历要求","41","109","没有答案", 1,'一条船上有75头牛，34头羊，请问船长几岁？'], ["9分米","10分米","12分米","14分米", 2,'正方形周长是多少分米？'], ["97元","179元","100元","118元", 3,'王老板损失了多少钱?'], ["9", "7","8","17", 4,'队里总共有几个人?'], ["7", "6","5","2",5,'5+2不大于几?'],
                    ["22","23","27","30", 6,'一共多少个三角形?'],['姑姑','小姨','嫂子','小三',7,'图中的女生身份是?'],['李白','低头思故乡','举头望明月','疑是地上霜',8,'床前明月光，是谁写的?'],['横行霸道','七手八脚','好吃不贵','人人喊打',9,'螃蟹过街______，填写成语做歇后语?'],['山','天','学','班',10,'添字组词'],['27','81','9','三个和尚没水喝',11,'三个和尚三天喝三桶水，九个和尚九天喝多少水？'],['87','89','97','67',12,'车位是几号?'],
                    ['拨乱反正','杂乱无章','乱七八糟','正大光明',13,'看图猜成语？'],['1','25','15','30',14,'5=？'],
                    ['46','61','65','44',15,'车上一开始有多少人?']];

                //是否为求助页面
                // share_type = "游戏求助好友分享";
                //share_type_p = "游戏求助朋友圈分享";
                if (pre_level_num>=game_num) {
                    $("#J_level_num").html(game_num);
                }
                game.lazy_load_img();
                game.select_ques();
                //footer_bot();
            },
            //选问题
            select_ques : function(){
                //判断当前的关数
                if(game_num <= pre_level_num){
                    var l = 0;
                }else{
                    $("#J_time").val(1);

                    gameOver(game.right_num);

                    return false;
                }

                //随机数选问题
                var right_ques_i = Math.floor(Math.random() * fruits_name.length);
                var question=fruits_name[right_ques_i];
                fruits_name.splice(right_ques_i,1);
                game.lazy_load_img();

                img_index = question[question.length - 2] ;
                $("#J_content").html(question[5]);
                question.pop();

               // $("#J_fruits_img").attr("src", "/phone/api/askanswer/images/61/"+ img_index +".jpg");

                var ans_html = "";
                var right_ans_i = Math.floor(Math.random() * pre_level_ans_num);
                var right_ans = question.shift();


                //随机答案处理
                var new_question = [question[0],question[1],question[2]];
                for(var i = 0; i < pre_level_ans_num; i++){
                    if(i == 0){
                        zimu = 'A';
                    } else if(i == 1){
                        zimu = 'B';
                    } else if(i == 2){
                        zimu = 'C';
                    } else if(i == 3){
                        zimu = 'D';
                    }
                    if(i == right_ans_i){
                        ans_html += '<span class="game-btn"><span class="game-an-btn ui-btn" data-ans="1">'+ right_ans +'</span><i>'+zimu+'</i></span>';
                    }else{
                        var rand_num = Math.floor(Math.random() * new_question.length);
                        ans_html += '<span class="game-btn"><span class="game-an-btn ui-btn" data-ans="0">'+ new_question[rand_num] +'</span><i>'+zimu+'</i></span>';
                        new_question.splice(rand_num,1);
                    }
                }
                $("#J_answer").html(ans_html);
               // footer_bot();
            },
            //回答
            answer : function(){
                $("#J_answer span").live("tap", function(){
                    if(game.is_ansing == 1){
                        return false;
                    }
                    if ($("#J_time").val()==1)
                    {
                        game.count_time();
                        $("#J_time").val(2);
                    }

                    //count_time();
                    game.is_ansing = 1;

                    var is_ans = $(this).attr("data-ans");
                    var that = $(this);
                    if(is_ans == 1){
                        $(this).addClass("right-btn");
                        game.right_num++;
                        $('#right_num').val(game.right_num);
                    }else{
                        $(this).addClass("error-btn");

                        $("#J_time").val(1);

                        gameOver(game.right_num);

                        return false;
                       // window.location.href='http://www.aitto.net/phone/tuan?usetime=0&rightnum=0&error=1';
/*                        $("#J_answer span").each(function(){
                            if( $(this).attr("data-ans") == 1){
                                $(this).addClass("right-btn");
                                return false;
                            }
                        });*/
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
                        //game.load_img("images/scenery/"+ (question[question.length - 2] ) +".jpg");

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

            },
            count_time : function()
            {

                for (var i=1;i<=6000;i++) {
                    window.setTimeout("addTime("+i+")",i*10);
                }
                game.num++;
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
        //footer_bot();

        $(window).on("resize", function(){
           // footer_bot();
        });


    })();
    //称号
    // var fruits_nick_name = ["水果爱好者", "水果学霸", "水果学者", "水果学家", "水果大师"];
    function gameOver(game_num){


        var game_time = $('#J_count_time').text();

        if(game_time*100<6000&&game_num==6){

            localStorage.setItem('besttime',game_time);
            window.location.href='http://www.aitto.net/phone/scan/maze?usetime='+game_time*100+'&rightnum='+game_num;

        }else{
            $('#J_game').hide();
            $('#J_game_end').show();
            $("#J_fruits_num").html(game_num);
            $("#J_fruits_time").html(game_time);
        }
        /*$.get('',{'game_num':game_num,'game_time':game_time},function(data){

         })*/
        //$("#J_game_over").html("击败了全国80%用户");
       // dp_submitScore(game_num,"好啊")
        window.dd='haohao';

    }

    function playagain(){
        window.location.href=window.location.href+"?time="+Math.random()*10;
    }
    function overgame(){
        $("#J_time").val(1);
        var game_time = $('#J_count_time').text();
        var right_num = $('#right_num').val();
        //gameOver(game.right_num);
        window.location.href='http://www.aitto.net/phone/tuan?usetime='+game_time+'&rightnum='+right_num;
        return false;
    }
    //计时
    function addTime(num) {

        var s=(num/100).toFixed(2);
        $('#J_count_time').html(s);
        if(num>=6000){

            $("#J_time").val(1);

            gameOver($("#right_num").val());

            return false;
        }

    }


//    window.addEventListener('popstate', function(e){
//        if (history.state){
//            var state = e.state;
//            //do something(state.url, state.title);
//            console.log(state+"sssssss");
//        }
//    }, false);
</script> 
<script language=javascript>
    var game9g = new Game9G("fkcsg");
    //game9g.shareData.title = "疯狂猜水果";
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
    function dp_share(){
        game9g.share();
    }
    function dp_Ranking(){
        window.location=game9g.homeurl;
    }

    function showAd(){
    }
    function hideAd(){
    }
    function dp_submitScore(game_num,stitle){
        game9g.score =parseInt(game_num);
        game9g.scoreName = "猜中"+game_num+"题";
        game9g.shareData.title = stitle+"";

    }
</script> 
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> 
{php echo Common::js('jquery.min.js');} 

<script>
//背景透明弹出框
$(document).ready(function(){	
	$('.popClick').click(function(){		
		$('.popBox').show();			
		});			
	$('.cancel').click(function(){		
		$('.popBox').hide();	
		});	
});
</script> 
<!-- 遮罩弹出框 开始 -->
<div id="red-big-btn" style="display:none;"><a class="popClick" href="javascript:">结束答题,保存当前成绩</a></div>
<div class="popBox">
  <div class="popCon">
    <div class="popTit1">
      <p>结束答题,保存当前成绩</p>
      <p>继续答题,若答错当次成绩将作废</p>
    </div>
    <div class="pop-bottom"><a href="#" class="confirm">
      <div style="border-right: 1px solid #ccc;"  onClick="overgame();">结束答题</div>
      </a><a href="#" class="cancel">继续答题</a></div>
  </div>
</div>
<!-- 遮罩弹出框 结束 -->
</body>
</html>
