<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>热门活动</title>
<!-- 基础框架 bootstrap CSS 文件 -->
{Common::css('mitao/bootstrap.css')}
{Common::css('mitao/public.css')}
{Common::css('mitao/mitao_v1_1.css')}
  {Common::js('jquery.min.js,amazeui.js,template.js')}
  {Common::js('mitao/jquery-1.11.3.min.js,mitao/mitao_v1_1.js')}
</head>
<body class="indexPage">

<!-- 米淘首页 头部 -->
<header id="mt_header">
  <div class="mt_header_warp">
    <h1><a class="logo" href="/" title="【米淘亲子】"></a></h1>
    <a class="person" href="#"></a> </div>
</header>

<!-- 米淘首页 幻灯 -->
<div class="banner"><img src="/phone/public/images/mitao/banner.jpg"></div>

<!-- 米淘首页 产品列表 -->
<section id="result_list">
  <div class="mt-module-title">
    <div class="place"></div>
    <h1>热门活动</h1>
  </div>

</section>
<!-- 米淘页面 置顶按钮 -->
<script type="text/html" id="tpl_hotel_item">
  {{each list as value i}}
  <div class="mt-actList-box" onclick="window.location.href='{{value.url}}'">
    <div class="actImg"><img src="{{value.litpic}}">
      <div class="price"> <i class="paymoney">{{value.price}}</i><i class="dw">起</i> </div>
      <i class="joincnt">累计{{value.sellnum}}人购买</i> </div>
    <div class="actCon">
      <h2>{{value.title}}</h2>
      <p>{{value.sellpoint}}</p>
      <div class="ptag"><i>{{value.attrname1}}</i><i>{{value.selfDriMdd}}</i><i>{{value.attrname2}}</i></div>
    </div>
  </div>
  {{/each}}
</script>
<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="{$page}"/>
<i id="mt-toTop" class="mt-totop"></i>
{Common::js('layer/layer.m.js')}

<script>

  //初始页码
  $(function () {
    //获取更新数据
    $('#btn_getmore').click(function () {
      get_data();
    });
    //第一次加载数据
    get_data();
  })

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
    keyword = 0;

    url += '-' + dayid + '-' + priceid + '-' + sorttype + '-0-' + startcityid + '-' + attrid + '-' + page;
    if (keyword != 0) {
      url += '?keyword=' + keyword;
    }
    console.log(url);
    return url;
  }

  //ajax获取数据
  var contentNum = 0;
  function get_data() {
    var paramUrl = get_url();
    // alert(paramUrl);
    var url ='/phone/mitao/ajax_line_more/' + paramUrl;

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
      } else {
        $("#btn_getmore").hide();
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
