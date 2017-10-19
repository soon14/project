<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>站点名称</title>
  {Common::css('yearold/bootstrap-min.css,yearold/layout.css')}
</head>
<body>

<header><img src="/phone/public/images/yearold/adv-head.jpg" width="100%"></header>

<section>
<div class="container-fluid">


  <!-- 评论 开始 -->
  <div class="comment-items">
      <ul class="comment-hd">
        <li class="me">
          <div class="user-img"><img src="{$info['headimgurl']}" ></div>
          <div class="text-box"><span class="comment-num"></span> <span class="comment-user">{$info['nickname']}</span><span class="comments-data">发表于{$info['addtime']}</span> <span class="comment-text">{$info['content']}</span> </div>
        </li>  
      </ul>  
      
      <ul class="comment-bd" id="result_list">

      </ul>

  </div>
  <!-- 评论 结束 -->
  <input type="hidden" id="page" value="1"/>

</section>
{Common::js('yearold/jquery-1.11.3.min.js,yearold/bootstrap-min.js')}

{Common::js('layer/layer.m.js,rosestrap-min.js,template.js')}
</body>
</html>
<script type="text/html" id="tpl_article_list">
  {{each list as value i}}
  <!--h2 class="yuefen">{{value.year}}年{{value.month}}月</h2-->
  <li class="me">
    <div class="user-img"><img src="{{value.headimgurl}}" ></div>
    <div class="text-box"><span class="comment-num"></span> <span class="comment-user">{{value.nickname}}</span><span class="comments-data">发表于{{value.addtime}}</span> <span class="comment-text">{{value.content}}</span> </div>
  </li>
  {{/each}}
</script>
<script>
  //初始页码
  var loading = false;//用于限制
  var  pagesize = 5;

  $(function () {

    var pages=$("#page").val();//用于 取出页面返回 自动加载下一页的bug

    if(pages==1){
      $("#page").val(1);// 如刚开始第一页 返回 就是第一页 如果不是第一页 返回页面减一为上次页面 但是当最后一页返回会有bug
    }else{
      $("#page").val(pages*1-1);
    }
    get_data();// 默认数据

  })
  $(window).scroll(function(){
    // 当滚动到最底部以上100像素时， 加载新内容
    var scorllTop = $(this).scrollTop() + 100;
    var scorllHeight = $(document).height();
    var windowHeight = $(this).height();
    if (scorllTop + windowHeight > scorllHeight) {
      if(!loading){
        get_data();
      }
    }
  });
  //ajax获取数据
  var contentNum = 0;
  function get_data()
  {
    loading = true;
    layer.open({
      type: 2,
      content: '正在加载数据...',
      time :20
    });
    //alert(destid+"gg"+attrid);
    var page = Number($("#page").val());
    var url = '/phone/comment/ajax_getcomment';
    $.getJSON(url,{page:page,pagesize:pagesize},function(data){

      if(data==false){
        $("#no-content").show();
        $("#page").val(page-1);
        layer.closeAll();
      }else {
        if (data.list.length > 0) {

          var itemHtml = template('tpl_article_list', data);
          console.log(itemHtml);
          $("#result_list").append(itemHtml);
          contentNum++;
        }
        //设置分页
        if (data.page != -1) {
          $("#page").val(data.page);
          loading = false;
        } else {
          //$("#page").val(data.page);
          //$("#btn_getmore").hide();
          loading = true;
        }
        layer.closeAll();
      }
    });
  }
</script>
