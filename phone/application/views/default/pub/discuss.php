<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>评论</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
  {Common::css('bootstrap-min.css,public.css,travels9-1.css')}

</head>
<body style="background:#FFF;">
<div class="travesls-show">
  <div class="item-con">
    <div class="item-img"><img src="{$info['litpic']}"></div>
    <p class="item-title"> <span class="item-tit">{$info['title']}</span> <span class="item-top">{$info['mdd']}|{date('Y-m-d',$info['addtime'])}{if $typeid=='101'}{else}{/if}</span> </p>
    <div class="item-peo">
      <div class="peo-name">{$info['author']}</div>
      {if $typeid=='4'}
      <div class="peo-ico"><img src="{if $info['authorhead']}{$info['authorhead'][0]['litpic']}{else}{$info['litpic']}{/if}"></div>
      {elseif $typeid =='101'}
      <div class="peo-ico"><img src="{if $info['authorhead']}{$info['authorhead']}{else}{$info['litpic']}{/if}"></div>
      {/if}
    </div>
    <div class="item-mask"></div>
  </div>
</div>
<section style="padding-bottom:60px;">
  <div class="discuss">
    <ul id="result_list">



    </ul>
  </div>
  <div class="no-content" id="no-content" style="display: none;text-align: center">
    <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="30%"/>
    <p>啊哦，暂时没有新的评论</p>
  </div>
</section>
<footer>
<div class="discuss-box">
  <div class="discuss-in">
    <textarea placeholder="我要评论"  class="search_txt" rows="1" id="travel_content" name="travel_content"></textarea>
 <a class="btn_search" id="searchBtn" href="javascript:;" style="margin-left: 1px">发表评论</a>
 </div>
</div>
  <input type="hidden" id="page" value="1"/>
  <input id="article_id" value="{$info['id']}" type="hidden">
  <input id="aid" value="{$info['aid']}" type="hidden">
  <input id="code" value="{$code}" type="hidden">
  <input id="typeid" value="{$typeid}" type="hidden">
</footer>

{Common::js('jquery-1.11.3.min.js,strategy9-1.js,template.js')}
</body>
</html>
<script type="text/html" id="tpl_article_list">
  {{each list as value i}}
  <li>
    <div class="dis-top">
      <div class="peo-ico"><img src="{{value.litpic}}"></div>
      <div class="peo-name">{{value.wx_nickname}}</div>
      <div class="tip">{{i+1}}楼</div>
    </div>
    <div class="dis-con">{{value.content}} </div>
    <div class="dis-time">发布日期:{{value.time}}</div>
  </li>
  {{/each}}
</script>
{Common::js('layer/layer.js')}
<script>
  //获取更新数据
  //初始页码
  var loading = true;//用于限制
  $(document).ready(function(){
    $('#btn_getmore').click(function(){
      get_data();
    });
    get_data();
  });

  $(window).scroll(function(){
    // 当滚动到最底部以上100像素时， 加载新内容
    var scorllTop = $(this).scrollTop() + 100;
    var scorllHeight = $(document).height();
    var windowHeight = $(this).height();
    if (scorllTop + windowHeight > scorllHeight) {
      if(loading){
        get_data();
      }
    }
  });

  $("#searchBtn").click(function(){
    issue();
  })
  function issue()
  {
    var content=$('#travel_content').val();//评论内容
    var article_id=$('#article_id').val();//文章的id
    var aid      = $('#aid').val();// 文章的aid
    var typeid      = $('#typeid').val();// 模型id


    // alert(aid);
    var code     =$('#code').val();
    if(content.length<3) {
      alert('内容至少3个字');
      return false;
    }else{
      $.ajax({
        type: "POST",
        url: "/phone/article/ajax_comment",
        data:{content:content,article:article_id,code:code,aid:aid,typeid:typeid},
        success: function (msg) {
          if(msg==3){
            layer.msg("评论成功");
            if(typeid=='4'){
              var url ="/phone/raiders/show_"+aid+".html";
            }else{
              var url ="/phone/notes/show_"+article_id+".html";
            }

            window.location.href = url ;
            //window.location.reload();
          }else if(msg==40029){
            layer.msg('code码已失效，请重新评论');
            var   url  = "/phone/pub/New_comment/id/"+aid+"/typeid/"+typeid;
            location.href =url;
          }
        }
      });
    }
  }
  //ajax获取数据
  var contentNum = 0;
  function get_data()
  { loading = false;
    layer.open({
      type: 2,
      content: '正在加载数据...',
      time :10
    });
    var url = '/phone/article/ajax_comment_more';
    $.getJSON(url,{page:$("#page").val(),aid:$("#article_id").val(),typeid:$("#typeid").val()},function(data){

      if (data.list.length > 0) {
        var itemHtml = template('tpl_article_list', data);

        $("#result_list").append(itemHtml);
        contentNum++;
      }
      //设置分页
      if (data.page != -1) {
        $("#page").val(data.page);
        loading = true;
      } else {

        loading = false;
      }
      // 设置内内容显示
      if (contentNum == 0) {

        $("#no-content").show();
      }

      layer.closeAll();
    });
  }
</script>
