<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>河北游记</title>
{Common::css('2017common/bootstrap.css,2017common/public.css')}
{Common::css('2017new_ver/travel.css')}
 {Common::js('jquery-1.8.3.min.js,rosestrap-min.js,template.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body style="background:#FFF;">
<header id="_j_search_nav" class="Dest-search-head">
  <div class="searchBox">
    <div class="search_p">
      <form>
        <div class="search_box">
          <span class="dest_search_txt" id ="searchBtn">搜索</span>
          <input id="dest_search_input" class="search_text" placeholder="输入游记标题" type="text" value="{$keyword}">
          <a href="javascript:;" style="right: 15px;" class="dest_search_btn" ></a> </div>
      </form>
    </div>
  </div>
  <div class="searchNav travel-searchNav">
    <a href="/phone/notes/search_2"><i></i>
    <ul class="clearfix">
      <li style="width: 33.3%"><span>{$property['mdd']}</span></li>
      <li style="width: 33.3%"><span>{$property['day']}</span></li>
      <li style="width: 33.3%"><span>{$property['way']}</span></li>
    </ul>
    </a>
  </div>
</header>
<section class="page-list-body clearfix">
  <ul class="ntd-Hebei-Note" id="result_list">

  </ul>
</section>
<!----没有数据  显示  start --------->
<div class="no-content" id="no-content" style="text-align: center; display:none; ">
  <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="80%"/>
  <p>啊哦，暂时没有相关信息</p>
</div>
<!----没有数据  显示   end  --------->


<input type="hidden" id="keyword" value="{$keyword}"/>
<input type="hidden" id="page" value="1"/>
<input type="hidden" id="mdd" value="{$info['mdd']}"/>
<input type="hidden" id="theme" value="{$info['theme']}"/>
<input type="hidden" id="time" value="{$info['time']}"/>
<input type="hidden" id="day" value="{$info['day']}"/>
<input type="hidden" id="way" value="{$info['way']}"/>
<input type="hidden" id="address" value="{$info['address']}"/>
<input type="hidden" id="attr_p" value="{$attrid}"/>


<script type="text/html" id="tpl_article_list">
  {{each list as value i}}
  <li onclick="location.href='{{value.url}}'">
    <div class="mask"></div>
    <p class="Note-img"><img src="{{value.litpic}}" ></p>
    <h2 class="Note-tit">{{value.title}}
      <p class="Note-tip"><span>{{if value.gl_mdd}}{{value.gl_mdd}}{{else}}{{value.mdd}}{{/if}}</span>|<span class="data">{{value.time_2}}</span></p>
    </h2>
    <p class="user-name">{{value.author}}</p>
    <p class="user-info"><span class="user-img"><img src="{{if value.authorhead}}{{value.authorhead}}{{else}}/phone/public/images/member_nopic.png{{/if}}"></span></p>
  </li>
  {{/each}}
</script>
{Common::js('layer/layer.m.js')}

<script>

  var keyword1 = $("#keyword").val();
  if(keyword1.length==0){
    var keyword ='';
  }else{var keyword = keyword1;}
  var destid = $('#mdd').val();
  var sorttype = 2;// 不为空 按照 浏览次数 排序 又大到小
  var theme =$("#theme").val();
  var time  =$("#time").val();
  var day  =$("#day").val();
  var way  =$("#way").val();
  var address= $("#address").val();
  var lte =theme.length;
  var lti =time.length;
  var ld  =address.length;
  if(lte!=0&&lti!=0&&ld!=0){

    var attrid = theme+","+time+","+address+',37';


  }else if(lte!=0&&lti!=0&&ld==0){

    var attrid = theme+','+time+',37';

  }else if(lte!=0&&ld!=0&&lti==0){

    var attrid = theme+','+address+',37';

  }else if(lti!=0&&ld!=0&&lte==0){

    var attrid = time+','+address

  }else if(lte!=0&&lti==0&&ld==0){

    var attrid = theme+',37';

  }else if(lte==0&&lti!=0&&ld==0){

    var attrid = time+',37';

  }else if(lte==0&&lti==0&&ld!=0){

    var attrid = address+',37';

  }else if(lte==0&&lti==0&&ld==0){

    var attrid ='37';
  }
  // var attrid = $("#attr_p").val();
  //初始页码
  var loading = false;//用于限制
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
    //alert(destid+"gg"+attrid);
    var page = Number($("#page").val());
    var url = '/phone/article/ajax_article_more';
    $.getJSON(url,{page:page,destid:destid,sorttype:sorttype,day:day,way:way,keyword:keyword,model:1},function(data){

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
  $('.search-but').click(function(){

    var mdd1     = $('li[name=mdd][class=current]').attr('data-id');

    if(typeof(mdd1)=='undefined'){var mdd= '';}else{var mdd=mdd1;}

    var theme1   = $('li[name=theme][class=current]').attr('data-id');

    if(typeof(theme1)=='undefined'){var theme='';}else{var theme =theme1;}

    var time1    = $('li[name=time][class=current]').attr('data-id');
    if(typeof(time1)=='undefined'){var time='';}else{var time =time1;}
    var address1  = $('li[name=address][class=current]').attr('data-id');
    if(typeof(address1)=='undefined'){var address='';}else{var address =address1;}
    var url  = "/phone/article/search_list?mdd="+mdd+"&theme="+theme+"&time="+time+"&address="+address;
    window.location.href =url ;
  });
  $("#searchBtn").click(function(){
    sousuo();
  });
  $(".dest_search_btn").click(function(){
    sousuo();
  });
  function sousuo(){
    var keyword = $("#dest_search_input").val();

    if(keyword.length==0){
      alert('请输入关键词');
      $("#dest_search_input").focus();
      return false;
    }else{
      var url  = "/phone/notes/search_list?keyword="+keyword;
      window.location.href =url ;
    }
  }
</script>
</body>
</html>

{Common::js('20170301_new/bootstrap-min.js')}