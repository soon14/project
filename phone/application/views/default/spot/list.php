<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>景区门票</title>
<link rel="stylesheet" type="text/css" href="/res/css/phone/global.css" /><!-- css库 -->
<link rel="stylesheet" type="text/css" href="/res/css/phone/serch-phone.css" /><!-- 布局版面 CSS 文件-->
<script src="/res/js/phone/jquery-1.8.3.min.js"></script> <!-- jQuery库 -->
<script src="/res/js/phone/rosestrap-min.js"></script><!-- 常用jQuery库 -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Nv7ePdYOGgT28WZqsGZOeBuH"></script>
    {Common::js('jquery.min.js,amazeui.js,template.js')}
    {Common::js('layer/layer.m.js')}

<style>
    .tuan_more {
        display: block;
        width: 100%;
        margin: 1.5rem 0;
        text-align: center;
    }
    .cursor{
        padding: 10px;
        border: 1px solid #666;
        cursor: pointer;
    }
    .show-more {
        width: 100%;
        text-align: center;
        height: 40px;
        line-height: 40px;
        margin: 10px 0;
        background: url(/res/images/phone/back3.png) no-repeat center 10px;
        margin: 0 auto;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
    }
    .show-more a {
        display: block;
        color: #666;
    }
    .on{
        background:#B5CE6B;
    }
    .ontheme{
        background: #6CC1DA;
    }
    .ongreat{
        background: #D87EC2;
    }
    .cursor:hover{
    }</style>
</head>
<body style="background:#f0f0f0;">

<header>
<div class="order-head1"><a class="back-home" href="/phone/spots/"></a>
  <input name="textfield" type="text" class="seach-input" id="textfield" placeholder="目的地/景区/酒店">
</div>
</header>

<section>
<div class="classify">
<div class="nav">
  <ul class="tabs"  id="tabs001">
    <li class="{if $pinyin}current{/if}"><a href="javascript:" id="change_mdd">{$destnam}<i></i></a></li>
    <li class="{if $themeid||$attrId>25||($attrId<20&&$attrId>0)}current{/if}"><a href="javascript:" id="change_theme">{if $theme!=''}{$theme}{else}{if $attrId>25}{$atr}{else}{if $attrId>0&&$attrId<20}{$atr}{else}景点主题{/if}{/if}{/if}<i></i></a></li>
    <li class="{if $greatid||($attrId>19&&$attrId<26)}current{/if}"><a href="javascript:" id="change_great">{if $grea!=''}{$grea}{elseif $attrId>19&&$attrId<26}{$atr}{else}景点等级{/if}<i></i></a></li>
    <div class="clearfix"></div>
  </ul>
</div>
<div class="tab-content" id="tab-content001">
        <div class="tab-pane">
            <div class="search-down">
                <ul>
                    {st:dest action="query" flag="dest" pid="0" typeid="$typeid" row="99"}
                    {loop $data $dest}
                    <li name="mdd" class="s" data-id="{$dest['id']}" data-title="{$dest['pinyin']}" style="cursor: pointer" data-kname="{$dest['kindname']}" onclick="s()">{$dest['kindname']}</li>
                    {/loop}
                    {/st}
                </ul>
            </div>
        </div>
        <div class="tab-pane">
            <div class="search-down">
                <ul>
                    {loop $spat1 $sp}
                    <li name="theme" data-id="{$sp['id']}" style="cursor: pointer" data-title="{$sp['attrname']}">{$sp['attrname']}</li>
                    {/loop}
                </ul>
            </div>  </div>
        <div class="tab-pane">
            <div class="search-down">
                <ul>
                    {loop $spat2 $sp}
                    <li name="grate" data-id="{$sp['id']}" style="cursor: pointer" data-title="{$sp['attrname']}">{$sp['attrname']}</li>
                    {/loop}
                </ul>
            </div>
        </div>

</div>

</div>
        
<!-- 左图右字列表开始 -->
    <div class="listLR-item" style="z-index: 1000">
        <ul id="result_list">
        </ul>
        <!--左图右字列表结束 -->
        <div  id="btn_getmore" class="show-more"><a href="javascript:">加载更多</a>
        </div>
    </div>
   <!-- <ul id="result_list">
    </ul>-->

    <div class="no-content" id="no-content" style="display: none; text-align:center;">
        <img src="{$GLOBALS['cfg_public_url']}images/nocon.png" width="80%"/>
        <p style="text-align:center; padding:10px;">啊哦，暂时没有相关信息</p>
    </div>
    <input type="hidden" id="keyword" value="{$keyword}"/>
    <input type="hidden" id="pinyin" value="{$pinyin}"/>
    {if $attrId>25||($attrId>0&&$attrId<20)}
    <input type="hidden" id="themeid" value="{$attrId}"/>
    <input type="hidden" id="greatid" value=""/>
    {/if}
    {if $attrId>19&&$attrId<26}
    <input type="hidden" id="greatid" value="{$attrId}"/>
    <input type="hidden" id="greatid" value=""/>
    {/if}
    {if $attrId==''}
    <input type="hidden" id="themeid" value="{$themeid}"/>
    <input type="hidden" id="greatid" value="{$greatid}"/>
    {/if}
    <input type="hidden" id="attrid" value="{if $themeid&&$greatid}{$themeid}_{$greatid}{else}{if $greatid}{$greatid}{elseif $themeid}{$themeid}{elseif $attrId}{$attrId}{/if}{/if}"/>
    <input type="hidden" id="page" value="1"/>
    <div id ="allmap"></div>
    <script type="text/html" id="tpl_hotel_item">
        {{each list as value i}}
        <a target="_blank" href="{{value.url}}" title="">
            <li>
                <div class="img-item"><img src="{{value.litpic}}" alt="{{value.title}}"></div>
                <div class="txt-item">
                    <h2 class="title-item"><span>{{value.title}}</span></h2>

                    <div class="about-item">
                        <dfn class="total-font" id="total_item_1">{if value.price}￥{{value.price}}{else}电询{/if}</dfn> <del>¥{{value.sellprice}}</del> <span>已售{{value.sellnum}}</span>
                    </div>

                    <div class="address" data-lng="{{value.lng}}" data-lat="{{value.lat}}">{{value.kindlist}}&nbsp;&nbsp;<span></span></div>
                </div>
                <div class="cl"></div>
            </li>
        </a>
        {{/each}}
    </script>
</section>


<script type="text/javascript">
$(document).ready(function(){
    var initpage = '{$page}';
    $(function () {
        if(initpage !=  $("#page").val()){
            $("#page").val(initpage);
        }
        //获取更新数据
        $('#btn_getmore').click(function () {
            get_data();
        })
        //第一次加载数据
        get_data();
        allmap();
    });
    //获取list地址
    function get_url() {
        //获取选中的目的地
        var pinyin = $("#pinyin").val();
        if(pinyin.length==0){
           var  url ='all';
        }else{
            var url = pinyin;
        }
        //获取priceid
        //var priceid = $("#priceid").val();
        var priceid =0;
        //获取选中的属性
        var attrid =$("#attrid").val();
        //排序规则
        //var sorttype = $("#sorttype").val();
        var  sorttype  = 0;//1是特价排序 2 价格  3是销量 4是人气 5是满意度
        //搜索名称
        var keyword = $('#keyword').val();
        //当前页 page
        var page = $("#page").val();
        keyword = keyword == '' ? 0 : keyword;
        url += '-' + priceid + '-' + sorttype + '-0-' + attrid + '-' + page + '?keyword=' + encodeURIComponent(keyword);;
        return url;
    }
    //ajax获取数据
    var contentNum = 0;
    function get_data() {
        var paramUrl = get_url();
        var url = '/phone/spot/ajax_spot_more/'+paramUrl;
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
            allmap();
            layer.closeAll();
        });
    }
    $("#textfield").click(function(){
      window.open("/phone/spot/search");
    });

    //目的地点击
    $("li[name=mdd]").click(function(){
       // var themeid = $("#themeid").val();
        //var greatid = $("#greatid").val();
        var url = '/phone/spots/'+$(this).attr('data-id')+'?pinyin='+$(this).attr('data-title');//+'&themeid='+themeid+'&greatid='+greatid;
        window.location.href = url;
    });

    //属性点击
    $("li[name=theme]").click(function(){
        var pinyin  = $("#pinyin").val();
        var greatid = $("#greatid").val();
        var attrid  = $(this).attr('data-id');
        var url     = '/phone/spots/all-0-0-0-'+attrid+'?themeid='+attrid+'&pinyin='+pinyin+'&greatid='+greatid;
        window.location.href = url;
    });
    //等级点击
    $("li[name=grate]").click(function(){
        var themeid = $("#themeid").val();
        var pinyin  = $("#pinyin").val();
        var attrid = $(this).attr('data-id');
        var url = '/phone/spots/all-0-0-0-'+attrid+'?greatid='+attrid+'&themeid='+themeid+'&pinyin='+pinyin;
        window.location.href = url;
    });
    function tabs(tabTit,tabCon){
        $("body").css({overflow:"hidden"});

        $(".classify").css("top",46);
        $(".listLR-item").css("top",85);
        $(".tab-content").css("top",87);
        $(".no-content").css("top",85);
        $(tabTit).children().click(function(){
            if($(this).hasClass("current"))			{
                $(this).toggleClass("current").siblings().removeClass("current");
                $(this).children().children().toggleClass("on");
                $(".classify").css("z-index",1001);
                $(tabCon).toggle();
                var index = $(tabTit).children().index(this);
                $(tabCon).children().eq(index).addClass("active").siblings().removeClass("active");
            }
            else
            {
                $(this).addClass("current").siblings().removeClass("current");
                $(this).children().children().addClass("on");
                $(".classify").css("z-index",1001);
                $(tabCon).show();

                var index = $(tabTit).children().index(this);
                $(tabCon).children().eq(index).addClass("active").siblings().removeClass("active");
            }
        });
        $(tabCon).children().children().click(function(){
            $(tabCon).hide();
            $(".classify").css("z-index",999);
            $(tabTit).children().children().children().removeClass("on");
            $(tabTit).children().removeClass("current");
        });

    };
    tabs("#tabs001","#tab-content001");
});
</script>

</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
  function allmap() {
      var map = new BMap.Map("allmap");
      var point = new BMap.Point(116.331398, 39.897445);
      map.centerAndZoom(point, 12);
      var geolocation = new BMap.Geolocation();
      geolocation.getCurrentPosition(function (r) {
          if (this.getStatus() == BMAP_STATUS_SUCCESS) {
              var mk = new BMap.Marker(r.point);
              map.addOverlay(mk);

              map.panTo(r.point);//当前位置的经纬度；
              var pointB = new BMap.Point(r.point.lng, r.point.lat);
              $('.address').each(function () {
                  var mdd_lng = $(this).attr('data-lng');
                  var mdd_lat = $(this).attr('data-lat');
                  var pointA = new BMap.Point(mdd_lng, mdd_lat);
                  var distance = (map.getDistance(pointA, pointB) * 1 / 1000).toFixed(0);
                  $(this).find('span').text(distance + " km");

              });
          }
          else {
              alert('failed' + this.getStatus());
          }
      }, {enableHighAccuracy: true})

  }
</script>
