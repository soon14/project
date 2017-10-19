<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>自驾游</title>
  <!-- 基础框架 bootstrap CSS 文件 -->
  <link rel="stylesheet" type="text/css" href="/phone/public/css/index/bootstrap.css" />
  <!-- 页面公用 public CSS 文件 -->
  <link rel="stylesheet" type="text/css" href="/phone/public/css/index/public.css" />
  <!-- 布局版面 layout CSS 文件-->
  <link rel="stylesheet" type="text/css" href="/phone/public/css/line/HB_SelfDriving.css"/>
  {Common::js('jquery.min.js,amazeui.js,template.js')}
</head>
<body class="indexPage">

<!-- HB-商城 头部 -->
<header id="HB_header">
  {request "pub/header3/typeid/$typeid"}
</header>

<!-- 米淘首页 产品列表 -->
<section class="HB-actList" id="result_list">


</section>
<!-- 米淘页面 置顶按钮 -->
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="{$page}"/>
<i id="mt-toTop" class="mt-totop"></i>
<script type="text/html" id="tpl_hotel_item">
  {{each list as value i}}
    <div class="HB-actList-box" onclick="window.location.href='{{value.url}}'">
      <div class="actImg">
        <img src="{{value.newlitpic}}">
        {{if value.cha_time>0}}
        <i class="joincnt past">已过期</i>
        {{else}}
        <i class="joincnt">正在进行</i>
        {{/if}}


        <h2><span>{{value.title}}</span></h2>
      </div>
      <div class="actCon">
        <ul class="clearfix">
          <li>
            <p><span class="price"><i>{{value.storeprice}}</i></span><span>费用</span></p>
          </li>
          <li>
            <p><span>{{value.selfDriMdd}}</span><span>地点</span></p>
          </li>
          <li>
            <p><span>{{value.linedate}}</span><span>自驾时间</span></p>
          </li>
        </ul>
      </div>
    </div>
  {{/each}}
</script>
{Common::js('layer/layer.m.js')}

<script>
  var loading = false;//用于限制
  //初始页码
  $(function () {
    //获取更新数据
    $('#btn_getmore').click(function () {
      get_data();
    });
    //第一次加载数据
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
  function get_url() {
    //获取选中的目的地
    // var url = $("#destpy").val();
    var url = "all";
    //获取dayid
    //var dayid = $("#dayid").val();
    var dayid = 0;
    //获取priceid
    // var priceid = $("#priceid").val();
    var priceid = 0;
    //startcityid
    //var startcityid = $("#startcityid").val();
    var startcityid = 0;
    //获取选中的属性
//        var attr = [];
//        $('#lsit-child').find("li[class^='gattr']").each(function (i, obj) {
//            if ($(obj).attr('data-type') == 'attrid' && $(this).hasClass('on')) {
//                attr.push($(this).attr('data-id'));
//            }
//        })

    // var attrid = $("#attrid").val();
//        if (attr.length > 0) {
//            attrid = attr.join('_');
//        }
    var attrid = 0;
    //排序规则
    //var sorttype = $("#sorttype").val();
    var sorttype = 0;
    //搜索名称
    var keyword = $('#keyword').val();
    //当前页 page
    var page = $("#page").val();
    //alert(page);
    keyword = keyword == '' ? 0 : keyword;

    url += '-' + dayid + '-' + priceid + '-' + sorttype + '-0-' + startcityid + '-' + attrid + '-' + page;
    if (keyword != 0) {
      url += '?keyword=' + keyword;
    }
    return url;
  }

  //ajax获取数据
  var contentNum = 0;
  function get_data() {
    loading = true;
    var paramUrl = get_url();
    // alert(paramUrl);
    var url = SITEURL + 'line/ajax_line_more/' + paramUrl;

    layer.open({
      type: 2,
      content: '',
      time: 20

    });
    $.getJSON(url, {}, function (data) {
      if (data.list.length > 0) {
        var itemHtml = template('tpl_hotel_item', data);
        $("#result_list").append(itemHtml);
        contentNum++;
      }
      //设置分页
      if (data.page != -1) {
        $("#page").val(data.page);
        loading = false;
      } else {
        $("#btn_getmore").hide();
        loading = true;
      }
      //设置内内容显示
      if (contentNum == 0) {
        $('#list-content').hide();
        $("#no-content").show();
      }
      layer.closeAll();
    })
  }
</script>
</body>
</html>
