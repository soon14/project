<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>景区门票</title>
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
<link rel="stylesheet" type="text/css" href="/res/css/phone/global.css" />
<link rel="stylesheet" type="text/css" href="/res/css/phone/ticket-phone.css" />
<script src="/res/js/phone/jquery-1.8.3.min.js"></script><!-- jQuery库 -->
<script src="/res/js/phone/rosestrap-min.js"></script><!-- 常用jQuery库 -->
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
 <script type="text/javascript">
//JQuery
//li最后一行无边线
$(document).ready(function(){
	 $(".listLR-item li:last").css("border-bottom","none")
});
</script>
    {Common::js('jquery.min.js,amazeui.js,template.js')}
    <style>
        .show-more{ width:100%; text-align:center; height:40px; line-height:40px; margin:10px 0; background:url(/res/images/phone/back3.png) no-repeat center  10px;  margin:0 auto; border-top:1px solid #ccc;border-bottom:1px solid #ccc;}
    </style>
</head>
<body>
{request "pub/header/typeid/$typeid/isshowpage/1"}
<div class="banner">
    <img src="{Common::img($info['piclist'][0][0],640,300)}" width="100%" >
  <div class="ticke-tit">
    <p>{$info['title']}</p>
  </div>
</div>
<section>
  <div class="container-fluid ticke-box">
    <div class="classify">
      <div class="sales">销量<i>{$info['sellnum']}</i></div>
      <div class="score">评分<i>{$info['satisfyscore']}</i></div>
      <div class="evaluate">评价<i>{$info['commentnum']}</i></div>
    </div>
    <div class="address1" style="cursor: pointer;">{$info['address']}<i></i></div>
    <div class="time1">营业时间:{$extendinfo['e_business_time']}</div>
  </div>
    <!-- tab切换开始 -->
    <div class="fixedTabbox">
      <ul class="tab">
        <li class="current"><a href="javascript:;">订&nbsp;&nbsp;&nbsp;&nbsp;票</a></li>
        <li><a href="javascript:;">景区介绍</a></li>
        <li><a href="javascript:;">用户点评<i></i></a></li>
      </ul>
      <div class="tab-container">
       <div class="tab-content" style="display:block;">
        {loop $ticketInfo $tf}
       <div class="container-fluid ticke-box"> 
          <div class="show-name"><h2 class="ico04">{$tf['kindname']}</h2></div>
          <div class="order-ticket">
            <div class="order-ticket-l">
            <a href="/phone/spot/TicketDes?tid={$tf['id']}">
              <h2>{$tf['title']}</h2>
              <div class="order-time">当日17：00以前可订票</div>
              <div class="detil-a" data-id="{$tf['id']}" name="{$tf['title']}" style="color:#00a8ef">门票说明></div>
            </a>
            </div>
            <div class="order-but">
              <del>¥{$tf['sellprice']}</del>
              <strong class="order-price" ><span>¥</span>{$tf['price']}</strong>
              <a href="/phone/spot/book/id/{$info['id']}?suitid={$tf['id']}&title={$tf['title']}">
              <div class="but-top">预定</div>
              <div class="but-bot">{if $tf['paytype']==4}景区支付{else}在线支付{/if}</div>
              </a> 
             </div>
          <div class="cl"></div>
          </div>
       </div>
       {/loop}
          <div class="container-fluid ticke-box">        
          <div class="show-name"><h2 class="ico02">预定须知</h2></div> 
          <div class="Booking-otes">
              {$info['booknotice']}
          </div>
          </div>

          <div class="container-fluid ticke-box"> 
          <div class="ticket-name"><h2>本季热门景区</h2></div>
          <div class="listLR-item">
  <ul>
      {st:spot action="query" flag="order" row="3"}
      {loop $data $row}
    <li data-url ="{$row['url']}" class="li_url">
      <div class="img-item"><a target="_blank" href="{$row['url']}" title=""><img src="{Common::img($row['litpic'],302,180)}"></a></div>
      <div class="txt-item">
        <h2 class="title-item"><a target="_blank" href="{$row['url']}" title="">{$row['title']}</a></h2>
        <div class="about-item">
         <dfn class="total-font" id="total_item_1">{if $row['price']}￥{$row['price']}{else}电询{/if}</dfn> <del>¥{$row['sellprice']}</del> <span>已售{$row['sellnum']}</span>
        </div>
         <div class="address" data-lng="{$row['lng']}" data-lat="{$row['lat']}"><!--北京 50m-->{$row['kindlist']}&nbsp;&nbsp;&nbsp;&nbsp;<span></span></div>
      </div>
      <div class="cl"></div>
    </li>
    {/loop}
    {/st}
  </ul>
    <div id ="allmap"></div>
    <div class="show-more"><a href="{$cmsurl}spots/all" style="color: #666">显示更多</a></div>
</div>
          </div>
         </div>
          <div class="tab-content" >
          <div class="container-fluid ticke-box"> 
          <div class="show-name">
              <h2 class="ico01">景区简介</h2>
            </div>
            <div class="con-box">
                {$info['content']}
            </div>
          </div>
          </div>
          <div class="tab-content">
          <div class="container-fluid ticke-box"> 
          <div class="show-name">
            <h2 class="ico03">用户评价</h2>
          </div>
            <div class="info_list mtop" id="dp_list">
            </div>
              <!--div class="tuan_more" id="btn_getmore"><a href="javascript:" class="cursor" style="color: #666">加载更多</a></div-->
          </div>
          </div>
        </div>
      </div>

    <!-- tab切换结束 -->   
  </div>
</section>
<input type="hidden" id="articleid" value="{$info['id']}"/>
<input type="hidden" id="typeid" value="{$typeid}"/>
<input type="hidden" id="page" value="1"/>
<script type="text/html" id="tpl_comment">
    {{each list as value i}}
    <div class="down_mid" style="border-bottom: 1px dashed #666">
        <div class="useful" style="padding-top: 10px">{if value.tel}{{value.tel}}{else}匿名{/if}</div>
<!--        <div class="star">-->
<!--            <div class="vote-star"><i style="width:50%"></i></div>-->
<!--            <span>满意度：{{value.score}}</span> </div>-->
        <div class="dp-c-name">
            <p>{{value.content}}</p>
        </div>
        <div class="dp-time">{{value.addtime}}发表</div>
        <!--div class="answer">
            <dnf>回复:</dnf>
            <span>谢谢您的发表,我们会继续努力为大家服务!谢谢服务!</span> <i>2016-03-06 回复</i> </div-->
    </div>
    {{/each}}
</script>

<script>
    $(function(){

        get_pinlun();
        //滚动加载内容
        $(window).scroll(function(){
            // 当滚动到最底部以上100像素时， 加载新内容
            if ($(document).height() - $(this).scrollTop() - $(this).height()<100){
                get_pinlun();
            }
        });
    })

    function get_pinlun()
    {
        var articleid = $("#articleid").val();
        var typeid = $("#typeid").val();
        var page = Number($("#page").val());
        var url = SITEURL+'pub/ajax_comment';
        $.getJSON(url,{articleid:articleid,typeid:typeid,page:page},function(data){
            if(data){
                var html = template("tpl_comment",data);
                $("#dp_list").append(html);
                $("#page").val(page+1)
            }
        })
    }
    //====================
    $(".li_url").click(function(){
        var url =$(this).attr('data-url');
        window.location.href =url;
    });
    //===========================
    $(".address1").click(function(){
        var url = "/phone/spot/map?aid={$aid}";
        window.location.href = url;
    });
//    $(".detil-a").click(function(){
//        var ticket_id = $(this).attr("data-id");
//        alert(ticket_id);
//      //  var  url      = "/phone/spot/TicketDes?tid="+ticket_id;
//       // window.location.href = url;
//    });
    //===========================
    function tabs(tabTit,on,tabCon){
        $(tabTit).children().click(function(){
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
           	$(tabCon).eq(index).show().siblings().hide();
    	});
	};
    tabs(".fixedTabbox .tab","current",".tab-content");

</script>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能

    var map = new BMap.Map("allmap");
    var point = new BMap.Point(116.331398,39.897445);
    map.centerAndZoom(point,12);
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            var pointB = new BMap.Point(r.point.lng,r.point.lat);
            map.panTo(r.point);//当前位置的经纬度；
            $('.address').each(function(){
                var mdd_lng = $(this).attr('data-lng');
                var mdd_lat = $(this).attr('data-lat');
                var pointA = new BMap.Point(mdd_lng,mdd_lat);
                var distance = (map.getDistance(pointA,pointB)*1/1000).toFixed(0);
                $(this).find('span').text(distance+" km");

            });
//            var pointA = new BMap.Point(106.486654,29.490295);  // 创建点坐标A--大渡口区
//             // 创建点坐标B--江北区
//            alert(''+(map.getDistance(pointA,pointB)).toFixed(2)+' 米。');
//            alert('您的位置：'+r.point.lng+','+r.point.lat);
        }
        else {
            alert('failed'+this.getStatus());
        }
    },{enableHighAccuracy: true})
    //关于状态码
    //BMAP_STATUS_SUCCESS	检索成功。对应数值“0”。
    //BMAP_STATUS_CITY_LIST	城市列表。对应数值“1”。
    //BMAP_STATUS_UNKNOWN_LOCATION	位置结果未知。对应数值“2”。
    //BMAP_STATUS_UNKNOWN_ROUTE	导航结果未知。对应数值“3”。
    //BMAP_STATUS_INVALID_KEY	非法密钥。对应数值“4”。
    //BMAP_STATUS_INVALID_REQUEST	非法请求。对应数值“5”。
    //BMAP_STATUS_PERMISSION_DENIED	没有权限。对应数值“6”。(自 1.1 新增)
    //BMAP_STATUS_SERVICE_UNAVAILABLE	服务不可用。对应数值“7”。(自 1.1 新增)
    //BMAP_STATUS_TIMEOUT	超时。对应数值“8”。(自 1.1 新增)

</script>