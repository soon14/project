<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>车主服务</title>
{Common::css('global.css,car-phone.css')}
{Common::js('jquery.min.js,template.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body style="background:#f0f0f0;">
<header>
  <div class="searchBar">
    <div class="searchInt"><input placeholder="商家店名" id="sousuo" class="search_txt"></div>
    <a class="btn_search" id="searchBtn" href="javascript:;">搜索</a>
  </div>
</header>

<section style="margin-top: -40px">
  <!-- 左图右字列表开始 -->
  <div class="listLR-item">
    <ul id="result_list">

    </ul>
    <!--左图右字列表结束 -->
    <div class="no-content" id="no-content" style="display: none">
      <img src="{$GLOBALS['cfg_public_url']}images/nocon.png"/>
      <p>啊哦，暂时没有相关信息</p>
    </div>
    <input type="hidden" id="keyword" value="{$keyword}"/>
    <input type="hidden" id="page" value="1"/>

  </div>
</section>
<script type="text/html" id="tpl_article_list">
  {{each list as value i}}
  <li> <a target="_blank" href="/phone/che/show_{{value.id}}.html" title="">
      <div class="img-item"><img src="{{value.litpic}}"></div>
      <div class="txt-item">
        <h2 class="title-item">{{value.business_name}}</h2>
        {{if value.times==2}}
        <div class="quick-buy">¥<span>{{value.price}}元起</span></div>
        {{else}}
        <div class="quick-buy"><span>2017.01.15-02.12暂停使用</span></div>
        {{/if}}
        <div class="address-item">地址：{{value.address}}</div>
      </div>
      <div class="cl"></div>
    </a> </li>
  {{/each}}
</script>
{Common::js('layer/layer.m.js')}
<script>
  var keyword = $("#keyword").val();

  //初始页码
  var loading = false;//用于限制
  $(function () {
   // var pages=$("#page").val();//用于 取出页面返回 自动加载下一页的bug
    $("#page").val(1);
    get_data();

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
  //获取list地址

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

    var page = Number($("#page").val());

    var url = '/phone/che/ajax_che_more';
    $.getJSON(url,{page:page,keyword:keyword},function(data){

      if(data==false){
        $("#page").val(page-1);
        layer.closeAll();
      }else {
        if (data.list.length > 0) {
          var itemHtml = template('tpl_article_list', data);
          $("#result_list").append(itemHtml);
          contentNum++;
        }
        //设置分页
        if (data.page != -1) {
          $("#page").val(data.page);
          loading = false;
        } else {
          loading = true;
        }
        // 设置内内容显示
        if (contentNum == 0) {
          $('#list-content').hide();
          $("#no-content").show();
        }
        layer.closeAll();
      }
    });
  }
  $("#searchBtn").click(function(){
    var keyword = $("#sousuo").val();

    if(keyword.length==0){
      alert('请输入关键词');
      $("#sousuo").focus();
      return false;
    }else{
      var url  = "/phone/che/index?keyword="+keyword;
      window.location.href =url;
    }
  });
  $("#sousuo").keydown(function(e){
    if(e.keyCode==13){
      $('#searchBtn').click();
    }
  });
</script>
</body>
</html>
