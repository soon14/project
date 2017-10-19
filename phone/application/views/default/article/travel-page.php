<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<title>河北全攻略</title>
  {Common::css('2017common/bootstrap.css,2017common/public.css')}
  {Common::css('2017new_ver/travel.css')}
  {Common::js('jquery-1.11.3.min.js')}
<style>
  .ssss{
    width: 112px;
    display: block;
    float: left;
  }
  .img {
      width: 336px;
      height: 219px;
  }
  .offcanvas-page{
    overflow: hidden;
  }
  .ctd-page-info .user-link li{ position:relative; float:left; line-height:2.8rem; border-right:1px solid #FFF;padding: 0px 5px;margin: 0px 5px; }
  </style>
  {$GLOBALS['cfg_tongjicode']}
</head>
<body>
<header class="ctd-page-head">
  <div id="_c_head_info" class="head-info">
    <p class="head-pic"><img src="{$info['piclist'][1][0]}" alt="{$info['title']}"></p>
    <p class="head-data"><span>{date("j/M.Y",$info['addtime'])}</span><span><i>{$info['tuceNum']}</i>图</span></p>
    <p class="user-name">{$info['author']}</p>
    <p class="user-img"><img src="{$info['authorhead']}"></p>
  </div>
</header>
<div id="_c_head_title" class="ctd-head-title">
  <h2 class="head-title">{$info['title']}</h2>
<!--  <div id="_c_head_user" class="head-title-user"><span class="img"><img src="{$info['authorhead']}"></span><span class="name">{$info['author']}</span><span class="data">{date("j/M.Y",$info['addtime'])}</span></div>-->
</div>
<section class="ctd-page-body">
  <div class="ctd-article">
    <div class="ntd-chapter">
      <div class="chapter-area"> <a class="anchor"  id="p0"></a>
        <h2 class="chapterHd-main" id="Catalog0"><span class="Catalog-text"><i></i>旅游概况</span></h2>
        <div class="Survey-h2">
          <li><i class="ico12"></i><span class="ssss">目的地:</span>{if $info['gl_mdd']}{$info['gl_mdd']}{else}{$info['mdd']}{/if}</li>
          <li><i class="ico13"></i><span class="ssss">出行天数:</span>{$extinfo['e_travel_day']}</li>
          <li><i class="ico14"></i><span class="ssss">人均消费:</span>{$extinfo['e_travel_sonsume']}</li>
          <li><i class="ico15"></i><span class="ssss">最佳出游时间:</span>{$extinfo['e_travel_time']}</li>
          <li><i class="ico16"></i><span class="ssss">景点:</span>{$extinfo['e_travel_spot']}</li>
        </div>
      </div>
    </div>
    <div class="ntd-chapter">
      <div class="chapter-area"> <a class="anchor" id="p1"></a>
        <h2 class="chapterHd-main" id="Catalog1"><span class="Catalog-text"><i></i>景区简介</span></h2>
        <p>{$info['content']}</p>
      </div>
    </div>

    <div class="ntd-chapter">
      <div class="chapter-area"> <a class="anchor" id="p2"></a>
        <h2 class="chapterHd-main" id="Catalog2"><span class="Catalog-text"><i></i>交通路线</span></h2>
        {$extinfo['e_travel_traffic']}
      </div>
    </div>

    {loop $mulu $k $v}
    <div class="ntd-chapter">
      <div class="chapter-area"><a class="anchor" id="p{$k+3}"></a>
        <h2 class="chapterHd-main" id="Catalog{$k+3}"><span class="Catalog-text"><i></i>{$v['title']}</span></h2>
        {$v['content']}
      </div>

      {loop $v['child'] $ke $val}
      <div class="chapter-area"><a class="anchor" id="p{$k+3}-{$ke+1}"></a>
        <h3 class="chapterHd-child" id="Catalog{$k+3}-{$ke+1}"><span class="Catalog-text">{$val['title']}</span></h3>
        {$val['content']}
      </div>
      {/loop}
    </div>
    {/loop}


  </div>
</section>

<!-- 占位-->
<div class="ctd-no-content"></div>
<div class="ctd-page-info">
  <ul class="user-link clearfix" style="overflow: ">
    <li><a id="_j_link_like" class="link-like  faver" href="javascript:;" title="喜欢就点击一下"><i {if !empty($info['islike'])}class="on"{/if}></i><span>{if !empty($info['islike'])}{count($info['islike'])}{else}0{/if}</span></a></li>
    <li><a class="link-comment comm" href="javascript:;" title="我要评论"><i></i><span>{$info['commentnum']}</span></a></li>
    <li><a class="link-browse" href="javascript:;"><i></i><span>{$info['shownum']}</span> </a></li>
  </ul>
</div>
<div id="_j_ctd_catalog" class="ctd-catalog-bot"></div>
<div id="_j_ctd_catalog_show" class="ctd-catalog">
  <h2><i></i>目录</h2>
  <div class="sideNav-bar">
    <div class="NavList">
      <ul>
      </ul>
    </div>
  </div>
</div>
<script>


</script>

<!-------结束 ------->
<input type="hidden" id="articleid" name="articleid" value="{$info['id']}">
<input type="hidden" id="articleaid" name="articleaid" value="{$info['aid']}">
{Common::js('layer/layer.js')}
{Common::js('20170301_new/bootstrap-min.js')}
</body>
</html>
<script type="text/javascript">
  $(function() {
    showpic();
    $(window).scroll(function() {//滚动的时候加载图片
      showpic();
    });
    function showpic(){
      $(".ctd-page-body img").each(function() {
        if ($(this).attr("src") == "") {
          if ($(this).offset().top  < $(window).height() + $(window).scrollTop()) {
            $(this).attr("src", $(this).attr("laz_src")).load(function(){
                      $(this).removeAttr("laz_src");
            });
          }
        }
      });
    }
  });
</script>
<script>

  //点击评论
  $(".comm").click(function(){

    var arid   = $("#articleaid").val();//文章aid

    var typeid    = '4';

    var   url  = "/phone/pub/New_comment/id/"+arid+"/typeid/"+typeid;

    location.href =url;
  });
  //  点击 喜欢
  $(".faver").click(function(){
    var  th  = this;
    //$(th).find("a").css('text-decoration','none');
    $.ajax({
      type:"POST",
      url:"/phone/member/login/ajax_is_login",
      dataType:'json',
      success:function(data){

        if(data.status){//已经 登录

          addlike(th);

        }else{  //没有登录

          layer.confirm('是否登录，将游记添加到收藏？', {
            btn: ['是','否'] //按钮
          }, function(){
            var url  = window.location.href;//获取当前页面的地址
            var login_url  ="/phone/member/login/?redirecturl="+url; //www.aitto.net/member/login/?redirecturl=
            window.location.href=login_url;
          }, function(){

          });

        }

      }

    })

  });
  function addlike(th){
    //获取 喜欢的值
    var s  = $(th).find("span").text();
    //获取 文章的id
    var arid = $("#articleaid").val();
    // 获取 typeid
    var  typeid = '4';

    $.ajax({
      type: "POST",
      url: "/phone/article/ajax_add_like",
      dataType:'json',
      async:false,
      data: {l_num:s,arId:arid,typeid:typeid},
      success:function(data){

        if(data.status){
          layer.msg(data.msg);
          $(th).addClass('faverOn');
          $(th).find("i").addClass('on');
          $(th).find("span").text(data.likenum);
        }else{
          layer.msg(data.msg);
          $(th).find("i").removeClass('on');
          $(th).find("span").text(data.likenum);

        }

      }

    });
  }

  function arrayToJson(o) {
    var r = [];
    if (typeof o == "string") return "\"" + o.replace(/([\'\"\\])/g, "\\$1").replace(/(\n)/g, "\\n").replace(/(\r)/g, "\\r").replace(/(\t)/g, "\\t") + "\"";
    if (typeof o == "object") {
      if (!o.sort) {
        for (var i in o)
          r.push(i + ":" + arrayToJson(o[i]));
        if (!!document.all && !/^\n?function\s*toString\(\)\s*\{\n?\s*\[native code\]\n?\s*\}\n?\s*$/.test(o.toString)) {
          r.push("toString:" + o.toString.toString());
        }
        r = "{" + r.join() + "}";
      } else {
        for (var i = 0; i < o.length; i++) {
          r.push(arrayToJson(o[i]));
        }
        r = "[" + r.join() + "]";
      }
      return r;
    }
    return o.toString();
  }
  //这个是调用微信图片浏览器的函数
  function imagePreview(curSrc, srcList) {
    if (!curSrc || !srcList || srcList.length == 0) {
      return;
    }
    WeixinJSBridge.invoke('imagePreview', {
      'urls': JSON.parse(srcList),
      'current':curSrc
    });
  };

  (function ($) {

    var aa = [];
    var i = 0;
    var src = [];
    var json = null;

    aa = $(".ctd-page-body").find('img');

      aa.each(function (index) {

        $(this).on('click', function () {

          var  isshow =$("#_j_ctd_catalog_show").css('left');
           if(isshow!='0px') {
               var num = 0;
               aa.each(function (index) {
                 if ($(this).attr('src') != '') {
                   num += 1;
                 }
               })
               for (i = 0; i < num; i++) {

                 src[i] = aa[i].src;//把所有的src存到数组里

               }

             var srcList = arrayToJson(src); //转换成json并赋值给srcList

               imagePreview(this.src, srcList);
           }
        })
      })
  })(jQuery);
</script>
