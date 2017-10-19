<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>河北全攻略</title>
  {Common::css('global_article.css,serch_phone_article.css,bootstrap-min.css,public.css,strategy9-1.css')}
  {Common::js('jquery-1.8.3.min.js,rosestrap-min.js,template.js')}
  <style>
    .no-content { position:absolute; width:100%; padding-top:15px;
    }

  </style>
  {$GLOBALS['cfg_tongjicode']}
</head>

<body style="background:#f0f0f0;">
<header class="header">
  <div class="order-head" >
    <input name="sousuo" type="text" class="seach-input" id="sousuo" placeholder="目的地/景区" style="margin-left: 10px">
    <a class="back-home" href="javascript:" style=""></a>
  </div>

  <div class="classify">
    <ul>
      <li><a class="popClick">{$property['mdd']}</a></li>
      <li><a  class="popClick">{$property['time']}</a></li>
      <li><a  class="popClick">{$property['theme']}</a></li>
      <li><a class="popClick">{$property['address']}</a></li>
      <div class="clearfix"></div>
    </ul>
    <i></i>
  </div>

</header>
<section style="margin-top: -12px">
    <div class="popBox">
    <div class="classify-down">
      <div class="hot-seach">
        <h2>出发地</h2>
        <ul class="tabs">
          <li class="current"><a href="javascript:void(0)">石家庄</a></li>
          <div class="cl"></div>
        </ul>
      </div>
      <div class="hot-seach">
        <h2>目的地</h2>
        <ul class="tabs">
          {loop $des $de}
          <li data-id="{$de['id']}" name="mdd" {if $de['id']==$info['mdd']} class="current" {/if}><a href="javascript:void(0)" ">{$de['kindname']}</a></li>
          {/loop}
          <?php $all=count($des);?>
          <!-----07.28 fengjishu jia  start ---------->
          {if $all==1||$all==6}
          <?php for($i=0;$i<4;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {elseif $all==2||$all==7}
          <?php for($i=0;$i<3;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {elseif $all==3||$all==8}
          <?php for($i=0;$i<2;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {elseif $all==4||$all==9}
          <?php for($i=0;$i<1;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {/if}
          <!-----07.28 fengjishu jia  end---------->
          <div class="cl"></div>
        </ul>
      </div>
      <div class="hot-seach">
        <h2>主题</h2>
        <ul class="tabs">
          {loop $attrs[1] $at}
          <li data-id="{$at['id']}" name="theme" {if $at['id']==$info['theme']} class="current" {/if}><a href="javascript:void(0)">{$at['attrname']}</a></li>
          {/loop}

          <div class="cl"></div>
        </ul>
      </div>
      <div class="hot-seach">
        <h2>时间</h2>
        <ul class="tabs">
          {loop $attrs[0] $t}
          <li data-id="{$t['id']}" name="time" {if $t['id']==$info['time']} class="current" {/if}><a href="javascript:void(0)">{$t['attrname']}</a></li>
          {/loop}
          <?php $all2=count($attrs[0]);?>
          {if $all2==1||$all2==6}
          <?php for($i=0;$i<4;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {elseif $all2==2||$all2==7}
          <?php for($i=0;$i<3;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {elseif $all2==3||$all2==8}
          <?php for($i=0;$i<2;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {elseif $all2==4||$all2==9}
          <?php for($i=0;$i<1;$i++){?>
            <li ><a href="javascript:void(0)" data-id="" ></a></li>
          <?php }?>
          {/if}
          <div class="cl"></div>
        </ul>
      </div>    
      <div class="hot-seach1">
        <h2>距离</h2>
        <ul class="tabs">
          {loop $attrs[2] $a}
          <li data-id="{$a['id']}" name="address" {if $a['id']==$info['address']} class="current" {/if}><a href="javascript:void(0)">{$a['attrname']}</a></li>
          {/loop}

          <div class="cl"></div>
        </ul>
      </div>  

      <div class="search-but"><a  href="javascript:void(0)" title="">确定</a></div>
      <div style="height:100px;"></div>
    </div>
  </div>
  <!-- 左图右字列表开始 -->
  <div class="listLR-item">
  <ul id="result_list">
  </ul>
  </div>
  <!--左图右字列表结束 -->

  <!----没有数据  显示  start --------->
  <div class="no-content" id="no-content" style="text-align: center; display:none; ">
    <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="80%"/>
    <p>啊哦，暂时没有相关信息</p>
  </div>
  <!----没有数据  显示   end  --------->
<?php //var_dump($info);?>
  <!--数据搜索的条件 s --->
  <input type="hidden" id="keyword" value="{$keyword}"/>
  <input type="hidden" id="page" value="1"/>

  <input type="hidden" id="mdd" value="{$info['mdd']}"/>
  <input type="hidden" id="theme" value="{$info['theme']}"/>
  <input type="hidden" id="time" value="{$info['time']}"/>
  <input type="hidden" id="address" value="{$info['address']}"/>

  <input type="hidden" id="attr_p" value="{$attrid}"/>
  <!--数据搜索的条件 e --->
</section>
<script type="text/html" id="tpl_article_list">
  {{each list as value i}}
  <!--h2 class="yuefen">{{value.year}}年{{value.month}}月</h2-->
  <a href="{{value.url}}" style="display:block;margin-top: 20px">
    <li>
      <div class="img-item"><img src="{{value.litpic}}" width="100%" alt="{{value.title}}"></div>
      <div class="txt-item">
        <h2 class="title-item"><span>{{value.title}}</span></h2>
        <!--div class="address">{{value.mdd}}/{{value.dayTour}}</div-->
      </div>
      <div class="cl"></div>
    </li>
  </a>

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
    $.getJSON(url,{page:page,destid:destid,sorttype:sorttype,attrid:attrid,keyword:keyword},function(data){

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
  $(".back-home").click(function(){
    var keyword = $("#sousuo").val();
    if(keyword.length==0){
      alert('请输入关键词');
      $("#sousuo").focus();
      return false;
    }else{
     var url  = "/phone/article/search_list?keyword="+keyword;
      window.location.href =url ;
    }
  });
  $("#sousuo").keydown(function(e){
    if(e.keyCode==13){
      $('.back-home').click();
    }
  });
</script>
</body>
</html>
