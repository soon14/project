<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}</title>
  {if $seoinfo['keyword']}

  <meta name="keywords" content="{$seoinfo['keyword']}" />

  {/if}

  {if $seoinfo['description']}

  <meta name="description" content="{$seoinfo['description']}" />

  {/if}
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH">

  </script>
  {include "pub/varname"}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/spot/Ticket.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,myjs/spot/bootstrap-Ticket.js')}
  {$GLOBALS['cfg_tongjicode']}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<!--面包屑 开始-->
<div class="BreadCrumb Color-fff">
  <ul>
    <li><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a><i class="icon-gt">&gt;</i></li>
    <li><a href="{$cmsurl}spots/">{$channelname}<i class="arrow"></i></a><i class="icon-gt">&gt;</i></li>
    {loop $predest $dest}
    <li><a href="{$cmsurl}spots/{$dest['pinyin']}/">{$dest['kindname']}{$channelname}<i class="arrow"></i></a><i class="icon-gt"></i></li>
    {/loop}
    <div class="clearfix"></div>
  </ul>
</div>
<!--面包屑 结束-->
<section>
  <div class="ctd-head-Ticket">
    <div class="container"> 
      <!--门票标头 开始-->
      <div class="ctd-title">
        <h1><em></em>{$info['title']}
            <?php

            foreach($info['attrlist'] as $key=>$value){

              $str = strstr($value['attrname'],"A");

              switch($str){

                case true:

                  echo "<span class=\"J-level\">景区等级：", $str."</span>";

                  break;

                default;

              }

            }
            ?><span class="J-mode">验证入园</span></h1>
        <div class="J-price">

          <div class="J-priceB" style="padding: 0px 0px">
            {if !empty($info['price'])}
            <a href="#orderID" style="padding: 20px 20px">我要<br>
            预定</a>
            {/if}
          </div>


          <div class="J-priceM">{if !empty($info['price'])}<i>¥</i><b>{$info['price']}</b><dfn>/人起</dfn>{else}电询{/if}</div>
          <div class="J-priceA"></div>
        </div>
      </div>
      <!--门票标头 结束--> 
    </div>
  </div>
</section>
<div class="container">
  <section> 
    <!-- 门票 相册/简介-->
    <div class="ctd-ticket-show">
      <div class="ctd-ticket-show-img"> 
        <!-- 图片相册上下切换开始 -->
        <div class="connected-carousels connected-level1">
          <!-- 大图 -->
          <div class="stage">
            <div class="carousel carousel-stage">
              <ul>
                {loop $info['piclist'] $pic}
                <li><img src="{Common::img($pic[0])}" alt=""> </li>
                {/loop}

              </ul>
            </div>
          </div>
          <!-- 小图 -->
          <div class="navigation">
          <a href="#" class="prev prev-navigation"></a> <a href="#" class="next next-navigation"></a>
            <div class="carousel carousel-navigation">
              <ul  style="margin-left: 80px;">
                {loop $info['piclist'] $pic}
<!--                <li><img src="{Common::img($pic[0],90,59)}" width="86" height="60" alt=""></li>-->
                <li><img src="{Common::img($pic[0])}" width="86" height="60" alt=""></li>
                {/loop}

              </ul>
            </div>
          </div>
        </div>
        <!-- 图片相册上下切换结束 --> 
      </div>

      <div class="ctd-ticket-show-txt">
        <div class="ctd-ticket-show-mask"></div>
        <div class="ticket-hd">
          <div class="tag">简介</div>
          <div class="int"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{Common::cutstr_html($info['content'],300)}… </div>
          <div class="way"> <i></i>
            <div class="citytit">{$info['address']}</div>
          </div>
          <div class="time"> <i></i>
            <div class="citytit">{$extendinfo['e_business_time']}</div>
          </div>
          <div class="tel"> <i></i>
            <div class="citytel">{$extendinfo['e_tel']}</div>
          </div>
          <div class="preview-a">
            <div class="a-sales">已售{$info['sellnum']}</div>
            <div class="a-score">{$info['satisfyscore']}分</div>
            {if $userip!=0}

            <div class="a-judge a_judges" data-id="0" style="background-position:25px -200px "><span>{$info['recommendnum']}</span>人推荐</div>
            {else}
            <div class="a-judge a_judges" data-id="0"><span>{$info['recommendnum']}</span>人推荐</div>
            {/if}
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  <section> 
    <!--门票内容 开始-->
    <div  class="ctd-ticket-booking" id="orderID" >
      <div class="tab-nav">
        <ul data-toggle="tabs">
          <li class="current"><a href="javascript:void(0)" >门票</a></li>
<!--          <li><a href="javascript:void(0)">酒店</a></li>-->
        </ul>
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <th width="12%">门票类型 </th>
            <th><div class="text-left">名称</div>
            </th>
            <th width="15%">提前预定时间 </th>
            <th width="10%">市场价 </th>
            <th width="10%">优惠价 </th>
            <th width="15%">预定 </th>
          </tr>

          {st:spot action="suit_type" row="8" productid="$info['id']" return="typelist"}

          {loop $typelist  $type}

          {st:spot action="suit_by_type" row="10" productid="$info['id']" suittypeid="$type['id']" return="suitlist"}
          <?php// var_dump($suitlist);?>
          {loop $suitlist $k $suit}
          <tr>
            <td rowspan="2" valign="top"  class="tab-peo"><b>{if $k>0}{else}{$type['title']}{/if}</b></td>
            <td><div class="text-left">{$suit['title']} <a href="javascript:;" class="TableDetail-btn" ><i></i></a> </div></td>
            <td>{$extendinfo['e_Advance_buy_time']}</td>
            <td><del>￥{$suit['sellprice']}</del></td>
            <td><i>{if !empty($suit['ourprice'])}{Currency_Tool::symbol()}{$suit['ourprice']}{else}电询{/if}</i></td>
            <td><div class="booking-but"><a class="booking-btn" href="javascript:;" data-suitid="{$suit['id']}">{if $suit['paytype']==4}景区支付{else}在线支付{/if}</a></div></td>
          </tr>
          {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="spotcontent"}
          <tr class="ticket-detail">
            <td colspan="5" class="show-TableDetail"><div class="TableDetail-box"> <i class="arrow"></i>
                <div class="TableDetail-pane">
                  {$spotcontent[1]['content']}
                </div>
                <div class="TableDetail-back">收起<i></i></div>
              </div></td>
          </tr>
          {/st}
          {/loop}
          {/st}
          {/loop}
        {/st}
        </tbody>
      </table>
    </div>
    <!--门票内容 结束--> 
  </section>
  <section>
    <div class="ctd-ticketS-body"> 
      <!-- 导航随屏置顶开始 -->
      <div id="ctd-tickets-box">
        <div class="ctdF-Case J-relative">
          <div class="ctdF-nav" >
            <ul data-toggle="J-tabs">
              <li class="current"><a href="#p0">交通指南</a></li>
              <li><a href="#p1" >景区简介</a></li>
              <li><a href="#p2">购买须知</a></li>
              <li><a href="#p3">用户点评({$info['commentnum']})</a></li>
            </ul>
            {if !empty($info['price'])}
            <a href="#orderID" class="btn PresetBtn" >我要购买</a>
            {/if}
          </div>
        </div>
      </div>
      {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="spotcontent"}
      <!-- 导航随屏置顶结束 -->
      <div class="ctd-main"> 
        <!--门票详情 开始-->
        <div class="ctd-content">
          <div class="ctd-chapter"><a class="ctd-anchor0" href="#" id="p0"></a>
            <div class="ticketM-tit"> <span><i class="detail-icon-1"> 交通指南 </i> <i class="detail-icon-t"> </i> </span></div>
            <div class="ctd-con"  >
              <p id="destmap" style="width:830px;height: 420px"></p>
            </div>
          </div>
          <div class="ctd-chapter"><a class="ctd-anchor0" href="#" id="p1"></a>
            <div class="ticketM-tit"> <span> <i class="detail-icon-2"> 景区简介 </i> <i class="detail-icon-t"> </i> </span></div>
            <div class="ctd-con">
              {$spotcontent[0]['content']}
            </div>
          </div>
          <div class="ctd-chapter"><a class="ctd-anchor0" href="#" id="p2"></a>
            <div class="ticketM-tit"> <span><i class="detail-icon-3"> 购买须知 </i> <i class="detail-icon-t"> </i></span> </div>
            <div class="ctd-con">
              {$spotcontent[1]['content']}
            </div>
          </div>
          <div class="ctd-chapter"><a class="ctd-anchor0" href="#" id="p3"></a>
            <div class="ticketM-tit"> <span> <i class="detail-icon-4"> 用户点评 </i> <i class="detail-icon-t"> </i> </span></div>
            <div class="ctd-comment">
              <div class="ebmc-content">
                <div class="ebm-title">发表评论</div>
                <div class="nchcomments-box nch-box"> <a title="" class="nchimg"><img src="{if $user['litpic']}{$user['litpic']}{else}{Common::nopic()}{/if}"></a>
                  <div class="nchtextarea right"> <i class="tip-icon--left-sangle"></i>
                    <textarea class="ebmc-textarea" cols="30" rows="10" placeholder="说点什么吧..."  maxlength="500" id="report_area" onkeyup="zifu(this)"></textarea>
                    <span class="tbmac-tip tbmac-tip-normal">已输入<b><em>0</em>/500</b>字</span> </div>
                  <div class="clearfix"></div>
                </div>
                <div class="ebmc-info"> <a href="javascript:;" class="ebmc-button tj-btn">评论</a> </div>
              </div>


              <div class="ebmc-list">
                <ul id="result_list">

                </ul>
                <div class="pages Pagination" >

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ctd-side">
        <div class="side-box sid-Recommend">
          <h4>热卖门票推荐</h4>
          <ul>
            {st:spot action="query" flag="order" row="4" return="spotlist"}

            {loop $spotlist $spot}
            <a href="{$spot['url']}" title="{$spot['title']}">
            <li>
              <div class="note-img"><img src="{Common::img($spot['litpic'])}"/><div class="note-price"><strong>{if !empty($spot['mdd'])}{$spot['mdd']}{/if} </strong>{if !empty($spot['price'])}<span>￥<em>{$spot['price']}</em></span>{else}<span>&nbsp;&nbsp;&nbsp;&nbsp;电询</span>{/if} </div></div>
              <div class="note-con">                
                <h5>{$spot['title']}</h5>
              </div>
            </li>
            </a>
            {/loop}

            {/st}
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</div>
{request "pub/footer"}
<!-----评论用到的参数-------->
<input type="hidden" id="dockid" value="0"/>
<input type="hidden" id="user" value="{$userinfo['mid']}"/>
<input type="hidden" id="productid" value="{$info['id']}"/>
<!-----评论用到的参数-------->
<!----分页----->
<input type="hidden" name="offset" id="offset" value="">
<input type="hidden" name="page" id="page" value="1">
<input type='hidden' id='next1' value="">
<!----分页------->
</body>
</html>
{Common::js('floatmenu/floatmenu.js,myjs/jquery.jcarousel.min.js,myjs/jcarousel.connected-carousels.js')}

{Common::css('/res/js/floatmenu/floatmenu.css',0,0)}

{Common::js('SuperSlide.min.js,template.js,scorll.img.js')}

{Common::js('layer/layer.js',0)}

<script type="text/javascript">

  $(document).ready(function(){

    //内容切换
    var  report_area = $("#report_area");
    zifu(report_area);
    $.floatMenu({

      menuContain : '.tabnav-list',

      tabItem : 'span',

      chooseClass : 'on',

      contentContain : '.tabbox-list',

      itemClass : '.tabcon-list'

    });
    //fengjsihu 08.01  start
    $('.a_judges').click(function(){
      var  limit  = $(this).attr('data-id');

      if(limit==0) {
        var text = $(this).find('span').text();
        var spot_id = '<?php echo $info['id'];?>';
        var url = '/spot/ajax_recommendnum?rem=' + text;
        $.ajax({
          type: "GET",
          url: url,
          dataType: "json",
          data: {rem: text, spotid: spot_id},
          success: function (data) {
            if(data['status']==0){
              alert(data['mes']);
              $('.a_judges').css('background-position', '25px -200px');
            }
            else {
            
              $('.a_judges').find('span').text(data['num']);
              $('.a_judges').css('background-position', '25px -200px');
              $('#ip').val(data['ip']);
              $('.a_judges').attr('data-id', '1');
            }
          }
        });
      }else{
        alert("您已推荐了")
      }

    });
    //==========end
    //套餐点击

    $(".type-tit").click(function(){

      $(this).parents('tr').first().next().toggle();

    })

    //预订

    $(".booking-btn").click(function(){

      var suitid = $(this).attr('data-suitid');

      var productid = $("#productid").val();

      var url = SITEURL+'spot/book/?suitid='+suitid+"&productid="+productid;

      window.location.href = url;

    })

    // $(".type-tit").first().trigger('click');

  });
  function zifu(th){
    var thisval=$(th).val().length*1;
    var shengyu = 500-thisval;
    if(shengyu>0) {
      var html = "已输入<b><em>" + thisval + "</em>/" + shengyu + "</b>字";
      $(th).next('span').html(html);
    }else{
      layer.msg('{__("不能输入了")}', {
        icon: 5
      })
      return false;
    }
  }
</script>

<script>
  $(function(){

    //回复
    $(".reply_btn").click(function(){

      $("#dockid").val($(this).attr('data-replyid'));

    })
    //登陆状态
    $.ajax({
      type:"POST",
      url:SITEURL+"member/login/ajax_is_login",
      dataType:'json',
      success:function(data){

        if(data.status){
          var txt = data.user.mid;
        }else{
          var txt = '';
        }
        $("#user").val(txt);
      }

    })
    //提交问答
    $(".tj-btn").click(function(){
      var user      = $("#user").val();
      var urls      = window.location.href;//获取当前页面的地址 当做重定向地址
      if(user.length==0){
        var url = '/member/login/?redirecturl='+urls;//
        window.location.href  =url ;
      }else {
        var articleid = $("#productid").val();
        var dockid = $("#dockid").val();
        var checkcode = $("#checkcode").val();
        var typeid = 5;
        var nickname = $("#nickname").val();
        var content = $("#report_area").val();

        if (content.length < 5) {
          layer.msg('{__("reply_not_empty")}', {
            icon: 5

          })
          return false;
        }
//        if (checkcode == '') {
//          layer.msg('{__("checkcode_empty")}', {
//            icon: 5
//
//
//          })
//          return false;
//        }
        $.ajax({
          type: 'POST',
          url: SITEURL + 'spot/ajax_add_comment',
          data: {
            articleid: articleid,
            content: content,
            checkcode: checkcode,
            nickname: nickname,
            typeid: typeid,
            dockid: dockid
          },
          success: function (data) {
            if (data == 1) {
              layer.msg('{__("checkcode_error")}', {
                icon: 5


              })
              //重新加载验证码
              $("#imgcheckcode").attr('src', "{$cmsurl}captcha?" + Math.random());

            } else if (data == 3) {

              layer.msg('{__("reply_success")}', {
                icon: 6,
                time: 1500
              });
              location.reload();
            } else {
              layer.msg('{__("reply_failure")}', {
                icon: 5
              })
            }
            $("#limit").val(1);//在每个 模块的的show 页面都要写上这个

          }

        })

      }
    })
  });
</script>
<script type="text/javascript">

  var map = new BMap.Map("destmap");

  // var point = new BMap.Point(103.928015,33.271453);

  var point = new BMap.Point({$info['lng']},{$info['lat']});

   map.centerAndZoom(point, 15);

  //map.addOverlay(new BMap.Marker(point));

  //==========================================

  // 添加全景设置

  map.enableScrollWheelZoom(true);

  // 覆盖区域图层测试

  map.addTileLayer(new BMap.PanoramaCoverageLayer());



  var stCtrl = new BMap.PanoramaControl(); //构造全景控件

  stCtrl.setOffset(new BMap.Size(20, 20));

  map.addControl(stCtrl);//添加全景控件

  //============================================

  map.centerAndZoom(point, 16);

  var marker = new BMap.Marker(point);

  map.addOverlay(marker);

  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

  //============================================

  var opts = {

    width : 300,     // 信息窗口宽度

    height: 125,     // 信息窗口高度

    title : "<a href='#' style='color:#4D4D4D;display:block;margin-bottom:5px' id='bt'>{$info['title']}</a>"  // 信息窗口标题

  }

  //var img  = document.getElementsByName("img");

  var mcon ="<span style='font-size:12px;color:#4D4D4D'>景区地址：{$info['address']}</span><br/><span style='font-size:11.4px;color:#4D4D4D'>景区简介：{Common::cutstr_html($info['content'],42)}</span>";

  var infoWindow = new BMap.InfoWindow(mcon, opts);  // 创建信息窗口对象

  map.openInfoWindow(infoWindow, map.getCenter());      // 打开信息窗口

  //===========================================

  //控件

  map.addControl(new BMap.NavigationControl());//地图平移缩放控件

  map.addControl(new BMap.ScaleControl());   //比例尺控件，默认位于地图左下方，显示地图的比例关系

  map.addControl(new BMap.OverviewMapControl());//缩略地图控件，默认位于地图右下方，是一个可折叠的缩略地图

  //map.addControl(new BMap.CopyrightControl());

  map.addControl(new BMap.GeolocationControl());//定位控件，针对移动端开发，默认位于地图左下方

  //===============================================

  //自定义控件

  function ZoomControl(){

    this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;

    this.defaultOffset = new BMap.Size(10, 10);

  }

  ZoomControl.prototype = new BMap.Control();

  ZoomControl.prototype.initialize = function(map){

    var div = document.createElement("div");

    div.appendChild(document.createTextNode("放大2级"));

    div.style.cursor = "pointer";

    div.style.border = "1px solid gray";

    div.style.backgroundColor = "white";

    div.onclick = function(e){

      map.zoomTo(map.getZoom() + 2);

    }

    map.getContainer().appendChild(div);

    return div;

  }

  var myZoomCtrl = new ZoomControl();

  //===============================================

</script>
<script type="text/javascript">
  var pagesize  = 5;//0;//0;//0;//每页的页数

  $(document).ready(function(){
    $(function () {
      var  s ='';
      //第一次加载数据
      get_data(s);

    });

  });
  function get_data(s) {

    var offset    = $("#offset").val().length==""? 0:$("#offset").val();//  每页的开始 也是 limit 第1个参数

    var articleid = "{$info['id']}";//   门票的 id

    var typeid    = "{$typeid}";//  模型的 id

    $.ajax({
      type: "POST",
      url: SITEURL + 'article/ajax_get_comment',
      async:false,
      dataType: "json",
      data: {pagesize:pagesize,offset:offset,articled:articleid,typeid:typeid},
      success: function(data){

        var page1      =$("#page").val()*1;//   当前页面
        var itemHtml = "";
        var pages    = "";
        $("#result_list").empty();
        $(".Pagination").empty();
        if(s==''){
        }else if(s=='pre'){
          $("#page").val(page1*1-1);
        }else if(s=='next'){
          $("#page").val(page1*1+1);
        }else{
          $("#page").val(s*1);
        }
//        var  page3 =  $("#page").val()*1;//   当前页面
//        var  p    = (page3-1)*pagesize;
        if(data.length!=0){
          for(var i=0;i<data.length;i++){

            itemHtml +="<li>";

            if(data[i].litpic==null){
              itemHtml +="<div class='user-img'><img src='{Common::nopic()}'></div>";
            }else{
              itemHtml +="<div class='user-img'><img src='"+data[i].litpic+"'></div>";
            }

            if(data[i].nickname==null){

              itemHtml +="<div class='textarea-box'> <span class='comments-name'>"+data[i].wx_nickname+"</span>";

            }else{
              itemHtml +="<div class='textarea-box'> <span class='comments-name'>"+data[i].nickname+"</span>";
            }

            itemHtml +="<span class='comments-h2'>"+data[i].content+"</span>";
            itemHtml +="<span class='comments-time'>"+data[i].addtime+"</span></div>";
            itemHtml +="</li>";
          }
        }else{
          itemHtml +="<li>";
          itemHtml +="没有相关数据";
          itemHtml +="</li>";
        }

        var page2      =$("#page").val()*1;//   当前页面
        //  定义 系数
        var coefficient = Math.floor((page2-1)/pagesize);
        //   定义 开始和结束 页面
        var startpage    = coefficient*pagesize+1;
        var endpage      = coefficient*pagesize+2;
        endpage   =  endpage>data[0]['totalpage'] ? data[0]['totalpage'] : endpage;
        if(data[0]['totalpage']!=0){
          pages  +="<div id='Pagination'><div class='pagination'>";
          pages  +="<a class='uPrevpage' onclick='page(1)'><i></i>首页</a>";
          pages  += "<a class='uPrevpage' onclick='pre()'><i></i>上一页</a>";

          for(var j=startpage;j<=endpage;j++){

            pages  += "<a href='javascript:' onclick='page("+j+")' ";
            if(page2==j) {
              pages += " class='current' ";
            }
            pages  += ">"+j+"</a>" ;

          }
          pages  += "<a class='next' onclick='next()'>下一页 <i></i></a>";
          pages  += "<a class='next' onclick='page("+data[0]['totalpage']+")'>尾页 <i></i></a>";

          pages  += "</div></div>";

          pages  += "<div class='searchPage'>";

          pages  += "<span class='page-sum'>共<strong class='allPage'>"+data[0]['totalpage']+"</strong>页</span>";

          pages  += "<span class='page-go'>跳转<input type='text'>页</span>";

          pages  += "<a href='javascript:;' class='page-btn' data-all='"+data[0]['totalpage']+"' onclick='skip(this)'>GO</a>";

          pages  += "</div>&nbsp;&nbsp;";

        }
        $("#result_list").append(itemHtml);

        $(".Pagination").append(pages);

        $("#next1").val(data[0]['totalpage']);
      }
    });
  }
  function page(s){
    var offset ="";
    offset = (s*1-1) * pagesize;//  2 位每页显示数；
    $("#offset").val(offset);
    get_data(s);
  }
  function pre(){
    var offset ="";
    var s   ='pre';
    var cur_page    = $("#page").val();
    var prepage = cur_page*1-1;
    if(prepage==0){
      return false;
    }else {
      offset = (prepage - 1) * pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  function next(){
    var offset ="";
    var s   ='next';
    // var cur_page    = $(".on").attr("data-page");
    var cur_page    = $("#page").val()*1;//attr("data-page");
    var total    = $("#next1").val()*1;//("data-total")*1;
    var nextpage = cur_page*1+1;
    if(total+1<=nextpage){
      return false;
    }else{
      offset =(nextpage-1)*pagesize;//  2 位每页显示数；
      $("#offset").val(offset);
      get_data(s);
    }
  }
  /*
   跳转
   */
  function  skip(th){
    var  pages =  $(th).prev('span').find('input').val()*1;

    if(!isNaN(pages)){
      var  allpages = $(th).attr('data-all')*1;
      if(pages<1){layer.msg('{__("请输入 数字")}', {icon: 5  }); return false;}
      if( pages >allpages){layer.msg('{__("请输入 数字")}', {icon: 5  }); return false;}
      page(pages);
    }else{
      layer.msg('{__("请输入 数字")}', {
        icon: 5
      })
    }
  }

</script>
<script type="text/javascript">

//  $(function(){
//
//    var toTopHeight = $("#mymune").offset().top;
//    //====================06.30 fengjishu
//    $("#me_comment").click(function(){
//      $("#content").focus();
//    });
//    //====================06.30 fengjishu
//    //================================06.29 fengjishu start
////        var total       = $("#total").val();
////        alert(total);
////        if(total.length==0){//06.30 增加
////            $("#totalNumber").text(0);
////
////        }else{
////            $("#totalNumber").text("("+total+")");
////        }
//
//    $(".dp-c").click(function(){
//
//      //  var url = window.location.href;
//
//      // if(url_search.length==0){
//      var urls = "/spots/show_{$info[id]}.html?time_sort=desc";
//      //  }else{
//      //   var urls = url+"&time_sort=desc";
//      //   }
//      window.location.href =urls;
//    });
//    $(".dp-au").click(function(){
//      var url ='/spots/show_{$info[id]}.html';
//      window.location.href =url;
//    });
//    //=================================06.29 fengishu end
//    $(window).scroll(function() {
//
//      $("#red-big-btn").hide();
//
//      if( $(document).scrollTop() > toTopHeight ){
//
//        if ('undefined' == typeof(document.body.style.maxHeight)) {	//检测是否为IE6。jQuery1.9中去掉了msie的方法，所以只好这样写
//
//          var scrollTop = $(document).scrollTop();
//
//          $("#mymune").css({'position':'absolute','top':scrollTop+'px'});
//        }
//
//        else{
//
//          $("#mymune").addClass("nav_fixed");
//
//          $("#naw-w").removeClass("nav_a");
//
//          $("#naw-w").addClass("nav_f");
//
//          $("#red-big-btn").show();
//
//        }
//
//      }
//
//      else{
//
//        if ('undefined' == typeof(document.body.style.maxHeight)) {
//
//          $("#mymune").css({'position':'absolute','top':toTopHeight+'px'});
//
//        }else{
//
//          $("#mymune").removeClass("nav_fixed");
//
//          $("#naw-w").removeClass("nav_a");
//
//          $("#naw-w").addClass("nav_f");
//
//          $("#red-big-btn").show();
//
//        }
//
//        $("#naw-w").addClass("nav_a");
//
//        $("#red-big-btn").hide();
//
//      }
//
//    });
//
//    $('#mynav').find("li:first").addClass("current")
//
//    var $li = $('#mynav li');
//
//    $li.click(function(){
//
//      var $this = $(this);
//
//      var $t = $this.index();
//
//      $li.removeClass();
//
//      $this.addClass('current');
//
//      $ul.css('display','none');
//
//      $ul.eq($t).css('display','block');
//
//    })
//
//
//
//  });

</script>