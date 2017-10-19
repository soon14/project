<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title></title>
  {Common::css('mitao/bootstrap.css')}
  {Common::css('mitao/public.css')}
  {Common::css('mitao/mitao_person.css')}
</head>
<body class="pagePerson-collection">
<!-- 个人中心 头部 -->
<header class="ui-page-header">
  <a class="ui-page-del" href="#"><span>删除</span></a>
  <h1>我的收藏</h1>
  <a class="ui-page-back" href="javascript:window.history.go(-1)"></a> </header>
<section class="ui-collection-list">

  {loop $info $v}
  <div class="actlist">
    <div class="actbox_small">
    <span class="Choice" style="display:none;" data-id="{$v['aid']}">

    </span>
    <img src="{$v['litpic']}">
    <h2>{$v['title']}</h2>
    <p class="c9">{$v['sellpoint']}</p>
    <div class="price"><i class="paymoney">{$v['price']}</i><i class="dw">起</i><span class="leiji">[累计{$v['sellnum']}人购买]</span></div>
    </div>
  </div>
  {/loop}
</section>
<a class="bot-btn evaluate-btn" style="display: none">删除</a>
</body>
</html>
{Common::js('mitao/jquery-1.11.3.min.js,')}
{Common::js('layer_mobile/layer.js')}
<script>
  $(".ui-page-del").click(function(){
     $(".Choice").toggle();
     $(".evaluate-btn").toggle();
  })
  $(".Choice").click(function(){
    $(this).toggleClass("Choice-on");
  })
  $(".bot-btn").click(function(){

          var productaid=[];
          $(".Choice").each(function(){

                var s = $(this).hasClass("Choice-on");
                 if(s){
                   productaid.push($(this).attr("data-id"));
                 }
          })
       if(productaid.length==''){

           console.log("请选择产品");
           return false;
       }else{
           $.ajax({
               type:"post",
               url : '/phone/mitao/delmylike',
               data:{productaid:productaid},
               dataType:'json',
               success: function (data){

                   layer.open({
                       content: data.msg,
                       skin: 'msg',
                       time: 2,
                       success: function () {
                           window.location.reload();
                       }

                   });

               }
           });
       }


  });
</script>