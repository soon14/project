<?php
include_once "./jssdk.php";
//判断是否关注
if(empty($_COOKIE['openid']) || empty($_SESSION['member'])){
    var_dump($_COOKIE);
    var_dump($_SESSION);exit;
    header('location:http://www.aitto.net/phone/tuan/book/id/3');
    exit();
}
$jssdk = new JSSDK("wxdf8497303505ae0d", "ed95f4a2529b5b39f886e3df0e0511bd");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>答题赢大奖</title>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link type="text/css" href="./styles/style.css" rel="stylesheet">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="browsermode" content="application"/>
	<link rel="stylesheet" type="text/css" href="css/game9g1.css">
    <script src="js/game9g.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<style>
		#J_game_end{
			display:none;
		}
	</style>
</head>
<body>

<div class="section" id="J_game">
    <div class="game-menu clearfix">
        <div class="game-menu-l">
            <p class="left">共10题，第<span id="J_level_num">1</span>题</p>
            <p class="right">计时：<span class="djs" id="J_count_time">0</span>秒</p>
            <div class="clear"></div>
        </div>
    </div>
    <div id="J_game_main">
        <div class="game-main" id="J_game_m">
            <div class="game-fruits-img">
                <img id="J_fruits_img" />
            </div>
            <p class="wt" id="J_content"> </p>
            <div class="game-stop-popup">?</div>
            <div class="game-bg"></div>
        </div>
        <input type="hidden" id="J_time" value="1"/>
        <div class="game-answer" id="J_answer"></div>
<!--        <div class="game-help">
            <div class="ui-btn J_share_h">向朋友圈求助</div>
        </div>-->
    </div>
</div>
<div class="section" id="J_game_end">
    <div class="game-res">
        <p>哟喂，你用时<span class="game-res-num" id="J_fruits_time"></span>秒，猜对了<span class="game-res-num" id="J_fruits_num"></span>种水果，</p>
        <p style="font-size:22px;" id="J_game_over"></p>
        <div><div class="game-res-share ui-btn" onClick="playagain();">再玩一次</div></div>
		<div><div class="game-res-share ui-btn" onClick="dp_share();">炫耀我的战绩</div></div>
        <div class="game-res-arrow"></div>
    </div>
</div>
<footer id="J_footer" class="footer">
    <ul>
        <li class="width33"><a href="http://www.aitto.net/phone/tuan/book/id/3">竞猜</a>
        <li class="width34"><a href="http://ceshi.chejiache.com/index.php?m=weixin&c=Huodong&a=getResultList">排行榜</a><>
        <li class="width33"><a href="http://ceshi.chejiache.com/index.php?m=weixin&c=Huodong&a=showResult">我的成绩</a><>
    </ul>
</footer>

<div class="share-popup" id="J_share_popup" style="z-index:98;"></div>
<div class="share-popup-tips" id="J_share_popup_t" style="z-index:99;">
    <i></i>
    <span id="J_share_cont">分享到朋友圈</span>
</div>

<script type="text/javascript" src="js/zepto.min.js"></script>
<script type="text/javascript">
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

                pre_level_num = 10;
                game_level = 0;
                level = [0, 13, 38, 78, 194];
                game_num = 1;
                game.ques_game_num = 1;
                game.question_list = [];
                fruits_name = [["赵佗公园","王佗公园","张佗公园","李佗公园", 1,'这是哪个公园?'], ["清凉山滑雪场","秦皇古道滑雪场","太平河滑雪场","西柏坡滑雪场", 2,'这是哪个滑雪场？'], ["河北师范大学","河北科技大学","河北工业大学","河北大学", 3,'总理在石家庄哪所大学?'], ["八匹马","九匹马","五匹马","数不清", 4,'雕像中有几匹马?'], ["抱犊寨", "五岳寨","清风寨","风流寨",5,'图中景点位于?'],
                    ["新华路中华大街","振岗路谈固西街","光华路友谊大街","中山路红旗大街", 6,'图中建筑位于哪个路口?'],['西柏坡','北柏坡','东柏坡','南柏坡',7,'伟人雕像位于?'],['万达广场','千达广场','百达广场','益达广场',8,'图中建筑群为?'],['1路','3路','5路','7路',9,'谈固到西王的公交车是?'],['长安区政府','裕华区政府','桥东区政府','新华区政府',10,'图中建筑是?'],['开元大楼','万元大楼','关元大楼','天元大楼',11,'图中右侧在建建筑是？'],
                ['东方巨龟苑','东方大龟苑','东方大鳖苑','东方巨鳖苑',12,'图中景点位于？'],['南三条','北三条','听三条','胡三条',13,'图中这座烂尾楼在？'],['泰华街','中华大街','水源街','友谊大街',14,'石家庄北站西邻？'],['黄石公园','许亭水库','草原天路','九龙潭',15,'"一起流年"还没去过?'],['苍岩山','仓岩山','沧岩山','舱岩山',16,'图中建筑位于?'],['2000','2011','1969','2002',17,'石家庄电视塔建成于？'],['2281米','8848米','520米','8611米',18,'驼梁顶峰海拔高度?'],
                ['天桂山','国仕山','云台山','双龙山',19,'素有"北方桂林"之誉?'],['2012-12-21','2014-12-12','2013-12-22','2010-12-20',20,'石家庄老火车站停用于？'],['植物园','水上公园','元南公园','长安公园',21,'图中景色位于?'],['24','18','9','53',22,'北国超市在石家庄市内共有多少家店?'],['石家庄规划馆','石家庄博物馆','石家庄美术馆','石家庄图书馆',23,'这座建筑是？'],['法治(西清)公园','东明桥','月季公园','友谊公园',24,'图中景点位于？'],['叶子广场','解放广场','筷子广场','腰子广场',25,'此地位于'],
                ['动物园','植物园','创业园','大团园',26,'这是在哪?'],['水上公园','明珠公园','植物园','平安公园',27,'此图摄于?'],['柏林禅寺','少林寺','隆兴寺','毗卢寺',28,'这座建筑位于？'],['天山海世界','空中花园','怀特大海乐园','加勒比海滩',29,'图中娱乐场所为？'],['世纪公园','圆明园','长安公园','北海公园',30,'这座雕像位于?'],['苏波','苏轼','苏永康','苏亚雷斯',31,'"一起流年”团队成员'],['草原天路','草原地路','森林天路','森林地路',32,'“一起流年”往期自驾活动'],['狮身人面像','湿身人面像','失身人面像','尸身人面像',33,'石家庄山前大道影视基地'],
                ['梨花','荷花','兰花','梅花',34,'赵县'],['蟠龙湖','潘龙湖','盘龙湖','槃龙湖',35,'莲花岛、长岛、芦花岛三大岛屿'],['赵州桥','赵洲桥','赵周桥','赵粥桥',36,'李春'],['吕家村','故宫','避暑山庄','孔庙',37,'图中不是中国三大古建筑群'],['中南街','钟宏街','青城路','开塞路',38,'图中正对的街道'],['阳光大酒店','星光大酒店','月光大酒店','溜光大酒店',39,'“一起流年”团队老窝'],['4楼','5楼','1楼','2楼',40,'水街位于金正·海悦天地的'],['13个','6个','30个','4个',41,'石家庄新火车站站台数多少？'],['星辰广场','人民广场','天安门广场','民心广场',42,'主题不锈钢雕塑“银河”位于？'],['滹沱河','流沙河','民心河','太平河',43,'照片摄于'],
                ['正东路','圆明路','裕华路','方北路',44,'石家庄市实验小学位于'],['天客隆','永辉超市','保龙仓','北国超市',45,'位于裕彤体育场下面的超市是'],['永昌','华夏幸福','宏运','建业',46,'2015赛季主场在石家庄的中超球队是'],['诚诚','林依轮','牛莉','范玮琪',47,'下列名人祖籍不在石家庄的是'],['沕沕水','忽忽水','淴淴水','勿勿水',48,'图中景区有点亮新中国第一盏明灯的发电站'],['仙台山','云台山','佛光山','藤龙山',49,'全国十大红叶风景区之一'],['146万册','3119万册','1100万册','60万册',50,'河北省图书馆现有藏书']];

                //是否为求助页面
                // share_type = "游戏求助好友分享";
                //share_type_p = "游戏求助朋友圈分享";
                if (pre_level_num>=game_num) {

                    $("#J_level_num").html(game_num);
                }

                game.lazy_load_img();

                game.select_ques();

                footer_bot();

            },
            //选问题
            select_ques : function(){
                //判断当前的关数
                if(game_num <= pre_level_num){
                    var l = 0;
                }else{
                    var game_time = $('#J_count_time').text();
                    //gameOver(game.right_num);
                   //window.location.href='http://ceshi.chejiache.com/index.php?m=weixin&c=Huodong&a=showResult&usetime='+game_time+'&rightnum='+game.right_num;
                    $.post('http://www.aitto.net/phone/tuan/show',{'usetime':game_time,'rightnum':game.right_num},function(data){
                        alert(data);
                    })
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

                $("#J_fruits_img").attr("src", "images/scenery/"+ img_index +".jpg");

                var ans_html = "";
                var right_ans_i = Math.floor(Math.random() * pre_level_ans_num);
                var right_ans = question.shift();


                //随机答案处理
                var new_question = [question[0],question[1],question[2]];
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
                footer_bot();
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
                        game.load_img("images/scenery/"+ (question[question.length - 2] ) +".jpg");

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

                for (var i=1;i<=18000;i++) {
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

         })*/
        $("#J_game_over").html("击败了全国80%用户");
        dp_submitScore(game_num,"好啊")
        window.dd='haohao';

    }

    function playagain(){
        window.location.href=window.location.href;
    }
    //计时
    function addTime(num) {
        var s=(num/100).toFixed(2);
        $('#J_count_time').html(s);

    }
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
<div style="display: none;">
    <script type="text/javascript">
        game9g.utils.tongji();
    </script>
</div>
<script>

    wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: "<?php echo $signPackage['timestamp'];?>",
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature:'<?php echo $signPackage["signature"];?>',
        jsApiList:['onMenuShareTimeline','onMenuShareAppMessage']
        // 所有要调用的 API 都要加到这个列表中
    });
    wx.ready(function(){
        wx.onMenuShareTimeline({
            title: "我刚刚"+window.dd+",快来玩玩吧",// 111
            link: 'http://ceshi.chejiache.com/weixin/askanswer/index.php', // ''
            imgUrl: 'http://demo.open.weixin.qq.com/jssdk/images/p2166127561.jpg', // 分享图标
            success: function () {

            },
            cancel: function () {
                // 用户取消分享后执行的回调函数

            }
        });
        wx.onMenuShareAppMessage({
            title: '111', // 分享标题
            desc: '22222', // 分享描述
            link: 'http://ceshi.chejiache.com/weixin/askanswer/index.php', // 分享链接
            imgUrl: 'http://demo.open.weixin.qq.com/jssdk/images/p2166127561.jpg', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });


    })
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

