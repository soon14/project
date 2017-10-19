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

  {include "pub/varname"}
  {Common::css('common/bootstrap-min.css,common/public.css,mycss/hotel/Hotel.css')}
  {Common::js('common/jquery-1.11.3.min.js,common/bootsAitto-min.js,hotel/bootstrap-Hotel.js')}
</head>
<body class="Color-fafafa">
<!-- 登陆代码 开始 -->
{request "pub/header"}
<!-- 登陆代码 结束 -->
<div class="notebox"></div>
<!--面包屑 开始-->
<div class="BreadCrumb Color-fff">
  <ul>
    <?php //var_dump($predest);?>
    <li><a href="{$cmsurl}">{$GLOBALS['cfg_indexname']}</a><i class="icon-gt">&gt;</i></li>
    <li><a href="/{$predest[0]['pinyin']}?param=hotel">酒店<i class="arrow"></i></a><i class="icon-gt">&gt;</i></li>
    {loop $predest $dest}
    <li><a href="/{$dest['pinyin']}/?param=hotel">{$dest['kindname']}</a></li>
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
        <h1><em></em>{$info['title']} <span class="J-level">酒店星级：{$info['hotelrank']}</span></h1>
        <div class="J-price">
          <div class="J-priceB" style="padding: 0px;">
            <a href="#orderID" style="padding: 0px 20px;">我要<br>
            预定</a>
          </div>
          <div class="J-priceM">
            {if !empty($info['price'])}<i>¥</i><b>{$info['price']}</b><dfn>/人起</dfn>
            {else}  <span>电询</span>
            {/if}
          </div>
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
        <div class="connected-carousels connected-level"> 
          <!-- 大图 -->
          <div class="stage">
            <div class="carousel carousel-stage" style="height: 330px">
              <ul>
                {loop $info['piclist'] $pic}
                <li><img src="{$pic[0]}" alt="" style="width: 600px"> </li>
                {/loop}

              </ul>
            </div>
          </div>
          <!-- 小图 -->
          <div class="navigation">
          <a href="javascript:;" class="prev prev-navigation"></a> <a href="javascript:;" class="next next-navigation"></a>
            <div class="carousel carousel-navigation">
              <ul>
                {loop $info['piclist'] $pic}
                <li><img src="{$pic[0]}" width="86" height="60" alt=""></li>
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
          <div class="int"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{Common::cutstr_html($info['content'],100)} </div>
          <div class="way"> <i></i>
            <div class="citytit">{$info['address']}</div>
          </div>
          <div class="time"><i></i>
            <div class="citytit">酒店电话:{$info['telephone']}</div>
          </div>
          <div class="preview-a">
            <div class="a-sales">已售{$info['sellnum']}</div>
            <div class="a-score">满意度：5.0</div>
            <div class="a-judge">{$info['recommendnum']}人推荐</div>
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
          <li class="current"><a href="javascript:void(0)" >酒店</a></li>
        </ul>
      </div>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
       <tbody>
                    <tr>
                      <th width="12%">房型</th>
                      <th><div class="text-left">床型</div>
                      </th>
                      <th width="20%">餐标 </th>
                      <th width="10%">宽带 </th>
                      <th width="10%">优惠价 </th>
                      <th width="10%">优惠价 </th>
                      <th width="15%">预定 </th>
                    </tr>
                    {st:hotel action="suit" row="10" productid="$info['id']" return="roomlist"}
<?php //var_dump($roomlist)?>
                    {loop $roomlist $room}
                    <tr>
                      <td><b>{$room['title']}</b></td>
                      <td><div class="text-left">{$room['roomstyle']}</div></td>
                      <td>{$room['breakfirst']}</td>
                      <td>{$room['computer']}</td>
                      <td><del>{if $room['sellprice']}￥{$room['sellprice']}{/if}</del></td>
                      <td><i>{if $room['price']}￥{$room['price']}{/if}</i></td>

<!--                      <td><div class="booking-but" onclick="tishi()"><a class="booking-btn" href="javascript:;" data-suitid="12">在线预定</a></div></td>-->
                      <td>电询</td>
                    </tr>
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
              {st:detailcontent action="get_content" pc="1" typeid="$typeid" productinfo="$info" return="hotelcontent"}

              {loop $hotelcontent $ke $row}
              <li {if $ke<1}class="current"{/if}><a href="#p{$ke+1}" >{$row['chinesename']}</a></li>

              {/loop}

              {/st}
              <li><a href="#p8">用户点评{if !empty($info['commentnum'])}({$info['commentnum']}){/if}</a></li>
            </ul>
            <a href="#orderID" class="btn PresetBtn" >我要购买</a> </div>
        </div>
      </div>
      <!-- 导航随屏置顶结束 -->
      <div class="ctd-main"> 
        <!--门票详情 开始-->
        <div class="ctd-content">
          {loop $hotelcontent $k $hotel}
          <div class="ctd-chapter"><a class="ctd-anchor0" href="#" id="p{$k+1}"></a>
            <div class="ticketM-tit"> <span> <i class="detail-icon-2"> {$hotel['chinesename']}</i> <i class="detail-icon-t"> </i> </span></div>
            <div class="ctd-con">
              {$hotel['content']}
            </div>
          </div>
          {/loop}
          <div class="ctd-chapter"><a class="ctd-anchor0" href="#" id="p8"></a>
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
          {st:hotel action="query" row="4" flag="bookcount" return="hot"}
          <h4>热卖酒店</h4>
          <ul>
            {loop $hot $book}
            <li>
              <div class="note-img"><img src="{$book['litpic']}"/>
                <div class="note-price"><strong>石家庄 </strong><span>{if $book['price']}￥<em>{$book['price']}</em>{else}<em>电询</em>{/if}</span></div>
              </div>
              <div class="note-con">
                <h5>{$book['title']}</h5>
              </div>
            </li>
            {/loop}
          </ul>
          {/st}
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

    return false;
      if(limit==0) {
        var text = $(this).siblings('span').text();
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
              // alert(data['ip']);
              $('.a_judge').find('span').text(data['num']);
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
        var typeid = "{$typeid}";
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
    //套餐点击

    $(".type-tit").click(function(){

      $(this).parents('tr').first().next().toggle();

    })

    //预订

    $(".booking-btn").click(function(){

      var suitid = $(this).attr('data-suitid');

      var productid = $("#productid").val();
      return false;
      var url = SITEURL+'spot/book/?suitid='+suitid+"&productid="+productid;

      window.location.href = url;

    })

    // $(".type-tit").first().trigger('click');

  });
  function tishi(){
    alert('暂时未开放');
  }
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