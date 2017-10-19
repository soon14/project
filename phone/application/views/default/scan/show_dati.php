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
            //localStorage.removeItem('besttime');
            if(localStorage.getItem('besttime6')){

                window.location.href='http://www.aitto.net/phone/scan/maze?usetime='+localStorage.getItem('besttime6');

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
    <div class="answer-pane" id="J_content"></div>
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
  </div>
</div>



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
                fruits_name = [["25","24","26","27", 1,'国学走廊的展板上一共向我们介绍了几位历史名人？'],["祖逖、刘琨","曹雪芹、霍元甲","卢照邻、韩愈","郦道元、李春", 2,'闻鸡起舞这个典故源自于哪两个名人？'],["李春","鲁班","张果老","李杲", 3,'赵州石桥（又名安济桥）是谁主持修建的？'],["刘禹锡", "范仲淹","韩愈","卢照邻", 4,'“沉舟侧畔千帆过，病树前头万木春”是谁的诗句？'],["数学家、天文学家", "地理学家、散文家","政治家、改革家 ","教育家、思想家",5,'祖冲之，我国南北朝时期著名的____、____？'],["《水经注》","《天工开物》","《汉书地理志》","《元和郡县图志》", 6,'作为北魏著名的地理学家、散文家，郦道元曾经撰写过以下哪部名著？'],['赵匡胤','李渊','曹彬','刘备',7,'下列哪一位历史人物为宋朝开国皇帝？'],['扁鹊','李杲','李冶','华佗',8,'最早采用中医切脉诊断方法医病的是以下哪位神医？'],['赵佗——今河北灵寿人','赵武灵王——推行胡服骑射','刘备——三国时期蜀汉开国皇帝','魏征——唐朝政治家、著名谏臣',9,'以下说法有误的是哪一项？'],['荆轲','赵云','李渊','卢照邻',10,'下列哪位历史名人不是河北人？'],];

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

    })();
    //称号
 function gameOver(game_num){


        var game_time = $('#J_count_time').text();

        if(game_time*100<6000&&game_num==6){

            localStorage.setItem('besttime6',game_time);
            window.location.href='http://www.aitto.net/phone/scan/maze?usetime='+game_time*100+'&rightnum='+game_num;

        }else{
            $('#J_game').hide();
            $('#J_game_end').show();
            $("#J_fruits_num").html(game_num);
            $("#J_fruits_time").html(game_time);
        }

    }

    function playagain(){
        window.location.href=window.location.href+"?time="+Math.random()*10;
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

</script> 

</body>
</html>
