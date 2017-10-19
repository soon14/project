<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="/min/?f=/res/js/jquery.min.js"></script>
    <style>
        .span{
            display: inline-block;
            width: 11px;
            height: 12px;
            margin: 0px 5px;
        }
        li{
            list-style: none;
        }
        .a{
            text-decoration: none;
            border: 1px #ccc solid;
            background: #43AEE4;
            color: white;
            padding: 3px 5px;
        }
    </style>
</head>

<body >
<!--右侧内容区-->
<?php  //var_dump($info);?>

<canvas id="bingtu"  width="224" height="130" >
    不支持HTML5 ，请升级或者更换浏览器
</canvas>
<ul>
    <span style=""> 订单总人数：{$allNum}</span><br/>
    <span style="font-size: 11px">&nbsp;&nbsp;&nbsp;*:订单为付款成功或者 交易完成</span>
    <br/>
    <li><span class="span" style=" background-color: #999999;"></span>成人人数：{$audltnum}</li>
    <li><span class="span" style=" background-color: #336799;"></span>儿童人数:{$childnum}</li>
    <li><span class="span" style=" background-color: #43AEE4;"></span>老人人数:{$oldnum}</li>

</ul>
<a href="javascript:;" onclick="exportLine({$lineid})" class="a">导出</a>
</body>
<script>

    var color = ["#999999","#43AEE4","#336799"];
    var data = [];
        data[0]="{$audltnum}";
        data[1]="{$oldnum}";
        data[2]="{$childnum}";
    var allNum ="{$allNum}";
    /*
        data  分别 代表大人老人小孩
     */

    function drawCircle(){
        var canvas = document.getElementById("bingtu");
        var ctx = canvas.getContext("2d");
        var startPoint= 1.5 * Math.PI;
        for(var i=0;i<data.length;i++){
            ctx.fillStyle = color[i];
            ctx.strokeStyle = color[i];
            ctx.beginPath();
            ctx.moveTo(112,65);
            ctx.arc(112,65,65,startPoint,startPoint-Math.PI*2*(data[i]/allNum),true);
            ctx.fill();
            ctx.stroke();
            startPoint -= Math.PI*2*(data[i]/allNum);
        }
    }
    drawCircle();
    function exportLine(lineid){

        var  url = '/newtravel/line/export2?lineid='+lineid;
        window.open(url);

    }
</script>
</html>

