<html>
<head>
<title>我想对TA说</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  {Common::css('yearold/swiper.min.css')}
  {Common::js('yearold/jquery.js,yearold/swiper.js')}
<style>

</style>

</head>
<body >
<audio id="music" src="BeTheBest.mp3" autoplay="autoplay" loop></audio>
<a id="audio_btn"><img src="/phone/public/images/yearold/play.png" width="100%"  id="music_btn" border="0"></a>

<div id="title"><span>[</span>{if !empty($me_openid)}我的留言{else}大家说{/if}<span>]</span></div>
<div class="time">
  <ul id="result_list">

<!--    <li class="reportl">-->
<!--      <div><span><i><img src="images/user-img00-180-180.jpg" width="100%" ></i>我仍然以感恩的心，对待健在的亲人</span></div>-->
<!--    </li>-->
<!--    <li class="reportr">-->
<!--      <div><span><i><img src="images/user-img01-180-180.jpg" width="100%" ></i>祝大家平平安安</span></div>-->
<!--    </li>-->

  </ul>
</div>
<div class="timeline"></div>
<input type="hidden" id="page" value="1"/>
</body>
</html>
{Common::js('layer/layer.m.js,rosestrap-min.js,template.js')}
<script type="text/html" id="tpl_article_list">
  {{each list as value i}}

  {{if i==0||i==2||i==4||i==6||i==8||i==10||i==12||i==14}}
  <li class="reportl">
    <div><span><i><img src="{{value.headimgurl}}" width="100%" ></i>{{value.content}}</span></div>
  </li>
  {{else}}
  <li class="reportr">
    <div><span><i><img src="{{value.headimgurl}}" width="100%" ></i>{{value.content}}</span></div>
  </li>
  {{/if}}

  {{/each}}
</script>
<script>
  //初始页码
  var loading = false;//用于限制
  var  pagesize = 15;

  var me_openid  = "{$me_openid}";

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
    $.getJSON(url,{page:page,pagesize:pagesize,me_openid:me_openid},function(data){

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